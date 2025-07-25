@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/team/map.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Country Single</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Country Single</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- country-single -->
        <div class="country-single py-100">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="country-sidebar">
                            <div class="widget">
                                <h4 class="title">All Countries</h4>
                                <div class="country-list">
                                    <a href="#" class="list-item">
                                        <div class="list-content">
                                            <img src="assets/img/country/australia.png" alt="">
                                            <span>Australia</span>
                                        </div>
                                        <div class="list-icon">
                                            <i class="far fa-angle-double-right"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="list-item">
                                        <div class="list-content">
                                            <img src="assets/img/country/canada.png" alt="">
                                            <span>Canada</span>
                                        </div>
                                        <div class="list-icon">
                                            <i class="far fa-angle-double-right"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="list-item">
                                        <div class="list-content">
                                            <img src="assets/img/country/denmark.png" alt="">
                                            <span>Denmark</span>
                                        </div>
                                        <div class="list-icon">
                                            <i class="far fa-angle-double-right"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="list-item">
                                        <div class="list-content">
                                            <img src="assets/img/country/france.png" alt="">
                                            <span>France</span>
                                        </div>
                                        <div class="list-icon">
                                            <i class="far fa-angle-double-right"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="list-item">
                                        <div class="list-content">
                                            <img src="assets/img/country/new-zealand.png" alt="">
                                            <span>New Zealand</span>
                                        </div>
                                        <div class="list-icon">
                                            <i class="far fa-angle-double-right"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="list-item">
                                        <div class="list-content">
                                            <img src="assets/img/country/germany.png" alt="">
                                            <span>Germany</span>
                                        </div>
                                        <div class="list-icon">
                                            <i class="far fa-angle-double-right"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="list-item">
                                        <div class="list-content">
                                            <img src="assets/img/country/united-states.png" alt="">
                                            <span>United States</span>
                                        </div>
                                        <div class="list-icon">
                                            <i class="far fa-angle-double-right"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="list-item">
                                        <div class="list-content">
                                            <img src="assets/img/country/united-kingdom.png" alt="">
                                            <span>United Kingdom</span>
                                        </div>
                                        <div class="list-icon">
                                            <i class="far fa-angle-double-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="country-banner" style="background-image: url(assets/img/video/7.jpg)">
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
                        <div class="country-details">
                            <div class="mb-30">
                                <img src="assets/img/country/single.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3 class="mb-20">United States</h3>
                                <p class="mb-20">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                    veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                    velit, sed quia non numquam eius modi tempora incidunt ut labore et.
                                </p>
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
                                        <img src="assets/img/country/01.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <img src="assets/img/country/02.jpg" alt="">
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
                                        <h3 class="mb-3">United States Benefits</h3>
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
                                    <h3 class="mb-3">Why Choose United States ?</h3>
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
        <!-- country-single end -->

    </main>
@endsection
