<?php $this->load->view('header')?>
  <div class="container my-3">
	<div class="row my-3 justify-content-center">
		<div class="col-5 border rounded">
			<h3 class="text-center my-3">Create a new account</h3>
			<h6 class="text-center my-3">It's quick and easy.</h6>
			<?php $this->load->view('alert')?>
			<form action="<?php echo base_url('register')?>" method="post">
			<div class="form-group">
			  <label for=""></label>
			  <input type="text"
				class="form-control" name="name" id="name" value="<?php echo set_value('name')?>" aria-describedby="helpId" placeholder="Name">
			</div>
			<div class="form-group">
			  <label for=""></label>
			  <input type="email"
				class="form-control" name="email" id="email" value="<?php echo set_value('email')?>" aria-describedby="helpId" placeholder="Email">
			</div>
			<div class="form-group">
			  <label for=""></label>
			  <input type="password"
				class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Password">
			</div>

			<div class="form-group">
			  <label for=""></label>
			  <input type="password"
				class="form-control" name="cpassword" id="cpassword" aria-describedby="helpId" placeholder="Conform Password">
			</div>

			<div class="form-group text-center">
			<button type="submit" name="submit" id="submit" class="btn btn-primary bg-success">SignUp</button>
			</div>
			<div class="form-group text-center">
			<a class="text-primary text-center" href="<?php echo base_url('login')?>">Already have an account?</a>
			</div>
            </form>
		</div>
	</div>
  </div>

  <?php $this->load->view('footer')?>

