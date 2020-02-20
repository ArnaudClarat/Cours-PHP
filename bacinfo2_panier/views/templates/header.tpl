<head>
    <title>{$title} - MonSite</title>
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
    <nav class="navbar navbar-expand-sm navbar-secondary bg-secondary text-dark">
        <a class="navbar-brand btn" href="./">MonSite</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {*Gauche*}
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link btn" href="./">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catégories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {foreach $categories as $categorie}
                            <a class="dropdown-item btn" href="categorie?id={$categorie->getId()}">{$categorie->getName()}</a>
                        {/foreach}
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="contact">Contact</a>
                </li>
            </ul>

            {*Centré*}
            <form class="form-inline m-auto" role="search" action="search?" method="get">
                <input class="form-control mr-sm-2 ds-input" name="stringSearch" type="search" placeholder="Search..." aria-label="Search...">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>

            {*Droite*}
            <div class="btn-group" role="group">
                <a class="btn border-dark" href="#">
                    <img src="./views/img/panier_logo.png" alt="panier" style="max-width: 24px">
                </a>
                {if isset($smarty.session.pseudo)}
                    <a class="btn border-light text-light btn-secondary my-2 my-sm-0" href="deco">Déconnection</a>
                {else}
                    <a class="btn border-dark text-dark my-2 my-sm-0" href="user">Connection</a>
                    <a class="btn border-dark text-dark my-2 my-sm-0" href="#">Créer un compte</a>
                {/if}
            </div>
        </div>
    </nav>
    {* END - HEADER EXAMPLE FROM BOOSTRAP DOCUMENTATION*}
</div>