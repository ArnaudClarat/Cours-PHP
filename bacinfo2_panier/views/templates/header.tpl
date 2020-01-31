<head>
    <title>MonSite - {$title}</title>
    <meta charset="UTF-8">
    {if isset($assets) && is_array($assets)}
        {*CSS INCLUSION*}
        {if !empty($assets['css'])}
            {foreach $assets['css'] as $css}
            <link rel="stylesheet" type="text/css" href="{$css}" media="screen">
            {/foreach}
        {/if}
        {*END - CSS INCLUSION*}

        {*BOOTSTRAP INCLUSION*}
        {if isset($bootstrap) && $bootstrap}
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        {/if}
        {*END - BOOTSTRAP INCLUSION*}

        {*JS INCLUSION*}
        {if !empty($assets['js'])}
            {foreach $assets['js'] as $js}
                <script src="{$js}"></script>
            {/foreach}
        {/if}
        {*END - JS INCLUSION*}
    {/if}
</head>
<div id="header">
    {* HEADER EXAMPLE FROM BOOSTRAP DOCUMENTATION*}
    <nav class="navbar navbar-expand-sm navbar-secondary bg-secondary   ">
        <a class="navbar-brand" href="#">MonSite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {*Gauche*}
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catégories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Catégorie 1</a>
                        <a class="dropdown-item" href="#">Catégorie 2</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Catégorie 3</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                {* DISABLE NAV LINK
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                *}
            </ul>

            {*Centré*}
            <form class="form-inline m-auto" role="group">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>

            {*Droite*}
            <form class="form-inline my-2 my-lg-0">
                <button class="btn border-dark" style="font-size: 1.4em">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </form>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn border-light text-light btn-secondary my-2 my-sm-0" type="submit">Connection</button>
                <button class="btn border-light text-light btn-secondary my-2 my-sm-0" type="submit">Créer un compte</button>
            </form>
        </div>
    </nav>
    {* END - HEADER EXAMPLE FROM BOOSTRAP DOCUMENTATION*}
</div>