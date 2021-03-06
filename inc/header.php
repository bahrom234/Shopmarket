<?
require_once './bd.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Clothing Template, About</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--
Template 2062 Clothing 
http://www.tooplate.com/view/2062-clothing
-->
    <link href="tooplate_style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
    <link rel="stylesheet" href="/css.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/ddsmoothmenu.js">
        /***********************************************
         * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
         * This notice MUST stay intact for legal use
         * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
         ***********************************************/
    </script>

    <script type="text/javascript">
        ddsmoothmenu.init({
            mainmenuid: "tooplate_menu", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })
    </script>

    <link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

    <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
    <script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>


    <script type="text/javascript">
        $(document).ready(function() {  

            $("#carousel").dualSlider({
                auto: false,
                autoDelay: 6000,
                easingCarousel: "swing",
                easingDetails: "easeOutBack",
                durationCarousel: 1000,
                durationDetails: 600
            });

        });
    </script>

    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <script type="text/JavaScript" src="js/slimbox2.js"></script>

</head>

<body>

    <div id="tooplate_wrapper">
        <div id="tooplate_header">
            <div id="header_top">

                <div id="site_title"><a href="#">Clothing Template</a></div>
                <div id="tooplate_menu" class="ddsmoothmenu">
                    <ul>
                        <?
                        $select = mysqli_query($bd, "SELECT * FROM `header`");
                        $mylanguage=mysqli_fetch_assoc($select);
                        do{?>
                        <li><a href="<?=$mylanguage['href']?>"><?=$mylanguage['text']?></a></li> 
                        <?}while( $mylanguage=mysqli_fetch_assoc($select));?>   
                    </ul>
                    <br style="clear: left" />
                </div> <!-- end of tooplate_menu -->
            </div> <!-- END of header top -->

            <div id="header_bottom">
                <p>
                    <?
                    $select = mysqli_query($bd, "SELECT * FROM `headersec`");
                    $mylanguage=mysqli_fetch_assoc($select);
                    do{?>
                    <a href="<?=$mylanguage['href']?>"><?=$mylanguage['text']?></a>
                    <?}while($mylanguage=mysqli_fetch_assoc($select));?>   
                    <span>Item in Cart ( 10 )</span>
                </p>

                <div id="tooplate_search">
                    <form action="#" method="get">
                        <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                        <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                    </form>
                </div>
            </div> <!-- END of header bottom -->
        </div> <!-- END of header -->

        