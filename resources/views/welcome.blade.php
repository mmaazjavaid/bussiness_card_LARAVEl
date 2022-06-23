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
            background-color: #000000;
            align-items: center;
            border-radius: 20px;
            overflow: hidden;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .header--container div{
            display: flex;
            width: 50%;
            

        }
        .profile--picture{
            position: relative;
        }
        
        .profile--picture img{
            width:100%;
            height: 100%;
        }
        
        .header--content{
            display: flex;
            flex-direction: column;
            color: #EBEBEB;
        }
        .header--content h3{
            margin-left: 10px;
        }
        .header--content p{
            margin-left: 10px;
        }
        .label_for_profile{
            position: absolute;
            bottom: -30px;
            z-index: 3;
            left: 15px;
        }
        .profile_input{
        display: none;
      }
    </style>
</head>
<body>
    <div class="profile--container">
        <form class="form" action="{{route("save_data")}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="header--container">
            <div class="profile--picture">
                <img src="images/profile.jpeg" alt="profile" srcset="">
                <label class="label_for_profile" for="file">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                    
                    <input class="profile_input" type="file" name="image" id="file" >
                  </label>
                
                {{-- <input type="file" name="image" > --}}
            </div>
            <div class="header--content">
                <h3>Muhammad Maaz</h3>
                <p>Software Engineer</p>
            </div>
        </div>

        
        </form>
    </div>
</body>
</html>