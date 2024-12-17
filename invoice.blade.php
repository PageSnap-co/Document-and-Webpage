<style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        font-size: 16px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
</style>

<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td style="padding: 0px;">
                            <img src="{{public_path('/images/logo.svg')}}" style="max-width:60px;">
                        </td>

                        <td>
                            Invoice #: {{$invoice->invoice_id}}<br>
                            Date: {{$invoice->updated_at->toFormattedDateString()}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            <b>PageSnap.co (Centil Technology)</b><br>
                            {{config('mail.from.address')}}<br>
                        </td>

                        <td>
                            {{$invoice->subscription->user->name}}<br>
                            {{$invoice->subscription->user->email}}<br>
                            @if (!empty($address))
                            @if ($address['s1'])
                            {{$address['s1']}}<br>
                            @endif
                            @if ($address['s2'])
                            {{$address['s2']}}<br>
                            @endif
                            @if ($address['z'] || $address['c'] || $address['s'])
                            {{$address['z'] ?? ''}}, {{$address['c'] ?? ''}}, {{$address['s'] ?? ''}}<br>
                            @endif
                            @if ($address['ct'])
                            {{$address['ct']}}
                            @endif
                            @endif
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>
                Payment Method
            </td>

            <td>
            </td>
        </tr>

        <tr class="details">
            <td>
                Paypal Monthly Subscription {{$invoice->subscription->subscription_id}}
            </td>

            <td>
            </td>
        </tr>

        <tr class="heading">
            <td>
                Item
            </td>

            <td>
                Price
            </td>
        </tr>

        <tr class="item last">
            <td>
                {{$invoice->subscription->plan->name}} ({{number_format($invoice->subscription->plan->credits, 0, '.', ',')}} credits) - (Transaction ID: {{$invoice->transaction_id}})
            </td>

            <td>
                ${{number_format($invoice->subscription->plan->price, 2, '.', ',')}}
            </td>
        </tr>

        <tr class="total">
            <td></td>

            <td>
                Total: ${{number_format($invoice->subscription->plan->price, 2, '.', ',')}}
            </td>
        </tr>
    </table>
</div>