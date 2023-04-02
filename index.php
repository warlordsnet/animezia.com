<?php 
require('./_config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AnimeZia - Official AnimeZia Watch High Quality Anime Online Without Ads</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-language" content="en" />
     <meta name="title" content="AnimeZia - Official AnimeZia #1 Watch High Quality Anime Online Without Ads" />
    <meta name="description" content="AnimeZia - Official AnimeZia #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime." />
    <meta name="keywords" content="animezia, animezia anime, download anime, otakuu, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$websiteUrl?>" />
    <meta property="og:title" content="AnimeZia - Official AnimeZia Watch High Quality Anime Online Without Ads" />
    <meta property="og:image" content="<?=$cdn?>/images/banner.webp" />
    <meta property="og:description "
        content="AnimeZia - Official AnimeZia #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime." />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <link rel="shortcut icon" href="<?=$websiteUrl?>/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css?v=0.002">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css?v=0.002">
    <link rel="stylesheet" href="<?=$cdn?>/css/home.css">
	<script async src="https://arc.io/widget.min.js#wHLGVKUU"></script>

</head>
<script>
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('./sw.js');
};
</script>
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
<body>
    <div id="xwrapper">
        <!--Begin: Header-->
        <div id="xheader">
            <div class="container">
                <div id="xheader_browser">
                    <div class="header-btn"><i class="fas fa-bars mr-2"></i>Menu</div>
                </div>
                <div id="xheader_menu">
                    <ul class="nav header_menu-list">
                        <li class="nav-item"><a href="<?=$websiteUrl?>/home" title="Home">Home</a></li>
                        <li class="nav-item"><a href="<?=$websiteUrl?>/type/movies" title="Movies">Movies</a></li>
                        <li class="nav-item"><a href="<?=$websiteUrl?>/type/tv-series" title="TV Series">TV Series</a>
                        </li>
                        <li class="nav-item"><a href="<?=$websiteUrl?>/popular" title="Most Popular">Most Popular</a>
                        </li>
                        <li class="nav-item"><a href="<?=$websiteUrl?>/new-season" title="New Season">New Season</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--End: Header-->
        <!--Begin: Main-->
        <div id="xmain-wrapper">
            <div id="mw-top">
                <div class="container">
                    <div class="mwt-content">
                        <div class="mwt-icon"><img
                                src="<?=$cdn?>/images/kobeni.webp">
                        </div>
                        <div class="mwh-logo">
                            <a href="<?=$websiteUrl?>/home" class="mwh-logo-div">
                                <img src="<?=$cdn?>/images/logo.webp" alt="AnimeZia">
                            </a>
                            <div class="clearfix"></div>
                        </div>
                        <div id="xsearch" class="home-search">
                            <div class="search-content">
                                <form action="<?=$websiteUrl?>/search" autocomplete="off" id="search-form">
                                    <div class="search-submit">
                                        <div class="search-icon btn-search"><i class="fa fa-search"></i></div>
                                    </div>
                                    <input type="text" class="form-control search-input" name="keyword"
                                        placeholder="Search anime..." required>
                                </form>
                            </div>
                            <div class="xhashtag">
                                <span class="title">Top search:</span>

                                <a href="<?=$websiteUrl?>/search?keyword=One%20Piece" class="item">One Piece</a>

                                <a href="<?=$websiteUrl?>/search?keyword=Naruto%3A%20Shippuden" class="item">Naruto:
                                    Shippuden</a>

                                <a href="<?=$websiteUrl?>/search?keyword=Naruto" class="item">Naruto</a>

                                <a href="<?=$websiteUrl?>/search?keyword=Jujutsu%20Kaisen%200%20Movie"
                                    class="item">Jujutsu Kaisen 0
                                    Movie</a>

                                <a href="<?=$websiteUrl?>/search?keyword=Bleach" class="item">Bleach</a>

                                <a href="<?=$websiteUrl?>/search?keyword=Jujutsu%20Kaisen%20(TV)" class="item">Jujutsu
                                    Kaisen (TV)</a>

                                <a href="<?=$websiteUrl?>/search?keyword=The%20Eminence%20in%20Shadow" class="item">The
                                    Eminence in
                                    Shadow</a>

                                <a href="<?=$websiteUrl?>/search?keyword=Mob%20Psycho%20100%20III" class="item">Mob
                                    Psycho 100 III</a>

                                <a href="<?=$websiteUrl?>/search?keyword=Boruto%3A%20Naruto%20Next%20Generations"
                                    class="item">Boruto:
                                    Naruto Next Generations</a>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mw-body">
                <div class="container">
                    <div id="action-button">
                        <a href="/home" class="btn btn-lg btn-radius btn-primary">View Full Site <i
                                class="fas fa-arrow-circle-right ml-2"></i></a>
                    </div>
                    
                    
                    <div class="mwb-2col">
                        <div class="mwb-left" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h1 itemprop="name" class="mw-heading">AnimeZia - The best site to watch anime online for Free</h1>
							<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Do you know that according to Google, the monthly search volume for anime related topics
                                is
                                up to over 1 Billion times? Anime is famous worldwide and it is no wonder we've seen a
                                sharp
                                rise in the number of free anime streaming sites.</p> </div>
                            <p>Just like free online movie streaming sites, anime watching sites are not created
                                equally,
                                some are better than the rest, so we've decided to build AnimeZia to be one of the best
                                free
                                anime streaming site for all anime fans on the world. Also, We are just indexing api results. Blame Consumet api</p>
                            <h2>1/ What is AnimeZia?</h2>
                            <p>AnimeZia is a free site to watch anime and you can even download subbed or dubbed anime in
                                ultra HD quality without any registration or payment. By having No Ads in all kinds, we
                                are
                                trying to make it the safest site for free anime.</p>
                            <h2>2/ Is AnimeZia safe?</h2>
                            <p>Yes we are, we do have only one Ads to cover the server cost and we keep scanning the ads
                                24/7 to make sure all are clean, If you find any ads that is suspicious, please forward
                                us
                                the info and we will remove it.</p>
                            <h2>3/ So what make AnimeZia the best site to watch anime free online?</h2>
                            <p>Before building AnimeZia, we've checked many other free anime sites, and learnt from them.
                                We
                                only keep the good things and remove all the bad things from all the competitors, to put
                                it
                                in our AnimeZia website. Let's see how we're so confident about being the best site for
                                anime
                                streaming:</p>
                            <ul>
                                <li><strong>Safety:</strong> We try our best to not having harmful ads on AnimeZia.
                                </li>
                                <li><strong>Content library:</strong> Our main focus is anime. You can find here
                                    popular,
                                    classic, as well as current titles from all genres such as action, drama, kids,
                                    fantasy,
                                    horror, mystery, police, romance, school, comedy, music, game and many more. All
                                    these
                                    titles come with English subtitles or are dubbed in many languages.
                                </li>
                                <li><strong>Quality/Resolution:</strong> All titles are in excellent resolution, the
                                    best
                                    quality possible. AnimeZia also has a quality setting function to make sure our users
                                    can
                                    enjoy streaming no matter how fast your Internet speed is. You can stream the anime
                                    at
                                    360p if your Internet is being ridiculous, Or if it is good, you can go with 720p or
                                    even 1080p anime.
                                </li>
                                <li><strong>Streaming experience:</strong> Compared to other anime streaming sites, the
                                    loading speed at AnimeZia is faster. Downloading is just as easy as streaming, you
                                    won't
                                    have any problem saving the videos to watch offline later.
                                </li>
                                <li><strong>Updates:</strong> We updates new titles as well as fulfill the requests on a
                                    daily basis so be warned, you will never run out of what to watch on AnimeZia.
                                </li>
                                <li><strong>User interface:</strong> Our UI and UX makes it easy for anyone, no matter
                                    how
                                    old you are, how long have you been on the Internet. Literally, you can figure out
                                    how
                                    to navigate our site after a quick look. If you want to watch a specific title,
                                    search
                                    for it via the search box. If you want to look for suggestions, you can use the
                                    site's
                                    categories or simply scroll down for new releases.
                                </li>
                                <li><strong>Device compatibility:</strong> AnimeZia works alright on both your mobile and
                                    desktop. However, we'd recommend you use your desktop for a smoother streaming
                                    experience.
                                </li>
                                <li><strong>Customer care:</strong> We are in active mode 24/7. You can always contact
                                    us
                                    for any help, query, or business-related inquiry. On our previous projects, we were
                                    known for our great customer service as we were quick to fix broken links or upload
                                    requested content.
                                </li>
                            </ul>
                            <p>So if you're looking for a trustworthy and safe site for your Anime streaming, let's give
                                AnimeZia a try. And if you like us, please help us to spread the words and do not forget
                                to
                                bookmark our site.</p>
                            <p>Thank you!</p>
                            <p>&nbsp;</p>
                        </div>
                        <div class="mwb-right">
                            <div class="zr-connect zr-connect-list">
                                <h2 class="heading-news">Trending Anime</h2>
                                <div class="connecting-list">
                                <?php
                                  $ch = curl_init();
								  curl_setopt($ch, CURLOPT_URL, "$api/top-airing");
								  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
								  curl_setopt($ch, CURLOPT_HEADER, FALSE);
								  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
								  $response = curl_exec($ch);
								  $json = json_decode($response, true);
                                 
                                  foreach((array) $json as $key => $trending) { ?>
                                    <div class="item">
                                        <h4 class="item-name"><a href="<?=$websiteUrl?>/anime/<?=$trending['animeId']?>"
                                                title="<?=$trending['animeTitle']?>"><?=$trending['animeTitle']?></a></h4>
                                        <div class="subject">
                                            <div><?=$trending['latestEp']?></div>
                                        </div>
                                    </div>
                                <?php } curl_close($ch); ?>
                                </div>
                                <div class="d-block">
                                    <a href="<?=$websiteUrl?>/home"
                                        class="btn btn-sm py-2 btn-block btn-radius btn-blank text-white"
                                        style="background-color: rgba(255,255,255,.1);">Home</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--End: Main-->
        <!--Begin: Footer-->
        <div id="xfooter-about">
            <div class="container">
                <p class="copyright">© 2023
                     <a href="<?=$websiteUrl?>">AnimeZia</a>. Frontend by Otakatsu.
                </p>
            </div>
        </div>
        <!--End: Footer-->
    </div>
    <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js?v=0.002"></script>
    <script type="text/javascript"
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js?v=0.002"></script>
    <script>
    <script>
        $(document).ready(function () {
            $("#xheader_browser").click(function (e) {
                $("#xheader_menu, #xheader_browser").toggleClass("active");
            });
            $('.btn-search').click(function () {
                if ($('.search-input').val().trim() !== "") {
                    $('#search-form').submit();
                }
            });
        });
    </script>
</body>

</html>