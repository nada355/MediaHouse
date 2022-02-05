<main class="main">
    <div class="page-header text-center" style="background-image: url('{{asset('assets/images/pub3.jpg')}}')">
        <div class="container">
            <h1 class="page-title">My Profile<span></span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="dashboard">
            <div class="container">
                <div class="row">
                    <aside class="col-md-4 col-lg-3">
                        <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link" id="tab-account-link">Profile Details</a>
                            </li>
                            <li class="nav-item">
                                @if($user->profile->image)
                                <img src="{{ asset('assets/images/profile') }}{{ $user->profile->image }}" width="100" alt="">
                                @else
                                <img src="{{ asset('assets/images/profile/default.png') }}" width="100" alt="">
                                @endif
                                <img src="" alt="">
                            </li>
                        </ul>
                    </aside><!-- End .col-lg-3 -->

                    <div class="col-md-8 col-lg-9">
                        <div class="tab-content">


                            <div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <strong>Name : </strong>
                                            <span>{{ $user->name }}</span>
                                        </div><!-- End .col-sm-6 -->
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <strong>Email address : </strong>
                                            <span>{{ $user->email }}</span>
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <strong>Phone : </strong>
                                            <span>{{ $user->profile->mobile }}</span>
                                        </div>

                                    </div><!-- End .row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <strong>Line1 : </strong>
                                            <span>{{ $user->profile->line1 }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <strong>Line2 : </strong>
                                            <span>{{ $user->profile->line2 }}</span>
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <strong>City : </strong>
                                            <span>{{ $user->profile->city }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <strong>Province : </strong>
                                            <span>{{ $user->profile->province }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <strong>Country : </strong>
                                            <span>{{ $user->profile->country }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <strong>Zip Code : </strong>
                                            <span>{{ $user->profile->zipcode }}</span>

                                        </div>
                                    </div>





                            </div><!-- .End .tab-pane -->
                        </div>
                    </div><!-- End .col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .dashboard -->
    </div><!-- End .page-content -->
</main>
