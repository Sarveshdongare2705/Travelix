const apikey = "-5N_6OBFktteqs3zfyqCp1Wj-rwTmuYBw9JTZRxeScY";
const formel = document.querySelector(".image-form")
const inputel = document.getElementById("search-input")
const searchresults = document.querySelector(".search-results")
const showmore = document.getElementById("show-more")
let inputdata = ""
let page = 1;
async function searchImages() {
    inputdata = inputel.value;
    const url = `https://api.unsplash.com/search/photos?page=${page}&query=${inputdata}&client_id=${apikey}`;
    const response = await fetch(url);
    const data = await response.json();
    const results = data.results;
    if (page == 1) {
        searchresults.innerHTML = "";
    results.map((result) => {
        const imageWrapper = document.createElement('div');
        imageWrapper.classList.add("search-result");
        const image = document.createElement('img');
        image.src = result.urls.small;
        image.alt = result.alt_description;
        imageWrapper.appendChild(image);
        searchresults.appendChild(imageWrapper);});
    page++;
    if (page > 1) {
        showmore.style.display = "block";}}
formel.addEventListener("submit",(event) =>{
    event.preventDefault()
    page = 1;
    searchImages()})
showmore.addEventListener("click",(event) =>{
    searchImages()})