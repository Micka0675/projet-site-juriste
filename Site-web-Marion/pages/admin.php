<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <title>Admin</title>
</head>
<body>
    <div class="wrapper-form-admin">
        <div class="container-form-admin">
            <h3 class="title-admin">Connexion</h3>
            <form class="form-admin" action="./connect.php" method="post">
                <div class="line-form-admin"><label for="identifiant">Identifiant</label><input type="text" name="identifiant" required maxlength="50"></div>
                <div class="line-form-admin"><label for="password">Mot de Passe</label><input type="text" name="password" required maxlength="50"></div>
                <input type="submit" value="connexion">
            </form>
        </div>
    </div>
</body>
</html>