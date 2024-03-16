<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('خانه', route('home'));
});

// Home > Blog
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('بلاگ', route('blog'));
});

// Home > Category
Breadcrumbs::for('category', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('محصولات', route('category'));
});

// Home > Blog > [Category]
Breadcrumbs::for('single.post', function (BreadcrumbTrail $trail, $post) {
    $trail->parent('blog');
    $trail->push($post->category->name ?? 'بدون دسته بندی', route('single.post', $post->slug));
});

// Home >  [Category] > [Product]
Breadcrumbs::for('single.product', function (BreadcrumbTrail $trail, $product) {
    // اولین گروه بندی محصول را بدست آورید
    $firstCategory = $product->categories->first();

    // اگر محصول به گروه بندی‌هایی تعلق دارد
    if ($firstCategory) {
        $trail->parent('category');
        $trail->push($firstCategory->title, route('category', $firstCategory->alias));
        // نام اولین گروه بندی را به برنامه‌های توالی اضافه کنید
        $trail->push($product->title, route('single.product', $product->id));
    } else {
        // در غیر این صورت فقط محصولات را نمایش دهید
        $trail->push('محصولات', route('single.product', $product->title));
    }
});
