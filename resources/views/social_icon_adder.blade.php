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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


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
        width: 90%;
        align-items: center;
        margin-top: 25px;
        color: #575a5a;
        text-decoration: none;
        background-color: #FFFFFF;
        justify-content: center;
      }
      .logo{
        display: flex;
        width: 100%;
        align-items: center;
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
        flex-direction: column;
        width: 100%;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
      }
      .link_url{
        border: none;
        outline: none;
        width: 70%;

        border-bottom: 1px solid #bfc3c4;
      }
      .hint{
        display: flex;
        margin-top: 15px;
        font-size: 0.8rem;
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
      /* body{
        position: relative;
      } */
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


    <div class="profile--container" action="#" method="POST" enctype="multipart/form-data">
        

      <a href="/welcome" class="logo--container">
        <div  class="logo"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;back</div>
        {{-- <div class="hamburger--menu">
          <div></div>
          <div></div>
          <div></div>
        </div> --}}
      </a>


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
        <form action="{{route('submit_link')}}" method="POST" class="modal" id="modal">
            @csrf
            <a class="down_button"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
            <div class="modal--heading">{{$link->link_name}}</div>
            <div class="social--icon">
                <img src="images/social/{{$link->link_image}}" alt="" srcset="">
            </div>
            <div class="input_fields">
                <input type="text" class="link_url" name="link_text" id="link_url" required placeholder="Add url here...">
                <input type="text" class="url_inputs" name="link_url" hidden>
                <input type="text" name="link_id" value="{{$link->id}}" hidden>
                <p class="hint">https://www.linked.com/</p>
            </div>
            <div class="save_button_container">
                <button type="submit">save</button>
            </div>            
        </form>
        @endforeach
        {{-- ////////////////////////////////POWERED BY AVICENNA/////////////////////////////// --}}

        <div class="powered--avicenna">
          <div class="first--powered">Powered By AVICENNA ENTERPRISE SOLUTIONS</div>
          <div class="second--powered">Get yours now at <a href="https://avicennaenterprise.com/">www.avicennaenterprise.com</a></div>
        </div>


        {{-- ////////////////////////////////POWERED BY AVICENNA END/////////////////////////////// --}}
<script>


const arr=[

    {
        id:1,
        name:"linkedin",
        baseUrl:"https://www.linkedin.com/in/"
    },
    {
        id:2,
        name:"line",
        baseUrl:"https://line.me/en/"
    },
    {
        id:3,
        name:"khamsat",
        baseUrl:"https://www.khamsat.com/"
    },
    {
        id:4,
        name:"linktree",
        baseUrl:"https://www.linktree.com/"
    },
    {
        id:5,
        name:"menu",
        baseUrl:"https://menu.com.pk/"
    },
    {
        id:6,
        name:"phone",
        baseUrl:"tel:"
    },
    {
        id:7,
        name:"facetime",
        baseUrl:"https://www.facetime.com/"
    },
    {
        id:8,
        name:"facebook",
        baseUrl:"https://www.facebook.com/"
    },
    {
        id:9,
        name:"pinterest",
        baseUrl:"https://pin.it/"
    },

]




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
  for (let index = 0; index < modals.length; index++) {
    modals[index].style.display="none"
  }
}
}


const link_inputs=document.querySelectorAll('.link_url');
const hints=document.querySelectorAll('.hint')

const url_inputs=document.querySelectorAll('.url_inputs')
for (let index = 0; index < hints.length; index++) {
  
  hints[index].innerHTML=arr[index]["baseUrl"]
}
for (let index = 0; index < link_inputs.length; index++) {
  $(link_inputs[index]).keyup(()=>{
    hints[index].innerHTML=arr[index]["baseUrl"]+link_inputs[index].value
    url_inputs[index].value=hints[index].innerHTML
  })
}
// const link_url=document.getElementById('link_url');
// link_url.onkeydown(()=>{
//     document.getElementById('hint').innerHTML=document.getElementById('hint').innerHTML+link_url.value;
// })
// $(input_fields[index]).focus(function () {
//     $('#loaderIcon').show();
//     $('#tick_icon').hide();
// })
</script>

    
</body>
</html>