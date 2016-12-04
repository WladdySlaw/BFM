<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->
<?php
	define("RS","/apteka/");
	$meta_title = "Товар";
  $pageName = "accountOrders";
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
            <li class="breadCrumbMenu"><a href="#">Личный кабинет</a></li>
            <li class="breadCrumbMenu"><a href="#">Мои заказы</a></li>
            <li class="breadCrumbMenu active"><a href="#">ЗАКАЗ №18782959</a></li>

          </ol>
        </div>
        <div class="row">
          <div class="col-sm-3 accountLeftGrid">
            <div class="kabinetLeftNav">
              <div class="kabinetTitleBlock">
                <p class="catalogProductTitle kabinetTitleName">Личный Кабинет</p>
								<button type="button" class="navbar-toggle collapsed accountNavBtn" data-toggle="collapse" data-target=".kabinetNavigation">
									<span class="icon-bar accountNavIc"></span>
									<span class="icon-bar accountNavIc"></span>
									<span class="icon-bar accountNavIc"></span>
								</button>
              </div>
              <?php
              include("inc/accountNav.php");
              ?>
            </div>
          </div>
          <div class="col-sm-9 accountMainGrid">
            <div class="kabinetContentPersonalData" id="myOffers">
              <div class="kabinetPersonalDataName">
                <p class="kabinetPersonalDataTitle">Мои <span>заказы</span></p>
                <div class="kabinetContentWrapper kabinetTableWrapper">
                  <div class="col-sm-12 myOfferTableMainGrid wow fadeInRight" id="myOffers1Table">
                    <div class="col-sm-12 myOfferTable offerInsideTableSt">
                      <div class="col-sm-4 orderInsideGrid">
                        <div class="orderingPartTitle">
                          <p class="orderingPartText orderInsideText">№ заказа: <span class="orderInsideInfo">18782959</span></p>
                        </div>
                      </div>
                      <div class="col-sm-4 orderInsideGrid">
                        <div class="orderingPartTitle">
                          <p class="orderingPartText orderInsideText">Дата: <span class="orderInsideInfo">01.11.2016</span></p>
                        </div>
                      </div>
                      <div class="col-sm-4 orderInsideGrid">
                        <div class="orderingPartTitle orderingPartTitleBord">
                          <p class="orderingPartText orderInsideText">Статус: <span class="orderInsideStatus">Выполнен</span></p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12 myOfferTableProducts offerInsiceTableProd">
                      <div class="orderInsideLeftBlock">
                        <div class="orderInsidePicture">
                          <img src="img/productionImg.png" alt="" />
                        </div>
                        <div class="orderInsideProducts">
                          <p class="orderInsideName">DAS GESUNDE</p>
                          <p class="orderInsideDetails">Детские желатиновые мишки 60шт в упаковке</p>
                          <p class="orderInsideArticle">код: <span>2221</span></p>
                          <div class="orderInsideSeparator"></div>
                          <p class="orderInsidePrice">200,40 <span>грн</span></p>
                        </div>
                      </div>
                      <div class="orderInsideRightBlock">
                        <div class="orderInsideCountBlock">
                          <p class="medicationCountTitle orderInsideCountTitle">количество</p>
                          <div class="medicationCountView orderInsideCount">
                            <input type="input" name="name" value="1" class="medicationCountNum">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12 myOfferTableProducts offerInsiceTableProd">
                      <div class="orderInsideLeftBlock">
                        <div class="orderInsidePicture">
                          <img src="img/productionImg.png" alt="" />
                        </div>
                        <div class="orderInsideProducts">
                          <p class="orderInsideName orderInsideChColor">DAS GESUNDE</p>
                          <p class="orderInsideDetails orderInsideChColor">Детские желатиновые мишки 60шт в упаковке</p>
                          <p class="orderInsideArticle">код: <span>2221</span></p>
                          <div class="orderInsideSeparator"></div>
                          <p class="orderInsidePrice">200,40 <span>грн</span></p>
                        </div>
                      </div>
                      <div class="orderInsideRightBlock">
                        <div class="orderInsideCountBlock">
                          <p class="medicationCountTitle orderInsideCountTitle">количество</p>
                          <div class="medicationCountView orderInsideCount">
                            <input type="input" name="name" value="1" class="medicationCountNum">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 myOfferTableProducts orderInsideBottomP">
                      <div class="orderInsideMPrice">
                        <p class="orderInsideMPriceTitle">Общая сумма: <span>400.80</span> грн</p>
                      </div>
                    </div>
                    <div class="col-sm-12 orderInsideDelivery">
                      <p class="orderInsideDeliveryText">Способ доставки: <span>Нова Пошта</span></p>
                      <p class="orderInsideDeliveryText">Адрес доставки:  <span class="orderInDelivAd">Киев, Отделение №58 (до 30 кг): ул. Выборгская, 49</span></p>
                      <p class="orderInsideDeliveryText">Способ оплаты:  <span class="orderInDelivPay">Наложенный платеж (при получении)</span></p>
                      <p class="orderInsideDeliveryText">Статус доставки: <span class="orderInDelivStat">Отправлен</span></p>
                      <p class="orderInsideDeliveryText">Дата отправки: <span class="orderInDelivData">02.11.2015</span></p>
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
</body>
</html>
