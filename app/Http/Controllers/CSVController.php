<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CSVController extends Controller
{
    //
    public function download (Request $request) {
        
        if(isset($request['p']) && $request['p'] == 'afzefeazcvfvzfgzczeqfczyiklyuilguik') {

            $players = DB::select('SELECT 
            p1.id p1_id,
            p1.firstname p1_firstname,
            p1.lastname p1_lastname,
            p1.phone p1_phone,
            p1.lang p1_lang,
            p1.email p1_email,
            p1.size p1_size,
            p1.created_at p1_created_at,
            
            p2.id p2_id,
            p2.firstname p2_firstname,
            p2.lastname p2_lastname,
            p2.phone p2_phone,
            p2.lang p2_lang,
            p2.email p2_email,
            p2.size p2_size,
            p2.created_at p1_created_at,
            
            player_sessions.company_id,
            sessions.name,
            sessions.address,
            sessions.startdate,
            sessions.club_name,
            player_sessions.session_id,
            player_sessions.category,
            companies.name
            FROM `player_sessions`
            LEFT JOIN users p1 ON player_sessions.player_one = p1.id
            LEFT JOIN users p2 ON player_sessions.player_two = p2.id
            LEFT JOIN sessions ON player_sessions.session_id = sessions.id
            LEFT JOIN companies ON player_sessions.company_id = companies.id  
            ');
            
            if (count($players) < 1) return;

            $titles = implode(',', array_keys((array) $players[0]));
            
            $values = collect($players)->map(function ($result) {
                return implode(',', collect($result)->map(function ($thing) {
                    return '"'.$thing.'"';
                })->toArray());
            });

            $values->prepend($titles);
            
            $result = $values->implode("\n");
            return response()->streamDownload(function () use($result){
                echo $result ;
            }, 'players.csv');
        }
    }
    public function contacts (Request $request) {
        
        if(isset($request['p']) && $request['p'] == 'afzefeazcvfvzfgzczeqfczyiklyuilguik') {

            $players = DB::select('SELECT *
            FROM `contacts`  
            ');
            
            if (count($players) < 1) return;

            $titles = implode(',', array_keys((array) $players[0]));
            
            $values = collect($players)->map(function ($result) {
                return implode(',', collect($result)->map(function ($thing) {
                    return '"'.$thing.'"';
                })->toArray());
            });

            $values->prepend($titles);
            
            $result = $values->implode("\n");
            return response()->streamDownload(function () use($result){
                echo $result ;
            }, 'contacts.csv');
        }
    }
    public function users (Request $request) {
        
        if(isset($request['p']) && $request['p'] == 'afzefeazcvfvzfgzczeqfczyiklyuilguik') {

            $players = DB::select('SELECT *
            FROM `users`  
            ');
            
            if (count($players) < 1) return;

            $titles = implode(',', array_keys((array) $players[0]));
            
            $values = collect($players)->map(function ($result) {
                return implode(',', collect($result)->map(function ($thing) {
                    return '"'.$thing.'"';
                })->toArray());
            });

            $values->prepend($titles);
            
            $result = $values->implode("\n");
            return response()->streamDownload(function () use($result){
                echo $result ;
            }, 'users.csv');
        }
    }
    public function companies (Request $request) {
        
        if(isset($request['p']) && $request['p'] == 'afzefeazcvfvzfgzczeqfczyiklyuilguik') {

            $players = DB::select('SELECT *
            FROM `companies`  
            ');
            
            if (count($players) < 1) return;

            $titles = implode(',', array_keys((array) $players[0]));
            
            $values = collect($players)->map(function ($result) {
                return implode(',', collect($result)->map(function ($thing) {
                    return '"'.$thing.'"';
                })->toArray());
            });

            $values->prepend($titles);
            
            $result = $values->implode("\n");
            return response()->streamDownload(function () use($result){
                echo $result ;
            }, 'users.csv');
        }
    }
}
