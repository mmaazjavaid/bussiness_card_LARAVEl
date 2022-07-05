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
<script src="js/header_form.js" defer></script>
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
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .header--container div{
            display: flex;
            height: 100%;

        }
        .profile--picture{
            display: flex;
            justify-content: center;
            position: relative;
            width: 45%;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            /* overflow: hidden; */
            background-color: #FFFFFF;
        }
        
        .profile--picture img{
            width:100%;
            height: 100%;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
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
        .profile_icon_container{
            display: flex;
            position: absolute;
            width: 60%;

            height: 60px !important;
            /* background: #000000; */
            bottom: -25px;
            align-items: center;
            justify-content: center;
        }
        .label_for_profile{
            display: flex;
            /* position: absolute; */
            width: 50px;
            height: 50px;
            justify-content: center;
            align-items: center;
            color: #EBEBEB;
            /* bottom: -25px; */
            border-radius: 50%;
            background-color: #F76830;
        }
        .profile_input_icon{
     cursor: pointer;
        font-size: 1.5rem;
      }
        .profile_input{
        display: none;
      }
      
      
      .profile_form{
        display: flex;
        margin-top: 30px;
        margin-bottom: 30px;
        flex-direction: column;
        width: 100%;
        align-items: center;
      }
      .profile_form div{
        display: flex;
        flex-direction: column;
        width: 90%;
        margin-bottom: 20px;
      }
      .profile_form div div{
        color: #9ba0a1;
        margin-bottom: 0px;
      }
      .profile_form div input{
        border: none;
        outline: none;
        border-bottom: 1px solid #bfc3c4;
      }
      .save_button_container{
        display: flex;
        width: 100%;
        justify-content: center;
      }
      .save_button_container button{
        background-color: #F76830;
        color: #EBEBEB;
        width: 100%;
        padding-top: 7px;
        padding-bottom: 7px;
        border: none;
        border-radius: 5px;
        margin-top: 30px;
        margin-bottom: 30px;
      }
      .logo--container{
        display: flex;
        align-items: center;
        width: 94%;
        margin-top: 20px;
        justify-content: flex-start;
        color: #575a5a;
        text-decoration: none;
      }
      
      .logo img{
        /* margin-left: 5px; */
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
      .powered--avicenna{
        display: flex;
        position: absolute;
        bottom: 40px;
        flex-direction: column;
        width: 100%;
        justify-content: center;
        align-items: center;
        font-family: 'Roboto', sans-serif;
        font-style: italic;
        font-size: 0.8rem;
        /* margin-top: 40px; */
      }
      .first--powered{
        font-size: 0.8rem;
      }
      .second--powered{
        font-size: 0.7rem;
      }
    </style>
</head>
<body>
    <form class="profile--container" action="{{route("submit_header")}}" method="POST" enctype="multipart/form-data">
        <a href="/welcome" class="logo--container">
            <div class="logo"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;back</div>
            {{-- <div class="hamburger--menu">
              <div></div>
              <div></div>
              <div></div>
            </div> --}}
          </a>
        <div class="header--container">
            <div class="profile--picture">
                <img src="images/{{$profileImg}}" id="image_display" alt="profile" srcset="">
                <div class="profile_icon_container">
                    <label class="label_for_profile" for="file">
                        <i class="fa fa-camera profile_input_icon" aria-hidden="true"></i>
                        
                        <input class="profile_input" type="file" onchange="loadFile(event)"  accept="image/*" name="image" id="file" >
                    </label>
                </div>
                
                
            
            </div>
            <div class="header--content">
                <h3 id="name">{{$name}}</h3>
                <p style="width: 70%" id="job">{{$job}}</p>
            </div>
        </div>


        {{-- ///////////////////////////////form//////////////////////////////////// --}}
        <div class="profile_form" >
           @csrf
            <div class="form_name">
                <div>Name</div>
                <input type="text" class="name_input" id="name_input" name="name" value="{{$name}}">
            </div>
            <div class="form_job title">
                <div>Job title</div>
                <input type="text" class="job_input" id="job_input" name="job" value="{{$job}}">
            </div>
            {{-- <div class="form_image">
                <div>Image</div>
                <input type="text" class="image_text" id="image_text" name="image_text" value="profile1.jpeg" readonly>
            
            </div> --}}
            <div class="save_button_container">
                <button type="submit">Save Information</button>
            </div>
        </div>


        {{-- ///////////////////////////////form//////////////////////////////////// --}}
        
    </form>

    {{-- ////////////////////////////////POWERED BY AVICENNA/////////////////////////////// --}}

    <div class="powered--avicenna">
      <div class="first--powered">Powered By AVICENNA ENTERPRISE SOLUTIONS</div>
      <div class="second--powered">Get yours now at <a href="https://avicennaenterprise.com/">www.avicennaenterprise.com</a></div>
    </div>


    {{-- ////////////////////////////////POWERED BY AVICENNA END/////////////////////////////// --}}

    <script>
      var loadFile = function(event) {
        var image = document.getElementById('image_display');
        image.src = URL.createObjectURL(event.target.files[0]);
      };
      </script>
</body>
</html>