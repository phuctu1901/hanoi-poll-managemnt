<?php
namespace App\Traits;

use App\Models\Organization;

trait HasOrg{
    public function org()
    {
        return $this->hasOne(Organization::class,'id', 'organization_id');
    }
}
