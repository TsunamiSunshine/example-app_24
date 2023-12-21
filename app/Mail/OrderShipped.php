<?php

namespace App\Mail;

use App\Http\Controllers\CartController;
use App\Models\Order;
use App\Models\User;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    public $order;
    public $user;
    /**
     * Create a new message instance.
     */
    public function __construct(Order $order, User $user)
    {
        $this->order = $order;
        $this->user = $user;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {

        return new Envelope(
            from: new Address('hyggy@example.com', 'Hygge'),
            subject: 'Hello' . ', '. 'your Order is successfully',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'auth.ordershipped',
        );
    }
    public function build(Order $order)
    {
        $subtotal = $order->getNumbers()->get('newSubtotal');
        $discount = $order->getNumbers()->get('discount');
        $tax = $order->getNumbers()->get('newTax');
        $total = $order->getNumbers()->get('newTotal');
        return $this->from('from@example.com')
                ->view('emails.orders.shipped')
                ->with([
                    'order' => $order,
                        'subtotal' =>  $subtotal,
                        'discount' => $discount,
                        'tax' => $tax,
                        'total' => $total,
                ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
