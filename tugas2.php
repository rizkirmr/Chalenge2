<?php
$berat_mark_1 = 78; 
$tinggi_mark_1 = 1.69; 

$berat_john_1 = 92; 
$tinggi_john_1 = 1.95; 

$berat_mark_2 = 95; 
$tinggi_mark_2 = 1.88; 

$berat_john_2 = 85; 
$tinggi_john_2 = 1.76; 


$BMI_mark_1 = $berat_mark_1 / ($tinggi_mark_1 ** 2);
$BMI_john_1 = $berat_john_1 / ($tinggi_john_1 ** 2);

$BMI_mark_2 = $berat_mark_2 / ($tinggi_mark_2 * $tinggi_mark_2); 
$BMI_john_2 = $berat_john_2 / ($tinggi_john_2 * $tinggi_john_2); 

$markHigherBMI_1 = $BMI_mark_1 > $BMI_john_1;
$markHigherBMI_2 = $BMI_mark_2 > $BMI_john_2;

echo "Data 1:\n";
echo "BMI Mark: $BMI_mark_1\n";
echo "BMI John: $BMI_john_1\n";
echo "Mark memiliki BMI lebih tinggi dari John: " . ($markHigherBMI_1 ? 'Ya' : 'Tidak') . "\n\n";

echo "Data 2:\n";
echo "BMI Mark: $BMI_mark_2\n";
echo "BMI John: $BMI_john_2\n";
echo "Mark memiliki BMI lebih tinggi dari John: " . ($markHigherBMI_2 ? 'Ya' : 'Tidak') . "\n";
?>
