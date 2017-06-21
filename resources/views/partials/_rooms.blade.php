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


<!-- Стандарт Твин -->
<div class="modal fade" id="roomStandartTwin" tabindex="-1" role="dialog" aria-labelledby="roomStandartTwinLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="roomStandartTwinLabel">Стандарт Твин</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-7">
                            <img src="img/appartment-1.jpg" class="img-responsive roomImage">
                            <div class="room-icons">
                                <img data-image="img/appartment-1.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_01.jpg">
                                <img data-image="img/appartment-2.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_02.jpg">
                                <img data-image="img/appartment-3.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_03.jpg">
                                <img data-image="img/appartment-4.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_04.jpg">
                                <img data-image="img/appartment-5.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_05.jpg">
                                <img data-image="img/appartment-6.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_06.jpg">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="room-persons">
                                <img src="img/icon-adult.png">
                                <img src="img/icon-adult.png">
                                <img src="img/icon-child-alpha.png">
                                <img src="img/icon-child-alpha.png">
                            </div>
                            <div>2 кровати 140 х 200, 24 м<sup>2</sup></div>

                            <p>&nbsp;</p>
                            <table class="table table-bordered">
                                <tr>
                                    <th colspan="3" class="text-center">СТОИМОСТЬ ПРОЖИВАНИЯ<br>(руб/сутки за номер)</th>
                                </tr>
                                <tr class="tr-dates">
                                    <th>1 июня - 25 июня</th>
                                    <th>27 июня - 31 августа</th>
                                    <th>1 сентябрпя - 30 сентября</th>
                                </tr>
                                <tr>
                                    <td>6000</td>
                                    <td>7600</td>
                                    <td>6000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="room-text">
                    <div class="room-description">стильные номера с двумя просторными кроватями, площадью 24 м<sup>2</sup></div>
                    <div class="room-comfort">
                        <ul>
                            <li>2 отдельные просторные кровати 140*200 см</li>
                            <li>возможность дополнительного размещения двух детей  0-2 лет бесплатно , 2-12 лет (1700руб)</li>
                            <li>Бесплатный Wi-Fi</li>
                            <li>Телевизор</li>
                            <li>Кондиционер</li>
                            <li>Сейф</li>
                            <li>холодильник</li>
                            <li>балкон</li>
                            <li>Санузел с душевой</li>
                            <li>Фен</li>
                            <li>набор банных полотенец</li>
                            <li>пляжное полотенце</li>
                            <li>Тапочки</li>
                            <li>Бесплатная бутылка минеральной воды</li>
                        </ul>
                    </div>
                </div>

                <p>&nbsp;</p>
                <div class="text-center"><strong>Примечание:</strong></div>
                <ul class="list">
                    <li>В стоимость проживания включено трехразовое питание- ЗАВТРАК , ОБЕД, УЖИН  - шведский стол.</li>
                    <li>Дети до 2-х лет  размещаются бесплатно без предоставления дополнительного спального места.</li>
                    <li>Есть возможность дополнительного размещения в номера Стандарт TWN, Студия, Стандарт +.</li>
                    <li>Стоимость дополнительного размещения ребенка ( 2-12 лет) - 1600 руб.; взрослого -  2000 руб .</li>
                    <li>В случае отмены, изменения бронирования или незаезда, взимается штраф в размере 100% стоимости первых суток проживания.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary form-button" data-toggle="modal" data-target="#reservationForm">Забронировать номер</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<!-- Стандарт Дабл Твин -->
<div class="modal fade" id="roomStandartDoubleTwin" tabindex="-1" role="dialog" aria-labelledby="roomStandartDoubleTwinLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="roomStandartDoubleTwinLabel">Стандарт Дабл Твин</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-7">
                            <img src="img/appartment-1.jpg" class="img-responsive roomImage">
                            <div class="room-icons">
                                <img data-image="img/appartment-1.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_01.jpg">
                                <img data-image="img/appartment-2.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_02.jpg">
                                <img data-image="img/appartment-3.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_03.jpg">
                                <img data-image="img/appartment-4.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_04.jpg">
                                <img data-image="img/appartment-5.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_05.jpg">
                                <img data-image="img/appartment-6.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_06.jpg">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="room-persons">
                                <img src="img/icon-adult.png">
                                <img src="img/icon-adult.png">
                            </div>
                            <div>2 кровати 140 х 200, 24 м<sup>2</sup></div>

                            <p>&nbsp;</p>
                            <table class="table table-bordered">
                                <tr>
                                    <th colspan="3" class="text-center">СТОИМОСТЬ ПРОЖИВАНИЯ<br>(руб/сутки за номер)</th>
                                </tr>
                                <tr class="tr-dates">
                                    <th>1 июня - 25 июня</th>
                                    <th>27 июня - 31 августа</th>
                                    <th>1 сентябрпя - 30 сентября</th>
                                </tr>
                                <tr>
                                    <td>6000</td>
                                    <td>7600</td>
                                    <td>6000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="room-text">
                    <div class="room-description">стильные номера с двумя просторными кроватями, площадью 24 м<sup>2</sup></div>
                    <div class="room-comfort">
                        <ul>
                            <li>2 отдельные просторные кровати 140*200 см</li>
                            <li>возможность дополнительного размещения двух детей  0-2 лет бесплатно , 2-12 лет (1700руб)</li>
                            <li>Бесплатный Wi-Fi</li>
                            <li>Телевизор</li>
                            <li>Кондиционер</li>
                            <li>Сейф</li>
                            <li>холодильник</li>
                            <li>балкон</li>
                            <li>Санузел с душевой</li>
                            <li>Фен</li>
                            <li>набор банных полотенец</li>
                            <li>пляжное полотенце</li>
                            <li>Тапочки</li>
                            <li>Бесплатная бутылка минеральной воды</li>
                        </ul>
                    </div>
                </div>

                <p>&nbsp;</p>
                <div class="text-center"><strong>Примечание:</strong></div>
                <ul class="list">
                    <li>В стоимость проживания включено трехразовое питание- ЗАВТРАК , ОБЕД, УЖИН  - шведский стол.</li>
                    <li>Дети до 2-х лет  размещаются бесплатно без предоставления дополнительного спального места.</li>
                    <li>Есть возможность дополнительного размещения в номера Стандарт TWN, Студия, Стандарт +.</li>
                    <li>Стоимость дополнительного размещения ребенка ( 2-12 лет) - 1600 руб.; взрослого -  2000 руб .</li>
                    <li>В случае отмены, изменения бронирования или незаезда, взимается штраф в размере 100% стоимости первых суток проживания.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary form-button" data-toggle="modal" data-target="#reservationForm">Забронировать номер</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<!-- Стандарт Плюс -->
<div class="modal fade" id="roomStandartPlus" tabindex="-1" role="dialog" aria-labelledby="roomStandartPlusLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="roomStandartPlusLabel">Стандарт Плюс</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-7">
                            <img src="img/appartment-1.jpg" class="img-responsive roomImage">
                            <div class="room-icons">
                                <img data-image="img/appartment-1.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_01.jpg">
                                <img data-image="img/appartment-2.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_02.jpg">
                                <img data-image="img/appartment-3.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_03.jpg">
                                <img data-image="img/appartment-4.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_04.jpg">
                                <img data-image="img/appartment-5.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_05.jpg">
                                <img data-image="img/appartment-6.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_06.jpg">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="room-persons">
                                <img src="img/icon-adult.png">
                                <img src="img/icon-adult.png">
                                <img src="img/icon-child-alpha.png">
                            </div>
                            <div>2 кровати 140 х 200, 24 м<sup>2</sup></div>

                            <p>&nbsp;</p>
                            <table class="table table-bordered">
                                <tr>
                                    <th colspan="3" class="text-center">СТОИМОСТЬ ПРОЖИВАНИЯ<br>(руб/сутки за номер)</th>
                                </tr>
                                <tr class="tr-dates">
                                    <th>1 июня - 25 июня</th>
                                    <th>27 июня - 31 августа</th>
                                    <th>1 сентябрпя - 30 сентября</th>
                                </tr>
                                <tr>
                                    <td>6400</td>
                                    <td>8000</td>
                                    <td>6400</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="room-text">
                    <div class="room-description">стильные номера с двумя просторными кроватями, площадью 24 м<sup>2</sup></div>
                    <div class="room-comfort">
                        <ul>
                            <li>2 отдельные просторные кровати 140*200 см</li>
                            <li>возможность дополнительного размещения двух детей  0-2 лет бесплатно , 2-12 лет (1700руб)</li>
                            <li>Бесплатный Wi-Fi</li>
                            <li>Телевизор</li>
                            <li>Кондиционер</li>
                            <li>Сейф</li>
                            <li>холодильник</li>
                            <li>балкон</li>
                            <li>Санузел с душевой</li>
                            <li>Фен</li>
                            <li>набор банных полотенец</li>
                            <li>пляжное полотенце</li>
                            <li>Тапочки</li>
                            <li>Бесплатная бутылка минеральной воды</li>
                        </ul>
                    </div>
                </div>

                <p>&nbsp;</p>
                <div class="text-center"><strong>Примечание:</strong></div>
                <ul class="list">
                    <li>В стоимость проживания включено трехразовое питание- ЗАВТРАК , ОБЕД, УЖИН  - шведский стол.</li>
                    <li>Дети до 2-х лет  размещаются бесплатно без предоставления дополнительного спального места.</li>
                    <li>Есть возможность дополнительного размещения в номера Стандарт TWN, Студия, Стандарт +.</li>
                    <li>Стоимость дополнительного размещения ребенка ( 2-12 лет) - 1600 руб.; взрослого -  2000 руб .</li>
                    <li>В случае отмены, изменения бронирования или незаезда, взимается штраф в размере 100% стоимости первых суток проживания.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary form-button" data-toggle="modal" data-target="#reservationForm">Забронировать номер</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<!-- Стандарт Плюс с видом на море -->
<div class="modal fade" id="roomStandartPlusView" tabindex="-1" role="dialog" aria-labelledby="roomStandartPlusViewLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="roomStandartPlusViewLabel">Стандарт Плюс с видом на море</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-7">
                            <img src="img/appartment-1.jpg" class="img-responsive roomImage">
                            <div class="room-icons">
                                <img data-image="img/appartment-1.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_01.jpg">
                                <img data-image="img/appartment-2.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_02.jpg">
                                <img data-image="img/appartment-3.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_03.jpg">
                                <img data-image="img/appartment-4.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_04.jpg">
                                <img data-image="img/appartment-5.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_05.jpg">
                                <img data-image="img/appartment-6.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_06.jpg">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="room-persons">
                                <img src="img/icon-adult.png">
                                <img src="img/icon-adult.png">
                                <img src="img/icon-child-alpha.png">
                            </div>
                            <div>2 кровати 140 х 200, 24 м<sup>2</sup></div>

                            <p>&nbsp;</p>
                            <table class="table table-bordered">
                                <tr>
                                    <th colspan="3" class="text-center">СТОИМОСТЬ ПРОЖИВАНИЯ<br>(руб/сутки за номер)</th>
                                </tr>
                                <tr class="tr-dates">
                                    <th>1 июня - 25 июня</th>
                                    <th>27 июня - 31 августа</th>
                                    <th>1 сентябрпя - 30 сентября</th>
                                </tr>
                                <tr>
                                    <td>6800</td>
                                    <td>8600</td>
                                    <td>6800</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="room-text">
                    <div class="room-description">стильные номера с двумя просторными кроватями, площадью 24 м<sup>2</sup></div>
                    <div class="room-comfort">
                        <ul>
                            <li>2 отдельные просторные кровати 140*200 см</li>
                            <li>возможность дополнительного размещения двух детей  0-2 лет бесплатно , 2-12 лет (1700руб)</li>
                            <li>Бесплатный Wi-Fi</li>
                            <li>Телевизор</li>
                            <li>Кондиционер</li>
                            <li>Сейф</li>
                            <li>холодильник</li>
                            <li>балкон</li>
                            <li>Санузел с душевой</li>
                            <li>Фен</li>
                            <li>набор банных полотенец</li>
                            <li>пляжное полотенце</li>
                            <li>Тапочки</li>
                            <li>Бесплатная бутылка минеральной воды</li>
                        </ul>
                    </div>
                </div>

                <p>&nbsp;</p>
                <div class="text-center"><strong>Примечание:</strong></div>
                <ul class="list">
                    <li>В стоимость проживания включено трехразовое питание- ЗАВТРАК , ОБЕД, УЖИН  - шведский стол.</li>
                    <li>Дети до 2-х лет  размещаются бесплатно без предоставления дополнительного спального места.</li>
                    <li>Есть возможность дополнительного размещения в номера Стандарт TWN, Студия, Стандарт +.</li>
                    <li>Стоимость дополнительного размещения ребенка ( 2-12 лет) - 1600 руб.; взрослого -  2000 руб .</li>
                    <li>В случае отмены, изменения бронирования или незаезда, взимается штраф в размере 100% стоимости первых суток проживания.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary form-button" data-toggle="modal" data-target="#reservationForm">Забронировать номер</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<!-- Студия с видом на море -->
<div class="modal fade" id="roomStudio" tabindex="-1" role="dialog" aria-labelledby="roomStudioLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="roomStudioLabel">Студия с видом на море</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-7">
                            <img src="img/appartment-1.jpg" class="img-responsive roomImage">
                            <div class="room-icons">
                                <img data-image="img/appartment-1.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_01.jpg">
                                <img data-image="img/appartment-2.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_02.jpg">
                                <img data-image="img/appartment-3.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_03.jpg">
                                <img data-image="img/appartment-4.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_04.jpg">
                                <img data-image="img/appartment-5.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_05.jpg">
                                <img data-image="img/appartment-6.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_06.jpg">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="room-persons">
                                <img src="img/icon-adult.png">
                                <img src="img/icon-adult.png">
                                <img src="img/icon-adult-alpha.png">
                                <img src="img/icon-adult-alpha.png">
                            </div>
                            <div>2 кровати 140 х 200, 24 м<sup>2</sup></div>

                            <p>&nbsp;</p>
                            <table class="table table-bordered">
                                <tr>
                                    <th colspan="3" class="text-center">СТОИМОСТЬ ПРОЖИВАНИЯ<br>(руб/сутки за номер)</th>
                                </tr>
                                <tr class="tr-dates">
                                    <th>1 июня - 25 июня</th>
                                    <th>27 июня - 31 августа</th>
                                    <th>1 сентябрпя - 30 сентября</th>
                                </tr>
                                <tr>
                                    <td>7700</td>
                                    <td>9600</td>
                                    <td>7700</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="room-text">
                    <div class="room-description">стильные номера с двумя просторными кроватями, площадью 24 м<sup>2</sup></div>
                    <div class="room-comfort">
                        <ul>
                            <li>2 отдельные просторные кровати 140*200 см</li>
                            <li>возможность дополнительного размещения двух детей  0-2 лет бесплатно , 2-12 лет (1700руб)</li>
                            <li>Бесплатный Wi-Fi</li>
                            <li>Телевизор</li>
                            <li>Кондиционер</li>
                            <li>Сейф</li>
                            <li>холодильник</li>
                            <li>балкон</li>
                            <li>Санузел с душевой</li>
                            <li>Фен</li>
                            <li>набор банных полотенец</li>
                            <li>пляжное полотенце</li>
                            <li>Тапочки</li>
                            <li>Бесплатная бутылка минеральной воды</li>
                        </ul>
                    </div>
                </div>

                <p>&nbsp;</p>
                <div class="text-center"><strong>Примечание:</strong></div>
                <ul class="list">
                    <li>В стоимость проживания включено трехразовое питание- ЗАВТРАК , ОБЕД, УЖИН  - шведский стол.</li>
                    <li>Дети до 2-х лет  размещаются бесплатно без предоставления дополнительного спального места.</li>
                    <li>Есть возможность дополнительного размещения в номера Стандарт TWN, Студия, Стандарт +.</li>
                    <li>Стоимость дополнительного размещения ребенка ( 2-12 лет) - 1600 руб.; взрослого -  2000 руб .</li>
                    <li>В случае отмены, изменения бронирования или незаезда, взимается штраф в размере 100% стоимости первых суток проживания.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary form-button" data-toggle="modal" data-target="#reservationForm">Забронировать номер</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<!-- Студия с видом на море -->
<div class="modal fade" id="roomCottage" tabindex="-1" role="dialog" aria-labelledby="roomCottageLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="roomCottageLabel">Коттедж семейный</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-7">
                            <img src="img/appartment-1.jpg" class="img-responsive roomImage">
                            <div class="room-icons">
                                <img data-image="img/appartment-1.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_01.jpg">
                                <img data-image="img/appartment-2.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_02.jpg">
                                <img data-image="img/appartment-3.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_03.jpg">
                                <img data-image="img/appartment-4.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_04.jpg">
                                <img data-image="img/appartment-5.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_05.jpg">
                                <img data-image="img/appartment-6.jpg" onclick="$('.roomImage').attr('src', $(this).data('image'));" src="img/appartment-1_06.jpg">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="room-persons">
                                <img src="img/icon-adult.png">
                                <img src="img/icon-adult.png">
                                <img src="img/icon-adult-alpha.png">
                                <img src="img/icon-adult-alpha.png">
                            </div>
                            <div>2 кровати 140 х 200, 24 м<sup>2</sup></div>

                            <p>&nbsp;</p>
                            <table class="table table-bordered">
                                <tr>
                                    <th colspan="3" class="text-center">СТОИМОСТЬ ПРОЖИВАНИЯ<br>(руб/сутки за номер)</th>
                                </tr>
                                <tr class="tr-dates">
                                    <th>1 июня - 25 июня</th>
                                    <th>27 июня - 31 августа</th>
                                    <th>1 сентябрпя - 30 сентября</th>
                                </tr>
                                <tr>
                                    <td>16 000</td>
                                    <td>19 000</td>
                                    <td>16 000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="room-text">
                    <div class="room-description">стильные номера с двумя просторными кроватями, площадью 24 м<sup>2</sup></div>
                    <div class="room-comfort">
                        <ul>
                            <li>2 отдельные просторные кровати 140*200 см</li>
                            <li>возможность дополнительного размещения двух детей  0-2 лет бесплатно , 2-12 лет (1700руб)</li>
                            <li>Бесплатный Wi-Fi</li>
                            <li>Телевизор</li>
                            <li>Кондиционер</li>
                            <li>Сейф</li>
                            <li>холодильник</li>
                            <li>балкон</li>
                            <li>Санузел с душевой</li>
                            <li>Фен</li>
                            <li>набор банных полотенец</li>
                            <li>пляжное полотенце</li>
                            <li>Тапочки</li>
                            <li>Бесплатная бутылка минеральной воды</li>
                        </ul>
                    </div>
                </div>

                <p>&nbsp;</p>
                <div class="text-center"><strong>Примечание:</strong></div>
                <ul class="list">
                    <li>В стоимость проживания включено трехразовое питание- ЗАВТРАК , ОБЕД, УЖИН  - шведский стол.</li>
                    <li>Дети до 2-х лет  размещаются бесплатно без предоставления дополнительного спального места.</li>
                    <li>Есть возможность дополнительного размещения в номера Стандарт TWN, Студия, Стандарт +.</li>
                    <li>Стоимость дополнительного размещения ребенка ( 2-12 лет) - 1600 руб.; взрослого -  2000 руб .</li>
                    <li>В случае отмены, изменения бронирования или незаезда, взимается штраф в размере 100% стоимости первых суток проживания.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary form-button" data-toggle="modal" data-target="#reservationForm">Забронировать номер</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>