<!DOCTYPE html>
<html>
<?php
include('adminpartials/session.php');
include('adminpartials/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include('adminpartials/header.php');
  include('adminpartials/aside.php');
  

  ?>
  <!-- Left side column. contains the logo and sidebar -->
  

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
<?php
          
          include('../partials/connect.php');
        $oid = $_GET['oid'];
    // echo $oid;
    $sql1 = " SELECT * FROM products INNER JOIN order_details ON products.id = order_details.product_id where order_id= '$oid'";

    ?>
   

            <table class="table table-condensed text-center " style="margin-bottom: 130px;">
                <thead>
                    <tr>
                        <th>product no.</th>
                        <th>product name</th>
                        <th>Quantity</th>
                        <th>price</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    $results = $connect->query($sql1);
                    // $final = $results->fetch_assoc();
                    // print_r($final);

                    $sno = 1;
                    while ($final = $results->fetch_assoc()) { ?>
                        <tr>
                            <td> <?php echo $sno ?> </td>
                           

                            <td><a href="proshow.php?pro_id=<?php echo $final['product_id'] ?>"><?php echo $final['name'] ?></a></td>
                            <td><?php echo $final['quantity'] ?></td>
                            <td><?php echo $final['price'] ?></td>
                        </tr>
                    <?php
                        $sno++;
                    } ?>

                </tbody>
            </table>

            

       



        </div>
        
       

      
<div class="col-sm-3">
  
  </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include('adminpartials/footer.php');
 ?>
</body>
</html>
