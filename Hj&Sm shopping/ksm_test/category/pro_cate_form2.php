
    <style type="text/css">
      html ,head,body,div{
        padding: 0;
        margin: 0;
      }
      #cate_wrap{
        width: 100%;
        height: inherit;
      }
      .cate_top{
        width: inherit;
        height: 200px;
        display: block;
      }
      .cate_classification{
        float:left;
        width: 30%;
        height: inherit;
      }
      .cate_content{
        width: 100%;
        height: 100%;

      }
    </style>
    <div id="cate_wrap">

      <form>
      <div class="cate_top" >
        <div class="cate_classification" align="center">
            <h3>카테고리 1</h3>
            <span id="cate1"></span>
        </div>
        <div  class="cate_classification">
            <h3>카테고리 2</h3>
            <span id="cate2"></span>
        </div>
        <div class="cate_classification">
            <h3>카테고리 3</h3>
            <span id="cate3"></span>
        </div>
    </div>
    <div class="cate_content">
      sss
    </div>
    </form>
  </div>
<script>
  function call_cate(s, ss){
    if (ss==1) {
      document.getElementById("cate3").innerHTML = "";
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById("cate2").innerHTML = this.responseText;
          }
      };
      xmlhttp.open("GET", "./category/cate_middle.php?mNum=" + s, true);
      xmlhttp.send();
    } else if (ss==2){
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById("cate3").innerHTML = this.responseText;
          }
      };
      xmlhttp.open("GET", "./category/cate_small.php?sNum=" + s, true);
      xmlhttp.send();
    }
  }

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("cate1").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("GET", "./category/cate_big2.php", true);
  xmlhttp.send();
</script>
