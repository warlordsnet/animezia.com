                    <section class="block_area block_area_category">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Recent Releases</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid film_list-wfeature">
                                <div class="film_list-wrap">
                                <?php 
                                $ch = curl_init();
								  curl_setopt($ch, CURLOPT_URL, "$api/recent-release?type=1");
								  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
								  curl_setopt($ch, CURLOPT_HEADER, FALSE);
								  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
								  $respons = curl_exec($ch);
								  $json = json_decode($respons, true);
                                foreach((array) $json as $recentRelease) { ?>
                                    <div class="flw-item ">
                                        <div class="film-poster">
                                            <div class="tick ltr">
                                                <div class="tick-item-sub  tick-eps amp-algn"><?=$recentRelease['subOrDub']?></div>
                                            </div>
                                            <div class="tick rtl">
                                                <div class="tick-item tick-eps amp-algn">Episode <?=$recentRelease['episodeNum']?>
                                                </div>
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="https://ik.imagekit.io/<?=$imgk?>/tr:f-webp/<?=$recentRelease['imgUrl']?>"
                                                src="https://ik.imagekit.io/<?=$imgk?>/tr:f-webp/<?=$recentRelease['imgUrl']?>"
                                                alt="<?=$recentRelease['name']?>">
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
                                                <span class="fdi-item"><?=$recentRelease['subOrDub']?></span>
                                                <span class="dot"></span>
                                                <span class="fdi-item">Latest</span>
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