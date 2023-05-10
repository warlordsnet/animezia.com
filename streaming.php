<?php 
require('./_config.php');
$parts=parse_url($_SERVER['REQUEST_URI']); 
$page_url=explode('/', $parts['path']);
$url = $page_url[count($page_url)-1];
//$url = "naruto-episode-2";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$api/getEpisode/$url");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
$respo = curl_exec($ch);
$getEpisode = json_decode($respo, true);
//$getEpisode = file_get_contents("$api/getEpisode/$url");
//$getEpisode = json_decode($getEpisode, true);
curl_close($ch);

$anime = $getEpisode['anime_info'];
$download = str_replace("Gogoanime", "Animezia", $getEpisode['ep_download']);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$api/getAnime/$anime");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
$respon = curl_exec($ch);
$getAnime = json_decode($respon, true);
//$getAnime = file_get_contents("$api/getAnime/$anime");
//$getAnime = json_decode($getAnime, true);
curl_close($ch);

$episodelist = $getAnime['episode_id'];
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Watch <?=$getEpisode['animeNameWithEP']?>on AnimeZia</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="Watch <?=$getEpisode['animeNameWithEP']?> on AnimeZia">
    <meta name="description" content="<?=substr($getAnime['synopsis'],0, 150)?> ... at <?=$websiteUrl?>">
    <meta name="keywords" content="AnimeZia, <?=$getEpisode['animeNameWithEP']?>,<?=$getAnime['name']?>, watch anime online, free anime, anime stream, anime hd, english sub">
    <meta name="charset" content="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Language" content="en">
    <meta property="og:title" content="Watch <?=$getEpisode['animeNameWithEP']?>on AnimeZia">
    <meta property="og:description" content="<?=substr($getAnime['synopsis'],0, 150)?> ... at <?=$websiteUrl?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AnimeZia">
    <meta property="og:url" content="<?=$websiteUrl?>/anime/<?=$url?>">
    <meta itemprop="image" content="<?=$getAnime['imageUrl']?>">
    <meta property="og:image" content="<?=$getAnime['imageUrl']?>">
    <meta property="twitter:title" content="Watch <?=$getEpisode['animeNameWithEP']?>on AnimeZia">
    <meta property="twitter:description" content="<?=substr($getAnime['synopsis'],0, 150)?> ... at <?=$websiteUrl?>">
    <meta property="twitter:url" content="<?=$websiteUrl?>/anime/<?=$url?>">
    <meta property="twitter:card" content="summary">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    
    <meta name="theme-color" content="#202125">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" type="text/css">
    <link rel="shortcut icon" href="<?=$websiteUrl?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=$cdn?>/css/style.css">
    <link rel="stylesheet" href="<?=$cdn?>/css/min.css">
	<script async src="https://arc.io/widget.min.js#wHLGVKUU"></script>
</head>

<body data-page="movie_watch">
    <div id="sidebar_menu_bg"></div>
    <div id="wrapper" data-page="movie_watch">
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7RZYCX8V55"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7RZYCX8V55');
</script>
<div id="sidebar_menu">
    <button class="btn btn-radius btn-sm btn-secondary toggle-sidebar"><i class="fas fa-angle-left mr-2"></i>Close menu</button>
    <div class="sb-setting">
        <div class="header-setting">
		<div class="hs-toggles">
                    <a href="/anime" class="hst-item" data-toggle="tooltip" data-original-title="Select Anime List">
                        <div class="hst-icon"><i class="fas fa-list"></i></div>
                        <div class="name"><span>Anime</span></div>
                    </a>
                    <a href="/popular" class="hst-item" data-toggle="tooltip" data-original-title="Popular Anime List">
                        <div class="hst-icon"><i class="fas fa-star"></i></div>
                        <div class="name"><span>Popular</span></div>
                    </a>
                    <a href="/anilist/random" rel="nofollow" class="hst-item" data-toggle="tooltip" data-original-title="Select Random Anime">
                        <div class="hst-icon"><i class="fas fa-random"></i></div>
                        <div class="name"><span>Random</span></div>
                    </a>
                    <div class="clearfix"></div>
                </div>
        </div>
    </div>
    <ul class="nav sidebar_menu-list">
        <li class="nav-item active"><a class="nav-link" href="../" title="Home"><i class="fas fa-home"></i>
                Home</a></li>
		<li class="nav-item active"><a class="nav-link" href="../donate" title="about us"><i class="fas fa-donate"></i>
                Donate</a></li>
		<li class="nav-item active"><a class="nav-link" href="../about" title="about us"><i class="fas fa-info-circle"></i>
                About</a></li>
        <li class="nav-item">
            <div class="nav-link" title="Types"><strong><i class="fas fa-video"></i> Types</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_types">
                <ul class="nav sub-menu color-list">
                    <li class="nav-item"><a class="nav-link" href="../type/movies" title="Movies">Movies</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../type/tv-series" title="TV Series">TV Series</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../sub-category/ova" title="OVA">OVA</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../sub-category/ona" title="ONAs">ONA</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../sub-category/special" title="Special">Special</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link" title="Status"><strong><i class="fas fa-check"></i> Status</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_types">
                <ul class="nav sub-menu color-list">
                    <li class="nav-item"><a class="nav-link" href="/status/completed" title="Completed">Completed</a></li>
                    <li class="nav-item"><a class="nav-link" href="/status/ongoing" title="Ongoing">Ongoing</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link" title="Latest"><strong><i class="fa-solid fa-audio-description"></i> Latest</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_types">
                <ul class="nav sub-menu color-list">
                    <li class="nav-item"><a class="nav-link" href="/latest/subbed" title="Subbed">Subbed</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/latest/dubbed" title="Dubbed">Dubbed</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/latest/chinese" title="Chinese">Chinese</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link" title="Latest"><strong><i class="fa-solid fa-fire-flame-curved"></i> Other</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_types">
                <ul class="nav sub-menu color-list">
                    <li class="nav-item"><a class="nav-link" href="../popular" title="Popular">Popular</a></li>
                    <li class="nav-item"><a class="nav-link" href="../new-season" title="New Season">New Season</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link" title="Season"><strong><i class="fa-solid fa-leaf"></i> Season</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_top">
                <ul class="nav sub-menu color-list">
                    <li class="nav-item"><a class="nav-link" href="../sub-category/fall-2021-anime"
                            title="Fall">Fall</a></li>
                    <li class="nav-item"><a class="nav-link" href="../sub-category/summer-2021-anime"
                            title="Summer">Summer</a></li>
                    <li class="nav-item"><a class="nav-link" href="../sub-category/spring-2021-anime"
                            title="Spring">Spring</a></li>
                    <li class="nav-item"><a class="nav-link" href="../sub-category/winter-2022-anime"
                            title="Winter">Winter</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link" title="Genre"><strong><i class="fa-solid fa-dragon"></i> Genre</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_genre">
                <ul class="nav color-list sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../genre/action" title="Action">Action</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/adventure" title="Adventure">Adventure</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/cars" title="Cars">Cars</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/comedy" title="Comedy">Comedy</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/dementia" title="Dementia">Dementia</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/demons" title="Demons">Demons</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/drama" title="Drama">Drama</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/ecchi" title="Ecchi">Ecchi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/fantasy" title="Fantasy">Fantasy</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/game" title="Game">Game</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/harem" title="Harem">Harem</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/historical" title="Historical">Historical</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/horror" title="Horror">Horror</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/josei" title="Josei">Josei</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/kids" title="Kids">Kids</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/magic" title="Magic">Magic</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/martial+arts" title="Martial Arts">Martial Arts</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/mecha" title="Mecha">Mecha</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/military" title="Military">Military</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/music" title="Music">Music</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/mystery" title="Mystery">Mystery</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/parody" Title="Parody">Parody</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/police" title="Police">Police</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/psychological" title="Psychological">Psychological</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/romance" title="Romance">Romance</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/samurai" title="Samurai">Samurai</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/school" title="School">School</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/sci-fi" title="Sci Fi">Sci Fi</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/seinen" title="Seinen">Seinen</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/shoujo" title="Shoujo">Shoujo</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/shoujo+ai" title="Shoujo Ai">Shoujo Ai</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/shounen" title="Shounen">Shounen</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/shounen+Ai" title="Shounen Ai">Shounen Ai</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/slice+of+life" title="Slice of Life">Slice of Life</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/space" title="Space">Space</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/sports" title="Sports">Sports</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/super+power" title="Super Power">Super Power</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/supernatural" title="Supernatural">Supernatural</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/thriller" title="Thriller">Thriller</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/vampire" title="Vampire">Vampire</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/yaoi" title="Yaoi">Yaoi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/yuri" title="Yuri">Yuri</a></li>
                    <li class="nav-item nav-more">
                        <a class="nav-link"><i class="fas fa-plus mr-2"></i>More</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
<div id="header" class="header-home ">
    <div class="container">
        <div id="mobile_menu"><i class="fa fa-bars"></i></div>
        <a href="<?=$websiteUrl?>/home" id="logo" title="AnimeZia">
            <img src="<?=$cdn?>/images/logo.webp" width="100%" height="auto"
                alt="AnimeZia">
            <div class="clearfix"></div>
        </a>
        <div id="search">
            <div class="search-content">
                <form action="/search" autocomplete="off">
                    <input type="text" class="form-control search-input" name="keyword" id="searching"
                        placeholder="Search anime..." required>
                    <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="header-group">
            <div class="zoro-group">
                <div class="zrg-title"><span class="top">Join now</span><span class="bottom">AnimeZia Groups</span></div>
                <div class="zrg-list">
                    <div class="item"><a href="<?=$websiteUrl?>/donate" class="zr-social-button tl-btn"><i
                                class="fas fa-donate"></i></a></div>
                    <div class="item"><a href="<?=$telegram?>" target="_blank" class="zr-social-button dc-btn"><i
                                class="fab fa-telegram"></i></a></div>
                    <div class="item"><a href="<?=$discord?>" target="_blank"
                            class="zr-social-button dc-btn"><i class="fab fa-discord"></i></a></div>
                    <div class="item"><a href="<?=$redit?>" target="_blank" class="zr-social-button rd-btn"><i
                                class="fab fa-reddit-alien"></i></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="header-setting">
            <div class="hs-toggles">
                <a href="<?=$websiteUrl?>/anime" class="hst-item" data-toggle="tooltip" data-original-title="Select Anime List">
                    <div class="hst-icon"><i class="fas fa-list"></i></div>
                    <div class="name"><span>Anime</span></div>
                </a>
                <a href="<?=$websiteUrl?>/popular" class="hst-item" data-toggle="tooltip" data-original-title="Popular Anime List">
                    <div class="hst-icon"><i class="fas fa-star"></i></div>
                    <div class="name"><span>Popular</span></div>
                </a>
                <a href="<?=$websiteUrl?>/type/movies" class="hst-item" data-toggle="tooltip" data-original-title="Anime Movies">
                    <div class="hst-icon"><i class="fas fa-film"></i></div>
                    <div class="name"><span>Movie</span></div>
                </a>
                <a href="<?=$websiteUrl?>/anilist/random" class="hst-item" data-toggle="tooltip" data-original-title="Select Random Anime">
                    <div class="hst-icon"><i class="fas fa-random"></i></div>
                    <div class="name"><span>Random</span></div>
                </a>
               
                <div class="clearfix"></div>
            </div>
        </div>
        <div id="pick_menu">
            <div class="pick_menu-ul">
                <ul class="ulclear">
                    <li class="pmu-item pmu-item-home">
                        <a class="pmu-item-icon" href="/" title="Home">
                            <img src="/files/images/pick-home.svg"
                                data-toggle="tooltip" data-placement="right" title="" data-original-title="Home">
                        </a>
                    </li>
                    <li class="pmu-item pmu-item-movies">
                        <a class="pmu-item-icon" href="/movies" title="Movies">
                            <img src="/files/images/pick-movies.svg"
                                data-toggle="tooltip" data-placement="right" title="" data-original-title="Movies">
                        </a>
                    </li>
                    <li class="pmu-item pmu-item-show">
                        <a class="pmu-item-icon" href="/tv-series" title="TV Series">
                            <img src="/files/images/pick-show.svg"
                                data-toggle="tooltip" data-placement="right" title="" data-original-title="TV Series">
                        </a>
                    </li>
                    <li class="pmu-item pmu-item-popular">
                        <a class="pmu-item-icon" href="/most-popular-anime" title="Most Popular">
                            <img src="/files/images/pick-popular.svg"
                                data-toggle="tooltip" data-placement="right" title=""
                                data-original-title="Most Popular">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
       <!--- <div id="header_right">
            <div id="user-slot">
                <div class="header_right-user">
                    <a href="#" class="btn-user btn btn-sm btn-primary btn-login"><i
                            class="fas fa-book"></i> Manga</a>
                </div>
            </div>
        </div> --->
        <div id="mobile_search" class=""><i class="fa fa-search"></i></div>
        <div class="clearfix"></div>
    </div>
</div>
        <div class="clearfix"></div>
        <div id="main-wrapper" date-page="movie_watch" data-id="">
            <div id="ani_detail">
                <div class="ani_detail-stage">
                    <div class="container">
                        <div class="anis-cover-wrap">
                            <div class="anis-cover"
                                style="background-image: url('<?=$cdn?>/images/banner.webp')">
                            </div>
                        </div>
                        <div class="anis-watch-wrap">
                            <div class="prebreadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li itemprop="itemListElement" itemscope=""
                                            itemtype="http://schema.org/ListItem" class="breadcrumb-item">
                                            <a itemprop="item" href="/"><span itemprop="name">Home</span></a>
                                            <meta itemprop="position" content="1">
                                        </li>
                                        <li itemprop="itemListElement" itemscope=""
                                            itemtype="http://schema.org/ListItem" class="breadcrumb-item">
                                            <a itemprop="item" href="/anime"><span itemprop="name">Anime</span></a>
                                            <meta itemprop="position" content="2">
                                        </li>
                                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item" aria-current="page">
                                            <a itemprop="item" href="/anime/<?=$anime?>"><span itemprop="name"><?=$getAnime['name']?></span></a>
                                            <meta itemprop="position" content="3">
                                        </li>
                                        <li itemprop="itemListElement" itemscope=""
                                            itemtype="http://schema.org/ListItem" class="breadcrumb-item"
                                            aria-current="page">
                                            <a itemprop="item" href="<?=$websiteUrl?>/watch/<?=$url?>"><span
                                                    itemprop="name">Episode <?=$getEpisode['ep_num']?></span></a>
                                            <meta itemprop="position" content="4">
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="anis-watch anis-watch-tv">
                                <div class="watch-player">
                                    <div class="player-frame">
                                        <div class="loading-relative loading-box" id="embed-loading">
                                            <div class="loading">
                                                <div class="span1"></div>
                                                <div class="span2"></div>
                                                <div class="span3"></div>
                                            </div>
                                        </div>
                                        <iframe name="iframe-to-load" id="iframeid" src="https://animezia.com/player/<?=$url?>" frameborder="0" scrolling="no" allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                                    </div>
                                    <div class="player-controls">
                                        <div class="pc-item pc-resize">
                                            <a href="javascript:;" id="media-resize" class="btn btn-sm"><i
                                                    class="fas fa-expand mr-1"></i>Expand</a>
                                        </div>
                                        <div class="pc-item pc-toggle pc-light">
                                            <div id="turn-off-light" class="toggle-basic">
                                                <span class="tb-name"><i class="fas fa-lightbulb mr-2"></i>Light</span>
                                                <span class="tb-result"></span>
                                            </div>
                                        </div>
                                        <div class="pc-item pc-download">
                                            <a class="btn btn-sm pc-download"
                                                href="<?=$download?>"
                                                target="_blank"><i class="fas fa-download mr-2"></i>Download</a>
												<a onclick='reload()' class="btn btn-sm pc-download"><i class="fas fa-refresh mr-2"></i>Refresh</a>
                                        </div>
                                        <div class="pc-right">
                                        <?php if($getEpisode['prevEpText'] == "") {
                                            echo "";
                                        } else { ?>
                                        <a href="/watch<?=$getEpisode['prevEpLink']?>">
                                            <button class="btn btn-secondary" type="button" style="float:left;height: 32px;font-size: 14px;font-weight: normal;display: block;"><i class="fa fa-step-backward"></i> Previous</button>
                                        </a>&nbsp; 
                                        <?php } ?>
                                        <?php if($getEpisode['nextEpText'] == "") {
                                            echo "";
                                        } else { ?>
                                        <a href="/watch<?=$getEpisode['nextEpLink']?>">
                                            <button class="btn btn-secondary" type="button" style="float:right;height: 32px;font-size: 14px;font-weight: normal;display: block;">Next <i class="fa fa-step-forward"></i></button>
                                        </a>
                                        <?php } ?>
                                            
                                            <div class="pc-item pc-download" style="display:none;">
                                                <a class="btn btn-sm pc-download"><i class="fas fa-download mr-2"></i>Download</a>
												<a onclick='reload()' class="btn btn-sm pc-download"><i class="fas fa-refresh mr-2"></i>Refresh</a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
			
                                <div class="player-servers">
                                    <div id="servers-content">
                                        <div class="ps_-status">
                                            <div class="content">
                                                <div class="server-notice"><strong>Currently watching <b>Episode <?=$getEpisode['ep_num']?></b></strong> Click Refresh button if not working.</div>
                                            </div>
                                        </div>
                                        <div class="ps_-block ps_-block-sub servers-mixed">
                                            <div class="ps__-title"><i class="fas fa-server mr-2"></i>SERVERS:</div>
                                            <div class="ps__-list">
											<div class="item">
                                                    <a id="server1" href="https://the.animezia.com/player/v1.php?id=<?=$url?>" target="iframe-to-load" class="btn btn-server active">Server 1</a>
                                                </div>
                                                <div class="item">
                                                    <a id="server2" href="https://animezia.com/player/<?=$url?>" target="iframe-to-load" class="btn btn-server active">Server 2</a>
                                                </div>
												
												<div class="item">
                                                    <a id="server3" href="https://the.animezia.com/player/v2.php?id=<?=$url?>" target="iframe-to-load" class="btn btn-server active">Server 3</a>
                                                </div>
                                                
                                            </div>
                                            <div class="clearfix"></div>
                                            <div id="source-guide"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="episodes-content">
                                    <div class="seasons-block seasons-block-max">
                                        <div id="detail-ss-list" class="detail-seasons">
                                            <div class="detail-infor-content">
                                                <div style="min-height:43px;" class="ss-choice">
                                                    <div class="ssc-list">
                                                        <div id="ssc-list" class="ssc-button">
                                                            <div class="ssc-label">List of episodes:</div>
                                                        </div>
                                                    </div>
                                                    
<div class="ssc-quick">
  <form autocomplete="off">
    <input type="text" oninput="numberOnly(this.id);" maxlength="4" class="form-control search-input" id="search-ep" placeholder="Search EP #">
    <button id="srep" onclick="epenter()" style="background-color: transparent;" type="button" class="sscq-icon search-icon">
      <i style="color: gray;" class="fas fa-search"></i>
    </button>
  </form>
</div>
<script>
 function reload() {
                document.getElementById('iframeid').src += '';
            }
			
  function numberOnly(id) {
    var element = document.getElementById(id);
    element.value = element.value.replace(/[^0-9]/gi, "");
  }

  function epenter() {
    var x = document.getElementById("search-ep").value;
    if (x != "") {
    var numb = window.location.href.length - window.location.href.lastIndexOf("-") - 1;
    var newurl = window.location.href.slice(0, -numb) + x;
    location.replace(newurl);
    };
  }
  document.getElementById("search-ep").addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("srep").click();
  }
});
	
	/** const route = window.location.href ;
	var isdub = route.includes("-dub");
	if ( isdub == true) {
	let subr = window.location.replace("-dub","");
	let sdbtn = document.querySelector("#subdub");
	sdbtn.setAttribute("href", subr);
	sdbtn.innerHTML = "Watch SUB"; 
	} */

</script>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div id="episodes-page-1" class="ss-list ss-list-min" data-page="1"
                                                    style="display:block;">

                                                    <?php 
                                                    foreach ((array )$episodelist as $episodelist) {  ?>
                                                    <a title="Episode <?=$episodelist['episodeNum']?>" class="ssl-item ep-item <?php if ($getEpisode['ep_num'] === $episodelist['episodeNum']) {echo 'active';}?>"
                                                        href="/watch/<?=$episodelist['episodeId']?>">
                                                        <div class="ssli-order" title=""><?=$episodelist['episodeNum']?></div>
                                                        <div class="ssli-detail">
                                                            <div class="ep-name dynamic-name" data-jname="" title="">
                                                            </div>
                                                        </div>
                                                        <div class="ssli-btn">
                                                            <div class="btn btn-circle"><i class="fas fa-play"></i>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="anis-watch-detail">
                                <div class="anis-content">
                                    <div class="anisc-poster">
                                        <div class="film-poster">
                                            <img src="https://ik.imagekit.io/<?=$imgk?>/tr:w-200,f-webp/<?=$getAnime['imageUrl']?>"
                                                data-src="https://ik.imagekit.io/<?=$imgk?>/tr:w-200,f-webp/<?=$getAnime['imageUrl']?>"
                                                class="film-poster-img ls-is-cached lazyloaded"
                                                alt="Watch free online <?=$getAnime['name']?> on animezia">
                                        </div>
                                    </div>
                                    <div class="anisc-detail">
                                        <h2 class="film-name">
                                            <a href="/anime/<?=$anime?>" class="text-white dynamic-name"
                                                title="<?=$getAnime['name']?>" data-jname="<?=$getAnime['name']?>"
                                                style="opacity: 1;"><?=$getAnime['name']?></a>
                                        </h2>
                                        <div class="film-stats">
                                            <div class="tac tick-item tick-quality">HD</div>
                                            <div class="tac tick-item tick-dub">SUB/DUB</div>
                                            <span class="dot"></span>
                                            <span class="item"><?=$getAnime['status']?></span>
                                            <span class="dot"></span>
                                            <span class="item"><?=$getAnime['released']?></span>
                                            <span class="dot"></span>
                                            <span class="item"><?=$getAnime['othername']?></span>
                                            <span class="dot"></span>
                                            <span class="item"><?=$getAnime['type']?></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="film-description m-hide">
                                            <div class="text"><?=$getAnime['synopsis']?></div>
                                        </div>
                                        <div class="film-text m-hide mb-3">
									
                                                    <a id="subdub" class="btn btn-primary"></a>
                                      
                                            AnimeZia is a site to watch online anime like <strong><?=$getAnime['name']?></strong> online, or you can even watch <strong><?=$getAnime['name']?></strong> in HD quality
                                        </div>
                                        <div class="block"><a href="/anime/<?=$anime?>"
                                                class="btn btn-xs btn-light"><i class="fas fa-book-open mr-2"></i> View detail</a></div>
                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="share-buttons share-buttons-detail">
            <div class="container">
                <div class="share-buttons-block">
                    <div class="share-icon"></div>
                    <div class="sbb-title">
                        <span>Share Anime</span>
                        <p class="mb-0">to your friends</p>
                    </div>
                    <div class="addthis_inline_share_toolbox"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        
            <div class="container">
                <div id="main-content">
                    <section class="block_area block_area-comment">
                        <div class="block_area-header block_area-header-tabs">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Comments</h2>
                            </div>
                            <div class="float-left bah-setting">
                                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <?php include('./_php/disqus.php'); ?>
                        </div>
                    </section>

                    <?php include('./_php/recent-releases.php'); ?>
                    <div class="clearfix"></div>
                </div>
                <?php include('./_php/sidenav.php'); ?>
                <div class="clearfix"></div>
            </div>
        </div>
       <div id="footer"
    data-settings='{"auto_play":1,"auto_next":1,"auto_load_comments":0,"enable_dub":0,"anime_name":"jp","play_original_audio":0}'>
    <div id="footer-about">
        <div class="container">
            <div class="footer-top">
                <a href="/" class="footer-logo">
                    <img src="<?=$cdn?>/images/logo.webp" alt="AnimeZia">
                    <div class="clearfix"></div>
                </a>
                <div class="footer-joingroup">
                    <div class="zoro-group">
                        <div class="zrg-title"><span class="top">Join now</span><span class="bottom">AnimeZia
                                Groups</span></div>
                        <div class="zrg-list">
                            <div class="item"><a target="_blank" href="<?=$websiteUrl?>/donate" class="zr-social-button tl-btn"><i
                                class="fas fa-donate"></i></a></div>
                    <div class="item"><a href="<?=$telegram?>" target="_blank" class="zr-social-button dc-btn"><i
                                class="fab fa-telegram"></i></a></div>
                    <div class="item"><a href="<?=$discord?>" target="_blank"
                            class="zr-social-button dc-btn"><i class="fab fa-discord"></i></a></div>
                    <div class="item"><a href="<?=$redit?>" target="_blank" class="zr-social-button rd-btn"><i
                                class="fab fa-reddit-alien"></i></a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="footer-az">
                <div class="block mb-3">
                    <span class="ftaz">A-Z LIST</span>
                    <span class="size-s">Searching anime order by alphabet name A to Z.</span>
                </div>
                <ul class="ulclear az-list">
                    <li><a href="/anime">All</a></li>
                    <li><a href="<?=$websiteUrl?>/az-list/A">A</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/B">B</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/C">C</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/D">D</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/E">E</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/F">F</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/G">G</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/H">H</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/I">I</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/J">J</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/K">K</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/L">L</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/M">M</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/N">N</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/O">O</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/P">P</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/Q">Q</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/R">R</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/S">S</a>
                    </li>

                    <li><a href="<?=$websiteUrl?>/az-list/T">T</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/U">U</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/V">V</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/W">W</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/X">X</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/Y">Y</a>
                    </li>
                    <li><a href="<?=$websiteUrl?>/az-list/Z">Z</a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="footer-links">
                <ul class="ulclear">
                    <li><a href="<?=$websiteUrl?>/terms" title="Terms of service">Terms of service</a></li>
                    <li><a href="<?=$websiteUrl?>/dmca" title="DMCA">DMCA</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="about-text">AnimeZia does not store any files on our server, we only share link to the
                media which is hosted on 3rd party services.</div>
           <p class="copyright">Served with <i class="fas fa-heart"></i> AnimeZia 2023. Frontend by Otakatsu</p>
        </div>
    </div>
</div>
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
        <script type="text/javascript">
            $(".btn-server").click(function () {
                $(".btn-server").removeClass("active");
                $(this).closest(".btn-server").addClass("active");
            });
        </script>
    </div>
</body>

</html>
