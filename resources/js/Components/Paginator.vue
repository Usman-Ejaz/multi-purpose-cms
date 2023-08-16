<script setup>
</script>

<template>
    <div class="row justify-content-between align-items-center">
        <div class="col-auto me-auto">
            <p class="text-muted mb-0">
                Showing
                <b>1</b> to <b>12</b> of <b>45</b> entries
            </p>
        </div>
        <div class="col-auto">
            <div class="card d-inline-block ms-auto mb-0">
                <div class="card-body p-2">
                    <nav aria-label="Page navigation example" class="mb-0">
                        <ul class="pagination pagination-rounded mb-2">

                            <!-- Previous page -->
                            <li class="page-item disabled">
                                <a
                                    class="page-link"
                                    href="javascript: void(0);"
                                    aria-label="Previous"
                                >
                                    <i class="mdi mdi-chevron-left"></i>
                                </a>
                            </li>

                            <!-- main links -->
                            <li class="page-item active">
                                <a class="page-link" href="javascript: void(0);"
                                    >1</a
                                >
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);"
                                    >2</a
                                >
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);"
                                    >3</a
                                >
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);"
                                    >4</a
                                >
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);"
                                    >5</a
                                >
                            </li>

                            <!-- next link -->
                            <li class="page-item">
                                <a
                                    class="page-link"
                                    href="javascript: void(0);"
                                    aria-label="Next"
                                >
                                    <i class="mdi mdi-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
</template>
