@extends('master.admin')
@section('title', 'Quản Lý Danh Mục')

@section('content')

@if(Session::has('true'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('true')}}
    </div>
@endif
    <form action="" method="GET" class="form-inline" role="form" >
        @csrf
            <div class="form-group">
                <label class="sr-only" for=""></label>
                <input class="form-control" name="keyword" placeholder="Input field">
            </div>
        
            <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
            <a href="{{ route('category.create') }}" type="submit" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a>
        </form>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Avatar</th>
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
                    <td>
                        <img src="{{url('uploads')}}/{{$model->image}}" width="100" alt="">
                    </td>
                    <td>{{$model->status}}</td>
                    <td>{{$model->created_at}}</td>
                    <td>{{$model->updated_at}}</td>
                    <td>
                        {{-- <form action="" method="post">
                            @csrf
                            <a href="{{route('category.edit', $model->id)}}" class="btn btn-warning">Sửa</a>
                            <a href="{{route('category.destroy', $model->id)}}" class="btn btn-warning">Xóa</a>
                        </form> --}}
                        <form action="{{route('category.destroy', $model->id)}}" method="post">
                            @csrf @method('DELETE')
                            <a href="{{route('category.edit', $model->id)}}" class="btn btn-warning">Sửa</a>
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>

@stop()