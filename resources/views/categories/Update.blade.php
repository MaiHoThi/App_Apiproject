<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>insertproduct</title>
</head>
<body>
  <div class="container-fluid"  style=" position: relative">
    <div class="container">
        @include('/partials/header')
    <div id="viewport" >
  <!-- Content -->

  <div id="content" >
  <h1>Thêm sản phẩm</h1>
  @include('/partials/category')
    <form action="{{'/index/'.$edit->id.'/Categories'}}" method="POST" enctype="multipart/form-data" class="insert">
    @method("PATCH")
      @csrf
      <div id="insert">
              <input type="text" name="name" placeholder="Nhập tên sản phẩm" value="{{$edit->name}}">
              </div>
          <button type="submit" >Thêm</button>
      </form>
  </div>
  
    </div>

    </div>
    
</body>
</html>