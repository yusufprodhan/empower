<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function  index(){
        return  view('home');
    }

    /**
     * Show the application our story.
     *
     * @return \Illuminate\Http\Response
     */
    public function ourStory()
    {
        $title = 'Our Story';
        return  view('pages.about-us.our-story',compact('title'));
    }
    /**
     * Show the application our mission-vision.
     *
     * @return \Illuminate\Http\Response
     */
    public function visionMission()
    {
        $title = 'Vision, Mission & Values';
        return  view('pages.about-us.vision-mission',compact('title'));
    }

    /**
     * Show the application board of director.
     *
     * @return \Illuminate\Http\Response
     */
    public function boardOfDirectors()
    {
        $title = 'Board of Directors';
        return  view('pages.about-us.board-of-directors',compact('title'));
    }

    /**
     * Show the application our companies.
     *
     * @return \Illuminate\Http\Response
     */
    public function ourCompanies()
    {
        $title = 'Our Companies';
        return  view('pages.about-us.our-companies',compact('title'));
    }

    /**
     * Show the application upcoming.
     *
     * @return \Illuminate\Http\Response
     */
    public function upcoming()
    {
        $title = 'Upcoming';
        return  view('pages.project.upcoming',compact('title'));
    }

    /**
     * Show the application carrier.
     *
     * @return \Illuminate\Http\Response
     */
    public function carrier()
    {
        $title = 'Carrier';
        return  view('pages.carrier',compact('title'));
    }

    /**
     * Show the application landowner.
     *
     * @return \Illuminate\Http\Response
     */
    public function landOwner()
    {
        $title = 'Land Owner';
        return  view('pages.contact-us.land-owner',compact('title'));
    }

    /**
     * Show the application buyers.
     *
     * @return \Illuminate\Http\Response
     */
    public function buyers()
    {
        $title = 'Buyers';
        return  view('pages.contact-us.buyers',compact('title'));
    }

    /**
     * Show the application customers.
     *
     * @return \Illuminate\Http\Response
     */
    public function customers()
    {
        $title = 'Customers';
        return  view('pages.contact-us.customers',compact('title'));
    }

    /**
     * Show the application customers.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {
        $title = 'Contact Us';
        return  view('pages.contact-us.contact-us',compact('title'));
    }

    /**
     * Show the application customers home loan.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeLoan()
    {
        $title = 'Home Loan';
        return  view('pages.services.home-loan',compact('title'));
    }
    /**
     * Show the application legal vatting.
     *
     * @return \Illuminate\Http\Response
     */
    public function legalVatting()
    {
        $title = 'Property Legal Vatting';
        return  view('pages.services.legal-vatting',compact('title'));
    }

    /**
     * Show the application interior landing.
     *
     * @return \Illuminate\Http\Response
     */
    public function interiorLanding()
    {
        $title = 'Interior Landing';
        return  view('pages.services.interior-landing',compact('title'));
    }
    /**
     * Show the application interior landing.
     *
     * @return \Illuminate\Http\Response
     */
    public function interiorResidential()
    {
        $title = 'Residential Interior';
        return  view('pages.services.residential-interior',compact('title'));
    }
    /**
     * Show the application interior landing.
     *
     * @return \Illuminate\Http\Response
     */
    public function interiorCommercial()
    {
        $title = 'Commercial Interior';
        return  view('pages.services.commercial-interior',compact('title'));
    }

    /**
     * Show the application architectural design.
     *
     * @return \Illuminate\Http\Response
     */
    public function architecturalDesign()
    {
        $title = 'Architectural design';
        return  view('pages.services.architectural-design',compact('title'));
    }

    /**
     * Show the application plot/flat buy & sell.
     *
     * @return \Illuminate\Http\Response
     */
    public function plotFlatBuySell()
    {
        $title = 'Plot/Flat Buy & Sell';
        return  view('pages.services.plot-flat-buy-sell',compact('title'));
    }

    /**
     * Show the application Residential & Commercial Space for Rent.
     *
     * @return \Illuminate\Http\Response
     */
    public function spaceForRent()
    {
        $title = 'Residential & Commercial lift';
        return  view('pages.services.space-for-rent',compact('title'));
    }
    /**
     * Show the application Residential & Commercial Lift.
     *
     * @return \Illuminate\Http\Response
     */
    public function residentialCommercialLift()
    {
        $title = 'Residential & Commercial lift';
        return  view('pages.services.residential-commercial-lift',compact('title'));
    }
}
