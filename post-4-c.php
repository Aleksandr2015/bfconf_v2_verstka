<?php
$name = $_POST['name'];
$company = $_POST['company'];
$tel = $_POST['tel'];
$message = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><body>';
$message .= '<h3>Имя</h3>'.$name.'<h3>Компания</h3>'.$company.'<h3>Телефон</h3>'.$tel;
$message .= '</body></html>';
$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-Type: text/html; charset=utf-8"."\r\n"; // можно отправлять письмо в html
$headers .= "From: bfconf.ru";
mail('charleksvik@gmail.com', 'Заявка обратного звонка по XI международная конференция «Рынки металлургического сырья»', $message, $headers);
//header("location: ".$_SERVER['HTTP_REFERER']);
header("Location: after-send.html");
exit;
?>