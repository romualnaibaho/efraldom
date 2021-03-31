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
                    <a class="navbar-brand" href="{{ route('profile') }}">{{ \Auth::User()->name }}</a>
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



        <div class="container text-center">
            <br><br><br><br>
            <p class="title-bg-2" style="font-size:70px;color:#555555;">Zona Kuning</p>
            <hr>
        </div>

        <div class="container">
            <div class="row">
                <div id="zone-wrapper">
                    <div id="zone-header" style="margin-top:35px;">
                        <form method="GET" action="/efraldom/public/yellowzone/search">
                            <br>
                            <div class="row mb-3">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                         <input type="text" name="search" class="form-control" placeholder="Masukkan daerah yang ingin dicari" value="{{ old('search') }}">
                                    </div>
                                </div>
                                <div class="col-sm-4" >
                                    <input class="search-btn" type="submit" value="Cari"/>
                                </div>
                            </div>
                        </form>
                        <a href="/efraldom/public/yellowzone/" style="float:right;color:#d1124b;font-size: 18px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">reset</a>
            
                        <table class="table text-center table-bordered" style="width:100%; font-size:17px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td class="text-left">Kabupaten</td>
                                    <td class="text-left">Provinsi</td>
                                    <td class="text-left">Pulau</td>
                                    <td>Jumlah Kasus</td>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($yellowzone as $p)
                                <tr>
                                    <td>{{ $p->no }}</td>
                                    <td class="text-left">{{ $p->kabupaten }}</td>
                                    <td class="text-left">{{ $p->provinsi }}</td>
                                    <td class="text-left">{{ $p->pulau }}</td>
                                    <td>{{ $p->jumlah_kasus }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>	
                        <center>{{ $yellowzone->links() }}</center>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </body>