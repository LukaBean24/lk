import "./bootstrap";
import "./order";

// Register Radios
document.getElementById("person_radio").onclick = function () {
    document.getElementById("company_name").style.display = "none";
    document.getElementById("customer_id").innerHTML = "პირადი ნომერი";
};

document.getElementById("company_radio").onclick = function () {
    document.getElementById("company_name").style.display = "flex";
    document.getElementById("customer_id").innerHTML = "საიდენტიფიკაციო ნომერი";
    document.getElementById("customer_last").innerHTML = "დირექტორის გვარი";
    document.getElementById("customer_name").innerHTML = "დირექტორის სახელი";
};
// flash message

setTimeout(() => {
    document.getElementById("message").style.opacity = 0;
    document.getElementById("message").style.right = "-300px";
}, 2000);

const carouselSlide = document.querySelector(".carousel-slide");
const carouselImages = document.querySelectorAll(".carousel-slide img");

//buttons

const prevBtn = document.querySelector("#prevBtn");
const nextBtn = document.querySelector("#nextBtn");
//counter

let counter = 1;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = "translateX(" + -size * counter + "px)";
//button listeners

nextBtn.addEventListener("click", () => {
    if (counter >= carouselImages.length - 1) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter++;
    carouselSlide.style.transform = "translateX(" + -size * counter + "px)";
});
prevBtn.addEventListener("click", () => {
    if (counter <= 0) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter--;
    carouselSlide.style.transform = "translateX(" + -size * counter + "px)";
});

carouselSlide.addEventListener("transitionend", () => {
    if (carouselImages[counter].id === "lastClone") {
        carouselSlide.style.transition = "none";
        counter = carouselImages.length - 2;
        carouselSlide.style.transform = "translateX(" + -size * counter + "px)";
    }
    if (carouselImages[counter].id === "firstClone") {
        carouselSlide.style.transition = "none";
        counter = carouselImages.length - counter;
        carouselSlide.style.transform = "translateX(" + -size * counter + "px)";
    }
});
