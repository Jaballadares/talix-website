<div class="w-section section footer">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4"><img class="talix-logo-footer" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Final-Logos-2_6-Talix-RGB-Large1.png">
        </div>
        <div class="w-col w-col-4"></div>
        <div class="w-col w-col-4 w-clearfix"><a class="button footer-button" href="/contact">Let’s Talk</a>
        </div>
      </div>
      <div>
        <div class="divider"></div>
      </div>
      <div>
        <div class="w-row">

          <div class="w-col w-col-4"></div>
          <div class="w-col w-col-12">
            <div class="footer-copyright">Copyright 2015 Talix. All Rights Reserved.</div>
          </div>
        </div>
      </div>
    </div>
  </div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68174886-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
/**
 * jQuery Unveil
 * A very lightweight jQuery plugin to lazy load images
 * http://luis-almeida.github.com/unveil
 *
 * Licensed under the MIT license.
 * Copyright 2013 Luís Almeida
 * https://github.com/luis-almeida
 */

;(function($) {

  $.fn.unveil = function(threshold, callback) {

    var $w = $(window),
        th = threshold || 0,
        retina = window.devicePixelRatio > 1,
        attrib = retina? "data-src-retina" : "data-src",
        images = this,
        loaded;

    this.one("unveil", function() {
      var source = this.getAttribute(attrib);
      source = source || this.getAttribute("data-src");
      if (source) {
        this.setAttribute("src", source);
        if (typeof callback === "function") callback.call(this);
      }
    });

    function unveil() {
      var inview = images.filter(function() {
        var $e = $(this);
        if ($e.is(":hidden")) return;

        var wt = $w.scrollTop(),
            wb = wt + $w.height(),
            et = $e.offset().top,
            eb = et + $e.height();

        return eb >= wt - th && et <= wb + th;
      });

      loaded = inview.trigger("unveil");
      images = images.not(loaded);
    }

    $w.on("scroll.unveil resize.unveil lookup.unveil", unveil);

    unveil();

    return this;

  };

})(window.jQuery || window.Zepto);


$(document).ready(function(){
  $('.customer-image').unveil();
});

</script>


	</body>

</html>
