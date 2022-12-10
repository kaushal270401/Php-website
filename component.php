
<?php
function component($productname, $productprice, $productimg, $productid){
    $element = "
                <form action=\"index.php\" method=\"post\">
                    <article class=\"sneaker\">
                        <img src=\"$productimg\" alt=\"women1\" class=\"sneaker__img\">
                        <span class=\"sneaker__name\">$productname</span>
                        <span class=\"sneaker__price\">$$productprice</span>
                        <a href=\"product-detail\index.html\" class=\btn-lights\">show product<i class=\"bx bx-right-arrow-alt btn-icon\"></i></a>
                        <a href=\"#\" class=\"btn-light\">Add to Cart <i class=\"bx bx-right-arrow-alt btn-icon\"></i></a>
                        <input type='hidden' name='product_id' value='$productid'>
                    </article> 
                </form>
    ";
    echo $element;
}