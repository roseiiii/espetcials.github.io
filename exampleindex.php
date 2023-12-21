<?php
session_start();
if (!isset($_SESSION["user"])) {
header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>esPetcial</title>
  <meta name="title" content="esPetcial">
  <meta name="description" content="We LOVE pets, and we BELIEVE pets make us better people.">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>

      <a href="#" class="logo">esPetcial</a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#shop" class="navbar-link" data-nav-link>Products</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Cats & Dogs</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Services</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>About us</a>
          </li>

          <li class="navbar-item">
            <a href="logout.php" class="navbar-link" data-nav-link>logout</a>
          </li>

          

        </ul>

        <a href="#" class="navbar-action-btn">Log In</a>
      </nav>

      <div class="header-actions">

        <button class="action-btn" aria-label="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="action-btn user" aria-label="User">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="action-btn" aria-label="cart">
          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>

      </div>

    </div>
  </header>



  <section class="cta has-bg-image" aria-label="cta" style="background-image: url('https://th.bing.com/th/id/R.3c10942d4f79e6e8b53b5dfec85cb906?rik=RsLevyAizUDVTA&riu=http%3a%2f%2fimages.fanpop.com%2fimages%2fimage_uploads%2fYellow-Wallpaper-yellow-646738_800_600.jpg&ehk=%2f%2bpr7X9Yusd6LeP8KmZpt%2f4DLu%2fXTnZ6I94aCwnQvwQ%3d&risl=&pid=ImgRaw&r=0')">
        <div class="container">

          <figure class="cta-banner">
            <img src="cat.png" width="900" height="660" loading="lazy" alt="cat" class="w-100">
          </figure>

          <div class="cta-content">

          <img src="espetcial.png" class="logo"  width="120" height="35" loading="lazy" alt="taste guarantee"  ></a> 

            <h2 class="h2 section-title">Taste it, love it or we’ll replace it… Guaranteed!</h2>

            <p class="section-text">
              At Petio, we believe your dog and cat will love their food so much that if they don’t … we’ll help you
              find a
              replacement. That’s our taste guarantee.
            </p>

            <a href="#" class="btn">Find out more</a>

          </div>

        </div>
      </section>


  <!-- 
        - #BRAND
      -->

      <section class="section brand" aria-label="brand">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Popular</span> Brands
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
              <div class="card-banner img-holder" style="--width: 360; --height: 360;">
              <div class="product-card">

<div class="card-banner img-holder" style="--width: 360; --height: 360;">
  <img src="https://th.bing.com/th/id/OIP.Vc6bcI1OH8xr0Ojcaa4sxgAAAA?pid=ImgDet&rs=1" width="360" height="360" loading="lazy"
    alt="Tasty bites chewy cubes" class="img-cover default">
  <img src="https://th.bing.com/th/id/OIP.4r7g1DeuFYn9NIIU_LjCPAHaHa?w=170&h=180&c=7&r=0&o=5&dpr=1.4&pid=1.7" width="360" height="360" loading="lazy"
    alt="Tasty bites chewy cubes" class="img-cover hover">
    

   


  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
  </button>
</div>
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://i5.walmartimages.com/seo/Meow-Mix-Original-Choice-Dry-Cat-Food-16-Pounds_adb2eb13-19ff-435a-9c0a-ea74272defac.1cfc4312511024d2e9a2609c4e0d3625.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF" width="360" height="360" loading="lazy"
                    alt="Meow Mix" class="img-cover default">
                  <img src="https://i5.walmartimages.com/asr/329d9a5a-6496-43a1-92a1-ae12ef1d8320.5729556d9bbca98db94b7dc738bdfa17.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF" width="360" height="360" loading="lazy"
                    alt="Meow Mix" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>
               <img src="./assets/images/brand-2.jpg" width="150" height="150" loading="lazy"
               

                 class="img-cover"> 
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
              <div class="product-card">

<div class="card-banner img-holder" style="--width: 360; --height: 360;">
  <img src="https://th.bing.com/th/id/OIP.HSsE5q5_uYHRSQ7A6zul2gHaHa?w=216&h=216&c=7&r=0&o=5&dpr=1.4&pid=1.7" width="360" height="360" loading="lazy"
    alt="Purus consequat congue sit" class="img-cover default">
  <img src="https://th.bing.com/th/id/OIP.o5xnmO8WszdiMvs3FsqU-wAAAA?w=179&h=180&c=7&r=0&o=5&dpr=1.4&pid=1.7" width="360" height="360" loading="lazy"
    alt="Nurtri Chunks" class="img-cover hover">

  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
  </button>
</div>
          
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
              <div class="product-card">
  
  <div class="card-banner img-holder" style="--width: 360; --height: 360;">
    <img src="https://th.bing.com/th/id/OIP.qxDZATSOOFGbg4q8y3VaGwHaHa?pid=ImgDet&rs=1" width="360" height="360" loading="lazy"
      alt="Cat Collars" class="img-cover default">
    <img src="https://th.bing.com/th/id/OIP.zw4kTL69VboATVyBKMWsLwHaHe?pid=ImgDet&w=184&h=185&c=7&dpr=1.4" width="360" height="360" loading="lazy"
      alt="Cat Collars" class="img-cover hover">

    <button class="card-action-btn" aria-label="add to card" title="Add To Card">
      <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
    </button>
  </div> 
                
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="brand-card img-holder" style="--width: 150; --height: 150;">
              <div class="product-card">

<div class="card-banner img-holder" style="--width: 360; --height: 360;">
  <img src="https://snspetshop.com/image/cache/catalog/Product/CIAO/26-50/CIAO%20Cat%20Treat%20Churu%20Tuna%20Mix%20Festive%20Pack%2014gr%20x%2050-1100x1100.jpg" width="360" height="360" loading="lazy"
    alt="Ciao Churu 14g x 40 Cat Treats" class="img-cover default">
  <img src="https://th.bing.com/th/id/OIP.LrqXJkW0iVX8zIDyRIYZtQHaHa?pid=ImgDet&w=1500&h=1500&rs=1" width="360" height="360" loading="lazy"
    alt="Ciao Churu 14g x 40 Cat Treats " class="img-cover hover">

  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
  </button>
</div>
            
              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>







      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Dogs</span> & Cats
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="https://th.bing.com/th/id/OIP.iJ8rk_jfNlvMKlyVTuP3rQAAAA?pid=ImgDet&w=375&h=300&rs=1" width="330" height="300" loading="lazy" alt="Shih Tzu"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Shih tzu</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="https://th.bing.com/th/id/OIP.esRmbFcT_7apNCkddBAzYwHaHz?pid=ImgDet&rs=1" width="330" height="300" loading="lazy" alt="Poodle"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Poodle</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="https://1.bp.blogspot.com/-Ec-Z1cSZ148/XaI2XRSVVTI/AAAAAAAAR3I/eyVc_q0MLtM4CFGd5yvgaVqZM-YBiSllgCLcBGAsYHQ/s1600/chihuahua-uuu.jpg" width="330" height="300" loading="lazy" alt="Chihuahua"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Chihuahua</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="https://th.bing.com/th/id/R.fb44fd1503bed3fab7fcfe53613c6917?rik=h7wnk0RjIWiNzA&riu=http%3a%2f%2felelur.com%2fdata_images%2fcat-breeds%2fpersian-cat%2fpersian-cat-01.jpg&ehk=1Eg0YxEf5RwL8zCUfA2fMyfXIF78aX2OVZyGXsFHzq8%3d&risl=&pid=ImgRaw&r=0" width="330" height="300" loading="lazy" alt="Persian"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Persian</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="https://th.bing.com/th?id=OIP.5UxRhEYejR7au2JDCvSj-wHaGL&w=273&h=228&c=8&rs=1&qlt=90&o=6&dpr=1.1&pid=3.1&rm=2" width="330" height="300" loading="Siamese"
                    alt="Siamese" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Siamese</a>
                </h3>


              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #OFFERS
     

      <section class="section offer" aria-label="offer">
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('https://pet.reviews/wp-content/uploads/2019/01/best-raw-dog-food.jpg'); --width: 540; --height: 374;">

                <p class="card-subtitle">Selected Items Only.</p>

              <h3 class="h3 card-title">
                  Winter treats food <span class="span">Deals</span>
                </h3>

                <a href="#" class="btn">Read More</a>

              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('https://www.petexpress.com.ph/cdn/shop/files/hello2_800x.png?v=1691565227'); --width: 540; --height: 374;">

                <p class="card-subtitle">Our Brand You Will Love</p>

                <h3 class="h3 card-title">
                  New in this <span class="span">year</span>
                </h3>

                <a href="#" class="btn">Read More</a>

              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder"
                style="background-image: url('https://www.pixelstalk.net/wp-content/uploads/2016/03/Pics-dogs-and-cats-wallpaper-HD.jpg'); --width: 540; --height: 374;">

                <p class="card-subtitle">Treats & Grooming</p>

                <h3 class="h3 card-title">
                  Spoil your true <span class="span">love</span>
                </h3>

                <a href="#" class="btn">Read More</a>

              </div>
            </li>


          </ul>

        </div>
      </section>
 -->




      <!-- 
        - #PRODUCT
      -->

      <section class="section product" id="shop" aria-label="product">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Products</span> Dog & Cat
          </h2>

          <ul class="grid-list">

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://th.bing.com/th/id/OIP.Wct3jooIH_Sn6mNuH7G3OAHaHa?pid=ImgDet&rs=1" width="360" height="360" loading="lazy"
                    alt="Commodo leo sed porta" class="img-cover default">
                  <img src="https://images-na.ssl-images-amazon.com/images/I/91b3F0-s4rL.jpg" width="360" height="360" loading="lazy"
                    alt="Pedigree" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(5)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Pedigree</a>
                  </h3>

                  <data class="card-price" value="480">₱480.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://th.bing.com/th/id/OIP.HSsE5q5_uYHRSQ7A6zul2gHaHa?w=216&h=216&c=7&r=0&o=5&dpr=1.4&pid=1.7" width="360" height="360" loading="lazy"
                    alt="Purus consequat congue sit" class="img-cover default">
                  <img src="https://th.bing.com/th/id/OIP.o5xnmO8WszdiMvs3FsqU-wAAAA?w=179&h=180&c=7&r=0&o=5&dpr=1.4&pid=1.7" width="360" height="360" loading="lazy"
                    alt="Nurtri Chunks" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(3)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Nutri Chunks</a>
                  </h3>

                  <data class="card-price" value="920">₱920.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://www.pinkpaws.co.in/wp-content/uploads/2020/07/MG_8191.jpg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover default">
                  <img src="https://dojiw2m9tvv09.cloudfront.net/2905/product/X_royal-canin-baby-dog-milk-21522.jpg?1152" width="360" height="360" loading="lazy"
                    alt="Royal Canin " class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(4)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Royal Canin</a>
                  </h3>

                  <data class="card-price" value="2,100">₱2,100</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://target.scene7.com/is/image/Target/GUEST_c1e55f97-27a7-44f6-862f-f525607ca2ff?wid=488&hei=488&fmt=pjpeg" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover default">
                  <img src="https://th.bing.com/th/id/OIP.bTdS8pxDWYzFZ0nASgxJtwHaHF?pid=ImgDet&w=184&h=175&c=7&dpr=1.4" width="360" height="360" loading="lazy"
                    alt="Cesar Rotisserie" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Cesar Rotisserie</a>
                  </h3>

                  <data class="card-price" value="375">₱375.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://th.bing.com/th/id/R.d4be1fa91f77b5e4ebe7401c4df0f767?rik=lcy%2fx%2fuaHDx7Fg&riu=http%3a%2f%2fwww.goldenwestindo.com%2fwp-content%2fuploads%2f2017%2f05%2fVitakraft-cat-milk-7-x-20-ml.jpg&ehk=zXhBeVSvczlwvPWtDJHfea4ZmRfToWDxX0aKZywFtX0%3d&risl=&pid=ImgRaw&r=0" width="360" height="360" loading="lazy"
                    alt="Morbi vel arcu scelerisque" class="img-cover default">
                  <img src="https://th.bing.com/th/id/OIP.kp40yXJrkIt-HER4zxOw5AHaHa?pid=ImgDet&w=181&h=181&c=7&dpr=1.4" width="360" height="360" loading="lazy"
                    alt="Cat Milk" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Vitakarft Cat Milk</a>
                  </h3>

                  <data class="card-price" value="380">₱380.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://cf.shopee.com.my/file/fa481c290a09bb5369793ca14ea98957" width="360" height="360" loading="lazy"
                    alt="smart heart tuna cat food" class="img-cover default">
                  <img src="https://th.bing.com/th/id/OIP.WegIaYGIbTFbp4kpxpaXKQHaHa?pid=ImgDet&rs=1" width="360" height="360" loading="lazy"
                    alt="smart heart tuna cat food" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">smart heart tuna cat food</a>
                  </h3>

                  <data class="card-price" value="350">₱350.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://th.bing.com/th/id/OIP.pdzQinFRb8dwHn5PPzANLgHaHa?w=189&h=189&c=7&r=0&o=5&dpr=1.4&pid=1.7" width="360" height="360" loading="lazy"
                    alt="NRoyal Canin Feline Health Nutrition" class="img-cover default">
                  <img src="https://th.bing.com/th/id/OIP.B8wSo2tSWBjZvdjXuOHjMwHaHa?w=185&h=185&c=7&r=0&o=5&dpr=1.4&pid=1.7" width="360" height="360" loading="lazy"
                    alt="Royal Canin Feline Health Nutrition" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(3)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Royal Canin Feline Health Nutrition</a>
                  </h3>

                  <data class="card-price" value="1,400">₱1,400</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://i5.walmartimages.com/seo/Meow-Mix-Original-Choice-Dry-Cat-Food-16-Pounds_adb2eb13-19ff-435a-9c0a-ea74272defac.1cfc4312511024d2e9a2609c4e0d3625.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF" width="360" height="360" loading="lazy"
                    alt="Meow Mix" class="img-cover default">
                  <img src="https://i5.walmartimages.com/asr/329d9a5a-6496-43a1-92a1-ae12ef1d8320.5729556d9bbca98db94b7dc738bdfa17.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF" width="360" height="360" loading="lazy"
                    alt="Meow Mix" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Meow Mix</a>
                  </h3>

                  <data class="card-price" value="550">₱550.00</data>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!--------------------------------------------- PRODUCT treats 2 ------------------------------------->

      <section class="section product" id="shop" aria-label="product">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Treats</span> Dog & Cat
          </h2>

          <ul class="grid-list">

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://th.bing.com/th/id/OIP.sW6Z5iaWanRU9f6RpipYhAHaGF?w=217&h=180&c=7&r=0&o=5&dpr=1.4&pid=1.7" width="360" height="360" loading="lazy"
                    alt="Commodo leo sed porta" class="img-cover default">
                  <img src="https://th.bing.com/th/id/OIP.yH1IM99k-7OdZfL123cQugHaHa?pid=ImgDet&rs=1" width="360" height="360" loading="lazy"
                    alt="Meat Jerky Strap Smoky Beef treats" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(5)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Meat Jerky Strap Smoky Beef treats</a>
                  </h3>

                  <data class="card-price" value="200">₱200.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://th.bing.com/th/id/OIP.Vc6bcI1OH8xr0Ojcaa4sxgAAAA?pid=ImgDet&rs=1" width="360" height="360" loading="lazy"
                    alt="Tasty bites chewy cubes" class="img-cover default">
                  <img src="https://th.bing.com/th/id/OIP.4r7g1DeuFYn9NIIU_LjCPAHaHa?w=170&h=180&c=7&r=0&o=5&dpr=1.4&pid=1.7" width="360" height="360" loading="lazy"
                    alt="Tasty bites chewy cubes" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(3)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Tasty bites chewy cubes</a>
                  </h3>

                  <data class="card-price" value="105">₱105.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://snspetshop.com/image/cache/catalog/Product/CIAO/26-50/CIAO%20Cat%20Treat%20Churu%20Tuna%20Mix%20Festive%20Pack%2014gr%20x%2050-1100x1100.jpg" width="360" height="360" loading="lazy"
                    alt="Ciao Churu 14g x 40 Cat Treats" class="img-cover default">
                  <img src="https://th.bing.com/th/id/OIP.LrqXJkW0iVX8zIDyRIYZtQHaHa?pid=ImgDet&w=1500&h=1500&rs=1" width="360" height="360" loading="lazy"
                    alt="Ciao Churu 14g x 40 Cat Treats " class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(4)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Ciao Churu 14g x 40 Cat Treats</a>
                  </h3>

                  <data class="card-price" value="840">₱840.00</data>

                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="https://www.petcircle.com.au/petcircle-assets/images/products/z/temptations-savoury-salmon-cat-treats.png" width="360" height="360" loading="lazy"
                    alt="TEMPTATIONS Classic Cat Treats Savory Salmon" class="img-cover default">
                  <img src="https://i.pinimg.com/736x/c3/63/66/c363666de0ef57d706dc6242d924ad3a.jpg" width="360" height="360" loading="lazy"
                    alt="TEMPTATIONS Classic Cat Treats Savory Salmon" class="img-cover hover">

                  <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">

                  <div class="wrapper">
                    <div class="rating-wrapper gray">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <span class="span">(0)</span>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">TEMPTATIONS Classic Cat Treats Savory Salmon 75g</a>
                  </h3>

                  <data class="card-price" value="109">₱109.00</data>

                </div>

              </div>
            </li>

            

          </ul>

        </div>
      </section>



        <!--------------------------------------------- PRODUCT Pet Supplies 2 ------------------------------------->


        <section class="section product" id="shop" aria-label="product">
          <div class="container">
  
            <h2 class="h2 section-title">
              <span class="span">Pet</span> Supplies
            </h2>
  
            <ul class="grid-list">
  
              <li>
                <div class="product-card">
  
                  <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                    <img src="https://i5.walmartimages.com/asr/c7efc193-ae58-4236-a2cc-b6aeb8d714c8.5aff0533aaef6f0069955d690c0af9bb.jpeg?odnWidth=1000&odnHeight=1000&odnBg=ffffff" width="360" height="360" loading="lazy"
                      alt="Heavy Duty Leash" class="img-cover default">
                    <img src="https://th.bing.com/th/id/OIP.mom5T5LWw42YJdrpG-7owwHaHa?pid=ImgDet&w=181&h=181&c=7&dpr=1.4" width="360" height="360" loading="lazy"
                      alt="Heavy Duty Leash" class="img-cover hover">
  
                    <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                      <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                    </button>
                  </div>
  
                  <div class="card-content">
  
                    <div class="wrapper">
                      <div class="rating-wrapper">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
  
                      <span class="span">(5)</span>
                    </div>
  
                    <h3 class="h3">
                      <a href="#" class="card-title">Heavy Duty Leash</a>
                    </h3>
  
                    <data class="card-price" value="450">₱450.00</data>
  
                  </div>
  
                </div>
              </li>
  
              <li>
                <div class="product-card">
  
                  <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                    <img src="https://i.pinimg.com/originals/3c/2b/d5/3c2bd5abc06593853c90a84ae1d04c45.jpg" width="360" height="360" loading="lazy"
                      alt="Doggo Smooth Bone" class="img-cover default">
                    <img src="https://i.pinimg.com/originals/80/a6/02/80a6026a1a2cada0aaf3205d252ad1a0.jpg" width="360" height="360" loading="lazy"
                      alt="Doggo Smooth Bone" class="img-cover hover">
  
                    <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                      <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                    </button>
                  </div>
  
                  <div class="card-content">
  
                    <div class="wrapper">
                      <div class="rating-wrapper gray">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
  
                      <span class="span">(3)</span>
                    </div>
  
                    <h3 class="h3">
                      <a href="#" class="card-title">Doggo Smooth Bone</a>
                    </h3>
  
                    <data class="card-price" value="109">₱109.00</data>
  
                  </div>
  
                </div>
              </li>
  
              <li>
                <div class="product-card">
  
                  <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                    <img src="https://th.bing.com/th/id/OIP.UULKz233yWVU3e9ysgkguQHaHa?pid=ImgDet&w=184&h=184&c=7&dpr=1.4" width="360" height="360" loading="lazy"
                      alt="Doggo Collar" class="img-cover default">
                    <img src="https://pg1.b5z.net/get/ob5z/s1050-*/zirw/1/i/u/6048053/i/ec/Untitled-2.jpg" width="360" height="360" loading="lazy"
                      alt="Doggo Collar" class="img-cover hover">
  
                    <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                      <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                    </button>
                  </div>
  
                  <div class="card-content">
  
                    <div class="wrapper">
                      <div class="rating-wrapper gray">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
  
                      <span class="span">(4)</span>
                    </div>
  
                    <h3 class="h3">
                      <a href="#" class="card-title">Doggo Collar</a>
                    </h3>
  
                    <data class="card-price" value="289">₱289</data>
  
                  </div>
  
                </div>
              </li>
  
              <li>
                <div class="product-card">
  
                  <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                    <img src="https://ae01.alicdn.com/kf/HTB18KdsxWmWBuNjy1Xaq6xCbXXaB/New-Pet-Toy-Ball-Dog-Toy-Tennis-Balls-Run-Fetch-Throw-Play-Toy-Chew-Toy-Cat.jpg" width="360" height="360" loading="lazy"
                      alt="Ball dogs toy" class="img-cover default">
                    <img src="https://i.pinimg.com/originals/5f/d8/0e/5fd80ed4725508137c5ecac5affc681b.jpg" width="360" height="360" loading="lazy"
                      alt="Ball dogs toy" class="img-cover hover">
  
                    <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                      <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                    </button>
                  </div>
  
                  <div class="card-content">
  
                    <div class="wrapper">
                      <div class="rating-wrapper gray">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
  
                      <span class="span">(0)</span>
                    </div>
  
                    <h3 class="h3">
                      <a href="#" class="card-title">Ball dogs toy</a>
                    </h3>
  
                    <data class="card-price" value="180">₱180.00</data>
  
                  </div>
  
                </div>
              </li>
  
              <li>
                <div class="product-card">
  
                  <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                    <img src="https://th.bing.com/th/id/OIP.qxDZATSOOFGbg4q8y3VaGwHaHa?pid=ImgDet&rs=1" width="360" height="360" loading="lazy"
                      alt="Cat Collars" class="img-cover default">
                    <img src="https://th.bing.com/th/id/OIP.zw4kTL69VboATVyBKMWsLwHaHe?pid=ImgDet&w=184&h=185&c=7&dpr=1.4" width="360" height="360" loading="lazy"
                      alt="Cat Collars" class="img-cover hover">
  
                    <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                      <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                    </button>
                  </div>
  
                  <div class="card-content">
  
                    <div class="wrapper">
                      <div class="rating-wrapper gray">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
  
                      <span class="span">(0)</span>
                    </div>
  
                    <h3 class="h3">
                      <a href="#" class="card-title">Cat Collars</a>
                    </h3>
  
                    <data class="card-price" value="150">₱150.00</data>
  
                  </div>
  
                </div>
              </li>
  
              <li>
                <div class="product-card">
  
                  <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                    <img src="https://cf.shopee.com.my/file/fa481c290a09bb5369793ca14ea98957" width="360" height="360" loading="lazy"
                      alt="smart heart tuna cat food" class="img-cover default">
                    <img src="https://th.bing.com/th/id/OIP.WegIaYGIbTFbp4kpxpaXKQHaHa?pid=ImgDet&rs=1" width="360" height="360" loading="lazy"
                      alt="smart heart tuna cat food" class="img-cover hover">
  
                    <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                      <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                    </button>
                  </div>
  
                  <div class="card-content">
  
                    <div class="wrapper">
                      <div class="rating-wrapper gray">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
  
                      <span class="span">(0)</span>
                    </div>
  
                    <h3 class="h3">
                      <a href="#" class="card-title">smart heart tuna cat food</a>
                    </h3>
  
                    <data class="card-price" value="350">₱350.00</data>
  
                  </div>
  
                </div>
              </li>
  
              <li>
                <div class="product-card">
  
                  <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                    <img src="https://th.bing.com/th/id/OIP.pdzQinFRb8dwHn5PPzANLgHaHa?w=189&h=189&c=7&r=0&o=5&dpr=1.4&pid=1.7" width="360" height="360" loading="lazy"
                      alt="NRoyal Canin Feline Health Nutrition" class="img-cover default">
                    <img src="https://th.bing.com/th/id/OIP.B8wSo2tSWBjZvdjXuOHjMwHaHa?w=185&h=185&c=7&r=0&o=5&dpr=1.4&pid=1.7" width="360" height="360" loading="lazy"
                      alt="Royal Canin Feline Health Nutrition" class="img-cover hover">
  
                    <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                      <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                    </button>
                  </div>
  
                  <div class="card-content">
  
                    <div class="wrapper">
                      <div class="rating-wrapper gray">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
  
                      <span class="span">(3)</span>
                    </div>
  
                    <h3 class="h3">
                      <a href="#" class="card-title">Royal Canin Feline Health Nutrition</a>
                    </h3>
  
                    <data class="card-price" value="1,400">₱1,400</data>
  
                  </div>
  
                </div>
              </li>
  
              <li>
                <div class="product-card">
  
                  <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                    <img src="https://i5.walmartimages.com/seo/Meow-Mix-Original-Choice-Dry-Cat-Food-16-Pounds_adb2eb13-19ff-435a-9c0a-ea74272defac.1cfc4312511024d2e9a2609c4e0d3625.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF" width="360" height="360" loading="lazy"
                      alt="Meow Mix" class="img-cover default">
                    <img src="https://i5.walmartimages.com/asr/329d9a5a-6496-43a1-92a1-ae12ef1d8320.5729556d9bbca98db94b7dc738bdfa17.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF" width="360" height="360" loading="lazy"
                      alt="Meow Mix" class="img-cover hover">
  
                    <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                      <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                    </button>
                  </div>
  
                  <div class="card-content">
  
                    <div class="wrapper">
                      <div class="rating-wrapper gray">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                      </div>
  
                      <span class="span">(0)</span>
                    </div>
  
                    <h3 class="h3">
                      <a href="#" class="card-title">Meow Mix</a>
                    </h3>
  
                    <data class="card-price" value="550">₱550.00</data>
  
                  </div>
  
                </div>
              </li>
  
            </ul>
  
          </div>
        </section>


      <!-- 
        - #SERVICE
      -->

      <section class="section service" aria-label="service">
        <div class="container">

          <img src="espetcial.png" width="135" height="146" loading="lazy" alt="" class="img">

          <h2 class="h2 section-title">
            <span class="span">What your pet needs,</span> when they need it.
          </h2>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src=" delivery.png" width="70" height="70" loading="lazy"
                    alt="delivery.png">
                </figure>

                <h3 class="h3 card-title">Free Same-Day Delivery</h3>
                

                <p class="card-text">
                  Order by 2pm local time to get free delivery on orders $35+ today.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src=" 24support.png" width="70" height="70" loading="lazy"
                    alt="24support.png">
                </figure>

                <h3 class="h3 card-title">30 Day Return</h3>

                <p class="card-text">
                  35% off your first order plus 5% off all future orders.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src=" payment.png" width="250" height="250" loading="lazy"
                    alt="payment.png">
                </figure>

                <h4 class="h3 card-title">Security payment</h4>

                <p class="card-text">
                  25% off your online order of $50+. Available at most locations.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="security.png" width="70" height="70" loading="lazy"
                    alt="security.png">
                </figure>

                <h3 class="h3 card-title">24/7 Support</h3>

                <p class="card-text">
                  Shop online to get orders over $35 shipped fast and free.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

     


      




  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">espetcial</a>

          <p class="footer-text">
            If you have any question, please contact us at <a href="mailto:espetcialsupport@gmail.com"
              class="link">espetcialsupport@gmail.com</a>
          </p>

          <ul class="contact-list">

            <li class="contact-item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
            
              <address class="address">
               Salawag Dasmarinas City,Cavite 
              </address>
            </li>

            <li class="contact-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="tel:+16234567891011" class="contact-link">(+1)-6234-56-789-1011</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Corporate</p>
          </li>

          <li>
            <a href="#" class="footer-link">Careers</a>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQs</a>
          </li>

          <li>
            <a href="#" class="footer-link">Vendors</a>
          </li>

          <li>
            <a href="#" class="footer-link">Affiliate Program</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Information</p>
          </li>

          <li>
            <a href="#" class="footer-link">Online Store</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Refund Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Shipping Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms of Service</a>
          </li>

          <li>
            <a href="#" class="footer-link">Track Order</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">Grooming</a>
          </li>

          <li>
            <a href="#" class="footer-link">Positive Dog Training</a>
          </li>

          <li>
            <a href="#" class="footer-link">Veterinary Services</a>
          </li>

          <li>
            <a href="#" class="footer-link">Petco Insurance</a>
          </li>

          <li>
            <a href="#" class="footer-link">Pet Adoption</a>
          </li>

          <li>
            <a href="#" class="footer-link">Resource Center</a>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 Made with ♥ by espetcial teams<a href="#" class="copyright-link">codewithbrey.</a>
        </p>

        <img src="./assets/images/payment.png" width="397" height="32" loading="lazy" alt="payment method" class="img">

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>

<style>
  /*-----------------------------------*\
  #style.css
\*-----------------------------------*/

/**
 * copyright 2022 codewithsadee
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

/**
 * colors
 */

--bright-yellow-crayola: hsl(36, 94%, 57%);
--portland-orange: hsl(15, 84%, 57%);
--battleship-gray: hsl(0, 0%, 53%);
--silver-chalice: hsl(0, 0%, 70%);
--spanish-gray: hsl(0, 0%, 60%);
--sonic-silver: hsl(208, 7%, 46%);
--raisin-black: hsl(228, 6%, 17%);
--eerie-black: hsl(210, 3%, 13%);
--bittersweet: hsl(9, 96%, 69%);
--light-gray: hsl(0, 0%, 80%);
--platinum: hsl(0, 0%, 91%);
--amber: hsl(45, 100%, 51%);
--white: hsl(0, 0%, 100%);
--black: hsl(0, 0%, 0%);
--onyx: hsl(220, 2%, 24%);

/**
 * typography
 */

--ff-bangers: 'Bangers', cursive;
--ff-carter_one: 'Carter One', cursive;
--ff-nunito_sans: 'Nunito Sans', sans-serif;

--fs-1: 6.5rem;
--fs-2: 3.2rem;
--fs-3: 2.4rem;
--fs-4: 2rem;
--fs-5: 1.8rem;
--fs-6: 1.5rem;
--fs-7: 1.4rem;
--fs-8: 1rem;

--fw-400: 400;
--fw-700: 700;

/**
 * spacing
 */

--section-padding: 40px;

/**
 * shadow
 */

--shadow-1: 0 8px 16px hsla(0, 0%, 0%, 0.15);
--shadow-2: 0 8px 8px hsla(0, 0%, 0%, 0.2);

/**
 * radius
 */

--radius-4: 4px;
--radius-10: 10px;

/**
 * transition
 */

--transition-1: 0.25s ease;
--transition-2: 0.5s ease;
--cubic-in: cubic-bezier(0.51, 0.03, 0.64, 0.28);
--cubic-out: cubic-bezier(0.33, 0.85, 0.4, 0.96);

}





/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*,
*::before,
*::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

li { list-style: none; }

a,
img,
span,
button,
ion-icon { display: block; }

a {
color: inherit;
text-decoration: none;
}

img { height: auto; }

button {
background: none;
border: none;
font: inherit;
cursor: pointer;
}

ion-icon { pointer-events: none; }

address { font-style: normal; }

html {
font-family: var(--ff-nunito_sans);
font-size: 10px;
scroll-behavior: smooth;
}

body {
background-color: var(--white);
color: var(--black);
font-size: 1.6rem;
line-height: 1.5;
}

:focus-visible { outline-offset: 4px; }

::-webkit-scrollbar { width: 10px; }

::-webkit-scrollbar-track { background-color:hsl(0, 0%, 100%); }

::-webkit-scrollbar-thumb { background-color:hsl(15, 84%, 57%); }

::-webkit-scrollbar-thumb:hover { background-color:hsl(15, 84%, 57%); }





/*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/

.container { padding-inline: 15px; }

.section { padding-block: var(--section-padding); }

.has-bg-image {
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

.h1,
.h2,
.h3 { line-height: 1.1; }

.h1 {
color: var(--portland-orange);
font-family: var(--ff-carter_one);
font-size: var(--fs-1);
font-weight: var(--fw-400);
letter-spacing: 1px;
}

.h2,
.h3 { color: var(--eerie-black); }

.h2 { font-size: var(--fs-2); }

.h3 { font-size: var(--fs-3); }

.btn {
background-color: var(--portland-orange);
color: var(--black);
max-width: max-content;
padding: 8px 25px;
font-weight: var(--fw-700);
border-radius: 50px;
transition: var(--transition-1);
}

.section-title {
text-align: center;
margin-block-end: 30px;
}

.section-title .span {
display: inline;
color: var(--eerie-black);
}

.img-holder {
aspect-ratio: var(--width) / var(--height);
background-color: var(--light-gray);
overflow: hidden;
}

.img-cover {
width: 100%;
height: 100%;
object-fit: cover;
}

.has-scrollbar {
display: flex;
align-items: center;
gap: 30px;
overflow-x: auto;
scroll-snap-type: inline mandatory;
padding-block-end: 20px;
margin-block-end: -20px;
}

.scrollbar-item {
min-width: 100%;
scroll-snap-align: start;
}

.has-scrollbar::-webkit-scrollbar { height: 10px; }

.has-scrollbar::-webkit-scrollbar-track {
outline: 2px solid var(--portland-orange);
border-radius: var(--radius-10);
}

.has-scrollbar::-webkit-scrollbar-thumb {
border-radius: var(--radius-10);
background-color: var(--portland-orange);
border: 2px solid var(--white);
}

.has-scrollbar::-webkit-scrollbar-button { width: calc(25% - 30px); }

.grid-list {
display: grid;
gap: 30px;
}

.w-100 { width: 100%; }





/*-----------------------------------*\
#HEADER
\*-----------------------------------*/

.action-btn.user { display: none; }

.header {
position: absolute;
top: 0;
left: 0;
width: 100%;
background-color: var(--portland-orange);
padding-block: 20px;
z-index: 4;
}

.header.active {
position: fixed;
box-shadow: var(--shadow-1);
}

.header .container {
display: flex;
align-items: center;
justify-content: space-between;
gap: 40px;
}

.nav-toggle-btn {
font-size: 30px;
transition: var(--transition-1);
}

.nav-toggle-btn.active .menu-icon,
.nav-toggle-btn .close-icon { display: none; }

.nav-toggle-btn .menu-icon,
.nav-toggle-btn.active .close-icon { display: block; }

.logo {
font-family: var(--ff-carter_one);
font-size: 3rem;
color: var(--portland-orange);
}

.header-actions {
display: flex;
gap: 15px;
}

.header .action-btn {
position: relative;
font-size: 22px;
transition: var(--transition-1);
}

.header .btn-badge {
position: absolute;
top: -8px;
right: -10px;
background-color: var(--portland-orange);
color: var(--portland-orange);
font-size: var(--fs-8);
min-width: 18px;
height: 18px;
line-height: 18px;
border-radius: 50px;
}

.nav-toggle-btn:is(:hover, :focus),
.header .action-btn:is(:hover, :focus) { transform: scale(1.1); }

.navbar {
position: fixed;
top: 85px;
left: -320px;
bottom: 0;
background-color: var(--portland-orange);
max-width: 320px;
width: 100%;
padding: 20px 10px;
box-shadow: var(--shadow-2);
transition: 0.25s var(--cubic-out);
overflow-x: hidden;
overflow-y: auto;
}

.navbar.active {
transform: translateX(320px);
transition-timing-function: var(--cubic-in);
}

.navbar-link {
color: var(--eerie-black);
font-size: var(--fs-6);
padding: 10px 15px;
}

.navbar-action-btn {
position: absolute;
bottom: 0;
left: 0;
right: 0;
padding: 15px;
background-color: var(--sonic-silver);
color: var(--white);
font-weight: var(--fw-700);
text-transform: uppercase;
text-align: center;
}





/*-----------------------------------*\
#HERO
\*-----------------------------------*/


.hero {
margin-block-start: 85px;
min-height: 360px;
background-position: left;
text-align: center;
}

.hero-title .span { font-size: 0.5em; }

.hero-text {
color: var(--white);
margin-block: 15px 25px;
}

.hero .btn { margin-inline: auto; }

.hero .btn:is(:hover, :focus) { background-color: var(--portland-orange); }





/*-----------------------------------*\
#CATEGORY
\*-----------------------------------*/

.category-card .card-banner { border-radius: var(--radius-10); }

.category-card .img-cover { transition: var(--transition-2); }

.category-card:is(:hover, :focus-within) .img-cover { transform: scale(1.08); }

.category-card .card-title {
margin-block-start: 15px;
text-align: center;
transition: var(--transition-1);
}

.category-card .card-title:is(:hover, :focus) { color: var(--portland-orange); }





/*-----------------------------------*\
#OFFERS
\*-----------------------------------*/

.offer-card {
border-radius: var(--radius-10);
padding: 20px;
display: grid;
align-content: center;
}

.offer-card .card-subtitle {
font-size: var(--fs-7);
color: var(--black);
text-transform: uppercase;
font-weight: var(--fw-700);
}

.offer-card .card-title {
color: var(--black);
margin-block: 5px 24px;
}

.offer-card .btn { background-color: var(--portland-orange); }

.offer-card .btn:is(:hover, :focus) { background-color: var(--white); }





/*-----------------------------------*\
#PRODUCT
\*-----------------------------------*/

.product .img-cover.hover,
.product-card .card-action-btn { display: none; }

.product-card { text-align: center; }

.product-card .card-banner {
border: 1px solid var(--platinum);
border-radius: var(--radius-10);
margin-block-end: 20px;
}

.product-card :is(.wrapper, .rating-wrapper) { display: flex; }

.product-card .wrapper {
justify-content: center;
align-items: center;
gap: 5px;
color: var(--silver-chalice);
font-size: var(--fs-7);
}

.product-card .rating-wrapper {
color: var(--amber);
gap: 2px;
}

.product-card .rating-wrapper.gray { color: unset; }

.product-card .h3 {
--fs-3: 1.8rem;
margin-block: 8px 10px;
}

.product-card .card-title { transition: var(--transition-1); }

.product-card .card-title:is(:hover, :focus) { color: var(--portland-orange); }

.product-card .card-price {
color: var(--portland-orange);
font-size: var(--fs-4);
font-weight: var(--fw-700);
}





/*-----------------------------------*\
#SERVICE
\*-----------------------------------*/

.service .img {
margin-inline: auto;
margin-block-end: 30px;
}

.service .section-title { margin-block-end: 60px; }

.service-card { text-align: center; }

.service-card .card-icon {
max-width: max-content;
margin-inline: auto;
}

.service-card .card-title { margin-block: 10px; }

.service-card .card-text { color: var(--spanish-gray); }





/*-----------------------------------*\
#CTA
\*-----------------------------------*/

.cta { background-position: 75%; }

.cta-banner { display: none; }

.cta-content { padding-block: 80px var(--section-padding); }

.cta .section-title {
text-align: left;
margin-block: 10px 20px;
}

.cta .section-text { margin-block-end: 30px; }

.cta .btn:is(:hover, :focus) {
background-color: var(--white);
color: var(--black);
}





/*-----------------------------------*\
#BRAND
\*-----------------------------------*/

.brand { --section-padding: 100px; }

.brand .has-scrollbar { gap: 0; }

.brand .scrollbar-item { min-width: 50%; }

.brand .scrollbar-item:not(:last-child) { border-inline-end: 1px solid var(--platinum); }

.brand-card {
max-width: max-content;
margin-inline: auto;
}





/*-----------------------------------*\
#FOOTER
\*-----------------------------------*/

.footer {
background-color: var(--raisin-black);
color: var(--battleship-gray);
background-repeat: no-repeat;
background-size: 100%;
background-position: top;
}

.footer-top {
padding-block-start: 100px;
border-block-end: 1px solid var(--onyx);
}

.footer-top .container {
display: grid;
gap: 30px;
}

.footer .logo {
color: var(--white);
margin-block-end: 10px;
}

.footer-text {
font-size: var(--fs-6);
margin-block-end: 25px;
}

.footer-text .link {
display: inline-block;
color: var(--portland-orange);
}

.contact-item {
margin-block-end: 15px;
color: var(--white);
font-weight: var(--fw-700);
display: flex;
align-items: center;
gap: 15px;
}

.contact-item ion-icon {
flex-shrink: 0;
font-size: 22px;
color: var(--portland-orange);
}

.social-list {
display: flex;
gap: 10px;
}

.social-link {
background-color: var(--white);
color: var(--black);
padding: 12px;
border-radius: 50%;
transition: var(--transition-1);
}

.social-link:is(:hover, :focus) {
background-color: var(--portland-orange);
color: var(--white);
}

.footer-list-title {
color: var(--white);
font-size: var(--fs-5);
font-weight: var(--fw-700);
padding-block: 10px;
}

.footer-link {
padding-block: 4px;
transition: var(--transition-1);
}

.footer-link:is(:hover, :focus) { color: var(--portland-orange); }

.footer-bottom { padding-block: 20px; }

.copyright { margin-block-end: 10px; }

.copyright-link { display: inline-block; }

.footer-bottom .img {
width: 100%;
max-width: max-content;
}




/*-----------------------------------*\
#BACK TO TOP
\*-----------------------------------*/

.back-top-btn {
position: fixed;
bottom: 10px;
right: 20px;
background-color: var(--portland-orange);
color: var(--white);
font-size: 25px;
padding: 10px;
border-radius: 50%;
box-shadow: var(--shadow-2);
opacity: 0;
visibility: hidden;
transition: var(--transition-1);
z-index: 4;
}

.back-top-btn.active {
opacity: 1;
visibility: visible;
transform: translateY(-10px);
}





/*-----------------------------------*\
#MEDIA QUERIES
\*-----------------------------------*/

/**
* responsive for large than 575px screen
*/

@media (min-width: 575px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-2: 4rem;
  --fs-3: 2.6rem;

}



/**
 * REUSED STYLE
 */

.scrollbar-item { min-width: calc(50% - 15px); }

.grid-list { grid-template-columns: 1fr 1fr; }



/**
 * HERO
 */

.hero {
  display: grid;
  padding-inline-start: 20px;
  justify-content: flex-start;
  align-items: center;
}



/**
 * OFFER
 */

.offer .grid-list { grid-template-columns: 1fr; }



/**
 * PRODUCT
 */

.product-card .card-banner { position: relative; }

.product-card .card-action-btn,
.product-card .card-banner .hover {
  display: block;
  position: absolute;
}

.product-card .card-banner .hover {
  top: 0;
  left: 0;
}

.product-card:is(:hover, :focus-within) .default,
.product-card .hover { opacity: 0; }

.product-card .default,
.product-card:is(:hover, :focus-within) .hover { opacity: 1; }

.product-card .card-action-btn {
  top: 15px;
  right: 15px;
  color: var(--eerie-black);
  font-size: 20px;
  background-color: var(--white);
  border: 1px solid var(--platinum);
  padding: 12px;
  border-radius: 50%;
  transition: var(--transition-1);
  opacity: 0;
}

.product-card .card-action-btn:is(:hover, :focus) {
  background-color: var(--portland-orange);
  border-color: var(--portland-orange);
  color: var(--white);
}

.product-card:is(:hover, :focus-within) .card-action-btn { opacity: 1; }



/**
 * CTA
 */

.cta .img { width: 250px; }

.cta .h2 { --fs-2: 3.2rem; }



/**
 * BRAND
 */

.brand .scrollbar-item { min-width: 25%; }



/**
 * FOOTER
 */

.footer-top .container { grid-template-columns: 1fr 1fr; }

}





/**
* responsive for large than 768px screen
*/

@media (min-width: 768px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-1: 9rem;

}



/**
 * REUSED STYLE
 */

.scrollbar-item { min-width: calc(33.33% - 20px); }

.grid-list { grid-template-columns: repeat(3, 1fr); }



/**
 * HERO
 */

.hero {
  aspect-ratio: 1512 / 784;
  padding-inline-start: 10%;
}

.hero-text { font-size: 2.4rem; }



/**
 * OFFER
 */

.offer .grid-list { grid-template-columns: repeat(3, 1fr); }



/**
 * CTA
 */

.cta-banner { display: block; }

.cta .container {
  display: grid;
  grid-template-columns: 1fr 0.75fr;
  align-items: flex-end;
}



/**
 * FOOTER
 */

.footer-bottom .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

}





/**
* responsive for large than 992px screen
*/

@media (min-width: 992px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-1: 12rem;
  --fs-3: 3rem;

  /**
   * spacing
   */

  --section-padding: 50px;

}



/**
 * REUSED STYLE
 */

.container { padding-inline: 30px; }

.scrollbar-item { min-width: calc(20% - 24px); }



/**
 * HEADER
 */

.nav-toggle-btn,
.navbar-action-btn { display: none; }

.header {
  --color: var(--white);
  background: none;
}

.header.active {
  --color: var(--black);
  background-color: var(--white);
}

.header .logo,
.header .action-btn { color: var(--color); }

.header .action-btn.user { display: block; }

.logo { font-size: 3.8rem; }

.navbar,
.navbar.active {
  all: unset;
  margin-inline-end: auto;
}

.navbar-list {
  display: flex;
  gap: 10px;
}

.navbar-link {
  color: var(--color);
  --fs-6: 1.7rem;
  font-weight: var(--fw-700);
  transition: var(--transition-1);
}

.header.active .navbar-link:is(:hover, :focus) { color: var(--portland-orange); }



/**
 * HERO
 */

.hero { margin-block-start: 0; }



/**
 * CATEGORY
 */

.category-card .h3 { --fs-3: 2rem; }



/**
 * SERVICE
 */

.service .grid-list { grid-template-columns: repeat(4, 1fr); }

.service-card .h3 { --fs-3: 2.4rem; }



/**
 * BRAND
 */

.brand .scrollbar-item { min-width: 20%; }



/**
 * FOOTER
 */

.footer-top .container { grid-template-columns: 1fr 0.5fr 0.5fr 0.5fr; }

}





/**
* responsive for large than 1200px screen
*/

@media (min-width: 1200px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-1: 15rem;
  --fs-3: 3.2rem;

}



/**
 * REUSED STYLE
 */

.grid-list { grid-template-columns: repeat(4, 1fr); }



/**
 * CTA
 */

.cta-content { padding-block: 100px; }



/**
 * BRAND, FOOTER
 */

:is(.brand, .footer) .container {
  max-width: 1200px;
  width: 100%;
  margin-inline: auto;
}

.footer { padding-block-start: 40px; }

}
</style>







<script>
    'use strict';



/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * navbar toggle
 */

const navToggler = document.querySelector("[data-nav-toggler]");
const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  navToggler.classList.toggle("active");
}

addEventOnElem(navToggler, "click", toggleNavbar);


const closeNavbar = function () {
  navbar.classList.remove("active");
  navToggler.classList.remove("active");
}

addEventOnElem(navbarLinks, "click", closeNavbar);



/**
 * active header when window scroll down to 100px
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

const activeElemOnScroll = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
}

addEventOnElem(window, "scroll", activeElemOnScroll);
</script>