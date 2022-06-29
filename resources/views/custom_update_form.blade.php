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
    <title>update custom</title>
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
        .logo--container{
        display: flex;
        align-items: center;
        width: 100%;
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
      .custom_link_form_heading{
        width: 92%;
        margin-top:20px; 
      }
      .custom_link_form_heading h4{
        font-size: 1.3rem;
        font-weight: 600;
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
    <form class="profile--container" action="{{route("custom_link_update")}}" method="POST" enctype="multipart/form-data">
        

        <div class="logo--container">
          <a href="/welcome" class="logo"><img src="images/logo/Avicenna.gif" alt="" srcset=""></a>
          <div class="hamburger--menu">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>


        <div class="custom_link_form_heading">
            <h4>Update custom link</h4>
        </div>

        <div class="profile_form" >
            @csrf
             <div class="form_name">
                 <div>Title</div>
                 <input required  type="text" class="name_input" id="name_input" value="{{$Title}}" name="title" >
             </div>
             <div class="form_job title">
                 <div>Link url</div>
                 <input required type="text" class="job_input" id="job_input" name="link_url" >
             </div>
             <div class="form_image">
                 <div>Image</div>
                 <input required type="file" class="image_text" id="image_text" name="image" value="profile1.jpeg">
             
             </div>
             <div class="save_button_container">
                 <button type="submit">Save </button>
             </div>
         </div>



    </form>
</body>
</html>