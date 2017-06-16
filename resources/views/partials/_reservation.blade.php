<div class="modal fade" id="reservationForm" tabindex="-1" role="dialog" aria-labelledby="reservationFormLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('reservation') }}" method="POST" name="form_reservation" id="form_reservation" class="form-horizontal">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="reservationFormLabel">Бронирование номера: <span id="roomName">Стандарт Твин</span></h4>
                </div>
                <div class="modal-body">
                    <div class="form-status"></div>
                    <p class="text-center">ПЕРСОНАЛЬНЫЕ ДАННЫЕ</p>
                    <div class="form-group">
                        <label for="r_name" class="col-sm-5 control-label">Представьтесь *</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="r_name" name="name" placeholder="Фамилия Имя Отчество">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="r_city" class="col-sm-5 control-label">Город *</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="r_city" name="city" placeholder="Город">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="r_phone" class="col-sm-5 control-label">Контактный телефон *</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="r_phone" name="phone" placeholder="Контактный телефон">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="r_email" class="col-sm-5 control-label">Электронная почта</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="r_email" name="email" placeholder="Ваш email, если есть">
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-center">ДАННЫЕ ДЛЯ БРОНИРОВАНИЯ</p>
                    <div class="form-group">
                        <label for="r_days" class="col-sm-5 control-label">Количество ночей *</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="r_days" name="days" value="1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="r_date" class="col-sm-5 control-label">Дата заезда *</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control input-date" id="r_date" name="date" placeholder="дд-мм-гггг">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="r_adults" class="col-sm-5 control-label">Количество взрослых *</label>
                        <div class="col-sm-6">
                            <select id="r_adults" name="adults" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="r_infants" class="col-sm-5 control-label">Количество младенцев<small>с 0 до 2 лет</small></label>
                        <div class="col-sm-6">
                            <select id="r_infants" name="infants" class="form-control">
                                <option value="">Без младенцев</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="r_kids" class="col-sm-5 control-label">Количество детей<small>с 2 до 12 лет</small></label>
                        <div class="col-sm-6">
                            <select id="r_kids" name="kids" class="form-control">
                                <option value="">Без детей</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="r_name" class="col-sm-5 control-label">Дополнительная информация</label>
                        <div class="col-sm-6">
                            <textarea name="message" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary form-button">Забронировать</button>
                </div>
            </form>
        </div>
    </div>
</div>