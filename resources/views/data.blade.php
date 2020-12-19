<!doctype html>
<html dir="rtl" lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/data.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <title>بادرام گستر</title>
</head>
<body>
<form class="cd-form floating-labels">
    
    <fieldset>
        <legend> اطلاعات گیاه</legend>

        <div>
            <h4>استان</h4>

            <p class="cd-select icon">
                <select class="budget">
                    <option value="0">انتخاب استان</option>
<option value="1">آذربایجان شرقی</option>
<option value="2">آذربایجان غربی</option>
<option value="3">اردبیل</option>
<option value="4">اصفهان</option>
<option value="5">البرز</option>
<option value="6">ایلام</option>
<option value="7">بوشهر</option>
<option value="8">تهران</option>
<option value="9">چهارمحال بختیاری</option>
<option value="10">خراسان جنوبی</option>
<option value="11">خراسان رضوی</option>
<option value="12">خراسان شمالی</option>
<option value="13">خوزستان</option>
<option value="14">زنجان</option>
<option value="15">سمنان</option>
<option value="16">سیستان و بلوچستان</option>
<option value="17">فارس</option>
<option value="18">قزوین</option>
<option value="19">قم</option>
<option value="20">کردستان</option>
<option value="21">کرمان</option>
<option value="22">کرمانشاه</option>
<option value="23">گهگیلویه وبویر احمد</option>
<option value="24">گلستان</option>
<option value="25">گیلان</option>
<option value="26">لرستان</option>
<option value="27">مازندران</option>
<option value="28">مرکزی</option>
<option value="29">هرمزگان</option>
<option value="30">همدان</option>
<option value="31">یزد</option>
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
                    <input type="radio" class="glasshouse" name="radio-button" id="cd-radio-1" checked>
                    <label for="cd-radio-1">گلخانه ای</label>
                </li>

                <li>
                    <input type="radio" class="agricultural" name="radio-button" id="cd-radio-2">
                    <label for="cd-radio-2">زراعی</label>
                </li>

            </ul>
        </div>

        <div class="glasshouse-type">
            <h4>نوع گلخانه</h4>

            <ul class="cd-form-list1">
                <li>
                    <input type="radio" name="radio-button-1" id="cd-radio-3" checked>
                    <label for="cd-radio-3">هیدروپونیک</label>
                </li>

                <li>
                    <input type="radio"  name="radio-button-1" id="cd-radio-4">
                    <label for="cd-radio-4">خاکی</label>
                </li>

            </ul>
        </div>


        <div class="glasshouse-list">
            <h4>لیست گیاهان گلخانه ای</h4>

            <p class="cd-select icon">
                <select class="budget">
                    <option value="0">لیست گیاهان</option>
                    <option value="1">خیار</option>
                    <option value="2">گوجه فرنگی</option>
                    <option value="3">انواع فلفل</option>
                    <option value="4">بادمجان</optino>
                    <option value="5">توت فرنگی</option>
                    <option value="6">آناناس</option>
                    <option value="7">قارچ</option>
                    <option value="8">زعفران</option>
                    <option value="9">گیاهان دارویی</option>
                    <option value="10">هندوانه</option>
                    <option value="11">خربزه</option>
                    <option value="12">طالبی</option>
                    <option value="13">سبزی خوراکی</option>
                    <option value="14">گل وگیاه زینتی</option>
                    <option value="15">گل وگیاه آپارتمانی</option>
                    <option value="16">گل شاخه بریده</option>
                </select>
            </p>
        </div>


        <div class="agricultural-list">
            <h4>لیست گیاهان زراعی</h4>

            <p class="cd-select icon">
                <select class="budget">
                    <option value="0">لیست گیاهان</option>
                    <option value="1">ذرت علوفه ای</option>
                    <option value="2">گندم آبی</option>
                    <option value="3"> چغندرقند</option>
                    <option value="4">یونجه آبی</option>
                    <option value="5">گوجه فرنگی</option>
                    <option value="6">شبدر</option>
                    <option value="7">عدس</option>
                    <option value="8">سیب زمینی</option>
                    <option value="9">جو</option>
                    <option value="10">لوبیا</option>
                    <option value="11">هندوانه</option>
                    <option value="12">کلزا</option>
                    <option value="13">آفتاب گردان آجیلی</option>
                    <option value="14">خربزه</option>
                    <option value="15">پیاز</option>
                    <option value="16">پنبه</option>
    
                </select>
            </p>
        </div>


        <div>
            <h4> سن گیاه</h4>

            <ul class="cd-form-list">
                <input type="number" name="age" min="0" max="30" step=”3” placeholder="روز" style="border: 1px solid #cfd9db; width: 60px;
height: 30px; margin-right: 10px;" />
				<input type="number" name="age" min="0" max="12" step=”3” placeholder="ماه" style="border: 1px solid #cfd9db; width: 60px;
height: 30px; margin-right: 15px;" />
				<input type="number" name="age" min="0" max="10" step=”3” placeholder="سال" style="border: 1px solid #cfd9db; width: 60px;
height: 30px;margin-right: 15px;"/>
            </ul>
        </div>

        <div>
		<div>
            <h4>آزمون خاک</h4>

            <ul class="cd-form-list2">
                <li>
                    <input type="radio"  class="has-soiltest" name="radio-button-2" id="cd-radio-5" checked>
                    <label for="cd-radio-5">دارد</label>
                </li>

                <li>
                    <input type="radio" class="hasnot-soiltest" name="radio-button-2" id="cd-radio-6">
                    <label for="cd-radio-6">ندارد</label>
                </li>

            </ul>
        </div>

		<div class="values-​​of-elements">
            <h4>مقادیر عناصر</h4>

            <ul class="cd-form-list3">
                <li>
                   <input type="url" name="user_url" placeholder="سطح نیتروژن خاک" style="border: 1px solid #cfd9db; 
height: 30px; "/> 
                </li>

                <li>
                   <input type="url" name="user_url" placeholder="سطح فسفر خاک" style="border: 1px solid #cfd9db; 
height: 30px; "/> 
                </li><li>
                   <input type="url" name="user_url" placeholder="مقدار پتاسیم" style="border: 1px solid #cfd9db; 
height: 30px; "/> 
                </li><li>
                   <input type="url" name="user_url" placeholder="مقدار آهن" style="border: 1px solid #cfd9db; 
height: 30px; "/> 
                </li><li>
                   <input type="url" name="user_url" placeholder="مقدار منگنز" style="border: 1px solid #cfd9db; 
height: 30px; "/> 
                </li><li>
                   <input type="url" name="user_url" placeholder="مقدار مس" style="border: 1px solid #cfd9db; 
height: 30px; "/> 
                </li><li>
                   <input type="url" name="user_url" placeholder="مقدار روی" style="border: 1px solid #cfd9db; 
height: 30px; "/> 
                </li><li>
                   <input type="url" name="user_url" placeholder="مقدار بور" style="border: 1px solid #cfd9db; 
height: 30px; "/> 
                </li>

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
            <textarea class="message" name="cd-textarea" id="cd-textarea" required></textarea>
        </div>

        <div>
            <input type="submit" value="ارسال">
        </div>
    </fieldset>
</form>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<script>
    $(document).ready(function () {


        $(".glasshouse").attr('checked', true);
        $('.glasshouse-list').show();
        $('.agricultural-list').hide();
        $('.glasshouse-type').show();
        $('.values-​​of-elements').hide();

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