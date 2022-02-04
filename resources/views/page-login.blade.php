@extends('layout.empty')

@section('title', 'Login')

@section('content')
	<div class="container-fluid ps-md-0">
		<div class="row g-0">
			<div class="d-none d-md-flex col-md-4 col-lg-6 bg-img"></div>
			<div class="col-md-8 col-lg-6">
				<div class="login d-flex align-items-center py-5">
					<div class="container">
					<div class="row">
						<div class="col-md-9 col-lg-8 mx-auto">
							<h1 class="text-center text-danger font-weight-bolder">Welcome User</h1>
								<div class="text-muted text-center mb-4">
									Sign to stay connected
								</div>
								<form>
									<div class="form-floating mb-4">
										<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
										<label for="floatingInput" class="text-muted">Username@example.com</label>
									</div>
									<div class="form-floating mb-4">
										<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
										<label for="floatingPassword" class="text-muted">Enter your password</label>
									</div>
									<div class="form-check form-switch d-flex mb-4 ">
										<input class="form-check-input" type="checkbox" id="rememberMe">
										<label class="form-check-label" for="rememberMe">Remember me</label>
										<a href="#" class="ms-auto text-muted">Forgot password?</a>
									</div>
									<div class="d-grid">
										<button class="btn btn-lg bg-gradient-danger btn-login text-uppercase w-100 fw-500 mb-4 text-white" type="submit">Sign in</button>
										<div class="text-center text-muted">
											Don't have an account yet? <a href="/page/register">Sign up</a>.
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<style>
		body {
		background: #FAF9F9;
		/* background: linear-gradient(to right, #0062E6, #33AEFF); */
		}
		.login {
		min-height: 100vh;
		}

		.bg-img {
		/* background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200'); */
        background: linear-gradient(to right, #FF416C, #FF4B2B );
		background-size: cover;
		background-position: center;
		border-radius: 0px 0px 100px 0px;
		filter: drop-shadow(-20px 50px 30px rgba(0, 0, 0, 0.25));
		}

		.login-heading {
		font-weight: 300;
		}

		.btn-login {
		font-size: 0.9rem;
		letter-spacing: 0.05rem;
		padding: 0.75rem 1rem;
		}

	</style>

@endsection
