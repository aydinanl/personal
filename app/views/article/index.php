<div id="main">
    <div class="breadcrumb">
        <h2>Blog Yazıları</h2>
    </div>
    <div class="content">
        <div class="blog">
            <div class="post">
                <?php
                foreach ($getArticle as $article){
                    ?>
                    <img class="post-img" src="<?php echo URL . $article->art_cover; ?>" alt="Post Adı">
                    <div class="post-title">
                        <h2><a href="<?php echo URL . 'article/' . $article->art_id . '/' . $article->art_sef_link ?>"><?=$article->art_name?></a></h2>
                    </div>
                    <div class="post-informations">
                        <span><?=substr($article->art_date,0,11)?></span><span class="post-informations-breaker">/</span><span><a href="#">Business</a>, <a
                                    href="#">Company</a></span><span class="post-informations-breaker">/</span><span>2 Comments</span>
                    </div>
                    <div class="post-content">
                        <p><?=$article->art_content ?></p>
                    </div>
                <?php
                }
                ?>

                <div class="yorumlar">
                    <h3>Yorumlar (3)</h3>
                    <!-- Dikkat yorum class'ından sonra clear class'ını unutma! -->
                    <div class="yorum">
                        <div class="avatar">
                            <img src="<?php echo URL; ?>assets/img/avatar.png" alt="Üye Avatarı">
                        </div>
                        <div class="yorum-adsoyad">
                            <span>Aydın Anlıaçık</span>
                        </div>
                        <div class="yorum-tarih">
                            <span>Jan 06, 2016 at 14:35</span>
                        </div>
                        <div class="yorum-icerik">
                            <p>
                                Nulla consequat elit aliquam mauris molestie fermentum. Nam at tempor massa, mattis
                                vulputate felis. Maecenas est arcu, viverra vitae elit vel, pretium malesuada lectus.
                                Proin ut vulputate ex.
                            </p>
                        </div>
                        <div class="cevapla">
                            <a href="#">Cevapla</a>
                        </div>
                    </div>
                    <!-- Yoruma Cevap Yazılmışsa -->
                    <div class="yorum-cevap">
                        <div class="avatar">
                            <img src="<?php echo URL; ?>assets/img/avatar.png" alt="Üye Avatarı">
                        </div>
                        <div class="yorum-adsoyad">
                            <span>Aydın Anlıaçık</span>
                        </div>
                        <div class="yorum-tarih">
                            <span>Jan 06, 2016 at 14:35</span>
                        </div>
                        <div class="yorum-icerik">
                            <p>
                                Nulla consequat elit aliquam mauris molestie fermentum. Nam at tempor massa, mattis
                                vulputate felis. Maecenas est arcu, viverra vitae elit vel, pretium malesuada lectus.
                                Proin ut vulputate ex.
                            </p>
                        </div>
                        <div class="cevapla">
                            <a href="#">Cevapla</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="yorum">
                        <div class="avatar">
                            <img src="<?php echo URL; ?>assets/img/avatar.png" alt="Üye Avatarı">
                        </div>
                        <div class="yorum-adsoyad">
                            <span>Lucas Morales</span>
                        </div>
                        <div class="yorum-tarih">
                            <span>Jan 06, 2016 at 14:35</span>
                        </div>
                        <div class="yorum-icerik">
                            <p>
                                Nulla consequat elit aliquam mauris molestie fermentum. Nam at tempor massa, mattis
                                vulputate felis. Maecenas est arcu, viverra vitae elit vel, pretium malesuada lectus.
                                Proin ut vulputate ex consequat elit aliquam mauris molestie fermentum. Nam at tempor
                                massa, mattis vulputate felis. Maecenas est arcu, viverra vitae elit vel, pretium
                                malesuada lectus. Proin ut vulputate ex.consequat elit aliquam mauris molestie
                                fermentum. Nam at tempor massa, mattis vulputate felis. Maecenas est arcu, viverra vitae
                                elit vel, pretium malesuada lectus. Proin ut vulputate ex.
                            </p>
                        </div>
                        <div class="cevapla">
                            <a href="#">Cevapla</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="yorum">
                        <div class="avatar">
                            <img src="<?php echo URL; ?>assets/img/avatar.png" alt="Üye Avatarı">
                        </div>
                        <div class="yorum-adsoyad">
                            <span>Lucas Morales</span>
                        </div>
                        <div class="yorum-tarih">
                            <span>Jan 06, 2016 at 14:35</span>
                        </div>
                        <div class="yorum-icerik">
                            <p>
                                Nulla consequat elit aliquam mauris molestie fermentum. Tek Satır. </p>
                        </div>
                        <div class="cevapla">
                            <a href="#">Cevapla</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="yorum-yaz">
                    <h3>Yorum Yaz</h3>
                    <form action="#" method="post" class="yorum-gonder">
                        <input type="text" name="name" placeholder="Ad" class="inputs">
                        <input type="email" name="email" placeholder="Email" class="inputs">
                        <input type="text" name="website" placeholder="Web Sitesi" class="input-satir">
                        <textarea name="yorum" id="" cols="30" rows="10" placeholder="Yorumunuz."></textarea>
                        <input type="submit" value="Yorumu Gönder" class="gonder-button">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>