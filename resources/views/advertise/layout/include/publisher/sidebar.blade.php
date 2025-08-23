
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <meta content="en_US" property="og:locale"/>
  <meta content="article" property="og:type"/>
  <meta content="Dashboard" property="og:title"/>
  <meta content="UPWALL" property="og:site_name"/>
  <link href="http://upwall.net/uploads/1737697239.png" rel="shortcut icon"/>
  <link rel="stylesheet" href="../asset/css/prism-okaidia.min.css">
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" rel="stylesheet"/>
  <link href="../assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
  <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://telegram.org/js/telegram-web-app.js"></script>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const tg = window.Telegram.WebApp;
            tg.expand();
            tg.MainButton.show();
        });
    </script>
      <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FST6RB2LBT"></script>

  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FST6RB2LBT');
  </script>
  <script>
   // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
            if (window.top != window.self) {
                window.top.location.replace(window.self.location.href);
            }
  </script>
  <style>
p {
  text-overflow: ellipsis;
}
.overflow-ellipsis p{
  width: 140px;
  padding: 2px 5px;
  white-space: nowrap;
  overflow: hidden;
}
  </style>
 </head>
 <body class="app-default" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-toolbar-enabled="true" id="kt_app_body">

  <script>
   var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}
  </script>
  <div class="d-flex flex-column flex-root app-root" id="kt_app_root">

    <div class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-animation="false" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '300px'}" id="kt_app_header">
     <div class="app-container container-fluid d-flex align-items-stretch flex-stack" id="kt_app_header_container">
      <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
       <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary w-35px h-35px me-1" id="kt_app_sidebar_mobile_toggle">
        <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
         <span class="path1">
         </span>
         <span class="path2">
         </span>
        </i>
       </div>
       <a href="">
        <img alt="Logo" class="theme-light-show" src="http://upwall.net/uploads/1737585163.png" style="width: 140px"/>
        <img alt="Logo" class="theme-dark-show" src="http://upwall.net/uploads/1737585368.png" style="width: 140px"/>
       </a>
      </div>
      <div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">

       </div>
       <div class="app-navbar-item me-2 ms-1 ms-md-2" id="kt_header_user_menu_toggle" >
        <div style="margin-top: 10px;" class="cursor-pointer symbol symbol-circle symbol-35px ms-3" >
          <span class="badge badge-light-success fw-bold border border-success" style="padding: 7px; font-size: 15px; border-radius: 4px; margin-top: 10px;" id="dashboardBalance"><img src="../asset/img/loading-gif.gif" style="width:20px">
           </span>
        </div>
        <div class="cursor-pointer symbol symbol-circle symbol-35px ms-3" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-trigger="{default: 'click', lg: 'hover'}">
        <img alt="user" src="http://upwall.net/uploads/../monetizer/asset/img/avatar-1-256.png"/>
        </div>
        <div style="margin-top: -50px;" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
         <div class="menu-item px-3">
          <div class="menu-content d-flex align-items-center px-3">
           <div class="symbol symbol-50px me-5">
            <img alt="Logo" src="http://upwall.net/uploads/../monetizer/asset/img/avatar-1-256.png"/>
           </div>
           <div class="d-flex flex-column">
            <div class="fw-bold d-flex align-items-center fs-5">
             ekprofithub              <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Verified</span>            </div>
            admin@ekprofithub.com             <br>
             PUB ID: 6106           </div>
          </div>
         </div>
         <div class="separator my-2">
         </div>
         <div class="menu-item px-5">
          <a class="menu-link px-5" href="../profile">
           Account Settings
          </a>
         </div>
         <div class="menu-item px-5">
          <a class="menu-link px-5" href="../payments">
           <span class="menu-text">
            Payments
           </span>
          </a>
         </div>
         <div class="menu-item px-5">
          <a class="menu-link px-5">
           <span class="menu-title position-relative">
            2FA Verification
            <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                         <div class="form-check form-check-solid form-switch form-check-custom fv-row" onclick="enableTwo()">
                <input class="form-check-input w-45px h-25px" type="checkbox" checked />
                <label class="form-check-label" for="allowmarketing"></label>
            </div>
                        </span>
           </span>
          </a>
         </div>
         <div class="separator my-2">
         </div>
         <div class="menu-item px-5" data-kt-menu-offset="-15px, 0" data-kt-menu-placement="left-start" data-kt-menu-trigger="{default: 'click', lg: 'hover'}">
          <a class="menu-link px-5" href="#">
           <span class="menu-title position-relative">
            Mode
            <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
             <i class="ki-duotone ki-night-day theme-light-show fs-2">
              <span class="path1">
              </span>
              <span class="path2">
              </span>
              <span class="path3">
              </span>
              <span class="path4">
              </span>
              <span class="path5">
              </span>
              <span class="path6">
              </span>
              <span class="path7">
              </span>
              <span class="path8">
              </span>
              <span class="path9">
              </span>
              <span class="path10">
              </span>
             </i>
             <i class="ki-duotone ki-moon theme-dark-show fs-2">
              <span class="path1">
              </span>
              <span class="path2">
              </span>
             </i>
            </span>
           </span>
          </a>
          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-element="theme-mode-menu" data-kt-menu="true">
           <div class="menu-item px-3 my-0">
            <a class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light" href="#">
             <span class="menu-icon" data-kt-element="icon">
              <i class="ki-duotone ki-night-day fs-2">
               <span class="path1">
               </span>
               <span class="path2">
               </span>
               <span class="path3">
               </span>
               <span class="path4">
               </span>
               <span class="path5">
               </span>
               <span class="path6">
               </span>
               <span class="path7">
               </span>
               <span class="path8">
               </span>
               <span class="path9">
               </span>
               <span class="path10">
               </span>
              </i>
             </span>
             <span class="menu-title">
              Light
             </span>
            </a>
           </div>
           <div class="menu-item px-3 my-0">
            <a class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark" href="#">
             <span class="menu-icon" data-kt-element="icon">
              <i class="ki-duotone ki-moon fs-2">
               <span class="path1">
               </span>
               <span class="path2">
               </span>
              </i>
             </span>
             <span class="menu-title">
              Dark
             </span>
            </a>
           </div>
           <div class="menu-item px-3 my-0">
            <a class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system" href="#">
             <span class="menu-icon" data-kt-element="icon">
              <i class="ki-duotone ki-screen fs-2">
               <span class="path1">
               </span>
               <span class="path2">
               </span>
               <span class="path3">
               </span>
               <span class="path4">
               </span>
              </i>
             </span>
             <span class="menu-title">
              System
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item px-5" data-kt-menu-offset="-15px, 0" data-kt-menu-placement="left-start" data-kt-menu-trigger="{default: 'click', lg: 'hover'}">
          <a class="menu-link px-5" href="#">
           <span class="menu-title position-relative">
            Language
            <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
             English
             <img alt="" class="w-15px h-15px rounded-1 ms-2" src="../assets/media/flags/united-states.svg"/>
            </span>
           </span>
          </a>
          <div class="menu-sub menu-sub-dropdown w-175px py-4">
           <div class="menu-item px-3">
            <a class="menu-link d-flex px-5 active" href="">
             <span class="symbol symbol-20px me-4">
              <img alt="" class="rounded-1" src="../assets/media/flags/united-states.svg"/>
             </span>
             English
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item px-5">
          <a class="menu-link px-5" href="../logout.php">
           Sign Out
          </a>
         </div>
        </div>
       </div>
      </div>
     </div>
<script>
    function enableTwo() {
        $.ajax({
            type: 'POST',
            url: '../profile/ajax.php',
            data: { two_step: 1, },
            success:function(ajaxData){
                if(ajaxData == 1){
                    toastr.success('Two-factor has been Enabled', 'Success!', { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                } else {
                    toastr.success('Two-factor has been Disabled', 'Success!', { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                }
            }
        });
    }
</script>
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
     <div class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-direction="start" data-kt-drawer-name="app-sidebar" data-kt-drawer-overlay="true" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle" data-kt-drawer-width="250px" id="kt_app_sidebar">
      <div class="app-sidebar-logo position-relative" id="kt_app_sidebar_logo">
       <a href="">
        <img alt="Logo" class="app-sidebar-logo-default theme-light-show" src="http://upwall.net/uploads/1737585163.png" style="width: 140px"/>
        <img alt="Logo" class="app-sidebar-logo-default theme-dark-show" src="http://upwall.net/uploads/1737585368.png" style="width: 140px"/>
        <img alt="Logo" class="h-50px app-sidebar-logo-minimize" src="http://upwall.net/uploads/1737697239.png"/>
       </a>
       <div class="app-sidebar-toggle btn btn-icon btn-sm btn-color-gray-600 btn-active-color-primary border border-gray-300 h-30px w-30px position-absolute rounded-circle top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-name="app-sidebar-minimize" data-kt-toggle-state="active" data-kt-toggle-target="body" id="kt_app_sidebar_toggle">
        <i class="ki-duotone ki-left fs-2 rotate-180">
        </i>
       </div>
      </div>
      <div class="app-sidebar-menu overflow-hidden">
       <div class="app-sidebar-wrapper my-5" id="kt_app_sidebar_menu_wrapper">
        <div class="hover-scroll-overlay-y my-5 mx-4" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_user" data-kt-scroll-height="auto" data-kt-scroll-offset="5px" id="kt_app_sidebar_menu_scroll">
         <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold px-1" data-kt-menu="true" data-kt-menu-expand="false" id="#kt_app_sidebar_menu">
          <div class="menu-item pt-5 ms-2" style="margin-top: -20px">
           <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-5">
             <hr>
            </span>
           </div>
          </div>
          <div class="menu-item">
           <a class="menu-link active" href="../overview">
            <span class="menu-icon">
             <i class="ki-duotone ki-element-11 fs-1">
              <span class="path1">
              </span>
              <span class="path2">
              </span>
              <span class="path3">
              </span>
              <span class="path4">
              </span>
             </i>
            </span>
            <span class="menu-title">
             Overview
            </span>
           </a>
          </div>
          <div class="menu-item">
           <a class="menu-link " href="../offers">
            <span class="menu-icon">
             <i class="ki-duotone ki-graph-3 fs-1">
              <span class="path1"></span>
              <span class="path2"></span>
             </i>
            </span>
            <span class="menu-title">
             Offer Gellery
            </span>
           </a>
          </div>
          <div class="menu-item menu-accordion" data-kt-menu-trigger="click">
           <span class="menu-link ">
            <span class="menu-icon">
              <i class="ki-duotone ki-category fs-1">
               <span class="path1"></span>
               <span class="path2"></span>
               <span class="path3"></span>
               <span class="path4"></span>
              </i>
            </span>
            <span class="menu-title">
             Apps/Placements
            </span>
            <span class="menu-arrow">
            </span>
           </span>
           <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
             <a class="menu-link" href="../apps/placement">
              <span class="menu-bullet">
               <span class="bullet bullet-dot">
               </span>
              </span>
              <span class="menu-title">
               New Placement
              </span>
             </a>
            </div>
            <div class="menu-item">
             <a class="menu-link" href="../apps/">
              <span class="menu-bullet">
               <span class="bullet bullet-dot">
               </span>
              </span>
              <span class="menu-title">
               My Placements
              </span>
             </a>
            </div>
           </div>
          </div>
          <div class="menu-item">
           <a class="menu-link " href="../leads">
            <span class="menu-icon">
              <i class="ki-duotone ki-abstract-22 fs-1">
               <span class="path1"></span>
               <span class="path2"></span>
              </i>
            </span>
            <span class="menu-title">
             Conversions
            </span>
           </a>
          </div>
          <div class="menu-item">
           <a class="menu-link " href="../reverses">
            <span class="menu-icon">
              <i class="ki-duotone ki-abstract-11 fs-1">
               <span class="path1"></span>
               <span class="path2"></span>
              </i>
            </span>
            <span class="menu-title">
             Reverses
            </span>
           </a>
          </div>
          <div class="menu-item">
           <a class="menu-link " href="../reports">
            <span class="menu-icon">
              <i class="ki-duotone ki-chart-simple-3 fs-1">
               <span class="path1"></span>
               <span class="path2"></span>
               <span class="path3"></span>
               <span class="path4"></span>
              </i>
            </span>
            <span class="menu-title">
             Reports
            </span>
           </a>
          </div>
          <div class="menu-item">
           <a class="menu-link " href="../payments">
            <span class="menu-icon">
              <i class="ki-duotone ki-two-credit-cart fs-1">
               <span class="path1"></span>
               <span class="path2"></span>
               <span class="path3"></span>
               <span class="path4"></span>
               <span class="path5"></span>
              </i>
            </span>
            <span class="menu-title">
             Payments
            </span>
           </a>
          </div>
          <div class="menu-item">
           <a class="menu-link " href="../profile">
            <span class="menu-icon">
             <i class="ki-duotone ki-profile-circle fs-1">
              <span class="path1"></span>
              <span class="path2"></span>
              <span class="path3"></span>
             </i>
            </span>
            <span class="menu-title">
             Account Settings
            </span>
           </a>
          </div>
          <div class="menu-item menu-accordion" data-kt-menu-trigger="click">
           <span class="menu-link">
            <span class="menu-icon">
              <i class="ki-duotone ki-code fs-1">
               <span class="path1"></span>
               <span class="path2"></span>
               <span class="path3"></span>
               <span class="path4"></span>
              </i>
            </span>
            <span class="menu-title">
             Documentation
            </span>
            <span class="menu-arrow">
            </span>
           </span>
           <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
             <a class="menu-link" href="https://docs.upwall.net/overview/postback" target="_blank">
              <span class="menu-bullet">
               <span class="bullet bullet-dot">
               </span>
              </span>
              <span class="menu-title">
               Postback Docs
              </span>
             </a>
            </div>
            <div class="menu-item">
             <a class="menu-link" href="https://docs.upwall.net/overview/offers-api" target="_blank">
              <span class="menu-bullet">
               <span class="bullet bullet-dot">
               </span>
              </span>
              <span class="menu-title">
               API Offers
              </span>
             </a>
            </div>
           </div>
          </div>
          <div class="menu-item">
           <a class="menu-link active">
            <span class="menu-icon">
             <i class="ki-duotone ki-bank fs-1">
              <span class="path1"></span>
              <span class="path2"></span>
             </i>
             </span>
            <span class="menu-title" data-bs-toggle="tooltip" data-bs-placement="left" title="How does net 30 work? For example, if your earnings are over $25 for August you will be paid August earnings on October 7st.">
             Payment Term .. <i class="ki-solid ki-question-2 fs-2"></i>
            </span>
           </a>
          </div>
                   </div>
        </div>
       </div>
      </div>
     </div>
<script>
$(document).ready(function(){
  refreshDashboard();
});
function see() {
var see = new XMLHttpRequest();
see.open("GET", "../ajax.php?action=see",true);
see.send();
refreshDashboard();
}
/*setInterval(function(){
const leads = document.getElementById("leads").innerText;

if(leads === ""){

}else{
toastr.success(
"New Lead Completed (Added Balance : +"+leads+" )",
"New Conversion!",
{ showMethod: "slideDown", hideMethod: "slideUp", timeOut: 2000 }
);
var audio = new Audio("../asset/audio/win.mp3");
audio.play();
refreshDashboard();
}



}, 1000);*/

function refreshDashboard() {
var checknow = new XMLHttpRequest();
checknow.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("checknow").innerHTML = checknow.responseText;

    }
};
checknow.open("GET", "../ajax.php?action=checknow",true);
checknow.send();

var notificationslist = new XMLHttpRequest();
notificationslist.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("notificationslist").innerHTML = notificationslist.responseText;

    }
};
notificationslist.open("GET", "../ajax.php?action=notification",true);
notificationslist.send();

var balance = new XMLHttpRequest();
balance.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("dashboardBalance").innerHTML = balance.responseText;
    }
};
balance.open("GET", "../ajax.php?action=balance",true);
balance.send();

var earnings = new XMLHttpRequest();
earnings.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("dearnings").innerHTML = earnings.responseText;
    }
};
earnings.open("GET", "ajax.php?action=earnings",true);
earnings.send();

var liveleads = new XMLHttpRequest();
liveleads.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("dleads").innerHTML = liveleads.responseText;
    }
};
liveleads.open("GET", "ajax.php?action=leads",true);
liveleads.send();

var clicks = new XMLHttpRequest();
clicks.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("dclicks").innerHTML = clicks.responseText;
    }
};
clicks.open("GET", "ajax.php?action=clicks",true);
clicks.send();

var epc = new XMLHttpRequest();
epc.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("depc").innerHTML = epc.responseText;
    }
};
epc.open("GET", "ajax.php?action=epc",true);
epc.send();

var today = new XMLHttpRequest();
today.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("today").innerHTML = today.responseText;

    }
};
today.open("GET", "ajax.php?action=earnings",true);
today.send();

var dusers = new XMLHttpRequest();
dusers.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("dusers").innerHTML = dusers.responseText;

    }
};
dusers.open("GET", "ajax.php?action=users",true);
dusers.send();

var depu = new XMLHttpRequest();
depu.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("depu").innerHTML = depu.responseText;

    }
};
depu.open("GET", "ajax.php?action=epu",true);
depu.send();

var week = new XMLHttpRequest();
week.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("weeknow").innerHTML = week.responseText;

    }
};
week.open("GET", "../ajax.php?action=week",true);
week.send();

var month = new XMLHttpRequest();
month.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("month").innerHTML = month.responseText;

    }
};
month.open("GET", "../ajax.php?action=month",true);
month.send();


var all_earnings = new XMLHttpRequest();
all_earnings.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("all-earnings").innerHTML = all_earnings.responseText;

    }
};
all_earnings.open("GET", "../ajax.php?action=all_earnings",true);
all_earnings.send();

var mleads = new XMLHttpRequest();
mleads.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById("mleads").innerHTML = mleads.responseText;
    }
};
mleads.open("GET", "ajax.php?action=my_leads",true);
mleads.send();

document.getElementById("leads").innerText = "";

}
</script>
<div id="kt_app_content" class="app-content  px-lg-3 " >
<div id="kt_app_content_container" class="app-container  container-fluid">
    <title>Dashboard</title>
    <div class="page-title d-flex align-items-center gap-1 me-3">
           <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 lh-1 fw-bolder fs-2x my-0 me-5">
            Dashboard
           </h1>
           <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
             <a class="text-gray-500 text-hover-primary" href="../">
              <i class="ki-duotone ki-home fs-3 text-gray-500 mx-n1">
              </i>
             </a>
            </li>
            <li class="breadcrumb-item">
             <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1">
             </i>
            </li>
            <li class="breadcrumb-item text-gray-700">
             Overview
            </li>
           </ul>
          </div>

<div class="row">
<br>
</div>
<div id="statics">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4" style="height: 100%">
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
            <div class="card-header pt-5">
                <div class="card-title d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start fs-5"></span>
                        <span class="fs-2hx  text-gray-900 me-2 lh-1 ls-n2 fw-semibold text-muted" id="dearnings"><img src="../asset/img/loading-gif.gif" style="width: 25px"></span>
                        <span class="badge badge-light-success" >
                          <i class="ki-solid ki-dollar" style="font-size: 25px; color: #14ddb9"></i>
                        </span>
                    </div>
                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Today's Revenue</span>
                    <br>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4" style="height: 100%">
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
            <div class="card-header pt-5">
                <div class="card-title d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start"></span>
                        <span class="fs-2hx  text-gray-900 me-2 lh-1 ls-n2 fw-semibold" id="dleads"><img src="../asset/img/loading-gif.gif" style="width: 25px"></span>
                        <span class="badge badge-light-primary" >
                          <i class="ki-solid ki-abstract-22" style="font-size: 25px; color: #3e8feb"></i>
                        </span>
                    </div>
                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Today's Conversions</span>
                    <br>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4" style="height: 100%">
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
            <div class="card-header pt-5">
                <div class="card-title d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start"></span>
                        <span class="fs-2hx  text-gray-900 me-2 lh-1 ls-n2 fw-semibold" id="dclicks"><img src="../asset/img/loading-gif.gif" style="width: 25px"></span>
                        <span class="badge badge-light-primary" >
                          <i class="ki-solid ki-click" style="font-size: 25px; color: #3e8feb"></i>
                        </span>
                    </div>
                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Today's clicks</span>
                    <br>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4" style="height: 100%">
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
            <div class="card-header pt-5">
                <div class="card-title d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start"></span>
                        <span class="fs-2hx  text-gray-900 me-2 lh-1 ls-n2 fw-semibold" id="depc"><img src="../asset/img/loading-gif.gif" style="width: 25px"></span>
                        <span class="badge badge-light-primary" >
                          <i class="ki-solid ki-chart-simple" style="font-size: 25px; color: #14ddb9"></i>
                        </span>
                    </div>
                    <span class="text-gray-500 pt-1 fw-semibold fs-6">EPC</span>
                    <br>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4" style="height: 100%">
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
            <div class="card-header pt-5">
                <div class="card-title d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start"></span>
                        <span class="fs-2hx  text-gray-900 me-2 lh-1 ls-n2 fw-semibold" id="depu">0</span>
                        <span class="badge badge-light-primary">
                          <i class="ki-solid ki-chart-simple" style="font-size: 25px; color: #14ddb9"></i>
                        </span>
                    </div>
                    <span class="text-gray-500 pt-1 fw-semibold fs-6">EPU</span>
                    <br>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4" style="height: 100%">
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
            <div class="card-header pt-5">
                <div class="card-title d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start"></span>
                        <span class="fs-2hx  text-gray-900 me-2 lh-1 ls-n2 fw-semibold" id="dusers"><img src="../asset/img/loading-gif.gif" style="width: 25px"></span>
                        <span class="badge badge-light-primary" >
                          <i class="ki-solid ki-profile-user" style="font-size: 25px; color: #3e8feb"></i>
                        </span>
                    </div>
                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Today's Users</span>
                    <br>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                <div class="card-header align-items-center border-0">
                                <h2 class="fw-bold text-gray-900 m-0">Revenue</h2>
                                </div>
                                <div class="card-body p-1 ">
                                    <div id="kt_charts_widget_4aa" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                                </div>
                            </div> <!-- end col-->
                            </div>
                            <div class="col-lg-4">
                            <div class="card" style="height: 370px; padding: 10px;">
                            <div class="card-header align-items-center border-0">
                                <h3 class="fw-bold text-gray-900 m-0">Earnings Statistics</h3>
                            </div>
                      <div class="row py-3 border-bottom p-6">
                        <div class="col-3">
                          <div class="bg-light-success text-success text-center py-2 rounded-1">
                            <iconify-icon icon="material-symbols:payments-sharp" width="24" height="24"  style="color: #14ddb9"></iconify-icon>
                          </div>
                        </div>
                        <div class="col-9 d-flex align-items-center">
                          <div>
                            <h5 class="card-title mb-1 fs-3" id="today"><img src="../asset/img/loading-gif.gif" style="width: 25px"></h5>
                            <p class="text-muted mb-0">
                              Today's Earnings
                            </p>
                          </div>
                        </div>
                      </div>
                    <div class="row py-3 border-bottom p-6">
                        <div class="col-3">
                          <div class="bg-light-success text-success text-center py-2 rounded-1">
                            <iconify-icon icon="material-symbols:payments-sharp" width="24" height="24"  style="color: #14ddb9"></iconify-icon>
                          </div>
                        </div>
                        <div class="col-9 d-flex align-items-center">
                          <div>
                            <h5 class="card-title mb-1 fs-3" id="weeknow"><img src="../asset/img/loading-gif.gif" style="width: 25px"></h5>
                            <p class="text-muted mb-0">
                              Earnings this week
                            </p>
                          </div>
                        </div>
                      </div>
                    <div class="row py-3 border-bottom p-6">
                        <div class="col-3">
                          <div class="bg-light-success text-success text-center py-2 rounded-1">
                            <iconify-icon icon="material-symbols:payments-sharp" width="24" height="24"  style="color: #14ddb9"></iconify-icon>
                          </div>
                        </div>
                        <div class="col-9 d-flex align-items-center">
                          <div>
                            <h5 class="card-title mb-1 fs-3" id="month"><img src="../asset/img/loading-gif.gif" style="width: 25px"></h5>
                            <p class="text-muted mb-0">
                              Earnings this month
                            </p>
                          </div>
                        </div>
                      </div>
                    <div class="row py-3 border-bottom p-6">
                        <div class="col-3">
                          <div class="bg-light-success text-success text-center py-2 rounded-1">
                            <iconify-icon icon="material-symbols:payments-sharp" width="24" height="24"  style="color: #14ddb9"></iconify-icon>
                          </div>
                        </div>
                        <div class="col-9 d-flex align-items-center">
                          <div>
                            <h5 class="card-title mb-1 fs-3" id="all-earnings"><img src="../asset/img/loading-gif.gif" style="width: 25px"></h5>
                            <p class="text-muted mb-0">
                              Earnings all the time
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<br>
<div class="card" style="padding: 0px">
<div class="card-header align-items-center border-0">
     <h2 class="fw-bold text-gray-900 m-0">Last 10 Conversions</h2>
     <br><br>
</div>

<div class="table-responsive" style="margin-top: -10px">
<table class="table border table-bordered text-nowrap" id="mleads"></table>
</div>
</div>
<script>
$("#send-email").click(function(){
  $.ajax({
     type: "POST",
     url: "../mail/accountAjax.php",
     data: { send_activate_link: 1, email:admin@ekprofithub.com, },
     success: function(ajaxData){
         alert(ajaxData)
     },
  });
               /*toastr.success(
"The verification email has been sent to your email",
"Well Done!",
{ showMethod: "slideDown", hideMethod: "slideUp", timeOut: 2000 }
);*/
});
</script>

   </div>
  </div>
  </div>
  </div>
  </div>
  <script>
      $(document).ready(function(){
          $("#normal_table").DataTable();
      });
toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toastr-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};
  </script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="../assets/plugins/global/plugins.bundle.js"></script>
  <script src="../assets/js/scripts.bundle.js"></script>
  <script src="../assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>

  <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
  <script src="../asset/js/prism.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
  <script src="../assets/plugins/custom/datatables/datatables.bundle.js"></script>
       <script>

var KTChartsWidget4 = (function () {
    var e = { self: null, rendered: !1 },
        t = function () {
            var t = document.getElementById("kt_charts_widget_4aa");
            if (t) {
                var a = parseInt(KTUtil.css(t, "height")),
                    l = KTUtil.getCssVariableValue("--bs-gray-500"),
                    r = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                    o = KTUtil.getCssVariableValue("--bs-primary"),
                    i = {
                        series: [
                            {
                                name: "Revenue",
                                data: null,
                            },
                        ],
                        chart: {
                            fontFamily: "inherit",
                            type: "area",
                            height: a,
                            toolbar: { show: !1 },
                        },
                        plotOptions: {},
                        legend: { show: !1 },
                        dataLabels: { enabled: !1 },
                        fill: {
                            type: "gradient",
                            gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.4,
                                opacityTo: 0,
                                stops: [0, 80, 100],
                            },
                        },
                        stroke: { curve: "smooth", show: !0, width: 3, colors: [o] },
                        xaxis: {
                            categories: null,
                            axisBorder: { show: !1 },
                            axisTicks: { show: !1 },
                            tickAmount: 6,
                            labels: {
                                rotate: 0,
                                rotateAlways: !0,
                                style: { colors: l, fontSize: "12px" },
                            },
                            crosshairs: {
                                position: "front",
                                stroke: { color: o, width: 1, dashArray: 3 },
                            },
                            tooltip: {
                                enabled: !0,
                                formatter: void 0,
                                offsetY: 0,
                                style: { fontSize: "12px" },
                            },
                        },
                        yaxis: {
                            min: 0,
                            tickAmount: 6,
                            labels: {
                                style: { colors: l, fontSize: "12px" },
                                formatter: function (e) {
                                    return "$" + parseInt(1 * e);
                                },
                            },
                        },
                        states: {
                            normal: { filter: { type: "none", value: 0 } },
                            hover: { filter: { type: "none", value: 0 } },
                            active: {
                                allowMultipleDataPointsSelection: !1,
                                filter: { type: "none", value: 0 },
                            },
                        },
                        tooltip: {
                            style: { fontSize: "12px" },
                            y: {
                                formatter: function (e) {
                                    return "$" + parseInt(1 * e);
                                },
                            },
                        },
                        colors: [KTUtil.getCssVariableValue("--bs-primary")],
                        grid: {
                            borderColor: r,
                            strokeDashArray: 4,
                            yaxis: { lines: { show: !0 } },
                        },
                        markers: { strokeColor: o, strokeWidth: 3 },
                    };
                (e.self = new ApexCharts(t, i)),
                    setTimeout(function () {
                        e.self.render(), (e.rendered = !0);
                    }, 200);
            }
        };
    return {
        init: function () {
            t(),
                KTThemeMode.on("kt.thememode.change", function () {
                    e.rendered && e.self.destroy(), t();
                });
        },
    };
})();
"undefined" != typeof module && (module.exports = KTChartsWidget4),
KTUtil.onDOMContentLoaded(function () {
    KTChartsWidget4.init();
});
</script>

  <script src="../assets/js/custom/widgets.js">
  </script>
  <script src="../assets/js/custom/apps/chat/chat.js">
  </script>
  <script src="../assets/js/custom/utilities/modals/upgrade-plan.js">
  </script>
  <script src="../assets/js/custom/utilities/modals/create-app.js">
  </script>
  <script src="../assets/js/custom/utilities/modals/users-search.js">
  </script>


 </body>
</html>
