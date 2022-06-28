
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loader</title>
</head>
<body>
    <div id="loaderIcon" class="spinner-border text-primary" style="display:none" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <button class="btn-primary" onclick="callAjax();"> Call Ajax </button>
</body>
</html>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
function callAjax(e){
    $('#loaderIcon').show();
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
}
</script>