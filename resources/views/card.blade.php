@extends('includes.master')

@section('content')
	<div class="row">
		<div class="col-12">
			<div class="card p-3">
				<table class="table">
					<thead>
						<tr style="text-align: center">
							<th scope="col" style="width: 60px">Image</th>
							<th scope="col" style="text-align: left">Product Name</th>
							<th scope="col">Price</th>
							<th scope="col" style="width: 10%">Quantity</th>
							<th scope="col">Total</th>
							<th scope="col">Total</th>
						</tr>
					</thead>
					<tbody>
						<?php $total = 0 ?>
						@if(session('cart'))						
						@foreach(session('cart') as $id => $details)
							<?php $total += $details['price'] * $details['quantity'] ?>
								<tr style="vertical-align: middle; text-align: center">
									<td>
										<img src="assets/img/products/{{ $details['photo'] }}" alt="card image" width="100" />
									</td>
									<td style="text-align: left">
										<h5 class="card-title">{{ $details['name'] }}</h5>
										<h6 class="card-subtitle mb-2 text-muted">
											{{ $details['category'] }}
										</h6>
									</td>
									<td>{{ $details['price'] }}$</td>
									<td>
										@php $quantity_count=DB::table('products')->where('id', $id)->first() @endphp
										<input type="number" class="form-control text-center update-cart quantity" value="{{ $details['quantity'] }}" data-id="{{ $id }}" max="{{$quantity_count->quantity}}"/>
									</td>
									<td>${{ $details['price'] * $details['quantity'] }}$</td>
									<td><button class="btn btn-danger remove-from-cart" data-id="{{ $id }}"><i class="fas fa-trash-alt remove-from-cart"></i></button></td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="d-flex justify-content-between align-items-center">
			<a href="{{route('index')}}" class="btn btn-primary">Continue Shopping</a>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
			<div class="card">
				<h5 class="card-header">Card Totals</h5>
				<div class="card-body">
					<table class="table mb-0">
						<tbody>
							<tr>
								<th scope="row">Sub Total</th>
								<td class="text-end">${{ $total }}</td>
							</tr>
							<tr>
								<th scope="row">Shipping</th>
								<td class="text-end">${{ $shipping=100 }}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					<div class="d-flex align-items-center justify-content-between">
						<div class="ps-1">Total</div>
						<div class="pe-2">${{ $total+$shipping }}</div>
					</div>
				</div>
			</div>
			<a
				href="{{route('checkout')}}"
				class="btn btn-primary mt-3 text-uppercase d-block"
				>Proceed to checkout</a
			>
		</div>
	</div>
@endsection

@section('scripts')
    <script type="text/javascript">
		// this function is for update card
        $(".update-cart").change(function (e) {
           e.preventDefault();
		   var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

		// this function is for delete card
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                        
                    }
                });
            }
        });

		// close alert message with setTimeout() function
		setTimeout(() => {
			$(".alert-dismissible").hide();
		}, 3000);
    </script>

@endsection
