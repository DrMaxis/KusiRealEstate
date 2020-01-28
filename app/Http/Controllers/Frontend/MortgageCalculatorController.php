<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Frontend\Contact\SendContact;
use App\Http\Requests\Frontend\Contact\SendContactRequest;

/**
 * Class MortgageCalculatorController.
 */
class MortgageCalculatorController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.mortgagecalculator');
    }

    /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function calculateMortgage(Request $request)
    {
        

        return redirect()->route('frontend.index')->withFlashSuccess(__('alerts.frontend.contact.sent'));
    }
}
