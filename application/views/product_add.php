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
            <form class="row g-3 border border-3 border-info mt-5" action="<?php echo base_url("product/save")?>" method="post">
                <div class="col-form-label-sm col-3">
                    <input type="text" class="form-control" placeholder="Ürün adı giriniz" name="kind"/>
                    <label for="floatingTextarea"></label>
                </div> 
                <div class="col-3">
                    <label class="visually-hidden" for="specificSizeInputGroupUsername"></label>
                    <div class="input-group">
                        <div class="input-group-text">₺</div>
                            <input type="text" class="form-control" name="price" placeholder="Fiyat giriniz">
                    </div>
                </div>
                <div class="col-3">
                    <label class="visually-hidden" for="specificSizeInputGroupUsername"></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="stock" placeholder="Stok adedi giriniz">
                        <div class="input-group-text">Stok</div>
                    </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end p-4">
                    <button class="btn btn-info border" type="submit">Kaydet</button>
                    <a class="btn border border-info" type="button" href="<?php echo base_url("product");?>">Geri</a>
                </div>
            </form>
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
