<?php
include '../function.php';

$product_id = $_GET['id'];

$product = getProudct($product_id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/detailproduct.css" />
    <title>Product Detailed Page</title>
</head>

<body>
    <header>
        <nav class="navtext">
            <ul>
                <li>
                    <a href="shopproduct.php">Belanja</a>
                </li>
                <li>
                    <a href="subscribepage.php">Berlangganan</a>
                </li>
                <li>
                    <a href="featurepage1.php">Tentang Kami</a>
                </li>
                <li>
                    <a href="featurepage2.php">Bantuan</a>
                </li>
            </ul>
        </nav>
        <div class="logoheader">
            <a href="../">
                <img src="../assets/logo.png" alt="" class="logoimg" />
            </a>
        </div>
        <nav class="navbutton">
            <ul>
                <li>
                    <a href="#">
                        <img src="../assets/icons/mail-open.svg" alt="" class="navbuttonimg" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../assets/icons/cart-shopping.svg" alt="" class="navbuttonimg" />
                    </a>
                </li>
                <li>
                    <a href="profilepage.php">
                        <img src="../assets/icons/user.png" alt="" class="navbuttonimg" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../assets/icons/pound.svg" alt="" class="navbuttonimg" />
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="productdetails">
            <div class="directory">
                <a class="dirpcs" href="../">Home</a>
                <p class="dirpcs">></p>
                <a class="dirpcs" href="shopproduct.php">Shop Products</a>
                <p class="dirpcs">></p>
                <a class="dirpcs" href="#">Product Details</a>
            </div>
            <div class="produkterpilih">
                <div class="gambarutamaproduk">
                    <img src="../assets/product-images/<?= $product['image'] ?>" alt="" class="gambarutamaimg" />
                    <div class="gambarutamalain">
                        <div class="gambaratas">
                            <img src="../assets/gambarutama1.png" alt="" class="gambarutamalainimg" />
                            <img src="../assets/gambarutama2.png" alt="" class="gambarutamalainimg" />
                        </div>
                        <div class="gambarbawah">
                            <img src="../assets/gambarutama3.png" alt="" class="gambarutamalainimg" />
                        </div>
                    </div>
                </div>
                <div class="deskripsiproduk">
                    <p class="judulproduk"><?= $product['name'] ?></p>
                    <p class="hargaproduk">Mulai dari Rp<?= $product['price'] ?>.000,00</p>
                    <p class="quantity">Quantity</p>
                    <div class="jumlahproduk_wrapper">
                        <div class="jumlahproduk">
                            <button type="button" class="iconwrapper">
                                <img src="../assets/icons/minus.svg" alt="" class="minusicon" />
                            </button>
                            <p id="jumlahproduct" class="angkajumlahproduk">1</p>
                            <button type="button" class="iconwrapper">
                                <img src=" ../assets/icons/plus.svg" alt="" class="plusicon" />
                            </button>
                        </div>
                        <div class="shareproduk">
                            <img src="../assets/icons/share.svg" alt="" class="shareicon" />
                        </div>
                    </div>
                    <a href="subscribepage.php" style="color: black;">
                        <p class="produkbutton">Add To Cart</p>
                    </a>
                    <a href="subscribepage.php" style="color: black;">
                    <p class="produkbutton">Buy It Now</p>
                    </a>
                    <div class="teksdeskripsiproduk">
                        <p class="halfteksdeskripsiproduk">
                            <?php $strlen = 200;
                            $string = strip_tags($product['description']);
                            $stringCut = substr($string, 0, $strlen);
                            $stringHide = substr($string, 400);
                            $endPoint = strrpos($stringCut, ' ');
                            $string = substr($stringCut, 0, $endPoint);
                            echo $string;
                        ?></p>
                        <a href=#>
                            <p class="readmoredeskripsi" onclick="expand()">Read More</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="produklain">
            <div class="produklain_wrapper">
                <div class="arrowproduk">
                    <img src="../assets/icons/leftarrow.svg" alt="" class="leftarrow" />
                </div>
                <div class="produklainbox">
                    <img src="../assets/gambarlain1.png" alt="" class="gambarlainimg" />
                </div>
                <div class="produklainbox">
                    <img src="../assets/gambarlain2.png" alt="" class="gambarlainimg" />
                </div>
                <div class="produklainbox">
                    <img src="../assets/gambarlain3.png" alt="" class="gambarlainimg" />
                </div>
                <div class="produklainbox">
                    <img src="../assets/gambarlain1.png" alt="" class="gambarlainimg" />
                </div>
                <div class="produklainbox">
                    <img src="../assets/gambarlain2.png" alt="" class="gambarlainimg" />
                </div>
                <div class="arrowproduk">
                    <img src="../assets/icons/rightarrow.svg" alt="" class="rightarrow" />
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
        <ul class="footbar">
                <li class="foot_item">
                    <ul class="foot_menu">
                        <a href="#" class="footer_nav_link">Dukungan</a>
                    </ul>
                    <ul class="foot_menu">
                        <a href="#" class="footer_nav_link">Kontak</a>
                    </ul>
                    <ul class="foot_menu">
                        <a href="pages/featurepage3.php" class="footer_nav_link">Cara Berlangganan</a>
                    </ul>
                    <ul class="foot_menu">
                        <a href="pages/profilepage.php" class="footer_nav_link">Akun</a>
                    </ul>
                </li>
                <li class="foot_item">
                    <ul class="foot_menu">
                        <a href="../index.php#tentangkami" class="footer_nav_link">Tentang Kami</a>
                    </ul>
                    <ul class="foot_menu">
                        <a href="#" class="footer_nav_link">Cara Bekerja</a>
                    </ul>
                    <ul class="foot_menu">
                        <a href="pages/featurepage1.php" class="footer_nav_link">FAQ</a>
                    </ul>
                </li>
                <li class="foot_item">
                    <ul class="foot_menu">
                        <a href="#" class="footer_nav_link">Karier</a>
                    </ul>
                    <ul class="foot_menu">
                        <a href="#" class="footer_nav_link">Telusuri</a>
                    </ul>
                    <ul class="foot_menu">
                        <a href="#" class="footer_nav_link">Blog</a>
                    </ul>
                </li>
                <li class="foot_item">
                    <a href="pages/featurepage3.php" class="footer_nav_link">Berlangganan</a>
                </li>
            </ul>
            <div class="kolom_email">
                <input class="newsletter" type="text" placeholder="e-mail:">
            </div>
        </div>
    </footer>


    <script>
        function expand() {
            document.querySelector('.halfteksdeskripsiproduk').innerHTML = "<?= $product['description']?>";
        }
    </script>

    <script>
        const btnAdd = document.querySelectorAll('.iconwrapper');
        const quantity = document.getElementById('jumlahproduct');

        btnAdd[1].addEventListener('click', function() {
            quantity.innerHTML = parseInt(quantity.innerHTML) + 1;
        });

        btnAdd[0].addEventListener('click', function() {
            if (parseInt(quantity.innerHTML) > 1) {
                quantity.innerHTML = parseInt(quantity.innerHTML) - 1
            }

        });
    </script>
</body>

</html>