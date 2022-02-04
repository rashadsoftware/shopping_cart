@extends('includes.master')

@section('title', 'Home')

@section('content')
	<div class="row">
		@if($products->count() > 0)
			@foreach($products as $product)
			<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
				<div class="card" style="height: 31rem">
					<img src="{{asset('/')}}assets/img/products/{{$product->photo}}" class="card-img-top" alt="product" style="height: 14rem" />
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
							<div class="btn btn-success mb-3" style="cursor:text">in stock</div>
							@else
							<div class="btn btn-secondary mb-3" style="cursor:text">out of stock</div>
							@endif
							<p class="fs-5 fw-bold">{{$product->price}} USD</p>
						</div>

						@if($product->quantity > 0)
							<button class="btn btn-primary w-100 text-capitalize product-cart" data-id="{{ $product->id }}">
								<i class="fas fa-shopping-basket me-2"></i> Add to Cart
							</button>
						@else
							<button disabled class="btn btn-secondary w-100 text-capitalize product-cart" data-id="{{ $product->id }}">
								<i class="fas fa-shopping-basket me-2"></i> Add to Cart
							</button>
						@endif
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
		// this function is for delete card
        $(".product-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            
			$.ajax({
				url: '{{ url('add-to-cart') }}',
				method: "POST",
				data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
				success: function (response) {
					window.location.reload();
					
				}
			});
        });

		// close alert message with setTimeout() function
		setTimeout(() => {
			$(".alert-dismissible").hide();
		}, 3000);
	});
</script>
@endsection
