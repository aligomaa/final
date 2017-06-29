function checkButton() {
if(document.getElementById("h").checked == true){
$('.free').bPopup({
contentContainer:'.content',
});
}
else if(document.getElementById("k").checked == true){
$('.paied').bPopup({
contentContainer:'.content',
});
}              
else
{
    //do nothing
}
}


function checkButton1() {
if(document.getElementById("bm").checked == true){
$('.bef-login').bPopup({
contentContainer:'.content',
});
}
else if(document.getElementById("emp").checked == true){
$(".show-search").stop();
$(".show-search").fadeToggle();
}              
else
{
    //do nothing
}
}

function checkButton2() {
if(document.getElementById("bm1").checked == true){
$('.login-form').bPopup({
speed: 450,
transition: 'slideDown'
});
}
else if(document.getElementById("emp1").checked == true){
   window.open('addComp.html','_self');
}              
else
{
    //do nothing
}
}


//To change text 'please fill the field on Required attribute'
var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("من فضلك  أدخل البيانات المطلوبه");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }

$('#edit-comp').click(function(){
$('.edit-comp').bPopup({
speed: 450,
transition: 'slideDown',
positionStyle: 'fixed'
});
});

$('#edit-prod').click(function() {
$('.add-prod').bPopup({
speed: 450,
transition: 'slideDown',
positionStyle: 'fixed'
});
});

$('.add-prod-btn').click(function(){
$('.add-prod').bPopup({
speed: 450,
transition: 'slideDown',
positionStyle: 'fixed'
});
});

$('#edit-offer').click(function() {
$('.add-offer').bPopup({
speed:450,
transition:'slideDown',
positionStyle:'fixed'
});
});


$('#add-dept').click(function(){
$('.an-sort').slideToggle(300);
});

$('#add-an-sort').click(function(){
var val=$(this).parent('.an-sort').find('input').val();
if(val!=''){
$('.s-sort').find('select').append('<option selected>'+val+'</option>');
}
//$('body').html(val);
});
$('.msg').click(function(){
var cont=$(this).find('.order-info').html();
$('.msgs').find('.order-info').html(cont);
$('.msg').css({'background':'transparent','color':'#000'});
$(this).css({'background':'#04518c','color':'#fff'});
});


$(document).ready(function() {
    $(".open-map").click(function(e) {
        $(".s-area").animate({'margin-left':'0px'},400);
        e.stopPropagation();
    });

    $(document).click(function(e) {
        if (!$(e.target).is('.s-area, .s-area *')) {
            $(".s-area").animate({'margin-left':'-550px'},400);
        }
    });
});

$('.open-cog').click(function(){
$(this).fadeOut(0);
$('.close-cog').fadeIn(0);
$(this).parent('.control-pg').animate({'margin-left':'0px'},400);
});
$('.close-cog').click(function(){
$(this).fadeOut(0);
$('.open-cog').fadeIn(0);
$(this).parent('.control-pg').animate({'margin-left':'-20%'},400);
});

$('.widme').each(function(){
var wd=($(window).width()-$(this).width())/2;
var hd=($(window).height()-$(this).height())/2;
$(this).css({'top':hd+'px'});
$(this).css({'left':wd+'px'});
});

$('.login-btn').click(function(){
$('.login-form').bPopup({
speed: 450,
transition: 'slideDown'
});
});



$('.effect-goliath').click(function(){
$('.jop-show').bPopup({
speed: 450,
transition: 'slideDown'
});
});

$('.show-pass').click(function(){
$('.login-pass').bPopup({
speed: 450,
transition: 'slideDown'
});
});

$('.pr-ord').click(function(){
$('.order-prod').bPopup({
speed: 450,
transition: 'slideDown'
});
});
    
$('.signup-btn').click(function(){
$('.area-serch').bPopup({
speed: 650,
transition: 'slideIn',
transitionClose: 'slideBack'
});
});

$('.show-jop').click(function(){
$('.jop-show').bPopup({
speed: 650,
transition: 'slideIn',
transitionClose: 'slideBack'
});
});
        
$('.m-c span').click(function(){
$(this).parent('li').find('ul').slideToggle(100);
});

//$('.open-cog').click(function(){
//$(this).fadeOut(0);
//$('.close-cog').fadeIn(0);
//$(this).parent('.control-pg').animate({'margin-left':'0px'},400);
//});
//
//$('.close-cog').click(function() {
//$('.control-pg').animate({'margin-left':'-20%'},400);
//});
//
//$('html').click(function(){
//    $('.control-pg').animate({'margin-left':'-20%'},400);
//});

//$('body').click(function(){
//    $('.control-pg').animate({'margin-left':'-20%'},400);
//});
//
//
//$('.control-pg').click(function(event) {
//    event.stopPropagation();
//});

$(document).ready(function() {
    $(".close-cog").click(function(e) {
        $(".control-pg").animate({'margin-left':'0px'},400);
        e.stopPropagation();
    });

    $(document).click(function(e) {
        if (!$(e.target).is('.control-pg, .control-pg *')) {
            $(".control-pg").animate({'margin-left':'-20%'},400);
        }
    });
});


//function initialize() {
//  var mapProp = {
//    center:new google.maps.LatLng(51.508742,-0.120850),
//    zoom:5,
//    mapTypeId:google.maps.MapTypeId.ROADMAP
//  };
//  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
//}
//google.maps.event.addDomListener(window, 'load', initialize);


// to select image in area

// Bind to the change event of our file input
$("input[name='myFileSelect']").on("change", function(){

// Get a reference to the fileList
var files = !!this.files ? this.files : [];

// If no files were selected, or no FileReader support, return
if ( !files.length || !window.FileReader ) return;

// Only proceed if the selected file is an image
if ( /^image/.test( files[0].type ) ) {

// Create a new instance of the FileReader
var reader = new FileReader();

// Read the local file as a DataURL
reader.readAsDataURL( files[0] );

// When loaded, set image data as background of page
reader.onloadend = function(){
                        
$(".imgcontent").css("background-image", "url(" + this.result + ")")
.find('.bstext').fadeOut(10);
}
}

});

$('.slider4').bxSlider({
slideWidth: 400,
minSlides: 5,
maxSlides: 3,
moveSlides: 1,
slideMargin: 20,
auto: true,
responsive: true ,
autoHover: true
});

$('.slider5').bxSlider({
slideWidth: 200,
minSlides: 3,
mode: 'vertical',
moveSlides:1,
autoHover: true,
easing: 'easeOutElastic',
auto: true,
speed:800
});

$('.slider6').bxSlider({
slideWidth: 200,
minSlides: 3,
mode: 'vertical',
moveSlides:1,
autoHover: true,
easing: 'easeOutElastic',
auto: true,
speed:1000
});

$('.add-other').click(function(){
var oth=$('#other').html();
$(this).parents('.widme').find('#other').append(oth);
});

$('.login-btn1').click(function(){
$('.messg-sent').bPopup({
speed: 450,
transition: 'slideDown'
});
});

$('.login-btn2').click(function(){
$('.messg-sent').bPopup({
speed: 450,
transition: 'slideDown'
});
});

//$('.add-img').click(function(){
//var oth=$('.msg-imgs').html();
//$(this).parents('.messg-sent').find('.msg-imgs').append(oth);
//});

$(document).ready(function(){
  var animTime = 300,
      clickPolice = false;
  
  $(document).on('touchstart click', '.acc-btn', function(){
    if(!clickPolice){
       clickPolice = true;
      
      var currIndex = $(this).index('.acc-btn'),
          targetHeight = $('.acc-content-inner').eq(currIndex).outerHeight();
   
      $('.acc-btn h1').removeClass('selected');
      $(this).find('h1').addClass('selected');
      
      $('.acc-content').stop().animate({ height: 0 }, animTime);
      $('.acc-content').eq(currIndex).stop().animate({ height: targetHeight }, animTime);

      setTimeout(function(){ clickPolice = false; }, animTime);
    }
    
  });


});