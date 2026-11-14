<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(Request $request)
    {
        $products = Product::latest()->get();

        $selectedProduct = $products->firstWhere('slug', $request->query('product'));
        
        $orders = Order::with('product')
            ->where('user_id', $request->user()->id)
            ->latest()
            ->get();

        return view('pages.contact', [
            'products' => $products,
            'selectedProduct' => $selectedProduct,
            'orders' => $orders,
        ]);
    }

    public function submit(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $user = $request->user();

        Order::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'sender_name' => $user->name,
            'sender_email' => $user->email,
            'service' => $product->name,
            'address' => $request->address,
            'status' => 'Menunggu',
        ]);

        return redirect()
            ->route('contact')
            ->with('success', 'Pesanan layanan berhasil dikirim! Kami akan menghubungi anda melalui email!');
    }
}
