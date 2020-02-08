<div class="container">
    <br>
    <div class="row">
        {foreach $products as $product}
            <div class="card col-md-4" style="width: 18rem;">
                <img src="./views/img/products/{$product->getId()}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{$product->getName()}</h5>
                    <p class="card-text">{$product->getShortDesc()}</p>
                    <form action="./product" method="post">
                        <input type="submit" class="btn btn-primary" value="Add to basket">
                        <input type="hidden" name="id" id="bla" value="{$product->getId()}">
                    </form>
                </div>
            </div>
        {/foreach}
    </div>
</div>