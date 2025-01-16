<?php
$errs = [];
$emsg = "";

// Check if the form is submitted
if (isset($_POST['getWeather'])) {
    // Collect data from form element(s)
    $cityName = trim($_POST['cityName']);
    
    // Validate the data
    if (empty($cityName)) {
        $errs[] = "City name is required.";
    }

    // If there are no errors, proceed to fetch weather data
    if (empty($errs)) {
        // Replace with your actual API key
        $apiKey = "4833bef153474cc78b4133441251601";
        // Construct the API URL
        $apiUrl = "http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$cityName}&aqi=no";

        // Initialize cURL
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Execute cURL request
        $response = curl_exec($ch);

        // Close cURL session
        curl_close($ch);

        // Decode JSON response
        $data = json_decode($response);

        // Check if the response contains valid data
        if ($data && isset($data->current)) {
            // Retrieve current temperature
            $currentTemperature = $data->current->temp_c;
            $locationName = $data->location->name;

            echo "<h1>Current Temperature</h1>";
            echo "<p>The current temperature in {$locationName} is {$currentTemperature}°C.</p>";
        } else {
            // Handle errors (e.g., city not found)
            $errs[] = "Error retrieving weather data: {$data->error->message}";
            $emsg = "Could not find weather data for city '$cityName'. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
</head>

<body>
    <h1>Get Current Weather</h1>

    <?php if (!empty($errs)): ?>
    <div style="color: red;">
        <?php foreach ($errs as $error): ?>
        <p><?php echo htmlspecialchars($error); ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($emsg)): ?>
    <div style="color: orange;">
        <p><?php echo htmlspecialchars($emsg); ?></p>
    </div>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="cityName">City Name:</label>
        <input type="text" id="cityName" name="cityName" required>

        <button type="submit" name="getWeather">Get Weather</button>
    </form>
</body>

</html>