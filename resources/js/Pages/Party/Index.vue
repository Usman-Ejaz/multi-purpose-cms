<script setup>
import { ref } from 'vue';

import Paginator from '@/Components/Paginator.vue';

const show = ref(false);
const isEditing = ref(false);

</script>

<template>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" aria-labelledby="addEditModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEditModal">Large modal</h5>
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
                        <h5 class="mb-0 card-title flex-grow-1">Parties List</h5>
                        <div class="flex-shrink-0">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Add New Party</button>
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
                        <div class="col-xxl-2 col-lg-6" data-select2-id="8">
                            <select
                                class="form-control select2 select2-hidden-accessible"
                                data-select2-id="1"
                                tabindex="-1"
                                aria-hidden="true"
                            >
                                <option data-select2-id="3">Status</option>
                                <option value="Active" data-select2-id="14">
                                    Active
                                </option>
                                <option value="New" data-select2-id="15">
                                    New
                                </option>
                                <option value="Close" data-select2-id="16">
                                    Close
                                </option>
                            </select>
                            <span
                                class="select2 select2-container select2-container--default select2-container--below"
                                dir="ltr"
                                data-select2-id="2"
                                style="width: 183.525px"
                            >
                                <span class="selection">
                                    <span
                                        class="select2-selection select2-selection--single"
                                        role="combobox"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        tabindex="0"
                                        aria-disabled="false"
                                        aria-labelledby="select2-nx4b-container"
                                    >
                                        <span
                                            class="select2-selection__rendered"
                                            id="select2-nx4b-container"
                                            role="textbox"
                                            aria-readonly="true"
                                            title="Status"
                                            >Status</span
                                        >
                                        <span
                                            class="select2-selection__arrow"
                                            role="presentation"
                                        >
                                            <b role="presentation"></b>
                                        </span>
                                    </span>
                                </span>
                                <span
                                    class="dropdown-wrapper"
                                    aria-hidden="true"
                                ></span>
                            </span>
                        </div>
                        <div class="col-xxl-2 col-lg-4" data-select2-id="18">
                            <select
                                class="form-control select2 select2-hidden-accessible"
                                data-select2-id="4"
                                tabindex="-1"
                                aria-hidden="true"
                            >
                                <option data-select2-id="6">Select Type</option>
                                <option value="1" data-select2-id="19">
                                    Full Time
                                </option>
                                <option value="2" data-select2-id="20">
                                    Part Time
                                </option>
                            </select>
                            <span
                                class="select2 select2-container select2-container--default select2-container--below"
                                dir="ltr"
                                data-select2-id="5"
                                style="width: 183.525px"
                            >
                                <span class="selection">
                                    <span
                                        class="select2-selection select2-selection--single"
                                        role="combobox"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        tabindex="0"
                                        aria-disabled="false"
                                        aria-labelledby="select2-r0tw-container"
                                    >
                                        <span
                                            class="select2-selection__rendered"
                                            id="select2-r0tw-container"
                                            role="textbox"
                                            aria-readonly="true"
                                            title="Select Type"
                                            >Select Type</span
                                        >
                                        <span
                                            class="select2-selection__arrow"
                                            role="presentation"
                                        >
                                            <b role="presentation"></b>
                                        </span>
                                    </span>
                                </span>
                                <span
                                    class="dropdown-wrapper"
                                    aria-hidden="true"
                                ></span>
                            </span>
                        </div>
                        <div class="col-xxl-2 col-lg-4">
                            <div id="datepicker1">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Select date"
                                    data-date-format="dd M, yyyy"
                                    data-date-autoclose="true"
                                    data-date-container="#datepicker1"
                                    data-provide="datepicker"
                                />
                            </div>
                            <!-- input-group -->
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
                    <Paginator :paginator="paginator" />    
                    <!--end row-->
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
</template>
