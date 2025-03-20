<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo $content; ?></h1>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Depan</th>
                            <th>Nama Tengah</th>
                            <th>Nama Belakang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($blogs as $row) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $row['nama_depan']; ?></td>
                            <td><?php echo !empty($row['nama_tengah']) ? $row['nama_tengah'] : '-'; ?></td>
                            <td><?php echo !empty($row['nama_belakang']) ? $row['nama_belakang'] : '-'; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Load jQuery dan Bootstrap JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
