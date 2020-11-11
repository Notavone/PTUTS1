<nav id="nav" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">crousXchange</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item" id="navAccueil"><a class="nav-link <?php if ($page == 'accueil') echo "active" ?>"
                                                    href="/"><span><span class="fa fa-home"></span> Accueil</span></a>
            </li>
            <li class="nav-item" id="navEco-Droit"><a class="nav-link <?php if ($page == 'ecodroit') echo "active" ?>"
                                                      href="/pages/ecodroit.php"><span><span
                                class="fa fa-balance-scale"></span> Éco-droit</span></a></li>
            <li class="nav-item" id="navContact"><a class="nav-link <?php if ($page == 'contact') echo "active" ?>"
                                                    href="/pages/contact.php"><span><span class="fa fa-envelope"></span> Contact</span></a>
            </li>
        </ul>
    </div>
</nav>