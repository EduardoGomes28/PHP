<?php 

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Search User</title>
 	<linlk rel="stylesheet" href="http://bootswatch.com/cerulean/boostrap.min.css">
	<script>
		function showSuggerstion(str){
			if(str.lenght == 0){
				document.getElementByID('output').innerHTML = '';
		} else {
			// AJAX REQ
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200
					){
					document.getElementByID('output').innerHTML = this.responseText;
				}
			}
			xmltttp.open("GET", "suggest.php?q="+str, true);
			xmlhttp.send();
		}

		}
	</script>
 </head>
 <body>
 	<div class="container">
	<h1>Search Users</h1>
	<form>
		Search User: <input type="text" class="form-control" onkeyup="showSuggerstion(this.value)">
	</form>
	<p> Suggestions: <span id="output" style="font-weight: bold;"></span></p>
</div>
 </body>
 </html>