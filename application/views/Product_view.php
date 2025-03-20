<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Product List</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>
            <center>Product List</center>
        </h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th width="200">Action</th>
                </tr>
            </thread>
            <tbody>
            <?php
                $count = 0;
                foreach ($product as $row):
                    $count++;
                ?>
                <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $row->product_name; ?></td>
                    <td><?php echo number_format($row->product_price);?></td>
                    <td>
                        <a href="<?php echo site_url('product/get_edit/'.$row->product_id); ?>">
                            <button class="btn btn-sm btn-info">Edit</button>
                        </a>
                        <a href="<?php echo site_url('product/delete/'.$row->product_id); ?>">
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </a>
                    </td>                     
                </tr>

                <?php endforeach;?>
            </tbody>
        </table>
    </div>


    <!-- Load jQuery dan Bootstrap JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <!-- Load Bootstrap JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>