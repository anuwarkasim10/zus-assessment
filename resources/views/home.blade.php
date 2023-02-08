@extends('layouts.contentLayoutMaster')


@section('page-style')

<link rel="stylesheet" href="{{ asset(mix('css/home.css')) }}" />

@endsection

@section('title', 'Home ')

@section('content')
<div class="row justify-content-center">
    <div id="loading"></div>
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Visitors
                    </h3>
                    <!-- <a href="javascript:window.top.location.reload(true)">Reload test</a>
                        <button id="loadbasic">basic load</button> -->

                </div>
                <div class="card-body">
                    <p>Current landing site is: <strong>
                            <h4 class="landing_label"></h4>
                        </strong></p>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="date_filter">Filter Date:</label>
                            <div class="select">
                                <select id="date_filter" class="date-filter" name="date_filter">
                                    <option value="0" selected>Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">2 days ago</option>
                                    <hr>
                                    <option value="6">Last 7 days</option>
                                    <option value="13">Last 14 days</option>
                                    <option value="29">Last 30 days</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    {{-- <div class="col-md-2">
                                <label for="page_filter">Filter by Page:</label>
                                <div class="select-page">
                                    <select id="page_filter" class="page-filter" name="page_filter">
                                        <option value="home" selected>Home</option>
                                        <option value="exhibition/">Masterclass</option>
                                        <option value="booth1/">Virtual Marketplace</option>
                                        <option value="3">...</option>
                                    </select>
                                </div>
                            </div> --}}
                    <div class="col-md-1"></div>
                    {{-- <div class="col-md-2">
                                <label for="source_filter">Filter by Sources:</label>
                                <div class="select-source">
                                    <select id="source_filter" class="source-filter" name="source_filter">
                                        <option value="Links" selected>Links</option>
                                        <option value="Advertising">Advertising</option>
                                        <option value="Direct">Direct</option>
                                        <option value="Social+media">Social media</option>
                                        <option value="Searches">Searches</option>
                                    </select>
                                </div>
                            </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-0">
                            <div class="card-body">
                                <h4>Summary</h4>
                                <table id="summary" class="summary-table table-secondary">
                                    <tbody id="summary-content">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Traffic Sources</h4>
                                    <table id="traffic" class="traffic-table table-secondary">
                                        <tbody id="traffic-content">

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col px-2">
                        <table id="example" class="rwd-table">
                            <tbody id="table-content">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-2 d-flex justify-content-between">
                    <div class="col px-2">
                        <h4 class="next">
                            <a class="next-page">Next page >></a>
                        </h4>
                    </div>
                    {{-- <h4 class="next">
                                <a>Export</a>
                            </h4> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Visitor Action Modal -->
<div class="modal fade" id="actionsModal" tabindex="-1" aria-labelledby="actionsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="actionsModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>

    @endsection

    @section('page-script')

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        var variables = <?= json_encode($variables); ?>;
        var base = "{{ config('app.href') }}"

    </script>
    <script src="{{ asset('js/scripts/pages/home.js') }}"></script>

    <script>

    </script>
    @endsection
