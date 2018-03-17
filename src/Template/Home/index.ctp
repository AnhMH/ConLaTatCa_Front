
<div class="herald-section container herald-no-sid " id="herald-section-0">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <div class="herald-module col-lg-12 col-md-12 col-sm-12" id="herald-module-0-0">
                    <div class="herald-fa-wrapper herald-fa-2 ">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="herald-fa-list">
                                    <?php if (!empty($data['sliders'])): ?>
                                        <?php foreach ($data['sliders'] as $slide): ?>
                                            <?php echo $this->element('Post/slider', $slide); ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="herald-section container " id="herald-section-1">
    <div class="row">
        <div class="herald-main-content col-lg-9 col-md-9 col-mod-main">
            <div class="row">
                <?php if (!empty($data['breaking_news'])): ?>
                    <div class="herald-module col-lg-12 col-md-12 col-sm-12" id="herald-module-1-0" data-col="12">
                        <div class="herald-mod-wrap">
                            <div class="herald-mod-head ">
                                <div class="herald-mod-title">
                                    <h2 class="h6 herald-mod-h herald-color">Breaking News</h2>
                                </div>
                            </div>
                        </div>			
                        <div class="row herald-posts row-eq-height ">
                            <?php foreach ($data['breaking_news'] as $p): ?>
                                <?php echo $this->element('Post/breaking_new', $p); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="herald-module col-lg-12 col-md-12 col-sm-12" id="herald-module-1-1" data-col="12">
                    <div class="herald-mod-wrap">
                        <div class="herald-mod-head herald-cat-6">
                            <div class="herald-mod-title">
                                <h2 class="h6 herald-mod-h herald-color">Entertainment<i class="fa fa-angle-down herald-sub-cat-icon" aria-hidden="true"></i>
                                    <div class="herald-mod-subnav-mobile">
                                        <a href="https://demo.mekshq.com/herald/?cat=48">Celebrities</a>
                                        <a href="https://demo.mekshq.com/herald/?cat=43">Movies</a>
                                        <a href="https://demo.mekshq.com/herald/?cat=42">Music</a>
                                    </div>
                                </h2>
                            </div>
                            <div class="herald-mod-subnav">
                                <a href="https://demo.mekshq.com/herald/?cat=48">Celebrities</a>
                                <a href="https://demo.mekshq.com/herald/?cat=43">Movies</a>
                                <a href="https://demo.mekshq.com/herald/?cat=42">Music</a>
                            </div>
                            <div class="herald-mod-actions">
                                <a class="herald-all-link" href="https://demo.mekshq.com/herald/?cat=6">View All</a>
                                <div class="herald-slider-controls" data-col="4" data-autoplay="0"></div>
                            </div>
                        </div>
                    </div>			
                    <div class="row herald-posts row-eq-height herald-slider">
                        <?php for ($i = 1; $i < 6; $i++): ?>
                            <article class="herald-lay-f post type-post status-publish format-standard has-post-thumbnail hentry">
                                <div class="herald-post-thumbnail herald-format-icon-middle">
                                    <a href="https://demo.mekshq.com/herald/?p=171" title="Start recording like a pro with the help of these 6 tips">
                                        <img width="300" height="168" src="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald043-300x168.jpg" class="attachment-herald-lay-f size-herald-lay-f wp-post-image" alt="" srcset="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald043-300x168.jpg 300w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald043-990x556.jpg 990w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald043-1320x742.jpg 1320w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald043-470x264.jpg 470w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald043-640x360.jpg 640w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald043-215x120.jpg 215w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald043-414x232.jpg 414w" sizes="(max-width: 300px) 100vw, 300px" />							
                                    </a>
                                </div>
                                <div class="entry-header">
                                    <span class="meta-category meta-small">
                                        <a href="https://demo.mekshq.com/herald/?cat=6" class="herald-cat-6">Entertainment</a>
                                    </span>
                                    <h2 class="entry-title h5">
                                        <a href="https://demo.mekshq.com/herald/?p=171">Start recording like a pro with the help of these 6 tips</a>
                                    </h2>
                                    <div class="entry-meta meta-small">
                                        <div class="meta-item herald-views">4,613 Views</div>
                                        <div class="meta-item herald-rtime">2 Min Read</div>
                                    </div>
                                </div>
                            </article>
                        <?php endfor; ?>
                    </div>
                </div>
                <?php echo $this->element('Banner/728x90'); ?>
                <div class="herald-module col-lg-4 col-md-4 col-sm-4" id="herald-module-1-3" data-col="4">
                    <div class="herald-mod-wrap">
                        <div class="herald-mod-head herald-cat-2">
                            <div class="herald-mod-title">
                                <h2 class="h6 herald-mod-h herald-color">Travel</h2>
                            </div>
                        </div>
                    </div>			
                    <div class="row herald-posts row-eq-height ">
                        <article class="herald-lay-f herald-lay-f1 type-post status-publish format-standard has-post-thumbnail hentry category-travel">
                            <div class="herald-ovrld">		
                                <div class="herald-post-thumbnail">
                                    <a href="https://demo.mekshq.com/herald/?p=140" title="The top 10 traveling taboos you should break">
                                        <img width="300" height="200" src="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120-300x200.jpg" class="attachment-herald-lay-b1 size-herald-lay-b1 wp-post-image" alt="" srcset="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120-300x200.jpg 300w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120-768x512.jpg 768w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120-1024x683.jpg 1024w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120-414x276.jpg 414w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120-470x313.jpg 470w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120-640x426.jpg 640w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120-130x86.jpg 130w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120-187x124.jpg 187w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120-990x660.jpg 990w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120.jpg 1320w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120-600x400.jpg 600w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald120-800x533.jpg 800w" sizes="(max-width: 300px) 100vw, 300px" />
                                    </a>
                                </div>
                                <div class="entry-header herald-clear-blur">
                                    <span class="meta-category">
                                        <a href="https://demo.mekshq.com/herald/?cat=2" class="herald-cat-2">Travel</a>
                                    </span>
                                    <h2 class="entry-title h6">
                                        <a href="https://demo.mekshq.com/herald/?p=140">The top 10 traveling taboos you should break</a>
                                    </h2>
                                    <div class="entry-meta">
                                        <div class="meta-item herald-date">
                                            <span class="updated">1 week ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="herald-lay-g post type-post status-publish format-standard has-post-thumbnail hentry">
                            <div class="row">
                                <div class="col-lg-4 col-xs-3 col-sm-4">
                                    <div class="herald-post-thumbnail">
                                        <a href="https://demo.mekshq.com/herald/?p=125" title="Why do people think the beach is a good idea?">
                                            <img width="74" height="55" src="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald091-74x55.jpg" class="attachment-herald-lay-g1 size-herald-lay-g1 wp-post-image" alt="" srcset="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald091-74x55.jpg 74w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald091-111x83.jpg 111w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald091-215x161.jpg 215w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald091-300x225.jpg 300w" sizes="(max-width: 74px) 100vw, 74px" />			
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-9 col-sm-8 herald-no-pad">
                                    <div class="entry-header">
                                        <span class="meta-category meta-small">
                                            <a href="https://demo.mekshq.com/herald/?cat=2" class="herald-cat-2">Travel</a>
                                        </span>
                                        <h2 class="entry-title h7">
                                            <a href="https://demo.mekshq.com/herald/?p=125">Why do people think the beach is a good idea?</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>


                <div class="herald-module col-lg-4 col-md-4 col-sm-4" id="herald-module-1-4" data-col="4">
                    <div class="herald-mod-wrap">
                        <div class="herald-mod-head herald-cat-3">
                            <div class="herald-mod-title">
                                <h2 class="h6 herald-mod-h herald-color">Fashion</h2>
                            </div>
                        </div>
                    </div>			
                    <div class="row herald-posts row-eq-height ">
                        <article class="herald-lay-f herald-lay-f1 post type-post status-publish format-standard has-post-thumbnail hentry">
                            <div class="herald-ovrld">		
                                <div class="herald-post-thumbnail">
                                    <a href="https://demo.mekshq.com/herald/?p=182" title="The beginner&#8217;s guide to buying the right skirt">
                                        <img width="300" height="200" src="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104-300x200.jpg" class="attachment-herald-lay-b1 size-herald-lay-b1 wp-post-image" alt="" srcset="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104-300x200.jpg 300w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104-768x513.jpg 768w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104-1024x683.jpg 1024w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104-414x276.jpg 414w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104-470x313.jpg 470w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104-640x426.jpg 640w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104-130x86.jpg 130w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104-187x124.jpg 187w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104-990x661.jpg 990w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104.jpg 1320w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104-600x400.jpg 600w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald104-800x534.jpg 800w" sizes="(max-width: 300px) 100vw, 300px" />
                                    </a>
                                </div>
                                <div class="entry-header herald-clear-blur">
                                    <span class="meta-category">
                                        <a href="https://demo.mekshq.com/herald/?cat=3" class="herald-cat-3">Fashion</a>
                                    </span>
                                    <h2 class="entry-title h6">
                                        <a href="https://demo.mekshq.com/herald/?p=182">The beginner&#8217;s guide to buying the right skirt</a>
                                    </h2>
                                    <div class="entry-meta">
                                        <div class="meta-item herald-date">
                                            <span class="updated">1 week ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>



                        <article class="herald-lay-g post type-post status-publish format-standard has-post-thumbnail hentry">
                            <div class="row">
                                <div class="col-lg-4 col-xs-3 col-sm-4">
                                    <div class="herald-post-thumbnail">
                                        <a href="https://demo.mekshq.com/herald/?p=144" title="How to make your accessories look like a million bucks">
                                            <img width="74" height="55" src="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald125-74x55.jpg" class="attachment-herald-lay-g1 size-herald-lay-g1 wp-post-image" alt="" srcset="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald125-74x55.jpg 74w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald125-111x83.jpg 111w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald125-215x161.jpg 215w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald125-300x225.jpg 300w" sizes="(max-width: 74px) 100vw, 74px" />			
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-9 col-sm-8 herald-no-pad">
                                    <div class="entry-header">
                                        <span class="meta-category meta-small">
                                            <a href="https://demo.mekshq.com/herald/?cat=3" class="herald-cat-3">Fashion</a>
                                        </span>
                                        <h2 class="entry-title h7">
                                            <a href="https://demo.mekshq.com/herald/?p=144">How to make your accessories look like a million bucks</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="herald-module col-lg-4 col-md-4 col-sm-4" id="herald-module-1-5" data-col="4">
                    <div class="herald-mod-wrap">
                        <div class="herald-mod-head herald-cat-4">
                            <div class="herald-mod-title">
                                <h2 class="h6 herald-mod-h herald-color">Food & Drinks</h2>
                            </div>
                        </div>
                    </div>			
                    <div class="row herald-posts row-eq-height ">
                        <article class="herald-lay-f herald-lay-f1 post type-post status-publish format-standard has-post-thumbnail hentry">
                            <div class="herald-ovrld">		
                                <div class="herald-post-thumbnail">
                                    <a href="https://demo.mekshq.com/herald/?p=174" title="This is how coffee can help you predict the future">
                                        <img width="300" height="200" src="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/05/herald034-e1447696639921-300x200.jpg" class="attachment-herald-lay-b1 size-herald-lay-b1 wp-post-image" alt="" srcset="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/05/herald034-e1447696639921-300x200.jpg 300w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/05/herald034-e1447696639921-414x276.jpg 414w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/05/herald034-e1447696639921-470x313.jpg 470w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/05/herald034-e1447696639921-640x426.jpg 640w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/05/herald034-e1447696639921-130x86.jpg 130w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/05/herald034-e1447696639921-187x124.jpg 187w" sizes="(max-width: 300px) 100vw, 300px" />
                                    </a>
                                </div>
                                <div class="entry-header herald-clear-blur">
                                    <span class="meta-category">
                                        <a href="https://demo.mekshq.com/herald/?cat=4" class="herald-cat-4">Food &amp; Drinks</a>
                                    </span>
                                    <h2 class="entry-title h6">
                                        <a href="https://demo.mekshq.com/herald/?p=174">This is how coffee can help you predict the future</a>
                                    </h2>
                                    <div class="entry-meta">
                                        <div class="meta-item herald-date">
                                            <span class="updated">1 week ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="herald-lay-g post type-post status-publish format-image has-post-thumbnail hentry">
                            <div class="row">
                                <div class="col-lg-4 col-xs-3 col-sm-4">
                                    <div class="herald-post-thumbnail">
                                        <a href="https://demo.mekshq.com/herald/?p=187" title="11 reasons why making your own food is essential">
                                            <img width="74" height="55" src="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald003-74x55.jpg" class="attachment-herald-lay-g1 size-herald-lay-g1 wp-post-image" alt="" srcset="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald003-74x55.jpg 74w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald003-111x83.jpg 111w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald003-215x161.jpg 215w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald003-300x225.jpg 300w" sizes="(max-width: 74px) 100vw, 74px" />			
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-9 col-sm-8 herald-no-pad">
                                    <div class="entry-header">
                                        <span class="meta-category meta-small">
                                            <a href="https://demo.mekshq.com/herald/?cat=4" class="herald-cat-4">Food &amp; Drinks</a>
                                        </span>
                                        <h2 class="entry-title h7">
                                            <a href="https://demo.mekshq.com/herald/?p=187"><span class="herald-format-icon"><i class="fa fa-picture-o"></i></span>11 reasons why making your own food is essential</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="herald-sidebar col-lg-3 col-md-3 herald-sidebar-right">
            <div id="herald_posts_widget-8" class="widget herald_posts_widget">
                <h4 class="widget-title h6"><span>Media of the day</span></h4>
                <div class="row">
                    <article class="herald-lay-f post type-post status-publish format-video has-post-thumbnail hentry post_format-post-format-video">
                        <div class="herald-post-thumbnail herald-format-icon-middle">
                            <a href="https://demo.mekshq.com/herald/?p=61" title="Add some flair to your relationship: go hiking together">
                                <img width="300" height="168" src="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald058-300x168.jpg" class="attachment-herald-lay-f size-herald-lay-f wp-post-image" alt="" srcset="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald058-300x168.jpg 300w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald058-990x556.jpg 990w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald058-1320x742.jpg 1320w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald058-470x264.jpg 470w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald058-640x360.jpg 640w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald058-215x120.jpg 215w, https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/11/herald058-414x232.jpg 414w" sizes="(max-width: 300px) 100vw, 300px" />				
                                <span class="herald-format-icon"><i class="fa fa-play"></i></span>			
                            </a>
                        </div>
                        <div class="entry-header">
                            <h2 class="entry-title h5">
                                <a href="https://demo.mekshq.com/herald/?p=61">Add some flair to your relationship: go hiking together</a>
                            </h2>
                        </div>
                    </article>
                </div>
            </div>
            <?php echo $this->element('Banner/300x250'); ?>
        </div>
    </div>
</div>
<div class="herald-section container " id="herald-section-3">
    <div class="row">
        <div class="herald-main-content col-lg-9 col-md-9 col-mod-main">
            <div class="row">
                <div class="herald-module col-lg-12 col-md-12 col-sm-12" id="herald-module-3-0" data-col="12">
                    <div class="herald-mod-wrap">
                        <div class="herald-mod-head ">
                            <div class="herald-mod-title">
                                <h2 class="h6 herald-mod-h herald-color">Latest Articles</h2>
                            </div>
                        </div>
                    </div>			
                    <div class="row herald-posts row-eq-height ">
                        <?php foreach ($latest_post as $k => $p): ?>
                            <?php if ($k == 0): ?>
                                <?php echo $this->element('Post/latest_post1', $p); ?>
                            <?php else: ?>
                                <?php echo $this->element('Post/latest_post', $p); ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <nav class="herald-pagination herald-load-more">
                        <a href="<?php echo $BASE_URL;?>" >Load More</a>		
                        <div class="herald-loader">
                            <div class="spinner">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>			
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="herald-sidebar col-lg-3 col-md-3 herald-sidebar-right">
            <?php echo $this->element('Layout/widget_categories'); ?>
            <?php echo $this->element('Banner/300x316'); ?>
        </div>
    </div>
</div>