<div class="recommended_items">
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								@foreach($productRecommends as $keyRecommend => $productRecommend)
                                    @if ($keyRecommend % 3 == 0) 
								    <div class="item {{ $keyRecommend == 0 ?  'active' : '' }}" >
                                    @endif	
    									<div class="col-sm-4">
    										<div class="product-image-wrapper">
    											<div class="single-products">
    												<div class="productinfo text-center">
    													<img src="{{ $baseUrl  .  $productRecommend->feature_image_path }}" alt="" />
    													<h2>{{ number_format($productRecommend->price ) }} VNĐ</h2>
    													<p>{{ $productRecommend->name }}</p>
    													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
    												</div>
    												
    											</div>
    										</div>
                                        </div>
    								@if($keyRecommend % 3 == 2)
                                    </div>
                                    @endif
								@endforeach
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div>