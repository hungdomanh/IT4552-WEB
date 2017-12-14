<h3 class="text-center text-danger">
	@if (\Session::has('alert'))
	<div class="alert alert-warning">
		<ul>
			<li>{!! \Session::get('alert') !!}</li>
		</ul>
	</div>
	@endif
</h3>
<div class="register-grids">
	<div class="container">
		<form action="profile" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
			<div class="register-top-grid">
				<h3>PERSONAL INFORMATION ({{$user->username}})</h3>
				<div>
					<span>Full Name<label>*</label></span>
					<input class="input-text" type="text" name="fullname" required="true" value="{{$user->fullname}}"> 
				</div>
				<div>
					<span>Email Address<label>*</label></span>
					<input class="input-text" type="email" name="email" required="true" value="{{$user->email}}"> 
				</div>
				<div>
					<span>Height(cm)</span>
					<input class="input-text" type="number" name="height" value="{{$user->height}}"> 
				</div>
				<div>
					<span>Weight(kg)</span>
					<input class="input-text" type="number" name="weight" value="{{$user->weight}}"> 
				</div>
				<div>
					<span>Birth of Date</span>
					<input class="input-text" type="date" name="birthday" value="{{$user->birthday}}"> 
				</div>
				<div>
					<span>Address</span>
					<input class="input-text" type="text" name="address" value="{{$user->address}}"> 
				</div>
				<div>
					<span>Job</span>
					<input class="input-text" type="text" name="job" value="{{$user->job}}"> 
				</div>

				<div class="clear"> </div>
				<a class="news-letter" href="#">
					<label class="checkbox">
						<input type="radio" name="purpose" @if ($user->purpose == 1)checked @endif value="1"><i> </i>Member
					</label>
					<label class="checkbox" style="margin-top: 10px">
					<input type="radio" name="purpose" @if ($user->purpose == 2)checked @endif value="2"><i> </i>Trainer
					</label>
					<label class="checkbox" style="margin-top: 10px">
					<input type="radio" name="purpose" @if ($user->purpose == 3)checked @endif value="3"><i> </i>Member & Trainer
					</label>
				</a>
				<div class="clear"> </div>
				<div class="text-center">
					<input style="background: #3097D1;" type="submit" value="Save">
				</div>
			</div>
			<div class="clear"> </div>
		</form>
	</div>
</div>