<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
  <?php

function findMin($arr){
    $min = $arr[0];

    for ($i = 0 ; $i < count($arr) ; $i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];
        }
    }
    print_r($min .' la so nho nhat trong mang ');
}

$arr = [0,2,3,4,5,6];

findMin($arr);
?>
</form>
</body>
</html>