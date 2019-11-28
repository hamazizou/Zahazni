function verif()
{
    if(f.id_promo.value=="")
    {
        alert("reduc ne doit pas etre vide ");
        return false;
    }
    if(f.prix.value=="")
    {
        alert("reduc ne doit pas etre vide ");
        return false;
    }
    if(f.reduc.value=="")
    {
        alert("reduc ne doit pas etre vide ");
        return false;
    }
    if(f.reduc.value.length!=2)
    {
        alert("reduc doit contenir 2 chiffres ");
        return false;
    }
    
}

function verif2()
{
    if(f.id_event.value=="")
    {
        alert("id_event ne doit pas etre vide ");
        return false;
    }
    if(f.title.value=="")
    {
        alert("title ne doit pas etre vide ");
        return false;
    }if(f.date.value=="")
    {
        alert("date ne doit pas etre vide ");
        return false;
    }
    if(f.prix_event.value=="")
    {
        alert("prix ne doit pas etre vide ");
        return false;
    }
    if(f.reduc_event.value=="")
    {
        alert("reduc ne doit pas etre vide ");
        return false;
    }
    if(f.reduc_event.value.length!=2)
    {
        alert("reduc doit contenir 2 chiffres ");
        return false;
    }

}