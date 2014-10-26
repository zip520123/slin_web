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
           var canvas=document.getElementById('canvas1');
                var c=canvas.getContext('2d');
                canvas.width  = window.innerWidth;
                canvas.height = window.innerHeight;
        canvas.addEventListener("mousemove",domousover,false);
        canvas.addEventListener("click",mous_click,false);
  }
        function mous_click(e){
             var canvas=document.getElementById('canvas1');
                var c=canvas.getContext('2d');
                //c.clearRect(0,0,canvas.width,canvas.height);
                
                c.fillRect(e.pageX, e.pageY, 50, 30);
        }
        function domousover(e){
            var canvas=document.getElementById('canvas1');
            var c=canvas.getContext('2d');
            c.clearRect(0,0,canvas.width,canvas.height);
            
            c.font="30px Verdana";
            
        var gradient=c.createLinearGradient(0, 0, canvas.width, 0);
        gradient.addColorStop("0", "magenta");
        gradient.addColorStop("0.5", "blue");
        gradient.addColorStop("1.0", "red");
        c.fillStyle=gradient;
            c.fillText("x= "+e.pageX+" y= "+e.pageY,10,50);
            c.fillRect(e.pageX, e.pageY, 50, 30);
            
        }
        function resize(){
              var canvas=document.getElementById('canvas1');
                
                canvas.width  = window.innerWidth;
                canvas.height = window.innerHeight;
            
        }
            

        </script>
    </head>
    <body onload="draw()" onresize="resize()">
        <p id="clock"></p>
        <canvas id="canvas1" onresize="resize()">
            
        </canvas>
    </body>
</html>