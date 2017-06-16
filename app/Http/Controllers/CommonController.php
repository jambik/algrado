<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Snowfire\Beautymail\Beautymail;
use Validator;

class CommonController extends FrontendController
{
    /**
     * Send feedback form.
     *
     * @param Request $request
     * @return Response
     */
    public function feedback(Request $request)
    {
        $rules = [
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ];

        $messages = [
            'name.required' => 'Представьтесь пожалуйста',
            'phone.required' => 'Укажите пожалуйста Ваши контактные данные',
            'message.required' => 'А где собственно сообщение?',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails())
        {
            $this->throwValidationException($request, $validator);
        }

        $beautymail = app()->make(Beautymail::class);
        $beautymail->send('emails.feedback', ['input' => $request->all()], function($message)
        {
            $message->to($this->settings['email'] ?: env('MAIL_FROM_ADDRESS'));
            $message->subject('Обратная связь');
        });

        if ($request->ajax()){
            return response()->json([
                'status' => 'ok',
                'message' => 'Сообщение отправлено',
            ]);
        }

        return redirect(route('feedback'))->with('status', 'Сообщение отправлено');
    }

    /**
     * Send callback form.
     *
     * @param Request $request
     * @return Response
     */
    public function callback(Request $request)
    {
        $rules = [
            'phone' => 'required',
            'message' => 'required',
        ];

        $messages = [
            'phone.required' => 'Укажите пожалуйста Ваш телефончик для обратной связи',
            'message.required' => 'Напишите Ваш вопрос',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails())
        {
            $this->throwValidationException($request, $validator);
        }

        $beautymail = app()->make(Beautymail::class);
        $beautymail->send('emails.callback', ['input' => $request->all()], function($message)
        {
            $message->to($this->settings['email'] ?: env('MAIL_FROM_ADDRESS'));
            $message->subject('Вопрос с сайта');
        });

        if ($request->ajax()){
            return response()->json([
                'status' => 'ok',
                'message' => 'Вопрос отправлен',
            ]);
        }

        return redirect(route('index'))->with('status', 'Вопрос отправлен');
    }

    /**
     * Send registration form.
     *
     * @param Request $request
     * @return Response
     */
    public function reservation(Request $request)
    {
        $rules = [
            'name' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'days' => 'required',
            'date' => 'required',
            'adults' => 'required',
        ];

        $messages = [
            'name.required' => 'Представьтесь пожалуйста',
            'city.required' => 'Укажите Ваш город',
            'phone.required' => 'Укажите свой телефон для обратной связи',
            'days.required' => 'Укажите количество ночей, которые вы планируете провести у нас',
            'date.required' => 'Укажите дату заезда',
            'adults.required' => 'Укажите количество взрослых',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails())
        {
            $this->throwValidationException($request, $validator);
        }

        $beautymail = app()->make(Beautymail::class);
        $beautymail->send('emails.registration', ['input' => $request->all()], function($message)
        {
            $message->to($this->settings['email'] ?: env('MAIL_FROM_ADDRESS'));
            $message->subject('Бронирование номера');
        });

        if ($request->ajax()){
            return response()->json([
                'status' => 'ok',
                'message' => 'Бронирование номера оформлено',
            ]);
        }

        return redirect(route('index'))->with('status', 'Бронирование номера оформлено');
    }
}
