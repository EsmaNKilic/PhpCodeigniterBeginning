<!DOCTYPE html>
<html lang="tr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

        <title>Dear Customers!</title>
    </head>
    <body>
    <div class="container">
        <div class="d-flex flex-row-reverse bd-highlight">
            <div class="p-2 bd-highlight mt-5">
                <a class="btn btn-success" href="<?php echo base_url("product/add_product");?>">Ürün Ekle</a>
             </div>
        </div>
            <table class="table">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Ürün</th>
                    <th>Fiyat(₺)</th>
                    <th>Stok</th>
                    <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productList as $key => $value) { ?>
                         <tr>
                         <th><?php echo $value->id ?></th>
                         <td><?php echo $value->kind ?></td>
                         <td>₺<?php echo $value->price ?></td>
                         <td><?php echo $value->stock ?></td>
                         <td>
                             <a class="btn btn-primary" href="<?php echo base_url("product/update_product/$value->id");?>">Güncelle</a>
                             <a class="btn btn-warning" href="<?php echo base_url("product/delete/$value->id");?>">Sil</a>
                         </td>
                         </tr>
                    <?php  }  ?>
                </tbody>
            </table>
            <div class=" bd-highlight mt-5">
                <div class="p-2 bd-highlight">
                    <a class="btn btn-ligt border border-success border-2" href="<?php echo base_url("allControl/");?>">Geri</a>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    --></body>
</html>
