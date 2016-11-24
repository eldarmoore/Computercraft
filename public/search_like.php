<?php

if(!empty($_GET['search'])){

    $user_search = filter_var($_GET['search'],  FILTER_SANITIZE_STRING);

    if($user_search){

        $db = new PDO('mysql:host=localhost;dbname=computercraft;charset=utf8', 'root', 'root');
        $sql = "SELECT products.*,categories.url sub_category,main_categories.url category 
                FROM products 
                INNER JOIN categories ON products.categorie_id = categories.id
                LEFT JOIN categories main_categories ON categories.sub_category = main_categories.id 
                WHERE products.id LIKE ? OR products.article LIKE ? LIMIT 5";
        $query = $db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_OBJ);
        $query->execute( ["%$user_search%", "%$user_search%"] );
        $result = $query->fetchAll();

        if(count($result) > 0){

            echo json_encode($result);

        } else {

            echo false;

        }

    }

}