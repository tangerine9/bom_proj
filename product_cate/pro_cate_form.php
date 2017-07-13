<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>cate</title>
    <style type="text/css">
        html,
        head,
        body,
        div {
            padding: 0;
            margin: 0;
        }

        #cate_wrap {
            width: 100%;
            height: inherit;
        }

        .cate_top {
            width: inherit;
            height: 200px;
            display: block;
        }

        .cate_classification {
            float: left;
            width: 30%;
            height: inherit;
        }

        .cate_content {
            width: 100%;
            height: 100%;
        }

    </style>

</head>

<body>
    <div id="cate_wrap">
        <form>
            <div class="cate_top">
                <div class="cate_classification" align="center">
                    <h3>카테고리 1</h3>
                    <span id="cate1"></span>
                </div>
                <div class="cate_classification">
                    <h3>카테고리 2</h3>
                    <span id="cate2"></span>
                </div>
                <div class="cate_classification">
                    <h3>카테고리 3</h3>
                    <span id="cate3"></span>
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



    function call_cate(s, w) {
      if (w == 0) { //중분류
            document.getElementById("cate3").innerHTML = "";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cate2").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "./category/cate_proc.php?mNum=" + s, true);
            xmlhttp.send();
        } else { //소분류
            var xmlhttp3 = new XMLHttpRequest();
            xmlhttp3.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cate3").innerHTML = this.responseText;
                }
            };
            xmlhttp3.open("GET", "./category/cate_proc.php?sNum=" + w, true);
            xmlhttp3.send();
        }
    }

    //대분류
    var xmlhttp1 = new XMLHttpRequest();
    xmlhttp1.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("cate1").innerHTML = this.responseText;
        }
    };
    xmlhttp1.open("GET", "./category/cate_proc.php", true);
    xmlhttp1.send();

    function call_pro(a, b, c){
      alert(a + "," + b + "," + c);
      // var frm = document.getElementById('callPro');
      location.replace("./index.php?pin=9&cateB=" + a +"&cateM=" + b + "&cateS=" + c);
      // frm.submit();
    }


</script>
