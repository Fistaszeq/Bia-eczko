let x = document.getElementById("pudzian");
let b = 0;
function pudzianOb()
{
    let image = document.getElementById('pudzian');

    image.classList.toggle('rotate'); // Przełączamy klasę 'rotate'
    b = b + 1;
    if(b%2 == 0)
    {
        image.src = "pat2.jpg";
    }
    else if(!b%2 == 0)
    {
        image.src = "Pudzian.jpg";
    }
}