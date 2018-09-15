/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//window.fbAsyncInit = function () {
//    FB.init({
//        appId: '1811806812250197',
//        autoLogAppEvents: true,
//        xfbml: true,
//        version: 'v3.1'    
//    });
//}
//
//
//(function (d, s, id) {
//    var js, fjs = d.getElementsByTagName(s)[0];
//    if (d.getElementById(id)) {
//        return;
//    }
//    js = d.createElement(s);
//    js.id = id;
//    js.src = "https://connect.facebook.net/en_US/sdk.js";
//    fjs.parentNode.insertBefore(js, fjs);
//    
//}(document, 'script', 'facebook-jssdk'));
//


a = 0;
b = 0;
function addActor() {
    a++;

    var div = document.createElement('div');
    div.setAttribute('class', 'form-inline');
    div.innerHTML = '<div style="clear:both" class="Actor_' + a + ' col-md-offset-1 col-md-6"><input class="form-control" name="actor_' + a + '" type="text"/>';
    document.getElementById('actors').appendChild(div);
    document.getElementById('actors').appendChild(div);
}


function addAsuntos() {
    b++;

    var div = document.createElement('div');
    div.setAttribute('class', 'form-inline');
    div.innerHTML = '<div style="clear:both" class="Actor_' + b + ' col-md-offset-1 col-md-6"><input class="form-control" name="actor_' + b + '" type="text"/>';
    document.getElementById('asuntos').appendChild(div);
    document.getElementById('asuntos').appendChild(div);
}


function getAPI(i){
    
                    FB.api(i, function (response) {

                        document.write('hola');
                        document.write(response);
                    });
}