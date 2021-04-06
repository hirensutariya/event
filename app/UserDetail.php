<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_details';
    protected $fillable = [ 'user_id', 'first_name', 'last_name', 'middle_name', 'date_of_birth', 'qualification', 'mci_registration_state', 'mmc_registration', 'mobile', 'mobile_2', 'address_res', 'address_clinic', 'address_correspondence', 'landline', 'academic_interest', 'declaration', 'proposed_by', 'seconded_by', 'photo', 'mmc_certificate', 'mmc_renewal', 'educational_certificates', 'name_change_proof', 'adhar','payment_response'];
    protected $appends = ['photo', 'mmc_certificate','mmc_renewal','educational_certificates','name_change_proof','adhar'];

    public function getPhotoAttribute() {

        $doc_path = asset('/public/images/documents/' . $this->attributes['photo']);
        return $doc_path;
    }
    public function getMmcCertificateAttribute() {

        $doc_path = asset('/public/images/documents/' . $this->attributes['mmc_certificate']);
        return $doc_path;
    }

    public function getMmcRenewalAttribute() {

        $doc_path = asset('/public/images/documents/' . $this->attributes['mmc_renewal']);
        return $doc_path;
    }
    public function getEducationalCertificatesAttribute() {

        $doc_path = asset('/public/images/documents/' . $this->attributes['educational_certificates']);
        return $doc_path;
    }
    
    public function getNameChangeProofAttribute() {

        $doc_path = asset('/public/images/documents/' . $this->attributes['name_change_proof']);
        return $doc_path;
    }
    
    public function getAdharAttribute() {

        $doc_path = asset('/public/images/documents/' . $this->attributes['adhar']);
        return $doc_path;
    }

}
