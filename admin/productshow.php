<!DOCTYPE html>
<html>
<?php

include('adminpartials/session.php');
include('adminpartials/head.php');
?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php
    include("adminpartials/header.php");
    ?>

    <!-- Left side column. contains the logo and sidebar -->

    <?php
    include("adminpartials/aside.php");
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-sm-9">
            <a href="products.php">
              <button style="color:green">Add New</button>
            </a>

           
              
              <table class="table text-center table-striped">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Product price</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php
                  include('../partials/connect.php');

                  $sql = "Select * from products";;
                  $results = $connect->query($sql);
                  while ($final = $results->fetch_assoc()) { ?>
                  <tr>
                    <th scope="row"><?php echo $final['id'] ?></th>
                    <td>
                      <a href="proshow.php?pro_id=<?php echo $final['id'] ?>">
                        <?php echo $final['name'] ?><br>
                      </a>
                    </td>
                    <td><?php echo $final['price'] ?></td>
                    <td>
                      <a href="proupdate.php?up_id=<?php echo $final['id'] ?>">
                        <button class="btn btn-primary">Update</button>
                      </a>
                      <a href="prodelete.php?del_id=<?php echo $final['id'] ?>">
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to Remove?');">Delete</button>
                      </a>
                    </td>
                  </tr>

               

            <?php }
            ?>
             </tbody>
              </table>

          </div>


      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include("adminpartials/footer.php")
    ?>
</body>

</html>