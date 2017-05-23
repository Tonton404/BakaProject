$(document).ready(function(){

console.log($("#liste"));
$('#formation').on('click', function(){
	$('#formation_p').css('display', 'inherit');
	$('#contact_p').css('display', 'none');
	$('#accueil_p').css('display', 'none'); 
})

console.log($("#liste"));
$('#contact').on('click', function(){

	$('#contact_p').css('display', 'inherit');
	$('#accueil_p').css('display', 'none'); 
	$('#formation_p').css('display', 'none');
})

console.log($("#liste"));
$('#accueil').on('click', function(){
	$('#accueil_p').css('display', 'inherit');
	$('#contact_p').css('display', 'none');
	$('#formation_p').css('display', 'none');
})

});