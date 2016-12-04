<div class="catalogHeaderMenu">
  <header class="header сatalogHeader">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 header__nav catalogHeaderNav">
            <nav class="navbar navbar-default catalogNavDef">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar catalogIconBar"></span>
                    <span class="icon-bar catalogIconBar"></span>
                    <span class="icon-bar catalogIconBar"></span>
                  </button>
                  <form action="#" name="searchModalForm" method="post" class="searchForm searchFormMin">
                    <button type="button" name="button" class="search__a search__aMin">
                      <span class="glyphicon glyphicon-search catalogSearchIco" aria-hidden="true"></span>
                    </button>
                    <input type="input" name="name" class="searchInput searchInputMin searchInputCatalog searchInputCatalogMin searchCatalogMinFix" value="" placeholder="Что ищем?">
                  </form>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="catalogGreyCustom"><a href="<?= RS ?>catalog.php" class="catalogNavTitle">Online Аптека <span class="sr-only">(current)</span></a></li>
                    <li class="catalogGreyCustom"><a href="<?= RS ?>infob.php" class="catalogNavTitle">Инфобюро</a></li>
                    <li class="catalogGreyCustom"><a href="<?= RS ?>blog.php" class="catalogNavTitle">Блог</a></li>
                    <li class="catalogGreyCustom"><a href="<?= RS ?>contacts.php" class="catalogNavTitle">Контакты</a></li>
                      <li class="catalogGreyCustom"><a href="#" class="catalogNavTitle">Франчейзинг</a></li>
                    <li class="catalogGreyCustom">
                      <form action="#" name="searchModalForm" method="post" class="searchForm">
                        <button type="button" name="button" class="searchCatalogBtn searchCatalogFix" id="searchCatalogInput">
                          <span class="glyphicon glyphicon-search catalogSearchIco" aria-hidden="true"></span>
                        </button>
                        <div class="searchCatalogBlock">
                          <input type="input" name="name" class="searchInput searchInputMin searchInputCatalog" value="" placeholder="Что ищем?">
                          <button type="button" name="button" class="searchStart">
                              <span class="glyphicon glyphicon-search catalogSearchIco" aria-hidden="true"></span>
                          </button>
                        </div>
                      </form>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
          <div class="col-sm-12 header__block catalogHeaderBlock">
            <div class="col-sm-2 header__left_bg"></div>
            <div class="col-sm-2 header__right_bg"></div>
            <div class="col-sm-7 header__center_content">
              <div class="col-xs-4 header__enter catalogHeaderEnter">
                <a href="#" class="catalogNameUser">Людмила</a>
                <a href="#" class="header__reg_title">Выйти</a>
              </div>
              <div class="col-xs-4 header__enter catalogHeaderEnter catalogNoUser">
                <a href="#" class="header__enter_title">Вход</a>
                <a href="#" class="header__reg_title">Выйти</a>
              </div>
              <div class="col-xs-6 header__logo catalogHeaderLogo">
                <img src="<?= RS ?>img/logo.png" alt="" class="header__logo_img">
              </div>
              <div class="col-xs-2 header__contacts catalogHeaderContacts">
                <div class="header__phone_block">
                  <p class="header__phone">044 404 5126</p>
                </div>
                <div class="icons__buy_like_block">
                  <a href="#" class="icon__buy" data-toggle="modal" data-target="#modal-2">
                    <div class="icon__buy_img_blockBuy"></div>
                    <div class="icon__buy_block">
                      <span>5</span>
                    </div>
                  </a>
                  <a href="#" class="icon__buy">
                    <div class="icon__buy_img_blockLike"></div>
                    <div class="icon__buy_block">
                      <span>0</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </header>
</div>
