<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->
<?php
	define("RS","/apteka/");
	$meta_title = "Товар";
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
            <li class="breadCrumbMenu"><a href="#">Online аптека</a></li>
            <li class="breadCrumbMenu"><a href="#">Медикаменты</a></li>
            <li class="breadCrumbMenu"><a href="#">Препараты для лечения анемии</a></li>
            <li class="breadCrumbMenu"><a href="#">Препараты железа</a></li>
            <li class="breadCrumbMenu active"><a href="#">DAS GESUNDE</a></li>
          </ol>
        </div>
					<div class="row">
    				<div class="col-sm-12 catalogProductBlock cardProductBlock">
              <div class="col-sm-4">
                <div id="sync1" class="owl-carousel">
                  <div class="item">
                    <div href="#"><img src="img/productionCard.png" alt="" class="productionPic"/></div>
                    <a href="img/productionCard.png" class="fancybox" rel="fancyPhotos"><div class="largePhoto"></div></a>
                  </div>
                  <div class="item">
                    <div href="#"><img src="img/productionCard.png" alt="" class="productionPic"/></div>
                    <a href="img/productionCard.png" class="fancybox" rel="fancyPhotos"><div class="largePhoto"></div></a>
                  </div>
                  <div class="item">
                    <div href="#"><img src="img/productionCard2.png" alt="" class="productionPic"/></div>
                    <a href="img/productionCard2.png" class="fancybox" rel="fancyPhotos"><div class="largePhoto"></div></a>
                  </div>
                  <div class="item">
                    <div href="#"><img src="img/productionCard2.png" alt="" class="productionPic"/></div>
                    <a href="img/productionCard2.png" class="fancybox" rel="fancyPhotos"><div class="largePhoto"></div></a>
                  </div>
                </div>
                <div id="sync2" class="owl-carousel">
                  <div class="item"><img src="img/productionCard.png" alt="" /></div>
                  <div class="item"><img src="img/productionCard.png" alt="" /></div>
                  <div class="item"><img src="img/productionCard2.png" alt="" /></div>
                  <div class="item"><img src="img/productionCard2.png" alt="" /></div>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="productionCardMainInfo">
                  <p class="productionCardTitle">Das gesunde</p>
                  <p class="productionCardDescr">Multivitamin Barchen Fruchtgummis</p>
                  <p class="productionCardArticul">Артикул: <span>12412</span></p>
                </div>
                <div class="productionCardMoreInfo">
                  <p class="productionCardMoreText">Бренд: <span>Dm</span></p>
                  <p class="productionCardMoreText">Страна производитель: <span>Германия</span></p>
                  <p class="productionCardMoreText">Форма товара: <span>Жевательная конфета</span></p>
                  <p class="productionCardMoreText">Количество: <span>60 штук в упаковке</span></p>
                </div>
                <div class="productionCardPrice">
                  <p class="productionCardPriceTitle">Цена</p>
                  <p class="productionCardPriceNum">200,40 грн</p>
                  <p class="cardOldPrice">158,00 грн</p>
                </div>
                <div class="cardProductionLikeBtn">
                  <a href="#" class="productionCardLikeBlock"><div class="productionCardLikeImg"></div></a>
                </div>
                <div class="productionCardBuyBlock">
                  <button type="button" class="btn btn-success productionCardBuyBtn" data-toggle="modal" data-target="#modal-6">Добавить в корзину</button>
                  <button type="button" class="btn btn-success productionCardBuyBtn buy4oneClickBtn">Купить в один клик</button>
                </div>
              </div>
              <div class="col-sm-12 cardsToggleMenus">
                <div class="cardToggleMenu cardToggleMenuActive" id="cardDetails">
                  <a>Детальное описание</a>
                </div>
                <div class="cardToggleMenu" id="cardBuy">
                  <a>Оплата / Доставка</a>
                </div>
                <div class="cardDetailInfo">
                  <div class="cardDetailWrapper">
                    <h2 class="cardDetailTitle">Состав</h2>
                      <ul class="cardDetaiUl">
                        <li class="cardDetailLi">Содержит витамины В1, В2, В6, В12, С, Е, пантотеновая кислота, биотин, ниацин, фолиевую кислоту.</li>
                        <li class="cardDetailLi">Не содержат искусственных красителей, консервантов и жира.</li>
                      </ul>
                    <h2 class="cardDetailTitle">Показания к применению</h2>
                      <ul class="cardDetaiUl">
                        <li class="cardDetailLi">Предназначен для детей и изготовлен в виде вкусных желатиновых медвежат.</li>
                        <li class="cardDetailLi">Витаминный препарат Multivitamin-Barchen Fur Kinder  направлен на укрепление детской иммунной системы, стимулирование физической и умственной активности, оптимизацию и регулировние гормональных, кровотворных, биохимических и общих энергетических процессов в организме ребенка. </li>
                      </ul>
                    <h2 class="cardDetailTitle">Лекарственная форма</h2>
                      <ul class="cardDetaiUl">
                        <li class="cardDetailLi">В виде вкусных желатиновых медвежат.</li>
                      </ul>
                    <h2 class="cardDetailTitle">Способ применения</h2>
                      <ul class="cardDetaiUl">
                        <li class="cardDetailLi">Дети (4-7 лет): 4 медведи, дети (7-10 лет) 6 медведей и для старших 8 медведей в день. </li>
                      </ul>
                    <h2 class="cardDetailTitle">Противопоказания</h2>
                      <ul class="cardDetaiUl">
                        <li class="cardDetailLi">НЕТ</li>
                      </ul>
                    <h2 class="cardDetailTitle">Побочные эффекты</h2>
                      <ul class="cardDetaiUl">
                        <li class="cardDetailLi">НЕТ</li>
                      </ul>
                  </div>
                </div>
                <div class="cardPayInfo">
                  <div class="cardDetailWrapper">
                    <h2 class="cardDetailTitle">Оплата</h2>
                      <p class="cardDetailLi">Оплата возможна при получении заказа, а также Вы имеете возможность оплатить товар пластиковыми картами Visa, MasterCard, Maestro.</p>
                    <h2 class="cardDetailTitle">Доставка</h2>
                      <ul class="cardPayUl">
                        <li class="cardPayLi"><span>1. </span>Курьером</li>
                          <p class="cardPayDetails">При сумме заказа от 100 грн. доставка осуществляется бесплатно. Оплата наличными при получении заказа. Доставка курьером -  день в день (после подтверждения заказа оператором, минимум 3 часа до доставки), вечерние заказы на следующий рабочий день. В случае, если необходимого товара нет в наличии в аптеках Вашего города, мы вышлем Вам его с помощью Новой Почты, правда, это займет немного больше времени.</p>
                        <li class="cardPayLi"><span>2. </span>Самовывоз из аптеки</li>
                          <p class="cardPayDetails">Если Вы желаете забрать свой заказ из аптеки самостоятельно, для удобства Вы можете предварительно забронировать его по телефону, либо через сайт. После подтверждения заказа оператором – сразу можно ехать в аптеку.</p>
                        <li class="cardPayLi"><span>3. </span>Доставка новой почтой</li>
                          <p class="cardPayDetails">Отправка заказа день в день, получение на складе Новой Почты по прибытию товара (время доставки по Украине от 1 до 3-х дней). Доставка оплачивается согласно тарифам курьерской службы.</p>
                      </ul>
                  </div>
                </div>
              </div>
							<div class="col-sm-12 similarProductsBlock">
                <div class="similarProductsTitleBlock">
                  <p class="catalogProductTitle cardProductTitle">Подобные товары <span class="catalogProductSpan">каталог</span></p>
                  <div class="cardTitleRightLine">

                  </div>
                </div>
                <div class="owlSimilarWrapper">
                  <div id="owl-demo5">
                    <div class="item">
                      <div class="catalogProductionBlock">
                        <div class="productionDetailsBlock">
                          <div class="productionImgBlock">
                            <img src="img/productionImg.png" alt="" class="productionImg" />
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
                    <div class="item">
                      <div class="catalogProductionBlock">
                        <div class="productionDetailsBlock">
                          <div class="productionImgBlock">
                            <img src="img/productionImg.png" alt="" class="productionImg" />
                            <a href="#" class="productionSale"><div class="productionSaleImg cardProductionSale"></div></a>
                          </div>
                          <p class="productionTitle">Das Gesunde</p>
                          <p class="productionDetails">Детские желатиновые мишки 60шт в упаковке</p>
                          <div class="productionPriceAndBuy">
                            <div class="productionBuyBlock">
                              <a href="#"><div class="productionLikeIcon"></div></a>
                              <a href="#"><div class="productionBuyIcon"></div></a>
                            </div>
                            <div class="productionPriceBlock">
                              <p class="productionPrice">100,20 <span>200,40</span> грн</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item"><div class="catalogProductionBlock">
                      <div class="productionDetailsBlock">
                        <div class="productionImgBlock">
                          <img src="img/productionImg.png" alt="" class="productionImg" />
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
                    <div class="item">
                      <div class="catalogProductionBlock">
                        <div class="productionDetailsBlock">
                          <div class="productionImgBlock">
                            <img src="img/productionImg.png" alt="" class="productionImg" />
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
                    <div class="item">
                      <div class="catalogProductionBlock">
                      <div class="productionDetailsBlock">
                        <div class="productionImgBlock">
                          <img src="img/productionImg.png" alt="" class="productionImg" />
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
                    <div class="item">
                      <div class="catalogProductionBlock">
                      <div class="productionDetailsBlock">
                        <div class="productionImgBlock">
                          <img src="img/productionImg.png" alt="" class="productionImg" />
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
                    <div class="item">
                      <div class="catalogProductionBlock">
                      <div class="productionDetailsBlock">
                        <div class="productionImgBlock">
                          <img src="img/productionImg.png" alt="" class="productionImg" />
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
                    <div class="item">
                      <div class="catalogProductionBlock">
                      <div class="productionDetailsBlock">
                        <div class="productionImgBlock">
                          <img src="img/productionImg.png" alt="" class="productionImg" />
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
                  </div>
                </div>
              </div>
				</div>
			</div>
	</section>
	<?php include("inc/modalBuyComplete.php"); ?>
	<?php include("inc/footer.php"); ?>
	<!-- script order matters! -->
  <?php include("inc/_js.php"); ?>
	<?php include("inc/preloader.php"); ?>
</body>
</html>
