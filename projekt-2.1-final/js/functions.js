//loader
  function loader() {
    var myVar;
      myVar = setTimeout(showPage, 1000);
  }
  function showPage() {
    $("#loader").css("display", "none");
    $("#show-page").css("display", "block");
  }
  $(window).on("load",function(){
loader();
});

//navigationsbarens burger menu
$(document).ready(function(){
  $("#sectionOne").removeClass("hide");
  $("#hamburger").click(function(){
      var x = $("#myTopnav");
      if ($(x).hasClass("topnav")){
          $(x).toggleClass("responsive");
      } else {
          $(x).hasClass("topnav");
      }
});

$('#standby').css("display","none");

$( '#close-modal' ).on('click',function() {
    $( '#modal-box' ).addClass('no-ty');
    $('#standby').css("display","block");
});
$( '#standby' ).on('click',function() {
  $( '#modal-box' ).removeClass('no-ty');
  $('#standby').css("display","none");
});

  $( ".flip-container"  ).on('click',function() {
    if ($(this).find("div.back")){
    $(this).find("div.back").toggleClass("showup");
  }
  });

    $( "#submit"  ).on('click',function() {
      $( ".success" ).css("display","block");
    });
    if ($( "div"  ).hasClass("success")) {
      $( this ).css("display","none");
    }
    $( ".validation-box"  ).on('click',function() {
        $( ".validation-box" ).fadeOut(400);
    });


//scroll funktion for navigationsbaren
$(window).scroll(function() {

if($(document).scrollTop()) {
$(".logo-nav-sm").css('opacity', '0.5');
  }else {
$(".logo-nav-sm").css('opacity', '1');

  }






      var sectOne = $("#sectionOne");
      var sectTwo = $("#sectionTwo");
      var sectThree = $("#sectionThree");
      var sectFour = $("#sectionFour");

    	if($(document).scrollTop() > $("header").offset().top - 400) {


            $("#topbtn").css("display", "block");
        }
      if($(document).scrollTop() > $(sectOne).offset().top - 100) {
        $("#arrowOne").addClass('draw');
      }
      if($(document).scrollTop() > $(sectTwo).offset().top - 400) {
              $(sectTwo).removeClass("hide");
          }
      if($(document).scrollTop() > $(sectTwo).offset().top) {
            $("#arrowTwo").addClass('draw');
      }
      if($(document).scrollTop() > $(sectThree).offset().top - 400) {
              $(sectThree).removeClass("hide");
      }
      if($(document).scrollTop() > $(sectThree).offset().top) {
            $("#arrowThree").addClass('draw');
      }
      if($(document).scrollTop() > $(sectFour).offset().top - 400) {
                  $(sectFour).removeClass("hide");
      }
     });
//til top knappen
  $( "#topbtn" ).click(function() {
    $(document).scrollTop(0);
  });
});
