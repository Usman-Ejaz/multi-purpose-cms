<script setup>
import LeftMenu from '@/Components/LeftMenu.vue';
import Header from '@/Components/Header.vue';

</script>

<template>
    
    <Head>
        <title> {{ $page.props?.title ?? 'Dashboard' }} </title>
    </Head>

    <div id="layout-wrapper">
        <!-- main header -->
        <header id="page-topbar">
            <Header />
        </header>

        <!-- left menu -->
        <div class="vertical-menu">
            <LeftMenu />
        </div>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">
                                    {{ $page.props?.title ?? '' }}
                                </h4>
                                <!-- Breadcrumbs -->
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Utility</a></li>
                                        <li class="breadcrumb-item active">Starter Page</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <slot />
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            {{ (new Date().getFullYear()) }} © CMS.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design &amp; Develop by Usman Ejaz
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>
