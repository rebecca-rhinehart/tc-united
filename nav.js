console.log("executing");
includeHTML();

var menuBtn =  
document.querySelector(".menu-btn");

console.log(menuBtn)

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

menuBtn.addEventListener("click", function(evt) {
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
}); 