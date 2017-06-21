@foreach ($rooms as $item)
    <div class="modal fade" id="room{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="room{{ $item->id }}Label">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="room{{ $item->id }}Label">{{ $item->name }}</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-7">
                                <img src="/images/large/{{ $item->img_url.$item->image }}" class="img-responsive roomImage">
                                @if ($item->photos->count())
                                    <div class="room-icons">
                                        <img data-image="/images/large/{{ $item->img_url.$item->image }}" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="/images/small/{{ $item->img_url.$item->image }}">
                                        @foreach($item->photos as $photo)
                                            <img data-image="/images/large/{{ $item->photo_url.$photo->image }}" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="/images/small/{{ $item->photo_url.$photo->image }}">
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="col-sm-5">
                                <div class="room-persons">
                                    {!! $item->capacity !!}
                                </div>
                                <div>{{ $item->spec }}</div>

                                <p>&nbsp;</p>
                                {!! $item->price !!}
                            </div>
                        </div>
                    </div>

                    <div class="room-text">
                        <div class="room-description">{{ $item->description }}</div>
                        <div class="room-comfort">{!! $item->text !!}</div>
                    </div>

                    <p>&nbsp;</p>
                    @if ($item->note)
                        <div class="text-center"><strong>Примечание:</strong></div>
                        <div class="room-note">{!! $item->note !!}</div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary form-button" data-toggle="modal" data-target="#reservationForm">Забронировать номер</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
@endforeach