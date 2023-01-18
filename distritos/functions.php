function get_products(){

$query = query(" SELECT * FROM products");
confirm($query);

while($row = fetch_array($query)){


$product = <<<DELIMETER

 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">

                    <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>


                            <div class="caption">

                    <h4 class="pull-right">&#8364;{$row['product_price']}</h4>


                    <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>

                                </h4>



                                <p>{$row['short_desc']}</p>
                           <a class="btn btn-primary" target="_blank" href="../resources/cart.php?add={$row['product_id']}">Comprar</a>
                            </div>




                        </div>
                    </div>

DELIMETER;
echo $product;

}


}
