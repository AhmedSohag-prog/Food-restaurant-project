<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
	// home controller
    public function showHomepage()
    {
    	return view('foods.home');
    }

// blog controller
    public function showBlogpage()
    {
    	return view('foods.blog');
    }

    // menu controller
    public function showMenupage()
    {
    	return view('foods.menu');
    }

    // news controller
    public function showNewspage()
    {
    	return view('foods.news');
    }
    // reservation controller
    public function showReservationpage()
    {
    	return view('foods.reservation');
    }
    // staff controller
    public function showStaffpage()
    {
    	return view('foods.staff');
    }

    // location controller
    public function showLocationpage()
    {
    	return view('foods.location');
    }

    // gallery controller
    public function showGallerypage()
    {
    	return view('foods.gallery');
    }
}
