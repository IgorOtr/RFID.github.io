<?php
session_start();
require 'session.php';
require '../backend/classes/DB.php';

$leadsByBd = DB::showLeads();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="css/style.css">

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.umd.min.js">
    </script>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <title>Leads Capturados</title>
</head>

<body class="bg-dark">

    <section style="height: 100vh; display: flex; align-items: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5 mt-5 text-center">
                    <h1 style="color: #ffffff;">Leads Capturados</h1>
                </div>
                <div class="col-md-12">
                    <table class="table" style="border: 2px solid #e1e1e1;">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Termos</th>
                                <th scope="col">Adicionado em</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php for($i = 0; $i < count($leadsByBd); $i++) {?>

                            <tr>
                                <th scope="row"><?php echo $leadsByBd[$i]['id']?></th>
                                <td><?php echo $leadsByBd[$i]['nome']?></td>
                                <td><?php echo $leadsByBd[$i]['email']?></td>
                                <td><?php echo $leadsByBd[$i]['telefone']?></td>
                                <td><?php echo $terms = $leadsByBd[$i]['terms'] == 'accepted' ? "<i style='font-size: 16px;' class='bx bxs-check-square'></i>" : "<i style='font-size: 16px;' class='bx bx-block'></i>" ?></td>
                                <td><?php echo substr($leadsByBd[$i]['created_at'], 0, -4)?>5</td>
                            </tr>

                            <?php }?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</body>

</html>