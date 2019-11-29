<?php
    $src = '';
    include_once 'datas.php';
    
    if($_GET)
    {
        include_once 'execute.php';
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header class="ms-header">Filmek
        <form action="" method="GET" class="sfrm">
            <input type="text" name="pattern" 
                placeholder="Search" value="<?= $src ?>">
            <input type="submit">
        </form>
    </header>
    <table>
        <tr>
            <th>Cím</th>
            <th>Hossz</th>
            <th>Gyártási év</th>
            <th>Műfaj</th>
        </tr>
        <?php for ($i=0; $i < count($movies); $i++): ?>
        <tr>
            <?php foreach ($movies[$i] as $v): ?>
                <td><?= $v ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endfor;?>
    </table>
</body>
</html>