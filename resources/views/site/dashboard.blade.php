@extends('layouts.dashboard')
@section('content')
<div class="row">
    <!-- order-card start -->
    <div class="col-md-6 col-xl-3">
        <div class="card bg-c-blue order-card">
            <div class="card-body">
                <h6 class="text-white">Orders Received</h6>
                <h2 class="text-right text-white"><i class="feather icon-shopping-cart float-left"></i><span>486</span></h2>
                <p class="m-b-0">Completed Orders<span class="float-right">351</span></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card bg-c-green order-card">
            <div class="card-body">
                <h6 class="text-white">Total Sales</h6>
                <h2 class="text-right text-white"><i class="feather icon-tag float-left"></i><span>1641</span></h2>
                <p class="m-b-0">This Month<span class="float-right">213</span></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card bg-c-yellow order-card">
            <div class="card-body">
                <h6 class="text-white">Revenue</h6>
                <h2 class="text-right text-white"><i class="feather icon-repeat float-left"></i><span>$42,562</span></h2>
                <p class="m-b-0">This Month<span class="float-right">$5,032</span></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card bg-c-red order-card">
            <div class="card-body">
                <h6 class="text-white">Total Profit</h6>
                <h2 class="text-right text-white"><i class="feather icon-award float-left"></i><span>$9,562</span></h2>
                <p class="m-b-0">This Month<span class="float-right">$542</span></p>
            </div>
        </div>
    </div>
    <!-- order-card end -->
    <!-- users visite start -->
    <div class="col-md-12 col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5>Unique Visitor</h5>
            </div>
            <div class="card-body pl-0 pb-0">
                <div id="unique-visitor-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xl-6">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body bg-patern">
                        <div class="row">
                            <div class="col-auto">
                                <span>Customers</span>
                            </div>
                            <div class="col text-right">
                                <h2 class="mb-0">826</h2>
                                <span class="text-c-green">8.2%<i class="feather icon-trending-up ml-1"></i></span>
                            </div>
                        </div>
                        <div id="customer-chart"></div>
                        <div class="row mt-3">
                            <div class="col">
                                <h3 class="m-0"><i class="fas fa-circle f-10 m-r-5 text-success"></i>674</h3>
                                <span class="ml-3">New</span>
                            </div>
                            <div class="col">
                                <h3 class="m-0"><i class="fas fa-circle text-primary f-10 m-r-5"></i>182</h3>
                                <span class="ml-3">Return</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-primary text-white">
                    <div class="card-body bg-patern-white">
                        <div class="row">
                            <div class="col-auto">
                                <span>Customers</span>
                            </div>
                            <div class="col text-right">
                                <h2 class="mb-0 text-white">826</h2>
                                <span class="text-white">8.2%<i class="feather icon-trending-up ml-1"></i></span>
                            </div>
                        </div>
                        <div id="customer-chart1"></div>
                        <div class="row mt-3">
                            <div class="col">
                                <h3 class="m-0 text-white"><i class="fas fa-circle f-10 m-r-5 text-success"></i>674</h3>
                                <span class="ml-3">New</span>
                            </div>
                            <div class="col">
                                <h3 class="m-0 text-white"><i class="fas fa-circle f-10 m-r-5 text-white"></i>182</h3>
                                <span class="ml-3">Return</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- users visite end -->


    <!-- social statustic start -->
    <div class="col-md-6 col-lg-4">
        <div class="card seo-card overflow-hidden">
            <div class="card-body seo-statustic">
                <i class="feather icon-save f-20 text-c-red"></i>
                <h5 class="mb-1">65%</h5>
                <p>Memory</p>
            </div>
            <div class="seo-chart">
                <div id="seo-card1"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="fa fa-envelope-open text-c-blue d-block f-40"></i>
                <h4 class="m-t-20"><span class="text-c-blue">8.62k</span> Subscribers</h4>
                <p class="m-b-20">Your main list is growing</p>
                <button class="btn btn-primary btn-sm btn-round">Manage List</button>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="fab fa-twitter text-c-green d-block f-40"></i>
                <h4 class="m-t-20"><span class="text-c-blgreenue">+40</span> Followers</h4>
                <p class="m-b-20">Your main list is growing</p>
                <button class="btn btn-success btn-sm btn-round">Check them out</button>
            </div>
        </div>
    </div>
    <!-- social statustic end -->
    <!-- account-section start -->
    <div class="col-lg-4 col-md-12">
        <div class="card overflow-hidden">
            <div class="card-body">
                <h6>Conversions</h6>
                <h4 class="m-0">0.85%<span class="text-c-blue ml-2"><i class="feather icon-arrow-up"></i>0.50%</span></h4>
                <span>Purchased</span>
            </div>
            <div id="coversions-chart1"></div>
        </div>
        <div class="card overflow-hidden">
            <div class="card-body">
                <h6>Conversions</h6>
                <h4 class="m-0">0.85%<span class="text-c-green ml-2"><i class="feather icon-arrow-up"></i>0.50%</span></h4>
                <span>Purchased</span>
            </div>
            <div id="coversions-chart2"></div>
        </div>
        <div class="card overflow-hidden">
            <div class="card-body">
                <h6>Conversions</h6>
                <h4 class="m-0">0.85%<span class="text-c-red ml-2"><i class="feather icon-arrow-up"></i>0.50%</span></h4>
                <span>Purchased</span>
            </div>
            <div id="coversions-chart4"></div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Activity Feed</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <ul class="feed-blog pl-0">
                    <li class="active-feed">
                        <div class="feed-user-img">
                            <img src="assets/images/user/avatar-4.jpg" class="img-radius " alt="User-Profile-Image">
                        </div>
                        <h6><span class="badge badge-danger">File</span> Eddie uploaded new files: <small class="text-muted">2 hours ago</small></h6>
                        <p class="m-b-15 m-t-15">hii <b> @everone</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <div class="row">
                            <div class="col-auto text-center">
                                <img src="assets/images/gallery-grid/img-grd-gal-1.jpg" alt="img" class="img-fluid wid-100">
                                <h6 class="m-t-15 m-b-0">Old Scooter</h6>
                                <p class="text-muted m-b-0"><small>PNG-100KB</small></p>
                            </div>
                            <div class="col-auto text-center">
                                <img src="assets/images/gallery-grid/img-grd-gal-2.jpg" alt="img" class="img-fluid wid-100">
                                <h6 class="m-t-15 m-b-0">Wall Art</h6>
                                <p class="text-muted m-b-0"><small>PNG-150KB</small></p>
                            </div>
                            <div class="col-auto text-center">
                                <img src="assets/images/gallery-grid/img-grd-gal-3.jpg" alt="img" class="img-fluid wid-100">
                                <h6 class="m-t-15 m-b-0">Microphone</h6>
                                <p class="text-muted m-b-0"><small>PNG-150KB</small></p>
                            </div>
                        </div>
                    </li>
                    <li class="diactive-feed">
                        <div class="feed-user-img">
                            <img src="assets/images/user/avatar-4.jpg" class="img-radius " alt="User-Profile-Image">
                        </div>
                        <h6><span class="badge badge-success">Task</span> Sarah marked the Pending Review: <span class="text-c-green"> Trash Can Icon Design</span><small class="text-muted"> 2 hours ago</small></h6>
                    </li>
                    <li class="diactive-feed">
                        <div class="feed-user-img">
                            <img src="assets/images/user/avatar-4.jpg" class="img-radius " alt="User-Profile-Image">
                        </div>
                        <h6><span class="badge badge-primary">comment</span> abc posted a task: <span class="text-c-green">Design a new Homepage</span> <small class="text-muted">6 hours ago</small></h6>
                        <p class="m-b-15 m-t-15">hii <b> @everone</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- account-section end -->
    <!-- Customer overview start -->
    <div class="col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Campaign monitor</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav nav-pills nav-fill mt-3 border-bottom pb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="feather icon-film m-r-5"></i> Entertainment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="feather icon-file-text m-r-5"></i> CMS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="feather icon-mail m-r-5"></i> Mail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-news-tab" data-toggle="pill" href="#pills-news" role="tab" aria-controls="pills-news" aria-selected="false"><i class="feather icon-monitor m-r-5"></i> Newslatter</a>
                    </li>
                </ul>
            </div>
            <div class="card-body p-0">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="table-responsive">
                            <div class="customer-scroll" style="height:362px;position:relative;">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th><span>Campaign date</span></th>
                                            <th><span>Click <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>Cost <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>CTR <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>ARPU <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>ECPI <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>ROI <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>Revenue <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>Conversions <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>8-11-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>485
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>10:55
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>33.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15-10-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>523
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>736
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>4:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-8-2017</td>
                                            <td>624
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>436
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>756
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,4%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9,45
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9:05
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 67%;" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8.63%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11-12-2017</td>
                                            <td>423
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 54%;" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>123
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>756
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,85
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7:45
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>33.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1-6-2015</td>
                                            <td>465
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>463
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>456
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>68,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 32%;" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8:45
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 71%;" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>39.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-11-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 43%;" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>485
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 69%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>10:55
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>33.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15-10-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>523
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>736
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>4:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="table-responsive">
                            <div class="customer-scroll1" style="height:362px;position:relative;">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th><span>Campaign date</span></th>
                                            <th><span>Click <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>Cost <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>CTR <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>ARPU <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>ECPI <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>ROI <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>Revenue <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>Conversions <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>8-11-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>485
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>10:55
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>33.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15-10-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>523
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>736
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>4:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-8-2017</td>
                                            <td>624
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>436
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>756
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,4%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9,45
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9:05
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 67%;" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8.63%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11-12-2017</td>
                                            <td>423
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 54%;" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>123
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>756
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,85
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7:45
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>33.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1-6-2015</td>
                                            <td>465
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>463
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>456
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>68,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 32%;" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8:45
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 71%;" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>39.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-11-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 43%;" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>485
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 69%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>10:55
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>33.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15-10-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>523
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>736
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>4:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="table-responsive">
                            <div class="customer-scroll2" style="height:362px;position:relative;">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th><span>Campaign date</span></th>
                                            <th><span>Click <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>Cost <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>CTR <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>ARPU <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>ECPI <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>ROI <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>Revenue <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>Conversions <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>8-11-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>485
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>10:55
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>33.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15-10-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>523
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>736
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>4:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-8-2017</td>
                                            <td>624
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>436
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>756
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,4%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9,45
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9:05
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 67%;" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8.63%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11-12-2017</td>
                                            <td>423
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 54%;" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>123
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>756
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,85
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7:45
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>33.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1-6-2015</td>
                                            <td>465
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>463
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>456
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>68,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 32%;" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8:45
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 71%;" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>39.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-11-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 43%;" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>485
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 69%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>10:55
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>33.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15-10-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>523
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>736
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>4:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
                        <div class="table-responsive">
                            <div class="customer-scroll3" style="height:362px;position:relative;">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th><span>Campaign date</span></th>
                                            <th><span>Click <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                            class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>Cost <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                            class="feather icon-help-circle f-16"></i></a></span>
                                            </th>
                                            <th><span>CTR <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                            class="feather icon-help-circle f-16"></i></a></span>
                                            </th>
                                            <th><span>ARPU <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
                                                            class="feather icon-help-circle f-16"></i></a></span>
                                            </th>
                                            <th><span>ECPI <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>ROI <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>Revenue <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                            <th><span>Conversions <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i class="feather icon-help-circle f-16"></i></a></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>8-11-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>485
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>10:55
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>33.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15-10-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>523
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>736
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>4:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-8-2017</td>
                                            <td>624
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>436
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>756
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,4%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9,45
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>9:05
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 67%;" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8.63%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11-12-2017</td>
                                            <td>423
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 54%;" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>123
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>756
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,85
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7:45
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>33.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1-6-2015</td>
                                            <td>465
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>463
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>456
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>68,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 32%;" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8:45
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 71%;" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>39.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8-11-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 43%;" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>485
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>769
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 69%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>45,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,7%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>8,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>10:55
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>33.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15-10-2016</td>
                                            <td>786
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>523
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>736
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>78,3%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>6,6%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>7,56
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>4:30
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>76.8%
                                                <div class="progress mt-1" style="height:4px;">
                                                    <div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Customer overview end -->
</div>
@endsection