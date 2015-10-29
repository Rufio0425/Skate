<?php

namespace App\Http\Controllers;
use App\Models\Volunteer;

class VolunteerController extends Controller{
	public function showAll() {
		$volunteers = Volunteer::all();
		// print_r($volunteers);
		return view('volunteer', ['volunteers' => $volunteers]);
	}

	public function show($id) {
		$volunteer = Volunteer::get($id);
		// print_r($volunteer);
		return view('vol_details', ['volunteer' => $volunteer]);
	}
}
