<?php 
require('./_config.php');
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
   <title>AnimeZia - Official AnimeZia #1 Watch High Quality Anime Online Without Ads</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="AnimeZia - Official AnimeZia #1 Watch High Quality Anime Online Without Ads" />
    <meta name="description" content="AnimeZia - Official AnimeZia #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime." />
    <meta name="keywords" content="animezia, animezia anime, download anime, otakuu, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa" />
    <meta name="charset" content="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta property="og:title" content="AnimeZia - Official AnimeZia #1 Watch High Quality Anime Online Without Ads">
    <meta property="og:description" content="AnimeZia - Official AnimeZia #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AnimeZia">
    <meta property="og:url" content="<?=$websiteUrl?>/home">
    <meta itemprop="image" content="<?=$cdn?>/images/banner.webp">
    <meta property="og:image" content="<?=$cdn?>/images/banner.webp">
    <meta property="og:image:secure_url" content="<?=$cdn?>/images/banner.webp">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <link rel="shortcut icon" href="<?=$websiteUrl?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=$cdn?>/css/style.css">
    <link rel="stylesheet" href="<?=$cdn?>/css/min.css">
	<script async src="https://arc.io/widget.min.js#wHLGVKUU"></script>
    <script type="text/javascript">
        setTimeout(function () {
            var wpse326013 = document.createElement('link');
            wpse326013.rel = 'stylesheet';
            wpse326013.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css';
            wpse326013.type = 'text/css';
            var godefer = document.getElementsByTagName('link')[0];
            godefer.parentNode.insertBefore(wpse326013, godefer);
            var wpse326013_2 = document.createElement('link');
            wpse326013_2.rel = 'stylesheet';
            wpse326013_2.href = 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css';
            wpse326013_2.type = 'text/css';
            var godefer2 = document.getElementsByTagName('link')[0];
            godefer2.parentNode.insertBefore(wpse326013_2, godefer2);
        }, 500);
		
    </script>
    <noscript>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    </noscript>
	<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "AnimeZia",
  "url": "<?=$websiteUrl?>/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "<?=$websiteUrl?>/search?keyword={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "<?=$websiteUrl?>/home"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Movies",
    "item": "<?=$websiteUrl?>/type/movies"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "TV Series",
    "item": "<?=$websiteUrl?>/type/tv-series"  
  },{
    "@type": "ListItem", 
    "position": 4, 
    "name": "Popular Anime",
    "item": "<?=$websiteUrl?>/popular"  
  },{
    "@type": "ListItem", 
    "position": 5, 
    "name": "New Season",
    "item": "<?=$websiteUrl?>/new-season"  
  },{
    "@type": "ListItem", 
    "position": 6, 
    "name": "Subbed Anime",
    "item": "<?=$websiteUrl?>/latest/subbed"  
  },{
    "@type": "ListItem", 
    "position": 7, 
    "name": "Dubbed Anime",
    "item": "<?=$websiteUrl?>/latest/dubbed"  
  }]
}
</script>
</head>

<body data-page="page_home">
    <div id="sidebar_menu_bg"></div>
    <div id="wrapper" data-page="page_home">
        <?php include('./_php/header.php');?>
        <div class="clearfix"></div>
        <div class="deslide-wrap">
            <div class="container" style="max-width:100%!important;width:100%!important;">
                <div id="slider" class="swiper-container-initialized swiper-container-horizontal">
                    <?php include('./_php/slidebar.php'); ?>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
                    <div class="swiper-navigation">
                        <div class="swiper-button swiper-button-next" tabindex="0" role="button"
                            aria-label="Next slide"><i class="fas fa-angle-right"></i></div>
                        <div class="swiper-button swiper-button-prev" tabindex="0" role="button"
                            aria-label="Previous slide"><i class="fas fa-angle-left"></i></div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
        
        <?php include('./_php/trending.php')?>
        
        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=64c3c802c1c66f0013218238&amp;product=inline-share-buttons&amp;source=platform">
                    </script>
                    
<div class="share-buttons share-buttons-detail">
                        <div class="share-buttons-block">
                            <div class="share-icon"></div>
                            <div class="sbb-title">
                                <span>Share AnimeZia</span>
                                <p class="mb-0">with your friends</p>
                            </div>
                            <div class="sbb-social">
                                <div class="sharethis-inline-share-buttons st-justified  st-inline-share-buttons st-animated" id="st-1"><div class="st-btn st-first  st-remove-label" data-network="facebook" style="display: inline-block;">
  <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">
  
</div><div class="st-btn  st-remove-label" data-network="print" style="display: inline-block;">
  <img alt="print sharing button" src="https://platform-cdn.sharethis.com/img/print.svg">
  
</div><div class="st-btn  st-remove-label" data-network="twitter" style="display: none;">
  <img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">
  
</div><div class="st-btn  st-remove-label" data-network="whatsapp" style="display: none;">
  <img alt="whatsapp sharing button" src="https://platform-cdn.sharethis.com/img/whatsapp.svg">
  
</div><div class="st-btn  st-remove-label" data-network="pinterest" style="display: none;">
  <img alt="pinterest sharing button" src="https://platform-cdn.sharethis.com/img/pinterest.svg">
  
</div><div class="st-btn st-last  st-remove-label" data-network="reddit" style="display: none;">
  <img alt="reddit sharing button" src="https://platform-cdn.sharethis.com/img/reddit.svg">
  
</div></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
 
        <div id="anime-featured">

        </div>
        <div id="main-wrapper">
            <div class="container">
                <div id="main-content">
                <?php if(isset($_COOKIE['userID'])){ 
                    $user_id = $_COOKIE['userID'];
                    $select = mysqli_query($conn, "SELECT * FROM `user_history` WHERE user_id = $user_id");
                    $rows = mysqli_fetch_all($select, MYSQLI_ASSOC);
                    $rows = array_reverse($rows);
                    if(count($rows) != 0){ ?>

                <section class="block_area block_area_home">
                    <div class="block_area-header">
                        <div class="float-left bah-heading mr-4">
                            <h2 class="cat-heading"><i class="fas fa-history mr-2"></i>Continue Watching</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-content">
                        <div class="block_area-content block_area-list film_list film_list-grid">
                            <div class="film_list-wrap">

                                <?php 
                    
                     
                        foreach (array_slice($rows,4,4) as $rows) 
                      { ?>
                                <div class="flw-item">
                                    <div class="film-poster">
                                        <div class="tick ltr">
                                            <div class="tick-item-<?=$rows['dubOrSub']?> tick-eps amp-algn">
                                                <?=strtoupper($rows['dubOrSub'])?></div>
                                        </div>
                                        <div class="tick rtl">
                                            <div class="tick-item tick-eps amp-algn">Episode <?=$rows['anime_ep']?>
                                            </div>
                                        </div>
                                        <img class="film-poster-img lazyload" data-src="<?=$rows['anime_image']?>"
                                            src="https://anikatsu.me/files/images/no_poster.jpg"
                                            alt="<?=$rows['anime_title']?>">
                                        <a class="film-poster-ahref" href="/watch/<?=$rows['anime_id']?>"
                                            title="<?=$rows['anime_title']?>" data-jname="<?=$rows['anime_title']?>"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="/watch/<?=$rows['anime_id']?>" title="<?=$rows['anime_title']?>"
                                                data-jname="<?=$rows['anime_title']?>"><?=$rows['anime_title']?></a>
                                        </h3>
                                        <div class="fd-infor">
                                            <span class="fdi-item"><?=$rows['anime_release']?></span>
                                            <span class="dot"></span>
                                            <span class="fdi-item"><?=$rows['anime_type']?></span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <?php } ?>



                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
                <?php } ?>

                <?php } ?>
                
                <div id="anime-featured">
<div class="container">
<div class="anif-blocks">
<div class="row">
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="anif-block anif-block-01">
<div class="anif-block-header">Fall</div>
<div class="anif-block-ul">
<ul class="ulclear">
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="12523" data-src="https://gogocdn.net/cover/renai-flops-dub.png" alt="Renai Flops (Dub)" src="https://gogocdn.net/cover/renai-flops-dub.png" title="Renai Flops (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="12523" href="/anime/renai-flops-dub" title="Renai Flops (Dub)" data-jname="Renai Flops (Dub)" style="opacity: 1;">Renai Flops (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Fall 2022 </span>
<span class="dot"></span>
<span class="fdi-item">Ongoing</span><span class="dot"></span> <span class="fdi-item fdi-duration">2022</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11550" data-src="https://gogocdn.net/cover/urusei-yatsura-2022-dub.png" alt="Urusei Yatsura (2022) (Dub)" src="https://gogocdn.net/cover/urusei-yatsura-2022-dub.png" title="Urusei Yatsura (2022) (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11550" href="/anime/urusei-yatsura-2022-dub" title="Urusei Yatsura (2022) (Dub)" data-jname="Urusei Yatsura (2022) (Dub)" style="opacity: 1;">Urusei Yatsura (2022) (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Fall 2022 </span>
<span class="dot"></span>
<span class="fdi-item">Ongoing</span><span class="dot"></span> <span class="fdi-item fdi-duration">2022</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11508" data-src="https://gogocdn.net/cover/peter-grill-to-kenja-no-jikan-super-extra-dub.png" alt="Peter Grill to Kenja no Jikan: Super Extra (Dub)" src="https://gogocdn.net/cover/peter-grill-to-kenja-no-jikan-super-extra-dub.png" title="Peter Grill to Kenja no Jikan: Super Extra (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11508" href="/anime/peter-grill-to-kenja-no-jikan-super-extra-dub" title="Peter Grill to Kenja no Jikan: Super Extra (Dub)" data-jname="Peter Grill to Kenja no Jikan: Super Extra (Dub)" style="opacity: 1;">Peter Grill to Kenja no Jikan: Super Extra (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Fall 2022 </span>
<span class="dot"></span>
<span class="fdi-item">Ongoing</span><span class="dot"></span> <span class="fdi-item fdi-duration">2022</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11498" data-src="https://gogocdn.net/cover/kidou-senshi-gundam-suisei-no-majo-dub.png" alt="Kidou Senshi Gundam: Suisei no Majo (Dub)" src="https://gogocdn.net/cover/kidou-senshi-gundam-suisei-no-majo-dub.png" title="Kidou Senshi Gundam: Suisei no Majo (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11498" href="/anime/kidou-senshi-gundam-suisei-no-majo-dub" title="Kidou Senshi Gundam: Suisei no Majo (Dub)" data-jname="Kidou Senshi Gundam: Suisei no Majo (Dub)" style="opacity: 1;">Kidou Senshi Gundam: Suisei no Majo (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Fall 2022 </span>
<span class="dot"></span>
<span class="fdi-item">Ongoing</span><span class="dot"></span> <span class="fdi-item fdi-duration">2022</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11481" data-src="https://gogocdn.net/cover/meitantei-conan-hannin-no-hanzawa-san-dub.png" alt="Meitantei Conan: Hannin no Hanzawa-san (Dub)" src="https://gogocdn.net/cover/meitantei-conan-hannin-no-hanzawa-san-dub.png" title="Meitantei Conan: Hannin no Hanzawa-san (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11481" href="/anime/meitantei-conan-hannin-no-hanzawa-san-dub" title="Meitantei Conan: Hannin no Hanzawa-san (Dub)" data-jname="Meitantei Conan: Hannin no Hanzawa-san (Dub)" style="opacity: 1;">Meitantei Conan: Hannin no Hanzawa-san (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Fall 2022 </span>
<span class="dot"></span>
<span class="fdi-item">Completed</span><span class="dot"></span> <span class="fdi-item fdi-duration">2022</span>
</div>
</div>
<div class="clearfix"></div>
</li> </ul>
<div class="clearfix"></div>
</div>
<div class="more"><a href="/sub-category/Fall+2022+Anime">View more <i class="fas fa-angle-right ml-2"></i></a></div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="anif-block anif-block-01">
<div class="anif-block-header">Summer</div>
<div class="anif-block-ul">
<ul class="ulclear">
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="12511" data-src="https://gogocdn.net/cover/kami-kuzuidol-dub.png" alt="Kami Kuzu☆Idol (Dub)" src="https://gogocdn.net/cover/kami-kuzuidol-dub.png" title="Kami Kuzu☆Idol (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="12511" href="/anime/kami-kuzuidol-dub" title="Kami Kuzu☆Idol (Dub)" data-jname="Kami Kuzu☆Idol (Dub)" style="opacity: 1;">Kami Kuzu☆Idol (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Summer 2022 </span>
<span class="dot"></span>
<span class="fdi-item">Ongoing</span><span class="dot"></span> <span class="fdi-item fdi-duration">2022</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11629" data-src="https://gogocdn.net/cover/isekai-ojisan-dub.png" alt="Isekai Ojisan (Dub)" src="https://gogocdn.net/cover/isekai-ojisan-dub.png" title="Isekai Ojisan (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11629" href="/anime/isekai-ojisan-dub" title="Isekai Ojisan (Dub)" data-jname="Isekai Ojisan (Dub)" style="opacity: 1;">Isekai Ojisan (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Summer 2022 </span>
<span class="dot"></span>
<span class="fdi-item">Completed</span><span class="dot"></span> <span class="fdi-item fdi-duration">2022</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11407" data-src="https://gogocdn.net/cover/utawarerumono-futari-no-hakuoro-dub.png" alt="Utawarerumono: Futari no Hakuoro (Dub)" src="https://gogocdn.net/cover/utawarerumono-futari-no-hakuoro-dub.png" title="Utawarerumono: Futari no Hakuoro (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11407" href="/anime/utawarerumono-futari-no-hakuoro-dub" title="Utawarerumono: Futari no Hakuoro (Dub)" data-jname="Utawarerumono: Futari no Hakuoro (Dub)" style="opacity: 1;">Utawarerumono: Futari no Hakuoro (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Summer 2022 </span>
<span class="dot"></span>
<span class="fdi-item">Completed</span><span class="dot"></span> <span class="fdi-item fdi-duration">2022</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11193" data-src="https://gogocdn.net/cover/kumichou-musume-to-sewagakari-dub.png" alt="Kumichou Musume to Sewagakari (Dub)" src="https://gogocdn.net/cover/kumichou-musume-to-sewagakari-dub.png" title="Kumichou Musume to Sewagakari (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11193" href="/anime/kumichou-musume-to-sewagakari-dub" title="Kumichou Musume to Sewagakari (Dub)" data-jname="Kumichou Musume to Sewagakari (Dub)" style="opacity: 1;">Kumichou Musume to Sewagakari (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Summer 2022 </span>
<span class="dot"></span>
<span class="fdi-item">Completed</span><span class="dot"></span> <span class="fdi-item fdi-duration">2022</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11073" data-src="https://gogocdn.net/cover/dungeon-ni-deai-wo-motomeru-no-wa-machigatteiru-darou-ka-iv-shin-shou-meikyuu-hen-dub.png" alt="Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka IV: Shin Shou - Meikyuu-hen (Dub)" src="https://gogocdn.net/cover/dungeon-ni-deai-wo-motomeru-no-wa-machigatteiru-darou-ka-iv-shin-shou-meikyuu-hen-dub.png" title="Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka IV: Shin Shou - Meikyuu-hen (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11073" href="/anime/dungeon-ni-deai-wo-motomeru-no-wa-machigatteiru-darou-ka-iv-shin-shou-meikyuu-hen-dub" title="Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka IV: Shin Shou - Meikyuu-hen (Dub)" data-jname="Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka IV: Shin Shou - Meikyuu-hen (Dub)" style="opacity: 1;">Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka IV: Shin Shou - Meikyuu-hen (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Summer 2022 </span>
<span class="dot"></span>
<span class="fdi-item">Completed</span><span class="dot"></span> <span class="fdi-item fdi-duration">2022</span>
</div>
</div>
<div class="clearfix"></div>
</li> </ul>
<div class="clearfix"></div>
</div>
<div class="more"><a href="/sub-category/Summer+2022+Anime">View more <i class="fas fa-angle-right ml-2"></i></a></div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="anif-block anif-block-04">
<div class="anif-block-header">Spring</div>
<div class="anif-block-ul">
<ul class="ulclear">
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="12534" data-src="https://gogocdn.net/cover/pokemon-2023-dub.png" alt="Pokemon (2023) (Dub)" src="https://gogocdn.net/cover/pokemon-2023-dub.png" title="Pokemon (2023) (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="12534" href="/anime/pokemon-2023-dub" title="Pokemon (2023) (Dub)" data-jname="Pokemon (2023) (Dub)" style="opacity: 1;">Pokemon (2023) (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Spring 2023 </span>
<span class="dot"></span>
<span class="fdi-item">Ongoing</span><span class="dot"></span> <span class="fdi-item fdi-duration">2023</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="12359" data-src="https://gogocdn.net/cover/rurouni-kenshin-meiji-kenkaku-romantan-2023-dub.png" alt="Rurouni Kenshin: Meiji Kenkaku Romantan (2023)  (Dub)" src="https://gogocdn.net/cover/rurouni-kenshin-meiji-kenkaku-romantan-2023-dub.png" title="Rurouni Kenshin: Meiji Kenkaku Romantan (2023)  (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="12359" href="/anime/rurouni-kenshin-meiji-kenkaku-romantan-2023-dub" title="Rurouni Kenshin: Meiji Kenkaku Romantan (2023)  (Dub)" data-jname="Rurouni Kenshin: Meiji Kenkaku Romantan (2023)  (Dub)" style="opacity: 1;">Rurouni Kenshin: Meiji Kenkaku Romantan (2023)  (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Spring 2023 </span>
<span class="dot"></span>
<span class="fdi-item">Ongoing</span><span class="dot"></span> <span class="fdi-item fdi-duration">2023</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="12004" data-src="https://gogocdn.net/cover/dekiru-neko-wa-kyou-mo-yuuutsu-1688153516.png" alt="Dekiru Neko wa Kyou mo Yuuutsu" src="https://gogocdn.net/cover/dekiru-neko-wa-kyou-mo-yuuutsu-1688153516.png" title="Dekiru Neko wa Kyou mo Yuuutsu">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="12004" href="/anime/dekiru-neko-wa-kyou-mo-yuuutsu" title="Dekiru Neko wa Kyou mo Yuuutsu" data-jname="Dekiru Neko wa Kyou mo Yuuutsu" style="opacity: 1;">Dekiru Neko wa Kyou mo Yuuutsu</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Spring 2023 </span>
<span class="dot"></span>
<span class="fdi-item">Completed</span><span class="dot"></span> <span class="fdi-item fdi-duration">2023</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11876" data-src="https://gogocdn.net/cover/demon-slayer-kimetsu-no-yaiba-swordsmith-village-arc-dub.png" alt="Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc (Dub)" src="https://gogocdn.net/cover/demon-slayer-kimetsu-no-yaiba-swordsmith-village-arc-dub.png" title="Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11876" href="/anime/demon-slayer-kimetsu-no-yaiba-swordsmith-village-arc-dub" title="Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc (Dub)" data-jname="Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc (Dub)" style="opacity: 1;">Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Spring 2023 </span>
<span class="dot"></span>
<span class="fdi-item">Ongoing</span><span class="dot"></span> <span class="fdi-item fdi-duration">2023</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11874" data-src="https://gogocdn.net/cover/mashle-dub.png" alt="Mashle (Dub)" src="https://gogocdn.net/cover/mashle-dub.png" title="Mashle (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11874" href="/anime/mashle-dub" title="Mashle (Dub)" data-jname="Mashle (Dub)" style="opacity: 1;">Mashle (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Spring 2023 </span>
<span class="dot"></span>
<span class="fdi-item">Ongoing</span><span class="dot"></span> <span class="fdi-item fdi-duration">2023</span>
</div>
</div>
<div class="clearfix"></div>
</li> </ul>
<div class="clearfix"></div>
</div>
<div class="more">
<a href="/sub-category/Spring+2023+Anime">View more <i class="fas fa-angle-right ml-2"></i></a>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="anif-block anif-block-01">
<div class="anif-block-header">Winter</div>
<div class="anif-block-ul">
<ul class="ulclear">
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="12637" data-src="https://gogocdn.net/cover/akuyaku-reijou-level-99-watashi-wa-ura-boss-desu-ga-maou-dewa-arimasen-1704167871.png" alt="Akuyaku Reijou Level 99: Watashi wa Ura-Boss desu ga Maou dewa Arimasen" src="https://gogocdn.net/cover/akuyaku-reijou-level-99-watashi-wa-ura-boss-desu-ga-maou-dewa-arimasen-1704167871.png" title="Akuyaku Reijou Level 99: Watashi wa Ura-Boss desu ga Maou dewa Arimasen">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="12637" href="/anime/akuyaku-reijou-level-99-watashi-wa-ura-boss-desu-ga-maou-dewa-arimasen" title="Akuyaku Reijou Level 99: Watashi wa Ura-Boss desu ga Maou dewa Arimasen" data-jname="Akuyaku Reijou Level 99: Watashi wa Ura-Boss desu ga Maou dewa Arimasen" style="opacity: 1;">Akuyaku Reijou Level 99: Watashi wa Ura-Boss desu ga Maou dewa Arimasen</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Winter 2023 </span>
<span class="dot"></span>
<span class="fdi-item">Ongoing</span><span class="dot"></span> <span class="fdi-item fdi-duration">2024</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11904" data-src="https://gogocdn.net/cover/isekai-nonbiri-nouka-dub.png" alt="Isekai Nonbiri Nouka (Dub)" src="https://gogocdn.net/cover/isekai-nonbiri-nouka-dub.png" title="Isekai Nonbiri Nouka (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11904" href="/anime/isekai-nonbiri-nouka-dub" title="Isekai Nonbiri Nouka (Dub)" data-jname="Isekai Nonbiri Nouka (Dub)" style="opacity: 1;">Isekai Nonbiri Nouka (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Winter 2023 </span>
<span class="dot"></span>
<span class="fdi-item">Completed</span><span class="dot"></span> <span class="fdi-item fdi-duration">2023</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11813" data-src="https://gogocdn.net/cover/cardfight-vanguard-willdress-season-2-dub.png" alt="Cardfight!! Vanguard: will+Dress Season 2 (Dub)" src="https://gogocdn.net/cover/cardfight-vanguard-willdress-season-2-dub.png" title="Cardfight!! Vanguard: will+Dress Season 2 (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11813" href="/anime/cardfight-vanguard-willdress-season-2-dub" title="Cardfight!! Vanguard: will+Dress Season 2 (Dub)" data-jname="Cardfight!! Vanguard: will+Dress Season 2 (Dub)" style="opacity: 1;">Cardfight!! Vanguard: will+Dress Season 2 (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Winter 2023 </span>
<span class="dot"></span>
<span class="fdi-item">Ongoing</span><span class="dot"></span> <span class="fdi-item fdi-duration">2023</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11770" data-src="https://gogocdn.net/cover/dungeon-ni-deai-wo-motomeru-no-wa-machigatteiru-darou-ka-iv-fuka-shou-yakusai-hen-dub.png" alt="Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka IV: Fuka Shou - Yakusai-hen (Dub)" src="https://gogocdn.net/cover/dungeon-ni-deai-wo-motomeru-no-wa-machigatteiru-darou-ka-iv-fuka-shou-yakusai-hen-dub.png" title="Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka IV: Fuka Shou - Yakusai-hen (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11770" href="/anime/dungeon-ni-deai-wo-motomeru-no-wa-machigatteiru-darou-ka-iv-fuka-shou-yakusai-hen-dub" title="Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka IV: Fuka Shou - Yakusai-hen (Dub)" data-jname="Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka IV: Fuka Shou - Yakusai-hen (Dub)" style="opacity: 1;">Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka IV: Fuka Shou - Yakusai-hen (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Winter 2023 </span>
<span class="dot"></span>
<span class="fdi-item">Completed</span><span class="dot"></span> <span class="fdi-item fdi-duration">2023</span>
</div>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="film-poster">
<img class="film-poster-img ls-is-cached lazyloaded tooltipEl" animeid="11750" data-src="https://gogocdn.net/cover/kyokou-suiri-season-2-dub.png" alt="Kyokou Suiri Season 2 (Dub)" src="https://gogocdn.net/cover/kyokou-suiri-season-2-dub.png" title="Kyokou Suiri Season 2 (Dub)">
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name tooltipEl" animeid="11750" href="/anime/kyokou-suiri-season-2-dub" title="Kyokou Suiri Season 2 (Dub)" data-jname="Kyokou Suiri Season 2 (Dub)" style="opacity: 1;">Kyokou Suiri Season 2 (Dub)</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">Winter 2023 </span>
<span class="dot"></span>
<span class="fdi-item">Ongoing</span><span class="dot"></span> <span class="fdi-item fdi-duration">2023</span>
</div>
</div>
<div class="clearfix"></div>
</li> </ul>
<div class="clearfix"></div>
</div>
<div class="more"><a href="/sub-category/Winter+2023+Anime">View more <i class="fas fa-angle-right ml-2"></i></a></div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
 
	   
        <div id="main-wrapper">
            <div class="container">
                <div id="main-content">
                    <section class="block_area block_area_home">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Latest Subbed</h2>
                            </div>
                            <div class="float-right viewmore">
                                <a class="btn" href="/latest/subbed">View more<i
                                        class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid">
                                <div class="film_list-wrap">

                                <?php 
								$ch = curl_init();
								  curl_setopt($ch, CURLOPT_URL, "$api/recent-release?type=1&page=1");
								  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
								  curl_setopt($ch, CURLOPT_HEADER, FALSE);
								  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
								  $response = curl_exec($ch);
								  $json = json_decode($response, true);
                                
                                foreach((array) $json as $recentRelease) { ?>
                                    <div class="flw-item">
                                        <div class="film-poster">
                                            <div class="tick ltr">
                                                <div class="tick-item-sub  tick-eps amp-algn"><?=$recentRelease['subOrDub']?></div>
                                            </div>
                                            <div class="tick rtl">
                                                <div class="tick-item tick-eps amp-algn">Episode <?=$recentRelease['episodeNum']?></div>
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="https://ik.imagekit.io/<?=$imgk?>/tr:f-webp/<?=$recentRelease['imgUrl']?>"
                                                src="https://ik.imagekit.io/<?=$imgk?>/tr:f-webp/<?=$recentRelease['imgUrl']?>"
                                                alt="Watch free online <?=$recentRelease['name']?> on animezia">
                                            <a class="film-poster-ahref"
                                                href="/watch/<?=$recentRelease['episodeId']?>"
                                                title="<?=$recentRelease['name']?>"
                                                data-jname="<?=$recentRelease['name']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a
                                                    href="/watch/<?=$recentRelease['episodeId']?>"
                                                    title="<?=$recentRelease['name']?>"
                                                    data-jname="<?=$recentRelease['name']?>"><?=$recentRelease['name']?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item">Latest</span>
                                                <span class="dot"></span>
                                                <span class="fdi-item"><?=$recentRelease['subOrDub']?></span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                   <?php } curl_close($ch); ?>

                                    
                                    
                                   
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </section>
                    
					
					<div id="schedule-block"><section class="block_area block_area_sidebar block_area-schedule schedule-full">
    <div class="block_area-header">
        <div class="float-left bah-heading mr-4">
            <h2 class="cat-heading">Estimated Schedule</h2>
        </div>
        <div class="float-left bah-time">
            <span class="current-time"><span id="timezone">(GMT+05:30)</span> <span id="current-date"><?=date("d")?>/<?=date("m")?>/<?=date("Y")?></span> <span id="clock"><?php echo date('h:i A');?></span></span>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="block_area-content">
        <div class="table_schedule">
            <div class="clearfix"></div>
            <ul class="ulclear table_schedule-list limit-8">
            <?php 
                                $json = file_get_contents("$ani/meta/anilist/airing-schedule");
                                $json = json_decode($json, true);
                                foreach($json['results'] as $schedule) { ?>
                                <?php $title = $schedule['title']; { ?>
                     <li>
                         <a href="<?=$websiteUrl?>/anilist/anime?id=<?=$schedule['id']?>" class="tsl-link">
                             <div class="time"><?php echo date("H:i", $schedule['airingAt']);?></div>
                             <div class="film-detail">
                                 <h3 class="film-name dynamic-name" data-jname="<?=$title['romaji']?>"><?=$title['romaji']?></h3>
                                 <div class="fd-play">
                                     <button type="button" class="btn btn-sm btn-play"><i class="fas fa-play mr-2"></i> Episode <?=$schedule['episode']?>
                                     </button>
                                 </div>
                             </div>
                         </a>
                     </li>
                     <?php } ?>
                     <?php } ?>
</ul>
</div></div>
</section></div>


                    <section class="block_area block_area_home">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Latest Dubbed</h2>
                            </div>
                            <div class="float-right viewmore">
                                <a class="btn" href="/latest/dubbed">View more<i
                                        class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid">
                                <div class="film_list-wrap">
                                <?php 
								$ch = curl_init();
								  curl_setopt($ch, CURLOPT_URL, "$api/recent-release?type=2&page=1");
								  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
								  curl_setopt($ch, CURLOPT_HEADER, FALSE);
								  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
								  $response = curl_exec($ch);
								  $json = json_decode($response, true);
                                
                                foreach((array) $json as $recentReleaseDub) { ?>

                                    <div class="flw-item">
                                        <div class="film-poster">
                                        <div class="tick ltr">
                                                <div class="tick-item-dub  tick-eps amp-algn"><?=$recentReleaseDub['subOrDub']?></div>
                                            </div>
                                            <div class="tick rtl">
                                                <div class="tick-item tick-eps amp-algn">Episode <?=$recentReleaseDub['episodeNum']?></div>
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="https://ik.imagekit.io/<?=$imgk?>/tr:f-webp/<?=$recentReleaseDub['imgUrl']?>"
                                                src="https://ik.imagekit.io/<?=$imgk?>/tr:f-webp/<?=$recentReleaseDub['imgUrl']?>"
                                                alt="Watch free online <?=$recentReleaseDub['name']?> on animezia">
                                            <a class="film-poster-ahref"
                                                href="/watch/<?=$recentReleaseDub['episodeId']?>" title="<?=$recentReleaseDub['name']?>"
                                                data-jname="<?=$recentReleaseDub['name']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a
                                                    href="/watch/<?=$recentReleaseDub['episodeId']?>" title="<?=$recentReleaseDub['name']?>"
                                                    data-jname="<?=$recentReleaseDub['name']?>"><?=$recentReleaseDub['name']?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item">Latest</span>
                                                <span class="dot"></span>
                                                <span class="fdi-item">Dub</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                <?php } curl_close($ch); ?>
                                </div>
                            </div>
                        </div>
                    </section>
					
					
					
                    <div class="clearfix"></div>
                </div>
                 <?php include('./_php/sidenav.php'); ?>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php include('./_php/footer.php'); ?>
        <div id="mask-overlay"></div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="<?=$cdn?>/js/video.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
        <script type="text/javascript" src="<?=$cdn?>/js/app.js"></script>
        <script type="text/javascript" src="<?=$cdn?>/js/comman.js"></script>
        <script type="text/javascript" src="<?=$cdn?>/js/movie.js"></script>
        <link rel="stylesheet" href="<?=$cdn?>/css/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="<?=$cdn?>/js/function.js"></script>
    </div>
</body>

</html>
