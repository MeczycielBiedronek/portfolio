const loader = document.querySelector('.loader');
const menuItems = document.querySelectorAll('.items');
const menuColor = document.querySelector('.menuColor');
const bcg = document.querySelector('.bcg');
const content = document.querySelectorAll('.content');
const close = document.querySelector('.close');
// Loader
document.addEventListener("DOMContentLoaded", function(event) {
    loader.style.height = '0px';
    loader.style.opacity = '0';
    setTimeout(() => {
        loader.classList.add('hide');
    }, 3000);
  });
  for (let i=0; i<menuItems.length; i++ ){
    menuItems[i].addEventListener('mouseenter', ()=> {
        menuColor.style.left = `${6+((i)*190)}px`
        menuColor.style.backgroundColor = `rgb(${random(255)}, ${random(255)}, ${random(255)})`
        menuColor.classList.add('menuTrans');
        setTimeout(() => {
            menuColor.classList.remove('menuTrans');
        }, 500);
        
    });
    menuItems[i].addEventListener('click', ()=> {
        bcg.classList.add('fadeout');
        setTimeout(() => {
            content[i].classList.add('contentShow');
            console.log(content[i]);
        }, 800);
    });
    close.addEventListener('click', ()=> {
        content[i].classList.remove('contentShow');
        bcg.classList.remove('fadeout');
    })
  }

const rand = (num) => {
   let plus = Math.floor(Math.random()*2);
   if (plus == 0){ 
       return -1*Math.floor(Math.random()*num) }
   else {
       return 1*Math.floor(Math.random()*num)}
}
const random = (num) => {
        return Math.floor(Math.random()*num) 
    }
