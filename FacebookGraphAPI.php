<?php

require 'post.php';

Class FacebookGraphAPI {

//Set your App ID and App Secret.

    public function GetInfo($id1) {

        $appID = '1811806812250197';
        $appSecret = '51aa7241711eecf5d9f4da5010b553ab';
//Create an access token using the APP ID and APP Secret.
        $accessToken = $appID . '|' . $appSecret;
//The ID of the Facebook page in question.
//Tie it all together to construct the URL
      
        $url = "https://graph.facebook.com/$id1?fields=id,name,from,link,created_time,images,reactions.summary(true)&access_token=$accessToken";

//Make the API call
        $result = file_get_contents($url);

//echo $result;
//Decode the JSON result.
        $decoded = json_decode($result, true);

//echo $de ;
        $id = $decoded['id'];
        $date = $decoded['created_time'];
        $net = 'Facebook';
        $medio = $decoded['from']['name'];
        $resume = $decoded['name'];
        $pos = 0;
        $negs = 0;
        $neut = 0;
        $link = $decoded['link'];
        $asunto = 0;
        $actores = 0;
        $reacts = $decoded['reactions']['summary']['total_count'];
        $shares = 0;
        $img = $decoded["images"][0]['source'];

        $fpost = new fbpost($id, $date, $net, $medio, $resume, $pos, $negs, $neut, $link, $asunto, $actores, $reacts, $shares, $img);


//        
//          echo"<br>". $fpost->id;
//          echo"<br>". $fpost->date;
//          echo"<br>". $fpost->net;
//          echo"<br>". $fpost->medio;
//          echo"<br>". $fpost->resume;
//          echo"<br>". $fpost->pos;
//          echo"<br>". $fpost->negs;
//          echo"<br>". $fpost->neut;
//          echo"<br>". $fpost->link;
//          echo"<br>". $fpost->asunto;
//          echo"<br>". $fpost->actores;
//          echo"<br>". $fpost->reacts;
//          echo"<br>". $fpost->shares;
//          
         
        return $fpost;
    }

}
