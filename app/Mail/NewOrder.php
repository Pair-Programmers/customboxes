<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewOrder extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.new_order')->subject('New Order [00'.$this->order->id.']')->with([
            'qoute_form' => $this->order->qoute_form,
            'page_url' => $this->order->page_url,
            'product' => $this->order->product->name,
            'industry' => $this->order->product->industry->name,
            'dimensions' => $this->order->height . ' x ' . $this->order->width . ' x ' . $this->order->depth,
            'unit' => $this->order->unit,
            'material' => $this->order->material,
            'color' => $this->order->color,
            'qty_1' => $this->order->qty_1,
            'qty_2' => $this->order->qty_2,
            'addons' => $this->order->addons,
            'customer_name' => $this->order->customer_name,
            'customer_email' => $this->order->customer_email,
            'customer_phone' => $this->order->customer_phone,
            'customer_note' => $this->order->customer_note,
        ]);
    }
}
