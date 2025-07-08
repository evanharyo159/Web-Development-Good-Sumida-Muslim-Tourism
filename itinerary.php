<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JapanIkimashou-CulinarySpot</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Keeps header on top */
            background-color: #f4f4f4;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header-inner {
            max-width: 100%;
            height: 110px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px;
        }

        .header-logo {
            width: 170px;
        }

        .site-menu ul {
            list-style: none;
            display: inline-flex;
            gap: 20px;
        }

        .site-menu ul li a {
            text-decoration: none;
            font-size: 18px;
            color: #8DC3F2;
            transition: color 0.3s;
        }

        .site-menu ul li a:hover {
            color: #e14b4b;
        }

        .register .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.2s;
            cursor: pointer;
            text-decoration: none;
        }

        .register .btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .container {
            margin-top: 130px; /* Prevent overlap with header */
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background: #fff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table th,
        table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f4f4f4;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
        .sponsor-banner{
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin: 20px auto;
            padding: 10px 0;
        }
        .sponsor-banner a{
            display: block;
            text-decoration: none;
            width: 200px;
            height: 50px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .sponsor-banner img{
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            transition: transform 0.3s ease;
        }
        .sponsor-banners img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
<header class="header">
    <div class="header-inner">
        <a class="header-logo" href="./Home.html">
            <img src="logo_new.png" alt="Logo">
        </a>
        <div class="header-site-menu">
            <nav class="site-menu">
                <ul>
                    <li><a href="http://localhost/TESTDB_JapanIkimashou/home.html">Home</a></li>
                    <li><a href="http://localhost/TESTDB_JapanIkimashou/culinary.html">Culinary Spot</a></li>
                    <li><a href="http://localhost/TESTDB_JapanIkimashou/tourist.html">Tourist Attractions</a></li>
                    <li><a href="http://localhost/TESTDB_JapanIkimashou/hotel.html">Accommodation</a></li>
                    <li><a href="http://localhost/TESTDB_JapanIkimashou/prayer_room.html">Prayer Room Spot</a></li>
                    <li><a href="http://localhost/TESTDB_JapanIkimashou/itinerary.php" class="highlight">Your Trip Itinerary and Budget</a></li>
                </ul>
            </nav>
        </div>
        <div class="register">
            <a class="btn" href="./RegisterYourself.html">Registration</a>
        </div>
    </div>
</header>

<div class="container">
    <h1>Welcome to the Itinerary Planner</h1>
    <form method="POST">
        <div class="form-group">
            <label for="num_people">Number of people traveling (1-4):</label>
            <input type="number" id="num_people" name="num_people" min="1" max="4" required>
        </div>
        <div class="form-group">
            <label for="halal_preference">Halal level:</label>
            <select id="halal_preference" name="halal_preference" required>
                <option value="strict">Strict</option>
                <option value="moderate">Moderate</option>
                <option value="Non-Halal">Non-Halal</option>
            </select>
        </div>
        <div class="form-group">
            <label for="budget">Total budget in Yen:</label>
            <input type="number" id="budget" name="budget" min="0" required>
        </div>
        <button type="submit">Plan Itinerary</button>
    </form>

    <div class="itinerary">
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itinerary";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect user input
    $num_people = (int)$_POST['num_people'];
    $halal_preference = $_POST['halal_preference'];
    $budget = (int)$_POST['budget'];

    // Fetch data from the database
    $sql = "SELECT * FROM ItineraryData";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $itinerary_data = [];
        while($row = $result->fetch_assoc()) {
            $itinerary_data[] = $row;
        }
    }

    // Filter data based on halal preference
    $filtered_data = [];
    foreach ($itinerary_data as $activity) {
        // Ensure activities fit the halal preference
        if (($halal_preference == "strict" && in_array($activity["halal_level"], ["Halal", "All","muslim"])) ||
            ($halal_preference == "moderate" && $activity["halal_level"] != "Non-Halal") ||
            ($halal_preference == "Non-Halal")) {
            $filtered_data[] = $activity;
        }
    }

    // Shuffle the filtered data
    shuffle($filtered_data);

    // Initialize itinerary and costs
    $start_time = "09:00";
    $current_time = new DateTime($start_time);
    $itinerary = [];
    $used_activities = [];
    $total_price = 0;
    $transport_price = 300; // Example transport price

    // Helper function to add transport
    function add_transport(&$itinerary, $current_time, $num_people, $transport_price, &$total_price, $budget) {
        if (count($itinerary) > 0 && $itinerary[count($itinerary) - 1]["category"] != "Transport") {
            $transport_start = clone $current_time;
            $transport_end = $transport_start->add(new DateInterval('PT45M')); // 45 mins transport
            $transport_cost = $transport_price * $num_people;
            if ($total_price + $transport_cost <= $budget) {
                $itinerary[] = [
                    "time" => $transport_start->format('H:i') . " - " . $transport_end->format('H:i'),
                    "name" => "Transport",
                    "category" => "Transport",
                    "price" => $transport_cost
                ];
                $total_price += $transport_cost;
                return $transport_end;
            }
        }
        return $current_time;
    }

    // Add first activity - Tokyo Skytree
    foreach ($filtered_data as $activity) {
        if ($activity["name"] == "Tokyo Skytree" && !in_array($activity["name"], $used_activities)) {
            $activity_cost = $activity["price_per_person"] * $num_people;
            if ($total_price + $activity_cost <= $budget) {
                $itinerary[] = [
                    "time" => $current_time->format('H:i') . " - " . $current_time->add(new DateInterval('PT' . ($activity["duration_hours"] * 60) . 'M'))->format('H:i'),
                    "name" => $activity["name"],
                    "category" => $activity["category"],
                    "price" => $activity_cost
                ];
                $used_activities[] = $activity["name"];
                $total_price += $activity_cost;
                break;
            }
        }
    }

    // Add transport after Tokyo Skytree
    $current_time = add_transport($itinerary, $current_time, $num_people, $transport_price, $total_price, $budget);

    // Add lunch (Halal preference)
    $lunch_found = false;
    foreach ($filtered_data as $activity) {
        if (($halal_preference == "strict" || $halal_preference == "moderate") &&
            $activity["category"] == "Restaurant" &&
            in_array($activity["halal_level"], ["Halal", "All"]) &&
            !in_array($activity["name"], $used_activities)) {
            $activity_cost = $activity["price_per_person"] * $num_people;
            if ($total_price + $activity_cost <= $budget) {
                $itinerary[] = [
                    "time" => $current_time->format('H:i') . " - " . $current_time->add(new DateInterval('PT' . ($activity["duration_hours"] * 60) . 'M'))->format('H:i'),
                    "name" => $activity["name"],
                    "category" => $activity["category"],
                    "price" => $activity_cost
                ];
                $used_activities[] = $activity["name"];
                $total_price += $activity_cost;
                $lunch_found = true;
                break;
            }
        }
    }

    if (!$lunch_found) {
        // If no lunch found with halal restrictions, choose a non-halal restaurant
        foreach ($filtered_data as $activity) {
            if ($activity["category"] == "Restaurant" && !in_array($activity["name"], $used_activities)) {
                $activity_cost = $activity["price_per_person"] * $num_people;
                if ($total_price + $activity_cost <= $budget) {
                    $itinerary[] = [
                        "time" => $current_time->format('H:i') . " - " . $current_time->add(new DateInterval('PT' . ($activity["duration_hours"] * 60) . 'M'))->format('H:i'),
                        "name" => $activity["name"],
                        "category" => $activity["category"],
                        "price" => $activity_cost
                    ];
                    $used_activities[] = $activity["name"];
                    $total_price += $activity_cost;
                    break;
                }
            }
        }
    }

    // Add transport after lunch
    $current_time = add_transport($itinerary, $current_time, $num_people, $transport_price, $total_price, $budget);

    // Add prayer room for strict or moderate halal level
    if ($halal_preference == "strict" || $halal_preference == "moderate") {
        $prayer_room_added = false;
        foreach ($filtered_data as $activity) {
            // Check if activity is a Prayer Room and it's not already added
            if ($activity["category"] == "Prayer Room" && !in_array($activity["name"], $used_activities)) {
                // For strict preference, allow "muslim" or other valid levels
                if ($halal_preference == "strict" && ($activity["halal_level"] == "muslim" || $activity["halal_level"] != "Non-Halal")) {
                    $itinerary[] = [
                        "time" => $current_time->format('H:i') . " - " . $current_time->add(new DateInterval('PT' . ($activity["duration_hours"] * 60) . 'M'))->format('H:i'),
                        "name" => $activity["name"],
                        "category" => $activity["category"],
                        "price" => 0
                    ];
                    $used_activities[] = $activity["name"];
                    $prayer_room_added = true;
                    break;
                }
                // For moderate preference, allow "Halal", "All", or "muslim"
                if ($halal_preference == "moderate" && in_array($activity["halal_level"], ["Halal", "All", "muslim"])) {
                    $itinerary[] = [
                        "time" => $current_time->format('H:i') . " - " . $current_time->add(new DateInterval('PT' . ($activity["duration_hours"] * 60) . 'M'))->format('H:i'),
                        "name" => $activity["name"],
                        "category" => $activity["category"],
                        "price" => 0
                    ];
                    $used_activities[] = $activity["name"];
                    $prayer_room_added = true;
                    break;
                }
            }
        }
        // If no prayer room found, proceed with other activities
        if (!$prayer_room_added) {
            $current_time = add_transport($itinerary, $current_time, $num_people, $transport_price, $total_price, $budget);
        }
    }

    // Add transport after prayer room or lunch
    $current_time = add_transport($itinerary, $current_time, $num_people, $transport_price, $total_price, $budget); 

    // Add remaining attractions until 18:00
    foreach ($filtered_data as $activity) {
        if ($activity["category"] == "Attraction" && !in_array($activity["name"], $used_activities) && $current_time <= new DateTime("18:00")) {
            $activity_cost = $activity["price_per_person"] * $num_people;
            if ($total_price + $activity_cost <= $budget) {
                $itinerary[] = [
                    "time" => $current_time->format('H:i') . " - " . $current_time->add(new DateInterval('PT' . ($activity["duration_hours"] * 60) . 'M'))->format('H:i'),
                    "name" => $activity["name"],
                    "category" => $activity["category"],
                    "price" => $activity_cost
                ];
                $used_activities[] = $activity["name"];
                $total_price += $activity_cost;
                $current_time = $current_time->add(new DateInterval('PT' . ($activity["duration_hours"] * 60) . 'M'));
            }
        }
    }

    // Add transport after each remaining attraction
    $current_time = add_transport($itinerary, $current_time, $num_people, $transport_price, $total_price, $budget);

    // Add dinner (the last activity before 20:00)
    foreach ($filtered_data as $activity) {
        if ($activity["category"] == "Restaurant" && !in_array($activity["name"], $used_activities)) {
            $activity_cost = $activity["price_per_person"] * $num_people;
            if ($total_price + $activity_cost <= $budget) {
                $itinerary[] = [
                    "time" => $current_time->format('H:i') . " - " . $current_time->add(new DateInterval('PT' . ($activity["duration_hours"] * 60) . 'M'))->format('H:i'),
                    "name" => $activity["name"],
                    "category" => $activity["category"],
                    "price" => $activity_cost
                ];
                $used_activities[] = $activity["name"];
                $total_price += $activity_cost;
                break;
            }
        }
    }

    // Finalize the itinerary and output
    echo "<h3>Your Itinerary:</h3>";
    echo "<table>";
    echo "<tr><th>Time</th><th>Name</th><th>Category</th><th>Price (Yen)</th></tr>";
    foreach ($itinerary as $item) {
        echo "<tr><td>{$item['time']}</td><td>{$item['name']}</td><td>{$item['category']}</td><td>{$item['price']}</td></tr>";
    }
    echo "<tr><td colspan='3'><strong>Total</strong></td><td><strong>{$total_price}</strong></td></tr>";
    echo "</table>";

    $conn->close();
}
?>
    </div>
    <div class = "sponsor-banner">
            <a href="https://www.higashin.co.jp/" target="_blank">
                <img src="higashin_logo.svg" alt="higashin">
            </a>
            <a href="https://visit-sumida.jp/en/" target="_blank">
                <img src="tourism_association.svg" alt="tourism_association">
            </a>
        </div>
        <footer>
            Copyright © 2024 L3S All Rights Reserved
        </footer>
    </body>
</html>