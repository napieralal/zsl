var liczba;
var suma=0;
for(var i=0;i<=10;i++)
{
	liczba=Math.floor(Math.random()*100);
	document.write("Wylosowana liczba wynosi: "+liczba+"<br>");
	suma+=liczba;
	liczba=0;
}
document.write(suma);