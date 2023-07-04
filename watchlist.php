<?php include("./_config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Watchlist - AnimeZia</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <link rel="shortcut icon" href="<?=$websiteUrl?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=$cdn?>/css/style.css">
   
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

<body>
    <div id="sidebar_menu_bg"></div>
    <div id="wrapper">
        <?php include("./_php/header.php"); ?>
        <div class="clearfix"></div>
        <div id="main-wrapper" class="layout-page layout-page-infor">
            <div class="information_page">
                <div class="container">
                    <div class="information_page-wrap medium-page">
                        <div class="prebreadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Watchlist</li>
                                </ol>
                            </nav>
                        </div>
                        <article class="article-infor">
                            <h1 class="h2-heading">List of anime you bookmarked:</h1>
							<div id="anime-list" class="container">
    <!-- section where bookmarks will be displayed   -->    
    <div class="bookmarks"></div>
  </div>
                        </article>
                    </div>
                </div>
                
            </div>
        </div>
		
		<script>
		// Retrieve the lists from local storage
var animeList = JSON.parse(localStorage.getItem('Anime List')) || [];

// Display the lists
var animeListHtml = '<ul>';
for (var i = 0; i < animeList.length; i++) {
    var item = animeList[i];
    animeListHtml += '<li><img src="' + item.imgUrl + '"><a href="' + item.animeUrl + '">' + item.animeName + '</a> <button class="btn-class" onclick="deleteFromPlaylist(\'Anime List\', \'' + item.animeName + '\')"><i class="fa-solid fa-trash-can"></i> Delete</button></li>';
}
animeListHtml += '</ul>';
document.getElementById('anime-list').innerHTML = animeListHtml;

		function deleteFromPlaylist(listName, animeName) {
    // Retrieve the current list from local storage
    var list = JSON.parse(localStorage.getItem(listName)) || [];

    // Find the index of the item to be deleted
    var index = list.findIndex(function(item) {
        return item.animeName === animeName;
    });

    // Remove the item from the list
    if (index !== -1) {
        list.splice(index, 1);

        // Save the updated list back to local storage
        localStorage.setItem(listName, JSON.stringify(list));
    }

    // Update the display of the list
    var listHtml = '<ul>';
    for (var i = 0; i < list.length; i++) {
        var item = list[i];
        listHtml += '<li><img src="' + item.imgUrl + '"><a href="' + item.animeUrl + '">' + item.animeName + '</a> <button class="btn-class" onclick="deleteFromPlaylist(\'' + listName + '\', \'' + item.animeName + '\')"><i class="fa-solid fa-trash-can"></i> Delete</button></li>';
    }
    listHtml += '</ul>';
    document.getElementById('anime-list').innerHTML = listHtml;
}

		</script>
		
		
		<style>
/* Styling Bookmarks section */
#anime-list {}

#anime-list ul {
  list-style: none;
  display: flex;
  flex-wrap: wrap; /* Added flex-wrap property */
  margin: 0;
  padding-inline-start: 0px;
}

#anime-list ul li {
  background: #1D1E22;
  display: flex;
  flex-direction: column;
  width: 18%;
  height: fit-content;
  border-radius: 10px;
  padding: 20px;
  text-align: center;
  box-shadow: 4px 4px 16px rgba(0, 0, 0, 0.5), -4px -4px 16px rgba(255, 255, 255, 0.05);
  position: relative;
  margin: 10px;
}

#anime-list ul li a {
  margin: 1rem;
  color: #fff;
  font-size: 1rem;
  font-weight: 600;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

#anime-list ul li img {
  width: auto;
  height: 150px;
  border-radius: 10px;
  margin: 0 auto;
}

.btn-class {
  --background: #08ebfe;
  --text: #1D1E22;
  --icon: #1D1E22;
  display: flex;
  align-items: center;
  outline: none;
  cursor: pointer;
  border: 0;
  min-width: 113px;
  padding: 5px 10px 5px 6px;
  border-radius: 11px;
  line-height: 24px;
  font-family: inherit;
  font-weight: 600;
  font-size: 12px;
  justify-content: center;
  overflow: hidden;
  color: var(--text);
  background: var(--b, var(--background));
}

.btn-class i {
  margin-right: 5px;
}

/* Media query for smaller screens */
@media (max-width: 768px) {
  #anime-list ul li {
    width: 43%; /* Set the width to 100% to make it a single column */
  }
  #anime-list ul li{
	  padding:10px;
  }
  #anime-list ul li img{
	  height:160px;
  }
  #anime-list ul li a{
	  font-size:small;
	  margin:5px;
  }
}
</style>

        <?php include("./_php/footer.php"); ?>
    </div>
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
</body>

</html>