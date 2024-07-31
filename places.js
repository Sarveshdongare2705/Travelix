function getParameterByName(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}

const category = getParameterByName('category');

function displayContentForCategory(category) {
    const contentContainer = document.querySelector('.dynamic-boxes');

    contentContainer.innerHTML = '';

    const categoryContent = {
        adventure: [
            { title: 'QueensTown', location: 'NewZealand', image: 'images/QueensTown.jpg' },
            { title: 'Arenal', location: 'Costa Rica', image: 'images/Arenal.jpg' },
            { title: 'Interlaken', location: 'Switzerland', image: 'images/Interlaken.jpg' },
            { title: 'ChiangMai', location: 'Thailand', image: 'images/ChiangMai.jpg' },
            { title: 'GreatBarrier', location: 'Australia', image: 'images/GreatBarrier.jpg' },
            { title: 'Bali', location: 'Indonesia', image: 'images/Bali.jpg' },
            { title: 'Cairns', location: 'Australia', image: 'images/Cairns.jpg' },
            { title: 'Santorini', location: 'Greece', image: 'images/Santorini.jpg' },
            { title: 'AmalfiCoast', location: 'Italy', image: 'images/AmalfiCoast.jpg' },
            { title: 'Antelope', location: 'USA', image: 'images/Antelope.jpg' },
            { title: 'Corisca', location: 'France', image: 'images/Corisca.jpg' },
            { title: 'Pamukkale', location: 'Turkey', image: 'images/Pamukkale.jpg' },
        ],
        cultural: [
            { title: 'Kyoto', location: 'Japan', image: 'images/Kyoto.jpg' },
            { title: 'Varanasi', location: 'India', image: 'images/Varanasi.png'},
            { title: 'Luxor', location: 'Egypt', image: 'images/Luxor.jpg' },
            { title: 'Cairo', location: 'Egypt', image: 'images/Cairo.jpg' },
            { title: 'Rome', location: 'Italy', image: 'images/Rome.jpg' },
            { title: 'Fez', location: 'Morocco', image: 'images/Fez.jpg' },
            { title: 'Jerusalem', location: 'Israel', image: 'images/Jerusalem.jpeg' },
            { title: 'Athens', location: 'Greece', image: 'images/Athens.jpeg' },
            
        ],
        beachgateways: [
            { title: 'Copacabana', location: 'RioDeJanerio', image: 'images/Copacabana.jpg' },
            { title: 'BondiBeach', location: 'Sydney', image: 'images/BondiBeach.jpg' },
            { title: 'BagaBeach', location: 'Goa/India', image: 'images/BagaBeach.jpg' },
            { title: 'CalanguteBeach', location: 'Goa/India', image: 'images/CalanguteBeach.jpg' },
            { title: 'AnjunaBeach', location: 'GoaIndia', image: 'images/AnjunaBeach.jpg' },
            { title: 'PhuketBeaches', location: 'Thailand', image: 'images/PhuketBeaches.jpg' },
            { title: 'Barceloneta', location: 'Spain', image: 'images/Barceloneta.jpg' },
            { title: 'Tamarin', location: 'Mauritius', image: 'images/Tamarin.jpg' },
            { title: 'ElephantBeach', location: 'HavelockIsland', image: 'images/ElephantBeach.jpg' },
            
        ],
        wildlifesafaris: [
            { title: 'SerengetiSafari', location: 'Tanzania', image: 'images/SerengetiSafari.jpg' },
            { title: 'KrugerNatPark', location: 'SouthAfrica', image: 'images/KrugerNatPark.jpg' },
            { title: 'ChobeNatPark', location: 'Botswana', image: 'images/ChobeNatPark.jpg' },
            { title: 'Ranthambhore', location: 'India', image: 'images/Ranthambhore.jpg' },
            { title: 'Yellowstone', location: 'USA', image: 'images/Yellowstone.jpg' },
            { title: 'AmazonSafari', location: 'SouthAmerica', image: 'images/AmazonSafari.jpg' },
            { title: 'NamibDesert', location: 'Namibia', image: 'images/NamibDesert.jpg' },
            { title: 'KomodoIsland', location: 'Indonesia', image: 'images/KomodoIsland.jpg' },
            { title: 'Sunderbans', location: 'India/Ban', image: 'images/Sunderbans.jpg' },
            { title: 'VolcanoesPark', location: 'Uganda', image: 'images/VolcanoesPark.jpg' },
            { title: 'Tadoba', location: 'India', image: 'images/Tadoba.jpg' },
            
            
        ],
        winterescapes: [
            { title: 'Revkjavik', location: 'Iceland', image: 'images/Revkjavik.jpg' },
            { title: 'Hokkaido', location: 'Japan', image: 'images/Hokkaido.jpg' },
            { title: 'Banff', location: 'Canada', image: 'images/Banff.jpg' },
            { title: 'Zermatt', location: 'Switzerland', image: 'images/Zermatt.jpg' },
            { title: 'Rovaniemi', location: 'Finland', image: 'images/Rovaniemi.jpg' },
            
        ],
        cityexplorations: [
            { title: 'Paris', location: 'France', image: 'images/Paris.jpg' },
            { title: 'NewYork', location: 'USA', image: 'images/NewYork.jpg' },
            { title: 'Mumbai', location: 'India', image: 'images/Mumbai.jpg' },
            { title: 'CapeTown', location: 'SouthAfrica', image: 'images/CapeTown.jpg' },
            { title: 'Istanbul', location: 'Turkey', image: 'images/Istanbul.jpg' },
            { title: 'Pune', location: 'India', image: 'images/Pune.jpg' },
            { title: 'Prague', location: 'CzechRepublic', image: 'images/Prague.jpg' },
            { title: 'Bangkok', location: 'Thailand', image: 'images/Bangkok.jpg' },
            { title: 'Sydney', location: 'Australia', image: 'images/Sydney.jpg' },
            { title: 'SanFrancisco', location: 'USA', image: 'images/SanFrancisco.jpg' },
            { title: 'Barcelona', location: 'Spain', image: 'images/Barcelona.jpg' },
            { title: 'Dubai', location: 'UAE', image: 'images/Dubai.jpg' },
            { title: 'RioDeJanerio', location: 'Brazil', image: 'images/RioDeJanerio.jpg' },
            { title: 'Amsterdam', location: 'Netherlands', image: 'images/Amsterdam.jpg' },
            { title: 'Vienna', location: 'Austria', image: 'images/Vienna.jpg' },
            { title: 'Venice', location: 'Italy', image: 'images/Venice.jpeg' },
            { title: 'Havana', location: 'Cuba', image: 'images/Havana.jpg' },
        ],
        wondersofworld: [
            { title: 'GreatWall', location: 'China', image: 'images/GreatWall.jpg' },
            { title: 'Petra', location: 'Jordan', image: 'images/Petra.jpg' },
            { title: 'ChristdeRedemeer', location: 'RioDeJanerio', image: 'images/ChristdeRedemeer.jpg' },
            { title: 'MachuPicchu', location: 'Peru', image: 'images/MachuPicchu.jpg' },
            { title: 'ChichenItza', location: 'Mexico', image: 'images/ChichenItza.jpg' },
            { title: 'RomanColosseum', location: 'Italy', image: 'images/RomanColosseum.jpg' },
            { title: 'TajMahal', location: 'India', image: 'images/TajMahal.jpg' }, 
        ],
    };

    if (category && categoryContent.hasOwnProperty(category)) {
        const places = categoryContent[category];
        places.forEach(place => {
            const box = document.createElement('div');
            box.classList.add('box');
            box.innerHTML = `
                

            <div class="image">
                <img src="${place.image}" alt="${place.title}">
            </div>
            <div class="content">
                <div class="location">
                    <div class = "location_name">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>${place.location}</span>
                    </div>
                    <div class = "rating">
                    </div>
                </div>
                <h3>${place.title}</h3>
                <div class = "book">
                <p>$1200</p>
                <a href="book.php" class="btn book-now" data-title="${place.title}" data-location="${place.location}">Book Now</a>
                </div>
            </div>
            `;
            contentContainer.appendChild(box);
        });
    }
}

displayContentForCategory(category);

// Add an event listener to handle button clicks
const bookButtons = document.querySelectorAll('.book-now');
bookButtons.forEach(button => {
    button.addEventListener('click', handleBookButtonClick);
});

// Function to handle button click
function handleBookButtonClick(event) {
    event.preventDefault();

    const destination = event.target.getAttribute('data-title');
    const country = event.target.getAttribute('data-location');

    // Redirect to book.html and pass destination and country as query parameters
    window.location.href = `book.php?destination=${destination}&country=${country}`;
}
