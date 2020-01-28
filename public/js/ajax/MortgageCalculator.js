(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/ajax/MortgageCalculator"],{

/***/ "./resources/js/frontend/ajax/MortgageCalculator.js":
/*!**********************************************************!*\
  !*** ./resources/js/frontend/ajax/MortgageCalculator.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  $("#homePrice").on({
    change: function change() {
      formatCurrency($(this));
    },
    keyup: function keyup() {
      formatCurrency($(this));
    },
    blur: function blur() {
      formatCurrency($(this), "blur");
    }
  });
  $("#downPayment").on({
    change: function change() {
      formatCurrency($(this));
    },
    keyup: function keyup() {
      formatCurrency($(this));
    },
    blur: function blur() {
      formatCurrency($(this), "blur");
    }
  });

  function formatNumber(n) {
    // format number 1000000 to 1,234,567
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }

  function formatCurrency(input, blur) {
    // appends $ to value, validates decimal side
    // and puts cursor back in right position.
    var originalValue = input.val(); // get input value

    var input_val = input.val(); // don't validate empty input

    if (input_val === "") {
      return;
    } // original length


    var original_len = input_val.length; // initial caret position 

    var caret_pos = input.prop("selectionStart"); // check for decimal

    if (input_val.indexOf(".") >= 0) {
      // get position of first decimal
      // this prevents multiple decimals from
      // being entered
      var decimal_pos = input_val.indexOf("."); // split number by decimal point

      var left_side = input_val.substring(0, decimal_pos);
      var right_side = input_val.substring(decimal_pos); // add commas to left side of number

      left_side = formatNumber(left_side); // validate right side

      right_side = formatNumber(right_side); // On blur make sure 2 numbers after decimal

      if (blur === "blur") {
        right_side += "00";
      } // Limit decimal to only 2 digits


      right_side = right_side.substring(0, 2); // join number by .

      input_val = "$" + left_side + "." + right_side;
    } else {
      // no decimal entered
      // add commas to number
      // remove all non-digits
      input_val = formatNumber(input_val);
      input_val = "$" + input_val; // final formatting

      if (blur === "blur") {
        input_val += ".00";
      }
    } // send updated string to input


    input.val(input_val); // put caret back in the right position

    var updated_len = input_val.length;
    caret_pos = updated_len - original_len + caret_pos;
    input[0].setSelectionRange(caret_pos, caret_pos);
    console.log(input_val.replace(/[$,]/g, ""));
    /* var modal = document.querySelector('#test');
    modal.innerHTML = input_val; 
    
    */

    /*      document.getElementById("payment-amount").innerHTML = input_val.replace(/[$]/,"");
         document.getElementById("sending-amount").innerHTML = input_val.replace(/[$]/,""); */
  }
});

/***/ }),

/***/ 1:
/*!****************************************************************!*\
  !*** multi ./resources/js/frontend/ajax/MortgageCalculator.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\KusiRealEstate\resources\js\frontend\ajax\MortgageCalculator.js */"./resources/js/frontend/ajax/MortgageCalculator.js");


/***/ })

},[[1,"/js/manifest"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZnJvbnRlbmQvYWpheC9Nb3J0Z2FnZUNhbGN1bGF0b3IuanMiXSwibmFtZXMiOlsiJCIsIm9uIiwiY2hhbmdlIiwiZm9ybWF0Q3VycmVuY3kiLCJrZXl1cCIsImJsdXIiLCJmb3JtYXROdW1iZXIiLCJuIiwicmVwbGFjZSIsImlucHV0Iiwib3JpZ2luYWxWYWx1ZSIsInZhbCIsImlucHV0X3ZhbCIsIm9yaWdpbmFsX2xlbiIsImxlbmd0aCIsImNhcmV0X3BvcyIsInByb3AiLCJpbmRleE9mIiwiZGVjaW1hbF9wb3MiLCJsZWZ0X3NpZGUiLCJzdWJzdHJpbmciLCJyaWdodF9zaWRlIiwidXBkYXRlZF9sZW4iLCJzZXRTZWxlY3Rpb25SYW5nZSIsImNvbnNvbGUiLCJsb2ciXSwibWFwcGluZ3MiOiI7Ozs7Ozs7OztBQUFBQSxDQUFDLENBQUMsWUFBVztBQUVUQSxHQUFDLENBQUMsWUFBRCxDQUFELENBQWdCQyxFQUFoQixDQUFtQjtBQUNmQyxVQUFNLEVBQUUsa0JBQVc7QUFDakJDLG9CQUFjLENBQUNILENBQUMsQ0FBQyxJQUFELENBQUYsQ0FBZDtBQUNELEtBSGM7QUFJZkksU0FBSyxFQUFFLGlCQUFXO0FBQ2hCRCxvQkFBYyxDQUFDSCxDQUFDLENBQUMsSUFBRCxDQUFGLENBQWQ7QUFDRCxLQU5jO0FBT2ZLLFFBQUksRUFBRSxnQkFBVztBQUNmRixvQkFBYyxDQUFDSCxDQUFDLENBQUMsSUFBRCxDQUFGLEVBQVUsTUFBVixDQUFkO0FBQ0Q7QUFUYyxHQUFuQjtBQVlBQSxHQUFDLENBQUMsY0FBRCxDQUFELENBQWtCQyxFQUFsQixDQUFxQjtBQUNqQkMsVUFBTSxFQUFFLGtCQUFXO0FBQ2pCQyxvQkFBYyxDQUFDSCxDQUFDLENBQUMsSUFBRCxDQUFGLENBQWQ7QUFDRCxLQUhnQjtBQUlqQkksU0FBSyxFQUFFLGlCQUFXO0FBQ2hCRCxvQkFBYyxDQUFDSCxDQUFDLENBQUMsSUFBRCxDQUFGLENBQWQ7QUFDRCxLQU5nQjtBQU9qQkssUUFBSSxFQUFFLGdCQUFXO0FBQ2ZGLG9CQUFjLENBQUNILENBQUMsQ0FBQyxJQUFELENBQUYsRUFBVSxNQUFWLENBQWQ7QUFDRDtBQVRnQixHQUFyQjs7QUFhQSxXQUFTTSxZQUFULENBQXNCQyxDQUF0QixFQUF5QjtBQUNyQjtBQUNBLFdBQU9BLENBQUMsQ0FBQ0MsT0FBRixDQUFVLEtBQVYsRUFBaUIsRUFBakIsRUFBcUJBLE9BQXJCLENBQTZCLHVCQUE3QixFQUFzRCxHQUF0RCxDQUFQO0FBQ0Q7O0FBR0QsV0FBU0wsY0FBVCxDQUF3Qk0sS0FBeEIsRUFBK0JKLElBQS9CLEVBQXFDO0FBQ25DO0FBQ0E7QUFDQSxRQUFJSyxhQUFhLEdBQUdELEtBQUssQ0FBQ0UsR0FBTixFQUFwQixDQUhtQyxDQUtuQzs7QUFDQSxRQUFJQyxTQUFTLEdBQUdILEtBQUssQ0FBQ0UsR0FBTixFQUFoQixDQU5tQyxDQVFuQzs7QUFDQSxRQUFJQyxTQUFTLEtBQUssRUFBbEIsRUFBc0I7QUFBRTtBQUFTLEtBVEUsQ0FXbkM7OztBQUNBLFFBQUlDLFlBQVksR0FBR0QsU0FBUyxDQUFDRSxNQUE3QixDQVptQyxDQWNuQzs7QUFDQSxRQUFJQyxTQUFTLEdBQUdOLEtBQUssQ0FBQ08sSUFBTixDQUFXLGdCQUFYLENBQWhCLENBZm1DLENBaUJuQzs7QUFDQSxRQUFJSixTQUFTLENBQUNLLE9BQVYsQ0FBa0IsR0FBbEIsS0FBMEIsQ0FBOUIsRUFBaUM7QUFFL0I7QUFDQTtBQUNBO0FBQ0EsVUFBSUMsV0FBVyxHQUFHTixTQUFTLENBQUNLLE9BQVYsQ0FBa0IsR0FBbEIsQ0FBbEIsQ0FMK0IsQ0FPL0I7O0FBQ0EsVUFBSUUsU0FBUyxHQUFHUCxTQUFTLENBQUNRLFNBQVYsQ0FBb0IsQ0FBcEIsRUFBdUJGLFdBQXZCLENBQWhCO0FBQ0EsVUFBSUcsVUFBVSxHQUFHVCxTQUFTLENBQUNRLFNBQVYsQ0FBb0JGLFdBQXBCLENBQWpCLENBVCtCLENBVy9COztBQUNBQyxlQUFTLEdBQUdiLFlBQVksQ0FBQ2EsU0FBRCxDQUF4QixDQVorQixDQWMvQjs7QUFDQUUsZ0JBQVUsR0FBR2YsWUFBWSxDQUFDZSxVQUFELENBQXpCLENBZitCLENBaUIvQjs7QUFDQSxVQUFJaEIsSUFBSSxLQUFLLE1BQWIsRUFBcUI7QUFDbkJnQixrQkFBVSxJQUFJLElBQWQ7QUFDRCxPQXBCOEIsQ0FzQi9COzs7QUFDQUEsZ0JBQVUsR0FBR0EsVUFBVSxDQUFDRCxTQUFYLENBQXFCLENBQXJCLEVBQXdCLENBQXhCLENBQWIsQ0F2QitCLENBeUIvQjs7QUFDQVIsZUFBUyxHQUFHLE1BQU1PLFNBQU4sR0FBa0IsR0FBbEIsR0FBd0JFLFVBQXBDO0FBRUQsS0E1QkQsTUE0Qk87QUFDTDtBQUNBO0FBQ0E7QUFDQVQsZUFBUyxHQUFHTixZQUFZLENBQUNNLFNBQUQsQ0FBeEI7QUFDQUEsZUFBUyxHQUFHLE1BQU1BLFNBQWxCLENBTEssQ0FPTDs7QUFDQSxVQUFJUCxJQUFJLEtBQUssTUFBYixFQUFxQjtBQUNuQk8saUJBQVMsSUFBSSxLQUFiO0FBQ0Q7QUFDRixLQXpEa0MsQ0EyRG5DOzs7QUFDQUgsU0FBSyxDQUFDRSxHQUFOLENBQVVDLFNBQVYsRUE1RG1DLENBOERuQzs7QUFDQSxRQUFJVSxXQUFXLEdBQUdWLFNBQVMsQ0FBQ0UsTUFBNUI7QUFDQUMsYUFBUyxHQUFHTyxXQUFXLEdBQUdULFlBQWQsR0FBNkJFLFNBQXpDO0FBQ0FOLFNBQUssQ0FBQyxDQUFELENBQUwsQ0FBU2MsaUJBQVQsQ0FBMkJSLFNBQTNCLEVBQXNDQSxTQUF0QztBQUdSUyxXQUFPLENBQUNDLEdBQVIsQ0FBWWIsU0FBUyxDQUFDSixPQUFWLENBQWtCLE9BQWxCLEVBQTBCLEVBQTFCLENBQVo7QUFDUTs7Ozs7QUFJUDs7QUFJTTtBQUVOLENBaEhBLENBQUQsQyIsImZpbGUiOiIvanMvYWpheC9Nb3J0Z2FnZUNhbGN1bGF0b3IuanMiLCJzb3VyY2VzQ29udGVudCI6WyIkKGZ1bmN0aW9uKCkge1xyXG5cclxuICAgICQoXCIjaG9tZVByaWNlXCIpLm9uKHtcclxuICAgICAgICBjaGFuZ2U6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgZm9ybWF0Q3VycmVuY3koJCh0aGlzKSk7XHJcbiAgICAgICAgfSxcclxuICAgICAgICBrZXl1cDogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICBmb3JtYXRDdXJyZW5jeSgkKHRoaXMpKTtcclxuICAgICAgICB9LFxyXG4gICAgICAgIGJsdXI6IGZ1bmN0aW9uKCkgeyBcclxuICAgICAgICAgIGZvcm1hdEN1cnJlbmN5KCQodGhpcyksIFwiYmx1clwiKTtcclxuICAgICAgICB9IFxyXG4gICAgfSk7XHJcblxyXG4gICAgJChcIiNkb3duUGF5bWVudFwiKS5vbih7XHJcbiAgICAgICAgY2hhbmdlOiBmdW5jdGlvbigpIHtcclxuICAgICAgICAgIGZvcm1hdEN1cnJlbmN5KCQodGhpcykpO1xyXG4gICAgICAgIH0sXHJcbiAgICAgICAga2V5dXA6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgZm9ybWF0Q3VycmVuY3koJCh0aGlzKSk7XHJcbiAgICAgICAgfSxcclxuICAgICAgICBibHVyOiBmdW5jdGlvbigpIHsgXHJcbiAgICAgICAgICBmb3JtYXRDdXJyZW5jeSgkKHRoaXMpLCBcImJsdXJcIik7XHJcbiAgICAgICAgfSBcclxuICAgIH0pO1xyXG5cclxuXHJcbiAgICBmdW5jdGlvbiBmb3JtYXROdW1iZXIobikge1xyXG4gICAgICAgIC8vIGZvcm1hdCBudW1iZXIgMTAwMDAwMCB0byAxLDIzNCw1NjdcclxuICAgICAgICByZXR1cm4gbi5yZXBsYWNlKC9cXEQvZywgXCJcIikucmVwbGFjZSgvXFxCKD89KFxcZHszfSkrKD8hXFxkKSkvZywgXCIsXCIpXHJcbiAgICAgIH1cclxuICAgICAgXHJcbiAgICAgIFxyXG4gICAgICBmdW5jdGlvbiBmb3JtYXRDdXJyZW5jeShpbnB1dCwgYmx1cikge1xyXG4gICAgICAgIC8vIGFwcGVuZHMgJCB0byB2YWx1ZSwgdmFsaWRhdGVzIGRlY2ltYWwgc2lkZVxyXG4gICAgICAgIC8vIGFuZCBwdXRzIGN1cnNvciBiYWNrIGluIHJpZ2h0IHBvc2l0aW9uLlxyXG4gICAgICAgIHZhciBvcmlnaW5hbFZhbHVlID0gaW5wdXQudmFsKCk7XHJcbiAgICAgICAgXHJcbiAgICAgICAgLy8gZ2V0IGlucHV0IHZhbHVlXHJcbiAgICAgICAgdmFyIGlucHV0X3ZhbCA9IGlucHV0LnZhbCgpO1xyXG4gICAgICAgIFxyXG4gICAgICAgIC8vIGRvbid0IHZhbGlkYXRlIGVtcHR5IGlucHV0XHJcbiAgICAgICAgaWYgKGlucHV0X3ZhbCA9PT0gXCJcIikgeyByZXR1cm47IH1cclxuICAgICAgICBcclxuICAgICAgICAvLyBvcmlnaW5hbCBsZW5ndGhcclxuICAgICAgICB2YXIgb3JpZ2luYWxfbGVuID0gaW5wdXRfdmFsLmxlbmd0aDtcclxuICAgICAgXHJcbiAgICAgICAgLy8gaW5pdGlhbCBjYXJldCBwb3NpdGlvbiBcclxuICAgICAgICB2YXIgY2FyZXRfcG9zID0gaW5wdXQucHJvcChcInNlbGVjdGlvblN0YXJ0XCIpO1xyXG4gICAgICAgICAgXHJcbiAgICAgICAgLy8gY2hlY2sgZm9yIGRlY2ltYWxcclxuICAgICAgICBpZiAoaW5wdXRfdmFsLmluZGV4T2YoXCIuXCIpID49IDApIHtcclxuICAgICAgXHJcbiAgICAgICAgICAvLyBnZXQgcG9zaXRpb24gb2YgZmlyc3QgZGVjaW1hbFxyXG4gICAgICAgICAgLy8gdGhpcyBwcmV2ZW50cyBtdWx0aXBsZSBkZWNpbWFscyBmcm9tXHJcbiAgICAgICAgICAvLyBiZWluZyBlbnRlcmVkXHJcbiAgICAgICAgICB2YXIgZGVjaW1hbF9wb3MgPSBpbnB1dF92YWwuaW5kZXhPZihcIi5cIik7XHJcbiAgICAgIFxyXG4gICAgICAgICAgLy8gc3BsaXQgbnVtYmVyIGJ5IGRlY2ltYWwgcG9pbnRcclxuICAgICAgICAgIHZhciBsZWZ0X3NpZGUgPSBpbnB1dF92YWwuc3Vic3RyaW5nKDAsIGRlY2ltYWxfcG9zKTtcclxuICAgICAgICAgIHZhciByaWdodF9zaWRlID0gaW5wdXRfdmFsLnN1YnN0cmluZyhkZWNpbWFsX3Bvcyk7XHJcbiAgICAgIFxyXG4gICAgICAgICAgLy8gYWRkIGNvbW1hcyB0byBsZWZ0IHNpZGUgb2YgbnVtYmVyXHJcbiAgICAgICAgICBsZWZ0X3NpZGUgPSBmb3JtYXROdW1iZXIobGVmdF9zaWRlKTtcclxuICAgICAgXHJcbiAgICAgICAgICAvLyB2YWxpZGF0ZSByaWdodCBzaWRlXHJcbiAgICAgICAgICByaWdodF9zaWRlID0gZm9ybWF0TnVtYmVyKHJpZ2h0X3NpZGUpO1xyXG4gICAgICAgICAgXHJcbiAgICAgICAgICAvLyBPbiBibHVyIG1ha2Ugc3VyZSAyIG51bWJlcnMgYWZ0ZXIgZGVjaW1hbFxyXG4gICAgICAgICAgaWYgKGJsdXIgPT09IFwiYmx1clwiKSB7XHJcbiAgICAgICAgICAgIHJpZ2h0X3NpZGUgKz0gXCIwMFwiO1xyXG4gICAgICAgICAgfVxyXG4gICAgICAgICAgXHJcbiAgICAgICAgICAvLyBMaW1pdCBkZWNpbWFsIHRvIG9ubHkgMiBkaWdpdHNcclxuICAgICAgICAgIHJpZ2h0X3NpZGUgPSByaWdodF9zaWRlLnN1YnN0cmluZygwLCAyKTtcclxuICAgICAgXHJcbiAgICAgICAgICAvLyBqb2luIG51bWJlciBieSAuXHJcbiAgICAgICAgICBpbnB1dF92YWwgPSBcIiRcIiArIGxlZnRfc2lkZSArIFwiLlwiICsgcmlnaHRfc2lkZTtcclxuICAgICAgXHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgIC8vIG5vIGRlY2ltYWwgZW50ZXJlZFxyXG4gICAgICAgICAgLy8gYWRkIGNvbW1hcyB0byBudW1iZXJcclxuICAgICAgICAgIC8vIHJlbW92ZSBhbGwgbm9uLWRpZ2l0c1xyXG4gICAgICAgICAgaW5wdXRfdmFsID0gZm9ybWF0TnVtYmVyKGlucHV0X3ZhbCk7XHJcbiAgICAgICAgICBpbnB1dF92YWwgPSBcIiRcIiArIGlucHV0X3ZhbDtcclxuICAgICAgICAgIFxyXG4gICAgICAgICAgLy8gZmluYWwgZm9ybWF0dGluZ1xyXG4gICAgICAgICAgaWYgKGJsdXIgPT09IFwiYmx1clwiKSB7XHJcbiAgICAgICAgICAgIGlucHV0X3ZhbCArPSBcIi4wMFwiO1xyXG4gICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgICAgICBcclxuICAgICAgICAvLyBzZW5kIHVwZGF0ZWQgc3RyaW5nIHRvIGlucHV0XHJcbiAgICAgICAgaW5wdXQudmFsKGlucHV0X3ZhbCk7XHJcbiAgICAgIFxyXG4gICAgICAgIC8vIHB1dCBjYXJldCBiYWNrIGluIHRoZSByaWdodCBwb3NpdGlvblxyXG4gICAgICAgIHZhciB1cGRhdGVkX2xlbiA9IGlucHV0X3ZhbC5sZW5ndGg7XHJcbiAgICAgICAgY2FyZXRfcG9zID0gdXBkYXRlZF9sZW4gLSBvcmlnaW5hbF9sZW4gKyBjYXJldF9wb3M7XHJcbiAgICAgICAgaW5wdXRbMF0uc2V0U2VsZWN0aW9uUmFuZ2UoY2FyZXRfcG9zLCBjYXJldF9wb3MpO1xyXG4gICAgICBcclxuICAgICAgICBcclxuY29uc29sZS5sb2coaW5wdXRfdmFsLnJlcGxhY2UoL1skLF0vZyxcIlwiKSk7XHJcbiAgICAgICAgLyogdmFyIG1vZGFsID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3Rlc3QnKTtcclxuICAgICAgICBtb2RhbC5pbm5lckhUTUwgPSBpbnB1dF92YWw7IFxyXG4gICAgICAgXHJcbiAgICAgICAgKi9cclxuIC8qICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJwYXltZW50LWFtb3VudFwiKS5pbm5lckhUTUwgPSBpbnB1dF92YWwucmVwbGFjZSgvWyRdLyxcIlwiKTtcclxuICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJzZW5kaW5nLWFtb3VudFwiKS5pbm5lckhUTUwgPSBpbnB1dF92YWwucmVwbGFjZSgvWyRdLyxcIlwiKTsgKi9cclxuICAgICAgXHJcbiAgICAgIFxyXG4gICAgICB9XHJcblxyXG59KSJdLCJzb3VyY2VSb290IjoiIn0=