<? $this->title = '首页 | 玩趣' ?>
<!-- header start -->
<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div id="banner" class="am-u-sm-8 am-u-sm-centered">
        <img src="assets/i/logo.png" alt="玩趣 Logo"/>
        <h2 class="am-hide-sm-only"></h2>
    </div>
</header>
<!-- header end -->
<!-- topbar start -->
<?= $this->render('//layouts/_topbar') ?>
<!-- topbar end -->
<!-- content start -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">
        <!-- article start -->
        <? 
            $articles = [1,2];
            foreach($articles as $article){
                echo $this->render('//layouts/_article');
            }
        ?>
        <!-- article end -->
        <!-- pagination start -->
        <!-- <ul class="am-pagination">
            <li class="am-pagination-prev"><a href="">&laquo; Prev</a></li>
            <li class="am-pagination-next"><a href="">Next &raquo;</a></li>
        </ul> -->
        <!-- pagination end -->
    </div>
    <!-- sidebar start -->
    <?= $this->render('//layouts/_sidebar') ?>
    <!-- sidebar end -->
</div>
<!-- content end -->
<!-- footer start -->
<?= $this->render('//layouts/_footer') ?>
<!-- footer end -->

