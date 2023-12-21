<x-guest-layout>
    <div class="relative overflow-x-auto text-gray-500 dark:text-gray-400 shadow-md sm:rounded-lg">
        <p class="text-lg font-bold">Order Shipped</p>
        <p>Dear {{ $order->user->name }},</p>
        <p>Your order has been shipped!</p>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Product</th>
                    <th class="px-6 py-3">Price</th>
                    <th class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Quantity</th>
                    <th class="px-6 py-3">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->products as $product)
                <tr>
                    <td class="px-6 py-3">{{ $product->name }}</td>
                    <td class="px-6 py-3">{{ $product->price }}</td>
                    <td class="px-6 py-3">{{ $product->pivot->quantity }}</td>
                    <td class="px-6 py-3">{{ $product->price * $product->pivot->quantity }}</td>
                </tr>
                @endforeach
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <td colspan="3" class="text-right py-2">Subtotal:</td>
                    <td class="px-6 py-3">{{ $order->billing_subtotal }}</td>
                </tr>
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <td colspan="3" class="text-right py-2">Discount:</td>
                    <td class="px-6 py-3">{{ $order->billing_discount }}</td>
                </tr>
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <td colspan="3" class="text-right py-2">Tax:</td>
                    <td class="px-6 py-3">{{ $order->billing_tax }}</td>
                </tr>
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <td colspan="3" class="text-right py-2">Total:</td>
                    <td class="px-6 py-3">{{ $order->billing_total }}</td>
                </tr>

            </tbody>
        </table>
    </div>
</x-guest-layout>
