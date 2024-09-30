<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestBookMessageRequest;
use App\Http\Resources\GuestBookMessageResource;
use App\Models\GuestBookMessage;

class GuestBookMessageController extends Controller
{
//    public function index()
//    {
//        return GuestBookMessageResource::collection(GuestBookMessage::all());
//    }

    public function store(GuestBookMessageRequest $request)
    {
        return new GuestBookMessageResource(GuestBookMessage::create($request->validated()));
    }

//    public function show(GuestBookMessage $guestBookMessage)
//    {
//        return new GuestBookMessageResource($guestBookMessage);
//    }
//
//    public function update(GuestBookMessageRequest $request, GuestBookMessage $guestBookMessage)
//    {
//        $guestBookMessage->update($request->validated());
//
//        return new GuestBookMessageResource($guestBookMessage);
//    }
//
//    public function destroy(GuestBookMessage $guestBookMessage)
//    {
//        $guestBookMessage->delete();
//
//        return response()->json();
//    }
}
