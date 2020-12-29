@extends('layouts.web')
@section('head')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--  Essential META Tags -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:type" content="website"/>
    <meta name="twitter:card" content="">
    <meta name="twitter:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="">
    <meta name="twitter:image:alt" content="Alt text for image">
    <meta name="robots" content="index, follow">
@endsection
@section("header")
    <div class="container-fluid bg-lochmara">
        Special offers and promotion! Save up to 30%* off on Entrepreneurship & Small Business certification voucher
        with a retake
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand customize-logo-size" href="#">
                <img src="{{asset("uploads/images/logo.png")}}" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Certification
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Why Get Certified</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Resource</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <div class="ml-auto">
                    <ul class="search-login">
                        <li>
                            <a href="#">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                    <path fill-rule="evenodd"
                                          d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                                <span>Log In</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@endsection
@section("slide")
    <div id="main-slide" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <picture>
                    <source srcset="{{asset("/uploads/images/slideshow/banner.jpg")}}" media="(min-width: 1400px)">
                    <source srcset="{{asset("/uploads/images/slideshow/banner.jpg")}}" media="(min-width: 769px)">
                    <source srcset="{{asset("/uploads/images/slideshow/banner.jpg")}}" media="(min-width: 577px)">
                    <img srcset="{{asset("/uploads/images/slideshow/banner.jpg")}}" alt="responsive image"
                         class="d-block img-fluid">
                </picture>
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Innovation School <br/>of Education.</h1>
                        <p>Certificate courses designed to <br/>suit your learning desire </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
@section("content")
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 pb-3">
                <h3 class="text-center">QuickBooks Certification</h3>
            </div>
            <div class="col-lg-6 col-md-6 pt-5">
                <div class="coursetopics">
                    <h3>Lesson 1 - Getting Started</h3>
                    <ul>
                        <li>Introducing QuickBooks</li>
                        <li>Getting Around in QuickBooks</li>
                        <li>All the Accounting You Need to Know</li>
                        <li>About the Chart of Accounts</li>
                        <li>About Assets, Liabilities and Equity</li>
                        <li>Cash versus Accrual Bookkeeping</li>
                        <li>Measuring Business Profitability</li>
                        <li>General Journal Transactions</li>
                        <li>Getting Help while Using QuickBooks</li>
                        <li>Exiting QuickBooks</li>
                        <li>Moving between Company Files</li>
                    </ul>
                    <h3>Lesson 2 - Setting Up QuickBooks</h3>
                    <ul>
                        <li>Creating a QuickBooks Company</li>
                        <li>Starting the EasyStep Interview</li>
                        <li>Entering Company Information</li>
                        <li>Choosing your Company Industry</li>
                        <li>Selecting how Your Company is Organized</li>
                        <li>Customizing QuickBooks for Your Business</li>
                        <li>Indicating What You Sell</li>
                        <li>Entering Sales Information</li>
                        <li>Entering Sales Tax Information</li>
                        <li>Creating Estimates</li>
                        <li>Creating Sales Orders</li>
                        <li>Choosing Remaining Preferences</li>
                        <li>Choosing a Start Date</li>
                        <li>Reviewing the Chart of Accounts</li>
                        <li>Entering Bank Accounts and Opening Balances</li>
                        <li>Completing Company File Setup</li>
                        <li>Adding Customers</li>
                        <li>Adding a Job</li>
                        <li>Adding Vendors</li>
                        <li>Setting Up Additional Accounts</li>
                        <li>Adding Items</li>
                        <li>Entering Historical Transactions</li>
                    </ul>
                    <h3>Lesson 3 - Working with Lists</h3>
                    <ul>
                        <li>Using QuickBooks Lists</li>
                        <li>Editing the Chart of Accounts</li>
                        <li>Editing an Account</li>
                        <li>Adding a Subaccount</li>
                        <li>Customer, Vendor and Employee Centers</li>
                        <li>Custom Contact Fields</li>
                        <li>Working with the Customer Center and the Customers & Jobs Lis</li>
                        <li>Adding Customers</li>
                        <li>Providing Additional Customer Information</li>
                        <li>Sales Tax Settings</li>
                        <li>Transactions from the Customers & Jobs List</li>
                        <li>Working with the Employee Center</li>
                        <li>Working with the Vendor Center</li>
                        <li>Adding Vendors</li>
                        <li>Transactions from the Vendor List</li>
                        <li>Adding Custom Fields</li>
                        <li>Managing Lists</li>
                        <li>Renaming a list item</li>
                        <li>Printing a List</li>
                        <li>Adding or Editing Multiple Items at One Time</li>
                        <li>Working with the Lead Center</li>
                        <li>Things to note about the Lead Center</li>
                    </ul>
                    <h3>Lesson 4 - Working with Bank Accounts</h3>
                    <ul>
                        <li>Writing a QuickBooks Check</li>
                        <li>Using Bank Account Registers</li>
                        <li>Entering a Handwritten Check</li>
                        <li>Transferring Money between Accounts</li>
                        <li>Reconciling Checking Accounts</li>
                        <li>Marking Cleared Transactions</li>
                        <li>Viewing Cleared Checks in the Register</li>
                        <li>Locating Specific Transactions</li>
                    </ul>
                    <h3>Lesson 5 - Using Other Accounts in QuickBooks</h3>
                    <ul>
                        <li>Other Account Types in QuickBooks</li>
                        <li>Entering Credit Card Charges</li>
                        <li>Reconciling a Credit Card Statement</li>
                        <li>Marking Cleared Transactions</li>
                        <li>Paying a Credit Card Bill</li>
                        <li>Working with Asset Accounts</li>
                        <li>Setting Up Asset Accounts to Track Depreciation</li>
                        <li>Tracking a Loan with a Long Term Liability Account</li>
                        <li>Recording a Payment on a Loan</li>
                        <li>Introduction to Equity Accounts</li>
                    </ul>
                    <h3>Lesson 6 - Entering Sales Information</h3>
                    <ul>
                        <li>Using Sales Forms for Payment in the Future</li>
                        <li>Using Sales Forms for Payment at the Time of Sale</li>
                        <li>Filling in a Sales Form</li>
                        <li>Filling in the Line Item Area</li>
                        <li>Completing the Sales Form</li>
                        <li>Repeating a Sale</li>
                        <li>Creating Batch Invoices</li>
                        <li>Entering a New Item</li>
                        <li>Creating New Price Levels</li>
                        <li>Associating Price Levels with Customers</li>
                        <li>Assigning Price Levels to Individual Line Items</li>
                        <li>Using the Income Tracker</li>
                        <li>Creating Single Invoice Letters</li>
                        <li>Generating Reminder Statements</li>
                    </ul>
                    <h3>Lesson 7 - Receiving Payments and Making Deposits</h3>
                    <ul>
                        <li>Recording Payment in Full for a Single Job</li>
                        <li>Entering a Partial Payment</li>
                        <li>Applying One Payment to Multiple Jobs</li>
                        <li>Entering Overpayments</li>
                        <li>Handling Down Payments & Prepayments</li>
                        <li>Making Deposits</li>
                        <li>How QuickBooks Handles the Deposit</li>
                        <li>How to Handle a Customer Bounced Check</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 pt-5">
                <div class="coursetopics">
                    <h3>Lesson 8 - Entering and Paying Bills</h3>
                    <ul>
                        <li>Using QuickBooks for Accounts Payable</li>
                        <li>Entering Bills</li>
                        <li>Paying Bills</li>
                        <li>How QuickBooks Records Your Bill Payment</li>
                    </ul>
                    <h3>Lesson 9 - Analyzing Financial Data</h3>
                    <ul>
                        <li>Creating QuickReports</li>
                        <li>Zooming in on a QuickReport</li>
                        <li>Customizing QuickReports</li>
                        <li>Using the Report Center</li>
                        <li>Creating a Balance Sheet Previous Year Comparison Report</li>
                        <li>Filtering Reports</li>
                        <li>Saving Reports as a PDF</li>
                        <li>Using QuickZoom in a Report</li>
                        <li>Memorizing Reports</li>
                        <li>Creating Memorized Report Groups</li>
                        <li>Printing Reports</li>
                        <li>Processing Reports in Groups</li>
                        <li>Processing Multiple Miscellaneous Reports</li>
                        <li>Sending a Report to Microsoft Excel®</li>
                        <li>Creating an Income and Expense Graph</li>
                        <li>Using QuickZoom with Graphs</li>
                        <li>Customizing How Graphs Display</li>
                    </ul>
                    <h3>Lesson 10 - Setting Up Inventory</h3>
                    <ul>
                        <li>Turning on the Inventory Feature</li>
                        <li>Entering Products into Inventory</li>
                        <li>Creating Purchase Orders</li>
                        <li>Getting a Report of Purchase Orders</li>
                        <li>Receiving Inventory</li>
                        <li>Entering a Bill for Inventory Received</li>
                        <li>Manually Adjusting Inventory</li>
                        <li>Setting a Default Markup</li>
                    </ul>
                    <h3>Lesson 11 - Tracking and Paying Sales Tax</h3>
                    <ul>
                        <li>Overview of Sales Tax in QuickBooks</li>
                        <li>Setting Up your Tax Rates and Agencies</li>
                        <li>Grouping Single Taxes Together</li>
                        <li>Identifying Your Most Common Tax</li>
                        <li>Indicating Who and What Gets Taxed</li>
                        <li>Applying Tax to Each Sale</li>
                        <li>Determining What You Owe</li>
                        <li>Paying Your Tax Agencies</li>
                    </ul>
                    <h3>Lesson 12 - Doing Payroll with QuickBooks</h3>
                    <ul>
                        <li>Setting Up for Payroll</li>
                        <li>Setting Up Employee Payroll Information</li>
                        <li>Using Employee Defaults to Store Common Information</li>
                        <li>Setting Up Payroll Schedules</li>
                        <li>Adding a New Employee</li>
                        <li>Running a Payroll Schedule</li>
                        <li>Viewing the Paycheck</li>
                        <li>Printing Paychecks after Leaving Pay Employees Window</li>
                        <li>Printing or Emailing Pay Stubs after Leaving Pay Employees Window</li>
                        <li>Paying Payroll Taxes</li>
                        <li>Writing a Check for Payroll Taxes</li>
                    </ul>
                    <h3>Lesson 13 - Estimating and Progress Invoicing</h3>
                    <ul>
                        <li>Turning on Estimates and Progress Invoicing</li>
                        <li>Creating an Estimate</li>
                        <li>Creating Multiple Estimates</li>
                        <li>Creating an Invoice from an Estimate</li>
                        <li>Displaying Reports for Estimates</li>
                        <li>Updating Job Status</li>
                        <li>Making Estimates Inactive</li>
                    </ul>
                    <h3>Lesson 14 - Tracking Time</h3>
                    <ul>
                        <li>Tracking Time and Mileage</li>
                        <li>Entering Time Data</li>
                        <li>Recording Employee Time on Weekly Timesheets</li>
                        <li>Entering Mileage</li>
                        <li>Invoicing a Customer for Billable Expenses</li>
                        <li>Displaying Project Reports for Time Tracking</li>
                        <li>Viewing Time Data in More Detail</li>
                        <li>Creating Service Items for Subcontractors</li>
                        <li>Recording Nonemployee Time Worked
                        <li>Preparing a Check to Pay for Nonemployee Time Worked</li>
                    </ul>
                    <h3>Lesson 15 - Customizing Forms and Writing QuickBooks Letter</h3>
                    <ul>
                        <li>Creating New Templates</li>
                        <li>Customizing Fields on Forms</li>
                        <li>Changing Field Order on Forms</li>
                        <li>Displaying your Customized Form</li>
                        <li>Designing Custom Layouts for Forms</li>
                        <li>Changing the Position of Fields on Forms</li>
                        <li>Changing Field Widths</li>
                        <li>Changing Fonts, Borders and Colors</li>
                        <li>Previewing New Forms</li>
                        <li>Preparing Collection Letters</li>
                        <li>Editing QuickBooks Letters</li>
                    </ul>
                    <h3>Lesson 16 - Working with Multiple Currencies</h3>
                    <ul>
                        <li>Setting Up Multiple Currencies</li>
                        <li>Buying and Selling Items in Multiple Currencies</li>
                        <li>Creating a Purchase Order in a Foreign Currency</li>
                        <li>Receiving Inventory and Entering a Bill from a Foreign Vendor</li>
                        <li>Creating an Invoice for a Multicurrency Transaction</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("footer")
    <div class="container-fluid border-top">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12 col-xs-12 text-center">
                    <img src="{{asset("uploads/images/logo.png")}}" class="img-fluid"/>
                    <div class="social-network">
                        <ul>
                            <li>
                                <a href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="31px" height="31px">
                                        <image x="0px" y="0px" width="31px" height="31px"
                                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAfCAMAAAAocOYLAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAn1BMVEUAAAA7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg7WZg8WpiGmL/J0ePg5e/n6/Lj5/Czv9exvdb////P1uZgeKuVpcf7/P27xdu2wdmXp8intdG+yN2qt9Jmfa+RosXP1+bW3Op3jLidrMy4wtmjsc+On8RHY55UbqW0wNi/yd1EYZ1CX5xDYJxy/4YOAAAAEXRSTlMAAzh1n7bAGYjnBn73Icot5kRqeEoAAAABYktHRBp1Z+QyAAAAB3RJTUUH5AocERAxF4bYngAAAPxJREFUKM+Nk3t7giAUxlHQULxRWy1brXVxaxet1ff/bJFTzhHssfcv4MeBcyVEy3Ep83yPUdchtkY8kK0CPjJoKCKJFYkQ4ziRppIYcJpJW1mqrfuwutC8EMLj48nT83T20n7x74MAk3l+06Ldijow8Pw17/LoFiYH86WCq7f1uz7gKmuQFrlRfItdDBziou1O8XUnBpdQvd4XH4p/FsUBOCVMr7/yRt/AGfFs/gPcI77Nf4H7yL6sjgqequoP28P/ff4z5H8fp4Px4/xZXOUP59/ivFs/k9f1Q/U3uTD6x+BN/0D/dXkWm/17LsvyonH6cP8Pzs/g/N2d3yuPQjf68Rt+RwAAAABJRU5ErkJggg=="/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="31px" height="31px">
                                        <image x="0px" y="0px" width="31px" height="31px"
                                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAfCAMAAAAocOYLAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA7VBMVEUAAABVrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5VrO5gse6UyPCjz/CJw+9Xre5fsO5WrO6o0fB3u+/l7fLx8vLT5fGm0PDU5fFks+5rtu++2/Fcr+5Yre7f6vK72vGNxe9stu/a6PGBwO94vO/G3/Fbr+7c6PGdzPCLxO9esO6YyvDs8PLt8PJntO7D3fGw1fBisu7H3/F/v++z1vDo7vLS5PHu8fLw8fJ1u+/r7/KZyvBxue+62fGby/DE3vHV5fF6ve+czPDd6fGx1fCAv+9Wre7///+b8aEuAAAAEXRSTlMAAzh1n7bAGYjnBn73Icot5kRqeEoAAAABYktHRE4ZYXHfAAAAB3RJTUUH5AocERIFBAROqQAAATBJREFUKM+Fk3d7gjAQxgMBjIDodVCqZ0uXrdi9h92t3d//6xTIEFCevP8kz/1yGe9dCFEyTGrZjm1R0yCzarAmSDVZo0Jdz4eifM8t4lYAVQWtKW53YFadtsqeh9MFYgc3gPkK+B08qJOXP8yv5X72TFYJLiwuLYcQrmRzlrrGbYlWQ467PUTsr63HuVEGMXl4Aze3snF7B3MNdvOwSSjne4jDJB1HHOP+QR6mxOI8Osy2PRodC37Cwxax+SQ+PcOCzsVlbeLwyQWWNBTckflwWeJXKl+cD9c3RX4L8nwqfbkbT/F9JIJUvh8geVD4sSuDpvQv1dPgWfAX1WhGwf/XN5H9rmrBVP2SiTAWPz7L9RP1j78m3+Ne/+f3r1J/bf/o+k/bv9r+1/4f7f+r/b//N18+Uqb/VH0AAAAASUVORK5CYII="/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="30px" height="30px">
                                        <image x="0px" y="0px" width="30px" height="30px"
                                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAulBMVEUAAAAAerkAerkAerkAerkAerkAerkAerkAerkAerkAerkAerkAerkAerkAerkAerlCm8lortInjcJeqc/x8vLq7/AfisCTw9xOocw/msjS4usRgr0Whb4zk8UJfrsojsJbp84LgLw5lsYJf7tiq9CRwtuButg8mMdqr9IeicCs0OLL3+mLv9pFnMmPwdtBmsiax92+2eYEfLrc6O2/2eaXxd261+XF3Oe11OQhisFMoMsvksQ9mcj///8qSbQyAAAAD3RSTlMAFFiNrMBBtfwiuFHxZf30Q8ReAAAAAWJLR0Q90G1RWQAAAAd0SU1FB+QKHBESJT9qbmEAAAEDSURBVCjPhZPZVsQgDIYptKXtLHHJuC91xnHfd9H3fy4jTasGPPwXOSHfIZAQlBqUaZMXRW50pkKVtgJWZUsB6wb+qKl/09EYhMajHzqZQqDpZNgbocR5f+0zr6yuyfzd+f5W64izDcEbX5F3NxFxS+b/rs96b3uGO7sSW+oVd2Nv/yC4XZUp3XmHbdseAZn54nh5cspcK9M5Z3T2OZC5uCSDV13UqFxg1rWP5qqQ+OZ2SfbOR4sA3wM8PCI+MZbJn2nxgvjKyU0Ev/XY9IXFse7bEsXUFm5qFNvhSaK4HB703Tm3ADIftJg799k/KI9DKB6HxDClRjE1yKlvkPpE/33BLw/YM0BQ12GbAAAAAElFTkSuQmCC"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="29px" height="29px">
                                        <image x="0px" y="0px" width="29px" height="29px"
                                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAMAAABhTZc9AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAY1BMVEUAAADSIRTSIRTSIRTSIRTSIRTSIRTSIRTSIRTSIRTSIRTSIRTSIRTSIRTbTEHjdWzTJBfvr6r////mg3v0y8j31tTlgXnwtrLdWU/xurbfYVj//v7XPDHtpJ/++Pjuraj+/Pzk276OAAAADXRSTlMAJXe34fw9vA2iI9nnvLFkqgAAAAFiS0dEEnu8bAAAAAAHdElNRQfkChwREjhcbAK4AAAAtUlEQVQoz4WT5xaDIAyFw1IRQ53d6/2fsm2qZVTh+xPOvQdIQgBYYFxIhUoKziCmKNFRFoFXaQzRlTNrgzGm/pkN/tPMdmVwDfM9XOM6mrLFLT6Zz6XYncPOhb2bQIu26326llQGnOLQhwykchAUx8gdSRUgKU6k7Q+LO5EqQXnuEe3JdxVg4CKeL87FaO/1dg/2Bvc+ntG96ZzT9aZ7le5z5o3S75uZjfRcZWYyM8+Zv7D1j14BpSWtHLJnZgAAAABJRU5ErkJggg=="/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-xs-12">
                    <div class="block-footer">
                        <h3>Business Software</h3>
                        <ul>
                            <li>
                                <a href="#">CAS Suite</a>
                            </li>
                            <li>
                                <a href="#">QuickBooks Desktop</a>
                            </li>
                            <li>
                                <a href="#">QuickBooks Online</a>
                            </li>
                            <li>
                                <a href="#">Sage</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-6 col-xs-12">
                    <div class="block-footer">
                        <h3>Certifications</h3>
                        <ul>
                            <li>
                                <a href="#">QuickBooks Certified User</a>
                            </li>
                            <li>
                                <a href="#">Microsoft Certification</a>
                            </li>
                            <li>
                                <a href="#">IC3 Digital Literacy Certification</a>
                            </li>
                            <li>
                                <a href="#">Entrepreneurship and Small Business</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-xs-12">
                    <div class="block-footer">
                        <h3>About us</h3>
                        <ul>
                            <li>
                                <a href="#">Contact us</a>
                            </li>
                            <li>
                                <a href="#">Our Story</a>
                            </li>
                            <li>
                                <a href="#">Our Mission</a>
                            </li>
                            <li>
                                <a href="#">Our Vision</a>
                            </li>
                            <li>
                                <a href="#">Core Values</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-6 col-xs-12">
                    <div class="block-footer">
                        <h3>Testing Centers</h3>
                        <ul>
                            <li>
                                <a href="#">Login</a>
                            </li>
                            <li>
                                <a href="#">Register</a>
                            </li>
                            <li>
                                <a href="#">FAQs</a>
                            </li>
                            <li>
                                <a href="#">Exam policies</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row border-top mt-3 py-4">
                <div class="col-lg-8 col-md-8 col-12">
                    Copyright ©2020 <a href="#" class="btn btn-link">Innovation School of Education</a>. All Rights
                    Reserved.
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="footer-careers">
                        <ul>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="#">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
