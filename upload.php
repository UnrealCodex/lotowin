<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Upload Canvas Data to PHP Server</title>
		<style>
#myDIV { 
  width: 341px;
  height: 70px;
  background-repeat: no-repeat, repeat;
  background-image: url("http://unrealcodex.com/preview.png"), url("https://htmlcolorcodes.com/assets/images/html-color-codes-color-tutorials-903ea3cb.jpg");
  background-blend-mode: lighten;
}
</style>
    </head>
    <body>
        <h1>Upload Canvas Data to PHP Server</h1>
        <canvas width="80" height="80" id="myDIV">canvas</canvas>
		
        <script type="text/javascript">
            window.onload = function() {
                var canvas = document.getElementById("myDIV");
                var context = canvas.getContext("2d");
                context.beginPath();
context.arc(95, 50, 40, 0, 2 * Math.PI);
context.stroke(); 
            }
        </script>
 
        <div>
            <input type="button" onclick="uploadEx()" value="Upload" />
        </div>
 
        <form method="post" accept-charset="utf-8" name="form1">
            <input name="hidden_data" id='hidden_data' type="hidden"/>
        </form>
 
        <script>
            function uploadEx() {
                var canvas = document.getElementById("myDIV");
                var dataURL = canvas.toDataURL("image/png");
                document.getElementById('hidden_data').value = dataURL;
                var fd = new FormData(document.forms["form1"]);
 
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'upload_data.php', true);
 
                xhr.upload.onprogress = function(e) {
                    if (e.lengthComputable) {
                        var percentComplete = (e.loaded / e.total) * 100;
                        console.log(percentComplete + '% uploaded');
                        alert('Succesfully uploaded');
                    }
                };
 
                xhr.onload = function() {
 
                };
                xhr.send(fd);
            };
        </script>
    </body>
</html>