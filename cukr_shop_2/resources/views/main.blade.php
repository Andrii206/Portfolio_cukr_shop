@extends('layout.main')
@section('content')     
        <div class="body">
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assetc/204b03e27b99b0ac787489659eb66718-0.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assetc/29d88e1efca7bf9d09e0f35995948fd8-0.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assetc/4d284a36bd8c1b35548809573afd4026-1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assetc/868ec1af0888b5468b035072667dff7d-9.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="filter ">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="dropdown float-start">
                        <button class="btn btn-outline-secondary mt-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class=" dropdown-menu">
                            <li><a class="dropdown-item" href="#">Усі категорії</a></li>
                            <li><a class="dropdown-item" href="#">Товари від цукру</a></li>
                            <li><a class="dropdown-item" href="#">Товари від локальних виробників</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="dropdown float-end">
                        <button class="btn btn-outline-secondary mt-4"  type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Без сортування 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Без сортування</a></li>
                            <li><a class="dropdown-item" href="#">За збільшенням ціни</a></li>
                            <li><a class="dropdown-item" href="#">За зменшенням ціни</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content row">
            <div class="col-lg-3">
                <div class="card mx-1 mt-3 align-items-center">
                    <img height="250" src="assetc/39733af06883604c514f0354b5f4e162-8_small_square.jpg" class="card-img-top" width="100" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10 ">
                                <h5 class="card-title">Набір шкарпеток</h5>
                                <p class="card-text">350.00</p>
                            </div>
                            <div class="col-lg-2 p-0 m-0">                                <a href="#" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mx-1 mt-3 align-items-center">
                    <img height="250" src="assetc/06ef9640b7cfd8b50f6122577b707866-6_small_square.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10">
                                <h5 class="card-title">Набір шкарпеток</h5>
                                <p class="card-text">350.00</p>
                            </div>
                            <div class="col-lg-2 p-0 m-0">                                <a href="#" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mx-1 mt-3 align-items-center">
                    <img height="250" src="assetc/8d1eea9ca4bab7156fbe2dbad5ef8d06-2_small_square.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10">
                                <h5 class="card-title">Набір шкарпеток</h5>
                                <p class="card-text">350.00</p>
                            </div>
                            <div class="col-lg-2 p-0 m-0">                                <a href="#" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mx-1 mt-3 align-items-center">
                    <img height="250" src="assetc/61ac143211d57035bf22f77ae7c4ab30-1_small_square.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10">
                                <h5 class="card-title">Набір шкарпеток</h5>
                                <p class="card-text">350.00</p>
                            </div>
                            <div class="col-lg-2 p-0 m-0">                                <a href="#" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mx-1 mt-3 align-items-center">
                    <img height="250" src="assetc/abc7e3c1548f156392ba53cec507931f-0_small_square.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10">
                                <h5 class="card-title">Набір шкарпеток</h5>
                                <p class="card-text">350.00</p>
                            </div>
                            <div class="col-lg-2 p-0 m-0">                                <a href="#" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mx-1 mt-3 align-items-center">
                    <img height="250" src="assetc/ccbef3404fe361105229b71b28a86f60-3_small_square.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10">
                                <h5 class="card-title">Набір шкарпеток</h5>
                                <p class="card-text">350.00</p>
                            </div>
                            <div class="col-lg-2 p-0 m-0">                                <a href="#" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3">
                <div class="card mx-1 mt-3 align-items-center">
                    <img height="250" src="assetc/d6af80f7f63c2cf933b715dabb12f39f-7_small_square.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10">
                                <h5 class="card-title">Набір шкарпеток</h5>
                                <p class="card-text">350.00</p>
                            </div>
                            <div class="col-lg-2 p-0 m-0">                                
                                <a href="#" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mx-1 mt-3 align-items-center">
                    <img height="250" src="assetc/dfaf60cb99b0bd48e6b108e836e10183-7_small_square.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-10">
                                <h5 class="card-title">Набір шкарпеток</h5>
                                <p class="card-text">350.00</p>
                            </div>
                            <div class="col-lg-2 p-0 m-0">                                
                                <a href="#" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>                                                                                                      
        </div>
@endsection
        