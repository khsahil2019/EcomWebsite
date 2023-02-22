<?php
include('../includes/connect.php');

if (isset($_POST['insert_product'])) {

    $product_title = $_POST['product_title'];
    $description = $_POST['description'];
    $material = $_POST['material'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];
    $disc_price = $_POST['disc_price'];
    $product_status = 'true';

    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    

    if (
        $product_title == '' or $description == '' or
        $material == '' or
        $color == '' or
        $size == '' or
   
        $product_category == ''
        or $product_price == '' or
        $disc_price == '' or

        $product_image1 == '' or $product_image2 == '' or $product_image3 == ''
    ) {
        echo "<script>alert('Please fill all the fields')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        $insert_products = "insert into `products` (product_title,product_description,material,color,size,category_id,product_image1,product_image2,product_image3,product_price,disc_price,date,status)
    values ('$product_title','$description','$material','$color','$size','$product_category','$product_image1','$product_image2','$product_image3','$product_price','$disc_price',NOW(),'$product_status')";
        // $insert_products =   "INSERT INTO `products`(`product_title`, `product_description`, `product_keywords`, `category_name`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`)
        //          VALUES ('$product_title','$description','$product_keywords','$product_category','$product_image1','$product_image2','$product_image3','$product_price','NOW()','$product_status')";
        $result_query = mysqli_query($con, $insert_products);
        if ($result_query) {
            echo "<script>alert('Successfully inserted product')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Name</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter Description" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="material" class="form-label">Material</label>
                <input type="text" name="material" id="material" class="form-control" placeholder="Enter Description" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="color" class="form-label">Color</label>
                <input type="text" name="color" id="color" class="form-control" placeholder="Enter Description" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="size" class="form-label">Sizes</label>
                <input type="text" name="size" id="size" class="form-control" placeholder="Enter Description" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_category" id="" class="form-select">
                
                   <?php
                   $select_query="Select * from `categories`";
                   $result_query=mysqli_query($con,$select_query);
                   while($row=mysqli_fetch_assoc($result_query)){
                    $category_title=$row['category_title'];
                    $category_id=$row['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                   }
                   ?>
                </select></div>




            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Image</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Original Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="disc_price" class="form-label">Discounted Price</label>
                <input type="text" name="disc_price" id="disc_price" class="form-control" placeholder="Enter Description" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert_Products">
            </div>
        </form>
    </div>

</body>

</html>