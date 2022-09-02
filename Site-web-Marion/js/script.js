// Id's page 'index'
var check = document.getElementById("check");
var homeProtect = document.getElementById("homeProtect");
var justice = document.getElementById("justice");
var tabIds = [check,homeProtect,justice];
var img = document.getElementsByClassName("img-zone");
var squareContent = document.getElementsByClassName("bloc-contenu");

// Id's page 'qui suis je'
var biography = document.getElementById("biography");
var blocImgBio = document.getElementById("blocImgBio");
var contactBio = document.getElementById("contactBio");

// Id's 'page contact'
var titleAnim = document.getElementById("titleAnim");
var paragAnim = document.getElementById("paragAnim");
var coord = document.getElementById("coord");
var horaires = document.getElementById("horaires");

// * pages
var underNav = [document.getElementById("underNav"),document.getElementById("underNav2"),document.getElementById("underNav3")];

// event document on hover

document.addEventListener('mouseover',function(e){
  if(e.target && e.target.id == 'linkNav1'){
    underNav[0].style.visibility = 'visible';
    underNav[0].classList.add('animation-underline-nav');
    underNav[0].classList.remove('remove-animation-underline-nav');
  }
  else{
    underNav[0].classList.add('remove-animation-underline-nav');
    underNav[0].classList.remove('animation-underline-nav');
  }
  if(e.target && e.target.id == 'linkNav2'){
    underNav[1].style.visibility = 'visible';
    underNav[1].classList.add('animation-underline-nav');
    underNav[1].classList.remove('remove-animation-underline-nav');
  }
  else{
    underNav[1].classList.add('remove-animation-underline-nav');
    underNav[1].classList.remove('animation-underline-nav');
  }
  if(e.target && e.target.id == 'linkNav3'){
    underNav[2].style.visibility = 'visible';
    underNav[2].classList.add('animation-underline-nav');
    underNav[2].classList.remove('remove-animation-underline-nav');
  }
  else{
    underNav[2].classList.add('remove-animation-underline-nav');
    underNav[2].classList.remove('animation-underline-nav');
  }
});

let scrollProgress = document.getElementById("progress");


// event document on scroll
document.addEventListener('scroll', function()
{

  // progress circle

  if(check != null && homeProtect != null && justice != null){
    let pos = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.clientHeight + 300;
    let scrollValue = Math.round( pos * 100 / calcHeight);
    scrollProgress.style.background = 'conic-gradient(black '+scrollValue+'%, grey '+scrollValue+'%)';
  }
  else{
    let pos = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.clientHeight - 200;
    let scrollValue = Math.round( pos * 100 / calcHeight);
    scrollProgress.style.background = 'conic-gradient(black '+scrollValue+'%, grey '+scrollValue+'%)';
  }
  

  if(window.scrollY >0)
  {
    // page 'contact' animations
    if(titleAnim != null && paragAnim != null){
      titleAnim.classList.add("animation-form-header");
      paragAnim.classList.add("animation-form-header-para");
  }
  }
  if (window.scrollY > 100)
  {   
    // page 'index' animations 
    if(check != null && homeProtect != null && justice != null)
    {
        for (i = 0; i < tabIds.length; i++){
            tabIds[i].style.display = 'flex';
        }
        check.classList.add('anim-left');
        check.classList.remove('remove-anim-left');
        homeProtect.classList.add('anim-up');
        homeProtect.classList.remove('remove-anim-up');
        justice.classList.add('anim-right');
        justice.classList.remove('remove-anim-right');
    }
    // page 'qui suis je' animations
    if(biography != null && blocImgBio != null && contactBio != null)
    {
        biography.classList.add('animation-biography');
        blocImgBio.classList.add('animation-bloc-image-bio');
        contactBio.classList.add('animation-contact-bio');
    }
  }   
  else
  {
    if(check != null && homeProtect != null && justice != null){
      check.classList.add('remove-anim-left');
      check.classList.remove('anim-left');
      homeProtect.classList.add('remove-anim-up');
      homeProtect.classList.remove('anim-up');
      justice.classList.add('remove-anim-right');
      justice.classList.remove('anim-right');
    }
    
  }
  if(window.scrollY > 350){
    if(coord != null && horaires != null)
    {
      coord.classList.add("animation-coord");
      horaires.classList.add("animation-horaires");
    }
  }
  if (window.scrollY > 500)
  { 
    // page 'index' animations
    if(squareContent.length > 0)
    {
      squareContent[0].classList.add("bloc-contenu-animation");
      squareContent[1].classList.add("bloc-contenu-animation2"); 
    }  
  }
});