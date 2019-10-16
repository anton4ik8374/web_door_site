<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kenvel\Sberbank;
use mysql_xdevapi\Exception;

class SberbanckController extends Controller
{

    private $domain;

    public function __construct()
    {
        $this->domain = request()->getHttpHost();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(/*$domen, $zon*/)
    {

        /*$acquiring_url = 'https://securepayments.sberbank.ru';
        $access_token = env('CLIENT_SECRET');

        $sberbank = new Sberbank($acquiring_url, $access_token);

        //Подготовка массива с данными об оплате
        $payment = [
            'orderNumber' => '1234567',                           //Номер заказа
            'amount' => 100,                                 //Сумма заказа в рублях
            'language' => 'ru',                                //Локализация
            'description' => 'New payment',                       //Описание заказа
            'returnUrl' => 'https://web-door.net/pay', //URL сайта в случае успешной оплаты
            'failUrl' => 'https://web-door.net/pay',       //URL сайта в случае НЕуспешной оплаты
        ];

        //Получение url для оплаты
        $result = $sberbank->paymentURL($payment);
        $payment_id = $result['payment_id'];
        echo $payment_id;dd($result);
        //Контроль ошибок
        if (!$result['success']) {
            echo($result['error']);
        } else {
            $payment_id = $result['payment_id'];
            return redirect($result['payment_url']);
        }
        //$payment_id Идентификатор платежа банка (полученый в пункте "2 Получить URL для оплаты")

        $result = $sberbank->getState($payment_id);

        //Контроль ошибок
        if (!$result['success']) {
            echo($result['error']);
        } else {
            echo($result['payment_status']);
        }*/

        return view('sberbanck');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
