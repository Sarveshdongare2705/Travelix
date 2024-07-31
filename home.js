
var swiper = new Swiper(".home-slider",{
    loop:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 5000, // Delay between slides in milliseconds (e.g., 3000ms = 3 seconds)
        disableOnInteraction: false, // Set to true to stop autoplay on user interaction
    },
});

//greeting
// Get the current date and time
const now = new Date();
const currentHour = now.getHours();

// Function to get the appropriate greeting
function getGreeting(hour) {
    if (hour >= 5 && hour < 12) {
        return "Good morning!";
    } else if (hour >= 12 && hour < 18) {
        return "Good afternoon!";
    } else {
        return "Good evening!";
    }
}

// Display the greeting message
const greetingDiv = document.getElementById("greeting");
greetingDiv.textContent = getGreeting(currentHour);

//change colors




// Array of service data
const services = [
    { image: "images/service1.png", title: "adventure" },
    { image: "images/service2.png", title: "tour guide" },
    { image: "images/service3.png", title: "trekking" },
    { image: "images/service4.png", title: "camp fire" },
    { image: "images/service5.png", title: "off road" },
    { image: "images/service7.png", title: "camping" },
];

// Reference to the service container
const serviceContainer = document.getElementById("service-container");

// Loop through the services array and create service boxes
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

    serviceContainer.appendChild(serviceBox);
});





