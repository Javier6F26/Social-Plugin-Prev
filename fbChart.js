/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.fbAsyncInit = function () {
    FB.init({
        appId: '321585578575368',
        autoLogAppEvents: true,
        xfbml: true,
        version: 'v3.1'    
    });
}

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
    
}(document, 'script', 'facebook-jssdk'));

var url=i.split('/');
document.write(url[6]);


FB.api(url[6],function(response){
    
    document.write('hola');
});

