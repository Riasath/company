<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="front-end/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
<div class="box-content">

    <table class="table table-striped table-bordered bootstarp-datatale datatable">
        <thead>
            <tr>
                <th>Category ID</th>
                 <th> First name</th>
                 <th>Last Name </th>
                 <th>User Name</th>
                 <th>Password</th>
                 <th>Active/Inactive </th>

            </tr>
            <tbody>
                <?php 
                foreach($all_users_info as $v_users){

                ?>
                      <tr>
        <td class="center"><?php echo $v_users->id ?></td>
        <td class="center"><?php echo $v_users->first_name ?></td>
        <td class="center"><?php echo $v_users->last_name ?></td>
        <td class="center"><?php echo $v_users->username ?></td>
        <td class="center"><?php echo $v_users->password ?></td>



                        </tr>
                         <?php } ?>


        </tbody>
        </thead>

    </table>

</div>
</body>
</html>



