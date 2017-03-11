<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/prc1.css">
		<script type="text/javascript" src="req.js"></script>		
		
		<!--Inline JQuery plugin that is used as slider for menu items in CookBook page-->
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
		<!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 10);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
		</script>
	 <style>
        
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('img/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }

        /* jssor slider thumbnail navigator skin 01 css */
        /*
        .jssort01 .p            (normal)
        .jssort01 .p:hover      (normal mouseover)
        .jssort01 .p.pav        (active)
        .jssort01 .p.pdn        (mousedown)
        */
        .jssort01 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 72px;
            height: 72px;
        }
        
        .jssort01 .t {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .jssort01 .w {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        
        .jssort01 .c {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
            box-sizing: content-box;
            background: url('img/t01.png') -800px -800px no-repeat;
            _background: none;
        }
        
        .jssort01 .pav .c {
            top: 2px;
            _top: 0px;
            left: 2px;
            _left: 0px;
            width: 68px;
            height: 68px;
            border: #000 0px solid;
            _border: #fff 2px solid;
            background-position: 50% 50%;
        }
        
        .jssort01 .p:hover .c {
            top: 0px;
            left: 0px;
            width: 70px;
            height: 70px;
            border: #fff 1px solid;
            background-position: 50% 50%;
        }
        
        .jssort01 .p.pdn .c {
            background-position: 50% 50%;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
        }
        
        * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
            /* ie quirks mode adjust */
            width /**/: 72px;
            height /**/: 72px;
        }
        
    </style>
	</head>
	
	<body>
		<div class="container1">		
			<header class="top">
						<!--Images in Welcome page-->
						<img src="IMAGES\pic1.png" alt="Logo" class="logo" /></br></br>
						<h1>Indi Wings</h1>
						<img src="IMAGES\pic2.jpg" alt="bld" class="bld"/>
						
						<!--Google maps location of restaurant-->
						<div class="address">							
						<span class="store-title">Lee'S Summit,MO</span>
						<br>
						<span class="store-adr">
								NW Chipman Road<br>
								816-666-0000
						</span><br>
							<a href="https://www.google.com/maps/dir//NW+Chipman+Rd,+Lee's+Summit,+MO/@38.9265396,-94.4193292,17z/data=!4m13!1m4!3m3!1s0x87c0e03e70ec15f9:0xb229aca95a2ca656!2sNW+Chipman+Rd,+Lee's+Summit,+MO!3b1!4m7!1m0!1m5!1m1!1s0x87c0e03e70ec15f9:0xb229aca95a2ca656!2m2!1d-94.4171405!2d38.9265396" style ="color:white"title="get direction to this store">Get Direction</a>
						</div>
						<nav class="page_nav">
							<ul>
								<li> <a	href="prh1.php">Home</a></li>
								<li> <a	href="ContactUS.php">Reach Us</a></li>				
								<li> <a	href="req.php">Cook Book</a></li>
								<li> <a	href="FeedBack.php">FeedBack</a></li>																											
							</ul>					
						</nav>
						<div class="clear"></div>
						<span style="float:right"><?php error_reporting(0); session_start(); echo isset($_SESSION['username'])?"Welcome ".$_SESSION['username']:""; ?> </span><br>
			</header>
					<table>
						<form name="listForm1" method="post">
							<tr>
								<td>
								<table>
									<tr>
										<td>
											<input type="hidden" name="choice" value="Idly-Wada" style="height:11px;"/>Idly-Wada<br><br>
										</td>
										<td>
											<input id= "IdlyWada" type="text" name="cho" maxlength="2" style="height:9px;width:40px;padding-bottom:4px" onchange="msg(this.id)"/> <br><br>
										</td>
									</tr>
										
									<tr>
										<td>
											<input type="hidden" name="choice" value="Dosa" style="height:11px;"/>Dosa<br><br>
										</td>
										<td>
											<input id= "Dosa" type="text" name="cho" maxlength="2" style="height:9px;width:40px;padding-bottom:4px" onchange="msg(this.id)"/> <br><br>
										</td>
									</tr>
										
									<tr>
										<td>
											<input type="hidden" name="choice" value="Idiyappam" style="height:11px;" onchange="msg()"/>Idiyappam<br><br></td>
										<td>
											<input id="Idiyappam" type="text" name="cho" maxlength="2" style="height:8px;width:40px;padding-bottom:4px;" onchange="msg(this.id)"/> <br><br>
										</td>										
									</tr>
										
									<tr>
										<td>
											<input type="hidden" name="choice" value="Payasam" style="height:11px;" onchange="msg()"/>Payasasm<br><br>
										</td>
										<td>
											<input id= "Payasam" type="text" name="cho" maxlength="2" style="height:9px;width:40px;padding-bottom:4px;" onchange="msg(this.id)"/> <br><br>
										</td>
									</tr>
										
									<tr>
										<td>
											<input type="hidden" name="choice" value="PaniPuri" style="height:11px;" onchange="msg()"/>Pani Puri<br><br>
										</td>
										<td>
											<input id= "PaniPuri" type="text" name="cho" maxlength="2" style="height:9px;width:40px;padding-bottom:4px;" onchange="msg(this.id)"/> <br><br>
										</td>
									</tr>
										
										
									<tr>
										<td>
											<input  size="20" id="result" type="hidden" name="total" value=""/>
											<input  size="20" id="temp" type="hidden" name="temp" value=""/>
										
											<input type="submit" value="Place Order" class="button_bg" id="btnXML" onclick="printxml()"/>
											<input id="inputFileNameToSaveAs" type ="hidden" value="Table1" ></input>
										</td>
									</tr>
								</table>
								</td>
								
								<td>
									<table>
										<tr>
											<td>
												<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;">
													<!-- Loading Screen -->
													<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
														<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
														<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
													</div>
													<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
														<div data-p="144.50" style="display: none;">
															<img data-u="image" src="img/01.jpg" />
															<img data-u="thumb" src="img/thumb-01.jpg" />
														</div>
														<div data-p="144.50" style="display: none;">
															<img data-u="image" src="img/02.jpg" />
															<img data-u="thumb" src="img/thumb-02.jpg" />
														</div>
														<div data-p="144.50" style="display: none;">
															<img data-u="image" src="img/03.jpg" />
															<img data-u="thumb" src="img/thumb-03.jpg" />
														</div>
														<div data-p="144.50" style="display: none;">
															<img data-u="image" src="img/04.jpg" />
															<img data-u="thumb" src="img/thumb-04.jpg" />
														</div>
														<div data-p="144.50" style="display: none;">
															<img data-u="image" src="img/05.jpg" />
															<img data-u="thumb" src="img/thumb-05.jpg" />
														</div>
														<div data-p="144.50" style="display: none;">
															<img data-u="image" src="img/06.jpg" />
															<img data-u="thumb" src="img/thumb-06.jpg" />
														</div>
														<div data-p="144.50" style="display: none;">
															<img data-u="image" src="img/07.jpg" />
															<img data-u="thumb" src="img/thumb-07.jpg" />
														</div>
														<div data-p="144.50" style="display: none;">
															<img data-u="image" src="img/08.jpg" />
															<img data-u="thumb" src="img/thumb-08.jpg" />
														</div>
														<div data-p="144.50" style="display: none;">
															<img data-u="image" src="img/09.jpg" />
															<img data-u="thumb" src="img/thumb-09.jpg" />
														</div>
														<div data-p="144.50" style="display: none;">
															<img data-u="image" src="img/10.jpg" />
															<img data-u="thumb" src="img/thumb-10.jpg" />
														</div>
														<div data-p="144.50" style="display: none;">
															<img data-u="image" src="img/11.jpg" />
															<img data-u="thumb" src="img/thumb-11.jpg" />
														</div>
														<div data-p="144.50" style="display: none;">
															<img data-u="image" src="img/12.jpg" />
															<img data-u="thumb" src="img/thumb-12.jpg" />
														</div>
														<a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a>
								
													</div>
													<!-- Thumbnail Navigator -->
													<div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
														<!-- Thumbnail Item Skin Begin -->
														<div data-u="slides" style="cursor: default;">
															<div data-u="prototype" class="p">
																<div class="w">
																	<div data-u="thumbnailtemplate" class="t"></div>
																</div>
																<div class="c"></div>
															</div>
														</div>
														<!-- Thumbnail Item Skin End -->
													</div>
													<!-- Arrow Navigator -->
													<span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
													<span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
												</div>
											</td>
										</tr>
									</table>
								</td>
						</form>							
					</table>
				
				<footer class="page_footer">
					&copy; www.indiwings.com
				</footer>		
		</div>
	</body>
</html>