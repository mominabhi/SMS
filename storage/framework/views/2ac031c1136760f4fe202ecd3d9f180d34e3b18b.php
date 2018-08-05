<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="prtm-content">
        <div class="row prtm-card-wrapper">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 half-col-lg-md">
                <div class="prtm-card prtm-card-box graph bg-primary pad-all-md mrgn-b-lg">
                    <div class="prtm-card-info">
                        <div class="mrgn-b-lg clearfix">
                            <div class="pull-left"><span class="show">Today's Sales</span>
                                <span>85% Of Target</span></div>
                            <div class="pull-right text-right"><span class="font-counter">$<span
                                            class="count-item" data-count="12000">0</span></span>
                            </div>
                        </div>
                        <div class="prtm-card-progress">
                            <div class="progress progress-xs-height">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                     aria-valuemin="0" aria-valuemax="100" data-width="85%"><span
                                            class="sr-only">50% Complete (secondary)</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 half-col-lg-md">
                <div class="prtm-card prtm-card-box order bg-success pad-all-md mrgn-b-lg">
                    <div class="prtm-card-info">
                        <div class="mrgn-b-lg clearfix">
                            <div class="pull-left"><span class="show">New Orders</span>
                                <span>90% Of Target</span></div>
                            <div class="pull-right text-right"><span class="font-counter"><span
                                            class="count-item" data-count="350">0</span></span>
                            </div>
                        </div>
                        <div class="prtm-card-progress">
                            <div class="progress progress-xs-height">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                     aria-valuemin="0" aria-valuemax="100" data-width="90%"><span
                                            class="sr-only">50% Complete (secondary)</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 half-col-lg-md">
                <div class="prtm-card prtm-card-box invoices bg-info pad-all-md mrgn-b-lg">
                    <div class="prtm-card-info">
                        <div class="mrgn-b-lg clearfix">
                            <div class="pull-left"><span class="show">New Customers</span> <span>70% Of Yesterday</span>
                            </div>
                            <div class="pull-right text-right"><span class="font-counter"><span
                                            class="count-item" data-count="700">0</span></span>
                            </div>
                        </div>
                        <div class="prtm-card-progress">
                            <div class="progress progress-xs-height">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                     aria-valuemin="0" aria-valuemax="100" data-width="70%"><span
                                            class="sr-only">8% Complete (secondary)</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 half-col-lg-md">
                <div class="prtm-card prtm-card-box tickets bg-secondary pad-all-md mrgn-b-lg">
                    <div class="prtm-card-info">
                        <div class="mrgn-b-lg clearfix">
                            <div class="pull-left"><span class="show">Open Tickets</span> <span>4% From the Yesterday</span>
                            </div>
                            <div class="pull-right text-right"><span class="font-counter"><span
                                            class="count-item" data-count="35">0</span></span>
                            </div>
                        </div>
                        <div class="prtm-card-progress">
                            <div class="progress progress-xs-height">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                     aria-valuemin="0" aria-valuemax="100" data-width="10%"><span
                                            class="sr-only">80% Complete (secondary)</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                <div class="prtm-block">
                    <div class="prtm-block-title mrgn-b-lg">
                        <div class="caption">
                            <h3>Site Visits</h3></div>
                        <div class="contextual-link">
                            <div class="dropdown"><a href="javascript:;" class="mrgn-l-xs more-btn"
                                                     data-toggle="dropdown" data-hover="dropdown"
                                                     data-close-others="true" aria-expanded="true">more<i
                                            class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-icon pull-right">
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-eye"></i> <span
                                                    class="mrgn-l-sm">View</span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-pencil"></i> <span
                                                    class="mrgn-l-sm">Edit </span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-trash-o"></i> <span
                                                    class="mrgn-l-sm">Delete</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prtm-block-content">
                        <div class="d-area-chart chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                <div class="prtm-block">
                    <div class="prtm-block-title mrgn-b-lg">
                        <div class="caption">
                            <h3>Revenue</h3></div>
                        <div class="contextual-link">
                            <div class="dropdown"><a href="javascript:;" class="mrgn-l-xs more-btn"
                                                     data-toggle="dropdown" data-hover="dropdown"
                                                     data-close-others="true" aria-expanded="true">more<i
                                            class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-icon pull-right">
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-eye"></i> <span
                                                    class="mrgn-l-sm">View</span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-pencil"></i> <span
                                                    class="mrgn-l-sm">Edit </span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-trash-o"></i> <span
                                                    class="mrgn-l-sm">Delete</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prtm-block-content">
                        <div class="d-area-points-chart chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="prtm-block">
                    <div class="prtm-block-title mrgn-b-lg">
                        <div class="caption">
                            <h3>Chat History</h3></div>
                        <div class="contextual-link">
                            <div class="dropdown display-ib"><a href="javascript:;" class="mrgn-l-xs"
                                                                data-toggle="dropdown" data-hover="dropdown"
                                                                data-close-others="true" aria-expanded="true"><i
                                            class="fa fa-cog fa-lg base-dark"></i></a>
                                <ul class="dropdown-menu dropdown-arrow dropdown-menu-right">
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-eye"></i> <span
                                                    class="mrgn-l-sm">View</span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-pencil"></i> <span
                                                    class="mrgn-l-sm">Edit </span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-trash-o"></i> <span
                                                    class="mrgn-l-sm">Delete</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prtm-block-content">
                        <div class="prtm-chat-wrap">
                            <div class="slimscrollbar" style="height: 428px;" data-always-visible="1"
                                 data-rail-visible="0">
                                <div class="chat-wrap-list">
                                    <div class="clearfix">
                                        <div class="col-lg-custom-3"><img class="img-responsive img-circle"
                                                                          src="<?php echo e(asset('public/copy_assets/')); ?>/img/blog-post-author.jpg"
                                                                          width="64" height="64"
                                                                          alt="User Image"></div>
                                        <div class="col-lg-custom-9">
                                            <h6 class="text-primary">Devy Finn</h6>

                                            <div class="prtm-chat-content prtm-msg-block">
                                                <p>Wow! This is something exactly I needed. You guys did a great
                                                    work.</p>
                                            </div>
                                            <div class="post-meta"><span>3 Min ago</span> <a
                                                        href="javascript:;"><i
                                                            class="fa fa-reply text-success mrgn-l-xs"
                                                            aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="clearfix right-side">
                                        <div class="col-lg-custom-3"><img class="img-responsive img-circle"
                                                                          src="<?php echo e(asset('public/copy_assets/')); ?>/img/register-user-3.jpg"
                                                                          width="64" height="64"
                                                                          alt="User Image"></div>
                                        <div class="col-lg-custom-9">
                                            <h6 class="text-primary">Harry Snooka</h6>

                                            <div class="prtm-chat-content prtm-msg-block">
                                                <p>Thank you :) We are always here to help you. Our customer
                                                    care service is 24X7. You may reach us anytime.</p>
                                            </div>
                                            <div class="post-meta"><span>45 min ago</span> <a
                                                        href="javascript:;"><i
                                                            class="fa fa-reply text-success mrgn-l-xs"
                                                            aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="col-lg-custom-3"><img class="img-responsive img-circle"
                                                                          src="<?php echo e(asset('public/copy_assets/')); ?>/img/register-user-3.jpg"
                                                                          width="64" height="64"
                                                                          alt="User Image"></div>
                                        <div class="col-lg-custom-9">
                                            <h6 class="text-primary">Jaime Garner</h6>

                                            <div class="prtm-chat-content prtm-msg-block">
                                                <p>I am impressed with your immediate help. I got my work done
                                                    efficiently. </p>
                                            </div>
                                            <div class="post-meta"><span>1 hours ago</span> <a
                                                        href="javascript:;"><i
                                                            class="fa fa-reply text-success mrgn-l-xs"
                                                            aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="clearfix right-side">
                                        <div class="col-lg-custom-3"><img class="img-responsive img-circle"
                                                                          src="<?php echo e(asset('public/copy_assets/')); ?>/img/register-user-4.jpg"
                                                                          width="64" height="64"
                                                                          alt="User Image"></div>
                                        <div class="col-lg-custom-9">
                                            <h6 class="text-primary">Vic Gannis</h6>

                                            <div class="prtm-chat-content prtm-msg-block">
                                                <p> You can find the date time picker and notification & alerts
                                                    under "Components" menu. It is really very easy to use
                                                    them. </p>
                                            </div>
                                            <div class="post-meta"><span>7 hours ago</span> <a
                                                        href="javascript:;"><i
                                                            class="fa fa-reply text-success mrgn-l-xs"
                                                            aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="col-lg-custom-3"><img class="img-responsive img-circle"
                                                                          src="<?php echo e(asset('public/copy_assets/')); ?>/img/register-user-2.jpg"
                                                                          width="64" height="64"
                                                                          alt="User Image"></div>
                                        <div class="col-lg-custom-9">
                                            <h6 class="text-primary">Eally Punto</h6>

                                            <div class="prtm-chat-content prtm-msg-block">
                                                <p>Hey please tell me where can I find date time picker and
                                                    notifications & alerts in it.</p>
                                            </div>
                                            <div class="post-meta"><span>13 min ago</span> <a
                                                        href="javascript:;"><i
                                                            class="fa fa-reply text-success mrgn-l-xs"
                                                            aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="clearfix right-side">
                                        <div class="col-lg-custom-3"><img class="img-responsive img-circle"
                                                                          src="<?php echo e(asset('public/copy_assets/')); ?>/img/histroy-user-2.png"
                                                                          width="64" height="64"
                                                                          alt="User Image"></div>
                                        <div class="col-lg-custom-9">
                                            <h6 class="text-primary">Gonny Duke</h6>

                                            <div class="prtm-chat-content prtm-msg-block">
                                                <p>I love the charts and animations. This theme has super cool
                                                    stuff to use.</p>
                                            </div>
                                            <div class="post-meta"><span>3 hours ago</span> <a
                                                        href="javascript:;"><i
                                                            class="fa fa-reply text-success mrgn-l-xs"
                                                            aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="send-msg-wrapper">
                                <form class="send-msg-form" action="javascript:;" method="post">
                                    <div class="clearfix">
                                                <textarea class="form-control msg-box"
                                                          placeholder="Enter your text"></textarea>
                                        <input class="send-msg-btn btn btn-primary" type="submit"
                                               value="submit"></div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="prtm-block">
                    <div class="prtm-block-title mrgn-b-lg">
                        <div class="caption">
                            <h3>New Users</h3></div>
                        <div class="contextual-link"><span class="badge badge-primary">16 New Users</span>

                            <div class="dropdown display-ib"><a href="javascript:;" class="mrgn-l-xs"
                                                                data-toggle="dropdown" data-hover="dropdown"
                                                                data-close-others="true" aria-expanded="true"><i
                                            class="fa fa-cog fa-lg base-dark"></i></a>
                                <ul class="dropdown-menu dropdown-arrow dropdown-menu-right">
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-eye"></i> <span
                                                    class="mrgn-l-sm">View</span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-pencil"></i> <span
                                                    class="mrgn-l-sm">Edit </span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-trash-o"></i> <span
                                                    class="mrgn-l-sm">Delete</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prtm-block-content">
                        <div class="row prtm-new-user-list mrgn-b-md">
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                <div class="feature-box-thumb"><img src="<?php echo e(asset('public/copy_assets/')); ?>/img/register-user-1.jpg"
                                                                    alt="user's avtar"
                                                                    class="img-responsive width-full"
                                                                    width="100" height="100"/></div>
                                <div class="feature-box-info"><span class="base-dark show fw-normal">Gavy</span>
                                    <span>Usa</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                <div class="feature-box-thumb"><img src="<?php echo e(asset('public/copy_assets/')); ?>/img/register-user-2.jpg"
                                                                    alt="user's avtar"
                                                                    class="img-responsive width-full"
                                                                    width="100" height="100"/></div>
                                <div class="feature-box-info"><span
                                            class="base-dark show fw-normal">Nethi</span> <span>Japan</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                <div class="feature-box-thumb"><img src="<?php echo e(asset('public/copy_assets/')); ?>/img/register-user-3.jpg"
                                                                    alt="user's avtar"
                                                                    class="img-responsive width-full"
                                                                    width="100" height="100"/></div>
                                <div class="feature-box-info"><span class="base-dark show fw-normal">Ruby</span>
                                    <span>Rome</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                <div class="feature-box-thumb"><img src="<?php echo e(asset('public/copy_assets/')); ?>/img/register-user-4.jpg"
                                                                    alt="user's avtar"
                                                                    class="img-responsive width-full"
                                                                    width="100" height="100"/></div>
                                <div class="feature-box-info"><span class="base-dark show fw-normal">John</span>
                                    <span>UK</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                <div class="feature-box-thumb"><img src="<?php echo e(asset('public/copy_assets/')); ?>/img/user-1.jpg"
                                                                    alt="user's avtar"
                                                                    class="img-responsive width-full"
                                                                    width="100" height="100"/></div>
                                <div class="feature-box-info"><span
                                            class="base-dark show fw-normal">Nancy</span> <span>USA</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                <div class="feature-box-thumb"><img src="<?php echo e(asset('public/copy_assets/')); ?>/img/user-2.jpg"
                                                                    alt="user's avtar"
                                                                    class="img-responsive width-full"
                                                                    width="100" height="100"/></div>
                                <div class="feature-box-info"><span
                                            class="base-dark show fw-normal">Phill</span> <span>Canada</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                <div class="feature-box-thumb"><img src="<?php echo e(asset('public/copy_assets/')); ?>/img/dami-user.png"
                                                                    alt="user's avtar"
                                                                    class="img-responsive width-full"
                                                                    width="100" height="100"/></div>
                                <div class="feature-box-info"><span
                                            class="base-dark show fw-normal">Garry</span> <span>Rome</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                <div class="feature-box-thumb"><img src="<?php echo e(asset('public/copy_assets/')); ?>/img/user-4.jpg"
                                                                    alt="user's avtar"
                                                                    class="img-responsive width-full"
                                                                    width="100" height="100"/></div>
                                <div class="feature-box-info"><span class="base-dark show fw-normal">Hema</span>
                                    <span>India</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                <div class="feature-box-thumb"><img src="<?php echo e(asset('public/copy_assets/')); ?>/img/user-5.jpg"
                                                                    alt="user's avtar"
                                                                    class="img-responsive width-full"
                                                                    width="100" height="100"/></div>
                                <div class="feature-box-info"><span
                                            class="base-dark show fw-normal">Brook</span> <span>London</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                <div class="feature-box-thumb"><img src="<?php echo e(asset('public/copy_assets/')); ?>/img/user-9.jpg"
                                                                    alt="user's avtar"
                                                                    class="img-responsive width-full"
                                                                    width="100" height="100"/></div>
                                <div class="feature-box-info"><span
                                            class="base-dark show fw-normal">Harby</span> <span>USA</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                <div class="feature-box-thumb"><img src="<?php echo e(asset('public/copy_assets/')); ?>/img/user-7.jpg"
                                                                    alt="user's avtar"
                                                                    class="img-responsive width-full"
                                                                    width="100" height="100"/></div>
                                <div class="feature-box-info"><span
                                            class="base-dark show fw-normal">Grick</span> <span>USA</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                                <div class="feature-box-thumb"><img src="<?php echo e(asset('public/copy_assets/')); ?>/img/dami-user.png"
                                                                    alt="user's avtar"
                                                                    class="img-responsive width-full"
                                                                    width="100" height="100"/></div>
                                <div class="feature-box-info"><span
                                            class="base-dark show fw-normal">Nathaniel</span> <span>India</span>
                                </div>
                            </div>
                        </div>
                        <div><a href="javascript:;" class="text-center btn-block">View all</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="prtm-block">
                    <div class="prtm-block-title mrgn-b-lg">
                        <div class="caption">
                            <h3>weather</h3></div>
                        <div class="contextual-link">
                            <div class="dropdown display-ib"><a href="javascript:;" class="mrgn-l-xs"
                                                                data-toggle="dropdown" data-hover="dropdown"
                                                                data-close-others="true" aria-expanded="true"><i
                                            class="fa fa-cog fa-lg base-dark"></i></a>
                                <ul class="dropdown-menu dropdown-arrow dropdown-menu-right">
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-eye"></i> <span
                                                    class="mrgn-l-sm">View</span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-pencil"></i> <span
                                                    class="mrgn-l-sm">Edit </span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-trash-o"></i> <span
                                                    class="mrgn-l-sm">Delete</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prtm-block-content">
                        <div class="prtm-wheather-widget text-center">
                            <h2 class="fw-normal base-dark fw-light" id="date">&nbsp;</h2>

                            <div class="bg-inverse city-active">
                                <h3 class="fw-light" id="city">&nbsp;</h3></div>
                            <h3 id="today-temp" class="fw-normal base-dark mrgn-b-md text-capitalize">
                                &nbsp;</h3>

                            <div class="wheather-view">
                                <div class="wheather-view" id="today-icon">
                                    <canvas class="weather-icon pad-t-md" width="150" height="150"
                                            data-color="#758494"></canvas>
                                </div>
                            </div>
                            <div class="clearfix mrgn-b-xs">
                                <div class="pull-left temp-status"><img class="img-responsive display-ib"
                                                                        src="<?php echo e(asset('public/copy_assets/')); ?>/img/bottom-down.png"
                                                                        width="26" height="49" alt="arrow down">
                                            <span id="min-temp" class="temp-value base-dark"><i
                                                        class="fa fa-circle text-success pull-right" aria-hidden="true"></i></span>
                                </div>
                                <div class="pull-right temp-status"><img class="img-responsive display-ib"
                                                                         src="<?php echo e(asset('public/copy_assets/')); ?>/img/bottom-up.png"
                                                                         width="26" height="49"
                                                                         alt="arrow down"> <span id="max-temp"
                                                                                                 class="temp-value base-dark"><i
                                                class="fa fa-circle base-secondary pull-right"
                                                aria-hidden="true"></i></span></div>
                            </div>
                            <div class="bg-inverse wheather-list-wrap clearfix">
                                <div class="feature-box-list col-xs-3 col-sm-3 col-md-3 col-lg-3 pad-all-none">
                                    <div class="square-50">
                                        <canvas class="weather-icon pad-t-xs" width="40" height="40"></canvas>
                                    </div>
                                    <span class="show gray">Now</span></div>
                                <div class="feature-box-list col-xs-3 col-sm-3 col-md-3 col-lg-3 pad-all-none">
                                    <div class="square-50">
                                        <canvas class="weather-icon pad-t-xs" width="40" height="40"></canvas>
                                    </div>
                                    <span class="show gray">Morning</span></div>
                                <div class="feature-box-list col-xs-3 col-sm-3 col-md-3 col-lg-3 pad-all-none">
                                    <div class="square-50">
                                        <canvas class="weather-icon pad-t-xs" width="40" height="40"></canvas>
                                    </div>
                                    <span class="show gray">Evening</span></div>
                                <div class="feature-box-list col-xs-3 col-sm-3 col-md-3 col-lg-3 pad-all-none">
                                    <div class="square-50">
                                        <canvas class="weather-icon" width="40" height="40"></canvas>
                                    </div>
                                    <span class="show gray">Night</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 full-col-lg-md">
                <div class="prtm-block overflow-wrapper">
                    <div class="prtm-block-title mrgn-b-sm">
                        <div class="caption">
                            <h3>Visitor Origin</h3></div>
                        <div class="contextual-link">
                            <div class="dropdown display-ib"><a href="javascript:;" class="mrgn-l-xs"
                                                                data-toggle="dropdown" data-hover="dropdown"
                                                                data-close-others="true" aria-expanded="true"><i
                                            class="fa fa-cog fa-lg base-dark"></i></a>
                                <ul class="dropdown-menu dropdown-arrow dropdown-menu-right">
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-eye"></i> <span
                                                    class="mrgn-l-sm">View</span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-pencil"></i> <span
                                                    class="mrgn-l-sm">Edit </span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-trash-o"></i> <span
                                                    class="mrgn-l-sm">Delete</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prtm-block-content overflow-pad">
                        <div class="row">
                            <div class="col-md-8 pad-all-none">
                                <div class="embed-responsive-item">
                                    <div class="world-map-markers vector"></div>
                                </div>
                            </div>
                            <div class="col-md-4 pad-all-none">
                                <div class="visitor-map-content">
                                    <h6 class="text-uppercase">Continent</h6>
                                    <ul class="list-unstyled progress-list">
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6"><span>Asia</span></div>
                                                <div class="col-sm-6 col-md-6"><span
                                                            class="pull-right">60%</span></div>
                                            </div>
                                            <div class="progress progress-sm-height progress-rounded">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                     aria-valuemin="0" aria-valuemax="100" data-width="60%">
                                                    <span class="sr-only">90% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6"><span>Europe</span></div>
                                                <div class="col-sm-6 col-md-6"><span
                                                            class="pull-right">25%</span></div>
                                            </div>
                                            <div class="progress progress-sm-height progress-rounded">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="25"
                                                     aria-valuemin="0" aria-valuemax="100" data-width="25%">
                                                    <span class="sr-only">80% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6"><span>Africa</span></div>
                                                <div class="col-sm-6 col-md-6"><span
                                                            class="pull-right">5%</span></div>
                                            </div>
                                            <div class="progress progress-sm-height progress-rounded">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="5"
                                                     aria-valuemin="0" aria-valuemax="100" data-width="5%"><span
                                                            class="sr-only">5% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6"><span>South America</span></div>
                                                <div class="col-sm-6 col-md-6"><span
                                                            class="pull-right">10%</span></div>
                                            </div>
                                            <div class="progress progress-sm-height progress-rounded">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="10"
                                                     aria-valuemin="0" aria-valuemax="100" data-width="10%">
                                                    <span class="sr-only">10% Complete</span></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 half-col-lg-md">
                <div class="prtm-card-box bg-inverse pad-all-lg mrgn-b-lg">
                    <div class="prtm-block-title mrgn-b-lg">
                        <div class="caption">
                            <h3 class="text-capitalize base-reverse">Email statistics</h3></div>
                        <div class="contextual-link">
                            <div class="dropdown display-ib"><a href="javascript:;" class="mrgn-l-xs"
                                                                data-toggle="dropdown" data-hover="dropdown"
                                                                data-close-others="true" aria-expanded="true"><i
                                            class="fa fa-cog fa-lg base-reverse"></i></a>
                                <ul class="dropdown-menu dropdown-arrow dropdown-menu-right">
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-eye"></i> <span
                                                    class="mrgn-l-sm">View</span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-pencil"></i> <span
                                                    class="mrgn-l-sm">Edit </span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-trash-o"></i> <span
                                                    class="mrgn-l-sm">Delete</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prtm-block-content">
                        <div id="dashboard3-email" class="email-map" style="height:325px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 half-col-lg-md">
                <div class="prtm-block mrgn-b-lg">
                    <div class="prtm-block-title mrgn-b-lg">
                        <div class="caption">
                            <h3 class="text-capitalize">User Agent</h3></div>
                        <div class="contextual-link">
                            <div class="dropdown display-ib"><a href="javascript:;" class="mrgn-l-xs"
                                                                data-toggle="dropdown" data-hover="dropdown"
                                                                data-close-others="true" aria-expanded="true"><i
                                            class="fa fa-cog fa-lg base-dark"></i></a>
                                <ul class="dropdown-menu dropdown-arrow dropdown-menu-right">
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-eye"></i> <span
                                                    class="mrgn-l-sm">View</span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-pencil"></i> <span
                                                    class="mrgn-l-sm">Edit </span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-trash-o"></i> <span
                                                    class="mrgn-l-sm">Delete</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prtm-block-content">
                        <div class="user-agent">
                            <div class="agent-list">
                                <ul class="list-unstyled">
                                    <li class="mrgn-b-lg clearfix">
                                        <div class="pull-left"><i class="fa fa-safari fa-lg"
                                                                  aria-hidden="true"></i> <span>safari</span>
                                        </div>
                                        <div class="pull-right"><span>40%</span></div>
                                    </li>
                                    <li class="mrgn-b-lg clearfix">
                                        <div class="pull-left"><i class="fa fa-chrome fa-lg"
                                                                  aria-hidden="true"></i> <span>chrome</span>
                                        </div>
                                        <div class="pull-right">50%</div>
                                    </li>
                                    <li class="mrgn-b-lg clearfix">
                                        <div class="pull-left"><i class="fa fa-internet-explorer fa-lg"
                                                                  aria-hidden="true"></i> <span>IE</span></div>
                                        <div class="pull-right">75%</div>
                                    </li>
                                    <li class="mrgn-b-lg clearfix">
                                        <div class="pull-left"><i class="fa fa-firefox fa-lg"
                                                                  aria-hidden="true"></i> <span>firefox</span>
                                        </div>
                                        <div class="pull-right">80%</div>
                                    </li>
                                    <li class="mrgn-b-lg clearfix">
                                        <div class="pull-left"><i class="fa fa-opera fa-lg"
                                                                  aria-hidden="true"></i> <span
                                                    class="bws-name">opera</span></div>
                                        <div class="pull-right">30%</div>
                                    </li>
                                </ul>
                                <div class="bg-info pad-all-sm base-reverse-all">
                                    <ul class="list-inline list-summery">
                                        <li class=""><span><i class="fa fa-apple fa-lg" aria-hidden="true"></i></span>
                                            <span>40%</span></li>
                                        <li class=""><span><i class="fa fa-android fa-lg"
                                                              aria-hidden="true"></i></span> <span>80%</span>
                                        </li>
                                        <li class=""><span><i class="fa fa-windows fa-lg"
                                                              aria-hidden="true"></i></span> <span>90%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="prtm-block">
                    <div class="prtm-block-title">
                        <div class="caption">
                            <h3>Customer Support</h3></div>
                        <div class="contextual-link">
                            <div class="dropdown display-ib"><a href="javascript:;" class="mrgn-l-xs"
                                                                data-toggle="dropdown" data-hover="dropdown"
                                                                data-close-others="true" aria-expanded="true"><i
                                            class="fa fa-cog fa-lg base-dark"></i></a>
                                <ul class="dropdown-menu dropdown-arrow dropdown-menu-right">
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-eye"></i> <span
                                                    class="mrgn-l-sm">View</span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-pencil"></i> <span
                                                    class="mrgn-l-sm">Edit </span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-trash-o"></i> <span
                                                    class="mrgn-l-sm">Delete</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prtm-block-content">
                        <div class="slimscrollbar" style="height: 520px;" data-always-visible="1"
                             data-rail-visible="0">
                            <div class="prtm-customer-support">
                                <div class="prtm-customer-list">
                                    <div class="row mrgn-b-xs">
                                        <div class="col-xs-7 col-sm-3 col-md-6 col-lg-8">
                                            <div class="pull-left mrgn-r-sm"><img
                                                        class="img-responsive display-ib img-circle"
                                                        src="<?php echo e(asset('public/copy_assets/')); ?>/img/register-user-1.jpg" width="64" height="64"
                                                        alt="User Photo"></div>
                                            <div class="pull-left">
                                                <h6 class="text-primary">Tina Denver</h6>

                                                <div class="post-meta"><span>3 hours ago</span></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5 col-sm-9 col-md-6 col-lg-4"><span
                                                    class="text-right text-warning show"><i
                                                        class="fa fa-dot-circle-o"></i> Pending</span></div>
                                    </div>
                                    <p>Thanks for the chartlist. There are awesome designs and very user
                                        friendly.</p>
                                </div>
                                <div class="prtm-customer-list">
                                    <div class="row mrgn-b-xs">
                                        <div class="col-xs-7 col-sm-3 col-md-6 col-lg-8">
                                            <div class="pull-left mrgn-r-sm"><img
                                                        class="img-responsive display-ib img-circle"
                                                        src="<?php echo e(asset('public/copy_assets/')); ?>/img/register-user-2.jpg" width="64" height="64"
                                                        alt="User Photo"></div>
                                            <div class="pull-left">
                                                <h6 class="text-primary">Gera Pattinson</h6>

                                                <div class="post-meta"><span>3 hours ago</span></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5 col-sm-9 col-md-6 col-lg-4"><span
                                                    class="text-right text-success show"><i
                                                        class="fa fa-dot-circle-o"></i> Open</span></div>
                                    </div>
                                    <p>User profile that you are providing is great. </p>
                                </div>
                                <div class="prtm-customer-list">
                                    <div class="row mrgn-b-xs">
                                        <div class="col-xs-7 col-sm-3 col-md-6 col-lg-8">
                                            <div class="pull-left mrgn-r-sm"><img
                                                        class="img-responsive display-ib img-circle"
                                                        src="<?php echo e(asset('public/copy_assets/')); ?>/img/blog-post-author.jpg" width="64" height="64"
                                                        alt="User Photo"></div>
                                            <div class="pull-left">
                                                <h6 class="text-primary">Susan Wood</h6>

                                                <div class="post-meta"><span>56 Min ago</span></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5 col-sm-9 col-md-6 col-lg-4"><span
                                                    class="text-right text-warning show"><i
                                                        class="fa fa-dot-circle-o"></i> Pending</span></div>
                                    </div>
                                    <p>Having plenty of options is really cool. I can choose what suits to my
                                        work.</p>
                                </div>
                                <div class="prtm-customer-list">
                                    <div class="row mrgn-b-xs">
                                        <div class="col-xs-7 col-sm-3 col-md-6 col-lg-8">
                                            <div class="pull-left mrgn-r-sm"><img
                                                        class="img-responsive display-ib img-circle"
                                                        src="<?php echo e(asset('public/copy_assets/')); ?>/img/user-10.jpg" width="64" height="64"
                                                        alt="User Photo"></div>
                                            <div class="pull-left">
                                                <h6 class="text-primary">Shady Hugh</h6>

                                                <div class="post-meta"><span>1 hours ago</span></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5 col-sm-9 col-md-6 col-lg-4"><span
                                                    class="text-right text-success show"><i
                                                        class="fa fa-dot-circle-o"></i> Open</span></div>
                                    </div>
                                    <p>Doing work with such a tool is really fun.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="prtm-block">
                    <div class="prtm-block-title mrgn-b-lg">
                        <div class="caption">
                            <h3>To Do List</h3></div>
                        <div class="contextual-link">
                            <div class="dropdown display-ib"><a href="javascript:;" class="mrgn-l-xs"
                                                                data-toggle="dropdown" data-hover="dropdown"
                                                                data-close-others="true" aria-expanded="true"><i
                                            class="fa fa-cog fa-lg base-dark"></i></a>
                                <ul class="dropdown-menu dropdown-arrow dropdown-menu-right">
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-eye"></i> <span
                                                    class="mrgn-l-sm">View</span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-pencil"></i> <span
                                                    class="mrgn-l-sm">Edit </span> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-trash-o"></i> <span
                                                    class="mrgn-l-sm">Delete</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prtm-block-content">
                        <div class="slimscrollbar" style="height: 500px;" data-always-visible="1"
                             data-rail-visible="0">
                            <div class="prtm-to-do">
                                <ul class="list-unstyled border-list-xs">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"> <span
                                                        class="to-do-icon pull-left">
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				</span> <span class="list-description pull-left">Be strategic about your energy to do things.</span>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box">
                                                <a href="javascript:;" class="text-success mrgn-r-xs"><i
                                                            class="fa fa-check" aria-hidden="true"></i></a>
                                                <a href="javascript:;" class="text-danger"> <i
                                                            class="fa fa-times" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"> <span
                                                        class="to-do-icon pull-left">
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				</span> <span class="list-description pull-left">Most important task completed before moving on to anything else.</span>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box">
                                                <a href="javascript:;" class="text-success mrgn-r-xs"><i
                                                            class="fa fa-check" aria-hidden="true"></i></a>
                                                <a href="javascript:;" class="text-danger"> <i
                                                            class="fa fa-times" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"> <span
                                                        class="to-do-icon pull-left">
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				</span> <span class="list-description pull-left"><del>Send agreement to Stephen.</del></span></div>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box">
                                                <a href="javascript:;" class="text-success mrgn-r-xs"><i
                                                            class="fa fa-check" aria-hidden="true"></i></a>
                                                <a href="javascript:;" class="text-danger"> <i
                                                            class="fa fa-times" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"> <span
                                                        class="to-do-icon pull-left">
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				</span> <span class="list-description pull-left">Finalize monthly earnings report.</span></div>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box">
                                                <a href="javascript:;" class="text-success mrgn-r-xs"><i
                                                            class="fa fa-check" aria-hidden="true"></i></a>
                                                <a href="javascript:;" class="text-danger"> <i
                                                            class="fa fa-times" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"> <span
                                                        class="to-do-icon pull-left">
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				</span> <span class="list-description pull-left">Create QR code for every user on website.</span></div>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box">
                                                <a href="javascript:;" class="text-success mrgn-r-xs"><i
                                                            class="fa fa-check" aria-hidden="true"></i></a>
                                                <a href="javascript:;" class="text-danger"> <i
                                                            class="fa fa-times" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"> <span
                                                        class="to-do-icon pull-left">
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				</span>
                                                <span class="list-description pull-left">Research new tools and softwares to do things faster.</span>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box">
                                                <a href="javascript:;" class="text-success mrgn-r-xs"><i
                                                            class="fa fa-check" aria-hidden="true"></i></a>
                                                <a href="javascript:;" class="text-danger"> <i
                                                            class="fa fa-times" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"> <span
                                                        class="to-do-icon pull-left">
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				</span> <span class="list-description pull-left">What can be pushed off till tonight?</span></div>
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right to-do-check-box">
                                                <a href="javascript:;" class="text-success mrgn-r-xs"><i
                                                            class="fa fa-check" aria-hidden="true"></i></a>
                                                <a href="javascript:;" class="text-danger"> <i
                                                            class="fa fa-times" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="prtm-full-block overflow-wrapper">
                    <div id="full-clndr" class="clearfix">
                        <script type="text/template" id="full-clndr-template">
                            <div class="clndr-controls">
                                <div class="clndr-previous-button"><span><i
                                                class="fa fa-angle-double-left fa-2x" aria-hidden="true"></i></span>
                                </div>
                                <div class="clndr-next-button"><span><i class="fa fa-angle-double-right fa-2x"
                                                                        aria-hidden="true"></i></span></div>
                                <div class="current-month">
                                    <%= month %>
                                    <%= year %>
                                </div>
                            </div>
                            <div class="clndr-grid">
                                <div class="days-of-the-week clearfix">
                                    <% _.each(daysOfTheWeek, function(day) { %>
                                    <div class="header-day">
                                        <%= day %>
                                    </div>
                                    <% }); %>
                                </div>
                                <div class="days">
                                    <% _.each(days, function(day) { %>
                                    <div class="<%= day.classes %>" id="<%= day.id %>"><span class="day-number"><%= day.day %></span>
                                    </div>
                                    <% }); %>
                                </div>
                            </div>
                            <div class="event-listing">
                                <% _.each(eventsThisMonth, function(event) { %>
                                <div class="event-item">
                                    <div class="event-item-name">
                                        <%= event.title %>
                                    </div>
                                    <div class="event-item-location">
                                        <%= event.location %>
                                    </div>
                                </div>
                                <% }); %>
                            </div>
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="prtm-social-widgets">
            <h6 class="text-uppercase">Marketing Campaign</h6>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="stock-list prtm-card-box bg-primary mrgn-b-lg">
                        <div class="clearfix">
                            <div class="stk-icon"><span class="show stock-main"><i
                                            class="fa fa-facebook"></i></span> <span><i class="fa fa-long-arrow-up"></i> 2.43%</span>
                            </div>
                            <div class="prtm-stk-des">
                                <div class="brand-info clearfix">
                                    <h6 class="prtm-brand-name text-uppercase">Facebook</h6></div>
                                <div class="clearfix">
                                    <div class="prtm-brand-min"><span class="show stock-sub-head">client</span>
                                        <span>Min.time</span></div>
                                    <div class="prtm-brand-budget"><span
                                                class="show stock-sub-head">budget</span> <span>$4650</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="stock-list prtm-card-box bg-danger mrgn-b-lg">
                        <div class="clearfix">
                            <div class="stk-icon"><span class="show stock-main"><i
                                            class="fa fa-youtube"></i></span> <span><i class="fa fa-long-arrow-up"></i> 5.66%</span>
                            </div>
                            <div class="prtm-stk-des">
                                <div class="brand-info clearfix">
                                    <h6 class="prtm-brand-name text-uppercase">youtube</h6></div>
                                <div class="clearfix">
                                    <div class="prtm-brand-min"><span class="show stock-sub-head">client</span>
                                        <span>Min.time</span></div>
                                    <div class="prtm-brand-budget"><span
                                                class="show stock-sub-head">budget</span> <span>$6796</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="stock-list prtm-card-box bg-info mrgn-b-lg">
                        <div class="clearfix">
                            <div class="stk-icon"><span class="show stock-main"><i
                                            class="fa fa-twitter"></i></span> <span><i class="fa fa-long-arrow-up"></i> 1.87%</span>
                            </div>
                            <div class="prtm-stk-des">
                                <div class="brand-info clearfix">
                                    <h6 class="prtm-brand-name text-uppercase">Twitter</h6></div>
                                <div class="clearfix">
                                    <div class="prtm-brand-min"><span class="show stock-sub-head">client</span>
                                        <span>Min.time</span></div>
                                    <div class="prtm-brand-budget"><span
                                                class="show stock-sub-head">budget</span> <span>$4779</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="stock-list prtm-card-box bg-success mrgn-b-lg">
                        <div class="clearfix">
                            <div class="stk-icon"><span class="show stock-main"><i
                                            class="fa fa-google"></i></span> <span><i class="fa fa-long-arrow-up"></i> 4.78%</span>
                            </div>
                            <div class="prtm-stk-des">
                                <div class="brand-info clearfix">
                                    <h6 class="prtm-brand-name text-uppercase">Google Ads</h6></div>
                                <div class="clearfix">
                                    <div class="prtm-brand-min"><span class="show stock-sub-head">client</span>
                                        <span>Min.time</span></div>
                                    <div class="prtm-brand-budget"><span
                                                class="show stock-sub-head">budget</span> <span>$1247</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

