DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->
<?php
	define("RS","/apteka/");
	$meta_title = "Товар";
  $pageName = "accountPersonal";
?>
<?php include("inc/head.php"); ?>
<body>
  <?php include("inc/catalogHeader.php"); ?>
	<?php include("inc/dropMenu.php"); ?>
	<section class="catalogMainBlock">
		<div class="container">
        <div class="col-sm-12 breadCrumbBlock wow fadeInLeft">
          <ol class="breadcrumb breadCrumbCustom">
            <li class="breadCrumbMenu"><a href="#">Главная</a></li>
            <li class="breadCrumbMenu"><a href="#">Личный кабинет</a></li>
            <li class="breadCrumbMenu active"><a href="#">Персональные данные</a></li>
          </ol>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="kabinetLeftNav wow fadeInLeft">
              <div class="kabinetTitleBlock">
                <p class="catalogProductTitle wow fadeInRight kabinetTitleName">Личный Кабинет</p>
              </div>
              <?php
              include("inc/accountNav.php");
              ?>
            </div>
          </div>
          <div class="col-sm-9">
            <div class="kabinetContentPersonalData" id="kabinetPersonalData">
              <div class="kabinetPersonalDataName">
                <p class="kabinetPersonalDataTitle">Персональные <span>данные</span></p>
                <div class="kabinetContentWrapper">
                  <div class="offerUserEnterBlock kabinetUserEnterBlock wow fadeInLeft">
                    <p class="regFormText offerUserEnterText">Ваше имя</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock wow fadeInRight">
                    <p class="regFormText offerUserEnterText">Фамилия</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock wow fadeInLeft">
                    <p class="regFormText offerUserEnterText">Отчество</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock wow fadeInRight">
                    <p class="regFormText offerUserEnterText">Телефон</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput kabinetPhoneInput" placeholder="+38 ( _ _ _ ) _ _ _ _ _ _ _">
                  </div>
                  <div class="offerCompleteBtn kabinetBtnBlock wow fadeInUp">
                    <button type="button" class="btn btn-success contactsSendBtn">Редактировать</button>
                    <a href="#" class="kabinetPersonalDataSettingsA">
                      <div class="kabinetPersonalDataSettings"></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="kabinetContentPersonalData" id="kabinetLogin">
              <div class="kabinetPersonalDataName">
                <p class="kabinetPersonalDataTitle">Логин <span>и пароль</span></p>
                <div class="kabinetContentWrapper">
                  <div class="offerUserEnterBlock kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText">Логин</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText">Пароль</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerCompleteBtn kabinetBtnBlock">
                    <button type="button" class="btn btn-success contactsSendBtn" id="kabinetFixBtn">Редактировать</button>
                    <a href="#" class="kabinetPersonalDataSettingsA">
                      <div class="kabinetPersonalDataSettings"></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="kabinetContentPersonalData" id="kabinetLoginFix">
              <div class="kabinetPersonalDataName">
                <p class="kabinetPersonalDataTitle">Логин <span>и пароль</span></p>
                <div class="kabinetContentWrapper">
                  <p class="mustFieldsText">Обязательные поля <span class="kabinetStar">*</span></p>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText">Email <span class="kabinetStar">*</span></p>
                    <label class="kabinetValidationFalse">
                      <input type="input" name="name" value="" class="offerUserEnterInput kabinetValidationFalseInput">
                    </label>
                    <p class="kabinetValidation">Пожалуйста, введите правильный адрес электронной почты</p>
                  </div>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText">Пароль <span class="kabinetStar">*</span></p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText">Повторить пароль <span class="kabinetStar">*</span></p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerCompleteBtn kabinetBtnBlock">
                    <button type="button" class="btn btn-success contactsSendBtn kabinetSaveBtn">Сохранить</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="kabinetContentPersonalData" id="kabinetDelivery">
              <div class="kabinetPersonalDataName">
                <p class="kabinetPersonalDataTitle">Адрес <span>доставки</span></p>
                <div class="kabinetContentWrapper">
                  <div class="offerUserEnterBlock kabinetUserEnterBlock ">
                    <p class="regFormText offerUserEnterText">Город</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock ">
                    <p class="regFormText offerUserEnterText">Регион</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText">Улица</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText">Способ доставки</p>
                    <div class="offerSortingBlockWrapper offerSortingWrapperMarg">
                      <div class="sortingBlock2 offerSortingBlock2 kabinetSortingBlock">
                        <div class="catalogFirstSelect offerCatalogFirstSelect">
                          <p class="catalogShowVal offerShowVal" id="catalogShowVal2">Выберите способ доставки...</p>
                        </div>
                        <div class="catalogFirstSelectContent offerFirstSelect unVisibleSelect" id="catalogFirstSelectContent">
                          <p class="catalogFirstSelectVal" id="catalogPage">Способ 1</p>
                          <p class="catalogFirstSelectVal" id="catalog20">Способ2</p>
                          <p class="catalogFirstSelectVal" id="catalog40">Способ3</p>
                        </div>
                      </div>
                  </div>
                  </div>
                  <div class="offerCompleteBtn kabinetBtnBlock">
                    <button type="button" class="btn btn-success contactsSendBtn">Редактировать</button>
                    <a href="#" class="kabinetPersonalDataSettingsA">
                      <div class="kabinetPersonalDataSettings"></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="kabinetContentPersonalData" id="myOffers">
              <div class="kabinetPersonalDataName">
                <p class="kabinetPersonalDataTitle">Мои <span>заказы</span></p>
                <div class="kabinetContentWrapper kabinetTableWrapper">
                  <div class="offerUserEnterBlock kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText">Таблица заказов содержит информацию о ваших текущих заказах, а также хранит всю историю ваших предыдущих заказов.</p>
                  </div>
                  <div class="col-sm-12 myOfferTableMainGrid" id="myOffers1Table">
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
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartNumTitle">18782959</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartDateTitle">01.11.2016</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartCompleteTitle">Выполнен</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12 myOfferTableProducts">
                      <div class="col-sm-6 orderingPardGrid">
                        <div class="orderingPartProduct">
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
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartNumTitle">18782959</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartDateTitle">01.11.2016</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartCompleteTitle orderingPartCancelTitle">Отменен</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12 myOfferTableProducts">
                      <div class="col-sm-6 orderingPardGrid">
                        <div class="orderingPartProduct">
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
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartNumTitle">18782959</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartDateTitle">01.11.2016</p>
                        </div>
                      </div>
                      <div class="col-sm-2 dataPartGrid">
                        <div class="orderingPartNumOffer">
                          <p class="orderingPartCompleteTitle orderingPartCancelTitle">в работе</p>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
            </div>

            <div class="kabinetContentPersonalData" id="kabinetDeleteAccount">
              <div class="kabinetPersonalDataName">
                <p class="kabinetPersonalDataTitle">Удаление <span>учетной записи</span></p>
                <div class="kabinetTableWrapper">
                  <div class="offerUserEnterBlock kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText kabinetDeleteAccText">После удаления учетной записи история ваших покупок будет утеряна, вы больше не сможете следить за статусами своих заказов. Если вы регулярно покупаете товары через online аптеку bfm, удаление учетной записи не рекомендуется.</p>
                  </div>
                </div>
                <div class="kabinetContentWrapper">
                  <div class="offerUserEnterBlock kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText">Текущий пароль <span class="kabinetStar">*</span></p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerCompleteBtn kabinetBtnBlock">
                    <button type="button" class="btn btn-success contactsSendBtn">Удалить</button>
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
