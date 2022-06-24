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
    </style>
</head>
<body>
    <form class="profile--container" action="{{route("submit_about")}}" method="POST" enctype="multipart/form-data">
        


        {{-- ///////////////////////////////form//////////////////////////////////// --}}
        <div class="profile_form" >
           @csrf
            <div class="form_name">
                <div>About</div>
                <input type="text" class="about_input" id="about_input" name="about" value="{{$about}}">
            </div>
            <div class="save_button_container">
                <button type="submit">Save Information</button>
            </div>
        </div>


        {{-- ///////////////////////////////form//////////////////////////////////// --}}
        
    </form>
</body>
</html>