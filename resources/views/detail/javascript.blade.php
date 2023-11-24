<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $javascripts->title }}</title>
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        pre {
            background-color: black;
            color: white;
            padding: 30px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    @include('components.navigation')
    <!-- end navbar -->
    <!-- content detail postingan -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 image-detail">
                <img src="{{ asset('/storage/javascript/' . $javascripts->image) }}" class="rounded mx-auto d-block " alt="" srcset="">
            </div>
            <div class="col-md-6 ">
                <h4>{{ $javascripts->title }}</h4>
                <p>{{ $javascripts->created_at->locale('id')->diffForHumans() }}</p>
            </div>
            <div class="col mt-5 mx-auto">
                {!! $javascripts->content !!}
            </div>
        </div>
    </div>
    <!-- end content -->
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>