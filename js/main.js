
$window = $(window);
$slide = $('.homeSlide');
$body = $('body');
$center_logo = $('img');
$barre = $(".barre_nav");

var height_slide = $(".slide").height() - 85;

$("#slide-3 .hsContent").css("height",height_slide);
$("#slide-4 .hsContent").css("height",height_slide);
$("#slide-5 .hsContent").css("height",height_slide);
$("#slide-6 .hsContent").css("height",height_slide);

function ScrollTo(pourcent , temps){
		var height_to_scroll = $window.height()/100 * pourcent;
		var speed = 1300;

		if(temps != 0 ){speed = temps;}
		scrollTop: $window.height() + 50 ;
		$('html, body').animate ( { scrollTop: height_to_scroll }, speed ); // Go
		return false;
}

function blink(){
	$(".clignotement").animate({opacity:0},700).animate({opacity:1}, 700);
	setTimeout("blink()",1400);
}

function matrixToArray(str) {
  return str.match(/(-?[0-9\.]+)/g);
}

function Animation_SE_prgm(){

  	var window_height = $(window).height();
	var scrollTop = $(window).scrollTop();
	var position_pourcentage = scrollTop / window_height * 100;

	/* Verification si continue de clignoter (ou pas) */

	if ($window.scrollTop() == 0){$(".JS_clignote").addClass("clignotement");}
	else{$(".JS_clignote").removeClass("clignotement");}


	/*Empeche le scale quand on remonte le scroll */

	var matrix1 = $("#scale_1").css("transform");
	var matrix2 = $("#scale_2").css("transform");
	var matrix3 = $("#scale_3").css("transform");
	var array1 = matrixToArray(matrix1);
	var array2 = matrixToArray(matrix2);
	var array3 = matrixToArray(matrix3);
	var scale1 = array1[0];
	var scale2 = array2[0];
	var scale3 = array3[0];


	if(scale1 == 1){
		$('#scale_1').addClass('no_scall_back');
	}
	if( $('#scale_1').hasClass('no_scall_back') && position_pourcentage < 135){
		$('#scale_1').removeClass('no_scall_back');
	}

	if(scale2 == 1){
		$('#scale_2').addClass('no_scall_back');
	}
	if( $('#scale_2').hasClass('no_scall_back') && position_pourcentage < 135){
		$('#scale_2').removeClass('no_scall_back');
	}

	if(scale3 == 1){
		$('#scale_3').addClass('no_scall_back');
	}
	if( $('#scale_3').hasClass('no_scall_back') && position_pourcentage < 135){
		$('#scale_3').removeClass('no_scall_back');
	}

}

function Animation_bars_Navigation(){

  	var window_height = $(window).height();
	var scrollTop = $(window).scrollTop();
	var position_pourcentage = scrollTop / window_height * 100;

	var taille1_SE_menu = $('#Semaine_election').width();
	var taille2_VDP_menu = $('#Video_de_presentation').width();
	var taille3_MBR_menu = $('#Membres').width();
	var taille4_PRGM_menu = $('#Programme').width();
	var taille5_RESERV_menu = $('#Reservation').width();
	var margin_menu_elmt = $('.menu_element').css('margin-left').replace(/[^-\d\.]/g, '');

	/*Pourcentage de la moitié deanimation entre chaques slides

		Slide 2 (Programme SE avec div apparue)
		: 350p
		Slide 3 (Video)
		: 500p
		Slide 4 (Membres)
		: 1000p
		Slide 5 (Programme)
		: 1125p
		Slide 6 (Reservation)

	 */

	if( position_pourcentage < 350){ /*Semaine Election*/
		var translateX = 0 + margin_menu_elmt;  /*Margin compris + 6px de correction*/
		var width = taille1_SE_menu;
		$barre.css("transform" , "translateX("+ translateX + "px)" );
		$barre.css("width",width);
	}
	else if( position_pourcentage >= 350 && position_pourcentage < 500){	/*Video de Présentation*/
		var translateX = taille1_SE_menu + 3* margin_menu_elmt + 6 ;
		var width = taille2_VDP_menu;
		$barre.css("transform","translateX("+ translateX + "px)");
		$barre.css("width",width);
	}
	else if(  position_pourcentage >= 500 && position_pourcentage < 1000){	/*Membre*/
		var translateX = taille1_SE_menu + taille2_VDP_menu + 5 * margin_menu_elmt + 12 ;
		var width = + taille3_MBR_menu;
		$barre.css("transform","translateX("+ translateX + "px)");
		$barre.css("width",width);
	}
	else if( position_pourcentage >= 1000 && position_pourcentage < 1125){	/*Programme*/
		var translateX = taille1_SE_menu + taille2_VDP_menu + taille3_MBR_menu + 7 * margin_menu_elmt +18 ;
		var width = taille4_PRGM_menu;
		$barre.css("transform","translateX("+ translateX + "px)");
		$barre.css("width",width);
	}
	else if(  position_pourcentage >= 1125 ){	/*Reservation*/
		var translateX = taille1_SE_menu + taille2_VDP_menu + taille3_MBR_menu + taille4_PRGM_menu + 9 * margin_menu_elmt +24;
		var width = taille5_RESERV_menu;
		$barre.css("transform","translateX("+ translateX + "px)");
		$barre.css("width",width);
	}

	/*Autre utilisant aussi position_pourcentage pr l'animation bcg du slide 5*/
	if( position_pourcentage < 1051 || position_pourcentage > 1099){
		$("#slide-5 .bcg").css("transition-duration","0s");
	}

}

function transateX(dom,pourcent){
	dom.css("transform","translateX("+ pourcent + "%)")
}

function CloseOpenIntitule(){

	$intitule_ferme.removeClass("intitule_ouvert");
	$content_ferme.removeClass("content_ouvert");
	$intitule_ouvert.addClass("intitule_ouvert");
	$content_ouvert.addClass("content_ouvert");
}

function CloseOpenPrgm(){


	if($titre_ferme.hasClass("titre_ouvert")){
		$titre_ferme.removeClass("titre_ouvert");
		$titre_ouvert.removeClass("titre_ferme");
		$prgm_ferme.removeClass("prgm_ouvert");
	}

	if($titre_ouvert.hasClass("titre_ouvert") && $titre_ferme.hasClass("titre_ferme")){
		$("#slide-5 .bcg").css("transform","translateX(0vw) scale(1.15)");
		$titre_ouvert.removeClass("titre_ouvert");
		$titre_ferme.removeClass("titre_ferme");
		$prgm_ouvert.removeClass("prgm_ouvert")
	}
	else{
		$titre_ouvert.addClass("titre_ouvert");
		$titre_ferme.addClass("titre_ferme");
		$prgm_ouvert.addClass("prgm_ouvert");
	}
}

/*Action Event*/

$(window).scroll(function(){
	Animation_SE_prgm();
	Animation_bars_Navigation();
})

$(".Box_event").click(function() {
	$Box = $(this);
	if($Box.hasClass("retourne")){
		$Box.removeClass("retourne");
	}
	else{
		$Box.addClass("retourne");
	}
});

$("#Prgm_D .titre_prgm").click(function(){
	$titre_ouvert = $("#Prgm_D .titre_prgm");
	$titre_ferme = $("#Prgm_G .titre_prgm");
	$prgm_ouvert = $("#Prgm_D .detail_prgm");
	$prgm_ferme = $("#Prgm_G .detail_prgm");
	$("#slide-5 .bcg").css("transition","0.8s ease");
	$("#slide-5 .bcg").css("transform","translateX(2vw) scale(1.15)");
	CloseOpenPrgm();
});

$("#Prgm_G .titre_prgm").click(function(){
	$titre_ouvert = $("#Prgm_G .titre_prgm");
	$titre_ferme = $("#Prgm_D .titre_prgm");
	$prgm_ouvert = $("#Prgm_G .detail_prgm");
	$prgm_ferme = $("#Prgm_D .detail_prgm");
	$("#slide-5 .bcg").css("transition","0.8s ease");
	$("#slide-5 .bcg").css("transform","translateX(-2vw) scale(1.15)");
	CloseOpenPrgm();
});

$("#Prgm_G .intitule").click(function(){
	$intitule_ouvert = $(this);
	var index_intitule = $intitule_ouvert.index();
	$content_ouvert = $("#Prgm_G .content_intitule").eq(index_intitule);
	$intitule_ferme = $("#Prgm_G .intitule_ouvert");
	$content_ferme = $("#Prgm_G .content_ouvert");
	CloseOpenIntitule();
});

$("#Prgm_D .intitule").click(function(){
	$intitule_ouvert = $(this);
	var index_intitule = $intitule_ouvert.index();
	$content_ouvert = $("#Prgm_D .content_intitule").eq(index_intitule);
	$intitule_ferme = $("#Prgm_D .intitule_ouvert");
	$content_ferme = $("#Prgm_D .content_ouvert");
	CloseOpenIntitule();
});

/*Animation Reservation*/

//petit dej
$("#next_1").click(function(){
	var dom = $("#slider_1");
	var pourcent = -50;
 	transateX(dom,pourcent);
});

$("#last_1").click(function(){
	var dom = $("#slider_1");
	var pourcent = 0;
 	transateX(dom,pourcent);
});

//Fort Boyard

$("#next_2").click(function(){
	var dom = $("#slider_2");
	var pourcent = -20;
 	transateX(dom,pourcent);
});

$("#last_2").click(function(){
	var dom = $("#slider_2");
	var pourcent = 0;
 	transateX(dom,pourcent);
});

$("#next_3").click(function(){
	var dom = $("#slider_2");
	var pourcent = -40;
 	transateX(dom,pourcent);
});

$("#last_3").click(function(){
	var dom = $("#slider_2");
	var pourcent = -20;
 	transateX(dom,pourcent);
});

$("#last_4").click(function(){
	var dom = $("#slider_2");
	var pourcent = -40;
 	transateX(dom,pourcent);
});

$("#next_4").click(function(){
	var dom = $("#slider_2");
	var pourcent = -60;
 	transateX(dom,pourcent);
});

$("#last_5").click(function(){
	var dom = $("#slider_2");
	var pourcent = -60;
 	transateX(dom,pourcent);
});

$("#next_5").click(function(){
	var dom = $("#slider_2");
	var pourcent = -80;
 	transateX(dom,pourcent);
});

$( document ).ready(function() {
    $(".menu").css("opacity","1");
    blink();
});

//désactiver la tabulation
jQuery('.noTab').find('input,select,textarea').keydown(function (e) {
    if (e.which === 9) {
        return false;
    }
});
