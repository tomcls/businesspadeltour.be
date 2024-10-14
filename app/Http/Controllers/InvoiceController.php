<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function download(Request $request, $id)
    {
        if ($id) {
            $invoice = Invoice::whereId($id)->first();
            $user = $invoice->user;
            $company = $user->company ?? null;
            $total = 0;

            $vat = $invoice->price * 1.21;

            $data = [
                'invoice' => $invoice,
                'title' => __('Invoice') . ': ' . $invoice->invoice_num,
                'date' => $invoice->date_payed_for_humans ?? $invoice->date_created_for_humans ?? null,
                'user' => $user,
                'total' => $total,
                'vat' => $vat,
                'company' => $company
            ];
            $pdf = Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif'])->loadView('invoice', $data);
            return $pdf->download('invoice.pdf');
        }
        return null;
        
    }
}
