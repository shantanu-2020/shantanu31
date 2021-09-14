<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap.min.css');  ?>">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">

    <form action="<?php echo site_url('Hello/register'); ?>" method="post">
  <div class="mb-3">
    <label>Name</label>
    <h5 style="color: red"><?php echo form_error('name');  ?></h5>
    <input type="text" class="form-control" name="name" value="<?= set_value('name');?>">
   
  </div>
  <div class="mb-3">
    <label>Email</label>
    <h5 style="color: red"><?php echo form_error('email');  ?></h5>
    <input type="text" class="form-control" name="email" value="<?= set_value('email');?>">
  </div>
  <div class="mb-3">
    <label>Mobile</label>
    <h5 style="color: red"><?php echo form_error('mobile');  ?></h5>
    <input type="text" class="form-control" name="mobile" value="<?= set_value('mobile');?>">
  </div>
  <div class="mb-3">
    <label>Occupation</label>
    <h5 style="color: red"><?php echo form_error('occupation');  ?></h5>
    <input type="text" class="form-control" name="occupation" value="<?= set_value('occupation');?>">
  </div>
  <div class="mb-3">
    <label>Inquiry</label>
    <h5 style="color: red"><?php echo form_error('inquiry');  ?></h5>
    <input type="text" class="form-control" name="inquiry" value="<?= set_value('inquiry');?>">
  </div>
 
  <button type="submit" class="btn btn-primary" name="register">Submit</button>
</form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>