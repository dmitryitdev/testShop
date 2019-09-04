<?php
//Ссылка на библиотеку smarty
require_once SMARTY_DIR . 'Smarty.class.php';

/*
Класс, расширяющий smarty, 
используется для обработки и отображения файлов smarty
*/
class Application extends Smarty
{
    //Конструктор класса
    public function __construct() {
        //Вызов конструктора smarty
        parent::Smarty();
        
        //Меняем папки шаблонов по умолчанию
        $this->template_dir = TEMPLATE_DIR;
        $this->compile_dir  = COMPILE_DIR;
        $this->config_dir   = CONFIG_DIR;
    }
}