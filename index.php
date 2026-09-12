<?php
$apiKey = '3b2a8dc318a6c8788da419567e0ec13b';
$city = 'Kharkiv';
$url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric";
$response = file_get_contents($url);
$data = json_decode($response, true);
$x = round($data['main']['temp']);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Мій термометр</title>

<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    min-height: 100vh;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #c9e3f5, #fdf6d8);
    text-align: center;
}

.thermometer {
    width: 500px;
    max-width: 95%;
    min-height: 600px;
    margin: 18px auto;
    padding-top: 35px;
    background: white;
    border-radius: 38px;
    box-shadow: 0 15px 35px gray;
}

h1 {
    font-size: 52px;
    color: #172554;
    margin: 25px 0 30px;
}

.city {
    font-size: 28px;
    color: #888;
}

.circle {
    width: 390px;
    height: 390px;
    max-width: 90%;
    margin: 50px auto;
    border-radius: 50%;
    background: lightyellow;
    display: flex;
    justify-content: center;
    align-items: center;
}

.temperature {
    font-size: 64px;
    font-weight: bold;
}
</style>
</head>

<body>
<div class="thermometer">
<h1>Мій термометр</h1>
<div class="city">
    Харків, Україна
</div>
<div class="circle">
    <div class="temperature">
        <?php echo $x; ?>°C
    </div>
</div>
</div> 
</body>
</html>
<!-- © Nikita, 2026 | For you ❤️ -->
