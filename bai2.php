<html>
<head>
    <title>tính giai thừa</title>
</head>
<body>
<h3>Tính tổng  S = 1 /1! + 2 /2! + ....+ n / n!</h3>
<form action="bai2.php" method="post">
    nhập n = <input type="text"name="n" style="width: 50px">
    <input type="submit" name="tinh" value="tính">
</form>
</body>
<?php
$S = 0;
$giaithua = 1;
$n="";
if(isset($_POST["tinh"])){
    if(isset($_POST["n"])){
        $n = $_POST["n"];
    }
}
for( $i = 1; $i <= $n; $i++){
    $giaithua = $giaithua * $i;
    $S += $i/($giaithua );
}
echo" Kết quả là: S= ".$S;
?>
</html>
