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
                <div id="profile-wrapper" style="width:700px;margin:auto;margin-top:5%;">
                    <div id="profile-header">
                    <br>
                        <center><h1>Update Account Information</h1></center>
                        <br>
                        @foreach($profile as $p)
                        <form method="POST" action = "/efraldom/public/profile/update-data">
                            {{ csrf_field() }}
                            <table class="table text-left table-bordered">
                                    <tr>
                                        <th style="width:200px;">Nama</th>
                                        <th class="text-center" style="width:40px;">:</th>
                                        <td><input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="{{ $p->nama }}" style="float:left;margin-bottom:1px;" required></td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px;">Jenis Kelamin</th>
                                        <th class="text-center" style="width:40px;">:</th>
                                        <td><input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="Laki-Laki / Perempuan" value="{{ $p->jenis_kelamin }}" style="float:left;margin-bottom:1px;"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px;">Umur</th>
                                        <th class="text-center" style="width:40px;">:</th>
                                        <td><input type="text" name="umur" class="form-control" id="umur" placeholder="cth: 20" value="{{ $p->umur }}" style="float:left;margin-bottom:1px;"></td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px;">Email</th>
                                        <th class="text-center" style="width:40px;">:</th>
                                        <td><input type="hidden" name="email" class="form-control" id="email" value="{{ $p->email }}" style="float:left;margin-bottom:1px;">{{ $p->email }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:200px;">Deskripsi</th>
                                        <th class="text-center" style="width:40px;">:</th>
                                        <td><input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Ceritakan tentang anda" value="{{ $p->deskripsi }}" style="float:left;margin-bottom:1px;"></td>
                                    </tr>
                                </table>
                                <input id="submit-btn" type="submit" name="submit" value="Update" style="float:right;"/>
                                <br><br><br>
					    </form>
                        @endforeach
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </body>
</html>
