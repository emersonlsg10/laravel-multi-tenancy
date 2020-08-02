<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('index')}}">
                            <i class="ri-dashboard-line mr-2"></i> @lang('translation.Dashboard')
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-pencil-ruler-2-line mr-2"></i> @lang('translation.UI_Elements') <div class="arrow-down"></div>
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                            aria-labelledby="topnav-uielement">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-alerts" class="dropdown-item">@lang('translation.Alerts')</a>
                                        <a href="ui-buttons" class="dropdown-item">@lang('translation.Buttons')</a>
                                        <a href="ui-cards" class="dropdown-item">@lang('translation.Cards')</a>
                                        <a href="ui-carousel" class="dropdown-item">@lang('translation.Carousel')</a>
                                        <a href="ui-dropdowns" class="dropdown-item">@lang('translation.Dropdowns')</a>
                                        <a href="ui-grid" class="dropdown-item">@lang('translation.Grid')</a>
                                        <a href="ui-images" class="dropdown-item">@lang('translation.Images')</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-lightbox" class="dropdown-item">@lang('translation.Lightbox')</a>
                                        <a href="ui-modals" class="dropdown-item">@lang('translation.Modals')</a>
                                        <a href="ui-rangeslider" class="dropdown-item">@lang('translation.Range_Slider')</a>
                                        <a href="ui-roundslider" class="dropdown-item">@lang('translation.Round_Slider')</a>
                                        <a href="ui-session-timeout" class="dropdown-item">@lang('translation.Session_Timeout')</a>
                                        <a href="ui-progressbars" class="dropdown-item">@lang('translation.Progress_Bars')</a>
                                        <a href="ui-sweet-alert" class="dropdown-item">@lang('translation.Sweet_Alert')Sweet-Alert</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-tabs-accordions" class="dropdown-item">@lang('translation.Tabs_Accordions')</a>
                                        <a href="ui-typography" class="dropdown-item">@lang('translation.Typography')</a>
                                        <a href="ui-video" class="dropdown-item">@lang('translation.Video')</a>
                                        <a href="ui-general" class="dropdown-item">@lang('translation.General')</a>
                                        <a href="ui-rating" class="dropdown-item">@lang('translation.Rating')</a>
                                        <a href="ui-notifications" class="dropdown-item">@lang('translation.Notifications')</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-apps-2-line mr-2"></i>@lang('translation.Apps') <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">

                            <a href="calendar" class="dropdown-item">@lang('translation.Calendar')</a>
                            <a href="apps-chat" class="dropdown-item">@lang('translation.Chat')</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Email') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="email-inbox" class="dropdown-item">@lang('translation.Inbox')</a>
                                    <a href="email-read" class="dropdown-item">@lang('translation.Read_Email')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Ecommerce') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                    <a href="ecommerce-products" class="dropdown-item">@lang('translation.Products')</a>
                                    <a href="ecommerce-product-detail" class="dropdown-item">@lang('translation.Product_Detail')</a>
                                    <a href="ecommerce-orders" class="dropdown-item">@lang('translation.Orders')</a>
                                    <a href="ecommerce-customers" class="dropdown-item">@lang('translation.Customers')</a>
                                    <a href="ecommerce-cart" class="dropdown-item">@lang('translation.Cart')</a>
                                    <a href="ecommerce-checkout" class="dropdown-item">@lang('translation.Checkout')</a>
                                    <a href="ecommerce-shops" class="dropdown-item">@lang('translation.Shops')</a>
                                    <a href="ecommerce-add-product" class="dropdown-item">@lang('translation.Add_Product')</a>
                                </div>
                            </div>

                            <a href="apps-kanban-board" class="dropdown-item">@lang('translation.Kanban_Board')</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-stack-line mr-2"></i>@lang('translation.Components') <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Forms') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                    <a href="form-elements" class="dropdown-item">@lang('translation.Elements')</a>
                                    <a href="form-validation" class="dropdown-item">@lang('translation.Validation')</a>
                                    <a href="form-advanced" class="dropdown-item">@lang('translation.Advanced_Plugins')</a>
                                    <a href="form-editors" class="dropdown-item">@lang('translation.Editors')</a>
                                    <a href="form-uploads" class="dropdown-item">@lang('translation.File_Upload')</a>
                                    <a href="form-xeditable" class="dropdown-item">@lang('translation.Xeditable')</a>
                                    <a href="form-wizard" class="dropdown-item">@lang('translation.Wizard')</a>
                                    <a href="form-mask" class="dropdown-item">@lang('translation.Mask')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Tables') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                    <a href="tables-basic" class="dropdown-item">@lang('translation.Basic_Tables')</a>
                                    <a href="tables-datatable" class="dropdown-item">@lang('translation.Data_Tables')</a>
                                    <a href="tables-responsive" class="dropdown-item">@lang('translation.Responsive_Table')</a>
                                    <a href="tables-editable" class="dropdown-item">@lang('translation.Editable_Table')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Charts') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                    <a href="charts-apex" class="dropdown-item">@lang('translation.Apex_charts')</a>
                                    <a href="charts-chartjs" class="dropdown-item">@lang('translation.Chartjs')</a>
                                    <a href="charts-flot" class="dropdown-item">@lang('translation.Flot_Chart')</a>
                                    <a href="charts-knob" class="dropdown-item">@lang('translation.Jquery_Knob_Chart')</a>
                                    <a href="charts-sparkline" class="dropdown-item">@lang('translation.Sparkline_Chart')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Icons') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="icons-remix" class="dropdown-item">@lang('translation.Remix_Icons')</a>
                                    <a href="icons-materialdesign" class="dropdown-item">@lang('translation.Material_Design')</a>
                                    <a href="icons-dripicons" class="dropdown-item">@lang('translation.Dripicons')</a>
                                    <a href="icons-fontawesome" class="dropdown-item">@lang('translation.Font_awesome_5')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Maps') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                    <a href="maps-google" class="dropdown-item">@lang('translation.Google_Maps')</a>
                                    <a href="maps-vector" class="dropdown-item">@lang('translation.Vector_Maps')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-file-copy-2-line mr-2"></i>@lang('translation.Pages') <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Authentication') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="auth-login" class="dropdown-item">@lang('translation.Login')</a>
                                    <a href="auth-register" class="dropdown-item">@lang('translation.Register')</a>
                                    <a href="auth-recoverpw" class="dropdown-item">@lang('translation.Recover_Password')</a>
                                    <a href="auth-lock-screen" class="dropdown-item">@lang('translation.Lock_Screen')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Utility') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                    <a href="pages-starter" class="dropdown-item">@lang('translation.Starter_Page')</a>
                                    <a href="pages-maintenance" class="dropdown-item">@lang('translation.Maintenance')</a>
                                    <a href="pages-comingsoon" class="dropdown-item">@lang('translation.Coming_Soon')</a>
                                    <a href="pages-timeline" class="dropdown-item">@lang('translation.Timeline')</a>
                                    <a href="pages-faqs" class="dropdown-item">@lang('translation.FAQs')</a>
                                    <a href="pages-pricing" class="dropdown-item">@lang('translation.Pricing')</a>
                                    <a href="pages-404" class="dropdown-item">@lang('translation.Error_404')</a>
                                    <a href="pages-500" class="dropdown-item">@lang('translation.Error_500')</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-layout-3-line mr-2"></i>@lang('translation.Layouts') <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                            <a href="layouts-horizontal" class="dropdown-item">@lang('translation.Horizontal')</a>
                            <a href="layouts-light-sidebar" class="dropdown-item">@lang('translation.Light_Sidebar')</a>
                            <a href="layouts-compact-sidebar" class="dropdown-item">@lang('translation.Compact_Sidebar')</a>
                            <a href="layouts-icon-sidebar" class="dropdown-item">@lang('translation.Icon_Sidebar')</a>
                            <a href="layouts-boxed" class="dropdown-item">@lang('translation.Boxed_Layout')</a>
                            <a href="layouts-preloader" class="dropdown-item">@lang('translation.Preloader')</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>