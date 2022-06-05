<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="style.css">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"
    >
    </script>
    <title>Rain Protection Notification</title>
</head>
<body class="container pt-3">
    <h1>Rain Protection Notification</h1>

    @php
        $rainDrop = $sensorDetections[2]->RainDrops;
        $cloudy = $sensorDetections[2]->IsCloudy;
    @endphp

    <h4 class="fw-light ps-3 mt-3">Deteksi Sensor</h4>
    <div class="card d-flex row m-1">
        @if ($rainDrop == 1)
            <div class="card col p-3 d-flex align-items-center">
                <img src="{{URL::asset('/image/hujan.png')}}" width="150px" height="150px">
                <h6>Turun Hujan</h6>
            </div>
            @if ($cloudy == 1)
                <div class="card col p-3 d-flex align-items-center ">
                    <img src="{{URL::asset('/image/awan-mendung.png')}}" width="150px" height="150px">
                    <h6>Langit Mendung</h6>
                </div>
            @else
                    <div class="card col p-3 d-flex align-items-center ">
                        <img src="{{URL::asset('/image/awan-cerah.png')}}" width="150px" height="150px">
                        <h6>Langit Cerah</h6>
                    </div>
            @endif
        @else
            <div class="card col p-3 d-flex align-items-center">
                <img src="{{URL::asset('/image/matahari.png')}}"width="200px" height="150px">
                <h6>Tidak Hujan</h6>
            </div>
            @if ($cloudy == 1)
                <div class="card col p-3 d-flex align-items-center ">
                    <img src="{{URL::asset('/image/awan-mendung.png')}}" width="150px" height="150px">
                    <h6>Langit Mendung</h6>
                </div>
            @else
                <div class="card col p-3 d-flex align-items-center ">
                    <img src="{{URL::asset('/image/awan-cerah.png')}}" width="180px" height="150px">
                    <h6>Langit Cerah</h6>
                </div>
            @endif
        @endif
    </div>

    <h4 class="fw-light ps-3 mt-3">Output</h4>
    <div class="card d-flex row m-1">
        @if ($rainDrop == 1)
            @if ($cloudy == 1)
                <div class="card p-3 d-flex align-items-center">
                    <img src="{{URL::asset('/image/close-window.png')}}" width="150px" height="150px">
                    <h6>Jendela Tutup</h6>
                </div>
                <div class="card p-3 d-flex align-items-center">
                    <img src="{{URL::asset('/image/kanopi-tutup-alunotec.jpg')}}" width="150px" height="150px">
                    <h6>Kanopi Tutup</h6>
                </div>
            @else
                <div class="card p-3 d-flex align-items-center">
                    <img src="{{URL::asset('/image/close-window.png')}}" width="150px" height="150px">
                    <h6>Jendela Tutup</h6>
                </div>
                <div class="card p-3 d-flex align-items-center">
                    <img src="{{URL::asset('/image/kanopi-tutup-alunotec.jpg')}}" width="150px" height="150px">
                    <h6>Kanopi Tutup</h6>
                </div>
            @endif
        @else
            @if ($cloudy == 1)
                <div class="card p-3 d-flex align-items-center">
                    <img src="{{URL::asset('/image/close-window.png')}}" width="150px" height="150px">
                    <h6>Jendela Tutup</h6>
                </div>
                <div class="card p-3 d-flex align-items-center">
                    <img src="{{URL::asset('/image/kanopi-tutup-alunotec.jpg')}}" width="150px" height="150px">
                    <h6>Kanopi Tutup</h6>
                </div>
            @else
                <div class="card p-3 d-flex align-items-center">
                    <img src="{{URL::asset('/image/open-window.png')}}" width="150px" height="150px">
                    <h6>Jendela Buka</h6>
                </div>
                <div class="card p-3 d-flex align-items-center">
                    <img src="{{URL::asset('/image/kanopi-buka-alunotec.jpg')}}" width="150px" height="150px">
                    <h6>Kanopi Buka</h6>
                </div>
            @endif
        @endif
    </div>


    <h4 class="mt-5 ms-3">Sample Data : </h4>
    <div class="row ms-0">
        @foreach ($sensorDetections as $sensorDetection)
        <div class="col-sm-2 card d-flex align-items-center m-3 p-3 ">
            <H5>Data : </H5>
            @if ($sensorDetection->RainDrops == 1)
                <div class="card p-3 d-flex align-items-center">
                    <img src="{{URL::asset('/image/hujan.png')}}" width="50px" height="50px">
                    <h6>Turun Hujan</h6>
                </div>
                @if ($sensorDetection->IsCloudy == 1)
                    <div class="card p-3 d-flex align-items-center ">
                        <img src="{{URL::asset('/image/awan-mendung.png')}}" width="50px" height="50px">
                        <h6>Langit Mendung</h6>
                    </div>
                    <h6>Output : </h6>
                    <div class="card p-3 d-flex align-items-center">
                        <img src="{{URL::asset('/image/close-window.png')}}" width="50px" height="50px">
                        <h6>Jendela Tutup</h6>
                    </div>
                @else
                    <div class="card p-3 d-flex align-items-center ">
                        <img src="{{URL::asset('/image/awan-cerah.png')}}" width="50px" height="50px">
                        <h6>Langit Cerah</h6>
                    </div>
                    <h6>Output : </h6>
                    <div class="card p-3 d-flex align-items-center">
                        <img src="{{URL::asset('/image/close-window.png')}}" width="50px" height="50px">
                        <h6>Jendela Tutup</h6>
                    </div>
                @endif
            @else
                <div class="card p-3 d-flex align-items-center">
                    <img src="{{URL::asset('/image/matahari.png')}}"width="70px" height="50px">
                    <h6>Tidak Hujan</h6>
                </div>
                @if ($sensorDetection->IsCloudy == 1)
                    <div class="card p-3 d-flex align-items-center ">
                        <img src="{{URL::asset('/image/awan-mendung.png')}}" width="50px" height="50px">
                        <h6>Langit Mendung</h6>
                    </div>
                    <h6>Output : </h6>
                    <div class="card p-3 d-flex align-items-center">
                        <img src="{{URL::asset('/image/close-window.png')}}" width="50px" height="50px">
                        <h6>Jendela Tutup</h6>
                    </div>
                @else
                    <div class="card p-3 d-flex align-items-center ">
                        <img src="{{URL::asset('/image/awan-cerah.png')}}" width="50px" height="50px">
                        <h6>Langit Cerah</h6>
                    </div>
                    <h6>Output : </h6>
                    <div class="card p-3 d-flex align-items-center">
                        <img src="{{URL::asset('/image/open-window.png')}}" width="50px" height="50px">
                        <h6>Jendela Buka</h6>
                    </div>
                @endif
            @endif
            {{-- <h5>IsClody: {{ $sensorDetection->IsCloudy }}</h5>
            <h5>RainDrops: {{ $sensorDetection->RainDrops }}</h5> --}}
        </div>
        @endforeach
    </div>

</body>
</html>
