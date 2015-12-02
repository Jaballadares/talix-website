<?php get_header(); ?>

<div class="w-section cis-section-1">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-9">
          <h1 class="blog-heading-1">Welcome to the Talix Blog</h1>
          <h2 class="blog-heading-2">The Hub that Powers Intelligent Conversations</h2>
        </div>
        <div class="w-col w-col-3"><img class="blog-image-1" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Blog-Image.png" data-ix="fade-in-on-load">
        </div>
      </div>
    </div>
  </div>
  <div class="w-section cis-section-2" id="features">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-2 blog-left-column mobile-hide">
          <?php dynamic_sidebar("sidebar-left"); ?>
      <div class="authors-list">
          <p class="p-green-header">Post by Author</p>
          <?php wp_list_authors($args); ?>
        </div>
        </div>

        <div class="w-col w-col-7">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div>
           <h3 class="blog-post-heading-1">
            <a class="w-inline-block blog-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <div class="w-row blog-post-info">
                <div class="w-col w-col-4">
                  <div class="blog-author">Author: <?php the_author_posts_link(); ?></div>
                </div>
                <div class="w-col w-col-4">
                  <div class="blog-date"><span class="date-container">Date:</span> <?php the_time("F j, Y"); ?></div>
                </div>
                <div class="w-col w-col-4">
                  <div class="blog-topic">Topic: <?php printf(__(get_the_category_list(', '))) ?></div>
              </div>
              </div>
              <div class="featured-image-blog-container">
              <?php if ( has_post_thumbnail()) { ?>
            <a href="<?php the_permalink() ?>" class="featured-image-blog">
              <?php the_post_thumbnail('small'); ?>
            </a>
            <?php } ?>
            </div>


            <div>


            <p><?php the_excerpt(); ?></p>
            <div class="w-row">
              <div class="w-col w-col-2"><h5><a class="w-clearfix w-inline-block blog-read-more" href="<?php echo get_permalink(); ?>"></a></h5>
              </div>
              <div class="w-col w-col-2"></div>
              <div class="w-col w-col-2"></div>
              <div class="w-col w-col-2"></div>
              <div class="w-col w-col-2"></div>
              <div class="w-col w-col-2"></div>
            </div>
          </div>
        </div>

            <div class="divider"></div>
                <?php endwhile; endif; ?>
          </div>
  <div class="w-col w-col-3 side-column">
    <h3 class="h3-green-header twitter-title">Read Our Twitter Feed</h3>
<a class="twitter-timeline" href="https://twitter.com/TalixHealth" data-widget-id="648617076454625280">Tweets by @TalixHealth</a>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <h3 class="h3-green-header embed-video-title">Watch Our Latest Videos</h3>
    <div class="video-wrapper">
    <?php the_field('video_embed_code'); ?>

    <div class="youtube-player"
    data-id="oRZ2UgtL7WY"></div>
    <div class="youtube-player second-video" data-id="ld2GPhgg1KU"></div>
    </div>


    <h3 class="h3-green-header">Play our HealthTaxonomy Game</h3><a class="w-button button sidebar-button" href="http://healthlinetaxonomygame.herokuapp.com/">Taxonomy Game</a>
  </div>

<div class="w-clearfix"></div>
          <?php bones_page_navi(); ?>



        </div>
      </div>

      </div>
    </div>
  </div>
  <script>
  (function() {
    var v = document.getElementsByClassName("youtube-player");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = labnolThumb(v[n].dataset.id);
        p.onclick = labnolIframe;
        v[n].appendChild(p);
    }
})();

function labnolThumb(id) {
    return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
}

function labnolIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0?fs=1&showinfo=0?modestbranding=1");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    iframe.setAttribute("rel", "0");
    iframe.setAttribute("allowfullscreen", '');
    this.parentNode.replaceChild(iframe, this);
}
  </script>
<?php get_footer(); ?>
