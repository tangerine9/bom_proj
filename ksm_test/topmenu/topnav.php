<style type="text/css">
@media only screen and (min-width: 601px){
nav  {
  height: 64px;
  line-height: 64px;
}
}

nav {
    color: #fff;
    background-color: #ee6e73;
    width: 100%;
}
</style>

<nav>
  <div class="nav-wrapper">
    <a href="#" class="brand-logo center">Logo</a>
    <ul id="nav-mobile" class="left hide-on-med-and-down">
      <li><a  onclick="qa(1)">공지사항</a></li>
      <li><a onclick="qa(2)">Q&A</a></li>
      <li><a onclick="qa(3)">카테고리</a></li>
      <?
      if (isset($_SESSION['sId']) && $_SESSION['sType']==1) {
        ?>
        <li><a onclick="qa(4)">상품등록</a></li>
        <?
      }
      ?>
    </ul>
  </div>
</nav>
