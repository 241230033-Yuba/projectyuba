@extends('app')

@section('title', 'Donasi')

@section('content')

<div class="min-h-screen bg-gray-900 py-12 px-6">

    <div class="max-w-6xl mx-auto">

        <h1 class="text-3xl font-bold text-white mb-8 text-center">
            Pilih Campaign Donasi
        </h1>

        <div class="grid md:grid-cols-3 gap-6">

            @foreach($campaigns as $c)
            <div class="bg-gray-800 rounded-2xl p-6 shadow-lg">

                <!-- Judul -->
                <h2 class="text-xl font-bold text-blue-400 mb-2">
                    {{ $c->title }}
                </h2>

                <!-- Deskripsi -->
                <p class="text-gray-300 text-sm mb-4">
                    {{ $c->description }}
                </p>

                <!-- Progress -->
                @php
                    $percent = $c->target > 0 ? ($c->collected / $c->target) * 100 : 0;
                @endphp

                <div class="w-full bg-gray-700 h-3 rounded-full mb-2">
                    <div class="bg-blue-500 h-3 rounded-full"
                        style="width: {{ $percent }}%">
                    </div>
                </div>

                <p class="text-xs text-gray-400 mb-4">
                    Rp {{ number_format($c->collected) }} / Rp {{ number_format($c->target) }}
                </p>

                <!-- Form Donasi -->
                <input type="text" placeholder="Nama (opsional)"
                    class="w-full mb-2 px-3 py-2 rounded bg-gray-900 text-white border border-gray-700"
                    id="name-{{ $c->id }}">

                <input type="number" placeholder="Nominal Donasi"
                    class="w-full mb-3 px-3 py-2 rounded bg-gray-900 text-white border border-gray-700"
                    id="amount-{{ $c->id }}">

                <button onclick="bayar({{ $c->id }})"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg transition">
                    Donasi Sekarang
                </button>

            </div>
            @endforeach

        </div>

    </div>

</div>

<!-- MIDTRANS -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

<script>
function bayar(campaignId) {
    let name = document.getElementById('name-' + campaignId).value;
    let amount = document.getElementById('amount-' + campaignId).value;

    if (!amount || amount < 1000) {
        alert("Minimal donasi Rp1.000");
        return;
    }

    fetch('/donasi/pay', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            campaign_id: campaignId,
            name: name,
            amount: amount
        })
    })
    .then(res => res.json())
    .then(data => {
        snap.pay(data.snap_token, {
            onSuccess: function(result){
                alert("Donasi berhasil!");
                location.reload();
            },
            onPending: function(result){
                alert("Menunggu pembayaran...");
            },
            onError: function(result){
                alert("Terjadi kesalahan");
            }
        });
    });
}
</script>

@endsection