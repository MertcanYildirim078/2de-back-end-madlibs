<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <h1 id="title">Mad Libs</h1>
    <div id="bodyContainer">
        <main id="mainContainer">
            <nav id="navBarContainer">
                <a id="erHeerstPaniek" href="./index.php">Er heerst paniek...</a>
                <a id="onkunde" href="./onkunde.php">Onkunde</a>
            </nav>
            <section id="contentContainerUnderNav">
                <h1>Er heerst paniek...</h1>

                <p>Er heerst paniek in het koninkrijk <?php echo $_POST["land"]; ?>. Koning Egmond is ten einde raad en als koning
                <?php echo $_POST["docentSpijbel"]; ?> te einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["belangrijkstePersoon"]; ?>.  
                </p>

                <p>"<?php echo $_POST["belangrijkstePersoon"]; ?>! Het is een ramp! Het is een schande!"</p>

                <p>"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"</p>

                <p>"Mijn <?php echo $_POST["huisdier"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["speelgoed"]; ?> voor hem gekocht!"</p>

                <p>"Majesteit, uw <?php echo $_POST["huisdier"]; ?> komt vast vanzelf weer terug?"</p>

                <p>"Ja, das leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["bezigheid"]; ?> leren?"</p>

                <p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["eersteGeldKopen"]; ?> voor gebruiken."</p>

                <p>"<?php echo $_POST["belangrijkstePersoon"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>

                <p>"<?php echo $_POST["vervelingDoen"]; ?>, Sire."</p>


            </section>
            <footer>
                Gemaakt door Mertcan 2023
            </footer>
        </main>
    </div>
</body>
</html>