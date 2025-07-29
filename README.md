# Maintenance Management System (MMS)
A web-based maintenance and asset management system built with PHP and MySQL. It enables organizations to efficiently track inventory, schedule maintenance, and manage assets using QR code scanning.

## Features

### QR Code Integration

 - Scan items for instant access to maintenance history and details

### Asset Management

 - Add, update, and monitor all assets

### Maintenance Scheduling

 - Create recurring or one-time maintenance schedules

### Inventory Management

 - Track item stocks, suppliers, and reorder levels

### Repair Logs

 - Record maintenance history and costs

### User Roles

 - Admin / Technician / Viewer permissions

### Responsive Interface

 - Works on desktops, tablets, and smartphones

## Installation
1. Install XAMPP (version 7.4 or higher)

2. Clone this repository to c:/xampp/htdocs/mms_project

3. Configure database connection in config.php

4. Access the system at http://localhost/mms_project


## Requirements
- PHP 7.4+

- MySQL 5.7+

- Apache Server

- Web camera or QR code scanner (optional but recommended)
## Administrator Guide
### Asset Management
 - Add/edit/delete assets
 - Generate QR codes for asset tagging
 - View asset usage and status

## Maintenance Schedule
- Set up automatic maintenance intervals
- Assign technicians
- Get reminders for upcoming tasks

## Inventory Tracking
 - Update stock levels
 - View supplier and purchase info
 - Generate inventory reports

## Session Security
- Session timeout after 30 minutes
- CSRF protection
- Secure session handling
