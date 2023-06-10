<form class="form"  id="module_form">
    <div class="modal-body py-10 px-lg-17">
        <!--begin::Scroll-->
        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Module Code</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="Module Code" id="module_code" name="module_code" value="" />
                <input type="hidden" id="id" name="id" class="form-control"/>
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Module Name</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="Module Name" id="module_name" name="module_name" value="" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Url</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="Url" id="url_slug" name="url_slug" value="" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
             <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Icon</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="icon" id="icon" name="icon" value="" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row g-9 mb-7">
                <!--begin::Col-->
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold mb-2">Module Group</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input class="form-control form-control-solid" placeholder="Module Group" id="module_group" name="module_group" value="" />
                    <!--end::Input-->
                </div>
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold mb-2">Display Order</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input class="form-control form-control-solid" placeholder="Display Order" id="display_order" name="display_order" value="" />
                    <!--end::Input-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 fv-row">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold mb-2">Is Active</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="rounded border p-2">
                        <div class="mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="active" name="is_active" checked="">
                                <label class="form-check-label" for="active">
                                    Active
                                </label>
                            </div>
                        </div>
                        <div class="mb-0">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="inactive" name="is_active" >
                                <label class="form-check-label" for="inactive">
                                    InActive
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--end::Input-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Billing toggle-->
            <div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_add_customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Module Actions Details
            <span class="ms-2 rotate-180">
                <i class="ki-duotone ki-down fs-3"></i>
            </span></div>
            <!--end::Billing toggle-->
            <!--begin::Billing form-->
            <div id="kt_modal_add_customer_billing_info" class="collapse show">
                <!--begin::Input group-->
                <div class="row g-9 mb-7">
                    <div class="col-md-4 fv-row">
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="is_enable"/>
                            <label class="form-check-label" for="flexSwitchDefault">
                                Is Enable
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 fv-row">
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="can_create"/>
                            <label class="form-check-label" for="can_create">
                                Can Create
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 fv-row">
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="can_update"/>
                            <label class="form-check-label" for="can_update">
                                Can Update
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row g-9 mb-7">
                    <div class="col-md-4 fv-row">
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="can_view"/>
                            <label class="form-check-label" for="can_view">
                                Can View
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 fv-row">
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="can_approve"/>
                            <label class="form-check-label" for="can_approve">
                                Can Approve
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 fv-row">
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" id="can_delete"/>
                            <label class="form-check-label" for="can_delete">
                                Can Delete
                            </label>
                        </div>
                    </div>
                </div>
                <!--end::Input group-->
                
            </div>
            <!--end::Billing form-->
        </div>
        <!--end::Scroll-->
    </div>
</form>