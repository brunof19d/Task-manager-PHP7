<?php

use App\Controller\Contact\AddContact;
use App\Controller\Contact\DeleteContact;
use App\Controller\Logout;
use App\Controller\MakeLogin;
use App\Controller\Newsletter\AddNewsletter;
use App\Controller\Newsletter\DeleteNewsletter;
use App\Controller\Testimonial\AddTestimonial;
use App\Controller\Testimonial\DeleteTestimonial;
use App\Controller\Testimonial\UpdateTestimonial;
use App\Controller\Users\AddUser;
use App\Controller\Users\DeleteUser;
use App\Controller\Users\UpdateUser;
use App\View\Admin\AdminHome;
use App\View\Admin\Contact\TableContact;
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

    /* ADMIN SECTION */

    // Home
    '/admin' => AdminHome::class,

    // Admin users
    '/admin/users' => TableUsers::class,
    '/admin/user-edit' => UserEdit::class,
    '/admin/user-add' => UserAdd::class,
    '/save-user' => AddUser::class,
    '/update-user' => UpdateUser::class,
    '/delete-user' => DeleteUser::class,

    // TableContact Admin
    '/admin/contact' => TableContact::class,
    '/save-contact' => AddContact::class,
    '/delete-contact' => DeleteContact::class,

    // Testimonial Admin
    '/admin/testimonial' => TableTestimonial::class,
    '/admin/testimonial-add' => TestimonialAdd::class,
    '/admin/testimonial-edit' => TestimonialEdit::class,
    '/save-testimonial' => AddTestimonial::class,
    '/update-testimonial' => UpdateTestimonial::class,
    '/delete-testimonial' => DeleteTestimonial::class,

    // Newsletter
    '/admin/newsletter' => TableNewsletter::class,
    '/save-newsletter' => AddNewsletter::class,
    '/delete-newsletter' => DeleteNewsletter::class
];