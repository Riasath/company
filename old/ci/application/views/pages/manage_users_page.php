<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">


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
            <h3 class="title is-3">User Information</h3>

          <?php echo form_open("Search/searchUser" , ['class' => 'form-inline']); ?>
            <div class="form-group">
              <input type="text" class="form-control" id="searchuser" name="search" placeholder="Type a name">
            </div>
            <button type="submit" name="searchBtn" class="btn btn-primary submit">Search</button>
           
        <?php echo form_close(); ?>

              
            <div class="column">
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
                        <?php foreach ($users as $user): ?>
                            <tr>


                                 <td><?= $user->id ?></td>
                                <td><?= $user->first_name ?></td>
                                <td><?= $user->last_name ?></td>
                                <td><?= $user->username ?></td>
                                 <td><?= $user->password ?></td>
                                           
                                          <td> <img src="<?php echo base_url($user->image);?>"></td>
                               
                              
                               
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p><?php echo $links; ?></p>
            </div>
        </div>
    </body>
</html>
