<?php
$str='Bai 1';
echo $str;
$array1=['Dung','Tien','Tin'];
$array2=[
    ['id'=>1,'ten'=>'dat'],['id'=>2,'ten'=>'nam']
];
echo '<br>';
for($i=0 ; $i <count($array1);$i++){
    echo 'Gia tri cua phan tu o mang array1 vi tri thu  '
  .   $i . '  la:' . $array1[$i] . '<br>';
}
echo '<br>';
