<x-base-layout title="SignUp" bodyClass="page-signup">
    <main>
        <div class="container-small page-login">
            <div class="flex" style="gap: 5rem">
                <div class="auth-page-form">
                    <div class="text-center">
                        <a href="/">
                            <img src="/img/logoipsum-265.svg" alt="" />
                        </a>
                    </div>
                    <h1 class="auth-page-title">Signup</h1>

                    <form action="{{ route("signup.form") }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input class="form-control @error("firstName") is-invalid @enderror" name="firstName"
                                type="text" value="{{ old("firstName") }}" placeholder="First Name" />
                            @error("firstName")
                                <div class="invalid-feedback" id="firstName">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control @error("lastName") is-invalid @enderror" name="lastName"
                                type="text" value="{{ old("lastName") }}" placeholder="Last Name" />
                            @error("lastName")
                                <div class="invalid-feedback" id="firstName">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control @error("phone") is-invalid @enderror" name="phone"
                                type="text" value="{{ old("phone") }}" placeholder="Phone" />
                            @error("phone")
                                <div class="invalid-feedback" id="firstName">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control @error("email") is-invalid @enderror" name="email"
                                type="email" value="{{ old("email") }}" placeholder="Your Email" />
                            @error("email")
                                <div class="invalid-feedback" id="email">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control @error("password") is-invalid @enderror" name="password"
                                type="password" value="{{ old("password") }}" placeholder="Your Password" />
                            @error("password")
                                <div class="invalid-feedback" id="firstName">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control @error("confirm_password") is-invalid @enderror"
                                name="confirm_password" type="password" placeholder="Repeat Password" />
                            @error("confirm_password")
                                <div class="invalid-feedback" id="firstName">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <hr />
                        <button class="btn btn-primary btn-login w-full">Register</button>

                        <div class="social-auth-buttons grid grid-cols-2 gap-1">
                            <x-auth-button src="/img/google.png">Google</x-auth-button>
                            <x-auth-button src="/img/facebook.png">Facebook</x-auth-button>
                        </div>
                        <div class="login-text-dont-have-account">
                            Already have an account? -
                            <a href="{{ route("login") }}"> Click here to login </a>
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
