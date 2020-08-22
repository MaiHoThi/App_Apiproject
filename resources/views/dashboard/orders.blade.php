<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/style.css">
    <title>order</title>
</head>

<body>
    <div class="container-fluid" style=" position: relative">
        <div class="container">
            @include('/partials/header')
            <div id="viewport">
                <!-- Content -->

                <div id="content">
                    @include('/partials/category')
                    <table class="mama">
                        <hr>
                        <h1>ĐƠN HÀNG</h1>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên khách hàng</th>
                                <th>ngày đám cưới</th>
                                <th>Địa chỉ</th>
                                <th>số điện thoại riêng</th>
                                <th>số điện thoại nhà</th>
                                <th>user</th>
                                <th>sản phẩm</th>
                                <th>Xác nhận </th>
                                <th>Huỷ </th>
                            </tr>
                        </thead>
                        <tbody>
                            @csrf
                            @foreach ($orders as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->phone1}}</td>
                                <td><button id="myBtn">{{$item->user_id}}</button>
                                    <div id="ModalUser" class="modal">
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <div class="body">
                                                <h1>Profile</h1>
                                                <div class="detail">
                                                    <div id="img"><img src="{{$item->user->image}}" atl="image" ></div>
                                                    <div id="body">
                                                        <ul id="detail">
                                                            <li>Tên(Name):{{$item->user->name}}</li>
                                                            <li class="">Email:{{$item->user->email}}</li>                                                         
                                                        </ul>
                                                    </div>
                                                    <br></br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><button id="btnPro">{{$item->image_id}}</button>
                                    <div id="ModalImage" class="modal">
                                        <div class="modal-content">
                                            <span id="close">&times;</span>
                                            <div class="body">
                                                <h1>{{$item->product->name}}</h1>
                                                <div class="detail">
                                                    <div id="img"><img src="{{$item->product->image}}"
                                                            atl="image" /></div>
                                                    <div id="body">
                                                        <ul id="detail">
                                                            <li>Mã số:{{$item->product->code}}</li>
                                                            <li class="old_price">Giá cũ:{{$item->product->old_price}}</li>
                                                            <li class="price">Giá mới:{{$item->product->price}}</li>
                                                            <li>Chi {{$item->product->detail}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form action='' method="" class="group-inline">
                                        @csrf
                                        <button type="submit">Xác nhận</button></form>
                                </td>
                                <td>
                                    <form action='{{ "/admin/".$item ->id."/orders"}}' method="POST"
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
<script>
// lấy modal
var modal = document.getElementById("ModalUser");
var modal1 = document.getElementById("ModalImage");

// button
var btn = document.getElementById("myBtn");
var btnPro = document.getElementById("btnPro");

//get close
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementById("close")[0];

// show
btn.onclick = function() {
    modal.style.display = "block";
}
btnPro.onclick = function() {
    modal1.style.display = "block";
}

// close modal
span.onclick = function() {
    modal.style.display = "none";
}


// close anywhere
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>

</html>