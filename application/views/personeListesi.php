<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
</head>
<body>
    <table border = "1">
    <thead>
    <th>Ad Soyad</th>
    <th>EMail Adresi</th>
    </thead>
    <tbody>
    <?php foreach($personeListesi as $personel){ ?>
    <tr>
    <td><?php echo $personel["isim"]; ?> </td>
    <td><?php echo $personel["email"]; ?> </td>
    <?php  }  ?>
    </tbody>
    </table>
</body>
</html>