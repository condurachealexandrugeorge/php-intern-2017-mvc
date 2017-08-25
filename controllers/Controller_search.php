<?php

class Controller_Search extends Controller
{
    function action_index($limit=null)
    {
        print_r($limit);
        //load our model
        $products_model = $this->model->load('search');

        $this->data['search'] = $products_model->get_products($limit, 0);

        $this->view->generate('search_view.php', 'template_view.php', $this->data);

    }

}


