<?php
$my_name = "Виктор";
$age = "27";
$mail = "fadeichev.v@mail.ru";
$city = "Санкт-Петербург";
$info = "Начинающий программист";
 ?>
 <style type="text/css">
 ul {
 	display: table-cell;
 	font-size: 0;
 }
 li {
 	display: table-row;
 	font-size: 24px;
 }
 a {
   color: blue;
 }
 </style>
 <h1>Страница пользователя: Виктор</h1>
 <ul>
   <li>Имя:</li>
   <li>Возраст:</li>
   <li>Адрес электронной почты:</li>
   <li>Город:</li>
   <li>О себе:</li>
 </ul>
 <ul>
   <li><?php echo $my_name ?></li>
   <li><?php echo $age ?></li>
   <li><a href=""><?php echo $mail ?></a></li>
   <li><?php echo $city ?></li>
   <li><?php echo $info ?></li>
 </ul>
