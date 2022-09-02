<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <title>Document</title>
    </head>
        <body class="body-alt-list">
            <div class="disconnect-wrap"><a href="./disconnect.php"><div class="light-button admin-input"> Se déconnecter</div></a></div>
            <h2>TABLEAU DE BORD</h2>
            <div class="wrap-list">
                <div class="contain-demandes-list">
                <div class="intitules">
                    <p class="date-list">Date</p>
                    <p class="prenom-list">Prénom</p>
                    <p class="nom-list">Nom</p>
                    <p class="tel-list">Tel</p>
                    <p class="mail-list">Mail</p>
                    <p class="rs-list">RS</p>
                    <p class="demande-list">Demande</p>
                    <p class="supr">Supprimer</p>
                </div>
                    <?php
                        session_start();
                        // echo $_SESSION['name'];
                        if (isset($_SESSION) && !empty($_SESSION) && $_SESSION['name']=='cacatoes')
                        {
                            $password = $_SESSION['password'];
                            $identifiant = $_SESSION['identifiant'];
                            try
                                {   
                                    $id = "";
                                    $server = "localhost";
                                    $database = 'Marion-bdd';
                                    $port = "3306";
                                    $user = "root";
                                    $mdp = "";
                                
                                    $con = new PDO("mysql:host=$server;port=$port;dbname=$database; charset=utf8", $user , $mdp);
                                
                                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                
                                        $request = $con->prepare("SELECT mdp from admin where :util = util");
                                        $request->bindParam(':util',$identifiant);
                                        $request->execute();
                                        if($request->rowCount()>0)
                                        {
                                            foreach($request as $row)
                                            {
                                                if(password_verify($password,$row['mdp'])  )
                                                {
                                                    $request = $con->prepare("SELECT ID_Client,NOM,PRENOM,TEL,DEMANDE,MAIL,RS, DATE_FORMAT(DATE_COMMANDE, '%d/%m/%Y') as DATE_FR FROM demandes_clients ORDER BY ID_Client DESC");
                                                    $request->execute();
                                                    foreach ($request as $row)
                                                    {
                                                        ?>
                                                            <div class="line-demandes-list">
                                                            
                                                                <form class="form-list" action="./delete.php" method="post">
                                                                    <p class="date-list"><?php echo $row['DATE_FR']; ?></p>
                                                                    <p class="prenom-list"><?php echo $row['PRENOM']; ?></p>
                                                                    <p class="nom-list"><?php echo $row['NOM']; ?></p>
                                                                    <p class="tel-list"><?php echo "0".$row['TEL']; ?></p>
                                                                    <p class="mail-list"><?php echo $row['MAIL']; ?></p>
                                                                    <p class="rs-list"><?php echo $row['RS']; ?></p>
                                                                    <p class="demande-list"><?php echo $row['DEMANDE']; ?></p>
                                                                    <div class="div-inv"><input class="input-inv" name="id" value="<?php echo $row['ID_Client'] ?>"><input class="valide" type="submit" value="X"></div>
                                                                </form>
                                                            </div>  
                                                        <?php        
                                                    }
                                                }
                                                else
                                                {
                                                    header("Location:./admin.php");
                                                }
                                            } 
                                        }
                                        else
                                        {
                                            header("Location:./admin.php");
                                        }
                                }
                                catch(PDOexception $e)
                                {
                                    header("Location:./admin.php");
                                }
                        }
                        elseif($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['identifiant']) && !empty($_POST['identifiant']) && isset($_POST['password']) && !empty($_POST['password']))
                        {
                            function valid_donnees($filtre)
                            {
                                $filtre = trim($filtre);
                                $filtre = stripslashes($filtre);
                                $filtre = htmlspecialchars($filtre, ENT_QUOTES);
                                return $filtre;
                            }
                            $identifiant = valid_donnees ($_POST['identifiant']);
                            $password = valid_donnees ($_POST['password']);
                        
                        
                            if(strlen($identifiant) <= 50 && preg_match("^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]+$^",$identifiant) && strlen($password) <= 50 && preg_match("^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]+$^",$password))
                            {
                            
                                try
                                {   
                                    $id = "";
                                    $server = "localhost";
                                    $database = 'Marion-bdd';
                                    $port = "3306";
                                    $user = "root";
                                    $mdp = "";
                                
                                    $con = new PDO("mysql:host=$server;port=$port;dbname=$database; charset=utf8", $user , $mdp);
                                
                                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                
                                        $request = $con->prepare("SELECT mdp from admin where :util = util");
                                        $request->bindParam(':util',$identifiant);
                                        $request->execute();
                                        if($request->rowCount()>0)
                                        {
                                            foreach($request as $row)
                                            {
                                                if(password_verify($password,$row['mdp'])  )
                                                {
                                                    $_SESSION['name']="cacatoes";
                                                    $_SESSION['password']=$password;
                                                    $_SESSION['identifiant']=$identifiant;
                                                    $request = $con->prepare("SELECT ID_Client,NOM,PRENOM,TEL,DEMANDE,MAIL,RS, DATE_FORMAT(DATE_COMMANDE, '%d/%m/%Y') as DATE_FR FROM demandes_clients ORDER BY ID_Client DESC");
                                                    $request->execute();
                                                    foreach ($request as $row)
                                                    {
                                                        ?>
                                                            
                                                            <div class="line-demandes-list">
                                                                <form class="form-list" action="./delete.php" method="post">
                                                                    <p class="date-list"><?php echo $row['DATE_FR']; ?></p>
                                                                    <p class="prenom-list"><?php echo $row['PRENOM']; ?></p>
                                                                    <p class="nom-list"><?php echo $row['NOM']; ?></p>
                                                                    <p class="tel-list"><?php echo "0".$row['TEL']; ?></p>
                                                                    <p class="mail-list"><?php echo $row['MAIL']; ?></p>
                                                                    <p class="rs-list"><?php echo $row['RS']; ?></p>
                                                                    <p class="demande-list"><?php echo $row['DEMANDE']; ?></p>
                                                                    <div class="div-inv"><input class="input-inv" name="id" value="<?php echo $row['ID_Client'] ?>"><input class="valide" type="submit" value="X"></div>
                                                                </form>
                                                            </div>  
                                                        <?php        
                                                    }
                                                }
                                                else
                                                {
                                                    header("Location:./admin.php");
                                                }
                                            } 
                                        }
                                        else
                                        {
                                            header("Location:./admin.php");
                                        }
                                }
                                catch(PDOexception $e)
                                {
                                    header("Location:./admin.php");
                                }
                            }
                            else
                            {
                                header("Location:./admin.php");
                            }
                        }
                        else
                        {
                            header("Location:./admin.php");
                        }
                    ?>
                </div>
            </div>
        </body>
    </html>
