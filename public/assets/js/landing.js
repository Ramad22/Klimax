const menuBar = document.querySelector(".menu-bar");
const menuNav = document.querySelector(".menu");

menuBar.addEventListener("click", ()=> {
    menuNav.classList.toggle("menu-active");
});

const navBar = document.querySelector(".navbar");
window.addEventListener("scroll", ()=>{
    console.log(window.scrollY);
    const windowPositon = window.scrollY > 0;
    navBar.classList.toggle("scrolling-active", windowPositon);
});

function pindah()
{
    document.getElementById('laporan').scrollIntoView({behavior: 'smooth'});
}
function panggilan()
{
    document.querySelector('.call-logo').classList.toggle('active');
}