<?php
echo 'Bai 2';   
echo '<br>';    
$ho = 'Bui';
$ten='Duy Dung';  
echo 'Độ dài của   '.$ho.' là: '.strlen($ho);
echo '<br>';
echo 'Độ dài của   '. $ten .' là: '.strlen($ten);
echo '<br>';
echo 'Tổng độ dài:'. strlen($ho)+ strlen($ten);
echo '<br>';
echo 'Hiệu độ dài:'. strlen($ho)- strlen($ten);
echo '<br>';
echo 'Tích độ dài:'. strlen($ho)* strlen($ten);
echo '<br>';
echo 'Thương độ dài:'. strlen($ho)/ strlen($ten);
