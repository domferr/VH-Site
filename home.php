<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="homestyle.css">
        <title>Home</title>
    </head>
    <body onload="cambia_slide()">
        <div style="background: black; width: 100%;">
        <div class="topnav horizontal-centered" id="homeTopNav">
            <a href="#home">Home</a>
            <a href="#news">Elemento 2</a>
            <a href="#contact">Elemento 3</a>
            <a href="#about">Elemento 4</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="showMenu()">&#9776;</a>
        </div>
        </div>
       
        <div id ="foto_auto" class = "horizontal-centered">
        	<div id = "slider"></div>
        	<div id = "desc"></div>
        </div>
        
        <div class="page-content horizontal-centered">
            <div class="car-item">
                <img class="car-img">
                <div class="car-descr">
                    Testo
                </div>
            </div>
        </div>
        <div class="page-content horizontal-centered">
            <div class="car-item">
                <img class="car-img">
                <div class="car-descr">
                    Testo
                </div>
            </div>
        </div>
        <div class="page-content horizontal-centered">
            <div class="car-item">
                <img class="car-img">
                <div class="car-descr">
                    Testo
                </div>
            </div>
        </div>
        <div class="page-content horizontal-centered">
            <div class="car-item">
                <img class="car-img">
                <div class="car-descr">
                    Testo
                </div>
            </div>
        </div>
        <div class="page-content horizontal-centered">
            <div class="car-item">
                <img class="car-img">
                <div class="car-descr">
                    Testo
                </div>
            </div>
        </div>
        <div class="footer"></div>
        <script>
            function showMenu() {
                var x = document.getElementById("homeTopNav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }


			var comodo = -1;
			function cambia_slide()
			{
				comodo++;
				if (comodo>2) comodo =0;
				var file ="<img src=\"img/slide/slide"+comodo+".jpg\"/>";
				document.getElementById("slider").innerHTML = file;
				setTimeout("cambia_slide()", 5000)
			}
        </script>
    </body>
</html>
