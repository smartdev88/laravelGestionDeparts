@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-md-6">
        <h5>{{ $voyages->count() }} {{ str_plural('Voyage', $voyages->count()) }}</h5>
        {{-- </div>
    <div class="col-md-6">
        <a href="{{ route('voyages.create') }}" class="btn btn-warning">
        <i class="fa fa-plus"></i> Nouveau Voyage</a>
    </div> --}}
</div>

@if( $voyages->isNotEmpty() )
<ul>
    <div id="example_wrapper" class="dataTables_wrapper">
        <div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example"
                    class="">
                    <option value="4">4</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select> entries</label></div>
        <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder=""
                    aria-controls="example"></label></div>
        <table id="myTable" class="display nowrap dataTable dtr-inline collapsed" style="width: 100%;" role="grid"
            aria-describedby="example_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        style="width: 118px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">
                        Ref</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 192px;"
                        aria-label="Position: activate to sort column ascending">Date</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 88px;"
                        aria-label="Office: activate to sort column ascending">Destination</th>
                    <th class="dt-body-right sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        style="width: 35px;" aria-label="Age: activate to sort column ascending">Price</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 80px;"
                        aria-label="Start date: activate to sort column ascending">Action</th>
                    <th class="dt-body-right sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        style="width: 0px; display: none;" aria-label="Salary: activate to sort column ascending">Salary
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($voyages as $voyage)
                <tr role="row" class="{{$loop->index % 2 == 0 ? 'odd' : 'even'}}">
                    <td tabindex="0" class="sorting_1" style="">ref</td>
                    <td>Start: {{$voyage->startDate->format('d/m/Y')}} End: {{$voyage->endDate->format('d/m/Y')}}</td>
                    <td>Tokyo</td>
                    <td class=" dt-body-right">{{$voyage->price}}</td>
                    <td>
                        <a href="{{ route('voyages.edit', $voyage) }}" class="btn btn-info">Edit</a>
                        <form onsubmit="return confirm('Etes vous sûr de vouloir supprimer');"
                            action="{{ route('voyages.destroy', $voyage) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Remove" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th rowspan="1" colspan="1">#REF</th>
                    <th rowspan="1" colspan="1">Date</th>
                    <th rowspan="1" colspan="1">Destination</th>
                    <th class="dt-body-right" rowspan="1" colspan="1">Price</th>
                    <th rowspan="1" colspan="1">Action</th>
                </tr>
            </tfoot>
        </table>
        <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
        <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a
                class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="-1"
                id="example_previous">Previous</a><span><a class="paginate_button current" aria-controls="example"
                    data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example" data-dt-idx="2"
                    tabindex="0">2</a><a class="paginate_button " aria-controls="example" data-dt-idx="3"
                    tabindex="0">3</a><a class="paginate_button " aria-controls="example" data-dt-idx="4"
                    tabindex="0">4</a><a class="paginate_button " aria-controls="example" data-dt-idx="5"
                    tabindex="0">5</a><a class="paginate_button " aria-controls="example" data-dt-idx="6"
                    tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example" data-dt-idx="7"
                tabindex="0" id="example_next">Next</a></div>
    </div>

</ul>
@else
<p>Aucun départ pour le moment.</p>
@endif

@endsection

@section('scripts.footer')

    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

@endsection

