<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Banner;
use App\Models\Logo;
use App\Models\ShopAddress;
use App\Models\DeliveryCharge;

class SettingsController extends Controller {
    public function Setting() {
        return view( 'admin.setting.setting' );
    }

    public function BannerChange() {
        $banners = Banner::all();
        return view( 'admin.setting.banner', [ 'banners' => $banners ] );
    }

    public function BannerUpload( Request $request ) {
        $request->validate( [
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ] );

        $bannerName = '';

        if ( $banner = $request->file( 'banner' ) ) {
            $bannerName = time() . '-' . uniqid() . '.' . $banner->getClientOriginalExtension();
            $banner->move( public_path( 'BannerImg' ), $bannerName );
        }

        Banner::create( [
            'banner' => $bannerName,
        ] );

        $message = 'Banner uploaded successfully!';

        return redirect()->back()->with( 'success', $message );
    }

    public function BannerDelete( $id ) {
        Banner::findOrFail( $id )->delete();
        return back()->with( 'success', 'Banner deleted successfully!' );
    }

    public function Charge() {
        $charge = DeliveryCharge::first();
        return view( 'admin.setting.charge', compact( 'charge' ) );
    }

    public function storeCharge( Request $request ) {
        $validatedData = $request->validate( [
            'charge' => 'required|numeric',
            'id' => 'nullable|exists:delivery_charges,id',
        ] );

        $chargeId = $request->id;

        if ( $chargeId ) {
            $deliveryCharge = DeliveryCharge::findOrFail( $chargeId );
            $deliveryCharge->update( [
                'charge' => $request->charge,
            ] );
        } else {
            DeliveryCharge::create( [
                'charge' => $request->charge,
            ] );
        }

        return back()->with( 'success', 'Delivery charge saved successfully.' );
    }

    public function LogoChange() {
        $logos = Logo::all();
        return view( 'admin.setting.logo', [ 'logos' => $logos ] );
    }

    public function LogoUpload( Request $request ) {
        $request->validate( [
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ] );

        $logoName = '';
        if ( $logo = $request->file( 'logo' ) ) {
            $logoName = time() . '-' . uniqid() . '.' . $logo->getClientOriginalExtension();
            $logo->move( public_path( 'LogoImg' ), $logoName );
        }

        $logoId = $request->logoId;

        $existingLogo = Logo::find( $logoId );

        if ( $existingLogo ) {
            $existingLogo->logo = $logoName;
            $existingLogo->save();
            $message = 'Logo updated successfully!';
        } else {
            Logo::create( [
                'logo' => $logoName,
            ] );
            $message = 'Logo uploaded successfully!';
        }
        return redirect()->back()->with( 'success', $message );
    }

    public function PasswordChange() {
        $admin = Admin::first();
        return view( 'admin.setting.passwordchange', compact( 'admin' ) );
    }

    public function PasswordUpload( Request $request ) {
        $request->validate(
            [
                'old' => 'required',
                'new' => 'required',
                'id' => 'required|exists:admins,id',
            ],
            [
                'old.required' => 'Please provide your current password.',
                'new.required' => 'Please provide a new password.',
            ]
        );

        $newPassword = $request->new;
        $oldPassword = $request->old;
        $id = $request->id;

        $admin = Admin::find( $id );

        if ( Hash::check( $oldPassword, $admin->password ) ) {
            $admin->password = Hash::make( $newPassword );
            $admin->save();

            return redirect()->back()->with( 'success', 'Password updated successfully.' );
        } else {
            return redirect()->back()->withErrors( [ 'old' => 'The provided old password does not match our records.' ] );
        }
    }

    public function AccountSettings() {
        $admin = Admin::first();
        return view( 'admin.setting.accountsettings', compact( 'admin' ) );
    }

    public function AdminUpdate( Request $request ) {
        $adminId = $request->adminId;
        $admin = Admin::findOrFail( $adminId );

        if ( $request->hasFile( 'image' ) ) {
            $image = $request->file( 'image' );
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move( public_path( 'Admins' ), $imageName );

            if ( $admin->image ) {
                $oldImagePath = public_path( 'Admins/' . $admin->image );
                if ( file_exists( $oldImagePath ) ) {
                    unlink( $oldImagePath );
                }
            }

            $admin->image = $imageName;
        }

        $admin->update( [
            'name' => $request->name,
            'email' => $request->email,
            'image' => $admin->image,
        ] );

        return back()->with( 'success', 'Admin updated successfully!' );
    }

    public function ShopAddress() {
        return view( 'admin.setting.shopaddress' );
    }

    public function StoreAddress( Request $request ) {
        $shop = ShopAddress::first();

        if ( $shop ) {
            $shop->update( [
                'address' => $request->address,
                'number' => $request->number,
                'email' => $request->email,
            ] );
            return back()->with( 'success', 'Update New Shop Address Successfully' );
        } else {
            ShopAddress::create( [
                'address' => $request->address,
                'number' => $request->number,
                'email' => $request->email,
            ] );
            return back()->with( 'success', 'Add New Shop Address Successfully' );
        }
    }
}
