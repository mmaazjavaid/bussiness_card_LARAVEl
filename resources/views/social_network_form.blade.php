<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Social Link Form</title>
    {{-- <script src="js/add_social.js" defer></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  
    <!-- Load our React component. -->

<script src="js/add_social.js" defer></script>

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
        .social_link_form_container{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 95%;
        }
        .social_link_select_area{
            margin-top: 10px;
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
            width: 100%;
            justify-content: space-between;
        }
        .social_link_select_area_heading{
            position: relative;
        }
        .social_link_select_area_heading p{
            font-size: 0.9rem;
        }
        .social_link_input_area{
            display: flex;
            justify-content: flex-start;
            width: 100%;
        }
        .social_link_input_area select{
          display: flex;
            width: 20% ;
            height: 30px ;
            border: none ;
            margin-right: 10px ;
            outline: none ;
            border-bottom: 1px solid #bfc3c4 ;
        }
        .social_link_input_area select option{
          background: #bfc3c4;
        }
        .social_link_input_area input{
            width: 58%;
            height: 30px;
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
      .add_new_button{
        display: flex;
        width: 95%;
        margin-top: 20px;
        justify-content: flex-start;
      }
      .add_new_button button{
        border: none;
        background: none;
        width: max-content;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
      }
      .add_new_button button h5{
        color: #cc3321;
        margin-left: 5px;
        font-size: 1rem !important;
      }
      .save_button{
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        text-decoration: none;
        right: 10px;
        top: 4px;
        color: white;
        width: 40px;
        border: none;
        font-size: 0.8rem;
        height: 20px;
        background-color: #cc3321; 
      }
      .logo--container{
        display: flex;
        align-items: center;
        width: 95%;
        margin-top: 5px;
        justify-content: space-between;

      }
      
      .logo img{
        margin-left: 5px;
        width: 70px;
        height: 70px;
      }
      .hamburger--menu{
        margin-right: 15px;

      }
      /* .hamburger--menu div{
        width: 25px;
        border-top:2px solid #F76830;
      } */
      .delete_button{
        display: flex;
        position: absolute;
        right: 35px;
        top: 10px;
        text-decoration: none;
      }
      .edit_button{
        display: flex;
        position: absolute;
        right: 5px;
        top: 10px;
        text-decoration: none;
      }
      /* .delete_button i,.edit_button i{
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        text-decoration: none;
        right: 10px;
        border: none;
        top: 4px;
        color: white;
        width: 40px;
        font-size: 0.7rem;
        height: 20px;
        background-color: #F76830; 
      } */
      .delete_button i{
        
        color: #cc3321;
        font-size: 1.3rem;
      }
      .edit_button i{
        color: rgb(41, 190, 41);
        font-size: 1.3rem;
      }

      





    </style>
</head>
<body>

    <div class="profile--container" id="profile--container">
        <div class="logo--container">
            <div class="logo"><img src="images/logo/Avicenna.gif" alt="" srcset=""></div>
            <div class="hamburger--menu">
              <div id="loaderIcon" class="spinner-border text-success" style="display:none; height:20px; width:20px;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            </div>
          </div>
        <div class="social_link_form_container" id="social_link_form_container">
            @foreach ($user_links as $user_link)
            <div class="social_link_select_area">
                <div class="social_link_select_area_heading" id="social_link_select_area_heading">
                    {{-- <p>Social network</p> --}}
                    <a href="{{route('delete-social',["social_id"=>$user_link->social_id])}}" class="delete_button"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                    <a class="edit_button"><i class="fa fa-check-circle" aria-hidden="true"></i></a>
                </div>
                <div class="social_link_input_area">
                    <select   name="link_name" id="link_name" aria-readonly="true">
                        @foreach ($all_links as $all_link)
                        @if ($all_link->id==$user_link->social_id)
                        <option selected value="{{$all_link->id}}">{{$all_link->link_name}}</option>    
                        @else
                        <option value="{{$all_link->id}}">{{$all_link->link_name}}</option>    
                        @endif   
                        @endforeach   
                    </select>  
                    <input id="link_url_input" class="link_url_input"  type="text" name="link_url" value="{{$user_link->link_url}}" placeholder="link url">
                </div>
            </div>  
            @endforeach
            <div class="add_new_button" id="add_new_button">
                <button onclick="addNew()"> + <h5>Add social network</h5></button>
            </div>
            <div class="save_button_container">
                <button type="submit">Save Information</button>
            </div>
        </div>
        
    </div>

    
<script>

  var input_fields=document.querySelectorAll(".link_url_input");
for (let index = 0; index < input_fields.length; index++) {
  $(input_fields[index]).focus(function () {
    $('#loaderIcon').show();
})
}


for (let index = 0; index < input_fields.length; index++) {
  $(input_fields[index]).focusout(()=>{
  $('#loaderIcon').hide();
})
}
    // $.ajax({
    //     type: "GET",
    //     url: 'https://api.joind.in/v2.1/talks/10889',
    //     data: {
    //         format: 'json'
    //     },
    //     success: function(response){
    //        console.log(response);
    //     },
    //     complete: function(){
    //         $('#loaderIcon').hide();
    //     }
    // });
</script>

    
</body>
</html>