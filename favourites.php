<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->
<?php
	define("RS","/apteka/");
	$meta_title = "Избранное";
?>
<?php include("inc/head.php"); ?>
<body>
  <?php include("inc/catalogHeader.php"); ?>
	<?php include("inc/dropMenu.php"); ?>
	<section class="catalogMainBlock">
		<div class="container">
        <div class="col-sm-12 breadCrumbBlock">
          <ol class="breadcrumb breadCrumbCustom">
            <li class="breadCrumbMenu"><a href="#">Главная</a></li>
            <li class="breadCrumbMenu active"><a href="#">Избранные товары</a></li>
          </ol>
        </div>
					<div class="row">
    				<div class="col-sm-12 catalogProductBlock favouritesProductBlock">
              <div class="catalogSelectsBlock">
                <div class="col-sm-12">
                  <div class="col-sm-6">
                    <p class="catalogProductTitle">Избранные товары <span class="catalogProductSpan">каталог</span></p>
                  </div>
                  <div class="col-sm-6">
                    <div class="sortingBlock2 favouritesSelect2">
                      <div class="catalogFirstSelect">
                        <p class="catalogShowVal" id="catalogShowVal2">На странице</p>
                      </div>
                      <div class="catalogFirstSelectContent" id="catalogFirstSelectContent">
                        <p class="catalogFirstSelectVal" id="catalogPage">На странице</p>
                        <p class="catalogFirstSelectVal" id="catalog20">20</p>
                        <p class="catalogFirstSelectVal" id="catalog40">40</p>
                      </div>
                    </div>
                    <div class="sortingBlock1 favouritesSelect1">
                      <div class="catalogFirstSelect">
                        <p class="catalogShowVal" id="catalogShowVal1">Позиция</p>
                      </div>
                      <div class="catalogFirstSelectContent" id="catalogFirstSelectContent">
                        <p class="catalogFirstSelectVal" id="catalogPosition">На странице</p>
                        <p class="catalogFirstSelectVal" id="catalogName">Название</p>
                        <p class="catalogFirstSelectVal" id="catalogPrice">Цена</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    					<div class="catalogProductionBlock favouritesProductionBlock">
    						<div class="col-sm-3 catalogProductionGrid wow fadeInUp">
    							<div class="productionDetailsBlock">
    								<div class="productionImgBlock">
    									<img src="img/productionImg.png" alt="" class="productionImg" />
    									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
    								</div>
    								<p class="productionTitle">Das Gesunde</p>
    								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
    								<div class="productionPriceAndBuy">
    									<div class="productionBuyBlock">
    										<a href="#"><div class="productionLikeIcon productionTrashIcon"></div></a>
    										<a href="#"><div class="productionBuyIcon"></div></a>
    									</div>
    									<div class="productionPriceBlock">
    										<p class="productionPrice">200,40 грн</p>
    									</div>
    								</div>
    							</div>
    						</div>
    						<div class="col-sm-3 catalogProductionGrid wow fadeInUp">
    							<div class="productionDetailsBlock">
    								<div class="productionImgBlock">
    									<img src="img/productionImg.png" alt="" class="productionImg" />
    									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
    								</div>
    								<p class="productionTitle">Das Gesunde</p>
    								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
    								<div class="productionPriceAndBuy">
    									<div class="productionBuyBlock">
    										<a href="#"><div class="productionLikeIcon productionTrashIcon"></div></a>
    										<a href="#"><div class="productionBuyIcon"></div></a>
    									</div>
    									<div class="productionPriceBlock">
    										<p class="productionPrice">200,40 грн</p>
    									</div>
    								</div>
    							</div>
    						</div>
    						<div class="col-sm-3 catalogProductionGrid wow fadeInUp">
    							<div class="productionDetailsBlock">
    								<div class="productionImgBlock">
    									<img src="img/productionImg.png" alt="" class="productionImg" />
    									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
    								</div>
    								<p class="productionTitle">Das Gesunde</p>
    								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
    								<div class="productionPriceAndBuy">
    									<div class="productionBuyBlock">
    										<a href="#"><div class="productionLikeIcon productionTrashIcon"></div></a>
    										<a href="#"><div class="productionBuyIcon"></div></a>
    									</div>
    									<div class="productionPriceBlock">
    										<p class="productionPrice">200,40 грн</p>
    									</div>
    								</div>
    							</div>
    						</div>
                <div class="col-sm-3 catalogProductionGrid wow fadeInUp">
                  <div class="productionDetailsBlock">
                    <div class="productionImgBlock">
                      <img src="img/productionImg.png" alt="" class="productionImg" />
                      <a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
                      <a href="#" class="productionSale"><div class="productionSaleImg"></div></a>
                    </div>
                    <p class="productionTitle">Das Gesunde</p>
                    <p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
                    <div class="productionPriceAndBuy">
                      <div class="productionBuyBlock">
                        <a href="#"><div class="productionLikeIcon productionTrashIcon"></div></a>
                        <a href="#"><div class="productionBuyIcon"></div></a>
                      </div>
                      <div class="productionPriceBlock">
                        <p class="productionPrice">100,20 <span>200,40</span> грн</p>
                      </div>
                    </div>
                  </div>
                </div>
    						<div class="col-sm-3 catalogProductionGrid wow fadeInUp">
    							<div class="productionDetailsBlock">
    								<div class="productionImgBlock">
    									<img src="img/productionImg.png" alt="" class="productionImg" />
    									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
    								</div>
    								<p class="productionTitle">Das Gesunde</p>
    								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
    								<div class="productionPriceAndBuy">
    									<div class="productionBuyBlock">
    										<a href="#"><div class="productionLikeIcon productionTrashIcon"></div></a>
    										<a href="#"><div class="productionBuyIcon"></div></a>
    									</div>
    									<div class="productionPriceBlock">
    										<p class="productionPrice">200,40 грн</p>
    									</div>
    								</div>
    							</div>
    						</div>
                <div class="col-sm-3 catalogProductionGrid wow fadeInUp">
                  <div class="productionDetailsBlock">
                    <div class="productionImgBlock">
                      <img src="img/productionImg.png" alt="" class="productionImg" />
                      <a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
                      <a href="#" class="productionSale"><div class="productionSaleImg"></div></a>
                    </div>
                    <p class="productionTitle">Das Gesunde</p>
                    <p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
                    <div class="productionPriceAndBuy">
                      <div class="productionBuyBlock">
                        <a href="#"><div class="productionLikeIcon productionTrashIcon"></div></a>
                        <a href="#"><div class="productionBuyIcon"></div></a>
                      </div>
                      <div class="productionPriceBlock">
                        <p class="productionPrice">100,20 <span>200,40</span> грн</p>
                      </div>
                    </div>
                  </div>
                </div>
    						<div class="col-sm-3 catalogProductionGrid wow fadeInUp">
    							<div class="productionDetailsBlock">
    								<div class="productionImgBlock">
    									<img src="img/productionImg.png" alt="" class="productionImg" />
    									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
    								</div>
    								<p class="productionTitle">Das Gesunde</p>
    								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
    								<div class="productionPriceAndBuy">
    									<div class="productionBuyBlock">
    										<a href="#"><div class="productionLikeIcon productionTrashIcon"></div></a>
    										<a href="#"><div class="productionBuyIcon"></div></a>
    									</div>
    									<div class="productionPriceBlock">
    										<p class="productionPrice">200,40 грн</p>
    									</div>
    								</div>
    							</div>
    						</div>
    						<div class="col-sm-3 catalogProductionGrid wow fadeInUp">
    							<div class="productionDetailsBlock">
    								<div class="productionImgBlock">
    									<img src="img/productionImg.png" alt="" class="productionImg" />
    									<a href="#" class="productionAddHoverLink"><div class="productionAddHover"></div></a>
    								</div>
    								<p class="productionTitle">Das Gesunde</p>
    								<p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
    								<div class="productionPriceAndBuy">
    									<div class="productionBuyBlock">
    										<a href="#"><div class="productionLikeIcon productionTrashIcon"></div></a>
    										<a href="#"><div class="productionBuyIcon"></div></a>
    									</div>
    									<div class="productionPriceBlock">
    										<p class="productionPrice">200,40 грн</p>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
              <div class="col-xs-12 pageCounterGrid wow fadeInUp" >
                <div class="pageCounterBlock1">
                  <div class="pageCounterWrapper">
                    <a href="#" class="pageCounterNum">1</a>
                  </div>
                  <div class="pageCounterWrapper">
                    <a href="#" class="pageCounterNum">2</a>
                  </div>
                </div>
                <div class="pageCounterBlock2">
                  <div class="pageCounterWrapper">
                    <a href="#" class="pageCounterNum">1</a>
                  </div>
                  <div class="pageCounterWrapper">
                    <a href="#" class="pageCounterNum">...</a>
                  </div>
                  <div class="pageCounterWrapper">
                    <a href="#" class="pageCounterNum">8</a>
                  </div>
                  <div class="pageCounterWrapper">
                    <a href="#" class="pageCounterNum">9</a>
                  </div>
                  <div class="pageCounterWrapper">
                    <a href="#" class="pageCounterNum">10</a>
                  </div>
                  <div class="pageCounterWrapper">
                    <a href="#" class="pageCounterNum">...</a>
                  </div>
                  <div class="pageCounterWrapper">
                    <a href="#" class="pageCounterNum">30</a>
                  </div>
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
