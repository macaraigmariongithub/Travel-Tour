 //Nav-bar //

let = menu = document.querySelector('#menu-bars');
let = navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

 // Theme-toggler//

let themeToggler = document.querySelector('.theme-toggler');
let toggleBtn = document.querySelector('.toggle-btn');

toggleBtn.onclick = () =>{
  themeToggler.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    themeToggler.classList.remove('active');
}

document.querySelectorAll('.theme-toggler .theme-btn').forEach(btn =>{
  
    btn.onclick = () =>{
      let color = btn.style.background;
      document.querySelector(':root').style.setProperty('--main-color', color);
    }
  
});

 // Home //

var swiper = new Swiper(".home-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredslides: true,
    slidespreview: "auto",
    coverflowEffect:{
        rotate: 0,
        stretch: 0,
        depth:100,
        modifier:2,
        slideShow:true,
    },
    loop: true,
    autoplay:{
        delay:3000,
        disableOnInteraction:false,
    }

  });

  // load-more //

  let loadMoreBtn = document.querySelector('.package .load-more .btn');
  let currentItem = 3;

  loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.package .box-container .box')];
    for (var i = currentItem; i < currentItem + 3; i++){
       boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
       loadMoreBtn.style.display = 'none';
    }
 }

 // Review //

 var swiper = new Swiper(".review-slider", {
    slidesPerView: 1,
    grabCursor: true,
    loop:true,
    spaceBetween: 10,
    breakpoints: {
      0: {
          slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1050: {
        slidesPerView: 3,
      },    
    },
    autoplay:{
      delay: 5000,
      disableOnInteraction:false,
  }
});

//scroll top//

let scrollTop = document.querySelector(".scroll-top");

window.addEventListener("scroll", () => {
    scrollTop.classList.toggle("scroll-active", window.scrollY > 0);
});