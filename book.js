document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const destination = urlParams.get('destination');
    const country = urlParams.get('country');
  
    if (destination) {
        const imageElement = document.querySelector('.book-image');
        imageElement.src = `images/${destination}.jpg`;
        document.getElementById('destination_name').innerHTML = `<span>${destination}</span>`;
        document.getElementById('country_name').innerHTML = `<span>${country}</span>`;
        

        document.getElementById('d').value = destination;
        document.getElementById('c').value = country;
    }
});
