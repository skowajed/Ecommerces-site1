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
            <table class="table text-center table-striped">
              <thead>
                <tr>
                  <th scope="col">order no.</th>
                  <th scope="col">customer id</th>
                  <th scope="col">address</th>
                  <th scope="col">phone no.</th>
                  <th scope="col">total amount</th>
                  <th scope="col">payment status</th>
                  <th scope="col">order date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include('../partials/connect.php');

                $sql = "Select * from orders";;
                $results = $connect->query($sql);
                while ($final = $results->fetch_assoc()) { ?>
                  <tr>
                    <!-- <th scope="row">1</th> -->
                    <td><?php echo $final['id'] ?></td>
                    <td><?php echo $final['customer_id'] ?></td>
                    <td><?php echo $final['address'] ?></td>
                    <td><?php echo $final['phone'] ?></td>
                    <td><?php echo $final['total'] ?></td>
                    <td><?php echo $final['payment_status'] ?></td>
                    <td><?php echo $final['created_at'] ?></td>
                    <td> <a class="btn btn-primary" href="ordershow1.php?oid=<?php echo $final['id'] ?>">
                        view </a></td>


                  </tr>
                <?php }
                ?>

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