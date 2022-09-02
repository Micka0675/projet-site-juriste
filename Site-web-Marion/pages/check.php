<?php
    if(isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['mail']) && !empty($_POST['mail']) &&
    isset($_POST['demande']) && !empty($_POST['demande']))
    {
        function valid_donnees($filtre)
            {
                $filtre = trim($filtre);
                $filtre = stripslashes($filtre);
                $filtre = htmlspecialchars($filtre, ENT_QUOTES);
                return $filtre;
            }
            
            $nom = valid_donnees ($_POST['nom']);
            $prenom = valid_donnees ($_POST['prenom']);
            $mail = valid_donnees ($_POST['mail']);
            $rs = valid_donnees ($_POST['rs']);
            $phone = valid_donnees ($_POST['phone']);
            $demande = valid_donnees ($_POST['demande']);

        if(filter_var($mail,FILTER_VALIDATE_EMAIL)) 
        {
            if(strlen($prenom) <= 50 && preg_match("^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]+$^",$prenom) && strlen($nom) <= 50 && preg_match("^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]+$^",$nom) && strlen($demande) <= 255 && preg_match("^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ?!-*/._\s-]+$^",$demande))
            {
                $date = date("y/m/d");
                $id = "";
                $server = "localhost";
                $database = 'Marion-bdd';
                $port = "3306";
                $user = "root";
                $mdp = "";

                $con = new PDO("mysql:host=$server;port=$port;dbname=$database; charset=utf8", $user , $mdp);

                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                try
                {
                
                    $request = $con->prepare("INSERT INTO demandes_clients (ID_client,NOM,PRENOM,TEL,DEMANDE,MAIL,RS,DATE_COMMANDE) VALUES (:id , :nom, :prenom,:tel,:demande,:mail,:rs, :date)");
                    $request->bindParam(':id', $id);
                    $request->bindParam(':nom',$nom);
                    $request->bindParam(':prenom',$prenom);
                    $request->bindParam(':tel',$phone);
                    $request->bindParam(':demande',$demande);
                    $request->bindParam(':mail',$mail);
                    $request->bindParam(':rs',$rs);
                    $request->bindParam(':date',$date);
                    $request->execute();
                    header("Location:./err/merci.php");

                }
                catch(PDOexception $e)
                {
                    header("Location:./err/execution.php");
                }
            }
            else
            {
                header("Location:./err/saisie.php");
            }
            
            
        }
        else
        {
            header("Location:./err/mail.php");
        }
        
    }
    else
    {
        header("Location:./err/incomplete.php");
    }
?>