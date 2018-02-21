
$(document).ready(function(){
loadRegisterAds();
loadMenuAds();
newBannerSlick();
homeSlider();

  if($('.header_text_slider').length > 0) { 
 $('.header_text_slider').slick({
   arrows: true,
   infinite: true,
   draggable: false,
   autoplay: true,
	  vertical:true,
   autoplaySpeed: 5000,
   speed: 500,
   slidesToShow: 1,
   slidesToScroll:1,

   pauseOnHover: false,
   dots:false,
   focusOnSelect: false,
   responsive: []
 });
} 
 

  if($('.products_gallery_slick').length > 0) { 
 $('.products_gallery_slick').slick({
   arrows: true,
   infinite: true,
   draggable: true,
	autoplay: false,
   pauseOnHover: true,
   fade:true,
   autoplaySpeed: 2500,
   speed: 10,
   slidesToShow: 1,
   slidesToScroll:1,
   adaptiveHeight: true,
   pauseOnHover: true,
   asNavFor: '.products_thumb_slick',
   dots:false,

onAfterChange: function() {
zoomHoverCall();
var currentSlideIndex=$('.products_gallery_slick .slick-slide.slick-active').attr('id').replace('slide_','');
zoomCall(currentSlideIndex);
changeTabs2(currentSlideIndex);
        },
onInit: function(){
	
var currentSlideIndex=$('.products_gallery_slick .slick-slide.slick-active').attr('id').replace('slide_','');
zoomCall(currentSlideIndex);
changeTabs2(currentSlideIndex);
	  },

   focusOnSelect: false,
   responsive: []
 });
} 
 
   if($('.consultants_slick_frez').length > 0) { 
 $('.consultants_slick_frez').slick({
   arrows: true,
   infinite: false,
   draggable: true,
	autoplay: true,
   pauseOnHover: true,
   fade:false,
   autoplaySpeed: 4000,
   speed: 1000,
   slidesToShow: 4,
   slidesToScroll:1,
   adaptiveHeight: true,
   pauseOnHover: true,
   dots:false,

   focusOnSelect: false,
        responsive: [
  {
    breakpoint:900,
    settings: {
   slidesToShow: 3,
   slidesToScroll:2
    }
  },
   {
    breakpoint: 700,
    settings: {
   slidesToShow: 2,
   slidesToScroll:1
    }
  }
  ,
   {
    breakpoint: 500,
    settings: {
   slidesToShow: 1,
   slidesToScroll:1
    }
  }
 
   ]
 });
  } 
 
 
  if($('.featured_brands_slick').length > 0) { 
 $('.featured_brands_slick').slick({
   arrows: true,
   infinite: false,
   draggable: true,
	autoplay: true,
   pauseOnHover: true,
   fade:false,
   autoplaySpeed: 4000,
   speed: 1000,
   slidesToShow: 8,
   slidesToScroll:1,
   adaptiveHeight: true,
   pauseOnHover: true,
   dots:false,

   focusOnSelect: false,
        responsive: [
  {
    breakpoint:1000,
    settings: {
   slidesToShow: 5,
   slidesToScroll:2
    }
  },
   {
    breakpoint: 800,
    settings: {
   slidesToShow: 4,
   slidesToScroll:1
    }
  }
  ,
   {
    breakpoint: 600,
    settings: {
   slidesToShow: 3,
   slidesToScroll:1
    }
  }
    ,
   {
    breakpoint: 400,
    settings: {
   slidesToShow: 2,
   slidesToScroll:1
    }
  }
  	,
   {
    breakpoint: 340,
    settings: {
   slidesToShow: 1,
   slidesToScroll:1
    }
  }
 
   ]
 });
  } 

 if($('.slick-ads-home').length > 0) { 
 var timer=500;
 	$('.slick-ads-home').each(function(){ 
	timer=timer+2000;
	
	$(this).slick({
   arrows: true,
   infinite: true,
   draggable: true,
	autoplay: true,
   pauseOnHover: true,
   fade:true,
   autoplaySpeed: timer,
   speed: 2000,
   slidesToShow: 1,
   slidesToScroll:1,
   adaptiveHeight: true,
   pauseOnHover: true,

   dots:false,
  onAfterChange: function() {
/*callProductZoom();*/
        },
   focusOnSelect: false,
   responsive: []
 });});

 

	$('.slick-ads-home .slick-slide.slick-active .innerItem').dowresize({
			  defaultwidth : 130,
			  defaultheight : 448,
			  timetoupdate: 300,
			  static : '.slick-ads-home img'
		  });
		
 }  
 

 if($('.products_thumb_slick').length > 0) {
$('.products_thumb_slick').slick({
  arrows: true,
   infinite: true,
   arrows: true,
   draggable: true,
   autoplay: false,
    dots:false,
   autoplaySpeed: 2000,
   speed: 1500,
   slidesToShow: 4,
   pauseOnHover: true,
   slidesToScroll:1,
   focusOnSelect: true,
   asNavFor: '.products_gallery_slick',
/* asNavFor: '.products_slick',*/


   responsive: [
  {
    breakpoint: 500,
    settings: {
   slidesToShow: 3,
   slidesToScroll:2
    }
  },
   {
    breakpoint: 260,
    settings: {
   slidesToShow: 2,
   slidesToScroll:1
    }
  }
 
   ]
   
 });
   
 }
 
if($('.related_products_slick').length > 0) {
$('.related_products_slick').slick({
  arrows: true,
   infinite: true,
   arrows: true,
   draggable: true,
   autoplay: false,
    dots:false,
   autoplaySpeed: 500,
   speed: 1000,
   slidesToShow: 5,
   slidesToScroll:4,
   focusOnSelect: true,
    responsive: [
  {
    breakpoint: 900,
    settings: {
   slidesToShow: 3,
   slidesToScroll:1
    }
  },
   {
    breakpoint: 650,
    settings: {
   slidesToShow: 2,
   slidesToScroll:1
    }
  },
   {
    breakpoint: 450,
    settings: {
   slidesToShow: 1,
   slidesToScroll:1
    }
  },
    {
    breakpoint: 350,
    settings: {
   slidesToShow: 1,
   slidesToScroll:1
    }
  }
   ]

 });
   
 }
 
});

function newBannerSlick(){

 if($('#new_banner_slick').length > 0) { 
 $('#new_banner_slick').slick({
   arrows: false,
   infinite: true,
   draggable: true,
   fade:true,
   autoplay: true,
   pauseOnHover: true,
   autoplaySpeed: 2500,
   speed: 1000,
   slidesToShow: 1,
   slidesToScroll:1,
   dots:true,
   focusOnSelect: true,
   onInit: function(){},
   onAfterChange: function() {},
   responsive: []
 });
 
 resizeBanner();


 } }
 


function bannerSlick(){

	
 if($('#banner_slick').length > 0) { 
 $('#banner_slick').slick({
   arrows: true,
   infinite: true,
   draggable: true,
  autoplay: true,
   pauseOnHover: true,
   autoplaySpeed: 2500,
   speed: 1000,
   slidesToShow: 1,
   slidesToScroll:1,
 dots:true,
   focusOnSelect: true,
	onInit: function(){

	var currentSlideIndex=$('#banner_slick .slick-slide.slick-active').attr('id').replace('slide_','');
changeTabs(currentSlideIndex);
	  },
	onAfterChange: function() {
	var currentSlideIndex=$('#banner_slick .slick-slide.slick-active').attr('id').replace('slide_','');
changeTabs(currentSlideIndex);
        },
   responsive: []
 });
 
 
	$('#banner_slick .slick-slide.slick-active .innerItem').dowresize({
			  defaultwidth : 720,
			  defaultheight : 347,
			  timetoupdate: 300,
			  static : '#banner_slick img'
		  });
		  
 $('.bannerDotsContent ul li a').on('click', function(e){
	  $('.bannerDotsContent ul li a').removeClass('active');
	  var obj=$(this);
	  obj.addClass('active');
	  var id=obj.attr('id').replace('dot_','');
	  var slideIndex = $("#slide_"+id).attr('index');
      $('#banner_slick').slickGoTo(slideIndex);
});  
	
   
 } }
 
 function brand_dropdown_slick(){
	
if($('.brand_dropdown_slick').length > 0) { 
$('.brand_dropdown_slick_cont').html('');
$('.brand_dropdown_slick_cont').html($('#brands_init').html());
 $('.header .brand_dropdown_slick').slick({
   arrows: true,
   infinite: true,
   draggable: true,
   autoplay: true,
   pauseOnHover: true,
   fade:false,
   autoplaySpeed: 2500,
   speed: 500,
   slidesToShow: 8,
   slidesToScroll:1,
   adaptiveHeight: true,
   pauseOnHover: true,

   dots:false,
  onAfterChange: function() {
/*callProductZoom();*/
        },
   focusOnSelect: false,
    responsive: [
  {
    breakpoint: 1200,
    settings: {
   slidesToShow: 7,
   slidesToScroll:1
    }
  },
   {
    breakpoint: 1100,
    settings: {
   slidesToShow: 6,
   slidesToScroll:1
    }
  },
   {
    breakpoint: 450,
    settings: {
   slidesToShow: 3,
   slidesToScroll:1
    }
  },
    {
    breakpoint: 350,
    settings: {
   slidesToShow: 2,
   slidesToScroll:1
    }
  }
   ]
 });
 

		
 } 
 } 
 
 function homeSlider(){
	
if($('.home_slider').length > 0) { 

 $('.home_slider').slick({
   arrows: true,
   infinite: true,
   draggable: true,
   autoplay: true,
   pauseOnHover: true,
   fade:false,
   autoplaySpeed: 2500,
   speed: 500,
   slidesToShow: 5,
   slidesToScroll:1,
   adaptiveHeight: true,
   pauseOnHover: true,
   dots:false,
   onAfterChange: function() {},
   focusOnSelect: false,
    responsive: [
  {
    breakpoint: 1200,
    settings: {
   slidesToShow: 4,
   slidesToScroll:1
    }
  },
   {
    breakpoint: 1100,
    settings: {
   slidesToShow: 2,
   slidesToScroll:1
    }
  },
   {
    breakpoint: 600,
    settings: {
   slidesToShow: 1,
   slidesToScroll:1
    }
  },
    {
    breakpoint: 350,
    settings: {
   slidesToShow: 1,
   slidesToScroll:1
    }
  }
   ]
 });
 

		
 } 
 } 
 
  function adsStepSlider(){
	
if($('.ads_step_slider').length > 0) { 

 $('.ads_step_slider').slick({
   arrows: true,
   infinite: true,
   draggable: true,
   autoplay: true,
   pauseOnHover: true,
   fade:true,
   autoplaySpeed: 2500,
   speed: 500,
   slidesToShow: 1,
   slidesToScroll:1,
   adaptiveHeight: true,
   pauseOnHover: true,
   dots:false,
   onAfterChange: function() {},
   focusOnSelect: false,

 });
 

		
 } 
 } 
 
function changeTabs(currentSlideIndex){
		 $('.bannerDotsContent ul li a').removeClass('active');
	$("#dot_"+currentSlideIndex).addClass('active');
	} 
	
function changeTabs2(currentSlideIndex){
	$('.products_thumb_slick .innerItem').removeClass('active');
	$("#thumb_"+currentSlideIndex+" .innerItem").addClass('active');
	} 	
	
$(window).load(function(){
	
	 if($('.slick-advertisements').length > 0) {
		 
		
		  
 $('.slick-advertisements').slick({
   arrows: true,
   infinite: true,
   draggable: true,
	autoplay: true,
   pauseOnHover: true,
   fade:true,
   autoplaySpeed: 5000,
   speed: 500,
   slidesToShow: 1,
   slidesToScroll:1,
   adaptiveHeight: true,
   pauseOnHover: true,

   dots:false,
  onAfterChange: function() {
/*callProductZoom();*/
        },
   focusOnSelect: false,
   responsive: []
 });
 

		
 }
	});	
	
function loadMenuAds(){
	if($('.brand_dropdown_ads_slick').length > 0) { 
 var timer=500;
 	$('.brand_dropdown_ads_slick').each(function(){ 
$(this).slick({
   arrows: true,
   infinite: true,
   draggable: true,
	autoplay: true,
   pauseOnHover: true,
   fade:true,
   autoplaySpeed: timer,
   speed: 2000,
   slidesToShow: 1,
   slidesToScroll:1,
   adaptiveHeight: true,
   pauseOnHover: true,

   dots:false,
  onAfterChange: function() {
/*callProductZoom();*/
        },
   focusOnSelect: false,
   responsive: []
 });});

 
		
 } }		
function loadRegisterAds(){
	if($('.slick-ads-register').length > 0) { 
 var timer=500;
 	$('.slick-ads-register').each(function(){ 
	timer=timer+2000;
	
	$(this).slick({
   arrows: true,
   infinite: true,
   draggable: true,
	autoplay: true,
   pauseOnHover: true,
   fade:true,
   autoplaySpeed: timer,
   speed: 2000,
   slidesToShow: 1,
   slidesToScroll:1,
   adaptiveHeight: true,
   pauseOnHover: true,

   dots:false,
  onAfterChange: function() {
/*callProductZoom();*/
        },
   focusOnSelect: false,
   responsive: []
 });});

 

/*	$('.slick-ads-register .slick-slide.slick-active .innerItem').dowresize({
			  defaultwidth : 440,
			  defaultheight : 460,
			  timetoupdate: 300,
			  static : '.slick-ads-register img'
		  });*/
		
 } }	