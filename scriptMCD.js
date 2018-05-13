function mcd() {
  var a= parseInt(document.getElementById('a').value);
  var b= parseInt(document.getElementById('b').value);
  var r=document.getElementById("result");
  var h3=document.createElement("h3");
  var aux=" alv xdxdxd";
  var res=1;
  for (var i = 1; i <= a; i++) {
    if ((a%i==0) && (b%i==0)) {
        res=i;
        aux="El MCD  de " + a +" y " + b+" es: " + res;
    }
  }
  h3.appendChild(document.createTextNode(aux));
  r.innerHTML="";
  r.appendChild(h3);

}
