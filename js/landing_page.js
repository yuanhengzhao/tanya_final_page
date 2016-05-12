$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 300);
        return false;
      }
    }
  });
  
   $("div#backgroudpage").height($(window).height());
  
});



var comments = ["When we sold our building in Milton, which was commercial with our apartment upstairs, Tanya's husband, Aldrin, took care of the deal. He introduced us to Tanya, who jumped in with both feet ... Thank you Tanya! <br><br> <p>  Steve & Kimberly Bonin</p>",

			  "Tanya, thank you so much for helping us find our new home! You were very patient with us throughout the entire process ... We will absolutely recommend you to any of our friends in the GTA.<br><br> <p> James & Heidi Currier</p>",

			  "Thank you Tanya for all the information & guidance you provided, especially the staging ... The house sold in less than a week & for more than asking! ... Keep up the good work & my family wishes you SUCESS in all your endeavors.<br><br><p>  Ann D'souza<p>",

			  "Tanya was a pleasure to work with. Very professional and personable. Quick to understand our needs and preferences, gaining insights even we ourselves initially did not recognize. I would recommend Tanya without hesitation.<br><br><p> Robert McBean</p>",

        "WOW! Tanya is an amazing person all around. ... I came to a situation in which I needed to sell my house as quickly as possible and I honestly didn't know how I was going to do it ... I could not have asked for more, Tanya knows her stuff!!!<br><br><p> Michelle Strilive</p>",

        "Hi, just a note to say thanks for all you have done for us throughout this process. As first time buyers ... Thank you for providing the answers to many of these and giving us informed advice on the homes that we visited!<br><br><p>  By: Ann Smith</p>"];

var images = ['assert/cover.jpg','assert/InteriorPhoto.jpg','assert/house-photo.jpg' ];



window.onload = function displayContents(){
    $('#comment-information h1').html(comments[0]);
    var i = 1;
    var index =1;
    function removeff(){
            $("#bgp").attr("class", "img-responsive");
          }
    setInterval(function(){
            $('#comment-information h1').html(comments[i]).fadeIn('500').delay('8000').fadeOut('500');
            i++;
            if(i >= comments.length) 
            	i = 0;
            	
    },9000);

    setInterval(function(){
          $("#image-test").attr("src", images[index]);
          $("#bgp").attr("src", images[index]);
          $("#bgp").attr("class", "img-responsive bgpeff");      	
          setTimeout(removeff, 2000); 
                 index++;
                
                if(index >= images.length){ 
                	index = 0;
                }
    },7000); 
        

     
/*
    setInterval(function(){
          var grayImg;
              //clearTimeout(grayImg);
          $("#image-gray").attr("src", images[i]);
          $("#image-gray").fadeIn('slow');
          $("#image-gray").fadeOut('3000');
             
                 index++;
                if(index >= images.length){ 
                  index = 1;
                }
          
        },8000);
*/
};

jQuery(window).scroll(function(){
    var fromTopPx = 1; // distance to trigger
    var scrolledFromtop = jQuery(window).scrollTop();
    if(scrolledFromtop > fromTopPx){
        $('#backgroundpage').css({
		"-webkit-filter": "grayscale(100%)",
	    "-moz-filter": "grayscale(100%)",
	    "-ms-filter": "grayscale(100%)",
	    "-o-filter": "grayscale(100%)",
	    "filter": "grayscale(100%)",
	    "filter": "gray"
	    });
    }else{
        $('#backgroundpage').css({
		"-webkit-filter": "grayscale(0%)",
	    "-moz-filter": "grayscale(0%)",
	    "-ms-filter": "grayscale(0%)",
	    "-o-filter": "grayscale(0%)",
	    "filter": "grayscale(0%)",
	    "filter": "none"
	    });

    }
});
