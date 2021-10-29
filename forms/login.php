<?php
// include headerTag.php file
include ('forms/common/headerTag.php');
?>

<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                    <img src="../forms/assets/login.png" alt="login" width="100">
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                        <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password_1">Password</label>
                                    <a href="./forms/forget.php" class="float-end">
                                        Forgot Password?
                                    </a>
                                </div>
                                <input id="password_1" type="password" class="form-control" name="password_1" required>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                    <label for="remember" class="form-check-label">Remember Me</label>
                                </div>
                                <button id="login" name="login" type="submit" class="btn btn-primary ms-auto">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Don't have an account? <a href="./forms/register.php" class="text-dark">Create One</a>
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
