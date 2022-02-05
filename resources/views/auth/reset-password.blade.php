{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}
{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}

<x-base-layout>


	<x-jet-validation-errors class="mb-4" />

	<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Reset Password</li>
			</ol>
		</div><!-- End .container -->
	</nav><!-- End .breadcrumb-nav -->
	<div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url({{ asset('assets/images/cover.png') }})">
		<div class="container">
			<div class="form-box">
				<div class="form-tab">
					<ul class="nav nav-pills nav-fill">
						<li class="nav-item">
							<a class="nav-link" id="signin-tab-2" >Reset Password</a>
						</li>

					</ul>

		<x-jet-validation-errors class="mb-4" />

		<form method="POST" action="{{ route('password.update') }}">
			@csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

			<div  class="form-group">
				<x-jet-label for="email" value="{{ __('Your Email') }}" />
				<x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
			</div>
            <div  class="form-group">
				<x-jet-label for="password"  value="{{ __('New Password') }}" />
				<x-jet-input id="password" class="form-control" type="password" name="password" autocomplete="new-password" />
			</div>
            <div  class="form-group">
				<x-jet-label for="password_confirmation" value="{{ __('Confirm password') }}" />
				<x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password"  />
			</div>
               <x-jet-button class="btn btn-outline-primary-2 text-dark">
					{{ __('Reset Password') }}
				</x-jet-button>
            </div>
		</form>
	</div><!-- End .form-tab -->
</div><!-- End .form-box -->
</div><!-- End .container -->
</div><!-- End .login-page section-bg -->

</x-base-layout>
