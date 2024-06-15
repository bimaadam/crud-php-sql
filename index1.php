<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="stylesesi6.css" rel="stylesheet" type="text/css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix">
  <div id="navbar"><?php include('navbar.php'); ?></div>
  <div id="tombol">
    <div id="a"><img src="img/jurusan.jpg"></div>
    <div id="b"><img src="img/inventaris.jpg"></div>
    <div id="c"><img src="img/jadwalkul.jpg"></div>
    <div id="d"><img src="img/kelas.jpg"></div>
    <div id="e"><img src="img/kerjapraktek.jpg"></div>
    <div id="f"><img src="img/kurikulum.jpg"></div>
    <div id="g"><img src="img/nilai.jpg"></div>
    <div id="h"><img src="img/elearning-icon.png"></div>
    <div id="i"><img src="img/dosen.jpg"></div>
    <div id="j"><img src="img/mhs.jpg"></div>
  "</div>
  <div id="main"><?php include('jumbotron.php'); ?></div>
  <div id="footer">copyright@2023 adesesi6</div>
</div>
</body>
</html>
