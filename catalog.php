<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->
<?php
	define("RS","/apteka/");
	$meta_title = "Каталог";
?>
<?php include("inc/head.php"); ?>
<body>
  <?php include("inc/catalogHeader.php"); ?>
	<?php include("inc/dropMenu.php"); ?>
	<section class="catalogMainBlock">
		<div class="container">
			<div class="row">
				<?php include("inc/breadCrumb.php"); ?>
				<div class="col-sm-3 accordeonCatalog">
					<div class="row">
						<ul class="dropDownAccordeon">
							<div class="catalogShowBtn">
								<p class="catalogShowMed">Медикаменты</p>
								<button type="button" class="navbar-toggle toggleAccordeon" data-toggle="collapse" data-target=".dropDownMainAcc">
									<span class="icon-bar catalogNavIc"></span>
									<span class="icon-bar catalogNavIc"></span>
									<span class="icon-bar catalogNavIc"></span>
								</button>
							</div>
							<div class="dropDownMainAcc collapse in" data-toggle="collapse2">
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Лекарство от зубной боли, от стоматита <span>(139)</span></a></li>
									<ul id="demo" class="collapse accordeonCollapse">
										<li><a href="blog.php">Препарат от зубов</a></li>
										<li><a href="main.php">Препарат от зубной боли</a></li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo1" data-toggle="collapse" class="medicationAccordeonLi"><a href="blog.php" class="medicationAccordeonName">Препараты для желудка <span></span></a></li>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo2" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Препараты для кишечника <span>(42)</span></a></li>
									<ul id="demo2" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo3" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Препараты для печени <span>(58)</span></a></li>
									<ul id="demo3" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo4" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Препараты от диабета <span>(37)</span></a></li>
									<ul id="demo4" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo5" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Сердечные препараты <span>(95)</span></a></li>
									<ul id="demo5" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo6" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Сосудистые препараты <span></span></a></li>
									<ul id="demo6" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo7" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Препараты для лечения анемии <span>(58)</span></a></li>
									<ul id="demo7" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo8" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Препараты от давления <span>(143)</span></a></li>
									<ul id="demo8" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo9" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Препараты при кашле <span>(58)</span></a></li>
									<ul id="demo9" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo10" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Противоаллергические <span>(58)</span></a></li>
									<ul id="demo10" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo11" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Препарати от простуды <span>(58)</span></a></li>
									<ul id="demo11" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo12" data-toggle="collapse" class="medicationAccordeonLi"><a data-target="#demo12" data-toggle="collapse" class="medicationAccordeonName">Для глаз <span>(89)</span></a></li>
									<ul id="demo12" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo13" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Капли для ушей <span>(10)</span></a></li>
									<ul id="demo13" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
								<div class="dropDownAccordeonBlock">
									<li data-target="#demo14" data-toggle="collapse" class="medicationAccordeonLi"><a class="medicationAccordeonName">Кости и суставы <span>(23)</span></a></li>
									<ul id="demo14" class="collapse accordeonCollapse">
										<li>Препарат от зубов</li>
										<li>Препарат от зубной боли</li>
										<li>Препарат от стоматита</li>
										<li>Препарат от боли</li>
									</ul>
								</div>
							</div>
						</ul>
					</div>
				</div>
				<div class="col-sm-9 catalogProductBlock">
					<?php include("inc/catalogBannerAndSelect.php"); ?>
					<div class="catalogProductionBlock">
						<div class="col-sm-4 catalogProductionGrid wow fadeInUp">
							<div class="productionDetailsBlock">
								<div class="productionImgBlock">
									<img src="img/productionImg.png" alt="" class="productionImg" />
									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
								</div>
								<p class="productionTitle">Das Gesunde</p>
								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
								<div class="productionPriceAndBuy">
									<div class="productionBuyBlock">
										<a href="#"><div class="productionLikeIcon"></div></a>
										<a href="#"><div class="productionBuyIcon"></div></a>
									</div>
									<div class="productionPriceBlock">
										<p class="productionPrice">200,40 грн</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 catalogProductionGrid wow fadeInUp">
							<div class="productionDetailsBlock">
								<div class="productionImgBlock">
									<img src="img/productionImg.png" alt="" class="productionImg" />
									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
								</div>
								<p class="productionTitle">Das Gesunde</p>
								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
								<div class="productionPriceAndBuy">
									<div class="productionBuyBlock">
										<a href="#"><div class="productionLikeIcon"></div></a>
										<a href="#"><div class="productionBuyIcon"></div></a>
									</div>
									<div class="productionPriceBlock">
										<p class="productionPrice">200,40 грн</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 catalogProductionGrid wow fadeInUp">
							<div class="productionDetailsBlock">
								<div class="productionImgBlock">
									<img src="img/productionImg.png" alt="" class="productionImg" />
									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
								</div>
								<p class="productionTitle">Das Gesunde</p>
								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
								<div class="productionPriceAndBuy">
									<div class="productionBuyBlock">
										<a href="#"><div class="productionLikeIcon"></div></a>
										<a href="#"><div class="productionBuyIcon"></div></a>
									</div>
									<div class="productionPriceBlock">
										<p class="productionPrice">200,40 грн</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 catalogProductionGrid wow fadeInUp">
							<div class="productionDetailsBlock">
								<div class="productionImgBlock">
									<img src="img/productionImg.png" alt="" class="productionImg" />
									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
								</div>
								<p class="productionTitle">Das Gesunde</p>
								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
								<div class="productionPriceAndBuy">
									<div class="productionBuyBlock">
										<a href="#"><div class="productionLikeIcon"></div></a>
										<a href="#"><div class="productionBuyIcon"></div></a>
									</div>
									<div class="productionPriceBlock">
										<p class="productionPrice">200,40 грн</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 catalogProductionGrid wow fadeInUp">
							<div class="productionDetailsBlock">
								<div class="productionImgBlock">
									<img src="img/productionImg.png" alt="" class="productionImg" />
									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
								</div>
								<p class="productionTitle">Das Gesunde</p>
								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
								<div class="productionPriceAndBuy">
									<div class="productionBuyBlock">
										<a href="#"><div class="productionLikeIcon"></div></a>
										<a href="#"><div class="productionBuyIcon"></div></a>
									</div>
									<div class="productionPriceBlock">
										<p class="productionPrice">200,40 грн</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 catalogProductionGrid wow fadeInUp">
							<div class="productionDetailsBlock">
								<div class="productionImgBlock">
									<img src="img/productionImg.png" alt="" class="productionImg" />
									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
								</div>
								<p class="productionTitle">Das Gesunde</p>
								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
								<div class="productionPriceAndBuy">
									<div class="productionBuyBlock">
										<a href="#"><div class="productionLikeIcon"></div></a>
										<a href="#"><div class="productionBuyIcon"></div></a>
									</div>
									<div class="productionPriceBlock">
										<p class="productionPrice">200,40 грн</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 catalogProductionGrid wow fadeInUp">
							<div class="productionDetailsBlock">
								<div class="productionImgBlock">
									<img src="img/productionImg.png" alt="" class="productionImg" />
									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
								</div>
								<p class="productionTitle">Das Gesunde</p>
								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
								<div class="productionPriceAndBuy">
									<div class="productionBuyBlock">
										<a href="#"><div class="productionLikeIcon"></div></a>
										<a href="#"><div class="productionBuyIcon"></div></a>
									</div>
									<div class="productionPriceBlock">
										<p class="productionPrice">200,40 грн</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 catalogProductionGrid wow fadeInUp">
							<div class="productionDetailsBlock">
								<div class="productionImgBlock">
									<img src="img/productionImg.png" alt="" class="productionImg" />
									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
								</div>
								<p class="productionTitle">Das Gesunde</p>
								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
								<div class="productionPriceAndBuy">
									<div class="productionBuyBlock">
										<a href="#"><div class="productionLikeIcon"></div></a>
										<a href="#"><div class="productionBuyIcon"></div></a>
									</div>
									<div class="productionPriceBlock">
										<p class="productionPrice">200,40 грн</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 catalogProductionGrid wow fadeInUp">
							<div class="productionDetailsBlock">
								<div class="productionImgBlock">
									<img src="img/productionImg.png" alt="" class="productionImg" />
									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
								</div>
								<p class="productionTitle">Das Gesunde</p>
								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
								<div class="productionPriceAndBuy">
									<div class="productionBuyBlock">
										<a href="#"><div class="productionLikeIcon"></div></a>
										<a href="#"><div class="productionBuyIcon"></div></a>
									</div>
									<div class="productionPriceBlock">
										<p class="productionPrice">200,40 грн</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php include("inc/pageCounter.php"); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include("inc/footer.php"); ?>
	<!-- script order matters! -->
  <?php include("inc/_js.php"); ?>
	<?php include("inc/preloader.php"); ?>
</body>
</html>
