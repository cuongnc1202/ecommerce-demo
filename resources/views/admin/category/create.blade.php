@extends('master.admin')
@section('title', 'Thêm Mới Danh Mục')

@section('content')

    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Tên Danh Mục</label>
            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Trạng Thái</label>
            <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" value="0" checked="check">
                Tạm ẩn
              </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" value="1">
                Hiển thị
              </label>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Thêm</button>
    </form>

@stop()
