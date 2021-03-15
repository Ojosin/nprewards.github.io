/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";


$(".number_valid").on("keypress", function (event) {
      var regex = /[0-9.]/g;
      var key = String.fromCharCode(event.which);
      if (regex.test(key) || event.keyCode == 8 || event.keyCode == 9 ) {
          return true;
      }
        return false;
  });  

