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
                <h1>Onkunde</h1>

                <p>Er zijn veel mensen die niet kunnen <?php echo $_POST["willenKunnen"]; ?>. Neem nou <?php echo $_POST["persoonOpschieten"]; ?>. </p>
                <p>Zelfs met de hulp van een <?php echo $_POST["bijVakantie"]; ?> of zelfs tien kan <?php echo $_POST["persoonOpschieten"]; ?> niet  <?php echo $_POST["willenKunnen"]; ?>. </p>
                <p>Dat heeft niet te maken met een gebrek aan <?php echo $_POST["bestePersoonlijkheid"]; ?>, maar met een te veel aan <?php echo $_POST["slechstePersoonlijkheid"]; ?>.</p>
                <p>Te veel <?php echo $_POST["slechstePersoonlijkheid"]; ?> leidt tot  <?php echo $_POST["ergsteOverkomen"]; ?> en dat is niet goed als je wilt <?php echo $_POST["willenKunnen"]; ?>. </p>
                <p>Helaas voor  <?php echo $_POST["persoonOpschieten"]; ?>.</p>

            </section>
            <footer>
                Gemaakt door Mertcan 2023
            </footer>
        </main>
    </div>
</body>
</html>