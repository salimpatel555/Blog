<?php $this->load->view('admin_header')?>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center my-3">ADD CATEGORY</h3>
                    <h6 class="text-center my-3">It's quick and easy.</h6>
                    <?php $this->load->view('alert')?>
                    <form action="<?php echo base_url('add_category')?>" method="post">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" class="form-control" name="category_name" id="category_name"
                                aria-describedby="helpId" placeholder="Category Name">
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
