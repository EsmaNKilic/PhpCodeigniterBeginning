<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE islemi</title>
</head>
<body>
<form action="<?php echo base_url("dbislem/delete"); ?>" method="post">
<input type="text" name="title" placeholder="lütfen isim giriniz...">
<textarea name="detail" cols="30" rows="10" placeholder="lütfen açıklama giriniz..."></textarea>
<button type="submit">Kaydet</button>
</form>

    
</body>
</html>