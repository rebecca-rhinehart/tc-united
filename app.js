var bio = document.querySelectorAll('.staff-member .bio-paragraph')[0];
var staffButton = document.querySelectorAll('.staff-member .staff-button')[0];
var staffImage = document.querySelectorAll('.staff-member img')[0];
var content = document.querySelectorAll('.content')[0];

// staffButton.addEventListener('click', function() {
//     bio.classList.toggle('clicked');
//     staffImage.classList.toggle('active');
//     content.style.opacity ="0";
//     //content.style.width ="0";
// })

document.querySelectorAll('.staff-button').forEach(function(item) {
    var bio = document.querySelectorAll('.bio-paragraph');
    item.addEventListener('click', function() {
        bio.forEach(function(item1) {
            item1.classList.toggle('clicked')
        })
    })
})



var menuBtn =  
document.querySelector(".menu-btn"); 

var menu =  
document.querySelector(".menu"); 

var menuNav =  
document.querySelector(".menu-nav"); 

var menuBranding =  
document.querySelector(".menu-branding"); 

var navItems =  
document.querySelectorAll(".nav-item"); 

// Set the initial state of the menu 
let showMenu = false; 

function toggleMenu() { 
  if (!showMenu) { 
      menuBtn.classList.add("close"); 
      menu.classList.add("show"); 
      menuNav.classList.add("show"); 
      menuBranding.classList.add("show"); 
      navItems.forEach((item) => 
          item.classList.add("show")); 

      // Reset the menu state 
      showMenu = true; 
  } else { 
      menuBtn.classList.remove("close"); 
      menu.classList.remove("show"); 
      menuNav.classList.remove("show"); 
      menuBranding.classList.remove("show"); 
      navItems.forEach((item) => item.classList.remove("show")); 
    
      // Reset the menu state 
      showMenu = false; 
    } 
} 
menuBtn.addEventListener("click", toggleMenu); 

function includeHTML() {
    var z, i, elmnt, file, xhttp;
    /* Loop through a collection of all HTML elements: */
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
      elmnt = z[i];
      /*search for elements with a certain atrribute:*/
      file = elmnt.getAttribute("w3-include-html");
      if (file) {
        /* Make an HTTP request using the attribute value as the file name: */
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4) {
            if (this.status == 200) {elmnt.innerHTML = this.responseText;}
            if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
            /* Remove the attribute, and call this function once more: */
            elmnt.removeAttribute("w3-include-html");
            includeHTML();
          }
        }
        xhttp.open("GET", file, true);
        xhttp.send();
        /* Exit the function: */
        return;
      }
    }
  }

  $('.owl-carousel').owlCarousel({
    loop:true,
    //margin:64,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        // 600:{
        //     items:3
        // },
    },
    // autoplay:true,
    // autoplayTimeout:3500,
    // autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

