@extends('backend/partials/header')
@section('content')
    <section class="dashboard_secs acc_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                   <div class="d-flex justify-content-between align-items-baseline">
                       <div class="head_title d-flex">
                           <img src="{{asset('backend/assets/img/square.png')}}" alt="">
                           <h3>All Subscription</h3>
                       </div>
                       <div class="btn_div">
                           <a href="javascript:;" class="gradient_btn d-block">Create Subscription</a>
                       </div>
                   </div>
                </div>

                <div class="col-md-12 ">
                    <div class="black_sec">
                        <div class="head_title">
                            <!-- <h3>Add Details</h3> -->
                            <div class="pricing_form">
                                <table class="table table-borderless card-header-tabs" id="subscriptionTable">
                                    <thead>
                                    <tr>
                                        <th>S#no</th>
                                        <th> Name</th>
                                        <th>Feature</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Dynamic rows will be inserted here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <script>
        $(document).ready(function() {
            function loadSubscriptions() {
                $.ajax({
                    url: "{{ route('subscriptions.index') }}",
                    method: "GET",
                    success: function(data) {
                        let rows = '';
                        $.each(data, function(index, subscription) {
                            rows += '<tr>';
                            rows += '<td>' + (index+1) + '</td>';
                            rows += '<td>' + subscription.name + '</td>';
                            rows += '<td>' + subscription.features.join(', ') + '</td>';
                            rows += '<td>$' + subscription.price + '</td>';
                            rows += '<td>';
                            rows += '<a href="javascript:;" class="edit" data-id="' + subscription.id + '"><i class="fa-solid fa-pencil"></i></a>';
                            rows += '<a href="javascript:;" class="delete" data-id="' + subscription.id + '"><i class="fa-solid fa-trash"></i></a>';
                            rows += '</td>';
                            rows += '</tr>';
                        });
                        $('#subscriptionTable tbody').html(rows);
                    },
                    error: function() {
                        alert('Failed to load subscriptions.');
                    }
                });
            }

            // Load subscriptions when the page is ready
            loadSubscriptions();
        });
    </script>
@endsection
