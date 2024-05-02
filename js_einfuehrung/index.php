<?php
    session_start();

    if(isset($_POST['logout'])) {
        unset($_SESSION['user']);
    }

    
    if(!isset($_SESSION['user'])) {
        header("Location: ../login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    

<body>
    <style>
        
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            background-color: white;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            font-family: "Poppins", sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin:0;
            overflow: hidden;
        }
    </style>



    <h1>Aufgabe 1:</h1>

    <p>
        Möglichkeit 1 (gut): external file <br>
        Möglichkeit 2 (mid): in html dokument in script tags <br>
        Möglichkeit 3 (ass): inline <br>
    </p>

    <h1>Aufgabe 2:</h1>

    <p>
        "Erstelle eine HTML-Seite mit einem Button, <br>
        Wenn der Button gedrückt wird, soll eine Nachricht auf der Seite angezeigt werden." <br>

        <button onclick="ShowText()">Klick me!</button>
    </p>

    <p id="hiddenText"></p>

    <button onclick="showAlert()">Datum und text lol</button>

    <p id="DatumDisplay"></p>




    <input type="text" id="textField">
    <button onclick="textHinzufuegen()">klick ma</button>
    <p id="userText", onmouseover="einfaerben()", onmouseout="ausfaerben()"></p>




    <script>
        var IsShown = false;
        var DatumShown = false;
        function ShowText() {
            if(IsShown == false) {
                document.getElementById("hiddenText").innerHTML = "Hallooo Freundee! das ist nen goofy ah text der von nem button angezeigt wurde cool no?";
                IsShown = true;
            } else if (IsShown == true) {
                document.getElementById("hiddenText").innerHTML = "";
                IsShown = false;
            }
        }

        function showAlert() { 
            if(DatumShown == false) {
                window.alert("Dieser Alert besteht aus 1ner zeile code weow.");
                DatumShown = true; 
            } else if(DatumShown = true) {
                DatumShown = false;
                document.getElementById("DatumDisplay").innerHTML = "";
            }
        }

        function updateCurrentTime() {
            const currentTime = new Date();
            if(DatumShown == true) {
                document.getElementById("DatumDisplay").innerHTML = currentTime + "";
            }
        }

        function textHinzufuegen() {
            var dieserEineText = document.getElementById("textField").value;
            document.getElementById("userText").innerHTML = dieserEineText + "";
        }

        function einfaerben() {
            var gefaerbterText = document.getElementById("userText");
            gefaerbterText.style.color = 'red';
            
        }

        function ausfaerben() {
            var gefaerbterText = document.getElementById("userText");
            gefaerbterText.style.color = 'black';
        }
        
        setInterval(updateCurrentTime, 1000)
    </script>
    
</body>
</html>