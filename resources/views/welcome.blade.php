<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Dashboard</title>
</head>
<body>
    <div class="profile_container">
        <form action="{{route("save_data")}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="header--container">
            <div class="profile--picture">
                <img src="images/person.jpeg" alt="profile" srcset="">
                <input type="file" name="image" >
            </div>
            <div class="header--content">
                <h3>Muhammad Maaz</h3>
                <p>Software Engineer</p>
            </div>
        </div>
        <button type="submit">submit</button>
        </form>
    </div>
</body>
</html>