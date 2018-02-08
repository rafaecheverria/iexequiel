@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
			<div class="card-bootom">
	    		<div class="row">
	    			<div class="col-md-12">
						<div class="card-header" data-background-color="blue">
							<h4 class="card-title">HISTORIAL DE AVENTURAS</h4>
						</div>
						<div class="card-content">
							@component('historial.list_historial')
								@slot('historial')
								@endslot
							@endcomponent
						</div>
					</div>
	       		</div>
	       	</div>
		</div>
	</div>
</div>
@endsection
