<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Tirar Fotos</title>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<style>
        video { border: 1px solid #ccc; display: block; margin: 0 0 20px 0; }
        #canvas { margin-top: 20px; border: 1px solid #ccc; display: block; }

        #mustache-pic {
                position: absolute;
            }
</style>
</head>
<body>
<div>

    <div><video id="video" width="640" height="480" autoplay></video></div>
    <div><button id="snap">Tirar Foto</button></div>
    <div><button id="save">Salvar Foto</button></div>
    <div><canvas id="canvas" width="640" height="480"></canvas></div>
<script>
            navigator.mediaDevices.getUserMedia({video: true, audio: false}).then( function(stream) {
              video = document.querySelector('video'); 
             video.srcObject = stream; 
            //vídeo.play(); 
             var canvas = document.querySelector('canvas'); 
             var ctx = canvas.getContext('2d'); ctx.drawImage(video, 0, 0, canvas.width, canvas.height);


              function getPicture() { 
                var canvas = document.createElement('canvas');
                var aspectRatio = video.videoWidth/video.videoHeight;
                canvas.width = 320;
                canvas.height = canvas.width / aspectRatio;
                var ctx = canvas.getContext('2d');
                ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                return canvas.toDataURL('image/jpeg'); 
                }

           

            document.getElementById("snap").addEventListener("click", function() {      
               canvas.getContext("2d").drawImage(video, 0, 0, 640, 480);       
                //canvas.getContext("2d").drawImage(stashePic, 0, 0, 640, 480);
                //alert(canvas.toDataURL());
            });


            document.getElementById("save").addEventListener("click", function() {      
                $.post('fotossalvar.php', {imagem:canvas.toDataURL()}, function(data){
                },'json');
            });
        });


    </script>    
</body>
</html>