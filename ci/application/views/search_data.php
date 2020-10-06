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
            <button class="btn btn-default more" href="<?php echo site_url('Search') ?>">Refresh</button>
        <?php echo form_close(); ?>
        <?php echo '<h3 style="color: #26324E;">'.$message.'</h3>';?>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive table-bordered">
                    <table class="table">

                    <tr>
                        <th>Id</th>
                        <th>first_name</th>
                        <th>last_name</th>
                        <th>username</th>
                        <th>password</th>
                        <th>image</th>
                    </tr>

                    <?php if (count($records)): ?>

                    <?php foreach ($records as $row): ?>

                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->first_name; ?></td>
                        <td><?php echo $row->last_name; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->password; ?></td>
                        <td><?php echo $row->image; ?></td>
                      

                    <?php endforeach; ?>

                    <?php else: ?>
                        <center><p style="margin: 20px;">No users registered</p></center>
                    <?php endif ?>
        
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