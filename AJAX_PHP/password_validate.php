<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	
</head>
<body>
	<div class="container">
	    <h1>Enter your password</h1>
	    <form> 
  
  <input type="checkbox" class="c">
  <label > Small letter</label><br>
  <input type="checkbox" class="c">
  <label > Capital letter</label><br>
  <input type="checkbox" class="c">
  <label >Minimum length is 8</label><br>
  <input type="checkbox" class="c">
  <label >Special Character</label><br>
  <input type="checkbox" class="c">
  <label >Number</label><br><br>
 
  
Password: <input type="text" onkeyup="check(this.value)"> <br> <br>

    <input type="submit" value="Submit" id="subbtn"><br><br>

	    </form>

</div>
</body>

<script>
        subbtn.disabled = true;
		function check(str){
			// AJAX REQ
            subbtn.disabled = true;
            let c = document.getElementsByClassName('c')

            for(i=0;i<=3;i++)
                        {       
                                c[i].checked = false;
                        }
				var xmlhttp = new XMLHttpRequest();

				xmlhttp.open("GET", "check.php?m="+str, true);
				xmlhttp.send();

				xmlhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						let s = this.responseText;
                        let c = document.getElementsByClassName('c')
                        for(i=0;i<=s.length;i++)
                        {
                            if(s[i]=='1')
                                c[i].checked = true;
                        }
                      
                        if(s=="1111")
                        {
                            subbtn.disabled = false;
                        }
					}
				}

                
				
			}
		
	</script>
</html>

<!-- var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/; -->


<!-- (?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W) -->