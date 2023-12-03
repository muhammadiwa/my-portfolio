@extends('backend.layouts.app')

@section('content')

<div class="col-xxl-9 col-xl-8">
    <div class="inner-contents">
        <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30 flex-wrap">
            <div class="left-part">
                <h2 class="text-dark">Home</h2>
            </div>
        </div>
        
        <div class="card border-0 p-5">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="dataTable" class="display text-center">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="form-check-input" id="checkbox1" value=""></th>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@push('js')
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.home.index') }}',
            columns: [
                { data: 'checkbox', name: 'checkbox' },
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'title', name: 'title' },
                { data: 'description', name: 'description' },
                { data: 'image', name: 'image' },
                { data: 'action', name: 'action' },
            ],
        });
    });
</script>
@endpush