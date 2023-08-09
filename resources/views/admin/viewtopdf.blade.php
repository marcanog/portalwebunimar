<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$notification[0]->subject}}</title>
    <link rel="shortcut icon" href="{{ public_path('image/unimar.ico') }}">
    <!-- Public Resources -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Font: Source Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
</head>
<body>
    <div class="card-primary">
        <div class="card-body p-0">
            <div class="mailbox-read-info">
                <h5 style="padding-bottom:5px; text-align:center;" id="subjectshow">{{$notification[0]->subject}}</h5>
            </div>
            <div class="mailbox-read-message" id="contentshow" ></div>
                {!!($content)!!}
            <h6 class="small" id="usershow"><span class='mailbox-read-time' style='float:right'>{{$notification[0]->created_at}}</span></h6>
        </div>
    </div>
</body>
</html>