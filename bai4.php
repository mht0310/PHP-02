<html>
<head>
    <title>tìm số lớn nhất</title>
</head>
<body>
<h3>Tìm phần tử lớn nhất của mảng {1,4,2,6,9,100,45,8,20}</h3>

</body>
</html>
<?php
$arr = array(1,4,2,6,9,100,45,8,20);
$max = $arr[0];
for($i = 0;$i < count($arr);$i++){
    if($max < $arr[$i] ){
        $max = $arr[$i];
    }
}
echo" giá trị lớn nhất của mảng là: ".$max;

?>