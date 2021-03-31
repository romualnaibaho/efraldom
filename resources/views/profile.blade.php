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
        <nav class="navbar-head navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('home') }}">HOME</a></li>
                        <li><a href="{{ route('profile') }}">PROFILE</a></li>
                        <li><a href="{{ route('logout') }}">LOG OUT</a></li>
                        <a class="navbar-brand" href="{{ route('home') }}" style="margin:auto;"><img src="{{ asset('/img/era_logo.png') }}" height="20px" width="60px" alt="Logo"></a>
                      </ul>
                </div>
            </div>
        </nav>
        <br><br>

        <div class="container text-center">
            <hr>
            <div class="col-md-3">
                <img src="{{ asset('/img/accpic.png') }}" style="width:250px;height:250px;border: 3px;" alt="User Picture">
                <p style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size:25px;font-weight:bold;color:black;">{{ \Auth::User()->name }}</p>
                <br><br><br><br><br><br><br><br>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div id="profile-wrapper">
                        <div id="profile-header">
                            @foreach($profile as $p)
                            <form>
                            {{ csrf_field() }}
                                <br>
                                <fieldset>
                                <legend>Account Information</legend>
                                </fieldset>   

                                <table class="table text-left table-bordered">
                                    <tr>
                                        <th style="width:200px;">Nama</th>
                                        <th class="text-center" style="width:40px;">:</th>
                                        <td>{{ $p->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px;">Jenis Kelamin</th>
                                        <th class="text-center" style="width:40px;">:</th>
                                        <td>{{ $p->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px;">Umur</th>
                                        <th class="text-center" style="width:40px;">:</th>
                                        <td>{{ $p->umur }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px;">Email</th>
                                        <th class="text-center" style="width:40px;">:</th>
                                        <td>{{ $p->email }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px;">Deskripsi</th>
                                        <th class="text-center" style="width:40px;">:</th>
                                        <td>{{ $p->deskripsi }}</td>
                                    </tr>
                                </table>
                                <a href="/efraldom/public/profile/edit/{{ $p->email }}" class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span> Update Account</a> 
                                | 
                                <a href="/efraldom/public/profile/delete/{{ $p->email }}" class = "btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus akun ini?')"><span class = "glyphicon glyphicon-trash"></span> Delete Account</a>
                            </form>
                            @endforeach
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"><hr>
        </div>
        <br><br>
    </body>
</html>