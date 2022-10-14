<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE islemi</title>
</head>
<body>
<form action="<?php echo base_url("dbislem/update"); ?>" method="post">
<label for="">Kayıt Numarası</label>
<select name="id">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
</select>
<input type="text" name="title" placeholder="lütfen isim giriniz...">
<textarea name="detail" cols="30" rows="10" placeholder="lütfen açıklama giriniz..."></textarea>
<button type="submit">Kaydet</button>
</form>

    
</body>
</html>