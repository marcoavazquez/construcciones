//Consulta de la información que se muestra en el cuerpo
function filtro(str)
{
if (str=="")
  {
  document.getElementById("bodyText").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("bodyText").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","divcuerpo.php?cuerpo="+str,true);
xmlhttp.send();
}
