<x-base-layout title="SignUp" bodyClass="page-login">
    <main>
        <div class="container-small page-login">
            <div class="flex" style="gap: 5rem">
                <div class="auth-page-form">
                    <div class="text-center">
                        <a href="/">
                            <img src="/img/logoipsum-265.svg" alt="" />
                        </a>
                    </div>
                    <h1 class="auth-page-title">Login</h1>

                    <form action="" method="post">
                        <div class="form-group">
                            <input type="email" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Your Password" />
                        </div>
                        <div class="mb-medium text-right">
                            <a class="auth-page-password-reset" href="/password-reset.html">Reset Password</a>
                        </div>

                        <button class="btn btn-primary btn-login w-full">Login</button>

                        <div class="social-auth-buttons grid grid-cols-2 gap-1">
                            <x-auth-button src="/img/google.png">Google</x-auth-button>
                            <x-auth-button src="/img/facebook.png">Facebook</x-auth-button>
                        </div>
                        <div class="login-text-dont-have-account">
                            Don't have an account? -
                            <a href="/signup.html"> Click here to create one</a>
                        </div>
                    </form>
                </div>
                <div class="auth-page-image">
                    <img class="img-responsive" src="/img/car-png-39071.png" alt="" />
                </div>
            </div>
        </div>
    </main>
</x-base-layout>
