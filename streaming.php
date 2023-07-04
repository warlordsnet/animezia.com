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

<?php include('./_php/header.php'); ?>

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
                                        <iframe name="iframe-to-load" id="iframeid" src="https://the.animezia.com/player/v1.php?id=<?=$url?>&download=<?=$download?>" frameborder="0" scrolling="no" allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
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
                                                    <a id="server1" href="https://the.animezia.com/player/v1.php?id=<?=$url?>&download=<?=$download?>" target="iframe-to-load" class="btn btn-server active">Server 1</a>
                                                </div>
                                                <div class="item">
                                                    <a id="server2" href="https://animezia.com/player/<?=$url?>" target="iframe-to-load" class="btn btn-server">Server 2</a>
                                                </div>
												
												<div class="item">
                                                    <a id="server3" href="https://the.animezia.com/player/v2.php?id=<?=$url?>" target="iframe-to-load" class="btn btn-server">Server 3</a>
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
									
                                                    <a id="subdub" class="btn btn-primary">Switch Sub?Dub</a>
													
                                      <button id="save-to-playlist-button" onclick="saveToPlaylist('Anime List', '<?=$getAnime['name']?> Ep <?=$getEpisode['ep_num']?>', 'https://the.animezia.com/watch/<?=$url?>', 'https://ik.imagekit.io/<?=$imgk?>/tr:w-100,tr:f-webp/<?=$getAnime['imageUrl']?>');checkIfBookmarked('Anime List', '<?=$getAnime['name']?> Ep <?=$getEpisode['ep_num']?>')" class="btn btn-radius btn-primary btn-play"><i
                                            class="fas fa-bookmark mr-2"></i>Watch later</button>
											
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
			
			<script>
			const button = document.querySelector('#subdub');
button.addEventListener('click', () => {
  let currentURL = window.location.href;
  console.log('Current URL:', currentURL);
  if (currentURL.includes('dub-episode')) {
    let newURL = currentURL.replace('-dub', '');
    console.log('New URL:', newURL);
    window.location.href = newURL;
  } else {
    let newURL = currentURL.replace('-episode', '-dub-episode');
    console.log('New URL:', newURL);
    window.location.href = newURL;
  }
});

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
	window.onload = function() {
 console.log('window.onload called');
checkIfBookmarked('Anime List', '<?=$getAnime['name']?> Ep <?=$getEpisode['ep_num']?>');
 };
	</script>
			
			
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
