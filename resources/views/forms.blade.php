<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<br>
			<br>
				<form action="" method="post" class="form-horizontal">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" @if(isset($nama)) value="{{ $nama }}" @endif>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" @if(isset($email)) value="{{ $email }}" @endif>
					</div>
					<label>Jenis Kelamin</label>
					<div class="radio">
					  	<label>
					    	<input type="radio" name="gender" id="laki" value="m"
					    	@if(isset($gender))
					    		@if($gender=='m')
					    		checked 
					    		@endif
				    		@else checked
				    		@endif>
					    Laki-laki
					  	</label>
					</div>
					<div class="radio">
					  	<label>
					    	<input type="radio" name="gender" id="perempuan" value="f"
					    	@if(isset($gender))
					    		@if($gender=='f')
					    		checked 
					    		@endif
				    		@endif>
					    Perempuan
					  	</label>
					</div>
					<br>
					<label>Senjata Pilihan <br> <sup>Bisa pilih lebih dari satu</sup></label>
					<div class="checkbox">
					  	<label>
					    	<input type="checkbox" value="sword" name="weapon[]"
							@if(isset($weapon) && in_array('sword', $weapon))
							checked 
							@endif>Sword
					  	</label>
					</div>
					<div class="checkbox">
					  	<label>
					    	<input type="checkbox" value="shield" name="weapon[]"
					    	@if(isset($weapon) && in_array('shield', $weapon))
							checked 
							@endif>Shield
					  	</label>
					</div>
					<div class="checkbox">
					  	<label>
					    	<input type="checkbox" value="gun" name="weapon[]"
					    	@if(isset($weapon) && in_array('gun', $weapon))
							checked 
							@endif>Gun
					  	</label>
					</div>
					<br>
					<button type="submit" class="btn btn-warning btn-block">Submit</button>
				</form>
				<br>
				<br>

				@if(isset($nama))
					Halo, {{ $nama }}
				@endif
				<br>
				@if(isset($email))
					Email kamu {{ $email }}
				@endif
				<br>
				@if(isset($gender))
					@if($gender=='m')
						Kamu Seorang Laki-Laki
					@else
						Kamu Seorang Perempuan
					@endif
				@endif
				<br>
				@if(isset($weapon))
					Senjata Pilihan :
					@foreach($weapon as $weap)
					<br>-> {{ ucwords($weap) }}
					@endforeach
					{{-- @for($x=0; $x<count($weapon); $x++)
					<br>-> {{ $weapon[$x] }}
					@endfor --}}
				@endif
			</div>
		</div>
	</div>
	<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>