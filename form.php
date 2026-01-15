<?php
if($_SERVER['REQUEST_METHOD']!=='POST')exit;
$name=trim($_POST['name']??'');
$phone=trim($_POST['phone']??'');
if(!$name||!$phone)exit;
$data=date('Y-m-d H:i:s')." | $name | $phone\n";
file_put_contents('unik.txt',$data,FILE_APPEND);
mail('info@ap-wooddesign.ru','Новая заявка',"Имя: $name\nТелефон: $phone","Content-Type: text/plain; charset=UTF-8");
echo 'OK';
