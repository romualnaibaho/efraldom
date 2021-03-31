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
                        <center><h1>Sign Up</h1></center>
                        <br>
                        <form method = "POST" action = "{{ route('register') }}">
                        {{ csrf_field() }}
                            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <div class="invalid-feedback text-center" style="color:red;">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif

                            <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" placeholder="Email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <div class="invalid-feedback text-center " style="color:red;">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            
                            <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" placeholder="Masukkan Kata Sandi" required>
                            @if ($errors->has('password'))
                                <div class="invalid-feedback text-center" style="color:red;">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                            
                            <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="password_confirmation" placeholder="Masukkan Ulang Kata Sandi" required>     
                            @if ($errors->has('password_confirmation'))
                                <div class="invalid-feedback text-center" style="color:red;">
                                    {{ $errors->first('password_confirmation') }}
                                </div>
                            @endif
                                 
						    <input id="submit-btn" type="submit" name="submit" value="Sign Up"/>
                            <a href="{{ route('/') }}" class="fcolor" style="float:left;margin-left:60px;">Kembali</a> <br><br><br>
					    </form>
                    </div>
                </div>
            </div>
            <br><br><hr>
        </div><br><br>

        

        <div class="container text-center">    
            <h3>Our Community</h3>
            <br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"> 
                    <img src="{{ asset('/img/pasif.jpg') }}" class="img-responsive" style="width:80px;height:80px;margin:auto" alt="Pasif">
                    <p>PASIF</p>    
                </div>
                <div class="col-sm-2"> 
                    <img src="{{ asset('/img/del.png') }}" class="img-responsive" style="width:80px;height:80px;margin:auto" alt="IT Del">
                    <p>Institut Teknologi Del</p>
                </div>
                <div class="col-sm-2"> 
                    <img src="{{ asset('/img/himasti.png') }}" class="img-responsive" style="width:80px;height:80px;margin:auto" alt="Himasti">
                    <p>Himpunan Mahasiswa S1 Informatika</p>
                </div> 
                <div class="col-sm-2"> 
                    <img src="{{ asset('/img/parti.png') }}" class="img-responsive" style="width:80px;height:80px;margin:auto" alt="PAR-TI">
                    <p>PAR-TI</p>
                </div>     
            </div>
        </div>
    </body>
</html>
