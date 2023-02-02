<?php $this->load->view('header')?>

<div class="container my-3">

		<div class="row mb-2 justify-content-center">
			<div class="col-md-10">
				<div
					class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
					<div class="col p-4 d-flex flex-column position-static">
						<strong class="d-inline-block mb-2 text-primary"><?php echo $post['category_name']?></strong>
						<h3 class="mb-0"><?php echo $post['title']?></h3>
						<p class="card-text mb-auto"><?php echo $post['description']?></p>
						<div class="mb-1 text-muted">Date: <?php echo $post['created_at']?></div>
						<div class="mb-1 text-muted">Name: <?php echo $post['name']?></div>


					</div>
					<div class="col-auto d-none d-lg-block">
						<img class="img-thumbnail" width="300px" src="<?php echo base_url('uploads/').$post['image']?>">
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>


<?php $this->load->view('footer')?>
