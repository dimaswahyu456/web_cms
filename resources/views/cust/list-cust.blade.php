@extends('layouts.master')
@section('title')
@lang('translation.Datatables')
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<h4 class="mb-0">List Customer</h4>
<div class="row">
    <div class="col-12">
        <div class="card">


        </div>
    </div>

    <<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-success" href="{{ route('cust.create') }}"> Create Customer</a>

                </div>
            </div>
        </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($res_cust as $item)
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $item->kode}}</td>
                                <td>{{ $item->nama}}</td>
                                <td>{{ $item->alamat}}</td>
                                <td>{{ $item->kota}}</td>

                                <td>
                                    <a class="btn btn-info" href="{{ route('cust.show',$item->id) }}"><i class="uil uil-eye"></i></a>
                                    <a href="{{ route('cust.edit',$item->id) }}" class="btn btn-xs btn-info"><i class="uil-pen"></i></a>
                                    <a href="{{ route('cust.destroy',$item->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>

                                    </form>
                                </td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection