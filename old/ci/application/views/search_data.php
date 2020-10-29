<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>CI Search</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>

      <div class="container">


        <br>
        <?php echo form_open("Search/searchUser" , ['class' => 'form-inline']); ?>
            <div class="form-group">
              <input type="text" class="form-control" id="searchuser" name="search" placeholder="Type a name">
            </div>
            <button type="submit" name="searchBtn" class="btn btn-primary submit">Search</button>
            
        <?php echo form_close(); ?>
        <?php echo '<h3 style="color: #26324E;">'.$message.'</h3>';?>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive table-bordered">
                     <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>User Name</th>
                            <th>Password</th>
                            <th>Image</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($records as $row): ?>
                            <tr>


                                 <td><?= $row->id ?></td>
                                <td><?= $row->first_name ?></td>
                                <td><?= $row->last_name ?></td>
                                <td><?= $row->username ?></td>
                                 <td><?= $row->password ?></td>
                                           
                                          <td> <img src="<?php echo base_url($row->image);?>"></td>
                               
                              
                               
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
                <br>
                <?php echo $link ?>    
            </div>
        </div>      
        </div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>