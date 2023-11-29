<?php

require "../db/connect.php";
require "../classes/DB.php";

if (isset($_POST['get_data_from_form'])) {

    date_default_timezone_set('America/Sao_Paulo');

    $nome = $_POST['lead_nome'];
    $email = $_POST['lead_email'];
    $tel = $_POST['lead_telefone'];
    $terms = isset($_POST['terms']) ? $_POST['terms'] : '';

    if ($terms == '') {
        header("Location: http://localhost/RFID/RFID/");
    }

    $date = date('d/m/Y H:i:s');

    // die();

    $insertData = DB::GetLeads($nome, $email, $tel, $date, $terms);

}

if (isset($_POST['tryLogin'])) {

    $email = $_POST['user_email'];
    $senha = md5($_POST['user_password']."rfid");

    $insertData = DB::Login($email, $senha);

}