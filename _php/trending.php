<div id="anime-trending">
    <div class="container">
        <section class="block_area block_area_trending">
            <div class="block_area-header">
                <div class="bah-heading">
                    <h2 class="cat-heading">Trending</h2>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="block_area-content">
                <div class="trending-list" id="trending-home">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper">

                            <?php 
							
                                $json = file_get_contents("$ani/meta/anilist/trending");
                                $json = json_decode($json, true);
                                foreach($json['results'] as $key => $popular) { ?>
                                <?php $title = $popular['title']; { ?>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="number">
                                                <span><?=$key+1?></span>
                                                <div class="film-title dynamic-name" data-jname="<?=$title['romaji']?>"><?=$title['romaji']?></div>
                                            </div>
                                            <a href="<?=$websiteUrl?>/anilist/anime?id=<?=$popular['id']?>" class="film-poster"
                                                title="<?=$title['romaji']?>">
                                                <img data-src="https://ik.imagekit.io/<?=$imgk?>/tr:w-300,f-webp/<?=$popular['image']?>"
                                                    src="https://ik.imagekit.io/<?=$imgk?>/tr:w-300,f-webp/<?=$popular['image']?>"
                                                    class="film-poster-img lazyload" alt="Watch free online <?=$title['romaji']?> on animezia">
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                <?php } ?>



                        </div>
                        <div class="clearfix"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="trending-navi">
                        <div class="navi-next swiper-button-disabled" tabindex="-1" role="button"
                            aria-label="Next slide" aria-disabled="true"><i class="fas fa-angle-right"></i>
                        </div>
                        <div class="navi-prev swiper-button-disabled" tabindex="-1" role="button"
                            aria-label="Previous slide" aria-disabled="true"><i class="fas fa-angle-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>