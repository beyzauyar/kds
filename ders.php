 <!DOCTYPE html>
<head>
</head>
<script>
window.onload=function(){
var x=5;
var y=6;
var z=x+y;
var arabalar=["Mercedes","Renault","VW","BMW"];
var kisi={adi:"Can",soyadi:"Aydın",yas:"38"};
function getir(p1,p2){
return p1*p2;
}
var sonuc=getir(x,y);
document.getElementById("container").innerHTML=sonuc;
};
function getir(){
var arabalar=["Renault","Mercedes","VW"];
arabalar.push("BMW");
var i;
for (i=0;i<arabalar.length;i++){
document.getElementById("container").innerHTML+=arabalar[i]+" ";
}

}
</script>
<body>

<div id="container">
</div>
<button onclick='getir()'>Zamanı Getir</button>
</body>
</html>