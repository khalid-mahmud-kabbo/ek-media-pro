<?php

use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\GeneralSettings;
use App\Models\Admin\SiteContent\FooterInformation;
use App\Models\Admin\SiteContent\Homepage;
use App\Models\Admin\SiteContent\SocialLink;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Setting;
use App\Models\Menu;

if (!function_exists('fileUpload')) {
    function fileUpload($img, $path, $user_file_name = null, $width = null, $height = null, $defaultFileName = null)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists($path . $user_file_name)) {
            unlink($path . $user_file_name);
        }
        // saving image in target path
        $imgName = $defaultFileName ? $defaultFileName . '.' . $img->getClientOriginalExtension() : uniqid() . time() . '.' . $img->getClientOriginalExtension();
        $imgPath = public_path($path . $imgName);
        // making image
        $makeImg = Image::make($img)->orientate();
        if ($width != null && $height != null && is_int($width) && is_int($height)) {
            $makeImg->fit($width, $height);
        }
        if ($makeImg->save($imgPath)) {
            return $imgName;
        }
        return false;
    }
}

function allsetting($array = null)
{
    if (!isset($array[0])) {
        $allsettings = Setting::get();
        if ($allsettings) {
            $output = [];
            foreach ($allsettings as $setting) {
                $output[$setting->slug] = $setting->value;
            }
            return $output;
        }
        return false;
    } elseif (is_array($array)) {
        $allsettings = Setting::whereIn('slug', $array)->get();
        if ($allsettings) {
            $output = [];
            foreach ($allsettings as $setting) {
                $output[$setting->slug] = $setting->value;
            }
            return $output;
        }
        return false;
    } else {
        $allsettings = Setting::where(['slug' => $array])->first();
        if ($allsettings) {
            $output = $allsettings->value;
            return $output;
        }
        return false;
    }
}



if (!function_exists('template_settings')) {
    function template_settings()
    {
        return 'uploaded_files/template_settings/';
    }
}
if (!function_exists('AdminProfilePicture')) {
    function AdminProfilePicture()
    {
        return 'uploaded_files/admin_profile/';
    }
}


if (!function_exists('GeneralSettingsImage')) {
    function GeneralSettingsImage()
    {
        return 'uploaded_files/general_settings/';
    }
}
if (!function_exists('GeneralSettings')) {
    function GeneralSettings()
    {
        return GeneralSettings::first();
    }
}


if (!function_exists('BlogImage')) {
    function BlogImage()
    {
        return 'uploaded_files/blog/';
    }
}
if (!function_exists('Category')) {
    function Category()
    {
        return Category::where('en_Description', null)->orWhere('Category_Icon', null)->get();
    }
}
if (!function_exists('Category_Des_Icon')) {
    function Category_Des_Icon()
    {
        return Category::where('en_Description', '!=', null)->orWhere('Category_Icon', '!=', null)->get();
    }
}
if (!function_exists('BrandImage')) {
    function BrandImage()
    {
        return 'uploaded_files/brand/';
    }
}
if (!function_exists('Brnad')) {
    function Brnad()
    {
        return Brand::get();
    }
}

if (!function_exists('siteContentHomePage')) {
    function siteContentHomePage($location)
    {
        return Homepage::where('Location', $location)->first();
    }
}

if (!function_exists('aboutUsPage')) {
    function aboutUsPage()
    {
        return 'uploaded_files/about_us_page/';
    }
}

if (!function_exists('getSocialLink')) {
    function getSocialLink()
    {
        return SocialLink::first();
    }
}
if (!function_exists('footerInformation')) {
    function footerInformation()
    {
        return FooterInformation::first();
    }
}

if (!function_exists('footerImage')) {
    function footerImage()
    {
        return 'uploaded_files/footer/';
    }
}



if (!function_exists('staticMenuName')) {
    function staticMenuName($slug)
    {
        $menu = Menu::select('en_name', 'fr_name')->where('slug', $slug)->first();
        if (app()->getLocale() == 'en') {
            return $menu->en_name;
        }
        return $menu->fr_name;
    }
}
