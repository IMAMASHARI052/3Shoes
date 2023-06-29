<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>3shop</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="styleshop.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar ">
        <a href="Home.php" class="navbar-logo">3<span>Shoes</span>.</a>
        <div class="navbar-nav">
            <a  href="Home.php">Home</a>
            <a href="shop.php">Shop</a>
           <div class="dropdown">
           <a class="DL" href="#">Categories</a>
                <div class="dropdown-content">
                    <a  href="#casual">Casual</a>
                    <a  href="#kids">Kids</a>
                    <a  href="#sports" >Sports</a>
                    <a  href="#boots" >Boots</a>
                </div>
                </div>
            <a href="Home.php#about">About Us</a>
            <a href="#">Contact</a>
        </div>

        <div class="navbar-extra">
            <!-- <div> Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik"> Freepik </a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com'</a></div> -->

            <a href="#" id="search" type="submit"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="ham-menu"><i data-feather="menu"></i></a>

        </div>

    </nav>
    <!-- navbar END -->

    <!-- section Product -->

    <!-- <section class="shop" id="shop">
        <h2>Our Products</h2>
        <div class="row2">
            <div class="shop-card">
                <img src="img-product/sptu1.jpg" alt="" class="shop-card-img">
                    <h3 class="text"">sepatu apa aja ini mah yang penting keren</h4>
                    <p class="shop-harga">Rp. 15.000</p>
                    <a href="" class="shop-btn">Buy Now</a>
                    <a href="" class="shop-btn"> + Keranjang</a>
            </div>
            
           
           
           

    </section> -->
    <!-- <div class="shop" id="shop"> -->
    <h1 id="casual">Our Products</h1>
    <h2 >Casual</h2>
    <div  class="product">
        <div class="shop-card">
            <img src="img-product/ventela.png" alt="" class="shop-card-img">
            <h3 class="text"">Ventela</h3>
                    <p>Ethnic High Black Natural Vantela Ventella 70s</p>
                    <h6 class=" shop-harga">Rp. 230.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/v2.png" alt="" class="shop-card-img">
            <h3 class="text"">Ventela</h3>
                    <p>Public Low Black Natural Sepatu Ventela Original 70s </p>
                    <h6 class=" shop-harga">Rp. 220.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/v3.png" alt="" class="shop-card-img">
            <h3 class="text"">Converse</h3>
                    <p>Converse chuck 70 Unlimited Edition</p>
                    <h6 class=" shop-harga">Rp. 1.099.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        
        <div class="shop-card">
            <img src="img-product/c2.png" alt="" class="shop-card-img">
            <h3 class="text"">Converse</h3>
                    <p>Converse chuck 70 Unlimited Edition </p>
                    <h6 class=" shop-harga">Rp. 1.099.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/z1.png" alt="" class="shop-card-img">
            <h3 class="text"">Gio Saverino</h3>
                    <p>Gio Saverino Sepatu Wedges Kerja Wanita Hanna</p>
                    <h6 class=" shop-harga">Rp. 159.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/Mynt.png" alt="" class="shop-card-img">
            <h3 class="text"">MYNT</h3>
                    <p>MYNT By MAYONETTE Maeve Women's Sneakers</p>
                    <h6 class=" shop-harga">Rp. 107.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/M2.png" alt="" class="shop-card-img">
            <h3 class="text"">MAYONETTE</h3>
                    <p>MAYONETTE Maeve Women's Sneakers - Sepatu Sneakers</p>
                    <h6 class=" shop-harga">Rp. 295.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>

        
        
        
    </div>
    <!-- Kids -->
    <h2 id="kids">Kids</h2>
 <div id="casual" class="product">
        <div class="shop-card">
            <img src="img-product/sepatuAnak.png" alt="" class="shop-card-img">
            <h3 class="text"">Zelhea</h3>
                    <p>Zelhea Sepatu Sneaker Premium Anak / Sepatu Import ZA137</p>
                    <h6 class=" shop-harga">Rp. 125.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/SA2.png" alt="" class="shop-card-img">
            <h3 class="text"">Geoff Max</h3>
                    <p>Timeless Kids Black White | Sepatu Anak | Sneakers</p>
                    <h6 class=" shop-harga">Rp. 199.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/SA3.png" alt="" class="shop-card-img">
            <h3 class="text"">Geoff Kids</h3>
                    <p>Ethan Kids Tan Coffe | Sepatu Anak | Sneakers</p>
                    <h6 class=" shop-harga">Rp. 199.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        
        <div class="shop-card">
            <img src="img-product/SA4.png" alt="" class="shop-card-img">
            <h3 class="text"">Dr.Kevin Kids</h3>
                    <p>Sepatu Sneaker Anak Kets Olah raga Sepatu Sekolah 489-028</p>
                    <h6 class=" shop-harga">Rp. 109.900</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/1687845707222.png" alt="" class="shop-card-img">
            <h3 class="text"">BATA</h3>
                    <p>B-First Sepatu Anak Laki-laki Vampe Black & Red - 3896664</p>
                    <h6 class=" shop-harga">Rp. 151.900</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/SA6.png" alt="" class="shop-card-img">
            <h3 class="text"">HUGO Kids</h3>
                    <p>Sepatu Sneakers Anak Import Terbaru 033</p>
                    <h6 class=" shop-harga">Rp. 90.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/SA7.png" alt="" class="shop-card-img">
            <h3 class="text"">ANDO</h3>
                    <p>Ando Official Sepatu Sneakers Moderio V Anak--Biru Royal</p>
                    <h6 class=" shop-harga">Rp. 142.400</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>

        
        
        
    </div>
<!-- sport -->
    <h2 id="sports">Sports</h2>
     <div id="casual" class="product">
        <div class="shop-card">
            <img src="img-product/SP1.png" alt="" class="shop-card-img">
            <h3 class="text"">PEAK</h3>
                    <p>Peak Tony Parker Kavaleri P-MOTIVE Rebound Sneakers</p>
                    <h6 class=" shop-harga">Rp. 961.936</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/SP2.png" alt="" class="shop-card-img">
            <h3 class="text"">910 Nineten</h3>
                    <p>910 Nineten Ekiden Infiknit Sepatu Lari-HIJAU-NEON</p>
                    <h6 class=" shop-harga">Rp. 449.900</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/SP3.png" alt="" class="shop-card-img">
            <h3 class="text"">NIKE</h3>
                    <p>Sepatu Basket WTS NIKE KYRIE 4 MARCH MADNESS ORIGINAL NCA</p>
                    <h6 class=" shop-harga">Rp. 1.500.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        
        <div class="shop-card">
            <img src="img-product/SP4.png" alt="" class="shop-card-img">
            <h3 class="text"">Adidas</h3>
                    <p>adidas RUNNING Sepatu Duramo SL 2.0 Pria HP2383</p>
                    <h6 class=" shop-harga">Rp. 900.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/SP5.png" alt="" class="shop-card-img">
            <h3 class="text"">Under Armour</h3>
                    <p> Under Armour 3 Curry Premium Original-Air Jordan </p>
                    <h6 class=" shop-harga">Rp. 1.643.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/SP6.png" alt="" class="shop-card-img">
            <h3 class="text"">PUMA</h3>
                    <p>Sepatu Bola Puma Ultra Match FG/AG 107217 02- </p>
                    <h6 class=" shop-harga">Rp. 1.199.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/SP9.png" alt="" class="shop-card-img">
            <h3 class="text"">MIZUNO</h3>
                    <p>Sepatu VOLI MIZUNO WAVE LUMINOUS 2 DIMENSION LOW MID</p>
                    <h6 class=" shop-harga">Rp. 1.690.822</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>

        
        
        
    </div>


    <!-- boots -->
    <h2 id="boots">Boots</h2>
     <div id="casual" class="product">
        <div class="shop-card">
            <img src="img-product/B1.png" alt="" class="shop-card-img">
            <h3 class="text"">CATERPILLAR</h3>
                    <p>Sepatu Safety Caterpillar Flexshell ST Waterproof Coffee Original</p>
                    <h6 class=" shop-harga">Rp. 2.500.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/B2.png" alt="" class="shop-card-img">
            <h3 class="text"">CAMEL</h3>
                    <p>SEPATU BOOTS SAFETY CAMEL KULIT ASLI</p>
                    <h6 class=" shop-harga">Rp. 125.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/B3.png" alt="" class="shop-card-img">
            <h3 class="text"">MANDIENS</h3>
                    <p>Sepatu Boots Kulit Asli Medali K164.CKLT</p>
                    <h6 class=" shop-harga">Rp. 350.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        
        <div class="shop-card">
            <img src="img-product/B4.png" alt="" class="shop-card-img">
            <h3 class="text"">AP Boots</h3>
                    <p>AP TERRA YELLOW SEPATU BOOT SAFETY KARET - AP BOOTS</p>
                    <h6 class=" shop-harga">Rp. 95.000</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/B5.png" alt="" class="shop-card-img">
            <h3 class="text"">ROBINSON</h3>
                    <p>ROBINSON Sepatu Sneakers Boots Formal Kerja Wanita Import</p>
                    <h6 class=" shop-harga">Rp. 116.075</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/B6.png" alt="" class="shop-card-img">
            <h3 class="text"">Specta</h3>
                    <p>Specta / sepatu boot wanita specta BP 043 /sintetis coklat / </p>
                    <h6 class=" shop-harga">Rp. 143.500</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>
        <div class="shop-card">
            <img src="img-product/B7.png" alt="" class="shop-card-img">
            <h3 class="text"">Chunky</h3>
                    <p>Sepatu Bot Platform Chunky 8Cm Sepatu Bot</p>
                    <h6 class=" shop-harga">Rp. 447.312</h6>
                <button href="" class="shop-btn">Buy</button>
                
        </div>

        
        
        
    </div>
    <!-- section Product END -->

    <script>
        feather.replace()
    </script>

    <script src="js/script.js"> </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>