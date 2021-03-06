<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mail;

class Order extends Model
{
    protected $fillable =['customer_id', 'shipping_id', 'order_total', 'order_status'];

    public static function customerOrder($request)
    {
        $customerId = Customer::find($request->customerId);
        $shippingId = Shipping::where('name', $request->shipping['name'])
                                ->where('mobile', $request->shipping['mobile'])
                                ->where('address', $request->shipping['address'])
                                ->orderBy('id', 'DESC')
                                ->first();

        $order = new Order();
        $order->customer_id     =   $customerId->id;
        $order->shipping_id     =   $shippingId->id;
        $order->order_total     =   $request->total;
        $order->save();

    }

    public function payment()
    {
        return $this->belongsTo('App\Payment', 'id', 'order_id');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public static function orderMail($request)
    {
        $customer   = Customer::find($request->customerId);
        $order      = Order::where('customer_id', $request->customerId)->orderBy('id', 'DESC')->first();
        $shipping   = Shipping::where('id', $order->shipping_id)->first();
        $items      = OrderDetail::where('order_id', $order->id)->get();

        $data = [
          'customer'    =>  $customer,
          'order'       =>  $order,
          'shipping'    =>  $shipping,
          'items'       =>  $items
        ];

        Mail::send('front.mail.order-confirm', $data, function ($message) use($data) {
            $message->to($data['customer']->email);
            $message->subject('Order Confirmation Mail');
        });
    }
}
