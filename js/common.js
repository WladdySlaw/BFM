$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});

$(window).load(function() {

	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

});
$(document).ready(function() {
	/*********KabinetNavigation***************/
	if ($(window).width() < 992) {
		$(".kabinetNavigation").addClass("collapse");
	}
	else {
		$(".kabinetNavigation").removeClass("collapse");
	}
	$(window).on('resize', function(){
		if ($(window).width() < 992) {
			$(".kabinetNavigation").addClass("collapse");
		}
		else {
			$(".kabinetNavigation").removeClass("collapse");
			$(".kabinetNavigation").css("height", "auto");
		}
	});

  $("#owl-demo").owlCarousel({

      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem: true,
			autoPlay: true

      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

  });

	Rotator();
	/******************CarouselCardPage2*****************/
  $("#owl-demo5").owlCarousel({
      autoPlay: false, //Set AutoPlay to 3 seconds
			dots: false,
      items : 3,
      itemsDesktop : [979,2],
      itemsDesktopSmall : [768,1],
			itemsTablet: [768,1],
			navigation:true,
			navigationText: false,
  });
	$('.fancybox').fancybox({
            padding : 0,
            openEffect  : 'elastic',
            closeBtn: true
        });
  var sync1 = $("#sync1");
  var sync2 = $("#sync2");

  sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    navigation: false,
    pagination:false,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
  });

  sync2.owlCarousel({
    items : 4,
    itemsDesktop      : [1199,4],
    itemsDesktopSmall     : [979,4],
    itemsTablet       : [768,4],
    itemsMobile       : [479,4],
    pagination:false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });

  function syncPosition(el){
    var current = this.currentItem;
    $("#sync2")
      .find(".owl-item")
      .removeClass("synced")
      .eq(current)
      .addClass("synced")
    if($("#sync2").data("owlCarousel") !== undefined){
      center(current)
    }
  }

  $("#sync2").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
  });

  function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
      if(num === sync2visible[i]){
        var found = true;
      }
    }

    if(found===false){
      if(num>sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", num - sync2visible.length+2)
      }else{
        if(num - 1 === -1){
          num = 0;
        }
        sync2.trigger("owl.goTo", num);
      }
    } else if(num === sync2visible[sync2visible.length-1]){
      sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
      sync2.trigger("owl.goTo", num-1)
    }

  }
	/***************ModalBuy******************/
	$(".medicationMore").bind("click", medicationAdd);
	$(".medicationLess").bind("click", medicationRemove);
	function medicationAdd(){
		var self1 = $(this).attr('id');
		var count = parseFloat($("#"+self1).parent().children('.medicationCountView').children('.medicationCountNum').val());
		$("#"+self1).parent().children('.medicationCountView').children('.medicationCountNum').val(count+1);
	}
	function medicationRemove(){
		var self2 = $(this).attr('id');
		var count = parseFloat($("#"+self2).parent().children('.medicationCountView').children('.medicationCountNum').val());
		if (count>1){
			$("#"+self2).parent().children('.medicationCountView').children('.medicationCountNum').val(count-1);
		}
		else {
			$("#"+self2).parent().children('.medicationCountView').children('.medicationCountNum').val(1);
		}
	}
	$(".medicationAccordeonLi").bind("click", medicationAccordeon);
	$('.catalogProductTitle').gradientText({
        colors: ['#00B0AD', '#4DC1A7']
  });
	$('.catalogProductSpan').gradientText({
				colors: ['#00B0AD', '#4DC1A7']
	});
	function medicationAccordeon(){
		if ($(this).hasClass("medicationAccordeonActive")) {
			$(this).removeClass("medicationAccordeonActive");
			$(this).children().removeClass("medicationTextActive");
		}
		else{
				$(this).addClass('medicationAccordeonActive');
				$(this).children().addClass("medicationTextActive");
		}
	}
	$("#owl-demo2").owlCarousel({

			navigation : false, // Show next and prev buttons
			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem:true,
			autoPlay: 3000

			// "singleItem:true" is a shortcut for:
			// items : 1,
			// itemsDesktop : false,
			// itemsDesktopSmall : false,
			// itemsTablet: false,
			// itemsMobile : false
	});
	$(".catalogFirstSelect").bind("click", showSelect1);
	$(".catalogFirstSelectVal").bind("click", showSelectChoose);
	function showSelect1(){
		var catalogFirstSelectContent = $(this).parent().children('.catalogFirstSelectContent');
		if ($(this).hasClass('showedContent')) {
			$(this).removeClass('showedContent');
			$(this).removeClass('catalogFirstSelectActive');
			$(catalogFirstSelectContent).animate({"opacity":"0","top":"-40px","height":"0"}, 300);
			function addVisible(){
				$(catalogFirstSelectContent).addClass("unVisibleSelect")
			}
			setTimeout(addVisible, 200);
		}
		else {
			$(this).addClass('catalogFirstSelectActive');
			$(this).addClass('showedContent');
			$(catalogFirstSelectContent).animate({"opacity":"100","top":"0px", "height":"100%"}, 300);
			$(catalogFirstSelectContent).removeClass("unVisibleSelect");
			function removeVisible(){
				$(catalogFirstSelectContent).removeClass("unVisibleSelect")
			}
			setTimeout(removeVisible, 200);
		}
	}
	function showSelectChoose(){
		var selectChoose = $(this).attr('id');
		var selectChooseV = $('#'+selectChoose).text();
		var catalogVisibleVal = $(this).parent().parent().children('.catalogFirstSelect').children('.catalogShowVal');
		$(catalogVisibleVal).text(selectChooseV);
		$('.catalogFirstSelectContent').animate({"opacity":"0","top":"-40px","height":"0"}, 300);
		$(".catalogFirstSelect").removeClass('showedContent');
		$(".catalogFirstSelect").removeClass('catalogFirstSelectActive');
		function addVisible(){
			$(catalogFirstSelectContent).addClass("unVisibleSelect")
		}
		setTimeout(addVisible, 200);
	}
});
$(document) .on('show.bs.modal', function (e)
{
	var thisDialog = $(e.target).find('.modal-dialog');
	$(e.target).css('display','block');

	$(window).bind("resize.modalAlign", function ()
	{
		thisDialog.css('margin-top', (thisDialog .outerHeight() < $(window).height()) ? (($(window).height() - thisDialog.outerHeight()) / 2 + 'px') : '')
	})
		.resize();
});
$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});
function Rotator(start_from){
    var phrases = ["Задай вопрос","Приди на профосмотр"];
    var total = phrases.length;
    var interval = 1000;
    if(void 0 === start_from){
        start_from = 0;
    }

    $("#osmotrText").text(phrases[start_from]).animate({"opacity":"1"}, 1000, function(){
                if(start_from >= (total-1)){
                    setTimeout(function(){
                        $("#osmotrText").animate({"opacity":"0"}, 1000, function(){
                            Rotator();
                        });
                    }, interval);
                }else{
                    start_from++;
                    setTimeout(function(){
                        $("#osmotrText").animate({"opacity":"0"}, 1000,function(){
                            Rotator(start_from);
                        });
                    }, interval);

                }

    })
}

/*****************Hover Products********************/
	$('.productionImgBlock').hover(function() {
		$(this).children('.productionAddHoverLink').children().stop(true, true).delay(50).fadeIn();
	}, function() {
		$(this).children('.productionAddHoverLink').children().stop(true, true).delay(50).fadeOut().hover(function() {
			 $(this).stop(true, true);
		 });
	});
/****************CATALOG_SEARCH*******************/
 $('#searchCatalogInput').bind("click", showSearchCatalog);
 $('#searchCatalogInput2').bind("click", showSearchCatalog2);
function  showSearchCatalog(){
		if ($('.searchCatalogBlock').hasClass('showSearchCatalog')) {
			$(this).parent().children('.searchCatalogBlock').animate({"opacity":"0","top":"-60px"}, 450);
			$(this).parent().children('.searchCatalogBlock').removeClass('showSearchCatalog');
			$(this).parent().children('.searchCatalogBtn').removeClass('catalogSearchBtnActive');
			$(this).parent().children('.searchCatalogBtn').children().removeClass('catalogSearchIcoActive');
			$(this).parent().children('.searchCatalogBtn').children().addClass('glyphicon-search');
			$(this).parent().children('.searchCatalogBtn').children().removeClass('glyphicon-chevron-up');
		}
		else {
			$(this).parent().children('.searchCatalogBlock').animate({"opacity":"100","top":"49px"}, 450);
			$(this).parent().children('.searchCatalogBlock').addClass('showSearchCatalog');
			$(this).parent().children('.searchCatalogBtn').addClass('catalogSearchBtnActive');
			$(this).parent().children('.searchCatalogBtn').children().addClass('catalogSearchIcoActive');
			$(this).parent().children('.searchCatalogBtn').children().removeClass('glyphicon-search');
			$(this).parent().children('.searchCatalogBtn').children().addClass('glyphicon-chevron-up');
		}
}
function  showSearchCatalog2(){
		if ($('.searchCatalogBlock').hasClass('showSearchCatalog')) {
			$(this).parent().children('.searchCatalogBlock').animate({"opacity":"0","top":"-10px", "height":"0"}, 450);
			$(this).parent().children('.searchCatalogBlock').removeClass('showSearchCatalog');
			$(this).parent().children('.searchCatalogBtn').removeClass('catalogSearchBtnActive2');
			$(this).parent().children('.searchCatalogBtn').children().removeClass('catalogSearchIcoActive');
			$(this).parent().children('.searchCatalogBtn').children().addClass('glyphicon-search');
			$(this).parent().children('.searchCatalogBtn').children().removeClass('glyphicon-chevron-up');
		}
		else {
			$(this).parent().children('.searchCatalogBlock').animate({"opacity":"100","top":"46px", "height":"55px"}, 450);
			$(this).parent().children('.searchCatalogBlock').addClass('showSearchCatalog');
			$(this).parent().children('.searchCatalogBtn').addClass('catalogSearchBtnActive2');
			$(this).parent().children('.searchCatalogBtn').children().addClass('catalogSearchIcoActive');
			$(this).parent().children('.searchCatalogBtn').children().removeClass('glyphicon-search');
			$(this).parent().children('.searchCatalogBtn').children().addClass('glyphicon-chevron-up');
		}
}
$('#monitor').html($(window).width());

    $(window).resize(function() {
    var viewportWidth = $(window).width();
$('#monitor').html(viewportWidth);
});
/**************Фильтр Цена***************/
$("#example_id").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 1000,
    from: 50,
    to: 800,

    onChange: function (data) {
        var $range = $("#example_id");

        $range.on("change", function () {
            var $this = $(this),
                value = $this.prop("value").split(";");

            $('#price_inner_1').val(value[0]);
            $('#price_inner_2').val(value[1]);
        });
    }
});

var slider = $("#example_id").data("ionRangeSlider");

$('#price_inner_1').bind('input', function(){
    var value = $(this).val();

    slider.update({
        from: value
    });
});
$('#price_inner_2').bind('input', function(){
    var value = $(this).val();

    slider.update({
        to: value
    });
});
/***************CheckBoxes******************/
function checkBoxActive(self){
	var checkBox = $(self).attr('id');
	if ($("#"+checkBox).parent().hasClass("activeCheck")) {
		$("#"+checkBox).parent().removeClass("activeCheck");
	}
	else{
			$('#'+checkBox+':checked').parent().addClass('activeCheck');
	}
}
function checkBoxOff(self){
	var checkBoxOff = $(self).attr('id');
	$('#'+checkBoxOff+':checked').parent().addClass('activeOffCheck');
	$('.podCatLabel').removeClass("activeCheck");
	function offcheckBox(){
		$("#"+checkBoxOff).parent().removeClass("activeOffCheck");
	}
	setTimeout(offcheckBox, 700);
}
/************************MenuToggleCard************************/
$("#cardDetails").on("click", function(){
	$(".cardPayInfo").slideUp(200);
	$(".cardDetailInfo").slideDown(200);
	$("#cardBuy").removeClass("cardToggleMenuActive");
	$("#cardDetails").addClass("cardToggleMenuActive")
});
$("#cardBuy").on("click", function(){
	$(".cardDetailInfo").slideUp(200);
	$(".cardPayInfo").slideDown(200);
	$("#cardDetails").removeClass("cardToggleMenuActive");
	$("#cardBuy").addClass("cardToggleMenuActive")
});
/****************GOOGLEMAP CONTACTS**************************/
      function google_maps() {
                var latlng = new google.maps.LatLng(55.736812,37.617574);
                var settings = {
                  zoom: 16,
                  center: latlng,
                  mapTypeControl: true,
                  mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
              scrollwheel: false,
              disableDoubleClickZoom: true,
                  navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                  mapTypeId: google.maps.MapTypeId.ROADMAP
              };
      var map = new google.maps.Map(document.getElementById("map"), settings);
        var myLatlng = new google.maps.LatLng(55.736812,37.617574);

        var myOptions = {
          zoom: 16,
          center: myLatlng,
          scrollwheel: false,
          disableDoubleClickZoom: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
			}

				function showContactsMap() {
				 var latLang = new google.maps.LatLng(50.4353338, 30.41978);

				 var mapOptions = {
				  zoom: 15,
				  center: latLang,
				  disableDefaultUI: false,
				  navigationControl: false,
				  mapTypeControl: false,
				  scrollwheel: false,
				  // styles: styles,
				  mapTypeId: google.maps.MapTypeId.ROADMAP
				 };

				 var map = new google.maps.Map(document.getElementById('contacts_google_map'), mapOptions);
				 google.maps.event.trigger(map, 'resize');
				 map.setZoom( map.getZoom() );

				    // var icon = new google.maps.MarkerImage('../img/marker.png',
				    //     new google.maps.Size(64, 64),
				    //     new google.maps.Point(0, 0),
				    //     new google.maps.Point(32, 64)
				    // );

				 var marker = new google.maps.Marker({
				  // icon: icon,
				  position: latLang,
				  map: map,
				  title: "Our office"
				 });

				 marker.setMap(map);

				 google.maps.event.addDomListener(window, 'resize', function() {
				  map.setCenter(latLang);
				 });
				}
			$(document).ready(function() {
				showContactsMap();
			});
/****************ContactsSomeAnimation*****************/
$(".header__logo_img").hover(function(){
	if ($(".header__logo_img").hasClass("pulse")) {
		$(".header__logo_img").removeClass("animated");
		$(".header__logo_img").removeClass("pulse");
	}
	else {
		$(".header__logo_img").addClass("animated");
		$(".header__logo_img").addClass("pulse");
	}
});
$(".contactsLocationIcon").hover(function(){
	if ($(".contactsLocationIcon").hasClass("swing")) {
		$(".contactsLocationIcon").removeClass("animated");
		$(".contactsLocationIcon").removeClass("swing");
	}
	else {
		$(".contactsLocationIcon").addClass("animated");
		$(".contactsLocationIcon").addClass("swing");
	}
});
$(".contactsPhoneIcon").hover(function(){
	if ($(".contactsPhoneIcon").hasClass("swing")) {
		$(".contactsPhoneIcon").removeClass("animated");
		$(".contactsPhoneIcon").removeClass("swing");
	}
	else {
		$(".contactsPhoneIcon").addClass("animated");
		$(".contactsPhoneIcon").addClass("swing");
	}
});
$(".contactsNavIcon").hover(function(){
	if ($(".contactsNavIcon").hasClass("swing")) {
		$(".contactsNavIcon").removeClass("animated");
		$(".contactsNavIcon").removeClass("swing");
	}
	else {
		$(".contactsNavIcon").addClass("animated");
		$(".contactsNavIcon").addClass("swing");
	}
});
$(".contactsSkypeIcon").hover(function(){
	if ($(".contactsSkypeIcon").hasClass("rubberBand")) {
		$(".contactsSkypeIcon").removeClass("animated");
		$(".contactsSkypeIcon").removeClass("rubberBand");
	}
	else {
		$(".contactsSkypeIcon").addClass("animated");
		$(".contactsSkypeIcon").addClass("rubberBand");
	}
});
$(".contactsVkIcon").hover(function(){
	if ($(".contactsVkIcon").hasClass("rubberBand")) {
		$(".contactsVkIcon").removeClass("animated");
		$(".contactsVkIcon").removeClass("rubberBand");
	}
	else {
		$(".contactsVkIcon").addClass("animated");
		$(".contactsVkIcon").addClass("rubberBand");
	}
});
$(".contactsFbIcon").hover(function(){
	if ($(".contactsFbIcon").hasClass("rubberBand")) {
		$(".contactsFbIcon").removeClass("animated");
		$(".contactsFbIcon").removeClass("rubberBand");
	}
	else {
		$(".contactsFbIcon").addClass("animated");
		$(".contactsFbIcon").addClass("rubberBand");
	}
});
/***********CommentsActive*******************/
	$(".voteMark").on("click", function(){
		$(".voteMark").removeClass("active");
		$(".voteMarkNum").removeClass("active");
		$(this).addClass("active");
		$(this).children(".voteMarkNum").addClass("active");
	});
	$("#openComment").on("click", function() {
		$(".blogLeaveCmt").slideToggle(400);
	});
	$("#openComment2").on("click", function(){
		$(".blogLeaveCmt").slideToggle(400);
	});
