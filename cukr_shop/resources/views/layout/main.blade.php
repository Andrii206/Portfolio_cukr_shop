<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container  ">
        <header class="bg-body sticky-top d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img height="75" src="{{ asset('storage/logo/a2c9c6a8f2a0c2b359901b4f06f69d38.png') }}">
            </a>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex align-items-center" role="search" action="{{ route('main') }}" method="GET" id="title">
                <input type="search" class="form-control" placeholder="Пошук..." aria-label="Search" name="title">
                @if(request()->has('category_id'))
                    <input type="hidden" name="category_id" value="{{ request()->input('category_id') }}">
                @endif
                @if(request()->has('price'))
                    <input type="hidden" name="price" value="{{ request()->input('price') }}">
                @endif
            </form>
            
            
                     
            <ul class="nav nav-pills d-flex align-items-center">
                <li class="nav-item"><a href="#" class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-25-hover mx-2">Доставка</a></li>
                <li class="nav-item"><a href="#" class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-25-hover mx-2">Оплата</a></li>
                <li class="nav-item"><a href="#" class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-25-hover mx-2">Про нас</a></li>
                <li class="nav-item"><a href="{{ route('home') }}" class="link-dark link-offset-2 link-underline-opacity-0 link-underline-opacity-25-hover mx-2">Авторизуваться</a></li>
                @can('view', auth()->user())
                    <li class="nav-item"><a href="{{ route('admin.admin') }}" class="nav-link">Admin</a></li>
                @endcan
            </ul>
            <div class=" d-flex align-items-center ">
                <button class="btn btn-dark position-relative ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                    @if($postsUser)
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{$postsUser -> count()}}</span>
                    @endif
                    <span class="visually-hidden">unread messages</span>
                </span>
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Кошик</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        @if(!$postsUser || $postsUser -> count() < 1)
                            <p>В вас ще немає посітв</p>
                        @else
                            @foreach($postsUser as $postUser)
                                <div class="card my-3">
                                    <img src="{{ url('storage/' . $postUser -> image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $postUser -> title }}</h5>
                                        <p class="card-text">{{ $postUser -> price }}</p>
                                        <p class="card-text"><small class="text-body-secondary">{{ $postUser -> category ->title }}</small></p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            
        </header>

        @yield('content')

        <footer>
            <div class="row">
                <div class="col-lg-6 text-start">
                    <div>
                        <p>Суми</p>
                        <p>вул. Кузнечна, 2</p>
                        <a>+380732732383</a>
                        <a>post@cukr.city</a>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <div>
                        <p class="text-center fs-5 fw-bold">Ми у соц мережах</p>
                    </div>
                    <div class="row text-center">
                        <div class="col-4 text-end">
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                </svg>
                            </a>
                        </div>
                        <div class="col-4">
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                </svg>
                            </a>
                        </div>
                        <div class="col-4 text-start">
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </footer> 
    </div>
</body>
</html>