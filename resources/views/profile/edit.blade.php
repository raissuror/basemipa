@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
<div class="bg-white border rounded">
  <div class="row no-gutters">
    <div class="col-lg-12 col-xl-12">
      <div class="profile-content-right py-5">
        <div class="card text-center widget-profile px-0 border-0">
          <div class="card-img mx-auto rounded-circle">
            <img src="assets/img/user/u6.jpg" alt="user image">
          </div>
          <div class="card-body">
            <h4 class="py-2 text-dark">Albrecht Straub</h4>
            <p>Albrecht.straub@gmail.com</p>
            <a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a>
          </div>
        </div>
        <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                aria-controls="settings" aria-selected="false">Settings</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline"
              aria-selected="true">Timeline</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
              aria-selected="false">Profile</a>
          </li>
        </ul>
        <div class="tab-content px-3 px-xl-5" id="myTabContent">
          <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
            <div class="media mt-5 profile-timeline-media">
              <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                <img src="assets/img/user/u3.jpg" alt="Generic placeholder image">
              </div>
              <div class="media-body">
                <h6 class="mt-0 text-dark">Larissa Gebhardt</h6>
                <span>Designer</span>
                <span class="float-right">5 mins ago</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore
                  magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.
                </p>
                <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                  <img src="assets/img/products/pa1.jpg" alt="Product">
                </div>
                <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                  <img src="assets/img/products/pa2.jpg" alt="Product">
                </div>
                <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                  <img src="assets/img/products/pa3.jpg" alt="Product">
                </div>
              </div>
            </div>
            <div class="media mt-5 profile-timeline-media">
              <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                <img src="assets/img/user/u4.jpg" alt="Generic placeholder image">
              </div>
              <div class="media-body">
                <h6 class="mt-0 text-dark">Walter Reuter</h6>
                <span>Designer</span>
                <span class="float-right">2 hrs ago</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore
                  magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.
                </p>

              </div>
            </div>
            <div class="media mt-5 profile-timeline-media">
              <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                <img src="assets/img/user/u7.jpg" alt="Generic placeholder image">
              </div>
              <div class="media-body">
                <h6 class="mt-0 text-dark">Albrecht Straub</h6>
                <span>Designer</span>
                <span class="float-right">5 days ago</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore
                  magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.
                </p>
                <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                  <img src="assets/img/products/pa4.jpg" alt="Product">
                </div>
              </div>
            </div>
            <div class="media mt-5 profile-timeline-media">
              <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                <img src="assets/img/user/u8.jpg" alt="Generic placeholder image">
              </div>
              <div class="media-body">
                <h6 class="mt-0 text-dark">Selena Wagner</h6>
                <span>Designer</span>
                <span class="float-right">Mar 05, 2018</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore
                  magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.
                </p>
                <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                  <img src="assets/img/products/pa5.jpg" alt="Product">
                </div>
                <div class="d-inline-block rounded overflow-hidden mt-4 mr-0 mr-lg-4">
                  <img src="assets/img/products/pa6.jpg" alt="Product">
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="mt-5">
              <div class="row">
                <div class="col-xl-4">
                  <div class="media widget-media p-4 bg-white border">
                    <div class="icon rounded-circle mr-4 bg-primary">
                      <i class="mdi mdi-account-outline text-white "></i>
                    </div>
                    <div class="media-body align-self-center">
                      <h4 class="text-primary mb-2">5300</h4>
                      <p>New Users</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="media widget-media p-4 bg-white border">
                    <div class="icon rounded-circle bg-warning mr-4">
                      <i class="mdi mdi-cart-outline text-white "></i>
                    </div>
                    <div class="media-body align-self-center">
                      <h4 class="text-primary mb-2">1953</h4>
                      <p>Order Placed</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="media widget-media p-4 bg-white border">
                    <div class="icon rounded-circle mr-4 bg-danger">
                      <i class="mdi mdi-cart-outline text-white "></i>
                    </div>
                    <div class="media-body align-self-center">
                      <h4 class="text-primary mb-2">1450</h4>
                      <p>Total Sales</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-6">
                  <!-- Notification Table -->
                  <div class="card card-default" data-scroll-height="550">
                    <div class="card-header justify-content-between ">
                      <h2>Latest Notifications</h2>
                      <div>
                        <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                        <div class="dropdown show d-inline-block widget-dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-notification"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-notification">
                            <li class="dropdown-item"><a href="#">Action</a></li>
                            <li class="dropdown-item"><a href="#">Another action</a></li>
                            <li class="dropdown-item"><a href="#">Something else here</a></li>
                          </ul>
                        </div>
                      </div>

                    </div>
                    <div class="card-body slim-scroll">
                      <div class="media pb-3 align-items-center justify-content-between">
                        <div
                          class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                          <i class="mdi mdi-cart-outline font-size-20"></i>
                        </div>
                        <div class="media-body pr-3 ">
                          <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Order</a>
                          <p>Selena has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10
                          AM</span>
                      </div>

                      <div class="media py-3 align-items-center justify-content-between">
                        <div
                          class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                          <i class="mdi mdi-email-outline font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                          <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
                          <p>Phileine has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9 AM</span>
                      </div>


                      <div class="media py-3 align-items-center justify-content-between">
                        <div
                          class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                          <i class="mdi mdi-stack-exchange font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                          <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
                          <p>Emma has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10
                          AM</span>
                      </div>

                      <div class="media py-3 align-items-center justify-content-between">
                        <div
                          class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                          <i class="mdi mdi-cart-outline font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                          <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New order</a>
                          <p>Ryan has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10
                          AM</span>
                      </div>

                      <div class="media py-3 align-items-center justify-content-between">
                        <div
                          class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                          <i class="mdi mdi-calendar-blank font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                          <a class="mt-0 mb-1 font-size-15 text-dark" href="">Comapny Meetup</a>
                          <p>Phileine has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10
                          AM</span>
                      </div>

                      <div class="media py-3 align-items-center justify-content-between">
                        <div
                          class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                          <i class="mdi mdi-stack-exchange font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                          <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
                          <p>Emma has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10
                          AM</span>
                      </div>

                      <div class="media py-3 align-items-center justify-content-between">
                        <div
                          class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                          <i class="mdi mdi-email-outline font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                          <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
                          <p>Phileine has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9 AM</span>
                      </div>

                    </div>
                    <div class="mt-3"></div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <!-- To Do list -->
                  <div class="card card-default todo-table" id="todo" data-scroll-height="550">
                    <div class="card-header justify-content-between">
                      <h2>To Do List</h2>
                      <a class="btn btn-primary btn-pill" id="add-task" href="#" role="button"> Add task </a>
                    </div>
                    <div class="card-body slim-scroll">
                      <div class="todo-single-item d-none" id="todo-input">
                        <form>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Todo" autofocus>
                          </div>
                        </form>
                      </div>
                      <div class="todo-list" id="todo-list">
                        <div class="todo-single-item d-flex flex-row justify-content-between finished">
                          <i class="mdi"></i>
                          <span>Finish Dashboard UI Kit update</span>
                          <span class="badge badge-primary">Finished</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between current">
                          <i class="mdi"></i>
                          <span>Create new prototype for the landing page</span>
                          <span class="badge badge-primary">Today</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                          <i class="mdi"></i>
                          <span> Add new Google Analytics code to all main files </span>
                          <span class="badge badge-danger">Yesterday</span>
                        </div>

                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                          <i class="mdi"></i>
                          <span>Update parallax scroll on team page</span>
                          <span class="badge badge-success">Dec 15, 2018</span>
                        </div>

                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                          <i class="mdi"></i>
                          <span>Update parallax scroll on team page</span>
                          <span class="badge badge-success">Dec 15, 2018</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                          <i class="mdi"></i>
                          <span>Create online customer list book</span>
                          <span class="badge badge-success">Dec 15, 2018</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                          <i class="mdi"></i>
                          <span>Lorem ipsum dolor sit amet, consectetur.</span>
                          <span class="badge badge-success">Dec 15, 2018</span>
                        </div>

                        <div class="todo-single-item d-flex flex-row justify-content-between mb-1">
                          <i class="mdi"></i>
                          <span>Update parallax scroll on team page</span>
                          <span class="badge badge-success">Dec 15, 2018</span>
                        </div>
                      </div>
                    </div>
                    <div class="mt-3"></div>
                  </div>
                </div>
                <div class="col-12">
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>Recent Orders</h2>
                      <div class="date-range-report ">
                        <span></span>
                      </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                          <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th class="d-none d-xl-table-cell">Units</th>
                            <th class="d-none d-xl-table-cell">Order Date</th>
                            <th class="d-none d-xl-table-cell">Order Cost</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>24541</td>
                            <td>
                              <a class="text-dark" href=""> Coach Swagger</a>
                            </td>
                            <td class="d-none d-xl-table-cell">1 Unit</td>
                            <td class="d-none d-xl-table-cell">Oct 20, 2018</td>
                            <td class="d-none d-xl-table-cell">$230</td>
                            <td>
                              <span class="badge badge-success">Completed</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                  id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>24541</td>
                            <td>
                              <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
                            </td>
                            <td class="d-none d-xl-table-cell">2 Units</td>
                            <td class="d-none d-xl-table-cell">Nov 15, 2018</td>
                            <td class="d-none d-xl-table-cell">$550</td>
                            <td>
                              <span class="badge badge-warning">Delayed</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                  id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order2">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>24541</td>
                            <td>
                              <a class="text-dark" href=""> Hat Black Suits</a>
                            </td>
                            <td class="d-none d-xl-table-cell">1 Unit</td>
                            <td class="d-none d-xl-table-cell">Nov 18, 2018</td>
                            <td class="d-none d-xl-table-cell">$325</td>
                            <td>
                              <span class="badge badge-warning">On Hold</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                  id="dropdown-recent-order3" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order3">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>24541</td>
                            <td>
                              <a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
                            </td>
                            <td class="d-none d-xl-table-cell">5 Units</td>
                            <td class="d-none d-xl-table-cell">Dec 13, 2018</td>
                            <td class="d-none d-xl-table-cell">$200</td>
                            <td>
                              <span class="badge badge-success">Completed</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                  id="dropdown-recent-order4" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order4">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>24541</td>
                            <td>
                              <a class="text-dark" href=""> Speed 500 Ignite</a>
                            </td>
                            <td class="d-none d-xl-table-cell">1 Unit</td>
                            <td class="d-none d-xl-table-cell">Dec 23, 2018</td>
                            <td class="d-none d-xl-table-cell">$150</td>
                            <td>
                              <span class="badge badge-danger">Cancelled</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                  id="dropdown-recent-order5" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order5">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
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
          <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div class="mt-5">
              <form>
                <div class="form-group row mb-6">
                  <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
                  <div class="col-sm-8 col-lg-10">
                    <div class="custom-file mb-1">
                      <input type="file" class="custom-file-input" id="coverImage" required>
                      <label class="custom-file-label" for="coverImage">Choose file...</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="firstName">First name</label>
                      <input type="text" class="form-control" id="firstName" value="Albrecht">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="lastName">Last name</label>
                      <input type="text" class="form-control" id="lastName" value="Straub">
                    </div>
                  </div>
                </div>

                <div class="form-group mb-4">
                  <label for="userName">User name</label>
                  <input type="text" class="form-control" id="userName" value="Straub">
                  <span class="d-block mt-1">Accusamus nobis at omnis consequuntur culpa tempore saepe animi.</span>
                </div>

                <div class="form-group mb-4">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" value="albrecht.straub@gmail.com">
                </div>

                <div class="form-group mb-4">
                  <label for="oldPassword">Old password</label>
                  <input type="password" class="form-control" id="oldPassword">
                </div>

                <div class="form-group mb-4">
                  <label for="newPassword">New password</label>
                  <input type="password" class="form-control" id="newPassword">
                </div>

                <div class="form-group mb-4">
                  <label for="conPassword">Confirm password</label>
                  <input type="password" class="form-control" id="conPassword">
                </div>

                <div class="d-flex justify-content-end mt-5">
                  <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Edit Profile') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="pl-lg-4">  
                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                <label type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Name') }}" value="">{{ old('name', auth()->user()->name) }}</label>
                            </div>
                            <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-npusernamem">{{ __('NPM') }}</label>
                                <label type="text" name="npm" id="input-npm" class="form-control form-control-alternative{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="{{ __('NPM') }}" value="">{{ old('username', auth()->user()->username) }}</label>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('himpunan') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-himpunan">{{ __('Himpunan') }}</label>
                                <label type="text" name="himpunan" id="input-himpunan" class="form-control form-control-alternative{{ $errors->has('himpunan') ? ' is-invalid' : '' }}" placeholder="{{ __('Himpunan') }}" value="">{{ old('himpunan', auth()->user()->himpunan) }}</label>

                                @if ($errors->has('himpunan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('himpunan') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('placeofbirth') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-placeofbirth">{{ __('Tempat Lahir') }}</label>
                                <label type="text" name="placeofbirth" id="input-placeofbirth" class="form-control form-control-alternative{{ $errors->has('placeofbirth') ? ' is-invalid' : '' }}" placeholder="{{ __('Tempat Lahir') }}" value="">{{ old('placeofbirth', auth()->user()->placeofbirth) }}</label>

                                @if ($errors->has('placeofbirth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('placeofbirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('dateofbirth') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-dateofbirth">{{ __('Tanggal Lahir') }}</label>
                                <label type="text" name="dateofbirth" id="input-dateofbirth" class="form-control form-control-alternative{{ $errors->has('dateofbirth') ? ' is-invalid' : '' }}" placeholder="{{ __('Tanggal Lahir') }}" value="">{{ old('dateofbirth', auth()->user()->dateofbirth) }}</label>

                                @if ($errors->has('dateofbirth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dateofbirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-gender">{{ __('Jenis Kelamin') }}</label>
                                <label type="text" name="gender" id="input-gender" class="form-control form-control-alternative{{ $errors->has('gender') ? ' is-invalid' : '' }}" placeholder="{{ __('Jenis Kelamin') }}" value="">{{ old('gender', auth()->user()->gender) }}</label>

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                            @csrf
                            @method('post')

                            <h6 class="heading-small text-muted mb-4">{{ __('Edit User information') }}</h6>
                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('E-mail') }}</label>
                                    <input type="text" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('phone_number') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-phone_number">{{ __('No Ponsel Seluler') }}</label>
                                    <input type="text" name="phone_number" id="input-phone_number" class="form-control form-control-alternative{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" placeholder="{{ __('No Ponsel Seluler') }}" value="{{ old('phone_number', auth()->user()->phone_number) }}" required>

                                    @if ($errors->has('phone_number'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('phone_number_guardians') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-phone_number_guardians">{{ __('No Ponsel Seluler Wali') }}</label>
                                    <input type="text" name="phone_number_guardians" id="input-phone_number_guardians" class="form-control form-control-alternative{{ $errors->has('phone_number_guardians') ? ' is-invalid' : '' }}" placeholder="{{ __('No Ponsel Seluler Wali') }}" value="{{ old('phone_number_guardians', auth()->user()->phone_number_guardians) }}" required>

                                    @if ($errors->has('phone_number_guardians'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone_number_guardians') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('religion') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-religion">{{ __('Agama') }}</label>
                                    <input type="text" name="religion" id="input-religion" class="form-control form-control-alternative{{ $errors->has('religion') ? ' is-invalid' : '' }}" placeholder="{{ __('Agama') }}" value="{{ old('religion', auth()->user()->religion) }}" required>

                                    @if ($errors->has('religion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('religion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">{{ __('Alamat Rumah') }}</label>
                                    <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('Alamat Rumah') }}" value="{{ old('address', auth()->user()->address) }}" required>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('address_2') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address_2">{{ __('Alamat Kosan') }}</label>
                                    <input type="text" name="address_2" id="input-address_2" class="form-control form-control-alternative{{ $errors->has('address_2') ? ' is-invalid' : '' }}" placeholder="{{ __('Alamat Kos') }}" value="{{ old('address_2', auth()->user()->address_2) }}" required>

                                    @if ($errors->has('address_2'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address_2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('tk') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tk">{{ __('Taman Kanak-kanak') }}</label>
                                    <input type="text" name="tk" id="input-tk" class="form-control form-control-alternative{{ $errors->has('tk') ? ' is-invalid' : '' }}" placeholder="{{ __('Taman Kanak-kanak') }}" value="{{ old('tk', auth()->user()->tk) }}" required>

                                    @if ($errors->has('tk'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tk') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('sd') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-sd">{{ __('Sekolah Dasar') }}</label>
                                    <input type="text" name="sd" id="input-sd" class="form-control form-control-alternative{{ $errors->has('sd') ? ' is-invalid' : '' }}" placeholder="{{ __('Sekolah Dasar') }}" value="{{ old('sd', auth()->user()->sd) }}" required>

                                    @if ($errors->has('sd'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sd') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('smp') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-smp">{{ __('Sekolah Menengah Pertama') }}</label>
                                    <input type="text" name="smp" id="input-smp" class="form-control form-control-alternative{{ $errors->has('smp') ? ' is-invalid' : '' }}" placeholder="{{ __('Sekolah Menengah Pertama') }}" value="{{ old('smp', auth()->user()->smp) }}" required>

                                    @if ($errors->has('smp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('smp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('sma') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-sma">{{ __('Sekolah Menengah Atas') }}</label>
                                    <input type="text" name="sma" id="input-sma" class="form-control form-control-alternative{{ $errors->has('sma') ? ' is-invalid' : '' }}" placeholder="{{ __('Sekolah Menengah Atas') }}" value="{{ old('sma', auth()->user()->sma) }}" required>

                                    @if ($errors->has('sma'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sma') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('organization') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-organisasi">{{ __('Riwayat Organisasi') }}</label>
                                    <textarea name="organization" id="input-organization" class="form-control form-control-alternative{{ $errors->has('organization') ? ' is-invalid' : '' }}" placeholder="{{ __('Riwayat Organisasi') }}" style="height:8rem;" required>
                                    {{ auth()->user()->organization }}  
                                    </textarea>
                                    @if ($errors->has('organization'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('organization') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('committee') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-organisasi">{{ __('Riwayat Organisasi') }}</label>
                                    <textarea name="committee" id="input-committee" class="form-control form-control-alternative{{ $errors->has('committee') ? ' is-invalid' : '' }}" placeholder="{{ __('Riwayat Organisasi') }}" style="height:8rem;" required>
                                    {!! auth()->user()->committee !!}
                                    </textarea>
                                    @if ($errors->has('committee'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('committee') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('development') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-organisasi">{{ __('Riwayat Organisasi') }}</label>
                                    <textarea name="development" id="input-development" class="form-control form-control-alternative{{ $errors->has('development') ? ' is-invalid' : '' }}" placeholder="{{ __('Riwayat Organisasi') }}" style="height:8rem;" required>
                                    {!! auth()->user()->development !!}
                                    </textarea>
                                    @if ($errors->has('development'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('development') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('achievement') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-organisasi">{{ __('Riwayat Organisasi') }}</label>
                                    <textarea name="achievement" id="input-achievement" class="form-control form-control-alternative{{ $errors->has('achievement') ? ' is-invalid' : '' }}" placeholder="{{ __('Riwayat Organisasi') }}" style="height:8rem;" required>
                                    {!! auth()->user()->achievement !!}
                                    </textarea>
                                    @if ($errors->has('achievement'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('achievement') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />
                        <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                            @csrf
                            @method('post')

                            <h6 class="heading-small text-muted mb-4">{{ __('Password') }}</h6>

                            @if (session('password_status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('password_status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-current-password">{{ __('Current Password') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>
                                    
                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('New Password') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>
                                    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm New Password') }}" value="" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Change password') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
        @include('layouts.footers.auth')
    </div>
@endsection