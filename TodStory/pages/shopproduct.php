<?php
include '../function.php';

$products = getProducts(false);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/shopproduct.css" />
    <title>Product Page 1</title>
</head>

<body>
    <header>
        <div class="header1">
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
        </div>
        <div class="header2">
            <nav class="navusia">
                <ul>
                    <li>
                        <a href="#">USIA 2-3</a>
                    </li>
                    <li>
                        <a href="#">USIA 4-5</a>
                    </li>
                    <li>
                        <a href="#">USIA 6-7</a>
                    </li>
                    <li>
                        <a href="#">USIA >7</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header3">
            <div class="filterproduk">
                <img src="../assets/icons/filter.svg" alt="" class="filtericon" />
            </div>
            <div class="kategori">
                <div class="kategoriproduk">
                    <div class="kategorileft">
                        <p class="kategoriteks">Availability</p>
                    </div>
                    <div class="kategoriright">
                        <img src="../assets/icons/dropdown.svg" alt="" class="dropdownkategori" />
                    </div>
                </div>
                <div class="kategoriproduk">
                    <p class="kategoriteks">Price</p>
                    <img src="../assets/icons/dropdown.svg" alt="" class="dropdownkategori" />
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="productpage">
            <div class="halamanke">
                <p>Halaman 2 dari 3</p>
            </div>
            <p class="productpagejudul">Belanja Produk</p>
            <div class="directory">
                <a class="dirpcs" href="../">Home</a>
                <p class="dirpcs">></p>
                <a class="dirpcs" href="#">Shop Products</a>
            </div>
            <div class="katalogproduk">
                <div class="katalogprodukrow">
                    <?php foreach ($products as $product) { ?>
                        <a href="detailproduct.php?id=<?= $product['id'] ?>" class="produkbox">
                            <img src="../assets/product-images/<?= $product['image'] ?>" alt="" class="produkimg" />
                            <p class="namaproduk"><?= $product['name'] ?></p>
                            <p class="mulaidari">
                                Mulai dari
                                <span class="hargaproduk">Rp<?= $product['price'] ?>.000,00</span>
                            </p>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="halamannav">
                <div class="nomorhalaman">
                    <img src="../assets/icons/leftarrow.svg" alt="" class="leftarrowhlmn" />
                </div>
                <a href="#" class="nomorhalaman"><span class="nosekarang">1</a>
                <a class="nomorhalaman">2</span></a>
                <a class="nomorhalaman">3</a>
                <div class="nomorhalaman">
                    <img src="../assets/icons/rightarrow.svg" alt="" class="rightarrowhlmn" />
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
                        <a href="featurepage3.php" class="footer_nav_link">Cara Berlangganan</a>
                    </ul>
                    <ul class="foot_menu">
                        <a href="profilepage.php" class="footer_nav_link">Akun</a>
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
                        <a href="featurepage1.php" class="footer_nav_link">FAQ</a>
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
                    <a href="featurepage3.php" class="footer_nav_link">Berlangganan</a>
                </li>
            </ul>
            <div class="kolom_email">
                <input class="newsletter" type="text" placeholder="e-mail:">
            </div>
        </div>
    </footer>
</body>

</html>