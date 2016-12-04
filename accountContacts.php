<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->
<?php
	define("RS","/apteka/");
	$meta_title = "Товар";
  $pageName = "accountContacts";
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
            <li class="breadCrumbMenu active"><a href="#">Адрес доставки</a></li>
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
            <div class="kabinetContentPersonalData" id="kabinetDelivery">
              <div class="kabinetPersonalDataName">
                <p class="kabinetPersonalDataTitle">Адрес <span>доставки</span></p>
                <div class="kabinetContentWrapper">
                  <div class="offerUserEnterBlock kabinetUserEnterBlock wow fadeInRight">
                    <p class="regFormText offerUserEnterText">Город</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock wow fadeInRight">
                    <p class="regFormText offerUserEnterText">Регион</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock wow fadeInRight">
                    <p class="regFormText offerUserEnterText">Улица</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerUserEnterBlock kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText wow fadeInRight">Способ доставки</p>
                    <div class="offerSortingBlockWrapper offerSortingWrapperMarg">
                      <div class="sortingBlock2 offerSortingBlock2 wow fadeInRight kabinetSortingBlock">
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
                  <div class="offerCompleteBtn kabinetBtnBlock wow fadeInRight">
                    <button type="button" class="btn btn-success contactsSendBtn">Редактировать</button>
                    <a href="#" class="kabinetPersonalDataSettingsA">
                      <div class="kabinetPersonalDataSettings"></div>
                    </a>
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
