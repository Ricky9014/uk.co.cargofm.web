@extends('layouts.app')

@section('content')

    <!--section 2-->
    <div class="container-fluid ">
        <div class="row">

            <div class="col-md-8 custom_padding margin">
                <div class="adverising">
                    <p>WANT YOUR ADD HERE? CONTACT<br>
                        <a>ADVERTISING@CARGOFM.CO.UK</a><br>
                        <span class="marketing_size">1215w X 238h</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4 custom_padding1 margin">
                <div class="song_list ">
                    <div class="row">
                        <div class="col-md-6 col-6 text-center">
                            <img src="images/song.jpg" class="song_main_img">
                        </div>
                        <div class="col-md-6 col-6">
                            <p class="playing">Now Playing</p>
                            <p class="zeromargin">January 28th</p>
                            <p>J.Cole</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <p>Recently Played</p>
                        </div>
                        <div class="col-md-6 col-6 text-right">
                            <a>See more <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>

                    <div class="row recents mt-1">
                        <div class="col-md-4 col-4 text-center">
                            <img src="images/song1.jpg" class="song_img">
                        </div>
                        <div class="col-md-8 col-8">
                            <p class="zeromargin">FWU</p>
                            <p>PARTY NEXT DOOR</p>
                        </div>
                    </div>
                    <div class="row recents mt-1">
                        <div class="col-md-4 col-4 text-center">
                            <img src="images/song2.jpg" class="song_img">
                        </div>
                        <div class="col-md-8 col-8">
                            <p class="zeromargin">Futura</p>
                            <p>Frank Ocean</p>
                        </div>
                    </div>
                    <div class="row recents mt-1">
                        <div class="col-md-4 col-4 text-center">
                            <img src="images/song3.jpg" class="song_img">
                        </div>
                        <div class="col-md-8 col-8">
                            <p class="zeromargin">I Bet U Look Good...</p>
                            <p>Arctic Monkeys</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--section 2 end-->
@endsection
