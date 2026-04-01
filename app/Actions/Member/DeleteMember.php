<?php

namespace App\Actions\Member;

class DeleteMasjid
{
    public function handle($member): bool
    {
        return $member->delete();
    }
}