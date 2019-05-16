/**
 * Allows you to add data-method="METHOD to links to automatically inject a form
 * with the method on click
 *
 * Example: <a href="{{route('customers.destroy', $customer->id)}}"
 * data-method="delete" name="delete_item">Delete</a>
 *
 * Injects a form with that's fired on click of the link with a DELETE request.
 * Good because you don't have to dirty your HTML with delete forms everywhere.
 */
function addDeleteForms() {
    $('[data-method]').append(function () {
        if (!$(this).find('form').length > 0) {
            return "\n<form action='" + $(this).attr('href') + "' method='POST' name='delete_item' style='display:none'>\n" +
                "<input type='hidden' name='_method' value='" + $(this).attr('data-method') + "'>\n" +
                "<input type='hidden' name='_token' value='" + $('meta[name="csrf-token"]').attr('content') + "'>\n" +
                '</form>\n';
        } else { return '' }
    })
        .attr('href', '#')
        .attr('style', 'cursor:pointer;')
        .attr('onclick', '$(this).find("form").submit();');
}



    function initSearch(container) {
      /**
       * Helper function for rendering checkboxes inside dropdowns
       ==============================================================*/
      var $container = $(container);
      var $selectCheckboxes = $container.find('.js-select-checkboxes');
      var $selectCheckboxesDropdown = $container.find('.js-select-checkboxes');
      var $rangeSliders = $container.find('.js-search-range');
      var $inputsText = $container.find('input[type="text"]');
      var $inputsTextArea = $container.find('textarea');
      var $inputsSelect = $container.find('select');
      var $inputsCheckbox = $container.find('input[type="checkbox"]');
  
      $selectCheckboxes.each(function () {
        var $this = $(this);
        var $showBtn = $(this).prev('.js-select-checkboxes-btn');
        var $showBtnPlaceholder = $showBtn.data('placeholder');
  
        $this
          .find('.in-checkbox')
          .change(function () {
            var $parentGroup,
              resultHtml,
              location = [];
  
            $parentGroup = $(this).closest('.js-select-checkboxes');
  
            $($parentGroup).find('.in-checkbox:checked').each(function () {
              var name = $(this).next('label').text();
              location.push(name);
            });
            resultHtml = location.join(', ') || $showBtnPlaceholder;
            $($showBtn).text(resultHtml);
          });
      });
  
  
      $('.js-select-checkboxes-reset').on('click', function () {
        var $this = $(this),
          $selectCheckboxesDropdown = $this.closest('.js-select-checkboxes');
  
        $selectCheckboxesDropdown
          .find('input[type="checkbox"]')
          .prop({
            checked: false,
            indeterminate: false
          });
        $selectCheckboxesDropdown
          .find('input[type="checkbox"]')
          .first()
          .trigger('change');
  
      });
  
      $('.js-select-checkboxes-accept').on('click', function () {
        var $this = $(this),
          $selectCheckboxesDropdown = $this.closest('.js-select-checkboxes');
  
        $selectCheckboxesDropdown
          .closest('.dropdown')
          .removeClass('open');
      });
  
      // Button "Clear All" (reset form)
      $('.js-form-reset').on('click', function () {
        $inputsText.val('');
  
        $inputsTextArea.text('');
  
        $inputsSelect.each(function (i, item) {
          $(item).find('option').removeAttr('selected');
          $(item).trigger('change');
        });
  
        $inputsCheckbox.prop({
          checked: false,
          indeterminate: false
        });
  
        // trigger event for custom menu dropdown
        $selectCheckboxesDropdown.each(function (i, selectCheckboxes) {
          $(selectCheckboxes)
            .find('input[type="checkbox"]')
            .first()
            .trigger('change');
        });
        // reset range slider
        $rangeSliders.each(function (i, rangeSlider) {
          // Save slider instance
          var slider = $(rangeSlider).data("ionRangeSlider");
          // Call sliders reset method
          slider.reset();
        });
  
      });
  
  
      $('body').on('click', '.js-dropdown-menu', function (e) {
        e.stopPropagation();
      });
  
      /***************************************************************
       * Example usage of tree plugin and checkbox plugins
       * to render a nice location tree
       *
       * For customizing the tree options see
       * http://aexmachina.info/jquery-bonsai
       *
       * For customizing checkbox options see
       * https://github.com/aexmachina/jquery-qubit
       ==============================================================*/
      var checkboxesTree = $('.js-checkboxes-tree');
      if (checkboxesTree.length) {
        checkboxesTree.bonsai();
        checkboxesTree.qubit();
      }
  
      //  listeners
      var debounceFormChange = _.debounce(triggerFormChange, 500);
      $rangeSliders.on('change', debounceFormChange);
      $inputsText.on('input', triggerFormChange);
      $inputsTextArea.on('change', triggerFormChange);
      $inputsSelect.on('change', triggerFormChange);
      $inputsCheckbox.on('change', triggerFormChange);
  
      function triggerFormChange() {
        $container.trigger('formChange');
      }
    }
  

    function initRangeSliders() {
      /***************************************************************
       * Example usage of range sliders that replace the
       * price/rooms/area "from" and "to" fields
       *
       * For documentation
       * and options see https://github.com/IonDen/ion.rangeSlider
       ==============================================================*/
      var $rangeArea = $("#range_area");
      var $rangePrice = $("#range_price");
      var $rangeCommision = $("#range_commision");
      var $rangeRoom = $("#range_room");
      var $rangeUi = $("#range_ui");
  
      if ($rangeArea.length ) {
        $rangeArea.ionRangeSlider({
          type: "double",
          min: 0,
          max: 2000,
          hide_min_max: true,
          hide_from_to: false,
          grid: false,
          postfix: ' sq ft',
          force_edges: true,
          step: 10,
          max_postfix: '+',
          onFinish: app.rangeInputInteraction
        });
      }
  
      if ($rangePrice.length ) {
        $rangePrice.ionRangeSlider({
          type: "double",
          min: 0,
          max: 5000000,
          hide_min_max: true,
          hide_from_to: false,
          grid: false,
          prefix: '$',
          force_edges: true,
          max_postfix: '+',
          step: 1000,
          // converts numbers like 4000000 to 4m, remove if you don't like it
          prettify: function (value) {
            return app.utils.abbreviateNumber(value)
          },
          onFinish: app.rangeInputInteraction
        });
      }
  
      if ($rangeRoom.length ) {
        $rangeRoom.ionRangeSlider({
          type: "double",
          min: 0,
          max: 10,
          from: 0,
          to: 10,
          hide_min_max: true,
          hide_from_to: false,
          grid: false,
          max_postfix: '+',
          onFinish: app.rangeInputInteraction
        });
      }
  
      if ($rangeCommision.length ) {
        $rangeCommision.ionRangeSlider({
          type: "double",
          min: 0,
          max: 10000,
          from: 0,
          to: 10000,
          hide_min_max: true,
          hide_from_to: false,
          grid: false,
          max_postfix: '+',
          prefix: 'RM ',
          onFinish: app.rangeInputInteraction
        });
      }
  
      if ($rangeUi.length ) {
        $rangeUi.ionRangeSlider({
          type: "double",
          min: 1000,
          max: 2000,
          from: 1200,
          to: 1800,
          hide_min_max: true,
          hide_from_to: false,
          grid: false,
          onFinish: app.rangeInputInteraction
        });
      }
  
    }


/**
 * Place any jQuery/helper plugins in here.
 */
$(function () {
    /**
     * Add the data-method="delete" forms to all delete links
     */
    addDeleteForms();


    /**
     * Disable all submit buttons once clicked
     */
    $('form').submit(function () {
        $(this).find('input[type="submit"]').attr('disabled', true);
        $(this).find('button[type="submit"]').attr('disabled', true);
        return true;
    });

    /**
     * Generic confirm form delete using Sweet Alert
     */
    $('body').on('submit', 'form[name=delete_item]', function (e) {
        e.preventDefault();

        const form = this;
        const link = $('a[data-method="delete"]');
        const cancel = (link.attr('data-trans-button-cancel')) ? link.attr('data-trans-button-cancel') : 'Cancel';
        const confirm = (link.attr('data-trans-button-confirm')) ? link.attr('data-trans-button-confirm') : 'Yes, delete';
        const title = (link.attr('data-trans-title')) ? link.attr('data-trans-title') : 'Are you sure you want to delete this item?';

        Swal.fire({
            title: title,
            showCancelButton: true,
            confirmButtonText: confirm,
            cancelButtonText: cancel,
            type: 'warning'
        }).then((result) => {
            result.value && form.submit();
        });
    }).on('click', 'a[name=confirm_item]', function (e) {
        /**
         * Generic 'are you sure' confirm box
         */
        e.preventDefault();

        const link = $(this);
        const title = (link.attr('data-trans-title')) ? link.attr('data-trans-title') : 'Are you sure you want to do this?';
        const cancel = (link.attr('data-trans-button-cancel')) ? link.attr('data-trans-button-cancel') : 'Cancel';
        const confirm = (link.attr('data-trans-button-confirm')) ? link.attr('data-trans-button-confirm') : 'Continue';

        Swal.fire({
            title: title,
            showCancelButton: true,
            confirmButtonText: confirm,
            cancelButtonText: cancel,
            type: 'info'
        }).then((result) => {
            result.value && window.location.assign(link.attr('href'));
        });
    });

    $('[data-toggle="tooltip"]').tooltip();



    
 initRangeSliders();
initSearch('.js-search-form');
    
jQuery(window).load(function () {

  setTimeout(function () {
      $('.thumb').addClass('fa');
  }, 1500);

});





















});

