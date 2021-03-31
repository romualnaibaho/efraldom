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
                    <a class="navbar-brand" href="{{ route('home') }}" style="margin:auto;"><img src="{{ asset('/img/era_logo.png') }}" height="20px" width="60px" alt="Logo"></a>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div id="wrapper">
                    <div id="header">
                    <br>
                        <center><h1>Sign In</h1></center>
                        <br>
                        <form method = "POST" action = "{{ route('login.attemp') }}">
                            {{ csrf_field() }}
							<input type="email" name="email" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" id="email" placeholder="Email" required>
                            @if ($errors->has('email'))
                                <span class="help-block text-center">
                                    <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                            <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' has-error' : '' }}" id="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong style="color:red;">{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <label><input type="checkbox" name="remember" style="margin-left:60px;" value="{{ old('remember') ? 'checked' : '' }}"> Remember me</label>
                            <a href="{{ route('reset') }}" class="fcolor" style="float:right;margin-right:60px;">Forgot Password?</a> <br><br>            
						    <input id="submit-btn" type="submit" name="submit" value="Sign In"/>
                            <a href="{{ route('register') }}" class="fcolor" style="float:left;margin-left:60px;">Belum punya akun? Daftar Disini</a> <br><br><br>
					    </form>
                    </div>
                </div>
            </div>
        <br><br><hr>
        </div>

        <div class="container text-center">    
            <h3>What We Do</h3>
            <br>
            <div class="row">
                <div class="col-sm-6 text-justify">
                    <h3>Deskripsi</h3>
                    <p>Aplikasi web ini merupakan aplikasi web yang dapat membantu manusia dalam membiasakan dirinya untuk hidup sehat (khususnya dalam hal new normal). Aplikasi web ini menerapkan sistem health reminder dan domain alert dimana health reminder merupakan fitur yang memberikan tips pola hidup sehat yang dapat dipilih sesuai kebutuan agar selalu terhindar dari penyebaran Virus Corona. Dan untuk domain alert merupakan fitur yang memberitahu pengguna daerah-daerah mana saja yang terkena dampak Covid 19. Fitur ini akan memberi peringatan (warning) berupa pemberitahuan pada pengguna apabila daerah yang dicari berada di daerah sesuai zona yang dicari. Fitur ini diharapkan dapat membantu pengguna dalam mengantisipasi penyebaran Covid 19 agar pengguna tidak sampai terinfeksi oleh virus ini.</p>  
                </div>
                <div class="purpose col-sm-6 text-justify">
                    <div class="purposeheader">
                        <p>Tujuan dari aplikasi web ini adalah untuk membantu penggunanya dalam menjalani hidup sehat (khusunya new normal) yang pada saat ini diterapkan ditengah kehidupan bangsa Indonesia. Selain itu aplikasi ini bertujuan memberikan informasi yang tepat dan akurat terhadap data-data persebaran virus Covid 19 di seluruh daerah di Indonesia. Sehingga nantinya pengguna dapat terhindar dari penyebaran virus ini. Aplikasi Web ini tidak memiliki batasan usia dan bisa digunakan oleh semua kalangan mulai dari anak-anak sampai orang dewasa.</p>
                        <br><hr>
                        <p>Manfaat dari aplikasi ini adalah sebagai reminder atau pengingat bagi penggunanya agar selalu menjalani protokol kesehatan yang dianjurkan dalam mencegah penyebaran virus Covid 19. Seperti yang diketahui bahwa kebiasaan dalam protokol kesehatan yang dianjurkan sangat sulit untuk diterapkan karena ketidakbiasaan dalam aktivitas yang dimaksud. Oleh sebab itu aplikasi ini akan bermanfaat sebagai pengingat dan mungkin bisa sebagai media yang akan memandu penggunanya untuk selalu menjalani protokol kesehatan yang dianjurkan.</p>    
                        
                    </div>
                </div>
            </div>
        <hr>
        </div>

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
        
        <br>

        <footer class="footer-login">
            <div class="container-fluid text-left">
                <p class ="fcolor">More About Developer's Profile:</p>
                <a class="igcolor" href="https://www.instagram.com/efrica_s/"><img src="{{ asset('/img/ig.png') }}" height="15px" width="15px" alt="Ig1" style="margin-right:5px;">  Efrica Situmeang</a><br>
                <a class="igcolor" href="https://www.instagram.com/aldisiagian15/"><img src="{{ asset('/img/ig.png') }}" height="15px" width="15px" alt="Ig2" style="margin-right:5px;">  Aldi Siagian</a><br>
                <a class="igcolor" href="https://www.instagram.com/romualnaibaho_/"><img src="{{ asset('/img/ig.png') }}" height="15px" width="15px" alt="Ig3" style="margin-right:5px;">  Romual Naibaho</a><br>
            </div>

            <div class="container-fluid text-center">
                <p class ="fcolor">Copyright @ PROYEK PABWE KELOMPOK 12 - 2020 </p>
            </div>
        </footer>
    </body>
</html>
