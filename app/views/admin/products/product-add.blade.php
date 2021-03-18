@extends('.layouts.main')
@section('title','Thêm sản phẩm')
@section('main-content')
        <form action="product-save" method="POST" class="user" enctype="multipart/form-data" >
            <div class="form-group">
                <input type="text" class="form-control " name="name" placeholder="Tên sản phẩm">
            </div>
            <div class="form-group">
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <select name="cate_id" class="form-control">
                    <option>-----Sản phẩm thuộc danh mục-----</option>
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
                <input type="number" class="form-control " name="price" placeholder="Giá sản phẩm">
            </div>

            <div class="form-group">
                <label>Miêu tả</label>
                <textarea name="short_desc" id="ckeditor_desc" placeholder="Miêu tả"></textarea>
            </div>
            <div class="form-group">
                <label>Chi tiết</label>
                <textarea name="detail" id="ckeditor_detail" placeholder="Detail"></textarea>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-success">Thêm sản phẩm</button></div>
            <hr>
        </form>
@endsection
