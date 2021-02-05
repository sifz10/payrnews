@extends('layouts.fontendLayout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <br>
    			<!-- begin content -->
    			<div class="col-md-6 m-auto post-5076 page type-page status-publish hentry" id="content">
    				<div class="jl_cat_mid_title">
    					<h3 class="categories-title title">My Account</h3>
    				</div>
    				<div class="content_single_page post-5076 page type-page status-publish hentry">
    					<div class="content_page_padding">
    						<div class="woocommerce">
    							<form class="woocommerce-form woocommerce-form-login login" method="POST" action="{{ route('login') }}">
                    @csrf
    								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
    									<label for="username">Mobile Number or email address&nbsp;
    										<span class="required">*</span>
    									</label>
    									<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
    									</p>
    								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
    									<label for="username">Password&nbsp;
    										<span class="required">*</span>
    									</label>
    									<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
    									</p>
    										<p class="form-row">
    											<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
    												<input class="woocommerce-form__input woocommerce-form__input-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    													<span>Remember me</span>
    												</label>
    												<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
    											</p>
    											<p class="woocommerce-LostPassword lost_password">
                            @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                              </a>
                            @endif
    											</p>
    											<p class="woocommerce-LostPassword lost_password">
                              <a class="btn btn-link" href="{{ route('register') }}">
                                {{ __('Create an account') }}
                              </a>
    											</p>
    										</form>
    									</div>
    								</div>
    							</div>
    						</div>
        </div>
    </div>
</div>
@endsection
