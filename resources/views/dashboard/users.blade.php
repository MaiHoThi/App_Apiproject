<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>users</title>
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
        <h1>DANH SÁCH KHÁCH HÀNG</h1>
      <thead>
        <tr>
          <th>#</th>
          <th>Tên khách hàng</th>
          <th>email</th>
          <th>Xóa </th>
        </tr>
      </thead>
      <tbody>
       
        @csrf
        @foreach ($users as $item)
        <tr>
        <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->email}}</td>
          <td>
          <form action='{{ "/admin/".$item ->id."/user"}}' method="POST" class="group-inline">
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