<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Http\Requests\UpdatePlayerRequest; 
use App\Http\Requests\StorePlayerRequest;

use Illuminate\Http\Request;


class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $players = Player::all();
        return response()->json($players, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlayerRequest $request)
    {
        //
        $data = $request->validated();
        $player = Player::create($data);
        return response()->json($player, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        //
        return response()->json($player, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlayerRequest $request, Player $player)
    {
        //
        $data = $request->validated();
        $player->update($data);
        return response()->json($player, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
        $player->delete();

        return response()->json(null, 204);
    }
}
