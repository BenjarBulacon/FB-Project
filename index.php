<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <style>
        .body{
            padding:0px;
            margin:0px;
           box-sizing:border-box  ;
        }
        .containerOne{
            background-color:rgb(220,220,220);
            width:100%;
            height:70vh;
            align-items: center;
            justify-content: center;
            display:flex;
        }
    
        .facebooktxt{
            font-family: "Rubik", sans-serif;
            font-optical-sizing: auto;
            font-weight:bold;
            font-style: normal;
            font-size: 40px;
            color:#1F66F5;
            
            
        }
        .loginformCon{
            height:280px;
            width:300px;
            background-color:#FFFFFF;
            padding:10px;
            text-align:center;
           
            margin-left:100px;
            border-radius:10px;
        }
        .email{
            width:90%;
            padding:5px;
            height:26px;
            border-radius:5px;
            border:1px solid;
        }
        .password{
            width:90%;
            padding:5px;
            height:26px;
            border-radius:5px;
            border:1px solid;
            margin-top:20px;
        }
        .loginbutton{
            width:94%;
            padding:10px;
            height:40px;
            border-radius:5px;
            font-size: 18px;
            color:white;
            background-color: #1F66F5;
            border:0px;
            margin-top:20px;
            cursor:pointer;

        }
        .loginbutton:hover{
            background-color: rgb(0,120,245);
        }
        .forgotPasstxt{
            font-size:13px;
            color:#1F66F5;
            margin-top:20px;
        }
        .createAcc{
            padding:10px;
            width:150px;
            background-color: rgb(8,185,14);
            font-size: 15px;
            color:#FFFFFF;
            border-radius:5px;
            margin:auto;
            cursor:pointer;
        }
        .createAcc:hover{
            background-color: rgb(8,145,14);


        }
        .hr{
            margin:20px 0px 20px 0px;
        }
        .forgotPasstxt{
            cursor:pointer;
        }
        #fp{
            text-decoration: none;
            color:blue;
        }
        #fp:hover{
            text-decoration:underline;
        }


        .signupformCon{
            width:23vw;
            height:500px;
            border:2px solid;
            z-index:10;
            position:fixed;
            margin-top:50vh;
            padding:10px;
            display:none;
        }
        .signuptxt{
            font-size:1.5em;
            font-weight:bold;
            
        }
        .name{
            display:inline-block;
            width:150px;
        }

        #signupform div{
            display: block;
            margin-top:10px;

        }

        .email{
            width:90%;
        }
        .password{
            width:90%;

        }
        


    </style>

</head>
<body>
    <div class="containerOne">
        <div class="accountCon">
            <div class="facebooktxt">facebook</div>

        </div>
        <div class="loginformCon">
            <form >
                <input type="text" placeholder="Email or phone number" class="email">
                <input type="passwrod" placeholder="Password" class="password" >
                <input type="submit" value="Log In" class="loginbutton">
                <div class="forgotPasstxt"><a href="" id="fp">Forgot password?</a></div>
                <hr class="hr">
                <div class="createAcc">Create new account</div>

            </form>
        </div>

        <div class="signupformCon">
            <div>
                <div class="signuptxt">Sign Up</div>
                <div>It's quick and easy</div>
            </div>
            <hr>
            <form id="signupform">
                <div>
                    <input type="text" placeholder="First name" class="name">
                    <input type="text" placeholder="Last name" class="name">
                </div>
                <div>
                    <input type="text" placeholder="Mobile number or email" class="email">
                </div>
                <div>
                    <input type="password" placeholder="New password" class="password">
                </div>

                <div>
                    <label>Birthday</label>
                    <div>
                        <select id="monthDropdown"></select>
                    </div>

                    <div>
                        <select id="dayDropdown"></select>
                    </div>

                    <div>
                        <select id="yearDropdown"></select>                                               
                       
                    </div>
                    <div>
                        <div>
                            <label>Female</label>
                            <input type="radio" name="gender">
                        </div>                      
                        <div>
                            <label>Male</label>
                            <input type="radio" name="gender">
                        </div>
                        <div>
                            <label>Custom</label>
                            <input type="radio" name="gender">
                        </div>
                    </div>
                </div>
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