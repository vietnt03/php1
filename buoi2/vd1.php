<?php
$sv = [
    [
    'msv' => 'ph12314',
    'name' => 'a',
    'email' => 'a@example.com',
    ],
    [
        'msv' => 'ph23145',
        'name' => 'b',
        'email' => 'b@example.com',

    ]
    
    ];
    // // echo"<tabel>";

    // foreach ($sv as $value){
    //     echo("<tr>");
    //     echo("<td>" . $value['msv'] ."</td>");
    //     echo("<td>" . $value['name'] ."</td>");
    //     echo("<td>" . $value['email'] ."</td>");
    //     echo("<tr>");
    // }
    // // echo"</tabel>";
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>msv</th>
            <th>name</th>
            <th>email</th>
        </tr>
        <?php foreach ($sv as $value) :?>
     <tr>
         <td><?= $value['msv']?></td>
         <td><?= $value['name']?></td>
         <td><?= $value['email']?></td>
     </tr>  
    <?php endforeach ?>

       
         
        
        
    </table>
</body>
</html>