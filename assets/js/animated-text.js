(function($){
      if($(window).width() > 992) {
        // Add Animation for title      
                  var itemTitle = $(".item-title");
          
          setTimeout(function(){
            // Shuffle the container with custom text
            itemTitle.shuffleLetters({
              "text": "Pinisi Pictures",
              "fps": "30"
            });
            
          },0);
                
         // Add Animation for position      
                  var itemPosition = $(".item-position");
          
          setTimeout(function(){
            // Shuffle the container with custom text
            itemPosition.shuffleLetters({
              "text": "Production House",
              "fps": "30"
            });
            
          },1000);
        
         // Add Animation for description      
                  var itemDesc = $(".description");
          
          setTimeout(function(){
            // Shuffle the container with custom text
            itemDesc.shuffleLetters({
              "text": pw_script_vars.alert,
              "fps": "80"
            });
            
          },2000);
              } else {
        $(".item-title").text("Pinisi Pictures");
        $(".item-position").text("Production House");
        $(".description").text("TVC (tv commercial), Digital video, PSA (Public Service Announcement ) ,company profile, video profile, filler, video presentation, corporate video, motion graphics animation, video clip, short movie, digital content, video documenter & photography");
      };
    })(jQuery); 