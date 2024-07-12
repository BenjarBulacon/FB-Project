<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="styles/index.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">


</head>
<body>
   
    <div class="containerOne">
        
        <div class="loginformCon">
            <form >
                <input type="text" placeholder="Email or phone number" class="email">
                <input type="passwrod" placeholder="Password" class="password" >
                <input type="submit" value="Log In" class="loginbutton">
                <div class="forgotPasstxt"><a href="" id="fp">Forgot password?</a></div>
                <hr class="hr">
                <div class="createAcc" id="create-account-button">Create new account</div>

            </form>
        </div>

       

        <div class="signupformCon" id="signup-container">               
            <form id="signupform">
                <div class="exit-container"><image src="icons/exit.svg" id="exit-icon"></image></div>        
                <div class="signuptxt">Sign Up</div>         
                <hr>
                <div class="fullname-container">
                    <div class="first-name-container">
                        <label>First name</label>
                        <input type="text"   id="first-name">
                    </div>
                    <div class="last-name-container">
                        <label>Last name</label>
                        <input type="text"  id="last-name">
                    </div>                                     
                </div>

                <div class="email-container">
                    <label>Mobile number or Email</label>
                    <input type="text" class="email">
                </div>

                <div class="password-container">
                    <label>Password</label>
                    <input type="password"  class="password">
                </div>

                <div class="birthday-container">
                    <label>Birthday</label>
                    <div class="birthday-select-container">
                        <div>
                            <select id="monthDropdown"></select>
                        </div>
                        <div>
                            <select id="dayDropdown"></select>
                        </div>
                        <div>
                            <select id="yearDropdown"></select>                                               
                        </div>  
                    </div>            
                </div>

                    
                <div class="gender-container">
                    <label>Gender</label>
                    <div class="gender-select-container">
                        <div>
                            <input type="radio" name="gender">
                            <label>Female</label>                       
                        </div>                      
                        <div>
                            <input type="radio" name="gender">
                            <label>Male</label>                       
                        </div>
                        <div>
                            <input type="radio" name="gender">
                            <label>Custom</label>                      
                        </div>
                    </div>                       
                </div>  
                
                <input type="submit" id="submit-signup-form-button">
            </form>
        </div>

    </div>



    <script>




        const days = 31;
        const startYear = 2024;
        const endYear = 1905;
        const dropdownyear = document.getElementById("yearDropdown");
        const dropdownday = document.getElementById("dayDropdown");
        const dropdownmonth = document.getElementById("monthDropdown");
        const months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
        const createAccountButton = document.getElementById("create-account-button");
        const signup = document.getElementById("signup-container");
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

       


    </script>
    
</body>
</html>