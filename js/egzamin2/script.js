let but=document.querySelector("#but");
let coffenr=document.querySelector("#coffenr");
let coffewg=document.querySelector("#coffewg");
let wynik=document.querySelector("#wynik");
but.onclick=()=>
{
    if(coffenr.value==1||coffenr.value==2||coffenr.value==3)
    {
        if(coffenr.value==1)
        {
            let a = 5*coffewg.value;
            wynik.innerHTML="Koszt zamówienia wynosi "+a+" zł";
        }
        else if(coffenr.value==2)
        {
            let a = 7*coffewg.value;
            wynik.innerHTML="Koszt zamówienia wynosi "+a+" zł";
        }
        else if(coffenr.value==3)
        {
            let a = 6*coffewg.value;
            wynik.innerHTML="Koszt zamówienia wynosi "+a+" zł";
        }
    }
    else
    {
            wynik.innerHTML="Koszt zamówienia wynosi 0 zł";
    }
}