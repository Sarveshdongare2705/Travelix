<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    <link rel="stylesheet" href = "weather.css">
</head>
<body>
    <div class="header">
        <span id="h1" ><b><span class="w">W</span>eatherly</b></span>
        <div>
            <input type="text" id="input"  placeholder="Enter city name">
            <button id="search">Search</button>
        </div>
    </div>
    
    <main>
        <div class="weather">
            <h2 id="city">
               <span id="cityname">Mumbai</span> 
               <span id="countryname">India</span> 
            </h2>
            <div class="temp-box">
                <img src="images/weathericon.png" alt="error" id="img">
                <p id="temp">- </p><span class="c">°F</span>
                <pre>      </pre>
                <span id="currentday" class="c">-</span>
            </div>
            <h2 class="city">
                <span id="text">_</span>
            </h2>
            <div class="next">
                <p>KELVIN</p>
                <span class="t"><span id="kelvin">0</span><p>K</p></span>
            </div>
            <div class="next">
                <p>CELSIUS</p>
                <span class="t"><span id="fahrenheit">0</span><p>°C</p></span>
            </div>
        </div>
        <div class="divider1"></div>
        <div class="forecast">
            <br>
            <span class="cast-header">Further weather details</span>
            <div class="templist">
                <div class="next">
                    <div>
                        
                        <p>visibility</p>
                    </div>
                    <span  class="t"><p id="visibility">0</p>km</span>
                </div>

                <div class="next">
                    <div>
                        
                        <p>pressure</p>
                    </div>
                    <span class="t"><p id="pressure">0</p>mb</span>
                </div>

                <div class="next">
                    <div>
                        
                        <p>humidity</p>
                    </div>
                    <span class="t"><p id="humidity">0</p>%</span>
                </div>

                <div class="next">
                    <div>
                        
                        <p>wind chill</p>
                    </div>
                    <span  class="t"><p id="wind_chill">0</p>°F</span>
                </div>

                <div class="next">
                    <div>
                        
                        <p>wind direction/speed</p>
                    </div>
                    <span  class="t"><p id="wind_direction">-</p></span>
                    <span  class="t"><p id="wind_speed">0</p>kph</span>
                </div>

                <div class="next">
                    <div>
                        
                        <p>sunrise</p>
                    </div>
                    <span class="t"><p id="sunrise">-</p></span>
    
                </div>
                <div class="next">
                    <div>
                        
                        <p>sunset</p>
                    </div>
                    <span  class="t"><p id="sunset">-</p></span>
                </div>
        </div>
    </div>
    <div class="week">
        <div class="next4">
            <div class="form">
            <div id="day1">-</div>
            </div>
            <div class="form">
            <div id="high1">-</div>
            </div>
            <div class="form">
            <div id="low1">-</div>
            </div>
            <div class="form">
            <div id="nextext1">-</div>
            </div>
        </div>
        <div class="next4">
            <div class="form">
            <div id="day2">-</div>
            </div>
            <div class="form">
            <div id="high2">-</div>
            </div>
            <div class="form">
            <div id="low2">-</div>
            </div>
            <div class="form">
            <div id="nextext2">-</div>
            </div>
        </div>
        <div class="next4">
            <div class="form">
            <div id="day3">-</div>
            </div>
            <div class="form">
            <div id="high3">-</div>
            </div>
            <div class="form">
            <div id="low3">-</div>
            </div>
            <div class="form">
            <div id="nextext3">-</div>
            </div>

        </div>
        <div class="next4">
            <div class="form">
            <div id="day4">-</div>
            </div>
            <div class="form">
            <div id="high4">-</div>
            </div>
            <div class="form">
            <div id="low4">-</div>
            </div>
            <div class="form">
            <div id="nextext4">-</div>
            </div>

        
    </div>
    <script src="weather.js"></script>
    
</body>
</html>