<?php $this->load->view('admin_header')?>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-sm-9">
            <div class="card">
                <div class="card-body">
				<?php $this->load->view('alert')?>

					<a class="btn btn-primary" href="<?php echo base_url('add_category')?>" role="button">Add Category</a>
                    <h3 class="text-center ">ALL CATEGORY</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
                                <th>Category Name</th>
								<th>Created</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table">
							<?php if($cat){?>
								<?php $i=1; foreach ($cat as $value) {?>
								<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value['category_name']?></td>
								<td><?php echo $value['created_at']?></td>
								<td><a name="" id="" class="btn btn-warning" href="<?php echo base_url('edit_category/').$value['id']?>">Edit</a>
								<a name="" id="" class="btn btn-danger" href="<?php echo base_url('delete_category/').$value['id']?>">Delete</a></td>
								</tr>
							<?php $i++; }?>
							<?php }else {?>
								<p>Category Not Found</p>
							<?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
