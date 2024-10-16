<?php
// Include the database connection file
include 'db_connect.php';

// Query to get products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplement Store</title>
    <style>
        body {
            background-color: #f0f8ff; 
            color: #333; 
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align:center;
            margin:auto 0;
        }
  
        .product {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            text-align: center;
        }
        img {
            width: 150px;
            height: auto;
        }
      


        nav a:hover {
            color: #000;
        }


.product {
    background-color: #ffe4e1; 
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    width: 20em;
    height:400px;
    float: left;
    box-shadow:5px 5px 7px gray;
}

.product img {
    max-width: 100%;
    border-radius: 8px;

}

.product h2 {
    font-size: 1.2em;
    color: #ff4500;
}


footer {
    background-color: #4682b4; 
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}
.text {
    border-radius: 8px;
    background-color:LightGreen;
    padding:1em;
    font-size:20px;
}
.price {
    border-radius: 8px;
    padding:1em;
}
footer {
    background-color:#ff7f50;;
}
.btnP {
    box-shadow:5px 5px 7px gray;
}
    </style>
</head>
<body>


<header style="background-color: #ff7f50; padding: 20px; text-align: center; color: white;">
    <h1 style="margin: 0; font-size: 2em;">Sklep z Suplementami</h1>
    <nav style="margin-top: 10px;">
        <a href="index.php" style="color: white; text-decoration: none; margin: 0 15px; font-weight: bold;">Strona Główna</a>
        <a href="produkty.php" style="color: white; text-decoration: none; margin: 0 15px; font-weight: bold;">Produkty</a>
        <a href="kontakt.php" style="color: white; text-decoration: none; margin: 0 15px; font-weight: bold;">Kontakt</a>
        <a href="o-nas.php" style="color: white; text-decoration: none; margin: 0 15px; font-weight: bold;">O Nas</a>
    </nav>
</header>


    <div class="products">
        <?php
        if ($result->num_rows > 0) {
          
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "'>";
                echo "<h2>" . htmlspecialchars($row['name']) . "</h2>";
                echo "<p class='text'>" . htmlspecialchars($row['description']) . "</p>";
                echo "<p class='price'><button class='btnP' onclick='getProduct(".$row['name'].")'>Price: $" . number_format($row['price'], 2) . "</button></p>";
                echo "</div>";
            }
        } else {
            echo "No products available.";
        }
       
        $conn->close();
        ?>

    </div>

    <footer>
        <p>&copy; 2024 Sklep z Suplementami i Poradami Fitness. Wszystkie prawa zastrzeżone.</p>
    </footer>
        <script>
            let global tab = [];
            function getProduct(x)
            {
                tab.push(x);
                alert("Hello");
            }
        </script>
</body>
</html>












<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supplements_store";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>