<div class="container">
    <div class="anif-blocks">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="anif-block anif-block-01">
                    <div class="anif-block-header">Fall</div>
                    <div class="anif-block-ul">
                        <ul class="ulclear">
                            <?php 
                            $ch = curl_init();
								  curl_setopt($ch, CURLOPT_URL, "$api/season/fall-2021-anime");
								  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
								  curl_setopt($ch, CURLOPT_HEADER, FALSE);
								  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
								  $response = curl_exec($ch);
								  $json = json_decode($response, true);
                                //$json = file_get_contents("$api/season/fall-2021-anime");
                                //$json = json_decode($json, true);
                                foreach((array) array_slice($json, 0, 5) as $fallAnime) { ?>
                            <li>
                                <div class="film-poster">
                                    <img class="film-poster-img ls-is-cached lazyloaded"
                                        data-src="https://ik.imagekit.io/<?=$imgk?>/tr:w-100,f-webp/<?=$fallAnime['imgUrl']?>"
                                        alt="<?=$fallAnime['animeTitle']?>"
                                        src="https://ik.imagekit.io/<?=$imgk?>/tr:w-100,f-webp/<?=$fallAnime['imgUrl']?>"
                                        title="<?=$fallAnime['animeTitle']?>">
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name">
                                        <a class="dynamic-name" 
                                            href="/anime/<?=$fallAnime['animeId']?>"
                                            title="<?=$fallAnime['animeTitle']?>"
                                            data-jname="<?=$fallAnime['animeTitle']?>"><?=$fallAnime['animeTitle']?></a>
                                    </h3>
                                    <div class="fd-infor">
                                        <span class="fdi-item">Fall 2021 </span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        <?php } curl_close($ch); ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="more"><a href="/sub-category/fall-2021-anime">View more <i
                                class="fas fa-angle-right ml-2"></i></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="anif-block anif-block-01">
                    <div class="anif-block-header">Summer</div>
                    <div class="anif-block-ul">
                    <ul class="ulclear">
                            <?php 
                            $ch = curl_init();
								  curl_setopt($ch, CURLOPT_URL, "$api/season/summer-2021-anime");
								  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
								  curl_setopt($ch, CURLOPT_HEADER, FALSE);
								  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
								  $response = curl_exec($ch);
								  $json = json_decode($response, true);
                               // $json = file_get_contents("$api/season/summer-2021-anime");
                              //  $json = json_decode($json, true);
                                foreach((array) array_slice($json, 0, 5) as $fallAnime) { ?>
                            <li>
                                <div class="film-poster">
                                    <img class="film-poster-img ls-is-cached lazyloaded"
                                        data-src="https://ik.imagekit.io/<?=$imgk?>/tr:w-100,f-webp/<?=$fallAnime['imgUrl']?>"
                                        alt="<?=$fallAnime['animeTitle']?>"
                                        src="https://ik.imagekit.io/<?=$imgk?>/tr:w-100,f-webp/<?=$fallAnime['imgUrl']?>"
                                        title="<?=$fallAnime['animeTitle']?>">
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name">
                                        <a class="dynamic-name" 
                                            href="/anime/<?=$fallAnime['animeId']?>"
                                            title="<?=$fallAnime['animeTitle']?>"
                                            data-jname="<?=$fallAnime['animeTitle']?>"><?=$fallAnime['animeTitle']?></a>
                                    </h3>
                                    <div class="fd-infor">
                                        <span class="fdi-item">Summer 2021 </span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        <?php } curl_close($ch); ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="more"><a href="/sub-category/summer-2021-anime">View more <i
                                class="fas fa-angle-right ml-2"></i></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="anif-block anif-block-04">
                    <div class="anif-block-header">Spring</div>
                    <div class="anif-block-ul">
                    <ul class="ulclear">
                            <?php 
                            $ch = curl_init();
								  curl_setopt($ch, CURLOPT_URL, "$api/season/spring-2021-anime");
								  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
								  curl_setopt($ch, CURLOPT_HEADER, FALSE);
								  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
								  $response = curl_exec($ch);
								  $json = json_decode($response, true); 
                                //$json = file_get_contents("$api/season/spring-2021-anime");
                               // $json = json_decode($json, true);
                                foreach((array) array_slice($json, 0, 5) as $fallAnime) { ?>
                            <li>
                                <div class="film-poster">
                                    <img class="film-poster-img ls-is-cached lazyloaded"
                                        data-src="https://ik.imagekit.io/<?=$imgk?>/tr:w-100,f-webp/<?=$fallAnime['imgUrl']?>"
                                        alt="<?=$fallAnime['animeTitle']?>"
                                        src="https://ik.imagekit.io/<?=$imgk?>/tr:w-100,f-webp/<?=$fallAnime['imgUrl']?>"
                                        title="<?=$fallAnime['animeTitle']?>">
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name">
                                        <a class="dynamic-name" 
                                            href="/anime/<?=$fallAnime['animeId']?>"
                                            title="<?=$fallAnime['animeTitle']?>"
                                            data-jname="<?=$fallAnime['animeTitle']?>"><?=$fallAnime['animeTitle']?></a>
                                    </h3>
                                    <div class="fd-infor">
                                        <span class="fdi-item">Spring 2021 </span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        <?php } curl_close($ch); ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="more">
                        <a href="/sub-category/spring-2021-anime">View more <i
                                class="fas fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="anif-block anif-block-01">
                    <div class="anif-block-header">Winter</div>
                    <div class="anif-block-ul">
                    <ul class="ulclear">
                            <?php 
                            $ch = curl_init();
								  curl_setopt($ch, CURLOPT_URL, "$api/season/winter-2022-anime");
								  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
								  curl_setopt($ch, CURLOPT_HEADER, FALSE);
								  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
								  $response = curl_exec($ch);
								  $json = json_decode($response, true);
                               // $json = file_get_contents("$api/season/winter-2022-anime");
                               // $json = json_decode($json, true);
                                foreach((array) array_slice($json, 0, 5) as $fallAnime) { ?>
                            <li>
                                <div class="film-poster">
                                    <img class="film-poster-img ls-is-cached lazyloaded"
                                        data-src="https://ik.imagekit.io/<?=$imgk?>/tr:w-100,f-webp/<?=$fallAnime['imgUrl']?>"
                                        alt="<?=$fallAnime['animeTitle']?>"
                                        src="https://ik.imagekit.io/<?=$imgk?>/tr:w-100,f-webp/<?=$fallAnime['imgUrl']?>"
                                        title="<?=$fallAnime['animeTitle']?>">
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name">
                                        <a class="dynamic-name" 
                                            href="/anime/<?=$fallAnime['animeId']?>"
                                            title="<?=$fallAnime['animeTitle']?>"
                                            data-jname="<?=$fallAnime['animeTitle']?>"><?=$fallAnime['animeTitle']?></a>
                                    </h3>
                                    <div class="fd-infor">
                                        <span class="fdi-item">Winter 2022</span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        <?php } curl_close($ch); ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="more"><a href="/sub-category/winter-2022-anime">View more <i
                                class="fas fa-angle-right ml-2"></i></a></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>