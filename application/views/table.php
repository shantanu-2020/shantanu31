<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row col-md-10 col-md-offset-1 custyle">
    <table class="table table-bordered">
    <thead>
    <a href="<?php echo site_url('Hello/index');  ?>" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a><hr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Occupation</th>
            <th>Inquiry</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
            <?php $i = 1; foreach ($rows as $row){
            ?>
           
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $row->name;  ?></td>
                <td><?php echo $row->email;  ?></td>
                <td><?php echo $row->mobile;  ?></td>
                <td><?php echo $row->occupation;  ?></td>
                <td><?php echo $row->inquiry;  ?></td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="<?php echo site_url('Hello/edit_table/').$row->id?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="<?php echo site_url('Hello/delete/').$row->id?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            <?php }  ?>
    </table>
    </div>
 
</body>
</html>