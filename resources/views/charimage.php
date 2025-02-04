<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Char Picture</title>
    <style>
        #show{
            font-family: Courier New;
            font-size: 10px;
            line-height: 8px;
        }
    </style>
    <script src="js/charimage.js"></script>
</head>
<body>
<input type="file" id="file"><button type="button" onclick="showImage()">Tạo</button><br>
<img src="" style="width: 100px"/>
<pre id="show"></pre>
<script>
    var map=getCharsMap(),show=document.getElementById("show"),
        img=document.getElementsByTagName("img")[0],
        canvas = document.createElement("canvas");
    function showImage(){
        var file = document.getElementById('file').files[0],
            ctx = canvas.getContext('2d'),
            url = URL.createObjectURL(file);
        if(!file){
            alert("Vui lòng chọn tệp tin");
        }
        img.src = url;
        img.onload=function(){
            canvas.width=img.naturalWidth;
            canvas.height=img.naturalHeight;
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
            show.innerText=toChars(ctx,canvas.width,canvas.height,100);
        }
    }
</script>
</body>
</html>