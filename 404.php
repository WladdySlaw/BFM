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
			<div class="row">
				<div class="col-sm-12 breadCrumbBlock wow fadeInLeft">
          <ol class="breadcrumb breadCrumbCustom">
            <li class="breadCrumbMenu"><a href="#">Главная</a></li>
            <li class="breadCrumbMenu active"><a href="#">404</a></li>
          </ol>
        </div>
				<div class="col-xs-12">
					<div class="block404">
						<div class="text404">
							<div class="nameBlock404 wow fadeInRight">
								<p class="catalogProductTitle title404 wow">404</p>
								<p class="catalogProductTitle error404 wow">Ошибка</p>
							</div>
							<div class="line404 wow fadeInLeft"></div>
							<p class="pageNotFound wow fadeInLeft">Извините страница не найдена</p>
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
