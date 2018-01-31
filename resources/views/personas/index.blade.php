@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
			<div class="card-bootom">
	    		<div class="row">
	    			<div class="col-md-12">
						<div class="card-header" data-background-color="blue">
							<h4 class="card-title">PERSONAS</h4>
						</div>
						<div class="card-content">
							@component('personas.list_personas')
								@slot('personas')
								@endslot
							@endcomponent
						</div>
					</div>
	       		</div>
	       	</div>
		</div>
	</div>
</div>
@include('personas.up-persona')
@include('personas.up-encuesta')
@endsection


