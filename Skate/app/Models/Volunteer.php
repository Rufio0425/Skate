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
        $volunteer->profile_image_url = $row->profile_image_url;
        $volunteer->email = $row->email;
        return $volunteer;
    }

    public function fullName() {
        return $this->first_name . ' ' . $this->last_name;
    }

    public static function getVolunteer($id){
        $sql = "select * from volunteer where id= :id";

        $row = DB::selectOne($sql, [':id' => $id]);

        $volunteer = [];

        $volunteer = new Volunteer();
        $volunteer->id = $row->id;
        $volunteer->first_name = $row->first_name;
        $volunteer->last_name = $row->last_name;
        $volunteer->profile_image_url = $row->profile_image_url;
        $volunteer->email = $row->email;
        $volunteer->bio = $row->bio;
        return $volunteer;
    }

    public function getSponsors(){
       $sql = "select * from volspons, sponsor where vol_id= :id and sponsor.id = volspons.spons_id";

       $sponsors = DB::select($sql, [':id' => $this->id]);
       // print_r($sponsors);

       return $sponsors;
    }
}