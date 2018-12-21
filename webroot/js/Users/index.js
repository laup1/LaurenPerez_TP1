var app = angular.module('app', ['BotDetectCaptcha']);
 
app.config(function(captchaSettingsProvider) {
  
  captchaSettingsProvider.setSettings({
    captchaEndpoint: 'captcha-endpoint/simple-botdetect.php'
  });
});

app.controller('ExampleController', function($scope, Captcha) {
 
  // On form submit.
  $scope.validate = function() {
 
    var captcha = new Captcha();
                                  
 
    captcha.validateUnsafe(function(isCaptchaCodeCorrect) {
 
      if (isCaptchaCodeCorrect) {
        // Captcha code is correct
      } else {
        // Captcha code is incorrect
      }
 
    });
  };
   
});