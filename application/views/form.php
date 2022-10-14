<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php echo base_url(); ?> anonimkisi/kaydet" method="get">
        <input type="text" name="isim" placeholder="isim giriniz"><br>
        <input type="email" name="email" placeholder="email giriniz">
        <select name= "cinsiyet">
            <option value="bay">Bay</option>
            <option value="bayan">Bayan</option>
        </select>
        <button type="submit">Gönder</button>
</form>
</body>
</html>