const url = 'https://forecast9.p.rapidapi.com/';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '68faf0f8a4msh15e0e181e60e04dp112f2cjsn65fbcfb9b25e',
		'X-RapidAPI-Host': 'yahoo-weather5.p.rapidapi.com'
	}
};

const getweather = (city) =>{
    fetch('https://yahoo-weather5.p.rapidapi.com/weather?location='+city+'&format=json&u=f' , options)
    .then(response => response.json())
    .then(response => {
        console.log(response)
    
        cityname.innerHTML = city
        countryname.innerHTML = response.location.country
        text.innerHTML = response.current_observation.condition.text
        const ftemp = response.current_observation.condition.temperature
        const ctemp = ((ftemp-32)*(5/9)).toFixed(2)
        const ktemp = parseInt(ctemp) + 273.15
        temp.innerHTML =ftemp
        kelvin.innerHTML = ktemp
	    fahrenheit.innerHTML = ctemp

        sunrise.innerHTML = response.current_observation.astronomy.sunrise
        sunset.innerHTML = response.current_observation.astronomy.sunset
        humidity.innerHTML = response.current_observation.atmosphere.humidity
        pressure.innerHTML = response.current_observation.atmosphere.pressure

        const vis = response.current_observation.atmosphere.visibility
        const visk = parseInt(vis) *1.61
        visibility.innerHTML = visk.toFixed(2)
        wind_chill.innerHTML = response.current_observation.wind.chill
        wind_direction.innerHTML = response.current_observation.wind.direction
        const mph = response.current_observation.wind.speed
        const kph = parseInt(mph)* 1.61
        wind_speed.innerHTML = kph.toFixed(2)

        currentday.innerHTML = response.forecasts[0].day

        const d1 = response.forecasts[1]
        day1.innerHTML = d1.day
        high1.innerHTML = d1.high
        low1.innerHTML = d1.low 
        nextext1.innerHTML = d1.text
        const d2 = response.forecasts[2]
        day2.innerHTML = d2.day
        high2.innerHTML = d2.high
        low2.innerHTML = d2.low 
        nextext2.innerHTML = d2.text
        const d3 = response.forecasts[3]
        day3.innerHTML = d3.day
        high3.innerHTML = d3.high
        low3.innerHTML = d3.low 
        nextext3.innerHTML = d3.text
        const d4 = response.forecasts[4]
        day4.innerHTML = d4.day
        high4.innerHTML = d4.high
        low4.innerHTML = d4.low 
        nextext4.innerHTML = d4.text
    
    
    })
    .catch(err => console.log(err));}
    
    search.addEventListener("click", (e) =>{
        e.preventDefault()
        getweather(input.value)
    })
    
    getweather('Mumbai')

