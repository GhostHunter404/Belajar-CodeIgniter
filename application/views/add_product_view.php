<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add New Product</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>
            <center>Add New Product<hr><br></center>
        </h1>
    <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('product/save'); ?>" method="post">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="product_name" class="form-control" placeholder="product name" required>
            </div> 
            <div class="form-group">
                <label>Product Price</label>
                <input type="number" name="product_price" class="form-control" placeholder="product price" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>

<!-- load jquery js file -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<!-- load bootstrap js file -->
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>