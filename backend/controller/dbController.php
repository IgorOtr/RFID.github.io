<?php

require "../db/connect.php";
require "../classes/DB.php";

if (isset($_POST['get_data_from_form'])) {

    date_default_timezone_set('America/Sao_Paulo');

    echo $nome = $_POST['lead_nome'];
    echo $email = $_POST['lead_email'];
    echo $tel = $_POST['lead_telefone'];
    echo $terms = isset($_POST['terms']) ? $_POST['terms'] : '';
    echo $date = date('d/m/Y H:i:s');

    // die();

    $insertData = DB::GetLeads($nome, $email, $tel, $date, $terms);

}