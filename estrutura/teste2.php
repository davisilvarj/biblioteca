<!DOCTYPE html>
<html>
<head>

<script type='text/javascript'>
	window.onload = function(){
		document.getElementById("mono").oncontextmenu = function(){
			alert("Função Desabilitada");
			return false;
		}
	}	
</script>

</head>
<body>
  <div  id="mono" class="areageral" style="width: 50vw; height: 50vh; ">

  </div>	
<form name="form" method="POST"> 
  <select name="select" onchange="muda(this);"> 
   <option value="MG">Minas Gerais</option> 
   <option value="RJ">Rio de Janeiro</option> 
   <option value="SP">São Paulo</option> 
  </select> 
</form>
<div id="caixa1" style="display: none;"> Caixa1 MG</div>
<div id="caixa2" style="display: none;"> Caixa2 RJ</div>
<div id="caixa3" style="display: none;"> Caixa3 SP</div>  
  
</body>
<script type='text/javascript'>


function muda(obj){ 
 var i = obj.selectedIndex; 
 var j = obj.options[i].value; 
 if (j=='MG') { 
			document.getElementById('caixa1').style.display="block";  
			document.getElementById('caixa2').style.display="none";
			document.getElementById('caixa3').style.display="none";
			} else
 if (j=='RJ') { 
			document.getElementById('caixa2').style.display="block";  
			document.getElementById('caixa1').style.display="none"; 
			document.getElementById('caixa3').style.display="none"; 
			} else
 if (j=='SP') { 
			document.getElementById('caixa3').style.display="block";  
			document.getElementById('caixa1').style.display="none"; 
			document.getElementById('caixa2').style.display="none"; 
			}
}  
  

</script>
</html>