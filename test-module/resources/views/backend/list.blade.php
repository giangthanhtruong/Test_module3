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
</head>
<body>

<div>
    <h1 style="text-align: center" class="text-primary pt-5"><strong>QUẢN LÝ ĐẠI LÝ</strong></h1>
</div>
<div class="col-12 mt-2">
    <a class="btn btn-success" href="{{ route('agencies.create') }}">Thêm mới đại lý</a>
    <button class="btn btn-danger agency-delete" id="agency-delete"
            onclick="return confirm('Bạn có chắc muốn xóa không ?')">Delete
    </button>
</div>
<form class="form-inline" action="{{route('agency.search')}}" method="get">
    @csrf
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="text" name="keyword" placeholder="Search"
               aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">Search</button>

        </div>
    </div>
</form>
</div>
<div class="card mt-2">
    <h3 class="card-header text-white text-center" style="background-color: #0c84ff"><strong>Danh sách đại lý</strong></h3>
    <div class="card-body">
        <table class="table table-hover">
            <tr>
                <th><input type="checkbox" id="agency-checkbox"></th>
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
<script src="{{asset('js/delete.js')}}"></script>
<script src="{{asset('Tadm/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('Tadm/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('Tadm/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('Tadm/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('Tadm/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('Tadm/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{asset('Tadm/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('Tadm/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
</body>
</html>


