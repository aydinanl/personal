<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hakkımda</title>
    <!-- Stil Dosyası -->
    <link href="<?php echo URL; ?>assets/scss/main.css" rel="stylesheet">
    <!-- İconlar için font-awesome -->
    <link href="<?php echo URL; ?>assets/css/font-awesome.css" rel="stylesheet">
    <!--Responsive Aktifleştir-->
    <meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1.0, maximum-scale=1">
</head>
<body>
<div class="container">
    <div class="profil-kutusu">
        <img id="profil-picture" src="<?php echo URL; ?>assets/img/profile_picture.png" alt="Profil Resimi">
        <div class="profil-bilgiler">
            <h2>Aydın Anlıaçık</h2>
            <h3>Yazılım Müh.</h3>
            <div class="profil-social">
                <div class="social-links">
                    <div class="sosyal-daire">
                        <div class="sosyal-icon">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="sosyal-daire">
                        <div class="sosyal-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="sosyal-daire">
                        <div class="sosyal-icon">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="sosyal-daire">
                        <div class="sosyal-icon">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="page">
        <div class="clear"></div>
        <header>
            <nav>
                <ul>
                    <li>
                        <div class="menu-icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="menu-link">
                            <a href="<?php echo URL . 'index' ?>">Hakkımda</a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-icon">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        </div>
                        <div class="menu-link">
                            <a href="resume.html">Öz Geçmiş</a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-icon">
                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                        </div>
                        <div class="menu-link">
                            <a href="referanslar.html">Referanslar</a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-icon">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </div>
                        <div class="menu-link">
                            <a href="<?php echo URL . 'blog' ?>">Blog Yazıları</a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="menu-link">
                            <a href="contact.html">İletisim</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <nav class="mobil-menu">
                <span>Menü</span>
                <input type="checkbox" id="button">
                <label for="button" onclick><i class="fa fa-bars" aria-hidden="true"></i></label>
                <ul>
                    <li><a href="<?php echo URL . 'index' ?>"><i class="fa fa-user" aria-hidden="true"></i>Hakkımda</a></li>
                    <li><a href="resume.html"><i class="fa fa-file-text-o" aria-hidden="true"></i>Öz Geçmiş</a></li>
                    <li><a href="referanslar.html"><i class="fa fa-suitcase" aria-hidden="true"></i>Referanslar</a></li>
                    <li><a href="<?php echo URL . 'blog' ?>"><i class="fa fa-comments-o" aria-hidden="true"></i>Blog Yazıları</a></li>
                    <li><a href="contact.html"><i class="fa fa-map-marker" aria-hidden="true"></i>İletişim</a></li>
                </ul>
            </nav>
        </header>
        <div class="clear"></div>