<div class="container">
    <br>
    <div class="row">
        {foreach $products as $product}
            <div class="card col-md-4" style="width: 18rem;">
                <img src="./views/img/products/{$product->getId()}.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{$product->getName()}</h5>
                    <p class="card-text">{$product->getShortDesc()}</p>
                    <form action="product?id={$product->getId()}" method="post">
                        <input type="submit" class="btn btn-primary" value="Plus d'info..">
                    </form>
                </div>
            </div>
        {/foreach}
    </div>
</div>