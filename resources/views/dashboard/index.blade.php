@extends('dashboard.main')
@section('title','')
@section('content')
    <!-- top general alert -->
    <div class="alert alert-danger top-general-alert">
        <span>If you <strong>can't see the logo</strong> on the top left, please reset the style on right style switcher (for upgraded theme only).</span>
        <button type="button" class="close">&times;</button>
    </div>
    <!-- end top general alert -->
    <div class="row">
        <div class="col-lg-4 ">
            <ul class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index-dashboard-v2.html#">Home</a></li>
                <li class="active">Dashboard</li>
            </ul>
        </div>
    </div>
    <!-- main -->
    <div class="content">
        <div class="main-header">
            <h2>DASHBOARD v2</h2>
            <em>dashboard alternative</em>
        </div>
        <div class="main-content">
            <div class="widget widget-hide-header">
                <div class="widget-header hide">
                    <h3>Main Dashboard Info</h3>
                </div>
                <div class="widget-content">
                    <!-- NUMBER-CHART STAT -->
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="number-chart">
                                <div class="number pull-left"><span>$22,500</span> <span>EARNINGS</span></div>
                                <div class="mini-stat">
                                    <div id="number-chart1" class="inlinesparkline">Loading...</div>
                                    <p class="text-muted"><i class="fa fa-caret-up green-font"></i> 19% higher than
                                        last week</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="number-chart">
                                <div class="number pull-left"><span>245</span> <span>SALES</span></div>
                                <div class="mini-stat">
                                    <div id="number-chart2" class="inlinesparkline">Loading...</div>
                                    <p class="text-muted"><i class="fa fa-caret-up green-font"></i> 24% higher than
                                        last week</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="number-chart">
                                <div class="number pull-left"><span>561,724</span> <span>VISITS</span></div>
                                <div class="mini-stat">
                                    <div id="number-chart3" class="inlinesparkline">Loading...</div>
                                    <p class="text-muted"><i class="fa fa-caret-up green-font"></i> 44% higher than
                                        last week</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="number-chart">
                                <div class="number pull-left"><span>372,500</span> <span>LIKES</span></div>
                                <div class="mini-stat">
                                    <div id="number-chart4" class="inlinesparkline">Loading...</div>
                                    <p class="text-muted"><i class="fa fa-caret-down red-font"></i> 6% lower than
                                        last week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END NUMBER-CHART STAT -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- WIDGET VISIT AND SALES CHART -->
                    <div class="widget">
                        <div class="widget-header">
                            <h3><i class="fa fa-bar-chart-o"></i> Weekly Sales Stat</h3> <em>- Visits and Sales</em>
                            <button type="button" class="btn btn-link btn-help"><i
                                        class="fa fa-question-circle"></i></button>
                            <div class="btn-group widget-header-toolbar">
                                <a href="index-dashboard-v2.html#" title="Focus" class="btn-borderless btn-focus"><i
                                            class="fa fa-eye"></i></a>
                                <a href="index-dashboard-v2.html#" title="Expand/Collapse"
                                   class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
                                <a href="index-dashboard-v2.html#" title="Remove" class="btn-borderless btn-remove"><i
                                            class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="demo-flot-chart sales-chart"></div>
                        </div>
                    </div>
                    <!-- END WIDGET VISIT AND SALES CHART -->
                </div>
                <div class="col-md-6">
                    <!-- SALES INFO SUMMARY -->
                    <div class="widget">
                        <div class="widget-header">
                            <h3><i class="fa fa-bar-chart-o"></i> Sales Stat Summary</h3>
                            <div class="btn-group widget-header-toolbar">
                                <a href="index-dashboard-v2.html#" title="Focus" class="btn-borderless btn-focus"><i
                                            class="fa fa-eye"></i></a>
                                <a href="index-dashboard-v2.html#" title="Expand/Collapse"
                                   class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
                                <a href="index-dashboard-v2.html#" title="Remove" class="btn-borderless btn-remove"><i
                                            class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-bordered bottom-30px">
                                    <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Today</th>
                                        <th>Current Week</th>
                                        <th>Current Month</th>
                                        <th>Lifetime</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Earnings</td>
                                        <td>$270</td>
                                        <td>$653</td>
                                        <td>$2,845</td>
                                        <td>$30,281</td>
                                    </tr>
                                    <tr>
                                        <td>Sales</td>
                                        <td>35</td>
                                        <td>126</td>
                                        <td>226</td>
                                        <td>4531</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h4>Recent Purchases</h4>
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <thead>
                                    <tr>
                                        <th>Order No.</th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Date &amp; time</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="index-dashboard-v2.html#">ORD201502004</a></td>
                                        <td>Steve</td>
                                        <td>$122</td>
                                        <td>04/03/2015 17:23</td>
                                        <td><span class="label label-success">COMPLETED</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="index-dashboard-v2.html#">ORD201501098</a></td>
                                        <td>Mandy</td>
                                        <td>$73</td>
                                        <td>04/03/2015 16:14</td>
                                        <td><span class="label label-success">COMPLETED</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="index-dashboard-v2.html#">ORD201501095</a></td>
                                        <td>Bruce</td>
                                        <td>$43</td>
                                        <td>04/03/2015 16:08</td>
                                        <td><span class="label label-warning">PENDING</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="index-dashboard-v2.html#">ORD201502095</a></td>
                                        <td>Albert</td>
                                        <td>$100</td>
                                        <td>04/03/2015 15:58</td>
                                        <td><span class="label label-danger">FAILED</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="index-dashboard-v2.html#" class="btn btn-default btn-sm"><i
                                        class="fa fa-shopping-cart"></i> View all purchases</a>
                        </div>
                    </div>
                    <!-- END SALES INFO SUMMARY -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- DRAG AND DROP TODO LIST -->
                    <div class="widget">
                        <div class="widget-header">
                            <h3><i class="fa fa-bar-chart-o"></i> Ajax Drag &amp; Drop To-Do List</h3> <em>- Try to
                                click the checkbox then drag &nbsp;<i class="fa fa-bars"></i> icon</em>
                            <div class="btn-group widget-header-toolbar">
                                <a href="index-dashboard-v2.html#" title="Focus" class="btn-borderless btn-focus"><i
                                            class="fa fa-eye"></i></a>
                                <a href="index-dashboard-v2.html#" title="Expand/Collapse"
                                   class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
                                <a href="index-dashboard-v2.html#" title="Remove" class="btn-borderless btn-remove"><i
                                            class="fa fa-times"></i></a>
                            </div>
                            <div class="widget-header-toolbar process-status">
                                <span class="loading"><i class="fa fa-spinner fa-spin"></i> Loading ...</span>
                                <span class="saved green-font"><i class="fa fa-check"></i> Saved</span>
                                <span class="failed red-font"><i class="fa fa-remove"></i> Failed</span>
                            </div>
                        </div>
                        <div class="widget-content">
                            <ul id="dragdrop-todo" class="list-unstyled todo-list">
                                <li>
											<span class="list-control">
															<span class="handle"><i class="fa fa-bars"></i></span>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											</span>
                                    <p>
                                        <strong>Restart Server</strong><span class="label label-danger">High</span>
                                        <span class="short-description">Dynamically integrate client-centric technologies without cooperative resources.</span>
                                        <span class="date text-muted">Jun 9, 2014</span>
                                    </p>
                                </li>
                                <li>
											<span class="list-control">
															<span class="handle"><i class="fa fa-bars"></i></span>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											</span>
                                    <p>
                                        <strong>Retest Upload Scenario</strong><span
                                                class="label label-warning">Medium</span>
                                        <span class="short-description">Compellingly implement clicks-and-mortar relationships without highly efficient metrics.</span>
                                        <span class="date text-muted">Jun 23, 2014</span>
                                    </p>
                                </li>
                                <li>
											<span class="list-control">
															<span class="handle"><i class="fa fa-bars"></i></span>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											</span>
                                    <p>
                                        <strong>Functional Spec Meeting</strong><span
                                                class="label label-info">Low</span>
                                        <span class="short-description">Monotonectally formulate client-focused core competencies after parallel web-readiness.</span>
                                        <span class="date text-muted">Jun 11, 2014</span>
                                    </p>
                                </li>
                                <li>
											<span class="list-control">
															<span class="handle"><i class="fa fa-bars"></i></span>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											</span>
                                    <p>
                                        <strong>Export User Database</strong><span
                                                class="label label-warning">Medium</span>
                                        <span class="short-description">Enthusiastically restore granular paradigms before timely leadership skills. Compellingly reconceptualize 2.0 e-business for compelling resources. Progressively create team driven technologies after intermandated web-readiness.</span>
                                        <span class="date text-muted">Jun 21, 2014</span>
                                    </p>
                                </li>
                                <li>
											<span class="list-control">
															<span class="handle"><i class="fa fa-bars"></i></span>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											</span>
                                    <p>
                                        <strong>Conduct A/B Testing</strong><span
                                                class="label label-danger">High</span>
                                        <span class="short-description">Dramatically unleash cross-platform internal or "organic" sources with integrated convergence. Quickly aggregate backward-compatible e-commerce and B2B.</span>
                                        <span class="date text-muted">Jun 30, 2014</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END DRAG AND DROP TODO LIST -->
                </div>
                <div class="col-md-6">
                    <!-- ADD NEW NOTE -->
                    <div class="widget widget-quick-note quick-note-create">
                        <div class="widget-content">
                            <form class="form-horizontal" role="form">
                                <input type="text" class="form-control title" name="title" placeholder="Title">
                                <textarea class="form-control" rows="1" cols="30" name="note-content"
                                          placeholder="Add quick note"></textarea>
                            </form>
                        </div>
                        <div class="widget-footer">
                            <div class="btn-group">
                                <button type="button" class="btn btn-clean" data-toggle="tooltip"
                                        data-placement="bottom" data-original-title="Add Image"><i
                                            class="fa fa-image"></i> <span class="sr-only">Add Image</span></button>
                                <button type="button" class="btn btn-clean" data-toggle="tooltip"
                                        data-placement="bottom" data-original-title="Remind Me"><i
                                            class="fa fa-bell"></i> <span class="sr-only">Remind Me</span></button>
                                <button type="button" class="btn btn-clean" data-toggle="tooltip"
                                        data-placement="bottom" data-original-title="Share"><i
                                            class="fa fa-share-alt"></i> <span class="sr-only">Share</span></button>
                            </div>
                            <button type="button" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Save
                            </button>
                        </div>
                    </div>
                    <!-- END ADD NEW NOTE -->
                    <!-- SAVED NOTES -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget quick-note-saved">
                                <div class="widget-header">
                                    <h3>Saved Note Example</h3>
                                </div>
                                <div class="widget-content">
                                    <p>Completely leverage existing customer directed ideas rather than
                                        multifunctional customer service. Uniquely formulate economically sound
                                        portals whereas professional web services. Proactively productize team
                                        building materials without state of the art benefits. Collaboratively
                                        re-engineer progressive vortals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="widget quick-note-saved">
                                <div class="widget-header">
                                    <h3>Saved Note Example</h3>
                                </div>
                                <div class="widget-content">
                                    <p>Completely leverage existing customer directed ideas rather than
                                        multifunctional customer service. Uniquely formulate economically sound
                                        portals whereas professional web services. Proactively productize team
                                        building materials without state of the art benefits. Collaboratively
                                        re-engineer progressive vortals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="widget quick-note-saved">
                                <div class="widget-header">
                                    <h3>Saved Note Example</h3>
                                </div>
                                <div class="widget-content">
                                    <p>Completely leverage existing customer directed ideas rather than
                                        multifunctional customer service. Uniquely formulate economically sound
                                        portals whereas professional web services. Proactively productize team
                                        building materials without state of the art benefits. Collaboratively
                                        re-engineer progressive vortals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="widget quick-note-saved">
                                <div class="widget-header">
                                    <h3>Saved Note Example</h3>
                                </div>
                                <div class="widget-content">
                                    <p>Completely leverage existing customer directed ideas rather than
                                        multifunctional customer service. Uniquely formulate economically sound
                                        portals whereas professional web services. Proactively productize team
                                        building materials without state of the art benefits. Collaboratively
                                        re-engineer progressive vortals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SAVED NOTES -->
                    <!-- QUICK NOTE MODAL -->
                    <div class="modal fade" id="quick-note-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="widget widget-quick-note quick-note-edit">
                                        <div class="widget-content">
                                            <form class="form-horizontal" role="form">
                                                <input type="text" class="form-control title" name="title"
                                                       value="Saved Note Example" placeholder="Title">
                                                <textarea class="form-control" rows="7" cols="30"
                                                          name="note-content" placeholder="Add quick note">Completely leverage existing customer directed ideas rather than multifunctional customer service. Uniquely formulate economically sound portals whereas professional web services. Proactively productize team building materials without state of the art benefits. Collaboratively re-engineer progressive vortals.</textarea>
                                            </form>
                                        </div>
                                        <div class="widget-footer">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-clean" data-toggle="tooltip"
                                                        data-placement="bottom" data-original-title="Add Image"><i
                                                            class="fa fa-image"></i> <span
                                                            class="sr-only">Add Image</span></button>
                                                <button type="button" class="btn btn-clean" data-toggle="tooltip"
                                                        data-placement="bottom" data-original-title="Remind Me"><i
                                                            class="fa fa-bell"></i> <span
                                                            class="sr-only">Remind Me</span></button>
                                                <button type="button" class="btn btn-clean" data-toggle="tooltip"
                                                        data-placement="bottom" data-original-title="Share"><i
                                                            class="fa fa-share-alt"></i> <span
                                                            class="sr-only">Share</span></button>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-save pull-right"><i
                                                        class="fa fa-save"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END QUICK NOTE MODAL -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- WIDGET ACTIVITY FEED -->
                    <div class="widget widget-scrolling">
                        <div class="widget-header">
                            <h3><i class="fa fa-fire"></i> Activity Feed</h3>
                            <div class="btn-group widget-header-toolbar">
                                <a href="index-dashboard-v2.html#" title="Focus" class="btn-borderless btn-focus"><i
                                            class="fa fa-eye"></i></a>
                                <a href="index-dashboard-v2.html#" title="Expand/Collapse"
                                   class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
                                <a href="index-dashboard-v2.html#" title="Remove" class="btn-borderless btn-remove"><i
                                            class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled activity-list">
                                <li>
                                    <i class="fa fa-check activity-icon pull-left icon-success"></i>
                                    <p>All project tasks are on schedule <span
                                                class="timestamp">2 minutes ago</span></p>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle activity-icon pull-left icon-success"></i>
                                    <p>The system is running well, no error found. <span
                                                class="timestamp">4 minutes ago</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-unlock activity-icon pull-left icon-danger"></i>
                                    <p>You have unsecure file permission on this project. Go to <a
                                                href="index-dashboard-v2.html">File Manager</a> to fix it <span
                                                class="timestamp">15 minutes ago</span></p>
                                </li>
                                <li>
                                    <i class="fa fa-bug activity-icon pull-left icon-info"></i>
                                    <p>New <a href="index-dashboard-v2.html#">bug report</a> has been submitted
                                        <span class="timestamp">1 hour ago</span></p>
                                </li>
                                <li>
                                    <i class="fa fa-close activity-icon pull-left icon-danger"></i>
                                    <p>Background job <a href="index-dashboard-v2.html#">#783458</a> has failed. See
                                        the <a href="index-dashboard-v2.html#">logs</a> <span class="timestamp">3 hour ago</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-flag activity-icon pull-left icon-success"></i>
                                    <p>Project <a href="index-dashboard-v2.html#">Social Boost</a> has been flagged
                                        as finished <span class="timestamp">Yesterday</span></p>
                                </li>
                                <li>
                                    <i class="fa fa-print activity-icon pull-left icon-warning"></i>
                                    <p>You have <a href="index-dashboard-v2.html#">pending documents</a> on the
                                        printer server <span class="timestamp">Yesterday</span></p>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-clean center-block"><i class="fa fa-refresh"></i>
                                Load more
                            </button>
                        </div>
                    </div>
                    <!-- END WIDGET ACTIVITY FEED -->
                </div>
                <div class="col-md-4">
                    <!-- WIDGET TASKS -->
                    <div class="widget">
                        <div class="widget-header">
                            <h3><i class="fa fa-tasks"></i> My Tasks</h3> <em>- Summary of Tasks</em>
                            <div class="btn-group widget-header-toolbar">
                                <a href="index-dashboard-v2.html#" title="Focus" class="btn-borderless btn-focus"><i
                                            class="fa fa-eye"></i></a>
                                <a href="index-dashboard-v2.html#" title="Expand/Collapse"
                                   class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
                                <a href="index-dashboard-v2.html#" title="Remove" class="btn-borderless btn-remove"><i
                                            class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="widget-content">
                            <ul class="task-list">
                                <li>
                                    <p>Updating Users Settings <span class="label label-danger">23%</span></p>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"
                                             style="width:23%">
                                            <span class="sr-only">23% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Load &amp; Stress Test <span class="label label-success">80%</span></p>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Data Duplication Check <span class="label label-success">100%</span></p>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 100%">
                                            <span class="sr-only">Success</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Server Check <span class="label label-warning">45%</span></p>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                             aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Mobile App Development <span class="label label-danger">10%</span></p>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 10%">
                                            <span class="sr-only">10% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Documentation<span class="label label-danger">14%</span></p>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 10%">
                                            <span class="sr-only">14% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>A/B Testing<span class="label label-danger">57%</span></p>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 10%">
                                            <span class="sr-only">10% Complete</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END WIDGET TASKS -->
                </div>
                <div class="col-md-4">
                    <!-- WIDGET EMPLOYEE -->
                    <div class="widget">
                        <div class="widget-header">
                            <h3><i class="fa fa-user"></i> Employee of The Month</h3>
                            <div class="btn-group widget-header-toolbar">
                                <a href="index-dashboard-v2.html#" title="Focus" class="btn-borderless btn-focus"><i
                                            class="fa fa-eye"></i></a>
                                <a href="index-dashboard-v2.html#" title="Expand/Collapse"
                                   class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
                                <a href="index-dashboard-v2.html#" title="Remove" class="btn-borderless btn-remove"><i
                                            class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="widget-content text-center">
                            <img src="assets/img/profile-avatar.png" class="img-circle" alt="Avatar"/>
                            <h4>Jack Bay</h4>
                            <hr class="dashed"/>
                            <ul class="list-unstyled text-muted">
                                <li>Most on-time</li>
                                <li>Most attitude, talkative and independent</li>
                                <li>Most fit and healthy</li>
                                <li>Most hard worker</li>
                            </ul>
                            <hr class="dashed"/>
                            <button type="button" class="btn btn-large btn-primary"><i class="fa fa-thumbs-up"></i>
                                Appreciate!
                            </button>
                        </div>
                    </div>
                    <!-- END WIDGET EMPLOYEE -->
                </div>
            </div>
        </div>
    </div>
    <!-- /main -->
@endsection