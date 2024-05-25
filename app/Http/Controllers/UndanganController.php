<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Undangan;
use App\Models\Komunitas;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;

class UndanganController extends Controller
{
    /**
     * Mengajukan permohonan bergabung dengan komunitas.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function requestToJoin(Request $request)
    {
        $request->validate([
            'komunitas_id' => 'required|exists:komunitas,id_komunitas',
        ]);

        $user = Auth::user();
        $komunitasId = $request->input('komunitas_id');

        $existingRequest = Undangan::where('user_id', $user->id)
                                             ->where('komunitas_id', $komunitasId)
                                             ->where('type', 'request')
                                             ->first();

        if ($existingRequest) {
            return response()->json(['message' => 'You have already requested to join this community.'], 400);
        }

        $undangan = new Undangan();
        $undangan->user_id = $user->id;
        $undangan->komunitas_id = $komunitasId;
        $undangan->type = 'request';
        $undangan->status = 'pending';
        $undangan->save();

        return response()->json(['message' => 'Your request to join the community has been submitted.'], 201);
    }

    /**
     * Mengundang pengguna lain untuk bergabung dengan komunitas.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inviteUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:penggunas,id',
            'komunitas_id' => 'required|exists:komunitas,id_komunitas',
        ]);

        $inviter = Auth::user();
        $userId = $request->input('user_id');
        $komunitasId = $request->input('komunitas_id');

        // Check if the inviter is a leader or co-leader of the community
        $komunitas = Komunitas::where('id_komunitas', $komunitasId)
                              ->where(function ($query) use ($inviter) {
                                  $query->where('leader_id', $inviter->id)
                                        ->orWhere('co_leader_id', $inviter->id);
                              })->first();

        if (!$komunitas) {
            return response()->json(['message' => 'You are not authorized to invite users to this community.'], 403);
        }

        $existingInvitation = Undangan::where('user_id', $userId)
                                                ->where('komunitas_id', $komunitasId)
                                                ->where('type', 'invite')
                                                ->first();

        if ($existingInvitation) {
            return response()->json(['message' => 'This user has already been invited to join this community.'], 400);
        }

        $undangan = new Undangan();
        $undangan->user_id = $userId;
        $undangan->komunitas_id = $komunitasId;
        $undangan->invited_by = $inviter->id;
        $undangan->type = 'invite';
        $undangan->status = 'pending';
        $undangan->save();

        return response()->json(['message' => 'User has been invited to join the community.'], 201);
    }
}
