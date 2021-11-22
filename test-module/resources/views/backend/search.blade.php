

    <div class="card mt-5" >
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

