
jQuery(document).ready(function(){

loadRegisterAds();
loadMenuAds();
newBannerSlick();
homeSlider();

  if(jQuery('.header_text_slider').length > 0) { 
 jQuery('.header_text_slider').slick({
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
 

  if(jQuery('.products_gallery_slick').length > 0) { 
 jQuery('.products_gallery_slick').slick({
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
var currentSlideIndex=jQuery('.products_gallery_slick .slick-slide.slick-active').attr('id').replace('slide_','');
zoomCall(currentSlideIndex);
changeTabs2(currentSlideIndex);
        },
onInit: function(){
	
var currentSlideIndex=jQuery('.products_gallery_slick .slick-slide.slick-active').attr('id').replace('slide_','');
zoomCall(currentSlideIndex);
changeTabs2(currentSlideIndex);
	  },

   focusOnSelect: false,
   responsive: []
 });
} 
 
   if(jQuery('.consultants_slick_frez').length > 0) { 
 jQuery('.consultants_slick_frez').slick({
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
 
 
  if(jQuery('.featured_brands_slick').length > 0) { 
 jQuery('.featured_brands_slick').slick({
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

 if(jQuery('.slick-ads-home').length > 0) { 
 var timer=500;
 	jQuery('.slick-ads-home').each(function(){ 
	timer=timer+2000;
	
	jQuery(this).slick({
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

 

	jQuery('.slick-ads-home .slick-slide.slick-active .innerItem').dowresize({
			  defaultwidth : 130,
			  defaultheight : 448,
			  timetoupdate: 300,
			  static : '.slick-ads-home img'
		  });
		
 }  
 

 if(jQuery('.products_thumb_slick').length > 0) {
jQuery('.products_thumb_slick').slick({
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
 
if(jQuery('.related_products_slick').length > 0) {
jQuery('.related_products_slick').slick({
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

 if(jQuery('#new_banner_slick').length > 0) { 
 jQuery('#new_banner_slick').slick({
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
   dots:false,
   focusOnSelect: true,
   onInit: function(){},
   onAfterChange: function() {},
   responsive: []
 });
 
 resizeBanner();


 } }
 


function bannerSlick(){

	
 if(jQuery('#banner_slick').length > 0) { 
 jQuery('#banner_slick').slick({
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

	var currentSlideIndex=jQuery('#banner_slick .slick-slide.slick-active').attr('id').replace('slide_','');
changeTabs(currentSlideIndex);
	  },
	onAfterChange: function() {
	var currentSlideIndex=jQuery('#banner_slick .slick-slide.slick-active').attr('id').replace('slide_','');
changeTabs(currentSlideIndex);
        },
   responsive: []
 });
 
 
	jQuery('#banner_slick .slick-slide.slick-active .innerItem').dowresize({
			  defaultwidth : 720,
			  defaultheight : 347,
			  timetoupdate: 300,
			  static : '#banner_slick img'
		  });
		  
 jQuery('.bannerDotsContent ul li a').on('click', function(e){
	  jQuery('.bannerDotsContent ul li a').removeClass('active');
	  var obj=jQuery(this);
	  obj.addClass('active');
	  var id=obj.attr('id').replace('dot_','');
	  var slideIndex = jQuery("#slide_"+id).attr('index');
      jQuery('#banner_slick').slickGoTo(slideIndex);
});  
	
   
 } }
 
 function brand_dropdown_slick(){
	
if(jQuery('.brand_dropdown_slick').length > 0) { 
jQuery('.brand_dropdown_slick_cont').html('');
jQuery('.brand_dropdown_slick_cont').html(jQuery('#brands_init').html());
 jQuery('.header .brand_dropdown_slick').slick({
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
	
if(jQuery('.home_slider').length > 0) { 

 jQuery('.home_slider').slick({
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
	
if(jQuery('.ads_step_slider').length > 0) { 

 jQuery('.ads_step_slider').slick({
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
		 jQuery('.bannerDotsContent ul li a').removeClass('active');
	jQuery("#dot_"+currentSlideIndex).addClass('active');
	} 
	
function changeTabs2(currentSlideIndex){
	jQuery('.products_thumb_slick .innerItem').removeClass('active');
	jQuery("#thumb_"+currentSlideIndex+" .innerItem").addClass('active');
	} 	
	
jQuery(window).load(function(){
	
	 if(jQuery('.slick-advertisements').length > 0) {
		 
		
		  
 jQuery('.slick-advertisements').slick({
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
	if(jQuery('.brand_dropdown_ads_slick').length > 0) { 
 var timer=500;
 	jQuery('.brand_dropdown_ads_slick').each(function(){ 
jQuery(this).slick({
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
	if(jQuery('.slick-ads-register').length > 0) { 
 var timer=500;
 	jQuery('.slick-ads-register').each(function(){ 
	timer=timer+2000;
	
	jQuery(this).slick({
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

 

/*	jQuery('.slick-ads-register .slick-slide.slick-active .innerItem').dowresize({
			  defaultwidth : 440,
			  defaultheight : 460,
			  timetoupdate: 300,
			  static : '.slick-ads-register img'
		  });*/
		
 } }	