<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>insertproduct</title>
</head>

<body>
    <div class="container-fluid" style=" position: relative">
        <div class="container">
            @include('/partials/header')
            <div id="viewport">
                <!-- Content -->

                <div id="content">
                    <h1>Thêm sản phẩm</h1>
                    @include('/partials/category')

                    <form action="/products/insert/image" enctype="multipart/form-data" method="POST" class="insert">

                        @csrf
                        <div id="insert">
                            <select class="categories" name="category_id">
                                @foreach($categories as $category)
                                <option value='{{$category->id}}'>{{$category->name}}</option>
                                @endforeach
                            </select>
                            <input type="text" name="name" placeholder="Nhập tên sản phẩm">
                            <input type="number" name="old_price" placeholder="Nhập giá cũ(nếu có)">
                            <input type="number" name="price" placeholder="Nhập giá mới">
                            <input type="file" name="image">
                            <textarea name="detail" id="status" class="form-control" rows="3"
                                required="required"></textarea>
                        </div>
                        <button type="submit">Thêm</button>
                    </form>
                    <table class="table">
                        <hr>
                        <h1>DANH SÁCH SẢN PHẨM</h1>
                        <div class='sort'>
                        <a href="/insert/image">Theo thứ tự id <i class="fa fa-sort" aria-hidden="true"></i></a>
                            <a href="/sortBy/image">Tăng dần<i class="fa fa-sort-asc" aria-hidden="true"></i></a>
                            <a href="/sortByDesc/image">Giảm dần<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                        </div>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Giá cũ</th>
                                <th>Giá mới</th>
                                <th>Loại</th>
                                <th>Chi tiết</th>
                                <th>Sửa </th>
                                <th>Xóa </th>
                            </tr>
                        </thead>
                        <tbody>

                            @csrf
                            @foreach ($products as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td><img src="{{$item ->image}}" alt="image" class="image_table"></td>
                                <td>{{$item->old_price}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>{{$item->detail}}</td>
                                <td>
                                    <form action='{{ "/index/".$item ->id."/edit/image"}}' method="GET"
                                        class="group-inline">
                                        <button type="submit">Sửa</button>
                                    </form>
                                </td>
                                <td>
                                    <form action='{{ "/products/".$item ->id."/image"}}' method="POST"
                                        class="group-inline">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit">Xóa</button></form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

</body>

</html>