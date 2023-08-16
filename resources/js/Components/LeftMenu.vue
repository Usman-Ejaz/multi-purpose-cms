<script setup>
import { onMounted } from 'vue';
onMounted(() => {
    $('#side-menu').metisMenu();
})
</script>

<template>
    <div data-simplebar="init" class="h-100">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: -16.8px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">

                            <!--- Sidemenu -->
                            <div id="sidebar-menu" class="mm-active">
                                <!-- Left Menu Start -->
                                <ul class="metismenu list-unstyled mm-show" id="side-menu">
                                    <li class="menu-title" key="t-menu">Menu</li>
                                    <li>
                                        <Link :href="route('dashboard')" class="waves-effect">
                                            <i class="bx bx-home-circle"></i>
                                            <span key="t-chat">Dashboard</span>
                                        </Link>
                                    </li>
                                    <li>
                                        <Link :href="route('parties.index')" class="waves-effect">
                                            <i class="bx bxs-user-detail"></i>
                                            <span key="t-chat">Parties</span>
                                        </Link>
                                    </li>

                                    <li class="menu-title" key="t-components">Components</li>

                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                                            <i class="bx bx-tone"></i>
                                            <span key="t-ui-elements">UI Elements</span>
                                        </a>
                                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                                            <li><a href="ui-alerts.html" key="t-alerts">Alerts</a></li>
                                            <li><a href="ui-buttons.html" key="t-buttons">Buttons</a></li>
                                            <li><a href="ui-cards.html" key="t-cards">Cards</a></li>
                                            <li><a href="ui-carousel.html" key="t-carousel">Carousel</a></li>
                                            <li><a href="ui-dropdowns.html" key="t-dropdowns">Dropdowns</a></li>
                                            <li><a href="ui-grid.html" key="t-grid">Grid</a></li>
                                            <li><a href="ui-images.html" key="t-images">Images</a></li>
                                            <li><a href="ui-lightbox.html" key="t-lightbox">Lightbox</a></li>
                                            <li><a href="ui-modals.html" key="t-modals">Modals</a></li>
                                            <li><a href="ui-offcanvas.html" key="t-offcanvas">Offcanvas</a></li>
                                            <li><a href="ui-rangeslider.html" key="t-range-slider">Range Slider</a></li>
                                            <li><a href="ui-session-timeout.html" key="t-session-timeout">Session
                                                    Timeout</a></li>
                                            <li><a href="ui-progressbars.html" key="t-progress-bars">Progress Bars</a></li>
                                            <li><a href="ui-placeholders.html" key="t-placeholders">Placeholders</a></li>
                                            <li><a href="ui-sweet-alert.html" key="t-sweet-alert">Sweet-Alert</a></li>
                                            <li><a href="ui-tabs-accordions.html" key="t-tabs-accordions">Tabs &amp;
                                                    Accordions</a></li>
                                            <li><a href="ui-typography.html" key="t-typography">Typography</a></li>
                                            <li><a href="ui-toasts.html" key="t-toasts">Toasts</a></li>
                                            <li><a href="ui-video.html" key="t-video">Video</a></li>
                                            <li><a href="ui-general.html" key="t-general">General</a></li>
                                            <li><a href="ui-colors.html" key="t-colors">Colors</a></li>
                                            <li><a href="ui-rating.html" key="t-rating">Rating</a></li>
                                            <li><a href="ui-notifications.html" key="t-notifications">Notifications</a></li>
                                            <li><a href="ui-utilities.html"><span key="t-utilities">Utilities</span> <span
                                                        class="badge rounded-pill bg-success float-end"
                                                        key="t-new">New</span></a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <!-- Sidebar -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 1495px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar" style="height: 83px; transform: translate3d(0px, 147px, 0px); display: block;">
            </div>
        </div>
    </div>
</template>