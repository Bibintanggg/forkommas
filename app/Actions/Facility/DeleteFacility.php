<?php

namespace App\Actions\Facility;

class DeleteFacility
{
    public function handle($facility): bool
    {
        return $facility->delete();
    }
}