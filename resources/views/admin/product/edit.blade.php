@extends('master.admin')
@section('title', 'Chỉnh Sửa Sản Phẩm')

@section('content')

    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="form-group">
            <label for="">Tên Sản Phẩm</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}" aria-describedby="helpId" placeholder="">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Giá Sản Phẩm</label>
            <input type="number" class="form-control" name="price" value="{{$product->price}}" aria-describedby="helpId"
                placeholder="">
            @error('price')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Giá Khuyến Mại</label>
            <input type="number" class="form-control" name="sale_price" value="{{$product->sale_price}}" aria-describedby="helpId"
                placeholder="">
            @error('sale_price')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Ảnh Sản Phẩm</label>
            <input type="file" class="form-control" name="image" aria-describedby="helpId"
                placeholder="">
            <img src="{{url('/uploads')}}/{{$product->image}}" alt="" width="100">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Mô Tả Sản Phẩm</label>
            <textarea class="form-control" name="description" rows="3">{{$product->description}}</textarea>
            @error('description')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="">Tên Danh Mục</label>
            <select class="form-control" name="category_id">
                <option>Chọn 1</option>
                @foreach ($category as $cats)
                <option value="{{ $cats->id }}" {{$product->category_id == $cats->id ? 'selected' : ''}}>{{ $cats->name }}</option>
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
                    <input type="radio" class="form-check-input" name="status" value="1" {{$product->status == 1 ? 'checked' : ''}}>
                    Hiển thị
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" value="0" {{$product->status == 0 ? 'checked' : ''}}>
                    Tạm ẩn
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Cập Nhật</button>
    </form>

@stop()
