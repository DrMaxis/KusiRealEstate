PROPERTY_TAX_RATE = 0.015;
HOME_INSURANCE_RATE = 0.0055;
MORTGAGE_YEARS = 15;
STATE_TAX = 0.0035;
INTANGIBLE_TAX = 0.002;

HOME_PRICE_MIN = 1000;
HOME_PRICE_MAX = 2000000;

DOWN_PAYMENT_MIN = 0;
DOWN_PAYMENT_MAX = 100;

MORTGAGE_INTEREST_MIN = 0.125;
MORTGAGE_INTEREST_MAX = 20.000;

GLOBAL_PROPERTY_TAX = null;
GLOBAL_HOME_INSURANCE = null;

GLOBAL_OWNER_TITLE_INSURANCE = null;
GLOBAL_STATE_TAX = null;
GLOBAL_INTANGIBLE_TAX = null;
GLOBAL_SURVEY = null;
GLOBAL_INTEREST_ESTIMATED_PER_DAY = null;
GLOBAL_INTEREST_ESTIMATED = null;
GLOBAL_REAL_ESTATE_TAX_ESCROW = null;
GLOBAL_INSURANCE_ESCROW = null;
GLOBAL_LESS_TOTAL_LOAN_AMOUNT = null;
GLOBAL_PLUS_APPROX_CLOSING_FEES = null;
GLOBAL_PLUS_APPROX_PREPAID = null;

$(function () {
    initCharts();

    $('#pdfForm').on('submit', function () {
        var InputParameters = {
            homePrice: $('#home-price').val(),
            downPayment: $('#down-payment').val(),
            downPaymentPercent: $('#down-payment-percent').val(),
            mortgageInterest: $('#mortage-interest').val(),
            periodsNumber: $('#periodsNumber').val(),
            propertyTax: $('#propertyTax').val(),
            homeInsurance: $('#homeInsurance').val(),
            condo: $('#condo').val(),
            monthlyPayment: $('#MonthlyPayment').html(),

            underwritingFee: $('#underwritingFee').val(),
            originationFee: $('#originationFee').val(),
            creditReport: $('#creditReport').val(),
            appraisals: $('#appraisals').val(),
            floodLifeLoanFee: $('#floodLifeLoanFee').val(),
            taxServiceFee: $('#taxServiceFee').val(),

            lenderTitleInsurance: $('#lenderTitleInsurance').val(),
            ownerTitleInsurance: $('#ownerTitleInsurance').val(),
            closingEscrow: $('#closingEscrow').val(),
            recordingFeeMRTG: $('#recordingFeeMRTG').val(),
            recordingFeeReleases: $('#recordingFeeReleases').val(),
            stateTax: $('#stateTax').val(),
            intangibleTax: $('#intangibleTax').val(),
            survey: $('#survey').val(),
            approxCostClosingFees: $('#approxCostClosingFees').html(),

            interestEstimatedDays: $('#interestEstimatedDays').val(),
            interestEstimatedPerDay: $('#interestEstimatedPerDay').val(),
            interestEstimated: $('#interestEstimated').val(),
            realEstateTaxEscrowMonths: $('#realEstateTaxEscrowMonths').val(),
            realEstateTaxEscrow: $('#realEstateTaxEscrow').val(),
            insuranceEscrowMonths: $('#insuranceEscrowMonths').val(),
            insuranceEscrow: $('#insuranceEscrow').val(),
            approxCostPrepaid: $('#approxCostPrepaid').html(),

            purchasePrice: $('#purchasePrice').val(),
            lessEarnestMoney: $('#lessEarnestMoney').val(),
            lessTotalLoanAmount: $('#lessTotalLoanAmount').val(),
            lessSecondaryFinancingAmount: $('#lessSecondaryFinancingAmount').val(),
            plusApproxClosingFees: $('#plusApproxClosingFees').val(),
            plusApproxPrepaid: $('#plusApproxPrepaid').val(),
            lessCostPdBy: $('#lessCostPdBy').val(),
            lessItemsPaidOutside: $('#lessItemsPaidOutside').val(),
            totalApproxFunds: $('#totalApproxFunds').html()
        };

        $('#inputParameters').val(JSON.stringify(InputParameters));
    });

    $(document).foundation({
        slider: {
            on_change: function () {
                calculateMortgage();
            }
        }
    });

    $('table input[type=text]').on('change', function () {
        if (this.id == 'interestEstimatedDays') {
            $(this).val(getInt(this.id));
            return;
        }
        if (this.id == 'realEstateTaxEscrowMonths') {
            $(this).val(getInt(this.id));
            return;
        }
        if (this.id == 'insuranceEscrowMonths') {
            $(this).val(getInt(this.id));
            return;
        }
        if (this.id == 'interestEstimatedPerDay') {
            $(this).val(getFloat(this.id));
            return;
        }
        $(this).val(numeral(getFloat(this.id)).format('0,0.00'));

    });

    $('#home-price').on('change', function () {
        var value = parseInt($('#home-price').val().replace('$', '').replace(',', '').replace(',', ''));

        value = Math.min(HOME_PRICE_MAX, value);
        value = Math.max(HOME_PRICE_MIN, value);

        $('#home-price-slider').foundation('slider', 'set_value', value);
    });
    $('#purchasePrice').on('change', function () {
        var value = parseInt($('#purchasePrice').val().replace('$', '').replace(',', '').replace(',', ''));

        value = Math.min(HOME_PRICE_MAX, value);
        value = Math.max(HOME_PRICE_MIN, value);

        $('#home-price-slider').foundation('slider', 'set_value', value);
    });

    $('#down-payment').on('change', function () {
        var value = parseFloat($('#down-payment').val().replace('$', '').replace(',', '').replace(',', ''));
        var homePrice = $('#home-price-slider').attr('data-slider');
        var valuePercent = parseInt(value / (homePrice / 100));
        if (valuePercent < DOWN_PAYMENT_MIN) {
            valuePercent = DOWN_PAYMENT_MIN;
        }
        if (valuePercent > DOWN_PAYMENT_MAX) {
            valuePercent = DOWN_PAYMENT_MAX;
        }
        $('#down-payment-slider').foundation('slider', 'set_value', valuePercent);
    });

    $('#down-payment-percent').on('change', function () {
        var value = parseInt($('#down-payment-percent').val().replace('%', '').replace(',', '').replace(',', ''));
        if (value < DOWN_PAYMENT_MIN) {
            value = DOWN_PAYMENT_MIN;
        }
        if (value > DOWN_PAYMENT_MAX) {
            value = DOWN_PAYMENT_MAX;
        }
        $('#down-payment-slider').foundation('slider', 'set_value', value);
    });

    $('#mortage-interest').on('change', function () {
        var value = parseFloat(parseFloat($('#mortage-interest').val().replace('%', '').replace(',', '').replace(',', '')).toFixed(3));
        if (value < MORTGAGE_INTEREST_MIN) {
            value = MORTGAGE_INTEREST_MIN;
        }
        if (value > MORTGAGE_INTEREST_MAX) {
            value = MORTGAGE_INTEREST_MAX;
        }
        $('#mortage-interest-slider').foundation('slider', 'set_value', value);
    });

    $('#propertyTax').on('change', function () {
        var value = parseInt($('#propertyTax').val().replace('$', '').replace(',', '').replace(',', ''));
        value = Math.max(0, value);
        GLOBAL_PROPERTY_TAX = value;
        $('#propertyTax').val(numeral(value).format('$0,0'));
    });

    $('#homeInsurance').on('change', function () {
        var value = parseInt($('#homeInsurance').val().replace('$', '').replace(',', '').replace(',', ''));
        value = Math.max(0, value);
        GLOBAL_HOME_INSURANCE = value;
        $('#homeInsurance').val(numeral(value).format('$0,0'));
    });

    $('#condo').on('change', function () {
        var value = parseInt($('#condo').val().replace('$', '').replace(',', '').replace(',', ''));
        value = Math.max(0, value);
        $('#condo').val(numeral(value).format('$0,0'));
    });

    $('#periodsNumber').on('change', function () {
        var value = getInt(this.id);
        value = Math.max(0, value);
        if (isNaN(value)) {
            value = 36;
        }
        $('#' + this.id).val(value);
        $('#yearsNumber').val((value / 12).toFixed(2));
    });

    $('#yearsNumber').on('change', function () {
        var value = getInt(this.id);
        value = Math.max(0, value);
        if (isNaN(value)) {
            value = 3;
        }
        $('#' + this.id).val(value);
        $('#periodsNumber').val(value * 12);
    });

    $('#ownerTitleInsurance').on('change', function () {
        var value = getFloat(this.id);
        value = Math.max(0, value);
        GLOBAL_OWNER_TITLE_INSURANCE = value;
        $('#' + this.id).val(numeral(value).format('0,0.00'));
    });

    $('#stateTax').on('change', function () {
        var value = getFloat(this.id);
        value = Math.max(0, value);
        GLOBAL_STATE_TAX = value;
        $('#' + this.id).val(numeral(value).format('0,0.00'));
    });

    $('#intangibleTax').on('change', function () {
        var value = getFloat(this.id);
        value = Math.max(0, value);
        GLOBAL_INTANGIBLE_TAX = value;
        $('#' + this.id).val(numeral(value).format('0,0.00'));
    });

    $('#survey').on('change', function () {
        var value = getFloat(this.id);
        value = Math.max(0, value);
        GLOBAL_SURVEY = value;
        $('#' + this.id).val(numeral(value).format('0,0.00'));
    });

    $('#interestEstimatedPerDay').on('change', function () {
        var value = getFloat(this.id);
        value = Math.max(0, value);
        GLOBAL_INTEREST_ESTIMATED_PER_DAY = value;
        $('#' + this.id).val(numeral(value).format('0,0.000000'));
    });

    $('#interestEstimated').on('change', function () {
        var value = getFloat(this.id);
        value = Math.max(0, value);
        GLOBAL_INTEREST_ESTIMATED = value;
        $('#' + this.id).val(numeral(value).format('0,0.00'));
    });

    $('#realEstateTaxEscrow').on('change', function () {
        var value = getFloat(this.id);
        value = Math.max(0, value);
        GLOBAL_REAL_ESTATE_TAX_ESCROW = value;
        $('#' + this.id).val(numeral(value).format('0,0.00'));
    });

    $('#insuranceEscrow').on('change', function () {
        var value = getFloat(this.id);
        value = Math.max(0, value);
        GLOBAL_INSURANCE_ESCROW = value;
        $('#' + this.id).val(numeral(value).format('0,0.00'));
    });

    $('#lessTotalLoanAmount').on('change', function () {
        var value = getFloat(this.id);
        value = Math.max(0, value);
        GLOBAL_LESS_TOTAL_LOAN_AMOUNT = value;
        $('#' + this.id).val(numeral(value).format('0,0.00'));
    });

    $('#plusApproxClosingFees').on('change', function () {
        var value = getFloat(this.id);
        value = Math.max(0, value);
        GLOBAL_PLUS_APPROX_CLOSING_FEES = value;
        $('#' + this.id).val(numeral(value).format('0,0.00'));
    });

    $('#plusApproxPrepaid').on('change', function () {
        var value = getFloat(this.id);
        value = Math.max(0, value);
        GLOBAL_PLUS_APPROX_PREPAID = value;
        $('#' + this.id).val(numeral(value).format('0,0.00'));
    });

    $('#home-price-slider').foundation('slider', 'set_value', 250000);
    $('#down-payment-slider').foundation('slider', 'set_value', 20);
    $('#mortage-interest-slider').foundation('slider', 'set_value', 4);

});

function calculateMortgage() {
    var homePrice = $('#home-price-slider').attr('data-slider'),
        downPaymentPercent = $('#down-payment-slider').attr('data-slider') / 100,
        downPayment = homePrice * downPaymentPercent,
        mortgageInterest = $('#mortage-interest-slider').attr('data-slider') / 100,
        periodsNumber = $('#periodsNumber').val(),
        condo = parseInt($('#condo').val().replace('$', '').replace(',', '').replace(',', '')),
        principalInterest, principalInterest_, propertyTax, homeInsurance
        ;

    $('#home-price').val(numeral(homePrice).format('$0,0'));
    $('#purchasePrice').val(numeral(homePrice).format('0,0.00'));
    $('#down-payment-percent').val(numeral(downPaymentPercent).format('0%'));
    $('#down-payment').val(numeral(downPayment).format('$0,0'));
    $('#mortage-interest').val(numeral(mortgageInterest).format('0.000%'));


    var periodPercent = mortgageInterest / 12;

    var lessTotalLoanAmount = GLOBAL_LESS_TOTAL_LOAN_AMOUNT ? GLOBAL_LESS_TOTAL_LOAN_AMOUNT : homePrice - downPayment;
    $('#lessTotalLoanAmount').val(numeral(lessTotalLoanAmount).format('0,0.00'));

    principalInterest_ = parseFloat((periodPercent + periodPercent / (Math.pow((1 + periodPercent), periodsNumber) - 1)));
    principalInterest = principalInterest_ * (lessTotalLoanAmount);

    $('#principal-interest').html(numeral(parseInt(principalInterest)).format('$0,0'));

    if (GLOBAL_PROPERTY_TAX) {
        propertyTax = GLOBAL_PROPERTY_TAX;
    } else {
        propertyTax = homePrice * PROPERTY_TAX_RATE;
    }
    $('#propertyTax').val(numeral(parseInt(propertyTax)).format('$0,0'));
    $('#property-tax').html(numeral(parseInt(propertyTax / 12)).format('$0,0'));

    if (GLOBAL_HOME_INSURANCE) {
        homeInsurance = GLOBAL_HOME_INSURANCE;
    } else {
        homeInsurance = homePrice * HOME_INSURANCE_RATE;
    }
    $('#homeInsurance').val(numeral(parseInt(homeInsurance)).format('$0,0'));
    $('#home-insurance').html(numeral(parseInt(homeInsurance / 12)).format('$0,0'));

    $('#HoaFees').html(numeral(parseInt(condo)).format('$0,0'));

    if (parseInt(condo) > 0) {
        $('.legend4').show();
    } else {
        $('.legend4').hide();
    }

    var MonthlyPayment = parseInt(principalInterest) + parseInt(propertyTax / 12) + parseInt(homeInsurance / 12) + parseInt(condo);
    $('#MonthlyPayment').html(numeral(parseInt(MonthlyPayment)).format('$0,0'));

    window.MonthlyCalculation = {
        principalInterest: parseInt(principalInterest) > 0 ? parseInt(principalInterest) : 0,
        propertyTax: Math.max(parseInt(propertyTax / 12), 0),
        homeInsurance: Math.max(parseInt(homeInsurance / 12), 0),
        condo: Math.max(parseInt(condo), 0)
    };


    renderDoughnutChart();
}


function initCharts() {
    var doughnutData = [
              {
            value: 1000,
            color: "#4688f1",
            highlight: "#4a8efb",
            label: "Principal & Interest"
        },
        {
            value: 100,
            color: "#e8453c",
            highlight: "#d63f37",
            label: "Property Tax"
        },
        {
            value: 1000,
            color: "#f9bb2d",
            highlight: "#e6ad2b",
            label: "Home Insurance"
        },
        {
            value: 1000,
            color: "#a2acab",
            highlight: "#D0D5D5",
            label: "HOA Fees"
        },
    ];

    var ctx = document.getElementById("doughnutChart").getContext("2d");
    window.doughnutChartObject = new Chart(ctx).Doughnut(doughnutData, {
        responsive: true,
        animation: false,
        percentageInnerCutout: 65
    });
}

function renderDoughnutChart() {
    if ((typeof window.doughnutChartObject) == 'undefined') {
        return;
    }

    window.doughnutChartObject.segments[0].value = window.MonthlyCalculation.principalInterest;
    window.doughnutChartObject.segments[1].value = window.MonthlyCalculation.propertyTax;
    window.doughnutChartObject.segments[2].value = window.MonthlyCalculation.homeInsurance;
    window.doughnutChartObject.segments[3].value = window.MonthlyCalculation.condo;
    window.doughnutChartObject.update();
}

function ownerTitleInsuranceFunc(amt) {
    if (amt <= 17000) {
        return "100.00";
    }
    else if (amt <= 30000) {
        var amt1 = thousands(amt, 0);
        var value = (amt1 * 5.75);
        return roundit(value);
    }
    else if (amt <= 100000) {
        var amt1 = thousands(amt, 0);
        var value = (amt1 * 5.75);
        return roundit(value);
    }
    else if (amt <= 1000000) {
        var amt1 = thousands(amt, 100000);
        var value = (575 + (amt1 * 5.00));
        return roundit(value);
    }
    else if (amt <= 5000000) {
        var amt1 = thousands(amt, 1000000);
        var value = (5075 + (amt1 * 2.50));
        return roundit(value);
    }
    else if (amt <= 10000000) {
        var amt1 = thousands(amt, 5000000);
        var value = (15075 + (amt1 * 2.25));
        return roundit(value);
    }
    else if (amt > 10000000) {
        var amt1 = thousands(amt, 10000000);
        var value = (26325 + (amt1 * 2.00));
        return roundit(value);
    }
    else if (amt > 30000000) {
        var amt1 = thousands(amt, 10000000);
        var value = (26325 + (amt1 * 2.00));
        return roundit(value);
    }
}

function roundit(what) {
    what = what + '';
    var places = 2
    var iplaces = 6
    var pad = ' '
    var xx = what.indexOf('.')
    var l = what.length
    var zstr = '0000000000000000000000'
    var theInt = ''
    var theFrac = ''
    var theNo = ''
    rfac = ''
    rfacx = 0
    whatx = 0
    var xt = parseInt(places) + 1
    var rstr = '' + zstr.substring(1, xt)
    var rfac = '.' + rstr + '5'
    var rfacx = parseFloat(rfac)
    if (xx == -1) {
        // even dollar amount - no decimals
        theFrac = zstr
        theInt = what
    }
    else if (xx == 0) {
        theInt = '0'
        whatx = 0 + parseFloat(what) + parseFloat(rfacx)
        what = whatx + zstr
        theFrac = '' + what.substring(1, what.length)
    }
    else {
        theInt = what.substring(0, xx)
        whatx = parseFloat(what) + rfacx
        what = '' + whatx + zstr
        theFrac = '' + what.substring(xx + 1, xx + 1 + parseInt(places))
        var astr = 'places = ' + places
    }

    // theInt is the integer, theFrac is the decimals
    // round up to 0, 3, 5 or 8
    first = theFrac.substring(0, 1)
    round = theFrac.substring(2, 1)
    //special cases for 09 and 99 due to string consideration
    if (theFrac == 09) {
        // 09 special
        theFrac = '10'
    }
    else if (theFrac == 99) {
        // 99 special
        theFrac = '00'
        theInt = parseInt(theInt) + 1
        theInt = '' + theInt
    }
    else if (round == 2 || round == 4 || round == 7 || round == 9) {
        // add 1 cent
        //alert('the first = ' + first + '\nround = ' + round)
        if (first == 0) {
            theFrac = parseInt(theFrac) + 1
            theFrac = '0' + parseInt(theFrac)
        }
        else {
            //alert('round 1 cent w/o a 0')
            theFrac = parseInt(theFrac) + 1

        }
        theFrac = '' + theFrac
        //alert('add 1 cent\nthe first = ' + first + '\nround = ' + round + '\ntheFrac = ' + theFrac)
    }
    else if (round == 1 || round == 6) {					// add 2 cents
        if (first == 0) {
            theFrac = parseInt(theFrac) + 2
            theFrac = '0' + parseInt(theFrac)
        }
        else {
            theFrac = parseInt(theFrac) + 2
        }
        theFrac = '' + theFrac
        //alert('add 2 cents\nthe first = ' + first + '\nround = ' + round + '\ntheFrac = ' + theFrac)
    }
    else {
        // no rounding required
    }
    //alert('theInt= ' + theInt + '\ntheFrac= ' + theFrac + '\nwhat= ' + what + '\nwhatx= ' + whatx)
    theFrac = theFrac.substring(0, parseInt(places))
    var dif = iplaces - theInt.length
    var ii = 0
    var padstr = ''
    for (ii = 0; ii < dif; ii++) {
        padstr += pad
    }
    theNo = padstr + theInt + '.' + theFrac
    return theNo;
}

function thousands(amt, base) {
    var amt1 = ((amt - base) / 1000)
    var amt2 = parseInt(((amt - base) / 1000))
    if (amt1 > amt2) {
        amt1 = amt2 + 1
    }
    return (amt1);
}

function getFloat(selector) {
    var value = $('#' + selector).val();
    if (value == '') {
        value = $('#' + selector).html();
    }
    value = value.replace(',', '').replace(',', '').replace('$', '');
    return parseFloat(value);
}

function getInt(selector) {
    var value = $('#' + selector).val();
    if (value == '') {
        value = $('#' + selector).html();
    }
    value = value.replace(',', '').replace(',', '').replace('$', '');
    return parseInt(value);
}