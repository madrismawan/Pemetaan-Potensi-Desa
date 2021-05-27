<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potensi Desa - Register</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
     <!-- embedd library jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="card mt-5" style="padding-left: 130px; padding-right:130px; padding-top:50px; padding-bottom:50px;">
            <div class="card-header text-center">
                <h1 style="font-size:60px" class="card-title">Register</h1>
                <p class="text-center" style="font-size: 25px">Harap lakukan isi data dengan benar!!</p>
            </div>
            <div class="card-body" style="padding-top: 24px">
                <form action="{{route('register.create')}}" method="POST">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4" >
                        <input type="text" class="form-control form-control-xl  @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}">
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
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl @error('password_confirmation') is-invalid @enderror" placeholder="Konfirmasi Password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('password_confirmation')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4" >
                        <input  type="text" class="form-control form-control-xl @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="{{ old('name') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('name')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl @error('alamat') is-invalid @enderror" placeholder="Alamat" name="alamat" value="{{ old('alamat') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('alamat')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4" >
                        <input  type="text" class="form-control form-control-xl @error('notlpn') is-invalid @enderror" placeholder="No Telepon" name="notlpn" value="{{ old('notlpn') }}">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('notlpn')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Register</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">Apakah sudah mempunyai akun?
                        <a href="{{'login.home'}}"class="font-bold">Log In</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <script src="assets/js/extensions/sweetalert2.js"></script>
    <script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script> --}}

    @if($message = Session::get('success'))
        <script>
            $(document).ready(function(){
                alertSuccess('{{$message}}');
            });
        </script>
    @endif


    @if($message = Session::get('error'))
        <script>
            $(document).ready(function(){
                alertDanger('{{$message}}');
            });
        </script>
    @endif


     <script>
        function alertSuccess(msg){
          swal({
            title: "Sukses",
            text: msg,
            icon: "success",
            button: "Ok",
          });
        }

        function alertError(msg){
          swal({
            title: "Eror",
            text: msg,
            icon: "warning",
            button: "Ok",
          });
        }

        function alertDanger(msg){
          swal({
            title: "Peringatan",
            text: msg,
            icon: "error",
            button: "Ok",
          });
        }
    </script>

</body>

</html>
