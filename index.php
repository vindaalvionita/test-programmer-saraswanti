<?php

$resource = 'https://bsby.siglab.co.id/api/test-programmer?email=vindaal5@gmail.com';
$content = file_get_contents($resource);
$data = json_decode($content, true);
//var_dump($data);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API Test Programmer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-3">Data Barang</h1>
    <div class="container">
            <table class="table mt-3">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Attachment</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['results'] as $row) {
                        ?>
                  <tr>
                    <th scope="row"><?php echo $row['id']?></th>
                    <td><?php $row['type'];
                        if ($row['type']==1) {
                            echo "Food & Beverage";
                        } if ($row['type']==2) {
                            echo "Pharmaceuticals";
                        } if ($row['type']==3) {
                            echo "Government";
                        } if ($row['type']==4) {
                            echo "Traditional Medicine & Suplement";
                        } if ($row['type']==13) {
                            echo "Beauty, Cosmetics & Personal Care";
                        } if ($row['type']==14) {
                            echo "Media RTU";
                        } if ($row['type']==15) {
                            echo "K3L Products";
                        } if ($row['type']==16) {
                            echo "ALKES & PKRT";
                        } if ($row['type']==17) {
                            echo "Feed, Pesticides & PSAT";
                        } if ($row['type']==18) {
                            echo "Other";
                        } if ($row['type']==19) {
                            echo "Research & Academic Purpose";
                        } if ($row['type']==20) {
                            echo "Dioxine Udara";
                        }?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php $row['status'];
                        if ($row['status']==0) {
                            echo "Unapproved";
                        } if ($row['status']==1) {
                            echo "Approved";
                        }?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php $row['discount'];
                        if ($row['discount']==0) {
                            echo "Tidak Ada Discount";
                        } if ($row['discount']>1000000) {
                            echo "Ada Discount / Approval Needed";
                        } if ($row['discount']>0 && $row['discount']<1000000) {
                            echo "Ada Discount";
                        } ?></td>
                    <td><?php $row['attachment'];
                        if ($row['attachment']==0) {
                            echo "Tidak";
                        } if ($row['attachment']==1) {
                            echo "Ada";
                        }?></td>
                  </tr>
                  <?php }?>
                </tbody>
                
              </table>
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>