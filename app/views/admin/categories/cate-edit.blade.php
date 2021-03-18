@extends('.layouts.main')
@section('title','Sửa danh mục')
@section('main-content')
    <div class="">
        @foreach($cate as $key => $item)
        <form action="edit-save?cate={{$item->id}}" method="POST" class="user" enctype="multipart/form-data" >

            <div class="form-group">
                <input type="text" class="form-control " value="{{$item->cate_name}}" name="cate_name"  placeholder="Tên danh mục">
            </div>
            <div class="form-group">
                <select name="id_grade" class="form-control">
                    <option value="0">Danh mục cha</option>
                    @foreach($cates as $key => $value)
                        @if($cate_id != $value->id && $value->id_grade ==0)
                        <option value="{{$value->id}}">
                            {{$value->cate_name}}
                        </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" name="show_menu" value="1" {{$item->show_menu == 1 ? "checked" : ""}} class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Hiển thị ngoài menu</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Sửa danh mục</button>
            <hr>
            @endforeach
        </form>
    </div>
@endsection
