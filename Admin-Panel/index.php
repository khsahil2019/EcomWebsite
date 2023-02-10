<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="conatainer-fluid">
                <img src="" alt="">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex">
                <div class="p-3">
                    <a href=""><img src="" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button><a href="" class="nav-link text-light bg-info my-1"></a>Insert Products</button>
                    <button><a href=""class="nav-link text-light bg-info my-1"></a>View Products</button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href=""class="nav-link text-light bg-info my-1"></a>View Categories</button>
                  
                    <button><a href=""class="nav-link text-light bg-info my-1"></a>All orders</button>
                    <button><a href=""class="nav-link text-light bg-info my-1"></a>All Payments</button>
                    <button><a href=""class="nav-link text-light bg-info my-1"></a>List Users</button>
                    <button><a href=""class="nav-link text-light bg-info my-1"></a>Logout</button>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            ?>
        </div>











    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>

</html>