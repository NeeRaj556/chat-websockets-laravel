@extends('main')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-4">
		@if($message = Session::get('success'))
		<div class="alert alert-success">
			{{ $message }}
		</div>
		@endif
		<div class="card">
			<div class="card-header">Profile</div>
			<div class="card-body">
				<form action="{{ route('sample.profile_validation') }}" method="POST" enctype="multipart/form-data">
					@csrf
					@foreach($data as $row)
					<div class="form-group mb-3">
						<input type="text" name="name" class="form-control" value="{{ $row->name }}" />
						@if($errors->has('name'))
						<span class="text-danger">{{ $errors->first('name') }}</span>
						@endif
					</div>
					<div class="form-group mb-3">
						<input type="text" name="email" class="form-control" value="{{ $row->email }}" />
						@if($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
					</div>
					<div class="form-group mb-3">
						<input type="password" name="password" class="form-control" />
					</div>
					<div class="form-group mb-3">
						<input type="file" name="user_image" />
						@if($errors->has('user_image'))
						<span class="text-danger">{{ $errors->first('user_image') }}</span>
						@endif
						<br />
						@if($row->user_image != '')
						<img src="{{ asset('images/' . $row->user_image) }}" width="150" class="img-thumbnail" />
						@endif
						<input type="hidden" name="hidden_user_image" value="{{ $row->user_image }}" />
					</div>
					<div class="d-grid mx-auto">
						<button type="submit" class="btn btn-dark btn-block">Save</button>
					</div>
					@endforeach
				</form>
			</div>
		</div>
	</div>
</div>

@endsection('content')