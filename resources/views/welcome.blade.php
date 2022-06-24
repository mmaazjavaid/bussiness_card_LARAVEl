<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Profile Dashboard</title>
    <style>
        *{
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .profile--container{
            display: flex;
            flex-direction: column;
            align-items:center; 
            width: 400px;
            background-color: #FFFFFF;
        }
        .form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .header--container{
            display: flex;
            width: 95%;
            position: relative;
            background-color: #000000;
            align-items: center;
            height: 200px;
            border-radius: 15px;
            /* overflow: hidden; */
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .header--container div{
            display: flex;
            height: 100%;

        }
        .profile--picture{
            position: relative;
            width: 45%;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            overflow: hidden;
            background-color: #EBEBEB;
        }
        
        .profile--picture img{
            width:100%;
            height: 100%;
        }
        
        .header--content{
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 55%;
            
        }
        .header--content h3{
            margin-left: 15px;
            font-size: 1.3rem;
            color: #EBEBEB;
        }
        .header--content p{
            margin-left: 15px;
            font-size: 0.7rem;
            color: #EBEBEB;
        }
        .label_for_profile{
            display: flex;
            position: absolute;
            bottom: 10px;
            right: 10px;
        }
        .profile_input{
        display: none;
      }
      .profile_input_icon{
     cursor: pointer;
        font-size: 1.5rem;
      }
      .save_button_container{
        display: flex;
        width: 100%;
        justify-content: center;
      }
      .save_button_container button{
        background-color: #F76830;
        color: #EBEBEB;
        width: 94%;
        padding-top: 7px;
        padding-bottom: 7px;
        border: none;
        border-radius: 5px;
        margin-bottom: 30px;
      }
      .edit_route{
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #EBEBEB;
        text-decoration: none;
        width: 30px;
        top: -7px;
        right: -7px;
        z-index: 2;
        height: 30px;
        border-radius: 50%;
        background-color: #F76830;
      }
      .about_section{
        display: flex;
        position: relative;
        width: 93%;
        flex-direction: column;
        margin-top: 5px;
        border-bottom: 1px solid #c9d1d3;
      }
      .About_heading{
        font-size: 1.2rem;
        margin-bottom: 5px
      }
      .about_section p{
        font-size: 1rem;
        padding-bottom: 10px;
        color: #5b6061;
      }
      .about_form {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        text-decoration: none;
        right: 10px;
        top: 4px;
        color: white;
        width: 40px;
        font-size: 0.8rem;
        height: 20px;
        background-color: #cc3321;

      }

      .social_network_container{
        display: flex;
        position: relative;
        width: 93%;
        flex-direction: column;
        margin-top: 10px;
        border-bottom: 1px solid #c9d1d3;
      }
      .social_network_heading h4{
        font-size: 1.2rem;
        margin-bottom: 10px
      }
      .social_links_container{
        display: flex;
        width: 100%;
        flex-wrap: wrap;
        
      }

      .social_link{
        width: 18%;
        margin-right: 10px;
        margin-bottom: 10px;
      }
      .social_link img{
        height: 50px;
        width: 50px;
      }
      .social_network_edit{
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        text-decoration: none;
        right: 10px;
        top: 4px;
        color: white;
        width: 40px;
        font-size: 0.8rem;
        height: 20px;
        background-color: #cc3321; 
      }
    </style>
</head>
<body>
    <div class="profile--container">


        {{-- //////////////////////////////////////HEADER CONTAINER////////////////////////////// --}}
        <div class="header--container">
            <a class="edit_route" href="{{route("header_form",[
                'profileImg'=>$userDetails->profileImg,
                'name'=>$userDetails->name,
                'job'=>$userDetails->job
            ])}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <div class="profile--picture">
                <img src="images/{{$userDetails->profileImg}}" alt="profile" srcset="">
                {{-- <label class="label_for_profile" for="file">
                    <i class="fa fa-camera profile_input_icon" aria-hidden="true"></i>
                    
                    <input class="profile_input" type="file" name="image" id="file" >
                </label> --}}
                
            
            </div>
            <div class="header--content">
                <h3>{{$userDetails->name}}</h3>
                <p>{{$userDetails->job}}</p>
            </div>
        </div>

        {{-- //////////////////////////////////////HEADER CONTAINER END////////////////////////////// --}}




        {{-- //////////////////////////////////////ABOUT CONTAINER////////////////////////////// --}}

        <div class="about_section">
            <a class="about_form" href="{{route("submit_form",[
                "about"=>$userDetails->bio
            ])}}">Edit</a>
            <h4 class="About_heading">About</h4>
            <p>{{$userDetails->bio}}</p>
        </div>


        {{-- //////////////////////////////////////ABOUT CONTAINER END////////////////////////////// --}}
        

        {{-- //////////////////////////////////////SOCIAL NETWORK START////////////////////////////// --}}

        <div class="social_network_container">
            <a class="social_network_edit" href="">Edit</a>
            <div class="social_network_heading"><h4>Social network</h4></div>
            <div class="social_links_container">
                <div class="social_link">
                    <img src="images/social/instagram.png" >
                </div>
                <div class="social_link">
                    <img src="images/social/twitter.png" >
                </div>
                <div class="social_link">
                    <img src="images/social/line.png" >
                </div>
            </div>
        </div>


        {{-- //////////////////////////////////////SOCIAL NETWORK END////////////////////////////// --}}


    </div>
    
</body>
</html>