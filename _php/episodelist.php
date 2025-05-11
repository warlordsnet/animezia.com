 <div id="episodes-content">
                                    <div class="seasons-block seasons-block-max">
                                        <div id="detail-ss-list" class="detail-seasons">
                                            <div class="detail-infor-content">
                                                
                                                <div id="episodes-page-1" class="ss-list ss-list-min" data-page="1"
                                                    style="display:block;">

                                                    <?php 
                                                    foreach ($animeDetails['results']['episodes'] as $episode) {  ?>
                                                    <a title="Episode <?=$episode['number']?>"
                                                        class="ssl-item ep-item <?php if ($episodeDetails['results']['number'] === $episode['number']) {echo 'active';}?>"
                                                        href="/watch/<?=$episode['id']?>">
                                                        <div class="ssli-order" title=""><?=$episode['number']?>
                                                        </div>
                                                        
                                                      
                                                    </a>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>