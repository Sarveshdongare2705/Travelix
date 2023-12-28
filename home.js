
var swiper = new Swiper(".home-slider",{
    loop:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",},
    autoplay: {
        delay: 5000, 
        disableOnInteraction: false, },});
const now = new Date();
const currentHour = now.getHours();
function getGreeting(hour) {
    if (hour >= 5 && hour < 12) {
        return "Good morning!";} else if (hour >= 12 && hour < 18) {
        return "Good afternoon!";} else {
        return "Good evening!";}}
const greetingDiv = document.getElementById("greeting");
greetingDiv.textContent = getGreeting(currentHour);
const services = [
    { image: "images/service1.png", title: "adventure" },
    { image: "images/service2.png", title: "tour guide" },
    { image: "images/service3.png", title: "trekking" },
    { image: "images/service4.png", title: "camp fire" },
    { image: "images/service5.png", title: "off road" },
    { image: "images/service7.png", title: "camping" },];
const serviceContainer = document.getElementById("service-container");
services.forEach(service => {
    const serviceBox = document.createElement("div");
    serviceBox.className = "box";
    const serviceImage = document.createElement("img");
    serviceImage.src = service.image;
    serviceImage.alt = service.title;
    const serviceTitle = document.createElement("h3");
    serviceTitle.textContent = service.title;
    serviceBox.appendChild(serviceImage);
    serviceBox.appendChild(serviceTitle);
    serviceContainer.appendChild(serviceBox);});





