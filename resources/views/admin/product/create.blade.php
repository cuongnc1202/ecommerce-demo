@extends('master.admin')
@section('title', 'Thêm Mới Sản Phẩm')

@section('content')

    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Tên Sản Phẩm</label>
            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Giá Sản Phẩm</label>
            <input type="number" class="form-control" name="price" id="" aria-describedby="helpId"
                placeholder="">
            @error('price')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Giá Khuyến Mại</label>
            <input type="number" class="form-control" name="sale_price" id="" aria-describedby="helpId"
                placeholder="">
            @error('sale_price')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Ảnh Sản Phẩm</label>
            <input type="file" class="form-control" name="image" id="" aria-describedby="helpId"
                placeholder="">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Mô Tả Sản Phẩm</label>
            <textarea class="form-control" name="description" id="" rows="3"></textarea>
            @error('description')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Tên Danh Mục</label>
            <select class="form-control" name="category_id" id="">
                <option>Chọn 1</option>
                @foreach ($category as $cats)
                <option value="{{ $cats->id }}">{{ $cats->name }}</option>
                @endforeach
            </select>
        </div>
        @error('category_id')
            {{ $message }}
        @enderror
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
