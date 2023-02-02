<?php $this->load->view('header')?>

<div class="container my-3">
<a name="" id="" class="btn btn-dark" href="<?php echo base_url('add_post/')?>" role="button">ADD POST</a><br>
    <div class="row my-3">
        <?php foreach ($post as $val) {?>
        <div class="col-md-4">
            <div class="card" width="400px">
                <img class="img-thumbnail" width="400px" 
                    src="<?php echo base_url('uploads/').$val['image']?>" alt="Card image cap">
                <div class="card-body">
                    <!-- <h5 class="card-title"><?php echo $val['category_name']?></h5> -->
                    <strong class="card-text"><?php echo strtoupper($val['title'])?></strong>
					<p class="card-text"><?php echo substr($val['description'],0,100)?></p>

                    <a href="<?php echo base_url('post_details/').$val['id']?>" class="btn btn-primary">
                        Read More..</a>						
                </div>
                <div class="card-footer">
				    <small class="text-muted"><?php echo $val['name']?></small>
                    <!-- <small class="text-muted"><?php echo $val['created_at']?></small> -->
                </div>
            </div><br />
        </div>
        <?php }?>
    </div>

</div>


<?php $this->load->view('footer')?>
