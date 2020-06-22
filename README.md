# Dentalhub

This is a Dentalhub built on top of the Laravel & Wave framework. Built to provide developers with a template to kickoff their SaaS application, without the hustle for repetitive tasks such as user account setup, subscriptions and role management.

## 1. Features


  - Authentication
  	- Login / Registration
  	- Email Activation

  - Choose the plan
	- Free Trial
	- For Study
	- For Manager

  - Account (User Account)
	- Profile Update
	- Change Password
	- Update Card_brand
	- API Tokens

  - Admin
	- User Management
		- Manage User Roles
	- Role & Perminssions Management
	- Database management
	- Theme customize

  - Developer Panel
	- Manage service activities.
	- Manage Personal Access Tokens

  - Other features
	- Filtering (extendable)
	- API access (starter template)

## 2. Installation

 - Fork, clone or download this repository.

 - Run composer install if its the initial setup or composer update.

 - Setup your environment keys in .env (If .env does not exist then copy / rename .env.example as .env)

 - Run php artisan app:name to set the name (namespace) of your app. (Remember not to live any spaces)

 - Run php artisan migrate for initial tables setup.

 - Optional: Run php artisan db:seed to set the initial roles and permissions. 

 - Use the admin data: email = admin@admin.com, password = 123456

    Note: You must follow step 6 above first to setup the root admin.

## 3. Libraries & Packages
 - Main
	- PHP (>=7.1.3)
	- Laravel (Minimal 5.6)
	- Laravel Cashier (can be switched)
 - UI (can be switched)
	- Bootstrap (v4)
	- Font awesome
	- Simple Line Icons
	- jQuery