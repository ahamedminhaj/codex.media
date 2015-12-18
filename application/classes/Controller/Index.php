<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base_preDispatch
{

    public function action_index()
    {
        $this->view['pages'] = $this->methods->getPages(Controller_Pages::TYPE_NEWS, 10);

        $this->template->content = View::factory('templates/index', $this->view);
    }
    public function action_contacts()
    {
        $this->template->title = 'Контакты';
        $this->template->content = View::factory('templates/contacts', $this->view);
    }
}