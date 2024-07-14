<div class="am-u-md-4 am-u-sm-12 blog-sidebar">
    <div class="blog-sidebar-widget blog-bor">
        <h2 class="blog-text-center blog-title"><span>About ME</span></h2>
        <img src="assets/i/avatar.jpg" alt="about me" class="blog-entry-img" >
        <p>渣布</p>
        <p>
    我是渣布。死宅程序员。
    </p><p>路一直在走，但是渐渐发现身边的人都离我越来越远，有些是停下脚步，有些则被我抛弃掉。一个人的路，并不可怖，而更多的是无奈。</p>
    </div>
    <div class="blog-sidebar-widget blog-bor">
        <h2 class="blog-title"><span>人生风向标</span></h2>
        <ul class="am-list">
            <?
                $logions = ['千秋邈矣独留我,百战归来再读书','道德构建的是理想社会，而经济学构建的是现实社会','天行健，君子以自强不息。地势坤，君子以厚德载物','天地不仁，以万物为刍狗。圣人不仁，以百姓为刍狗'];
                foreach($logions as $logion):
            ?>
            <li><a><?= $logion ?></a></li>
            <? endforeach;?>
        </ul>
    </div>
</div>