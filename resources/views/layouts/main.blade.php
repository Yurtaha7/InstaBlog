<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog :: Natalia Yurtashkina</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/loader.js')}}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html"><img src='assets/images/logo.svg' alt="Edica"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('main.index')}}"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<div class="row">
    <div class="col-lg-9 mx-auto">
        <section class="comment-section">
            <h2 class="section-title mb-5" data-aos="fade-up">Оставить комментарий</h2>
            <form action="/" method="post">
                <div class="row">
                    <div class="form-group col-12" data-aos="fade-up">
                        <label for="comment" class="sr-only">Добавить комментарий</label>
                        <textarea name="message" id="comment" class="form-control" placeholder="Оставьте комментарий" rows="10"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4" data-aos="fade-right">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name*">
                    </div>
                    <div class="form-group col-md-4" data-aos="fade-up">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <input type="submit" value="Отправить" class="btn btn-warning">
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>

<section class="edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">

           </div>
    </div>
</section>
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">

                <p class="contact-details">natalia.yurtashkina@mail.ru</p>
                <p class="contact-details">8-800-555-35-35</p>
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-3">
                <nav class="footer-social-links">
                    <a href="https://github.com/Yurtaha7"><i class="fab fa-github"></i></a>
                    <a href="https://www.instagram.com/natalia_yurtashkina/"><i class="fab fa-instagram"></i></a>
                </nav>
            </div>
        </div>
    </div>
</footer>
<script src="assets/vendors/popper.js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/vendors/aos/aos.js"></script>
<script src="assets/js/main.js"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
