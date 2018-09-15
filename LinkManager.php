<?php


CLass LinkManager {
    
    public function FacebookLink($url) {
        require 'FacebookGraphAPI.php';
//        https://www.facebook.com/rtomebamba/videos/2101476893436033/
        
        
        $uri_segments = explode('/', $url);
       
        $uri_segments[6];

        return FacebookGraphAPI::GetInfo($uri_segments[6]);
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */
    }

}

