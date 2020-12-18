
<div class="content-wrapper">
  <form action="<?php echo base_url()?>" method="post" enctype="multipart/form-data">
  <div class="container">
  
<table style="margin-top: 40px;" class="table table-striped table-bordered bootstarp-datatale datatable">


  <thead>
    <tr>
    <th>ID</th>
    
    
    <th>Client head
     Title</th>
    <th>Client head
     Details</th>
    
  </tr>
    <tbody>
      <tr>
      <td>
      <h4><?php echo $all_contact_head_view_by_id->id ?></h4>
  
      </td>
     
      
      <td>
        <h4>
          <?php echo $all_contact_head_view_by_id->title ?>
        </h4>
      </td>
       <td>
        <h4>
          <?php echo $all_contact_head_view_by_id->details?>
        </h4>
      </td>
      
      <tr/>
    </tbody>
  </thead>
</table>
 
  </div>
</form>
</div>


