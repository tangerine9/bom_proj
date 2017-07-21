<div style="height:50px;">
 <a id="kakaoLoginBtn"></a>
</div>
<script>
 Kakao.init('df3c556e6bfba2b0c61ef1ea87ede4fc');
    Kakao.Auth.createLoginButton({
      //approvalType: 'project',
      container: '#kakaoLoginBtn',
      success: function(authObj) {
        Kakao.API.request({
          url: '/v1/user/me',
          always: function(res) {
            console.log(res);
          }
        });
      }
    });
</script>
