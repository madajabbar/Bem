@extends('admin.modal')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
                <label for="visi">visi</label>
                <textarea type="text" name="visi" id="visi" class="form-control"
                    placeholder="visi"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="misi">misi</label>
                <textarea type="text" name="misi" id="misi" class="form-control"
                    placeholder="misi"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="picture_visi">picture_visi</label>
                <input type="file" name="picture_visi" id="picture_visi" class="form-control" accept="image/*">
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="picture_misi">picture_misi</label>
                <input type="file" name="picture_misi" id="picture_misi" class="form-control" accept="image/*">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Close</span>
            </button>
            <button type="button" id="saveBtn" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Save</span>
            </button>
        </div>
    </form>
@endsection
