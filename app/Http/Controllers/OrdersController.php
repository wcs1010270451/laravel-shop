<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Requests\Request;
use App\Models\ProductSku;
use App\Models\UserAddress;
use App\Models\Order;
use App\Services\CartService;
use App\Services\OrderService;
use Carbon\Carbon;
use App\Exceptions\InvalidRequestException;
use App\Jobs\CloseOrder;

class OrdersController extends Controller
{
    //订单列表
    public function index(Request $request)
    {
        $orders = Order::query()
            // 使用 with 方法预加载，避免N + 1问题
            ->with(['items.product','items.productSku'])
            ->where('user_id',$request->user()->id)
            ->orderBy('created_at','desc')
            ->paginate();
        return view('orders.index',['orders' => $orders]);
    }

    //订单详情
    public function show(Order $order, Request $request)
    {
        $this->authorize('own',$order);
        return view('orders.show',['order' => $order->load(['items.productSku','items.product'])]);
    }
    //创建订单
    public function store(OrderRequest $request, OrderService $orderService)
    {
        $user  = $request->user();
        // 开启一个数据库事务
        $address = UserAddress::find($request->input(('address_id')));

        return $orderService->store($user,$address,$request->input('remark'),$request->input('items'));
    }



}
