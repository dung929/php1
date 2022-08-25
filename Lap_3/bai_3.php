<?php
echo 'Bai 3';
echo '<br>';
echo 'Ta có mảng: 56, 38, 22, 20, 40, 58, 24, 36, 96, 84';
echo '<br>';
$ten = 'Dung';
$so = [56, 38, 22, 20, 40, 58, 24, 36, 96, 84];
for ($i = 0; $i < count($so); $i++) {
    if ($so[$i] % strlen($ten) == 0) {
        echo 'Số chia hết cho độ dài của  '.$ten.'  là:  '.$so[$i].'<br>';
    }
}
