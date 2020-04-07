<html>
<head>
    <title>Giải phương trình bậc 2</title>
</head>
<body>
<h3>Mời bạn nhập giá trị </h3>
<form action="bai1.php" method="POST">
    <input type="text" name="a" style="width: 50px" > x^2  +
    <input type="text" name="b" style="width: 50px"> x   +
    <input type="text" name="c" style="width: 50px">  =  0
    <input type="submit" name="tinh" value=" Tính">
</form>
</body>

</html>
<?php
$a ="";
$b ="";
$c ="";
if(isset ($_POST["tinh"])){
    if(isset($_POST["a"])){
        $a = $_POST["a"];
    }
    if(isset($_POST["b"])){
        $b = $_POST["b"];
    }
    if(isset($_POST["c"])){
        $c = $_POST["c"];
    }
}
if($a == 0)
    {
        if($b == 0 ){
            if($c == 0){
                echo'Phương trình vô số nghiệm';
            }else{
                echo'Phương trình vô nghiệm';
            }
        }else{

            echo"Phương trình có nghiệm x =: " .(-$c/$b);
        }
    }else{
    $denta =$b*$b-4*$a*$c;
    if($denta > 0){
         $x1 = (-$b-sqrt($denta))/(2*$a);
         $x2 = (-$b+sqrt($denta))/(2*$a);
         echo"Phương trình có 2 nghiệm phân biệt x1 = ".$x1." x2 = ".$x2;
    }
    elseif ($denta == 0){
        $x1 = (-$b/(2*$a));
        echo"phương trình có nghiệm kép x1 = x2 =  " . $x1;
    }else{
        echo"Phương trình vô nghiệm";
    }
}

?>
