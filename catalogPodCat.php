<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->
<?php
	define("RS","/apteka/");
	$meta_title = "Каталог фильтр";
?>
<?php include("inc/head.php"); ?>
<body>
  <?php include("inc/catalogHeader.php"); ?>
	<?php include("inc/dropMenu.php"); ?>
  <section class="catalogMainBlock">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 breadCrumbBlock">
				  <ol class="breadcrumb breadCrumbCustom">
				    <li class="breadCrumbMenu"><a href="#">Главная</a></li>
				    <li class="breadCrumbMenu"><a href="#">Online аптека</a></li>
						<li class="breadCrumbMenu"><a href="#">Медикаменты</a></li>
						<li class="breadCrumbMenu"><a href="#">Препараты для лечекния анемии</a></li>
				    <li class="breadCrumbMenu active"><a href="#">препараты железа</a></li>
				  </ol>
				</div>
				<div class="col-sm-3 accordeonCatalog">
					<div class="row">
						<div class="dropDownAccordeon filtersBlock">
							<div class="catalogShowBtn">
								<p class="catalogShowMed">Фильтры</p>
								<button type="button" class="navbar-toggle toggleAccordeon" data-toggle="collapse" data-target=".filtersPodCat">
									<span class="icon-bar catalogNavIc"></span>
									<span class="icon-bar catalogNavIc"></span>
									<span class="icon-bar catalogNavIc"></span>
								</button>
							</div>
							<div class="filtersPodCat collapse in">
								<div class="filterWrapper">
									<p class="podCatPriceTitle">Цена</p>
									<input type="text" id="example_id" name="example_name" value="" />
								</div>
								<div class="filtersInputs">
									<div class="col-xs-6">
										<p class="priceInnerTitle1">от</p>
										<input type="text" name="name" value="" id="price_inner_1" class="price_inner_1" placeholder="50">
									</div>
									<div class="col-xs-6">
										<p class="priceInnerTitle2">до</p>
										<input type="text" name="name" value="" id="price_inner_2" class="price_inner_2" placeholder="800">
									</div>
								</div>
								<div class="medicamentsFilterWrapper">
									<p class="podCatPriceTitle medicamentsFilterTitle">Главный медикамент</p>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck1"></input>
										<span>Актифферин <p>(3)</p></span>
									</label>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck2"></input>
										<span>Венофер <p>(1)</p></span>
									</label>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck3"></input>
										<span>Гематоген <p>(1)</p></span>
									</label>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck4"></input>
										<span>Сорбифер <p>(3)</p></span>
									</label>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck5"></input>
										<span>Суфер <p>(3)</p></span>
									</label>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck6"></input>
										<span>Феринжект <p>(1)</p></span>
									</label>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck7"></input>
										<span>Феррум-лек <p>(1)</p></span>
									</label>
									<p class="podCatPriceTitle medicamentsFilterTitle">Производитель</p>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck8"></input>
										<span>Egis (Венгрия) <p>(8)</p></span>
									</label>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck9"></input>
										<span>Euromedex (Франция) <p>(1)</p></span>
									</label>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck10"></input>
										<span>Lek (Словения) <p>(10)</p></span>
									</label>
									<p class="podCatPriceTitle medicamentsFilterTitle">Форма товара</p>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck11"></input>
										<span>Ампулы <p>(8)</p></span>
									</label>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck12"></input>
										<span>Драже <p>(1)</p></span>
									</label>
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxActive(this);" id="catCheck13"></input>
										<span>Капсулы <p>(10)</p></span>
									</label>
								</div>
								<div class="lineDivision"></div>
								<div class="medicamentsFilterWrapper">
									<label class="podCatLabel">
										<input type="checkbox" name="name" class="podCatCheck" style="display: none;" onchange="checkBoxOff(this);" id="catCheck14"></input>
										<span>Сбросить фильтры</span>
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-9 catalogProductBlock">
					<?php include("inc/catalogBannerAndSelect.php"); ?>
					<div class="catalogProductionBlock">
						<?php include("inc/production.php"); ?>
						<?php include("inc/production.php"); ?>
						<?php include("inc/production.php"); ?>
						<?php include("inc/production.php"); ?>
						<?php include("inc/productionSale.php"); ?>
						<?php include("inc/production.php"); ?>
						<?php include("inc/production.php"); ?>
						<?php include("inc/production.php"); ?>
						<?php include("inc/productionNotAvailable.php"); ?>
					</div>
					<?php include("inc/pageCounter.php"); ?>
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
