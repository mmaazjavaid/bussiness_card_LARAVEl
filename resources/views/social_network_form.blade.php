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

    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
  
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
            justify-content: space-between;
            width: 100%;
        }
        .social_link_input_area select{
            width: 25%;
            height: 40px;
            border: none;
            outline: none;
            border-bottom: 1px solid #bfc3c4;
        }
        .social_link_input_area input{
            width: 70%;
            height: 40px;
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
    </style>
</head>
<body>

    <div class="profile--container" id="profile--container">
        <div class="social_link_form_container" id="social_link_form_container">
            @foreach ($user_links as $user_link)
            <div class="social_link_select_area">
                <div class="social_link_select_area_heading" id="social_link_select_area_heading">
                    <p>Social network</p>
                </div>
                <div class="social_link_input_area">
                    <select  name="link_name" id="">
                        @foreach ($all_links as $all_link)
                        @if ($all_link->id==$user_link->id)
                        <option selected value="{{$all_link->id}}">{{$all_link->link_name}}</option>    
                        @else
                        <option value="{{$all_link->id}}">{{$all_link->link_name}}</option>    
                        @endif   
                        @endforeach   
                    </select>  
                    <input type="text" name="link_url" placeholder="link url">
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


    
</body>
</html>