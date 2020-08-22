<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>comment</title>
</head>
<body>
  <div class="container-fluid"  style=" position: relative">
    <div class="container">
        @include('/partials/header')
    <div id="viewport" >
  <!-- Content -->

  <div id="content" >
  @include('/partials/category')

      <table class="insert">
      <hr>
        <h1>BÌNH LUẬN</h1>
      <thead>
        <tr>
          <th>#</th>
          <th>Tên khách hàng</th>
          <th>email</th>
          <th>sản phẩm</th>
          <th>bình luận</th>

          <th>Xóa </th>
        </tr>
      </thead>
      <tbody>
       
        @csrf
        @foreach ($comments as $item)
        <tr>
        <td>{{$item->id}}</td>
        @foreach($item->user as $user)
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          @endforeach
          @foreach($item->product as $product)
          <td>{{$product->name}}</td>
          @endforeach
          <td>{{$item->comment}}</td>

          <td>
          <form action='{{ "/admin/".$item ->id."/comments"}}' method="POST" class="group-inline">
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