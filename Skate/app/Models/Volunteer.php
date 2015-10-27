<?php 
namespace App\Models;

use DB;

class Volunteer {
    public $id;
    public $first_name;
    public $last_name;
    public $email;

	public static function all() {
        // SQL
        $sql = "select * from volunteer";
        // Execute
        $rows = DB::select($sql);

        $volunteers = [];
        foreach($rows as $row){
            $volunteers[]= Volunteer::createVolunteerFromRow($row);
        }
        return $volunteers;
    }

    protected static function createVolunteerFromRow($row){
        $volunteer = new Volunteer();
        $volunteer->id = $row->id;
        $volunteer->first_name = $row->first_name;
        $volunteer->last_name = $row->last_name;
        $volunteer->email = $row->email;
        // $volunteer->phone = $row['phone'];
        return $volunteer;
    }

    public function fullName() {
        return $this->first_name . ' ' . $this->last_name;
    }
}