<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->
<?php
	define("RS","/apteka/");
	$meta_title = "Товар";
  $pageName = "accountAccess";
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
            <li class="breadCrumbMenu active"><a href="#">Логин и пароль</a></li>
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
            <div class="kabinetContentPersonalData" id="kabinetLogin">
              <div class="kabinetPersonalDataName">
                <p class="kabinetPersonalDataTitle">Логин <span>и пароль</span></p>
                <div class="kabinetContentWrapper">
                  <div class="offerUserEnterBlock wow fadeInRight kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText">Логин</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerUserEnterBlock wow fadeInRight kabinetUserEnterBlock">
                    <p class="regFormText offerUserEnterText">Пароль</p>
                    <input type="input" name="name" value="" class="offerUserEnterInput">
                  </div>
                  <div class="offerCompleteBtn wow fadeInRight kabinetBtnBlock">
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
          </div>
        </div>
	</section>
	<?php include("inc/modalBuyComplete.php"); ?>
	<?php include("inc/footer.php"); ?>
	<!-- script order matters! -->
  <?php include("inc/_js.php"); ?>
</body>
</html>
