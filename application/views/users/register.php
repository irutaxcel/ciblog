

<?php echo validation_errors();?>

<?php echo form_open('users/register')?>
	<div class="row">
		<div class="col-md-4 form-login">
			<h1 class="text-center"><?= $title; ?></h1>
			<?php if($this->session->flashdata('user_registered')) : ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
			<?php endif; ?>
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Enter name">
			</div>
			<div class="form-group">
				<label>Zip Code</label>
				<input type="text" class="form-control" name="zipcode" placeholder="Enter zipcode">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Enter username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Enter password">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			<button class="btn btn-primary btn-block" type="submit">Register</button>
		</div>
	</div>
<?php echo form_close(); ?>