<!DOCTYPE html>
<html>
<head>
    <title>Weather</title>
</head>
<body>
    <h1>Weather in {{ $weatherData['name'] }}</h1>
    <p>Temperature: {{ $weatherData['main']['temp'] - 273.15 }}°C</p> <!-- Convert Kelvin to Celsius -->
    <p>Weather: {{ $weatherData['weather'][0]['description'] }}</p>
</body>
</html>
