<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iran Tik | Buy Ticket</title>
    <link rel="stylesheet" href="/css/bootstrap.rtl.min.css">
    <script src="/js/fabric.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="my-5 mx-auto card" style="width: 500px;">
    <div class="card-body">
        <div class="alert alert-primary text-center" role="alert">
            <div>{{$sans->event->name}}</div>
            <div>{{$sans->date}}</div>
        </div>
        <h3 class="text-center">اطلاعات خریدار</h3>
        <label for="customerName" class="form-label">نام</label>
        <input type="text" id="customerName" class="form-control">
    </div>
</div>

<div style="width: max-content;" class="mx-auto">
    <div style="background-color: white; width: max-content;">
        <canvas width="800" height="500" id="c"></canvas>
        <script>
            if(screen.width < 800){
                document.getElementById('c').width = 260;
                document.getElementById('c').height = 163;
            }
        </script>
    </div>
</div>
<div class="m-3 mb-5 card">
    <div class="card-body">
        <div class="m-2 text-center">
            <span class="mx-2"><span class="bg-success text-success">RR</span> سبز = قابل انتخاب </span>
            <span class="mx-2"><span class="bg-danger text-danger">RR</span> قرمز = رزرو شده </span>
        </div>
        <ul class="nav nav-tabs justify-content-center mt-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">جایگاه A</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">جایگاه B</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">جایگاه C</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="row">
                    @foreach ($aChairs as $c)
                        <button onclick="proccessBuy({{$c->id}})" class="col-1 btn btn-sm @if(in_array($c->id, $reserveds)) btn-danger @else btn-success @endif m-1" @if(in_array($c->id, $reserveds)) disabled @endif>{{$c->id}}</button>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="row">
                    @foreach ($bChairs as $c)
                        <button onclick="proccessBuy({{$c->id}})" class="col-1 btn btn-sm @if(in_array($c->id, $reserveds)) btn-danger @else btn-success @endif m-1" @if(in_array($c->id, $reserveds)) disabled @endif>{{$c->id}}</button>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="row">
                    @foreach ($cChairs as $c)
                        <button onclick="proccessBuy({{$c->id}})" class="col-1 btn btn-sm @if(in_array($c->id, $reserveds)) btn-danger @else btn-success @endif m-1" @if(in_array($c->id, $reserveds)) disabled @endif>{{$c->id}}</button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>

let customerName = document.getElementById('customerName');

function proccessBuy(chair){
    if(customerName.value && customerName.value != ''){
        window.location = `/sans/{{$sans->id}}/submit-buy/chair/${chair}/name/${customerName.value}`
    } else {
        alert('لطفا نام خود را وارد کنید ')
    }
}

let canvas = new fabric.Canvas('c');

function load(fId){
    fetch('/salon.json')
    .then(r => r.json())
    .then(data => {
        canvas.loadFromJSON(data, function() {
        });
    })
}

load();
if(screen.width < 800){
        canvas.setZoom(0.325);
    }
</script>
</body>
</html>