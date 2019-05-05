<!DOCTYPE html>
<html lang="en">
<head>
	<title>BINER 4.0 | Technology and Innovation in Millenial Era</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
    <link rel="stylesheet" type="text/css" href="Login/css/main.css">


<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="Login/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form" method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                    {{ csrf_field() }}
					<span class="login100-form-title">
						Pendaftaran
                    </span>

                    <div class="wrap-input100">
						<input class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nama" id="name" type="text" name="name" value="{{ old('name')}}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100">
						<input class="input100 form-control{{ $errors->has('institusi') ? ' is-invalid' : '' }}" placeholder="Institusi/Universitas" id="institusi" type="text" name="institusi" value="{{ old('institusi')}}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-building" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100">
						<select class="input100 form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" placeholder="Kluster Pendaftaran" id="role" type="text" name="role" value="{{ old('role') }}" required autofocus>
                            <option value="">Kluster Pendaftaran</option>
                            <option value="Seminar">Seminar</option>
                            <option value="WorkshopBatch_1">Workshop (Batch I)</option>
                            <option value="WorkshopBatch_2">Workshop (Batch II)</option>
                            <option value="BussinessCaseCompetition">Bussiness Case Competition</option>
                        </select>
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-building" aria-hidden="true"></i>
						</span>
                    </div>

					<div class="wrap-input100  ">
						<input class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100  ">
                        <input class="input100 form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Nomor Handphone" id="phone" type="number" name="phone" value="{{ old('phone') }}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone-square" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100  ">
                        <input class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Password" id="password" type="password" name="password" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100  ">
                        <input class="input100" placeholder="Konfirmasi Password" id="password-confirm" type="password" name="password_confirmation" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock-o" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100  ">
						<input class="input100 form-control{{ $errors->has('bukti') ? ' is-invalid' : '' }}" placeholder="Bukti Pembayaran" id="bukti" type="file" name="bukti" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-file" aria-hidden="true"></i>
						</span>
                        <!-- (format bukti pembayaran khusus : namaketua_namapembayar.jpg) -->
                    </div>
                    <div class="form-group">
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                    </div>

                    Sudah pernah mendaftar?
                    <a style="color:cornflowerblue" href="{{ route('login') }}"><strong>Login di sini</strong></a>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Daftar
                        </button>
                    </div>
                    <div class="container-login100-form-btn">
                        <a class="login100-form-btn" style="background-color:black" href="{{ url('/') }}">
							Batal
                        </a>
					</div>

					<div class="text-center p-t-12">

					</div>

					<div class="text-center p-t-136">

					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/bootstrap/js/popper.js"></script>
	<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="Login/js/main.js"></script>

</body>
</html>
