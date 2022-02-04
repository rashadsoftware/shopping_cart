@extends('includes.master')

@section('title', 'Customers')

@section('content')
	<div class="row">
        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
            <div class="card" style="height: 27rem">
                <img src="{{asset('/')}}assets/img/products/1.jpg" class="card-img-top" alt="customer" style="height: 14rem">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
	$(function(){
		
	});
</script>
@endsection
