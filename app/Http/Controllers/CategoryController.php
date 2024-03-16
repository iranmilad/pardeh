<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class CategoryController extends Controller{

    public function index()
    {
        // دریافت تمامی پارامترها از پرس و جوی URL
        $options = request()->all();
        $maxPrice = request()->input('maxprice');
        $minPrice = request()->input('minprice');
        $page = request()->input('page');
        $sort = request()->input('sort');
        $slug = request()->input('slug');
        $function = request()->input('function');
        $ability =  request()->input('ability');  // data value is ability= a,b,c
        $inventory =  request()->input('inventory',0);
        $colorBox = request()->input('colorBox');
        // یافتن دسته بندی مرتبط با نشانه
        if ($slug) {
            $category = Category::where(['alias' => $slug])->first();
        } else {
            $category = Category::first();
        }

        // استفاده از کوئری برای انتخاب محصولات
        $query = $category->products();

        // اعمال فیلتر بر اساس colorBox اگر مقدار آن معتبر باشد
        if ($colorBox) {
            $query->whereHas('attributes', function ($query) use ($colorBox) {
                $query->whereHas('items', function ($itemQuery) use ($colorBox) {
                    $itemQuery->where('name', $colorBox);
                });
            });
        }

        // اعمال فیلتر بر اساس موجودی اگر مقدار آن معتبر باشد
        if ($inventory != null and $inventory==true) {
            $query->where('few', '>', 0);
        }

        // اعمال فیلتر بر اساس قیمت اگر maxprice و minprice ارسال شده باشند
        if ($maxPrice !== null && $minPrice !== null) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
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

        $perPage=12;
        $total= ceil($query->count()/ $perPage);

        // Paginate the results
        $products = $query->paginate(12, ['*'], 'page', $page);

        return view('category', compact('category', 'products', 'page', 'options','total'));
    }



    public function list(Request $request){
        // دریافت تمامی پارامترها از پرس‌وجوی URL
        $options = $request->all();
        $maxPrice = $request->input('maxprice');
        $minPrice = $request->input('minprice');
        $page = $request->input('page',1);
        $sort = $request->input('sort');
        $slug = $request->input('slug');
        $function = $request->input('function');
        $ability =  $request->input('ability');  // data value is ability= a,b,c
        $inventory =  $request->input('inventory', 0);
        $colorBox = $request->input('colorBox');
        $page = $page==0 ? 1 : $page;

        // حذف گزینه‌های غیرضروری
        // اضافه کردن همه پارامترها به آدرس URL
        $url = url()->current() . "?"; // شروع آدرس URL با اضافه کردن علامت سوال
        foreach ($options as $key => $value) {
            if ($value !== null) {
                $url .= "{$key}={$value}&";
            }
        }
        // حذف '&' اضافی در انتهای آدرس URL
        $url = rtrim($url, '&');

        // اضافه کردن slug به آدرس URL اگر مقدار آن معتبر باشد
        if ($slug) {
            $url .= "&slug={$slug}";
            $removeOptions = [
                [
                    "title" => "حذف همه",
                    "url" => url()->current(). "?slug={$slug}",
                ]
            ];
        }
        else{
            $removeOptions = [
                [
                    "title" => "حذف همه",
                    "url" => url()->current(),
                ]
            ];
        }





        // یافتن دسته بندی مرتبط با نشانه
        if ($slug) {
            $category = Category::where(['alias' => $slug])->first();
        } else {
            $category = Category::first();
        }

        // استفاده از کوئری برای انتخاب محصولات
        $query = $category->products();

        // اعمال فیلتر بر اساس colorBox اگر مقدار آن معتبر باشد
        if ($colorBox) {
            $query->whereHas('attributes', function ($query) use ($colorBox) {
                $query->whereHas('items', function ($itemQuery) use ($colorBox) {
                    $itemQuery->where('name', $colorBox);
                });
            });
            // remove colorBox=$colorBox from url()->current()


            $removeOptions[]=[
                "title" => "رنگ",
                "url" => str_replace("colorBox=$colorBox","",$url)
            ];

        }

        // اعمال فیلتر بر اساس موجودی اگر مقدار آن معتبر باشد
        if ($inventory != null and $inventory == true) {
            $query->where('few', '>', 0);
        }

        // اعمال فیلتر بر اساس قیمت اگر maxprice و minprice ارسال شده باشند
        if ($maxPrice !== null && $minPrice !== null) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
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
        $perPage=12;

        $total= ceil($query->count()/ $perPage);

        // Paginate the results
        $products = $query->paginate(12, ['*'], 'page', $page);




        // تولید خروجی JSON
        $html = view("components/category-products", compact('products'))->render();



        return response()->json(['html' => $html, 'total' => $total, 'removeOptions' => $removeOptions]);
    }
}
