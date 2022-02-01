@extends('includes.master')

@section('content')
		<section class="mt-3">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="card">
							<div class="card-body">
								<h4 class="mb-4">Billing details</h4>
								<div class="row">
									<div class="col">
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label"
												>First Name</label
											>
											<input
												type="text"
												class="form-control"
												placeholder="First name"
												aria-label="First name"
											/>
										</div>
									</div>
									<div class="col">
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label"
												>Second Name</label
											>
											<input
												type="text"
												class="form-control"
												placeholder="Last name"
												aria-label="Last name"
											/>
										</div>
									</div>
								</div>
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label"
										>Company Name</label
									>
									<input
										type="text"
										class="form-control"
										id="exampleFormControlInput1"
										placeholder="name@example.com"
									/>
								</div>
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label"
										>Country</label
									>
									<select
										class="form-select"
										aria-label="Default select example"
									>
										<option selected>Select Country</option>
										<option value="az">Azerbaijan</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label"
										>Street Address</label
									>
									<input
										type="text"
										class="form-control"
										placeholder="Street Address"
										aria-label="Last name"
									/>
								</div>
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label"
										>Apartment, suite, unit etc. (Optional)</label
									>
									<input
										type="text"
										class="form-control"
										placeholder="Street Address"
										aria-label="Last name"
									/>
								</div>
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label"
										>Town / City</label
									>
									<input
										type="text"
										class="form-control"
										placeholder="Street Address"
										aria-label="Last name"
									/>
								</div>
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label"
										>State / County</label
									>
									<input
										type="text"
										class="form-control"
										placeholder="Street Address"
										aria-label="Last name"
									/>
								</div>
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label"
										>Postcode / ZIP</label
									>
									<input
										type="text"
										class="form-control"
										placeholder="Street Address"
										aria-label="Last name"
									/>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="card">
							<div class="card-body">
								<h4 class="mb-4">Your Order</h4>
								<table class="table mb-5">
									<thead>
										<tr>
											<th scope="col">Product</th>
											<th scope="col">Total</th>
											<th scope="col"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Undefined Tool IRadix DPS3000SY</td>
											<td>$5877</td>
											<td><i class="fas fa-trash-alt"></i></td>
										</tr>
										<tr>
											<td>Product Total Electric Planer Brandix KL370090G</td>
											<td>$100</td>
											<td><i class="fas fa-trash-alt"></i></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>Total</th>
											<td>$2585</td>
											<td></td>
										</tr>
									</tfoot>
								</table>
								<div class="accordion" id="accordionExample">
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingOne">
											<button
												class="accordion-button"
												type="button"
												data-bs-toggle="collapse"
												data-bs-target="#collapseOne"
												aria-expanded="true"
												aria-controls="collapseOne"
											>
												Direct bank transfer
											</button>
										</h2>
										<div
											id="collapseOne"
											class="accordion-collapse collapse show"
											aria-labelledby="headingOne"
											data-bs-parent="#accordionExample"
										>
											<div class="accordion-body">
												<strong
													>This is the first item's accordion body.</strong
												>
												It is shown by default, until the collapse plugin adds
												the appropriate classes that we use to style each
												element. These classes control the overall appearance,
												as well as the showing and hiding via CSS transitions.
												You can modify any of this with custom CSS or overriding
												our default variables. It's also worth noting that just
												about any HTML can go within the
												<code>.accordion-body</code>, though the transition does
												limit overflow.
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingTwo">
											<button
												class="accordion-button collapsed"
												type="button"
												data-bs-toggle="collapse"
												data-bs-target="#collapseTwo"
												aria-expanded="false"
												aria-controls="collapseTwo"
											>
												Check payments
											</button>
										</h2>
										<div
											id="collapseTwo"
											class="accordion-collapse collapse"
											aria-labelledby="headingTwo"
											data-bs-parent="#accordionExample"
										>
											<div class="accordion-body">
												<strong
													>This is the second item's accordion body.</strong
												>
												It is hidden by default, until the collapse plugin adds
												the appropriate classes that we use to style each
												element. These classes control the overall appearance,
												as well as the showing and hiding via CSS transitions.
												You can modify any of this with custom CSS or overriding
												our default variables. It's also worth noting that just
												about any HTML can go within the
												<code>.accordion-body</code>, though the transition does
												limit overflow.
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingThree">
											<button
												class="accordion-button collapsed"
												type="button"
												data-bs-toggle="collapse"
												data-bs-target="#collapseThree"
												aria-expanded="false"
												aria-controls="collapseThree"
											>
												PayPal
											</button>
										</h2>
										<div
											id="collapseThree"
											class="accordion-collapse collapse"
											aria-labelledby="headingThree"
											data-bs-parent="#accordionExample"
										>
											<div class="accordion-body">
												<strong
													>This is the third item's accordion body.</strong
												>
												It is hidden by default, until the collapse plugin adds
												the appropriate classes that we use to style each
												element. These classes control the overall appearance,
												as well as the showing and hiding via CSS transitions.
												You can modify any of this with custom CSS or overriding
												our default variables. It's also worth noting that just
												about any HTML can go within the
												<code>.accordion-body</code>, though the transition does
												limit overflow.
											</div>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary w-100 mt-4">
									Place Order
								</button>
							</div>
						</div>
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
