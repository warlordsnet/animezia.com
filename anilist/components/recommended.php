                    <section class="block_area block_area_category">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Recommendations</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid film_list-wfeature">
                                <div class="film_list-wrap">
                                <?php 
								
								 
                                $json = file_get_contents("$ani/meta/anilist/info/$id");
                                $json = json_decode($json, true);
                                foreach(array_slice($json['recommendations'],0,20) as $recommended) { ?>
                                    <?php $title = $recommended['title']; { ?>
                                    <div class="flw-item ">
                                        <div class="film-poster">
                                            <div class="tick ltr">
                                                <div class="tick-item-sub  tick-eps amp-algn">Sub</div>
                                            </div>
                                            <div class="tick rtl">
                                                <div class="tick-item tick-eps amp-algn">Episodes <?=$recommended['episodes']?>
                                                </div>
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="<?=$recommended['image']?>"
                                                src="<?=$recommended['image']?>"
                                                alt="Watch <?=$title['romaji']?> free online animezia">
                                            <a class="film-poster-ahref"
                                                href="<?=$websiteUrl?>/anilist/anime?id=<?=$recommended['id']?>"
                                                title="<?=$title['romaji']; ?>"
                                                data-jname="<?=$title['romaji']; ?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a
                                                    href="<?=$websiteUrl?>/anilist/anime?id=<?=$recommended['id']?>"
                                                    title="<?=$title['romaji']; ?>"
                                                    data-jname="<?=$title['romaji']; ?>"><?=$title['romaji']; ?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item"><?=$recommended['type']?></span>
                                                <span class="dot"></span>
                                                <span class="fdi-item"><i class="fas fa-star"></i> <?=$recommended['rating']?>%</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <?php } ?>
                                <?php } ?>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </section>