<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Create Dropdown</h3>
                    </div>
                     <div class="col-md-2">
            <a href="<?php echo base_url('Admin/dropdown') ?>">
              <button type='button' id="" class='btn bg-success'>Dropdown</i>
              </button></a>
          </div>
                </div>
            </div>

            <?= alert_check() ?>
            <section class="content" style="margin-top:20px">
                <div class="container-fluid">
                    
                        
    <form action="<?php echo base_url() ?>save-dropdown" method="post" enctype="multipart/form-data">
                               

   <div class="row">
     
    <div class="col-md-6">
         <h2><span class="text-danger">Must select MainMenu Name</span>  </h2>
        <select class="form-control" name="m_id" id="m_id">
        <option value="" disabled>Select a parent menu</option>
      <?php foreach ($main_menu as $key => $value): ?>
        <option value="<?=$value->m_id?>"><?=$value->m_name?></option>
      <?php endforeach ?>
      </select>
     </div>
       <div class="col-md-6">
        <h4>Dropdown Item Menu Name</h4>
         <input type="text"  class="form-control" placeholder="Enter Items name" name="m_item_name" id="m_item_name" required>
     </div>
       <div class="col-md-6">
        <h4>Dropdown Item  Menu URL</h4>
         <input type="text"  class="form-control" placeholder="Enter  url " name="m_item_url" id="m_item_url" required>
     </div>
     <div class="col-md-6">
        <h4>Dropdown Item  Menu Description</h4>
         <input type="text"  class="form-control" placeholder="Enter  description " name="m_item_desc" id="m_item_desc" required>
     </div>
       
     </div>  
         <button type="submit" style="margin:20px; " class="btn btn-danger">Submit</button></br>                      
         </form>
                        
                    

                </div>
            </section>
        </div>
        <div class="card-header" style="background:#DC3545; ">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Easy Way To Understand</h3>
                    </div>
                </div>


            </div>
             <img class="img-fluid" src="<?php echo base_url('assets')?>/images/dropdown.png">
        </div>

    </div>

</div>

<!-- /.card-body -->