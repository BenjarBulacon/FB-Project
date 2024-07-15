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

        <!-- FOR SIGNUP-->
        <div class="signup-form-container" id="signup-form-container">               
            <form id="signup-form" class="signup-form">
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

                <div class="signup-email-container">
                    <label>Mobile number or Email</label>
                    <input type="text" class="email">
                </div>

                <div class="signup-password-container">
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

    <!-- FOR LOGIN-->
    <div class="containerOne">
        
        <div class="loginformCon">
            <form class="login-form">
                <input type="text" placeholder="Email or phone number" class="email">
                <input type="passwrod" placeholder="Password" class="password" >
                <input type="submit" value="Log In" class="loginbutton">
                <div class="forgotPasstxt"><a href="" id="fp">Forgot password?</a></div>
                <hr class="hr">
                <div class="createAcc" id="create-account-button">Create new account</div>

            </form>
        </div>

    </div>



    




    <script src="scripts/index.js"></script>
    
</body>
</html>