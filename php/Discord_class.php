<?php
#############################
# This script is made by: mkgeeky
# Web: https://mkgeeky.xyz
# Git: https://github.com/mkgeeky/
# Mail: contact@mkgeeky.xyz
# Discord: https://discord.gg/tv6ZQ7wzt7
# Lines above MAY NOT BE removed!
#############################
require "config.php";
class Discord {
    public function __construct() {
        global $WEBHOOK;
        $this->webhook = $WEBHOOK;
        $this->head = "Content-Type: application/json; charset=utf-8";    
    }
    
    public function Send($Msg)
    {
        $url = $this->webhook;
        $headers = [ $this->head ];
        $POST = [ 'content' => $Msg ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
        $response   = curl_exec($ch);
        return $response;
        curl_close($ch);
    }
};