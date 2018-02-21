$(document).ready(function(){setAttributeSizes();

if($('.parallax').length>0){
	
	$('.parallax').parallax();}
});

$(window).load(function(){
doScrollEffects();
setAttributeSizes();});

$(window).bind("scroll",function(){
doScrollEffects();});

function doScrollEffects() {
	var ScrollTop = $(window).scrollTop();
	var WindowHeight = $(window).height();
	//$('#texttt').val(ScrollTop);
	$('.trans').each(function () {

		var Obj = $(this);
		var ObjTopPos = Obj.offset().top - (WindowHeight);
		//$('#texttt').val(Obj.offset().top);
		if (ScrollTop >= ObjTopPos) {
			if (!Obj.hasClass('ActiveItem')) {
				Obj.addClass('ActiveItem');
			}
		} else if (ScrollTop < ObjTopPos - 50) {
			if (Obj.hasClass('ActiveItem')) {
				Obj.removeClass('ActiveItem');
			}
		} else {
			// do nothing
			//return false;
		}
	});
}


 function setAttributeSizes(){
	 
 $('.resize_item').each(function(){
	var attributes=$(this).attr('data-offset');
	
	var arr = attributes.split(',');
for (i = 0; i < arr.length; i++) { 
  var style=arr[i].split(':');
  var field=clearString(style[0]);
  var value=clearString(style[1]);

if(field=="width"){	 
var val=getResizeWidth2(value);  
 $(this).css({'width':val+'px'});}
 
if(field=="padding-left"){	 
var val=getResizeWidth2(value);  
 $(this).css({'padding-left':val+'px'});}

if(field=="margin_top_w"){	 
var val=getResizeWidth2(value);  
$(this).css({'margin-top':val+'px'});}

if(field=="min-width"){	 
 $(this).css({"min-width":value+"px"});} 
 
if(field=="height"){	

var val=getResizeHeight(value);  
$(this).css({'height':val+'px'});
 }
 
if(field=="z-index"){	
$(this).css({'z-index':value});
 } 
 
if(field=="min-height-w"){
 
var val=getResizeWidth(value);  
$(this).css({'min-height':val+'px'});
 }
 
if(field=="max-height-w"){
 
var val=getResizeWidth(value);  
$(this).css({'max-height':val+'px'});
 }   
 
if(field=="height-w"){	 
var val=getResizeWidth(value);  
$(this).css({'height':val+'px'});
 } 
 
if(field=="padding-bottom-w"){	 
var val=getResizeWidth(value); 

$(this).css({'padding-bottom':val+'px'});
 }    
 
 if(field=="top"){	 
var val=getResizeHeight(value)/2;
if(val>value){
	val=value;}
$(this).css({'top':val+'px'});}

 if(field=="top-w"){	 
var val=getResizeWidth(value);
if(val>value){
	val=value;}
$(this).css({'top':val+'px'});}

 
 if(field=="bottom"){	 
var val=getResizeHeight(value)/2;
 $(this).css({'bottom':val+'px'});} 
 
 if(field=="bottom-w"){	 
var val=getResizeWidth(value);
if(val>value){
	val=value;}
$(this).css({'bottom':val+'px'});}
 
 if(field=="left"){	 
var val=getResizeWidth(value);
$(this).css({'left':val+'px'});} 

 if(field=="right"){	 
var val=getResizeWidth(value);
$(this).css({'right':val+'px'});}

 if(field=="font-size"){	 
var val=getResizeWidth2(value);

$(this).css({'font-size':val+'px'});} 

  
}});

$('.center_item').each(function(){
	centerObj($(this))});
	} 
	
function clearString(val){
var c=val.replace("'","");
return c;}	
function getResizeWidth(size){
	var defaultWidth=2000;
	
	var windowWidth=$(window).width();
	var newSize=(windowWidth*size)/defaultWidth;
	
	return newSize;
	}
	
function getResizeWidth2(size){
	var defaultWidth=2000;
	
	var windowWidth=getWindowWidth();
	var newSize=(windowWidth*size)/defaultWidth;
	
	return newSize;
	}	
	
function getWindowWidth(){
	var windowWidth=$(window).width();
	if($('.mob_check').is(":visible") && $('.c-home').length==0){
		var windowWidth=1000;
	}return windowWidth;}	
	
function getResizeHeight(size){
	var defaultHeight=924;
	var windowHeight=$(window).height();
	var newSize=(windowHeight*size)/defaultHeight;
	
	return newSize;
	}	
	
function centerObj(obj){
	var left=($(window).width()-obj.width())/2;
	var top=($(window).height()-obj.height())/2;
	obj.css({'left':left+'px','top':top+'px'});
	}