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

        <br><br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <a target="blank" href="https://www.klikdokter.com/info-sehat/read/3644530/pola-makan-agar-tetap-waras-saat-pandemi-covid-19">
                                <img src="{{ asset('/img/healthy1.jpg') }}" alt="Image">
                                <div class="carousel-caption">
                                    <h3>Pola Makan Sehat</h3>
                                    <p>Bukan hanya dengan olahraga dan relaksasi, kesehatan mental saat pandemi COVID-19 juga bisa dijaga dengan menerapkan pola makan yang tepat.</p>
                                </div>    
                                </a>  
                            </div>
                        
                            <div class="item">
                                <a target="blank" href="https://www.enervon.co.id/news/1102/pandemi-covid-19-pertahankan-pola-hidup-bersih-dan-sehat-sebagai-new-normal/">
                                <img src="{{ asset('/img/healthy2.jpg') }}" alt="Image">
                                <div class="carousel-caption">
                                    <h3>Pola Hidup Sehat</h3>
                                    <p>Pola hidup sehat dan bersih sebenarnya sudah diimbau sejak lama, namun kebiasaan ini baru benar- benar diterapkan sejak pandemi Covid-19 terjadi.</p>
                                </div>    
                                </a>  
                            </div>

                            <div class="item">
                                <a target="blank" href="https://www.gardaoto.com/blog/gaya-hidup-sehat-yang-bisa-diterapkan-di-tengah-pandemic-covid-19">
                                <img src="{{ asset('/img/healthy3.jpg') }}" alt="Image"> 
                                <div class="carousel-caption">
                                    <h3>Gaya Hidup Sehat</h3>
                                    <p>Tidak cukup sulit untuk menerapkan Ada gaya hidup sehat, namun di tengah kondisi saat ini belum semua rumah tangga Indonesia bisa menerapkan gaya hidup sehat.</p>
                                </div>  
                                </a>  
                            </div>
                        </div>

                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
        
            </div>
            <br><br><br>
            <hr>

            <div class="row">
                <div id="zone-wrapper" style="background-color:rgba(255, 255, 255, 0.904);font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                    <div id="zone-header" style="margin-bottom:10%;margin-top:5%;">
                        <br><br><br>
                        <h1 class="text-center" style="margin-left:250px;margin-right:250px;"><strong>6 Pola Hidup Sehat Agar Daya Tahan Tubuh Kuat Saat Pandemi</strong></h1>
                        <p>Menjaga kesehatan tubuh adalah hal yang sudah seharusnya dilakukan, terutama di masa pandemi. Menerapkan pola hidup sehat menjadi salah satu langkah awal yang bisa kamu tempuh agar tidak gampang terkena penyakit, dan hal ini juga berlaku untuk virus corona yang sedang mewabah. Untuk menjaga agar tubuh tetap sehat, kamu harus tahu terlebih dahulu bagaimana cara untuk menjalankan gaya hidup dengan benar. Berikut simak selengkapnya.</p>
                        <div class="text-center" style="margin-top:40px;margin-bottom:40px;"><img src="{{ asset('/img/phs_image.jpg') }}" alt="Pola Hidup Sehat"></div>
                        <h2>Sekilas Tentang Pengertian Pola Hidup Sehat</h2>
                        <p>Pengertian pola hidup sehat dapat diartikan bahwa kamu memperhatikan segala aspek yang berkaitan dengan kondisi kesehatan. Ada banyak hal yang perlu untuk kamu perhatikan, mulai dari nutrisi dan juga makanan yang kamu konsumsi setiap harinya. Selain memperhatikan asupan makanan, maka melakukan rutinitas olahraga secara teratur juga akan membantu untuk menjaga agar kondisi tubuh tetap sehat.</p>
                        <p>Anda juga bisa untuk menghindari segala sesuatu yang bisa memicu timbulnya penyakit. Seperti mengkonsumsi minuman beralkohol, lebih banyak makan makanan dengan menu junk food hingga merokok serta begadang. Pasalnya, hal tersebut memang terlihat nyaman untuk dilakukan, tetapi akan memiliki dampak yang sangat negatif di kemudian hari.</p>
                        <p>Di masa pandemi ini, kamu juga perlu lebih aware akan kondisi kesehatan. Hal ini disebabkan serangan virus dapat terjadi dan bisa untuk kamu temui dimana saja. Oleh sebab itu selain menjaga pola makan dan gaya hidup sehat di masa pandemi, untuk anak kost Jakarta sebisa mungkin diharapkan untuk tidak keluar rumah apabila tidak ada kegiatan penting. Dengan begitu, kamu akan berperan untuk memutus rantai persebaran Covid-19 yang masih tinggi di Indonesia.</p>
                        <h2>Manfaat Melakukan Gaya Hidup Sehat</h2>
                        <p>Ketika kamu menerapkan pola makan hidup sehat, maka akan banyak manfaat yang bisa didapatkan. Pertama, sistem imun tubuh akan tetap terjaga. Dengan memiliki gaya hidup yang sehat dan kamu menerapkannya secara konsisten, maka tubuh pun akan terlindungi dari berbagai macam penyakit yang menyerang. Sebut saja seperti hipertensi, jantung dan juga stroke.</p>
                        <p>Selain itu, dengan menjaga pola hidup yang sehat maka kamu juga bisa untuk terhindar dari virus yang mematikan seperti corona. Oleh karena itu, kamu perlu untuk memperhatikan asupan makanan yang dapat meningkatkan metabolisme di dalam tubuh. Ketika metabolisme terjaga, maka organ tubuh pun akan bisa bekerja secara maksimal. Sehingga, kamu pun akan lebih sehat dan tidak terserang penyakit.</p>
                        <p>Manfaat pola hidup sehat yang kedua adalah mampu membuat usia lebih panjang. Hal tersebut diperkuat dengan penelitian yang dilakukan oleh American Council. Dimana seseorang yang menjalankan gaya hidup yang sehat dan teratur akan memiliki kesempatan untuk hidup dengan lebih lama. Untuk itu, kamu perlu untuk mengimbangi beberapa aktifitas seperti istirahat yang cukup, olahraga dan juga konsumsi makanan sehat.</p>
                        <p>Dengan begitu, proses regenerasi yang terjadi di dalam tubuh akan bisa berjalan lebih maksimal. Selain itu, metabolisme yang terjadi pada sel di dalam tubuh juga bisa bekerja lebih optimal. Ketika proses regenerasi dan juga metabolisme berjalan dengan lancar, maka tubuh pun akan jauh lebih sehat. Sehingga, kamu akan terhindar dari berbagai macam penyakit, salah satunya virus corona ini.</p>
                        <p>Pola hidup sehat dan bersih juga akan membuat kulit lebih cantik. Hal ini dikarenakan ketika kamu memadukan olahraga yang rutin dan konsumsi makanan yang teratur, maka akan mampu menghasilkan kulit yang sehat. Dengan begitu, kamu pun akan terlihat lebih glowing secara alami. Untuk itu, kamu bisa meninggalkan beberapa kebiasaan yang buruk seperti merokok dan juga mengkonsumsi minuman beralkohol.</p>
                        <p>Manfaat lain dari menjalankan pola hidup sehat adalah bagus untuk kesehatan mental. Hal ini dikarenakan menjalani gaya hidup yang sehat tak hanya bagus untuk memperbaiki kesehatan fisik saja. Pasalnya, ketika anda memiliki pola hidup yang teratur maka suasana hati pun akan bisa diperbaiki dengan baik. Sehingga, anda akan terhindari dari menderita depresi.</p>
                        <p>Untuk mendapatkan kesehatan mental yang bagus, maka kamu perlu menerapkan pola hidup yang yang sehat dengan cara mengkonsumsi makanan yang memiliki nutrisi baik. Selain itu, kesehatan mental sendiri juga bisa dilakukan dengan cara rutin melakukan olahraga setiap harinya. Pasalnya, ketika kamu melakukan olahraga maka hormon endorfin akan mampu dihasilkan oleh tubuh.</p>
                        <h2>Cara Menjaga Pola Hidup Sehat Saat New Normal</h2>
                        <div class="text-center" style="margin-top:40px;margin-bottom:40px;"><img src="{{ asset('/img/phs_image2.jpg') }}" alt="Pola Hidup Sehat"></div>
                        <h3>1. Memiliki Pikiran yang Positif </h3>
                        <p>New normal tampaknya menjadi standar hidup baru yang digaungkan oleh banyak orang belakangan ini. Dengan menyebarnya virus corona sampai sekarang, masyarakat pun dipaksa untuk menjalani pola hidup sehat di masa pandemi. Selain dituntut untuk menjaga kesehatan, selama masa pandemi maka kamu juga perlu memiliki pola pikir yang positif.</p>
                        <p>Hal ini dikarenakan dengan adanya pola pikir yang positif akan membuat tubuh  menjadi lebih sehat. Di masa pandemi corona ini, maka kekuatan untuk menghadapi virus yang berbahaya ini akan membuat orang menjadi cemas dan khawatir. Untuk itu, ketika kamu menerapkan pola pikir yang positif, akan berfungsi untuk membuat perasaan lebih tenang di tengah situasi yang mengkhawatirkan ini.</p>
                        <p>Sebab, pola pikir seseorang tentu saja dapat memberikan pengaruh terhadap kesehatan dan kondisi tubuh. Ketika orang memiliki pola pikir yang positif, maka mereka pun akan memiliki kondisi tubuh yang cenderung sehat. Hal ini disebabkan mereka akan mampu untuk menangani stres dengan baik. Sehingga akan membuat tubuh menjadi lebih bahagia dan tentu saja sehat.</p>
                        <p>Selain itu, bagi kamu yang memiliki pikiran yang positif tentu saja akan lebih mudah untuk menjalankan pola hidup sehat. Ketika kamu memiliki pikiran yang tenang dan positif, maka kesehatan akan tetap terjaga. Tentunya, hal ini akan membuat kamu terhindar dari serangan penyakit, salah satunya seperti virus corona yang menyebar dengan sangat cepat ini.</p>
                        <h3>2. Beristirahat Dengan Cukup</h3>
                        <p>Pola hidup sehat ala anak kost yang sangat mudah untuk dilakukan adalah beristirahat. Hal ini dikarenakan dalam masa pandemi, pembelajaran kuliah juga dilakukan secara daring. Sehingga, mahasiswa akan banyak melakukan aktivitas selama di kos saja. Dengan melakukan istirahat dengan cukup, ternyata memiliki dampak dan pengaruh yang bagus untuk kesehatan.</p>
                        <p>Ketika kamu tidur dengan porsi yang cukup, maka berfungsi untuk menghilangkan rasa ngantuk serta untuk kesehatan jiwa kamu. Pasalnya, apabila kamu kurang tidur ternyata banyak resiko penyakit lain yang mengintai seperti jantung, tekanan darah tinggi, stroke dan juga tekanan jantung pun menjadi tidak teratur. Oleh sebab itu, dengan beristirahat yang cukup akan memiliki manfaat yang sangat bagus untuk kesehatan.</p>
                        <h3>3. Berolahraga dan Melakukan Banyak Aktivitas Fisik</h3>
                        <p>Berolahraga menjadi salah satu pola hidup sehat bagi remaja yang bisa dilakukan oleh anak kost Jakarta. Di masa pandemi seperti ini, penting bagi kamu untuk melakukan banyak aktivitas fisik seperti berolahraga. Untuk membatasi diri keluar rumah atau kos, kamu bisa melakukan aktifitas fisik kecil kecilan saja, seperti senam, pilates ataupun yoga yang sangat mudah untuk dilakukan.</p>
                        <p>Dengan melakukan olahraga secara rutin akan membantu untuk menjaga daya tahan tubuh agar tetap bagus. Selain itu, ketika berolahraga maka tubuh akan lebih bugar dan juga mampu untuk meningkatkan daya tahan tubuh. Selain itu, kegiatan fisik satu ini jga bisa untuk mengubah suasana hari kamu. untuk itu, kamu pun bisa melakukan kegiatan fisik satu ini terutama ketika sedang senggang.</p>
                        <h3>4. Rutin Mengkonsumsi Buah dan Sayur serta Air Putih</h3>
                        <p>Pola hidup sehat saat new normal bisa dilakukan dengan mengkonsumsi makanan yang bergizi. Untuk itu, usahakan rutin mengkonsumsi buah dan sayur yang kaya akan serat dan baik untuk tubuh. Dengan memakan buah dan sayur ini juga bisa untuk meningkatkan kekebalan tubuh di masa pandemi. Apabila kamu memiliki imun tubuh yang kuat, maka bakteri dan juga virus pun akan sulit untuk masuk ke dalam tubuh.</p>
                        <p>Selain mengkonsumsi makanan yang sehat, maka kamu juga perlu rutin minum air putih setiap harinya. Usahakan untuk mengkonsumsi minimal 8 gelas per hari. Porsi tersebut memang telah dianjurkan oleh ahli kesehatan karena dengan rutin mengkonsumsi air putih, akan membuat sistem yang ada di tubuh akan berjalan dengan lebih sempurna dan lancar.</p>
                        <h3>5. Tidak Merokok</h3>
                        <p>Bagi kamu yang masih merokok, maka usahakan di masa pandemi ini berhenti untuk melakukan kebiasaan tersebut. Selain dapat membuat tubuh menjadi rentan terhadap berbagai penyakit mematikan, dengan berhenti merokok pun dapat membuat sistem imun tubuh menjadi lebih terjaga. Ketika kamu berhenti melakukan kebiasaan ini akan mampu membuat sirkulasi darah menjadi lebih meningkat.</p>
                        <p>Bukan hanya itu saja, ketika kamu tidak merokok maka kadar oksigen pun otomatis juga akan meningkat. Sehingga, hal ini juga akan menurunkan peradangan maupun inflamasi di dalam tubuh. Dengan begitu, akan banyak manfaat baik yang kamu dapatkan ketika berhenti untuk merokok. Kekebalan dalam tubuh pun juga akan meningkat ketika kamu mulai berhenti untuk melakukan kebiasaan buruk satu ini.<p>
                        <h3>6. Selalu Menjaga Kebersihan</h3>
                        <div class="text-center" style="margin-top:40px;margin-bottom:40px;"><img src="{{ asset('/img/phs_image3.jpg') }}" alt="Pola Hidup Sehat"></div>    
                        <p>Pola hidup sehat yang penting dilakukan selama masa pandemi adalah menjaga kesehatan. Hal ini dikarenakan kegiatan ini menjadi sesuatu yang wajib untuk anda lakukan. Dengan menerapkan hidup bersih, maka kamu pun dapat terhindar dari adanya infeksi virus dan juga berbagai macam bakteri penyebab penyakit, salah satunya adalah virus corona yang sedang mewabah ini.</p>
                        <p>Untuk itu, ada beberapa cara mudah untuk menjaga kebersihan di masa pandemi ini. Pertama, kamu bisa mencuci tangan secara teratur dengan menggunakan sabun maupun hand sanitizer. Selain itu, usahakan untuk segera mandi setelah melakukan aktifitas di luar ruangan sehingga kebersihan badan dan kesehatan pun akan tetap terjaga. Di lain sisi, kamu juga bisa untuk menyemprot barang barang yang telah digunakan dengan menggunakan cairan desinfektan.</p>
                        <br>
                        <p>Itulah beberapa cara untuk menjaga kesehatan di masa pandemi. Dengan melakukan cara cara tersebut, maka tubuh pun akan terhindar dari virus yang berbahaya ini. Selain itu, kamu juga bisa berkontribusi untuk memutus rantai penyebaran covid-19. Tak hanya menjaga pola hidup sehat, kamu juga perlu untuk menerapkan protokol kesehatan, terutama ketika sedang berada di luar ruangan atau berkegiatan di luar rumah. seperti memakai masker dan jaga jarak.</p>
                        <br><br>
                        <p>Sumber Referensi: <a target="blank" href="https://www.reddoorz.com/blog/id/kost/6-pola-hidup-sehat-agar-daya-tahan-tubuh-kuat-saat-pandemi"> Reddoorz.com</a></p>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        

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
