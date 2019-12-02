@extends('layouts.app')

@section('content')
    <section class="banner-one" id="home">

        <img src="images/banner-icon-1-1.png" alt="Awesome Image" class="bubble-1" />
        <img src="images/banner-icon-1-3.png" alt="Awesome Image" class="bubble-2" />
        <img src="images/banner-icon-1-2.png" alt="Awesome Image" class="bubble-3" style="margin-left:-30px" />
        <img src="images/banner-icon-1-4.png" alt="Awesome Image" class="bubble-4" />
        <img src="images/banner-icon-1-5.png" alt="Awesome Image" class="bubble-5" />
        <img src="images/banner-icon-1-6.png" alt="Awesome Image" class="bubble-6" />


        <img src="images/positive_attitude.svg" class="banner-one__moc" alt="Awesome Image"/>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-one__content">
                        <div class="block-title">
                            <div class="block-title__text"><span>Mudahkan Sobat</span> <br> <span>Manarul dengan</span> <br> <span>SIMMI</span></div><!-- /.block-title__text -->
                        </div><!-- /.block-title -->
                        <p class="banner-one__text">Sistem Informasi Masjid Manarul Ilmi</p><!-- /.banner-one__text -->
                        <p class="current scrollToLink"><a href="#blog" class="banner-one__btn">Get Started</a></p>
                    </div><!-- /.banner-one__content -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.banner-one -->
    <section class="blog-one" id="blog" style="padding-left:3cm; padding-right:3cm">
        <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__text"><span>Berita-berita Baru</span></div><!-- /.block-title__text -->
                </div><!-- /.block-title -->
        
        <div class="row" style="padding-left: 1%;padding-right: 1%">
            <div class="column" style="width:25%;background-color:transparent">
            </div>

            <div class="column" style="width:50%; height:100%; background-color:white">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @foreach ($data as $datas)
                <div class="card" style="margin-bottom:20px">
                    <div class="card-header">{{$datas->post_title}}</div>
                    <div class="card-body">{{$datas->post_content}}</div>
                </div>   
                @endforeach
            </div>

        <div class="column" style="width:25%">
            <p style="text-align: center;"><iframe src="https://www.jadwalsholat.org/adzan/ajax.row.php?id=265" frameborder="0" width="400" height="400"></iframe></p>
        </div>
    </div>
        </div>
    </section>
@endsection