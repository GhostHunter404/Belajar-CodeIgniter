<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Product</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Edit Product</h1>
        <div class="col-md-6 offset-md-3">
            <?php if ($product): ?>
                <form action="<?php echo site_url('product/update'); ?>" method="post">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="product_name" class="form-control" 
                            value="<?php echo htmlspecialchars($product->product_name, ENT_QUOTES, 'UTF-8'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Product Price</label>
                        <input type="number" name="product_price" class="form-control" 
                            value="<?php echo htmlspecialchars($product->product_price, ENT_QUOTES, 'UTF-8'); ?>" required>
                    </div>
                    <input type="hidden" name="product_id" value="<?php echo $product->product_id; ?>">
                    
                    <!-- Tambahkan CSRF token -->
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" 
                           value="<?php echo $this->security->get_csrf_hash(); ?>">
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            <?php else: ?>
                <div class="alert alert-danger">Data tidak ditemukan</div>
            <?php endif; ?>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
