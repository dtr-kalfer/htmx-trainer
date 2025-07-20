<?php
$map = [
    'PH' => ['Manila', 'Cebu', 'Davao'],
    'US' => ['New York', 'Los Angeles', 'Chicago'],
    'JP' => ['Tokyo', 'Osaka', 'Kyoto']
];

if (isset($_GET['country'])) {
    $country = $_GET['country'];
    foreach ($map[$country] as $city) {
        echo "<option value=\"$city\">$city</option>";
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/htmx.org"></script>
</head>
<body>
    <h2>🌍 Chained Dropdown Example</h2>

    <label>Country:
        <select name="country" hx-get="?country=" hx-target="#city" hx-trigger="change">
            <option disabled selected>Choose</option>
            <option value="PH">Philippines</option>
            <option value="US">USA</option>
            <option value="JP">Japan</option>
        </select>
    </label>

    <label>City:
        <select id="city">
            <option disabled selected>Select a country first</option>
        </select>
    </label>
</body>
</html>
