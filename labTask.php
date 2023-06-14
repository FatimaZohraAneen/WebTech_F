<?php
$length = 5;
$width = 2;
$amount = 1500;
$num = 6;
$area = "$length"*"$width";
$perimeter = 2*("$length"+"$width");
$VAT = 0.15*"$amount";



echo "<h2>Results:</h2>";
echo "<br>";
echo "Area:";
print ($area);
echo "<br>";
echo "Perimeter:";
print ($perimeter);
echo "<br>";
echo "VAT:";
print ($VAT);
echo "<br>";
if ($num%2 == 0)
{
    echo "Number is even";

}
else{echo "Number is odd";};
echo "<br>";
for ($x = 10; $x <= 100; $x++)
{
    if ($x%2 == 0)
{
    echo "Number is even";

}
else{echo "<br>";};
}





?>