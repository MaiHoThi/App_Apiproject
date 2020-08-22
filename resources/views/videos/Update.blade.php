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

    <form action="{{'/index/'.$edit->id.'/Video'}}" method="POST" enctype="multipart/form-data" class="insert">
    @method("PATCH")

      @csrf
      <div id="insert">
                <select class="categories"name="category_id">
                  @foreach($categories as $category)
                    <option value='{{$category->id}}'>{{$category->name}}</option>
                    @endforeach
                </select>
              <input type="text" name="name" placeholder="Nhập tên sản phẩm" value="{{$edit->name}}">
              <input type="number"name="old_price" placeholder="Nhập giá cũ(nếu có)" value="{{$edit->old_price}}">
              <input type="number"  name="price" placeholder="Nhập giá mới" value="{{$edit->price}}">
              <input type="file"  name="Video" value="{{$edit->Video}}">
              <textarea name="detail" id="status" class="form-control" rows="3" required="required" value="{{$edit->detail}}"></textarea>
              </div>
          <button type="submit" >Thêm</button>
      </form>
  </div>
  
    </div>

    </div>
    
</body>
</html>