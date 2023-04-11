<div class="swiper-wrapper">
    <?php 

    $json = file_get_contents("$ani/meta/anilist/trending");
    $json = json_decode($json, true);
    foreach($json['results'] as $key => $spotlight) { ?>
    <?php $title = $spotlight['title']; { ?>
    <div class="swiper-slide">
        <div class="deslide-item">
            <div class="deslide-cover">
                <div class="deslide-cover-img">
                    <img class="film-poster-img lazyload"
                        data-src="https://ik.imagekit.io/<?=$imgk?>/tr:w-1000,f-webp,bl-2/<?=$spotlight['cover']?>"
                        alt="Watch <?=$title['romaji']?> free online on animezia">
                </div>
            </div>
            <div class="deslide-item-content">
                <div class="desi-sub-text">#<?=$key+1?> Spotlight</div>
                <div class="desi-head-title dynamic-name" data-jname="<?=$title['romaji']?>"><?=$title['romaji']?></div>
                <div class="sc-detail">
                    <div class="scd-item">
                        <i class="fas fa-play-circle mr-1"></i> <?=$spotlight['type'];?>
                    </div>
                    <div class="scd-item m-hide">
                        <i class="fas fa-calendar mr-1"></i><?=$spotlight['releaseDate'];?>
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span></div>
                    <div class="scd-item">
                        <span class="quality bg-white ">SUB</span>
                    </div>
                    <div class="desi-description"><?=$spotlight['description']?></div>
                </div>
                <div class="desi-description"></div>
                <div class="desi-buttons">
                     <?php $trailer = $spotlight['trailer']; { ?>
                    <a target="_blank" href="https://www.youtube.com/watch?v=<?=$trailer['id']?>" class="btn btn-primary btn-radius mr-2">
                        <i class="fas fa-play-circle mr-2"></i>Watch Trailer</a> 
                    <?php } ?>
								
                    <a class="btn btn-secondary btn-radius" href="<?=$websiteUrl?>/anilist/anime?id=<?=$spotlight['id']?>"><i
                            class="fas fa-info-circle mr-2"></i> Detail<i
                            class="fas fa-angle-right ml-2"></i></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php } ?>
    <?php } ?>
</div>