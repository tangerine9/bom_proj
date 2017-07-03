<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/css/bom/basic.css" type="text/css">
    <!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="/lib/dist/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="/lib/dist/jquery.bxslider.css" rel="stylesheet" />
    <meta charset="utf-8">
  </head>
  <body>

    <ul class="bxslider" >
  <li><img src="/images/bxslider/im1.jpg" width="100%" height="280"/></li>
  <li><img src="/images/bxslider/4.jpg" width="100%" height="280"/></li>
  <li><img src="/images/bxslider/im3.jpg" width="100%" height="280"/></li>
  <li><img src="/images/bxslider/3.jpg" width="100%" height="280"/></li>
</ul>
<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider({
      pager:false
  });
});
</script>
  </body>
</html>
