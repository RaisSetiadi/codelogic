<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="style.css">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('app.css') }}"> --}}

</head>

<body>
    <!-- navbar start -->
    @include('components.navigation')
    <!-- end navbar -->

    <!-- Carouserl Konten -->
    <div class="hero-image">
        <img src="{{ asset('image/hero.jpg') }}" class="d-block w-100" alt="...">
        {{-- <h1 style="position: absolute; z-index: 2">Beyond Code, Into Logic</h1> --}}
    </div>
    <!-- end carousel -->

    <!-- recent post start  -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h5>Home Page</h5>
                <hr />
            </div>
            <div class="judul-laravel mt-3 ">
                <a href="#" style="text-decoration: none;">
                    <h5>Laravel</h5>
                </a>
            </div>
            @foreach ($laravels as $data)
            <div class="col-md-3 mt-5">
                <div class="card">
                    <a href="{{ route('detail.laravel', $data->id) }}"><img src="{{ asset('/storage/posts/' . $data->image) }}" class="d-block w-100 image-cover-post-home" alt=""></a>
                    <div class="card-body">
                        <a href="#" class="card-title link-underline link-underline-opacity-0 fs-5 fw-semibold ">{{ $data->title }}</a>
                        <p class="card-title">{!! $data->deskripsi !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="judul-javascript mt-5">
                <a href="#" style="text-decoration: none;">
                    <h5>javascript</h5>
                </a>
            </div>
            @foreach ($javascripts as $data)
            <div class="col-md-3 mt-5">
                <div class="card">
                    <a href="{{ route('detail.javascript',$data->id) }}" class="d-block w-100 image-cover-post-home" alt=""><img src="{{ asset('/storage/posts/' . $data->image) }}" class="d-block w-100 image-cover-post-home" alt=""></a>
                    <div class="card-body">
                        <a href="#" class="card-title link-underline link-underline-opacity-0 fs-5 fw-semibold">{{ $data->title }}</a>
                        <p class="card-title">{!! $data->deskripsi !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="judul-java mt-5">
                <a href="#" style="text-decoration: none;">
                    <h5>java</h5>
                </a>
            </div>

            @foreach ($javas as $data)
            <div class="col-md-3 mt-5">
                <div class="card">
                    <a href="{{ route('detail.java',$data->id) }}" class="d-block w-100 image-cover-post-home" alt=""><img src="{{ asset('/storage/posts/' . $data->image) }}" class="d-block w-100 image-cover-post-home" alt=""></a>
                    <div class="card-body">
                        <a href="#" class="card-title link-underline link-underline-opacity-0 fs-5 fw-semibold">{{ $data->title }}</a>
                        <p class="card-title">{!! $data->deskripsi !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="judul-java mt-5">
                <a href="#" style="text-decoration: none;">
                    <h5>Flutter</h5>
                </a>
            </div>
            @foreach ($flutter as $data)
            <div class="col-md-3 mt-5">
                <div class="card">
                    <a href="{{ route('detail.flutter',$data->id) }}" class="d-block w-100 image-cover-post-home" alt=""><img src="{{ asset('/storage/posts/' . $data->image) }}" class="d-block w-100 image-cover-post-home" alt=""></a>
                    <div class="card-body">
                        <a href="#" class="card-title link-underline link-underline-opacity-0 fs-5 fw-semibold">{{ $data->title }}</a>
                        <p class="card-title">{!! $data->deskripsi !!}</p>
                    </div>
                </div>
            </div>
            @endforeach


            <div class="judul-java mt-5">
                <a href="#" style="text-decoration: none;">
                    <h5>Bootstrap</h5>
                </a>
            </div>

            @foreach ($bootstrap as $data)
            <div class="col-md-3 mt-5">
                <div class="card">
                    <a href="{{ route('detail.flutter',$data->id) }}" class="d-block w-100 image-cover-post-home" alt=""><img src="{{ asset('/storage/posts/' . $data->image) }}" class="d-block w-100 image-cover-post-home" alt=""></a>
                    <div class="card-body">
                        <a href="#" class="card-title link-underline link-underline-opacity-0 fs-5 fw-semibold">{{ $data->title }}</a>
                        <p class="card-title">{!! $data->deskripsi !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="judul-ruby mt-5">
                <a href="#" style="text-decoration: none;">
                    <h5>React</h5>
                </a>
            </div>
            @foreach ($react as $data)
            <div class="col-md-3 mt-5">
                <div class="card">
                    <a href="{{ route('detail.react',$data->id) }}"><img src="{{ asset('/storage/posts/' . $data->image) }}" class="d-block w-100 image-cover-post-home" alt=""></a>
                    <div class="card-body">
                        <a href="#" class="card-title link-underline link-underline-opacity-0 fs-5 fw-semibold">{{ $data->title }}</a>
                        <p class="card-title">{!! $data->deskripsi !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @include('components.footer')
    <!-- end recent post -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>