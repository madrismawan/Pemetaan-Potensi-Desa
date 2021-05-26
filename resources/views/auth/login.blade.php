<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potensi Desa - Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>

    <div class="container">
        <div class="card mt-5" style="padding-left: 130px; padding-right:130px; padding-top:50px; padding-bottom:50px;">
            <div class="card-header text-center">
                <h1 style="font-size:60px" class="card-title">Log In</h1>
                <p class="text-center" style="font-size: 25px">Harap Lakukan Pendaftaran Terlebih Dahulu!</p>
            </div>
            <div class="card-body" style="padding-top: 24px">
                <form action="{{route('login.submit')}}" method="POST">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4" >
                        <input type="text" class="form-control form-control-xl @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('username')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{ old('password') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('password')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Keep me logged in
                        </label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">Apakah kamu belum mempunyai akun?
                        <a href="{{'register'}}"class="font-bold">Sign up</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
