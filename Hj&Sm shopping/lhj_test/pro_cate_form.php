
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cate</title>
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

  </head>
  <body>
    <div id="cate_wrap">
      <form>
      <div class="cate_top" >
        <div class="cate_classification" align="center">
            <h3>카테고리 1</h3>
            <p><input type="radio" name="cate" value="1" onchange="call_cate(this.value)" /> 의류브랜드</p>
            <p>
              <input  type="radio" name="cate" value="2" onchange="call_cate(this.value)" /> 의류</p>
            <p>
              <input type="radio" name="cate" value="3"  /> 뷰티/잡화</p>
        </div>
        <div  class="cate_classification">
            <h3>카테고리 2</h3>
            <span id="cate2"></span>
        </div>
        <div class="cate_classification">
            <h3>카테고리 3</h3>
        </div>
    </div>
    <div class="cate_content">
      ss
    </div>
    </form>
  </div>

  </body>
</html>
<script>
  function call_cate(s){
    if (s.length == 0) {
            document.getElementById("cate2").innerHTML = "";
            // document.getElementById("cate3").innerHTML = "";
            return;
        } else if (1){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cate2").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "./cate_big.php?mNum=" + s, true);
            xmlhttp.send();
        }
  }
</script>
