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
        html{
          scroll-behavior: smooth;
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
            margin-top: 10px;
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
        background-color: rgb(41, 190, 41);
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
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 5px
      }
      .about_section p{
        font-size: 0.7rem;
        word-break: break-all;
        padding-bottom: 10px;
        color: #5b6061;
      }
      .about_form {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        text-decoration: none;
        right: 0px;
        top: 4px;
        color: white;
        width: 40px;
        font-size: 0.7rem;
        height: 20px;
        background-color: #F76830;

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
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 10px
      }
      .social_links_container{
        display: flex;
        width: 100%;
        flex-wrap: wrap;
        
      }
      .social_link_parent{
       display: flex;
       justify-content:flex-start;
       width: 12%;
       height: 50px;
       
       
      }
        
      .social_link{
        display: flex;

        width: 100%;
        height: 100%;
        /* width: 20%; */
        /* background: #000000; */
        /* margin-right: 15px;
        margin-bottom: 15px; */
      }
      .social_link a img{
        /* height: 50px; */
        height: 100%;
        width: 100%;
      }
      .social_network_edit{
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        text-decoration: none;
        right: 0px;
        top: 4px;
        color: white;
        width: 40px;
        font-size: 0.7rem;
        height: 20px;
        background-color: #F76830; 
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
      .custom_links_container{
        display: flex;
        position: relative;
        width: 93%;
        flex-direction: column;
        margin-top: 10px;
        margin-bottom: 30px;
        border-bottom: 1px solid #c9d1d3;
      }
      .custom_link_heading h4{
        font-size: 1rem;
        font-weight: 600;
        margin-top: 5px;
        margin-bottom: 10px;
      }
      .custom_all_links{
        display: flex;
        flex-direction: column;
        width: 100%;
        margin-bottom: 10px;
        overflow: hidden;
      }
      .custom_link{
        display: flex;
        width: 100%;
        position: relative;
        height: 50px;
        margin-top: 6px;
        margin-bottom: 6px;
        text-decoration: none;
        color: #000000;
        justify-content: flex-start;
        align-items: center;
        
      }
      
      .custom_link img{
        border-radius: 10px;
        width: 50px;
        height: 50px;
      }
      .custom_link_content{
        display: flex;
        margin-left: 15px;
        align-items: center;
        border-bottom: 1px solid #dde5e7;
        height: 100%;
        width: 85%
      }
      .custom_link_tagline{
        display: flex;
        height: 100%;
        align-items: center;
        width:80%;
        
      }
      .custom_link_tagline p{
        max-width: 100%;
        max-height: 100%;
        white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
      }
      .custom_link_button{
        display: flex;
        width: 20%;
        justify-content: center;
        align-items: center;
      }
      .custom_link_button div{
        display: flex;
        justify-content: flex-end;
        align-items: center;
      }
      .custom_link_button div i{
        display: flex;
        margin-left: 15px;
        color: #F76830;
      }
       .custom_link_tagline p{
        font-weight: 600;
        font-size: 1rem;
        
      }
      .custom_link_edit{
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        text-decoration: none;
        right: 0px;
        top: 4px;
        color: white;
        width: 40px;
        font-size: 0.7rem;
        height: 20px;
        background-color:#F76830; 
      }

      .delete_social_button{
        position: absolute;
        top: -3px;
        left: -0px;
        display: flex;
        height: 15px;
        width: 15px;
        background: #FFFFFF;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        

      }
      .delete_social_button i{
        color: rgb(247, 33, 33);
        font-size: 1rem;
        border-radius: 50%;
      }
      .delete_custom_button{
        position: absolute;
        top: 0px;
        left: 0px;
        
        display: flex;
        height: 15px;
        width: 15px;
        background: #FFFFFF;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        
      }
      .delete_custom_button i{
        color: rgb(247, 33, 33);
        font-size: 1rem;
        border-radius: 50%;
      }
      .update_custom_link{
        position: absolute;
        top: 1px;
        left: 36px;
        
        display: flex;
        height: 14px;
        width: 14px;
        background: rgb(41, 190, 41);
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        text-decoration: none;
      }
      .update_custom_link i{
        color: #FFFFFF;
        font-size: 0.5rem;
        border-radius: 50%;
      }
      .qr_code_conatiner{
        display: flex;
        margin-top: 10px;
        flex-direction: column;
        align-items: center;
      }
      .qr_code_heading{
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 20px;
      }
      .qr-code{
        margin-bottom: 40px;
      }

      .buttons_container{
        display: flex;
        width: 93%;
        justify-content: space-between;
        margin-bottom: 40px;
      }
      .public_view_button{
        width: 44%;
      }
      .public_view_button a{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 40px;
        cursor: pointer;
        text-decoration: none;
        border-radius: 5px;
        border: 1px solid #5b6061;
        color: #000000;
        background-color: #FFFFFF;
      }
      .exchange_contact_button{
        width: 54%;
      }
      .exchange_contact_button button{
        width: 100%;
        height: 40px;
        cursor: pointer;
        border-radius: 5px;
        border: none;
        color: white;
        background-color: #F76830;
      }
    </style>
</head>
<body>
    <div class="profile--container">

      <div class="logo--container">
        <a href="/welcome" class="logo"><img src="images/logo/Avicenna.gif" alt="" srcset=""></a>
        <div class="hamburger--menu">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>


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

{{-- //////////////////////////////////////Buttons area start////////////////////////////// --}}

           <div class="buttons_container">

            <div class="public_view_button">
              <a>Live view</a>
            </div>

            <div class="exchange_contact_button">
              <button id="exchange_button">Exchange contact</button>
            </div>

           </div>

{{-- //////////////////////////////////////Button area end////////////////////////////// --}}
        




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
            <a class="social_network_edit" href="{{route("social_icon_adder")}}">Edit</a>
            <div class="social_network_heading"><h4>Social network</h4></div>
            <div class="social_links_container">
              @foreach ($links as $link)
              <div class="social_link_parent"  
              @if (($loop->index%4)!=0|| $loop->index==0)
              style="position: relative; margin-right:10%; margin-bottom:14.5px; "
              @else
              style="position: relative; margin-bottom:14.5px;"
              @endif
              >
                <a target="_blank" href="{{$userlinks[$loop->index]["link_url"]}}" class="social_link">
                
                  <img src="images/social/{{$link->link_image}}" >
                  
                
              </a>
              <a class="delete_social_button" href="{{route('delete-social',["social_id"=>$userlinks[$loop->index]["social_id"]])}}"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
              </div>
              
              @endforeach  
            </div>
        </div>


        {{-- //////////////////////////////////////SOCIAL NETWORK END////////////////////////////// --}}
        

         {{-- //////////////////////////////////////Custom link////////////////////////////// --}}
         <div class="custom_links_container">
          @if ($custom_count<3)
          <a class="custom_link_edit" href="{{route('custom_network_form')}}">Add</a>    
          @endif
          
          
          <div class="custom_link_heading"><h4>Custom links</h4></div>
          <div class="custom_all_links">
            
           @foreach ($customlinks as $customlink)

          
            <div style="position: relative; margin-bottom:10px;">
              <a target="_blank" href="{{$customlink->link_url}}" class="custom_link">
                <div>
                  <img src="images/{{$customlink->image}}" >
                  
                </div>
                
                <div class="custom_link_content">
                  <div class="custom_link_tagline"><p>{{$customlink->title}}</p></div>
                  <div class="custom_link_button">
                    <div style="position: relative;">
                      <i class="fa fa-chevron-right" aria-hidden="true"></i>
                      
                    </div>
                    
                  </div>
                </div>
                
              </a>
              <a class="update_custom_link" href="{{route('custom_link_update_form',["custom_id"=>$customlink->id])}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
              <a class="delete_custom_button" href="{{route('delete_custom_link',["custom_id"=>$customlink->id])}}"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
            </div>
           
           @endforeach

          </div>
         </div>
          {{-- //////////////////////////////////////Custom link END////////////////////////////// --}}
        


          {{-- //////////////////////////////////////QR CODE START////////////////////////////// --}}

          <div class="qr_code_conatiner">
            <div class="qr_code_heading">Scan here to connect</div>
            <div class="qr-code">
              <?php
               $uri = $_SERVER['REQUEST_URI'];
               $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
               $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
               ?>
              {!! QrCode::size(100)->generate($url.'/'.$userDetails->email); !!}
            </div>

          </div>

          {{-- //////////////////////////////////////QR CODE END////////////////////////////// --}}



    </div>
    <script>


   function scroll() {
    console.log("hello");
    
   }

   var  exchange_button=document.getElementById('exchange_button').onclick=function scroll(params) {
    window.scrollTo(0,document.body.scrollHeight);
}



      var first_check=0;
      var socials=document.querySelectorAll('.social_link_parent');
setInterval(()=>{
    var random=Math.floor(Math.random() * 2);
    for (let index = 0; index < socials.length; index++) {
        if(random==0){
            if(index%2==0){
                socials[index].style.transform="translateY(-2px)"
                socials[index].style.transition="all 0.3s";
            }else if(first_check!=0 && index%2!=0 ){
                socials[index].style.transform="translateY(2px)"
                socials[index].style.transition="all 0.3s";
            }
            first_check++;
        }else{
            if(index%2!=0){
                socials[index].style.transform="translateY(-2px)"
                socials[index].style.transition="all 0.3s";
            }else if(index%2==0){
                socials[index].style.transform="translateY(2px)"
                socials[index].style.transition="all 0.3s";
            }
        }
    }
       
},5000)
    </script>
</body>
</html>