@extends('includes.master')

@section('title', 'Integrations')

@section('content')
	<div class="row">
        <div class="mb-3 col-12 col-md-6 col-xl-4">
            <div class="card" style="height:18rem">
                <div class="card-body">
                    <h5 class="card-title">Aliexpress</h5>
                    <p class="card-text">Aliexpress, milyonlarca ürünün direkt olarak son kullanıcıya ulaştırılabileceği en büyük alışveriş sitelerinden bir tanesidir. Alibaba Group tarafından 2010 yılında kurulmuştur. Çinli üretim yapan firmaların yabancı ülkelere ürün satabilecekleri bir platform olarak kurulmuştur.</p>
                </div>
                <div class="card-footer" style="background:none; border-top:none">
                    <a target="_blank" href="{{route('integrations.item.connect', 'Aliexpress')}}" class="btn btn-primary">Connect</a>
                </div>
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-xl-4">
            <div class="card" style="height:18rem">
                <div class="card-body">
                    <h5 class="card-title">Amazon</h5>
                    <p class="card-text">Amazon, 1994 yılında Jeff Bezos tarafından Cadabra adıyla kuruldu ve 1995 yılında Amazon.com olarak çevrimiçi hale geldi. Yola online bir kitapçı olarak çıkan Amazon, zaman içinde dünyanın en büyük e-ticaret sitesi haline geldi.</p>
                </div>
                <div class="card-footer" style="background:none; border-top:none">
                    <a target="_blank" href="{{route('integrations.item.connect', 'Amazon')}}" class="btn btn-primary">Connect</a>
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
