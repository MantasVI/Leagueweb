<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  

    /**
     * Show the form for creating a new resource.
     */
    public function Rune()
    {
        $url = "https://ddragon.leagueoflegends.com/cdn/15.10.1/data/en_US/runesReforged.json";
        $runes = Http::get($url)->json();
        $imgurl="https://ddragon.leagueoflegends.com/cdn/img";
        return view('Runes',['runes' =>$runes, 'url' => $imgurl]);
    }
   public function Runes($name)
    {
        $url = "https://ddragon.leagueoflegends.com/cdn/15.10.1/data/en_US/runesReforged.json";
        $runes = Http::get($url)->json();
        $imgurl="https://ddragon.leagueoflegends.com/cdn/img";
    
        return view('Rune',['runes' =>$runes, 'url' => $imgurl,'name'=> $name ]);
    }
    public function Champions()
    {
        $url="https://ddragon.leagueoflegends.com/cdn/16.10.1/img/champion/";
        $champions = Http::get('https://ddragon.leagueoflegends.com/cdn/16.10.1/data/en_US/champion.json')->json();
        return view('Champions', ['champions' => $champions, 'url' => $url]);
    }
     public function Skins()
    {
       
        $url="https://ddragon.leagueoflegends.com/cdn/16.10.1/img/champion/";
        $skins = Http::get('https://ddragon.leagueoflegends.com/cdn/16.10.1/data/en_US/champion.json')->json();
        return view('Skins', ['skins' => $skins, 'url' => $url]);
    }
    public function Champion($id)
    {
       
       $url = "https://ddragon.leagueoflegends.com/cdn/16.10.1/data/en_US/champion/{$id}.json";
        $champions = Http::get($url)->json();
        $champion = $champions['data'][$id];
     
        return view('Champion', compact('champion'));
    } 
    public function Skin($name)
    {
       
        $url = "https://ddragon.leagueoflegends.com/cdn/16.10.1/data/en_US/champion/{$name}.json";
        $skins = Http::get($url)->json();
        $champ = $skins['data'][$name];
        $skin= $skins['data'][$name]['skins'];
        return view('Skin', compact('skin','champ'));
    }
    public function Items()
    {   
        $url="https://ddragon.leagueoflegends.com/cdn/15.10.1/data/en_US/item.json";
        $itemurl = "https://ddragon.leagueoflegends.com/cdn/16.10.1/img/item/";
        $items = Http::get($url)->json();
        return view('Items',['items' =>$items , 'url' => $itemurl]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(c $c)
    {
        //
    }
}
