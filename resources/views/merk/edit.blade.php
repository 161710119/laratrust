@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Merk 
			  	<div class="panel-title pull-right"><a <a class="btn btn-success" href="{{ route('merks.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('merks.update',$merks->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Merk Mobil</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $merks->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
			  			<label class="control-label">Warna Mobil</label>	
			  			<input type="text" name="warna" class="form-control" value="{{ $merks->warna }}"  required>
			  			@if ($errors->has('warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
					  </div>
					  
					  <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $merks->deskripsi }}"  required>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection