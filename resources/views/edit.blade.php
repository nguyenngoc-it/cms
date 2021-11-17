@extends('layouts/mater')

@section('content')
    <form method="POST" action="{{route('update', $einhit->id)}}" >
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Tên</label>
                <input value="<?= $einhit->name ?>" name="name" type="text" class="form-control" id="inputEmail4" placeholder="Enter name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Vai trò</label>
                <select name="rolle" id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option value="1">Thư mục cha</option>
                    <option value="0">Đơn vị con</option>

                </select>
            </div>
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputState">Thuộc đơn vị</label>
                <select name="parent_foder" id="inputState" class="form-control">
                    <option value="0" selected>Choose...</option>
                    <?php foreach ($einhits as $key => $value) { ?>
                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                    <?php  } ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Trạng thái</label>
                <select name="status" id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option value="1">Hoạt động</option>
                    <option value="0">Dừng hoạt động</option>

                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">update</button>
    </form>

@endsection
