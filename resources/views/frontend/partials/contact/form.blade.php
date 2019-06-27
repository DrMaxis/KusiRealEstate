
  <div class="contacts__form">
   {{--  <div class="alert alert-info">Attention! This form requires working php server for successful submit!</div> --}}
  
            {{ html()->form('POST', route('frontend.contact.send'))->class('form form--flex js-contact-form form--contacts')->open() }}
      <div class="row">
        <div class="form-group required">
            {{ html()->label(__('validation.attributes.frontend.name'))->for('name') }}

            {{ html()->text('name', optional(auth()->user())->name)
                ->class('form-control')
                ->placeholder(__('validation.attributes.frontend.name'))
                ->attribute('maxlength', 191)
                ->required()
                ->autofocus() }}

        </div>
        <div class="form-group form-group--col-6">
            {{ html()->label(__('validation.attributes.frontend.phone'))->for('phone') }}

            {{ html()->text('phone')
                ->class('form-control')
                ->placeholder(__('validation.attributes.frontend.phone'))
                ->attribute('maxlength', 191)
                ->required() }}
        </div>
        <div class="form-group form-group--col-6 required">
            {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

            {{ html()->email('email', optional(auth()->user())->email)
                ->class('form-control')
                ->placeholder(__('validation.attributes.frontend.email'))
                ->attribute('maxlength', 191)
                ->required() }}
        </div>
        <div class="form-group required">
            {{ html()->label(__('validation.attributes.frontend.message'))->for('message') }}

            {{ html()->textarea('message')
                ->class('form-control')
                ->placeholder(__('validation.attributes.frontend.message'))
                ->attribute('rows', 3)
                ->required() }}
        </div>
      </div>
      <div class="row">
            {{ form_submit(__('labels.frontend.contact.button'))->class('form__submit') }}
      </div>
      {{ html()->form()->close() }}
    <!-- end of block form-->
  </div>



