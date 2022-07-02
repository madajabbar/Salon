@extends('backend.modal.index')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
                <label for="title">judul</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="SISKOM CUP 2022">
            </div>
            <div class="form-line">
                <label for="content">isi</label>
                <textarea class="content form-control" id="content" cols="30" rows="10" name="body"></textarea>
                {{-- <textarea id="isi" name="isi" id="" cols="30" rows="10"></textarea> --}}
            </div>

            <div class="form-line">
                <label for="tag_id">tag</label>
                <select class="form-control" name="tag_id" id="tag_id">
                    @foreach ($data['tag'] as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-line">
                <label for="category_id">Kategori</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($data['category'] as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-line">
                <label for="gambar">Gambar</label>
                 <input type="file" id="gambar" name="gambar" class="form-control" accept="image/png, image/gif, image/jpeg">
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
