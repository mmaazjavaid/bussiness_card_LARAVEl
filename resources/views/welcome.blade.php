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
            background-color: #EBEBEB;
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
    </style>
</head>
<body>
    <div class="profile--container">
        <div class="header--container">
            <a class="edit_route" href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <div class="profile--picture">
                <img src="images/profile.jpeg" alt="profile" srcset="">
                {{-- <label class="label_for_profile" for="file">
                    <i class="fa fa-camera profile_input_icon" aria-hidden="true"></i>
                    
                    <input class="profile_input" type="file" name="image" id="file" >
                </label> --}}
                
            
            </div>
            <div class="header--content">
                <h3>Muhammad Maaz</h3>
                <p>Software Engineer</p>
            </div>
        </div>
        <div class="about_section">

            <input type="text" hidden id="about_input">
        </div>

        <div class="save_button_container">
            <button type="submit">Save Information</button>
        </div>
        
    </div>
</body>
</html>