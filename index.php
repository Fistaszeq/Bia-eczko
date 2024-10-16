<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep z Suplementami i Poradami Fitness</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: LightGreen;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        .benefit-section {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .benefit-section img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        footer {
            background-color: LightGreen;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
            clear:both;
        }
        p {
            text-align:left;
            font-size:35px;
        }
        img {
            width: 500px;
        }
        .benefit-section {
            width: 55em;
            height:1100px;
            float:left;
            box-shadow:5px 5px 7px gray;    
        }
        #dwa {
            float:right;
        }
        .rotate {
            transform: rotate(360deg); /* Obrót o 360 stopni */
        }
        #pudzian {
            transition: transform 1s; 
            border-radius:1em;
        }
        button {
            background-color:rgba(0, 0, 0, 0);
            border: none;
        }
    </style>
</head>
<body>

<script src="script.js"></script>

    <!-- Header -->

    <header style="background-color: LightGreen; padding: 20px; text-align: center; color: white;">
    <h1 style="margin: 0; font-size: 2em;">Sklep z Suplementami</h1>
    <nav style="margin-top: 10px;">
        <a href="index.php" style="color: white; text-decoration: none; margin: 0 15px; font-weight: bold;">Strona Główna</a>
        <a href="produkty.php" style="color: white; text-decoration: none; margin: 0 15px; font-weight: bold;">Produkty</a>
        <a href="kontakt.php" style="color: white; text-decoration: none; margin: 0 15px; font-weight: bold;">Kontakt</a>
        <a href="o-nas.php" style="color: white; text-decoration: none; margin: 0 15px; font-weight: bold;">O Nas</a>
    </nav>
</header>

    <!-- Main Content -->
    <main>
        <div class="benefit-section">
            <h2>Dlaczego warto ćwiczyć?</h2>
            <button onclick="pudzianOb()"><img src="Pudzian.jpg" id="pudzian" alt="Osoba ćwicząca" /></button>
            <p>Regularna aktywność fizyczna przynosi wiele korzyści zdrowotnych:</p>
            
                <p>Poprawia samopoczucie i redukuje stres oraz objawy lęku,
                pomaga w kontroli masy ciała, spalając nadmiar kalorii,
                wzmacnia serce, mięśnie i kości, poprawiając ogólną kondycję organizmu,
                zwiększa poziom energii oraz poprawia jakość snu. </p>
            
        </div>

        <div class="benefit-section" id="dwa">
            <h2>Dlaczego warto stosować suplementy diety?</h2>
            <img src="sup.jpg" alt="Suplementy diety" />
            <p>Suplementy diety mogą wspierać trening i zdrowy tryb życia:</p>
            <p>
                Uzupełniają niedobory witamin i minerałów, które mogą pojawić się w diecie.
                Pomagają zwiększyć efektywność treningu, wspierając budowę masy mięśniowej oraz regenerację 
                Mogą poprawić wytrzymałość i siłę, wspierając lepsze wyniki sportowe.
                Ułatwiają osiągnięcie celów, takich jak utrata wagi lub budowanie mięśni, dzięki specjalnie dobranym składnikom.
            </p>
        </div>
    </main>


    <footer>
        <p>&copy; 2024 Sklep z Suplementami i Poradami Fitness. Wszystkie prawa zastrzeżone.</p>
    </footer>

</body>
</html>
