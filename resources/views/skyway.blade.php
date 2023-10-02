<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.webrtc.ecl.ntt.com/skyway-latest.js"></script>
</head>

<body class="font-sans antialiased bg-gray-100">
    <!-- Page Heading -->
    @include('layouts.navigation')

    <!-- バリデーションエラーの表示に使用-->
    <x-errors id="errors" class="bg-blue-500 rounded-lg">{{ $errors }}</x-errors>
    <!-- バリデーションエラーの表示に使用-->

    <!--全エリア[START]-->
    <div class="flex bg-gray-100">

        <!--左エリア[START]-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.webrtc.ecl.ntt.com/skyway-latest.js"></script>
        <!-- Include the following line to use Tailwind CSS -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        {{-- 
        <body class="bg-gray-100"> --}}
        <div class="container mx-auto py-10">
            <div class="grid grid-cols-3 gap-6">
                <div class="col-span-2">
                    <div class="bg-white p-4 rounded shadow h-screen">
                        <video id="my-video" class="w-full rounded" autoplay muted playsinline></video>
                        <p id="my-id" class="mt-2 font-semibold"></p>
                        <input id="their-id" class="w-full p-2 mt-2 border rounded" placeholder="相手のID">
                        <button id="make-call"
                            class="block w-full mt-4 bg-blue-500 text-white rounded p-2 hover:bg-blue-600">発信</button>
                        <button id="share-screen"
                            class="block w-full mt-2 bg-green-500 text-white rounded p-2 hover:bg-green-600">画面共有</button>
                        <button id="stop-screen"
                            class="block w-full mt-2 bg-red-500 text-white rounded p-2 hover:bg-red-600">共有停止</button>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-white p-4 rounded shadow h-screen">
                        <video id="their-video" class="w-full rounded" autoplay muted playsinline></video>
                        {{-- <ul id="output" class="mt-4 h-96 overflow-y-auto space-y-2"></ul> --}}
                        <div>
                            <p>年齢：{{ $exam->age }}</p>
                            <p>性別：{{ $exam->gender }}</p>
                            <p>主訴：{{ $exam->chief_complaint }}</p>
                            <p>既往歴：{{ $exam->medical_history }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- footer --}}
            @include('layouts.footer')

            <script>
                const peer = new Peer({
                    key:"{{ $skywayApiKey }}",
                    debug: 3
                });

                peer.on('open', () => {
                    document.getElementById('my-id').textContent = `Your ID: ${peer.id}`;
                });

                let localStream;
                let screenStream;

                navigator.mediaDevices.getUserMedia({
                        video: true,
                        audio: true
                    })
                    .then(stream => {
                        const videoElm = document.getElementById('my-video');
                        videoElm.srcObject = stream;
                        videoElm.play();
                        localStream = stream;
                    }).catch(error => {
                        console.error('mediaDevice.getUserMedia() error:', error);
                        return;
                    });

                document.getElementById('make-call').onclick = () => {
                    const theirID = document.getElementById('their-id').value;
                    const mediaConnection = peer.call(theirID, localStream);
                    setEventListener(mediaConnection);
                };

                document.getElementById('share-screen').onclick = async () => {
                    try {
                        screenStream = await navigator.mediaDevices.getDisplayMedia({
                            video: true
                        });
                        const videoElm = document.getElementById('my-video');
                        videoElm.srcObject = screenStream;
                        videoElm.play();
                    } catch (error) {
                        console.error('getDisplayMedia() error:', error);
                    }
                };

                document.getElementById('stop-screen').onclick = () => {
                    if (screenStream) {
                        const tracks = screenStream.getTracks();
                        tracks.forEach(track => track.stop());
                        const videoElm = document.getElementById('my-video');
                        videoElm.srcObject = localStream;
                        videoElm.play();
                    }
                };

                const setEventListener = mediaConnection => {
                    mediaConnection.on('stream', stream => {
                        const videoElm = document.getElementById('their-video');
                        videoElm.srcObject = stream;
                        videoElm.play();
                    });
                }

                peer.on('call', mediaConnection => {
                    mediaConnection.answer(localStream);
                    setEventListener(mediaConnection);
                });

                peer.on('error', err => {
                    alert(err.message);
                });

                peer.on('close', () => {
                    alert('通信が切断しました。');
                });
            </script>

</body>

</html>
