<div class="container">
    <br>
    <div class="row">
        {foreach $products as $product}
            <div class="card col-md-4" style="width: 18rem;">
                <img src="./views/img/products/{$product->id_prod}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{$product->name_prod}</h5>
                    <p class="card-text">{$product->shortDesc_prod}</p>
                    <a href="#" class="btn btn-primary">Add to basket</a>
                </div>
            </div>
        {/foreach}
    </div>
</div>