<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Project</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <h3 class="navbar-brand fw-bold text-info">LOGO GOES HERE</h3>
            <div class="textLink">
                <input type="text" class="form-control rounded-pill justify-content-center" placeholder="Search Upsidelinks">
            </div>
            <div class="right-pane">
                <ul class="d-flex">
                    <button type="button" class="btn btn-link btn-floating">
                        <i class="fa-solid fa-comment-dots fa-lg"></i>
                    </button>
                    <button type="button" class="btn btn-link btn-floating">
                        <i class="fa-regular fa-bell fa-lg "></i>
                    </button>
                    <button type="button" class="btn btn-link btn-floating">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user fa-lg"></i>
                        </a>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">Name</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-9">
                <div class="container">
                    <div class="row">
                        <div class="d-flex">
                            <div class="que-box border border-info">
                                <div class="row">
                                    <h4 class="text-center text-secondary mb-3">Have a question you want to ask everyone?</h4>
                                </div>
                                <div class="row">
                                    <div class="d-flex">
                                        <input type="text" class="form-control me-2" placeholder="E.g: How do you commute to work?">
                                        <button type="button" class="btn btn-info">
                                            <div class="text-light">Ask</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown mt-3">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Sport</a></li>
                    </ul>
                </div>
                <ul class="nav nav-tabs mt-3">
                    <li class="nav-item">
                        <a class="nav-link outline-info active" aria-current="true" href="#!">
                            <div class="text-info">Polls</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">
                            <div class="text-dark">Breaking News</div>
                        </a>
                    </li>
                </ul>
                <div class="card mt-3" style="border-radius: 15px;">
                    <!-- header -->
                    <div class="card-header">
                        <h4>Would you rather live for the rest of you life in the Arctic or in the sahara desert?</h4>
                    </div>
                    <!-- body -->
                    <div class="card-body">
                        <div class="ratio ratio-21x9 text-center">
                            <iframe class="rounded-4" src="https://www.youtube.com/embed/jEo-ykjmHgg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="button mt-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-info fw-bold" type="button">The Arctic</button>
                                <button class="btn btn-outline-info fw-bold" type="button">The sahara desert</button>
                            </div>
                        </div>
                        <hr class="hr" />
                        <div class="info">
                            <div class="row">
                                <div class="col-sm-3 d-flex mt-2">
                                    <h6 class="me-1">4 votes</h6>
                                    <div class="vr me-2"></div>
                                    <a href="">View Result</a>
                                </div>
                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-3 d-flex justify-content-end ">
                                    <button type="button" class="btn btn-outline-primary me-2">React</button>
                                    <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="collapse" data-bs-target="#collapseComment" aria-expanded="false" aria-controls="collapseExample">Comment</button>
                                    <button type="button" class="btn btn-outline-primary">Share</button>
                                </div>
                            </div>
                        </div>
                        <hr class="hr" />
                    </div>
                    <div class="collapse" id="collapseComment">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="icon mt-2 me-3">
                                    <i class="fa-solid fa-user fa-2xl"></i>
                                </div>
                                <div class="overflow-auto p-3 bg-light" style="max-width: 400px; max-height: 100px;">
                                    I would live rest of my life in the arctic

                                    <div class="row">
                                        <div class="d-sm-flex justify-content-start">
                                            <a href="" class="btn btn-primary-link">React</a>
                                            <a href="" class="btn btn-primary-link">Replay</a>
                                            <a href="" class="btn btn-primary-link">Edit</a>
                                            <a href="" class="btn btn-primary-link text-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr" />
                            <div class="container  mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-info btn-floating rounded-pill"><i class="fa-regular fa-image fa-2xl"></i></button>
                                    </div>
                                    <div class="col-md-10 me-2">
                                        <input type="text" class="form-control rounded-pill" placeholder="Send">
                                    </div>
                                    <div class="">
                                        <button type="button" class="btn btn-info btn-floating rounded-pill"> <i class="fa-sharp fa-solid fa-paper-plane fa-2xl"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="conatiner">
                    <div class="massage-box border border-secondary">
                        <div class="row justify-content-center">
                            <input type="text" class="form-control rounded-pill" role="search" placeholder="Search" style="width: 200px;">
                        </div>
                        <div class="msg mt-3">Messages</div>
                        <div class="mt-2">
                            <i class="fa-regular fa-user"></i>
                            <div class="list-group">
                                <a href="#" class="list-group-item" aria-current="true">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-1">Anthony clark</h6>
                                        <small class="text-wrp">10 second ago</small>
                                    </div>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <small>And some small print.</small>
                                        <div class="badge">
                                            <span class="badge bg-info rounded">5</span>
                                        </div>
                                    </li>
                                </a>
                            </div>

                        </div>
                        <i class="fa-regular fa-user"></i>
                        <div class="list-group">
                            <a href="#" class="list-group-item" aria-current="true">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1">Marilyn Fox</h6>
                                    <small>20 Minuts ago</small>
                                </div>
                                <li class="list-group-item d-flex justify-content-between">
                                    <small>And some small print.</small>
                                    <div class="badge">
                                        <span class="badge bg-info rounded">99+</span>
                                    </div>
                                </li>
                            </a>
                        </div>
                        <i class="fa-regular fa-user"></i>
                        <div class="list-group">
                            <a href="#" class="list-group-item" aria-current="true">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1">Elizebeth James</h6>
                                    <small class="text-wrp">3 Day ago</small>
                                </div>
                                <li class="list-group-item d-flex justify-content-between">
                                    <small>And some small print.</small>
                                </li>
                            </a>
                        </div>
                        <i class="fa-regular fa-user"></i>
                        <div class="list-group">
                            <a href="#" class="list-group-item" aria-current="true">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1">Kathryn James</h6>
                                    <small class="text-wrp">4 Days ago</small>
                                </div>
                                <li class="list-group-item d-flex justify-content-between">
                                    <small>And some small print.</small>
                                </li>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>


</body>
<script src="https://kit.fontawesome.com/88503f0b5b.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

</html>