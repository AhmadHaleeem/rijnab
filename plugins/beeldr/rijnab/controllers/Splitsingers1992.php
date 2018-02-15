<?php namespace Beeldr\Rijnab\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Splitsingers1992 extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Beeldr.Rijnab', 'main-menu-item5', 'side-menu-item3');
    }
}
