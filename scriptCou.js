function isCou() {
  var n = parseInt(document.getElementById('a').value);
  var r = document.getElementById("result");
  var h3 = document.createElement("h3");
  var cont=0;
  for (var i = 1; i <= n; i++1 {
      if (n%i==0) {
        cont++;
      }
    }
    if (cont==2) {
      h3.appendChild(document.createTextNode("Es un numero primo"));
      r.innerHTML="";
      r.appendChild(h3);
    }else{
      h3.appendChild(document.createTextNode("No es un numero primo"));
      r.innerHTML="";
      r.appendChild(h3);
    }
}
