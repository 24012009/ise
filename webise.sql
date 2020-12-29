/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : web_ise

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-12-29 09:53:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customfield` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` smallint(6) NOT NULL,
  `order_by` smallint(6) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('00000000000000000001', 'Quickbooks', null, null, '1', '1', null, null, '2020-05-25 02:57:43', '2020-05-25 02:57:43');
INSERT INTO `category` VALUES ('00000000000000000003', 'ESB', null, null, '1', '2', null, null, '2020-05-25 03:34:13', '2020-12-04 08:33:42');
INSERT INTO `category` VALUES ('00000000000000000004', 'More', null, null, '0', '3', null, null, '2020-05-25 03:34:48', '2020-12-04 08:33:52');

-- ----------------------------
-- Table structure for columns
-- ----------------------------
DROP TABLE IF EXISTS `columns`;
CREATE TABLE `columns` (
  `col_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) DEFAULT NULL,
  `col_name` varchar(255) DEFAULT NULL,
  `title_col` varchar(255) DEFAULT NULL,
  `container` text DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `labels_link` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `labels` varchar(255) DEFAULT NULL COMMENT 'link to products, eg: quickbook pro, quickbook prem',
  `class` varchar(255) DEFAULT NULL COMMENT 'class css',
  `custom_field` text DEFAULT NULL,
  `custom_field1` text DEFAULT NULL,
  `custom_field2` text DEFAULT NULL,
  `is_order` int(1) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`col_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of columns
-- ----------------------------
INSERT INTO `columns` VALUES ('1', '1', 'column name 0', null, null, '/uploads/images/section/img-01.png', null, null, null, null, '', null, null, '0', '1', null, '2020-11-30 16:23:07');
INSERT INTO `columns` VALUES ('2', '1', 'Learning never stops', 'Learning never stops', 'ISE represents a progressive innovation of education in accredited courses tailored to suit your own desire to learn.<br />\r\nWith years of experience in hands-on training coupled with the most modern methods of knowledge delivery, ISE stands out as exemplary in impacting practical skills in our trainees which in turn empowers them to reach their greater potentials and secure a more promising future.<br />\r\nWhether you aim to become an accountant, software engineer, consultant, manager or even a Chief Executive Officer of your own business; ISE will equip you with the knowledge and skills to make it in the real world.', '/uploads/images/section/img-01.png', null, null, null, null, '', null, null, '1', '1', null, '2020-11-30 16:23:07');
INSERT INTO `columns` VALUES ('3', '2', 'column name 0', null, null, '/uploads/images/section/img-02.png', null, null, null, null, '', null, null, '0', '1', null, '2020-11-30 16:53:48');
INSERT INTO `columns` VALUES ('4', '2', 'QuickBooks Certified User Success', 'QuickBooks Certified User Success', '<iframe allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" frameborder=\"0\" height=\"480\" src=\"https://www.youtube.com/embed/0D-4mAD-_fE\" width=\"100%\"></iframe>', '', null, null, null, null, '', null, null, '1', '1', null, '2020-11-30 16:53:48');
INSERT INTO `columns` VALUES ('5', '3', 'Our most popular courses', 'Our most popular courses', 'We offer numerous Certification programs ranging from language to technology, business to finance.<br />\r\nHowever, these are the ones people are mostly excited about lately', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-12 04:04:54');
INSERT INTO `columns` VALUES ('6', '3', 'Classroom Training', 'Classroom Training', null, '/uploads/images/icon/school.png', null, null, 'practice,take-the-exam,quickbooks-certification', null, '', null, null, '1', '1', null, '2020-12-12 04:04:54');
INSERT INTO `columns` VALUES ('7', '3', 'Online Training', 'Online Training', null, '/uploads/images/icon/study.png', null, null, 'practice,take-the-exam,online-training', null, '', null, null, '2', '1', null, '2020-12-12 04:04:54');
INSERT INTO `columns` VALUES ('8', '3', 'Self-paced Study', 'Self-paced Study', null, '/uploads/images/icon/computer.png', null, null, 'self-paced-study,practice,take-the-exam', null, '', null, null, '3', '1', null, '2020-12-12 04:04:54');
INSERT INTO `columns` VALUES ('9', '4', 'QuickBooks Certification', 'QuickBooks Certification', '<div class=\"col-lg-6 col-md-6 pt-5\">\r\n<div class=\"coursetopics\">\r\n<h3>Lesson 1 - Getting Started</h3>\r\n\r\n<ul>\r\n	<li>Introducing QuickBooks</li>\r\n	<li>Getting Around in QuickBooks</li>\r\n	<li>All the Accounting You Need to Know</li>\r\n	<li>About the Chart of Accounts</li>\r\n	<li>About Assets, Liabilities and Equity</li>\r\n	<li>Cash versus Accrual Bookkeeping</li>\r\n	<li>Measuring Business Profitability</li>\r\n	<li>General Journal Transactions</li>\r\n	<li>Getting Help while Using QuickBooks</li>\r\n	<li>Exiting QuickBooks</li>\r\n	<li>Moving between Company Files</li>\r\n</ul>\r\n\r\n<h3>Lesson 2 - Setting Up QuickBooks</h3>\r\n\r\n<ul>\r\n	<li>Creating a QuickBooks Company</li>\r\n	<li>Starting the EasyStep Interview</li>\r\n	<li>Entering Company Information</li>\r\n	<li>Choosing your Company Industry</li>\r\n	<li>Selecting how Your Company is Organized</li>\r\n	<li>Customizing QuickBooks for Your Business</li>\r\n	<li>Indicating What You Sell</li>\r\n	<li>Entering Sales Information</li>\r\n	<li>Entering Sales Tax Information</li>\r\n	<li>Creating Estimates</li>\r\n	<li>Creating Sales Orders</li>\r\n	<li>Choosing Remaining Preferences</li>\r\n	<li>Choosing a Start Date</li>\r\n	<li>Reviewing the Chart of Accounts</li>\r\n	<li>Entering Bank Accounts and Opening Balances</li>\r\n	<li>Completing Company File Setup</li>\r\n	<li>Adding Customers</li>\r\n	<li>Adding a Job</li>\r\n	<li>Adding Vendors</li>\r\n	<li>Setting Up Additional Accounts</li>\r\n	<li>Adding Items</li>\r\n	<li>Entering Historical Transactions</li>\r\n</ul>\r\n\r\n<h3>Lesson 3 - Working with Lists</h3>\r\n\r\n<ul>\r\n	<li>Using QuickBooks Lists</li>\r\n	<li>Editing the Chart of Accounts</li>\r\n	<li>Editing an Account</li>\r\n	<li>Adding a Subaccount</li>\r\n	<li>Customer, Vendor and Employee Centers</li>\r\n	<li>Custom Contact Fields</li>\r\n	<li>Working with the Customer Center and the Customers &amp; Jobs Lis</li>\r\n	<li>Adding Customers</li>\r\n	<li>Providing Additional Customer Information</li>\r\n	<li>Sales Tax Settings</li>\r\n	<li>Transactions from the Customers &amp; Jobs List</li>\r\n	<li>Working with the Employee Center</li>\r\n	<li>Working with the Vendor Center</li>\r\n	<li>Adding Vendors</li>\r\n	<li>Transactions from the Vendor List</li>\r\n	<li>Adding Custom Fields</li>\r\n	<li>Managing Lists</li>\r\n	<li>Renaming a list item</li>\r\n	<li>Printing a List</li>\r\n	<li>Adding or Editing Multiple Items at One Time</li>\r\n	<li>Working with the Lead Center</li>\r\n	<li>Things to note about the Lead Center</li>\r\n</ul>\r\n\r\n<h3>Lesson 4 - Working with Bank Accounts</h3>\r\n\r\n<ul>\r\n	<li>Writing a QuickBooks Check</li>\r\n	<li>Using Bank Account Registers</li>\r\n	<li>Entering a Handwritten Check</li>\r\n	<li>Transferring Money between Accounts</li>\r\n	<li>Reconciling Checking Accounts</li>\r\n	<li>Marking Cleared Transactions</li>\r\n	<li>Viewing Cleared Checks in the Register</li>\r\n	<li>Locating Specific Transactions</li>\r\n</ul>\r\n\r\n<h3>Lesson 5 - Using Other Accounts in QuickBooks</h3>\r\n\r\n<ul>\r\n	<li>Other Account Types in QuickBooks</li>\r\n	<li>Entering Credit Card Charges</li>\r\n	<li>Reconciling a Credit Card Statement</li>\r\n	<li>Marking Cleared Transactions</li>\r\n	<li>Paying a Credit Card Bill</li>\r\n	<li>Working with Asset Accounts</li>\r\n	<li>Setting Up Asset Accounts to Track Depreciation</li>\r\n	<li>Tracking a Loan with a Long Term Liability Account</li>\r\n	<li>Recording a Payment on a Loan</li>\r\n	<li>Introduction to Equity Accounts</li>\r\n</ul>\r\n\r\n<h3>Lesson 6 - Entering Sales Information</h3>\r\n\r\n<ul>\r\n	<li>Using Sales Forms for Payment in the Future</li>\r\n	<li>Using Sales Forms for Payment at the Time of Sale</li>\r\n	<li>Filling in a Sales Form</li>\r\n	<li>Filling in the Line Item Area</li>\r\n	<li>Completing the Sales Form</li>\r\n	<li>Repeating a Sale</li>\r\n	<li>Creating Batch Invoices</li>\r\n	<li>Entering a New Item</li>\r\n	<li>Creating New Price Levels</li>\r\n	<li>Associating Price Levels with Customers</li>\r\n	<li>Assigning Price Levels to Individual Line Items</li>\r\n	<li>Using the Income Tracker</li>\r\n	<li>Creating Single Invoice Letters</li>\r\n	<li>Generating Reminder Statements</li>\r\n</ul>\r\n\r\n<h3>Lesson 7 - Receiving Payments and Making Deposits</h3>\r\n\r\n<ul>\r\n	<li>Recording Payment in Full for a Single Job</li>\r\n	<li>Entering a Partial Payment</li>\r\n	<li>Applying One Payment to Multiple Jobs</li>\r\n	<li>Entering Overpayments</li>\r\n	<li>Handling Down Payments &amp; Prepayments</li>\r\n	<li>Making Deposits</li>\r\n	<li>How QuickBooks Handles the Deposit</li>\r\n	<li>How to Handle a Customer Bounced Check</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-6 pt-5\">\r\n<div class=\"coursetopics\">\r\n<h3>Lesson 8 - Entering and Paying Bills</h3>\r\n\r\n<ul>\r\n	<li>Using QuickBooks for Accounts Payable</li>\r\n	<li>Entering Bills</li>\r\n	<li>Paying Bills</li>\r\n	<li>How QuickBooks Records Your Bill Payment</li>\r\n</ul>\r\n\r\n<h3>Lesson 9 - Analyzing Financial Data</h3>\r\n\r\n<ul>\r\n	<li>Creating QuickReports</li>\r\n	<li>Zooming in on a QuickReport</li>\r\n	<li>Customizing QuickReports</li>\r\n	<li>Using the Report Center</li>\r\n	<li>Creating a Balance Sheet Previous Year Comparison Report</li>\r\n	<li>Filtering Reports</li>\r\n	<li>Saving Reports as a PDF</li>\r\n	<li>Using QuickZoom in a Report</li>\r\n	<li>Memorizing Reports</li>\r\n	<li>Creating Memorized Report Groups</li>\r\n	<li>Printing Reports</li>\r\n	<li>Processing Reports in Groups</li>\r\n	<li>Processing Multiple Miscellaneous Reports</li>\r\n	<li>Sending a Report to Microsoft Excel&reg;</li>\r\n	<li>Creating an Income and Expense Graph</li>\r\n	<li>Using QuickZoom with Graphs</li>\r\n	<li>Customizing How Graphs Display</li>\r\n</ul>\r\n\r\n<h3>Lesson 10 - Setting Up Inventory</h3>\r\n\r\n<ul>\r\n	<li>Turning on the Inventory Feature</li>\r\n	<li>Entering Products into Inventory</li>\r\n	<li>Creating Purchase Orders</li>\r\n	<li>Getting a Report of Purchase Orders</li>\r\n	<li>Receiving Inventory</li>\r\n	<li>Entering a Bill for Inventory Received</li>\r\n	<li>Manually Adjusting Inventory</li>\r\n	<li>Setting a Default Markup</li>\r\n</ul>\r\n\r\n<h3>Lesson 11 - Tracking and Paying Sales Tax</h3>\r\n\r\n<ul>\r\n	<li>Overview of Sales Tax in QuickBooks</li>\r\n	<li>Setting Up your Tax Rates and Agencies</li>\r\n	<li>Grouping Single Taxes Together</li>\r\n	<li>Identifying Your Most Common Tax</li>\r\n	<li>Indicating Who and What Gets Taxed</li>\r\n	<li>Applying Tax to Each Sale</li>\r\n	<li>Determining What You Owe</li>\r\n	<li>Paying Your Tax Agencies</li>\r\n</ul>\r\n\r\n<h3>Lesson 12 - Doing Payroll with QuickBooks</h3>\r\n\r\n<ul>\r\n	<li>Setting Up for Payroll</li>\r\n	<li>Setting Up Employee Payroll Information</li>\r\n	<li>Using Employee Defaults to Store Common Information</li>\r\n	<li>Setting Up Payroll Schedules</li>\r\n	<li>Adding a New Employee</li>\r\n	<li>Running a Payroll Schedule</li>\r\n	<li>Viewing the Paycheck</li>\r\n	<li>Printing Paychecks after Leaving Pay Employees Window</li>\r\n	<li>Printing or Emailing Pay Stubs after Leaving Pay Employees Window</li>\r\n	<li>Paying Payroll Taxes</li>\r\n	<li>Writing a Check for Payroll Taxes</li>\r\n</ul>\r\n\r\n<h3>Lesson 13 - Estimating and Progress Invoicing</h3>\r\n\r\n<ul>\r\n	<li>Turning on Estimates and Progress Invoicing</li>\r\n	<li>Creating an Estimate</li>\r\n	<li>Creating Multiple Estimates</li>\r\n	<li>Creating an Invoice from an Estimate</li>\r\n	<li>Displaying Reports for Estimates</li>\r\n	<li>Updating Job Status</li>\r\n	<li>Making Estimates Inactive</li>\r\n</ul>\r\n\r\n<h3>Lesson 14 - Tracking Time</h3>\r\n\r\n<ul>\r\n	<li>Tracking Time and Mileage</li>\r\n	<li>Entering Time Data</li>\r\n	<li>Recording Employee Time on Weekly Timesheets</li>\r\n	<li>Entering Mileage</li>\r\n	<li>Invoicing a Customer for Billable Expenses</li>\r\n	<li>Displaying Project Reports for Time Tracking</li>\r\n	<li>Viewing Time Data in More Detail</li>\r\n	<li>Creating Service Items for Subcontractors</li>\r\n	<li>Recording Nonemployee Time Worked</li>\r\n	<li>Preparing a Check to Pay for Nonemployee Time Worked</li>\r\n</ul>\r\n\r\n<h3>Lesson 15 - Customizing Forms and Writing QuickBooks Letter</h3>\r\n\r\n<ul>\r\n	<li>Creating New Templates</li>\r\n	<li>Customizing Fields on Forms</li>\r\n	<li>Changing Field Order on Forms</li>\r\n	<li>Displaying your Customized Form</li>\r\n	<li>Designing Custom Layouts for Forms</li>\r\n	<li>Changing the Position of Fields on Forms</li>\r\n	<li>Changing Field Widths</li>\r\n	<li>Changing Fonts, Borders and Colors</li>\r\n	<li>Previewing New Forms</li>\r\n	<li>Preparing Collection Letters</li>\r\n	<li>Editing QuickBooks Letters</li>\r\n</ul>\r\n\r\n<h3>Lesson 16 - Working with Multiple Currencies</h3>\r\n\r\n<ul>\r\n	<li>Setting Up Multiple Currencies</li>\r\n	<li>Buying and Selling Items in Multiple Currencies</li>\r\n	<li>Creating a Purchase Order in a Foreign Currency</li>\r\n	<li>Receiving Inventory and Entering a Bill from a Foreign Vendor</li>\r\n	<li>Creating an Invoice for a Multicurrency Transaction</li>\r\n</ul>\r\n</div>\r\n</div>', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-03 13:51:23');
INSERT INTO `columns` VALUES ('10', '5', 'column name 0', null, null, '/uploads/images/section/coursefee.png', null, null, null, null, '', null, null, '0', '1', null, '2020-12-03 14:13:43');
INSERT INTO `columns` VALUES ('11', '5', 'Practice tests​ for QuickBooks Certified User Exam', 'Practice tests​ for QuickBooks Certified User Exam', 'These performance-based assessment and test preparation tools help individuals achieve QuickBooks Certified User. Many of your students will be anxious to assess their knowledge of applications prior to taking the certification exams. Additionally, we recognize the need for educators to properly assess an individual&rsquo;s knowledge. To this end, Certiport has partnered with GMetrix to deliver industry-leading practice tests. These tests, with included reporting and insight features, ensure your students are adequately prepared to take their certification exam.', '', null, null, null, null, '', null, null, '1', '1', null, '2020-12-03 14:13:43');
INSERT INTO `columns` VALUES ('13', '6', 'column name 0', null, '<iframe allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" frameborder=\"0\" height=\"409\" src=\"https://www.youtube.com/embed/CDpEmbTcxg0\" width=\"100%\"></iframe>', '/uploads/images/bg/bg.jpg', null, null, null, null, '', null, null, '1', '1', null, '2020-12-16 06:52:06');
INSERT INTO `columns` VALUES ('14', '6', 'Why GMetrix practice tests?', 'Why GMetrix practice tests?', '<ul>\r\n	<li>Accurately replicate a &quot;live application&quot; testing environment</li>\r\n	<li>Enhance learning through self-paced practice questions</li>\r\n	<li>Build familiarity with the testing environment</li>\r\n	<li>Increase confidence towards certification exams</li>\r\n	<li>Better prepare students to pass certification exams</li>\r\n</ul>', '/uploads/images/section/video.png', null, null, null, null, '', null, null, '2', '1', null, '2020-12-16 06:52:06');
INSERT INTO `columns` VALUES ('15', '7', 'GMetrix practice tests are customizable', 'GMetrix practice tests are customizable', 'GMetrix practice tests are customizable, allowing you to create a highly-effective environment conducive to student-centered learning. GMetrix practice tests offer two different modes:\r\n<h3>Testing mode:</h3>\r\n\r\n<ul>\r\n	<li>Students experience what the certification exams will be like</li>\r\n	<li>Timed practice tests present scenarios to perform just like the</li>\r\n	<li>actual certification exam</li>\r\n</ul>\r\n\r\n<h3>Training mode:</h3>\r\n\r\n<ul>\r\n	<li>Students work at their own pace as they receive feedback and</li>\r\n	<li>step-by-step instructions for each question</li>\r\n</ul>', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-03 15:08:37');
INSERT INTO `columns` VALUES ('16', '7', 'column name 0', null, null, '/uploads/images/section/gmatrix.png', null, null, null, null, '', null, null, '1', '1', null, '2020-12-03 15:08:37');
INSERT INTO `columns` VALUES ('17', '8', 'column name 0', null, null, '/uploads/images/section/quickbooks-certified-user.png', null, null, null, null, '', null, null, '0', '1', null, '2020-12-03 15:13:35');
INSERT INTO `columns` VALUES ('18', '8', 'QuickBooks Certified User', 'QuickBooks Certified User', 'The QuickBooks Certified User certification is an industry-recognized credential that validates one&rsquo;s skills in QuickBooks accounting software. QuickBooks Certified User exam vouchers will now include access to both the QuickBooks Desktop AND QuickBooks Online tests so candidates can demonstrate their skills in whatever version of QuickBooks they prefer. Get certified in the following.', '', null, null, null, null, '', null, null, '1', '1', null, '2020-12-03 15:13:35');
INSERT INTO `columns` VALUES ('19', '9', 'QuickBooks Certified User Online version', 'QuickBooks Certified User Online version', 'The QuickBooks Certified User Online exam will test candidates on new features found in the QuickBooks Online software. While many of the features are similar, QuickBooks Online is our cloud-based subscription service that provides the flexibility to take care of business anytime, anywhere. With Online version you are test on the new features including receipt capture from a mobile device, cloud-based app support, work from anywhere on any device, instant file access for accountants, schedule and send invoices automatically.', '/uploads/images/section/cloud-hosting.png', null, null, null, 'col-md-6 bg-f1f2f3 text-center p-5', '', null, null, '0', '1', null, '2020-12-03 16:20:56');
INSERT INTO `columns` VALUES ('20', '9', 'QuickBooks Certified User Desktop version', 'QuickBooks Certified User Desktop version', 'The QBCU certifies on basic accounting knowledge and utilities of the QuickBooks Desktop software that includes pre-built sample companies, multiple company files, annual updates, and data backed-up and restored. QuickBooks Desktop is a one-time download accounting software with industry-specific features and reporting.', '/uploads/images/section/cloud-computer.png', null, null, null, 'col-md-6 bg-f7f7f8 text-center p-5', '', null, null, '1', '1', null, '2020-12-03 16:20:56');
INSERT INTO `columns` VALUES ('21', '10', 'QuickBooks Certified User demo', 'QuickBooks Certified User demo', '<iframe allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" frameborder=\"0\" height=\"409\" src=\"https://www.youtube.com/embed/5__Ths43zbs\" width=\"100%\"></iframe>', '/uploads/images/icon/qb.png', null, null, null, null, '', null, null, '0', '1', null, '2020-12-04 07:38:58');
INSERT INTO `columns` VALUES ('22', '10', 'column name 0', null, null, '/uploads/images/section/Exam-video.png', null, null, null, null, '', null, null, '1', '1', null, '2020-12-04 07:38:58');
INSERT INTO `columns` VALUES ('23', '11', 'QuickBooks Online Certified user', 'QuickBooks Online Certified user', '<div class=\"col-md-6\">\r\n<h5>QuickBooks Setup And Maintenance</h5>\r\n\r\n<ul>\r\n	<li>What information QuickBooks does and does NOT require when creating a new QuickBooks account</li>\r\n	<li>What lists can be imported and the basic steps to do so (including what is NOT imported)</li>\r\n	<li>How to modify/change basic elements after set up (e.g. accounts, company address, etc.)</li>\r\n	<li>How to setup users including a basic knowledge of the access rights available for different user types.</li>\r\n	<li>How to navigate or move around QuickBooks. A student should know: &nbsp;&nbsp;\r\n	<ul>\r\n		<li>&nbsp;What info and functionality is found in the 3 key access points &ndash; navigation bar, &nbsp;&nbsp; &nbsp;global create, and company settings &nbsp;&nbsp; &nbsp;</li>\r\n		<li>What&rsquo;s located on the home page and how to control what is or isn&rsquo;t seen &nbsp;&nbsp; &nbsp;</li>\r\n		<li>What each button (e.g. save, more, etc.) does on major forms (e.g. invoice, bill, etc.)</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h5>List Management</h5>\r\n\r\n<ul>\r\n	<li>The names of the major lists in QuickBooks and what type of information is tracked on each.</li>\r\n	<li>How to manage lists (Customers, Chart of Accounts, Products and Services, etc.). This includes: &nbsp;&nbsp; &nbsp;\r\n	<ul>\r\n		<li>Who should appear on which names list (e.g. employees or customers) and how to handle &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;situations where the same person/ company should be on more than one list. &nbsp;&nbsp; &nbsp;</li>\r\n		<li>Adding new list entries &nbsp;&nbsp; &nbsp;</li>\r\n		<li>Removing list entries (including what QuickBooks does if an entry has a balance) Editing &nbsp;&nbsp; &nbsp;list entries &nbsp;&nbsp; &nbsp;</li>\r\n		<li>Merging list entries (including the basic rules of what can and can&rsquo;t be merged) &nbsp;&nbsp; &nbsp;</li>\r\n		<li>Which names MUST appear on which forms (i.e. which names are required on specific &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;transactions otherwise QuickBooks will NOT save the transaction)</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h5>Sales/Money-In</h5>\r\n\r\n<ul>\r\n	<li>Knowing the advantages of using built in sales forms (e.g. invoice) over other methods (e.g. Bank Deposit or Journal Entry)</li>\r\n	<li>Completing the Invoicing (A/R) and Sales Receipt (no A/R) workflow from sale to bank deposit.</li>\r\n	<li>A student should know the differences between these methods and when to use each.</li>\r\n	<li>How QuickBooks impacts and uses the Undeposited Funds, Accounts Receivable, and the bank accounts in the invoicing cycle.</li>\r\n	<li>How to invoice for billable expenses (includes how to turn this feature on and record expenses to begin the process)</li>\r\n	<li>How and why to record a customer credit</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<h5>Purchases/Money-Out</h5>\r\n\r\n<ul>\r\n	<li>How to set up a Product or Service to be used on purchase Forms and when this is appropriate</li>\r\n	<li>How this set up allows QuickBooks to perform the appropriate accounting behind the scenes to correctly impact Financial Statements</li>\r\n	<li>How to set up Vendors When to use the following transactions/workflows.</li>\r\n	<li>This includes knowing the steps to record them in QuickBooks when the company does NOT have connected bank accounts (online banking). And how each affects the Vendor&rsquo;s Balance &nbsp;&nbsp; &nbsp;\r\n	<ul>\r\n		<li>Purchase Orders &nbsp;&nbsp; &nbsp;</li>\r\n		<li>Entering and paying bills (A/P) &nbsp;&nbsp; &nbsp;</li>\r\n		<li>Recording Checks (hand written or printed) &nbsp;&nbsp;</li>\r\n		<li>Recording Credit and Debit Card transactions &nbsp;&nbsp; &nbsp;</li>\r\n		<li>Recording EFT&rsquo;s, online payments, wire transfers, etc. &nbsp;&nbsp; &nbsp;</li>\r\n		<li>Vendor Credits When and how to void vs. delete a check</li>\r\n		<li>How to use the Vendor page and reports to identify how much your company owes, and when payment is due.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h5>Basic Accounting</h5>\r\n\r\n<ul>\r\n	<li>What the basic financial statements are and have a basic understanding of their sections and what they mean.</li>\r\n	<li>The difference between cash and accrual reports</li>\r\n	<li>How and why to set a closing date</li>\r\n	<li>How to enter a Journal Entry if asked to do so by an accountant (students do not need to understand how to determine which accounts to debit or credit)</li>\r\n	<li>How to use the Audit Log to determine changes made by specific users.</li>\r\n</ul>\r\n\r\n<h5>Customization/Saving Time</h5>\r\n\r\n<ul>\r\n	<li>How to set up QuickBooks to track income and expenses for multiple locations, or to separate transactions by class (e.g. department, profit center, etc.)</li>\r\n	<li>How to create custom fields on invoices.</li>\r\n	<li>How and why to make transactions recurring, including which transactions can be made recurring.</li>\r\n	<li>Which forms can be customized and the steps to customize a sales form</li>\r\n	<li>How to use a keyboard shortcut to find a list of keyboard shortcuts.</li>\r\n	<li>The time saving benefits of using QuickBooks online. These include:\r\n	<ul>\r\n		<li>Using QuickBooks on phones and tablets (IOS and Android). Students just need to be familiar with basic functionality and understand that QuickBooks mobile can use a mobile device&rsquo;s camera, phone, and GPS to save time.</li>\r\n		<li>Connecting Apps to expand what QuickBooks does. Students should know where to find apps and know that apps expand what QuickBooks does and automatically synch data with QuickBooks.</li>\r\n		<li>Theabilitytohaveusers/employeeswith different operating systems (e.g. Mac vs. P.C.) and web browsers (e.g. Chrome vs. Safari) still access the same data.</li>\r\n		<li>Not needing to backup, and no IT issues (e.g. reinstalling software in cases of crashes or new computer purchases) usually associated with desktop software.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n</div>', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-04 08:13:56');
INSERT INTO `columns` VALUES ('24', '12', 'Course Overview', 'Course Overview', '<img alt=\"\" src=\"/uploads/images/section/tabs-overview.png\" style=\"width: 537px; height: 337px;\" /><br />\r\n<br />\r\nQuickBooks is the most widely used small business accounting software in Cambodia.<br />\r\nAs more enterprises emerge, the knowledge of bookkeeping and accounting software is becoming mission-critical for the success of organizations. Consequently, there is a growing demand for related specialization.<br />\r\nQuickBooks Certified User (QBCU) is a globally recognized Certificate issued by Intuit in association with Pearson Vue&rsquo;s Certiport, to affirm your expertise in QuickBooks.<br />\r\nA Certiport survey of accounting instructors revealed that 84% believe students who are preparing for an accounting career should be conversant in QuickBooks, and the same easily applies to aspiring managers and small business owners.<br />\r\nWhether you already are, or espouse to be an expert user, it is wise to pack in the credentials to prove your capability. ISE offers you an affordable learning stream to acquire both the skills and the QBCU Certification.', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-16 07:11:44');
INSERT INTO `columns` VALUES ('25', '12', 'Course Objectives', 'Course Objectives', '<h3>Course Objectives</h3>\r\n\r\n<p>ISE&rsquo;s QuickBooks User Certification Course is designed to impact you with the underlying technical understanding, user knowledge, as well as the hands-on skills to inde pendently command the software and its features for working with customers, vendors, employees, creating bank transactions, etc. The ISE QuickBooks Certification Course is divided into two learning streams: QuickBooks Desktop and QuickBooks Online. Although both streams require slighly different approaches, successful candidates arrive at the same QBCU certification.</p>\r\n\r\n<h3>Quickbooks Desktop Certified User</h3>\r\n\r\n<div class=\"block-tab\">\r\n<h5>QuickBooks Setup</h5>\r\n\r\n<ul>\r\n	<li>What information is required before they set up a QuickBooks file</li>\r\n	<li>How to start a new company data file in QuickBooks (Easy Step Interview)</li>\r\n	<li>How to start a new company data file in QuickBooks (Easy Step Interview)</li>\r\n	<li>How to keep the lists and preferences from an old file while removing old transactions</li>\r\n	<li>How to customize the home page</li>\r\n	<li>How to set up lists (customers, vendors, items, etc.). This includes understanding which names and items should appear on which lists.QuickBooks Utilities And Gener Al Product Knowledge</li>\r\n</ul>\r\n\r\n<h5>QuickBooks Utilities And Gener Al Product Knowledge</h5>\r\n\r\n<ul>\r\n	<li>How to navigate or move around QuickBooks (use home page, menus, icon bar etc.)</li>\r\n	<li>How to back up and restore a data file</li>\r\n	<li>How to determine the release number and how to update QuickBooks</li>\r\n	<li>How to use QuickBooks in a single-user and multi- user mode</li>\r\n	<li>What versions and editions of QuickBooks are available for a specific year (desktop version)</li>\r\n	<li>How to password protect QuickBooks</li>\r\n	<li>How and why to use preferences</li>\r\n</ul>\r\n\r\n<h5>List Management</h5>\r\n\r\n<ul>\r\n	<li>How to manage lists (customers, vendors, items, etc.). List management include:</li>\r\n	<li>Adding new entries</li>\r\n	<li>Deleting entries</li>\r\n	<li>Editing entries</li>\r\n	<li>Merging entries</li>\r\n</ul>\r\n\r\n<h5>Items</h5>\r\n\r\n<ul>\r\n	<li>How QuickBooks uses items to perform the necessary accounting entries</li>\r\n	<li>The different types of items and when to use each type</li>\r\n	<li>How to use items for different types of scenarios. These include companies that sell:</li>\r\n	<li>Products for a specified price</li>\r\n	<li>Services for a specified price</li>\r\n	<li>Unique products or services that have different prices for each sale</li>\r\n	<li>One service or product</li>\r\n</ul>\r\n\r\n<h5>Sales</h5>\r\n\r\n<ul>\r\n	<li>Who should be listed in the Customer Center</li>\r\n	<li>How to navigate and use the Customer Center</li>\r\n	<li>How to complete the workflow (from the sale to making the deposit) for:</li>\r\n	<li>\r\n	<ul>\r\n		<li>Invoicing (A/R) Sales Receipts (no A/R)</li>\r\n	</ul>\r\n	</li>\r\n	<li>How QuickBooks uses the Undeposited Funds, Accounts Receivable, and checking accounts in the invoicing cycle.</li>\r\n	<li>How and why to record a customer credit</li>\r\n	<li>How and why to create statements</li>\r\n	<li>How to handle bounced (NSF) checks</li>\r\n</ul>\r\n\r\n<h5>Purchases</h5>\r\n\r\n<ul>\r\n	<li>Who should be listed in the Vendor Center</li>\r\n	<li>How to navigate and use the Vendor Center</li>\r\n	<li>The different workflows for making purchases</li>\r\n	<li>Entering and paying bills (A/P) 6.3.2 Writing checks</li>\r\n	<li>Using a Credit Card</li>\r\n	<li>Using a Debit Card</li>\r\n	<li>How to record the transactions in the purchase workflows</li>\r\n	<li>How and why to record a Vendor credit</li>\r\n	<li>How to complete the inventory workflow (PO to payment)</li>\r\n	<li>How to set up, collect and pay sales tax</li>\r\n	<li>Bank reconciliation</li>\r\n</ul>\r\n\r\n<h5>Payroll</h5>\r\n\r\n<ul>\r\n	<li>The differences between the Payroll Services available from QuickBooks</li>\r\n	<li>How to set up Payroll (including employees, Federal and State taxes and basic Payroll deductions) using the Payroll Setup Wizard.</li>\r\n	<li>How to set up an employee&rsquo;s earnings and sick or vacation time</li>\r\n	<li>How to track sick or vacation time (accruing hours and using &ldquo;banked&rdquo; hours)</li>\r\n	<li>How and why to setup Payroll Schedules</li>\r\n	<li>How to run Payroll</li>\r\n	<li>How and why to pay Payroll Liabilities</li>\r\n	<li>How to prepare payroll forms (941, W2) in QuickBooks</li>\r\n	<li>Track time and use it for payroll or for invoicing customers</li>\r\n</ul>\r\n\r\n<h5>Reports</h5>\r\n\r\n<ul>\r\n	<li>Why and how to use the Report Center</li>\r\n	<li>How to customize reports (report modifications, collapsing subaccounts, etc.)</li>\r\n	<li>The basic question that each report answers (basic understanding of each report)</li>\r\n	<li>How and why to process multiple reports</li>\r\n	<li>How and why to send reports to Excel (understand and use the basic and advanced tab)</li>\r\n	<li>How and why to process multiple reports</li>\r\n	<li>How to memorize reports</li>\r\n</ul>\r\n\r\n<h5>Basic accounting</h5>\r\n\r\n<ul>\r\n	<li>What the basic financial statements are and have a basic understanding of what they mean.</li>\r\n	<li>The difference between cash and accrual reports</li>\r\n	<li>How and why to set a closing date</li>\r\n	<li>How to enter a Journal Entry if asked to do so by an accountant (they do not need to fully understand what accounts to debit or credit)</li>\r\n</ul>\r\n\r\n<h5>Customization/Saveing Time and Shortcuts</h5>\r\n\r\n<ul>\r\n	<li>How and why to memorize transactions (automatically enter)</li>\r\n	<li>How to set up multiple users and what level of access can be granted or denied</li>\r\n	<li>How and why to create custom fields (customers, vendors, and employees)</li>\r\n	<li>How to customize an invoice</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>QuickBooks Online Certified user</h3>\r\n\r\n<div class=\"block-tab\">\r\n<h5>QuickBooks Setup And Maintenance</h5>\r\n\r\n<ul>\r\n	<li>What information QuickBooks does and does NOT require when creating a new QuickBooks account</li>\r\n	<li>What lists can be imported and the basic steps to do so (including what is NOT imported)</li>\r\n	<li>How to modify/change basic elements after set up (e.g. accounts, company address, etc.)</li>\r\n	<li>How to setup users including a basic knowledge of the access rights available for different user types.</li>\r\n	<li>How to navigate or move around QuickBooks. A student should know:\r\n	<ul>\r\n		<li>What info and functionality is found in the 3 key access points &ndash; navigation bar,</li>\r\n		<li>global create, and company settings</li>\r\n		<li>What&rsquo;s located on the home page and how to control what is or isn&rsquo;t seen</li>\r\n		<li>What each button (e.g. save, more, etc.) does on major forms (e.g. invoice, bill, etc.)</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h5>List Management</h5>\r\n\r\n<ul>\r\n	<li>The names of the major lists in QuickBooks and what type of information is tracked on each.</li>\r\n	<li>How to manage lists (Customers, Chart of Accounts, Products and Services, etc.). This includes:\r\n	<ul>\r\n		<li>Who should appear on which names list (e.g. employees or customers) and how to handle situations where the same person/ company should be on more than one list.</li>\r\n		<li>Adding new list entries</li>\r\n		<li>Removing list entries (including what QuickBooks does if an entry has a balance) Editing list entries</li>\r\n		<li>Merging list entries (including the basic rules of what can and can&rsquo;t be merged)</li>\r\n	</ul>\r\n	</li>\r\n	<li>Which names MUST appear on which forms (i.e. which names are required on specific transactions otherwise QuickBooks will NOT save the transaction)</li>\r\n</ul>\r\n\r\n<h5>Sales/Money-In</h5>\r\n\r\n<ul>\r\n	<li>How to set up a Product or Service\r\n	<ul>\r\n		<li>How this set up allows QuickBooks to perform the appropriate accounting behind the scenes to correctly impact Financial Statements</li>\r\n	</ul>\r\n	</li>\r\n	<li>How to set up Customers including how to specify when payment is due (terms) and track multiple projects/jobs for a single customer (sub-customers)</li>\r\n	<li>How to record sales/revenue. This includes:\r\n	<ul>\r\n		<li>Knowing the advantages of using built in sales forms (e.g. invoice) over other methods (e.g. Bank Deposit or Journal Entry)</li>\r\n		<li>Completing the Invoicing (A/R) and Sales</li>\r\n		<li>Receipt (no A/R) workflow from sale to bank deposit. A student should know the differences between these methods and when to use each.</li>\r\n		<li>How QuickBooks impacts and uses the Undeposited Funds, Accounts Receivable, and the bank accounts in the invoicing cycle.</li>\r\n		<li>How to invoice for billable expenses (includes how to turn this feature on and record expenses to begin the process)</li>\r\n		<li>How and why to record a customer credit</li>\r\n	</ul>\r\n	</li>\r\n	<li>How and why to use Estimates, Delayed Charges, and Credit Memos. The student should understand how these transactions affect customer balances.</li>\r\n</ul>\r\n\r\n<h5>Purchases/Money-Out</h5>\r\n\r\n<ul>\r\n	<li>How to set up a Product or Service to be used on purchase Forms and when this is appropriate\r\n	<ul>\r\n		<li>How this set up allows QuickBooks to perform the appropriate accounting behind the scenes to correctly impact Financial Statements</li>\r\n	</ul>\r\n	</li>\r\n	<li>How to set up Vendors</li>\r\n	<li>When to use the following transactions/workflows. This includes knowing the steps to record them in QuickBooks when the company does NOT have connected bank accounts (online banking). And how each affects the Vendor&rsquo;s Balance\r\n	<ul>\r\n		<li>Purchase Orders</li>\r\n		<li>Entering and paying bills (A/P)</li>\r\n		<li>Recording Checks (hand written or printed)</li>\r\n		<li>Recording Credit and Debit Card transactions</li>\r\n		<li>Recording EFT&rsquo;s, online payments, wire transfers, etc.</li>\r\n		<li>Vendor Credits</li>\r\n	</ul>\r\n	</li>\r\n	<li>When and how to void vs. delete a check</li>\r\n	<li>How to use the Vendor page and reports to identify how much your company owes, and when payment is due.</li>\r\n</ul>\r\n\r\n<h5>Basic Accounting</h5>\r\n\r\n<ul>\r\n	<li>What the basic financial statements are and have a basic understanding of their sections and what they mean.</li>\r\n	<li>The difference between cash and accrual reports</li>\r\n	<li>How and why to set a closing date</li>\r\n	<li>How to enter a Journal Entry if asked to do so by an accountant (students do not need to understand how to determine which accounts to debit or credit)</li>\r\n	<li>How to use the Audit Log to determine changes made by specific users.</li>\r\n</ul>\r\n\r\n<h5>Customization/Saving Time</h5>\r\n\r\n<ul>\r\n	<li>How to set up QuickBooks to track income and expenses for multiple locations, or to separate transactions by class (e.g. department, profit center, etc.)</li>\r\n	<li>How to create custom fields on invoices.</li>\r\n	<li>How and why to make transactions recurring, including which transactions can be made recurring.</li>\r\n	<li>Which forms can be customized and the steps to customize a sales form</li>\r\n	<li>How to use a keyboard shortcut to find a list of keyboard shortcuts.</li>\r\n	<li>The time saving benefits of using QuickBooks online. These include:\r\n	<ul>\r\n		<li>Using QuickBooks on phones and tablets (IOS and Android). Students just need to be familiar with basic functionality and understand that QuickBooks mobile can use a mobile device&rsquo;s camera, phone, and GPS to save time.</li>\r\n		<li>Connecting Apps to expand what QuickBooks does. Students should know where to find apps and know that apps expand what QuickBooks does and automatically synch data with QuickBooks.</li>\r\n		<li>Theabilitytohaveusers/employeeswith different operating systems (e.g. Mac vs. P.C.) and web browsers (e.g. Chrome vs. Safari) still access the same data.</li>\r\n		<li>Not needing to backup, and no IT issues (e.g. reinstalling software in cases of crashes or new computer purchases) usually associated with desktop software.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n</div>', '', null, null, null, null, '', null, null, '1', '1', null, '2020-12-16 07:11:44');
INSERT INTO `columns` VALUES ('26', '12', 'Course Prerequisites', 'Course Prerequisites', '<img alt=\"\" src=\"/uploads/images/section/coursePrereuisites.png\" style=\"width: 557px; height: 315px;\" /><br />\r\n<br />\r\nIn addition to fundamental knowledge in accounting and bookkeeping, you are expected to have some basic proficiency in the use of Windows PC and online browsing . For those without an Accounting background, we recommend to first go through a course to understand best practices in accounting. For those with accounting knowledge but no PC skills, please consider our other courses with Microsoft Excel and learning to work with worksheets', '', null, null, null, null, '', null, null, '2', '1', null, '2020-12-16 07:11:44');
INSERT INTO `columns` VALUES ('27', '12', 'Badging', 'Badging', '<h3>QuickBooks Certified User badges</h3>\r\nDigital badges are web-enabled versions of a credential, certification or learning outcome.<br />\r\nRepresenting your credential as a badge gives you the ability to share your skills online in a way that is simple, trusted and can be easily verified in real time.<br />\r\nQuickBooks certifications are some of the most requested skills in online job postings. Your digital badge makes it easy for you to validate abilities with potential employers on social media sites such as LinkedIn, Facebook and Twitter, as well as email and online portfolios.<br />\r\nWhen you earn one of the QBCU certifications you will be notified of the corresponding digital badge. Accept and use your digital badges to tell potential employers, academic institutions, colleagues and peers about your QuickBooks credentials.<br />\r\nThere are currently digital badges available:<br />\r\n<br />\r\n<br />\r\n<img alt=\"\" src=\"/uploads/images/section/QBCU-Badge-Online.png\" style=\"width: 539px; height: 159px;\" /><br />\r\n&nbsp;\r\n<h3>Flash your badge</h3>\r\nAcclaim is the digital badging platform used by Certiport. It helps students move forward professionally by quickly establishing credibility for opportunities in higher education and the job market. Each badge contains verifiable data that tells employers and admission committees what you did, who says you did it, and why it matters. What does this mean for you? Watch the video to find out.<br />\r\n<br />\r\n<br />\r\n<iframe allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\" frameborder=\"0\" height=\"420\" src=\"https://www.youtube.com/embed/YF7mZpoxoUk\" width=\"100%\"></iframe>', '', null, null, null, null, '', null, null, '3', '1', null, '2020-12-16 07:11:44');
INSERT INTO `columns` VALUES ('28', '12', 'Training Schedule', 'Training Schedule', '<h3>QuickBooks Desktop Training Schedule</h3>\r\n\r\n<table class=\"table\">\r\n	<thead>\r\n		<tr>\r\n			<th style=\"width: 137px;\">Course</th>\r\n			<th style=\"width: 63px;\">Fee</th>\r\n			<th style=\"width: 134px;\">Time</th>\r\n			<th style=\"width: 213px;\">Number of Day</th>\r\n			<th style=\"width: 57px;\">Location</th>\r\n			<th style=\"width: 87px;\">Enrollment</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody class=\"font-size-10\">\r\n		<tr>\r\n			<td class=\"font-sm-6\"><strong>QuickBooks Desktop Training</strong></td>\r\n			<td><strong>$290</strong></td>\r\n			<td class=\"font-sm-6\">8:00 am - 12:00 pm<br />\r\n			1:30 pm - 5:30 pm</td>\r\n			<td class=\"font-sm-6\">4-Day (every Saturday - Sunday)</td>\r\n			<td>ISE</td>\r\n			<td><a class=\"text-success\" href=\"/register\">Register</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td class=\"font-sm-6\"><strong>QuickBooks Desktop Training</strong></td>\r\n			<td><strong>$290</strong></td>\r\n			<td class=\"font-sm-6\">8:00 am - 12:00 pm<br />\r\n			1:30 pm - 5:30 pm</td>\r\n			<td class=\"font-sm-6\">4-Day (Monday - Thursday)</td>\r\n			<td>ISE</td>\r\n			<td><a class=\"text-success\" href=\"/register\">Register</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>QuickBooks Desktop Training</strong></td>\r\n			<td><strong>$290</strong></td>\r\n			<td class=\"font-sm-6\">6:00 pm - 9:00 pm</td>\r\n			<td class=\"font-sm-6\">10-Day (Monday - Friday)</td>\r\n			<td>ISE</td>\r\n			<td><a class=\"text-success\" href=\"/register\">Register</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n&nbsp;\r\n\r\n<h3>Self-paced QuickBooks Study</h3>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-md-8\">This online, video-based course prepares candidates to take the QuickBooks Online or the QuickBooks Desktop Certified User exam. Includes 12-16 hours of training including videos, online workbook, and quizzes. Please allow up to three business days to receive an email with an access code and instructions. Once you receive the code, you will be able to choose whether you want to take the QuickBooks Online course or the QuickBooks Desktop course.</div>\r\n\r\n<div class=\"col-md-4\"><img alt=\"\" src=\"/uploads/images/icon/qb.png\" style=\"width: 184px; height: 93px;\" /></div>\r\n</div>', '', null, null, null, null, '', null, null, '4', '1', null, '2020-12-16 07:11:44');
INSERT INTO `columns` VALUES ('29', '12', 'Course Fee', 'Course Fee', '<img alt=\"\" src=\"/uploads/images/section/coursefee.png\" style=\"width: 503px; height: 300px;\" />\r\n<h3>Self-paced QuickBooks Study</h3>', '', null, null, 'GMetrix', null, '', null, null, '5', '1', null, '2020-12-16 07:11:44');
INSERT INTO `columns` VALUES ('30', '13', 'Course Overview', 'Course Overview', 'Cambodia is a fast developing country with a growing economy and new businesses emerging on the fly. As the investment environment becomes more favorable, people with entrepreneurship aspirations and ambitions would like a slice of the pie.<br />\r\nHowever easy it seems to establish a start-up company, many of them fail due to one reason or another. Fortunately, ISE has stepped in to empower aspirants with the knowledge and education they need to get it right.<br />\r\nESB (Entrepreneurship and Small Business) Certification is one of the latest from Pearson Vue&rsquo;s Certiport, the largest examination and certification board in the world.<br />\r\nThe Certification is also sponsored by Intuit, endorsed by EntreComp and other outstanding organizations dedicated to encouraging startups.<br />\r\nIf you aspire to be your own boss, this ISE course is for you.', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-14 07:12:03');
INSERT INTO `columns` VALUES ('31', '13', 'Course Objectives', 'Course Objectives', 'Whether you are looking to setup a coffee shop, a hairdressing salon, minimart or even a transportation hub business, in this course, you will learn the entrepreneurship concepts of business planning, ideation, opportunity recognition, financial planning, and business management to help you succeed. The objective is to get it right the first time.', '', null, null, null, null, '', null, null, '1', '1', null, '2020-12-14 07:12:03');
INSERT INTO `columns` VALUES ('32', '13', 'Course Prerequisites', 'Course Prerequisites', 'Fundamental knowledge of economics. Knowledge of accounting is not a requirement but a plus. Experience in business management is also NOT required.', '', null, null, null, null, '', null, null, '2', '1', null, '2020-12-14 07:12:03');
INSERT INTO `columns` VALUES ('33', '13', 'What happens after the course', 'What happens after the course', 'You would be looking forward to the Pearson Vue Certification Exam. Successful candidates would be issued the globally recognized ESB (Entrepreneurship and Small Business) Certificate soon after the exams.', '', null, null, null, null, '', null, null, '3', '1', null, '2020-12-14 07:12:03');
INSERT INTO `columns` VALUES ('34', '13', 'Course Outline', 'Course Outline', '<strong>The Entrepreneur:</strong>\r\n<ul>\r\n	<li>Identify the characteristics of entrepreneurs</li>\r\n	<li>Given a scenario including a self-assessment outcome, identify the strengths, weaknesses, and risk tolerance the self-assessment identifies and how to compensate with services</li>\r\n	<li>Given a scenario, recognize a business opportunity</li>\r\n	<li>Identify the risks, benefits, opportunities, and drawbacks of being an entrepreneur</li>\r\n</ul>\r\n<br />\r\n<strong>Opportunity Recognition:</strong>\r\n\r\n<ul>\r\n	<li>Identify the benefits and drawbacks of different types of opportunities (e.g., start a new business, buy an existing business, and buy a franchise)</li>\r\n	<li>Given a scenario, analyze the demand for the goods or service and opportunities in an environment</li>\r\n	<li>Given a scenario, identify the customers or potential customers for a business</li>\r\n	<li>Given a scenario, recognize a value proposition&nbsp;</li>\r\n</ul>\r\n<br />\r\n<strong>Starting a Business:</strong>\r\n\r\n<ul>\r\n	<li>Identify the purposes and value of a business plan</li>\r\n	<li>Identify the appropriate legal structure, benefits, and drawbacks for different legal structures for a business</li>\r\n	<li>Given a scenario, identify different types of licenses and regulations that are required</li>\r\n	<li>Identify the benefits and drawbacks of various sources of start-up funding: Equity (friends/family, angels, venture), Debt (bank, credit cards, personal loans), and Grants (government, foundation, corporate)</li>\r\n	<li>Given a scenario, identify support that is available for the business on a local, state, and federal level</li>\r\n	<li>Identify the ethical practices and social responsibilities of a business</li>\r\n	<li>Identify potential exit strategies for a business</li>\r\n</ul>\r\n<br />\r\n<strong>Business Operations:</strong>\r\n\r\n<ul>\r\n	<li>Given a scenario, identify key positions and human capital needs (including compensation and benefits)</li>\r\n	<li>Given a scenario, determine whether work can be completed by the owner or whether employees or service providers are needed</li>\r\n	<li>Given a scenario, identify the taxes that are required</li>\r\n	<li>Given a scenario, identify intellectual property issues of trademarks, copyrights, and patents</li>\r\n	<li>Given a scenario, identify standard operating procedures (e.g., setup, conduct, internal controls, separation of duties)</li>\r\n	<li>Given a scenario, identify the factors that led to sustainability</li>\r\n	<li>Given a scenario, identify milestone as part of a growth strategy&nbsp;</li>\r\n</ul>\r\n<strong>Marketing and Sales:</strong>\r\n\r\n<ul>\r\n	<li>Given a scenario, develop a sales strategy and identify characteristics of a successful sale</li>\r\n	<li>Given a scenario, identify and analyze the costs/benefits of finding customers</li>\r\n	<li>Given a scenario, identify how to retain customers and develop a relationship with repeat customers</li>\r\n	<li>Given a scenario, determine value and methods of communication including web sites, brochures, social media, and advertising&nbsp;</li>\r\n</ul>\r\n<br />\r\n<strong>Financial Management:</strong>\r\n\r\n<ul>\r\n	<li>Given a scenario, interpret basic financial statements such as income statements and balance sheets</li>\r\n	<li>Given a scenario, identify the factors that influence credit ratings and the importance of a positive credit rating</li>\r\n	<li>Given a list of expenses, identify which are fixed versus variable</li>\r\n	<li>Given a scenario, identify the factors that impact the price to the customer</li>\r\n	<li>Given a scenario, identify and analyze cash flow including accounts receivable, accounts payable, inventory, and debt</li>\r\n	<li>Given a scenario, create a cash flow budget</li>\r\n	<li>Given a scenario, identify the breakeven point for the business</li>\r\n</ul>', '', null, null, null, null, '', null, null, '4', '1', null, '2020-12-14 07:12:03');
INSERT INTO `columns` VALUES ('35', '13', 'Course Fee', 'Course Fee', null, '', null, null, 'esb', null, '', null, null, '5', '1', null, '2020-12-14 07:12:03');
INSERT INTO `columns` VALUES ('36', '14', 'column name 0', null, null, null, null, null, null, null, null, null, null, '0', '1', null, null);
INSERT INTO `columns` VALUES ('37', '14', 'column name 1', null, null, null, null, null, null, null, null, null, null, '1', '1', null, null);
INSERT INTO `columns` VALUES ('38', '15', 'column name 0', null, null, '/uploads/images/section/why-get-certified.png', null, null, null, null, '', null, null, '0', '1', null, '2020-12-04 09:40:33');
INSERT INTO `columns` VALUES ('39', '15', null, null, 'The speed of technological advancement in today&rsquo;s world is already at a pace where available skills do not match demand. The shortage of capabilities to fill this vacuum is the reason why companies are scrambling for newer skill sets in certified talents, either in lieu of, or in spite of college/university educa tion. This demand for specialized knowledge is prevalent in all industries and applies not just to employ ees but to business owners who face ever growing competition. In order to succeed in the current profes sional climate, it is no secret that a growing number of people prefer to boost their confidence and marketability through certification', '', null, null, null, null, '', null, null, '1', '1', null, '2020-12-04 09:40:33');
INSERT INTO `columns` VALUES ('40', '16', null, null, '<div class=\"row\">\r\n<div class=\"col-md-12 text-center\">\r\n<h2 class=\"pt-5\">Why Get Certified?</h2>\r\n</div>\r\n\r\n<div class=\"col-md-6 p-5\">\r\n<div class=\"whycertified\">\r\n<ul>\r\n	<li>Documentary Evidence of your Specialized Talent\r\n	<p>Certification boosts your credentials and stands as clear evidence to your employer, co-workers or competitors that you are adept at the job or busi ness you handle. It shows you have attained the highest standards of train ing and qualification in that area of specialization hence you are a com plete professional.</p>\r\n	</li>\r\n	<li>Certification Increases your Chances of Employment\r\n	<p>Certification on your Resume (Curriculum Vitae/CV) makes you a favorite candidate for the job. Employers looking to hire want to be sure you have the knowledge, experience and certifications in your areas of expertise. According to Microsoft&rsquo;s Certification Program Satisfaction Study, 91 percent of hiring decisions consider certification as a part of their criteria. In fact, job interview questions generally steer towards specialization, certification and experience much more than the general educational background of the candidate.</p>\r\n	</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-6 p-5\">\r\n<div class=\"whycertified\">\r\n<ul>\r\n	<li>Certification helps you make more money and get ahead:\r\n	<p>Getting certified does not only demonstrate your commitment to your pro fession but also indicates that you invested in yourself. In turn, employers are more likely to invest in you. A recent salary guide shows that certifica tions have the potential to increase one&rsquo;s salary by at least 10 percent. Beyond that, some people engaged in one profession get certified in anoth er specialty in order to get a part-time job and earn more. Either way, a certified professional almost always nets higher pay.</p>\r\n	</li>\r\n	<li>Certification keeps you up-to-date in your specialization:\r\n	<p>To some, the most important reason to get certified is that it helps them stay ahead of the competition. It keeps them currently vested in all the technologies and regulations that affect their profession. Indeed, certifica tion programs offer you a chance to upgrade periodically, unlike a college degree. Learning, after all, is a continuous process that guarantees success far into the future.</p>\r\n	</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-14 07:13:43');
INSERT INTO `columns` VALUES ('41', '17', 'Do you want quality education that will prepare you for certification and impact you with the skill sets relevant to your career?', 'Do you want quality education that will prepare you for certification and impact you with the skill sets relevant to your career?', '<h3>Do you want quality education that will prepare you for certification and impact you with the skill sets relevant to your career?</h3>\r\n\r\n<p>Innovation School exists to serve this purpose. Click here to Check out our available certification programs or call us on</p>\r\n\r\n<h3>+855 12 967 755 to learn more.</h3>', '/uploads/images/section/bg-why-get-certified.png', null, null, null, null, '', null, null, '0', '1', null, '2020-12-04 09:50:24');
INSERT INTO `columns` VALUES ('42', '18', 'Learning Resources', 'Learning Resources', 'Innovation School of Education does not end with providing a good learning environment and highly skilled instructors. We at ISE understand that extra resources are necessary, to stimulate the learning, impact knowledge, arouse creativity and inspire the learner to explore themselves. This is why ISE has provided a wide range of independent learning materials and resources including comprehensive guide and learning materials, a well equipped computer lab for after-class hands-on training, and a library to open soon, as well as collaboration spaces for teamwork among trainees. ISE Courses also provide references to external resources recommended by the Global Certification providers, to help you adequately prepare for your certification exams. The courseware and all the chapter assessments become available after trainee has selected their course of interest and signed up for it. Depending on the Certification Course, tests and assignments may also be conducted during the program, to prepare students for the real exams scenario.', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-14 07:14:57');
INSERT INTO `columns` VALUES ('43', '19', 'column name 0', null, null, '/uploads/images/section/InnovationSchoolofEducation.png', null, null, null, null, '', null, null, '0', '1', null, '2020-12-04 10:06:46');
INSERT INTO `columns` VALUES ('44', '19', 'Innovation School of Education (ISE)', 'Innovation School of Education (ISE)', 'ISE is a training, exams and certification center Authorized by Intuit and Pearson Vue&rsquo;s Certiport, the largest provider of performance-based certification in the world. ISE is Cambodia&rsquo;s number one innovative center for learning which applies the most modern and effective methods of knowledge delivery, interactive learning, testing and globally accredited certification on a wide range of Technology, Business and Finance courses. With a mission to bridge the gap between talent and achievement in the area of education, ISE assists trainees explore themselves and reach their full potentials while rewarding their attained skill with internationally recognized qualification, to help them get ahead in their career and future endeavors.', '', null, null, null, null, '', null, null, '1', '1', null, '2020-12-04 10:06:46');
INSERT INTO `columns` VALUES ('45', '20', 'Our Story', 'Our Story', '<div class=\"col-md-2\"><img alt=\"\" src=\"/uploads/images/section/ourstory.png\" style=\"width: 114px; height: 114px;\" /></div>\r\n\r\n<div class=\"col-lg-10 col-md-10\">\r\n<h3>Our Story</h3>\r\n\r\n<p class=\"font-md-4\">Transcending traditional methods of education has always been a challenge in the developing world where other resource-requiring priorities are seemingly endless. Someone had to take on that challenge to rise above the inadequacies and establish what would become the most effective learning center dedicated to preparing learners for the future. Innovation School is the visionary brainchild of Mr. Chey Sambatt, a man who himself underwent the Cambodian system of education experiencing its ups and downs. He sought to make a positive difference in the community starting with himself, by researching the most efficient learning methods applied internationally, especially in the areas of business and technology.<br />\r\nAfter attaining his own certifications as a QuickBooks consultant coupled with years of experience in providing business solutions, he partnered with several international players including Pearson&rsquo;s Certiport &trade; to make ISE a dream come true. Say goodbye to Chalk and Talk methods of teaching and learning, say goodbye to the need to travel out of Cambodia to attain quality training and certification. Now you can do it all here, in the INNOVATION School, Siem Reap, Cambodia.</p>\r\n</div>', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-04 10:10:52');
INSERT INTO `columns` VALUES ('46', '21', 'Our Vision', 'Our Vision', '<div class=\"col-md-2\"><img images=\"\" ourvision.png=\"\" section=\"\" src=\"/uploads/images/section/ourvision.png\" uploads=\"\" /></div>\r\n\r\n<div class=\"col-lg-10 col-md-10\">\r\n<h3>Our Vision</h3>\r\n\r\n<p class=\"font-md-4\">Leadership in innovation and evolution of effective education for talent building.<br />\r\nWe envisage to assit each and every trainee reach their full potentials in the interactive courses they undertake. We believe that achieving this goal has a wider implication on the national workforce.A skilled nation is a productive nation, a productive nation is a faster-growing nation, a faster-growing nation is a guarantee for a better world.</p>\r\n</div>', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-04 10:12:13');
INSERT INTO `columns` VALUES ('47', '22', 'Our Mission', 'Our Mission', '<div class=\"col-md-2\"><img images=\"\" ourmission.png=\"\" section=\"\" src=\"/uploads/images/section/ourmission.png\" uploads=\"\" /></div>\r\n\r\n<div class=\"col-lg-10 col-md-10\">\r\n<h3>Our Mission</h3>\r\n\r\n<p class=\"font-md-4\">To empower our trainees with the knowledge, skills and qualifications to get ahead.<br />\r\nWe do this by providing the right environment, instructors, guide and tools to motivate the individual to Learn, Practice and Get Certified. Our objective is to inspire the creativity of the individual, impact him with the skills necessary to succeed and unlock the diverse opportunities in their area of specialization. Learning never stops and neither does the evolution of learning methods.<br />\r\nThe world has come a long way from blackboard learning to digitalized presentations.<br />\r\nWe in ISE are proud to take it a step further by tailoring our courses to suit the way our trainees want to learn, in line with our educational revolution to foster excellence within our learning spaces&hellip;</p>\r\n</div>', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-04 10:13:35');
INSERT INTO `columns` VALUES ('48', '23', 'column name 0', null, null, null, null, null, null, null, null, null, null, '0', '1', null, null);
INSERT INTO `columns` VALUES ('49', '23', 'column name 1', null, null, null, null, null, null, null, null, null, null, '1', '1', null, null);
INSERT INTO `columns` VALUES ('50', '24', 'Our Core Values', 'Our Core Values', '<div class=\"col-md-2\"><img images=\"\" ourcorevalues.png=\"\" section=\"\" src=\"/uploads/images/section/ourcorevalues.png\" uploads=\"\" /></div>\r\n\r\n<div class=\"col-lg-10 col-md-10\">\r\n<h3>Our Core Values</h3>\r\n\r\n<p class=\"font-md-4\">Our dedication to every trainee&rsquo;s success is second to none, hence our values revolve around Innovation, creativity, accountability, integrity, and commitment to quality education.</p>\r\n</div>', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-04 10:14:41');
INSERT INTO `columns` VALUES ('51', '25', 'Google Map', 'Google map', '<iframe allowfullscreen=\"\" aria-hidden=\"false\" frameborder=\"0\" height=\"675\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d514.0687255667909!2d103.85028849311493!3d13.367056730428093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa37e1f3ed4d1f9ee!2sInnovation%20School%20of%20Education!5e0!3m2!1sen!2skh!4v1607932204915!5m2!1sen!2skh\" style=\"border:0;\" tabindex=\"0\" width=\"100%\"></iframe>', '', null, null, null, null, '', null, null, '0', '1', null, '2020-12-14 09:12:01');
INSERT INTO `columns` VALUES ('52', '25', 'Address', null, '<div class=\"row\">\r\n<div class=\"col-md-4\">\r\n<div class=\"media\"><svg class=\"bi bi-geo-fill m-3\" fill=\"currentColor\" height=\"24\" viewbox=\"0 0 16 16\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z\" fill-rule=\"evenodd\"></path> </svg>\r\n<div class=\"media-body\">National Road No 6, Sala Kanseng Village, Sangkat Svay Dangkum, Siem Reap, Kingdom of Cambodia.</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-4\">\r\n<div class=\"media\"><svg class=\"bi bi-envelope-open-fill m-3\" fill=\"currentColor\" height=\"24\" viewbox=\"0 0 16 16\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z\"></path> </svg>\r\n\r\n<div class=\"media-body py-3\">info@ise.edu.kh</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-4\">\r\n<div class=\"media\"><svg class=\"bi bi-phone-vibrate m-3\" fill=\"currentColor\" height=\"24\" viewbox=\"0 0 16 16\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M10 3H6a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z\" fill-rule=\"evenodd\"></path> <path d=\"M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM1.599 4.058a.5.5 0 0 1 .208.676A6.967 6.967 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A7.968 7.968 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208zm12.802 0a.5.5 0 0 1 .676.208A7.967 7.967 0 0 1 16 8a7.967 7.967 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A6.967 6.967 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676zM3.057 5.534a.5.5 0 0 1 .284.648A4.986 4.986 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A5.986 5.986 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284zm9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8c0 .769-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8c0-.642-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648z\" fill-rule=\"evenodd\"></path> </svg>\r\n\r\n<div class=\"media-body\">012 967 755<br />\r\n093 967 755<br />\r\n063 967 855</div>\r\n</div>\r\n</div>\r\n</div>', '', null, null, null, null, '', null, null, '1', '1', null, '2020-12-14 09:12:01');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for feature
-- ----------------------------
DROP TABLE IF EXISTS `feature`;
CREATE TABLE `feature` (
  `feature_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `feature_title` text DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `is_order` int(2) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`feature_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of feature
-- ----------------------------
INSERT INTO `feature` VALUES ('1', '1', 'Description', null, 'This GMetrix single application license allows the licensed individual to take the GMetrix practice tests up to 30 times during a one year period. When the license holder activates this license he/she will be able to choose any GMetrix title for QuickBooks. Once the license holder has chosen a title, the license will then be locked down to allow the license holder access to only the chosen title.<br />\r\n<br />\r\nInstructions for accessing the GMetrix Practice exams, as well as a code, will be emailed to you within 48 hours. Practice tests are taken online, and can be taken on any computer with sufficient internet access.<br />\r\n<br />\r\nGMetrix offers practice tests in two test modes:<br />\r\nTesting Mode<br />\r\n- Students experience was the certification exams will be like<br />\r\n- Timed practice test that performs just like the actual certification exam Training Mode<br />\r\nTraining Mode<br />\r\n- Students work at their own pace as they receive feedback<br />\r\n- They may opt to access step-by-step instructions or help for each question<br />\r\nCourse Overview tab provides additional information.', '1', '1', '2020-12-04 08:40:22', '2020-12-04 08:40:22');
INSERT INTO `feature` VALUES ('2', '1', 'Course Overview', null, 'Redeem your Practice Test through GMetrix<br />\r\n<br />\r\nWithin 24 hours, ISE will provide a unique GMetrix code to the email address you provided during your purchase. Included will be instructions on how to redeem the code through GMetrix.', '2', '1', '2020-12-04 08:40:59', '2020-12-04 08:40:59');
INSERT INTO `feature` VALUES ('3', '1', 'Sample Content', null, '<h5>OBJECTIVES DOMAINS</h5>\r\n\r\n<h5>QuickBooks Setup</h5>\r\n<br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>What information is required before they set up a QuickBooks file</li>\r\n	<li>How to start a new company data file in QuickBooks (Easy Step Interview)</li>\r\n	<li>How to keep the lists and preferences from an old file while removing old transactions</li>\r\n	<li>How to customize the home page</li>\r\n	<li>How to set up lists (customers, vendors, items, etc.). This includes understanding which names and items should appear on which lists.</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<h5>QuickBooks Utilities and General Product Knowledge</h5>\r\n<br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>How to navigate or move around QuickBooks (use home page, menus, icon bar etc.)</li>\r\n	<li>How to back up and restore a data file</li>\r\n	<li>How to determine the release number and how to update QuickBooks</li>\r\n	<li>How to use QuickBooks in a single-user and multi-user mode</li>\r\n	<li>What versions and editions of QuickBooks are available for a specific year (desktop version)</li>\r\n	<li>How to password protect QuickBooks</li>\r\n	<li>How and why to use preferences</li>\r\n</ul>\r\n<br />\r\n<strong>List Management</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>How to manage lists (customers, vendors, items, etc.). List management include:</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Adding new entries</li>\r\n	<li>Deleting entries</li>\r\n	<li>Editing entries</li>\r\n	<li>Merging entries</li>\r\n</ul>\r\n<br />\r\n<strong>Items</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>QuickBooks uses items to perform the necessary accounting entries</li>\r\n	<li>The different types of items and when to use each type</li>\r\n	<li>How to use items for different types of scenarios. These include companies that sell:</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Products for a specified price</li>\r\n	<li>Services for a specified price</li>\r\n	<li>Unique products or services that have different prices for each sale</li>\r\n	<li>One service or product</li>\r\n</ul>\r\n<br />\r\n<strong>Sales</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>Who should be listed in the Customer Center</li>\r\n	<li>How to navigate and use the Customer Center</li>\r\n	<li>How to complete the workflow (from the sale to making the deposit) for:</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Invoicing (A/R)</li>\r\n	<li>Sales Receipts (no A/R)</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>How QuickBooks uses the Undeposited Funds, Accounts Receivable, and checking accounts in the invoicing cycle.</li>\r\n	<li>How and why to record a customer credit</li>\r\n	<li>How and why to create statements</li>\r\n	<li>How to handle bounced (NSF) checks</li>\r\n</ul>\r\n<br />\r\n<strong>Purchases</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>Who should be listed in the Vendor Center</li>\r\n	<li>How to navigate and use the Vendor Center</li>\r\n	<li>The different workflows for making purchases</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Entering and paying bills (A/P)</li>\r\n	<li>Writing checks</li>\r\n	<li>Using a Credit Card</li>\r\n	<li>Using a Debit Card</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>How to record the transactions in the purchase workflows</li>\r\n	<li>How and why to record a Vendor credit</li>\r\n	<li>How to complete the inventory workflow (PO to payment)</li>\r\n	<li>How to set up, collect and pay sales tax</li>\r\n	<li>Bank reconciliation</li>\r\n</ul>\r\n<br />\r\n<strong>Payroll</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>The differences between the Payroll Services available from QuickBooks</li>\r\n	<li>How to set up Payroll (including employees, Federal and State taxes and basic Payroll deductions) using the Payroll Setup Wizard.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>How to set up an employee&rsquo;s earnings and sick or vacation time</li>\r\n	<li>How to track sick or vacation time (accruing hours and using &ldquo;banked&rdquo; hours)</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>How and why to setup Payroll Schedules</li>\r\n	<li>How to run Payroll</li>\r\n	<li>How and why to pay Payroll Liabilities</li>\r\n	<li>How to prepare payroll forms (941, W2) in QuickBooks</li>\r\n	<li>Track time and use it for payroll or for invoicing customers</li>\r\n</ul>\r\n<br />\r\n<strong>Reports</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>Why and how to use the Report Center</li>\r\n	<li>How to customize reports (report modifications, collapsing sub accounts, etc.)</li>\r\n	<li>The basic question that each report answers (basic understanding of each report)</li>\r\n	<li>How and why to process multiple reports</li>\r\n	<li>How and why to send reports to Excel (understand and use the basic and advanced tab)</li>\r\n	<li>How to memorize reports</li>\r\n</ul>\r\n<br />\r\n<strong>Basic Accounting</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>What the basic financial statements are and have a basic understanding of what they mean.</li>\r\n	<li>The difference between cash and accrual reports</li>\r\n	<li>How and why to set a closing date</li>\r\n	<li>How to enter a Journal Entry if asked to do so by an accountant (they do not need to fully understand what accounts to debit or credit)</li>\r\n</ul>\r\n<br />\r\n<strong>Customization/Saving Time and Shortcuts</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>How and why to memorize transactions (automatically enter)</li>\r\n	<li>How to set up multiple users and what level of access can be granted or denied</li>\r\n	<li>How and why to create custom fields (customers, vendors, and employees)</li>\r\n	<li>How to customize an invoice</li>\r\n</ul>', '3', '1', '2020-12-04 08:41:55', '2020-12-04 08:41:55');
INSERT INTO `feature` VALUES ('4', '3', 'Description', null, 'Bookkeeping in the 21st Century requires more than knowledge of GAAP principles or an eye for detail students need relevant computing skills. Intuit&reg; QuickBooks, the industry leader in managerial accounting software for small business, provides an easy-to-understand platform for students to grasp accounting concepts while honing skills in the most prevalent bookkeeping application in small business today. Students can validate their QuickBooks knowledge by becoming and Intuit&reg; QuickBooks Certified User (QBCU).<br />\r\n&nbsp;\r\n<ul>\r\n	<li>Exam vouchers are transmitted electronically via email and are non-refundable. Please allow up to two days for processing.</li>\r\n	<li>Vouchers expire one year after date of purchase.</li>\r\n	<li>The holder of this voucher is entitled to take one of the following exams at a Certiport Authorized Testing Center: Intuit Quick Books Desktop Certified User, Intuit QuickBooks Desktop 2017 Certified User, or Intuit QuickBooks Online Certified User.</li>\r\n	<li>Test candidates are responsible for locating a Certified Authorized Testing Center and making an appointment to take the exam. See course overview for more information. Testing centers reserve the right to charge a proctoring fee.</li>\r\n	<li>In the event that you do not pass the exam, a retake code will be emailed to you. You may re-take the exam after waiting 24 hours from the time your initial exam was first started. Retake vouchers must be used within 30 days of the failed exam.</li>\r\n	<li>Instructions for accessing the GMetrix Practice exams, as well as a code, will be emailed to you within 48 hours. Practice tests are taken online, and can be taken on any computer with sufficient internet access.</li>\r\n	<li>This GMetrix single application license allows the licensed individual to take the GMetrix practice tests up to 30 times during a one year period. When the license holder activates this license he/she will be able to choose any GMetrix title for QuickBooks. Once the license holder has chosen a title, the license will then be locked down to allow the license holder access to only the chosen title.</li>\r\n</ul>\r\n<br />\r\nGMetrix offers practice tests in two test modes:<br />\r\n&nbsp;\r\n<ul>\r\n	<li>Testing Mode</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Students experience was the certification exams will be like</li>\r\n	<li>Timed practice test that performs just like the actual certification exam Training Mode</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Training Mode</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Students work at their own pace as they receive feedback</li>\r\n	<li>They may opt to access step-by-step instructions or help for each question</li>\r\n</ul>\r\n<br />\r\n<em>Course Overview tab provides additional information of redeeming your vouchers.</em>', '1', '1', '2020-12-16 07:54:12', '2020-12-16 07:54:12');
INSERT INTO `feature` VALUES ('5', '3', 'Course Overview', null, '<strong>Redeem your Exam Voucher:</strong><br />\r\n<br />\r\nTest candidates, proctors and administrators must adhere and/or enforce all of the following policies when taking or administering an exam at a Certiport Authorized Testing Center.<br />\r\n&nbsp;\r\n<ul>\r\n	<li>Upon arrival at the testing center, Test Candidates must present their personal identification bearing a photograph and signature.</li>\r\n	<li>Test candidates may not take recording devices such as paper/pencil, cameras, PDAs, computers, or communication devices such as cell phones, or pagers into the testing area.</li>\r\n	<li>Test candidates must not communicate with other test candidates either in the testing room, or in any other area of the testing facility during authorized testing breaks.</li>\r\n	<li>Test candidates must read and accept the terms of the non-disclosure agreement (NDA) presented prior to the start of the exam.</li>\r\n	<li>Test candidates must not remove exam content from the testing area, and must not reproduce exam content outside of the test ing area.</li>\r\n	<li>Test candidates must abide by the terms of the retake policy.</li>\r\n	<li>Test candidates found to have violated testing center rules may lose any existing certifications and may be made permanently ineli gible for additional certifications.</li>\r\n</ul>\r\n<br />\r\n<br />\r\n<strong>Note:</strong>&nbsp;In certain circumstances, the computer on which a test candidate is taking the exam may stop responding, or produce an error condition in which continuation of the exam would not be possible. If a test candidate experiences this or any other computer interruption (e.g. power outage), they must notify the Certiport Authorized Testing Center (CATC) administrator and/or proctor immediately to restart the exam. When the computer is restarted and/or the error condition resolved, the proctor will launch the software again and the test candidate will choose the &quot;In-Progress&quot; exam, which on most exams will return them to the point at which the interruption occurred. On applicable exams, the software will retain the exam progress and time remaining up to the point of termination, as long as the exam is resumed on the same computer in which it was started.<br />\r\n<br />\r\nIf you pass the exam, you will receive a score report and a sectional analysis that can be printed at the testing center. You will also receive an email notification and instructions on accessing your digital transcript. An official certificate will be mailed to the address specified in your personal profile if the certification program is fulfilled by Certiport.<br />\r\n<br />\r\nIf you fail the exam and your voucher included a retake, the retake code will automatically populate in the payment method field when you go to retake the test (as soon as the retake code has been generated). Retake vouchers expire 30 days after the first exam date. See the section above for all policies related to retake vouchers.<br />\r\n<br />\r\n<strong>Redeem your Practice Test through GMetrix</strong><br />\r\n<br />\r\nWithin 24 hours, ISE will provide a unique GMetrix code to the email address you provided during your purchase. Included will be instructions on how to redeem the code through GMetrix.&nbsp;', '2', '1', '2020-12-16 07:54:40', '2020-12-16 07:54:40');
INSERT INTO `feature` VALUES ('6', '3', 'Sample Content', null, '<h5>OBJECTIVES DOMAINS</h5>\r\n\r\n<h5>QuickBooks Setup</h5>\r\n<br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>What information is required before they set up a QuickBooks file</li>\r\n	<li>How to start a new company data file in QuickBooks (Easy Step Interview)</li>\r\n	<li>How to keep the lists and preferences from an old file while removing old transactions</li>\r\n	<li>How to customize the home page</li>\r\n	<li>How to set up lists (customers, vendors, items, etc.). This includes understanding which names and items should appear on which lists.</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<h5>QuickBooks Utilities and General Product Knowledge</h5>\r\n<br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>How to navigate or move around QuickBooks (use home page, menus, icon bar etc.)</li>\r\n	<li>How to back up and restore a data file</li>\r\n	<li>How to determine the release number and how to update QuickBooks</li>\r\n	<li>How to use QuickBooks in a single-user and multi-user mode</li>\r\n	<li>What versions and editions of QuickBooks are available for a specific year (desktop version)</li>\r\n	<li>How to password protect QuickBooks</li>\r\n	<li>How and why to use preferences</li>\r\n</ul>\r\n<br />\r\n<strong>List Management</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>How to manage lists (customers, vendors, items, etc.). List management include:</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Adding new entries</li>\r\n	<li>Deleting entries</li>\r\n	<li>Editing entries</li>\r\n	<li>Merging entries</li>\r\n</ul>\r\n<br />\r\n<strong>Items</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>QuickBooks uses items to perform the necessary accounting entries</li>\r\n	<li>The different types of items and when to use each type</li>\r\n	<li>How to use items for different types of scenarios. These include companies that sell:</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Products for a specified price</li>\r\n	<li>Services for a specified price</li>\r\n	<li>Unique products or services that have different prices for each sale</li>\r\n	<li>One service or product</li>\r\n</ul>\r\n<br />\r\n<strong>Sales</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>Who should be listed in the Customer Center</li>\r\n	<li>How to navigate and use the Customer Center</li>\r\n	<li>How to complete the workflow (from the sale to making the deposit) for:</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Invoicing (A/R)</li>\r\n	<li>Sales Receipts (no A/R)</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>How QuickBooks uses the Undeposited Funds, Accounts Receivable, and checking accounts in the invoicing cycle.</li>\r\n	<li>How and why to record a customer credit</li>\r\n	<li>How and why to create statements</li>\r\n	<li>How to handle bounced (NSF) checks</li>\r\n</ul>\r\n<br />\r\n<strong>Purchases</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>Who should be listed in the Vendor Center</li>\r\n	<li>How to navigate and use the Vendor Center</li>\r\n	<li>The different workflows for making purchases</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Entering and paying bills (A/P)</li>\r\n	<li>Writing checks</li>\r\n	<li>Using a Credit Card</li>\r\n	<li>Using a Debit Card</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>How to record the transactions in the purchase workflows</li>\r\n	<li>How and why to record a Vendor credit</li>\r\n	<li>How to complete the inventory workflow (PO to payment)</li>\r\n	<li>How to set up, collect and pay sales tax</li>\r\n	<li>Bank reconciliation</li>\r\n</ul>\r\n<br />\r\n<strong>Payroll</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>The differences between the Payroll Services available from QuickBooks</li>\r\n	<li>How to set up Payroll (including employees, Federal and State taxes and basic Payroll deductions) using the Payroll Setup Wizard.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>How to set up an employee&rsquo;s earnings and sick or vacation time</li>\r\n	<li>How to track sick or vacation time (accruing hours and using &ldquo;banked&rdquo; hours)</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>How and why to setup Payroll Schedules</li>\r\n	<li>How to run Payroll</li>\r\n	<li>How and why to pay Payroll Liabilities</li>\r\n	<li>How to prepare payroll forms (941, W2) in QuickBooks</li>\r\n	<li>Track time and use it for payroll or for invoicing customers</li>\r\n</ul>\r\n<br />\r\n<strong>Reports</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>Why and how to use the Report Center</li>\r\n	<li>How to customize reports (report modifications, collapsing sub accounts, etc.)</li>\r\n	<li>The basic question that each report answers (basic understanding of each report)</li>\r\n	<li>How and why to process multiple reports</li>\r\n	<li>How and why to send reports to Excel (understand and use the basic and advanced tab)</li>\r\n	<li>How to memorize reports</li>\r\n</ul>\r\n<br />\r\n<strong>Basic Accounting</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>What the basic financial statements are and have a basic understanding of what they mean.</li>\r\n	<li>The difference between cash and accrual reports</li>\r\n	<li>How and why to set a closing date</li>\r\n	<li>How to enter a Journal Entry if asked to do so by an accountant (they do not need to fully understand what accounts to debit or credit)</li>\r\n</ul>\r\n<br />\r\n<strong>Customization/Saving Time and Shortcuts</strong><br />\r\n<strong>A student should know:</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>How and why to memorize transactions (automatically enter)</li>\r\n	<li>How to set up multiple users and what level of access can be granted or denied</li>\r\n	<li>How and why to create custom fields (customers, vendors, and employees)</li>\r\n	<li>How to customize an invoice</li>\r\n</ul>', '3', '1', '2020-12-16 07:55:16', '2020-12-16 07:55:16');
INSERT INTO `feature` VALUES ('7', '4', 'Self paced QuickBooks Study', null, 'Please allow up to three business days to receive an email with an access code and instructions. Once you receive the code, you will be able to choose whether you want to take the QuickBooks Online course or the QuickBooks Desktop course.<br />\r\n<br />\r\nLearnKey is a premier global provider of self-paced education and training solutions for education and personal users. They create flexible solutions that work for everyone because they are not only easy to use, but they are extremely engaging and interactive. LearnKey brings the classroom experience to you - where and when you need it. LearnKey has built its reputation by delivering the highest production quality courseware, adhering strictly to learning objectives and strong instructional design.<br />\r\n&nbsp;\r\n<ul>\r\n	<li>Gain the skills and confidence required to successfully obtain your QuickBooks Certified User certification</li>\r\n	<li>Test prep questions that meet all QuickBooks exam objectives&nbsp;</li>\r\n	<li>View your online courseware anytime, anywhere</li>\r\n</ul>\r\n<br />\r\nThe LearnKey course is delivered on the GMetrix platform, which means you can access any GMetrix practice tests you may have purchased at the same site using your same login information.', '1', '1', '2020-12-16 08:00:09', '2020-12-16 08:00:09');
INSERT INTO `feature` VALUES ('8', '5', 'Course Overview', null, '<strong>Locate a Testing Center</strong><br />\r\n<br />\r\nPrior to purchasing your exam vouchers, we strongly recommend that you locate a Certiport Authorized Testing Center (CATC) in your area.\r\n<ol type=\"1\">\r\n	<li>Locate a CATC by visiting our locator&nbsp;<strong><a href=\"http://ise.edu.kh/register\" target=\"blank\">here</a>.</strong></li>\r\n	<li>Contact the CATC directly to determine:\r\n	<ol type=\"a\">\r\n		<li>If your exam is available at that location.</li>\r\n		<li>If there are any proctoring or other applicable fees.</li>\r\n	</ol>\r\n	</li>\r\n	<li>Make an appointment to take your exam.</li>\r\n</ol>\r\n\r\n<hr /><strong>Register for an Account:</strong><br />\r\n<br />\r\nOnce you&#39;ve determined which certification is right for you, you are ready to create an account with Certiport.&nbsp;<br />\r\nIf you have taken a Certiport test previously, you already have an account set up.<br />\r\nYou will need to provide your username and password when you take the certification exam.\r\n<hr /><strong>Assign Voucher to your Account:</strong><br />\r\n<br />\r\nOnce you have a voucher, you may assign it to yourself. Doing so secures the voucher from being redeemed fraudulently. Login to your Test Candidate Account, enter your voucher number in the Voucher code field and click on Assign Voucher to Me. Once the voucher is assigned, you will be the only person who can use it. Inform the Proctor at the Testing Center you have assigned the voucher to yourself\r\n<hr /><strong>Redeem your Exam Voucher:</strong><br />\r\n<br />\r\nPlease take note of all exam adminstration policies found Here. The exam must be taken at a Certiport Authorized Testing Center (CATC). Please contact your desired CATC to schedule your exam and to ensure they are set up to administer it. Follow these instructions to take the exam:<br />\r\nThe testing center should verify your identity upon arrival, or at some point prior to actually sitting for the exam.\r\n<ol>\r\n	<li>The testing center should verify your identity upon arrival, or at some point prior to actually sitting for the exam.</li>\r\n	<li>The testing center proctor will launch the Certiport exam delivery software.</li>\r\n	<li>If you have not previously registered with Certiport, click the&nbsp;<strong>Register</strong>&nbsp;button next to &quot;New User&quot; within the software and follow the instructions to create a new account. Once registered, you will enter your Certiport Username and Password into the exa delivery software to begin the process. It is recommended that you create your profile at&nbsp;<strong><a href=\"http://ise.edu.kh/\">www.ise.edu.kh</a></strong>&nbsp;and have your Username and Password ready prior to sitting for the exam.</li>\r\n	<li>Once the exam has been selected, choose Payment Method on the confirmation page and enter your voucher number. If you ahve assigned a voucher to yourself, then this field will auto-populate.</li>\r\n	<li>The proctor will verify that you have chosen the correct exam and that your voucher is valid.</li>\r\n	<li>The proctor will enter their Username and Password.</li>\r\n	<li>You are now ready to take your exam. The software will run through a brief tutorial about how to navigate the features of the exam prior to the actual exam timer beginning.</li>\r\n</ol>\r\n<br />\r\nIf you failed the exam and your voucher included a retake, the retake code will automatically populate in the payment method field when you go to retake the test (as soon as the retake code has been generated). Retake vouchers expire 30 days after the first exam date. See the section above for all policies related to retake vouchers.', '1', '1', '2020-12-16 08:31:52', '2020-12-16 08:31:52');
INSERT INTO `feature` VALUES ('9', '5', 'Description', null, 'This product includes one Entrepreneurship &amp; Small Business. (ESB) certification voucher with a retake.<br />\r\nIn the event that you do not pass the exam, a retake code will be emailed to you. You may re-take the exam after waiting 24 hours from the time your initial exam was first started. Retake vouchers must be used within 30 days of the failed exam.\r\n<hr />In the event that you do not pass the exam, a retake code will be emailed to you. You may re-take the exam after waiting 24 hours from the time your initial exam was first started. Retake vouchers must be used within 30 days of the failed exam.\r\n<ul>\r\n	<li>Exam vouchers are transmitted electronically via email and are non-refundable. Please allow up to two days for processing.</li>\r\n	<li>Vouchers expire one year after date of purchase.</li>\r\n	<li>Test candidates are responsible for locating a Certified Authorized Testing Center and making an appointment to take the exam. See course overview for more information. Testing centers reserve the right to charge a proctoring fee.</li>\r\n	<li>In the event that you do not pass the exam, a retake code will be emailed to you. You may re-take the exam after waiting 24 hours from the time your initial exam was first started. Retake vouchers must be used within 30 days of the failed exam.</li>\r\n</ul>\r\n<br />\r\nCourse Overview tab provides additional information on redeeming your vouchers.', '2', '1', '2020-12-16 08:33:50', '2020-12-16 08:33:50');
INSERT INTO `feature` VALUES ('10', '6', 'Course Overview', null, '<strong>Redeem your Practice Test through GMetrix:</strong><br />\r\n<br />\r\n<br />\r\nWithin two business days, Certiport will provide a unique GMetrix code to the email you provided during your purchase. Instructions on how to redeem the code will be provided. If you don&rsquo;t receive your code after two business days, do one of the following<br />\r\n<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp;1.Confirm the email address you provided is accurate<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp;2.Check your &ldquo;junk mail&rdquo; filter<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp;3.Send an email to info@ise.edu.kh with a copy of your purchase receipt.', '1', '1', '2020-12-16 08:37:47', '2020-12-16 08:37:47');
INSERT INTO `feature` VALUES ('12', '6', 'Description', null, 'This product includes a single user license for&nbsp;<strong>GMetrix Practice Tests for the Entrepreneurship &amp; Small Business. (ESB) certification.</strong>\r\n<hr />This practice test license entitles the holder to take up to 30 GMetrix practice tests for the ESB exam. There are three different practice tests available.<br />\r\nInstructions for accessing the GMetrix Practice exams, as well as a code, will be emailed to you within 48 hours. Practice tests are taken online and can be taken on any computer with sufficient internet access.<br />\r\nGMetrix offers practice tests in two test modes:<br />\r\n<br />\r\n<br />\r\n<strong>Testing Mode</strong>\r\n\r\n<ul>\r\n	<li>Students experience was the certification exams will be like</li>\r\n	<li>Timed practice test that performs just like the actual certification exam</li>\r\n</ul>\r\n<br />\r\n<strong>Training Mode</strong>\r\n\r\n<ul>\r\n	<li>Students work at their own pace as they receive feedback</li>\r\n	<li>They may opt to access step-by-step instructions or help for each question</li>\r\n</ul>\r\n<br />\r\nCourse Overview tab provides additional information of redeeming your vouchers.', '2', '1', '2020-12-16 08:39:17', '2020-12-16 08:39:17');
INSERT INTO `feature` VALUES ('15', '2', 'Description', null, 'This online, video-based course prepares candidates to take the Entrepreneurship &amp; Small Business (ESB) certification exam. Includes 14 hours of training including videos, online workbook, and quizzes.<br />\r\nPlease allow up to three business days to receive an email with access codes and instructions.<br />\r\nLearnKey is a premier global provider of self-paced education and training solutions for education and personal users. They create flexible solutions that work for everyone because they are not only easy to use, but they are extremely engaging and interactive. LearnKey brings the classroom experience to you - where and when you need it. LearnKey has built its reputation by delivering the highest production quality courseware, adhering strictly to learning objectives and strong instructional design.\r\n<ul>\r\n	<li>Gain the skills and confidence required to successfully obtain your ESB certification</li>\r\n	<li>Test prep questions that meet all ESB exam objectives</li>\r\n	<li>View your online courseware anytime, anywhere</li>\r\n</ul>\r\n<br />\r\nThe LearnKey course is delivered on the GMetrix platform, which means you can access any GMetrix practice tests you may have purchased at the same site using your same login information.<br />\r\nPlease allow up to three business days to receive an email with instructions.', '1', '1', '2020-12-16 08:43:57', '2020-12-16 08:43:57');
INSERT INTO `feature` VALUES ('16', '7', 'Course Overview', null, '<strong>Locate a Testing Center</strong><br />\r\nPrior to purchasing your exam vouchers, we strongly recommend that you locate a Certiport Authorized Testing Center (CATC) in your area.\r\n<ol type=\"1\">\r\n	<li>Locate a CATC by visiting our locator&nbsp;<strong><a href=\"http://ise.edu.kh/register\" target=\"blank\">here</a>.</strong></li>\r\n	<li>Contact the CATC directly to determine:\r\n	<ol type=\"a\">\r\n		<li>If your exam is available at that location.</li>\r\n		<li>If there are any proctoring or other applicable fees.</li>\r\n	</ol>\r\n	</li>\r\n	<li>Make an appointment to take your exam.</li>\r\n</ol>\r\n\r\n<hr />\r\n<p><strong>Register for an Account:</strong></p>\r\nOnce you&#39;ve determined which certification is right for you, you are ready to create an account with Certiport. Go to&nbsp;<strong><a href=\"http://www.ise.edu.kh/\">www.ise.edu.kh</a></strong><a href=\"http://www.certiport.com/\">&nbsp;</a>and click register to begin.<br />\r\n<br />\r\nIf you have taken a Certiport test previously, you already have an account set up.<br />\r\nYou will need to provide your username and password when you take the certification exam.<br />\r\n&nbsp;\r\n<hr /><strong>Assign Voucher to your Account:</strong><br />\r\nOnce you have a voucher, you may assign it to yourself. Doing so secures the voucher from being redeemed fraudulently. Login to your&nbsp;<strong><a href=\"http://www.ise.edu.kh/register\" target=\"blank\">Test Candidate Account</a></strong>, enter your voucher number in the&nbsp;<strong>Voucher code</strong>&nbsp;field and click on&nbsp;<strong>Assign Voucher to Me</strong>. Once the voucher is assigned, you will be the only person who can use it. Inform the Proctor at the Testing Center you have assigned the voucher to yourself\r\n\r\n<hr /><strong>Redeem your Exam Voucher:</strong><br />\r\nPlease take note of all exam administration policies found Here. The exam must be taken at a Certiport Authorized Testing Center (CATC). Please contact your desired CATC to schedule your exam and to ensure they are set up to administer it. Follow these instructions to take the exam:\r\n<ol>\r\n	<li>The testing center should verify your identity upon arrival, or at some point prior to actually sitting for the exam.</li>\r\n	<li>The testing center proctor will launch the Certiport exam delivery software.</li>\r\n	<li>If you have not previously registered with Certiport, click the&nbsp;<strong>Register</strong>&nbsp;button next to &quot;New User&quot; within the software and follow the instructions to create a new account. Once registered, you will enter your Certiport Username and Password into the exa delivery software to begin the process. It is recommended that you create your profile at&nbsp;<strong><a href=\"http://www.ise.edu.kh/\">www.ise.edu.kh</a></strong>&nbsp;and have your Username and Password ready prior to sitting for the exam.</li>\r\n	<li>Once the exam has been selected, choose the Payment Method on the confirmation page and enter your voucher number. If you have assigned a voucher to yourself, then this field will auto-populate.</li>\r\n	<li>The proctor will verify that you have chosen the correct exam and that your voucher is valid.</li>\r\n	<li>The proctor will enter their Username and Password.</li>\r\n	<li>You are now ready to take your exam. The software will run through a brief tutorial about how to navigate the features of the exam prior to the actual exam timer beginning.</li>\r\n</ol>\r\n<br />\r\nIf you pass the exam, you will receive a score report and a sectional analysis that can be printed at the testing center. You will also receive an email notification and instructions on accessing your digital transcript. An official certificate will be mailed to the address specified in your personal profile if the certification program is fulfilled by Certiport.<br />\r\nIf you failed the exam and your voucher included a retake, the retake code will automatically populate in the payment method field when you go to retake the test (as soon as the retake code has been generated). Retake vouchers expire 30 days after the first exam date. See the section above for all policies related to retake vouchers.<br />\r\n&nbsp;', '1', '1', '2020-12-16 10:21:54', '2020-12-16 10:27:56');
INSERT INTO `feature` VALUES ('22', '7', 'Description', null, 'This product includes one Entrepreneurship &amp; Small Business. (ESB) certification voucher.\r\n<hr />\r\n<ul>\r\n	<li>Exam vouchers are transmitted electronically via email and are non-refundable. Please allow up to two days for processing.</li>\r\n	<li>Vouchers expire one year after the date of purchase.</li>\r\n	<li>Test candidates are responsible for locating a Certified Authorized Testing Center and making an appointment to take the exam. See the course overview for more information. Testing centers reserve the right to charge a proctoring fee.</li>\r\n</ul>\r\n<br />\r\n<em>Course Overview tab provides additional information of redeeming your vouchers.</em>', '2', '1', '2020-12-16 10:28:47', '2020-12-16 10:28:47');

-- ----------------------------
-- Table structure for feature_relate_version
-- ----------------------------
DROP TABLE IF EXISTS `feature_relate_version`;
CREATE TABLE `feature_relate_version` (
  `feature_version_id` int(11) NOT NULL AUTO_INCREMENT,
  `feature_id` int(11) DEFAULT NULL,
  `version_id` int(11) DEFAULT NULL,
  `marge` int(1) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`feature_version_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of feature_relate_version
-- ----------------------------
INSERT INTO `feature_relate_version` VALUES ('1', '1', '5', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('2', '1', '6', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('3', '1', '7', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('4', '1', '8', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('5', '2', '5', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('6', '2', '6', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('7', '2', '7', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('8', '2', '8', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('9', '3', '5', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('10', '3', '6', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('11', '3', '7', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('12', '3', '8', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('13', '4', '10', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('14', '4', '11', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('15', '4', '12', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('16', '5', '10', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('17', '5', '11', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('18', '5', '12', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('19', '6', '10', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('20', '6', '11', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('21', '6', '12', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('22', '7', '17', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('23', '7', '18', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('24', '7', '19', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('25', '7', '20', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('26', '8', '13', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('27', '8', '15', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('28', '8', '16', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('29', '8', '14', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('30', '9', '25', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('31', '9', '26', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('32', '9', '27', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('33', '15', '13', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('34', '15', '15', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('35', '15', '16', null, null, null, null);
INSERT INTO `feature_relate_version` VALUES ('36', '15', '14', null, null, null, null);

-- ----------------------------
-- Table structure for instructors
-- ----------------------------
DROP TABLE IF EXISTS `instructors`;
CREATE TABLE `instructors` (
  `instructors_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `language_id` int(11) NOT NULL,
  `instructors_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` smallint(6) NOT NULL,
  `order_by` smallint(6) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`instructors_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of instructors
-- ----------------------------
INSERT INTO `instructors` VALUES ('1', '2', 'Colt Steele', '1', 'Developer and Bootcamp Instructor', 'uploads/1566809325.jpg', 'Hi! I\'m Colt. I\'m a developer with a serious love for teaching. I\'ve spent the last few years teaching people to program at 2 different immersive bootcamps where I\'ve helped hundreds of people become web developers and change their lives. My graduates work at companies like Google, Salesforce, and Square.<br /><br /> Most recently, I led Galvanize\'s SF\'s 6 month immersive program as Lead Instructor and Curriculum Director. After graduating from my class, 94% of my students went on to receive full-time developer roles. I also worked at Udacity as a Senior Course Developer on the web development team where I got to reach thousands of students daily.<br /><br /> I’ve since focused my time on bringing my classroom teaching experience to an online environment. In 2016 I launched my Web Developer Bootcamp course, which has since gone on to become one of the best selling and top rated courses on Udemy. I was also voted Udemy’s Best New Instructor of 2016.<br /><br /> I\'ve spent years figuring out the \"formula\" to teaching technical skills in a classroom environment, and I\'m really excited to finally share my expertise with you. I can confidently say that my online courses are without a doubt the most comprehensive ones on the market.', '#website', '#facebook', '#Twiter', '#LinkIn', 'https://www.youtube.com/c/ColtSteeleCode', null, '1', '1', '1', '1', '2019-08-26 08:30:05', '2019-08-26 08:49:30');
INSERT INTO `instructors` VALUES ('2', '1', 'CAS Sophanno', '1', 'CAS Sophanno', 'uploads/1566809598.jpeg', null, null, null, null, null, null, null, '1', '2', '1', '1', '2019-08-26 08:53:18', '2019-08-26 09:13:58');

-- ----------------------------
-- Table structure for link_target
-- ----------------------------
DROP TABLE IF EXISTS `link_target`;
CREATE TABLE `link_target` (
  `target_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `target` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`target_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of link_target
-- ----------------------------
INSERT INTO `link_target` VALUES ('1', '', 'Not set', '2019-08-16 11:47:45', null);
INSERT INTO `link_target` VALUES ('2', '_blank', 'New Window', '2019-08-16 11:47:45', null);
INSERT INTO `link_target` VALUES ('3', '_self', 'Same Window', '2019-08-16 11:47:45', null);
INSERT INTO `link_target` VALUES ('4', '_parent', 'Parent Window', '2019-08-16 11:47:45', null);

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `menu_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT 12,
  `page_id` bigint(20) DEFAULT NULL,
  `link_target_id` bigint(20) DEFAULT NULL,
  `block_id` bigint(20) DEFAULT NULL,
  `menu_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `icon_menu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_field` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`menu_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '0', '1', '1', '1', 'Home', '/', '/', null, null, '1', '1', '2020-11-30 16:27:15', '2020-11-30 16:27:15');
INSERT INTO `menu` VALUES ('2', '0', '10', '1', '1', 'About', 'about', null, null, null, '6', '1', '2020-12-04 10:24:02', '2020-12-04 10:24:02');
INSERT INTO `menu` VALUES ('3', '2', '11', '1', '1', 'Our Story', 'our-story', '/about', null, null, '7', '1', '2020-12-04 10:24:48', '2020-12-04 10:24:48');
INSERT INTO `menu` VALUES ('4', '0', '12', '1', '1', 'Certification', 'certification', '#', null, null, '2', '1', '2020-12-04 10:26:19', '2020-12-04 10:26:19');
INSERT INTO `menu` VALUES ('5', '4', '6', '1', '1', 'QuickBooks Certified User', 'self-paced-study', null, null, null, '3', '1', '2020-12-04 10:27:20', '2020-12-04 10:27:20');
INSERT INTO `menu` VALUES ('6', '4', '7', '1', '1', 'Entrepreneurship and Small Business', 'esb', null, null, null, '4', '1', '2020-12-04 10:27:53', '2020-12-04 10:27:53');
INSERT INTO `menu` VALUES ('7', '0', '8', '1', '1', 'Why Get Certified', 'whycertified', null, null, null, '3', '1', '2020-12-04 10:28:24', '2020-12-04 10:28:24');
INSERT INTO `menu` VALUES ('8', '0', '9', '1', '1', 'Resource', 'resources', null, null, null, '4', '1', '2020-12-04 10:28:44', '2020-12-04 10:28:44');
INSERT INTO `menu` VALUES ('9', '0', '13', '1', '1', 'Contact us', 'contact', null, null, null, '5', '1', '2020-12-04 10:29:45', '2020-12-04 10:29:45');

-- ----------------------------
-- Table structure for menu_block
-- ----------------------------
DROP TABLE IF EXISTS `menu_block`;
CREATE TABLE `menu_block` (
  `block_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `block` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`block_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menu_block
-- ----------------------------
INSERT INTO `menu_block` VALUES ('1', 'top', null, null);
INSERT INTO `menu_block` VALUES ('2', 'Bottom', null, null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('41', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('42', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('43', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('44', '2020_05_02_031440_create_permission_tables', '1');
INSERT INTO `migrations` VALUES ('45', '2020_05_02_033722_create_menu_block_table', '1');
INSERT INTO `migrations` VALUES ('46', '2020_05_02_043553_create_link_target_table', '1');
INSERT INTO `migrations` VALUES ('47', '2020_05_02_043924_create_menu_table', '1');
INSERT INTO `migrations` VALUES ('48', '2020_05_03_045341_create_pages_table', '1');
INSERT INTO `migrations` VALUES ('49', '2020_05_03_053824_create_template_table', '1');
INSERT INTO `migrations` VALUES ('54', '2020_05_08_032826_section_template_table', '2');

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`) USING BTREE,
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`) USING BTREE,
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES ('2', 'App\\User', '1');
INSERT INTO `model_has_roles` VALUES ('3', 'App\\User', '2');

-- ----------------------------
-- Table structure for notification
-- ----------------------------
DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
  `notification_id` int(6) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `messages` text DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `is_active` int(1) DEFAULT 1,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of notification
-- ----------------------------
INSERT INTO `notification` VALUES ('1', 'Title Notification', null, 'ISE represents a progressive innovation of education in accredited courses tailored to suit your own desire to learn.\r\nWith years of experience in hands-on training coupled with the most modern methods of knowledge delivery, ISE stands out as exemplary in impacting practical skills in our trainees which in turn empowers them to reach their greater potentials and secure a more promising future.\r\nWhether you aim to become an accountant, software engineer, consultant, manager or even a Chief Executive Officer of your own business; ISE will equip you with the knowledge and skills to make it in the real world.', '2020-12-28 16:23:16', '1');
INSERT INTO `notification` VALUES ('2', 'Title Notification 2', null, 'ISE represents a progressive innovation of education in accredited courses tailored to suit your own desire to learn.\r\nWith years of experience in hands-on training coupled with the most modern methods of knowledge delivery, ISE stands out as exemplary in impacting practical skills in our trainees which in turn empowers them to reach their greater potentials and secure a more promising future.\r\nWhether you aim to become an accountant, software engineer, consultant, manager or even a Chief Executive Officer of your own business; ISE will equip you with the knowledge and skills to make it in the real world.', '2020-12-28 16:23:16', '1');

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `page_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `temp_id` bigint(20) DEFAULT 12,
  `page_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `base_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `og_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `og_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `meta_keyword` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `custom_field` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `order_by` tinyint(4) DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`page_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('1', '8', 'Home', 'ISE Invnovation school of education in cambodia', '/', '127.0.0.1/ise-invnovation-school-of-education-in-cambodia', null, 'ISE Invnovation school of education in cambodia', 'ISE Invnovation school of education in cambodia', 'Home', 'text', '1', '1', '2020-11-30 16:00:09', '2020-11-30 16:00:09');
INSERT INTO `pages` VALUES ('2', '1', 'QuickBooks Certification', 'QuickBooks-Certification', 'quickbooks-certification', 'quickbooks-certification', 'uploads/seo/1607003920.tab-01.png', 'Core classroom training', 'We’ll take you through the key functionality of QuickBooks in\r\nour four-day session', 'QuickBooks-Certification', 'text', '1', '1', '2020-12-03 13:53:09', '2020-12-03 13:58:40');
INSERT INTO `pages` VALUES ('3', '1', 'Practice', 'Practice', 'practice', 'practice', 'uploads/seo/1607003868.tab-02.png', 'practice', 'These performance-based assessment and test preparation tools help individuals achieve QuickBooks', 'practice', 'text', '3', '1', '2020-12-03 13:57:48', '2020-12-03 13:57:48');
INSERT INTO `pages` VALUES ('4', '1', 'Take the exam', 'Take-the-exam', 'take-the-exam', '127.0.0.1/take-the-exam', 'uploads/seo/1607003991.tab-03.png', 'Take the exam', 'QuickBooks Certified User exam vouchers will now include access to both the QuickBooks Desktop', 'Take-the-exam', 'text', '4', '1', '2020-12-03 13:59:51', '2020-12-03 14:00:16');
INSERT INTO `pages` VALUES ('5', '1', 'Online Training', 'Online Training', 'online-training', '127.0.0.1/online-training', 'uploads/seo/1607068663.tab-04.png', 'Online Training', 'Save your time on traveling, stay in the comfort of your home, and attend a QuickBooks live-online class.', 'Online-training', 'text', '1', '1', '2020-12-04 07:57:43', '2020-12-12 04:07:09');
INSERT INTO `pages` VALUES ('6', '1', 'Self-paced Study', 'Self-paced Study', 'self-paced-study', 'self-paced-study', 'uploads/seo/1608100267.Untitled-1.jpg', 'Self-paced Study', 'Achieve certification status at your own pace with your online training modules\r\nLearn More', 'Self-paced-study', 'text', '1', '1', '2020-12-04 08:16:46', '2020-12-16 06:31:07');
INSERT INTO `pages` VALUES ('7', '8', 'Entrepreneurship and Small Business', 'Entrepreneurship and Small Business', 'esb', '127.0.0.1/entrepreneurship-and-small-business', null, 'Entrepreneurship and Small Business', null, 'Entrepreneurship-and-Small-Business', 'text', '7', '1', '2020-12-04 09:23:17', '2020-12-04 09:23:17');
INSERT INTO `pages` VALUES ('8', '1', 'why certified', 'why certified', 'whycertified', '127.0.0.1/why-certified', null, 'why certified', 'The speed of technological advancement in today’s world is already at a pace where available skills do not match demand.', 'whycertified', 'text', '8', '1', '2020-12-04 09:34:06', '2020-12-04 09:34:06');
INSERT INTO `pages` VALUES ('9', '1', 'Resources', 'Resources', 'resources', '127.0.0.1/resources', null, 'resources', 'Innovation School of Education does not end with providing a good learning environment and highly skilled instructors.', 'Resources', 'text', '0', '1', '2020-12-04 09:55:23', '2020-12-04 09:55:23');
INSERT INTO `pages` VALUES ('10', '1', 'about', 'about', 'about', '127.0.0.1/about', null, 'about', 'about', 'about', 'text', '0', '1', '2020-12-04 10:00:55', '2020-12-04 10:00:55');
INSERT INTO `pages` VALUES ('11', '1', 'Our Story', 'Our Story', 'our-story', '127.0.0.1/our-story', null, 'Our Story', null, 'Our Story', 'text', '0', '1', '2020-12-04 10:23:42', '2020-12-04 10:23:42');
INSERT INTO `pages` VALUES ('12', '1', 'Certification', 'Certification', 'certification', '127.0.0.1/certification', null, 'Certification', 'Certification', 'Certification', 'text', '0', '1', '2020-12-04 10:25:59', '2020-12-04 10:25:59');
INSERT INTO `pages` VALUES ('13', '5', 'Contact', 'Contact', 'contact', '127.0.0.1/contact', null, 'Contact', 'Contact', 'Contact', 'text', '0', '1', '2020-12-04 10:29:26', '2020-12-04 10:29:26');

-- ----------------------------
-- Table structure for page_slide
-- ----------------------------
DROP TABLE IF EXISTS `page_slide`;
CREATE TABLE `page_slide` (
  `slide_id` int(10) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) DEFAULT NULL,
  `slider_name` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `slide_title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `custom_field` varchar(255) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `is_order` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`slide_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of page_slide
-- ----------------------------
INSERT INTO `page_slide` VALUES ('1', '1', 'Innovation School of Education.', '/uploads/images/slideshow/banner.jpg', '/uploads/images/slideshow/banner.jpg', 'Innovation School of Education.', 'Certificate courses designed to<br />\r\nsuit your learning desire', 'right', null, '1', '1', '2020-11-30 16:28:56', '2020-12-08 15:56:17');
INSERT INTO `page_slide` VALUES ('2', '2', 'Innovation School of Education.', '/uploads/images/slideshow/banner.jpg', '/uploads/images/slideshow/banner.jpg', 'Innovation School of Education.', 'Certificate courses designed to<br />\r\nsuit your learning desire', 'right', null, '1', '0', '2020-12-03 13:54:53', '2020-12-03 13:54:53');
INSERT INTO `page_slide` VALUES ('3', '3', 'Innovation School of Education.', '/uploads/images/slideshow/banner1.jpg', '/uploads/images/slideshow/banner1.jpg', 'Innovation School of Education.', '<div>Certificate courses designed to suit your learning desire</div>\r\n<img alt=\"\" src=\"/uploads/images/icon/certiport.png\" style=\"width: 202px; height: 93px;\" />&nbsp;<img alt=\"\" src=\"/uploads/images/icon/qb.png\" style=\"width: 184px; height: 93px;\" />', 'right', null, '1', '0', '2020-12-03 14:03:04', '2020-12-03 14:03:13');
INSERT INTO `page_slide` VALUES ('4', '4', 'Innovation School of Education.', '/uploads/images/slideshow/banner2.png', '/uploads/images/slideshow/banner2.png', 'Innovation School of Education.', 'Certificate courses designed to suit your learning desire<br />\r\n<img alt=\"\" src=\"/uploads/images/icon/certiport.png\" style=\"width: 202px; height: 93px;\" />&nbsp;<img alt=\"\" src=\"/uploads/images/icon/qb.png\" style=\"width: 184px; height: 93px;\" />', 'right', null, '1', '0', '2020-12-03 15:11:55', '2020-12-03 15:11:55');
INSERT INTO `page_slide` VALUES ('5', '8', 'Why Get Certified', '/uploads/files/1.jpg', '/uploads/files/1.jpg', null, null, 'left', null, '1', '0', '2020-12-16 07:27:32', '2020-12-16 07:34:45');
INSERT INTO `page_slide` VALUES ('6', '9', 'Resources', '/uploads/files/2.jpg', '/uploads/files/2.jpg', null, null, 'left', null, '1', '0', '2020-12-16 07:38:58', '2020-12-16 07:38:58');
INSERT INTO `page_slide` VALUES ('7', '10', 'About', '/uploads/images/icon/3.jpg', '/uploads/images/icon/3.jpg', null, null, 'left', null, '1', '0', '2020-12-16 08:13:35', '2020-12-16 08:13:35');
INSERT INTO `page_slide` VALUES ('8', '13', 'Contact us', '/uploads/images/icon/4.jpg', '/uploads/images/icon/4.jpg', null, null, 'left', null, '1', '0', '2020-12-16 08:16:35', '2020-12-16 08:16:35');
INSERT INTO `page_slide` VALUES ('9', '7', 'ESB', '/uploads/images/icon/5.jpg', '/uploads/images/icon/5.jpg', null, null, 'left', null, '1', '0', '2020-12-16 08:20:19', '2020-12-16 08:20:19');
INSERT INTO `page_slide` VALUES ('10', '6', 'self paced study', '/uploads/images/icon/7.jpg', '/uploads/images/icon/7.jpg', null, null, 'left', null, '1', '0', '2020-12-16 09:11:36', '2020-12-16 09:11:36');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'role-list', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('2', 'role-create', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('3', 'role-edit', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('4', 'role-delete', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('5', 'pages-list', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('6', 'pages-create', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('7', 'pages-edit', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('8', 'pages-delete', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('9', 'menu-list', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('10', 'menu-create', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('11', 'menu-edit', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('12', 'menu-delete', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('13', 'section-list', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('14', 'section-create', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('15', 'section-edit', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('16', 'section-delete', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('29', 'properties', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('30', 'category-list', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('31', 'category-create', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('32', 'category-edit', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('33', 'category-delete', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('34', 'product-list', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('35', 'product-create', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('36', 'product-edit', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('37', 'product-delete', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('38', 'promotion-list', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('39', 'promotion-create', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('40', 'promotion-edit', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('41', 'promotion-delete', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('43', 'page-slide-list', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('44', 'page-slide-create', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('45', 'page-slide-edit', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('46', 'page-slide-delete', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('47', 'compare-list', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('48', 'compare-create', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('49', 'compare-edit', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('50', 'compare-delete', 'web', '2020-05-03 17:47:43', '2020-05-03 17:47:43');
INSERT INTO `permissions` VALUES ('51', 'edit-slug-product', 'web', null, null);
INSERT INTO `permissions` VALUES ('52', 'None', 'web', null, null);
INSERT INTO `permissions` VALUES ('53', 'user-list', 'web', null, null);
INSERT INTO `permissions` VALUES ('54', 'user-create', 'web', null, null);
INSERT INTO `permissions` VALUES ('55', 'user-show', 'web', null, null);
INSERT INTO `permissions` VALUES ('56', 'user-edit', 'web', null, null);
INSERT INTO `permissions` VALUES ('57', 'user-delete', 'web', null, null);

-- ----------------------------
-- Table structure for prices
-- ----------------------------
DROP TABLE IF EXISTS `prices`;
CREATE TABLE `prices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `pro_level_id` int(10) unsigned NOT NULL,
  `pro_type_id` int(10) DEFAULT NULL,
  `base_amount` decimal(19,2) DEFAULT NULL,
  `cpn_amount` decimal(10,2) unsigned NOT NULL,
  `user` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `custom_field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `custom_field1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `custom_field2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of prices
-- ----------------------------
INSERT INTO `prices` VALUES ('1', '1', '1', '1', '45.00', '45.00', '1', '1 User', null, null, '2020-05-28 06:55:37', '2020-12-04 08:37:52', null);
INSERT INTO `prices` VALUES ('2', '1', '0', '1', '550.00', '550.00', '2', '2 Users', null, null, '2020-05-28 08:30:35', '2020-12-04 08:37:30', '2020-12-04 08:37:30');
INSERT INTO `prices` VALUES ('3', '2', '0', '1', '300.00', '300.00', '1', '1 User', null, null, '2020-05-28 08:58:05', '2020-10-06 08:08:53', null);
INSERT INTO `prices` VALUES ('4', '3', '4', '1', '3825.00', '3825.00', '1', null, null, null, '2020-06-08 03:49:18', '2020-07-27 04:46:12', null);
INSERT INTO `prices` VALUES ('5', '3', '1', '1', '1213.00', '1213.00', '1', null, 'Get the functionality and business insights you’ll need to get started. Plus, pay and file taxes, pay employees, and streamline your payroll.', null, '2020-06-08 03:49:52', '2020-08-13 10:23:14', null);
INSERT INTO `prices` VALUES ('6', '3', '3', '1', '1940.00', '1940.00', '1', null, null, null, '2020-06-08 03:50:25', '2020-06-08 03:50:25', null);
INSERT INTO `prices` VALUES ('7', '3', '4', '1', '4593.00', '4593.00', '2', null, null, null, '2020-06-08 04:28:05', '2020-07-27 04:52:13', null);
INSERT INTO `prices` VALUES ('8', '3', '1', '1', '1940.00', '1940.00', '2', null, 'Get the functionality and business insights you’ll need to get started. Plus, pay and file taxes, pay employees, and streamline your payroll.', null, '2020-06-08 04:29:45', '2020-08-13 10:23:26', null);
INSERT INTO `prices` VALUES ('9', '3', '3', '1', '2668.00', '2668.00', '2', null, null, null, '2020-06-08 04:30:58', '2020-06-22 07:57:45', null);
INSERT INTO `prices` VALUES ('10', '3', '4', '1', '5096.00', '5096.00', '3', null, null, null, '2020-06-08 04:31:37', '2020-07-27 04:54:34', null);
INSERT INTO `prices` VALUES ('11', '3', '1', '1', '2426.00', '2426.00', '3', null, 'Get the functionality and business insights you’ll need to get started. Plus, pay and file taxes, pay employees, and streamline your payroll.', null, '2020-06-08 04:32:18', '2020-08-13 10:40:14', null);
INSERT INTO `prices` VALUES ('12', '3', '3', '1', '3153.00', '3153.00', '3', null, null, null, '2020-06-08 04:32:48', '2020-06-08 04:32:48', null);
INSERT INTO `prices` VALUES ('13', '3', '4', '1', '5611.00', '5611.00', '4', null, null, null, '2020-06-08 04:33:36', '2020-07-27 04:54:44', null);
INSERT INTO `prices` VALUES ('14', '3', '1', '1', '2911.00', '2911.00', '4', null, null, null, '2020-06-08 04:34:08', '2020-07-31 07:06:07', null);
INSERT INTO `prices` VALUES ('15', '3', '3', '1', '3638.00', '3638.00', '4', null, null, null, '2020-06-08 04:36:12', '2020-06-08 04:36:12', null);
INSERT INTO `prices` VALUES ('16', '3', '4', '1', '6114.00', '6114.00', '5', null, null, null, '2020-06-08 04:36:30', '2020-07-27 04:54:56', null);
INSERT INTO `prices` VALUES ('17', '3', '1', '1', '3396.00', '3396.00', '5', null, null, null, '2020-06-08 04:36:49', '2020-07-31 07:06:42', null);
INSERT INTO `prices` VALUES ('18', '3', '3', '1', '4123.00', '4123.00', '5', null, null, null, '2020-06-08 04:37:10', '2020-06-08 04:37:10', null);
INSERT INTO `prices` VALUES ('19', '3', '4', '1', '6498.00', '6498.00', '6', null, null, null, '2020-06-08 04:38:38', '2020-07-27 04:54:21', null);
INSERT INTO `prices` VALUES ('20', '3', '1', '1', '3760.00', '3760.00', '6', null, null, null, '2020-06-08 04:38:52', '2020-07-31 07:07:12', null);
INSERT INTO `prices` VALUES ('21', '3', '3', '1', '4488.00', '4488.00', '6', null, null, null, '2020-06-08 04:39:07', '2020-06-08 04:39:07', null);
INSERT INTO `prices` VALUES ('22', '3', '4', '1', '6882.00', '6882.00', '7', null, null, null, '2020-06-08 04:39:29', '2020-07-27 04:55:23', null);
INSERT INTO `prices` VALUES ('23', '3', '1', '1', '4123.00', '4123.00', '7', null, null, null, '2020-06-08 04:39:48', '2020-07-31 07:07:49', null);
INSERT INTO `prices` VALUES ('24', '3', '3', '1', '4851.00', '4851.00', '7', null, null, null, '2020-06-08 04:40:09', '2020-06-08 04:40:09', null);
INSERT INTO `prices` VALUES ('25', '3', '4', '1', '7265.00', '7265.00', '8', null, null, null, '2020-06-08 04:41:42', '2020-07-27 04:55:35', null);
INSERT INTO `prices` VALUES ('26', '3', '1', '1', '4488.00', '4488.00', '8', null, null, null, '2020-06-08 04:42:01', '2020-07-31 07:08:19', null);
INSERT INTO `prices` VALUES ('27', '3', '3', '1', '5215.00', '5215.00', '8', null, null, null, '2020-06-08 04:42:34', '2020-06-08 04:42:34', null);
INSERT INTO `prices` VALUES ('28', '3', '4', '1', '7649.00', '7649.00', '9', null, null, null, '2020-06-08 04:43:21', '2020-07-27 04:57:20', null);
INSERT INTO `prices` VALUES ('29', '3', '1', '1', '4851.00', '4851.00', '9', null, null, null, '2020-06-08 04:43:36', '2020-07-31 07:08:48', null);
INSERT INTO `prices` VALUES ('30', '3', '3', '1', '5579.00', '5579.00', '9', null, null, null, '2020-06-08 04:44:56', '2020-06-08 04:44:56', null);
INSERT INTO `prices` VALUES ('31', '3', '4', '1', '8033.00', '8033.00', '10', null, null, null, '2020-06-08 04:46:47', '2020-07-27 04:57:28', null);
INSERT INTO `prices` VALUES ('32', '3', '1', '1', '5215.00', '5215.00', '10', null, null, null, '2020-06-08 04:47:02', '2020-07-31 07:09:22', null);
INSERT INTO `prices` VALUES ('33', '3', '3', '1', '5943.00', '5943.00', '10', null, null, null, '2020-06-08 04:47:16', '2020-06-08 04:47:38', null);
INSERT INTO `prices` VALUES ('34', '3', '4', '1', '10554.00', '10554.00', '30', null, null, null, '2020-06-08 04:48:12', '2020-07-27 04:57:37', null);
INSERT INTO `prices` VALUES ('35', '3', '1', '1', '7641.00', '7641.00', '30', null, null, null, '2020-06-08 04:48:51', '2020-07-31 07:09:55', null);
INSERT INTO `prices` VALUES ('36', '3', '3', '1', '8369.00', '8369.00', '30', null, null, null, '2020-06-08 04:49:46', '2020-06-08 04:49:46', null);
INSERT INTO `prices` VALUES ('37', '3', '1', '2', '145.00', '145.00', '1', 'Month', 'Get the functionality and business insights you’ll need to get started. Plus, pay and file taxes, pay employees, and streamline your payroll.', null, '2020-06-08 04:50:50', '2020-08-13 13:47:12', null);
INSERT INTO `prices` VALUES ('38', '3', '2', '2', '175.00', '175.00', '1', null, null, null, '2020-06-08 04:51:06', '2020-06-16 03:13:27', null);
INSERT INTO `prices` VALUES ('39', '3', '3', '2', '198.00', '198.00', '1', null, null, null, '2020-06-08 04:51:20', '2020-06-16 01:24:34', null);
INSERT INTO `prices` VALUES ('40', '3', '1', '2', '250.00', '250.00', '2', 'Month', null, null, '2020-06-08 04:59:43', '2020-08-12 07:19:04', null);
INSERT INTO `prices` VALUES ('41', '3', '2', '2', '280.00', '280.00', '2', null, null, null, '2020-06-08 05:00:01', '2020-06-16 03:14:31', null);
INSERT INTO `prices` VALUES ('42', '3', '3', '2', '310.00', '310.00', '2', null, null, null, '2020-06-08 05:00:32', '2020-06-16 03:35:35', null);
INSERT INTO `prices` VALUES ('43', '3', '1', '2', '334.00', '334.00', '3', 'Month', null, null, '2020-06-08 05:01:23', '2020-08-12 07:20:42', null);
INSERT INTO `prices` VALUES ('44', '3', '2', '2', '365.00', '365.00', '3', null, null, null, '2020-06-08 05:02:02', '2020-06-16 03:14:45', null);
INSERT INTO `prices` VALUES ('45', '3', '3', '2', '395.00', '395.00', '3', null, null, null, '2020-06-08 05:02:31', '2020-06-16 03:36:01', null);
INSERT INTO `prices` VALUES ('46', '3', '1', '2', '419.00', '419.00', '4', null, null, null, '2020-06-08 05:03:08', '2020-06-16 01:29:26', null);
INSERT INTO `prices` VALUES ('47', '3', '2', '2', '449.00', '449.00', '4', null, null, null, '2020-06-08 05:03:24', '2020-06-16 03:15:13', null);
INSERT INTO `prices` VALUES ('48', '3', '3', '2', '479.00', '479.00', '4', null, null, null, '2020-06-08 05:03:33', '2020-06-16 03:36:17', null);
INSERT INTO `prices` VALUES ('49', '3', '1', '2', '503.00', '503.00', '5', null, null, null, '2020-06-08 05:03:44', '2020-06-16 01:29:54', null);
INSERT INTO `prices` VALUES ('50', '3', '2', '2', '533.00', '533.00', '5', null, null, null, '2020-06-08 05:03:57', '2020-06-16 03:15:28', null);
INSERT INTO `prices` VALUES ('51', '3', '3', '2', '564.00', '564.00', '5', null, null, null, '2020-06-08 05:04:15', '2020-06-16 03:36:30', null);
INSERT INTO `prices` VALUES ('52', '3', '1', '2', '577.00', '577.00', '6', null, null, null, '2020-06-08 05:05:16', '2020-06-16 01:30:28', null);
INSERT INTO `prices` VALUES ('53', '3', '2', '2', '608.00', '608.00', '6', null, null, null, '2020-06-08 05:05:26', '2020-06-16 03:16:01', null);
INSERT INTO `prices` VALUES ('54', '3', '3', '2', '638.00', '638.00', '6', null, null, null, '2020-06-08 05:05:38', '2020-06-16 03:36:50', null);
INSERT INTO `prices` VALUES ('55', '3', '1', '2', '652.00', '652.00', '7', null, null, null, '2020-06-08 05:06:35', '2020-06-16 01:35:27', null);
INSERT INTO `prices` VALUES ('56', '3', '2', '2', '682.00', '682.00', '7', null, null, null, '2020-06-08 05:06:50', '2020-06-16 03:16:22', null);
INSERT INTO `prices` VALUES ('57', '3', '3', '2', '712.00', '712.00', '7', null, null, null, '2020-06-08 05:07:02', '2020-06-16 03:37:05', null);
INSERT INTO `prices` VALUES ('58', '3', '1', '2', '726.00', '726.00', '8', null, null, null, '2020-06-08 05:07:47', '2020-06-16 01:35:54', null);
INSERT INTO `prices` VALUES ('59', '3', '2', '2', '756.00', '756.00', '8', null, null, null, '2020-06-08 05:08:02', '2020-06-16 03:16:49', null);
INSERT INTO `prices` VALUES ('60', '3', '3', '2', '787.00', '787.00', '8', null, null, null, '2020-06-08 05:08:18', '2020-06-16 03:37:25', null);
INSERT INTO `prices` VALUES ('61', '3', '1', '2', '800.00', '800.00', '9', null, null, null, '2020-06-08 05:09:25', '2020-06-16 01:36:43', null);
INSERT INTO `prices` VALUES ('62', '3', '2', '2', '831.00', '831.00', '9', null, null, null, '2020-06-08 05:09:43', '2020-06-16 03:17:09', null);
INSERT INTO `prices` VALUES ('63', '3', '3', '2', '861.00', '861.00', '9', null, null, null, '2020-06-08 05:09:56', '2020-06-16 03:38:45', null);
INSERT INTO `prices` VALUES ('64', '3', '1', '2', '875.00', '875.00', '10', null, null, null, '2020-06-08 05:10:29', '2020-06-16 01:36:59', null);
INSERT INTO `prices` VALUES ('65', '3', '2', '2', '905.00', '905.00', '10', null, null, null, '2020-06-08 05:10:46', '2020-06-16 03:17:30', null);
INSERT INTO `prices` VALUES ('66', '3', '3', '2', '935.00', '935.00', '10', null, null, null, '2020-06-08 05:11:00', '2020-06-16 03:39:05', null);
INSERT INTO `prices` VALUES ('67', '3', '1', '2', '1121.00', '1121.00', '11', null, null, null, '2020-06-08 05:57:43', '2020-06-16 01:37:15', null);
INSERT INTO `prices` VALUES ('68', '3', '2', '2', '1151.00', '1151.00', '11', null, null, null, '2020-06-08 06:01:25', '2020-06-16 03:19:31', null);
INSERT INTO `prices` VALUES ('69', '3', '3', '2', '1181.00', '1181.00', '11', null, null, null, '2020-06-08 06:01:43', '2020-06-16 04:06:22', null);
INSERT INTO `prices` VALUES ('70', '3', '1', '2', '1165.00', '1165.00', '12', null, null, null, '2020-06-08 06:15:42', '2020-06-16 01:37:34', null);
INSERT INTO `prices` VALUES ('71', '3', '2', '2', '1195.00', '1195.00', '12', null, null, null, '2020-06-08 06:16:00', '2020-06-16 03:19:53', null);
INSERT INTO `prices` VALUES ('72', '3', '3', '2', '1225.00', '1225.00', '12', null, null, null, '2020-06-08 06:16:17', '2020-06-16 04:07:21', null);
INSERT INTO `prices` VALUES ('73', '3', '1', '2', '1209.00', '1209.00', '13', null, null, null, '2020-06-08 06:16:51', '2020-06-16 01:37:54', null);
INSERT INTO `prices` VALUES ('74', '3', '2', '2', '1239.00', '1239.00', '13', null, null, null, '2020-06-08 06:20:02', '2020-06-16 03:20:19', null);
INSERT INTO `prices` VALUES ('75', '3', '3', '2', '1269.00', '1269.00', '13', null, null, null, '2020-06-08 06:20:17', '2020-06-16 04:08:02', null);
INSERT INTO `prices` VALUES ('76', '3', '1', '2', '1253.00', '1253.00', '14', null, null, null, '2020-06-08 06:20:32', '2020-06-16 01:38:11', null);
INSERT INTO `prices` VALUES ('77', '3', '2', '2', '1283.00', '1283.00', '14', null, null, null, '2020-06-08 06:20:48', '2020-06-16 03:20:53', null);
INSERT INTO `prices` VALUES ('78', '3', '3', '2', '1313.00', '1313.00', '14', null, null, null, '2020-06-08 06:21:23', '2020-06-16 04:08:41', null);
INSERT INTO `prices` VALUES ('79', '3', '1', '2', '1297.00', '1297.00', '15', null, null, null, '2020-06-08 06:22:01', '2020-06-16 01:38:27', null);
INSERT INTO `prices` VALUES ('80', '3', '2', '2', '1327.00', '1327.00', '15', null, null, null, '2020-06-08 06:22:21', '2020-06-16 03:21:17', null);
INSERT INTO `prices` VALUES ('81', '3', '3', '2', '1357.00', '1357.00', '15', null, null, null, '2020-06-08 06:22:38', '2020-06-16 04:09:03', null);
INSERT INTO `prices` VALUES ('82', '3', '1', '2', '1341.00', '1341.00', '16', null, null, null, '2020-06-08 06:23:27', '2020-06-16 01:38:46', null);
INSERT INTO `prices` VALUES ('83', '3', '2', '2', '1371.00', '1371.00', '16', null, null, null, '2020-06-08 06:23:44', '2020-06-16 03:21:35', null);
INSERT INTO `prices` VALUES ('84', '3', '3', '2', '1401.00', '1401.00', '16', null, null, null, '2020-06-08 06:24:03', '2020-06-16 04:09:22', null);
INSERT INTO `prices` VALUES ('85', '3', '1', '2', '1385.00', '1385.00', '17', null, null, null, '2020-06-08 06:25:02', '2020-06-16 01:39:05', null);
INSERT INTO `prices` VALUES ('86', '3', '2', '2', '1383.00', '1383.00', '1', null, null, null, '2020-06-08 06:26:55', '2020-06-16 02:09:21', '2020-06-16 02:09:21');
INSERT INTO `prices` VALUES ('87', '3', '3', '2', '1445.00', '1445.00', '17', null, null, null, '2020-06-08 06:27:12', '2020-06-16 04:09:44', null);
INSERT INTO `prices` VALUES ('88', '3', '1', '2', '1429.00', '1429.00', '18', null, null, null, '2020-06-08 06:27:43', '2020-06-16 01:39:25', null);
INSERT INTO `prices` VALUES ('89', '3', '2', '2', '1459.00', '1459.00', '18', null, null, null, '2020-06-08 06:28:03', '2020-06-16 03:22:06', null);
INSERT INTO `prices` VALUES ('90', '3', '3', '2', '1489.00', '1489.00', '18', null, null, null, '2020-06-08 06:28:21', '2020-06-16 04:10:06', null);
INSERT INTO `prices` VALUES ('91', '3', '1', '2', '1473.00', '1473.00', '19', null, null, null, '2020-06-08 06:28:55', '2020-06-16 01:39:45', null);
INSERT INTO `prices` VALUES ('92', '3', '2', '2', '1503.00', '1503.00', '19', null, null, null, '2020-06-08 06:34:01', '2020-06-16 03:22:23', null);
INSERT INTO `prices` VALUES ('93', '3', '3', '2', '1533.00', '1533.00', '19', null, null, null, '2020-06-08 06:34:23', '2020-06-16 04:10:26', null);
INSERT INTO `prices` VALUES ('94', '3', '1', '2', '1561.00', '1561.00', '20', null, null, null, '2020-06-08 06:35:56', '2020-06-16 01:45:00', null);
INSERT INTO `prices` VALUES ('95', '3', '2', '2', '1547.00', '1547.00', '20', null, null, null, '2020-06-08 06:36:24', '2020-06-16 03:22:39', null);
INSERT INTO `prices` VALUES ('96', '3', '3', '2', '1577.00', '1577.00', '20', null, null, null, '2020-06-08 06:36:44', '2020-06-16 04:10:47', null);
INSERT INTO `prices` VALUES ('97', '3', '1', '2', '1561.00', '1561.00', '21', null, null, null, '2020-06-08 06:36:59', '2020-06-16 01:54:15', null);
INSERT INTO `prices` VALUES ('98', '3', '2', '2', '1591.00', '1591.00', '21', null, null, null, '2020-06-08 06:37:12', '2020-06-16 03:23:49', null);
INSERT INTO `prices` VALUES ('99', '3', '3', '2', '1621.00', '1621.00', '21', null, null, null, '2020-06-08 06:37:27', '2020-06-16 04:11:06', null);
INSERT INTO `prices` VALUES ('100', '3', '1', '2', '1605.00', '1605.00', '22', null, null, null, '2020-06-08 06:38:56', '2020-06-16 01:54:39', null);
INSERT INTO `prices` VALUES ('101', '3', '2', '2', '1635.00', '1635.00', '22', null, null, null, '2020-06-08 06:39:29', '2020-06-16 03:24:07', null);
INSERT INTO `prices` VALUES ('102', '3', '3', '2', '1665.00', '1665.00', '22', null, null, null, '2020-06-08 06:40:18', '2020-06-16 04:11:27', null);
INSERT INTO `prices` VALUES ('103', '3', '1', '2', '1649.00', '1649.00', '23', null, null, null, '2020-06-08 06:41:10', '2020-06-16 01:54:57', null);
INSERT INTO `prices` VALUES ('104', '3', '2', '2', '1679.00', '1679.00', '23', null, null, null, '2020-06-08 06:41:40', '2020-06-16 03:24:28', null);
INSERT INTO `prices` VALUES ('105', '3', '3', '2', '1709.00', '1709.00', '23', null, null, null, '2020-06-08 06:42:10', '2020-06-16 04:11:45', null);
INSERT INTO `prices` VALUES ('106', '3', '2', '2', '1679.00', '1679.00', '23', null, null, null, '2020-06-08 06:42:50', '2020-06-16 07:26:37', '2020-06-16 07:26:37');
INSERT INTO `prices` VALUES ('107', '3', '3', '2', '1709.00', '1709.00', '23', null, null, null, '2020-06-08 06:43:12', '2020-06-16 07:26:23', '2020-06-16 07:26:23');
INSERT INTO `prices` VALUES ('108', '3', '1', '2', '1693.00', '1693.00', '24', null, null, null, '2020-06-08 06:43:56', '2020-06-16 02:05:04', null);
INSERT INTO `prices` VALUES ('109', '3', '2', '2', '1723.00', '1723.00', '24', null, null, null, '2020-06-08 06:44:09', '2020-06-16 03:26:10', null);
INSERT INTO `prices` VALUES ('110', '3', '3', '2', '1753.00', '1753.00', '24', null, null, null, '2020-06-08 06:45:08', '2020-06-16 04:18:39', null);
INSERT INTO `prices` VALUES ('111', '3', '1', '2', '1737.00', '1737.00', '25', null, null, null, '2020-06-08 06:46:37', '2020-06-16 02:06:48', null);
INSERT INTO `prices` VALUES ('112', '3', '2', '2', '1767.00', '1767.00', '25', null, null, null, '2020-06-08 06:46:53', '2020-06-16 03:26:28', null);
INSERT INTO `prices` VALUES ('113', '3', '3', '2', '1797.00', '1797.00', '25', null, null, null, '2020-06-08 06:47:12', '2020-06-16 04:18:15', null);
INSERT INTO `prices` VALUES ('114', '3', '1', '2', '1781.00', '1781.00', '26', null, null, null, '2020-06-08 07:17:55', '2020-06-16 02:07:14', null);
INSERT INTO `prices` VALUES ('115', '3', '2', '2', '1811.00', '1811.00', '26', null, null, null, '2020-06-08 07:18:31', '2020-06-08 07:18:31', null);
INSERT INTO `prices` VALUES ('116', '3', '3', '2', '1841.00', '1841.00', '26', null, null, null, '2020-06-08 07:18:46', '2020-06-16 04:16:48', null);
INSERT INTO `prices` VALUES ('117', '3', '1', '2', '1825.00', '1825.00', '27', null, null, null, '2020-06-08 07:19:29', '2020-06-16 02:07:37', null);
INSERT INTO `prices` VALUES ('118', '3', '2', '2', '1855.00', '1779.00', '27', null, null, null, '2020-06-08 07:19:49', '2020-06-16 03:26:58', null);
INSERT INTO `prices` VALUES ('119', '3', '3', '2', '1885.00', '1885.00', '27', null, null, null, '2020-06-08 07:20:04', '2020-06-16 04:13:58', null);
INSERT INTO `prices` VALUES ('120', '3', '1', '2', '1869.00', '1869.00', '28', null, null, null, '2020-06-08 07:20:31', '2020-06-16 02:07:59', null);
INSERT INTO `prices` VALUES ('121', '3', '2', '2', '1899.00', '1899.00', '28', null, null, null, '2020-06-08 07:20:48', '2020-06-16 03:27:22', null);
INSERT INTO `prices` VALUES ('122', '3', '3', '2', '1929.00', '1929.00', '28', null, null, null, '2020-06-08 07:21:09', '2020-06-16 04:14:21', null);
INSERT INTO `prices` VALUES ('123', '3', '1', '2', '1913.00', '1913.00', '29', null, null, null, '2020-06-08 07:21:35', '2020-06-16 02:08:20', null);
INSERT INTO `prices` VALUES ('124', '3', '2', '2', '1943.00', '1943.00', '29', null, null, null, '2020-06-08 07:21:52', '2020-06-16 03:28:00', null);
INSERT INTO `prices` VALUES ('125', '3', '3', '2', '1973.00', '1973.00', '29', null, null, null, '2020-06-08 07:22:20', '2020-06-16 04:14:38', null);
INSERT INTO `prices` VALUES ('126', '3', '1', '2', '1957.00', '1957.00', '30', null, null, null, '2020-06-08 07:25:19', '2020-06-16 02:08:40', null);
INSERT INTO `prices` VALUES ('127', '3', '2', '2', '1987.00', '1987.00', '30', null, null, null, '2020-06-08 07:25:47', '2020-06-16 03:28:35', null);
INSERT INTO `prices` VALUES ('128', '3', '3', '2', '2017.00', '2017.00', '30', null, null, null, '2020-06-08 07:26:12', '2020-06-16 04:14:59', null);
INSERT INTO `prices` VALUES ('129', '1', '0', '1', '800.00', '800.00', '3', '3 Users', null, null, '2020-06-08 07:27:17', '2020-12-04 08:37:27', '2020-12-04 08:37:27');
INSERT INTO `prices` VALUES ('130', '2', '0', '1', '500.00', '500.00', '2', '2 Users', null, null, '2020-06-08 07:28:21', '2020-10-06 08:09:03', null);
INSERT INTO `prices` VALUES ('131', '2', '0', '1', '700.00', '700.00', '3', '3 Users', null, null, '2020-06-08 07:28:32', '2020-10-06 08:09:10', null);
INSERT INTO `prices` VALUES ('132', '4', '0', '1', '500.00', '500.00', '1', '1 User', null, null, '2020-06-12 11:20:14', '2020-07-01 04:07:18', null);
INSERT INTO `prices` VALUES ('133', '4', '0', '1', '850.00', '850.00', '2', '2 Users', null, null, '2020-06-12 11:33:59', '2020-07-01 04:07:32', null);
INSERT INTO `prices` VALUES ('134', '4', '0', '1', '1250.00', '1250.00', '3', '3 Users', null, null, '2020-06-12 11:34:22', '2020-07-01 04:07:47', null);
INSERT INTO `prices` VALUES ('135', '4', '0', '1', '1600.00', '1600.00', '4', '4 Users', null, null, '2020-06-12 11:34:42', '2020-07-01 04:07:54', null);
INSERT INTO `prices` VALUES ('136', '4', '0', '1', '1950.00', '1950.00', '5', '5 Users', null, null, '2020-06-12 11:34:56', '2020-07-01 04:08:01', null);
INSERT INTO `prices` VALUES ('137', '19', '0', '1', '500.00', '500.00', '1', '1 User', null, null, '2020-06-12 11:36:22', '2020-10-06 07:59:37', null);
INSERT INTO `prices` VALUES ('138', '19', '0', '1', '800.00', '800.00', '2', '2 Users', null, null, '2020-06-12 11:36:31', '2020-10-06 08:00:05', null);
INSERT INTO `prices` VALUES ('139', '19', '0', '1', '1100.00', '1100.00', '3', null, null, null, '2020-06-12 11:36:54', '2020-06-12 11:36:54', null);
INSERT INTO `prices` VALUES ('140', '19', '0', '1', '1400.00', '1400.00', '4', null, null, null, '2020-06-12 11:37:11', '2020-06-12 11:37:11', null);
INSERT INTO `prices` VALUES ('141', '19', '0', '1', '1700.00', '1700.00', '5', null, null, null, '2020-06-12 11:37:31', '2020-06-12 11:37:31', null);
INSERT INTO `prices` VALUES ('142', '8', '1', '1', '529.95', '529.95', '1', '1 User', null, null, '2020-06-15 02:40:04', '2020-07-01 04:15:02', null);
INSERT INTO `prices` VALUES ('143', '3', '3', '2', '0.00', '0.00', '1', null, null, null, '2020-06-16 04:19:37', '2020-06-16 04:19:37', '2020-06-16 11:25:28');
INSERT INTO `prices` VALUES ('144', '23', '0', '1', '699.95', '699.95', '1', '1 User', null, null, '2020-06-16 10:29:08', '2020-07-01 04:20:36', null);
INSERT INTO `prices` VALUES ('145', '23', '0', '1', '932.95', '932.95', '2', '2 Users', null, null, '2020-06-16 10:29:21', '2020-07-01 04:20:42', null);
INSERT INTO `prices` VALUES ('146', '23', '0', '1', '1165.95', '1165.95', '3', '3 Users', null, null, '2020-06-16 10:29:45', '2020-07-01 04:20:57', null);
INSERT INTO `prices` VALUES ('147', '23', '0', '1', '1399.95', '1399.95', '4', '4 Users', null, null, '2020-06-16 10:30:01', '2020-07-01 04:21:11', null);
INSERT INTO `prices` VALUES ('148', '23', '0', '1', '1632.95', '1632.95', '5', '5 Users', null, null, '2020-06-16 10:30:13', '2020-07-01 04:21:04', null);
INSERT INTO `prices` VALUES ('149', '24', '0', '1', '1346.95', '1346.95', '1', '1 User', null, null, '2020-06-16 10:52:09', '2020-07-01 04:21:33', null);
INSERT INTO `prices` VALUES ('150', '24', '0', '1', '1929.95', '1929.95', '2', '2 Users', null, null, '2020-06-16 10:53:13', '2020-07-01 04:21:40', null);
INSERT INTO `prices` VALUES ('151', '24', '0', '1', '2513.95', '2513.95', '3', '3 Users', null, null, '2020-06-16 10:53:27', '2020-07-01 04:21:46', null);
INSERT INTO `prices` VALUES ('152', '24', '0', '1', '3096.95', '3096.95', '4', '4 Users', null, null, '2020-06-16 10:53:42', '2020-07-01 04:21:53', null);
INSERT INTO `prices` VALUES ('153', '24', '0', '1', '3679.95', '3679.95', '5', '5 Users', null, null, '2020-06-16 10:54:23', '2020-07-01 04:22:09', null);
INSERT INTO `prices` VALUES ('154', '24', '0', '1', '4263.95', '4263.95', '6', '6 Users', null, null, '2020-06-16 10:54:34', '2020-07-01 04:22:46', null);
INSERT INTO `prices` VALUES ('155', '24', '0', '1', '4846.95', '4846.95', '7', '7 Users', null, null, '2020-06-16 10:54:45', '2020-07-01 04:22:54', null);
INSERT INTO `prices` VALUES ('156', '24', '0', '1', '5430.95', '5430.95', '8', '8 Users', null, null, '2020-06-16 10:54:58', '2020-07-01 04:23:02', null);
INSERT INTO `prices` VALUES ('157', '24', '0', '1', '6013.95', '6013.95', '9', '9 Users', null, null, '2020-06-16 10:55:10', '2020-07-01 04:23:09', null);
INSERT INTO `prices` VALUES ('158', '24', '0', '1', '6597.95', '6597.95', '10', '10 Users', null, null, '2020-06-16 10:55:23', '2020-07-01 04:23:17', null);
INSERT INTO `prices` VALUES ('159', '24', '0', '1', '8050.95', '8050.95', '15', '15 Users', null, null, '2020-06-16 10:55:37', '2020-07-01 04:23:29', null);
INSERT INTO `prices` VALUES ('160', '24', '0', '1', '9514.95', '9514.95', '20', '20 Users', null, null, '2020-06-16 10:55:47', '2020-07-01 04:23:39', null);
INSERT INTO `prices` VALUES ('161', '24', '0', '1', '10681.95', '10681.95', '30', '30 Users', null, null, '2020-06-16 10:56:00', '2020-07-01 04:23:52', null);
INSERT INTO `prices` VALUES ('162', '24', '0', '1', '11848.95', '11848.95', '40', '40 Users', null, null, '2020-06-16 10:56:13', '2020-07-01 04:24:01', null);
INSERT INTO `prices` VALUES ('163', '5', '1', '1', '465.95', '465.95', '1', '1 User', null, null, '2020-06-16 10:57:54', '2020-07-01 04:14:29', null);
INSERT INTO `prices` VALUES ('164', '6', '0', '2', '720.95', '720.95', '1', '1 User', null, null, '2020-06-16 11:13:39', '2020-07-01 04:17:17', null);
INSERT INTO `prices` VALUES ('165', '6', '0', '2', '921.95', '921.95', '2', '2 Users', null, null, '2020-06-16 11:13:47', '2020-07-01 04:17:24', null);
INSERT INTO `prices` VALUES ('166', '6', '0', '2', '1165.95', '1165.95', '3', '3 Users', null, null, '2020-06-16 11:13:58', '2020-07-01 04:17:33', null);
INSERT INTO `prices` VALUES ('167', '6', '0', '2', '1462.95', '1462.95', '4', '4 Users', null, null, '2020-06-16 11:14:08', '2020-07-01 04:17:41', null);
INSERT INTO `prices` VALUES ('168', '6', '0', '2', '1706.95', '1706.95', '5', '5 Users', null, null, '2020-06-16 11:14:21', '2020-07-01 04:17:48', null);
INSERT INTO `prices` VALUES ('169', '20', '0', '2', '300.00', '300.00', '1', 'Sample Start', null, null, '2020-06-17 03:20:25', '2020-07-01 03:56:31', null);
INSERT INTO `prices` VALUES ('170', '20', '0', '2', '480.00', '480.00', '1', 'Essentials', null, null, '2020-06-17 03:24:11', '2020-07-01 03:56:58', null);
INSERT INTO `prices` VALUES ('171', '20', '0', '2', '840.00', '840.00', '1', 'Plus', null, null, '2020-06-17 03:24:30', '2020-07-01 03:57:13', null);
INSERT INTO `prices` VALUES ('172', '20', '0', '2', '1800.00', '1800.00', '1', 'Advanced', null, null, '2020-06-17 03:24:51', '2020-07-01 03:57:20', null);
INSERT INTO `prices` VALUES ('173', '21', '0', '1', '300.00', '300.00', '1', '1 User', null, null, '2020-06-17 04:03:09', '2020-07-01 04:11:50', null);
INSERT INTO `prices` VALUES ('174', '21', '0', '1', '550.00', '550.00', '2', '2 Users', null, null, '2020-06-17 04:03:25', '2020-07-01 04:12:08', null);
INSERT INTO `prices` VALUES ('175', '21', '0', '1', '800.00', '800.00', '3', '3 Users', null, null, '2020-06-17 04:03:41', '2020-07-01 04:12:17', null);
INSERT INTO `prices` VALUES ('176', '22', '0', '1', '499.95', '499.95', '1', '1 User', null, null, '2020-06-17 04:26:49', '2020-07-01 04:09:35', null);
INSERT INTO `prices` VALUES ('177', '22', '0', '1', '1749.95', '1749.95', '3', '3 Users', null, null, '2020-06-17 04:26:59', '2020-07-01 04:09:45', null);
INSERT INTO `prices` VALUES ('178', '22', '0', '1', '1949.95', '1949.95', '5', '5 Users', null, null, '2020-06-17 04:27:13', '2020-07-01 04:09:53', null);
INSERT INTO `prices` VALUES ('179', '22', '0', '1', '3399.95', '3399.95', '10', '10 Users', null, null, '2020-06-17 04:27:50', '2020-07-01 04:10:01', null);
INSERT INTO `prices` VALUES ('180', '22', '0', '1', '24999.95', '24999.95', '100', '100 Users', null, null, '2020-06-17 04:28:01', '2020-07-01 04:10:09', null);
INSERT INTO `prices` VALUES ('181', '7', '1', '2', '1218.95', '1218.95', '1', '1 user', null, null, '2020-07-01 04:28:50', '2020-07-01 04:28:50', null);
INSERT INTO `prices` VALUES ('182', '7', '1', '2', '1526.95', '1526.95', '2', '2 Users', null, null, '2020-07-01 04:29:17', '2020-07-01 04:29:17', null);
INSERT INTO `prices` VALUES ('183', '7', '1', '2', '1834.95', '1834.95', '3', '3 Users', null, null, '2020-07-01 04:29:36', '2020-07-01 04:29:36', null);
INSERT INTO `prices` VALUES ('184', '7', '1', '2', '2141.95', '2141.95', '4', '4 Users', null, null, '2020-07-01 04:30:06', '2020-07-01 04:30:06', null);
INSERT INTO `prices` VALUES ('185', '7', '1', '2', '2322.95', '2322.95', '5', '5 Users', null, null, '2020-07-01 04:30:27', '2020-07-01 04:30:27', null);
INSERT INTO `prices` VALUES ('186', '7', '1', '2', '2344.98', '2344.98', '6', '6 Users', null, null, '2020-07-01 04:30:57', '2020-07-01 04:30:57', null);
INSERT INTO `prices` VALUES ('187', '7', '1', '2', '2467.38', '2467.38', '7', '7 Users', null, null, '2020-07-01 04:31:15', '2020-07-01 04:31:15', null);
INSERT INTO `prices` VALUES ('188', '7', '1', '2', '2701.98', '2701.98', '8', '8 Users', null, null, '2020-07-01 04:31:36', '2020-07-01 04:31:36', null);
INSERT INTO `prices` VALUES ('189', '7', '1', '2', '2814.18', '2814.18', '9', '9 Users', null, null, '2020-07-01 04:32:09', '2020-07-01 04:32:09', null);
INSERT INTO `prices` VALUES ('190', '7', '1', '2', '2936.58', '2936.58', '10', '10 Users', null, null, '2020-07-01 04:36:23', '2020-07-01 04:36:23', null);
INSERT INTO `prices` VALUES ('191', '7', '1', '2', '3414.95', '3414.95', '15', '15 Users', null, null, '2020-07-01 04:36:49', '2020-07-01 04:36:49', null);
INSERT INTO `prices` VALUES ('192', '7', '1', '2', '3658.95', '3658.95', '20', '20 Users', null, null, '2020-07-01 04:37:09', '2020-07-01 04:37:09', null);
INSERT INTO `prices` VALUES ('193', '7', '1', '2', '4878.95', '4878.95', '30', '30 Users', null, null, '2020-07-01 04:37:28', '2020-07-01 04:37:28', null);
INSERT INTO `prices` VALUES ('194', '7', '1', '2', '6098.95', '6098.95', '40', '40 Users', null, null, '2020-07-01 04:38:14', '2020-07-01 04:38:14', null);
INSERT INTO `prices` VALUES ('195', '28', '0', '1', '1200.00', '1200.00', '1', 'Point of Sale Basic', null, null, '2020-07-01 06:26:51', '2020-07-01 06:27:37', null);
INSERT INTO `prices` VALUES ('196', '28', '0', '1', '1700.00', '1700.00', '1', 'Point of Sale Pro', null, null, '2020-07-01 06:28:39', '2020-07-01 06:28:39', null);
INSERT INTO `prices` VALUES ('197', '28', '0', '1', '1900.00', '1900.00', '1', 'Point of Sale Multi-Store', null, null, '2020-07-01 06:29:21', '2020-07-01 06:29:21', null);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_field` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_field3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_field2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_field1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` smallint(6) NOT NULL,
  `order_by` smallint(6) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', '1', '1', 'GMetrix Practice Tests for one of the following certification exam', 'GMetrix Practice Tests for one of the following certification exam', 'One time payment', null, 'This product includes a single user license for GMetrix Practice Tests for one of the following certification exams: Intuit QuickBooks Desktop Certified User, Intuit QuickBooks Desktop 2017 Certified User, or Intuit QuickBooks Online Certified User.', null, '/uploads/images/icon/qb.png', '45.00', null, null, null, null, 'GMetrix', '1', '1', null, null, '2020-12-04 08:36:58', '2020-12-12 04:43:35');
INSERT INTO `products` VALUES ('2', '1', '1', 'LearnKey ESB Online Course', 'LearnKey ESB Online Course', 'One time payment', null, 'This online, video-based course prepares candidates to take the Entrepreneurship &amp; Small Business. (ESB) certification exam. Includes 14 hours of training including videos, online workbook, and quizzes.', null, '/uploads/images/icon/1594867417.png', '200', null, null, null, null, 'esb', '1', '0', null, null, '2020-12-14 07:10:09', '2020-12-14 07:10:09');
INSERT INTO `products` VALUES ('3', '1', '1', 'QuickBooks Certified User Exam Voucher+Retake+GMetrix Practice Tests', 'QuickBooks Certified User Exam Voucher+Retake+GMetrix Practice Tests', 'One time payment', null, 'This product includes one Intuit&reg; QuickBooks Certified Exam voucher with a retake + GMetrix Practice Tests.', null, '/uploads/images/icon/qb.png', '156.00', null, null, null, null, 'GMetrix', '1', '0', null, null, '2020-12-16 07:50:49', '2020-12-16 07:58:46');
INSERT INTO `products` VALUES ('4', '1', '1', 'Self paced QuickBooks Study', 'Self paced QuickBooks Study', 'One time payment', null, 'This online, video-based course prepares candidates to take the QuickBooks Online or the QuickBooks Desktop Certified User exam. Includes 12-16 hours of training including videos, online workbook, and quizzes.', null, '/uploads/images/icon/qb.png', '135.00', null, null, null, null, 'GMetrix', '1', '0', null, null, '2020-12-16 07:58:05', '2020-12-16 07:58:05');
INSERT INTO `products` VALUES ('5', '1', '1', 'Entrepreneurship & Small Business . Voucher with Retake', 'Entrepreneurship & Small Business . Voucher with Retake', 'One time payment', null, 'This product includes one Entrepreneurship &amp; Small Business. (ESB) certification voucher with a retake.', null, '/uploads/images/icon/1594867417.png', '104.00', null, null, null, null, 'esb', '1', '0', null, null, '2020-12-16 08:30:38', '2020-12-16 08:30:38');
INSERT INTO `products` VALUES ('6', '1', '1', 'GMetrix for Entrepreneurship & Small Business. exam', 'GMetrix for Entrepreneurship & Small Business. exam', 'One time payment', null, 'This product includes a single user license for GMetrix Practice Tests for the Entrepreneurship &amp; Small Business. (ESB) certification.', null, '/uploads/images/icon/1594867417.png', '42.00', null, null, null, null, 'esb', '1', '0', null, null, '2020-12-16 08:35:03', '2020-12-16 08:35:03');
INSERT INTO `products` VALUES ('7', '1', '3', 'Entrepreneurship & Small Business – Exam Voucher', 'Entrepreneurship & Small Business – Exam Voucher', 'One time payment', null, 'This product includes one Entrepreneurship &amp; Small Business. (ESB) certification voucher.', null, '/uploads/images/icon/1594867417.png', '84.00', null, null, null, null, 'esb', '1', '0', null, null, '2020-12-16 10:20:17', '2020-12-16 10:20:17');

-- ----------------------------
-- Table structure for product_level
-- ----------------------------
DROP TABLE IF EXISTS `product_level`;
CREATE TABLE `product_level` (
  `pro_level_id` int(6) NOT NULL AUTO_INCREMENT,
  `product_level` varchar(255) DEFAULT NULL,
  `is_status` int(1) DEFAULT NULL,
  PRIMARY KEY (`pro_level_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_level
-- ----------------------------
INSERT INTO `product_level` VALUES ('1', 'Sliver', '1');
INSERT INTO `product_level` VALUES ('2', 'Gold', '1');
INSERT INTO `product_level` VALUES ('3', 'Platinum', '1');
INSERT INTO `product_level` VALUES ('4', 'Diamond', '1');

-- ----------------------------
-- Table structure for product_relate_level
-- ----------------------------
DROP TABLE IF EXISTS `product_relate_level`;
CREATE TABLE `product_relate_level` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `pro_level_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_relate_level
-- ----------------------------
INSERT INTO `product_relate_level` VALUES ('81', '1', '9');
INSERT INTO `product_relate_level` VALUES ('83', '1', '12');
INSERT INTO `product_relate_level` VALUES ('91', '1', '8');
INSERT INTO `product_relate_level` VALUES ('97', '1', '5');
INSERT INTO `product_relate_level` VALUES ('98', '1', '7');
INSERT INTO `product_relate_level` VALUES ('105', '1', '10');
INSERT INTO `product_relate_level` VALUES ('106', '1', '14');
INSERT INTO `product_relate_level` VALUES ('126', '1', '28');
INSERT INTO `product_relate_level` VALUES ('127', '1', '29');
INSERT INTO `product_relate_level` VALUES ('129', '1', '1');
INSERT INTO `product_relate_level` VALUES ('130', '1', '2');
INSERT INTO `product_relate_level` VALUES ('135', '1', '4');
INSERT INTO `product_relate_level` VALUES ('136', '1', '3');
INSERT INTO `product_relate_level` VALUES ('137', '3', '3');
INSERT INTO `product_relate_level` VALUES ('138', '4', '3');
INSERT INTO `product_relate_level` VALUES ('139', '1', '5');
INSERT INTO `product_relate_level` VALUES ('140', '1', '6');
INSERT INTO `product_relate_level` VALUES ('141', '1', '7');

-- ----------------------------
-- Table structure for product_relate_specs
-- ----------------------------
DROP TABLE IF EXISTS `product_relate_specs`;
CREATE TABLE `product_relate_specs` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `compare_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `is_order` int(1) DEFAULT NULL,
  `custom_field` varchar(255) DEFAULT NULL,
  `custom_field2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_relate_specs
-- ----------------------------
INSERT INTO `product_relate_specs` VALUES ('11', '1', '1', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('12', '2', '1', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('13', '3', '1', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('14', '4', '1', '100+', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('40', '9', '4', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('41', '10', '4', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('42', '11', '4', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('43', '12', '4', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('44', '13', '4', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('45', '14', '4', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('46', '15', '4', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('123', '1', '2', '<i class=\"far fa-check-circle\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('124', '2', '2', '<i class=\"fas fa-check-circle\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('125', '3', '2', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('126', '4', '2', '50+', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('127', '5', '2', 'text-basecolor-light', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('128', '6', '2', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('129', '7', '2', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('130', '8', '2', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('131', '23', '2', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('132', '24', '2', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('133', '25', '2', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('134', '26', '2', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('135', '27', '2', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('143', '5', '19', 'Includes these features', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('144', '16', '19', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('145', '17', '19', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('146', '18', '19', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('147', '19', '19', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('148', '20', '19', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('149', '21', '19', '<i class=\"fas fa-check\"></i>', null, null, null);
INSERT INTO `product_relate_specs` VALUES ('150', '28', '19', null, null, null, null);
INSERT INTO `product_relate_specs` VALUES ('151', '29', '19', null, null, null, null);
INSERT INTO `product_relate_specs` VALUES ('152', '30', '19', null, null, null, null);
INSERT INTO `product_relate_specs` VALUES ('153', '31', '19', null, null, null, null);
INSERT INTO `product_relate_specs` VALUES ('154', '32', '19', null, null, null, null);
INSERT INTO `product_relate_specs` VALUES ('155', '33', '19', null, null, null, null);

-- ----------------------------
-- Table structure for product_type
-- ----------------------------
DROP TABLE IF EXISTS `product_type`;
CREATE TABLE `product_type` (
  `type_id` int(6) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  PRIMARY KEY (`type_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_type
-- ----------------------------
INSERT INTO `product_type` VALUES ('1', 'Local', '1');
INSERT INTO `product_type` VALUES ('2', 'Hosting', '1');

-- ----------------------------
-- Table structure for promotions
-- ----------------------------
DROP TABLE IF EXISTS `promotions`;
CREATE TABLE `promotions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `promotion_type` int(1) NOT NULL DEFAULT 1 COMMENT '1=By users, 0=Package',
  `promotion_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `promotion_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `condition` text COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date DEFAULT NULL,
  `expiration_date` date NOT NULL,
  `min_discount` decimal(5,2) NOT NULL DEFAULT 0.00,
  `max_discount` decimal(5,2) DEFAULT 0.00,
  `sliver` decimal(5,2) DEFAULT NULL,
  `gold` decimal(5,2) DEFAULT NULL,
  `platinum` decimal(5,2) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `custom_field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `custom_field1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `custom_field2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `order_by` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of promotions
-- ----------------------------
INSERT INTO `promotions` VALUES ('1', '1', 'Special offers and promotion! Save up to 30%* off on Entrepreneurship & Small Business certification voucher with a retake', 'Special offers and promotion! Save up to 30%* off on Entrepreneurship & Small Business certification voucher with a retake', 'Special offers and promotion! Save up to 30%* off on Entrepreneurship & Small Business certification voucher with a retake', '2020-12-07', '2021-02-28', '20.00', '0.00', null, null, null, '1', 'c2Dmomebm4zATUZM', '/uploads/images/slideshow/promotion/Website%20copy.jpg', '/uploads/images/slideshow/promotion/thumbnail/Thumbnail.jpg', '1', 'esb,whycertified', null, '1', '1', '2020-12-08 15:42:44', '1', '2020-12-16 09:28:35', '1', null);

-- ----------------------------
-- Table structure for properties
-- ----------------------------
DROP TABLE IF EXISTS `properties`;
CREATE TABLE `properties` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_send` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agoda_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trip_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `none_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_field` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` smallint(6) NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `update_by` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of properties
-- ----------------------------
INSERT INTO `properties` VALUES ('1', 'Innovation School of Education | Siem Reap | Cambodia', 'http://127.0.0.1:8000/', 'National Road Nº 6, Chong Kausou, Slorkram, Siem Reap, Kingdom of Cambodia', '012 982 423', 'info@ise.edu.kh', 'info@ise.edu.kh', 'http://facebook.com/ise', 'http://instagram.com/ise', '#ise', '#', 'https://www.youtube.com/channel/UCU2vIKHTCXUzt3w--vy08Lw', '#ise', '063 965 359', 'CAS Suite is a vital part of business software ecosystem that enables you to manage payroll, forms, tax and customize reports by Cambodian regulatory standards', 'QuickBooks, accounting, software, integration, customization, Cambodia, finance, tax, Siem Reap, regulation, business, payroll, form, invoice, receipt, compatibility, seamless, report, statement, sme, ecosystem', '/uploads/images/logo/logo.png', '', 'CAS Suite by CAS-BIZ Technology', '0', '1', '0', '2020-03-04 04:16:43', '2020-12-08 15:02:16');

-- ----------------------------
-- Table structure for quotation
-- ----------------------------
DROP TABLE IF EXISTS `quotation`;
CREATE TABLE `quotation` (
  `quotation_id` int(11) NOT NULL AUTO_INCREMENT,
  `quotation_no` varchar(100) DEFAULT NULL,
  `eff_date` datetime DEFAULT NULL,
  `prefix` varchar(100) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `memo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `remarks` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `vat` decimal(10,2) DEFAULT 0.00,
  `quotation_status` int(1) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`quotation_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of quotation
-- ----------------------------
INSERT INTO `quotation` VALUES ('1', 'Q0702201', '2020-07-02 00:00:00', 'Mr.', 'koy', 'soviet', 'koysoviet2017@gmail.com', '077456990', 'siem reap', null, null, '80.00', '0', null, null, '2020-07-02 10:04:52', '2020-07-02 10:04:52');
INSERT INTO `quotation` VALUES ('2', 'Q0702202', '2020-07-02 00:00:00', 'Mr.', 'koy', 'soviet', 'soviet@cas.com.kh', '077456990', 'siem reap', null, 'demo', '80.00', '1', null, null, '2020-07-02 10:07:45', '2020-07-02 10:08:51');
INSERT INTO `quotation` VALUES ('3', 'Q0702203', '2020-07-02 00:00:00', 'Mr.', 'koy', 'soviet', 'soviet@cas.com.kh', '0443322', 'siem reap', null, null, '80.00', '1', null, null, '2020-07-02 10:15:30', '2020-07-02 10:16:36');
INSERT INTO `quotation` VALUES ('4', 'Q0702204', '2020-07-02 00:00:00', 'Mr.', 'in', 'vary', 'soviet@cas.com.kh', '077456990', 'siem reap', null, null, '80.00', '1', null, null, '2020-07-02 10:21:06', '2020-07-02 10:21:36');

-- ----------------------------
-- Table structure for quotation_line
-- ----------------------------
DROP TABLE IF EXISTS `quotation_line`;
CREATE TABLE `quotation_line` (
  `quotation_line_id` int(11) NOT NULL AUTO_INCREMENT,
  `quotation_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_annual` varchar(255) DEFAULT NULL,
  `product_user_no` varchar(200) DEFAULT NULL,
  `custom_field` varchar(255) DEFAULT NULL,
  `custom_field_1` varchar(255) DEFAULT NULL,
  `custom_field_2` varchar(255) DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `grand_total` decimal(10,2) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`quotation_line_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of quotation_line
-- ----------------------------
INSERT INTO `quotation_line` VALUES ('1', '1', 'Quickbooks Desktop Pro', 'One-time payment', '3', null, null, null, '1.00', '800.00', '880.00', null, '2020-07-02 10:04:52', '2020-07-02 10:04:52');
INSERT INTO `quotation_line` VALUES ('2', '2', 'Quickbooks Desktop Pro', 'One-time payment', '3', null, null, null, '1.00', '800.00', '880.00', null, '2020-07-02 10:07:45', '2020-07-02 10:07:45');
INSERT INTO `quotation_line` VALUES ('3', '3', 'Quickbooks Desktop Pro', 'One-time payment', '3', null, null, null, '1.00', '800.00', '880.00', null, '2020-07-02 10:15:30', '2020-07-02 10:15:30');
INSERT INTO `quotation_line` VALUES ('4', '4', 'Quickbooks Desktop Pro', 'One-time payment', '3', null, null, null, '1.00', '800.00', '880.00', null, '2020-07-02 10:21:06', '2020-07-02 10:21:06');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('2', 'Administrator', 'web', '2020-05-03 18:21:16', '2020-05-03 18:21:55');
INSERT INTO `roles` VALUES ('3', 'Editor', 'web', '2020-05-03 18:22:48', '2020-05-03 18:22:48');

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`) USING BTREE,
  KEY `role_has_permissions_role_id_foreign` (`role_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
INSERT INTO `role_has_permissions` VALUES ('1', '2');
INSERT INTO `role_has_permissions` VALUES ('1', '3');
INSERT INTO `role_has_permissions` VALUES ('2', '2');
INSERT INTO `role_has_permissions` VALUES ('2', '3');
INSERT INTO `role_has_permissions` VALUES ('3', '2');
INSERT INTO `role_has_permissions` VALUES ('3', '3');
INSERT INTO `role_has_permissions` VALUES ('4', '2');
INSERT INTO `role_has_permissions` VALUES ('4', '3');
INSERT INTO `role_has_permissions` VALUES ('5', '2');
INSERT INTO `role_has_permissions` VALUES ('5', '3');
INSERT INTO `role_has_permissions` VALUES ('6', '2');
INSERT INTO `role_has_permissions` VALUES ('6', '3');
INSERT INTO `role_has_permissions` VALUES ('7', '2');
INSERT INTO `role_has_permissions` VALUES ('7', '3');
INSERT INTO `role_has_permissions` VALUES ('8', '2');
INSERT INTO `role_has_permissions` VALUES ('8', '3');
INSERT INTO `role_has_permissions` VALUES ('9', '2');
INSERT INTO `role_has_permissions` VALUES ('9', '3');
INSERT INTO `role_has_permissions` VALUES ('10', '2');
INSERT INTO `role_has_permissions` VALUES ('10', '3');
INSERT INTO `role_has_permissions` VALUES ('11', '2');
INSERT INTO `role_has_permissions` VALUES ('11', '3');
INSERT INTO `role_has_permissions` VALUES ('12', '2');
INSERT INTO `role_has_permissions` VALUES ('12', '3');
INSERT INTO `role_has_permissions` VALUES ('13', '2');
INSERT INTO `role_has_permissions` VALUES ('13', '3');
INSERT INTO `role_has_permissions` VALUES ('14', '2');
INSERT INTO `role_has_permissions` VALUES ('14', '3');
INSERT INTO `role_has_permissions` VALUES ('15', '2');
INSERT INTO `role_has_permissions` VALUES ('15', '3');
INSERT INTO `role_has_permissions` VALUES ('16', '2');
INSERT INTO `role_has_permissions` VALUES ('16', '3');
INSERT INTO `role_has_permissions` VALUES ('29', '2');
INSERT INTO `role_has_permissions` VALUES ('29', '3');
INSERT INTO `role_has_permissions` VALUES ('30', '2');
INSERT INTO `role_has_permissions` VALUES ('31', '2');
INSERT INTO `role_has_permissions` VALUES ('32', '2');
INSERT INTO `role_has_permissions` VALUES ('33', '2');
INSERT INTO `role_has_permissions` VALUES ('34', '2');
INSERT INTO `role_has_permissions` VALUES ('35', '2');
INSERT INTO `role_has_permissions` VALUES ('36', '2');
INSERT INTO `role_has_permissions` VALUES ('37', '2');
INSERT INTO `role_has_permissions` VALUES ('38', '2');
INSERT INTO `role_has_permissions` VALUES ('39', '2');
INSERT INTO `role_has_permissions` VALUES ('40', '2');
INSERT INTO `role_has_permissions` VALUES ('41', '2');
INSERT INTO `role_has_permissions` VALUES ('43', '2');
INSERT INTO `role_has_permissions` VALUES ('44', '2');
INSERT INTO `role_has_permissions` VALUES ('45', '2');
INSERT INTO `role_has_permissions` VALUES ('46', '2');
INSERT INTO `role_has_permissions` VALUES ('47', '2');
INSERT INTO `role_has_permissions` VALUES ('48', '2');
INSERT INTO `role_has_permissions` VALUES ('49', '2');
INSERT INTO `role_has_permissions` VALUES ('50', '2');
INSERT INTO `role_has_permissions` VALUES ('51', '2');
INSERT INTO `role_has_permissions` VALUES ('52', '2');
INSERT INTO `role_has_permissions` VALUES ('52', '4');
INSERT INTO `role_has_permissions` VALUES ('53', '2');
INSERT INTO `role_has_permissions` VALUES ('54', '2');
INSERT INTO `role_has_permissions` VALUES ('54', '3');
INSERT INTO `role_has_permissions` VALUES ('55', '2');
INSERT INTO `role_has_permissions` VALUES ('55', '3');
INSERT INTO `role_has_permissions` VALUES ('56', '2');
INSERT INTO `role_has_permissions` VALUES ('56', '3');
INSERT INTO `role_has_permissions` VALUES ('57', '2');
INSERT INTO `role_has_permissions` VALUES ('57', '3');

-- ----------------------------
-- Table structure for section
-- ----------------------------
DROP TABLE IF EXISTS `section`;
CREATE TABLE `section` (
  `section_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `section_template_id` int(11) DEFAULT NULL,
  `page_id` bigint(20) DEFAULT NULL,
  `section_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1. container\r\n2. container-fluid',
  `class_css` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_img` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_field1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_field2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_field3` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`section_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of section
-- ----------------------------
INSERT INTO `section` VALUES ('1', '1', '1', 'Learn never stops', null, null, null, null, null, null, null, '1', '1', null, '2020-11-30 16:10:52', '2020-12-08 16:05:43');
INSERT INTO `section` VALUES ('2', '2', '1', 'Quickbooks Certified User Success', null, null, null, null, null, null, null, '2', '1', null, '2020-11-30 16:45:05', '2020-12-08 16:05:43');
INSERT INTO `section` VALUES ('3', '3', '1', 'Our most popular courses', null, null, 'ise-bg-blue', null, null, null, null, '3', '1', null, '2020-12-01 14:41:06', '2020-12-08 16:05:33');
INSERT INTO `section` VALUES ('4', '4', '2', 'Quickbooks Certification', null, null, null, null, null, null, null, '1', '1', null, '2020-12-03 13:50:21', '2020-12-03 13:50:21');
INSERT INTO `section` VALUES ('5', '5', '3', 'Practice tests​ for QuickBooks Certified User Exam', null, null, null, null, null, null, null, '1', '1', null, '2020-12-03 14:12:49', '2020-12-03 14:12:49');
INSERT INTO `section` VALUES ('6', '6', '3', 'Why GMetrix practice tests?', null, null, null, null, null, null, null, '1', '1', null, '2020-12-03 14:19:09', '2020-12-03 14:19:09');
INSERT INTO `section` VALUES ('7', '7', '3', 'GMetrix practice tests are customizable', null, null, null, null, null, null, null, '1', '1', null, '2020-12-03 15:05:01', '2020-12-03 15:05:01');
INSERT INTO `section` VALUES ('8', '5', '4', 'QuickBooks Certified User', null, null, null, null, null, null, null, '1', '1', null, '2020-12-03 15:12:56', '2020-12-03 15:12:56');
INSERT INTO `section` VALUES ('9', '8', '4', 'QuickBooks Certified User Online and Desktop', null, null, 'd-flex align-items-center background-size-qb-certified-user', null, null, null, null, '1', '1', null, '2020-12-03 16:09:27', '2020-12-03 16:09:27');
INSERT INTO `section` VALUES ('10', '9', '4', 'QuickBooks Certified User demo', null, null, null, null, null, null, null, '1', '1', null, '2020-12-04 01:28:50', '2020-12-04 01:28:50');
INSERT INTO `section` VALUES ('11', '4', '5', 'QuickBooks Online Certified user', null, null, null, null, null, null, null, '1', '1', null, '2020-12-04 07:59:48', '2020-12-04 07:59:48');
INSERT INTO `section` VALUES ('12', '10', '6', 'Course objectives', null, null, null, null, null, null, null, '1', '1', null, '2020-12-04 08:51:23', '2020-12-04 08:51:23');
INSERT INTO `section` VALUES ('13', '10', '7', 'Entrepreneurship-and-Small-Business', null, null, null, null, null, null, null, '1', '1', null, '2020-12-04 09:25:11', '2020-12-04 09:25:11');
INSERT INTO `section` VALUES ('14', '8', '8', 'why certified', null, null, null, null, null, null, null, '1', '1', '2020-12-04 09:39:19', '2020-12-04 09:38:06', '2020-12-04 09:39:19');
INSERT INTO `section` VALUES ('15', '5', '8', 'whycertified', null, null, null, null, null, null, null, '1', '1', null, '2020-12-04 09:39:39', '2020-12-04 09:39:39');
INSERT INTO `section` VALUES ('16', '4', '8', 'Why Get Certified?', null, null, null, null, null, null, null, '1', '1', null, '2020-12-04 09:41:24', '2020-12-04 09:41:24');
INSERT INTO `section` VALUES ('17', '11', '8', 'Footer of whycertified', null, null, null, null, null, null, null, '1', '1', null, '2020-12-04 09:47:50', '2020-12-04 09:47:50');
INSERT INTO `section` VALUES ('18', '4', '9', 'Resources', null, null, null, null, null, null, null, '1', '1', null, '2020-12-04 09:57:22', '2020-12-04 09:57:22');
INSERT INTO `section` VALUES ('19', '5', '10', 'about', null, null, null, null, null, null, null, '1', '1', null, '2020-12-04 10:02:44', '2020-12-04 10:02:44');
INSERT INTO `section` VALUES ('20', '4', '10', 'Our Story', null, null, ' border-top py-5', null, null, null, null, '1', '1', null, '2020-12-04 10:05:58', '2020-12-04 10:05:58');
INSERT INTO `section` VALUES ('21', '4', '10', 'Our Vision', null, null, ' border-top py-5', null, null, null, null, '1', '1', null, '2020-12-04 10:11:25', '2020-12-04 10:11:25');
INSERT INTO `section` VALUES ('22', '4', '10', 'Our Mission', null, null, ' border-top py-5', null, null, null, null, '1', '1', null, '2020-12-04 10:12:33', '2020-12-04 10:12:33');
INSERT INTO `section` VALUES ('23', '1', '10', 'Our Core Values', null, null, ' border-top py-5', null, null, null, null, '1', '1', '2020-12-04 10:13:50', '2020-12-04 10:12:42', '2020-12-04 10:13:50');
INSERT INTO `section` VALUES ('24', '4', '10', 'Our Core Values', null, null, ' border-top py-5', null, null, null, null, '1', '1', null, '2020-12-04 10:14:04', '2020-12-04 10:14:04');
INSERT INTO `section` VALUES ('25', '12', '13', 'Get in touch', null, null, null, null, null, null, null, '1', '1', null, '2020-12-14 07:48:46', '2020-12-14 07:48:46');

-- ----------------------------
-- Table structure for section_template
-- ----------------------------
DROP TABLE IF EXISTS `section_template`;
CREATE TABLE `section_template` (
  `section_temp_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `template_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `css_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `col_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frontent_partial` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'path file of front end',
  `backend_partial` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'path file of back end.',
  `backend_view` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`section_temp_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of section_template
-- ----------------------------
INSERT INTO `section_template` VALUES ('1', 'Learning never stops', '/uploads/images/becomeQB.png', '', '2', 'partial.administrator.container-fluid-2columns-1image-2content', 'partial.administrator.container-fluid-2columns-1image-2content', 'partial.administrator.display.container-fluid-2columns-1image-2content', '1', null, null);
INSERT INTO `section_template` VALUES ('2', 'QuickBooks Certified User Success', 'N/a', '', '2', 'partial.administrator.container-fluid-2columns-1backgroundImage-2contentVideos', 'partial.administrator.container-fluid-2columns-1backgroundImage-2contentVideos', 'partial.administrator.display.container-fluid-2columns-1backgroundImage-2contentVideos', '1', null, null);
INSERT INTO `section_template` VALUES ('3', 'Our most popular courses', 'N/a', '', '4', 'partial.administrator.container-fluid-4columns-1content-3tabs', 'partial.administrator.container-fluid-4columns-1content-3tabs', 'partial.administrator.display.container-fluid-4columns-1content-3tabs', '1', null, null);
INSERT INTO `section_template` VALUES ('4', 'QuickBooks Certification', 'N/a', '', '1', 'partial.administrator.container-1columns-1content', 'partial.administrator.container-1columns-1content', 'partial.administrator.display.container-1columns-1content', '1', null, null);
INSERT INTO `section_template` VALUES ('5', 'Practice tests​ for QuickBooks Certified User Exam', 'N/a', '', '2', 'partial.administrator.container-fluid-2columns-1image-2content', 'partial.administrator.container-fluid-2columns-1image-2content', 'partial.administrator.display.container-2columns-1image-2content', '1', null, null);
INSERT INTO `section_template` VALUES ('6', 'Why GMetrix practice tests?', 'N/a', '', '2', 'partial.administrator.container-fluid-3columns-1image-2content-3popupvideo', 'partial.administrator.container-fluid-3columns-1image-2content-3popupvideo', 'partial.administrator.display.container-fluid-3columns-1image-2content-3popupvideo', '1', null, null);
INSERT INTO `section_template` VALUES ('7', 'GMetrix practice tests are customizable', 'N/a', '', '2', 'partial.administrator.container-fluid-2columns-1content-2image', 'partial.administrator.container-fluid-2columns-1content-2image', 'partial.administrator.display.container-fluid-2columns-1content-2image', '1', null, null);
INSERT INTO `section_template` VALUES ('8', 'QuickBooks Certified User Online & Deskop', 'N/a', '', '2', 'partial.administrator.container-fluid-2columns-1content-2content', 'partial.administrator.container-fluid-2columns-1content-2content', 'partial.administrator.display.container-fluid-2columns-1content-2content', '1', null, null);
INSERT INTO `section_template` VALUES ('9', 'QuickBooks Certified User demo', 'N/a', '', '2', 'partial.administrator.container-fluid-2columns-1content-2video', 'partial.administrator.container-fluid-2columns-1content-2video', 'partial.administrator.display.container-fluid-2columns-1content-2video', '1', null, null);
INSERT INTO `section_template` VALUES ('10', 'Course objectives', 'N/a', '', '6', 'partial.administrator.container-dynamic-columns-tabs-left', 'partial.administrator.container-dynamic-columns-tabs-left', 'partial.administrator.display.container-dynamic-columns-tabs-left', '1', null, null);
INSERT INTO `section_template` VALUES ('11', 'footer information with background image', 'N/a', '', '1', 'partial.administrator.container-fluid-1columns-1content', 'partial.administrator.container-fluid-1columns-1content', 'partial.administrator.display.container-fluid-1columns-1content', '1', null, null);
INSERT INTO `section_template` VALUES ('12', 'Contact with form', 'N/a', '', ' 2', 'partial.administrator.container-fluid-2columns-1content-contact-2content', 'partial.administrator.container-fluid-2columns-1content-contact-2content', 'partial.administrator.display.container-fluid-2columns-1content-contact-2content', '1', null, null);

-- ----------------------------
-- Table structure for specs_compare
-- ----------------------------
DROP TABLE IF EXISTS `specs_compare`;
CREATE TABLE `specs_compare` (
  `compare_id` int(11) NOT NULL AUTO_INCREMENT,
  `title_specs_compare` varchar(255) DEFAULT NULL,
  `sub_specs_compare` varchar(255) DEFAULT NULL,
  `specs_content` text DEFAULT NULL,
  `image_compare` varchar(255) DEFAULT NULL,
  `custom_field` varchar(255) DEFAULT NULL,
  `custom_field1` varchar(255) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `is_order` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`compare_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of specs_compare
-- ----------------------------

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `students_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `languages_id` int(11) NOT NULL DEFAULT 1,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schools` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `graduation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_classes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` smallint(6) NOT NULL,
  `order_by` smallint(6) NOT NULL,
  `generator_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`students_id`),
  UNIQUE KEY `students_email_unique` (`email_address`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES ('1', '1', 'koy', 'soviet', '0', null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'koysoviet@gmail.com', '077456990', 'siem reap', null, '$2y$10$7Cg7JcaWfg.RLGHBA3QMI.tw8LGknz5FA4AI/ApTwrqd/5OOWmtdy', '$2y$10$7Cg7JcaWfg.RLGHBA3QMI.tw8LGknz5FA4AI/ApTwrqd/5OOWmtdy', '1', '1', '8813759423', null, null, null, '2020-12-18 15:53:26', '2020-12-18 15:53:26');
INSERT INTO `students` VALUES ('2', '1', 'kol', 'koy', '0', null, null, null, null, null, null, null, null, 'snf', null, null, null, null, null, 'kol@gmail.com', '339323321', 'test', 'uploads/images/profile/1609172993.Mr.Sambat_chey.png', '$2y$10$7Cg7JcaWfg.RLGHBA3QMI.tw8LGknz5FA4AI/ApTwrqd/5OOWmtdy', '$2y$10$7Cg7JcaWfg.RLGHBA3QMI.tw8LGknz5FA4AI/ApTwrqd/5OOWmtdy', '1', '2', '4340648123', null, null, null, '2020-12-26 15:28:05', '2020-12-28 16:29:53');

-- ----------------------------
-- Table structure for subscription
-- ----------------------------
DROP TABLE IF EXISTS `subscription`;
CREATE TABLE `subscription` (
  `subscription_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `students_id` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `custom_field` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promotion_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approval` smallint(6) NOT NULL,
  `is_active` smallint(6) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`subscription_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of subscription
-- ----------------------------
INSERT INTO `subscription` VALUES ('1', '6', '4', '13.99', null, null, '0', '1', '4', null, '2019-09-06 17:15:17', null);
INSERT INTO `subscription` VALUES ('2', '5', '4', '13.99', null, null, '1', '1', '4', null, '2019-09-06 17:15:26', null);
INSERT INTO `subscription` VALUES ('3', '5', '6', '13.99', null, null, '1', '1', '6', null, '2019-09-06 17:17:27', null);
INSERT INTO `subscription` VALUES ('4', '1', '4', '9.99', null, null, '0', '1', '4', null, '2019-09-06 14:20:53', null);

-- ----------------------------
-- Table structure for sub_pages
-- ----------------------------
DROP TABLE IF EXISTS `sub_pages`;
CREATE TABLE `sub_pages` (
  `sub_page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) DEFAULT NULL,
  `title_subpage` varchar(255) DEFAULT NULL,
  `links` varchar(255) DEFAULT NULL,
  `order_by` tinyint(4) DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sub_page_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sub_pages
-- ----------------------------

-- ----------------------------
-- Table structure for template
-- ----------------------------
DROP TABLE IF EXISTS `template`;
CREATE TABLE `template` (
  `temp_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `template_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `template_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `is_active` tinyint(4) NOT NULL,
  `order_by` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`temp_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of template
-- ----------------------------
INSERT INTO `template` VALUES ('1', 'Genneral', '', '1', '1', '2020-05-03 17:22:41', null);
INSERT INTO `template` VALUES ('2', 'Product', '', '1', '2', '2020-05-03 17:22:41', null);
INSERT INTO `template` VALUES ('3', 'Product detail', '', '1', '3', '2020-05-03 17:22:41', null);
INSERT INTO `template` VALUES ('4', 'Gallery', 'text', '0', '4', null, null);
INSERT INTO `template` VALUES ('5', 'Contact', '', '1', '5', '2020-05-03 17:22:41', null);
INSERT INTO `template` VALUES ('8', 'Home', '', '1', '0', null, null);
INSERT INTO `template` VALUES ('9', 'All Product', '', '1', '0', null, null);

-- ----------------------------
-- Table structure for txn_sales_order_lines
-- ----------------------------
DROP TABLE IF EXISTS `txn_sales_order_lines`;
CREATE TABLE `txn_sales_order_lines` (
  `TxnLineID` varchar(50) NOT NULL,
  `SeqNo` int(11) NOT NULL,
  `TxnNumber` int(11) NOT NULL,
  `GroupItemGroupRefListID` varchar(191) DEFAULT NULL,
  `GroupDesc` varchar(191) DEFAULT NULL,
  `GroupQuantity` decimal(18,5) DEFAULT NULL,
  `GroupSeqNo` decimal(18,5) DEFAULT NULL,
  `GroupIsPrintItemsInGroup` tinyint(1) DEFAULT NULL,
  `ItemRefListID` varchar(50) DEFAULT NULL,
  `Desc` varchar(4000) DEFAULT NULL,
  `Quantity` decimal(18,5) DEFAULT NULL,
  `Rate` decimal(18,5) DEFAULT NULL,
  `ExchangeRate` decimal(18,5) DEFAULT NULL,
  `RatePercent` decimal(18,5) DEFAULT NULL,
  `PriceLevelRefListID` varchar(50) DEFAULT NULL,
  `DiscountType` varchar(50) DEFAULT NULL,
  `ClassRefListID` varchar(50) DEFAULT NULL,
  `SalesTaxCodeRefListID` varchar(50) DEFAULT NULL,
  `IsOptionalStatus` int(1) DEFAULT 0 COMMENT 'ប្រើសំរាប់ sub tax and discount',
  `Other1` varchar(50) DEFAULT NULL,
  `Other2` varchar(50) DEFAULT NULL,
  `LinkToTxnTxnID` varchar(50) DEFAULT NULL,
  `LinkToTxnTxnLineID` varchar(50) DEFAULT NULL,
  `UOMRefListID` int(10) unsigned NOT NULL,
  `TxnDate` datetime NOT NULL,
  `BranchRefListID` int(11) DEFAULT NULL,
  `SiteRefListID` varchar(50) DEFAULT NULL,
  `PurchaseCost` decimal(18,5) DEFAULT NULL COMMENT 'This cost is  using for special \r\n            items that has any service fee attached to it only',
  `routing` varchar(50) DEFAULT NULL,
  `pnr` varchar(100) DEFAULT NULL,
  `pax` varchar(50) DEFAULT NULL,
  `TxnRefTxnID` varchar(50) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `updated_by` int(10) unsigned NOT NULL,
  PRIMARY KEY (`TxnLineID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of txn_sales_order_lines
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Super admin', 'admin@gmail.com', null, '$2y$10$FqLQbWrUwIyaymeSf7Un8OafpCZOnaCKbK03ORFlXhsaR8ZH3bA3u', null, '2020-05-03 06:33:55', '2020-05-03 06:33:55');
INSERT INTO `users` VALUES ('2', 'Cas', 'rongden@cas.com.kh', null, '$2y$10$NFxpGzM9a/6.LFtT542wz.hZ0RM4JSy0Mhko14MJ6i2Mez1s3ztxG', null, '2020-05-03 07:23:16', '2020-06-23 04:13:35');

-- ----------------------------
-- Table structure for version
-- ----------------------------
DROP TABLE IF EXISTS `version`;
CREATE TABLE `version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `versions` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `custom_field` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_css` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_order` int(1) DEFAULT NULL,
  `is_active` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of version
-- ----------------------------
INSERT INTO `version` VALUES ('2', null, '2019', null, null, null, '1', null, null);
INSERT INTO `version` VALUES ('3', null, '2018', null, null, null, '1', null, null);
INSERT INTO `version` VALUES ('4', null, '2017', null, null, null, '1', null, null);
INSERT INTO `version` VALUES ('5', '1', '2017', null, null, '1', '1', '2020-06-11 10:01:46', '2020-06-12 01:11:20');
INSERT INTO `version` VALUES ('6', '1', '2018', null, null, '2', '1', '2020-06-11 10:42:01', '2020-06-11 10:42:01');
INSERT INTO `version` VALUES ('7', '1', '2019', null, null, '3', '1', '2020-06-11 10:42:11', '2020-06-11 10:42:11');
INSERT INTO `version` VALUES ('8', '1', '2020', null, null, '4', '1', '2020-06-11 10:42:19', '2020-06-11 10:42:19');
INSERT INTO `version` VALUES ('10', '3', 'Enterprise 18.0', null, null, '0', '1', '2020-06-12 01:23:38', '2020-06-12 01:23:38');
INSERT INTO `version` VALUES ('11', '3', 'Enterprise 19.0', null, null, '2', '1', '2020-06-12 01:23:55', '2020-06-12 01:23:55');
INSERT INTO `version` VALUES ('12', '3', 'Enterprise 20.0', null, 'bg-back-light', '3', '1', '2020-06-12 01:24:10', '2020-06-23 03:00:53');
INSERT INTO `version` VALUES ('13', '2', '2017', null, null, '0', '1', '2020-06-12 04:08:24', '2020-06-12 04:08:24');
INSERT INTO `version` VALUES ('14', '2', '2018', null, null, '1', '1', '2020-06-12 04:08:37', '2020-06-12 04:08:37');
INSERT INTO `version` VALUES ('15', '2', '2019', null, null, '0', '1', '2020-06-12 04:08:46', '2020-06-12 04:08:46');
INSERT INTO `version` VALUES ('16', '2', '2020', null, null, '0', '1', '2020-06-12 04:08:53', '2020-06-12 04:08:53');
INSERT INTO `version` VALUES ('17', '4', '2017', null, null, '1', '1', '2020-06-13 13:36:31', '2020-06-13 13:36:57');
INSERT INTO `version` VALUES ('18', '4', '2018', null, null, '2', '1', '2020-06-13 13:36:49', '2020-06-13 13:37:04');
INSERT INTO `version` VALUES ('19', '4', '2019', null, null, '3', '1', '2020-06-13 13:37:49', '2020-06-13 13:37:49');
INSERT INTO `version` VALUES ('20', '4', '2020', null, null, '4', '1', '2020-06-13 13:38:20', '2020-06-13 13:38:46');
INSERT INTO `version` VALUES ('21', '9', 'System Edition', null, null, '4', '1', '2020-06-16 01:57:33', '2020-06-16 03:10:43');
INSERT INTO `version` VALUES ('22', '9', 'Printer Edition', null, null, '3', '1', '2020-06-16 01:57:46', '2020-06-16 03:10:49');
INSERT INTO `version` VALUES ('23', '9', 'Mobile Web Edition', null, null, '2', '1', '2020-06-16 01:58:18', '2020-06-16 03:10:54');
INSERT INTO `version` VALUES ('24', '9', 'Enterprise Edition', null, null, '1', '1', '2020-06-16 01:58:33', '2020-06-16 03:10:58');
INSERT INTO `version` VALUES ('25', '5', 'Sage 50c Quatum', '<img alt=\"\" class=\"img-fluid\" src=\"/uploads/sage/Comparison/sage-50c-quatum.png\" style=\"width: 165px;\" />', 'bg-green-dark', '1', '1', '2020-06-16 03:23:37', '2020-06-16 04:47:35');
INSERT INTO `version` VALUES ('26', '5', 'Sage 50c Premium', '<img alt=\"\" class=\"img-fluid\" src=\"/uploads/sage/Comparison/sage-50c-premium-thumbnail.png\" style=\"width: 165px;\" />', 'bg-blue-light', '2', '1', '2020-06-16 03:23:53', '2020-06-16 04:47:43');
INSERT INTO `version` VALUES ('27', '5', 'Sage 50c Pro', '<img alt=\"\" class=\"img-fluid\" src=\"/uploads/sage/Comparison/sage-50c-pro-thumbnail.png\" style=\"width: 165px;\" />', 'bg-purple', '3', '1', '2020-06-16 03:24:19', '2020-06-16 04:48:08');
INSERT INTO `version` VALUES ('28', '8', '50 Quantum', '<img alt=\"\" class=\"img-fluid\" src=\"/uploads/sage/sage-50-q.png\" style=\"width: 165px;\" />', 'bg-blue-light', '1', '1', '2020-06-16 06:18:26', '2020-06-16 06:25:25');
INSERT INTO `version` VALUES ('29', '8', '50 Premium', '<img alt=\"\" class=\"img-fluid\" src=\"/uploads/sage/sage-50c-pre.png\" style=\"width: 165px;\" />', 'bg-blue-sea', '2', '1', '2020-06-16 06:19:17', '2020-06-16 06:25:33');
INSERT INTO `version` VALUES ('30', '8', '50 Pro', '<img alt=\"\" class=\"img-fluid\" src=\"/uploads/sage/sage-50.png\" style=\"width: 165px;\" />', 'bg-purple', '3', '1', '2020-06-16 06:20:15', '2020-06-16 06:23:57');
INSERT INTO `version` VALUES ('31', '20', 'Plus', null, null, '2', '1', '2020-06-16 07:01:12', '2020-07-01 02:57:49');
INSERT INTO `version` VALUES ('32', '20', 'Essentials', null, null, '1', '1', '2020-06-16 07:01:26', '2020-07-01 02:57:33');
INSERT INTO `version` VALUES ('33', '20', 'Simple Start', null, null, '0', '1', '2020-06-16 07:01:43', '2020-07-01 02:57:24');
INSERT INTO `version` VALUES ('34', '21', '2015', null, 'bg-back-light', '1', '1', '2020-06-16 08:03:03', '2020-06-16 08:03:59');
INSERT INTO `version` VALUES ('35', '21', '2016', null, 'bg-back-light', '2', '1', '2020-06-16 08:03:17', '2020-06-16 08:04:05');
INSERT INTO `version` VALUES ('36', '21', '2019', null, 'bg-back-light', '3', '1', '2020-06-16 08:03:39', '2020-06-16 08:04:10');
INSERT INTO `version` VALUES ('37', '21', '2020', null, null, '4', '1', '2020-06-16 08:03:55', '2020-06-16 08:04:15');
INSERT INTO `version` VALUES ('38', '22', '2017', null, 'bg-back-light', '1', '1', '2020-06-16 08:40:42', '2020-06-16 08:40:42');
INSERT INTO `version` VALUES ('39', '22', '2018', null, 'bg-back-light', '2', '1', '2020-06-16 08:43:07', '2020-06-16 08:43:07');
INSERT INTO `version` VALUES ('40', '22', '2019', null, 'bg-back-light', '3', '1', '2020-06-16 08:44:12', '2020-06-16 08:58:49');
INSERT INTO `version` VALUES ('41', '22', '2020', null, null, '4', '1', '2020-06-16 08:58:39', '2020-06-16 08:58:39');
INSERT INTO `version` VALUES ('42', '25', 'QuickBooks Online Plus', null, null, '1', '1', '2020-06-17 01:52:05', '2020-06-17 01:52:05');
INSERT INTO `version` VALUES ('43', '25', 'QuickBooks Desktop Pro', null, null, '2', '1', '2020-06-17 01:52:30', '2020-06-17 01:55:07');
INSERT INTO `version` VALUES ('44', '25', 'QuickBooks Desktop Premier', null, null, '3', '1', '2020-06-17 01:54:29', '2020-06-17 01:55:03');
INSERT INTO `version` VALUES ('45', '25', 'QuickBooks Desktop Enterprise', null, 'bg-back-light', '4', '1', '2020-06-17 01:54:56', '2020-06-17 01:55:16');
INSERT INTO `version` VALUES ('46', '26', 'Pro 2020', '<img alt=\"\" class=\"img-fluid\" src=\"/uploads/quickBooks/package/qb-desktop-pro.png\" style=\"width: 120px;\" />', 'bg-blue-sea', '3', '1', '2020-06-17 10:39:38', '2020-06-18 01:40:02');
INSERT INTO `version` VALUES ('47', '26', 'Premier 2020', '<img alt=\"\" class=\"img-fluid\" src=\"/uploads/quickBooks/package/package-premier.png\" style=\"width: 120px;\" />', 'bg-gold', '2', '1', '2020-06-17 10:42:09', '2020-06-18 01:42:47');
INSERT INTO `version` VALUES ('48', '26', 'Enterprise 20.0', '<img alt=\"\" class=\"img-fluid\" src=\"/uploads/quickBooks/package/5d845805d9c66.png\" style=\"width: 118px;\" />', 'bg-dark', '1', '1', '2020-06-17 10:43:15', '2020-06-18 01:44:24');
INSERT INTO `version` VALUES ('49', '27', 'Advanced', '<div class=\"red-price-text py-3\"><span class=\"price\"> <sup class=\"cur\">US$</sup> 150 <sup>00</sup> </span>/month</div>', null, '2', '1', '2020-06-23 08:07:53', '2020-07-03 01:29:46');
INSERT INTO `version` VALUES ('50', '27', 'Plus', '<div class=\"red-price-text py-3\"><span class=\"price\"> <sup class=\"cur\">US$</sup>&nbsp;70&nbsp;<sup>00</sup> </span>/month</div>', 'bg-green-light', '1', '1', '2020-06-23 08:09:06', '2020-07-03 01:29:52');
INSERT INTO `version` VALUES ('51', '20', 'Advanced', null, null, '3', '1', '2020-07-01 01:32:49', '2020-07-01 03:00:20');
INSERT INTO `version` VALUES ('52', '28', 'POS Basic', null, null, '1', '1', '2020-07-01 04:44:04', '2020-08-06 09:25:54');
INSERT INTO `version` VALUES ('53', '28', 'POS Pro', null, null, '2', '1', '2020-07-01 04:44:11', '2020-08-06 09:26:00');
INSERT INTO `version` VALUES ('54', '28', 'POS Multi-Store', null, null, '3', '1', '2020-07-01 04:44:24', '2020-08-06 09:26:07');
INSERT INTO `version` VALUES ('55', '29', 'POS Basic', '<div class=\"red-price-text py-3\">\r\n<span class=\"price\"> \r\n<sup class=\"cur\">US$</sup>\r\n1,200<sup>00</sup> \r\n</span><br/>\r\n/One-time\r\n</div>', null, '1', '1', '2020-08-06 07:19:14', '2020-08-06 08:13:50');
INSERT INTO `version` VALUES ('56', '29', 'POS Pro', '<div class=\"red-price-text py-3\"><span class=\"price\"> <sup class=\"cur\">US$</sup>1,700<sup>00</sup> </span>/One-time</div>', null, '2', '1', '2020-08-06 07:19:33', '2020-08-06 08:09:37');
INSERT INTO `version` VALUES ('57', '29', 'POS Multi-Store', '<div class=\"red-price-text py-3\"><span class=\"price\"> <sup class=\"cur\">US$</sup>1,900<sup>00</sup> </span>/One-time</div>', null, '3', '1', '2020-08-06 07:20:04', '2020-08-06 08:09:59');

-- ----------------------------
-- Table structure for _permissions
-- ----------------------------
DROP TABLE IF EXISTS `_permissions`;
CREATE TABLE `_permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of _permissions
-- ----------------------------
INSERT INTO `_permissions` VALUES ('1', 'role-list', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('2', 'role-create', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('3', 'role-edit', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('4', 'role-delete', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('5', 'pages-list', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('6', 'pages-create', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('7', 'pages-edit', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('8', 'pages-delete', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('9', 'menu-list', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('10', 'menu-create', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('11', 'menu-edit', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('12', 'menu-delete', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('13', 'section-list', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('14', 'section-create', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('15', 'section-edit', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('16', 'section-delete', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('29', 'properties', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('30', 'category-list', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('31', 'category-create', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('32', 'category-edit', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('33', 'category-delete', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('34', 'product-list', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('35', 'product-create', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('36', 'product-edit', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('37', 'product-delete', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('38', 'promotion-list', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('39', 'promotion-create', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('40', 'promotion-edit', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('41', 'promotion-delete', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('43', 'page-slide-list', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('44', 'page-slide-create', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('45', 'page-slide-edit', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('46', 'page-slide-delete', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('47', 'compare-list', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('48', 'compare-create', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('49', 'compare-edit', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('50', 'compare-delete', 'web', '2020-05-03 06:47:43', '2020-05-03 06:47:43');
INSERT INTO `_permissions` VALUES ('51', 'edit-slug-product', 'web', null, null);
INSERT INTO `_permissions` VALUES ('52', 'None', 'web', null, null);
INSERT INTO `_permissions` VALUES ('53', 'user-list', 'web', null, null);
INSERT INTO `_permissions` VALUES ('54', 'user-create', 'web', null, null);
INSERT INTO `_permissions` VALUES ('55', 'user-show', 'web', null, null);
INSERT INTO `_permissions` VALUES ('56', 'user-edit', 'web', null, null);
INSERT INTO `_permissions` VALUES ('57', 'user-delete', 'web', null, null);

-- ----------------------------
-- View structure for vw_search
-- ----------------------------
DROP VIEW IF EXISTS `vw_search`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `vw_search` AS SELECT
	pages.page_id,columns.section_id,columns.col_id,columns.title_col,section.section_title,IFNULL(columns.title_col,section.section_title) as title,columns.container
FROM
	pages
INNER JOIN section ON section.page_id = pages.page_id
INNER JOIN `columns` ON `columns`.section_id = section.section_id ;
DROP TRIGGER IF EXISTS `tgg_after_insert`;
DELIMITER ;;
CREATE TRIGGER `tgg_after_insert` AFTER INSERT ON `quotation_line` FOR EACH ROW update quotation set vat=new.unit_price*0.1 where quotation.quotation_id=new.quotation_id
;;
DELIMITER ;
