<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Market</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Other CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    <x-nav2 />
    <div id="slider">
        <span class="mx-10 font-bold text-green-700 hidden">EXCHANGE RATES</span>
        <span class="mx-10 font-bold text-blue-500 hidden">FRONTEND FOR TONY</span>
        <span class="mx-10 font-bold hidden">FRONTEND FOR TONY</span>
    </div>
    <div class="mt-5 mx-3 p-2 flex gap-5 rounded-full darken">
        <i class="fa fa-search text-xl"></i>
        <input class="w-full text-normal" placeholder="Search for music artists, investors & business profiles on valyou x" />
    </div>
    <div class="mt-5 mx-3 p-4 grid grid-cols-7 rounded-xl darken text-normal">
        <h1># Rank</h1>
        <h1>Artist</h1>
        <h1>Change %</h1>
        <h1>Stock Price</h1>
        <h1>Market Value</h1>
        <h1>Dividends</h1>
        <h1 class="flex justify-between">Trade <i class="fa fa-info text-xl"></i></h1>
    </div>
    @foreach($artists as $artist)
    <div class="mt-5 mx-3 p-4 grid grid-cols-7 items-center rounded-xl darken text-normal">
        <h1>{{ $loop->index + 1 }}</h1>
        <div class="flex gap-2 items-center">
            <img class="rounded-full p-5" src={{ $artist->img }}/>
            <div>
                <h1>{{ $artist->name }}</h1>
                <p>{{ $artist->role }}</p>
            </div>
        </div>
        <h1>
            <span class="bg-[#1CEA2C] text-sm text-white rounded p-2">{{ $artist->changePercent }}%</span>
        </h1>
        <h1 class="text-[#1CEA2C]">{{ $artist->stockPrice }}</h1>
        <h1>${{ $artist->marketValue }}</h1>
        <h1>0.0100%</h1>
        <button class="bg-black text-white font-bold rounded p-2">INVEST IN ARTIST</button>
    </div>
    @endforeach
    <div class="mt-20"></div>
</body>
<script src="{{ URL::asset('js/slider.js') }}"></script>
</html>
