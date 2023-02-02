 <?php $this->load->view('admin_header')?>
<div class="container my-3">
	<h2 class="text-center">ALL POST</h2>
<a name="" id="" class="btn btn-dark" href="<?php echo base_url('add_post/')?>" role="button">Add Post</a><br>

<div class="row my-3">
	<div class="col" padding="2px">
	<table class="table table-striped table-inverse table-responsive">
	<thead class="thead-inverse">
		<tr>
			<th>Sr.No</th>
			<th>Title</th>
			<th>Category</th>
			<th>Description</th>
			<!-- <th>Image</th> -->
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php $i=1; foreach ($post as $val) {?>
			<tr>
				<td scope="row"><?php echo $i ?></td>
				<td><?php echo $val['title']?></td>
				<td><?php echo $val['category_name']?></td>
				<td><?php echo substr($val['description'],0,50)?></td>
				<!-- <td><img class="img-thumbnail" width="300px" src="<?php echo base_url('uploads/').$val['image']?>" alt="Card image cap"></td> -->
				<td>
					<div>
					<a name="" id="" class="btn btn-dark" href="<?php echo base_url('edit_post/').$val['id']?>" role="button">Edit</a>
					<a name="" id="" class="btn btn-dark" href="<?php echo base_url('delete_post/').$val['id']?>" role="button">Delete</a>
					</div>
				</td>
			</tr>
			<?php $i++; }?>
		</tbody>
</table>
	</div>
</div>
</div>

<?php $this->load->view('footer')?>

