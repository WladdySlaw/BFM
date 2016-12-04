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
        <div class="col-sm-12 breadCrumbBlock wow fadeInLeft">
          <ol class="breadcrumb breadCrumbCustom">
            <li class="breadCrumbMenu"><a href="#">Главная</a></li>
            <li class="breadCrumbMenu active"><a href="#">Оформление заказа</a></li>
          </ol>
        </div>
					<div class="row">
    				<div class="col-sm-12 catalogProductBlock infobProductBlock">
              <div class="catalogSelectsBlock infobTextBlock">
                <div class="col-sm-12 infobTextWrapper2">
                  <div class="col-sm-12 infobTextWrapper offerTextWrapper">
                    <p class="catalogProductTitle infoBProductTitle wow fadeInRight">Оформление заказа</p>
                  </div>
                </div>
              </div>
				    </div>
            <div class="offerProductionB wow fadeInLeft">
              <div class="col-sm-12 offerProductBlock">
                  <div class="col-sm-6">
                    <div class="col-sm-5">
                      <div class="offerProductionImg">
                        <img src="img/productionImg.png" alt="" />
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="offerMedicationDetails">
                        <p class="medicationName">Das Gesunde</p>
                        <p class="medicationDetails">Детские желатиновые мишки 60 шт в упаковке</p>
                        <p class="medicationCod offerMedicationCod">код: 22221</p>
                        <p class="medicationPrice">200,40 <span>грн</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="offerMedicationCountBlock">
                      <p class="medicationCountTitle offerMedicationTitle">количество</p>
                      <div class="medicationCount">
                        <button type="button" name="button" class="medicationLess" id="medicationLess1">
                          <div class="medicationLessIco"></div>
                        </button>
                        <div class="medicationCountView offerCountView">
                          <input type="input" name="name" value="1" class="medicationCountNum">
                        </div>
                        <button type="button" name="button" class="medicationMore" id="medicationMore1">
                          <div class="medicationMoreIco"></div>
                        </button>
                        <a href="#" class="medicationDelete offerMedicationDelete">
                          <div class="medicationDeleteIco"></div>
                        </a>
                    </div>
                  </div>
                </div>
  			      </div>
            </div>
            <div class="offerProductionB wow fadeInLeft">
              <div class="col-sm-12 offerProductBlock">
                  <div class="col-sm-6">
                    <div class="col-sm-5">
                      <div class="offerProductionImg">
                        <img src="img/productionImg.png" alt="" />
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="offerMedicationDetails">
                        <p class="medicationName">Das Gesunde</p>
                        <p class="medicationDetails">Детские желатиновые мишки 60 шт в упаковке</p>
                        <p class="medicationCod offerMedicationCod">код: 22221</p>
                        <p class="medicationPrice">200,40 <span>грн</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="offerMedicationCountBlock">
                      <p class="medicationCountTitle offerMedicationTitle">количество</p>
                      <div class="medicationCount">
                        <button type="button" name="button" class="medicationLess" id="medicationLess2">
                          <div class="medicationLessIco"></div>
                        </button>
                        <div class="medicationCountView offerCountView">
                          <input type="input" name="name" value="1" class="medicationCountNum">
                        </div>
                        <button type="button" name="button" class="medicationMore" id="medicationMore2">
                          <div class="medicationMoreIco"></div>
                        </button>
                        <a href="#" class="medicationDelete offerMedicationDelete">
                          <div class="medicationDeleteIco"></div>
                        </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="offerDataBlock">
              <div class="offerDataWrapper">
                <div class="offerDataTitle">
                  <div class="col-sm-12 offerDataGrid">
                    <p class="offerEnterDataTitle wow fadeInUp">Укажите данные</p>
                    <p class="offerEnterDataNeed wow fadeInUp">необходимые для оплаты и доставки товара</p>
                    <div class="offerDataLineBlock">
                      <div class="offerDataLine wow fadeInDown"></div>
                    </div>
                    <div class="offerUserEnterBlock wow fadeInLeft">
                      <p class="regFormText offerUserEnterText">Ваше имя</p>
                      <input type="input" name="name" value="" class="offerUserEnterInput">
                    </div>
                    <div class="offerUserEnterBlock wow fadeInRight">
                      <p class="regFormText offerUserEnterText">Ваша фамилия</p>
                      <input type="input" name="name" value="" class="offerUserEnterInput">
                    </div>
                    <div class="offerUserEnterBlock wow fadeInLeft">
                      <p class="regFormText offerUserEnterText">Телефон</p>
                      <input type="input" name="name" value="" class="offerUserEnterInput">
                    </div>
                    <div class="offerUserEnterBlock wow fadeInRight">
                      <p class="regFormText offerUserEnterText">Email</p>
                      <input type="input" name="name" value="" class="offerUserEnterInput">
                    </div>
                    <div class="offerUserEnterBlock wow fadeInLeft">
                      <p class="regFormText offerUserEnterText">Доставка</p>
                      <div class="offerSortingBlockWrapper">
                        <div class="sortingBlock1 offerSortingBlock1">
                          <div class="catalogFirstSelect offerCatalogFirstSelect offerFirstSelectZ">
                            <p class="catalogShowVal offerShowVal" id="catalogShowVal1">Выберите способ доставки...</p>
                          </div>
                          <div class="catalogFirstSelectContent offerFirstSelect offerSortingZ unVisibleSelect" id="catalogFirstSelectContent">
                            <p class="catalogFirstSelectVal" id="catalogPosition">Почта</p>
                            <p class="catalogFirstSelectVal" id="catalogName">Курьер</p>
                            <p class="catalogFirstSelectVal" id="catalogPrice">Самовывоз</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="offerUserEnterBlock wow fadeInRight">
                      <p class="regFormText offerUserEnterText">Оплата</p>
                      <div class="offerSortingBlockWrapper offerSortingWrapperMarg">
                        <div class="sortingBlock2 offerSortingBlock2">
                          <div class="catalogFirstSelect offerCatalogFirstSelect">
                            <p class="catalogShowVal offerShowVal" id="catalogShowVal2">Выберите способ оплаты...</p>
                          </div>
                          <div class="catalogFirstSelectContent offerFirstSelect unVisibleSelect" id="catalogFirstSelectContent">
                            <p class="catalogFirstSelectVal" id="catalogPage">Наличные</p>
                            <p class="catalogFirstSelectVal" id="catalog20">Карта</p>
                            <p class="catalogFirstSelectVal" id="catalog40">Предоплата</p>
                          </div>
                        </div>
                    </div>
                    </div>
                    <div class="offerSumWrapper wow fadeInLeft">
                      <div class="offerSum">
                        <p class="offerSumTitle">Общая сумма</p>
                        <p class="offerSumNum">400,80 <span>грн</span></p>
                      </div>
                    </div>
                    <div class="offerCompleteBtn wow fadeInRight">
                      <button type="button" class="btn btn-success contactsSendBtn offerSendBtn">Оформить заказ</button>
                    </div>
                  </div>
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
