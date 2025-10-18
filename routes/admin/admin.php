<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\GeneralSettingsController;
use App\Http\Controllers\Admin\SiteContent\SocialLinkController;
use App\Http\Controllers\Admin\SiteContent\FooterInformationController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SitemapController;
use App\Http\Controllers\Admin\OffersController;
use App\Http\Controllers\Admin\PublisherController;
use App\Http\Controllers\Admin\AdvertiserController;
use App\Http\Controllers\Admin\FinanceController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\SupportController;

Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login')->middleware('guest');
Route::post('/admin/login', [AuthController::class, 'LoginDashboard'])->name('login.post');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin', 'en.locale'], 'as' => 'admin.'], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::group(['prefix' => 'general-settings'], function () {
        Route::get('', [GeneralSettingsController::class, 'GeneralSettings'])->name('general.settings')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::get('/edit/{id}', [GeneralSettingsController::class, 'GeneralSettingsEdit'])->name('general.settings.edit')->middleware(['permission:cms-edit']);
        Route::post('/update', [GeneralSettingsController::class, 'GeneralSettingsUpdate'])->name('general.settings.update')->middleware(['permission:cms-edit', 'isDemo']);
        Route::post('/update-settings', [GeneralSettingsController::class, 'updateSettings'])->name('general.settings.update_settings')->middleware(['permission:cms-edit', 'isDemo']);
        Route::post('/update-social-login', [GeneralSettingsController::class, 'updateSocialLogin'])->name('general.settings.update_social_login')->middleware(['permission:cms-edit', 'isDemo']);
        Route::post('/update-email', [GeneralSettingsController::class, 'updateEmail'])->name('general.settings.update_email')->middleware(['permission:cms-edit', 'isDemo']);
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('', [BlogController::class, 'blog'])->name('blog')->middleware(['permission:blog-list|blog-create|blog-edit|blog-delete']);
        Route::get('/create', [BlogController::class, 'blogCreate'])->name('blog.create')->middleware(['permission:blog-create']);
        Route::post('/create', [BlogController::class, 'blogStore'])->name('blog.store')->middleware(['permission:blog-create', 'isDemo']);
        Route::get('/edit/{id}', [BlogController::class, 'blogEdit'])->name('blog.edit')->middleware(['permission:blog-edit']);
        Route::post('/update', [BlogController::class, 'blogUpdate'])->name('blog.update')->middleware(['permission:blog-edit', 'isDemo']);
        Route::get('/delete/{id}', [BlogController::class, 'blogDelete'])->name('blog.delete')->middleware(['permission:blog-delete', 'isDemo']);
    });



    Route::group(['prefix' => 'offers'], function () {
        Route::get('', [OffersController::class, 'index'])->name('offers.index');
        Route::get('/create', [OffersController::class, 'create'])->name('offers.create');
        Route::get('/edit/{id}', [OffersController::class, 'edit'])->name('offers.edit');
        Route::get('/fetch-offers', [OffersController::class, 'fetchOffers'])->name('offers.fetch-offers');
        Route::get('/offers-providers', [OffersController::class, 'offersProvider'])->name('offers.offers-providers');
    });


    Route::group(['prefix' => 'publishers'], function () {
        Route::get('', [PublisherController::class, 'index'])->name('publisher.index');
        Route::get('/create', [PublisherController::class, 'create'])->name('publisher.create');
        Route::get('/edit/{id}', [PublisherController::class, 'edit'])->name('publisher.edit');
    });


    Route::group(['prefix' => 'advertisers'], function () {
        Route::get('', [AdvertiserController::class, 'index'])->name('advertiser.index');
        Route::get('/create', [AdvertiserController::class, 'create'])->name('advertiser.create');
        Route::get('/edit/{id}', [AdvertiserController::class, 'edit'])->name('advertiser.edit');
    });






    Route::group(['prefix' => 'finances'], function () {
        Route::get('/withdrawals', [AdvertiserController::class, 'withdrawals'])->name('finances.withdrawals');
        Route::get('/deposits', [AdvertiserController::class, 'deposits'])->name('finances.deposits');
    });


    Route::group(['prefix' => 'support'], function () {
        Route::get('/live-chat', [SupportController::class, 'livechat'])->name('support.live-chat');
        Route::get('/tickets', [SupportController::class, 'tickets'])->name('support.tickets');
    });




    Route::group(['prefix' => 'reports'], function () {
        Route::get('/publisher-reports', [AdvertiserController::class, 'publisherReports'])->name('reports.publisher-reports');
        Route::get('/advertiser-reports', [AdvertiserController::class, 'advertiserReports'])->name('reports.advertiser-reports');
        Route::get('/offer-reports', [AdvertiserController::class, 'offerReports'])->name('reports.offer-reports');
        Route::get('/deposit-reports', [AdvertiserController::class, 'depositsReports'])->name('reports.deposit-reports');
        Route::get('/withdrawal-reports', [AdvertiserController::class, 'withdrawalsReports'])->name('reports.withdrawal-reports');
        Route::get('/credit-reports', [AdvertiserController::class, 'creditsReports'])->name('reports.credit-reports');
        Route::get('/chargeback-reports', [AdvertiserController::class, 'chargebackReports'])->name('reports.chargeback-reports');
    });







    Route::group(['prefix' => 'profile/'], function () {
        //Admin_Profile
        Route::get('', [AdminProfileController::class, 'adminProfile'])->name('profile');
        Route::post('update', [AdminProfileController::class, 'adminProfileUpdate'])->name('profile.update')->middleware(['isDemo']);
        Route::post('change-password', [AdminProfileController::class, 'changePassword'])->name('change_password')->middleware(['isDemo']);
    });



    Route::group(['prefix' => 'social-link'], function () {
        Route::get('', [SocialLinkController::class, 'socialLink'])->name('social.link')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::get('/edit/{id}', [SocialLinkController::class, 'socialLinkEdit'])->name('social.link.edit')->middleware(['permission:cms-edit']);
        Route::post('/update', [SocialLinkController::class, 'socialLinkUpdate'])->name('social.link.update')->middleware(['permission:cms-edit', 'isDemo']);
    });

    Route::group(['prefix' => 'footer-information'], function () {
        Route::get('/edit', [FooterInformationController::class, 'footerInformationEdit'])->name('footer.information.edit')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::post('/update', [FooterInformationController::class, 'footerInformationUpdate'])->name('footer.information.update')->middleware(['permission:cms-edit', 'isDemo']);
    });


    //Manage Menus
    Route::get('/static-menus', [MenuController::class, 'staticMenus'])->name('static_menus')->middleware(['permission:menu-list|menu-create|menu-edit|menu-delete']);
    Route::get('/edit-static-menu/{id}', [MenuController::class, 'editStaticMenu'])->name('edit_static_menu')->middleware(['permission:menu-edit']);
    Route::get('/dynamic-menus', [MenuController::class, 'dynamicMenus'])->name('dynamic_menus')->middleware(['permission:menu-list|menu-create|menu-edit|menu-delete']);
    Route::get('/create-menu', [MenuController::class, 'createMenu'])->name('create_menu')->middleware(['permission:menu-create']);
    Route::post('/store-menu', [MenuController::class, 'storeMenu'])->name('store_menu')->middleware(['permission:menu-create', 'isDemo']);
    Route::get('/edit-menu/{id}', [MenuController::class, 'editMenu'])->name('edit_menu')->middleware(['permission:menu-edit']);
    Route::post('/update-menu/{id}', [MenuController::class, 'updateMenu'])->name('update_menu')->middleware(['permission:menu-edit', 'isDemo']);
    Route::get('/delete-menu/{id}', [MenuController::class, 'deleteMenu'])->name('delete_menu')->middleware(['permission:menu-delete', 'isDemo']);
    Route::get('/submenus', [MenuController::class, 'submenus'])->name('submenus')->middleware(['permission:menu-list|menu-create|menu-edit|menu-delete']);
    Route::get('/create-submenu', [MenuController::class, 'createSubmenu'])->name('create_submenu')->middleware(['permission:menu-create']);
    Route::post('/store-submenu', [MenuController::class, 'storeSubmenu'])->name('store_submenu')->middleware(['permission:menu-create', 'isDemo']);
    Route::get('/edit-submenu/{id}', [MenuController::class, 'editSubmenu'])->name('edit_submenu')->middleware(['permission:menu-edit']);
    Route::post('/update-submenu/{id}', [MenuController::class, 'updateSubmenu'])->name('update_submenu')->middleware(['permission:menu-edit', 'isDemo']);
    Route::get('/delete-submenu/{id}', [MenuController::class, 'deleteSubmenu'])->name('delete_submenu')->middleware(['permission:menu-delete', 'isDemo']);


    //SEO Management
    Route::get('/manage-seo/{slug}', [SeoController::class, 'manageSeo'])->name('manage_seo')->middleware(['permission:cms-create|cms-edit']);
    Route::post('/update-seo/{slug}', [SeoController::class, 'updateSeo'])->name('update_seo')->middleware(['permission:cms-create|cms-edit', 'isDemo']);

    //User Settings
    Route::get('/admins', [UserController::class, 'adminList'])->name('admin_list')->middleware(['permission:user-list|user-create|user-edit|user-delete']);
    Route::get('/create-admin', [UserController::class, 'createAdmin'])->name('create_admin')->middleware(['permission:user-create']);
    Route::post('/store-admin', [UserController::class, 'storeAdmin'])->name('store_admin')->middleware(['permission:user-create', 'isDemo']);
    Route::get('/edit-admin/{id}', [UserController::class, 'editAdmin'])->name('edit_admin')->middleware(['permission:user-edit']);
    Route::post('/update-admin/{id}', [UserController::class, 'updateAdmin'])->name('update_admin')->middleware(['permission:user-edit', 'isDemo']);
    Route::get('/customers', [UserController::class, 'customerList'])->name('customer_list')->middleware(['permission:user-list|user-create|user-edit|user-delete']);
    Route::get('/customer/{status}/{user_id}', [UserController::class, 'customerStatusChange'])->name('customer_status_change')->middleware(['permission:user-list|user-create|user-edit|user-delete', 'isDemo']);
    Route::get('/admin-status/{id}', [UserController::class, 'statusChange'])->name('status_change')->middleware(['permission:user-list', 'isDemo']);

    //Role Settings
    Route::get('/roles', [RoleController::class, 'index'])->name('role_list')->middleware(['role:Super Admin']);
    Route::get('/create-role', [RoleController::class, 'createRole'])->name('create_role')->middleware(['role:Super Admin']);
    Route::post('/store-role', [RoleController::class, 'storeRole'])->name('store_role')->middleware(['role:Super Admin', 'isDemo']);
    Route::get('/edit-role/{id}', [RoleController::class, 'editRole'])->name('edit_role')->middleware(['role:Super Admin']);
    Route::post('/update-role/{id}', [RoleController::class, 'updateRole'])->name('update_role')->middleware(['role:Super Admin', 'isDemo']);
    Route::get('/delete-role/{id}', [RoleController::class, 'deleteRole'])->name('delete_role')->middleware(['role:Super Admin', 'isDemo']);

    Route::get('/sitemap-list', [SitemapController::class, 'index'])->name('sitemap_list')->middleware(['role:Super Admin']);
    Route::get('/sitemap-create', [SitemapController::class, 'create'])->name('sitemap_create')->middleware(['role:Super Admin']);
    Route::post('/sitemap-store', [SitemapController::class, 'store'])->name('sitemap_store')->middleware(['role:Super Admin', 'isDemo']);
    Route::get('/sitemap-delete', [SitemapController::class, 'delete'])->name('sitemap_delete')->middleware(['role:Super Admin', 'isDemo']);
    Route::get('/sitemap-download/{id}', [SitemapController::class, 'download'])->name('sitemap_download')->middleware(['role:Super Admin', 'isDemo']);
});
