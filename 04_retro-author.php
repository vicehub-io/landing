<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Vicehub - The Satirical NFT Art Marketplace</title>
    <link rel="icon" href="images/vicehub-favicon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="The Artists of Vicehub, the Satirical NFT Art Marketplace" name="description" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />    
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/de-retro.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-05.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body class="de-retro">
    <div id="wrapper">
        <header class="header-dark scroll-dark header-custom" style="position: fixed; top: 0; left: 0; width: 100%">
            <!-- <header class=""> -->
            <div class="container standard-height">
                <div class="row standard-height">
                    <div class="col-md-12 standard-height">
                        <div class="de-flex sm-pt10 standard-height">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="/">
                                        <img alt="Vice Hub Logo" src="images/vicehublogosmallest.png" class="translate-up smaller-logo"
                                            width: 250
                                            height: 50/>
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li>
                                        <a target="blank" href="/assets/White-and-Blue-Infographic-Resume.pdf">Whitepaper<span></span></a>
                                    </li>
                                    <li>
                                        <a href="04_retro-author.php">Artists<span></span></a>
                                    </li>
                                    <li class="menu-cta">
                                        <a href="04_retro-wallet.html" class="btn btn-light btn-wallet btn-icon"><span><img src="/images/wallet-icon.png" alt="icon" /></span>Connect Wallet</a>
                                    </li>
                                </ul>
                                <!-- mainmenu close -->
                                <div class="menu_side_area">
                                    <a href="04_retro-wallet.html" class="btn-light btn-wallet btn-icon"><i class="icon_wallet_alt"></i><span class="btn-icon-text">Connect Wallet</span></a>
                                    <span class="" id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="content">
        <?php
                            error_reporting(E_ERROR | E_PARSE);
                            $status = $_GET['status'];
                            if ( strcasecmp( $status, 'ok' ) == 0 ){
                                echo '<div class="success-msg"><div class="container">Thank you! Your message has been successfuly sent.</div></div>';
                            } else if ( strcasecmp($status, 'error' ) == 0 ){
                                echo '<div class="error-msg"><div class="container">Your message could not be sent. Please try again.</div></div>';
                            } else if ( strcasecmp($status, '' ) != 0 ){
                                echo '<div class="error-msg"><div class="container">Your message could not be sent.<br />'.$status.'</div></div>';
                            }
                        ?>
			<div class="container contact-section">
                <div class="row">
                    <div class="col-md" id="left">
                        <h1>CONTACT US</h1>
                        <p class="mt-3" style="color: black; font-size: 1.15rem">Fill out to the best of your ability and leave blank the areas not yet settled.</p>
                        <form action="php/sendinquiry.php" method="post">
                        <section>
                            <h3>BASIC INFORMATION</h3>
                            <label for="input1" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="input1" name="input1" placeholder="Be creative...">
                            <div class="row">
                                <div class="col">
                                    <label for="input2" class="form-label">Supply</label>
                                    <input type="number" class="form-control" id="input2" placeholder="0" name="input2">
                                </div>
                                <div class="col">
                                    <label for="input3" class="form-label">Mint Price (SOL)</label>
                                    <input type="number" class="form-control" id="input3" placeholder="0" name="input3">
                                </div>
                                <div class="col">
                                    <label for="input4" class="form-label">Estimated Mint Date</label>
                                    <input type="date" class="form-control" id="input4" name="input4">
                                </div>
                            </div>
                            <label for="input5" class="form-label">Project Description</label>
                            <textarea class="form-control" id="input5" rows="5" placeholder="Describe what it's all about..." name="input5"></textarea>
        
                            <label for="input6" class="form-label">Sample artwork</label>
                            <input class="form-control" type="file" id="input6" name="input6">
                        </section>
                        <section>
                            <h3>SOCIAL LINKS</h3>
                            <label for="input7" class="form-label">Main Contact Email</label>
                            <input type="email" class="form-control" id="input7" placeholder="example@mail.com" name="input7">
        
                            <label for="input8" class="form-label">Discord Link</label>
                            <input type="text" class="form-control" id="input8" placeholder="https://" name="input8">
        
                            <label for="input9" class="form-label">Main Discord ID</label>
                            <input type="text" class="form-control" id="input9" placeholder="#" name="input9">
        
                            <label for="input10" class="form-label">Twitter Link</label>
                            <input type="text" class="form-control" id="input10" placeholder="https://" name="input10">
        
                        </section>
                        <section>
                            <h3>ORGANISATIONAL DETAILS</h3>
                            <label for="input11" class="form-label">Team Overview / Roles</label>
                            <input class="form-control" type="file" id="input11" name="input11">
        
                            <label for="input12" class="form-label">Project Whitepaper / Roadmap</label>
                            <input class="form-control" type="file" id="input12" name="input12">
                                
                            <label for="input13" class="form-label">Marketing Plan Description</label>
                            <textarea class="form-control" id="input13" rows="5" placeholder="Try to be concise..." name="input13"></textarea>
                                
                            <label for="input14" class="form-label">How do you plan to spend mint funds?</label>
                            <textarea class="form-control" id="input14" rows="5" placeholder="Please let us know..." name="input14"></textarea>
                                
                            <label for="input15" class="form-label">Has anyone on the team worked on previous projects? Provide details.</label>
                            <textarea class="form-control" id="input15" rows="5" placeholder="Please let us know..." name="input15"></textarea>
                        </section>
                        <input type="submit" class="send-btn" value="Send it"/>
                        </form>
                    </div>
                    <div class="col-md">
                        <div id="right">
                            <h4 class="text-center mb-3" id="progress-title">Completion progress:</h4>
                            <div class="progress">
                                <div class="progress-bar" id="p-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="percentage-info">
                                <p id="percentage" class="me-2 font-weight-bold">0%</p>
                                <p id="percentage-message" >Way to go...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <footer>
			<div class="container">
				<div class="row cat-footer">
					<div class="col-xl-3">
						<h5 class="footer-btn">
							<a href="https://discord.gg/5WgjJXSw">DISCORD</a>
						</h5>
					</div>
					<div class="col-xl-3">
						<h5 class="footer-btn">
							<a href="/team.html">TEAM</a>
						</h5>
					</div>
					<div class="col-xl-3">
						<h5 class="footer-btn">
							<a href="#">TWITTER</a>
						</h5>
					</div>
				</div>
			</div>
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="de-flex">
								<div class="de-flex-col">
									<a href="04_retro-index.html">
										<img alt="" class="f-logo" src="images/vicehublogosmallest.png" /><span
											class="copy">&copy; Copyright 2022 - Vicehub</span>
									</a>
								</div>
								<div class="de-flex-col">
									<div class="social-icons">
										<a href="#"><i class="fa fa-rss fa-lg"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
        <!-- header begin -->
        <!-- <header class="header-light scroll-light border-bottom">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <div id="logo">
                                        <a href="04_retro-index.html">
                                            <img alt="" src="images/logo-retro.png" />
                                        </a>
                                    </div>
                                </div>
                                <div class="de-flex-col">
                                    <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" />
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li>
                                        <a href="04_retro-index.html">Home<span></span></a>
                                        <ul>
                                            <li><a href="04_retro-index.html">Homepage 1</a></li>
                                            <li><a href="04_retro-index-2.html">Homepage 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="04_retro-explore.html">Explore<span></span></a>
                                        <ul>
                                            <li><a href="04_retro-explore.html">Explore</a></li>
                                            <li><a href="04_retro-explore-2.html">Explore 2</a></li>
                                            <li><a href="04_retro-explore-music-nft.html">New: Music NFT</a></li>
                                            <li><a href="04_retro-collection.html">Collections</a></li>
                                            <li><a href="04_retro-live-auction.html">Live Auction</a></li>
                                            <li><a href="04_retro-item-details.html">Item Details</a></li>
                                            <li><a href="04_retro-help-center.html">Help Center</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="04_retro-author.php">Author<span></span></a>
                                        <ul>
                                            <li><a href="04_retro-author.php">Author</a></li>
                                            <li><a href="04_retro-profile.html">Profile</a></li>
                                            <li><a href="04_retro-wallet.html">Wallet</a></li>
                                            <li><a href="04_retro-create-options.html">Create</a></li>
                                            <li><a href="04_retro-login.html">Login</a></li>
                                        </ul>
                                    </li>                                    
                                    <li>
                                        <a href="#">Stats<span></span></a>
                                        <ul>
                                            <li><a href="04_retro-activity.html">Activity</a></li>
                                            <li><a href="04_retro-rankings.html">Rankings</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="menu_side_area">
                                    <div class="de-login-menu">
                                        <a href="04_retro-create-options.html" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span>Create</span></a>

                                        <span id="de-click-menu-notification" class="de-menu-notification">
                                            <span class="d-count">8</span>
                                            <i class="fa fa-bell"></i>
                                        </span>

                                        <span id="de-click-menu-profile" class="de-menu-profile">                           
                                            <img src="images/author_single/author_thumbnail.jpg" class="img-fluid" alt="">
                                        </span>

                                        <div id="de-submenu-notification" class="de-submenu">
                                            <div class="de-flex">
                                                <div><h4>Notifications</h4></div>
                                                <a href="#">Show all</a>
                                            </div>

                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <img class="lazy" src="images/author/author-2.jpg" alt="">
                                                        <div class="d-desc">
                                                            <span class="d-name"><b>Mamie Barnett</b> started following you</span>
                                                            <span class="d-time">1 hour ago</span>
                                                        </div>
                                                    </a>  
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="lazy" src="images/author/author-3.jpg" alt="">
                                                        <div class="d-desc">
                                                            <span class="d-name"><b>Nicholas Daniels</b> liked your item</span>
                                                            <span class="d-time">2 hours ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="lazy" src="images/author/author-4.jpg" alt="">
                                                        <div class="d-desc">
                                                            <span class="d-name"><b>Lori Hart</b> started following you</span>
                                                            <span class="d-time">18 hours ago</span>
                                                        </div>
                                                    </a>    
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="lazy" src="images/author/author-5.jpg" alt="">
                                                        <div class="d-desc">
                                                            <span class="d-name"><b>Jimmy Wright</b> liked your item</span>
                                                            <span class="d-time">1 day ago</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="lazy" src="images/author/author-6.jpg" alt="">
                                                        <div class="d-desc">
                                                            <span class="d-name"><b>Karla Sharp</b> started following you</span>
                                                            <span class="d-time">3 days ago</span>
                                                        </div>
                                                    </a>    
                                                </li>
                                            </ul>
                                        </div>

                                        <div id="de-submenu-profile" class="de-submenu">
                                            <div class="d-name">
                                                <h4>Monica Lucas</h4>
                                                <a href="04_retro-profile.html">Set display name</a>
                                            </div>
                                            <div class="spacer-10"></div>
                                            <div class="d-balance">
                                                <h4>Balance</h4>
                                                12.858 ETH
                                            </div>
                                            <div class="spacer-10"></div>
                                            <div class="d-wallet">
                                                <h4>My Wallet</h4>
                                                <span id="wallet" class="d-wallet-address">DdzFFzCqrhshMSxb9oW3mRo4MJrQkusV3fGFSTwaiu4wPBqMryA9DYVJCkW9n7twCffG5f5wX2sSkoDXGiZB1HPa7K7f865Kk4LqnrME</span>
                                                <button id="btn_copy" title="Copy Text">Copy</button>
                                            </div>

                                            <div class="d-line"></div>

                                            <ul class="de-submenu-profile">
                                                <li><a href="04_retro-author.php"><i class="fa fa-user"></i> My profile</a>
                                                <li><a href="04_retro-profile.html"><i class="fa fa-pencil"></i> Edit profile</a>
                                                <li><a href="#"><i class="fa fa-sign-out"></i> Sign out</a>
                                            </ul>
                                        </div>
                                        <span id="menu-btn"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </header> -->
        <!-- header close -->
        <!-- content begin -->
        <!-- <div class="no-bottom" id="content">
            <div id="top"></div>

            <section aria-label="section" class="pt40">
                <div class="container">
					<div class="row">
					    <div class="col-md-12">
                           <div class="d_profile de-flex">
                                <div class="de-flex-col">
                                    <div class="profile_avatar">
                                        <img src="images/author_single/author_thumbnail.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                        <div class="profile_name">
                                            <h4>
                                                Monica Lucas                                                
                                                <span class="profile_username">@monicaaa</span>
                                                <span id="wallet" class="profile_wallet">DdzFFzCqrhshMSxb9oW3mRo4MJrQkusV3fGFSTwaiu4wPBqMryA9DYVJCkW9n7twCffG5f5wX2sSkoDXGiZB1HPa7K7f865Kk4LqnrME</span>
                                                <button id="btn_copy" title="Copy Text">Copy</button>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile_follow de-flex">
                                    <div class="de-flex-col">
                                        <div class="profile_follower">500 followers</div>
                                    </div>
                                    <div class="de-flex-col">
                                        <a href="#" class="btn-main">Follow</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="de_tab tab_simple">
    
                                <ul class="de_nav">
                                    <li class="active"><span>On Sale</span></li>
                                    <li><span>Created</span></li>
                                    <li><span>Liked</span></li>
                                </ul>
                                
                                <div class="de_tab_content">
                                    
                                    <div class="tab-1">
                                        <div class="row">
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nft__item style-2">
                                                        <div class="de_countdown" data-year="2022" data-month="6" data-day="16" data-hour="8"></div>
                                                        <div class="author_list_pp">
                                                            <a href="04_retro-author.php">                                    
                                                                <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_wrap">
                                                            <div class="nft__item_extra">
                                                                <div class="nft__item_buttons">
                                                                    <button onclick="location.href='04_retro-item-details.html'">Buy Now</button>
                                                                    <div class="nft__item_share">
                                                                        <h4>Share</h4>
                                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                        <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="04_retro-item-details.html">
                                                                <img src="images/author_single/porto-1.jpg" class="lazy nft__item_preview" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_info">
                                                            <a href="04_retro-item-details.html">
                                                                <h4>Pinky Ocean</h4>
                                                            </a>
                                                            <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                                                0.08 ETH<span>1/20</span>
                                                            </div>
                                                            <div class="nft__item_action">
                                                                <a href="#">Place a bid</a>
                                                            </div>
                                                            <div class="nft__item_like">
                                                                <i class="fa fa-heart"></i><span>50</span>
                                                            </div>                            
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nft__item style-2">
                                                        <div class="author_list_pp">
                                                            <a href="04_retro-author.php">                                    
                                                                <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_wrap">
                                                            <div class="nft__item_extra">
                                                                <div class="nft__item_buttons">
                                                                    <button onclick="location.href='04_retro-item-details.html'">Buy Now</button>
                                                                    <div class="nft__item_share">
                                                                        <h4>Share</h4>
                                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                        <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="04_retro-item-details.html">
                                                                <img src="images/author_single/porto-2.jpg" class="lazy nft__item_preview" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_info">
                                                            <a href="04_retro-item-details.html">
                                                                <h4>The Animals</h4>
                                                            </a>
                                                            <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                                                0.06 ETH<span>1/22</span>
                                                            </div>
                                                            <div class="nft__item_action">
                                                                <a href="#">Place a bid</a>
                                                            </div>
                                                            <div class="nft__item_like">
                                                                <i class="fa fa-heart"></i><span>80</span>
                                                            </div>                                 
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nft__item style-2">
                                                        <div class="de_countdown" data-year="2022" data-month="6" data-day="14" data-hour="8"></div>
                                                        <div class="author_list_pp">
                                                            <a href="04_retro-author.php">                                    
                                                                <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_wrap">
                                                            <div class="nft__item_extra">
                                                                <div class="nft__item_buttons">
                                                                    <button onclick="location.href='04_retro-item-details.html'">Buy Now</button>
                                                                    <div class="nft__item_share">
                                                                        <h4>Share</h4>
                                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                        <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="04_retro-item-details.html">
                                                                <img src="images/author_single/porto-3.jpg" class="lazy nft__item_preview" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_info">
                                                            <a href="04_retro-item-details.html">
                                                                <h4>Three Donuts</h4>
                                                            </a>
                                                            <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                                                0.05 ETH<span>1/11</span>
                                                            </div>
                                                            <div class="nft__item_action">
                                                                <a href="#">Place a bid</a>
                                                            </div>
                                                            <div class="nft__item_like">
                                                                <i class="fa fa-heart"></i><span>97</span>
                                                            </div>                                 
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nft__item style-2">
                                                        <div class="author_list_pp">
                                                            <a href="04_retro-author.php">                                    
                                                                <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_wrap">
                                                            <div class="nft__item_extra">
                                                                <div class="nft__item_buttons">
                                                                    <button onclick="location.href='04_retro-item-details.html'">Buy Now</button>
                                                                    <div class="nft__item_share">
                                                                        <h4>Share</h4>
                                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                        <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="04_retro-item-details.html">
                                                                <img src="images/author_single/porto-4.jpg" class="lazy nft__item_preview" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_info">
                                                            <a href="04_retro-item-details.html">
                                                                <h4>Graffiti Colors</h4>
                                                            </a>
                                                            <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                                                0.02 ETH<span>1/15</span>
                                                            </div>
                                                            <div class="nft__item_action">
                                                                <a href="#">Place a bid</a>
                                                            </div>
                                                            <div class="nft__item_like">
                                                                <i class="fa fa-heart"></i><span>73</span>
                                                            </div>                                 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    
                                    <div class="tab-2">
                                        <div class="row">
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nft__item style-2">
                                                        <div class="de_countdown" data-year="2022" data-month="6" data-day="14" data-hour="8"></div>
                                                        <div class="author_list_pp">
                                                            <a href="04_retro-author.php">                                    
                                                                <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_wrap">
                                                            <div class="nft__item_extra">
                                                                <div class="nft__item_buttons">
                                                                    <button onclick="location.href='04_retro-item-details.html'">Buy Now</button>
                                                                    <div class="nft__item_share">
                                                                        <h4>Share</h4>
                                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                        <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="04_retro-item-details.html">
                                                                <img src="images/author_single/porto-3.jpg" class="lazy nft__item_preview" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_info">
                                                            <a href="04_retro-item-details.html">
                                                                <h4>Three Donuts</h4>
                                                            </a>
                                                            <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                                                0.05 ETH<span>1/11</span>
                                                            </div>
                                                            <div class="nft__item_action">
                                                                <a href="#">Place a bid</a>
                                                            </div>
                                                            <div class="nft__item_like">
                                                                <i class="fa fa-heart"></i><span>97</span>
                                                            </div>                                 
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nft__item style-2">
                                                        <div class="de_countdown" data-year="2022" data-month="6" data-day="16" data-hour="8"></div>
                                                        <div class="author_list_pp">
                                                            <a href="04_retro-author.php">                                    
                                                                <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_wrap">
                                                            <div class="nft__item_extra">
                                                                <div class="nft__item_buttons">
                                                                    <button onclick="location.href='04_retro-item-details.html'">Buy Now</button>
                                                                    <div class="nft__item_share">
                                                                        <h4>Share</h4>
                                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                        <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="04_retro-item-details.html">
                                                                <img src="images/author_single/porto-1.jpg" class="lazy nft__item_preview" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_info">
                                                            <a href="04_retro-item-details.html">
                                                                <h4>Pinky Ocean</h4>
                                                            </a>
                                                            <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                                                0.08 ETH<span>1/20</span>
                                                            </div>
                                                            <div class="nft__item_action">
                                                                <a href="#">Place a bid</a>
                                                            </div>
                                                            <div class="nft__item_like">
                                                                <i class="fa fa-heart"></i><span>50</span>
                                                            </div>                            
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nft__item style-2">
                                                        <div class="author_list_pp">
                                                            <a href="04_retro-author.php">                                    
                                                                <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_wrap">
                                                            <div class="nft__item_extra">
                                                                <div class="nft__item_buttons">
                                                                    <button onclick="location.href='04_retro-item-details.html'">Buy Now</button>
                                                                    <div class="nft__item_share">
                                                                        <h4>Share</h4>
                                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                        <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="04_retro-item-details.html">
                                                                <img src="images/author_single/porto-2.jpg" class="lazy nft__item_preview" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_info">
                                                            <a href="04_retro-item-details.html">
                                                                <h4>The Animals</h4>
                                                            </a>
                                                            <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                                                0.06 ETH<span>1/22</span>
                                                            </div>
                                                            <div class="nft__item_action">
                                                                <a href="#">Place a bid</a>
                                                            </div>
                                                            <div class="nft__item_like">
                                                                <i class="fa fa-heart"></i><span>80</span>
                                                            </div>                                 
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nft__item style-2">
                                                        <div class="author_list_pp">
                                                            <a href="04_retro-author.php">                                    
                                                                <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_wrap">
                                                            <div class="nft__item_extra">
                                                                <div class="nft__item_buttons">
                                                                    <button onclick="location.href='04_retro-item-details.html'">Buy Now</button>
                                                                    <div class="nft__item_share">
                                                                        <h4>Share</h4>
                                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                                        <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i class="fa fa-envelope fa-lg"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="04_retro-item-details.html">
                                                                <img src="images/author_single/porto-4.jpg" class="lazy nft__item_preview" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="nft__item_info">
                                                            <a href="04_retro-item-details.html">
                                                                <h4>Graffiti Colors</h4>
                                                            </a>
                                                            <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                                                0.02 ETH<span>1/15</span>
                                                            </div>
                                                            <div class="nft__item_action">
                                                                <a href="#">Place a bid</a>
                                                            </div>
                                                            <div class="nft__item_like">
                                                                <i class="fa fa-heart"></i><span>73</span>
                                                            </div>                                 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="tab-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="nft__item style-2">
                                                    <div class="author_list_pp">
                                                        <a href="04_retro-author.php">                                    
                                                            <img class="lazy" src="images/author/author-1.jpg" alt="">
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                    </div>
                                                    <div class="nft__item_wrap">
                                                        <a href="04_retro-item-details.html">
                                                            <img src="images/items/anim-4.webp" class="lazy nft__item_preview" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="nft__item_info">
                                                        <a href="04_retro-item-details.html">
                                                            <h4>The Truth</h4>
                                                        </a>
                                                        <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                                            0.06 ETH<span>1/20</span>
                                                        </div>
                                                        <div class="nft__item_action">
                                                            <a href="#">Place a bid</a>
                                                        </div>
                                                        <div class="nft__item_like">
                                                            <i class="fa fa-heart"></i><span>26</span>
                                                        </div>                                 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="nft__item style-2">
                                                    <div class="de_countdown" data-year="2022" data-month="6" data-day="6" data-hour="8"></div>
                                                    <div class="author_list_pp">
                                                        <a href="04_retro-author.php">                                    
                                                            <img class="lazy" src="images/author/author-2.jpg" alt="">
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                    </div>
                                                    <div class="nft__item_wrap">
                                                        <a href="04_retro-item-details.html">
                                                            <img src="images/items/anim-2.webp" class="lazy nft__item_preview" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="nft__item_info">
                                                        <a href="04_retro-item-details.html">
                                                            <h4>Running Puppets</h4>
                                                        </a>
                                                        <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                                            0.03 ETH<span>1/24</span>
                                                        </div>    
                                                        <div class="nft__item_action">
                                                            <a href="#">Place a bid</a>
                                                        </div>
                                                        <div class="nft__item_like">
                                                            <i class="fa fa-heart"></i><span>45</span>
                                                        </div>                                  
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="nft__item style-2">
                                                    <div class="author_list_pp">
                                                        <a href="04_retro-author.php">                                    
                                                            <img class="lazy" src="images/author/author-3.jpg" alt="">
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                    </div>
                                                    <div class="nft__item_wrap">
                                                        <a href="04_retro-item-details.html">
                                                            <img src="images/items/anim-1.webp" class="lazy nft__item_preview" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="nft__item_info">
                                                        <a href="04_retro-item-details.html">
                                                            <h4>USA Wordmation</h4>
                                                        </a>
                                                        <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                                            0.09 ETH<span>1/25</span>
                                                        </div>
                                                        <div class="nft__item_action">
                                                            <a href="#">Place a bid</a>
                                                        </div>
                                                        <div class="nft__item_like">
                                                            <i class="fa fa-heart"></i><span>76</span>
                                                        </div>                                 
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="nft__item style-2">
                                                    <div class="de_countdown" data-year="2022" data-month="6" data-day="8" data-hour="8"></div>
                                                    <div class="author_list_pp">
                                                        <a href="04_retro-author.php">                                    
                                                            <img class="lazy" src="images/author/author-4.jpg" alt="">
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                    </div>
                                                    <div class="nft__item_wrap">
                                                        <a href="04_retro-item-details.html">
                                                            <img src="images/items/anim-5.webp" class="lazy nft__item_preview" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="nft__item_info">
                                                        <a href="04_retro-item-details.html">
                                                            <h4>Loop Donut</h4>
                                                        </a>
                                                        <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                                            0.09 ETH<span>1/14</span>
                                                        </div>
                                                        <div class="nft__item_action">
                                                            <a href="#">Place a bid</a>
                                                        </div>
                                                        <div class="nft__item_like">
                                                            <i class="fa fa-heart"></i><span>94</span>
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
				</div>
            </section>
			
			
        </div> -->
        <!-- content close -->

        <!-- <a href="#" id="back-to-top"></a> -->
        
        <!-- footer begin -->
        <!-- <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Marketplace</h5>
                            <ul>
                                <li><a href="#">All NFTs</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Music</a></li>
                                <li><a href="#">Domain Names</a></li>
                                <li><a href="#">Virtual World</a></li>
                                <li><a href="#">Collectibles</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Resources</h5>
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Suggestions</a></li>
                                <li><a href="#">Discord</a></li>
                                <li><a href="#">Docs</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Community</h5>
                            <ul>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Mailing List</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="blank.php" class="row form-dark" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text" /> <a href="#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="04_retro-index.html">
                                        <img alt="" class="f-logo" src="images/logo-retro-light.png" /><span class="copy">&copy; Copyright 2022 - Gigaland by Designesia</span>
                                    </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- footer close -->
        
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    
    <script>
        setInterval(function(){
            var cont = 0;
            var perc;
            var input_list = document.getElementsByClassName("form-control");

            for (var x=0; x<input_list.length; ++x)
                if (input_list[x].value)
                    ++cont;
            
            perc = (cont/input_list.length*100).toFixed();

            document.getElementById("p-bar").style.width = perc + "%";
            document.getElementById("percentage").innerText = (perc).toString() + "%";

            if (perc < 75)
                document.getElementById("percentage-message").innerText = "Almost there!";
            if (perc < 5)
                document.getElementById("percentage-message").innerText = "Way to go...";
            if (perc == 100)
                document.getElementById("percentage-message").innerText = "Amazing!";
            
            var left_classList = document.getElementById("left").classList;
            if (window.innerWidth < 768)
                left_classList.add("order-1");
            else if(left_classList.contains("order-1"))
                    left_classList.remove("order-1");

        }, 100);
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

</body>

</html>