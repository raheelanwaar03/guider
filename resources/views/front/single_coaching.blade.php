@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/team/coaching.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Coaching Single</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Coaching Single</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- coaching-single -->
        <div class="coaching-single py-100">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="coaching-sidebar">
                            <div class="widget">
                                <h4 class="title">All Coaching</h4>
                                <div class="coaching-list">
                                    <a href="#" class="list-item">
                                        <span>IELTS Coaching</span>
                                        <i class="far fa-angle-double-right"></i>
                                    </a>
                                    <a href="#" class="list-item">
                                        <span>TOEFL Coaching</span>
                                        <i class="far fa-angle-double-right"></i>
                                    </a>
                                    <a href="#" class="list-item">
                                        <span>PTE Coaching</span>
                                        <i class="far fa-angle-double-right"></i>
                                    </a>
                                    <a href="#" class="list-item">
                                        <span>GRE Coaching</span>
                                        <i class="far fa-angle-double-right"></i>
                                    </a>
                                    <a href="#" class="list-item">
                                        <span>SAT Coaching</span>
                                        <i class="far fa-angle-double-right"></i>
                                    </a>
                                    <a href="#" class="list-item">
                                        <span>GMAT Coaching</span>
                                        <i class="far fa-angle-double-right"></i>
                                    </a>
                                    <a href="#" class="list-item">
                                        <span>OET Coaching</span>
                                        <i class="far fa-angle-double-right"></i>
                                    </a>
                                    <a href="#" class="list-item">
                                        <span>INE Coaching</span>
                                        <i class="far fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="coaching-banner" style="background-image: url(assets/img/video/7.jpg)">
                                <div class="banner-content">
                                    <span>Get Visa Service</span>
                                    <h1>Feel Free To Contact Us</h1>
                                    <a href="{{ route('contact') }}" class="theme-btn2">Contact Us<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="coaching-details">
                            <div class="mb-30">
                                <img src="assets/img/video/4.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="mb-20">IELTS Coaching</h3>
                                <p class="mb-20">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                    veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                    velit, sed quia non numquam eius modi tempora incidunt ut labore et.
                                </p>
                                <div class="row mb-20 g-4">
                                    <div class="col-md-6">
                                        <div class="coaching-single-item">
                                            <img src="assets/img/icon/listening.svg" alt="">
                                            <h5>Listening</h5>
                                            <p>There are many variations of passages available but the majority suffered.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="coaching-single-item">
                                            <img src="assets/img/icon/speaking.svg" alt="">
                                            <h5>Speaking</h5>
                                            <p>There are many variations of passages available but the majority suffered.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="coaching-single-item">
                                            <img src="assets/img/icon/reading.svg" alt="">
                                            <h5>Reading</h5>
                                            <p>There are many variations of passages available but the majority suffered.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="coaching-single-item">
                                            <img src="assets/img/icon/writing.svg" alt="">
                                            <h5>Writing</h5>
                                            <p>There are many variations of passages available but the majority suffered.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-20">
                                    But I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you a complete account of the system, and
                                    expound the actual teachings of the great explorer of the truth, the
                                    master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
                                    itself, because it is pleasure, but because those who do not know how to pursue
                                    pleasure rationally encounter consequences that are extremely painful. Nor again
                                    is there anyone who loves or pursues or desires to obtain pain of itself,
                                    because it is pain, but because occasionally circumstances occur in which toil
                                    and pain can procure him some great pleasure. To take a trivial example
                                </p>

                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <img src="assets/img/coaching/01.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <img src="assets/img/coaching/02.jpg" alt="">
                                    </div>
                                </div>
                                <p class="mb-20">
                                    Power of choice is untrammelled and when nothing prevents our being able to do
                                    what we like best, every pleasure is to be welcomed and every pain avoided. But
                                    in certain circumstances and owing to the claims of duty or the obligations of
                                    business it will frequently occur that pleasures have to be repudiated and
                                    annoyances accepted. The wise man therefore always holds in these matters to
                                    this principle of selection.
                                </p>
                                <div class="my-4">
                                    <div class="mb-3">
                                        <h3 class="mb-3">IELTS Coaching Benefits</h3>
                                        <p>Aliquam facilisis rhoncus nunc, non vestibulum mauris volutpat non.
                                            Vivamus tincidunt accumsan urna, vel aliquet nunc commodo tristique.
                                            Nulla facilisi. Phasellus vel ex nulla. Nunc tristique sapien id mauris
                                            efficitur, porta scelerisque nisl dignissim. Vestibulum ante ipsum
                                            primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed at
                                            mollis tellus. Proin consequat, orci nec bibendum viverra, ante orci
                                            suscipit dolor, et condimentum felis dolor ac lectus.</p>
                                    </div>
                                    <ul class="list">
                                        <li><i class="far fa-check-double"></i>Fusce justo risus placerat in risus eget
                                            tincidunt consequat elit.</li>
                                        <li><i class="far fa-check-double"></i>Nunc fermentum sem sit amet dolor laoreet
                                            placerat.</li>
                                        <li><i class="far fa-check-double"></i>Nullam rhoncus dictum diam quis ultrices.
                                        </li>
                                        <li><i class="far fa-check-double"></i>Integer quis lorem est uspendisse eu augue
                                            porta ullamcorper dictum.</li>
                                        <li><i class="far fa-check-double"></i>Quisque tristique neque arcu ut venenatis
                                            felis malesuada et.</li>
                                    </ul>
                                </div>
                                <div class="mt-4">
                                    <h3 class="mb-3">Why Choose Our IELTS Coaching ?</h3>
                                    <p>Quisque a nisl id sem sollicitudin volutpat. Cras et commodo quam, vel congue
                                        ligula. Orci varius natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus. Cras quis venenatis neque. Donec volutpat tellus
                                        lobortis mi ornare eleifend. Fusce eu nisl ut diam ultricies accumsan.
                                        Integer lobortis vestibulum nunc id porta. Curabitur aliquam arcu sed ex
                                        dictum, a facilisis urna porttitor. Fusce et mattis nisl. Sed iaculis libero
                                        consequat justo auctor iaculis. Vestibulum sed ex et magna tristique
                                        bibendum. Sed hendrerit neque nec est suscipit, id faucibus dolor convallis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
