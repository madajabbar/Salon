@extends('backend.modal.index')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
               <label for="title">Judul</label>
               <input type="text" name="title" class="form-control" required>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="structure_id">Divisi</label>
               <select name="structure_id" id="structure" data-live-search="true" class="form-control types selectpicker " required>
                  <option value="" hidden>-- Select Category --</option>
                  @foreach($data['structure'] as $item)
                  <option value="{{ $item->id  }}">{{ $item->name  }}</option>
                  @endforeach
               </select>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="image">Gambar</label>
               <input type="file" multiple name="image" class="form-control" required>
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
