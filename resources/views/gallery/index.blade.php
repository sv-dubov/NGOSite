@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            @if(count($albums) > 0)
                <?php
                $colcount = count($albums);
                $i = 1;
                ?>
                <div id="albums">
                    <div class="row text-center">
                        @foreach($albums as $album)
                            @if($i == $colcount)
                                <div class='medium-4 columns end'>
                                    <a href="{{route('gallery.show', $album->slug)}}"> {{--may be by album id--}}
                                        <img class="thumbnail" src="/uploads/albums/covers/{{$album->cover_image}}" alt="{{$album->name}}">
                                    </a>
                                    <br>
                                    <h4>{{$album->name}}</h4>
                                    @else
                                        <div class='medium-4 columns'>
                                            <a href="{{route('gallery.show', $album->slug)}}"> {{--may be by album id--}}
                                                <img class="thumbnail" src="/uploads/albums/covers/{{$album->cover_image}}" alt="{{$album->name}}">
                                            </a>
                                            <br>
                                            <h4>{{$album->name}}</h4>
                                            @endif
                                            @if($i % 3 == 0)
                                        </div></div><div class="row text-center">
                                    @else
                                </div>
                            @endif
                            <?php $i++; ?>
                        @endforeach
                    </div>
                </div>
            @else
                <p>No Albums To Display</p>
            @endif
        </div>
    </div>
    <!-- end main content-->
@endsection
