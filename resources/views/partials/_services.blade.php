@foreach ($services as $item)
    <div class="modal fade" id="service{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="service{{ $item->id }}Label">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="service{{ $item->id }}Label">{{ $item->name }}</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center"><img src="/images/original/{{ $item->img_url.$item->image }}"></p>
                    {!! $item->text !!}
                </div>
            </div>
        </div>
    </div>
@endforeach