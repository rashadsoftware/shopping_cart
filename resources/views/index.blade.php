@extends('includes.master')

@section('content')
	<div class="row">
		@if($products->count() > 0)
			@foreach($products as $product)
			<div class="col-12 col-md-6 col-lg4 col-xl-3 mb-3">
				<div class="card" style="height: 31rem">
					<img
						src="assets/img/products/{{$product->photo}}"
						class="card-img-top"
						alt="product"
						style="height: 14rem"
					/>
					<div class="card-body">
						<h5 class="card-title">{{$product->name}}</h5>
						<h6 class="card-subtitle mb-2 text-muted">{{$product->category}}</h6>
						<p class="card-text">
							{{Str::substr($product->description, 0, 80)}}
						</p>
					</div>
					<div class="card-footer" style="border-top:none; background:none">
						<div class="d-flex justify-content-between align-items-center">
							@if($product->quantity > 0)
							<div class="btn btn-success mb-3">in stock</div>
							@else
							<div class="btn btn-secondary mb-3">out of stock</div>
							@endif
							<p class="fs-5 fw-bold">{{$product->price}} USD</p>
						</div>

						<a href="{{route('add_to_cart', $product->id)}}" class="btn btn-primary d-block text-capitalize">
							<i class="fas fa-shopping-basket me-2"></i> Add to Cart
						</a>
					</div>
				</div>
			</div>
			@endforeach
		@else
		<div class="col-12">
			<div class="alert alert-info">There are no products</div>
		</div>
		@endif
	</div>
@endsection

@section('scripts')
<script>
	$(function(){
		// close alert message with setTimeout() function
		setTimeout(() => {
			$(".alert-dismissible").hide();
		}, 3000);
	});
</script>
@endsection
