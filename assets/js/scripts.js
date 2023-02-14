/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

let slideTimer = null;
let sliderAnimation = () => {
    let sliderContainer = $(".sliderContainer");
    let sliderItems = sliderContainer.find('.sliderItem');
    let activeSlide = 0;
    let timer = 2000;
    const doSlide = () => {
        if (sliderItems.length > 0) {
            sliderItems.removeClass('active');
            $(sliderItems[activeSlide]).addClass('active');
        }
        ;
    };
    doSlide();
    slideTimer = setInterval(() => {
        if (activeSlide < (sliderItems.length - 1)) {
            activeSlide++;
        } else {
            activeSlide = 0;
        }
        doSlide();

    }, timer);
};

$(document).ready(() => {
    if (slideTimer !== null)
        clearInterval(slideTimer);

    sliderAnimation();
});
