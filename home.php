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
        <div class="share-buttons share-buttons-home">
            <div class="container">
                <script type="text/javascript"
                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63430163bc99824a"></script>
                <div class="share-buttons-block">
                    <div class="share-icon"></div>
                    <div class="sbb-title">
                        <span>Share <?=$websiteTitle?></span>
                        <p class="mb-0">to your friends</p>
                    </div>
                    <div class="addthis_inline_share_toolbox"></div>
                    <div class="clearfix"></div>
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
								// The home API endpoint provides the latest episodes
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, "$api/");
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
								curl_setopt($ch, CURLOPT_HEADER, FALSE);
								curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
								$response = curl_exec($ch);
								$homeData = json_decode($response, true); // Store the entire home response
								curl_close($ch);

                                // Iterate over latest episodes
                                foreach((array) $homeData['results']['latestEpisode'] as $latestEpisode) { ?>
                                    <div class="flw-item">
                                        <div class="film-poster">
                                            <a class="film-poster-ahref"
                                                href="/animeDetails.php?animeid=<?=$latestEpisode['id']?>"
                                                title="<?=$latestEpisode['title']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a href="/animeDetails.php?animeid=<?=$latestEpisode['id']?>" title="<?=$latestEpisode['title']?>"><?=$latestEpisode['title']?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item">Latest</span>
                                                <span class="dot"></span>
 <span class="fdi-item"><?=isset($latestEpisode['tvInfo']['sub']) ? 'SUB' : ''?><?=isset($latestEpisode['tvInfo']['dub']) ? 'DUB' : ''?></span>
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
                                // Iterate over the same latest episodes data
                                foreach((array) $homeData['results']['latestEpisode'] as $latestEpisodeDub) {
                                    // Check if the episode is dubbed
                                    if (isset($latestEpisodeDub['tvInfo']['dub'])) {
                                ?>
                                    <div class="flw-item">
                                        <div class="film-poster">
                                        <div class="tick ltr">
                                                <div class="tick-item-dub  tick-eps amp-algn">DUB</div>
                                            </div>
                                            <div class="tick rtl">
                                                <div class="tick-item tick-eps amp-algn">Episode <?=$latestEpisodeDub['tvInfo']['episodeInfo']['number']?></div>
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="<?=$latestEpisodeDub['poster']?>"
                                                src="<?=$latestEpisodeDub['poster']?>"
                                                alt="Watch free online <?=$latestEpisodeDub['title']?> on animezia">
                                            <a class="film-poster-ahref"
                                                href="/animeDetails.php?animeid=<?=$latestEpisodeDub['id']?>" title="<?=$latestEpisodeDub['title']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a
                                                    href="/animeDetails.php?animeid=<?=$latestEpisodeDub['id']?>" title="<?=$latestEpisodeDub['title']?>"><?=$latestEpisodeDub['title']?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item">Latest</span>
                                                <span class="dot"></span>
                                                <span class="fdi-item">Dub</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                <?php }
                                } // End foreach and if condition ?>
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
