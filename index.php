<!-- main head file -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Hello, Satvik!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="aform.php">Satvik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Diploma
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="about.php">Diploma CS</a></li>
                            <li><a class="dropdown-item" href="#">Diploma EE</a></li>
                        </ul>
                    </li>
                    <li itemprop="name">
                        <a class="nav-link" href="contect.php">Contact Us</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Check me!
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="syllabous.pdf" target="_blank">Syllabous</a></li>
                            <li><a class="dropdown-item" href="https://1drv.ms/u/s!AvpBRq-K-fpvgmUa9q6H6E-nBsn5" target="_blank">Time table</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="scheme.pdf" target="_blank">Scheme</a></li>
                            <li><a class="dropdown-item" href="https://1drv.ms/w/s!AvpBRq-K-fpvgl2LZCsNfIpCbudX" target="_blank">
                                    <Table>Python programs</Table>
                                </a></li>
                                <li><a class="dropdown-item" href="https://docs.google.com/document/d/e/2PACX-1vSmDpgMI50hTvERmMe3flDisMaUjzlntdq8qiU2p6xjjhQLFUJp3958_t5mPmdNYsfwHMFFSERB4u-D/pub" target="_blank">Install Window</a></li>
                        </ul>
                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <div class="mx-2">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Login</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#signupModal">SignUP</button>
                </div>
            </div>
        </div>
    </nav>
    

    <!-- Login Modal -->
    <form method="post" action="login.php">
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <label for="username">Username:</label>
                 <input type="text" name="username" id="username" required><br>
                 <label for="password">Password:</label>
                 <input type="password" name="password" id="password" required><br>
                

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><input type="submit" value="Log in"></button>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- SignUP Modal -->
    <form method="POST" action="data.php">
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">SignUP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>



              
              
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required><br>
  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required><br>
  <label for="username">Username:</label>
  <input type="text" name="username" id="username" required><br>
  <label for="password">Password:</label>
  <input type="password" name="password" id="password" required><br>

  





                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><input type="submit" value="Sign Up"></button>
                </div>
            </div>
        </div>
    </div>
    </form>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/q12.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Satvik's Website.</h5>
                    <p>There has available all important elements</p>
                    <button> <a class="btn btn-danger" href="https://www.facebook.com/satvik.ksh"
                            target="blank">Facebook
                        </a></button>
                    <button> <a class="btn btn-primary" href="https://www.linkedin.com/in/satvik-kushwaha-343452237/" target="blank">
                            linkedin
                        </a></button>
                    <button> <a class="btn btn-success" href="https://twitter.com/SatvikKsh80" target="blank"> Twitter
                        </a></button>
                    <p>Follow me on the given socalmedia</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1400x400/?code,big bulding" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Satvik's website. </h5>

                    <p>There has available all important elements</p>
                    <button> <a class="btn btn-danger" href="https://www.facebook.com/satvik.ksh" target="blank">
                            Facebook
                        </a></button>
                    <button> <a class="btn btn-primary" href="https://www.linkedin.com/in/satvik-kushwaha-343452237/" target="blank">
                            linkedin
                        </a></button>
                    <button> <a class="btn btn-success" href="https://twitter.com/SatvikKsh80" target="blank"> Twitter
                        </a></button>
                    <p>Follow me on the given socalmedia</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1400x400/?code,macbook" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Satvik's website</h5>
                    
                    <p>There has available all imprtant elements</p>
                    

                    <button> <a class="btn btn-danger" href="https://www.facebook.com/satvik.ksh" target="_blank">
                            Facebook
                        </a></button>
                    <button> <a class="btn btn-primary" href="https://www.linkedin.com/in/satvik-kushwaha-343452237/" target="_blank">
                            linkedin </a>
                    </button>
                    <button> <a class="btn btn-success" href="https://twitter.com/SatvikKsh80" target="_blank"> Twitter
                        </a></button>
                    <p>Follow me on the given socialmedia</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-2">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Related for your cource</strong>
                        <h3 class="mb-0">Books </h3>
                        <div class="mb-1 text-muted"><b> Only for 3rd semester students.</b></div>
                        <p class="card-text mb-auto">There has available all important Books related for your cource,
                            so please check out the Books.</p>
                        read out.
                        <a href="books.php" class="-link">Click Hear!</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <a href="books.php" class="-link">
                            <img class="bd-placeholder-img" width="250" height="250" src="img/book.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger"><h4>Some important notes</h4> </strong>
                        <h3 class="mb-0">Notes</h3>
                        <div class="mb-1 text-muted"><b> Only for 3rd semester students.</b></div>
                        <p class="mb-auto">There has available all important topices & some important notes.</p>
                        check out.
                        <a href="#" class="stretched-link">Click Hear!</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="250" height="250" src="img/notes.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Papers</strong>
                        <h3 class="mb-0">Privious Question Paper.</h3>
                        <div class="mb-1 text-muted"><b> Only for 3rd semester students.</b></div>
                        <p class="card-text mb-auto">There has available all important privious exam paper for your
                            preperation
                            .</p>So please checkout.
                        <a href="" class="stretched-link">Click Hear!</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="250" height="250" src="img/paper.jfif" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Revision</strong>
                        <h3 class="mb-0">Short revision & Overview.</h3>
                        <div class="mb-1 text-muted"><b>Only for 3rd semester students.</b></div>
                        <p class="mb-auto">There has available some impotant topices for revision in short.</p>
                        <a href="#" class="stretched-link">Click Hear!</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="250" height="250" src="img/revision.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> -->
    </div>

    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2021–2022 Satvik's Compney, Inc. · <a href="privacy.html">Privacy</a> · <a href="#">Terms</a></p>
    </footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->



</body>

</html>