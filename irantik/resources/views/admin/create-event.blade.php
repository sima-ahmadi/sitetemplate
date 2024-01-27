@extends('layout.admin')
@section('content')
<link rel="stylesheet" href="/css/jalalidatepicker.min.css">
<script src="/js/jalalidatepicker.min.js"></script>
<h3 class="mb-3">کنسرت جدید</h3>
<form method="post" action="/admin/event/create" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">نام</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="نام" required>
  </div>
  <div class="mb-3">
    <label for="salon" class="form-label">سالن</label>
    <input type="text" class="form-control" id="salon" name="salon" placeholder="سالن" required>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">عکس</label>
    <input type="file" class="form-control" id="image" name="image" required>
  </div>
  <div class="mb-3">
    <input type="hidden" name="sanses" id="sansesInp">
    <h5>سانس ها</h5>
    <div id="sansesCont"></div>
    <div class="card m-1" id="newSansCont" hidden>
        <div class="card-body">
            <input data-jdp class="form-control" id="newSansInp">
        </div>
    </div>
    <button type="button" class="btn btn-sm btn-primary" id="newSansBtn">افزودن سانس</button>
  </div>
  <div class="mb-3">
    <h5>قیمت ها</h5>
    <div class="row">
        <div class="mb-3 col-12 col-md-4">
            <label for="a_price" class="form-label">جایگاه A</label>
            <input type="number" min="0" class="form-control" id="a_price" name="a_price" placeholder="قیمت" required>
        </div>
        <div class="mb-3 col-12 col-md-4">
            <label for="b_price" class="form-label">جایگاه B</label>
            <input type="number" min="0" class="form-control" id="b_price" name="b_price" placeholder="قیمت" required>
        </div>
        <div class="mb-3 col-12 col-md-4">
            <label for="c_price" class="form-label">جایگاه C</label>
            <input type="number" min="0" class="form-control" id="c_price" name="c_price" placeholder="قیمت" required>
        </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">ذخیره</button>
</form>
<script>
    jalaliDatepicker.startWatch({time: true});

    let newSansCont = document.getElementById('newSansCont');
    let newSansInp = document.getElementById('newSansInp');
    let newSansBtn = document.getElementById('newSansBtn');
    let sansesCont = document.getElementById('sansesCont');
    let sansesInp = document.getElementById('sansesInp');

    let isAddingNewSans = false;
    let sanses = [];

    newSansBtn.addEventListener('click', function(e){
        if(isAddingNewSans){
            if(newSansInp.value && newSansInp.value != ''){
                sanses.push(newSansInp.value);
                newSansCont.hidden = true;
                isAddingNewSans = false;
                newSansBtn.innerHTML = 'افزودن سانس';
                newSansBtn.classList.add('btn-primary');
                newSansBtn.classList.remove('btn-success');
                sansesInp.value = JSON.stringify(sanses);
                renderSanses();
                newSansInp.value = '';
            } else {
                alert('لطفا تاریخ را انتخاب کنید');
            }
        } else {
            newSansCont.hidden = false;
            isAddingNewSans = true;
            newSansBtn.innerHTML = 'ذخیره';
            newSansBtn.classList.remove('btn-primary');
            newSansBtn.classList.add('btn-success');
        }
    });
    
    function renderSanses(){
        sansesCont.innerHTML = '';
        sanses.forEach(s => {
            sansesCont.innerHTML += `
            <div class="card m-1">
                <div class="card-body">
                    ${s}
                </div>
            </div>
            `;
        });
    }
</script>
@endsection