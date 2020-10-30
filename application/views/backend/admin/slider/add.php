<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Add New Slider</h3>
                    </div>

                    <div class="col-md-2">
                        <a href="<?php echo base_url('Admin/list_slider') ?>">
                            <button type='button' id="" class='btn bg-danger'>Slider List</i>
                            </button></a>
                    </div>
                </div>


            </div>

            <?= alert_check() ?>
            <section class="content" style="margin-top:20px">
                <div class="container-fluid">
                    
                        
                            <form action="<?php echo base_url() ?>Admin/save_slider" method="post" enctype="multipart/form-data">
                               


                                    <label for="slider_image"><b>Upload Slider Image</b></label></br>
                                    <input type="file" placeholder="Enter First Name" name="slider_image" id="slider_image" required>
                                    </br>
                                    </br>
                                    </br>


                                    <label for="slider_descriptions"><b>Add Slider Title</b></label></br>
                                    <input type="text" placeholder="Enter slider title" name="slider_descriptions" id="slider_descriptions" required></br>
                                    <label for="slider_about"><b>Add Slider Details</b></label></br>
                                    <input type="text" placeholder="Enter slider details" name="slider_about" id="slider_about" required></br>



                                    <button type="submit" class="registerbtn">Submit</button></br>

                                
                            </form>
                        
                    

                </div>
            </section>
        </div>
    </div>
</div>

<!-- /.card-body -->