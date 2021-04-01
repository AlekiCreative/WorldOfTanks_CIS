<?php

class WargamingAPI {

    static $APP_ID = "c4e7220aa93586ed4243c1224f2585a5";

    static $LANGUAGE ="cs";
    static $SERVER ="api.worldoftanks.eu";
    static $GAME ="/wot/";
    
    //CLAN METHODS
    private static $METHOD_CLAN_DETAILS ="clans/info/"; //Method returns detailed clan information.
    private static $METHOD_CLAN_RATING ="clanratings/clans/"; //Method returns clan ratings by specified IDs.
    private static $METHOD_CLAN_MEMBER_DETAILS ="clans/accountinfo/"; //Method returns detailed clan member information and brief clan details.
    private static $METHOD_CLAN_MESSAGE_BOARD ="clans/messageboard/"; //Method returns messages of clan message board.
    private static $METHOD_CLAN_MEMBER_HISTORY ="clans/memberhistory/"; //Method returns information about player's clan history. Data on 10 last clan memberships are presented in the response.
    //PLAYER METHODS
    private static $METHOD_PLAYER_INFO ="account/info/"; //Method returns player details.
    private static $METHOD_PLAYER_VEHICLES ="account/tanks/"; //Method returns details on player's vehicles.
    private static $METHOD_PLAYER_ACHIEVEMENTS ="account/achievements/"; //Method returns players' achievement details.
    //PLAYER VEHICLE METHODS
    private static $METHOD_PLAYER_VEHICLES_STATS ="tanks/stats/"; //Method returns overall statistics, Tank Company statistics, and clan statistics per each vehicle for each user.
    private static $METHOD_PLAYER_VEHICLES_ARCHIEVEMENTS ="tanks/achievements/"; //Method returns list of achievements on all player's vehicles.
    //CLAN EXTRA
    private static $EXTRA_ONLINE_PLAYER = "private.online_members";
    //PLAYER EXTRA
    private static $EXTRA_BOOSTERS = "private.boosters";
    private static $EXTRA_GARAGE = "private.garage";
    private static $EXTRA_CONTACTS = "private.grouped_contacts";
    private static $EXTRA_MISSIONS = "private.personal_missions";
    private static $EXTRA_RENTED = "private.rented";
    private static $EXTRA_STATISTIC_RANDOM = "statistics.random";
    private static $EXTRA_STATISTIC_RANKED = "statistics.ranked_battles";
    private static $EXTRA_STATISTIC_RANKED_CURR = "statistics.ranked_battles_current";
    private static $EXTRA_STATISTIC_RANKED_PREV = "statistics.ranked_battles_previous";
    //VEHICLE EXTRA
    private static $EXTRA_RANDOM = "random"; 
    private static $EXTRA_RANKED_BATTLE = "statistics.ranked_battles_previous";
    //ENCYCLOPEDIA
    private static $ENCYCLOPEDIA_VEHICLES = "encyclopedia/vehicles/";
    private static $ENCYCLOPEDIA_ACHIEVEMENTS = "encyclopedia/achievements/";

    function get_clan_message($access_token){

        $request_players_url="https://".self::$SERVER.self::$GAME.self::$METHOD_CLAN_MESSAGE_BOARD."?application_id=".self::$APP_ID."&access_token=".$access_token;
        return json_decode(file_get_contents($request_players_url), true);

    }

    function get_private_account_data($access_token,$account_id){
        
        $request_players_url="https://".self::$SERVER.self::$GAME.self::$METHOD_PLAYER_INFO."?application_id=".self::$APP_ID."&access_token=".$access_token."&account_id=".$account_id;
        return json_decode(file_get_contents($request_players_url), true);

    }

    function get_account_data($account_id){
        
        $request_players_url="https://".self::$SERVER.self::$GAME.self::$METHOD_PLAYER_INFO."?application_id=".self::$APP_ID."&account_id=".$account_id;
        return json_decode(file_get_contents($request_players_url), true);

    }

    function get_clan_data_private($access_token,$clan_id){
        
        $request_players_url="https://".self::$SERVER.self::$GAME.self::$METHOD_CLAN_DETAILS."?application_id=".self::$APP_ID."&access_token=".$access_token."&clan_id=".$clan_id."&extra=".self::$EXTRA_ONLINE_PLAYER;
        return json_decode(file_get_contents($request_players_url), true);

    }
    function get_clan_data($clan_id){
        
        $request_players_url="https://".self::$SERVER.self::$GAME.self::$METHOD_CLAN_DETAILS."?application_id=".self::$APP_ID."&clan_id=".$clan_id;
        return json_decode(file_get_contents($request_players_url), true);

    }
}

?>