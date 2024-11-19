<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> Redflag Events</title>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="font-family: sans-serif">
    <img class="mb-5" src="https://itcl.s3.eu-west-1.amazonaws.com/businesspadeltour/bpt-logo.png" alt="" height="80" >
    <div style="position: relative; height: 300px">
        <div style="float: left; margin-top: 30px">

            <h2 style="font-size: 40px;"> <span class="color: gray">{{ $title }}</span></h2>
            <p style="font-size: 22px;"><b>{{__('Issue date')}}: </b>{{ $date }}</p>
            <p>&nbsp;</p>
        </div>
        <div style="float: right">
            <div style="width: 450px">
                <div style="height: 60px">
                    &nbsp;
                </div>
                <ul style="list-style: none;padding-right: 0; margin-right: 0; text-align: left">
                    <li  style=" font-size:19px">
                        {{$user->firstname}} {{$user->lastname}}
                    </li>
                    <li  style=" font-size:19px">
                        {{$user->email}}
                    </li>
                    
                    @if ($company)
                        <li  style=" font-size:19px">
                            @if ($company && $company->name)
                            <b>  {{__('Company name')}}: </b>{{$company->name}}
                            @endif
                        </li>
                        <li  style=" font-size:19px">
                            @if ($company && $company->vat)
                            <b> {{__('Company VAT')}}:</b> {{$company->vat}}
                            @endif
                        </li>
                        <li  style=" font-size:19px">
                            @if ($company && $company->street)
                            <b> {{__('Address')}}:</b> {{$company->street}} {{$company->street_number ?? null}}, {{$company->zip ?? null}} {{$company->country ?? null}}
                            @endif
                        </li>
                    @else
                        @if ($user && $user->street)
                        <li  style=" font-size:19px">
                        {{$user->street}}  {{$user->street_number ?? null}}, {{$user->zip ?? null}} {{$user->country ?? null}}
                        </li>
                        @endif
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <br>
    <table class="table table-bordered;font-size: 20px;">
        <tr>
            <th style="width: 280px; text-align: left; font-size: 20px;">{{__('Reference')}}</th>
            <th  style="width: 150px;text-align: left;font-size: 20px; ">{{__('Price')}}</th>
        </tr>
        <tr>
            <td  style="font-size:19px;width: 280px; text-align: left">{{ $invoice->description }}</td>
            
            <td style="font-size:19px;width: 150px;  text-align: left">€{{ $invoice->price }} </td>
        </tr>
        <tr style=" font-size:19px; text-align: left">
            <td style="font-size:19px;width:680px;background-color:white; text-align: left "><b>Total</b></td>
            <td  style="font-size:19px;width: 280px;  text-align: left">
                €{{ $invoice->price * ($invoice->vat ? 1.21 : 1)  }} 
                @if ($invoice->vat)
                {{__('Total incl. VAT')}} (21%: €{{ number_format($invoice->price ,2) }})
                @endif
            </td>
        </tr>
    </table>
    <br/>
    <br/>
    <br/>
    <br/>
        
    
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
        
    
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <ul style="list-style: none;padding-left: 0; margin-left: 0 " class="text-md">
            <li  style=" font-size:19px">
                <b> Redflag Events</b>
            </li>
            <li  style=" font-size:19px">
                {{__('76 bvd Lambermont 1030 Brussels')}}
            </li>
            <li  style=" font-size:19px">
                <b> {{__('N° de TVA')}}:</b> BE 0898.069.649 (BIC:GKCCBEBB)
            </li>
            <li  style=" font-size:19px">
                <b> Email: </b> info@businesspadeltour.be
            </li>
            <li  style=" font-size:19px">
                <b> {{__('IBAN')}}: </b>BE55 1431 2763 6644
            </li>
        </ul>
        
</body>
</html>