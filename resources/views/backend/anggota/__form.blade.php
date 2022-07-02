@extends('backend.modal.index')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
               <label for="name">Nama</label>
               <input type="text" id="name" name="name" class="form-control" required>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="name">NIM</label>
               <input type="text" id="nim" name="nim" class="form-control" required>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="name">Prodi</label>
               <input type="text" name="majors" class="form-control" required>
            </div>
         </div>
         <div class="form-group">
            <label>Bidang</label>
            <select name="structure_id" id="structure" data-live-search="true" class="form-control struc selectpicker " required>

               <option value="" hidden>-- Pilih Bidang --</option>

               @foreach($data['structure'] as $item)
                  <option value="{{ $item->id }}">{{ $item->name }} - {{ $item->year }}</option>
               @endforeach
            </select>
         </div>
         <div class="form-group">
            <label>Jabatan</label>
            <select name="grade" id="grade" class="form-control grade selectpicker" required>

               <option value="" hidden>-- Select Status --</option>
               <option value="Koordinator">Koordinator</option>
               <option value="Staf">Staf</option>
            </select>
         </div>

         <div class="form-group">
            <div class="form-line">
               <label for="number">Angkatan</label>
               <input type="number" name="year" class="form-control">
            </div>
         </div>

         <div class="form-group">
            <div class="form-line">
               <label for="number">Alamat</label>
               <textarea id="address" name="address" class="form-control"></textarea>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="number">Foto</label>
               <input type="file" name="image" class="form-control">
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
