<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>小問課題１</title>
    <style>
        table {
            margin: 50px auto;
            border-collapse: collapse;
            font-size: 18px;
        }
        th, td {
            border: 1px solid;
            padding: 10px 20px;
            text-align: center;
        }
        th {
            background-color: lightgray;
        }
    </style>

</head>
<body>
    
<?php
    //桃とイチゴの価格を生成して格納
    require_once 'smallAssign1-genePrice.php';
    $gp = new GenePrice();
    $peach = $gp->genePrice( 15, 200, 300 );
    $strawberry = $gp->genePrice( 15, 400, 500 );

    //桃とイチゴの平均、最低、最大を見つけて格納
    require_once 'smallAssign1-getNums.php';
    $gn = new GetNums();
    $peachNums = $gn->getNums( $peach );
    $strawNums = $gn->getNums( $strawberry );
?>

<table border="1">
    <tr>
        <th>果物</th>
        <th>平均価格</th>
        <th>最高価格</th>
        <th>最低価格</th>
    </tr>
    <tr>
        <td style="background-color: pink;">桃</td>
        <td><?= $peachNums['avg'] ?>円</td>
        <td><?= $peachNums['max'] ?>円</td>
        <td><?= $peachNums['min'] ?>円</td>
    </tr>
    <tr>
        <td style="background-color: salmon;">イチゴ</td>
        <td><?= $strawNums['avg'] ?>円</td>
        <td><?= $strawNums['max'] ?>円</td>
        <td><?= $strawNums['min'] ?>円</td>
    </tr>
</table>

</body>
</html>