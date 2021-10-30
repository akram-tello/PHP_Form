<?php
// include backend server
include ('..\backend\server.php');

// include headerTag.php file
include ('forms/common/headerTag.php');
?>

<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-sm-center h-100">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
				<div class="text-center my-5">
					<img src="../forms/assets/register.png" alt="register" width="100">
				</div>
				<div class="card shadow-lg">
					<div class="card-body p-5">
						<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
						<form id="regiester_form" method="POST" action="./register.php" class="needs-validation" novalidate="" autocomplete="off">
							<?php include ( '../backend/errors.php' ) ?>
							<div class="mb-3">
								<label class="mb-2 text-muted" for="first_name">First Name</label>
								<input id="first_name" type="text" class="form-control" name="first_name" value="" required autofocus>
								<div class="invalid-feedback">
									First Name is required	
								</div>
							</div>

							<div class="mb-3">
								<label class="mb-2 text-muted" for="last_name">Last Name</label>
								<input id="last_name" type="text" class="form-control" name="last_name" value="" required autofocus>
								<div class="invalid-feedback">
									Last Name is required	
								</div>
							</div>

							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">E-Mail Address</label>
								<input id="email" type="email" class="form-control" name="email" value="" required>
								<div class="invalid-feedback">
									Email is invalid
								</div>
							</div>

							<div class="mb-3">
								<label class="mb-2 text-muted" for="phonenumber">Phone Number</label>
								<input id="phonenumber" type="text" class="form-control" name="phonenumber" value="" required>
								<div class="invalid-feedback">
									Phone Number is invalid
								</div>
							</div>

							<div class="mb-3">
								<label class="mb-2 text-muted" for="password_1">Password</label>
								<input id="password_1" type="password" class="form-control" name="password_1" required>
								<div class="invalid-feedback">
									Password is required
								</div>
							</div>

							<div class="mb-3">
								<label class="mb-2 text-muted" for="password_2">Confirm Password</label>
								<input id="password_2" type="password" class="form-control" name="password_2" required>
								<div class="invalid-feedback">
									Password is required
								</div>
							</div>

							<p class="form-text text-muted mb-3">
								By registering you agree with our terms and condition.
							</p>

							<div class="align-items-center d-flex">
								<button id="register" name="register" type="submit" class="btn btn-primary ms-auto">
									Register	
								</button>
							</div>
						</form>
					</div>
					<div class="card-footer py-3 border-0">
						<div class="text-center">
							Already have an account? <a href="../index.php" class="text-dark">Login</a>
						</div>
						<div class="mt-1 text-center">
                            see the source code on <a href="https://github.com/akram-tello/PHP_Form" class="text-dark">Github</a>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
// include scriptTag.php file
include_once __DIR__ . '/common/scriptTag.php';
?>