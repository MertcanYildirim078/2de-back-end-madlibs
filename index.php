<html lang="en">
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
                <div id="erHeerstPaniek">Er heerst paniek...</div>
                <div>Onkunde</div>
            </nav>
            <section id="contentContainerUnderNav">
                <h1>Er heerst paniek...</h1>

                <form method="post" action="erHeerstPaniekSubmit.php">
                    <div id="vragenContainer">
                        <div> <label>Welk dier zou je nooit als huisdier willen hebben? </label> <input name="huisdier" type="text"> </div>
                        <div> <label>Wie is de belangrijkste persoon in je leven? </label> <input name="belangrijkstePersoon" type="text"> </div>
                        <div> <label>In welke land zou je willen wonen? </label> <input name="land" type="text"> </div>
                        <div> <label>Wat doe je als je je verveelt? </label> <input name="vervelingDoen" type="text"> </div> 
                        <div> <label>Met welke speelgoed speelde je het meeste tijdens je kindertijd? </label> <input name="speelgoed" type="text"> </div> 
                        <div> <label>Bij welke docent spijbel je het liefst? </label> <input name="docentSpijbel" type="text"> </div> 
                        <div> <label>Als je € 100.000,- euro had, wat zou je eerst kopen? </label> <input name="eersteGeldKopen" type="text"> </div> 
                        <div> <label>Wat is je favoriete bezigheid? </label> <input name="bezigheid" type="text"> </div> 
                    </div>

                    <button type="submit" name="submit">Versturen</button>
                </form>

            </section>
            <footer>
                Gemaakt door Mertcan 2023
            </footer>
        </main>
    </div>
</body>
</html>