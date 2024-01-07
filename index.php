<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUTTERFLY </title>

    <!-- linking to the style file -->
    <link rel="stylesheet" href="./style.css">
    <!-- fafa icons link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <nav id="navbar" class="section1">
        <!-- Logo -->
        <div id="logo">
            <img src="./resource/pic/logos/Iconsmind-Outline-Butterfly.512.png" alt="LOGO">
        </div>
        <!-- navigational links -->
        <div id="links">    
            <a href="#sec1" id=""> home </a>
            <a href="#sec3" id=""> about </a>
            <a href="#sec6" id="">products</a>
            <a href="#sec2" id=""> discount </a>
            <a href="#sec7" id=""> contact </a>
            <div id="cart">
                <a href="./Pay/Payment.html" id="car">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span id="num">0</span>
               </a>
            </div>
        </div>
        
    </nav>

    <!-- main tag-->
    <main class="main">
                     <!-- section one -->
        <section id="sec1" class="section1 ">
            <article>

                <header>
                    <h1>BUTTERFLY</h1>
                </header>
                <p>
                    The ultimate destination for unique and exclusive chocolates.
                </p>
            </article>
        </section>
    
        <!-- section two  discount section -->
        
        <section id="sec2">
            
            <!-- first article -->
            <article class ="article1 ">
                <div class="image reveal">
                    <img src="./resource/pic/pic4.jpg" alt="product1"> 
                    <!-- product picture or ilustration -->
                </div>
                <div id="Dove" class ="disc1 reveal">
                    <header>
                        <h1> Dove </h1>
                    </header>
                    <p>
                        Dove Chocolate is a premium chocolate brand that offers a luxurious and indulgent experience for chocolate lovers. 
                        Made with the finest cocoa beans, Dove Chocolate has a smooth and creamy texture that melts in your mouth, leaving a rich and velvety taste that lingers. 
                        The brand offers a wide range of flavors, from classic milk chocolate to dark chocolate with sea salt, almond, and raspberry. 
                         
                    </p>
                    <div id="price">
                        <span id="old"> $5 <hr> </span> 
                        <span id="new"> $3.45</span>
                    </div>

                    <button onclick="addToCart()">
                        <a href="#"> add to cart </a> 
                    </button>
                </div>
            </article>
            
            <!-- second article in this section -->
            
            <article id="article2">
                <div class="image reveal">
                    <img src="./resource/pic/Screenshot (67).png" alt=" fererro roches">
                </div>
                <div class ="disc2 reveal">
                    <header>
                        <h1> ferrero rocher</h1>
                    </header>
                    <p>
                        Ferrero Rocher is a luxurious chocolate brand that offers an exquisite and sophisticated taste experience. 
                        Made with the finest ingredients, including roasted hazelnuts, smooth chocolate, and a crispy wafer shell, Ferrero Rocher has a unique and irresistible texture that is sure to delight your taste buds. 
                        The brand offers a range of flavors, from classic milk chocolate to dark chocolate with coconut and almond. 
                        Each piece of Ferrero Rocher is individually wrapped, making it perfect for sharing or enjoying as a personal treat. 
                    </p>

                    <div id="price">
                        <span id="old"> $10 <hr> </span> 
                        <span id="new"> $7.30</span>
                    </div>

                    <button onclick="addToCart()">
                        <a href="#"> add to cart</a>
                    </button>
                </div>
            </article>

            <!-- article three of this section -->
            
            <article id="article3">
                <div class="image reveal">
                    <img src="./resource/pic/Screenshot (71).png" alt=" fererro roches">
                </div>
                <div class ="disc3 reveal">
                    <header>
                        <h1> silk </h1>
                    </header>
                    <p>
                        Silk Chocolate is a luxurious chocolate brand that offers a silky and smooth taste experience. 
                        Made with the finest ingredients, including rich cocoa, creamy milk, and a delicate blend of flavors, Silk Chocolate has a unique and irresistible texture that is sure to delight your taste buds. 
                        The brand offers a range of flavors, from classic milk chocolate to dark chocolate with sea salt and caramel.  
                    </p>

                    <div id="price">
                        <span id="old"> $7 <hr> </span> 
                        <span id="new"> $4.50</span>
                    </div>

                    <button onclick="addToCart()">
                        <a href="#"> add to cart </a>
                    </button>
                </div>
            </article>

            <!-- end of therd article on this section  -->
        </section>
   
        <!-- section three about the coumpany section -->
        <section id="sec3">
            <article id="article1">
                <header>
                    <h1 class=" reveal"> about Butterfly</h1>
                </header>
                <p class="reveal">
                    Butterfly is the ultimate destination for chocolate lovers worldwide. 
                    Our company specializes in sourcing and selling an exceptional selection of unique brands and flavors that cannot be found anywhere else. 
                    <br>
                    Our chocolates are sourced from around the world, and we pride ourselves on offering only the most exquisite, 
                    delicious, and exclusive brands on the market. 
                    <br>
                    Our range of chocolates includes rare flavors, exotic ingredients, 
                    and innovative combinations that are sure to impress. 
                    <br>
                    At Butterfly, we believe that every customer deserves the best,
                    which is why we are committed to bringing you only the highest quality chocolates that will tantalize your senses 
                    and leave you craving for more. 
                    <br>
                    Our dedication to excellence, customer satisfaction, and premium quality chocolate sets us apart from the competition. 
                    We invite you to indulge in our luxurious, delectable chocolates, and experience the magic of Butterfly today!
                
                </p>
            </article>
        </section>

        <!-- section four brands section -->
        
        <section id="sec4">
            <article class ="article1 reveal">
                <header>
                    <hr width="200px" color="brown">
                    <h2>
                        Brands we sell
                    </h2>
                    <hr width="200px" color="brown">
                </header>
                <div id="logos">
                    <img src="./resource/pic/brands/Dove.png" alt="dove" id="img1">
                    <img src="./resource/pic/brands/Galaxy.png" alt="Galaxy" id="img2">
                    <img src="./resource/pic/brands/Ferrero-Rocher.png" alt="fererro" id="img3">
                    <img src="./resource/pic/brands/Kit-Kat.png" alt="" id="img4">
                    <img src="./resource/pic/brands/Hersheys.png" alt="" id="img5">
                    <img src="./resource/pic/brands/Lindt.png" alt="Lindt" id="img6">
                    <img src="./resource/pic/brands/Cadbury-1.png" alt="" id="img7">
                    <img src="./resource/pic/brands/Jacques-Torres-Chocolate.png" alt="" id="img8">
                </div>
                
                <div id="logos">
                    <img src="./resource/pic/brands/Dove.png" alt="dove" id="img1">
                    <img src="./resource/pic/brands/Galaxy.png" alt="Galaxy" id="img2">
                    <img src="./resource/pic/brands/Ferrero-Rocher.png" alt="fererro" id="img3">
                    <img src="./resource/pic/brands/Kit-Kat.png" alt="" id="img4">
                    <img src="./resource/pic/brands/Hersheys.png" alt="" id="img5">
                    <img src="./resource/pic/brands/Lindt.png" alt="Lindt" id="img6">
                    <img src="./resource/pic/brands/Cadbury-1.png" alt="" id="img7">
                    <img src="./resource/pic/brands/Jacques-Torres-Chocolate.png" alt="" id="img8">
                </div>
                
            </article>
        </section>
        
        <!-- sectio five displaing users number -->
        
        <section id="sec5">
            <article class="article1">
                <div class="view"> </div>
                <div class="sell"> </div>
                <div class="product"> </div>
            </article>
            <article class="article2">
                <p> daily visit </p>
                <p> sold items </p>
                <p> aveliable products </p>
            </article>
        </section>

        <!-- product section -->

        <section id="sec6">
            <header>
                <h2>
                    products
                </h2>
            </header>

            <div id="box">
             <div id="img1">
                <img src="./resource/pic/products/1.jpg" alt="">
                <div id="discbox">
                    <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                    <span>$4</span>
                    <button onclick="addToCart()">Add to cart</button>
                </div>
            </div>
                <div id="img1">
                    <img src="./resource/pic/products/caramels.jpg" alt="">
                    <div id="discbox">
                        <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                        <span>$10.56</span>
                        <button onclick="addToCart()">Add to cart</button>
                    </div>
                 </div>
 
                 <div id="img1">
                    <img src="./resource/pic/products/create-your-own-6-bar-letterbox-selection-450x450.jpg" alt="">
                    <div id="discbox">
                        <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                        <span>$8.49</span>
                        <button onclick="addToCart()">Add to cart</button>
                    </div>
                 </div>            
 
                 <div id="img1">
                    <img src="./resource/pic/products/darkmaltesers.jpg" alt="">
                    <div id="discbox">
                        <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                        <span>$3.00</span>
                        <button onclick="addToCart()">Add to cart</button>
                    </div>
                 </div> 

            </div>

            <div id="box">
                <div id="img1">
                    <img src="./resource/pic/products/ferrerorochertjpg.jpg" alt="">
                    <div id="discbox">
                        <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                        <span>$4</span>
                        <button onclick="addToCart()">Add to cart</button>
                    </div>
                </div>
                    <div id="img1">
                        <img src="./resource/pic/products/kitkat.jpg" alt="">
                        <div id="discbox">
                            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                            <span>$10.56</span>
                            <button onclick="addToCart()">Add to cart</button>
                        </div>
                     </div>
     
                     <div id="img1">
                        <img src="./resource/pic/products/maltesers.jpg" alt="">
                        <div id="discbox">
                            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                            <span>$8.49</span>
                            <button onclick="addToCart()">Add to cart</button>
                        </div>
                     </div>            
     
                     <div id="img1">
                        <img src="./resource/pic/products/mandmprotein.jpg" alt="">
                        <div id="discbox">
                            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                            <span>$3.00</span>
                            <button onclick="addToCart()">Add to cart</button>
                        </div>
                     </div> 
             
            </div>

            <div id="box">
                <div id="img1">
                    <img src="./resource/pic/products/Milk-Chocolate-Bar.jpg" alt="">
                    <div id="discbox">
                        <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                        <span>$4</span>
                        <button onclick="addToCart()">Add to cart</button>
                    </div>
                </div>
                    <div id="img1">
                        <img src="./resource/pic/products/kitkat.jpg" alt="">
                        <div id="discbox">
                            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                            <span>$10.56</span>
                            <button onclick="addToCart()">Add to cart</button>
                        </div>
                     </div>
     
                     <div id="img1">
                        <img src="./resource/pic/products/shopping.png" alt="">
                        <div id="discbox">
                            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                            <span>$8.49</span>
                            <button onclick="addToCart()">Add to cart</button>
                        </div>
                     </div>            
     
                     <div id="img1">
                        <img src="./resource/pic/products/shopping2.png" alt="">
                        <div id="discbox">
                            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                            <span>$3.00</span>
                            <button onclick="addToCart()">Add to cart</button>
                        </div>
                     </div> 

            </div>

            <div id="box">
                <div id="img1">
                    <img src="./resource/pic/products/shopping3.png" alt="">
                    <div id="discbox">
                        <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                        <span>$4</span>
                        <button onclick="addToCart()">Add to cart</button>
                    </div>
                </div>
                    <div id="img1">
                        <img src="./resource/pic/products/shopping4.png" alt="">
                        <div id="discbox">
                            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                            <span>$10.56</span>
                            <button onclick="addToCart()">Add to cart</button>
                        </div>
                     </div>
     
                     <div id="img1">
                        <img src="./resource/pic/products/super-toblerone-giant-chocolate.jpg" alt="">
                        <div id="discbox">
                            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                            <span>$8.49</span>
                            <button onclick="addToCart()">Add to cart</button>
                        </div>
                     </div>            
     
                     <div id="img1">
                        <img src="./resource/pic/products/twirlorangeresized.png" alt="">
                        <div id="discbox">
                            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                            <span>$3.00</span>
                            <button onclick="addToCart()">Add to cart</button>
                        </div>
                     </div> 

            </div>
            <div>
                <a href="./products/product.html">see more </a>
            </div>
        </section>

        <!-- section 7 testimonials section-->
        
        <section id="sec7">
            <header>
                <h2> Testimonials </h2>
            </header>
            <article>

                <div id="test1">
                    <img src="./resource/pic/users/user2.jpg" alt="abdulmalik">
                    <p> Abdulmalik Mubarek</p>
                    <blockquote>
                        <i>
                            " Lorem ipsum dolor sit amet <br> 
                            Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet  
                            "
                        </i>
                    </blockquote>
                </div>
                <div id="test2">
                    <img src="./resource/pic/users/user9.jpg" alt="yonatan">
                    <p> marry </p>
                    <blockquote>
                        <i>
                            " Lorem ipsum dolor sit amet <br> 
                            Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet  
                            "
                        </i>
                    </blockquote>
                </div>
                <div id="test3">
                    <img src="./resource/pic/users/user3.jpg" alt="semira">
                    <p> john </p>
                    <blockquote>
                        <i>
                            " Lorem ipsum dolor sit amet <br> 
                            Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet  
                            "
                        </i>
                    </blockquote>
                </div>

                <div id="test4">
                    <img src="./resource/pic/users/user4.jpg" alt="bilen">
                    <p> malissa </p>
                    <blockquote>
                        <i>
                            " Lorem ipsum dolor sit amet <br> 
                            Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet  
                            "
                        </i>
                    </blockquote>
                </div>
            </article>
        </section>

        <!-- footer section-->
        <footer>
            <div id="top">
                <div id="contact">
                    <h3>contuct us</h3>
                    <ul>
                         <a href="">telegram</a> 
                         <a href="">email</a> 
                         <a href="">discord</a> 
                         <a href="">phone</a> 
                    </ul>
                </div>

                <div id="links">
                    <h3> links </h3>
                    <ul>
                         <a href="">home</a> 
                         <a href="">about</a> 
                         <a href="">shop</a> 
                         <a href="">discount</a> 
                         <a href="">cart</a> 
                    </ul>
                </div>

                <div id="Group_members">
                    <h3> Group members </h3>
                    
                         <a href="">Abdulkerim Adem</a> 
                         <a href="">abdulmalik Mubarek</a> 
                         <a href="">yonatan Belhu</a>  
                         <a href="">Semirah Zeki</a> 
                         <a href="">Blen Dawet</a> 
                </div>
            </div>

            <div id="bottom">
                <p>&copy copy right reserved by butterfly</p>
            </div>
        </footer>
    </main>
    <!-- javascript-->
    <script src="./app.js">

    </script>
</body>
</html>