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
                        <form action = "/efraldom/public/reset/password/update">
                            {{ csrf_field() }}
                            <input type="email" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" name="email" id="email" placeholder="Masukkan Email" required>          
                            @if ($errors->has('email'))
                                <span class="help-block text-center">
                                    <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						    <input id="submit-btn" type="submit" name="submit" value="Submit">
                            <a href="{{ route('/') }}" class="fcolor" style="float:left;margin-left:60px;">Kembali</a> <br><br><br>
					    </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </body>
</html>
