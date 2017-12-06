<div class="register-grids">
	<div class="container">
		<form action="signup" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
			<div class="register-top-grid">
				<h3>PERSONAL INFORMATION</h3>
				<div>
					<span>Full Name<label>*</label></span>
					<input type="text" name="fullname" required="true"> 
				</div>
				<div>
					<span>Email Address<label>*</label></span>
					<input type="email" name="email" required="true"> 
				</div>

				<div class="clear"> </div>
				<a class="news-letter" href="#">
					<label class="checkbox"><input type="radio" name="purpose" checked value="1"><i> </i>Member</label>
					<label class="checkbox" style="margin-top: 10px"><input type="radio" name="purpose" value="2"><i> </i>Trainer</label>
					<label class="checkbox" style="margin-top: 10px"><input type="radio" name="purpose" value="3"><i> </i>Member & Trainer</label>
				</a>
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
			<div class="register-bottom-grid">
				<h3>LOGIN INFORMATION</h3>
				<div>
					<span>Username<label>*</label></span>
					<input type="text" name="username" required="true"> 
				</div>
				<div>
					<span>Password<label>*</label></span>
					<input type="password" name="password" required="true">
					<span>Confirm Password<label>*</label></span>
					<input type="password" name="password_confirm" required="true">
				</div>
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
			<input class="text-center" type="submit" value="submit">
		</form>
	</div>
</div>