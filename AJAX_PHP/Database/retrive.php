<html>
<head>
<script>
function showUser() {
  
  var n = document.getElementById("name").value;
  var j = document.getElementById("job").value;

  var xmlhttp = new XMLHttpRequest();

  xmlhttp.open("GET","database.php?name="+n+"&job="+j,true);
  xmlhttp.send();
    
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    
  }

</script>
</head>
<body>

<form>
<label>SELET THE NAME: </label>
<select id='name' name="users" onchange="showUser()">
  <option value="">NAMES:</option>
  <option value="Ram">Ram</option>
  <option value="Arjun">Arjun</option>
  <option value="Marcus">Marcus</option>
  <option value="Bill">Bill</option>
</select>


<label>SELET THE JOB: </label>
<select id = 'job' name="job" onchange="showUser()">
  <option value="">JOBS:</option>
  <option value="IT">IT</option>
  <option value="Doctor">Doctor</option>
  <option value="Director">Director</option>
  <option value="Business">Business</option>
</select>

</form>
<br>
<div id="txtHint"><b>Employee details will be listed here...</b></div>

</body>
</html>