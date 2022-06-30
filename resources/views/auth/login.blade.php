<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
<title>Login</title>
    <style>
       *{
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
       } 
       body{
        display: flex;
        background-color:#F76830; 
        justify-content: center;
       }
     .login_container{
        display: flex;
        background-color: #FFFFFF;
        flex-direction: column;
        align-items: center;
        overflow: hidden;
        width: 400px;
     }
     .svg_container{
        display: flex;
        position: relative;
        height:90px; 
        width:100%;
        justify-content: flex-end;
     }
     .svg{
        position: absolute;
        /* top: -5px; */
        right: 10px;
        
        height: 120px;
        width: 150px;
     }
     .bottom_svg_container{
        display: flex;
        width: 100%;
        height: 100px;
     }
     .form_inputs_container{
        display: flex;
        width: 85%;
        
        flex-direction: column;
     }
     .headings_container{
        display: flex;
        flex-direction: column;
     }
     .main_heading{
        font-size: 1.6rem;
        font-weight: 600;
        color: #222222;
     }
     .sub_heading{
        display: flex;
        font-size: 0.9rem;
        color: #9b9797;
        margin-left: 2px;
     }
     .form_input_area{
        display: flex;
        flex-direction: column;
        width: 100%;
        margin-top: 60px;

        
     }
     .email_input{
        display: flex;
        
        align-items: center;
        color: #706c6c;
        border-bottom: 1px solid #9b9797;
        padding-bottom: 8px;
        margin-bottom: 40px;
     }
     .email_input i{
        display: block;
        font-size: 1.1rem;
        margin-right: 10px;
        
     }
     .email_input input{
        
        font-size: 1.1rem;
        outline: none;
        border: none;
     }
     .border{
        display: flex;
        border-bottom: 1px solid #9b9797;
        width: 90%;
     }
     .password_input{
        display: flex;
        align-items: center;
        color: #706c6c;
        border-bottom: 1px solid #9b9797;
        padding-bottom: 8px;
     }
     .password_input i{
        display: block;
        font-size: 1.1rem;
        margin-right: 10px;
        
     }
     .password_input input{
        
        font-size: 1.1rem;
        outline: none;
        border: none;
     }
     .button_container{
        display: flex;
        width: 100%;
        margin-top: 40px;
        justify-content: flex-end;
     }
     .button_container button{
        height: 45px;
        width: 100px;
        border:none;
        border-radius: 15px;
        color: #FFFFFF;
        font-size: 1rem;
        background: rgb(240,202,76);
        background: linear-gradient(90deg, rgba(240,202,76,1) 0%, #f08832 60%, #F76830 100%);
     }
     .logo--container{
        display: flex;
        align-items: center;
        width: 90%;
        position: sticky;
        
        top: 0%;
        z-index: 9;
        background-color: #FFFFFF;

        margin-top: 5px;
        justify-content: space-between;

      }
      
      .logo img{
        margin-left: 5px;
        width: 70px;
        height: 70px;
      }
      .hamburger--menu{
        display: flex;
        flex-direction: column;
        height: 25px;
        margin-right: 15px;
        justify-content: space-between;

      }
      .hamburger--menu div{
        width: 25px;
        border-top:2px solid #F76830;
      }
      .second_page{
        margin-top: 40px;
      }
      .second_page a{
        color: #f08832;
        font-weight: 500;
        text-decoration: none;
      }
      @media screen and (max-width: 500px) {
         .login_container{
        display: flex;
        background-color: #FFFFFF;
        flex-direction: column;
        align-items: center;
 
        width: 95%;
        overflow: hidden;
        }
     }
    </style>
</head>
<body>
    <div class="login_container">


        <div class="logo--container">
            <a href="/welcome" class="logo"><img src="images/logo/Avicenna.gif" alt="" srcset=""></a>
            <div class="hamburger--menu">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>

        <div class="svg_container">
            <svg class="svg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#F76830" d="M46.2,-61.9C60.7,-53.1,73.7,-40.7,79.2,-25.3C84.8,-10,83,8.2,76,23.1C69,38.1,56.9,49.9,43.4,60.9C29.9,72,14.9,82.4,-0.1,82.5C-15.1,82.6,-30.2,72.5,-40.4,60.4C-50.7,48.2,-56,34.1,-64,18.6C-72,3.2,-82.6,-13.6,-82.1,-30.2C-81.5,-46.8,-69.8,-63.4,-54.3,-71.8C-38.7,-80.3,-19.4,-80.6,-1.7,-78.2C15.9,-75.8,31.8,-70.7,46.2,-61.9Z" transform="translate(100 100)" />
              </svg>
            </div>

            
        
            

        <form class="form_inputs_container" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="headings_container">
                <div class="main_heading">Login</div>
                <div class="sub_heading">Please sign in to continue</div>
            </div>
            <div class="form_input_area">
                <div class="email_input">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input id="email" type="email" placeholder="Email"   class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  >
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                
                <div class="password_input">
                    <i style="display:flex; font-size:1.5rem; margin-left:2px;" class="fa fa-lock" aria-hidden="true"></i>
                    <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
            <div class="button_container">
                <button>
                    LOGIN&nbsp;-> 
                </button>
            </div>
        </form>


        <div class="second_page">
            Dont have an account ?<a href="{{ route('register') }}"> Sign up</a> 
        </div>



    <div class="bottom_svg_container">
        
        <svg style="display: flex; height:150px; width:100%;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#F76830" fill-opacity="1" d="M0,96L60,85.3C120,75,240,53,360,69.3C480,85,600,139,720,170.7C840,203,960,213,1080,202.7C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
          </svg>
    </div>

    
    </div>
    
    
    
</body>
</html>