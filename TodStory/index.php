<?php
include 'function.php';

$products = getProducts(true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/landingpage.css" />
    <title>Landing Page</title>
</head>

<body>
    <header>
        <nav class="navtext">
            <ul>
                <li>
                    <a href="pages/shopproduct.php">Belanja</a>
                </li>
                <li>
                    <a href="pages/subscribepage.php">Berlangganan</a>
                </li>
                <li>
                    <a href="#tentangkami">Tentang Kami</a>
                </li>
                <li>
                    <a href="pages/featurepage2.php">Bantuan</a>
                </li>
            </ul>
        </nav>
        <div class="logoheader">
            <a href="../">
                <img src="assets/logo.png" alt="" class="logoimg" />
            </a>
        </div>
        <nav class="navbutton">
            <ul>
                <li>
                    <a href="#">
                        <img src="assets/icons/mail-open.svg" alt="" class="navbuttonimg" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/icons/cart-shopping.svg" alt="" class="navbuttonimg" />
                    </a>
                </li>
                <li>
                    <a href="pages/profilepage.php">
                        <img src="assets/icons/user.png" alt="" class="navbuttonimg" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/icons/pound.svg" alt="" class="navbuttonimg" />
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="monthsprogress">
            <div class="months">
                <div class="month">
                    <p>Januari</p>
                </div>
                <div class="month">
                    <p>Februari</p>
                </div>
                <div class="month">
                    <p>Maret</p>
                </div>
                <div class="month">
                    <p>April</p>
                </div>
                <div class="month">
                    <p>Mei</p>
                </div>
                <div class="month">
                    <p>Juni</p>
                </div>
                <div class="month">
                    <p>Juli</p>
                </div>
                <div class="month">
                    <p>Agustus</p>
                </div>
                <div class="month">
                    <p>September</p>
                </div>
                <div class="month">
                    <p>Oktober</p>
                </div>
                <div class="month">
                    <p>November</p>
                </div>
                <div class="monthend">
                    <p>Desember</p>
                </div>
            </div>
        </div>
        <div class="hero">
            <p class="hero_desc">
                Terima mainan edukasi di rumah Anda mulai bulan ini dengan
                berlangganan
            </p>
            <div class="langganan">
                <a href="pages/subscribepage.php" class="blacklink">
                    <div class="langgananskrgbutton">
                        Berlangganan Sekarang!
                    </div>
                </a>
            </div>
        </div>
        <div class="produkkami">
            <a href="pages/shopproduct.php" class="blacklink"><span class="produkkamijudul">Produk Kami</span></a>
            <div class="produkkamiisi">
                <div class="arrowproduk">
                    <img src="assets/icons/leftarrow.svg" alt="" class="leftarrow" />
                </div>
                <?php foreach ($products as $product) { ?>
                    <a href="pages/detailproduct.php?id=<?= $product['id'] ?>">
                        <div class="produkbox">
                            <img src="assets/product-images/<?= $product['image'] ?>" alt="" class="produkimg" />
                            <p class="namaproduk"><?= $product['name'] ?></p>
                            <p class="mulaidari">
                                Mulai dari
                                <span class="hargaproduk">Rp<?= $product['price'] ?>.000,00</span>
                            </p>
                        </div>
                    </a>
                <?php } ?>
                <div class="arrowproduk">
                    <img src="assets/icons/rightarrow.svg" alt="" class="rightarrow" />
                </div>
            </div>
        </div>
        <div id="caraberlangganan" class="caraberlangganan">
            <p>
                <span class="caraberlanggananjudul">Cara Berlangganan</span>
            </p>
            <div class="bagianlangganan">
                <div class="bagianlanggananjudul">
                    <img src="assets/nomor1cb.svg" alt="" class="nomorcaraberlangganan" />
                    <p>Pilih usia anak</p>
                </div>
                <div class="bagianlanggananisi">
                    <div class="usiaanak_wrapper">
                        <p class="usiaanak">2-3 tahun</p>
                        <p class="usiaanak">4-5 tahun</p>
                        <p class="usiaanak">6-7 tahun</p>
                        <p class="usiaanak">> 7 tahun</p>
                    </div>
                </div>
            </div>
            <div class="bagianlangganan">
                <div class="bagianlanggananjudul">
                    <img src="assets/nomor2cb.svg" alt="" class="nomorcaraberlangganan" />
                    <p>Pilih learning kit</p>
                </div>
                <div class="bagianlanggananisi">
                    <div class="learningkit_wrapper">
                        <p class="learningkit">
                            Menuju Katalog Produk Kami
                        </p>
                    </div>
                </div>
            </div>
            <div class="bagianlangganan">
                <div class="bagianlanggananjudul">
                    <img src="assets/nomor3cb.svg" alt="" class="nomorcaraberlangganan" />
                    <p>Pilih paket harga</p>
                </div>
                <div class="bagianlanggananisi">
                    <div class="paketharga_wrapper">
                        <div class="paketharga">
                            <p class="pakethargajudul">Paket Dasar</p>
                            <p class="pakethargasubjudul">
                                Yang Anda Dapatkan
                            </p>
                            <p class="pakethargaisi">
                                <span class="pakethargaisi_inline">
                                    <img src="assets/icons/checklist.svg" alt="" class="checklist" /> </span>Learning Kit
                            </p>
                            <p class="pakethargaisi">
                                <span class="pakethargaisi_inline">
                                    <img src="assets/icons/checklist.svg" alt="" class="checklist" />
                                </span>
                                Buku Panduan
                            </p>
                            <p class="hargapaket">
                                <span class="highlight_hargapaket">Rp65.000,00</span>
                                /bulan
                            </p>
                            <p class="pilihpaket">Pilih Paket</p>
                        </div>
                        <div class="paketharga">
                            <p class="pakethargajudul">Paket Standar</p>
                            <p class="pakethargasubjudul">
                                Yang Anda Dapatkan
                            </p>
                            <p class="pakethargaisi">
                                <span class="pakethargaisi_inline">
                                    <img src="assets/icons/checklist.svg" alt="" class="checklist" /> </span>Paket Dasar
                            </p>
                            <p class="pakethargaisi">
                                <span class="pakethargaisi_inline">
                                    <img src="assets/icons/checklist.svg" alt="" class="checklist" />
                                </span>
                                Video Panduan
                            </p>
                            <p class="hargapaket">
                                <span class="highlight_hargapaket">Rp85.000,00</span>
                                /bulan
                            </p>
                            <p class="pilihpaket">Pilih Paket</p>
                        </div>
                        <div class="paketharga">
                            <p class="pakethargajudul">Paket Premium</p>
                            <p class="pakethargasubjudul">
                                Yang Anda Dapatkan
                            </p>
                            <p class="pakethargaisi">
                                <span class="pakethargaisi_inline">
                                    <img src="assets/icons/checklist.svg" alt="" class="checklist" /> </span>Paket Standar + 1 Learning Kit
                            </p>
                            <p class="pakethargaisi">
                                <span class="pakethargaisi_inline">
                                    <img src="assets/icons/checklist.svg" alt="" class="checklist" />
                                </span>
                                Video Panduan
                            </p>
                            <p class="pakethargaisi">
                                <span class="pakethargaisi_inline">
                                    <img src="assets/icons/checklist.svg" alt="" class="checklist" />
                                </span>
                                Gratis Ongkir
                            </p>
                            <p class="hargapaket">
                                <span class="highlight_hargapaket">Rp100.000,00</span>
                                /bulan
                            </p>
                            <p class="pilihpaket">Pilih Paket</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bagianlangganan">
                <div class="bagianlanggananjudul">
                    <img src="assets/nomor4cb.svg" alt="" class="nomorcaraberlangganan" />
                    <p>Pilih paket harga</p>
                </div>
                <div class="bagianlanggananisi">
                    <div class="lamaberlangganan_wrapper">
                        <p class="lamaberlangganan">3 bulan</p>
                        <p class="lamaberlangganan">6 bulan</p>
                        <p class="lamaberlangganan">9 bulan</p>
                        <p class="lamaberlangganan">12 bulan</p>
                    </div>
                </div>
            </div>
            <p class="bagianlangganansubjudul">
                Produk disesuaikan dengan usia anak serta
                <br />
                paket berlangganan yang dapat disesuaikan dengan
                <br />
                kebutuhan pribadi Anda.
            </p>
            <a href="subscribepage.php"  class="blacklink">
            <div class="tombollangganan_wrapper">
                <p class="tombollangganan">LANGGANAN</p>
            </div>
            </a>
        </div>
        <div class="promosi">
            <p><span class="promosijudul">Promosi</span></p>
            <div class="promosiisi">
                <div class="promosigambar">
                    <img src="assets/promosi1.png" alt="" class="promosiimg" />
                </div>
                <div class="promosiplus">
                    <img src="assets/icons/plusicon.svg" alt="" class="plusicon" />
                </div>
                <div class="promosigambar">
                    <img src="assets/promosi2.png" alt="" class="promosiimg" />
                </div>
            </div>
            <p class="promositeks">
                Pelanggan baru akan mendapatkan
                <span class="gratis_promosi">gratis</span> 1 paket
                <br />
                mainan edukasi pada bulan pertama.
            </p>
        </div>
        <div id="tentangkami" class="tentangkami">
            <div class="tentangkamiisi">
                <img src="assets/tentangkami.png" alt="" class="tentangkamiimg" />
                <div class="tentangkamiright">
                    <p>
                        <span class="tentangkamijudul">Tentang Kami</span>
                    </p>
                    <p class="tentangkamiteks">
                        Tod's Story adalah sebuah website yang fokus
                        terhadap perkembangan hidup anak agar anak dapat
                        menjadi lebih interaktif dengan pilihan learning kit
                        yang seru yang datang tiap bulan, membuat anak anak
                        tidak mudah bosan.
                    </p>
                </div>
            </div>
        </div>
        <div class="ulasan">
            <p><span class="ulasanjudul">Ulasan</span></p>
            <div class="ulasanisi">
                <div class="ulasanbox">
                    <img src="assets/ulasan1.png" alt="" class="ulasanimg" />
                    <div class="ulasandesc">
                        <div class="starrateulasan">
                            <img src="assets/icons/starrate5.svg" alt="" class="starrateimg" />
                        </div>
                        <p class="ulasanteks">
                            Mainan sangat berkualitas, anak tidak bosan!
                        </p>
                    </div>
                </div>
                <div class="ulasanbox">
                    <img src="assets/ulasan2.png" alt="" class="ulasanimg" />
                    <div class="ulasandesc">
                        <div class="starrateulasan">
                            <img src="assets/icons/starrate5.svg" alt="" class="starrateimg" />
                        </div>
                        <p class="ulasanteks">
                            Produk asli sesuai foto, setiap bulan paket
                            datang tepat waktu.
                        </p>
                    </div>
                </div>
                <div class="arrowproduk">
                    <img src="assets/icons/rightarrow2.svg" alt="" class="rightarrow2" />
                </div>
            </div>
        </div>
        <div id="bantuan" class="virtualassistant">
            <div class="va_box">
                <aside>
                    <img src="assets/virtualassistant.png" class="va_img" />
                </aside>
                <article class="va_text">
                    <a href="pages/featurepage2.php" class="blacklink">
                        <p class="va_intro">
                            Butuh <span class="va_bantuan">bantuan</span>?
                        </p>
                    </a>
                    <p class="va_sub">
                        Virtual assistant siap menjawab pertanyaan <br />
                        Anda secara langsung.
                    </p>
                </article>
            </div>
        </div>
        <div class="faq">
            <a href="pages/featurepage1.php"  class="blacklink">
            <p><span class="faqjudul">FAQ</span></p>
            </a>
            <div class="faqisi">
                <a href="#"  class="blacklink">
                    <div class="faqpertanyaan">
                        <p class="faqteks">Apa perbedaan antara Tod's Story dengan website lain?</p>
                    </div>
                </a>
                <a href="#"  class="blacklink">
                    <div class="faqpertanyaan">
                        <p class="faqteks">Berapa biaya berlangganan di Tod's Story?</p>
                    </div>
                </a>
                <a href="#"  class="blacklink">
                    <div class="faqpertanyaan">
                        <p class="faqteks">Apakah saya bisa membeli hanya 1 kit?</p>
                    </div>
                </a>
                <a href="#"  class="blacklink">
                    <div class="faqpertanyaan">
                        <p class="faqteks">Apakah produk yang didapat harus dikembalikan?</p>
                    </div>
                </a>
                <a href="#"  class="blacklink">
                    <div class="faqpertanyaan">
                        <p class="faqteks">Apakah Tod's Story melayani pengiriman ke seluruh Indonesia?</p>
                    </div>
                </a>
            </div>
            <div class="loadmorefaq">
                <a href="pages/featurepage1.php" class="greylink">Load more</a>
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
                        <a href="pages/featurepage1.php" class="footer_nav_link">Kontak</a>
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
                        <a href="#tentangkami" class="footer_nav_link">Tentang Kami</a>
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
                        <a href="pages/featurepage1.php" class="footer_nav_link">Telusuri</a>
                    </ul>
                    <ul class="foot_menu">
                        <a href="#" class="footer_nav_link">Blog</a>
                    </ul>
                </li>
                <li class="foot_item">
                    <a href="pages/subscribepage.php" class="footer_nav_link">Berlangganan</a>
                </li>
            </ul>
            <div class="kolom_email">
                <input class="newsletter" type="text" placeholder="e-mail:" />
            </div>
        </div>
    </footer>
</body>

</html>