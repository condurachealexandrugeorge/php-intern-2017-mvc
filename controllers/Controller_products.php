<?php
class Controller_Products extends Controller
{
    function action_index($limit=null)
    {
        print_r($limit);
        //load our model
        $products_model = $this->model->load('products');

        $this->data['products'] = $products_model->get_products($limit, 0);

        $this->view->generate('products_view.php', 'template_view.php', $this->data);

    }

}