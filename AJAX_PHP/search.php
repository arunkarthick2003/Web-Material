<!DOCTYPE html>
<html>
<head>
	<title>Search User</title>

	<script>
		function show(str){
			
				var xmlhttp = new XMLHttpRequest();

		xmlhttp.open("GET", "display.php?d="+str, true);
				xmlhttp.send();

				xmlhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						document.getElementById('output').innerHTML = this.responseText;
					}
				}
				
			}
		
	</script>
</head>
<body>
	<div>
	    <h1>Search Users</h1>
	    <form> 
	Search User: <input type="text" onkeyup="show(this.value)">
	    </form>
	    <p>Suggestions: <span id="output"></span></p>
	</div>
</body>
</html>