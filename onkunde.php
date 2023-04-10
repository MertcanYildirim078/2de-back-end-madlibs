<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>

    <?php 
        $huisdier = $email = "";
        $nameErr = $emailErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["huisdier"])) {
            $nameErr = "Veld is verplicht";
            } 
            
                else {
                $huisdier = test_input($_POST["huisdier"]);
                }
    }; 

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <h1 id="title">Mad Libs</h1>
    <div id="bodyContainer">
        <main id="mainContainer">
            <nav id="navBarContainer">
            <a id="erHeerstPaniek" href="./index.php">Er heerst paniek...</a>
                <a id="onkunde" href="./onkunde.php">Onkunde</a>
            </nav>
            <section id="contentContainerUnderNav">
                <h1>Onkunde</h1>

                <form method="post" action="./onkundeSubmit.php">
                    <div id="vragenContainer">
                        <div> <label>Wat zou je graag willen kunnen?</label> <input name="willenKunnen" type="text"> <span class="error">* <?php echo $nameErr;?></span> </div>
                        <div> <label>Met welke persoon kun je goed mee opschieten? </label> <input name="persoonOpschieten" type="text"> <span class="error">* <?php echo $nameErr;?></span> </div>
                        <div> <label>Wat is je favoriete getal? </label> <input name="getal" type="text"> <span class="error">* <?php echo $nameErr;?></span> </div>
                        <div> <label>Wat heb je altijd bij je als je op vakantie gaat? </label> <input name="bijVakantie" type="text"> <span class="error">* <?php echo $nameErr;?></span> </div> 
                        <div> <label>Wat is je beste persoonlijke eigenschap? </label> <input name="bestePersoonlijkheid" type="text"> <span class="error">* <?php echo $nameErr;?></span> </div> 
                        <div> <label>Wat is je slechste persoonlijke eigenschap? </label> <input name="slechstePersoonlijkheid" type="text"> <span class="error">* <?php echo $nameErr;?></span> </div> 
                        <div> <label>Wat is het ergste dat je kan overkomen? </label> <input name="ergsteOverkomen" type="text"> <span class="error">* <?php echo $nameErr;?></span> </div> 
                    </div>

                    <button type="submit" name="submit" value="Submit">Versturen</button>
                </form>

            </section>
            <footer>
                Gemaakt door Mertcan 2023
            </footer>
        </main>
    </div>
</body>
</html>