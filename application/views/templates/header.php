<!DOCTYPE html>
<html>
<head>
	<title>ciBlog</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container">
	  	<a class="navbar-brand" href="#">ciBlog</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	  	  <span class="navbar-toggler-icon"></span>
	  	</button>
	  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	  	  <div class="navbar-nav">
	  	    <a class="nav-item nav-link active" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
	  	    <a class="nav-item nav-link" href="<?php echo base_url();?>about">About</a>
	  	    <a class="nav-item nav-link" href="<?php echo base_url();?>posts">Blog</a>
	  	    <a class="nav-item nav-link" href="<?php echo base_url();?>categories">Categories</a>
	  	    
	  	    <?php if(!$this->session->userdata('logged_in')) : ?>
	  	    <a class="nav-item nav-link" href="<?php echo base_url();?>users/register">Register</a>
	  	    <a class="nav-item nav-link" href="<?php echo base_url();?>users/login">Login</a>
	  		<?php endif; ?>
	  		<?php if($this->session->userdata('logged_in')) : ?>
	  		<a class="nav-item nav-link" href="<?php echo base_url();?>posts/create">Create Post</a>
	  	    <a class="nav-item nav-link" href="<?php echo base_url();?>categories/create">Create Category</a>
	  	    <a class="nav-item nav-link" href="<?php echo base_url();?>users/logout">LogOut</a>
	  	    <?php endif; ?>
	  	  </div>
	  	  
	  	</div>
	  </div>
	</nav>

	<div class="container">
<!-- flash message -->
<?php if($this->session->flashdata('user_loggedin')) : ?>
	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
<?php endif; ?>
<?php if($this->session->flashdata('post_updated')) : ?>
	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>';?>
<?php endif; ?>
<?php if($this->session->flashdata('post_created')) : ?>
	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>';?>
<?php endif; ?>
<?php if($this->session->flashdata('category_created')) : ?>
	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>';?>
<?php endif; ?>
<?php if($this->session->flashdata('post_deleted')) : ?>
	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>';?>
<?php endif; ?>
<?php if($this->session->flashdata('category_deleted')) : ?>
	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>';?>
<?php endif; ?>

		
	

