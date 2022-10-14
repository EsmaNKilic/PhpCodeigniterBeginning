<!DOCTYPE html>
<html lang="tr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

        <title>Dear Users!</title>
    </head>
    <body>
        <div class="container">   
        <h3 class="mt-5">Yeni Kayıt Formu</h3>     
            <form action="<?php echo base_url("user/save")?>" class="row g-3 mt-5"method="post">
                <div class="col-md-6">
                    <label for="name" class="form-label">Ad Soyad</label>
                    <input type="text" class="form-control" name="name" />
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="text" class="form-control" name="email" />
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Adres</label>
                    <textarea type="text" class="form-control" name="address"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Şehir</label>
                    <input type="text" class="form-control" name="city" />
                </div>
                <h6>Cinsiyet</h6>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                <label class="form-check-label" for="flexRadioDefault1">
                    Kadın
                </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                    <label class="form-check-label" for="flexRadioDefault2">
                        Erkek
                    </label>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-dark " type="submit">Kaydet</button>
                        <a class="btn btn-dark " type="button" href="<?php echo base_url("user");?>">Geri</a>
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

