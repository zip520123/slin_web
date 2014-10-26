<!DOCTYPE html>
<html >
    <head>	
        <meta charset="utf-8">
        <title>Slin learning</title>
        <style >

            @import url("css_learn01.css");

        </style>
        <script>
            var stage_array=new Array();
            function Game_init(){               
                for (var i=0;i<9;i++){
                    stage_array[i]=0;   
                }
                now_stage=1;
                control_stage=0;
                stage_controler();
            }
            function stage_controler(){
                if (now_stage==1){now_stage=2;}
                else {now_stage=1;}
                for (var i=0;i<9;i++){
                    if(stage_array[i]==1||stage_array[i]==2){
                        if(stage_array[0]==stage_array[1]& stage_array[1]==stage_array[2]&stage_array[0]!=0){                            
                            c.strokeStyle="#FF0000";
                            c.strokeRect( canvas.width/12, canvas.height/12, canvas.width*5/6, canvas.height/6 );
                            game_end();
                            
                        }
                        if(stage_array[0]==stage_array[4]& stage_array[8]==stage_array[4]&stage_array[0]!=0){                            
                            c.beginPath();
                            c.strokeStyle="#FF0000";
                            c.lineCap = "round";
                            c.lineWidth = 20;
                            c.moveTo(canvas.width/6,canvas.height/6);
                            c.lineTo(canvas.width/6*5,canvas.height/6*5);
                            c.stroke();                            
                            game_end();
                        }
                        if(stage_array[0]==stage_array[3]& stage_array[3]==stage_array[6]&stage_array[0]!=0){
                            c.strokeStyle="#FF0000";
                            c.strokeRect( canvas.width/12, canvas.height/12, canvas.width/6, canvas.height/6*5 );                          
                            game_end();
                        }
                        if(stage_array[1]==stage_array[4]& stage_array[4]==stage_array[7]&stage_array[1]!=0){
                            c.strokeStyle="#FF0000";
                            c.strokeRect( canvas.width/12*5, canvas.height/12, canvas.width/6, canvas.height/6*5 );                          
                            game_end();   
                        }
                        if(stage_array[2]==stage_array[5]& stage_array[5]==stage_array[8]&stage_array[2]!=0){
                            c.strokeStyle="#FF0000";
                            c.strokeRect( canvas.width/4*3, canvas.height/12, canvas.width/6, canvas.height/6*5 );                          
                            game_end();
                            
                        }
                        if(stage_array[3]==stage_array[4]& stage_array[5]==stage_array[4]&stage_array[3]!=0){
                            c.strokeStyle="#FF0000";
                            c.strokeRect( canvas.width/12, canvas.height/12*5, canvas.width*5/6, canvas.height/6 );
                            game_end();
                            
                        }
                        if(stage_array[6]==stage_array[7]& stage_array[8]==stage_array[7]&stage_array[6]!=0){
                            c.strokeStyle="#FF0000";
                            c.strokeRect( canvas.width/12, canvas.height/4*3, canvas.width*5/6, canvas.height/6 );
                            game_end();
                        }
                        if(stage_array[2]==stage_array[4]& stage_array[6]==stage_array[4]&stage_array[2]!=0){
                            c.beginPath();
                            c.strokeStyle="#FF0000";
                            c.lineCap = "round";
                            c.lineWidth = 20;
                            c.moveTo(canvas.width/6*5,canvas.height/6);
                            c.lineTo(canvas.width/6,canvas.height/6*5);
                            c.stroke();                            
                            game_end();                            
                        }
                    }
                }
                control_stage++;
                if(control_stage==10)game_end();
                
            }
            function restart(){
                canvas.removeEventListener("click",restart,false);
                draw();
            }
            function game_end(){
                canvas.removeEventListener("mousemove",domousover,false);
                canvas.removeEventListener("click",mous_click,false);
                canvas.addEventListener("click",restart,false);
                
            }
            function draw_stage(){
                for (var i=0;i<9;i++){
                    select_position(i,stage_array[i]);   
                  
                }
            }
            function select_position(grid,status){
                if(status!=0){
                    switch(grid){
                        case 0:
                            draw_X(status);
                            break;
                        case 1:
                            c.save();
                            c.translate(canvas.width/3, 0);
                            draw_X(status);
                            c.restore();
                            break;
                        case 2:
                            c.save();
                            c.translate(canvas.width/3*2, 0);
                            draw_X(status);
                            c.restore();
                            break;
                        case 3:
                            c.save();
                            c.translate(0, canvas.height/3); 
                            draw_X(status);
                            c.restore();
                            break;
                        case 4:
                            c.save();
                            c.translate(canvas.width/3, canvas.height/3);
                            draw_X(status);
                            c.restore();
                            break;
                        case 5:
                            c.save();
                            c.translate(canvas.width/3*2, canvas.height/3);
                            draw_X(status);
                            c.restore();
                            break;
                        case 6:
                            c.save();
                            c.translate(0, canvas.height/3*2);
                            draw_X(status);
                            c.restore();
                            break;
                        case 7:
                            c.save();
                            c.translate(canvas.width/3, canvas.height/3*2);
                            draw_X(status);
                            c.restore();
                            break;
                        case 8:
                            c.save();
                            c.translate(canvas.width/3*2, canvas.height/3*2);                  
                            draw_X(status);
                            c.restore();
                            break;
                        default:
                    }
                }
                
            }
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
                Game_init();
                
            }
            
            function draw_X(status){
                if(status==1){
                    c.beginPath();
                    c.moveTo( canvas.width/12, canvas.height/12);
                    c.lineTo( canvas.width/4,canvas.height/4 );
                
                    c.moveTo( canvas.width/4, canvas.height/12);
                    c.lineTo( canvas.width/12,canvas.height/4);
                    c.lineWidth = 10;
                    c.lineCap = "round";
                    c.stroke();
                }
                if(status==2){
                    c.beginPath();
                    var r=0;
                    canvas.width<canvas.height? r=canvas.width/12:r=canvas.height/12;
                    c.arc(canvas.width/6, canvas.height/6,r,0,2*Math.PI);
                    c.lineWidth = 10;
                    c.stroke();
                    
                }
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
                //0
                if (e.pageX<canvas.width/3 &e.pageY<canvas.height/3){
                    if(stage_array[0]==0){
                        stage_array[0]=now_stage;
                    }
                   
                };
                //1
                if (e.pageX>canvas.width/3&e.pageX<canvas.width/3*2 &e.pageY<canvas.height/3){
                    if(stage_array[1]==0){
                        stage_array[1]=now_stage;
                    }
                }
                //2
                if (e.pageX>canvas.width/3*2&e.pageY<canvas.height/3){
                    if(stage_array[2]==0){
                        stage_array[2]=now_stage;
                    }
                }
                //3
                if (e.pageX<canvas.width/3 &e.pageY>canvas.height/3 &e.pageY<canvas.height/3*2 ){
                    if(stage_array[3]==0){
                        stage_array[3]=now_stage;
                    } 
                }
                //4
                if (e.pageX>canvas.width/3&e.pageX<canvas.width/3*2 &e.pageY>canvas.height/3&e.pageY<canvas.height/3*2){
                    if(stage_array[4]==0){
                        stage_array[4]=now_stage;
                    }
                }
                //5
                if (e.pageX>canvas.width/3*2&e.pageY>canvas.height/3&e.pageY<canvas.height/3*2){
                    if(stage_array[5]==0){
                        stage_array[5]=now_stage;
                    }
                }
                //6
                if (e.pageX<canvas.width/3 &e.pageY>canvas.height/3*2){
                    if(stage_array[6]==0){
                        stage_array[6]=now_stage;
                    }
                    
                }
                //7
                if (e.pageX>canvas.width/3&e.pageX<canvas.width/3*2 &e.pageY>canvas.height/3*2){
                    if(stage_array[7]==0){
                        stage_array[7]=now_stage;
                    }
                }
                //8
                if (e.pageX>canvas.width/3*2&e.pageY>canvas.height/3*2){
                    
                    if(stage_array[8]==0){
                        stage_array[8]=now_stage;
                    }
                }
                draw_stage();
                stage_controler();
            }
            function status_check(grid){
                if(stage_array[grid]==0){
                    c.fillRect(0,0,canvas.width/3,canvas.height/3);
                    draw_X(now_stage);
                }
                
            }
            function domousover(e){
                c.clearRect(0,0,canvas.width,canvas.height);
                draw_grid();
                //0
                if (e.pageX<canvas.width/3 &e.pageY<canvas.height/3){
                     
                    status_check(0);
                    
                };
                               
                //1
                
                if (e.pageX>canvas.width/3&e.pageX<canvas.width/3*2 &e.pageY<canvas.height/3){
                    c.save();
                    c.translate(canvas.width/3, 0);
                   
                    
                    status_check(1);
                    c.restore();
                };
                
                //2
                if (e.pageX>canvas.width/3*2&e.pageY<canvas.height/3){
                    c.save();
                    c.translate(canvas.width/3*2, 0);
                   
                    status_check(2);
                    c.restore();
                };
                //3
                if (e.pageX<canvas.width/3 &e.pageY>canvas.height/3 &e.pageY<canvas.height/3*2 ){
                    //                   c.translate(canvas.width/3, 0);
                    c.save();
                    c.translate(0, canvas.height/3);
                   
                    status_check(3);
                    c.restore();
                };
                //4
                if (e.pageX>canvas.width/3&e.pageX<canvas.width/3*2 &e.pageY>canvas.height/3&e.pageY<canvas.height/3*2){
                    c.save();
                    c.translate(canvas.width/3, canvas.height/3);
                   
                     status_check(4);
                    c.restore();
                };
                //5
                if (e.pageX>canvas.width/3*2&e.pageY>canvas.height/3&e.pageY<canvas.height/3*2){
                    c.save();
                    c.translate(canvas.width/3*2, canvas.height/3);
                   
                     status_check(5);
                    c.restore();
                };
                //6
                if (e.pageX<canvas.width/3 &e.pageY>canvas.height/3*2  ){
                    c.save();
                    c.translate(0, canvas.height/3*2);
                   
                     status_check(6);
                    c.restore();
                };
                //7
                if (e.pageX>canvas.width/3&e.pageX<canvas.width/3*2 &e.pageY>canvas.height/3*2){
                    c.save();
                    c.translate(canvas.width/3, canvas.height/3*2);
                   
                    status_check(7);
                    c.restore();
                };
                //8
                if (e.pageX>canvas.width/3*2&e.pageY>canvas.height/3*2){
                    c.save();
                    c.translate(canvas.width/3*2, canvas.height/3*2);
                   
                   status_check(8);
                    c.restore();
                };
                draw_stage();

            }
            function resize(){                
                canvas.width  = window.innerWidth;
                canvas.height = window.innerHeight;
                var gradient=c.createLinearGradient(0, 0, canvas.width, 0);
                gradient.addColorStop("0", "magenta");
                gradient.addColorStop("0.5", "blue");
                gradient.addColorStop("1.0", "red");
                c.fillStyle=gradient;
                draw_grid();
                draw_stage();
            }
            

        </script>
    </head>
    <body onload="draw()" onresize="resize()">
        <p id="clock"></p>
        <canvas id="canvas1" onresize="resize()">

        </canvas>
    </body>
</html>