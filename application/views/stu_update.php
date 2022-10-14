<!DOCTYPE html>
<html lang="tr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

        <title>Dear Teachs!</title>
    </head>
    <body>
        <div class="container">
            <form class="row g-3 mt-5 border border-4 border-primary" action="<?php echo base_url("student/update/".$student_data->id)?>" method="post">
            <div class="input-group p-5">
            <span class="input-group-text">Okul Numarası / Ad Soyad</span>
            <input type="text" name="okulNo" class="form-control" value="<?php echo $student_data->okulNo ?>">
            <input type="text" name="name" class="form-control" value="<?php echo $student_data->name ?>">
            </div>
            <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="text" class="col-form-label">Not</label>
            </div>
            <div class="col-auto">
                <input type="text" name="note" class="form-control" aria-describedby="password">
            </div>
            <div class="col-auto">
                <span id="password" class="form-text">
                Notlar 100 üzerinden olmalıdır.
                </span>
            </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end p-4">
                        <button class="btn btn-primary" type="submit">Kaydet</button>
                        <a class="btn btn-ligt border border-primary" href="<?php echo base_url("student");?>">Geri</a>
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