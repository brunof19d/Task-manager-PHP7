<?php

use App\Controller\Contact\AddContact;
use App\Controller\Contact\DeleteContact;
use App\Controller\Employee\AddEmployeeController;
use App\Controller\Employee\DeleteEmployeeController;
use App\Controller\Employee\UpdateEmployeeController;
use App\Controller\Logout;
use App\Controller\MakeLogin;
use App\Controller\Newsletter\AddNewsletter;
use App\Controller\Newsletter\DeleteNewsletter;
use App\Controller\Portfolio\AddCategoryController;
use App\Controller\Portfolio\AddPortfolioController;
use App\Controller\Portfolio\DeleteCategory;
use App\Controller\Portfolio\DeletePortfolio;
use App\Controller\Portfolio\UpdatePortfolioController;
use App\Controller\Services\AddServicesController;
use App\Controller\Services\DeleteServices;
use App\Controller\Services\UpdateServicesController;
use App\Controller\Testimonial\AddTestimonial;
use App\Controller\Testimonial\DeleteTestimonial;
use App\Controller\Testimonial\UpdateTestimonial;
use App\Controller\Users\AddUser;
use App\Controller\Users\DeleteUser;
use App\Controller\Users\UpdateUser;
use App\View\Admin\AdminHome;
use App\View\Admin\Contact\TableContact;
use App\View\Admin\Portfolio\AddCategory;
use App\View\Admin\Portfolio\AddPortfolio;
use App\View\Admin\Portfolio\TableCategory;
use App\View\Admin\Portfolio\TablePortfolio;
use App\View\Admin\Portfolio\UpdatePortfolio;
use App\View\Admin\Services\AddServices;
use App\View\Admin\Services\TableServices;
use App\View\Admin\Services\UpdateServices;
use App\View\Admin\Team\TableTeam;
use App\View\Admin\Team\TeamAdd;
use App\View\Admin\Team\TeamEdit;
use App\View\Admin\Testimonial\TableTestimonial;
use App\View\Admin\Testimonial\TestimonialAdd;
use App\View\Admin\Testimonial\TestimonialEdit;
use App\View\Admin\Users\TableUsers;
use App\View\Admin\Users\UserAdd;
use App\View\Admin\Users\UserEdit;
use App\View\Home;
use App\View\Login;
use App\View\Admin\Newsletter\TableNewsletter;

return [

    '/home' => Home::class,
    '/login' => Login::class,
    '/make-login' => MakeLogin::class,
    '/logout' => Logout::class,

    // Home Admin
    '/admin' => AdminHome::class,

    // Admin users
    '/admin/users' => TableUsers::class,
    '/admin/user-edit' => UserEdit::class,
    '/admin/user-add' => UserAdd::class,
    '/save-user' => AddUser::class,
    '/update-user' => UpdateUser::class,
    '/delete-user' => DeleteUser::class,

    // TableContact
    '/admin/contact' => TableContact::class,
    '/save-contact' => AddContact::class,
    '/delete-contact' => DeleteContact::class,

    // Testimonial
    '/admin/testimonial' => TableTestimonial::class,
    '/admin/testimonial-add' => TestimonialAdd::class,
    '/admin/testimonial-edit' => TestimonialEdit::class,
    '/save-testimonial' => AddTestimonial::class,
    '/update-testimonial' => UpdateTestimonial::class,
    '/delete-testimonial' => DeleteTestimonial::class,

    // Newsletter
    '/admin/newsletter' => TableNewsletter::class,
    '/save-newsletter' => AddNewsletter::class,
    '/delete-newsletter' => DeleteNewsletter::class,

    // Portfolio
    '/admin/portfolio' => TablePortfolio::class,
    '/admin/portfolio-add' => AddPortfolio::class,
    '/admin/portfolio-edit' => UpdatePortfolio::class,
    '/save-portfolio' => AddPortfolioController::class,
    '/update-portfolio' => UpdatePortfolioController::class,
    '/delete-portfolio' => DeletePortfolio::class,

    // Portfolio Category
    '/admin/portfolio/category' => TableCategory::class,
    '/admin/portfolio/add-category' => AddCategory::class,
    '/save-category' => AddCategoryController::class,
    '/delete-category' => DeleteCategory::class,

    // Services
    '/admin/services' => TableServices::class,
    '/admin/services-add' => AddServices::class,
    '/admin/services-edit' => UpdateServices::class,
    '/save-services' => AddServicesController::class,
    '/update-services' => UpdateServicesController::class,
    '/delete-services' => DeleteServices::class,

    // Employee
    '/admin/team' => TableTeam::class,
    '/admin/team-add' => TeamAdd::class,
    '/admin/team-edit' => TeamEdit::class,
    '/save-employee' => AddEmployeeController::class,
    '/update-employee' => UpdateEmployeeController::class,
    '/delete-employee' => DeleteEmployeeController::class

];