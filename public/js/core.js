;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
let NumberPassger =document.getElementById("NumberPassger");
let contaier=document.getElementById("contaier");
let parent=document.getElementById("parent");
let input =document.getElementById("input");


elment.addEventListener('click',showtike);
function showtike()
{
  n=NumberPassger.value;
  let iDiv = document.createElement('div');
  for (let i=0; i<n; i++)
  {
    contaier.style.display="block";
    parent.innerHTML +=`<div class="row gx-3 mb-3">

    <div class="col-md-6">
        <label class="small mb-1" for="inputFirstName">Prenom</label>
        <input class="form-control" id="inputFirstName" name="prenom`+i+`" type="text" placeholder="Entrez votre prénom" value="">
    </div>

    <div class="col-md-6">
        <label class="small mb-1" for="inputLastName">Nom</label>
        <input class="form-control" id="inputLastName" type="text" name="nom`+i+`" placeholder="Entrez votre nom de famille" value="">
    </div>
</div>

<div class="row gx-3 mb-3">

    <div class="col-md-6">
        <label class="small mb-1" for="inputOrgName">Age</label>
        <input class="form-control" id="inputOrgName" type="number" name="age`+i+`" placeholder="Entrez votre Age" value="">
    </div>

    <div class="col-md-6">
        <label class="small mb-1" for="inputLocation">Date de naissanc</label>
        <input class="form-control" id="inputLocation" type="email" name="email`+i+`" placeholder="Entrez votre Email" value="">
    </div>
</div>

<div class="mb-3">
    <label class="small mb-1" for="">Numéro de téléphone</label>
    <input class="form-control" id="" type="tel" name="phonenumber`+i+`" placeholder="Enter your Tele" value="">
</div>

<div class="row gx-3 mb-3">

    <div class="col-md-6">
        <label class="small mb-1" for="">Numéro de passport</label>
        <input class="form-control" type="number" id="" name=" passport`+i+`" placeholder="Entrez voter numéro de PassPort" value="">
    </div>

    <div class="col-md-6">
        <label class="small mb-1" for="">date de naissanc</label>
        <input class="form-control" id="" type="text" name="datenaissanc`+i+`" placeholder="Entrez votre date de naissance" value="">
    </div><br>
    
<hr></hr> `;

  }
  input.innerHTML+=  `<input type="hidden" name="NumberPassger" value="`+n+`">`;

}
// let continueBooking=document.getElementById('confirmer');
elment.addEventListener('click',Message)
 function Message()
 {
   let mes ='bien hh'
   alert(mes);
   
 }

let profile = document.getElementById('modifer');
element.addEvent('click',voir)
function voir() 
{
    console.log(profile)
    profile.style.display = 'block';
}
 



