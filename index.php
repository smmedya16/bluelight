<?php
session_start();
include("ayar.php");
if(!isset($_SESSION["giris"]))
{
header("Location:g_girisi.php");
exit;

}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- Mirrored from store.bilgeoyuncu.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Dec 2015 14:39:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<script type="text/javascript" src="s/swfobject.js"></script>
<script type="text/javascript" src="s/prototype-1.6.0.2.js"></script>
<script type="text/javascript" src="s/scriptaculous.js"></script>
<script type="text/javascript" src="s/javascript.js"></script>
<script type="text/javascript" src="s/main.js"></script>
<script type="text/javascript" src="s/cluster.js"></script>
<script type="text/javascript" src="s/gamehighlightplayer.js"></script>
<script type="text/javascript" src="s/comments.js"></script>
<meta name="viewport" content="user-scalable=no" />
<link href='http://fonts.googleapis.com/css?family=Cuprum&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href="s/base_buttons.css" rel="stylesheet" type="text/css" />
<link href="s/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="s/dropdown/themes/nvidia.com/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />
<link href="s/store.css" rel="stylesheet" type="text/css" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" >

</head>
<body>

<br>

<div class="wrap">
<div class="menu2">
<ul id="nav" class="dropdown">
<li><a href="index.html">Sunulan Ürünler</a></li>
<li><a class="dir">Oyunlar</a>
<ul>
<li><a href="index1e6e.html?a=catalog&amp;id=1">Aksiyon</a></li><li><a href="indexa86e.html?a=catalog&amp;id=2">Macera</a></li><li><a href="indexe358.html?a=catalog&amp;id=3">strateji</a></li><li><a href="index76ba.html?a=catalog&amp;id=4">RPG</a></li><li><a href="indexebb7.html?a=catalog&amp;id=5">Aile Oyunları</a></li><li><a href="indexe5d4.html?a=catalog&amp;id=6">Simülasyon</a></li><li><a href="indexca3f.html?a=catalog&amp;id=7">Yarış</a></li><li><a href="index1196.html?a=catalog&amp;id=8">Spor</a></li><li><a href="indexd2d6.html?a=catalog&amp;id=9">Massive Multiplayer Online</a></li></ul>
</li>
<li id="n-shows"><a href="index8ddf.html?a=catalog&amp;id=0">Demo</a></li>
<li id="n-shows"><a href="bluelight/index.html">Mavi Işık</a></li>
</ul>
<input type="text" value="" maxlength="230" size="20" name="q" />
</div>
<div class="content">
<!-- Main Background -->
<div class="container">
<div id="main">
<div id="main_content">
<div class="leftcol">
<div id="home_main_cluster">
<div class="main_cluster_content">
<div id="main_cluster_scroll" class="cluster_scroll_area" style="width: 5580px; ">
<title>SM STORE</title><a class="cluster_capsule" href="index7175.html?a=app&amp;id=110"><img class="cluster_capsule_image" id="110" src="../blink.bilgeoyuncu.com/downloads/apps/110/616x353.jpg" alt=""><div class="main_cap_price"><div class="discount_final_price">5 $</div></div><div class="main_cap_desc"><div class="desc_overlay"></div><div class="main_cap_content"><div class="main_cap_platform_area platform_area"><img class="platform_img" src="images/platform_win.png"></div><h1></h1><p></p></div></div></a><a class="cluster_capsule" href="index8267.html?a=app&amp;id=103"><img class="cluster_capsule_image" id="103" src="../blink.bilgeoyuncu.com/downloads/apps/103/616x353.jpg" alt=""><div class="main_cap_price"><div class="discount_final_price">Free</div></div><div class="main_cap_desc"><div class="desc_overlay"></div><div class="main_cap_content"><div class="main_cap_platform_area platform_area"><img class="platform_img" src="images/platform_win.png"></div><h1></h1><p></p></div></div></a><script type='text/javascript'>var rgImageURLs ={};</script><div style="clear: left;"></div>
</div>
<div class="cluster_control_left" style="display: none;">
<h5><img src="images/arrow_blue_left.png"></h5>
</div>
<div class="cluster_control_right" style="display: none;">
<h5><img src="images/arrow_blue_right.png"></h5>
</div>
</div>
<div id="main_cluster_control_ctn">
<div class="slider" id="main_cluster_control">
<div class="slider_bg">
</div>
<div class="handle">
</div>
</div>
</div>
<script type="text/javascript">
var ClusterHandler = new Cluster( {
cCapCount: 1, 
nCapWidth: 616 + 4,
elClusterArea: $('home_main_cluster'),
elSlider: $('main_cluster_control'),
rgImageURLs: rgImageURLs
} );
</script>
</div>
<div class="tabarea">
<div class="tabbar">
<div onclick="TabSelect( this, 'tab_newreleases_content' );" class="tab active">Yeni Oyunlar</div>
<div onclick="TabSelect( this, 'tab_topsellers_content' );" class="tab">Popüler Oyunlar</div>
<div onclick="TabSelect( this, 'tab_comingsoon_content' );" class="tab">Yayınlanması yaklaşan</div>
<div onclick="TabSelect( this, 'tab_discounts_content' );" class="tab">Kampanyalar</div>
&nbsp;<div style="clear: left;"></div>
</div>
<div class="tab_content_ctn">
<div></div>
<div id="tab_newreleases_content">
<div class="tab_page" style="height: 1030px;">
<div id="tab_NewReleases_items" class="v5 snippet">
<div class="tab_row odd">
<div class="tab_overlay">
<a href="index8e8d.html?a=app&amp;id=111">
<img src="images/blank.gif">
</a>
</div>
<div class="tab_item_img">
<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/111/logo_111.jpg" class="small_cap_img" alt="">
</div>
<div class="tab_desc">
<h4>Oyun</h4>
<div class="genre_release"><img class="platform_img" src="images/platform_win.png">Aksiyon</div>
<p></p>
</div><div class='tab_price'>Ücretsiz</div></div></div>
</div>
</div>
<!-- Popular !-->
<div id="tab_topsellers_content" style="display: none;">
<div class="tab_page" style="height: auto;">
<div id="tab_TopSellers_items" class="v5 snippet">



		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index6d3a.html?a=app&amp;id=62">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/62/logo_62.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Point Blank</h4>
		<h4>9344 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index6568.html?a=app&amp;id=28">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/28/logo_28.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Assault Cube</h4>
		<h4>267 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index9c82.html?a=app&amp;id=34">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/34/logo_34.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Air Assault 2</h4>
		<h4>228 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index7e13.html?a=app&amp;id=41">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/41/logo_41.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>CS2D</h4>
		<h4>181 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index7e11.html?a=app&amp;id=29">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/29/logo_29.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Cube 2: Sauerbraten</h4>
		<h4>179 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="indexafa5.html?a=app&amp;id=40">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/40/logo_40.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Warzone 2100</h4>
		<h4>141 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index9ba0.html?a=app&amp;id=36">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/36/logo_36.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Crazy Birds</h4>
		<h4>111 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="indexa85b.html?a=app&amp;id=33">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/33/logo_33.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>A-Ball</h4>
		<h4>102 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index1c49.html?a=app&amp;id=38">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/38/logo_38.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Egyptoball</h4>
		<h4>101 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="indexd54b.html?a=app&amp;id=35">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/35/logo_35.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Azteca</h4>
		<h4>80 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index7a12.html?a=app&amp;id=39">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/39/logo_39.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Monster Truck Challenge</h4>
		<h4>58 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="indexa5c4.html?a=app&amp;id=60">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/60/logo_60.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>MotoRacing</h4>
		<h4>55 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="indexda42.html?a=app&amp;id=59">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/59/logo_59.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Shark Attack</h4>
		<h4>54 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index61cb.html?a=app&amp;id=27">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/27/logo_27.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Enigma</h4>
		<h4>53 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class="tab_discount discount_pct">-%0</div><div class='tab_price'>0.15 $</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index2d64.html?a=app&amp;id=37">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/37/logo_37.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Deepica</h4>
		<h4>40 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index808e.html?a=app&amp;id=30">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/30/logo_30.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Secret Maryo : Chronicles</h4>
		<h4>31 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="indexfb4f.html?a=app&amp;id=65">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/65/logo_65.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Sayha Demo</h4>
		<h4>27 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index3992.html?a=app&amp;id=97">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/97/logo_97.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Multiplayer FPS Project</h4>
		<h4>12 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index7b47.html?a=app&amp;id=104">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/104/logo_104.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>ProtectedLine</h4>
		<h4>2 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="indexc1ce.html?a=app&amp;id=92">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/92/logo_92.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Labirent Kraliçesi</h4>
		<h4>1 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index2671.html?a=app&amp;id=96">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/96/logo_96.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>3 Panda</h4>
		<h4>1 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index8e8d.html?a=app&amp;id=111">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/111/logo_111.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>Warbit</h4>
		<h4>1 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class='tab_price'>Free</div><br clear="all">
		</div>		<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
		<a href="index7175.html?a=app&amp;id=110">
		<img src="images/blank.gif">
		</a>
		</div>
		<div class="tab_item_img">
		<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/110/logo_110.jpg" class="small_cap_img" alt="">
		</div>
		<div class="tab_desc">
		<h4>ANKA</h4>
		<h4>1 Person</h4>
		<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
		<p></p>
		</div><div class="tab_discount discount_pct">-%0</div><div class='tab_price'>5 $</div><br clear="all">
		</div>


</div>
</div>
</div>
<!-- End Tab Section !-->
<!-- Coming Soon !-->
<div id="tab_comingsoon_content" style="display: none;">
<div class="tab_page" style="height: 1030px;">
<div id="tab_ComingSoon_items" class="v5 snippet">





<div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
<a href="indexa075.html?a=app&amp;id=112">
<img src="images/blank.gif">
</a>
</div>
<div class="tab_item_img">
<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/112/logo_112.jpg" class="small_cap_img" alt="">
</div>
<div class="tab_desc">
<h4>Stroke</h4>
<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
<p></p>
</div>
<div class="tab_price"></div>
<br clear="all">
</div><div class="tab_row even tab_row_snippet" onmouseover="GameHover( this, event, $("global_hover'), {&quot;type&quot;:&quot;sub&quot;,&quot;id&quot;:&quot;7135&quot;} );" onmouseout="HideGameHover( this, event, $('global_hover') )" id="tab_row_NewReleases_7135">
<div class="tab_overlay">
<a href="index7175.html?a=app&amp;id=110">
<img src="images/blank.gif">
</a>
</div>
<div class="tab_item_img">
<img width="110" height="83" src="../blink.bilgeoyuncu.com/downloads/apps/110/logo_110.jpg" class="small_cap_img" alt="">
</div>
<div class="tab_desc">
<h4>ANKA</h4>
<div class="genre_release"><img class="platform_img" src="images/platform_win.png"></div>
<p></p>
</div>
<div class="tab_price"></div>
<br clear="all">
</div>




</div>
</div>
</div>
<!-- End Tab Section !-->
<!-- Special !-->
<div id="tab_discounts_content" style="display: none;">
<div class="tab_page" style="height: 1030px;">
<div id="tab_Discounts_items" class="v5 snippet">
</div>
</div>
</div>
</div>
</div>
<!-- End Tab Section !-->
</div>
<div class="rightcol rightcol-border">
&nbsp;&nbsp;&nbsp;
sa
</div>
<div class="sag_alt2">

|RESİM| <? 
  
$kullaniciadi = htmlentities(mysql_real_escape_string($_POST['kullaniciadi']));

$kullanici_sor = mysql_query("SELECT * FROM admin WHERE kullaniciadi='{$kullaniciadi}'") or die (mysql_error());
$admin = mysql_fetch_array($kullanici_sor);

if($_POST["kullaniciadi"] == "" and $_POST["sifre"] == "")
{

}else{

	if(isset($_POST["kullaniciadi"]))
	{
		if (($_POST["kullaniciadi"] == $admin['kullaniciadi']) and ($_POST["sifre"] == $admin['sifre']))
		{
		$_SESSION["giris"] = "true";
		$_SESSION["isim"] = $_POST["kullaniciadi"];
		$_SESSION["sifre"] = $_POST["sifre"];
		
		exit;
		} else {
		echo $_POST["kullaniciadi"];

		}
	}
	
}	


echo ; 
}
?>

</div>
<div class="sag_alt">


<div class='giris'>

<b>Merhaba, Biz kimiz?</b><br><bR>
Bildiğiniz üzere Türkiyede oyun sektörü baya gelişti.Bizde oyun yapan türk geliştiricilere destek olsun diye bu siteyi yaptık.Biz Türk oyun geliştiricilerinin Yanında olan bir kuruluşuz Oyunlarınızı burada Ücretsiz ve ya ücretli sunabilirsiniz.

</div>

</div>

</div>

</div>
</div>
</div>
<div style="clear: left;">
</div>
</div>
</div>
</div>
<!-- End Main Background -->
</div>
</body>

<!-- Mirrored from store.bilgeoyuncu.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Dec 2015 14:40:45 GMT -->
</html>
