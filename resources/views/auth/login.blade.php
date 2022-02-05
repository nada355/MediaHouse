<x-base-layout>


	<x-jet-validation-errors class="mb-4" />

	@if (session('status'))
		<div class="mb-4 font-medium text-sm text-green-600">
			{{ session('status') }}
		</div>
	@endif

	<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Login</li>
			</ol>
		</div><!-- End .container -->
	</nav><!-- End .breadcrumb-nav -->
	<div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url({{ asset('assets/images/cover.png') }})">
		<div class="container">
			<div class="form-box">
				<div class="form-tab">
					<ul class="nav nav-pills nav-fill">
						<li class="nav-item">
							<a class="nav-link" id="signin-tab-2" >Log In</a>
						</li>

					</ul>
		<x-jet-validation-errors class="mb-4" />

		<form method="POST" action="{{ route('login') }}">
			@csrf


			<div  class="form-group">
				<x-jet-label for="email" value="{{ __('Email') }}" />
				<x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
			</div>

			<div  class="form-group">
				<x-jet-label for="password" value="{{ __('Password') }}" />
				<x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />

			</div>


			<div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="btn btn-outline-primary-2 text-dark">
					{{ __('Login') }}
				</x-jet-button>
            </div>
		</form>
	</div><!-- End .form-tab -->
</div><!-- End .form-box -->
</div><!-- End .container -->
</div><!-- End .login-page section-bg -->

</x-base-layout>
