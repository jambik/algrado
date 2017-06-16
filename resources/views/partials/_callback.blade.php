<div class="modal fade" id="callbackModal" tabindex="-1" role="dialog" aria-labelledby="callbackLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('callback') }}" method="POST" name="form_callback" id="form_callback">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="callbackLabel">Вопрос</h4>
                </div>
                <div class="modal-body">
                    <div class="form-status"></div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Ваш email или телефон">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" placeholder="Ваше сообщение" style="height: 200px;"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary form-button">Задать вопрос</button>
                </div>
            </form>
        </div>
    </div>
</div>