<?php 
require_once('./_config.php');

$parts=parse_url($_SERVER['REQUEST_URI']); 
$page_url=explode('/', $parts['path']);
$url = $page_url[count($page_url)-1];
//$url = "naruto";

$getAnime = file_get_contents("$api/getAnime/$url");
$getAnime = json_decode($getAnime, true);
$episodelist = $getAnime['episode_id'];
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Watch <?=$getAnime['name']?> - AnimeZia</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="Watch <?=$getAnime['name']?> - AnimeZia" />
    <meta name="description" content="<?=substr($getAnime['synopsis'],0, 90)?>.... Read More On AnimeZia" />
    <meta name="keywords" content="AnimeZia, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, AnimeZia, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa" />
    <meta name="charset" content="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta property="og:title" content="Watch <?=$getAnime['name']?> - AnimeZia">
    <meta property="og:description" content="W<?=substr($getAnime['synopsis'],0, 90)?>.... Read More On AnimeZia.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AnimeZia">
    <meta property="og:url" content="<?=$websiteUrl?>/anime/<?=$url?>">
    <meta itemprop="image" content="<?=$getAnime['imageUrl']?>">
    <meta property="og:image" content="<?=$getAnime['imageUrl']?>">
    <meta property="og:image:secure_url" content="<?=$getAnime['imageUrl']?>">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta property="twitter:title" content="Watch <?=$getAnime['name']?> - AnimeZia">
    <meta property="twitter:description" ontent="W<?=substr($getAnime['synopsis'],0, 90)?>.... Read More On AnimeZia.">
    <meta property="twitter:url" content="<?=$websiteUrl?>/anime/<?=$url?>">
    <meta property="twitter:card" content="summary">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <link rel="shortcut icon" href="<?=$websiteUrl?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=$cdn?>/css/style.css">
    <link rel="stylesheet" href="<?=$cdn?>/css/min.css">
	<script async src="https://arc.io/widget.min.js#wHLGVKUU"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63430163bc99824a"></script>
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
</head>

<body data-page="movie_info">
    <div id="sidebar_menu_bg"></div>
    <div id="wrapper" data-page="page_home">
        <?php include('./_php/header.php'); ?>
        <div class="clearfix"></div>
        <div id="main-wrapper" date-page="movie_info" data-id="<?=$url?>">
            <div id="ani_detail">
                <div class="ani_detail-stage">
                    <div class="container">
                        <div class="anis-cover-wrap">
                            <div class="anis-cover"
                                style="background-image: url('<?=$getAnime['imageUrl']?>')"></div>
                        </div>
                        <div class="anis-content">
                            <div class="anisc-poster">
                                <div class="film-poster">
                                    <img src="<?=$cdn?>/images/no_poster.jpg"
                                        data-src="<?=$getAnime['imageUrl']?>"
                                        class="lazyload film-poster-img">
                                </div>
                            </div>
                            <div class="anisc-detail">
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
                                            <li itemprop="itemListElement" itemscope=""
                                                itemtype="http://schema.org/ListItem"
                                                class="breadcrumb-item dynamic-name" data-jname="<?=$getAnime['name']?>"
                                                aria-current="page">
                                                <a itemprop="item" href="/anime/<?=$url?>"><span itemprop="name"><?=$getAnime['name']?></span></a>
                                                <meta itemprop="position" content="3">
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                                <h2 class="film-name dynamic-name" data-jname="<?=$getAnime['name']?>"><?=$getAnime['name']?></h2>
                                <div class="film-stats">
                                    <div class="tac tick-item tick-quality">HD</div>
                                    <div class="tac tick-item tick-dub">
                                    <?php $str = $getAnime['name'];
                                          $last_word_start = strrpos ( $str , " ") + 1;
                                          $last_word_end = strlen($str) - 1;
                                          $last_word = substr($str, $last_word_start, $last_word_end);
                                          if ($last_word == "(Dub)"){echo "Dubbed";} else {echo "Subbed";}
                                    ?>
                                    </div>
                                    <span class="dot"></span>
                                    <span class="item"><?=$getAnime['type']?></span>
                                    <div class="clearfix"></div>
                                </div>
                                <?php if(count($getAnime['episode_id']) == 0) {
                                    echo "";
                                } else { ?>
                                <div class="film-buttons">
                                    <a href="/watch/<?php foreach(array_slice($episodelist, 0, 1) as $episode1) {?><?=$episode1['episodeId']?><?php } ?>" class="btn btn-radius btn-primary btn-play"><i
                                            class="fas fa-play mr-2"></i>Watch now</a>
                                </div>
                                <?php } ?>
                                <div class="film-description m-hide">
                                    <div class="text"><?=$getAnime['synopsis']?></div>
                                </div>
                                <div class="film-text m-hide">AnimeZia is a site to watch online anime like <strong><?=$getAnime['name']?></strong> online, or you can even watch <strong><?=$getAnime['name']?></strong> in HD quality</div>
                                <div class="share-buttons share-buttons-min mt-3">
                                <div class="share-buttons-block" style="padding-bottom: 0 !important;">
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
                            <div class="anisc-info-wrap">
                                <div class="anisc-info">
                                    <div class="item item-title w-hide">
                                        <span class="item-head">Overview:</span>
                                        <div class="text"><?=$getAnime['synopsis']?></div>
                                    </div>
                                    <div class="item item-title">
                                        <span class="item-head">Other names:</span> <span class="name"><?=$getAnime['othername']?></span>
                                    </div>
                                    <div class="item item-title">
                                        <span class="item-head">Language:</span> 
                                        <span class="name">
                                            <?php $str = $getAnime['name'];
                                                $last_word_start = strrpos ( $str , " ") + 1;
                                                $last_word_end = strlen($str) - 1;
                                                $last_word = substr($str, $last_word_start, $last_word_end);
                                                if ($last_word == "(Dub)"){echo "Dubbed";} else {echo "Subbed";}
                                            ?>
                                        </span>
                                    </div>
                                    <div class="item item-title">
                                        <span class="item-head">Episodes:</span> <span class="name"><?php echo count($getAnime['episode_id'])?></span>
                                    </div>
                                    <div class="item item-title">
                                        <span class="item-head">Release Year:</span> <span class="name"><?=$getAnime['released']?></span>
                                    </div>
                                    <div class="item item-title">
                                        <span class="item-head">Type:</span> <span class="name"><?=$getAnime['type']?></span>
                                    </div>
                                    <div class="item item-title">
                                        <span class="item-head">Status:</span> <a href="<?php if ($getAnime['status'] == "Completed") {echo "/status/completed";} else {echo "/status/ongoing";}?>"><?=$getAnime['status']?></a>
                                    </div>
                                    <div class="item item-list">
                                        <span class="item-head">Genres:</span> <?php foreach($getAnime['genres'] as $genre) { ?><a href="<?=$websiteUrl?>/genre/<?php $genreUrl = strtolower($genre); echo str_replace(" ","+", $genreUrl);?>"><?=$genre?></a><?php } ?>
                                    </div>
                                    <div class="film-text w-hide">AnimeZia is a site to watch online anime like <strong><?=$getAnime['name']?></strong> online, or you can even watch <strong><?=$getAnime['name']?></strong> in HD quality</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
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