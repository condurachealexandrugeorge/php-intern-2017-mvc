<?php

class Controller_Contact extends Controller
{
    function action_index($limit=null)
    {
        print_r($limit);
        //load our model
        $products_model = $this->model->load('contact');

        $this->data['contact'] = $products_model->get_products($limit, 0);

        $this->view->generate('contact_view.php', 'template_view.php', $this->data);

    }

}


