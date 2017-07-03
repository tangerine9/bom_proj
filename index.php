<html>

<head>
    <!-- <link rel="stylesheet" href="/css/bom/header.css" type="text/css"> -->
    <link rel="stylesheet" href="/css/bom/basic.css" type="text/css">
    <title>testpage</title>
    <style type="text/css">
    #header {

      width: 100%;
    margin: 0;
    padding: 0;

    }

    #header .header_top{
      position:fixed;
      background-color: #000;
      width: 100%;
      height: 40px;
      z-index: 7900;
      float:left;
    }

    #header .header_login{
        width: 1140px;
        height: 40px;
        margin: 0 auto;
    z-index: 7910;
    }
    #header .header_menu_lb{
      position: relative;
      background-color: #fff;
      height: 50px;
    }
    #header .header_menu{
      float:left;
    }


    </style>
</head>

<body>
    <div id="header">
        <div class="header_top">
            <div style="height:40px; width:50px; float:left; "></div>
            <div class="header_login"> </div>
        </div>
        <div style="height:35px; position:relative;"> </div>

        <div class=header_slide style="position:relative;">
            <?php  include'/bomtv/slider.php'  ?>
        </div>
        <div class="header_menu_lb">
          <div style="height:60px; width:112px; float:left;  "></div>
            <div class=header_menu style="">
                <div class="header_menubar  ">
                    <?php  include'/bomtv/headermenu.php'  ?>
                </div>
            </div>
        </div>
    </div>


    <div id="body">

    </div>

    <div id="footer">

    </div>

</body>

<footer>

</footer>

</html>
