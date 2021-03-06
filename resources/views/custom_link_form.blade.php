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
    <title>Add custom</title>
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
        width: 94%;
        align-items: center;
        margin-top: 20px;
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
      .image_section{
        display: flex;
        position: relative;
        width: 100px;
        height: 50px;
      }
      .label_for_profile{
        position: absolute;
        font-size: 2rem;
        top: 10px;
        left: 60px;
        color: rgb(41, 190, 41);
        cursor: pointer;
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
    <form class="profile--container" action="{{route("custom_link_submit")}}" method="POST" enctype="multipart/form-data">
        

        <a href="/welcome" class="logo--container">
          <div  class="logo"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;back</div>
          {{-- <div class="hamburger--menu">
            <div></div>
            <div></div>
            <div></div>
          </div> --}}
        </a>


        <div class="custom_link_form_heading">
            <h4>Add a new link</h4>
        </div>

        <div class="profile_form" >
            @csrf
             <div class="form_name">
                 <div>Title</div>
                 <input required  type="text" class="name_input" id="name_input" name="title" >
             </div>
             <div class="form_job title">
                 <div>Link url</div>
                 <input required type="text" class="job_input" id="job_input" name="link_url" >
             </div>
             <div class="form_image">
                 <div>Image</div>
                 <div class="image_section">
                  <div>
                    <img src="/images/placeholder.png"  width="50" height="50" id="image_display" alt="" srcset="">
                  </div>
                  <div>
                    <label class="label_for_profile" for="image_text">
                      <i class="fa fa-upload" aria-hidden="true"></i>
                      <input required type="file" class="image_text" hidden id="image_text" onchange="loadFile(event)"  accept="image/*"  name="image">
                  </label>
                  </div>
                  
                  
                 </div>
                 
             
             </div>
             <div class="save_button_container">
                 <button type="submit">Save </button>
             </div>
         </div>



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