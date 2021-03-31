<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Efraldom</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/bootstrap-3.3.7/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/more.css') }}">
        <script src="{{ asset('/jquery-3.5.1/jquery.min.js') }}"></script>
        <script src="{{ asset('/bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>
    </head>
    <body id="body2">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('/') }}" style="margin:auto;"><img src="{{ asset('/img/era_logo.png') }}" height="20px" width="60px" alt="Logo"></a>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div id="wrapper">
                    <div id="header">
                    <br>
                        <center><h1>Reset Password</h1></center>
                        <br>
                        @foreach($users as $pengguna)
                        <form method="POST" action = "{{ route('update.password') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="email" value="{{ $pengguna->email }}">
                            <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Masukkan Kata Sandi Baru" required>   
                            @if ($errors->has('password'))
                                <div class="invalid-feedback text-center" style="color:red;">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                            
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Masukkan Ulang Kata Sandi Baru" required>   
                            @if ($errors->has('password_confirmation'))
                                <div class="invalid-feedback text-center" style="color:red;">
                                    {{ $errors->first('password_confirmation') }}
                                </div>
                            @endif

						    <input id="submit-btn" type="submit" name="submit" value="Reset">
                            <a href="{{ route('reset') }}" class="fcolor" style="float:left;margin-left:60px;">Kembali</a> <br><br><br>
					    </form>
                        @endforeach
                    </div>
                </div>
            </div><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </body>
</html>
