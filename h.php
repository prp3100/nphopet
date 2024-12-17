<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>mดสอบการสร้างFunction ที่ส้างโดยผุู้พัฒนาโปรแกรม</h1>
    <?php
$name = "ใส่ชื่อนามสกุลตัวเอง";
Hello($name);
//..................................................
echo"<h3>ทดสอบการใช้ function </h3>";
$a = 5;
$b = 8;
$c = sum($a, $b);
echo "$a + $b = $c <br>";
echo"<hr>";
echo "<h3>ทดสอบการใช้ fuctionแบบมีparameterเป็นReference</h3>";
$num = 2;
echo"Before ===> \$num = $num <br>";
add_5($num)
echo"After ===> \$num + $num ";
echo "<hr>";
echo "<h3>ทดสอบการใช้งานfuction แบบมีพารามีเตอร์หลายตัว</h3>";
$summaryNumber = sumMyNumber (1,2,3,4,5,6,7,8,9);
echo "ผลรวมของ (1,2,3,4,5,6,7,8,9) = $summaryNumber";
echo "<hr>";
//..................................................
bye();
function sumMYNumber(...$x){
    $sum=0;
    foreach($x as $value) {
        $sum += $value;
}
        return $sum;
}

function add_5($Value) {
    $value=5;
}
    
function Hello($PEE) {
    echo "<h3>ผู้พัฒนาโปรแกรม</H3>";
    echo"<h3>".$PEE."></h3>";
    echo "<hr>"
}
function sum($x,$y) {
    $z = $x + $y;
    return $z;
}
function bye(){
    echo "<hr>";
    echo "<h4>หลักสูตรวิทยาศาตร์บัณทิต สาขาเทคโนโลยีสารสนเทศ</h4>";
}
</body>
</html>