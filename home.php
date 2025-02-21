<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEWING_RECORDS </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
    <style>
        * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    overflow: hidden;
    font-family: "EBGaramond";
}

@font-face {
    font-family: "EBGaramond";
    src: url(/fuente/static/EBGaramond-Bold.ttf);
    font-weight: bold;
    font-size: bold;
}

body {
    /* background-image:linear-gradient(to right,rgb(255, 80, 80),#FFC542) ,url();
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;*/
    background-color: #fcfcfc;
}

.logo_mw{
   padding: 10px;
   background-color: red;
}
.encabezado {
    width: 100vw;
    padding: 15px;
    /*background-color: black;*/
    background-image: linear-gradient(to right, rgb(0, 0, 0), rgb(0, 0, 0, 0.6)), url();
}

.menu {
    position: sticky;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.menu h1 {
    position: relative;
    color: rgb(255, 255, 255);
    left: 100px;
}

.bold {
    color: #FEBA08;
}

.navba ul {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
}

.navba li a {
    position: relative;
    margin: 0 20px;
    color: rgb(255, 255, 255);
    right: 20px;
    font-size: 20px;
}

.navba li a:hover {
    color: #FEBA08;
}

.navba li a:active {
    color: #da9c00;
}

.Portada {
    position: initial;
    display: flex;
    justify-content: center;
    align-items: center;
}

.titulos {
    position: relative;
    font-size: 30px;
    color: rgb(255, 255, 255);
}

.bold_2 {
    color: #FEBA08;
}
h3{
    color: red;
}
.img-yo {
    position: relative;
    left: 150px;
    width: 750px;
    bottom: 15px;
    mask-image: linear-gradient(rgb(0, 0, 0) 50%, transparent);
    filter: drop-shadow(0px 0px 8px #ffb805);
    -webkit-filter: drop-shadow(0px 0px 8px #ffb805);
}
.h3 {
    font-family: "Sigmar", serif;
    font-weight: 400;
    font-style: normal;
  }
    </style>
</head>   
<body>
    <main>
        <header>
            <div class="menu encabezado">
                <h1 ><img class="logo_mw" src="img/molotov_logo.png" ></h1>
                <nav class="navba">
                    <ul>
                        <li><a href="home.php" >Home</a></li>
                        <li><a href="Music.html" >Music</a></li>
                        <li><a href="/carrito/Store.html"><i class="fa-solid fa-cart-shopping icon"></i></a></li>
                        <li><a href="conexion/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="Portada">
        </div>
    </main>
    
</body>
</html>