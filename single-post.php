<?php get_header(); ?>

  <div class="layout-container">
      <div class="page-header">
        <div class="am-container">
          <h1 class="page-header-title">News</h1>
        </div>
      </div>

      <div class="breadcrumb-box">
        <div class="am-container">
          <ol class="am-breadcrumb">
            <li><a href="../index.html">首页</a></li>
            <li class="am-active">News</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="section news-section">
      <div class="container">
        <!--news-section left start-->
        <div class="am-u-md-9">
          <div class="article">
		<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ) : the_post(); ?>
  			<header class="article--header">
              <h2 class="article--title"><a href="#" rel=""><?php the_title(); ?></a></h2>
              <ul class="article--meta">
                <li class="article--meta_item"><i class="am-icon-calendar"></i><?php the_time('Y-m-d G:H'); ?></li>
                <li class="article--meta_item"><i class="am-icon-user"></i>by张三</li>
                <li class="article--meta_item"><i class="am-icon-commenting-o"></i>33评论</li>
              </ul>
            </header>     
            <div class="article--content">
             <?php the_content(); ?>
            </div>        
		<?php endwhile; ?>
		<?php endif; ?> 
          <div class="comments">
		  </div>
        	</div>
		  </div>
        <!--news-section left end-->

        <!--news-section right start-->
        <div class="am-u-md-3">
          <div class="blog_sidebar">
            <div class="widget">
              <h2 class="widget--title"><i class="am-icon-file-text-o"></i>最新资讯</h2>
              <ul>
								<li><a href="#">公司报道</a></li>
								<li><a href="#">行业资讯</a></li>
								<li><a href="#">云适配观点</a></li>
							</ul>
            </div>
            <div class="widget">
              <h2 class="widget--title"><i class="am-icon-comments-o"></i>热门动态</h2>
              <ul>
								<li><a href="#">科大讯飞严峻：借力HTML5 推进“智能语音技术”应用普及</a></li>
								<li><a href="#">金山万勇：打破信息孤岛 HTML5优势凸显将成核心</a></li>
								<li><a href="#">阿里吴志华：基于HTML5技术开发Native体验应用</a></li>
							</ul>
            </div>
            <div class="widget">
              <h2 class="widget--title"><i class="am-icon-rss"></i>站内公告</h2>
              <ul>
								<li><a href="#">今天的应用号只是用了HTML技术中无需下载安装、跨平台的功能， 并没有用到HTML开发互联的精髓。 它只是一个...</a><span class="rss-date">November 10, 2015</span></li>
								<li><a href="#">云适配带来了一个全新的“互联网+政务”解决方案，我们可以非常好的利用你现有的IT系统，就是你还是用原来的PC网站一套系统，只要安装一下云适配的产品Xcloud网站跨屏...</a><span class="rss-date">November 10, 2015</span></li>
							</ul>
            </div>
          </div>
        </div>
        <!--news-section right end-->
      </div>
    </div>
  </div>


  <div class="section" style="margin-top:0px;background-image: url('../assets/images/pattern-light.png');">
    <div class="container">
      <!--index-container start-->
      <div class="index-container">
        <div class="am-g">
          <div class="am-u-md-4">
            <div class="contact_card">
							<i style="color:#59bcdb" class="contact_card--icon am-icon-phone"></i>
							<strong class="contact_card--title">Contact Us</strong>
							<p class="contact_card--text">Feel free to call us on <br> <strong>0 (855) 233-5385</strong> <br> Monday - Friday, 8am - 7pm</p>
              <button type="button" class="am-btn am-btn-secondary">Order a Call Back</button>
						</div>
          </div>
          <div class="am-u-md-4">
            <div class="contact_card">
							<i style="color:#59bcdb" class="contact_card--icon am-icon-envelope-o"></i>
							<strong class="contact_card--title">Our Email</strong>
							<p class="contact_card--text">Drop us a line anytime at <br> <strong><a href="mailto:info@financed.com">info@financed.com</a>,</strong> <br> and we’ll get back soon.</p>
              <button type="button" class="am-btn am-btn-secondary">Start Writing</button>
						</div>
          </div>
          <div class="am-u-md-4">
            <div class="contact_card">
							<i style="color:#59bcdb" class="contact_card--icon am-icon-map-marker"></i>
							<strong class="contact_card--title">Our Address</strong>
							<p class="contact_card--text">Come visit us at <br> <strong>Stock Building, New York,</strong> <br> NY 93459</p>
              <button type="button" class="am-btn am-btn-secondary">See the Map</button>
						</div>
          </div>
        </div>
      </div>
      <!--index-container end-->
    </div>
  </div>
  
  <?php get_footer();?>
