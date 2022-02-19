

// let s = document.getElementById('inputGroupSelect01')
// // console.log(s.value);
// let container = document.querySelector('.form-group');

// function btn() {
//     if (s.value=='1'){
//         let inp = document.createElement("input");
//         inp.innerHTML ="";
//         inp.innerHTML = "Submit";
//         inp.type = "date";
//         inp.name = "dateRetuer";
//         inp.className="form-control custom-select py-0";
//         inp.id="in"
//         container.appendChild(inp);
//         // document.getElementById('container').appendChild(inp);
//         console.log("hi");
//     }
//     if (s.value=='1'){
        
//     }else{
//          let elem = document.getElementById('in');
//          elem.container.removeChild(elem);
//     }
    

    
// }
// // if(s)





document.addEventListener('DOMContentLoaded', () => {

  const selectDrop = document.querySelector('#countries');
  // const selectDrop = document.getElementById('countries');


  fetch('https://restcountries.com/v2/alpha/col').then(res => {
    return res.json();
  }).then(data => {
    let output = "";
    data.forEach(country => {
      output += ` <option value="${country.name}">${country.name}</option>`;
    })

    selectDrop.innerHTML = output;
  }).catch(err => {
    console.log(err);
  })


});