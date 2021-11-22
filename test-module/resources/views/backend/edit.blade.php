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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
