@extends('layouts.main')
@section('title','Danh sách sản phẩm')
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
                        <th>Image</th>
                        <th>Price</th>
                        <th>Short_Desc</th>
                        <th>Detail</th>
                        <th>Star</th>
                        <th>Create_at</th>
                        <th>Update_at</th>
                        <th>Views</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key => $item)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$item->name}}</td>
                                <td><img src="{{$item->image}}" width="70" height="70"></td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->short_desc}}</td>
                                <td>{{$item->detail}}</td>
                                <td>{{$item->star}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{isset($item->updated_at) ? $item->updated_at : 'Chưa được cập nhật'}}</td>
                                <td>{{$item->views}}</td>
                                <td>
                                    <a href="{{BASE_URL."cate-edit?cate=".$item->id}}" class="btn btn-primary btn-circle btn-sm">
                                        <i class="far fa-edit "></i>
                                    </a>

                                    <a onclick="confirm('Bạn có chắc muốn xoá?')" href="{{BASE_URL."cate-remove?cate=".$item->id}}" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection