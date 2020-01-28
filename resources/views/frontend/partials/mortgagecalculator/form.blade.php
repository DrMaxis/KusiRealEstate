
  <div class="contacts__form">
   {{--  <div class="alert alert-info">Attention! This form requires working php server for successful submit!</div> --}}
  
            {{ html()->form('POST', route('frontend.contact.send'))->class('form form--flex js-contact-form form--contacts')->open() }}
      <div class="row">
        <div class="form-group required">
            {{ html()->label(__('Home Price'))->for('homePrice') }}

            {{ html()->text('homePrice')
                ->class('form-control')
                ->placeholder(__('$500,000'))
                ->attribute('maxlength', 191)
                ->required()
                 }}

        </div>
        <div class="form-group form-group--col-6">
            {{ html()->label(__('Down Payment'))->for('downPayment') }}

            {{ html()->text('downPayment')
                ->class('form-control')
                ->placeholder(__('$100,000'))
                ->attribute('maxlength', 191)
                ->required() }}
        </div>
       
        <div class="form-group form-group--col-6 required">
            <label for="loanTerm" class="control-label">Loan Term</label>
            <select id="loanTerm" required name="contract_type" data-placeholder="---"
              class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
              <option label=" "></option>
              <option value="10">10-Year Fixed</option>
              <option value="15">15-Year Fixed</option>
              <option value="20">20-Year Fixed</option>
              <option value="25">25-Year Fixed</option>
              <option value="30">30-Year Fixed</option>
            </select>
          </div>
        <div class="form-group form-group--col-12 required">
            {{ html()->label(__('Interest Rate'))->for('interestRate') }}

            {{ html()->text('interestRate')
                ->class('form-control')
                ->placeholder(__('3.75 %'))
                ->attribute('maxlength', 191)
                ->required() }}
        </div>
     
      </div>
      <div class="row">
            {{ form_submit(__('labels.frontend.contact.button'))->class('form__submit') }}
      </div>
      {{ html()->form()->close() }}
    <!-- end of block form-->
  </div>



