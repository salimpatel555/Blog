<?php $this->load->view('admin_header')?>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center my-3">Edit POST</h3>
                    <h6 class="text-center my-3">It's quick and easy.</h6>
                    <?php $this->load->view('alert')?>
                    <form action="<?php echo base_url('edit_post/').$post['id']?>" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" class="form-control" name="title" id="" aria-describedby="helpId"
                                value="<?php echo $post['title']?>">
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <select class="form-control" name="category" id="">
                                <option>Select Category</option>
                                <?php foreach ($cat as $value) {?>

                                <?php if($value['id'] == $post['category']){?>
                                <option value="<?php echo $value['id']?>" selected><?php echo $value['category_name']?>
                                </option>
                                <?php } else { ?>
                                <option value="<?php echo $value['id']?>"><?php echo $value['category_name']?></option>
                                <?php }?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="" aria-describedby="helpId"
                                value="<?php echo $post['image']?>">
                            <img src="<?php echo base_url('uploads/').$post['image']?>"
                                class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                alt="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description:</label>
                            <textarea class="form-control" name="description" value="<?php echo $post['description']?>"
                                rows="3"><?php echo $post['description']?></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" name="submit" id="submit"
                                class="btn btn-primary bg-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php $this->load->view('footer')?>
