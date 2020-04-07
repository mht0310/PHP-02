<html>
<head>
    <title>in ngược mảng</title>
</head>
<body>
<h3>in ngược mảng {1,3,5,9,11} </h3>

</body>
</html>
<?php
$arr = array(1,3,5,9,11);
    for ($i = count($arr)-1; $i >= 0 ; $i--)
{
    echo $arr[$i] . " ";
}
?>

