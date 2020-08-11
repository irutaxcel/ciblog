<?php echo form_open('users/login') ;?>
	<div class="row">
		<div class="col-md-4 form-login">
			<h1 class="text-center"><?= $title; ?></h1>
			<?php if($this->session->flashdata('loggin_failed')) : ?>
				<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('loggin_failed').'</p>';?>
			<?php endif; ?>
			<?php if($this->session->flashdata('user_loggedout')) : ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>';?>
			<?php endif; ?>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" required autofocus placeholder="Enter Username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required autofocus placeholder="Enter Password">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
<?php echo form_close() ;?>