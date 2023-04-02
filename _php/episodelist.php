 <div id="episodes-content">
                                    <div class="seasons-block seasons-block-max">
                                        <div id="detail-ss-list" class="detail-seasons">
                                            <div class="detail-infor-content">
                                                
                                                <div id="episodes-page-1" class="ss-list ss-list-min" data-page="1"
                                                    style="display:block;">

                                                    <?php 
                                                    foreach ($episodelist as $episodelist) {  ?>
                                                    <a title="Episode <?=$episodelist['episodeNum']?>"
                                                        class="ssl-item ep-item <?php if ($getEpisode['ep_num'] === $episodelist['episodeNum']) {echo 'active';}?>"
                                                        href="/watch/<?=$episodelist['episodeId']?>">
                                                        <div class="ssli-order" title=""><?=$episodelist['episodeNum']?>
                                                        </div>
                                                        
                                                      
                                                    </a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>