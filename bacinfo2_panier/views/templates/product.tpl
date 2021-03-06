<div class="container">
    <br>
    <div class="row">
        <div class="col-md-12">
            <h2 class="bd-title">{$product->getName()}</h2>
            <h6 class="bd-lead">{$product->getShortDesc()}</h6>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <img src="./views/img/products/{$product->getId()}.jpg" alt="{$product->getName()}" class="img-prod">
        </div>
        <div class="col-md-5">
            <p>
                {$product->getLongDesc()}
            </p>
        </div>
        <div class="card col-md-3 bg-secondary" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{$product->getPrice()}€</h5>
                <form class="form-group" action="cart" method="post">
                    <label for="quantity">Quantité :</label>
                    <input class="form-control-primary" type="number" value="1" min="1" max="100" step="1" id="quantity" name="quantity"/>
                    <input type="hidden" id="id" name="id" value="{$product->getId()}">
                    <button type="submit" id="submit" name="submit" class="btn btn-primary mt-2" style="width: 213px">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </div>
</div>