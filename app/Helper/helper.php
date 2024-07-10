<?php

use App\Models\Logo;
use App\Models\DeliveryCharge;

function getCategoryData() {
    return App\Models\Category::all();
}

function getCharge() {
    return DeliveryCharge::first();
}

function getLogo() {
    return Logo::first();
}