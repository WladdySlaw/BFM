<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->
<?php
	define("RS","/apteka/");
	$meta_title = "Контакты";
?>
<?php include("inc/head.php"); ?>
<body>
  <?php include("inc/catalogHeader.php"); ?>
	<?php include("inc/dropMenu.php"); ?>
	<section class="catalogMainBlock contactsMainBlock">
		<div class="container">
      <div class="row">
        <div class="col-sm-12 breadCrumbBlock wow fadeInLeft">
          <ol class="breadcrumb breadCrumbCustom">
            <li class="breadCrumbMenu"><a href="#">Главная</a></li>
            <li class="breadCrumbMenu active"><a href="#">Контакты</a></li>
          </ol>
        </div>
        <div class="col-sm-12 catalogProductBlock">
          <p class="catalogProductTitle wow fadeInRight">Наши контакты</p>
          <div class="col-sm-4 contactsLocBlocks wow fadeInUp">
            <div class="contactsLocationIcon"></div>
            <div class="contactsLocationTextBlock">
              <p class="contactsLocationTitle">Киев</p>
              <p class="contactsLocationTitle">ул. Героев Севастополя, 30</p>
            </div>
          </div>
          <div class="col-sm-4 contactsLocBlocks wow fadeInUp">
            <div class="contactsPhoneIcon"></div>
            <div class="contactsLocationTextBlock">
              <p class="contactsLocationTitle2">+38 044 4045 126</p>
              <p class="contactsLocationTitle2">+38 044 4045 126</p>
            </div>
          </div>
          <div class="col-sm-4 contactsLocBlocks wow fadeInUp">
            <div class="contactsNavIcon"></div>
            <div class="contactsLocationTextBlock2">
              <p class="contactsLocationTitle2">info@bfm.com.ua</p>
            </div>
          </div>
          <div class="contactsSocialLinks wow fadeInDown">
            <a href="#" class="contactsLinkA">
              <div class="contactsSkypeIcon"></div>
              <p class="contactsLinkTitle">bfm.com</p>
            </a>
            <a href="#" class="contactsLinkA">
              <div class="contactsVkIcon"></div>
              <p class="contactsLinkTitle">vk.com</p>
            </a>
            <a href="#" class="contactsLinkA">
              <div class="contactsFbIcon"></div>
              <p class="contactsLinkTitle">facebook.com</p>
            </a>
          </div>
				</div>
      </div>
    </div>
	</section>
  <section class="mapNav wow fadeInLeft">
    <div class="container-fluid">
      <div class="row">
        <div class="mapBlock" id="contacts_google_map"></div>
      </div>
    </div>
  </section>
  <section class="answerSection wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <div class="osmotr_come contactsOsmotrCome">
            <div class="osmotrTextBlock contactsOsmotrTextBlock">
              <p class="osmotrText contactsOsmotrText">задай<br> вопрос</p>
            </div>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="contactsNameInput">
            <p class="contactsNameTitle">Ваше имя</p>
            <input type="input" name="name" value="" class="contactsInput">
          </div>
          <div class="contactsEmailInput">
            <p class="contactsEmailTitle">Ваш E-mail</p>
            <input type="input" name="name" value="" class="contactsInputEmail">
          </div>
          <div class="contactsMessageBlock">
            <p class="contactsMessageTitle">Ваш вопрос / сообщение</p>
            <textarea name="name" class="contactsMessageArea"></textarea>
          </div>
          <div class="contactsBtnWrapper">
            <button type="button" class="btn btn-success contactsSendBtn">Отправить</button>
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
