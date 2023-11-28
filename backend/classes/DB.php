<?php

class DB {

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

                return header('Location: https://api.whatsapp.com/send/?phone=552433442250&text&type=phone_number&app_absent=0');

            } else {

                return header('Location: http://localhost/RFID/RFID/');
            }
    }
}