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
    <title>Add Social icons</title>
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
      .social_icons_adder_heading h4{
        font-size: 1.2rem;
        margin-top: 10px;
        margin-bottom: 20px;
      }
      .social_icons_container{
        display: flex;
        justify-content: center;
        width: 100%;
        flex-wrap: wrap;
      }
      .social_link{
        display: flex;
        position: relative;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 33%;
        cursor: pointer;
        margin-bottom: 20px; 
      }
      .social_link p{
        margin-right: 10px;
      }
      .social_link img{
        width: 60px;
        height: 60px;
      }
      .modal{
        display: none;
        flex-direction: column;
        height: 300px;
        width: 100%;
        align-items: center;
        border-top-left-radius: 25px;
        border-top-right-radius: 25px;
        position: fixed;
        border:1px solid lightgray;
        background: #FFFFFF;
        bottom: 0%;
      }
      .save_button_container{
        display: flex;
        width: 100%;
        justify-content: center;
      }
      .save_button_container button{
        width: 70%;
        height: 30px;
        color: white;
        border-radius: 6px;
        cursor: pointer;
        background: #F76830;
        border: none;
      }
      .social_logo_container{
        position: relative;
        height: 70px;
        width: 70px;
      }
      .social--icon img{
        height: 70px;
        width: 70px;
        margin-bottom: 20px;
      }
      .modal--heading{
        font-size: 1.2rem;
        font-weight: 500;
        margin: 20px;
      }
      .input_fields{
        display: flex;
        width: 100%;
        justify-content: center;
        margin-bottom: 20px;
      }
      .link_url{
        border: none;
        outline: none;
        width: 70%;

        border-bottom: 1px solid #bfc3c4;
      }
      .down_button{
        position: absolute;
        right: 15px;
        top: 17px;
        cursor: pointer;
      }
      .tick_icon_load{
        position: absolute;
        background: #FFFFFF;
        border-radius: 50%;
        top: -2px;
        right: 5px;
        color: rgb(41, 190, 41);
      }
    </style>
</head>
<body>


    <div class="profile--container" action="#" method="POST" enctype="multipart/form-data">
        

        <div class="logo--container">
          <a href="/welcome" class="logo"><img src="images/logo/Avicenna.gif" alt="" srcset=""></a>
          <div class="hamburger--menu">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>


        <div class="social_icons_adder_heading">
            <h4>Add social icons</h4>
        </div>
        
        <div class="social_icons_container">
                 @foreach ($links as $link)
                     <a class="social_link">
                        
                        <div class="social_logo_container">
                            <?php $view=false; ?>
                        @foreach ($user_links as $user_link)
                        @if ($link->id==$user_link->social_id)
                        
                        <?php $view=true; ?> 
                        @endif
                        @endforeach
                        @if ($view==true)
                        <i class="fa fa-check-circle tick_icon_load" aria-hidden="true"></i>
                        @endif
                            <img src="images/social/{{$link->link_image}}" alt="" srcset="">
                        </div>
                        
                        <p>{{$link->link_name}}</p>
                     </a>
                 @endforeach
        </div>
        
    </div>
    @foreach ($links as $link)
        <form action="{{route('submit_about')}}" method="POST" class="modal" id="modal">
            @csrf
            <a class="down_button"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
            <div class="modal--heading">{{$link->link_name}}</div>
            <div class="social--icon">
                <img src="images/social/{{$link->link_image}}" alt="" srcset="">
            </div>
            <div class="input_fields">
                <input type="text" class="link_url" name="link_url" required placeholder="Add url here...">
                <input type="text" name="link_id" value="{{$link->id}}" hidden>
            </div>
            <div class="save_button_container">
                <button type="submit">save</button>
            </div>            
        </form>
        @endforeach
<script>
const modals=document.querySelectorAll('.modal');    
const social_links=document.querySelectorAll('.social_link');
const down_buttons=document.querySelectorAll('.down_button');
for (let index = 0; index < social_links.length; index++) {
  social_links[index].onclick = function() {
  modals[index].style.display = "flex";
}
}
for (let index = 0; index < down_buttons.length; index++) {
  down_buttons[index].onclick = function() {
  modals[index].style.display = "none";
}
}

</script>

    
</body>
</html>