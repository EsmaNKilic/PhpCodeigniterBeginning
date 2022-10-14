<!DOCTYPE html>
<html lang="tr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

        <title>Rent A Car</title>
    </head>
    <body>
        <div class="container">
            <form class="row g-3 mt-5 border border-3 border-dark" action="<?php echo base_url("cars/update/".$cars_data->id)?>" method="post">
                <div class="col-md-4 mt-3 text-center">
                    <label for="inputBrand" class="form-label">Marka</label>
                    <input type="text" class="form-control" name="brand" value="<?php echo $cars_data->brand ?>" />
                </div>
                <div class="col-md-4 text-center">
                    <label for="inputColor" class="form-label">Renk</label>
                    <input type="text" class="form-control" name="color" />
                </div>
                <div class="col-4">
                    <label for="inputYear" class="form-label">Yıl</label>
                    <input type="text" class="form-control" name="year"/>
                </div>
                <div class="col-4">
                    <label for="name" class="form-label">Fiyat</label>
                    <input type="text" class="form-control" name="price"/>
                </div>
                <div class="text-center">
                    <label for="customRange3" class="form-label mt-5">Fiyat Aralığı</label>
                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end p-4">
                    <button class="btn btn-dark border" type="submit">Kaydet</button>
                    <a class="btn btn-ligt border border-dark" href="<?php echo base_url("cars");?>">Geri</a>
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
