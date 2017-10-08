<?php
/**
 * Created by PhpStorm.
 * User: morgyken
 * Date: 10/7/2017
 * Time: 5:16 PM
 */<style>

    .glyphicon { margin-right:10px; }
    .panel-body { padding:0px; }
    .panel-body table tr td { padding-left: 15px }
    .panel-body .table {margin-bottom: 0px; }
    #accordion {margin-top: 17px;}

</style>

<!--- used by tutors as vertical menu -->


<div class="col-sm-12 col-md-12">
    <div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Available Orders</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">All Orders</a> <span class="label label-success">100</span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Suggested Orders</a>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>My Current Orders</a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="http://www.jquery2dotnet.com">Current</a> <span class="label label-success">$ 320</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="http://www.jquery2dotnet.com">Reassigned</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="http://www.jquery2dotnet.com">Completed</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="http://www.jquery2dotnet.com">For Revision</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="http://www.jquery2dotnet.com">Rated Orders</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="http://www.jquery2dotnet.com">Finished Orders</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-usd" aria-hidden="true"></i>

                            </span>Payments</a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="http://www.jquery2dotnet.com">Payment History</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="http://www.jquery2dotnet.com">Account Bonuses</a> <span class="label label-info">5</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="http://www.jquery2dotnet.com">Upcoming Payments</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
Refunds</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>My Profile</a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Personal Information</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Account</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Progress</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Progrees Report</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
