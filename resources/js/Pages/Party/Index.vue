<script setup>
import { ref } from 'vue';

import Paginator from '@/Components/Paginator.vue';

defineProps({
    parties: {
        type: Object,
        required: true
    }
})

const show = ref(false);
const isEditing = ref(false);

</script>

<template>

    <div class="modal fade bs-example-modal-xl" tabindex="-1" aria-labelledby="addEditModal" aria-hidden="true" v-show="show">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEditModal">{{ isEditing ? 'Edit' : 'Add' }} Party</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Cras mattis consectetur purus sit amet fermentum.
                        Cras justo odio, dapibus ac facilisis in,
                        egestas eget quam. Morbi leo risus, porta ac
                        consectetur ac, vestibulum at eros.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Vivamus sagittis lacus vel
                        augue laoreet rutrum faucibus dolor auctor.</p>
                    <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                        Praesent commodo cursus magna, vel scelerisque
                        nisl consectetur et. Donec sed odio dui. Donec
                        ullamcorper nulla non metus auctor
                        fringilla.</p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 card-title flex-grow-1"></h5>
                        <div class="flex-shrink-0">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Add New Party</button>
                            <!-- <a href="#!" class="btn btn-light">
                                <i class="mdi mdi-refresh"></i>
                            </a>
                            <div class="dropdown d-inline-block">
                                <button
                                    type="menu"
                                    class="btn btn-success"
                                    id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <ul
                                    class="dropdown-menu"
                                    aria-labelledby="dropdownMenuButton1"
                                >
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Action</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Another action</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            >Something else here</a
                                        >
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom">
                    <div class="row g-3">
                        <div class="col-xxl-4 col-lg-6">
                            <input
                                type="search"
                                class="form-control"
                                id="searchInput"
                                placeholder="Search for ..."
                            />
                        </div>
                        <div class="col-xxl-2 col-lg-6">
                            <select class="form-control">
                                <option>Status</option>
                                <option value="Active">
                                    Active
                                </option>
                                <option value="New">
                                    New
                                </option>
                                <option value="Close">
                                    Close
                                </option>
                            </select>
                        </div>
                        <div class="col-xxl-2 col-lg-4">
                            <select class="form-control">
                                <option >Select Type</option>
                                <option value="1">
                                    Full Time
                                </option>
                                <option value="2">
                                    Part Time
                                </option>
                            </select>
                        </div>
                        <div class="col-xxl-2 col-lg-4">
                            <div id="datepicker1">
                                <input
                                    type="date"
                                    class="form-control"
                                    placeholder="Select date"
                                    data-date-format="dd M, yyyy"
                                    data-date-autoclose="true"
                                    data-date-container="#datepicker1"
                                    data-provide="datepicker"
                                />
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-4">
                            <button
                                type="button"
                                class="btn btn-soft-secondary w-100"
                            >
                                <i
                                    class="mdi mdi-filter-outline align-middle"
                                ></i>
                                Filter
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle nowrap">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Marketing Director</td>
                                    <td>California</td>
                                    <td>
                                        <span class="badge badge-soft-warning"
                                            >Internship</span
                                        >
                                    </td>
                                    <td>
                                        <span class="badge text-bg-success"
                                            >Active</span
                                        >
                                    </td>
                                    <td>
                                        <ul
                                            class="list-unstyled hstack gap-1 mb-0"
                                        >
                                            <li
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                aria-label="View"
                                            >
                                                <a
                                                    href="job-details.html"
                                                    class="btn btn-sm btn-soft-primary"
                                                >
                                                    <i
                                                        class="mdi mdi-eye-outline"
                                                    ></i>
                                                </a>
                                            </li>
                                            <li
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                aria-label="Edit"
                                            >
                                                <a
                                                    href="#"
                                                    class="btn btn-sm btn-soft-info"
                                                >
                                                    <i
                                                        class="mdi mdi-pencil-outline"
                                                    ></i>
                                                </a>
                                            </li>
                                            <li
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                aria-label="Delete"
                                            >
                                                <a
                                                    href="#jobDelete"
                                                    data-bs-toggle="modal"
                                                    class="btn btn-sm btn-soft-danger"
                                                >
                                                    <i
                                                        class="mdi mdi-delete-outline"
                                                    ></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Paginator Component here -->
                    <Paginator :data="parties.links" />    
                    <!--end row-->
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
</template>
