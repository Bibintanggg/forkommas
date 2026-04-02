<?php

namespace App\Actions\Member;

class DeleteMember
{
    public function handle($member): bool
    {
        return $member->delete();
    }
}