<?php

use App\Models\Logo;
use App\Models\DeliveryCharge;
use App\Models\Cart;
use App\Models\Banner;

function getCategoryData() {
    return App\Models\Category::all();
}

function getCharge() {
    return DeliveryCharge::first();
}

function getLogo() {
    return Logo::first();
}

function getCartCount() {
    $userId = Auth::id();
    return Cart::where( 'user_id', $userId )->count();
}

function getBanner() {
    return Banner::all();
}