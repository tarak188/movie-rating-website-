function verifpw(){
pass=document.getElementById("p");
if((/[A-Za-z]/.test(pass))&&(/[0-9]/.test(nom)))
return true ;
else 
alert("email invalide");

}
function verifem(){
    eml=document.getElementById("em")
    if((/[A-Za-z]/.test(eml))&&((/[@gmail.com]/.test(eml))||(/[@yahoo.com]/.test(eml))))
    return true ;
    else
    alert("mot de passe invalide");
    
}
function al()
{
    if(!((verifem()) && (verifpw())))

    
    alert("email et mot de passe sont invalides");
}