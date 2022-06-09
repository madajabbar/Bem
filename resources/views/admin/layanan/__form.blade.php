@extends('admin.modal')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" class="form-control"
                    placeholder="nama">
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="email">email</label>
                <input type="email" name="email" id="email" class="form-control"
                    placeholder="example@example.com">
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <label for="isi">isi</label>
                <textarea type="text" name="isi" id="isi" class="form-control"
                    placeholder="Isi balasan"></textarea>
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
