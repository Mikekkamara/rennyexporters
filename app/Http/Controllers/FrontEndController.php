<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class FrontendController extends Controller
{
    //

    public function index(){
        $meta_title ="Home|Renny Exporters";
        $meta_site_title ="Renny Exporters";
        $meta_description ="Kenyan exporters of  Fresh Fruits, Herbs & Vegetables";
        $meta_keyword ="kenya basil exporters,basil in kenya,fresh basil,where is basilgrown in kenya?fresh kenyan chives,chives exporters,mangoes in kenya,mango varieties in kenya,apple mangoes in kenya,hass avocado in kenya,what are the varieties of avocado in kenya?,kenyan rosemary,fresh mint from kenya,marjoram exporters in kenya,kenyan passion fruit,thyme health benefits,is there thyme in kenya?,Renny exporters";
        $meta_url ="http://www.rennyexporters.co.ke";
        return view ('export.index',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,meta_author'));
    }

    public function products(){
        $meta_title ="Products|Renny Exporters";
        $meta_site_title ="Renny Exporters";
        $meta_description ="Kenyan exporters of  Fresh Fruits, Herbs & Vegetables";
        $meta_keyword ="kenya dill exporters,dill in kenya,fresh dill,where is dill grown in kenya?fresh kenyan sage,sage exporters,tarragon in kenya,beans varieties in kenya,snap in kenya,snow in kenya,what are the varieties of snap in kenya?,kenyan oregano,fresh mint from kenya,tarragon exporters in kenya,Renny exporters,oregano health benefits,is there snow in kenya?";
        $meta_url ="http://www.rennyexporters.co.ke/fresh-kenya-products-for-export";
        return view ('export.products',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,meta_author'));
    }
    public function contacts(){
        $meta_title ="Contacts|Renny Exporters";
        $meta_site_title ="Renny Exporters";
        $meta_description ="Contact Us at Renny expporters,Kenyan exporters of  Fresh Fruits, Herbs & Vegetables";
        $meta_keyword ="Fruits,herbs,spices,brocolli,Kenya,exports,Vegetables";
        $meta_url ="http://www.rennyexporters.co.ke/contacts";
        return view ('export.contact',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,meta_author'));
    }
    public function about(){
        $meta_title ="About|Renny Exporters";
        $meta_site_title ="Renny Exporters";
        $meta_description ="About Renny Exporters,Kenyan exporters of  Fresh Fruits, Herbs & Vegetables";
        $meta_keyword ="About renny exporters,fresh fruits,fresh kenyan herbs,";
        $meta_url ="http://www.rennyexporters.co.ke/about";
        return view ('export.about',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,meta_author'));
    }
    public function order(){
        $meta_title ="Order Online|Renny Exporters";
        $meta_site_title ="Renny Exporters";
        $meta_description ="Order online our products,Kenyan exporters of  Fresh Fruits, Herbs & Vegetables";
        $meta_keyword ="Online fruits,online order of herbs in kenya,order fresh vegetables online";
        $meta_url ="http://www.rennyexporters.co.ke/order/online";
        return view ('export.order',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title,meta_author'));
    }






    public function contact_form(Request $request){
        try {
            $name = $request->input('name');
                $email = $request->input('email');
                $subject = $request->input('subject');
                $client_message = $request->input('message');

                $data = array(
                    'client_email' =>$email,
                    'recipient_email' =>'sales@rennyexporters.co.ke',
                    'client_name' => $name,
                    'subject' => $subject,
                    'client_message'=>$client_message

                );

                Mail::send('export.contact_email', $data, function($message) use ($data) {
                    $message->to($data['recipient_email'], $data['client_name'])
                    ->subject($data['subject']);
                });
                return redirect()->back();


        } catch (\Throwable $th) {
            return redirect()->back();
        }


            }
            public function order_form(Request $request){
        try {
            $name = $request->input('name');
            $email = $request->input('email');
            $product = $request->input('product');
            $quantity = $request->input('quantity');
            $additional_info = $request->input('additional_info');

            $data = array(
                'client_email' =>$email,
                'recipient_email' =>'sales@rennyexporters.co.ke',
                'client_name' => $name,
                'product' => $product,
                'quantity'=>$quantity,
                'additional_info'=>$additional_info

            );

            Mail::send('export.order_form', $data, function($message) use ($data) {
                $message->to($data['recipient_email'], $data['client_name'])
                ->subject($data['product']);
            });
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back();
        }


            }
            public function newsletter(Request $request){

                try {
                    $email = $request->input('email');
                    $data = array(
                        'client_email' =>$email,
                        'recipient_email' =>'sales@rennyexporters.co.ke',


                    );

                    Mail::send('export.newsletter', $data, function($message) use ($data) {
                        $message->to($data['recipient_email'])
                        ->subject('Newsletter  Request');
                        return redirect()->back();
                    });
                    return redirect()->back();

                } catch (\Throwable $th) {
                    return redirect()->back();
                }


            }
}
