<?php $this->load->view('admin_header')?>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center my-3">ADD POST</h3>
                    <h6 class="text-center my-3">It's quick and easy.</h6>
                    <?php $this->load->view('alert')?>
                    <form action="<?php echo base_url('add_post')?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" class="form-control" name="title" id=""
                                aria-describedby="helpId" placeholder="Title">
                        </div>
						<div class="form-group">
						  <label for=""></label>
						  <select class="form-control" name="category" id="">
							<option>Select Category</option>
							<?php foreach ($cat as $value) {?>							
							<option value="<?php echo $value['id']?>"><?php echo $value['category_name']?></option>
							<?php }?>
						  </select>
						</div>
						<div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id=""
                                aria-describedby="helpId" placeholder="Image">
                        </div>
						<div class="mb-3">
						  <label for="" class="form-label">Description:</label>
						  <textarea class="form-control" name="description" rows="3"></textarea>
						</div>

                        <div class="form-group text-center">
                            <button type="submit" name="submit" id="submit"
                                class="btn btn-primary bg-success">ADD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>


<?php $this->load->view('footer')?>
