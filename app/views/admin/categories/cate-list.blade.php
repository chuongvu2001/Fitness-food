@extends('.layouts.main')
@section('title','Danh sách danh mục')
@section('main-content')
    <?php $index = 1; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Show_menu</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Detail</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cates as $key => $item)
                        @if($item->id_grade==0)
                        <tr>
                            <td>{{$index++}}</td>
                            <td>{{$item->cate_name}}</td>
                            <td>{{$item->show_menu == 1 ? 'Hiển thị' : 'Không hiển thị'}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{isset($item->updated_at) ? $item->updated_at : 'Chưa được cập nhật'}}</td>
                            <td><a href="{{BASE_URL."cate-detail?cate=".$item->id}}">Chi tiết</a></td>
                            <td>
                                <a href="{{BASE_URL."cate-edit?cate=".$item->id}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="far fa-edit "></i>
                                </a>

                                <a onclick="confirm('Bạn có chắc muốn xoá?')" href="{{BASE_URL."cate-remove?cate=".$item->id}}" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
