<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/>
 <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
<div class="" style="border:0px;" align="center">
  <a id="kakao-login-btn"></a>
  <script type='text/javascript'>
  var id;
    //<![CDATA[
      // 사용할 앱의 JavaScript 키를 설정해 주세요.
   Kakao.init('df3c556e6bfba2b0c61ef1ea87ede4fc');
      // 카카오 로그인 버튼을 생성합니다.
      Kakao.Auth.createLoginButton({
        container: '#kakao-login-btn',
        success: function(authObj) {
          // 로그인 성공시, API를 호출합니다.
          Kakao.API.request({
            url: '/v1/user/update_profile',
            success: function(res) {

               alert(JSON.stringify(res));

            },
            fail: function(error) {
              alert(JSON.stringify(error));
            }
          });
        },
        fail: function(err) {
          alert(JSON.stringify(err));
        }
      });
    //]]>
  </script>
</div>
