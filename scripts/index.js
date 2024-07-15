const days = 31;
const startYear = 2024;
const endYear = 1905;
const dropdownyear = document.getElementById("yearDropdown");
const dropdownday = document.getElementById("dayDropdown");
const dropdownmonth = document.getElementById("monthDropdown");
const months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
const createAccountButton = document.getElementById("create-account-button");
const signup = document.getElementById("signup-form-container");
const exit = document.getElementById("exit-icon");

createAccountButton.addEventListener("click", ()=>{
    signup.classList.add("active");

})
exit.addEventListener("click", ()=>{
    signup.classList.toggle("active");

})


for( let m =0; m < months.length ;m++){
    let mon =document.createElement("option");
    mon.value= months[m];
    mon.textContent =  months[m];
    dropdownmonth.append(mon);
    
}


for( let x =1; x <= days; x++ ){
    let dayoption = document.createElement("option");
    dayoption.value= x;
    dayoption.textContent = x;
    dropdownday.appendChild(dayoption);
}

for (let year = startYear; year >= endYear; year--) {
    let option = document.createElement("option");
    option.value = year;
    option.textContent = year;
    dropdownyear.appendChild(option);
}