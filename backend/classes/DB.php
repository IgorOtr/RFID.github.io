<?php

@session_start();

class DB {

    public static function showLeads()
    {
        require '../backend/db/connect.php';
        
        $selectData = $conn->prepare("SELECT * FROM leads");
        $selectData->execute();

        $data = $selectData->fetchAll();

        // echo '<pre>';
        // var_dump($data);
        // echo '</pre>';
        // die();

        return $data;
    }

    public static function GetLeads($nome, $email, $telefone, $date, $terms)
    {
        require '../db/connect.php';

        $sql = "INSERT INTO leads (nome, email, telefone, terms, created_at) VALUES (:nome, :email, :telefone, :terms, :created_at)";

        $insertData = $conn->prepare($sql);
        $insertData->bindValue(':nome', $nome);
        $insertData->bindValue(':email', $email);
        $insertData->bindValue(':telefone', $telefone);
        $insertData->bindValue(':terms', $terms);
        $insertData->bindValue(':created_at', $date);

        $dataInseted = $insertData->execute();

            if ($dataInseted) {

                return header('Location: https://api.whatsapp.com/send/?phone=5524998481122&text&type=phone_number&app_absent=0');

            } else {

                return header('Location: http://localhost/RFID/RFID/');
            }
    }

    public static function Login($email, $senha)
    {
        require '../db/connect.php';

        $sql = "SELECT * FROM users WHERE user_email = :email AND user_password = :pass";
        $auth_user = $conn->prepare($sql);
        $auth_user->bindValue(':email',$email);
        $auth_user->bindValue(':pass',$senha);

        $auth_user->execute();

        $auth_result = $auth_user->fetch(PDO::FETCH_ASSOC);

        $rowCount = $auth_user->rowCount();

        if ($rowCount > 0) {

                $_SESSION["email"] = $auth_result["user_email"];
                header('location: http://localhost/RFID/RFID/Admin');

        } else {

            $_SESSION['error-login'] = "Email e/ou senha inválidos.";

            header('location: http://localhost/RFID/RFID/Admin/login.php');
        }

    }
}