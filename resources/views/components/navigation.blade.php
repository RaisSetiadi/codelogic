<nav class="navbar navbar-expand-lg bg-body-secondary shadow  border-bottom-dark">
    <div class="container-fluid">
        <img src="{{ asset('image/code.png') }}" style="width: 200px;" alt="" srcset="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold fs-3" aria-current="page" href="{{ route('users.index') }}">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link fw-bold fs-3" href="{{route('users.laravel')}}">Laravel</a></li>
                <li class="nav-item"><a class="nav-link fw-bold fs-3" href="{{route('users.javascript')}}">JavaScript</a></li>
                <li class="nav-item"><a class="nav-link fw-bold fs-3" href="{{route('users.java')}}">Java</a>
                </li>
                <li class="nav-item"><a class="nav-link fw-bold fs-3" href="{{route('users.react')}}">React</a>
                </li>
                <div class="container-fluid d-grid">
                    <form action="{{ route('users.index') }}" method="GET" class="mt-3 mx-auto max-w-xl py-2 px-6 rounded-full bg-white border flex focus-within:border-gray-300 ">
                        <input type="text" name="cari" placeholder="Apa Yang Anda Ingin Ketahui" value="{{ old('cari') }}" class="bg-transparent w-full focus:outline-none pr-4 font-semibold border-0 focus:ring-0 px-0 py-0">
                        <button class="btn btn-primary" value="search" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>

                    </form>


                </div>
                {{-- <li class="nav-item dropdown fw-bold">
                    <a class="nav-link dropdown-toggle fs-3" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Kategori
                    </a>
                    <ul class="dropdown-menu">
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>