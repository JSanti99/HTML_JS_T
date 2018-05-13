function fibo() {
  var n=parseInt(document.getElementById('n').value);
  var r=document.getElementById("result");
  var h3=document.createElement("h3");
  var x=0,y=1,z=1;
  for (var i = 1; i < n; i++) {
    z= x + y;
    x=y;
    y=z;
    var aux="El n-esimo termino de la sucesion fibonacci es: " + z;
  }

  h3.appendChild(document.createTextNode(aux));
  r.innerHTML="";
  r.appendChild(h3);
}
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "pruebaPHP.php", true);
  xhttp.send();
}
