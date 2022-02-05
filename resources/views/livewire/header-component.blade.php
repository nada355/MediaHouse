<header class="header header-intro-clearance header-4">
    <div class="header-top" >
        <div class="container">
            <div class="header-left">
                <a href="tel:#"><i class="icon-phone"></i>Appelez nous : {{ $setting->phone2 }}</a>
            </div><!-- End .header-left -->

            <div class="header-right">
                <ul class="top-menu">
                    <li>

                        <ul>

                            <li>
                                <div class="header-dropdown">
                                    <a href="#">English</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">Francais</a></li>
                                            <li><a href="#">Anglais</a></li>

                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div>
                            </li>


                            @if(Route::has('login'))
                                @auth
                                    @if(Auth::user()->utype === 'ADM')
                                        <li>
                                            <div class="header-dropdown">
                                                <a href="#">{{Auth::user()->name}}</a>
                                                <div class="header-menu">
                                                    <ul>
                                                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                        <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                                        <li><a href="{{ route('admin.products') }}">Products</a></li>
                                                        <li><a href="{{ route('admin.homeslider') }}">HomeSlider</a></li>
                                                        <li><a href="{{ route('admin.homecategories') }}">HomeCategory</a></li>
                                                        <li><a href="{{ route('admin.sale') }}">Sales</a></li>


                                                        <li><a href="{{ route('admin.coupons') }}">All Coupons</a></li>
                                                        <li><a href="{{ route('admin.orders') }}">All Orders</a></li>
                                                        <li><a href="{{ route('admin.settings') }}">Settings</a></li>



                                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </div><!-- End .header-menu -->
                                            </div>
                                        </li>
                                    @else
                                        <li>
                                            <div class="header-dropdown">
                                                <a href="#">{{Auth::user()->name}}</a>
                                                <div class="header-menu">
                                                    <ul>
                                                        <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                                        <li><a href="{{ route('user.profile') }}">My Profile</a></li>
                                                        <li><a href="{{ route('user.orders') }}">My Orders</a></li>
                                                        <li><a href="{{ route('user.changepassword') }}">change password</a></li>

                                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </div><!-- End .header-menu -->
                                            </div>
                                        </li>

                                    @endif
                                @else
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#" class="icon"> <i class="icon-user"></i></a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="{{ route('login') }}">log in</a></li>
                                                    <li><a href="{{ route('register') }}" >Register</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>
                                @endif
                            @endif


                        </ul>
                    </li>

                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->


        </div><!-- End .container -->

    </div><!-- End .header-top -->




    <div class="header-middle">
        <div class="container">
            <div class="header-left">

                <a href="/" class="logo">
                    <img  src="{{ asset('assets/images/demos/demo-4/logofooter.png')}}" alt="MH logo" width="200" height="20">
                </a>
            </div><!-- End .header-left -->

            @livewire('header-search-component')

            <div class="header-right">
                @livewire('wishlist-count-component')
                @livewire('cart-count-component')


            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div>

    <div class="header-bottom sticky-header" style="box-shadow: 0 8px 6px -6px rgb(0 0 0 / 40%);">
        <div class="container">

            <div class="header-left" style="max-width:50px;">

            </div><!-- End .header-left -->

            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu">
                        <li class="megamenu-container active">
                            <a href="/" class="">Accueil</a>

                        </li>
                        <li class="">
                            <a href="{{ route('product.category',['category_slug'=>$categories->slug = 'informatique']) }}" class="sf-with-ul">Informatique</a>

                            <ul style="display: none;">
                                <li class="">
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'ordinateur-portable']) }}" class="sf-with-ul" >Ordinateur Portable</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'pc-portable']) }}">Pc Potable</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'macbook']) }}">MacBook</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'pc-gamer']) }}">Pc Gamer</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'ordinateur-de-bureau']) }}"  class="sf-with-ul">Ordinateur De Bureau</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'pc-de-bureau']) }}">Pc De Bureau</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'pc-gamer-bureau']) }}">Pc Gamer</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'pc-tout-en-un-all-in-one']) }}">Pc Tout En Un (ALL IN ONE)</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'ecran']) }}">Ecran</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'mac']) }}">Mac</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'tablette']) }}"  class="sf-with-ul">Tablette</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'tablette-android']) }}">Tablette Android</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'ipad']) }}">IPad</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'tablettes-graphique']) }}">Tablettes Graphique</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'accessoires-tablette']) }}">Accessoires Tablette</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'composants-tablettes']) }}">Composants Tablettes</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'serveurs']) }}"  class="sf-with-ul">Serveurs</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'serveur']) }}">Serveur</a>
                                            <ul style="display: none;">
                                                <li><a  href="#">Serveur Tour</a></li>
                                                <li><a  href="#">Serveur Rack</a></li>
                                                <li><a  href="#">Serveur Nas</a></li>
                                            </ul>
                                        </li>

                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'composants-de-serveur']) }}">Composants De Serveur</a>
                                            <ul style="display: none;">
                                                <li><a  href="#">Barrette Mémoire</a></li>
                                                <li><a  href="#">Disque Dur Interne</a></li>
                                                <li><a  href="#">Bloc D'alimentation</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'stockage']) }}"  class="sf-with-ul">Stockage</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cles-usb']) }}">Clés USB</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cd-et-dvd-vierge']) }}">CD Et DVD Vièrge</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cartes-memoires']) }}">Cartes Mémoires</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'disque-dur-externe']) }}">Disque Dur Externe</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'disque-ssd']) }}">Disque SSD</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'boitier-disque-dur']) }}">Boitier Disque Dur</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'composant-pc-potable']) }}"  class="sf-with-ul">Composant Pc Portable</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'batteries']) }}">Batteries</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'afficheurs-ecrans']) }}">Afficheurs - Écrans</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'charnieres']) }}">Charnières</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'nappes-ecran']) }}">Nappes Écran</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'disques-dur-internes']) }}">Disques Dur Internes</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'coques']) }}">Coques</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'claviers-pc']) }}">Claviers</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'barrettes-memoire-so-dimm']) }}">Barrettes Mémoire SO-DIMM</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'chargeur-pc-portable']) }}">Chargeur PC Portable</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'ventilateurs-pc']) }}">Ventilateurs</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cartes-meres-pc']) }}">Cartes Mères</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'connecteurs-de-charge']) }}">Connecteurs De Charge</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'composant-pc-de-bureau']) }}"  class="sf-with-ul">Composant Pc De Bureau</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'ventilateurs-bureau']) }}">Ventilateurs</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'graveurs']) }}">Graveurs</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'disques-dur-internes']) }}">Disques Dur Internes</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'barrettes-memoire-dimm']) }}">Barrettes Mémoire DIMM</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cartes-graphique']) }}">Cartes Graphique</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cartes-meres-bureau']) }}">Cartes Mères</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'blocs-alimentation']) }}">Blocs Alimentation</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'processeur']) }}">Processeur</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'carte-dextension-sur-port-pci']) }}">Carte D'extension Sur Port PCI</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'peripherique-accessoire']) }}"  class="sf-with-ul">Péripherique & Accesoirs</a>

                                    <ul style="display: none;">
                                        <li><a href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'claviers']) }}">Claviers</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'souris-tapi']) }}">Souris & Tapi</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'sacoche-sac-a-dos']) }}">Sacoche & Sac À Dos</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'refroidisseur']) }}">Refroidisseur</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'webcam']) }}">Webcam</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'piles']) }}">Piles</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'support-de-fixation']) }}">Support De Fixation</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'torches']) }}">Torches</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'divers']) }}">Divers</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>


                        <li class="">
                            <a href="{{ route('product.category',['category_slug'=>$categories->slug = 'telephones']) }}" class="sf-with-ul">Téléphone</a>

                            <ul style="display: none;">
                                <li class="">
                                    <a
                                    href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'smartphone-mobile']) }}" class="sf-with-ul" >
                                        Smartphone & Mobile</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'smartphones']) }}">Smartphones</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'telephone-portable']) }}">Téléphone Portable</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'iphone']) }}">Iphone</a></li>




                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'smartwatch']) }}" >Smartwatch</a>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'telephone-fixe']) }}" class="sf-with-ul">Téléphone Fixe</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'telephones-fixes-et-standard']) }}">Téléphones Fixes et Standard</a>
                                            <ul style="display: none;">
                                                <li><a  href="#">Téléphones sans fil</a></li>
                                                <li><a  href="#">Standard téléphonique</a></li>
                                            </ul>
                                        </li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'telephones-fixes-filaires']) }}">Téléphones fixes filaires</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'accessoires-telephones']) }}" class="sf-with-ul">Accessoires Téléphones</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'power-bank']) }}">Power Bank</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'casque-kit']) }}">Casque & Kit</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'baguette-selfie']) }}">Baguette Selfie</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'chargeurs']) }}">Chargeurs</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'composants-telephonie']) }}" class="sf-with-ul">Composants Téléphonie</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'afficheurs-tactiles']) }}">Afficheurs / Tactiles</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'vitre-arriere']) }}">Vitre Arrière</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'nappes-cartes']) }}">Nappes / Cartes</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </li>




                        <li class="">
                            <a href="{{ route('product.category',['category_slug'=>$categories->slug = 'impression']) }}" class="sf-with-ul">Impression</a>
                            <ul style="display: none;">
                                <li class="">
                                    <a
                                     href="{{route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'imprimantes'])}}" class="sf-with-ul" >Imprimantes</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'imprimantes-a-reservoir-integre']) }}">Imprimantes à réservoir integré</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'imprimantes-laser']) }}">Imprimantes laser</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'imprimantes-jet-dencre']) }}">Imprimantes Jet d'encre</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'imprimantes-matricielle']) }}">Imprimantes Matricielle</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'imprimantes-a-ticket']) }}">Imprimantes à Ticket</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a
                                    href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'photocopieurs']) }}" >Photocopieurs</a>

                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'scanners']) }}" >Scanners</a>

                                </li>

                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'consommables']) }}" class="sf-with-ul">Consommables</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'ruban']) }}">Ruban</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'papier-impression']) }}">Papier</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'toner']) }}">Toner</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cartouche']) }}">Cartouche</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'bouteille-dencre']) }}">Bouteille d'encre</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'rouleau-thermique']) }}">Rouleau Thermique</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>

                        <li class="">
                            <a href="{{ route('product.category',['category_slug'=>$categories->slug = 'reseauxsecurite']) }}" class="sf-with-ul">Réseau&Sécurité</a>

                            <ul style="display: none;">
                                <li class="">
                                    <a href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'reseau']) }}" class="sf-with-ul" >
                                        Réseau
                                    </a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'switch-routeurs-point-dacces']) }}">Switch - Routeurs - Point d'accès</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cartes-reseau']) }}">Cartes réseau</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cle-wifi-bluetooth']) }}">Clé Wifi - Bluetooth</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'panneaux-coffrets']) }}">Panneaux & Coffrets</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'prises-reseaux']) }}">Prises Réseaux</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'securite']) }}" class="sf-with-ul">
                                        Sécurité
                                    </a>
                                    <ul style="display: none;">

                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'alarme']) }}">Alarme</a>
                                            <ul style="display: none;">
                                                <li><a  href="#" class="sf-with-ul">Centrale + Clavier</a>
                                                    <ul style="display: none;">
                                                        <li><a  href="#">Centrale d'Alarme Filaire</a></li>
                                                        <li><a  href="#">Centrale d'Alarme Sans Fil</a></li>
                                                        <li><a  href="#">Clavier d'Alarme</a></li>
                                                    </ul>
                                                </li>

                                                <li><a  href="#">Détecteur de Mouvement</a></li>
                                                <li><a  href="#">Batterie Alarme</a></li>
                                                <li><a  href="#">Contact</a></li>
                                                <li><a  href="#">Sirène</a></li>
                                                <li><a  href="#">Télécommande</a></li>
                                                <li><a  href="#">Modules</a></li>
                                                <li><a  href="#">Autres ..</a></li>
                                            </ul>

                                        </li>

                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'gps']) }}">GPS</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'videosurveillance']) }}" class="sf-with-ul">Videosurveillance</a>
                                            <ul style="display: none;">
                                                <li><a  href="#">Accessoires</a></li>
                                                <li><a  href="#" class="sf-with-ul">Camera</a>
                                                    <ul style="display: none;">
                                                        <li><a  href="#">Camera IP</a></li>
                                                        <li><a  href="#">Camera HD</a></li>
                                                        <li><a  href="#">Camera Analogique</a></li>

                                                    </ul>
                                                </li>
                                                <li><a  href="#" class="sf-with-ul">Enregistreur</a>
                                                    <ul style="display: none;">
                                                        <li><a  href="#">HCVR</a></li>
                                                        <li><a  href="#">NVR</a></li>
                                                        <li><a  href="#">XVR</a></li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'solutions-de-pointage']) }}">Solutions de pointage</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'interphone']) }}">Interphone</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'onduleur']) }}" >Onduleur</a>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'cables-connectiques']) }}" class="sf-with-ul">
                                        Cables & Connectiques
                                    </a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'adaptateurs-convertisseurs']) }}">Adaptateurs / Convertisseurs</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cables-hdmi']) }}">Câbles HDMI</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cables-usb']) }}">Câbles USB</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cables-reseau']) }}">Câbles Réseau</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cables-vga']) }}">Câbles VGA</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'cables-cctv']) }}">Câbles CCTV</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'connecteurs']) }}">Connecteurs</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'multiprises']) }}">Multiprises</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'logiciels']) }}" class="sf-with-ul">
                                        Logiciels
                                    </a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'systeme-dexploitation']) }}">Systeme d'exploitation</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'antivirus']) }}">Antivirus</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'bricolage']) }}" class="sf-with-ul">
                                        Bricolage
                                    </a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'moulures']) }}">Moulures</a></li>

                                    </ul>
                                </li>


                            </ul>
                        </li>

                        <li class="">
                            <a href="{{ route('product.category',['category_slug'=>$categories->slug = 'gaming']) }}" class="sf-with-ul">Gaming</a>

                            <ul style="display: none;">
                                <li class="">
                                    <a href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'ecran-gamer']) }}"  >Ecran Gamer</a>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'peripheriques-de-jeux']) }}" class="sf-with-ul">Périphériques De Jeux</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'casque-gamer-periph']) }}">Casque Gamer</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'souris-gamer-periph']) }}">Souris Gamer</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'clavier-gamer-periph']) }}">Clavier Gamer</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'manette-de-jeux-periph']) }}">Manette de Jeux</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'consoles-de-jeux']) }}" >Consoles De Jeux</a>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'accessoires-gamers']) }}" class="sf-with-ul">
                                        Accessoires Gamers
                                    </a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'clavier-gamer']) }}">Clavier Gamer</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'souris-gamer']) }}">Souris Gamer</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'tapis-gamers']) }}">Tapis Gamers</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'micro-casque-gamer']) }}">Micro Casque Gamer</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'accessoires-gamer']) }}">Accessoires Gamer</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </li>

                        <li class="">
                            <a href="{{ route('product.category',['category_slug'=>$categories->slug = 'bureautique']) }}" class="sf-with-ul">Bureautique</a>

                            <ul style="display: none;">
                                <li class="">
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'materiel-point-de-vente']) }}" class="sf-with-ul" >Matériel Point De Vente</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'tiroir-caisse-enregistreuse']) }}">Tiroir & Caisse Enregistreuse</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'douchette']) }}">Douchette</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'compteuse-de-billets']) }}">Compteuse de Billets</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'plastifieuses']) }}">Plastifieuses</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'tableaux']) }}" class="sf-with-ul">Tableaux</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'tableau-interactif']) }}">Tableau Interactif</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'tableaux-blancs']) }}">Tableaux Blancs</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'accessoires-tableaux']) }}">Accessoires tableaux</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'fourniture-de-bureau']) }}" >Fourniture De Bureau</a>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'classement-archivage']) }}" class="sf-with-ul">Classement & Archivage</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'chemise']) }}">Chemise</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'boite-darchive']) }}">Boîte D'archive</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'intercalaire']) }}">Intercalaire</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'portes-documents']) }}">Portes Documents</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug = 'papier']) }}" class="sf-with-ul">Papier</a>

                                    <ul style="display: none;">
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'papier-a3']) }}">Papier A3</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'papier-photo']) }}">Papier Photo</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'papier-thermique']) }}">Papier Thermique</a></li>
                                        <li><a  href="{{ route('product.category',['category_slug'=>$categories->slug,'scategory_slug'=>$scategories->slug,'sscategory_slug'=>$sscategories->slug = 'papier-a4']) }}">Papier A4</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>




                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->




            </div><!-- End .header-right -->

        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
