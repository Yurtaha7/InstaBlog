@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Insta Blog</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{'storage/ ' . $post->preview_image}}" alt="blog post">
                        </div>
                        <p class="blog-post-category">{{ $post->category->title }}</p>
                        <a href="{{route('post.show',$post->id)}}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                        </a>
                    </div>
                @endforeach

                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{asset('assets/images/blog_3.jpg')}}" alt="blog post">
                        </div>
                        <p class="blog-post-category">#food</p>
                        <a href="#" class="blog-post-permalink">
                            <h6 class="blog-post-title">Лови момент</h6>
                        </a>
                    </div>


                <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{asset('assets/images/blog_1.jpg')}}" alt="blog post">
                    </div>
                    <p class="blog-post-category">#time#moment</p>
                    <a href="#" class="blog-post-permalink">
                        <h6 class="blog-post-title">Adventure time!</h6>
                    </a>
                </div>
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-left">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{asset('assets/images/blog_2.jpg')}}" alt="blog post">
                    </div>
                    <p class="blog-post-category">#Атмосфера#Autumn</p>
                    <a href="#" class="blog-post-permalink">
                        <h6 class="blog-post-title"> Не осень в нашей грусти виновата, А лишь отсутствие в душе весны..</h6>
                    </a>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-md-8">
                <section>
                    <div class="row blog-post-row">
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{asset('assets/images/blog_post_1.jpg')}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">Hello World!</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">
                                    Путешествие — это открытие, того что всё что ты ранее знал о других странах ошибочно. Путешествовать – значит развенчивать чужие заблуждения о других странах</h6>
                            </a>
                        </div>
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{asset('assets/images/blog_post_2.jpg')}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">Уют</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">Создай рабочую атмосферу!</h6>
                            </a>
                        </div>
                    </div>
                    <div class="row blog-post-row">
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{asset('assets/images/blog_widget_4.jpg')}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">Семья</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">Семья – это праздник, семейные даты, подарки, покупки, приятные траты. Рождение детей, первый шаг, первый лепет, мечты о хорошем, волнение и трепет. Семья – это труд, друг о друге забота, семья – это много домашней работы.</h6>
                            </a>
                        </div>
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{asset('assets/images/blog_7.jpg')}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">#Цветы#Pion</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">Пионы — самый женственный цветок! пионы дышат нежностью и светом, пионы словно ветер между строк, весенним солнцем и теплом согреты… красив любви подаренный букет, душевных чувств чудесное посланье… нежней цветов во всей вселенной нет, пион хранит любви благоуханье… весна всегда приходит навсегда! так пусть в душе всегда цветут пионы, как нежность чувств...</h6>
                            </a>
                        </div>
                    </div>
                    <div class="row blog-post-row">
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{asset('assets/images/blog_post_3.jpg')}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">#Vibe#Закат#Мир</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">Закат — это, пожалуй, единственное время, когда я могу взять свою тоску за руку, и вместе с ней сидеть… В закатах — божественная мудрость неба и солнца. </h6>
                            </a>
                        </div>
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{asset('assets/images/blog_9.jpg')}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">#WedingDay</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">Эстетика церквей</h6>
                            </a>
                        </div>
                    </div>
                    <div class="row blog-post-row">
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{asset('assets/images/blog_10.jpg')}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">Blog post</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">Данный блог реализован для дисциплины ПдИ! Сделаем страницу атмосферной! Вперед! </h6>

                            </a>
                        </div>
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{asset('assets/images/blog_11.jpg')}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">#firstpost#laravel8#программированиедляинтернет</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">Привет, друзья! Это мой первый пост!</h6>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">
                <div class="widget widget-post-carousel">
                    <h5 class="widget-title">Актуальные посты</h5>
                    <div class="post-carousel">
                        <div id="carouselId" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <figure class="carousel-item active">
                                    <img src="{{asset('assets/images/blog_widget_carousel.jpg')}}" alt="First slide">
                                    <figcaption class="post-title">
                                        <a href="#!">Навстречу к приключениям</a>
                                    </figcaption>
                                </figure>
                                <figure class="carousel-item">
                                    <img src="{{asset('assets/images/blog_7.jpg')}}" alt="First slide">
                                    <figcaption class="post-title">
                                        <a href="#!">Пионы- самый женственный цветок!</a>
                                    </figcaption>
                                </figure>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/images/blog_1.jpg')}}" alt="First slide">
                                    <figcaption class="post-title">
                                        <a href="#!">Сделаем наш мир уютнее!</a>
                                    </figcaption>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget-post-list">
                    <h5 class="widget-title">Архив</h5>
                    <ul class="post-list">
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="{{asset('assets/images/blog_widget_1.jpg')}}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">Домашнее настроение</h6>
                                </div>
                            </a>
                        </li>
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="{{asset('assets/images/blog_widget_2.jpg')}}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">Город засыпает..</h6>
                                </div>
                            </a>
                        </li>
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="{{asset('assets/images/blog_widget_3.jpg')}}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">Водные приключения</h6>
                                </div>
                            </a>
                        </li>
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="{{asset('assets/images/blog_widget_4.jpg')}}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">Семья</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</main>
@endsection
