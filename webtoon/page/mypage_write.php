<!--
타이틀
카워드
파일
유료/무료
투표기능
투표 - 항목 (배열)
투표 - 마감시간
-->

<div class="inner">
    <style type="text/css">
        .write_div_base {
            display: block;
            position: relative;
        }

    </style>
    <div class="write_div_base">
        <div class="write_div_base" align="center" style="border:1px solid; width:70%; height:200px; float:left;">
            운영 방침

        </div>
        <div class="write_div_base" align="center" style="border:1px solid;  width:25%; height:200px; margin-left:3%; float:left; ">
            광고
        </div>
    </div>
    <div class="write_div_base" style="margin-top:5px; ">
        <form class="" action="#" method="post">
            <div class="write_div_base" align="center" style="background-color:#FFA2A2; width:40%; float:right; clear:both; ">
                <h1 style="color:#fff; ">19금<input type="radio" name="19금" value="19금"></h1>
            </div>
            <style>
            #thumnail {
              width: 200px;
              height: 200px;
              background-color: #DDD;
            }
            </style>
            <div id="thumnail">
                <!--<img src="http://place-hold.it/300x500/666/fff/000"/>-->

            </div>
            <input type="file" onclick="imgprechk('thumnail','')">
            <div class="write_div_base" style="border:1px solid; clear:both;">
                <b>&nbsp;&nbsp;타이틀 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</b>
                <input type="text" size="100px;" name="" value="">
            </div>

            <div style="margin-top:10px; text-align:left; border:1px solid; ">
                키워드 &nbsp; <input type="text" name="" class="input_data" size="30" placeholder="태그입력" /> &nbsp; <span>* #을 맨앞에 입력한 뒤 태그를 입력하세요.</span>
            </div>

            <div class="">
                <div class="" style="float:left; width:28%; display:block;">
                    일러스트
                </div>
                <div align="center" class="" style="float:left; width:68%%;">
                    <p>가로 사이즈는 690 픽셀 이하이며, 세로사이즈는 제한이 없습니다.</p>
                    <p>총 용량제한은 xxMB이하이며, 파일1개의 용량제한은 xMB입니다.</p>
                    <p>파일 개수는 10개로 제한됩니다.</p>
                    <p>파일 형태는 gif,jpg로 제한됩니다.</p>
                </div>
            </div>

            <div class="" style="display:block;">
                <div class="" style="float:left; width:40%; boder:1px solid;">
                    펜 조공케릭 고르기
                </div>
                <div align="center" class="" style=" width:58%; ">
                    <input type="text" name="" value="" placeholder=" 작가 한마디 ex 작품구경후 펜 조공은 에티켓입니다. 펜1개만 줍쇼ㅠ">
                </div>
            </div>

            <div class="" style="display:block;">
                파일첨부 : xx 픽셀 권장
            </div>

            <div class="" align="center" style="display:block;height:200px; border:1px solid;">
                작가의 말[일러스트]
            </div>

            <div class="" style="border:1px solid; display:inline;">
                <div class="" style=" float:left;">
                    <input type="radio" name="무료" value="" />무료
                    <input type="radio" name="유료" value="" />유료&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="" style=" float:left;">
                    펜2개
                </div>
            </div>

            <div class="" style="border:1px solid; clear:both;">
                <div class="" style=" float:left;">
                    <input type="radio" name="" value="" />투표기능 사용 &nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="" style=" float:left;">
                    펜2개
                </div>
            </div>

            <div class="" style="display:block; clear:both; border:1px solid; height:100px;">
                <span>투표 제목 입력</span> 항목 입력....
            </div>

            <style>
            #goUpload_btn {
              display: block;
              width: 100%;
              height: 40px;
              line-height: 40px;
              text-align: center;
              font-weight: bold;
              background-color: lightblue;
              color: #FFF;
            }
            </style>
            <a id="goUpload_btn" onclick="goUpload()" href="#">등록하기</a>


        </form>

        <script>
        function callFile(target) {
          var targetId = '#'+target;
          $(target).click();
       }

        function imgprechk(target,input) {
           var fileObject = document.getElementById(target);
           var fileName = fileObject.files[0].name;    // 파일명
           var fileSize = fileObject.files[0].size;    // 파일 크기(byte)
           var fileType = fileObject.files[0].type;    // 파일 MIME Type

           // 형 체크
           if (fileType == 'image/jpg' || fileType == 'image/jpeg' || fileType == 'image/png' || fileType == 'image/gif') {
              // 파일 사이즈 체크
              if (fileSize > 2000000) {
                 alert('이미지 용량은 2MB로 제한하고 있습니다.');
                 return false;
              } else {
                 var targetId = '#'+target+'_preview';
                  if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                       //$(targetId).attr('src', e.target.result);
                       var url = 'url('+e.target.result+')';
                       $(targetId).css("background-image", url);
                    }
                    reader.readAsDataURL(input.files[0]);
                  }
              }
           } else {
              alert('이미지형식은 JPG / JPEG / PNG / GIF 만 가능합니다.');
              return false;
           }

        }

        function goUpload() {
            //document.shop_add.submit();
        }

        </script>
    </div>
</div>
