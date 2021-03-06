@if ($slides->count())
    <section id="slides">
        <div>
            <div id="slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($slides as $key => $val)
                        <li data-target="#slider" data-slide-to="{{ $key }}"{!! $key == 0 ? ' class="active"' : '' !!}></li>
                    @endforeach
                </ol>

                <div class="carousel-inner" role="listbox">
                    @foreach ($slides as $key => $val)
                        <div class="item{{ $key == 0 ? ' active' : '' }}">
                            <img style="min-height: 250px;" src="/images/original/{{ $val->img_url . $val->image }}">
                            <div class="carousel-caption">
                                <div class="carousel-caption-bg">
                                    {!! $val->title ? '<h2>' . $val->title . '</h2>' : '' !!}
                                    {!! $val->text ? '<p>' . $val->text . '</p>' : '' !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div id="appartments_top"></div>
    </section>
@endif