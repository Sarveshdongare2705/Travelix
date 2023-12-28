function getParameterByName(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);}
const category = getParameterByName('category');
function displayContentForCategory(category) {
    const contentContainer = document.querySelector('.dynamic-boxes');
    contentContainer.innerHTML = '';
    const categoryContent = {
        adventure: [
            { title: 'QueensTown', location: 'NewZealand', image: 'images/QueensTown.jpg' },
            { title: 'Arenal', location: 'Costa Rica', image: 'images/Arenal.jpg' },
            { title: 'Interlaken', location: 'Switzerland', image: 'images/Interlaken.jpg' },
            { title: 'Chiang Mai', location: 'Thailand', image: 'images/Chiang Mai.jpg' },
            { title: 'Great Barrier', location: 'Australia', image: 'images/Great Barrier.jpg' },
            { title: 'Bali', location: 'Indonesia', image: 'images/Bali.jpg' },
            { title: 'Cairns', location: 'Australia', image: 'images/Cairns.jpg' },
            { title: 'Santorini', location: 'Greece', image: 'images/Santorini.jpg' },
            { title: 'Amalfi Coast', location: 'Italy', image: 'images/Amalfi Coast.jpg' },
            { title: 'Corsica', location: 'France', image: 'images/Corsica.jpg' },
            { title: 'Pamukkale', location: 'Turkey', image: 'images/Pamukkale.jpg' },],
        cultural: [
            { title: 'Kyoto', location: 'Japan', image: 'images/Kyoto.jpg' },
            { title: 'Varanasi', location: 'India', image: 'images/Varanasi.jpg'},
            { title: 'Luxor', location: 'Egypt', image: 'images/Luxor.jpg' },
            { title: 'Cairo', location: 'Egypt', image: 'images/Cairo.jpg' },
            { title: 'Rome', location: 'Italy', image: 'images/Rome.jpg' },
            { title: 'Fez', location: 'Morocco', image: 'images/Fez.jpg' },
            { title: 'Jerusalem', location: 'Israel', image: 'images/Jerusalem.jpg' },
            { title: 'Athens', location: 'Greece', image: 'images/Athens.jpg' },],
        beachgateways: [
            { title: 'Copacabana', location: 'RioDeJanerio', image: 'images/Copacabana.jpg' },
            { title: 'Bondi Beach', location: 'Sydney', image: 'images/Bondi Beach.jpg' },
            { title: 'Baga Beach', location: 'Goa/India', image: 'images/Baga Beach.jpg' },
            { title: 'Calangute Beach', location: 'Goa/India', image: 'images/Calangute Beach.jpg' },
            { title: 'Anjuna Beach', location: 'GoaIndia', image: 'images/Anjuna Beach.jpg' },
            { title: 'Phuket Beaches', location: 'Thailand', image: 'images/Phuket Beaches.jpg' },
            { title: 'Barceloneta', location: 'Spain', image: 'images/Barceloneta.jpg' },
            { title: 'Tamarin', location: 'Mauritius', image: 'images/Tamarin.jpg' },
            { title: 'Elephant Beach', location: 'HavelockIsland', image: 'images/Elephant Beach.jpg' },],
        wildlifesafaris: [
            { title: 'Serengeti Safari', location: 'Tanzania', image: 'images/Serengeti Safari.jpg' },
            { title: 'Kruger Park', location: 'SouthAfrica', image: 'images/Kruger Park.jpg' },
            { title: 'Chobe Park', location: 'Botswana', image: 'images/Chobe Park.jpg' },
            { title: 'Ranthambhore', location: 'India', image: 'images/Ranthambhore.jpg' },
            { title: 'Yellowstone', location: 'USA', image: 'images/Yellowstone.jpg' },
            { title: 'Amazon Safari', location: 'SouthAmerica', image: 'images/Amazon Safari.jpg' },
            { title: 'Namib Desert', location: 'Namibia', image: 'images/Namib Desert.jpg' },
            { title: 'Komodo Island', location: 'Indonesia', image: 'images/Komodo Island.jpg' },
            { title: 'Sunderbans', location: 'India/Ban', image: 'images/Sunderbans.jpg' },
            { title: 'Volcanoes Park', location: 'Uganda', image: 'images/Volcanoes Park.jpg' },
            { title: 'Tadoba', location: 'India', image: 'images/Tadoba.jpg' },],
        winterescapes: [
            { title: 'Reykjavik', location: 'Iceland', image: 'images/Reykjavik.jpg' },
            { title: 'Hokkaido', location: 'Japan', image: 'images/Hokkaido.jpg' },
            { title: 'Banff', location: 'Canada', image: 'images/Banff.jpg' },
            { title: 'Zermatt', location: 'Switzerland', image: 'images/Zermatt.jpg' },
            { title: 'Rovaniemi', location: 'Finland', image: 'images/Rovaniemi.jpg' },],
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
            { title: 'Vienna', location: 'Austria', image: 'images/Vienna.jpeg' },
            { title: 'Venice', location: 'Italy', image: 'images/Venice.jpg' },
            { title: 'Havana', location: 'Cuba', image: 'images/Havana.jpg' },],
        wondersofworld: [
            { title: 'Great Wall', location: 'China', image: 'images/Great Wall.jpg' },
            { title: 'Petra', location: 'Jordan', image: 'images/Petra.jpg' },
            { title: 'Christ de Redemeer', location: 'RioDeJanerio', image: 'images/Christ de Redemeer.jpg' },
            { title: 'Machu Picchu', location: 'Peru', image: 'images/Machu Picchu.jpg' },
            { title: 'Chichen Itza', location: 'Mexico', image: 'images/Chichen Itza.jpg' },
            { title: 'Roman Colosseum', location: 'Italy', image: 'images/Roman Colosseum.jpg' },
            { title: 'Taj Mahal', location: 'India', image: 'images/Taj Mahal.jpg' },],};
    if (category && categoryContent.hasOwnProperty(category)) {
        const places = categoryContent[category];
        places.forEach(place => {
            const box = document.createElement('div');
            box.classList.add('box');
            box.innerHTML = `
            <div class="image">
                <img src="${place.image}" alt="${place.title}"></div>
            <div class="content">
                <div class="location">
                    <div class = "location_name">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>${place.location}</span></div>
                    <div class = "rating"></div></div>
                <h3>${place.title}</h3>
                <div class = "book">
                <p>$1200</p>
                <a href="book.php" class="btn book-now" data-title="${place.title}" data-location="${place.location}">Book Now</a>
                </div></div>`;
            contentContainer.appendChild(box);});}}
displayContentForCategory(category);
const bookButtons = document.querySelectorAll('.book-now');
bookButtons.forEach(button => {
    button.addEventListener('click', handleBookButtonClick);});
function handleBookButtonClick(event) {
    event.preventDefault();
    const destination = event.target.getAttribute('data-title');
    const country = event.target.getAttribute('data-location');
    window.location.href = `book.php?destination=${destination}&country=${country}`;}
