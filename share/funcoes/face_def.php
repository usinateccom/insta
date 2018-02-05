<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.

  
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('sat_f').value = 'deslogado';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }



function revokePermissions(success, error) {


apagacook("brasilweb_instashare", "");

  
        return FB.api('/me/permissions', 'delete', function(response) {
    console.log(response); // true
});
    }



  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1989484314633279',
      cookie     : true,  // enable cookies to allow the server to access 
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.11' // use graph api version 2.8
    });

    // Now that we've initialized the JavaScript SDK, we call 
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11&appId=1087847937942131&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);

var iniu = response.name.split(" ");

var nameint = iniu[0];

      document.getElementById('sat_f').value =
        nameint + "::" + response.id + "::" + "<img src='https://graph.facebook.com/" + response.id + "/picture/?type=large' class='bolafoto fadeImg' style='height:30px; width: 30px; border-radius:15px;'>";



//json


var boro = response.name + ":::" + response.email;


//alert("--:::"+ boro + ":::" + response.id);


$.getJSON("<?php echo $ponto; ?>funcoes/login_protegido_face.php",
    {bingo: '--:::'+ boro + ":::" + response.id},

    function(json){
        
        var belga = json.campo;

      var cookieexp = json.prinome + "::face::" + json.nome + "::" + json.foto + "::" + json.id;
    


//alert(cookieexp);



setCookieno("brasilweb_instashare", cookieexp);
<?php

if($logado != 'sim'){
  echo "
window.location.reload();
";

} ?>






    }); // fim do json





 //var cookieexp = nameint + "::face::" + response.name +"::13::<img src='https://graph.facebook.com/" + response.id + "/picture/?type=large' class='bolafoto fadeImg'>";



    });
  }


  function setCookieno(name,value){    //função universal para criar cookie
var expires;

var date; 



date = new Date(); //  criando o COOKIE com a data atual




date.setTime(date.getTime()+(1000*24*60*60*1000));


expires = date.toUTCString();

document.cookie = name+"="+value+"; expires="+expires+"; path=/";


} // fim da funcao







        function logout() {

          //tokenStore['fbtoken'] = undefined; - inutil
            FB.logoutj(function(response) {
              // user is now logged out
//tokenStore['fbtoken'] = undefined; - inutl

window.location.reload();

            });
        }

         function revoke() {
      revokePermissions(
                function() {
                    alert('Permissions revoked'); // isso é pra deslogar
                },
                );
    }


</script>
