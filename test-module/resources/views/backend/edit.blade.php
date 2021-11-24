<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
          href="{{asset('Tadm/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('Tadm/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('Tadm/plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar w/ text</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            <span class="navbar-text">
        Giang Thanh Truong
      </span>
        </div>
    </div>
</nav>

<div>
    <h1 style="text-align: center" class="text-primary pt-5"><strong>CẬP NHẬT ĐẠI LÝ</strong></h1>
</div>

<div class="card mt-2">
    <h3 class="card-header " style="text-align: center">Cập nhật thông tin đại lý</h3>
    <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="" class="">Tên đại lý</label>
                <input type="text" name="name" value="{{ $agency->name }}" class="form-control">

                <p class="text-danger">{{$errors->first('name')}}</p>

            </div>

            <div class="form-group">
                <label for="">Điện thoại</label>
                <input type="text" name="phone" value="{{ $agency->phone }}" class="form-control">

                <p class="text-danger">{{$agency->first('phone')}}</p>

            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="number" name="email" value="{{ $agency->email }}" class="form-control">

                <p class="text-danger">{{$errors->first('email')}}</p>

            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="number" name="address" value="{{ $agency->address }}" class="form-control">

                <p class="text-danger">{{ $errors->first('address') }}</p>

            </div>
            <div class="form-group">
                <label for="">Tên quản lý</label>
                <input type="text" name="nameManager" value="{{ $agency->nameManager }}" class="form-control">

                <p class="text-danger">{{ $errors->first('nameManager') }}</p>

            </div>

            <div class="form-group">
                <label for="">Trạng thái</label>
                <input type="number" name="status" value="{{ $agency->status }}" class="form-control">

                <p class="text-danger">{{ $errors->first('status') }}</p>

            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>



