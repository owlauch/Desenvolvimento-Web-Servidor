<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<div style='border: 1px solid black; width:200px;' >
<h1>Family <?= $st[0]?></h1>
    <h2>Pet: <?= $st[2]?></h2>
    <h2> Members​:</h2>
    <ol>
        <li><?= $m[0]?></li>
        <li><?= $m[1]?></li>
        <li><?= $m[2]?></li>
    </ol>
</div>
<div style='border: 1px solid black; width:200px;' >
    <div >
        <table>
            <tr >
            <td><?= $mat[1]?></td>
            <td><?= $mat[2]?></td>
            <td><?= $mat[3]?></td>
            </tr>
            <tr>
            <td><?= $mat[4]?></td>
            <td><?= $mat[5]?></td>
            <td><?= $mat[6]?></td>
            </tr>
            <tr>
            <td><?= $mat[7]?></td>
            <td><?= $mat[8]?></td>
            <td><?= $mat[9]?></td>
            </tr>
        </table>
    </div>
    <div >
    <table>
            <tr >
            <td><?= $mat2[1]?></td>
            <td><?= $mat2[2]?></td>
            <td><?= $mat2[3]?></td>
            </tr>
            <tr>
            <td><?= $mat2[4]?></td>
            <td><?= $mat2[5]?></td>
            <td><?= $mat2[6]?></td>
            </tr>
            <tr>
            <td><?= $mat2[7]?></td>
            <td><?= $mat2[8]?></td>
            <td><?= $mat2[9]?></td>
            </tr>
        </table>
    </div>
    <div >
    <table>
            <tr >
            <td><?= $matPar[1]?></td>
            <td><?= $matPar[2]?></td>
            <td><?= $matPar[3]?></td>
            </tr>
            <tr>
            <td><?= $matPar[4]?></td>
            <td><?= $matPar[5]?></td>
            <td><?= $matPar[6]?></td>
            </tr>
            <tr>
            <td><?= $matPar[7]?></td>
            <td><?= $matPar[8]?></td>
            <td><?= $matPar[9]?></td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>