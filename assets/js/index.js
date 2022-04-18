//declarations
var backImg = $(".effect-image-car")
var doc = document.documentElement; nav = document.getElementById("nav-area");

//nav effect
window.document.addEventListener('scroll', e =>{
    if(window.scrollY > 20){
        nav.classList.add("active")
    }else{
        nav.classList.remove("active")
    }
})


//car effect
backImg.css("opacity",0);
function carReveal(){
    let pos = document.getElementById("car-area");
    
    pos.addEventListener('mousemove', e =>{
        backImg.css("opacity",100);
        pos.style.setProperty('--x', (e.clientX - (backImg.offset().left) + 'px'))
        pos.style.setProperty('--y', (e.clientY - (backImg.offset().top) + 'px'))
    })

    
} carReveal();

//change car
$('img').mouseout(function(){
    let numRand = Math.floor(2 + Math.random() * 4)
    backImg.css("opacity",0);
    backImg.attr("src", `./assets/img/landing_images/car-${numRand}.png`)
})

//if resize page, update offsets
$(window).resize(carReveal())