<div id="main">
    <div class="breadcrumb">
        <h2>Blog Yazıları</h2>
    </div>
    <div class="content">
        <div class="blog">
            <div class="blog-kategoriler">
                <h2>Kategoriler</h2>
                <span>Kategoriler</span>
                <input type="checkbox" id="kategoriler">
                <label for="kategoriler" onclick><i class="fa fa-bars" aria-hidden="true"></i></label>
                <ul>
                    <?php
                    foreach ($getCategories as $category){
                        ?>
                        <li><a href="<?php echo URL . 'category/' . $category->cat_id . '/' . lcfirst($category->cat_name) ?>">#<?php echo $category->cat_name; ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <?php
            foreach ($getArticles as $article){
                ?>
                <div class="post">
                    <img class="post-img" src="<?= URL . $article->art_cover?>" alt="Post Adı">
                    <div class="post-title">
                        <h2><a href="<?php echo URL . 'article/' . $article->art_id . '/' . $article->art_sef_link ?>"><?=$article->art_name?></a></h2>
                    </div>
                    <div class="post-informations">
                        <span><?=substr($article->art_date,0,11)?></span><span class="post-informations-breaker">/</span><span><a href="#">Business</a>, <a
                                    href="#">Company</a></span><span class="post-informations-breaker">/</span><span>2 Comments</span>
                    </div>
                    <div class="post-content">
                        <p><?=substr($article->art_content,0,450) . "..."?></p>
                    </div>
                    <div class="devamini-oku">
                        <a href="<?php echo URL . 'article/' . $article->art_id . '/' . $article->art_sef_link ?>">Devamını Oku</a>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="pagination">
                <ul>
                    <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">11</a></li>
                    <li><a href="#">12</a></li>
                    <li><a href="#">13</a></li>
                    <li><a href="#">14</a></li>
                    <li><a href="#">15</a></li>
                    <li><a href="#">16</a></li>
                    <li><a href="#">17</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>