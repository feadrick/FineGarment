@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:10px;">

   <div class="row">
        <div class="col-md-12">
            @foreach($product as $item)
            <div class="product col-md-3" >
											<div class="product-img">
												<img src="{{$item->item_image_src}}" alt="" class="img-fluid">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#">{{substr($item->item_name,0,20)}}...</a></h3>
												<h4 class="product-price">RM {{$item->price}}</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart" >
												<a href="{{Route('addToChart')}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
											</div>
										</div>
            @endforeach                                    
                                        
        </div>
</div>
</div>
@endsection
