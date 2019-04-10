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
                            <img src="images/song.jpg" class="albumArt song_main_img">
                        </div>
                        <div class="col-md-6 col-6">
                            <p class="playing">Now Playing</p>
                            <p class="zeromargin track-name">Waiting</p>
                            <p class="artist-name">Waiting</p>
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
@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.17.0/axios.js"></script>
    <script type="text/javascript">
        $( document ).ready(function()
        {
            // location of the AzuraCast API .
            var stationAPILocation = 'http://radio.cargofm.co.uk/api/nowplaying/1';
            var artistName = document.querySelector('.artist-name');
            var trackName = document.querySelector('.track-name');
            var nowPlayingWidget = document.querySelector('.now-playing-widget');
            var albumArt = document.querySelector('.albumArt');
            axios.get(stationAPILocation)
                .then(function (response) {
                    artistName.innerHTML = response.data.now_playing.song.artist;
                    trackName.innerHTML = response.data.now_playing.song.title;
                    albumArt.src = response.data.now_playing.song.art;
                })
                // default catchall error handling, in the event of a GET failure.
                .catch(function (error) {
                    nowPlayingWidget.innerHTML = '<b>Unable to load now playing data</b>';
                });
        });
        var auto_refresh = setInterval(
            function ()
            {
                // location of the AzuraCast API .
                var stationAPILocation = 'http://radio.cargofm.co.uk/api/nowplaying/1';
                var artistName = document.querySelector('.artist-name');
                var trackName = document.querySelector('.track-name');
                var nowPlayingWidget = document.querySelector('.now-playing-widget');
                var albumArt = document.querySelector('.albumArt');
                axios.get(stationAPILocation)
                    .then(function (response) {
                        artistName.innerHTML = response.data.now_playing.song.artist;
                        trackName.innerHTML = response.data.now_playing.song.title;
                        albumArt.src = response.data.now_playing.song.art;
                    })
                    // default catchall error handling, in the event of a GET failure.
                    .catch(function (error) {
                        nowPlayingWidget.innerHTML = '<b>Unable to load now playing data</b>';
                    });
            }, 10000); // refresh every 10000 milliseconds
    </script>
@endsection
