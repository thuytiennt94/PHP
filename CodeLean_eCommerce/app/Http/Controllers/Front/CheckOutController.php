<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Utilities\VNPay;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts','total','subtotal'));
    }

    public function addOrder(Request $request)
    {
        //1. thêm đơn hàng
        $order = Order::create($request->all());

        //2. thêm chi tiết đơn hàng
        $carts = Cart::content();

        foreach ($carts as $cart){
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->price * $cart->qty,
            ];

            OrderDetail::create($data);

        }
        if ($request->payment_later == 'pay_later'){

            //3.Gửi email
            $total = Cart::total();
            $subtotal = Cart::subtotal();

            $this->sendEmail($order, $total, $subtotal);

            //3.xóa giỏ hàng
            Cart::destroy();

            //4.trả về kết quả
            return redirect('checkout/result')
                ->with('notification', 'Success! You will pay on delivery! Please check your mail.');
        }

        if ($request->payment_later == 'online_payment'){
            //1.Lấy URL thanh toán VNpay
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id, //id đơn hàng
                'vnp_OrderInfo' => 'Mô tả đơn hàng ở đây ... ',
                'vnp_Amount' => Cart::total('0', '', '') * 23075, //nhân với tỉ giá chuyển sang tiền việt
            ]);
            //2. Chuyển hướng tới URL lấy được
            return redirect()->to($data_url);

        }

       /* else{
            return 'online payment method is not supported';
        }*/

    }

    public function vnPayCheck(Request $request){
        //1.Lấy data từ url (do vnpay gửi qua $vnp_Returnurl)
        $vnp_ResponseCode = $request->get('vnp_ResponseCode');
        $vnp_TxnRef = $request->get('vnp_TxnRef');
        $vnp_Amount = $request->get('vnp_Amount');

        //2. kiểm tra kết qỉa giao dịch trả từ vnpay
        if ($vnp_ResponseCode != null){
            //nếu thành công

            if ($vnp_ResponseCode == 00){
                //2.gửi email
                $total = Cart::total();
                $subtotal = Cart::subtotal();
                $order = Order::create($request->all());
                $this->sendEmail($total,$subtotal,$order);

                //3. xóa giỏ hàng
                Cart::destroy($order);

                //4.thông báo kết qủa
                return redirect('checkout/result')
                    ->with('notification', 'Success! You will pay on delivery! Please check your mail.');
            }else {
                //nếu ko thàng công
                //xóa đơn hàng đã thêm vào database,
                Order::find($vnp_TxnRef)->delete();
                // và trả về thông tin lỗi
                return redirect('checkout/result')
                    ->with('notification', 'ERROR : Payment gailed or canceled');
            }
        }
    }

    public function result(){
        $notification = session('notification');
        return view('front.checkout.result', compact('notification'));
    }

    public function sendEmail($order, $total, $subtotal){
        $email_to = $order->email;

        Mail::send('front.checkout.email', compact('order', 'total', 'subtotal'),
        function ($message) use ($email_to){
            $message->from('codelean@gmail.com', 'CodeLean eCommerce');
            $message->to($email_to, $email_to);
            $message->subject('order notification');
        });
    }

}
