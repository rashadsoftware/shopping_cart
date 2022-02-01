@extends('includes.master')

@section('content')
		<section class="mt-3">
			<div class="container">
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
									<tr style="vertical-align: middle; text-align: center">
										<td>
											<img
												src="assets/img/product/1.png"
												alt="card image"
												width="100"
											/>
										</td>
										<td style="text-align: left">
											<h5 class="card-title">Card Product Title</h5>
											<h6 class="card-subtitle mb-2 text-muted">
												Card category
											</h6>
										</td>
										<td>699$</td>
										<td>
											<input type="text" class="form-control" />
										</td>
										<td>699$</td>
										<td><i class="fas fa-trash-alt"></i></td>
									</tr>
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
					<div class="col-4">
						<div class="card">
							<h5 class="card-header">Card Totals</h5>
							<div class="card-body">
								<table class="table mb-0">
									<tbody>
										<tr>
											<th scope="row">Sub Total</th>
											<td class="text-end">$5877</td>
										</tr>
										<tr>
											<th scope="row">Shipping</th>
											<td class="text-end">$100</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="card-footer">
								<div class="d-flex align-items-center justify-content-between">
									<div class="ps-1">Total</div>
									<div class="pe-2">$5977</div>
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
			</div>
		</section>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="assets/js/jquery-3.6.0.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>
@endsection
