<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->
<?php
	define("RS","/apteka/");
	$meta_title = "Товар";
  $pageName = "accountDelete";
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
            <li class="breadCrumbMenu active"><a href="#">Удаление учетной записи</a></li>
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
            <div class="kabinetContentPersonalData" id="kabinetDeleteAccount">
              <div class="kabinetPersonalDataName">
                <p class="kabinetPersonalDataTitle">Удаление <span>учетной записи</span></p>
                <div class="kabinetTableWrapper">
                  <div class="offerUserEnterBlock kabinetDeleteBlock kabinetUserEnterBlock wow fadeInRight">
                    <p class="regFormText offerUserEnterText kabinetDeleteAccText">После удаления учетной записи история ваших покупок будет утеряна, вы больше не сможете следить за статусами своих заказов. Если вы регулярно покупаете товары через online аптеку bfm, удаление учетной записи не рекомендуется.</p>
                  </div>
                </div>
                <div class="kabinetContentWrapper wow fadeInRight">
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
</body>
</html>
