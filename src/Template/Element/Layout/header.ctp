<header id="header" class="herald-site-header">
    <div class="header-top hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hel-l">
                        <nav class="secondary-navigation herald-menu">	
                            <ul id="menu-herald-secondary-1" class="menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="#">FanPage</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="#">Contact</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="#">Shop</a>
                                </li>
                            </ul>	
                        </nav>
                    </div>
                    <div class="hel-r">
                        <span class="herald-calendar"><i class="fa fa-calendar"></i>March 3, 2018</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle herald-header-wraper hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 hel-el">
                    <div class="hel-l herald-go-hor">
                        <div class="site-branding">
                            <h1 class="site-title h1">
                                <a href="<?php echo $BASE_URL;?>" rel="home">
                                    <img class="herald-logo" src="<?php echo $BASE_URL;?>/img/conlatatca_logo.png" alt="Conlatatca" >
                                </a>
                            </h1>
                        </div>
                    </div>
                    <div class="hel-r herald-go-hor">
                        <div class="herald-ad hidden-xs">
                            <a href="<?php echo $BASE_URL;?>">
                                <img src="<?php echo $BASE_URL;?>/img/banner728x90_white.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom herald-header-wraper hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 hel-el">
                    <div class="hel-l">
                        <nav class="main-navigation herald-menu">	
                            <ul id="menu-herald-main" class="menu">
                                <?php echo $this->element('Layout/menu');?>
                            </ul>
                        </nav>
                        <div class="herald-menu-popup-search">
                            <span class="fa fa-search"></span>
                            <div class="herald-in-popup">
                                <form class="herald-search-form" action="<?php echo $BASE_URL;?>/search" method="get">
                                    <input name="s" class="herald-search-input" type="text" value="" placeholder="Type here to search..." />
                                    <button type="submit" class="herald-search-submit"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="hel-r">
                        <ul id="menu-herald-social" class="herald-soc-nav">
                            <?php echo $this->element('Layout/social'); ?>
                        </ul>											
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-trending hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 ">		
                    <div class="row  " data-col="6">
                        <div class="col-lg-2 col-md-2">
                            <div class="herald-post-thumbnail">
                                <a href="https://demo.mekshq.com/herald/?p=203" title="Grandma&#8217;s secret blueberry pie recipe revealed!"><img width="150" height="150" src="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald024-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald024-150x150.jpg 150w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald024-65x65.jpg 65w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald024-180x180.jpg 180w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald024-300x300.jpg 300w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald024-600x600.jpg 600w" sizes="(max-width: 150px) 100vw, 150px" /></a>
                            </div>
                            <h4 class="h6"><a href="https://demo.mekshq.com/herald/?p=203">Grandma&#8217;s secret blueberry pie recipe revealed!</a></h4>						
                        </div>
                    </div>	
                </div>		
            </div>
        </div>
    </div>

</header>

<div id="sticky-header" class="herald-header-sticky herald-header-wraper herald-slide hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 hel-el">
                <div class="hel-l herald-go-hor">
                    <div class="site-branding mini">
                        <span class="site-title h1">
                            <a href="<?php echo $BASE_URL;?>" rel="home">
                                <img class="herald-logo-mini" src="<?php echo $BASE_URL;?>/img/conlatatca_logo_mini.png" alt="Conlatatca">
                            </a>
                        </span>
                    </div>
                </div>
                <div class="hel-r herald-go-hor">
                    <nav class="main-navigation herald-menu">	
                        <ul id="menu-herald-main" class="menu">
                            <?php echo $this->element('Layout/menu');?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="herald-responsive-header" class="herald-responsive-header herald-slide hidden-lg hidden-md">
    <div class="container">
        <div class="herald-nav-toggle"><i class="fa fa-bars"></i></div>
        <div class="site-branding mini">
            <span class="site-title h1">
                <a href="<?php echo $BASE_URL;?>" rel="home">
                    <img class="herald-logo-mini" src="<?php echo $BASE_URL;?>/img/conlatatca_logo_mini.png" alt="Herald" >
                </a>
            </span>
        </div>
        <div class="herald-menu-popup-search">
            <span class="fa fa-search"></span>
            <div class="herald-in-popup">
                <form class="herald-search-form" action="<?php echo $BASE_URL;?>" method="get">
                    <input name="s" class="herald-search-input" type="text" value="" placeholder="Type here to search..." />
                    <button type="submit" class="herald-search-submit"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="herald-mobile-nav herald-slide hidden-lg hidden-md">
    <ul id="menu-herald-main-2" class="herald-mob-nav">
        <?php echo $this->element('Layout/menu');?>
    </ul>

    <ul id="menu-herald-social-1" class="herald-soc-nav">
        <?php echo $this->element('Layout/social'); ?>
    </ul>		
</div>
