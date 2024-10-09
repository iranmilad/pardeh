@extends('layouts.primary')

<!-- in article we should put contents like blog with editor from admin dashboard -->

@section('title', 'مقایسه محصول')

@section('content')
<div class="container">
    <h3 class="fw-bold tw-text-right">مقایسه محصول</h3>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        thead th {
            background-color: #f9f9f9;
            color: #333;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            border-bottom: 1px solid #e0e0e0;
        }

        tbody td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:nth-of-type(even) {
            background-color: #f9f9f9;
        }

        tbody img {
            max-width: 150px;
            border-radius: 8px;
            /* box-shadow removed */
        }

        .product-name {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .price {
            font-size: 1.1em;
            color: #1c7430;
            font-weight: bold;
        }

        .rating {
            color: #f39c12;
            font-size: 1.3em;
        }
    </style>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>عنوان</th>
                    <th>
                        <span>محصول 2</span>
                        <button class="btn btn-outline-danger p-0 px-1"><i class="fas fa-xmark"></i></button>
                    </th>
                    <th>
                        <span>محصول 2</span>
                        <button class="btn btn-outline-danger p-0 px-1"><i class="fas fa-xmark"></i></button>
                    </th>
                    <th>
                        <span>محصول 3</span>
                        <button class="btn btn-outline-danger p-0 px-1"><i class="fas fa-xmark"></i></button>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>تصویر</td>
                    <td><img src="https://placehold.co/400" alt="Product 1"></td>
                    <td><img src="https://placehold.co/400" alt="Product 2"></td>
                    <td><img src="https://placehold.co/400" alt="Product 3"></td>
                </tr>
                <tr>
                    <td>قیمت</td>
                    <td class="price">۱۶,۴۹۹,۰۰۰ تومان</td>
                    <td class="price">۱۷,۴۹۹,۰۰۰ تومان</td>
                    <td class="price">۱۵,۹۹۹,۰۰۰ تومان</td>
                </tr>
                <tr>
                    <td>امتیاز</td>
                    <td><span class="rating">★★★★★</span></td>
                    <td><span class="rating">★★★★☆</span></td>
                    <td><span class="rating">★★★★☆</span></td>
                </tr>
                <tr>
                    <td>رنگ</td>
                    <td>سفید</td>
                    <td>مشکی</td>
                    <td>نقره‌ای</td>
                </tr>
                <tr>
                    <td>جنس</td>
                    <td>پلاستیک</td>
                    <td>فلز</td>
                    <td>پلاستیک و فلز</td>
                </tr>
                <tr>
                    <td>سایز</td>
                    <td>متحرک</td>
                    <td>سایز بزرگ</td>
                    <td>استاندارد</td>
                </tr>
            </tbody>
        </table>
    </div>



</div>
@endsection