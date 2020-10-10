<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <?php 

        if($_SERVER['REQUEST_METHOD'] == 'POST' ) {

            //Create a cookie for one day
            setcookie('product', $_POST['cookie'], time() + 86400);

            //Delete the cookie
            if($_POST['cookie'] == "delete") {
                setcookie('product', $_POST['cookie'], time() - 86400);
            }
        }
        
        if(isset($_COOKIE['product'])) {

            //Store url of the product depending on the cookie
            if($_COOKIE['product'] == 'Phone') {
                $url = "https://www.gizbot.com/images/2018-06/xiaomi-redmi-6-pro_1529927296110.jpg";
            }
            else if($_COOKIE['product'] == "Laptop") {
                $url = "https://images.unsplash.com/photo-1511385348-a52b4a160dc2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80";
            }
            else if($_COOKIE['product'] == "Watch") {
                $url = "https://wallpapercave.com/wp/wp2173825.jpg";
            }
            else if($_COOKIE['product'] == "Bag") {
                $url = "https://goproessentials.com/wp-content/uploads/2019/02/Tenba-Solstice-20l-backpack-tablet-pocket.jpg";
            }
            else if($_COOKIE['product'] == "Shoes") {
                $url = "https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80";
            }
            else {
                $url = "https://i.insider.com/581114e25124c9f370201c55?width=1100&format=jpeg&auto=webp";
            }

        }

        
    
    ?>

    


    <div class="container mt-4 mb-5">
        <h1 class="text-center">E-Commerce Website</h1>

        <?php if(isset($_COOKIE['product'])) : ?>
            <h2>Recommended for you</h2>
            <form method="POST">
                <div class="row my-5">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $url ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $_COOKIE['product'] ?></h5>
                                <p class="card-text">$999</p>
                                    <a href="" name="phone" class="btn btn-primary mr-4">Buy</a>
                                    <button type="submit" name="cookie" value="delete" class="btn btn-danger">Delete Cookie</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php endif; ?>
        

        <h2>Top Products</h2>
        <form action="cookies.php" method="POST">
            <div class="row mt-5">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.gizbot.com/images/2018-06/xiaomi-redmi-6-pro_1529927296110.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mobile</h5>
                            <p class="card-text">$999</p>
                            <button type="submit" name="cookie" value="Phone" class="btn btn-primary">Buy</button>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1511385348-a52b4a160dc2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Laptop</h5>
                            <p class="card-text">$1999</p>
                            <button type="submit" name="cookie" value="Laptop" class="btn btn-primary">Buy</button>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://wallpapercave.com/wp/wp2173825.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Watch</h5>
                            <p class="card-text">$399</p>
                            <button type="submit" name="cookie" value="Watch" class="btn btn-primary">Buy</button>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row mt-5">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://goproessentials.com/wp-content/uploads/2019/02/Tenba-Solstice-20l-backpack-tablet-pocket.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bag</h5>
                            <p class="card-text">$99</p>
                            <button type="submit" name="cookie" value="Bag" class="btn btn-primary">Buy</button>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Shoes</h5>
                            <p class="card-text">$299</p>
                            <button type="submit" name="cookie" value="Shoes" class="btn btn-primary">Buy</button>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.insider.com/581114e25124c9f370201c55?width=1100&format=jpeg&auto=webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Earpods</h5>
                            <p class="card-text">$499</p>
                            <button type="submit" name="cookie" value="Earpods" class="btn btn-primary">Buy</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </form>
        
    </div>

    
    
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>