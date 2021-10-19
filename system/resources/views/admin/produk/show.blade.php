@extends('admin.template')
@section('content')

<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card">
			   </div class="card-header">
			        <div class="row">
			        	<div class="col-md-6">
			        		<h3> Detail Data Produk</h3>
			        	</div>
			        	<div class="card-body">
			        		<h2>{{$produk->nama}}</h2>
			        		<hr>
			        		<p>
			        			Rp. {{number_format($produk->harga)}} 
			        		</p>
			        		<p>
			        			{!! nl2br($produk->deskripsi) !!}
			        		</p>
			        	</div>
			        </div>
			</div>
		</div>	
	</div>
	</div>
</div>

@endsection