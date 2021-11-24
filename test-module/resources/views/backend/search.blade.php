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
    <h1 style="text-align: center" class="text-primary pt-5"><strong>TÌM KIẾM ĐẠI LÝ</strong></h1>
</div>
<div class="card mt-5" style="margin-left: 50px;margin-right: 50px">


    <h3 class="card-header text-white text-center" style="background-color: #0c84ff"><strong>Danh sách tìm kiếm</strong></h3>
    <div class="card-body">
        <table class="table table-hover">
            <tr>
                <th><input type="checkbox" id="product-checkbox"></th>
                <th>Mã số đại lý</th>
                <th>Tên đại lý</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Tên người quản lý</th>
                <th>Trạng thái</th>

            </tr>
            @forelse($agencies as $key => $agency)
                <tr id="agency-item{{$agency->id}}">
                    <td><input type="checkbox" class="agency-checked" value="{{$agency->id}} "></td>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $agency->name }}</td>
                    <td>{{ $agency->phone }}</td>
                    <td>{{ $agency->email }}</td>
                    <td>{{ $agency->address }}</td>
                    <td>{{ $agency->nameManager }}</td>
                    <td>{{ $agency->status }}</td>
                    <td><a href="{{ route('agencies.edit', $agency->id) }}" class="btn btn-primary">Cập nhật</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No data</td>
                </tr>
            @endforelse
        </table>
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

