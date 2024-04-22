<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Problem;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AppController extends Controller
{

    public function main(){
        $users = User::all();
        $isAdminExist = User::where('type', 'admin')->first();
        if(  $isAdminExist == FALSE ){
            $user = User::create([
                'type' => 'admin',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'collageCode' => 1,
                'password' => Hash::make('00000000'),
            ]);
        }

        return view('ld');

    }

    public function userHome(){
        $tickets = Ticket::all()->where('userId' ,Auth::user()->id );
        return view('userHome', compact('tickets'));
    }

    public function adminHome(){
        return view('adminHome');
    }

    public function createTicket(){



        $isProcessorExist = Problem::where('cat','processor')->first();
        if(  $isProcessorExist == FALSE ){
            Problem::create([
                'cat' => 'processor',
                'desc' => "Unlock blazing-fast performance with our cutting-edge processor. Designed to tackle the most demanding tasks with ease, our processor boasts multiple cores and lightning-fast clock speeds, ensuring seamless multitasking and smooth computing experiences. With its advanced architecture and efficient power management, you'll breeze through tasks, from gaming to content creation, without skipping a beat. Upgrade your system today and unleash the full potential of your computing experience with our top-of-the-line processor.",
                'price' => "$200",
            ]);
        }


        $isRamExist = Problem::where('cat', 'ram')->first();
        if(  $isRamExist == FALSE ){
            Problem::create([
                'cat' => 'ram',
                'desc' => "Experience lightning-fast performance and unparalleled multitasking capabilities with our high-speed RAM. Engineered for maximum efficiency, our RAM modules deliver blazing-fast data access, ensuring smooth operation even under the most demanding workloads. Whether you're gaming, streaming, or tackling intensive tasks, our RAM will elevate your system's performance to new heights. Upgrade your computer today and unleash its full potential with our premium-quality RAM.",
                'price' => "$70",
            ]);
        }

        $isHardExist = Problem::where('cat', 'harDisck')->first();
        if( $isHardExist == FALSE ){
            Problem::create([
                'cat' => 'harDisck',
                'desc' => "Elevate your storage experience with our high-capacity hard disk drive (HDD). With ample space to store all your important files, documents, photos, and videos, our HDD ensures you never have to worry about running out of storage again. Built for reliability and longevity, our HDD offers fast data transfer speeds and seamless performance, making it perfect for both personal and professional use. Upgrade your storage solution today and enjoy peace of mind knowing your data is safe and easily accessible with our top-of-the-line hard disk drive.",

                'price' => "100",
            ]);
        }

        $isGraphicsCardExist = Problem::where('cat', 'graphicsCard')->first();
        if(  $isGraphicsCardExist == FALSE ){
            Problem::create([
                'cat' => 'graphicsCard',
                'desc' => "Experience immersive gaming and breathtaking visuals with our cutting-edge graphics card. Powered by the latest technology, our GPU delivers stunning graphics and smooth frame rates, bringing your favorite games and multimedia content to life like never before. With advanced features and robust performance, our graphics card is perfect for gamers, content creators, and enthusiasts alike. Elevate your computing experience and unlock the full potential of your system with our premium-quality graphics card.",
                'price' => "$400",
            ]);
        }

        $isCoolerExist = Problem::where('cat', 'cooler')->first();
        if(  $isCoolerExist == FALSE ){
            Problem::create([
                'cat' => 'cooler',
                'desc' => "Maximize your CPU's potential and keep temperatures in check with our high-performance processor cooler. Engineered for efficiency and reliability, our cooler effectively dissipates heat to ensure optimal CPU performance even under heavy loads. With its sleek design and quiet operation, it seamlessly integrates into any system, providing both style and functionality. Upgrade your cooling solution today and unleash the full power of your CPU with our top-of-the-line processor cooler.",
                'price' => '$40',
            ]);
        }

        $isMonitorExist = Problem::where('cat', 'monitor')->first();
        if(  $isMonitorExist == FALSE ){
            Problem::create([
                'cat' => 'monitor',
                'desc' => "Immerse yourself in stunning visuals with our high-definition monitor. Featuring a vibrant display and crisp resolution, it brings your content to life with incredible clarity and detail. Whether you're working on spreadsheets, streaming your favorite shows, or gaming with friends, our monitor delivers an unparalleled viewing experience. Upgrade your setup and elevate your entertainment with our top-of-the-line monitor.",
                'price' => "$150",
            ]);
        }

        $isCaseExist = Problem::where('cat', 'case')->first();
        if(  $isCaseExist == FALSE ){
            Problem::create([
                'cat' => 'case',
                'desc' => "Elevate your PC build with our sleek and functional computer case. Designed for both style and performance, our case offers ample space for all your components while providing optimal airflow for efficient cooling. With its modern aesthetics and customizable features, it's the perfect canvas to showcase your unique style and build. Upgrade your setup and protect your components with our premium-quality computer case.",
                'price' => "$70",
            ]);
        }

        $isMouseExist = Problem::where('cat', 'mouse')->first();
        if(  $isMouseExist == FALSE ){
            Problem::create([
                'cat' => 'mouse',
                'desc' => "Elevate your computing experience with our precision-engineered mouse. Designed for comfort and accuracy, it glides effortlessly across any surface, delivering smooth and responsive performance. With customizable buttons and ergonomic design, it's perfect for both work and play, providing ultimate control and comfort for hours of use. Upgrade your setup and unleash your full potential with our top-of-the-line mouse.",
                'price' => "$20",
            ]);
        }

        $isKeyboardExist = Problem::where('cat', 'keyboard')->first();
        if(  $isKeyboardExist == FALSE ){
            Problem::create([
                'cat' => 'keyboard',
                'desc' => "Enhance your typing experience with our premium keyboard. Engineered for comfort and precision, each keystroke is responsive and satisfying, whether you're typing up documents or dominating in your favorite game. With customizable RGB lighting and programmable keys, you can personalize your setup to match your style and workflow. Upgrade your typing game and unlock a new level of productivity with our top-of-the-line keyboard.",

                'price' => "$30",
            ]);
        }


        return view('bookTicket');
    }

    public function storeTicket(){
        $data = request()->all();
        $cat = request()->cat;
        $desc = request()->desc;
        $userId = Auth::user()->id;
        $price = Problem::all()->where('cat', $cat)->pluck('price');

        Ticket::create([
            'cat' => $cat,
            'desc' => $desc,
            'price' => $price,
            'userId' => $userId,
        ]);



        return to_route('userHome');


    }

    public function showTicket($id){
        $data = Ticket::find($id);
        $price = $data->pluck('price');
        return view( 'showTicket' , compact('data', 'price'));
    }

    public function qa(){
        return view('qa');
    }
}
