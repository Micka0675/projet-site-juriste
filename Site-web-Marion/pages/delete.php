<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <title>Deleting...</title>
    </head>
    <body>
        <?php
            session_start();

            $id = "";
            $server = "localhost";
            $database = 'Marion-bdd';
            $port = "3306";
            $user = "root";
            $mdp = "";


            $id = $_POST['id'];

            $con = new PDO("mysql:host=$server;port=$port;dbname=$database; charset=utf8", $user , $mdp);
        
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $request = $con->prepare("DELETE FROM demandes_clients WHERE ID_Client = :id ");
                $request->bindParam(':id', $id);
                $request->execute();
                header("Location:./connect.php");
        ?>
    </body>
</html>