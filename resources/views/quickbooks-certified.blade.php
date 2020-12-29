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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
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
                    <source srcset="{{asset("/uploads/images/slideshow/banner3.png")}}" media="(min-width: 1400px)">
                    <source srcset="{{asset("/uploads/images/slideshow/banner3.png")}}" media="(min-width: 769px)">
                    <source srcset="{{asset("/uploads/images/slideshow/banner3.png")}}" media="(min-width: 577px)">
                    <img srcset="{{asset("/uploads/images/slideshow/banner3.png")}}" alt="responsive image"
                         class="d-block img-fluid">
                </picture>
                <div class="container d-none">
                    <div class="carousel-caption text-left">
                        <h1>Innovation School <br/>of Education.</h1>
                        <p>Certificate courses designed to <br/>suit your learning desire </p>
                        <img src="{{asset("/uploads/images/icon/certiport.png")}}" alt="">
                        <img src="{{asset("/uploads/images/icon/qb.png")}}" alt="">
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
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 pt-5">
                    <div class="row">
                        <div class="col-3 p-0">
                          <div class="nav flex-column nav-pills custom-tabs-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Course Overview</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-CourseObjectives" role="tab" aria-controls="v-pills-CourseObjectives" aria-selected="false">Course Objectives</a>
                            <a class="nav-link" id="v-pills-CoursePrerequisites-tab" data-toggle="pill" href="#v-pills-CoursePrerequisites" role="tab" aria-controls="v-pills-CoursePrerequisites" aria-selected="false">Course Prerequisites</a>
                            <a class="nav-link" id="v-pills-Badging-tab" data-toggle="pill" href="#v-pills-Badging" role="tab" aria-controls="v-pills-Badging" aria-selected="false">Badging</a>
                            <a class="nav-link" id="v-pills-TrainingSchedule-tab" data-toggle="pill" href="#v-pills-TrainingSchedule" role="tab" aria-controls="v-pills-TrainingSchedule" aria-selected="false">Training Schedule</a>
                            <a class="nav-link" id="v-pills-CourseFee-tab" data-toggle="pill" href="#v-pills-CourseFee" role="tab" aria-controls="v-pills-CourseFee" aria-selected="false">Course Fee</a>
                          </div>
                        </div>
                        <div class="col-9 p-0">
                          <div class="tab-content custom-tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <img src="{{asset("/uploads/images/section/tabs-overview.png")}}" class="img-fluid mx-auto d-block"/>
                                <h3 class="my-5">Course Overview</h3>
                                QuickBooks is the most widely used small business accounting software in Cambodia. <br/>
                                As more enterprises emerge, the knowledge of bookkeeping and accounting software is becoming mission-critical for the success of organizations. Consequently, there is a growing demand for related specialization.  <br/>
                                QuickBooks Certified User (QBCU) is a globally recognized Certificate issued by Intuit in association with Pearson Vue’s Certiport, to affirm your expertise in QuickBooks.  <br/>
                                A Certiport survey of accounting instructors revealed that 84% believe students who are preparing for an accounting career should be conversant in QuickBooks, and the same easily applies to aspiring managers and small business owners.  <br/>
                                Whether you already are, or espouse to be an expert user, it is wise to pack in the credentials to prove your capability. ISE offers you an affordable learning stream to acquire both the skills and the QBCU Certification.
                            </div>
                            <div class="tab-pane fade p-5" id="v-pills-CourseObjectives" role="tabpanel" aria-labelledby="v-pills-CourseObjectives-tab">
                                <h3>
                                    Course Objectives
                                </h3>
                                <p>
                                    ISE’s QuickBooks User Certification Course is designed to impact you with the underlying technical understanding, user knowledge, as well as the hands-on skills to inde
                                    pendently command the software and its features for working with customers, vendors, employees, creating bank transactions, etc. The ISE QuickBooks Certification Course is divided into two learning streams: QuickBooks Desktop and QuickBooks Online. 
                                    Although both streams require slighly different approaches, successful candidates arrive at the same QBCU certification.  </p>
                                
                                <h3>Quickbooks Desktop Certified User</h3>
                                <div class="block-tab">
                                    <h5>QuickBooks Setup</h5>
                                    <ul>
                                        <li>What information is required before they set up a QuickBooks file</li>
                                        <li>How to start a new company data file in QuickBooks (Easy Step Interview)</li>
                                        <li>How to start a new company data file in QuickBooks (Easy Step Interview)</li>
                                        <li>How to keep the lists and preferences from an old file while removing old transactions</li>
                                        <li>How to customize the home page</li>
                                        <li>How to set up lists (customers, vendors, items, etc.). This includes understanding which 
                                            names and items should appear on which lists.QuickBooks Utilities And Gener Al Product 
                                            Knowledge </li>
                                    </ul>
                                    <h5>QuickBooks Utilities And Gener Al Product Knowledge</h5>
                                    <ul>
                                        <li>How to navigate or move around QuickBooks (use home page, menus, icon bar etc.)</li>
                                        <li>How to back up and restore a data file</li>
                                        <li>How to determine the release number and how to update QuickBooks</li>
                                        <li>How to use QuickBooks in a single-user and multi- user mode</li>
                                        <li>What versions and editions of QuickBooks are available for a specific year (desktop version)</li>
                                        <li>How to password protect QuickBooks</li>
                                        <li>How and why to use preferences</li>
                                    </ul>
                                    <h5>List Management</h5>
                                    <ul>
                                        <li>How to manage lists (customers, vendors, items, etc.). List management include:</li>
                                        <li>Adding new entries</li>
                                       <li> Deleting entries</li>
                                        <li>Editing entries</li>
                                       <li> Merging entries</li>
                                    </ul>
                                    <h5>Items</h5>
                                    <ul>
                                      <li>  How QuickBooks uses items to perform the necessary accounting entries</li>
                                       <li> The different types of items and when to use each type</li>
                                       <li> How to use items for different types of scenarios. These include companies that sell:</li>
                                       <li> Products for a specified price</li>
                                       <li> Services for a specified price</li>
                                        <li>Unique products or services that have different prices for each sale</li>
                                       <li> One service or product</li>
                                    </ul>
                                    <h5>Sales</h5>
                                    <ul>
                                       <li> Who should be listed in the Customer Center</li>
                                       <li> How to navigate and use the Customer Center</li>
                                       <li> How to complete the workflow (from the sale to making the deposit) for:</li>
                                        <li>
                                            <ul>
                                                Invoicing (A/R)
                                                Sales Receipts (no A/R)
                                            </ul>
                                        </li>
                                        <li>How QuickBooks uses the Undeposited Funds, Accounts Receivable, and checking accounts in the invoicing cycle.</li>
                                        <li>How and why to record a customer credit</li>
                                        <li>How and why to create statements</li>
                                        <li>How to handle bounced (NSF) checks</li>
                                    </ul>
                                    <h5>Purchases</h5>
                                    <ul>
                                       <li> Who should be listed in the Vendor Center</li>
                                       <li> How to navigate and use the Vendor Center</li>
                                        <li>The different workflows for making purchases</li>
                                        <li>Entering and paying bills (A/P) 6.3.2 Writing checks</li>
                                        <li>Using a Credit Card</li>
                                        <li>Using a Debit Card</li>
                                        <li>How to record the transactions in the purchase workflows</li>
                                        <li>How and why to record a Vendor credit</li>
                                        <li>How to complete the inventory workflow (PO to payment)</li>
                                        <li>How to set up, collect and pay sales tax</li>
                                        <li>Bank reconciliation</li>
                                    </ul>
                                    <h5>Payroll</h5>
                                    <ul>
                                        <li>The differences between the Payroll Services available from QuickBooks</li>
                                        <li>How to set up Payroll (including employees, Federal and State taxes and basic Payroll
                                        deductions) using the Payroll Setup Wizard.</li>
                                        <li>How to set up an employee’s earnings and sick or vacation time</li>
                                        <li>How to track sick or vacation time (accruing hours and using “banked” hours)</li>
                                        <li>How and why to setup Payroll Schedules</li>
                                        <li>How to run Payroll</li>
                                        <li>How and why to pay Payroll Liabilities</li>
                                        <li>How to prepare payroll forms (941, W2) in QuickBooks</li>
                                        <li>Track time and use it for payroll or for invoicing customers</li>
                                    </ul>
                                    <h5>Reports</h5>
                                    <ul>
                                        <li>Why and how to use the Report Center</li>
                                        <li>How to customize reports (report modifications, collapsing subaccounts, etc.)</li>
                                        <li>The basic question that each report answers (basic understanding of each report)</li>
                                        <li>How and why to process multiple reports</li>
                                        <li>How and why to send reports to Excel (understand and use the basic and advanced tab)</li>
                                        <li>How and why to process multiple reports</li>
                                        <li>How to memorize reports</li>
                                    </ul>
                                    <h5>Basic accounting</h5>
                                    <ul>
                                        <li>What the basic financial statements are and have a basic understanding of what they mean.</li>
                                        <li>The difference between cash and accrual reports</li>
                                        <li>How and why to set a closing date</li>
                                        <li>How to enter a Journal Entry if asked to do so by an accountant (they do not need to fully understand what accounts to debit or credit)</li>
                                    </ul>
                                    <h5>Customization/Saveing Time and Shortcuts</h5>
                                    <ul>
                                        <li>How and why to memorize transactions (automatically enter)</li>
                                        <li>How to set up multiple users and what level of access can be granted or denied</li>
                                        <li>How and why to create custom fields (customers, vendors, and employees)</li>
                                        <li>How to customize an invoice</li>
                                    </ul>
                                </div>
                                <h3>QuickBooks Online Certified user</h3>
                                <div class="block-tab">
                                    <h5>QuickBooks Setup And Maintenance </h5>
                                    <ul>
                                        <li>What information QuickBooks does and does NOT require when creating a new QuickBooks account</li>
                                        <li>What lists can be imported and the basic steps to do so (including what is NOT imported)</li>
                                        <li>How to modify/change basic elements after set up (e.g. accounts, company address, etc.)</li>
                                        <li>How to setup users including a basic knowledge of the access rights available for different user types.</li>
                                        <li>How to navigate or move around QuickBooks. A student should know:
                                            <ul>
                                                <li>What info and functionality is found in the 3 key access points – navigation bar,</li>
                                                <li>global create, and company settings</li>
                                                <li>What’s located on the home page and how to control what is or isn’t seen</li>
                                                <li>What each button (e.g. save, more, etc.) does on major forms (e.g. invoice, bill, etc.)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h5>List Management</h5>
                                    <ul>
                                        <li>The names of the major lists in QuickBooks and what type of information is tracked on each.</li>
                                        <li>How to manage lists (Customers, Chart of Accounts, Products and Services, etc.). This includes:
                                            <ul>
                                                <li>Who should appear on which names list (e.g. employees or customers) and how to handle situations where the same person/ company should be on more than one list.</li>
                                                <li>Adding new list entries</li>
                                                <li>Removing list entries (including what QuickBooks does if an entry has a balance) Editing list entries</li>
                                                <li>Merging list entries (including the basic rules of what can and can’t be merged)</li>
                                            </ul>
                                        </li>
                                        <li>Which names MUST appear on which forms (i.e. which names are required on specific transactions otherwise QuickBooks will NOT save the transaction)</li>
                                    </ul>
                                    <h5>Sales/Money-In</h5>
                                    <ul>
                                        <li>How to set up a Product or Service
                                            <ul>
                                                <li>How this set up allows QuickBooks to perform the appropriate accounting behind the scenes to correctly impact Financial Statements</li>
                                            </ul>
                                        </li>
                                        <li>How to set up Customers including how to specify when payment is due (terms) and track multiple projects/jobs for a single customer (sub-customers)</li>
                                        <li>How to record sales/revenue. This includes:
                                            <ul>
                                                <li>Knowing the advantages of using built in sales forms (e.g. invoice) over other methods (e.g. Bank Deposit or Journal Entry)</li>
                                                <li>Completing the Invoicing (A/R) and Sales</li>
                                                <li>Receipt (no A/R) workflow from sale to bank deposit. A student should know the differences between these methods and when to use each.</li>
                                                <li>How QuickBooks impacts and uses the Undeposited Funds, Accounts Receivable, and the bank accounts in the invoicing cycle.</li>
                                                <li>How to invoice for billable expenses (includes how to turn this feature on and record expenses to begin the process)</li>
                                                <li>How and why to record a customer credit</li>
                                            </ul>
                                        </li>
                                        <li>How and why to use Estimates, Delayed Charges, and Credit Memos. The student should understand how these transactions affect customer balances.</li>
                                    </ul>
                                    <h5>Purchases/Money-Out</h5>
                                    <ul>
                                        <li>How to set up a Product or Service to be used on purchase Forms and when this is appropriate
                                            <ul>
                                                <li>How this set up allows QuickBooks to perform the appropriate accounting behind the scenes to correctly impact Financial Statements</li>
                                            </ul>
                                        </li>
                                        <li>How to set up Vendors</li>
                                        <li>When to use the following transactions/workflows. This includes knowing the steps to record them in QuickBooks when the company does NOT have connected bank accounts (online banking). And how each affects the Vendor’s Balance
                                            <ul>
                                                <li>Purchase Orders</li>
                                                <li>Entering and paying bills (A/P)</li>
                                                <li>Recording Checks (hand written or printed)</li>
                                                <li>Recording Credit and Debit Card transactions</li>
                                                <li>Recording EFT’s, online payments, wire transfers, etc.</li>
                                                <li>Vendor Credits</li>
                                            </ul>
                                        </li>
                                        <li>When and how to void vs. delete a check</li>
                                        <li>How to use the Vendor page and reports to identify how much your company owes, and when payment is due.</li>
                                    </ul>
                                    <h5>Basic Accounting</h5>
                                    <ul>
                                        <li>What the basic financial statements are and have a basic understanding of their sections and what they mean.</li>
                                        <li>The difference between cash and accrual reports</li>
                                        <li>How and why to set a closing date</li>
                                        <li>How to enter a Journal Entry if asked to do so by an accountant (students do not need to understand how to determine which accounts to debit or credit)</li>
                                        <li>How to use the Audit Log to determine changes made by specific users.</li>
                                    </ul>
                                    <h5>Customization/Saving Time</h5>
                                    <ul>
                                        <li>How to set up QuickBooks to track income and expenses for multiple locations, or to separate transactions by class (e.g. department, profit center, etc.)</li>
                                        <li>How to create custom fields on invoices.</li>
                                        <li>How and why to make transactions recurring, including which transactions can be made recurring.</li>
                                        <li>Which forms can be customized and the steps to customize a sales form</li>
                                        <li>How to use a keyboard shortcut to find a list of keyboard shortcuts.</li>
                                        <li>The time saving benefits of using QuickBooks online. These include:
                                            <ul>
                                                <li>Using QuickBooks on phones and tablets (IOS and Android). Students just need to be familiar with basic functionality and understand that QuickBooks mobile can use a mobile device’s camera, phone, and GPS to save time.</li>
                                                <li>Connecting Apps to expand what QuickBooks does. Students should know where to find apps and know that apps expand what QuickBooks does and automatically synch data with QuickBooks.</li>
                                                <li>Theabilitytohaveusers/employeeswith different operating systems (e.g. Mac vs. P.C.) and web browsers (e.g. Chrome vs. Safari) still access the same data.</li>
                                                <li>Not needing to backup, and no IT issues (e.g. reinstalling software in cases of crashes or new computer purchases) usually associated with desktop software.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade p-5" id="v-pills-CoursePrerequisites" role="tabpanel" aria-labelledby="v-pills-CoursePrerequisites-tab">
                                <img src="{{asset("/uploads/images/section/coursePrereuisites.png")}}" class="img-fluid mx-auto d-block"/>
                                <h3>Course Prerequisites</h3>
                                
                                In addition to fundamental knowledge in accounting and bookkeeping, you are expected to have some basic proficiency in the use of Windows PC and online browsing . For those without an 
                                Accounting background, we recommend to first go through a course to understand best practices in accounting. For those with accounting knowledge but no PC skills, please consider our other courses with Microsoft Excel and learning to work with worksheets
                                    
                            </div>
                            <div class="tab-pane fade p-5" id="v-pills-Badging" role="tabpanel" aria-labelledby="v-pills-Badging-tab">
                                <h3>Badging</h3>
                                <h3>QuickBooks Certified User badges</h3>
                                Digital badges are web-enabled versions of a credential, certification or learning outcome. <br/>
                                Representing your credential as a badge gives you the ability to share your skills online in a way that is simple, trusted and can be easily verified in real time.
                                <br/>
                                QuickBooks certifications are some of the most requested skills in online job postings. Your digital badge makes it easy for you to validate abilities with potential employers on social media sites such as LinkedIn, Facebook and Twitter, as well as email and online portfolios.
                                <br/>
                                When you earn one of the QBCU certifications you will be notified of the corresponding digital badge. Accept and use your digital badges to tell potential employers, academic institutions, colleagues and peers about your QuickBooks credentials.
                                <br/>
                                There are currently digital badges available:
                        
                                <img src="{{asset("/uploads/images/section/QBCU-Badge-Online.png")}}" class="img-fluid my-5 mx-auto d-block"/>

                                <h3>Flash your badge</h3>
                                Acclaim is the digital badging platform used by Certiport. It helps students move forward professionally by quickly establishing credibility for opportunities in higher education and the job market. 
                                Each badge contains verifiable data that tells employers and admission committees what you did, who says you did it, and why it matters. What does this mean for you? Watch the video to find out.
                                <div class="">
                                    <img src="{{asset("/uploads/images/section/Flash-your-badge.png")}}" class="img-fluid my-5 mx-auto d-block"/>
                                </div>
                            </div>
                            <div class="tab-pane fade p-5" id="v-pills-TrainingSchedule" role="tabpanel" aria-labelledby="v-pills-TrainingSchedule-tab">
                                <h3>Training Schedule</h3>
                                <h3>QuickBooks Desktop Training Schedule</h3>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 137px;">Course</th>
                                            <th style="width: 63px;">Fee</th>
                                            <th style="width: 134px;">Time</th>
                                            <th style="width: 213px;">Number of Day</th>
                                            <th style="width: 57px;">Location</th>
                                            <th style="width: 87px;">Enrollment</th>
                                        </tr>
                                    </thead>
                                    <tbody class="font-size-10">
                                        <tr>
                                            <td class="font-sm-6"><strong>QuickBooks Desktop Training</strong></td>
                                            <td ><strong>$290</strong></td>
                                            <td class="font-sm-6">8:00 am - 12:00 pm <br> 1:30 pm - 5:30 pm</td>
                                            <td class="font-sm-6">4-Day (every Saturday - Sunday)</td>
                                            <td>ISE</td>
                                            <td><a class="text-success" href="/register">Register</a></td>
                                        </tr>
                                        <tr>
                                            <td class="font-sm-6"><strong>QuickBooks Desktop Training</strong></td>
                                            <td ><strong>$290</strong></td>
                                            <td class="font-sm-6">8:00 am - 12:00 pm<br> 1:30 pm - 5:30 pm</td>
                                            <td class="font-sm-6">4-Day (Monday - Thursday)</td>
                                            <td >ISE</td>
                                            <td ><a class="text-success" href="/register">Register</a></td>
                                        </tr>
                                        <tr>
                                            <td><strong>QuickBooks Desktop Training</strong></td>
                                            <td><strong>$290</strong></td>
                                            <td class="font-sm-6">6:00 pm - 9:00 pm</td>
                                            <td class="font-sm-6">10-Day (Monday - Friday)</td>
                                            <td>ISE</td>
                                            <td><a class="text-success" href="/register">Register</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h3>Self-paced QuickBooks Study</h3>
                                <div class="row">
                                    <div class="col-md-8">
                                        This online, video-based course prepares candidates to take the QuickBooks Online or the QuickBooks Desktop Certified User exam. Includes 12-16 hours of training including videos, online workbook, and quizzes.
 
Please allow up to three business days to receive an email with an access code and instructions. Once you receive the code, you will be able to choose whether you want to take the QuickBooks Online course or the QuickBooks Desktop course.
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{asset("/uploads/images/icon/qb.png")}}" class="img-fluid my-3 mx-auto d-block"/>
                                        <a href="#" class="btn btn-block btn-success rounded-pill">Self-paced study</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-5" id="v-pills-CourseFee" role="tabpanel" aria-labelledby="v-pills-CourseFee-tab">
                                <img src="{{asset("/uploads/images/section/coursefee.png")}}" class="img-fluid my-5 mx-auto d-block"/>
                                <h3>Self-paced QuickBooks Study</h3>
                                <div class="w-100 border-bottom">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <img src="{{asset("/uploads/images/icon/qb.png")}}" class="img-fluid my-3 mx-auto d-block"/>
                                            <p>Our Price: <span class="text-danger">$450.00</span></p>
                                        </div>
                                        <div class="col-md-8 py-3">
                                            <h5 class="font-md-6"><a href="#">GMetrix Practice Tests for one of the following certification exam</a></h5>
                                            <p class="font-weight-normal-light">
                                                This product includes a single user license for GMetrix Practice Tests for one of the following certification exams: Intuit QuickBooks Desktop Certified User, Intuit QuickBooks Desktop 2017 Certified User, or Intuit QuickBooks Online Certified User.
                                            </p>
                                            <a href="#" class="btn btn-link text-success">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100 border-bottom">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <img src="{{asset("/uploads/images/icon/qb.png")}}" class="img-fluid my-3 mx-auto d-block"/>
                                            <p>Our Price: <span class="text-danger">$156.00</span></p>
                                        </div>
                                        <div class="col-md-8 py-3">
                                            <h5 class="font-md-6"><a href="#">QuickBooks Certified User Exam Voucher+ Retake+GMetrix Practice Tests</a></h5>
                                            <p class="font-weight-normal-light">
                                                This product includes one Intuit® QuickBooks Certified Exam voucher with a retake + GMetrix Practice Tests.
                                            </p>
                                            <a href="#" class="btn btn-link text-success">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100 border-bottom py-3">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <img src="{{asset("/uploads/images/icon/qb.png")}}" class="img-fluid my-3 mx-auto d-block"/>
                                            <p>Our Price: <span class="text-danger">$225.00</span></p>
                                        </div>
                                        <div class="col-md-8 py-3">
                                            <h5 class="font-md-6"><a href="#">Self paced QuickBooks Study</a></h5>
                                            <p class="font-weight-normal-light">
                                                This online, video-based course prepares candidates to take the QuickBooks Online or the QuickBooks Desktop Certified User exam. Includes 12-16 hours of training including videos, online workbook, and quizzes.
                                            </p>
                                            <a href="#" class="btn btn-link text-success">Learn more</a>
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
@section("footer")
    <div class="container-fluid bg-white border-top">
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
