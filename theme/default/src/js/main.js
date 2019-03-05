$('#stPakButt').click(function(){
$('.paketBox').removeClass('selected');
$('.paketBox#standart').addClass('selected');
$('.paketButton').removeClass('active');
$('.paketButton_lBlue').addClass('active');

});

$('#prePakButt').click(function(){
$('.paketBox').removeClass('selected');
$('.paketBox#premium').addClass('selected');
$('.paketButton').removeClass('active');
$('.paketButton_blue').addClass('active');



});

$('#vipPakButt').click(function(){
$('.paketBox').removeClass('selected');
$('.paketBox#vip').addClass('selected');
$('.paketButton').removeClass('active');
$('.paketButton_dBlue').addClass('active');

});



$('.day1').click(function(){
console.log('day1');

if($('.day1').hasClass("active")){
$('.day1').removeClass("active");
$('#programaDay1').css('max-height','0px');	

}else{
$('.day1').addClass("active");
$('#programaDay1').css('max-height','5000px');
}

});

$('.day2').click(function(){
console.log('day2');

if($('.day2').hasClass("active")){
$('.day2').removeClass("active");
$('#programaDay2').css('max-height','0px');	

}else{
$('.day2').addClass("active");
$('#programaDay2').css('max-height','5000px');
}

});

$('.form-container__close').click(function(){
	$('.moadalRegistration').css('display','none');
	console.log("123123");
});

$('.registrationBlock').click(function(){
	$('.moadalRegistration').css('display','block');
	console.log("123123");

});