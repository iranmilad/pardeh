<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class CategoryController extends Controller{

    public function index($slug = null)
    {
        // دریافت تمامی پارامترها از پرس و جوی URL
        $options = request()->all();
        $maxPrice = request()->input('maxprice');
        $minPrice = request()->input('minprice');
        $page = request()->input('page', 1);
        $sort = request()->input('sort');
        $function = request()->input('function');
        $ability = request()->input('ability'); // data value is ability= a,b,c
        $inventory = request()->input('inventory', 0);
        $colorBox = request()->input('colorBox');
        $perPage = 12;

        // یافتن دسته‌بندی مرتبط با نشانه
        $category = null;
        if ($slug !== null) {
            $category = Category::where(['alias' => $slug])->first();
        }

        // اگر دسته‌بندی وجود نداشته باشد، محصولات را برابر با یک آرایه خالی قرار دهید
        if (!$category and $slug) {
            return view('category', [
                'category' => null,
                'products' => collect([]),
                'page' => $page,
                'options' => $options,
                'total' => 0
            ]);
        }
        if ($slug) {
            // استفاده از کوئری برای انتخاب محصولات
            $query = $category->products();
        }
        else{
            $query = Product::query();
        }
        // اعمال فیلتر بر اساس colorBox اگر مقدار آن معتبر باشد
        if ($colorBox) {
            $query->whereHas('attributes', function ($query) use ($colorBox) {
                $query->where('name', 'color')->whereHas('items', function ($itemQuery) use ($colorBox) {
                    $itemQuery->where('name', $colorBox);
                });
            });
        }

        // اعمال فیلتر بر اساس موجودی اگر مقدار آن معتبر باشد
        if ($inventory != null && $inventory == true) {
            $query->where('few', '>', 0);
        }

        // اعمال فیلتر بر اساس قیمت اگر maxprice و minprice ارسال شده باشند
        if ($maxPrice !== null && $minPrice !== null) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        } elseif ($minPrice !== null) {
            $query->where('price', '>=', $minPrice);
        } elseif ($maxPrice !== null) {
            $query->where('price', '<=', $maxPrice);
        }

        // اعمال فیلتر بر اساس استایل اگر مقدار آن معتبر باشد
        if ($function !== null) {
            $query->whereHas('tags', function ($tagQuery) use ($function) {
                $tagQuery->where('name', $function)->where('type', 'function');
            });
        }

        // اعمال فیلتر بر اساس قابلیت اگر مقدار آن معتبر باشد
        if ($ability !== null) {
            $abilityValues = explode(',', $ability); // تقسیم داده‌های مربوط به قابلیت‌ها بر اساس ویرگول

            // جستجوی تمامی تگ‌های مرتبط با قابلیت‌های ارسال شده
            $query->whereHas('tags', function ($tagQuery) use ($abilityValues) {
                $tagQuery->where('type', 'ability')->whereIn('name', $abilityValues);
            });
        }

        // اعمال مرتب‌سازی بر اساس پارامتر sort اگر مقدار آن معتبر باشد
        if ($sort !== null && in_array($sort, ['newest', 'bestselling', 'cheapest', 'expensive'])) {
            switch ($sort) {
                case 'newest':
                    $query->orderByDesc('created_at');
                    break;
                case 'bestselling':
                    // اضافه کردن منطق مرتب‌سازی بر اساس پرفروش‌ترین
                    break;
                case 'cheapest':
                    $query->orderBy('price');
                    break;
                case 'expensive':
                    $query->orderByDesc('price');
                    break;
            }
        }

        // محاسبه تعداد صفحات
        $total = ceil($query->count() / $perPage);

        // Paginate the results
        $products = $query->paginate($perPage, ['*'], 'page', $page);

        // ارسال نتایج به ویو
        return view('category', compact('category', 'products', 'page', 'options', 'total'));
    }


    public function list(Request $request)
    {
        // دریافت تمامی پارامترها از پرس‌وجوی URL
        $options = $request->all();
        $maxPrice = $request->input('maxprice');
        $minPrice = $request->input('minprice');
        $page = $request->input('page', 1);
        $sort = $request->input('sort');
        $slug = $request->input('slug');
        $function = $request->input('function');
        $ability = $request->input('ability');  // data value is ability= a,b,c
        $inventory = $request->input('inventory', 0);
        $colorBox = $request->input('colorBox');
        $perPage = 12;

        // حذف گزینه‌های غیرضروری
        $url = url()->current() . "?"; // شروع آدرس URL با علامت سوال
        foreach ($options as $key => $value) {
            if ($value !== null) {
                $url .= "{$key}={$value}&";
            }
        }
        $url = rtrim($url, '&'); // حذف '&' اضافی در انتهای آدرس URL

        // افزودن slug به آدرس URL اگر مقدار آن معتبر باشد
        if ($slug) {
            $url .= "&slug={$slug}";
            $removeOptions = [
                [
                    "title" => "حذف همه",
                    "url" => url()->current() . "?slug={$slug}",
                ]
            ];
        } else {
            $removeOptions = [
                [
                    "title" => "حذف همه",
                    "url" => url()->current(),
                ]
            ];
        }

        // یافتن دسته‌بندی مرتبط با نشانه (slug)
        $category = null;
        if ($slug) {
            $category = Category::where(['alias' => $slug])->first();
        } else {
            $category = Category::first();
        }

        // اگر دسته‌بندی وجود نداشته باشد، آرایه خالی برای محصولات برمی‌گردانیم
        if (!$category and $slug) {
            return response()->json([
                'html' => '',
                'total' => 0,
                'removeOptions' => $removeOptions
            ]);
        }

        if($slug){
            // کوئری برای انتخاب محصولات
            $query = $category->products();
        }
        else{
            $query = Product::query();
        }

        // فیلتر بر اساس رنگ
        if ($colorBox) {
            $query->whereHas('attributes', function ($query) use ($colorBox) {
                $query->whereHas('items', function ($itemQuery) use ($colorBox) {
                    $itemQuery->where('name', $colorBox);
                });
            });

            $removeOptions[] = [
                "title" => "رنگ",
                "url" => str_replace("colorBox=$colorBox", "", $url),
                "item" => [
                    "name" => "colorBox",
                    "value" => $colorBox
                ]
            ];
        }

        // فیلتر بر اساس موجودی
        if ($inventory != null && $inventory == true) {
            $query->where('few', '>', 0);

            $removeOptions[] = [
                "title" => "موجودی",
                "url" => str_replace("inventory=$inventory", "", $url),
                "item" => [
                    "name" => "inventory",
                    "value" => "1"
                ]
            ];
        }

        // فیلتر بر اساس قیمت
        if ($maxPrice !== null && $minPrice !== null) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        } elseif ($minPrice !== null) {
            $query->where('price', '>=', $minPrice);
        } elseif ($maxPrice !== null) {
            $query->where('price', '<=', $maxPrice);
        }

        // فیلتر بر اساس استایل (function)
        if ($function !== null) {
            $query->whereHas('tags', function ($tagQuery) use ($function) {
                $tagQuery->where('name', $function)->where('type', 'function');
            });

            $removeOptions[] = [
                "title" => $function,
                "url" => str_replace("function=$function", "", $url),
                "item" => [
                    "name" => "function",
                    "value" => $function
                ]
            ];
        }

        // فیلتر بر اساس قابلیت (ability)
        if ($ability !== null) {
            $abilityValues = explode(',', $ability);
            $query->whereHas('tags', function ($tagQuery) use ($abilityValues) {
                $tagQuery->where('type', 'ability')->whereIn('name', $abilityValues);
            });

            $removeOptions[] = [
                "title" => $ability,
                "url" => str_replace("ability=$ability", "", $url),
                "item" => [
                    "name" => "ability",
                    "value" => $ability
                ]
            ];
        }

        // مرتب‌سازی بر اساس پارامتر sort
        if ($sort !== null && in_array($sort, ['newest', 'bestselling', 'cheapest', 'expensive'])) {
            switch ($sort) {
                case 'newest':
                    $query->orderByDesc('created_at');
                    break;
                case 'bestselling':
                    // اضافه کردن منطق مرتب‌سازی بر اساس پرفروش‌ترین
                    break;
                case 'cheapest':
                    $query->orderBy('price');
                    break;
                case 'expensive':
                    $query->orderByDesc('price');
                    break;
            }
        }

        // محاسبه تعداد کل صفحات
        $total = ceil($query->count() / $perPage);

        // Paginate the results
        $products = $query->paginate($perPage, ['*'], 'page', $page);

        // تولید HTML از ویو
        $html = view("components/category-products", compact('products'))->render();

        // خروجی JSON
        return response()->json(['html' => $html, 'total' => $total, 'removeOptions' => $removeOptions]);
    }

}
