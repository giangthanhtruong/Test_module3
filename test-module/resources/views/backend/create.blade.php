
<div class="container">
    <div class="card mt-2" >
        <h4 class="card-header text-white text-center " style="background-color: #0c84ff">Thêm mới đại lý</h4>
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="">Tên đại lý</label>
                    <input type="text" name="name" class="form-control">

                    <p class="text-danger">{{$errors->first('name')}}</p>

                </div>

                <div class="form-group">
                    <label for="">Điện thoại</label>
                    <input type="text" name="phone"  class="form-control">

                    <p class="text-danger">{{$errors->first('phone')}}</p>

                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email"  class="form-control">

                    <p class="text-danger">{{$errors->first('email')}}</p>

                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" class="form-control">

                    <p class="text-danger">{{ $errors->first('address') }}</p>

                </div>
                <div class="form-group">
                    <label for="">Tên quản lý</label>
                    <input type="text" name="nameManager" class="form-control">

                    <p class="text-danger">{{ $errors->first('nameManager') }}</p>

                </div>

                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <input type="text" name="status" class="form-control">

                    <p class="text-danger">{{ $errors->first('status') }}</p>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
