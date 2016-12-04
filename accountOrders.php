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
            <li class="breadCrumbMenu active"><a href="#">Мои заказы</a></li>
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
                  <div class="offerUserEnterBlock wow fadeInRight kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText">Таблица заказов содержит информацию о ваших текущих заказах, а также хранит всю историю ваших предыдущих заказов.</p>
                  </div>
                  <div class="col-sm-12 myOfferTableMainGrid wow fadeInRight" id="myOffers1Table">
                    <div class="col-sm-12 myOfferTable">
                      <div class="col-sm-6 orderingPardGrid">
                        <div class="orderingPartTitle">
                          <p class="orderingPartText">Состав заказа</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <div class="orderingPartTitle">
                          <p class="orderingPartText">№ заказа</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <div class="orderingPartTitle">
                          <p class="orderingPartText">Дата</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <div class="orderingPartTitle orderingPartTitleBord">
                          <p class="orderingPartText">Статус</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12 myOfferTableProducts">
                      <div class="col-sm-6 orderingPardGrid">
                        <div class="orderingPartProduct">
                          <p class="orderingPhoneName kabinetPersonalDataTitle">Состав заказа</p>
                          <div class="orderingPartImage">
                            <img src="img/productionImg.png" alt="" />
                          </div>
                          <div class="orderingPartProductDetails">
                            <p class="oderingPartProductName">DAS GESUNDE</p>
                            <p class="oderingPartProductInfo">Детские желатиновые мишки</p>
                            <p class="orderingPartProductPrice">200,40 <span>грн</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <p class="orderingPhoneName kabinetPersonalDataTitle"># заказа</p>
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartNumTitle">18782959</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <p class="orderingPhoneName kabinetPersonalDataTitle">Дата</p>
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartDateTitle">01.11.2016</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <p class="orderingPhoneName kabinetPersonalDataTitle">Статус</p>
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartCompleteTitle">Выполнен</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12 myOfferTableProducts">
                      <div class="col-sm-6 orderingPardGrid">
                        <div class="orderingPartProduct">
                          <p class="orderingPhoneName kabinetPersonalDataTitle">Состав заказа</p>
                          <div class="orderingPartImage">
                            <img src="img/productionImg.png" alt="" />
                          </div>
                          <div class="orderingPartProductDetails">
                            <p class="oderingPartProductName">DAS GESUNDE</p>
                            <p class="oderingPartProductInfo">Детские желатиновые мишки</p>
                            <p class="orderingPartProductPrice">200,40 <span>грн</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <p class="orderingPhoneName kabinetPersonalDataTitle"># заказа</p>
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartNumTitle">18782959</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <p class="orderingPhoneName kabinetPersonalDataTitle">Дата</p>
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartDateTitle">01.11.2016</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <p class="orderingPhoneName kabinetPersonalDataTitle">Статус</p>
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartCompleteTitle orderingPartCancelTitle">Отменен</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12 myOfferTableProducts">
                      <div class="col-sm-6 orderingPardGrid">
                        <div class="orderingPartProduct">
                          <p class="orderingPhoneName kabinetPersonalDataTitle">Состав заказа</p>
                          <div class="orderingPartImage complecsOffer">
                            <img src="img/productionImg.png" alt="" style="visibility:hidden;" />
                          </div>
                          <div class="orderingPartProductDetails">
                            <p class="oderingPartProductName">Комплесный заказ</p>
                            <p class="oderingPartProductInfo">(2 товара)</p>
                            <p class="orderingPartProductPrice">400,80 <span>грн</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <p class="orderingPhoneName kabinetPersonalDataTitle"># заказа</p>
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartNumTitle">18782959</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <p class="orderingPhoneName kabinetPersonalDataTitle">Дата</p>
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartDateTitle">01.11.2016</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <p class="orderingPhoneName kabinetPersonalDataTitle">Статус</p>
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartCompleteTitle orderingPartCompleteTitle">в работе</p>
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
</body>
</html>
