@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/all.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.dataTable td {
            padding: 15px 8px;
        }

        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }

    </style>
@endsection
@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>{{$data['title']}}</h3>
</div>
    <div class="page-content">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                              <label for="">Menu</label>
                              <input type="text" placeholder="Menu" class="form-control form-control-sm" name="name"  id="name" value="">
                              <font style="color:red"> {{ $errors->has('name') ?  $errors->first('name') : '' }} </font>
                          </div>
                          <div class="col-md-3">
                              <label for="">Harga</label>
                              <input type="number" placeholder="Harga" class="form-control form-control-sm" name="harga"  id="harga" value="">
                              <font style="color:red"> {{ $errors->has('harga') ?  $errors->first('harga') : '' }} </font>
                          </div>
                          <div class="col-md-3">
                              <label for="">Diskon</label>
                              <input type="number" placeholder="diskon" class="form-control form-control-sm" name="diskon"  id="diskon" value="">
                              <font style="color:red"> {{ $errors->has('diskon') ?  $errors->first('diskon') : '' }} </font>
                          </div>
                          <div class="col-md-3" style="margin-top:26px;">
                              <button id="addMore" class="btn btn-success btn-sm">Add More </button>
                          </div>
                       </div>
                       <div class="row" style="margin-top:26px;">
                      <div class="col-md-5">


                    <form action="{{route('kasir.index')}}" method="post">
                      @csrf
                      <table class="table table-sm table-bordered" style="display: none;">
                      <thead>
                          <tr>
                              <th>Menu</th>
                              <th>Harga</th>
                              <th>Diskon</th>
                              <th>Action</th>
                          </tr>
                      </thead>

                      <tbody id="addRow" class="addRow">

                      </tbody>
                      <tbody>
                        <tr>
                          <td colspan="1" class="text-right">
                              <strong>Pegawai</strong>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="1" class="text-right">
                              <strong>Total:</strong>
                          </td>
                          <td>
                              <input type="number" id="estimated_ammount" class="estimated_ammount" value="0" readonly>
                          </td>

                        <td>
                            <select name="pegawai_id" id="pegawai_id[]" class="form-control">
                            @foreach ($data['pegawai'] as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                            </select>
                        </td>
                        </tr>
                      </tbody>

                      </table>
                     <button type="submit" class="btn btn-success btn-sm">Submit</button>
                    </form>

                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>

    <script id="document-template" type="text/x-handlebars-template">
        <tr class="delete_add_more_item" id="delete_add_more_item">

            <td>
              <input type="text" name="name[]" value="@{{ name }}">
            </td>
            <td>
              <input type="number" class="cost" name="harga[]" value="@{{ harga }}">
            </td>
            <td>
              <input type="number" class="cost" name="diskon[]" value="@{{ diskon }}">
            </td>

            <td>
             <i class="removeaddmore" style="cursor:pointer;color:red;">Remove</i>
            </td>

        </tr>
       </script>

      <script type="text/javascript">

       $(document).on('click','#addMore',function(){

           $('.table').show();

           var name = $("#name").val();
           var harga = $("#harga").val();
           var diskon = -$("#diskon").val();
           var pegawai_id = $("#pegawai_id").val();
           var source = $("#document-template").html();
           var template = Handlebars.compile(source);

           var data = {
              name: name,
              harga: harga,
              diskon: diskon,
              pegawai_id: pegawai_id,
           }

           var html = template(data);
           $("#addRow").append(html)

           total_ammount_price();
       });

        $(document).on('click','.removeaddmore',function(event){
          $(this).closest('.delete_add_more_item').remove();
          total_ammount_price();
        });

        function total_ammount_price() {
          var sum = 0;
          $('.cost').each(function(){
            var value = $(this).val();
            if(value.length != 0)
            {
              sum += parseFloat(value);
            }
          });
          $('#estimated_ammount').val(sum);
        }

      </script>
@endsection
