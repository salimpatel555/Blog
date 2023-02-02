<?php $this->load->view('admin_header')?>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center my-3">Edit CATEGORY</h3>
                    <h6 class="text-center my-3">It's quick and easy.</h6>
                    <?php $this->load->view('alert')?>
                    <form action="<?php echo base_url('edit_category/').$cat['id']?>" method="post">
                        <div class="form-group">
                            <label for="">Category Name:</label>
                            <input type="text" class="form-control" name="category_name" value="<?php echo $cat['category_name']?>">
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
