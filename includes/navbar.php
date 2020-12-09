<nav id="nav" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">crousXchange</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link <?php if ($page == 'accueil') echo "active" ?>"
                                    href="/"><span><span class="fa fa-home"></span> Accueil</span></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if ($page == 'analyse') echo "active" ?>"
                                    href="/pages/analyse.php"><span><span class="fa fa-microphone"></span> Analyse</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if ($page == 'ecodroit') echo "active" ?>" id="navbarDropdown"
                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><span
                                class="fa fa-balance-scale"></span> Éco-droit</span></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/pages/economie.php">Économie</a>
                    <a class="dropdown-item" href="/pages/droit.php">Droit</a>
                </div>
            </li>

            <li class="nav-item"><a class="nav-link <?php if ($page == 'contact') echo "active" ?>"
                                    href="/pages/contact.php"><span><span class="fa fa-envelope"></span> Contact</span></a>
            </li>
        </ul>
    </div>
</nav>