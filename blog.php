<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->
<?php
	define("RS","/apteka/");
	$meta_title = "Блог";
?>
<?php include("inc/head.php"); ?>
<body>
  <?php include("inc/catalogHeader.php"); ?>
	<div class="blogHeader wow fadeInDown">
		<div class="container-fluid">
			<div class="row">
				<h1 class="blogHeaderTitle">Блог</h1>
			</div>
		</div>
	</div>
	<section class="catalogMainBlock contactsMainBlock">
		<div class="container">
      <div class="row">
				<div class="col-sm-12 breadCrumbBlock wow fadeInLeft">
					<ol class="breadcrumb breadCrumbBlog breadCrumbCustom">
						<li class="breadCrumbMenu"><a href="#">Главная</a></li>
						<li class="breadCrumbMenu active"><a href="#">Блог</a></li>
					</ol>
				</div>
				<div class="col-sm-8">
					<div class="mainBlog">
						<div class="blogContent wow fadeInUp">
							<div class="blogPicture"><img src="img/blogPic.png" alt="" /></div>
							<div class="blogData">
								<div class="blogMonth">
									<h1 class="blogMonthNum">30</h2>
									<h4 class="blogMounthTitle">Декабрь</h4>
								</div>
								<div class="blogYear">
									<h4 class="blogYearNum">2016</h4>
								</div>
							</div>
							<div class="blogTextBlock">
								<h2 class="blogTextTitle">Кофе полезен только женщинам</h2>
								<p class="blogText">Американские ученые провели еще одно исследование о влиянии кофе на здоровье человека. Оказывается, этот напиток не настолько вреден, как доказывалось ранее, а даже наоборот...</p>
								<a href="<?= RS ?>blogVnutr.php" class="blogReadMore">
									<button type="button" name="button">Читать</button>
								</a>
							</div>
						</div>
						<div class="blogContent wow fadeInUp">
							<div class="blogPicture"><img src="img/blogPic.png" alt="" /></div>
							<div class="blogData">
								<div class="blogMonth">
									<h1 class="blogMonthNum">30</h2>
									<h4 class="blogMounthTitle">Декабрь</h4>
								</div>
								<div class="blogYear">
									<h4 class="blogYearNum">2016</h4>
								</div>
							</div>
							<div class="blogTextBlock">
								<h2 class="blogTextTitle">Кофе полезен только женщинам</h2>
								<p class="blogText">Американские ученые провели еще одно исследование о влиянии кофе на здоровье человека. Оказывается, этот напиток не настолько вреден, как доказывалось ранее, а даже наоборот...</p>
								<a href="#" class="blogReadMore">
									<button type="button" name="button">Читать</button>
								</a>
							</div>
						</div>
						<div class="blogContent wow fadeInUp">
							<div class="blogPicture"><img src="img/blogPic.png" alt="" /></div>
							<div class="blogData">
								<div class="blogMonth">
									<h1 class="blogMonthNum">30</h2>
									<h4 class="blogMounthTitle">Декабрь</h4>
								</div>
								<div class="blogYear">
									<h4 class="blogYearNum">2016</h4>
								</div>
							</div>
							<div class="blogTextBlock">
								<h2 class="blogTextTitle">Кофе полезен только женщинам</h2>
								<p class="blogText">Американские ученые провели еще одно исследование о влиянии кофе на здоровье человека. Оказывается, этот напиток не настолько вреден, как доказывалось ранее, а даже наоборот...</p>
								<a href="#" class="blogReadMore">
									<button type="button" name="button">Читать</button>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="blogRightNav">
						<div class="blogSearch wow fadeInRight">
							<input type="input" name="name" value="" placeholder="Найти..." class="blogSearchInput">
						</div>
						<div class="blogPopularPosts wow fadeInUp">
							<h2 class="blogPopularTitle">Популярные посты</h2>
							<div class="blogPopularPostBlock">
								<div class="blogPopularPic">
									<img src="img/blogPic.png" alt="" />
								</div>
								<div class="blogPopularDetails">
									<h4 class="blogPopularDetailsTitle">Кофе полезен только женщинам</h4>
									<a href="#"><button type="button" name="button" class="blogPopularDetailsBtn"></button></a>
									<p class="blogPopularDetailsData">30/12/2016</p>
								</div>
							</div>
							<div class="blogPopularPostBlock">
								<div class="blogPopularPic">
									<img src="img/blogPic.png" alt="" />
								</div>
								<div class="blogPopularDetails">
									<h4 class="blogPopularDetailsTitle">Кофе полезен только женщинам</h4>
									<a href="#"><button type="button" name="button" class="blogPopularDetailsBtn"></button></a>
									<p class="blogPopularDetailsData">30/12/2016</p>
								</div>
							</div>
							<div class="blogPopularPostBlock">
								<div class="blogPopularPic">
									<img src="img/blogPic.png" alt="" />
								</div>
								<div class="blogPopularDetails">
									<h4 class="blogPopularDetailsTitle">Кофе полезен только женщинам</h4>
									<a href="#"><button type="button" name="button" class="blogPopularDetailsBtn"></button></a>
									<p class="blogPopularDetailsData">30/12/2016</p>
								</div>
							</div>
						</div>
						<div class="blogPopularPosts wow fadeInUp">
							<h2 class="blogPopularTitle">Последние посты</h2>
							<div class="blogPopularPostBlock">
								<div class="blogPopularPic">
									<img src="img/blogPic.png" alt="" />
								</div>
								<div class="blogPopularDetails">
									<h4 class="blogPopularDetailsTitle">Кофе полезен только женщинам</h4>
									<a href="#"><button type="button" name="button" class="blogPopularDetailsBtn"></button></a>
									<p class="blogPopularDetailsData">30/12/2016</p>
								</div>
							</div>
							<div class="blogPopularPostBlock">
								<div class="blogPopularPic">
									<img src="img/blogPic.png" alt="" />
								</div>
								<div class="blogPopularDetails">
									<h4 class="blogPopularDetailsTitle">Кофе полезен только женщинам</h4>
									<a href="#"><button type="button" name="button" class="blogPopularDetailsBtn"></button></a>
									<p class="blogPopularDetailsData">30/12/2016</p>
								</div>
							</div>
							<div class="blogPopularPostBlock">
								<div class="blogPopularPic">
									<img src="img/blogPic.png" alt="" />
								</div>
								<div class="blogPopularDetails">
									<h4 class="blogPopularDetailsTitle">Кофе полезен только женщинам</h4>
									<a href="#"><button type="button" name="button" class="blogPopularDetailsBtn"></button></a>
									<p class="blogPopularDetailsData">30/12/2016</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php include("inc/pageCounter.php"); ?>
      </div>
    </div>
	</section>
	<?php include("inc/footer.php"); ?>
	<!-- script order matters! -->
  <?php include("inc/_js.php"); ?>
	<?php include("inc/preloader.php"); ?>
</body>
</html>
