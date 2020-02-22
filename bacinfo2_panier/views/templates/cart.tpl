<div class="container">
    {if $newProduct === 0}
        <br>
        <h2><a href="user">Connectez-vous</a></h2>
    {elseif $newProduct === 1}
        <br>
        <h2>Voici votre panier</h2><br>
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
            {foreach $panier->getArr() as $product}
                {$product|var_dump}
                <tr>
                    <th data-id={$product[0]->getId()}  scope="row">{$product[0]->getId()}</th>
                    <td>{$product[0]->getName()}</td>
                    <td id="price{$product[0]->getId()}">{$product[0]->getPrice()}€</td>
                    <td>
                        <input class="form-control-primary" type="number" value="{$product[1][0]}" min="1" max="100" step="1" name="quantity"/>
                    </td>
                    <td><span id="sumspan"></span>€</td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    {elseif $newProduct === 2}
        <p>Produit ajouté</p>
        <a href="{$smarty.server.HTTP_REFERER}">Retour au produit</a>
    {else}
        <p>Une erreur est survenue.</p>
        <a href="">Retour à l'acceuil</a>
    {/if}
</div>