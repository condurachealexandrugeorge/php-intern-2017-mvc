<?php

class Controller_Details extends Controller
{
    function action_index($limit=null)
    {
        print_r($limit);
        //load our model
        $products_model = $this->model->load('details');

        $this->data['details'] = $products_model->get_products($limit, 0);

        $this->view->generate('details_view.php', 'template_view.php', $this->data);

    }

}


