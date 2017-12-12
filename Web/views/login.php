<!DOCTYPE html>
<html>
<head>
  <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="176345444318-ttisbjl64aqvngcmbqvn0iok4manb76m.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <title>MinuteGen | Login</title>
</head>
<style>
body{
  font-family:'Roboto';
  margin: 0;
  background-color: #EEEEEE;
}
.login-container-1 {
  width: 100%;
  background-color: #607D8B;
  padding-top: 50px;
  padding-bottom: 50px;
  text-align: center;
}
.login-container-2 {
  background-color: white;
  padding: 3% 5%;
  margin: 5% 35%;
  text-align: center;
  box-shadow: 0px 2px 8px 0px rgba(0,0,0,0.2);
}
.g-signin2 {
  padding-top: 15%;
  margin-left: 30%;
  align-items: center;
}
.login-title {
  font-size: 46px;
  color: white;
}
.login-subtitle {
  font-size: 34px;
  color: white;
}
.login-text {
  font-size: 24px;
}
</style>
<body>
    <div class="login-container-1">
      <span class="login-title">MinuteGen</span>
      <div class="login-subtitle">Automated Minute Tracker</div>
    </div>
    <div class="login-container-2">
      <span class="login-text">Login with Google</span>
      <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    </div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());



        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);


        // reuest
        var data = {
            'email': profile.getEmail(),
            'full_name': profile.getName(),
            'first_name': profile.getGivenName(),
            'last_name': profile.getFamilyName(),
            'profile_url': profile.getImageUrl(),
            'client_id': profile.getId(),
            'token': id_token,
        };
        // console.log('<?= BASEURL ?>');
        request('<?= BASEURL ?>/api/login', data);
      }

      function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
          console.log('User signed out.');
        });
      }


      function request(url, data){
          var xhr = new XMLHttpRequest();
          xhr.open('POST', url, true);
          xhr.setRequestHeader("Content-type", "application/json");
          xhr.onreadystatechange = function () {
              // Request is complete & Valid response
              if (xhr.readyState == 4 && xhr.status == 200){
                  var jsonString = xhr.responseText;
                  console.log(jsonString);
                  window.location.href = "<?= BASEURL ?>";
              }
              console.log(xhr.responseText);
          };
          var json = JSON.stringify(data);
          xhr.send(json);
      }

    </script>

</body>
</html>
