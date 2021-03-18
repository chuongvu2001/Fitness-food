@extends('.layouts.main')
@section('title','Thêm danh mục')
@section('main-content')
<div class="">
    <form action="cate-save" method="POST" class="user" enctype="multipart/form-data" >
        <div class="form-group">
            <input type="text" class="form-control " name="cate_name" placeholder="Tên danh mục">
        </div>
        <div class="form-group">
            <select name="id_grade" class="form-control">
                <option value="0">Danh mục cha</option>
                @if($cates)
                @foreach($cate as $key => $item)
                <option value="{{$item->id}}">
                    {{$item->cate_name}}
                </option>
                @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" name="show_menu" value="1" class="custom-control-input" id="customCheck">
                <label class="custom-control-label" for="customCheck">Hiển thị ngoài menu</label>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Thêm danh mục</button>
        <hr>
    </form>
</div>
@endsection
