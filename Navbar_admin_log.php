<nav class="navbar navbar-expand-lg">
    <a href="../Accueil/accueil.php" class="logo_accueil"> <img src="../img/logo_cesi1.png" alt="Accueil"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="https://www.cesi.fr/"> Le CESI <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Boutique/boutique.php">Notre Boutique</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <a class="nav-link" href="../Ajout_article/form_admin.php"> Gérer les articles</a>
            <input class="form-control mr-sm-2" type="text" placeholder="Tapez un mot..." onKeyUp="check(this)" onChange="check(this)">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <a class="nav-link" href="../Accueil/accueil.php">Déconnexion</a>
        </form>
        <a class="nav-item" href="../Panier/Panier.php"><img src="../img/panier1.png" class="Panier_btq"></a>
    </div>
</nav>