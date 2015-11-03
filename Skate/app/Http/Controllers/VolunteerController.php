<?php

namespace App\Http\Controllers;
use Request;
use App\Models\Volunteer;

class VolunteerController extends Controller{
	public function showAll() {
		$volunteers = Volunteer::all();
		// print_r($volunteers);
		return view('volunteer', ['volunteers' => $volunteers]);
	}

	public function show($id) {
		$volunteer = Volunteer::getVolunteer($id);
		$sponsors = $volunteer->getSponsors();
		// print_r($volunteer);
		return view('vol_details', ['volunteer' => $volunteer, 'sponsors' => $sponsors]);
	}

	public function create(){
		$volunteer = new Volunteer();
		$volunteer->first_name = Request::input('first_name');
		$volunteer->last_name = Request::input('last_name');
		$volunteer->email = Request::input('email');
		$volunteer->profile_image_url = Request::input('profile_image_url');
		$volunteer->bio = Request::input('bio');
		// dd($volunteer);

		$volunteer->newVolunteer($volunteer);

		return redirect('volunteer');
	}

	// Update Volunteer

	public function update($id){
		$volunteer = Volunteer::getVolunteer($id);
		$newbio = Request::input('bio');
		$volunteer->updateVolunteerBio($newbio);

		return "True";
	}
}
