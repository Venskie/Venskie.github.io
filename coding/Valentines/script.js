const wrapper = document.querySelector(".wrapper");
const question= document.querySelector(".question");
const gif = document.querySelector(".gif");
const yesBtn = document.querySelector(".yes-btn");
const noBtn = document.querySelector(".no-btn");
const buttonWrapper = document.querySelector(".btn-group")

yesBtn.addEventListener("click", () =>{
 question.innerHTML="Aaaaaaaaaaaaaaaaaaaaaaaa";
 gif.src= "https://raw.githubusercontent.com/DzarelDeveloper/Img/main/gif.webp";

});

/* noBtn.addEventListener("mouseover", ()=>{

    const noBtnRect = noBtn.getBoundingClientRect();
    const maxX = window.innerWidth - noBtnRect.width;
    const maxY = window.innerHeight - noBtnRect.height;

    const randomX = Math.floor(Math.random() * maxX);
    const randomY = Math.floor(Math.random() * maxY);

    noBtn.style.left = randomX + "px";
    noBtn.style.top = randomY + "px";
});*/


let fontSize = 1.2;
noBtn.addEventListener("click", function(){
 fontSize *= 1.5;
 yesBtn.style.fontSize = fontSize + 'rem';
 // Adjust the wrapper width accordingly
 const currentWidth = buttonWrapper.offsetWidth;
 const newWidth = currentWidth + (currentWidth * 0.01); // Increase by 10%
 buttonWrapper.style.width = newWidth + 'px';

})