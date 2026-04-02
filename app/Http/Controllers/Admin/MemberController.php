<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Member\CreateMember;
use App\Actions\Member\UpdateMember;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function store(MemberRequest $memberRequest, CreateMember $createMember)
    {
        $validatedData = $memberRequest->validated();

        $member = $createMember->handle($validatedData);

        return response()->json([
            'message' => 'Member created successfully',
            'data' => $member
        ], 201);
    }

    public function update(MemberRequest $memberRequest, UpdateMember $updateMember, $id)
    {
        $validatedData = $memberRequest->validated();

        $member = Member::findOrFail($id);
        $updatedMember = $updateMember->handle($member, $validatedData);

        return response()->json([
            'message' => 'Member updated successfully',
            'data' => $updatedMember
        ], 200);
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return response()->json([
            'message' => 'Member deleted successfully',
        ], 200);
    }
}
