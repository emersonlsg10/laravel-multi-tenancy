<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">@lang('translation.Menu')</li>

                <li>
                    <a href="{{url('index')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge badge-pill badge-success float-right">3</span>
                        <span>@lang('translation.Dashboard')</span>
                    </a>
                </li>

                <li>
                    <a href="calendar" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>@lang('translation.Calendar')</span>
                    </a>
                </li>

                <li>
                    <a href="apps-chat" class=" waves-effect">
                        <i class="ri-chat-1-line"></i>
                        <span>@lang('translation.Chat')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span>@lang('translation.Ecommerce')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products">@lang('translation.Products')</a></li>
                        <li><a href="ecommerce-product-detail">@lang('translation.Product_Detail')</a></li>
                        <li><a href="ecommerce-orders">@lang('translation.Orders')</a></li>
                        <li><a href="ecommerce-customers">@lang('translation.Customers')</a></li>
                        <li><a href="ecommerce-cart">@lang('translation.Cart')</a></li>
                        <li><a href="ecommerce-checkout">@lang('translation.Checkout')</a></li>
                        <li><a href="ecommerce-shops">@lang('translation.Shops')</a></li>
                        <li><a href="ecommerce-add-product">@lang('translation.Add_Product')</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>@lang('translation.Email')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox">@lang('translation.Inbox')</a></li>
                        <li><a href="email-read">@lang('translation.Read_Email')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="apps-kanban-board" class=" waves-effect">
                        <i class="ri-artboard-2-line"></i>
                        <span>@lang('translation.Kanban_Board')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>@lang('translation.Layouts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-horizontal">@lang('translation.Horizontal')</a></li>
                        <li><a href="layouts-light-sidebar">@lang('translation.Light_Sidebar')</a></li>
                        <li><a href="layouts-compact-sidebar">@lang('translation.Compact_Sidebar')</a></li>
                        <li><a href="layouts-icon-sidebar">@lang('translation.Icon_Sidebar')</a></li>
                        <li><a href="layouts-boxed">@lang('translation.Boxed_Layout')</a></li>
                        <li><a href="layouts-preloader">@lang('translation.Preloader')</a></li>
                    </ul>
                </li>

                <li class="menu-title">@lang('translation.Pages')</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>@lang('translation.Authentication')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login">@lang('translation.Login')</a></li>
                        <li><a href="auth-register">@lang('translation.Register')</a></li>
                        <li><a href="auth-recoverpw">@lang('translation.Recover_Password')</a></li>
                        <li><a href="auth-lock-screen">@lang('translation.Lock_Screen')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>@lang('translation.Utility')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter">@lang('translation.Starter_Page')</a></li>
                        <li><a href="pages-maintenance">@lang('translation.Maintenance')</a></li>
                        <li><a href="pages-comingsoon">@lang('translation.Coming_Soon')</a></li>
                        <li><a href="pages-timeline">@lang('translation.Timeline')</a></li>
                        <li><a href="pages-faqs">@lang('translation.FAQs')</a></li>
                        <li><a href="pages-pricing">@lang('translation.Pricing')</a></li>
                        <li><a href="pages-404">@lang('translation.Error_404')</a></li>
                        <li><a href="pages-500">@lang('translation.Error_500')</a></li>
                    </ul>
                </li>

                <li class="menu-title">@lang('translation.Components')</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-pencil-ruler-2-line"></i>
                        <span>@lang('translation.UI_Elements')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts">@lang('translation.Alerts')</a></li>
                        <li><a href="ui-buttons">@lang('translation.Buttons')</a></li>
                        <li><a href="ui-cards">@lang('translation.Cards')</a></li>
                        <li><a href="ui-carousel">@lang('translation.Carousel')</a></li>
                        <li><a href="ui-dropdowns">@lang('translation.Dropdowns')</a></li>
                        <li><a href="ui-grid">@lang('translation.Grid')</a></li>
                        <li><a href="ui-images">@lang('translation.Images')</a></li>
                        <li><a href="ui-lightbox">@lang('translation.Lightbox')</a></li>
                        <li><a href="ui-modals">@lang('translation.Modals')</a></li>
                        <li><a href="ui-rangeslider">@lang('translation.Range_Slider')</a></li>
                        <li><a href="ui-roundslider">@lang('translation.Round_Slider')</a></li>
                        <li><a href="ui-session-timeout">@lang('translation.Session_Timeout')</a></li>
                        <li><a href="ui-progressbars">@lang('translation.Progress_Bars')</a></li>
                        <li><a href="ui-sweet-alert">@lang('translation.Sweet_Alerts')</a></li>
                        <li><a href="ui-tabs-accordions">@lang('translation.Tabs_Accordions')</a></li>
                        <li><a href="ui-typography">@lang('translation.Typography')</a></li>
                        <li><a href="ui-video">@lang('translation.Video')</a></li>
                        <li><a href="ui-general">@lang('translation.General')</a></li>
                        <li><a href="ui-rating">@lang('translation.Rating')</a></li>
                        <li><a href="ui-notifications">@lang('translation.Notifications')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ri-eraser-fill"></i>
                        <span class="badge badge-pill badge-danger float-right">6</span>
                        <span>@lang('translation.Forms')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements">@lang('translation.Elements')</a></li>
                        <li><a href="form-validation">@lang('translation.Validation')</a></li>
                        <li><a href="form-advanced">@lang('translation.Advanced_Plugins')</a></li>
                        <li><a href="form-editors">@lang('translation.Editors')</a></li>
                        <li><a href="form-uploads">@lang('translation.File_Upload')</a></li>
                        <li><a href="form-xeditable">@lang('translation.X_editable')</a></li>
                        <li><a href="form-wizard">@lang('translation.Wizard')</a></li>
                        <li><a href="form-mask">@lang('translation.Mask')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-table-2"></i>
                        <span>@lang('translation.Tables')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic">@lang('translation.Basic_Tables')</a></li>
                        <li><a href="tables-datatable">@lang('translation.Data_Tables')</a></li>
                        <li><a href="tables-responsive">@lang('translation.Responsive_Table')</a></li>
                        <li><a href="tables-editable">@lang('translation.Editable_Table')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-bar-chart-line"></i>
                        <span>@lang('translation.Charts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex">@lang('translation.Apexcharts')</a></li>
                        <li><a href="charts-chartjs">@lang('translation.Chartjs')</a></li>
                        <li><a href="charts-flot">@lang('translation.Flot')</a></li>
                        <li><a href="charts-knob">@lang('translation.Jquery_Knob')</a></li>
                        <li><a href="charts-sparkline">@lang('translation.Sparkline')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-brush-line"></i>
                        <span>@lang('translation.Icons')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-remix">@lang('translation.Remix_Icons')</a></li>
                        <li><a href="icons-materialdesign">@lang('translation.Material Design')</a></li>
                        <li><a href="icons-dripicons">@lang('translation.Dripicons')</a></li>
                        <li><a href="icons-fontawesome">@lang('translation.Font_awesome_5')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-map-pin-line"></i>
                        <span>@lang('translation.Maps')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google">@lang('translation.Google_Maps')</a></li>
                        <li><a href="maps-vector">@lang('translation.Vector_Maps')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-share-line"></i>
                        <span>@lang('translation.Multi_Level')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);"@lang('translation.Level_1.1')></a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->