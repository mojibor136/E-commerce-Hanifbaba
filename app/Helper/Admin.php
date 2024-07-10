<?php
use App\Models\Admin;

function getAdmin() {
    return Admin::first();
}