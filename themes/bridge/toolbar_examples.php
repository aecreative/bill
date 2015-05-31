<?php
$example_url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] .'/';
?>
<div id="toolbar" class="on">
    <span class="open opened">
        <span class="opener">
            <span class="arrow">
                <i class="fa fa-chevron-up"></i>
                <i class="fa fa-chevron-down"></i>
            </span>
            <span class="number">
                66+
            </span>
            <span>Bridge Demos</span>
        </span>
        <a class="qbutton green no_ajax" href="http://demo.qodeinteractive.com/bridge/demos">See All Demos</a>
    </span>
    <div class="toolbar_preview">
        <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
        <p>All Demo Settings And Content Can Be Imported</p>
    </div>
    <div id="toolbar_outer">
        <div id="toolbar_inner">
            <div id="toolbar_inner2">
                <?php if (!strpos($example_url,'bridge/')){ ?>
                <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_original_big.jpg">
                    <div class="toolbar_image">
                        <img src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_original_small.jpg" alt="/" />
                        <div class="menu_switcher_hover_outer">
                            <div class="menu_switcher_hover_inner">
                                <div class="menu_switcher_hover">
                                    <div class="desc">
                                        <p>
                                            Bridge Original<br/>
                                            Demo
                                        </p>
                                        <a class="qbutton" href="http://demo.qodeinteractive.com/bridge/" target="_blank">LAUNCH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                if (!strpos($example_url,'bridge2/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_original_left_menu_big.jpg">
                        <div class="toolbar_image">
                            <img src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_original_left_menu_small.jpg" alt="/" />
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Left Menu<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge2/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge3/')){
                ?>
                <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_business_big.jpg">
                    <div class="toolbar_image">
                        <img src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_business_small.jpg" alt="/" />
                        <div class="menu_switcher_hover_outer">
                            <div class="menu_switcher_hover_inner">
                                <div class="menu_switcher_hover">
                                    <div class="desc">
                                        <p>
                                            Bridge Business<br/>
                                            Demo
                                        </p>
                                        <a class="qbutton" href="http://demo.qodeinteractive.com/bridge3/" target="_blank">LAUNCH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
				if (!strpos($example_url,'bridge13/')){
					?>
					<div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_winery_big.jpg">
                        <div class="toolbar_image">
							<img src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_winery_small.jpg" alt="/" />
							<div class="menu_switcher_hover_outer">
								<div class="menu_switcher_hover_inner">
									<div class="menu_switcher_hover">
										<div class="desc">
											<p>
												Bridge Winery<br/>
												Demo
											</p>
											<a class="qbutton" href="http://demo.qodeinteractive.com/bridge13/" target="_blank">LAUNCH</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				if (!strpos($example_url,'bridge9/')){
					?>
					<div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_cafe_big.jpg">
                        <div class="toolbar_image">
							<img src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_cafe_small.jpg" alt="/" />
							<div class="menu_switcher_hover_outer">
								<div class="menu_switcher_hover_inner">
									<div class="menu_switcher_hover">
										<div class="desc">
											<p>
												Bridge Cafe<br/>
												Demo
											</p>
											<a class="qbutton" href="http://demo.qodeinteractive.com/bridge9/" target="_blank">LAUNCH</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				if (!strpos($example_url,'bridge16/')){
					?>
					<div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_portfolio_big.jpg">
                        <div class="toolbar_image">
							<img src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_portfolio_small.jpg" alt="/" />
							<div class="menu_switcher_hover_outer">
								<div class="menu_switcher_hover_inner">
									<div class="menu_switcher_hover">
										<div class="desc">
											<p>
												Bridge Portfolio Masonry<br/>
												Demo
											</p>
											<a class="qbutton" href="http://demo.qodeinteractive.com/bridge16/" target="_blank">LAUNCH</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				if (!strpos($example_url,'bridge4/')){
					?>
					<div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_agency_big.jpg">
                        <div class="toolbar_image">
							<img src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_agency_small.jpg" alt="/" />
							<div class="menu_switcher_hover_outer">
								<div class="menu_switcher_hover_inner">
									<div class="menu_switcher_hover">
										<div class="desc">
											<p>
												Bridge Agency<br/>
												Demo
											</p>
											<a class="qbutton" href="http://demo.qodeinteractive.com/bridge4/" target="_blank">LAUNCH</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				if (!strpos($example_url,'bridge66/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_kids_big.jpg">
                        <span class="new">NEW</span>
                        <div class="toolbar_image">
                            <img src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_kids_small.jpg" alt="/" />
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Kids<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge66/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
				if (!strpos($example_url,'bridge67/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_animals_big.jpg">
                        <span class="new">NEW</span>
                        <div class="toolbar_image">
                            <img src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_animals_small.jpg" alt="/" />
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Animals<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge67/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge63/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_graphic_studio_big.jpg">
                        <div class="toolbar_image">
                            <img src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_graphic_studio_small.jpg" alt="/" />
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Graphic <br/>
                                                Studio Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge63/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge64/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_cupcake_big.jpg">
                        <div class="toolbar_image">
                            <img src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_cupcake_small.jpg" alt="/" />
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Cupcake<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge64/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge65/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_sunglasses_shop_big.jpg">
                        <div class="toolbar_image">
                            <img src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_sunglasses_shop_small.jpg" alt="/" />
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Sunglasses<br/>
                                                Shop Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge65/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge58/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_wedding_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_wedding_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
							<div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Wedding<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge58/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge59/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_jeans_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_jeans_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
							<div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Jeans<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge59/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge60/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_innovation_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_innovation_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Innovation<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge60/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge61/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_travel_blog_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_travel_blog_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Travel Blog<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge61/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge62/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_passepartout_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_passepartout_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Passepartout<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge62/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge56/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_organic_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_organic_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Organic<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge56/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge57/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_jazz_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_jazz_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Jazz<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge57/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge54/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_design_studio_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_design_studio_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Design Studio<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge54/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge55/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_digital_agency_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_digital_agency_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Digital Agency<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge55/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge52/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_wellness_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_wellness_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Wellness<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge52/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge53/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_case_study_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_case_study_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Case Study<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge53/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge50/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_fashion_shop_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_fashion_shop_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Fashion Shop<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge50/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge51/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_company_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_company_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Company<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge51/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge48/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_photography_split_screen_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_photography_split_screen_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Photography Split Screen<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge48/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge49/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_agency_one_page_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_agency_one_page_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Agency <br/> One Page<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge49/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge46/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_lawyer_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_lawyer_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Lawyer<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge46/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge47/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_health_blog_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_health_blog_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Health Blog<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge47/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge44/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_coming_soon_simple_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_coming_soon_simple_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Coming Soon Simple<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge44/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge45/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_coming_soon_creative_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_coming_soon_creative_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Coming Soon Creative<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge45/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge42/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_collection_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_collection_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Collection<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge42/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge43/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_creative_vintage_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_creative_vintage_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Creative Vintage<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge43/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge40/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_chocolaterie_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_chocolaterie_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Chocolaterie<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge40/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge41/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_branding_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_branding_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Branding<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge41/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge38/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_studio_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_studio_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Studio<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge38/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge36/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_simple_blog_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_simple_blog_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Simple Blog<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge36/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge39/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_contemporary_art_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_contemporary_art_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Contemporary Art<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge39/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge34/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_parallax_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_parallax_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Parallax<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge34/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge35/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_minimal_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_minimal_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Minimal<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge35/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge37/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_pinterest_blog_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_pinterest_blog_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Pinterest Blog<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge37/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge32/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_small_brand_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_small_brand_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Small Brand<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge32/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge33/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_creative_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_creative_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Creative<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge33/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge30/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_mist_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_mist_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Mist<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge30/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge31/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_architecture_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_architecture_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Architecture<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge31/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge28/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_wireframey_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_wireframey_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Wireframey<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge28/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge29/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_denim_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_denim_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Denim<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge29/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge26/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_health_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_health_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Health<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge26/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge22/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_dark_parallax_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_dark_parallax_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Dark Parallax<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge22/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge25/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_pinterest_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_pinterest_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Portfolio Pinterest<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge25/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge27/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_flat_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_flat_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Flat<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge27/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge19/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_catalog_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_catalog_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Catalog<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge19/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge20/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_portfolio2_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_portfolio2_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Portfolio<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge20/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge21/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_minimalist_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_minimalist_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Minimalist<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge21/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge18/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_creative_business_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_creative_business_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Creative Business<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge18/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge24/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_avenue_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_avenue_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Avenue<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge24/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge23/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_split_screen_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_split_screen_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Split Screen<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge23/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge11/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_modern_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_modern_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Modern<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge11/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge15/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_construct_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_construct_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Construct<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge15/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge14/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_restaurant_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_restaurant_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Restaurant<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge14/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge12/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_university_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_university_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge University<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge12/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge10/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_one_page_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_one_page_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge One Page<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge10/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge8/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_fashion_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_fashion_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Fashion<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge8/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge5/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_luxury_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_luxury_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Estate<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge5/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge7/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_urban_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_urban_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Urban<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge7/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge17/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_vintage_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_vintage_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Vintage<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge17/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                if (!strpos($example_url,'bridge6/')){
                    ?>
                    <div class="website_holder" data-image="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_light_big.jpg">
                        <div class="toolbar_image">
                            <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/bridge_light_small.jpg" alt="/" />
                            <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                            <div class="menu_switcher_hover_outer">
                                <div class="menu_switcher_hover_inner">
                                    <div class="menu_switcher_hover">
                                        <div class="desc">
                                            <p>
                                                Bridge Light<br/>
                                                Demo
                                            </p>
                                            <a class="qbutton" href="http://demo.qodeinteractive.com/bridge6/" target="_blank">LAUNCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="website_holder placeholder" data-image="">
                    <div class="toolbar_image">
                        <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/placeholder.jpg" alt="/" />
                        <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                        <div class="menu_switcher_hover_outer">
                            <div class="menu_switcher_hover_inner">
                                <div class="menu_switcher_hover">
                                    <div class="desc">
                                        <p>
                                            Placeholder<br/>
                                        </p>
                                        <a class="qbutton" href="#" target="_blank">LAUNCH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="website_holder placeholder last" data-image="">
                    <div class="toolbar_image">
                        <img src="/" data-src="http://demo.qodeinteractive.com/bridge/demo_images/examples/placeholder.jpg" alt="/" />
                        <div class="loading_more_examples"><div class="five_rotating_circles"><div class="spinner-container container1"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container2"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div><div class="spinner-container container3"><div class="circle1"></div><div class="circle2"></div><div class="circle3"></div><div class="circle4"></div></div></div></div>
                        <div class="menu_switcher_hover_outer">
                            <div class="menu_switcher_hover_inner">
                                <div class="menu_switcher_hover">
                                    <div class="desc">
                                        <p>
                                            Placeholder<br/>
                                        </p>
                                        <a class="qbutton" href="#" target="_blank">LAUNCH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>