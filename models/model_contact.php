<?php
class Model_Contact extends Model
{
    function get_products($limit=30, $offset=0)
    {
        $sth = $this->db->prepare("SELECT * FROM hotel ");

        //$sth->bindValue(':limit', $limit);
        //$sth->bindValue(':offset', $offset);
        $sth->execute(array(
            ':limit'       => $limit,
        ));

        $products = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }
}