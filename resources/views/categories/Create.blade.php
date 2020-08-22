<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>insert categories</title>
</head>
<body>
    <div class="container">
        @include('/partials/header')
    <div id="viewport" >
  <!-- Content -->

  <div id="content" >
  <h1>Thêm Menu</h1>
  @include('/partials/category')
    <form action="/products/insert/Categories" enctype="multipart/form-data" method="POST" class="insert">
      @csrf
      <div id="insert">

              <input type="text" name="name" placeholder="Nhập các loại menu">
          <button type="submit" >Thêm</button>
          <div id="insert">

      </form>
      <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Tên</th>
          <th>Sửa </th>
          <th>Xóa </th>
        </tr>
      </thead>
      <tbody>
       
        @csrf
        @foreach ($categories as $item)
        <tr>
        <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td> 
          <form action='{{ "/index/".$item ->id."/edit/Categories"}}' method="GET" class="group-inline">
            <button type="submit">Sửa</button>
            </form>
          </td>
          <td>
          <form action='{{ "/products/".$item ->id."/Categories"}}' method="POST" class="group-inline">
            @csrf
            @method("DELETE")
            <button type="submit" >Xóa</button></form>
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