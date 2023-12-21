<?php
session_start();
if (!isset($_SESSION["user"])) {
header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esPETcial</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    

            <!-- Primary Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                <a class="navbar-brand" href="#">esPETcial</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">On Sale</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#special-price">Products </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blogs">Article</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#top-sale">Top Sales</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                      </li>
                      
                      
                  </ul>
                  <form action="#" class="font-size-14 font-rale">
                      <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                      </a>
                  </form>
                </div>
              </nav>
               <!-- !Primary Navigation -->

        </header>
    <!-- !start #header -->

    <!-- start #main-site -->
        <main id="main-site">

          <!-- Owl-carousel -->
            <section id="banner-area">
              <div class="owl-carousel owl-theme">
                  <div class="item">
                    <img src="carsel1.jpg" alt="Banner1">
                  </div>
                  <div class="item">
                    <img src="carsel2.jpg" alt="Banner2">
                  </div>
                  <div class="item">
                    <img src="carsel4.png" alt="Banner3">
                  </div>
              </div>
            </section>
          <!-- !Owl-carousel -->

          <!-- Top Sale -->
          <section id="top-sale">
            <div class="container py-5">
              <h4 class="font-rubik font-size-20">Top Sale</h4>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="prod1.php"><img src="https://th.bing.com/th/id/OIP.Wct3jooIH_Sn6mNuH7G3OAHaHa?pid=ImgDet&rs=1" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Pedigree</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>₱480.00</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="prod2.php"><img src="https://th.bing.com/th/id/OIP.pdzQinFRb8dwHn5PPzANLgHaHa?w=189&h=189&c=7&r=0&o=5&dpr=1.4&pid=1.7" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Royal Canin</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>₱2,100</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="prod3.php"><img src="https://th.bing.com/th/id/OIP.HSsE5q5_uYHRSQ7A6zul2gHaHa?w=216&h=216&c=7&r=0&o=5&dpr=1.4&pid=1.7" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Nutri Chunks</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>₱920.00</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="prod4.php"><img src="https://target.scene7.com/is/image/Target/GUEST_c1e55f97-27a7-44f6-862f-f525607ca2ff?wid=488&hei=488&fmt=pjpeg" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>Cesar Rotisserie</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>₱375.00</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="prod5.php"><img src="https://cf.shopee.com.my/file/fa481c290a09bb5369793ca14ea98957" alt="product1" class="img-fluid"></a>
                      <div class="text-center">
                        <h6>smart heart tuna cat food</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>₱350.00</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="prod6.php"><img src="https://i5.walmartimages.com/seo/Meow-Mix-Original-Choice-Dry-Cat-Food-16-Pounds_adb2eb13-19ff-435a-9c0a-ea74272defac.1cfc4312511024d2e9a2609c4e0d3625.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF" class="img-fluid" alt="pro1"></a>
                        <div class="text-center">
                          <h6>Meow Mix</h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>₱550.00</span>
                          </div>
                          <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="prod7.php"><img src="https://th.bing.com/th/id/OIP.sW6Z5iaWanRU9f6RpipYhAHaGF?w=217&h=180&c=7&r=0&o=5&dpr=1.4&pid=1.7" class="img-fluid" alt="pro1"></a>
                        <div class="text-center">
                          <h6>Meat Jerky Strap Smoky Beef treats</h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>₱200.00</span>
                          </div>
                          <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- !owl carousel -->
            </div>
          </section>
        <!-- !Top Sale -->

        <!-- Special Price -->
        <section id="banner_adds">
            <div class="container py-5 text-center">
              
              <img src="https://www.petexpress.com.ph/cdn/shop/files/Pet-insurance_1800x.png?v=1683253528" alt="banner1" class="img-fluid">
            </div>
          </section>

          <section id="special-price">
            <div class="container">
              <h4 class="font-rubik font-size-20">Special Price</h4>
              <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All Product</button>
                <button class="btn" data-filter=".Apple">Cat Food</button>
                <button class="btn" data-filter=".Samsung">Treats</button>
                <button class="btn" data-filter=".Redmi">Dog food</button>
              </div>

              <div class="grid">
                <div class="grid-item Apple border">
                 <div class="item py-2" style="width: 200px;">
                  <div class="product font-rale">
                    <a href="#"><img src="https://th.bing.com/th/id/OIP.pdzQinFRb8dwHn5PPzANLgHaHa?w=189&h=189&c=7&r=0&o=5&dpr=1.4&pid=1.7" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                      <h6>Royal Canin</h6>
                      <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                      </div>
                      <div class="price py-2">
                        <span>₱105.00</span>
                      </div>
                      <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                  </div>
                </div>
                </div>
                <div class="grid-item Samsung border">
                  <div class="item py-2" style="width: 200px;">
                   <div class="product font-rale">
                     <a href="#"><img src="https://snspetshop.com/image/cache/catalog/Product/CIAO/26-50/CIAO%20Cat%20Treat%20Churu%20Tuna%20Mix%20Festive%20Pack%2014gr%20x%2050-1100x1100.jpg" alt="product1" class="img-fluid"></a>
                     <div class="text-center">
                       <h6>Ciao Churu 14g x 40 Cat Treats</h6>
                       <div class="rating text-warning font-size-12">
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="far fa-star"></i></span>
                       </div>
                       <div class="price py-2">
                         <span>₱840.00</span>
                       </div>
                       <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                     </div>
                   </div>
                 </div>
                 </div>
                 <div class="grid-item Redmi border">
                  <div class="item py-2" style="width: 200px;">
                   <div class="product font-rale">
                     <a href="#"><img src="https://www.seingayhar.com/image/cache/catalog/Product/Pets(03.03.2020)/11-1000x1000.jpg" alt="product1" class="img-fluid"></a>
                     <div class="text-center">
                       <h6>Smartheart Beef Dog Food</h6>
                       <div class="rating text-warning font-size-12">
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="far fa-star"></i></span>
                       </div>
                       <div class="price py-2">
                         <span>₱199.00</span>
                       </div>
                       <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                     </div>
                   </div>
                 </div>
                 </div>
                 <div class="grid-item Apple border">
                  <div class="item py-2" style="width: 200px;">
                   <div class="product font-rale">
                     <a href="#"><img src="https://i5.walmartimages.com/seo/Meow-Mix-Original-Choice-Dry-Cat-Food-16-Pounds_adb2eb13-19ff-435a-9c0a-ea74272defac.1cfc4312511024d2e9a2609c4e0d3625.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF" alt="product1" class="img-fluid"></a>
                     <div class="text-center">
                       <h6>Meow Mix</h6>
                       <div class="rating text-warning font-size-12">
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="far fa-star"></i></span>
                       </div>
                       <div class="price py-2">
                         <span>$152</span>
                       </div>
                       <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                     </div>
                   </div>
                 </div>
                 </div>
                 <div class="grid-item Samsung border">
                  <div class="item py-2" style="width: 200px;">
                   <div class="product font-rale">
                     <a href="prod1.php"><img src="https://th.bing.com/th/id/OIP.Vc6bcI1OH8xr0Ojcaa4sxgAAAA?pid=ImgDet&rs=1" alt="product1" class="img-fluid"></a>
                     <div class="text-center">
                       <h6>Pedigree</h6>
                       <div class="rating text-warning font-size-12">
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="fas fa-star"></i></span>
                         <span><i class="far fa-star"></i></span>
                       </div>
                       <div class="price py-2">
                         <span>₱480.00</span>
                       </div>
                       <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                     </div>
                   </div>
                 </div>
                 </div>
                 <div class="grid-item  Redmi border ">
                  <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="#"><img src="https://th.bing.com/th/id/OIP.HSsE5q5_uYHRSQ7A6zul2gHaHa?w=216&h=216&c=7&r=0&o=5&dpr=1.4&pid=1.7" class="img-fluid" alt="pro1"></a>
                        <div class="text-center">
                          <h6>Nutri Chunks</h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>₱920.00</span>
                          </div>
                          <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item  Redmi border ">
                  <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="prod1.php"><img src="https://th.bing.com/th/id/OIP.Wct3jooIH_Sn6mNuH7G3OAHaHa?pid=ImgDet&rs=1" class="img-fluid" alt="pro1"></a>
                        <div class="text-center">
                          <h6>Pedigree</h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>₱480.00</span>
                          </div>
                          <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item  Redmi border ">
                  <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="#"><img src="https://target.scene7.com/is/image/Target/GUEST_c1e55f97-27a7-44f6-862f-f525607ca2ff?wid=488&hei=488&fmt=pjpeg" class="img-fluid" alt="pro1"></a>
                        <div class="text-center">
                          <h6>Cesar Rotisserie</h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>₱375.00</span>
                          </div>
                          <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item  Redmi border">
                  <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="#"><img src="https://th.bing.com/th/id/R.d4be1fa91f77b5e4ebe7401c4df0f767?rik=lcy%2fx%2fuaHDx7Fg&riu=http%3a%2f%2fwww.goldenwestindo.com%2fwp-content%2fuploads%2f2017%2f05%2fVitakraft-cat-milk-7-x-20-ml.jpg&ehk=zXhBeVSvczlwvPWtDJHfea4ZmRfToWDxX0aKZywFtX0%3d&risl=&pid=ImgRaw&r=0" class="img-fluid" alt="pro1"></a>
                        <div class="text-center">
                          <h6>Vitakarft Cat Milk</h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>₱380.00</span>
                          </div>
                          <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid-item Apple border  " >
                  <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                      <div class="d-flex flex-column">
                        <a href="prod5.php"><img src="https://cf.shopee.com.my/file/fa481c290a09bb5369793ca14ea98957" class="img-fluid" alt="pro1"></a>
                        <div class="text-center">
                          <h6>smart heart tuna cat food</h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>₱350.00</span>
                          </div>
                          <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <!-- !Special Price -->

        <!-- Banner Ads  -->
          <section id="banner_adds">
            <div class="container py-5 text-center">
              
              <img src="https://www.petexpress.com.ph/cdn/shop/files/PC-1_8e873ad7-7e47-4d14-a32c-7f64ca8a5421_1800x.png?v=1701396967" alt="banner1" class="img-fluid">
            </div>
          </section>
        <!-- !Banner Ads  -->

          <!-- New Phones -->
          <section id="new-phones">
            <div class="container">
              <h4 class="font-rubik font-size-20">Pet Supplies</h4>
              <hr>

                    <!-- owl carousel -->
                    <div class="owl-carousel owl-theme">
                      <div class="item py-2 bg-light">
                        <div class="product font-rale">
                          <a href="#"><img src="https://i5.walmartimages.com/asr/c7efc193-ae58-4236-a2cc-b6aeb8d714c8.5aff0533aaef6f0069955d690c0af9bb.jpeg?odnWidth=1000&odnHeight=1000&odnBg=ffffff" alt="product1" class="img-fluid"></a>
                          <div class="text-center">
                            <h6>Heavy Duty Leash</h6>
                            <div class="rating text-warning font-size-12">
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                              <span>₱450.00</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                          </div>
                        </div>
                      </div>
                      <div class="item py-2 bg-light">
                        <div class="product font-rale">
                          <a href="#"><img src="https://i.pinimg.com/originals/3c/2b/d5/3c2bd5abc06593853c90a84ae1d04c45.jpg" alt="product1" class="img-fluid"></a>
                          <div class="text-center">
                            <h6>Doggo Smooth Bone</h6>
                            <div class="rating text-warning font-size-12">
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                              <span>₱109.00</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                          </div>
                        </div>
                      </div>
                      <div class="item py-2 bg-light">
                        <div class="product font-rale">
                          <a href="#"><img src="https://th.bing.com/th/id/OIP.UULKz233yWVU3e9ysgkguQHaHa?pid=ImgDet&w=184&h=184&c=7&dpr=1.4" alt="product1" class="img-fluid"></a>
                          <div class="text-center">
                            <h6>Doggo Collar</h6>
                            <div class="rating text-warning font-size-12">
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                              <span>₱289</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                          </div>
                        </div>
                      </div>
                      <div class="item py-2 bg-light">
                        <div class="product font-rale">
                          <a href="#"><img src="https://ae01.alicdn.com/kf/HTB18KdsxWmWBuNjy1Xaq6xCbXXaB/New-Pet-Toy-Ball-Dog-Toy-Tennis-Balls-Run-Fetch-Throw-Play-Toy-Chew-Toy-Cat.jpg" alt="product1" class="img-fluid"></a>
                          <div class="text-center">
                            <h6>Ball dogs toy</h6>
                            <div class="rating text-warning font-size-12">
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                              <span>₱180.00</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                          </div>
                        </div>
                      </div>
                      <div class="item py-2 bg-light">
                        <div class="product font-rale">
                          <a href="#"><img src="https://th.bing.com/th/id/OIP.qxDZATSOOFGbg4q8y3VaGwHaHa?pid=ImgDet&rs=1" alt="product1" class="img-fluid"></a>
                          <div class="text-center">
                            <h6>Cat Collars</h6>
                            <div class="rating text-warning font-size-12">
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                              <span>₱150.00</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                          </div>
                        </div>
                      </div>
                      <div class="item py-2 bg-light">
                        <div class="product font-rale">
                          <div class="d-flex flex-column">
                            <a href="#"><img src="https://cdn.shopify.com/s/files/1/0994/0236/products/80837.ASSORTED_COLORS_BROWN_1024x1024@2x.jpg?v=1529105865" class="img-fluid" alt="pro1"></a>
                            <div class="text-center">
                              <h6>Petals Rectangulars</h6>
                              <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                              </div>
                              <div class="price py-2">
                                <span>₱599.00</span>
                              </div>
                              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item py-2 bg-light">
                        <div class="product font-rale">
                          <div class="d-flex flex-column">
                            <a href="#"><img src="https://images.petcarrier.biz/l-m/paws-and-pals-dog-stroller-easy-walk.jpg" class="img-fluid" alt="pro1"></a>
                            <div class="text-center">
                              <h6>Pet Pals 4 Wheel for Medium Breed Pet Stroller</h6>
                              <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                              </div>
                              <div class="price py-2">
                                <span>₱3999.00</span>
                              </div>
                              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- !owl carousel -->

            </div>
          </section>
          <!-- !BLOGS -->

          <!-- Blogs -->
            <section id="blogs">
              <div class="container py-4">
                <h4 class="font-rubik font-size-20">Article</h4>
                <hr>

                <div class="owl-carousel owl-theme">
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">Optimizing Your Pet's Diet: Wet vs. Dry Pet Food</h5>
                      <img src="https://www.petexpress.com.ph/cdn/shop/articles/1_2fa60c0b-1a5d-497b-bfe7-227bf27f5c20_1200x.png?v=1700465260" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">Wet food is higher in moisture content than dry food, which can be beneficial for cats who are prone to dehydration. For example, wet cat food tends to be more protein-rich, aiding in muscle development and overall vitality. It also contains more water than dry cat food, which can help cats stay hydrated, especially if they are not drinking enough water.</p>
                      <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">A Comprehensive Guide to First-Year Kitten and Puppy Vaccinations</h5>
                      <img src="https://www.petexpress.com.ph/cdn/shop/articles/1_a933d32b-cd2e-4c4b-9cd6-00b25b095a10_1200x.png?v=1700463935" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">As a responsible pet owner, you understand the importance of keeping your furry friend healthy. One of the best ways to do that is by providing them with essential vaccines that boost their immune system against various diseases that can pose a severe threat to their health.</p>
                      <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">Here’s Your Complete Guide to Adopting Pets in the Philippines</h5>
                      <img src="https://www.petexpress.com.ph/cdn/shop/articles/2_e312850f-5b64-4de8-9e04-333c92998761_1200x.png?v=1697521952" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">The Philippines has a large stray animal population. There are an estimated 7 million stray dogs and cats in the country, and many of them are not spayed or neutered. This leads to overpopulation and the spread of disease. Adopting a pet from a shelter helps reduce the number of stray animals and improves the health of the community.</p>
                      <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          <!-- !Blogs -->

        </main>
    <!-- !start #main-site -->

    <!-- start #footer -->
        <footer id="footer" class="bg-dark text-white py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">esPETcial</h4>
                <p class="font-size-14 font-rale text-white-50">Taste it, love it or we’ll replace it… Guaranteed!</p>
              </div>
              <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Newslatter</h4>
                <form class="form-row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Email *">
                  </div>
                  <div class="col">
                    <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                  </div>
                </form>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="copyright text-center bg-dark text-white py-2">
          <p class="font-rale font-size-14">&copy; Copyrights 2023. Desing By <a href="#" class="color-second">esPETcial</a></p>
        </div>
    <!-- !start #footer -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script src="index.js"></script>
</body>
</html>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&family=Raleway&family=Rubik&display=swap");
/*              Sass Template           */
/*  global classes  */
button, button:focus {
  outline: none !important;
  box-shadow: none !important;
}

.body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}

/* typography classes */
.font-baloo {
  font-family: "Baloo Thambi 2", cursive;
}

.font-rale {
  font-family: "Raleway", cursive;
}

.font-rubik {
  font-family: "Rubik", cursive;
}

.font-size-12 {
  font-size: 12px;
}

.font-size-14 {
  font-size: 14px;
}

.font-size-16 {
  font-size: 16px;
}

.font-size-20 {
  font-size: 20px;
}

/* Color Template  */
.color-primary {
  color: #003859;
}

.color-primary-bg {
  background: #003859;
}

.color-second {
  color: #00A5C4;
}

.color-second-bg {
  background: #ff7200;
}

.color-yellow {
  color: #FFD289;
}

.color-yellow-bg {
  background: #FFD289;
}

/*  top sale template   */
#top-sale .owl-carousel .item .product a {
  overflow: hidden;
  
}
#top-sale .owl-carousel .item .product img {
  transition: transform 0.5s ease;
}
#top-sale .owl-carousel .item .product img:hover {
  transform: scale(1.1);
}
#top-sale .owl-carousel .owl-nav button {
  position: absolute;
  top: 30%;
  outline: none;
}
#top-sale .owl-carousel .owl-nav button.owl-prev {
  left: 0;
}
#top-sale .owl-carousel .owl-nav button.owl-prev span,
#top-sale .owl-carousel .owl-nav button.owl-next span {
  font-size: 35px;
  color: #003859;
  padding: 0 1rem;
}
#top-sale .owl-carousel .owl-nav button.owl-prev span {
  margin-left: -4rem;
}
#top-sale .owl-carousel .owl-nav button.owl-next {
  right: 0;
}
#top-sale .owl-carousel .owl-nav button.owl-next span {
  margin-right: -4rem;
}

/*   Special Price Section Template */
#special-price .grid .grid-item {
  margin-right: 1.2rem;
  margin-top: 1rem;
}

/*# sourceMappingURL=style.css.map */
</style>

<script>
    $(document).ready(function(){

// banner owl carousel
$("#banner-area .owl-carousel").owlCarousel({
    dots: true,
    items: 1
});

// top sale owl carousel
$("#top-sale .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive : {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000 : {
            items: 5
        }
    }
});

// isotope filter
var $grid = $(".grid").isotope({
    itemSelector : '.grid-item',
    layoutMode : 'fitRows'
});

// filter items on button click
$(".button-group").on("click", "button", function(){
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue});
})


// new phones owl carousel
$("#new-phones .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    responsive : {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000 : {
            items: 5
        }
    }
});

// blogs owl carousel
$("#blogs .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    responsive : {
        0: {
            items: 1
        },
        600: {
            items: 3
        }
    }
})


// product qty section
let $qty_up = $(".qty .qty-up");
let $qty_down = $(".qty .qty-down");
// let $input = $(".qty .qty_input");

// click on qty up button
$qty_up.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() >= 1 && $input.val() <= 9){
        $input.val(function(i, oldval){
            return ++oldval;
        });
    }
});

   // click on qty down button
   $qty_down.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() > 1 && $input.val() <= 10){
        $input.val(function(i, oldval){
            return --oldval;
        });
    }
});


});
</script>