<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Efraldom</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
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

        <div class="container text-center" style="padding-top: 70px;padding-bottom: 70px;">
            <h3 class="margin" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Welcome to Efraldom</h3>
            <img src="{{ asset('/img/era_logo.png') }}" class="img-responsive margin" style="display:inline" alt="EraLogo" width="170" height="170">
            <h3 style ="font-weight:bold;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">situs yang memberikan pelayanan dan informasi terkait Covid 19 yang kamu butuhkan </h3>
        </div>

        <div class="container bg-2 text-center"style="padding-top: 70px;padding-bottom: 70px;">
            <p class="title-bg-2">Pola Hidup Sehat</p>
            <img src="{{ asset('/img/health.png') }}" class="img-responsive margin" style="margin:auto;" alt="Health">
            <p class="desc-bg-2">Membiasakan diri dengan kebiasaan baru akan lebih menyenangkan bersama kami. Mari ikuti pola hidup sehat di masa pandemi Covid 19 agar Anda semakin terhindar dari penyebaran virus berbahaya ini. </p>
            <a href="{{ route('polahidupsehat') }}" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-chevron-right"></span> Ikuti</a>
        </div>

        <div class="container">
            <br><hr><br>
        </div>

        <div class="container bg-1 text-center" style="padding-top: 70px;padding-bottom: 70px;">
            <p class="title-bg-1">Know Your Region</p>
            <img src="{{ asset('/img/id.png') }}" class="img-responsive margin" style="margin:auto;" alt="Ind">
            <div class="row">
                <div class="col-sm-3">
                    <a href = "{{ route('greenzone') }}"><img class="zone" src="{{ asset('/img/green.png') }}" class="img-responsive margin" style="" alt="Green Zone"></a>
                    <p class="zfont">Zona Hijau</p>
                </div>
                <div class="col-sm-3"> 
                    <a href = "{{ route('yellowzone') }}"><img class="zone" src="{{ asset('/img/yellow.png') }}" class="img-responsive margin" alt="Yellow Zone"></a>
                    <p class="zfont">Zona Kuning</p>
                </div>
                <div class="col-sm-3"> 
                    <a href = "{{ route('orangezone') }}"><img class="zone" src="{{ asset('/img/orange.png') }}" class="img-responsive margin" alt="Orange Zone"></a>
                    <p class="zfont">Zona Orange</p>
                </div>
                <div class="col-sm-3"> 
                    <a href = "{{ route('redzone') }}"><img class="zone" src="{{ asset('/img/red.png') }}" class="img-responsive margin" alt="Red Zone"></a>
                    <p class="zfont">Zona Merah</p>
                </div>
            </div>
        </div>

        <br><br><br><br>

        <footer class="container-fluid-footer bg-4 text-center">
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
                <hr>
            </div>
            <div class="container text-left">
                <h3 class ="fcolor">More About Developer's Profile:</h3>
                <a class="igcolor" href="https://www.instagram.com/efrica_s/"><img src="{{ asset('/img/ig.png') }}" height="25px" width="25px" alt="Ig1" style="margin-right:5px;margin-top:5px;margin-bottom:5px">  Efrica Situmeang</a><br>
                <a class="igcolor" href="https://www.instagram.com/aldisiagian15/"><img src="{{ asset('/img/ig.png') }}" height="25px" width="25px" alt="Ig2" style="margin-right:5px;margin-top:5px;margin-bottom:5px">  Aldi Siagian</a><br>
                <a class="igcolor" href="https://www.instagram.com/romualnaibaho_/"><img src="{{ asset('/img/ig.png') }}" height="25px" width="25px" alt="Ig3" style="margin-right:5px;margin-top:5px;margin-bottom:5px">  Romual Naibaho</a><br>
            </div>
            <div class="container text-center">
                <p class ="fcolor">Copyright @ PROYEK PABWE KELOMPOK 12 - 2020 </p>
            </div>
        </footer>
    </body>
</html>
