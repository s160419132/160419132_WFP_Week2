<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                @if( $detailid=='medicine_1')
                    <div>
                        <div>
                            <h2>Albuterol</h4>
                        </div>
                        <div>
                            <img src="{{asset('img/Albuterol.jpg')}}"/>
                        </div>
                    </div>
                    <div><h4>Albuterol sulphate dilates the airways of the lung and is used for treating asthma and other conditions of the lung. Albuterol sulphate inhalation solution is used for the treatment of bronchospasm in patients 2 to 12 years of age with asthma (reversible obstructive airway disease).Common side effects include:
migraine headaches,
non-migraine headaches,
nausea,
stomach upset,
flu-like symptoms,
cold symptoms,
ear infections (otitis media),
bronchitis,
cough</h4></div>
                @elseif($detailid=='medicine_2')
                        <div>
                            <div><h2><a href="{{route('detailmedicines',['id'=>'medicine_2'])}}">Vicodin</a></h4></div>
                            <div><img src="{{asset('img/Vicodin.jpg')}}"/></div>
                       </div>
                       <div><h4>Vicodin is a popular drug for treating acute or chronic moderate to moderately severe pain.
Its most common side effects are lightheadedness, dizziness, sedation, nausea, and vomiting.
Vicodin can reduce breathing, impair thinking, reduce physical abilities, and is habit-forming.</h4></div>
                @elseif($detailid=='medicine_3')
                        <div>
                            <div><h2><a href="{{route('detailmedicines',['id'=>'medicine_3'])}}">Metformin</a></h4></div>
                            <div><img src="{{asset('img/metformin.jpeg')}}"/></div>
                       </div>
                       <div><h4>Metformin is used alone or in combination with other drugs for treating type 2 diabetes in adults and children.The most common side effects of metformin are nausea, vomiting, gas, bloating, diarrhea, and loss of appetite.</h4></div>
                @elseif($detailid=='equip_1')
                         <div>
                            <div><h2><a href="{{route('detailequip',['id'=>'equip_1'])}}">stethoscope</a></h4></div>
                            <div><img src="{{asset('img/stethoscope.jpg')}}"/></div>
                        </div>
                        <div><h4>Stetoskop merupakan instrumen atau perlengkapan medis yang digunakan untuk mengirimkan suara bervolume rendah seperti detak jantung (atau suara usus, vena, atau janin) ke telinga pendengar. Stetoskop dapat terdiri dari dua penutup telinga (earpieces) yang dihubungkan melalui tubing fleksibel ke diafragma yang ditempatkan pada kulit pasien. Stetoskop telah menjadi salah satu simbol dari profesi medis.
Stetoskop memiliki bagian-bagian dasar seperti penutup telinga (earpieces), selang (tubing), bell dan diaphragm.</h4></div>
                        </div>
                @elseif($detailid=='equip_2')
                        <div>
                           <div><h2><a href="{{route('detailequip',['id'=>'equip_2'])}}">sphygmomanometer</a></h4></div>
                           <div><img src="{{asset('img/sphygmomanometer.jpg')}}"/></div>
                           <div><h4>Tekanan darah pada manusia menjadi satu ukuran yang menentukan tinggi rendahnya darah seseorang, adapun beberapa faktor yang mampu mempengaruhi meningkatnya tekanan darah seperti melakukan aktivitas yang berat, mengkonsumsi kafein, pengaruh obat-obatan stres dll.
Tensimeter berguna untuk mengukur tekanan darah, dengan mengetahui berapa tekanan darah kita dapat menilai apakah tekanan tensi darah kita normal atau tidak. Pada umumnya tekanan darah normal manusia dewasa adalah 100-130 mmHg untuk tekanan sitolik dan 60-90 mmHg untuk tekanan diastolik. Tensimeter dibagi menjadi 3 macam yaitu Tensimeter Air Raksa, Tensimeter Aneroid dan Tensimeter Digital, keduanya memiliki fungsi yang sama yaitu memonitor tekanan darah.</h4></div>
                        </div>
                @endif
            </div>
        </div>
    </body>
</html>
