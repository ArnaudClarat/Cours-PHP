<div class="container">
    <br>
    <div class="row">
        {foreach $datas as $data}
            <div class="card m-1" style="width: 18rem;">
                <img src="./views/img/products/{$data['id_prod']}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{$data['name_prod']}</h5>
                    <p class="card-text">{$data['short-desc_prod']}</p>
                    <a href="#" class="btn btn-primary">Add to basket</a>
                </div>
            </div>
        {/foreach}
    </div>
</div>