<?php								
//Подключаем класс смарти
require_once 'Smarty.class.php';
//Создадим обьект класса смарти
$smarty = new Smarty();
//Выводим шаблон на экран
$smarty->display('index.tpl');
?>