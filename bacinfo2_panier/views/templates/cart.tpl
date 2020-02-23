<div class="container">
    <div class="row">
        {if $newProduct === 0}
            <br>
            <h2><a href="user">Connectez-vous</a></h2>
        {elseif $newProduct === 1}
            <h2 style="margin:1em 0">Voici votre panier</h2><br>
    </div>
    <div class="row">
            <div class="col-md-8">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Référence</th>
                            <th scope="col">Désignation</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Sous-total</th>
                        </tr>
                    </thead>
                    <tbody>
                    {$total = 0}
                    {foreach $panier->getArr() as $product}
                        {$sousTotal = $product[0]->getPrice() * $product[1][0]}
                        {$total = $total + $sousTotal}
                        <tr>
                            <th scope="row">{$product[0]->getId()}</th>
                            <td>{$product[0]->getName()}</td>
                            <td>{$product[0]->getPrice()}€</td>
                            <td>{$product[1][0]}</td>
                            <td>{$sousTotal}€</td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total :</h4>
                        <p class="card-text">{$total}€</p>
                    </div>
                </div>
            </div>
        {elseif $newProduct === 2}
            <p>Produit ajouté</p>
            <a href="{$smarty.server.HTTP_REFERER}">Retour au produit</a>
        {else}
            <p>Une erreur est survenue.</p>
            <a href="">Retour à l'acceuil</a>
        {/if}
    </div>
</div>