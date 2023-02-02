<?php $this->load->view('header')?>
  <div class="container my-3">
  <h3 class="text-center my-3">My Blog</h3>
	<div class="row my-3 justify-content-center">
		<div class="col-4 border border-solid rounded">
			<h5 class="text-center my-3">Login</h5>
			<?php $this->load->view('alert')?>
			<form action="<?php echo base_url('login')?>" method="post">
			<div class="form-group">
			  <label for=""></label>
			  <input type="email"
				class="form-control" name="email" id="email" value="<?php echo set_value('email')?>" aria-describedby="helpId" placeholder="Enter Email">
			</div>
			<div class="form-group">
			  <label for=""></label>
			  <input type="password"
				class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Enter Password">
			</div>
			<div class="form-group">
			<button type="submit" class="btn btn-primary bg-primary btn-block">Login</button>
			</div>
			<div class="form-group">
			<a class="text-dark " href="<?php echo base_url('register')?>">Forgotten account?</a>
			<a class="text-dark float-right" href="<?php echo base_url('register')?>">Sign Up Blog?</a>
			</div>
            </form>
		</div>
	</div>
  </div>

  <?php $this->load->view('footer')?>

