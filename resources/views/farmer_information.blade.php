<!doctype html>
<html dir="rtl" lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('css/reset.css')}}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{asset('css/data.css')}}"> <!-- Resource style -->
    <script src="{{asset('js/modernizr.js')}}"></script> <!-- Modernizr -->

    <title>بادرام گستر</title>
</head>
<body>
<form class="cd-form floating-labels" action="{{url('/farmer-information')}}" method="post">
    @csrf
    <fieldset>
        <legend> اطلاعات گیاه</legend>

        <div>
            <h4>استان</h4>

            <p class="cd-select icon">
                <select class="budget" name="state">
                    <option value="0">انتخاب استان</option>
                    @foreach($states as $state)
                        <option value="{{$state->id}}">{{$state->state}}</option>
                    @endforeach
                </select>
            </p>
        </div>
        <!--    <div>
                <h4>شهر</h4>

                <p class="cd-select icon">
                    <select class="budget">
                        <option value="0">انتخاب شهر</option>

                    </select>
                </p>
            </div> -->
        <div>
            <h4>نوع کشت</h4>

            <ul class="cd-form-list">
                <li>
                    <input type="radio" class="glasshouse" name="radio_cultivation_type"  value="1" id="cd-radio-1" checked>
                    <label for="cd-radio-1">گلخانه ای</label>
                </li>

                <li>
                    <input type="radio" class="agricultural" name="radio_cultivation_type" value="2" id="cd-radio-2">
                    <label for="cd-radio-2">زراعی</label>
                </li>

            </ul>
        </div>

        <div class="glasshouse-type">
            <h4>نوع گلخانه</h4>

            <ul class="cd-form-list1">
                <li>
                    <input type="radio" name="radio_glasshouse_type" value="1" id="cd-radio-3" checked>
                    <label for="cd-radio-3">هیدروپونیک</label>
                </li>

                <li>
                    <input type="radio" name="radio_glasshouse_type" value="2" id="cd-radio-4">
                    <label for="cd-radio-4">خاکی</label>
                </li>

            </ul>
        </div>


        <div class="glasshouse-list">
            <h4>لیست گیاهان گلخانه ای</h4>

            <p class="cd-select icon">
                <select class="budget" name="glasshouse_list">
                    <option value="0">لیست گیاهان</option>
                    @foreach($greenhouse_plants as $plant)
                        <option value="{{$plant->id}}">{{$plant->title}}</option>
                    @endforeach
                </select>
            </p>
        </div>


        <div class="agricultural-list">
            <h4>لیست گیاهان زراعی</h4>

            <p class="cd-select icon">
                <select class="budget" name="agricultural_list">
                    <option value="0">لیست گیاهان</option>
                    @foreach($agricultural_plants as $plant)
                        <option value="{{$plant->id}}">{{$plant->title}}</option>
                    @endforeach

                </select>
            </p>
        </div>


        <div>
            <h4> سن گیاه</h4>

            <ul class="cd-form-list">
                <input type="number" name="plant_age[]" min="0" max="30" step=”3” placeholder="روز" style="border: 1px solid #cfd9db; width: 60px;
height: 30px; margin-right: 10px;"/>
                <input type="number" name="plant_age[]" min="0" max="12" step=”3” placeholder="ماه" style="border: 1px solid #cfd9db; width: 60px;
height: 30px; margin-right: 15px;"/>
                <input type="number" name="plant_age[]" min="0" max="10" step=”3” placeholder="سال" style="border: 1px solid #cfd9db; width: 60px;
height: 30px;margin-right: 15px;"/>
            </ul>
        </div>

        <div>
            <div>
                <h4>آزمون خاک</h4>

                <ul class="cd-form-list2">
                    <li>
                        <input type="radio" class="has-soiltest" name="has_soiltest" value="1" id="cd-radio-5" checked>
                        <label for="cd-radio-5">دارد</label>
                    </li>

                    <li>
                        <input type="radio" class="hasnot-soiltest" name="has_soiltest" value="0" id="cd-radio-6">
                        <label for="cd-radio-6">ندارد</label>
                    </li>

                </ul>
            </div>

            <div class="values-​​of-elements">
                <h4>مقادیر عناصر</h4>

                <ul class="cd-form-list3">
                    @foreach($ValueOfElements  as $element)
                        <li>
                            <input type="text" name="element[]" placeholder="{{$element->title}}"
                                   style="border: 1px solid #cfd9db;
height: 30px; "/>
                        </li>
                    @endforeach

                </ul>
            </div>


            <!--
            <h4>سن گیاه</h4>

                    <ul class="cd-form-list">
                        <li>
                            <input type="checkbox" id="cd-checkbox-1">
                            <label for="cd-checkbox-1">صفر</label>
                        </li>

                        <li>
                            <input type="checkbox" id="cd-checkbox-2">
                            <label for="cd-checkbox-2">یک سال</label>
                        </li>

                        <li>
                            <input type="checkbox" id="cd-checkbox-3">
                            <label for="cd-checkbox-3">دوسال</label>
                        </li>

                        <li>
                            <input type="checkbox" id="cd-checkbox-3">
                            <label for="cd-checkbox-3">سه سال</label>
                        </li>
                    </ul>
                    -->
        </div>

        <div class="icon">
            <label class="cd-label" for="cd-textarea">توضیحات</label>
            <textarea class="message" name="description" id="cd-textarea" required></textarea>
        </div>

        <div>
            <input type="submit" value="ارسال">
        </div>
    </fieldset>
</form>
<script src="{{asset('js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script> <!-- Resource jQuery -->

<script>
    $(document).ready(function () {


        $(".glasshouse").attr('checked', true);
        $('.glasshouse-list').show();
        $('.agricultural-list').hide();
        $('.glasshouse-type').show();
        $('.values-​​of-elements').show();

        $('.glasshouse').click(function () {
            $('.glasshouse-list').show();
            $('.agricultural-list').hide();
            $('.glasshouse-type').show();
        });

        $('.agricultural').click(function () {
            $('.glasshouse-list').hide();
            $('.agricultural-list').show();
            $('.glasshouse-type').hide();
        });

        $('.has-soiltest').click(function () {
            $('.values-​​of-elements').show();
        });

        $('.hasnot-soiltest').click(function () {
            $('.values-​​of-elements').hide();
        });
    });
</script>
</body>
</html>