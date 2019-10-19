$(document).ready(function(){
	$('.search-button').click(function () {
		$('.search-button').toggleClass('active'); 
		$('.search-box').toggleClass('exibir', 1000); 
	});
	$("#ofícios").click(function(){
        $("#sub").slideToggle("slow");
    });
});