<?php
    session_start();

    if(isset($_POST['logout'])) {
        unset($_SESSION['user']);
    }

    
    if(!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>











    
</head>
<body>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    box-sizing: border-box;
}

body {
    background-image: url("6057485.jpg");
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
    color: white;
}
.box {
    background-color: #01011a;
    border: 20px solid black;
    border-image: url("border.jpg") 40% stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding-left: 2%;
    padding-right: 2%;
    padding-bottom: 4%;
    overflow:hidden;
}
.button-design{
    text-align:         center;
    display:            flex;
    flex-direction:     column;
    align-items:        center;
    justify-content:    center;
    background:       #0000ff;
    border:             5px solid #6fa8dc;
    border-radius:      26px;
    box-shadow:         3px 3px #444444;
    width:              300px;
    height:             70px;
    color:            #ffffff;
    display:            inline-block;
    font:               normal bold 25px/70px "Ubuntu", sans-serif;
    text-align:         center;
    margin:             10px;
}


h1 {
    font-weight: normal;
    font-size: 60px;
    margin: -150 0 40px;
}

</style>
    
<div class="box">
    <h1>
        schule.ryufps.de <br>
        Navigation Page
    </h1>

    <a href="https://klauland.ryufps.de/">
        <button class="button-design">Klauland</button>
    </a>
    
    <a href="./subpage/js_einfuehrung/index.php">
        <button class="button-design">js einführung</button>
    </a>
    

    <form method="post">
        <input type="hidden" name="logout" value="1"/>
        <input type="submit" class="button-design" name="logout" value="logout"/>
    </form>
</div>

</body>
</html>

