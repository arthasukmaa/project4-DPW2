@extends('admin.template')
@section('content')

	<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card">
			   </div class="card-header">
			        <div class="row">
			        	<div class="col-md-6">
			        		<h3>Data Produk</h3>
			        	</div>
			        	<div class="col-md-6">
			        		<a href="{{url('admin/produk/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus" data-feather="plus"></i> Tambah</a>
			        	</div>
			        	@include('admin.utils.notif')
			        	<div class="card-body">
			        		<table class="table">
			        			<thead>
			        				<th>No</th>
			        				<th>Aksi</th>
			        				<th>Nama</th>
			        				<th>Harga</th>
			        			</thead>
			        			<tbody>
			        				@foreach($list_produk as $produk)
			        				<tr>
			        					<td>{{$loop->iteration}}</td>
			        					<td>
			        						<div class="btn-group">
			        						<a href="{{url('admin/produk', $produk->id)}}" class="btn btn-dark" ><i  class="fa fa-info" data-feather="info"></i></a>
			        						<a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"data-feather="edit" ></i></a>
			        						@include('admin.utils.delete', ['url' => url('admin/produk', $produk->id)])
                                            </div>
			        					</td>
			        					<td>{{$produk->nama}}</td>
			        					<td>{{$produk->harga}}</td>
			        				</tr>
			        				@endforeach
			        			</tbody>
			        		</table>
			        	</div>
			        </div>
			   </div>
			</div>	
		</div>
	</div>
</div>

@endsection