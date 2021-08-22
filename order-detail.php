<?php
session_start();
require 'partials/auth.php';
include 'partials/head.php';
?>

<body > 

    <?php
    require 'partials/header.php';
    $oid = $_GET['oid'];
    // echo $oid;
    $sql1 = " SELECT * FROM products INNER JOIN order_details ON products.id = order_details.product_id where order_id= '$oid'";

    ?>
    <div class="container my-5" >
        <div class="row">

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
                  
                    

                    $sno = 1;
                    while ($final = $results->fetch_assoc()) { ?>
                        <tr>
                            <td> <?php echo $sno ?> </td>
                           

                            <td><a href="product_detail.php?details_id=<?php echo $final['product_id'] ?>"><?php echo $final['name'] ?></a></td>
                            <td><?php echo $final['quantity'] ?></td>
                            <td><?php echo $final['price'] ?></td>
                        </tr>
                    <?php
                        $sno++;
                    } ?>

                </tbody>
            </table>



        </div>
    </div>


    <?php
    require 'partials/footer.php';
    ?>