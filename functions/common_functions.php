<?php 
include('./includes/connect.php');

function getproducts(){
    global $con;
    if(!isset($_GET['category'])){
 
    $select_query="Select * from `products` order by rand()";
    $result_query=mysqli_query($con,$select_query);
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $disc_price=$row['disc_price'];
        $category_id=$row['category_id'];
        $category_title=$row['category_title'];
    
        echo "<div data-w-id='1fab0f69-2bc8-13ec-f902-41e1f38dfb4a' role='listitem'
        class='product-item w-dyn-item'><a href='product_details.php?product_id=$product_id' class='product-image-wrapper w-inline-block'><img
                src='./Admin-Panel/product_images/$product_image1'
                loading='eager'
                data-wf-sku-bindings='%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D'
                alt='' sizes='(max-width: 479px) 94vw, (max-width: 991px) 47vw, 22vw'
                srcset='./Admin-Panel/product_images/$product_image1' 500w, './Admin-Panel/product_images/$product_image1' 600w'
                class='product-thumbnail' /><img
                src='./Admin-Panel/product_images/$product_image1'
                loading='eager' style='opacity:0' alt=''
                sizes='(max-width: 479px) 94vw, (max-width: 991px) 47vw, 22vw'
                srcset='./Admin-Panel/product_images/$product_image1' 600w'
                class='product-hover-thumbnail' /></a>
        <div class='product-info'>
            <a href='product_details.php?product_id=$product_id' class='product-link w-inline-block'>
                <h6 class='product-title'>$product_title</h6>
            </a>
            
            <div class='price'>
                <div 'data-wf-sku-bindings=%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D'
                    class='product-price'>$product_price</div>
                <div 'data-wf-sku-bindings=%5B%7B%22from%22%3A%22f_compare_at_price_7dr10dr%22%2C%22to%22%3A%22innerHTML%22%7D%5D'
                    class='product-compare-at-price'>$disc_price</div>
            </div>
        </div>
        <div class='w-dyn-list'>
            <div role='list class=w-dyn-items'>
                <div role='listitem class=w-dyn-item'>
                    <a href='product_details.php?product_id=$product_id' class='product-category-link w-inline-block'>
                        <div>$category_title</div>
                    </a>
                </div>
            </div>
        </div>
    </div>";
    }
}
}



function getuniquecategory(){
    global $con;

    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
        $select_query="Select * from `products` where category_id=$category_id";
 
    // $select_query="Select * from `products` order by rand()";
    $result_query=mysqli_query($con,$select_query);
    // $row=mysqli_fetch_assoc($result_query);
    // echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_image1=$row['product_image1'];
        $product_image2=$row['product_image2'];

        $product_price=$row['product_price'];
        $disc_price=$row['disc_price'];
        $category_id=$row['category_id'];
        $category_title=$row['category_title'];
    
        echo "<div data-w-id='0f9e1b1e-781b-075c-a6cd-92df0f418724' role='listitem'
        class='product-item w-dyn-item'><a
            class='product-image-wrapper w-inline-block'><img
                src='./Admin-Panel/product_images/$product_image1'
                loading='eager'
                data-wf-sku-bindings='%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D'
                alt=''
                sizes='(max-width: 479px) 94vw, (max-width: 767px) 47vw, (max-width: 991px) 31vw, 30vw'
                srcset='./Admin-Panel/product_images/$product_image1 500w, ./Admin-Panel/product_images/$product_image1 600w'
                class='product-thumbnail'><img
                src='./Admin-Panel/product_images/$product_image2'
                loading='eager' style='opacity: 0;' alt=''
                sizes='(max-width: 479px) 94vw, (max-width: 767px) 47vw, (max-width: 991px) 31vw, 30vw'
                srcset='./Admin-Panel/product_images/$product_image2 500w, ./Admin-Panel/product_images/$product_image2 600w'
                class='product-hover-thumbnail'></a>
        <div class='product-info'><a href='Product.html'
                class='product-link w-inline-block'> 
                <h6 class='roduct-title'>$product_title</h6>
            </a>
            <div class='price'>
                <div data-wf-sku-bindings='%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D'
                    class='product-price'>$disc_price</div>
                <div data-wf-sku-bindings='%5B%7B%22from%22%3A%22f_compare_at_price_7dr10dr%22%2C%22to%22%3A%22innerHTML%22%7D%5D'
                    class='product-compare-at-price'>$product_price</div>
            </div>
        </div>
        <div class='w-dyn-list'>
            <div role='list' class='w-dyn-items'>
                <div role='listitem' class='w-dyn-item'><a href=''
                        class='product-category-link w-inline-block'>
                        <div>$category_title</div>
                    </a></div>
            </div>
        </div>
    </div>";
    }
}
}




function view_details()
{

    global $con;
    if (isset($_GET['product_id'])) {
        if (!isset($_GET['category'])) {


        $product_id = $_GET['product_id'];
        $select_query = "Select * from `products` where product_id=$product_id";
        $result_query = mysqli_query($con, $select_query);
        // $row=mysqli_fetch_assoc($result_query);
        // echo $row['product_title'];
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $material = $row['material'];
            $color = $row['color'];
            $size = $row['size'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_image2 = $row['product_image2'];
            $product_price = $row['product_price'];
            $disc_price = $row['disc_price'];

            echo "    <div class='section-product-detail wf-section'>
            <div class='container w-container'>
                <div class='w-layout-grid product-detail'>
                    <div id='w-node-fdbe5b66-bdd7-582e-8d1a-6dfccea837dd-aafd7d01'><a href=''
                            data-wf-sku-bindings='%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22media%22%7D%5D'
                            class='product-lightbox-link w-inline-block w-lightbox' aria-label='open lightbox'
                            aria-haspopup='dialog'><img id='w-node-_6e22326b-a0f5-2047-ceaa-c5bff687f782-aafd7d01'
                                loading='eager'
                                data-wf-sku-bindings='%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D'
                                src='$product_image2'
                                alt='' sizes='(max-width: 479px) 94vw, (max-width: 991px) 96vw, 94vw'
                                srcset='$product_image2 500w, $product_image2 600w'
                                class='product-thumbnail'>
                        
                        </a><a href='' class='w-inline-block w-lightbox' aria-label='open lightbox'
                            aria-haspopup='dialog'><img
                                src='$product_image2'
                                loading='eager' id='w-node-_42df28b4-5888-0238-5332-a2cda998f8f1-aafd7d01' alt=''
                                sizes='(max-width: 479px) 94vw, (max-width: 991px) 96vw, 94vw'
                                srcset='$product_image2 500w, $product_image2 600w'
                                class='product-thumbnail'>
         
                        </a></div><div id='w-node-ce3eba35-83b8-c3d4-d46f-578f7511878e-aafd7d01'>
            <div class='product-detail-sticky'>
                <h1>$product_title</h1>
                <div class='products-price-wrapper'>
                    <h5 data-wf-sku-bindings='%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D'
                        class='product-detail-price'>$disc_price</h5>
                    <h6 data-wf-sku-bindings='%5B%7B%22from%22%3A%22f_compare_at_price_7dr10dr%22%2C%22to%22%3A%22innerHTML%22%7D%5D'
                        class='product-detail-compare'>$product_price</h6>
                </div>
                <div class='w-layout-grid product-detail-info'>
                    <div id='w-node-c02d4081-b687-62c2-6e68-644d5319e83f-aafd7d01'
                        class='product-detail-info-item'><img
                            src=''
                            loading='lazy' alt='' class='product-info-icon'>
                        <div>In Stock!</div>
                    </div>
                  
                    <div id='w-node-d2af026b-38fe-5cf1-aa4f-f3de6e8498b5-aafd7d01'
                        class='product-detail-info-item'><img
                            src=''
                            loading='lazy' alt='' class='product-info-icon'>
                        <div>Insured Delivery!</div>
                    </div>
                </div>
                <div class='add-to-cart'>
                    <form data-node-type='commerce-add-to-cart-form'
                        data-commerce-sku-id='63878ddc825d333fe907fa80' data-loading-text='Adding to cart...'
                        data-commerce-product-id='63878ddc0e555d42f3369c0c'
                        class='w-commerce-commerceaddtocartform default-state'><input type='number'
                            pattern='^[0-9]+$' inputmode='numeric'
                            id='quantity-b9c8d10f0f1f2d9c61ffb65161ca1817'
                            name='commerce-add-to-cart-quantity-input' min='1'
                            class='w-commerce-commerceaddtocartquantityinput quantity' value='1'
                        <div data-wf-sku-bindings='%5B%7B%22from%22%3A%22f_sku_values_3dr%22%2C%22to%22%3A%22optionValues%22%7D%5D'
                            data-commerce-product-sku-values='%7B%7D'
                            data-node-type='commerce-add-to-cart-option-list'
                            data-commerce-product-id='63878ddc0e555d42f3369c0c'
                            data-preselect-default-variant='false' role='group'></div><input type='submit'
                            data-node-type='commerce-add-to-cart-button' data-loading-text='Adding to cart...'
                            value='Add to Cart' aria-busy='false' aria-haspopup='dialog'
                            class='w-commerce-commerceaddtocartbutton button-gold button-add-to-cart'><a
                            data-node-type='commerce-buy-now-button' data-default-text='Buy now'
                            data-subscription-text='Subscribe now' aria-busy='false' aria-haspopup='false'
                            style='display:none' class='w-commerce-commercebuynowbutton w-dyn-hide'
                            href='/checkout'>Buy now</a>
                    </form>
                    <div tabindex='0' style='display:none'
                        class='w-commerce-commerceaddtocartoutofstock empty-state'>
                        <div>This product is out of stock.</div>
                    </div>
                    <div aria-live='assertive' data-node-type='commerce-add-to-cart-error' style='display:none'
                        class='w-commerce-commerceaddtocarterror error-message'>
                        <div data-node-type='commerce-add-to-cart-error'
                            data-w-add-to-cart-quantity-error='Product is not available in this quantity.'
                            data-w-add-to-cart-general-error='Something went wrong when adding this item to the cart.'
                            data-w-add-to-cart-mixed-cart-error='You can’t purchase another product with a subscription.'
                            data-w-add-to-cart-buy-now-error='Something went wrong when trying to purchase this item.'
                            data-w-add-to-cart-checkout-disabled-error='Checkout is disabled on this site.'
                            data-w-add-to-cart-select-all-options-error='Please select an option in each set.'>
                            Product is not available in this quantity.</div>
                    </div>
                </div>
                <p>$product_description</p>
              
                    <div class='according-item' >
                        <div data-w-id='7900c86e-9496-a661-14af-5ba440b12671'style='display: flex; flex-direction:column'>
                            
                    <br>
                        
                                <p><strong>Material:</strong>$material</p>
                                <p>‍<strong>Colour: </strong>$color</p>
                                <p>‍<strong>Product Size:</strong> $size</p>
                            </div>
                        </div>
                    </div>
                    
             
            </div>
        </div>
    </div>

</div>";
        }
    }
}
}
?>