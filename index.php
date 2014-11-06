<!DOCTYPE html>
<html >
    <head>	
        <meta charset="utf-8" content="user-scalable=0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Slin learning</title>
        <style >
            @import url("css_learn01.css");
        </style>
        <script>
           
            window.onload = function () {
                loadXMLDoc();
                
            }
            window.addEventListener("click", loadXMLDoc, false);
            function loadXMLDoc()
            {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("clock").innerHTML+=xmlhttp.responseText;
                    }
                }
                xmlhttp.open("POST","ajax_text.txt",true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body onload="draw()">
        <p id="clock"></p>
        <canvas id="canvas1" >

        </canvas>
    </body>
</html>