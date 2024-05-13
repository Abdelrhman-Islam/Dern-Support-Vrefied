<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Product;

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
                'password' => Hash::make('00000000'),
            ]);
        }

        $isCPUExist = Product::where('cat','CPU (Central Processing Unit)')->first();
        if(  $isCPUExist == FALSE ){
            Product::create([
                'cat' => 'CPU (Central Processing Unit)',
                'desc' => "The CPU is the brain of the computer, responsible for executing instructions and performing calculations. It determines the overall performance of the system and influences tasks such as gaming, video editing, and multitasking. Popular options include Intel Core i5/i7/i9 series or AMD Ryzen series CPUs, offering varying levels of performance and features.",
                'price' => "250$",
            ]);
        }


        $isGPUExist = Product::where('cat', 'GPU (Graphics Processing Unit)')->first();
        if(  $isGPUExist == FALSE ){
            Product::create([
                'cat' => 'GPU (Graphics Processing Unit)',
                'desc' => "The GPU, also known as a graphics card or video card, handles rendering images and videos on the computer monitor. It is essential for gaming, graphic design, video editing, and other multimedia tasks. Options include NVIDIA GeForce RTX or AMD Radeon RX series GPUs, offering different levels of performance and features such as ray tracing and VR support.",
                'price' => "500$",
            ]);
        }

        $isRAMExist = Product::where('cat', 'RAM (Random Access Memory)')->first();
        if( $isRAMExist == FALSE ){
            Product::create([
                'cat' => 'RAM (Random Access Memory)',
                'desc' => "RAM is temporary storage that the CPU uses to store data and program instructions actively being used. More RAM allows for smoother multitasking and better performance in memory-intensive applications. Common types include DDR4 memory modules, available in various capacities (e.g., 8GB, 16GB, 32GB) and speeds (e.g., 2400MHz, 3200MHz).",

                'price' => '100$',
            ]);
        }

        $isSSDExist = Product::where('cat', 'SSD (Solid State Drive)')->first();
        if(  $isSSDExist == FALSE ){
            Product::create([
                'cat' => 'SSD (Solid State Drive)',
                'desc' => " SSDs are storage devices that use flash memory to store data, offering faster read/write speeds compared to traditional mechanical hard drives (HDDs). They significantly improve system boot times, application loading times, and overall system responsiveness. Options include SATA SSDs for budget-friendly upgrades or NVMe SSDs for even faster performance, available in capacities ranging from 250GB to 2TB or more.",
                'price' => "300$",
            ]);
        }

        $iMotherboardExist = Product::where('cat', 'Motherboard')->first();
        if(  $iMotherboardExist == FALSE ){
            Product::create([
                'cat' => 'Motherboard',
                'desc' => "The motherboard is the main circuit board that connects and integrates various hardware components in the computer system, such as the CPU, RAM, GPU, storage drives, and peripherals. It determines the compatibility and expandability of the system, supporting features like overclocking, multiple GPU configurations, and connectivity options. Popular choices include ATX or microATX form factor motherboards from brands like ASUS, MSI, Gigabyte, and ASRock.",
                'price' => '200$',
            ]);
        }

        return view('ld');
    }

    public function userHome(){
        $tickets = Ticket::all()->where('userId' ,Auth::user()->id );
        return view('user.index', compact('tickets'));
    }

    public function createTicket(){

        return view('ticket.create');
    }

    public function storeTicket(){
        $data = request()->all();
        $cat = request()->cat;
        $desc = request()->desc;
        $userId = Auth::user()->id;
        $price = Product::all()->where('cat', $cat)->pluck('price');

        Ticket::create([
            'cat' => $cat,
            'desc' => $desc,
            'price' => $price,
            'userId' => $userId,
        ]);

        return to_route('user.index');

    }

    public function showTicket($id){
        $data = Ticket::find($id);
        $price = $data->pluck('price');
        return view( 'ticket.show' , compact('data', 'price'));
    }

    public function qa(){
        return view('qa');
    }
}
