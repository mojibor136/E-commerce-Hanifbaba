<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetails;
use App\Models\Review;

class ReviewController extends Controller {
    public function Review( $productId, $orderId ) {
        $orderDetails = OrderDetails::where( 'product_id', $productId )
        ->where( 'order_id', $orderId )
        ->first();

        return view( 'admin.review', compact( 'orderDetails' ) );
    }

    public function CreateReview( Request $request ) {
        // Validation
        $request->validate( [
            'productId' => 'required',
            'orderId' => 'required',
            'title' => 'required',
            'rating' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ] );

        // Check if the review already exists
        $existingReview = Review::where( 'productId', $request->productId )
        ->where( 'orderId', $request->orderId )
        ->first();
        // ->exists() থেকে ->first() এ পরিবর্তন করেছি

        // If the review exists, show the error view
        if ( $existingReview ) {
            return view( 'admin.reviewerror', [ 'error' => 'এই অর্ডার এবং প্রোডাক্টের জন্য একটি রিভিউ ইতিমধ্যেই রয়েছে।' ] );
        }

        // Handle the image upload
        $imageName = '';
        if ( $image = $request->file( 'image' ) ) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'ReviewImg' ), $imageName );
        } else {
            return response()->json( [ 'error' => 'ছবি ফাইল পাওয়া যায়নি বা অবৈধ।' ], 422 );
        }

        // Try to create the review
        Review::create( [
            'orderId' => $request->orderId,
            'productId' => $request->productId,
            'title' => $request->title,
            'rating' => $request->rating,
            'image' => $imageName,
        ] );

        return view( 'admin.reviewsuccess' );
    }

}
