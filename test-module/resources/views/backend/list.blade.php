<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giang Thanh Truong</title>
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
<div style="margin-left: 50px;margin-right: 50px">
<div>
    <h1 style="text-align: center" class="text-primary pt-5"><strong>QU???N L?? ?????I L??</strong></h1>
</div>
<div class="row" >
    <div class="col-9 mt-2">
        <a class="btn btn-success" href="{{ route('agencies.create') }}">Th??m m???i ?????i l??</a>
        <button class="btn btn-danger agency-delete" id="agency-delete"
                onclick="return confirm('B???n c?? ch???c mu???n x??a kh??ng ?')">Delete
        </button>
    </div>
    <div class=" col-3 mt-2  ">
        <form class="form-inline my-2 my-lg-0" action="{{route('agency.search')}}" method="get">
            @csrf
            <div class="input-group input-group-sm " style="float: right">
                <input class="form-control-navbar" type="text" name="keyword" placeholder="Search"
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Search</button>

                </div>
            </div>
        </form>
    </div>

</div>



    <div class="card mt-2">
        <h3 class="card-header text-white text-center" style="background-color: #0c84ff"><strong>Danh s??ch ?????i l??</strong>
        </h3>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th><input type="checkbox" id="agency-checkbox"></th>
                    <th>M?? s??? ?????i l??</th>
                    <th>T??n ?????i l??</th>
                    <th>??i???n tho???i</th>
                    <th>Email</th>
                    <th>?????a ch???</th>
                    <th>T??n ng?????i qu???n l??</th>
                    <th>Tr???ng th??i</th>

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
                        <td><a href="{{ route('agencies.edit', $agency->id) }}" class="btn btn-primary">C???p nh???t</a>
                        </td>
                        <td><a href="{{ route('delete', $agency->id) }}" class="btn btn-danger">Delete</a>
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


