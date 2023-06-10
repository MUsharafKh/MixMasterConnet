<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="{{$settings['new_btn_traget_model_id']}}">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen p-9">
        <div class="modal-content" id="modal_content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Modal title</h5>

                <!--begin::Close-->
                <div id="kt_modal_close" class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                @include('admin-backend.modules.master-files.modules._form')
            </div>

            <div class="modal-footer">
                <button type="button" id="btnClose" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
                <button type="button" id="btnUpdate" class="btn btn-success">
                    <span class="indicator-label">Update</span>
                </button>
            </div>
        </div>
    </div>
</div>