// min
      var slider1 = document.getElementById("customRange1");
      
      var output1 = document.getElementById("mindemo");
      
      
      slider1.oninput = function() {
        output1.value = this.value;
      }
      output1.oninput = function(){
          slider1.value=this.value;
      }


// max


      var slider2 = document.getElementById("customRange2");
      var output2 = document.getElementById("maxdemo");

      slider2.oninput = function() {
        output2.value = this.value;
      }
      output2.oninput = function(){
          slider2.value=this.value;
      }