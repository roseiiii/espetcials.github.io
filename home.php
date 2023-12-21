<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    
    
</body>
</html>

<section>
    <div class="circle"></div>
    <header>
        <a href="#"><img src="espetcial.png" class="logo" /></a>
        <div class="toggle" onclick="toggleMenu()"></div>
        <ul class="navigation">
            <li><a href="registration.php">Home</a></li>
            <li><a href="registration.php">About</a></li>
            <li><a href="registration.php">Service</a></li>
            <li><a href="registration.php">Product</a></li>
            
            
            
            
        </ul>
    </header>

    <div class="content">
        <button onclick="topFunction()" id="myBtn" title="Click to go to the Top">Top</button>
        <div class="textBox">
            <h2>We're the <span id="output">PURR</span>fect place<br/></h2>
            <h2>to find your <span id="output">PURR</span>ever friends</h2>
            <p>We offer <b style="color:Tomato;">PET SERVICE</b><br />
            for your <b style="color:Tomato;">esPETcial</b> friends.</p>
            <a href="login.php" id="learnmore">Login</a>
            <a href="registration.php" id="learnmore">Register</a>
        </div>

        <div class="imgBox">
            <img src="logohome1.png"
                alt="" class="catanddog">
        </div>
    </div>
  
</section>

   <div class="section2" id="section2">
    <h2 class="section2heading" id="heading2">Inquiry</h2>
    <br>
    <div class="container">
        <input type="text" name="myhoneypot" class="myclass">
        <form id="my-form" action="https://formspree.io/f/xdoveeaj" method="POST">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

            <label for="emailadress">E-mail</label>
            <input type="email" id="email" name="email" pattern="[^ @]*@[^ @]*" required
                placeholder="Your email address..">
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"
                required></textarea>

            <input type="submit" value="Submit" id="my-form-button">
        </form>
    </div>
</div>
<div class="footer">
    <p>Petshop® 2023 - Not to be copied</p>
</div>


<div class="footer">
    <p>esPETcial® 2023 - Not to be copied</p>
</div>


</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body
{
  overflow-x: hidden;
}
section {
    position: relative;
    width: 100%;
    min-height: 100vh;
    padding: 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaoX2ARrzebP-JE8nuONbKYpGoFwKlJ6IOqQ&usqp=CAU);
    background-position: center;
    background-size: cover;
}
.section2 {
    width: 100%;
    min-height: 80vh;
    padding: 50px;
    background: #fff;
}
.section2right {
    width: 55%;
    min-height: 80vh;
    padding: 50px;
    background: #fff;
}
.section2heading{
  color: #ff7200;
  text-align: center;
  font-weight: 800;
  font-size: 60px;
}
.span2{
    color: #fff;
    font-weight: 300; 
    font-size: 10px;
    text-indent: 0.5px;
}

header {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

header .logo {
    position: relative;
    max-width: 80px;
}

header ul {
    position: relative;
    display: flex;
}

header ul li {
    list-style: none;
}

header ul li a {
    display: inline-block;
    color: #fff;
    font-weight: 600;
    margin-left: 40px;
    text-decoration: none;
}

.content {
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.content .textBox {
    position: relative;
    max-width: 600px;
}

.content .textBox h2 {
    color: #fff;
    font-size: 4em;
    line-height: 1.4em;
    font-weight: 500px;
}

.content .textBox h2 span {
    color: #ff7200;
    font-size: 1.2em;
    font-weight: 900;
}

.content .textBox p {
    color: #fff;
}

.content .textBox a {
    display: inline-block;
    margin-top: 20px;
    padding: 8px 20px;
    background: #ff7200;
    color: #fff;
    border-radius: 40px;
    letter-spacing: 1px;
    font-weight: 500;
    text-decoration: none;
}

.learnmore:hover {
    background: #fff;
    color: #ff7200;
    border: 2px solid #ff7200;
    transition-duration: 0.6s;
}

.content .imgBox {
    width: 600px;
    display: flex;
    justify-content: flex-end;
    padding-right: 50px;
    margin-top: 50px;
}

.content .imgBox img {
    max-width: 340px;
}

.circle {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #ff7200;
    clip-path: circle(600px at right 800px);
}

@media (max-width: 991px) {
    header {
        padding: 20px;
    }

    header .logo {
        max-width: 60px;
    }

    header ul {
        display: none;
    }

    .toggle {
        position: relative;
        width: 30px;
        height: 30px;
        cursor: pointer;
        background: url('https://starbucks-landing-page.netlify.app/public/images/menu.png');
        background-size: 30px;
        background-position: center;
        background-repeat: no-repeat;
        filter: invert(1);
        z-index: 11;
    }

    .toggle.active {
        position: fixed;
        right: 20px;
        background: url('https://starbucks-landing-page.netlify.app/public/images/close.png');
        background-size: 25px;
        background-position: center;
        background-repeat: no-repeat;
    }

    header ul.navigation.active {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: center;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: #fff;
        z-index: 10;
    }

    header ul li a {
        font-size: 1.5em;
        margin: 5px 0;
    }

    section {
        padding: 20px 20px 120px;
    }

    .content {
        flex-direction: column;
        margin-top: 100px;
    }

    .content .textBox {
        max-width: 100%;
    }

    .content .textBox h2 {
        font-size: 2.5em;
        margin-bottom: 15px;
    }

    .content .imgBox {
        max-width: 100%;
        justify-content: center;
    }

    .content .imgBox img {
        max-width: 300px;
    }

    .thumbnails li img {
        max-width: 40px;
    }

    .social {
        background: #ff7200;
        right: 0;
        width: 50px;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .circle {
        clip-path: circle(400px at center bottom);
    }
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #ff7200;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #000;
}
label{
  font-weight: 700;
  color: #000;
} 

.container {
  border-radius: 5px;
  background-color: #fff;
  padding: 40px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%
}


.sticky + .content {
  padding-top: 100px;
}
.myclass { opacity: 0; position: absolute; }
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #ff7200;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: red;
  transition-duration: 4s;
}
.menu{
    background-color: black;
}
.footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #f1f1f1;
   color: black;
   text-align: center;
  font-weight: 600;
}


    


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
  background: #00A5C4;
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