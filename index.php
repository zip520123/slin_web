<!DOCTYPE html>
<html >
    <head>	
        <meta charset="utf-8">
        <title>Slin learning</title>
        <style >

            @import url("css_learn01.css");

        </style>
        <script>
            
            function draw(){
                canvas=document.getElementById('canvas1');
                c=canvas.getContext('2d');
                canvas.width  = window.innerWidth;
                canvas.height = window.innerHeight;
                var gradient=c.createLinearGradient(0, 0, canvas.width, 0);
                gradient.addColorStop("0", "magenta");
                gradient.addColorStop("0.5", "blue");
                gradient.addColorStop("1.0", "red");
                c.fillStyle=gradient;
                draw_grid();
                
                
                canvas.addEventListener("mousemove",domousover,false);
                canvas.addEventListener("click",mous_click,false);
            }
            function draw_grid(){  
                c.beginPath();
                c.moveTo( canvas.width/3, 0 );
                c.lineTo( canvas.width/3,canvas.height);
                                
                c.moveTo( canvas.width/3*2, 0 );
                c.lineTo( canvas.width/3*2,canvas.height);
                
                c.moveTo(0, canvas.height/3);
                c.lineTo(canvas.width, canvas.height/3);
                c.moveTo(0, canvas.height/3*2);
                c.lineTo(canvas.width, canvas.height/3*2);
                c.lineWidth = 5;
                c.stroke();
                
            }
            function mous_click(e){
              
               
            }
            function domousover(e){
               


            
            }
            function resize(){
                
                canvas.width  = window.innerWidth;
                canvas.height = window.innerHeight;
                
               draw_grid();
               
            
            }
            

        </script>
    </head>
    <body onload="draw()" onresize="resize()">
        <p id="clock"></p>
        <canvas id="canvas1" onresize="resize()">

        </canvas>
    </body>
</html>