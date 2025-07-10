@extends('layouts.template')

@section('title')
    Data Kelas
@endsection

@section('nama_hal')
    Kelas
@endsection

@section('active2')
	active
@endsection

@section('table')
<div>
		
	<div>
  		<h2>Data Kelas <small>Admin</small></h2>
			
   		 	<div class="clearfix">
        	  <div class="pull-right tableTools-container">
			
            	<div class="dt-buttons btn-overlap btn-group">
                <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table" data-original-title="" title="">
                    <span><i class="fa fa-search bigger-110 blue"></i>
                         <span class="hidden">Show/hide columns</span>
                    </span>
                </a>
				
                <a class="dt-button buttons-copy buttons-html5 btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-copy bigger-110 pink"></i> <span class="hidden">Copy to clipboard</span></span></a><a class="dt-button buttons-csv buttons-html5 btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-database bigger-110 orange"></i> <span class="hidden">Export to CSV</span></span></a><a class="dt-button buttons-print btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-print bigger-110 grey"></i> <span class="hidden">Print</span></span></a>
			</div>
			
		</div>
		
    </div><br>
	<a href="#"> <button type="button" class="btn btn-primary pull-right ti-plus">Tambah Data</button></a><br>
	{{-- isi table --}}
    <div>
        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
            <div class="row">
                <div class="col-xs-6">
                    <div class="dataTables_length" id="dynamic-table_length">
                        <label>Display <select name="dynamic-table_length" aria-controls="dynamic-table" class="form-control input-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> records</label>
                    </div>
                </div>
                {{-- <div class="col-6-right">
                    <div id="dynamic-table_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dynamic-table">
                        </label>
                    </div>
                </div> --}}
            </div>
            <table id="static-table" class="table table-striped table-bordered table-hover ">
                <thead class="text-center">
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Kelas</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Clicks</th>
                    
                </thead>

                <tbody>
                    <tr>

                        <td>1</td>
                        <td>VI-A</td>

                        <td class="hidden-480">
                            <span class="label label-sm label-warning">Not full</span>
                        </td>

                        <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="#">
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>

                                <a class="green" href="#">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                                <a class="red" href="#">
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                            </div>

                            <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                <span class="blue">
                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                <span class="green">
                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                <span class="red">
                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>

                        <td>2</td>
                        <td>VI-C</td>

                        <td class="hidden-480">
                            <span class="label label-sm label-success">Full</span>
                        </td>

                        <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="#">
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>

                                <a class="green" href="#">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                                <a class="red" href="#">
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                            </div>

                            <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                <span class="blue">
                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                <span class="green">
                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                <span class="red">
                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>3</td>
                        <td>VI-D</td>

                        <td class="hidden-480">
                            <span class="label label-sm label-warning">Not full</span>
                        </td>

                        <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="#">
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>

                                <a class="green" href="#">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                                <a class="red" href="#">
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                            </div>

                            <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                <span class="blue">
                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                <span class="green">
                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                <span class="red">
                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>4</td>
                        <td>VI-F</td>

                        <td class="hidden-480">
                            <span class="label label-sm label-warning">Not full</span>
                        </td>

                        <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="#">
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>

                                <a class="green" href="#">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                                <a class="red" href="#">
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                            </div>

                            <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                <span class="blue">
                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                <span class="green">
                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                <span class="red">
                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>5</td>
                        <td>VI-D</td>

                        <td class="hidden-480">
                            <span class="label label-sm label-success">Full</span>
                        </td>

                        <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="#">
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>

                                <a class="green" href="#">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                                <a class="red" href="#">
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                            </div>

                            <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                <span class="blue">
                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                <span class="green">
                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                <span class="red">
                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            
				<div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
					<div class="dataTables_info pull-right" id="datatable-buttons_info" role="status"  	aria-live="polite">Showing 1 to 10 of 57 entries
					</div>
					<ul class="pagination">
						<li class="paginate_button previous disabled" id="datatable-buttons_previous">
							<a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0">Previous</a>
						</li>
						<li class="paginate_button active">
							<a href="#" aria-controls="datatable-buttons" data-dt-idx="1" tabindex="0">1</a>
						</li>
						<li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="2" tabindex="0">2</a>
						</li>
						<li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="3" tabindex="0">3</a>
						</li>
						<li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="4" tabindex="0">4</a>
						</li>
						<li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-buttons" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="datatable-buttons_next"><a href="#" aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0">Next</a>
						</li>
					</ul>
					
				</div>
				
			</div>
        </div>
	</div>
</div>

@endsection