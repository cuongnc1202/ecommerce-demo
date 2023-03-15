@extends('master.admin')
@section('title', 'Quản Lý Sản Phẩm')

@section('content')

    <form action="" method="GET" class="form-inline" role="form" >
        @csrf
            <div class="form-group">
                <label class="sr-only" for=""></label>
                <input class="form-control" name="keyword" placeholder="Input field">
            </div>
        
            <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
            <a href="{{ route('product.create') }}" type="submit" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a>
        </form>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Bán/ Giá Khuyễn Mại</th>
                <th>Ảnh Sản Phẩm</th>
                <th>Mô Tả</th>
                <th>Tên Danh Mục</th>
                <th>Trạng Thái</th>
                <th>Ngày Tạo</th>
                <th>Ngày Sửa</th>
                <th>Tùy Chọn</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data as $model)
                <tr>
                    <td scope="row">{{$model->id}}</td>
                    <td>{{$model->name}}</td>
                    <td>{{number_format($model->price)}} VND/ {{number_format($model->sale_price)}} VND</td>
                    <td>
                        <img src="{{url('/uploads')}}/{{$model->image}}" alt="" width="100">
                    </td>
                    <td>{{$model->description}}</td>
                    <td>{{$model->category->name}}</td>
                    <td>{{$model->status}}</td>
                    <td>{{$model->created_at}}</td>
                    <td>{{$model->updated_at}}</td>
                    <td>
                        {{-- <form action="" method="post">
                            @csrf
                            <a href="{{route('category.edit', $model->id)}}" class="btn btn-warning">Sửa</a>
                            <a href="{{route('category.destroy', $model->id)}}" class="btn btn-warning">Xóa</a>
                        </form> --}}
                        <form action="{{route('product.destroy', $model->id)}}" method="post">
                            @csrf @method('DELETE')
                            <a href="{{route('product.edit', $model->id)}}" class="btn btn-warning">Sửa</a>
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>

@stop()