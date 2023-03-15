

                @foreach($data as $prods)                
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{url('uploads')}}/{{$prods->image}}" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4">
                            <h4 class="text-truncate mb-3 text-success"><b>{{$prods->name}}</b></h4>
                            <div class="d-flex justify-content-center">
                                @if ($prods->sale_price != 0)
                                <h5><b>{{ number_format($prods->sale_price) }} vnd</b></h5>
                                <h6 class="text-muted ml-2"><del>{{ number_format($prods->price) }} vnd</del></h6>
                            @else
                                <h5><b>{{ number_format($prods->price) }} vnd</b></h5>
                            @endif
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="{{route('product.detail', ['product'=>$prods->id, 'slug'=>Str::slug($prods->name)])}}" class="btn btn-sm text-dark p-0"><i class="fa fa-eye text-primary mr-1"></i>Xem chi tiết</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fa fa-shopping-cart text-primary mr-1"></i>+ Giỏ hàng</a>
                        </div>
                    </div>
                </div>
                @endforeach