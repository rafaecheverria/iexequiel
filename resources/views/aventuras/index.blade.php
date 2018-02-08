@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
    	<a href="#" data-toggle="modal" data-target="#add-aventura-modal" class="btn btn-info pull-right">Agregar</a>
        <div class="card">
			<div class="card-bootom">
	    		<div class="row">
	    			<div class="col-md-12">
						<div class="card-header" data-background-color="blue">
							<h4 class="card-title">AVENTURAS</h4>
						</div>
						<div class="card-content">
							@component('aventuras.list_aventuras')
								@slot('aventuras')
								@endslot
							@endcomponent
						</div>
					</div>
	       		</div>
	       	</div>
		</div>
	</div>
</div>
@include('aventuras.up-aventura')
@include('aventuras.add-user-aventura')
@include('aventuras.view-user-aventura')
@include('aventuras.add-aventura')
@endsection
