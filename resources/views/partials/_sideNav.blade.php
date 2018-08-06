<div class="prtm-sidebar">
    <div class="prtm-sidebar-back"></div>
    <div class="prtm-sidebar-nav-wrapper">
        <div class="prtm-sidebar-menu">
            <nav class="sidebar-nav collapse">
                <ul class="list-unstyled sidebar-menu">
                    <li class="sidenav-heading text-uppercase">Dashboards</li>

                    <li class="has-children  opened active" onclick="makeActive(this)"><a href="javascript:;"><i class="fa fa-tachometer"
                                                                                     aria-hidden="true"></i><span>Dashboard</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="index.html" class="active"><span>Dashboard 1</span></a></li>
                        </ul>
                    </li>

                    <li class="sidenav-heading text-uppercase">Features</li>

                    {{--Nir Code--}}
                    <li class="has-children" onclick="makeActive(this)" id="class"><a href="javascript:;"  ><i class="fa fa-edit"
                                                                                     aria-hidden="true"></i><span>Class</span></a>
                        <ul class="list-unstyled sub-menu collapse" >
                            <li><a href="{{url('add_class')}}" class=""><span> Add Class</span></a></li>
                            <li><a href="{{url('add_sec')}}"><span>Add Sec</span></a></li>
                        </ul>
                    </li>
                    {{--Nir Code--}}


                    <li class="has-children" onclick="makeActive(this)" ><a href="javascript:;"><i class="fa fa-sliders"
                                                                       aria-hidden="true"></i><span>UI Elements</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="ui-buttons.html"><span>Buttons</span></a></li>
                            <li><a href="progress-bar.html"><span>Progress bar </span></a></li>
                            <li><a href="tabs-accordions.html"><span>Tabs &amp; accordions</span></a></li>
                            <li><a href="form-elements.html"><span>Form elements</span></a></li>
                            <li><a href="form-validation.html"><span>Form validation</span></a></li>
                            <li><a href="input-mask.html"><span>Form input mask</span></a></li>
                            <li><a href="no-uislider.html"><span>UI sliders</span></a></li>
                            <li><a href="pagination-tooltip.html"><span>Pagination &amp; Tooltip</span></a></li>
                            <li><a href="panels.html"><span>Panels</span></a></li>
                            <li><a href="social-icon.html"><span>Social icons</span></a></li>
                            <li><a href="typography.html"><span>Typography</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-server"
                                                                       aria-hidden="true"></i><span>Advanced UI Elements</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="bootstrap-fileinput.html"><span>Bootstrap File Input</span></a></li>
                            <li><a href="bootstrap-tagsinput.html"><span>Bootstrap Tag Input</span></a></li>
                            <li><a href="bootstrap-switch.html"><span>Bootstrap Switches</span></a></li>
                            <li><a href="selectize.html"><span>Selectize</span></a></li>
                            <li><a href="typehead.html"><span>Typeahead</span></a></li>
                            <li><a href="fancytree.html"><span>Fancy Tree</span></a></li>
                            <li><a href="dragula.html"><span>Dragula Drag &amp; drop</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-inbox"
                                                                       aria-hidden="true"></i><span>Components</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="notification.html"><span>Notification &amp; Alerts</span></a></li>
                            <li><a href="date-time-picker.html"><span>Date &amp; Time picker</span></a></li>
                            <li><a href="color-picker.html"><span>Color picker</span></a></li>
                            <li><a href="bootstrap-multiselect-dropdown.html"><span>Bootstrap Multiselect</span></a>
                            </li>
                            <li><a href="cropper.html"><span>Image Cropper</span></a></li>
                            <li><a href="modals.html"><span>Modal </span></a></li>
                            <li><a href="fileupload.html"><span>File Upload</span></a></li>
                            <li><a href="plupload.html"><span>Plupload</span></a></li>
                            <li><a href="dropzone.html"><span>Dropzone</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-edit"
                                                                       aria-hidden="true"></i><span>Editors</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="summernote.html"><span>summernote Editor</span></a></li>
                            <li><a href="bootstrap-wysiwyg.html"><span>bootstrap wysiwyg Editor</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-calendar"
                                                                       aria-hidden="true"></i><span>Event calendars</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="full-calendar.html"><span>Basic full calendar</span></a></li>
                            <li><a href="full-calendar-advanced.html"><span>Advanced full calendar</span></a>
                            </li>
                            <li><a href="full-calendar-format.html"><span>Full calendar Format</span></a></li>
                            <li><a href="full-calendar-styling.html"><span>full calendar Styling</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-flag"
                                                                       aria-hidden="true"></i><span>Icons</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="simple-line-icons-webfont.html"><span>Simple Line Icon</span></a></li>
                            <li><a href="themify-icons.html"><span>Themify Icon</span></a></li>
                            <li><a href="weather-icons.html"><span>Weather Icon</span></a></li>
                            <li><a href="material-icons.html"><span>Material Icon</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-area-chart"
                                                                       aria-hidden="true"></i><span>Graphs and Charts</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="google-chart.html"><span>Google chart</span></a></li>
                            <li><a href="high-chart.html"><span>High Chart</span></a></li>
                            <li><a href="morris.html"><span>Morris Chart</span></a></li>
                            <li><a href="chartlist.html"><span>Chartlist</span></a></li>
                            <li><a href="flow-chart.html"><span>Flow Chart</span></a></li>
                            <li><a href="easypie.html"><span>Easypie chart</span></a></li>
                            <li><a href="flot-chart.html"><span>Flot chart</span></a></li>
                            <li><a href="chartjs.html"><span>js charts</span></a></li>
                            <li><a href="chart-peity.html"><span>Peity chart</span></a></li>
                            <li><a href="sparkline-chart.html"><span>Sparkline chart</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-map" aria-hidden="true"></i><span>Maps</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="googlemap.html"><span>Google map</span></a></li>
                            <li><a href="vectormap.html"><span>Vector map</span></a></li>
                            <li><a href="snazzymaps.html"><span>Snazzy map</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-table"
                                                                       aria-hidden="true"></i><span>Tables</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="basic-table.html"><span>Basic tables</span></a></li>
                            <li><a href="responsive-table.html"><span>Responsive table</span></a></li>
                            <li><a href="bootstrap-table.html"><span>Bootstrap table</span></a></li>
                            <li><a href="dynamitable.html"><span>Dynamitable</span></a></li>
                            <li class="has-children"><a href="javascript:;"><span>Data tables</span></a>
                                <ul class="list-unstyled sub-menu collapse">
                                    <li><a href="data-table-buttons.html"><span>Buttons Extension</span></a>
                                    </li>
                                    <li><a href="data-table-autofill.html"><span>Autofill Extension</span></a>
                                    </li>
                                    <li><a href="data-table-col-reorder.html"><span>Colreorder Extension</span></a>
                                    </li>
                                    <li><a href="data-table-row-reorder.html"><span>Rowreorder Extension</span></a>
                                    </li>
                                    <li>
                                        <a href="data-table-fixed-column.html"><span>Fixed column Extension</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-heading text-uppercase">Data visualization</li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-line-chart"
                                                                       aria-hidden="true"></i>
                            <span>Dimple library</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li class="has-children"><a href="javascript:;"><span>Line charts</span></a>
                                <ul class="list-unstyled sub-menu collapse">
                                    <li>
                                        <a href="dimple-line-horizontal.html"><span>Horizontal orientation</span></a>
                                    </li>
                                    <li>
                                        <a href="dimple-line-vertical.html"><span>Vertical orientation</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="javascript:;"><span>Bar charts</span></a>
                                <ul class="list-unstyled sub-menu collapse">
                                    <li><a href="dimple-bar-horizontal.html"><span>Horizontal orientation</span></a>
                                    </li>
                                    <li><a href="dimple-bar-vertical.html"><span>Vertical orientation</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="javascript:;"><span>Area charts</span></a>
                                <ul class="list-unstyled sub-menu collapse">
                                    <li>
                                        <a href="dimple-area-chart-horizontal.html"><span>Horizontal orientation</span></a>
                                    </li>
                                    <li>
                                        <a href="dimple-area-chart-vertical.html"><span>Vertical orientation</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="dimple-pie-chart.html"><span>Pie charts</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-bar-chart"
                                                                       aria-hidden="true"></i><span>D3 library</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="d3-line.html"><span>Lines Charts</span></a></li>
                            <li><a href="d3-area.html"><span>Area charts</span></a></li>
                            <li><a href="d3-bar.html"><span>Bars charts</span></a></li>
                        </ul>
                    </li>
                    <li class="sidenav-heading text-uppercase">Layouts</li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-columns"
                                                                       aria-hidden="true"></i><span>Page layouts</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="right-sidebar.html"><span>Right Sidebar</span></a></li>
                            <li><a href="collapse-sidebar.html"><span>Collapse Sidebar</span></a></li>
                            <li><a href="fixed-header.html"><span>Fixed Header</span></a></li>
                        </ul>
                    </li>
                    <li class="sidenav-heading text-uppercase">Pages</li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-user"
                                                                       aria-hidden="true"></i><span>Users</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="users-list.html"><span>Users list</span></a></li>
                            <li><a href="user-profile.html"><span>Users profile</span></a></li>
                            <li><a href="user-settings.html"><span>User settings</span></a></li>
                            <li><a href="chat.html"><span>User chat</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-shopping-bag"
                                                                       aria-hidden="true"></i><span>Ecommerce</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="ecommerce-product.html"><span>Ecommerce Product</span></a></li>
                            <li>
                                <a href="ecommerce-product-detail.html"><span>Ecommerce Product detail</span></a>
                            </li>
                            <li><a href="ecommerce-order.html"><span>Ecommerce order</span></a></li>
                            <li><a href="ecommerce-order-detail.html"><span>Ecommerce order detail</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-envelope"
                                                                       aria-hidden="true"></i><span>Mailbox</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="email.html"><span>Emails</span></a></li>
                            <li><a href="email-compose.html"><span>Email compose</span></a></li>
                        </ul>
                    </li>
                    <li><a href="tickets.html"><i class="fa fa-ticket"
                                                  aria-hidden="true"></i><span>Tickets</span></a></li>
                    <li class="has-children"><a href="javascript:;"><i class="fa fa-magic"
                                                                       aria-hidden="true"></i><span>Extra</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li><a href="login.html"><span>Login</span></a></li>
                            <li><a href="coming-soon.html"><span>Coming Soon</span></a></li>
                            <li><a href="404.html"><span>404</span></a></li>
                            <li><a href="pricing.html"><span>Pricing</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="prtm-sparkline pad-lr-lg">
                <div class="prtm-sparkline-list bg-success clearfix prtm-card-box">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><span class="show count-item"
                                                                            data-count="5000">5,000</span>
                        <span>New visitors</span></div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="chart sparkline text-center" data-chart="sparkline" data-type="bar"
                             data-height="50px" data-barwidth="6" data-width="100%" data-barspacing="2"
                             data-barcolor="#ffffff" data-values="[9, 8, 9, 7, 6, 8, 7, 8]"></div>
                    </div>
                </div>
                <div class="prtm-sparkline-list clearfix bg-info prtm-card-box">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><span class="show count-item"
                                                                            data-count="3000">3,000</span>
                        <span>New Users</span></div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="chart sparkline text-center" data-chart="sparkline" data-type="bar"
                             data-height="50px" data-barwidth="6" data-width="100%" data-barspacing="2"
                             data-barcolor="#ffffff" data-values="[5, 6, 8, 9, 5, 8, 4, 6]"></div>
                    </div>
                </div>
                <div class="prtm-sparkline-list clearfix bg-secondary prtm-card-box">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><span class="show count-item"
                                                                            data-count="7000">7,000</span>
                        <span>Active users</span></div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="chart sparkline text-center" data-chart="sparkline" data-type="bar"
                             data-height="50px" data-barwidth="6" data-width="100%" data-barspacing="2"
                             data-barcolor="#ffffff" data-values="[9, 8, 9, 7, 6, 8, 7, 8]"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>


    function makeActive(element){

        var els = document.getElementsByClassName('active')

            for (var i = 0; i < els.length; i++) {
                els[i].classList.remove('active')
            }

        element.classList.add('active');
    }
</script>