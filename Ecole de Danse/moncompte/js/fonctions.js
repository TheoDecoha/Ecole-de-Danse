function writedivmdp(texte)
     {
     document.getElementById('mdpbox').innerHTML = texte;
     }
 
function checkMdp()
    {
    var mdp = document.getElementById("mdp").value,//la virgule répercute le var sur la deuxième déclaration
    mdp2 = document.getElementById("mdp2").value;//donc pas besoin de var ici
    if (mdp !== mdp2)
    {
        writedivmdp('<span style="color:#cc0000">Les mots de passe ne correspondent pas !</span>');
    }
    else
    {
        writedivmdp('<span style="color:#1A7917">Mots de passe OK !</span>');
    }
}