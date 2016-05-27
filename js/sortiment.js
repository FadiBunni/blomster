$(function() {
  //if javascript is activated.
  $('#Slide_Menu').show();
  $(".Mid_Content h1").text('Forside');
  //if javascript is activated.

  $("#Slide_Menu ul ul").hide();

  $("#Slide_Menu > ul > li > a").click(function(){

    //onclick slide everything up
    $("#Slide_Menu ul ul").slideUp();

    //if not visible, slidedown.
    if(!$(this).next().is(":visible")) {
     $(this).next().slideDown();
  }

  //get the text from a tag, and put it in the h1 tag.
  $(".Mid_Content h1").text($(this).text());

  // add color to the a tag
  $("a").removeClass("Selected");
  $(this).addClass("Selected");

  $(".Left_Sub_Nav > li > a").click(function(){
    //get the old text from a tag, and get the new text and add it in the h1 tag.
  	$(".Mid_Content h1").text($(this).parents("ul").prev().text());
  	$(".Mid_Content h1").append(" > "+$(this).text());

    // add color to the nested a tag
    $(".Left_Sub_Nav > li > a").removeClass("Selected");
    $(this).addClass("Selected");
  });
 });
});