@props(['banners','last','first'])
<div class="w-11/12 lg:w-3/5 carousel-container overflow-hidden relative">
    <button id="prevBtn" class="text-6xl text-white duration-200 hover:bg-opacity-70 w-20 h-full absolute z-10 left-0"><i class='bx bx-chevrons-left hover:text-lk-main duration-200' ></i></button>
    <button id="nextBtn" class="text-6xl text-white duration-200 hover:bg-opacity-70 w-20 h-full absolute z-10 right-0"><i class='bx bx-chevrons-right hover:text-lk-main duration-200'></i></button>
    <div class="w-full h-[500px] flex justify-start items-center carousel-slide">
        <img src="storage/{{$last->photo}}" alt="" id="lastClone" class="w-full h-full object-contain object-center">
        @foreach ($banners as $banner)
            <img src="storage/{{$banner->photo}}" alt="" class="w-full h-full object-contain object-center">
        @endforeach
        <img src="storage/{{$first->photo}}" alt="" id="firstClone" class="w-full h-full object-contain object-center">
    </div>
</div>



<script>
    const carouselSlide = document.querySelector(".carousel-slide");
const carouselImages = document.querySelectorAll(".carousel-slide img");

//buttons

const prevBtn = document.querySelector("#prevBtn");
const nextBtn = document.querySelector("#nextBtn");
//counter

let counter = 1;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";
//button listeners

nextBtn.addEventListener("click", () => {
    if (counter >= carouselImages.length - 1) return
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter++;
    carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";
});
prevBtn.addEventListener("click", () => {
    if (counter <= 0) return
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter--;
    carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";
});

carouselSlide.addEventListener("transitionend", () => {
    if (carouselImages[counter].id === "lastClone") {
        carouselSlide.style.transition = "none";
        counter = carouselImages.length - 2;
        carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";
    }
    if (carouselImages[counter].id === "firstClone") {
        carouselSlide.style.transition = "none";
        counter = carouselImages.length - counter;
        carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";
    }
});

</script>
