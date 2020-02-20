cart

{if $newProduct === 0}
    <p>Veuillez vous connecter</p>
{elseif $newProduct === 1}
    <p>Voici votre panier</p>
{else}
    <p>Produit ajouté</p>
{/if}

{$newProduct|var_dump}