
@extends('master.site')

@section('title', 'Liên Hệ')

@section('content')
<div class="container">
    <form action="" method="post">
        <div class="form-group">
          <label for=""><b>Họ Tên</b></label>
          <input type="text"
            class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for=""><b>Email</b></label>
            <input type="email"
              class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for=""><b>Số điện thoại</b></label>
            <input type="number"
              class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="comment"><b>Chi tiết liên hệ</b></label>
            <textarea id="comment" class="form-control" name="comment" rows="8"></textarea>
          </div>
    </form>
  </div>
@stop()
