@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Guru 
			  	<div class="panel-title pull-right"><a <a class="btn btn-success" href="{{ route('merks.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Merk Mobil</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $merks->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Warna Mobil</label>	
			  			<input type="text" name="warna" class="form-control" value="{{ $merks->warna }}"  readonly>
					  </div>
					  
					  <div class="form-group">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $merks->deskripsi }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Murid</label><input type="text" name="nipd" class="form-control" value="@foreach($a->murid as $data) -{{ $data->nama }}@endforeach" readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection