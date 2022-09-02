<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../assets/img/Logo/PNG/Logo_Marion_initiale.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <title>Marrion Andorra - Contact</title>
</head>
<body>
    <header>
        <div class="main-header">
        <div class="logo">
                <a href="../index.php"><img src="../assets/img/Logo/PNG/Logo_Marion_noir.png" alt="Marion Andorra Juriste"></a>
                <h1>Marion Andorra</h1>
            </div>
            <div class="nav">
                <div class="nav-text-bloc">
                    <a id ="linkNav1" href="../index.php">Accueil</a>
                    <div class="underline-nav" id="underNav"></div>
                </div>
                <div class="nav-text-bloc">
                    <a id ="linkNav2" href="./Qui-suis-je.php">Qui Suis-Je</a>
                    <div class="underline-nav" id="underNav2"></div>
                </div>
                <div class="nav-text-bloc">
                    <a id ="linkNav3" href="./contact.php">Contact</a>
                    <div class="underline-nav" id="underNav3"></div>
                </div>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="header-main-3" id="headerContact">
            <div class="mask-header"></div>
            <h2 class="header-title">Contact</h2>
        </div>
    </div>
    <div class="circle-loading" id="progress">
            <div class="circle-inside" id="progress-value">
                <i class="fa-solid fa-arrow-down"></i>
            </div>
    </div>
    <div class="form-header">
        <h2 id="titleAnim" class="up-title">Vous souhaitez en savoir plus?</h2>
        <p id="paragAnim" class="down-parag">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam leo vitae quam tempor dapibus. Morbi volutpat pretium velit eget aliquam.</p>
    </div>
    <div class="form-container">
        <form action="./check.php" method="post">
            <div class="champ"><label for="Nom">Nom</label><input id="Nom" type="text" name="nom" required maxlength="50"></div>
            <div class="champ"><label for="Prenom">Prénom</label><input id="Prenom" type="text" name="prenom" required maxlength="50"></div>
            <div class="champ"><label for="Mail">Mail</label><input id="Mail" type="email" name="mail" required maxlength="50"></div>
            <div class="champ"><label for="RaisonSociale">Raison Sociale</label><input id ="RaisonSociale" type="text" name="rs" placeholder="(facultatif)"></div>
            <div class="champ telephone"><label for="Telephone">Tél.</label><input id="Telephone" name="phone" type="tel" placeholder="(facultatif)" maxlength="10"></div>
            <div class="champ demande"><label for="Demande">Votre Demande (En quelques phrases)</label><textarea name="demande" id="Demande" cols="30" rows="10" maxlength="255"></textarea></div>
            <input class="sub" type="submit">
        </form>
    </div>
    <div class="coord-contain">
        <div class="coord" id="coord">
            <div class="coord-line">
                <i class="fa-solid fa-phone"></i>
                <p>01.75.19.70.92</p>
            </div>
            <div class="coord-line">
                <i class="fa-solid fa-location-dot"></i>
                <p>24 Rue Du Commandant Guibaud, 75016 Paris</p>
            </div>
            <div class="coord-line">
                <i class="fa-solid fa-envelope"></i>
                <p>mail.mail@mail.fr</p>
            </div>
        </div>
        <div class="separation"></div>
        <div class="horaires" id="horaires">
            <div class="day">
                <p>Lundi</p>
                <div class="hours">
                    <p>09.00 - 12.30</p>
                    <p>13.30 - 17.30</p>
                </div>
            </div>
            <div class="day">
                <p>Mardi</p>
                <div class="hours">
                    <p>09.00 - 12.30</p>
                    <p>13.30 - 17.30</p>
                </div>
            </div>
            <div class="day">
                <p>Mercredi</p>
                <div class="hours">
                    <p>09.00 - 12.30</p>
                    <p>13.30 - 17.30</p>
                </div>
            </div>
            <div class="day">
                <p>Jeudi</p>
                <div class="hours">
                    <p>09.00 - 12.30</p>
                    <p>13.30 - 17.30</p>
                </div>
            </div>
            <div class="day">
                <p>Vendredi</p>
                <div class="hours">
                    <p>09.00 - 12.30</p>
                    <p>13.30 - 17.30</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="foot-index">
        <div class="main-footer">
            <div class="adress">
                <ul>
                    <li>24 Rue Du Commandant Guibaud, 75016 Paris</li>
                    <li>01.75.19.70.92</li>
                    <li>mail.mail@mail.fr</li>
                </ul>
            </div>
            <div class="nav-footer">
                <a href="../index.php">Accueil</a>
                <a href="./Qui-suis-je.php">Qui Suis-Je</a>
                <a href="#headerContact">Contact</a>
            </div>
            <div class="social">
                <a href=""><i class="fa-brands fa-square-twitter"></i></a>
                <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                <a href=""><i class="fa-brands fa-square-instagram"></i></a>
            </div>
        </div>
        <div class="dev-part">
            <p>Design & Build By <a href="https://mickael-rouge-web-dev.go.yo.fr/">Mickael Rougé</a></p>
        </div>
    </footer>
    <script src="../js/script.js"></script>
</body>
</html>