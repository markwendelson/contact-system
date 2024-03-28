@extends('layouts.app')

@push('extra_css')
<style>
    .pcoded[theme-layout=vertical][vertical-placement=left][vertical-nav-type=expanded][vertical-effect=shrink] .pcoded-content {
        margin-left:250px
    }
</style>
<link rel="stylesheet" href="{{ asset('css/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/table-datatable-jquery.css') }}" />
@endpush

@section('content')
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        @include('partials.nav')

        <div class="pcoded-main-container">
        <div class="pcoded-wrapper">

            @include('partials.sidebar')

          <div class="pcoded-content">
            <div class="page-header card">
              <div class="row align-items-end">
                <div class="col-lg-12">
                  <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                      <h5>Contact</h5>
                      <span>Displaying list of contact</span>
                      <a href="{{ route('contact.create') }}" class="btn btn-primary btn-new float-right"> New Contact + </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="pcoded-inner-content">
              <div class="main-body">
                <div class="page-wrapper">
                  <div class="page-body">
                    @if (\Session::has('success'))
                        <div class="alert alert-success icons-alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="icofont icofont-close-line-circled"></i>
                            </button>
                            <p>{{ \Session::get('success') }}</p>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h5>List of Contacts</h5>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('contact.index') }}">
                              <div class="form-group row">
                                <label class="col-form-label ml-3">Search</label>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control" name="search" id="search" placeholder="Enter search" value="{{ $search }}">
                                </div>
                                <button class="btn btn-primary btn-sm rounded-0 btn-search">Search</button>
                              </div>
                            </form>

                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @forelse ($contacts as $contact)
                                        <tr>
                                          <td>{{ $contact->name }}</td>
                                          <td>{{ $contact->company }}</td>
                                          <td>{{ $contact->email }}</td>
                                          <td>{{ $contact->phone }}</td>
                                          <td>
                                            <div>
                                                <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-success btn-sm rounded-0">View</a>
                                                <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-primary btn-sm rounded-0">Edit</a>
                                                <button class="btn btn-danger btn-sm rounded-0" onclick="deleteData({{ $contact->id }})">Delete</button>
                                            </div>
                                          </td>
                                        </tr>
                                  @empty
                                  <tr>
                                      <td colspan="5">There are no contact.</td>
                                  </tr>
                                @endforelse

                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {!! $contacts->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
@push('extra_scripts')

<script>

    function deleteData(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                axios.delete('contact/' + id)
                    .then((res) => {
                        Swal.fire(
                            'Deleted!',
                            'Contact has been deleted.',
                            'success'
                        ).then(() => {
                            window.location.href = "/contact"
                        })
                    })
            }
        })
    }

</script>
@endpush
