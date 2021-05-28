let but=document.querySelector("#but");
let coffenr=document.querySelector("#coffenr");
let coffewg=document.querySelector("#coffewg");
let wynik=document.querySelector("#wynik");
document.write(coffenr)
document.write(coffenr.value);
but.onclick=()=>{
    if(coffenr==1||coffenr==2||coffenr==3)
    {
        if(coffenr==1)
        {
            let a = 5*coffewg;
            wynik.innerHTML="Koszt zamówienia wynosi "+a+" zł";
        }
        else if(coffenr==2)
        {
            let a = 7*coffewg;
            wynik.innerHTML="Koszt zamówienia wynosi "+a+" zł";
        }
        else if(coffenr==3)
        {
            let a = 6*coffewg;
            wynik.innerHTML="Koszt zamówienia wynosi "+a+" zł";
        }
    }
    else
    {
        let a = 0*coffewg;
            wynik.innerHTML="Koszt zamówienia wynosi "+a+" zł";
    }
}
