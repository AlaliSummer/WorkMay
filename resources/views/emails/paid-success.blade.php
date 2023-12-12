@component('mail::message')

<h1 class="text-center">تحية طيبة،</h1>

<h1 class="text-center">تم تسجيلك بنجاح!</h1>

<p class="text-center">{{ __('words.in-the-upcoming-course') }}, <span style="color:red;">{{ $course_name }}.</span></p>

<div class="text-center">
<img src="/img/workmay-net-qr-code.png" width="130px" />
</div>

<table style="width:100%;text-align: center;margin:0 auto;margin-top:20px;">
<colgroup>
    <col style="width:33%">
<col style="width:33%">
    <col style="width:33%">
</colgroup>
<tbody>
<tr>
    <td style="font-weight: bold;">التاريخ</td>
    <td style="font-weight: bold">الوقت</td>
    <td style="font-weight: bold">العنوان</td>
</tr>
<tr>
<td style="font-size:12px;vertical-align: top;">2024-01-07<br/>2024-01-11<br/>{{ __('words.number-of-days') }} (4)</td>
<td style="font-size:12px;direction: ltr;vertical-align: top;">06:00 PM<br/>09:00 PM</td>
<td style="font-size:12px;vertical-align: top;">الرياض<br/><a style="text-decoration: none;" target="_blank" href="https://maps.app.goo.gl/SxNG3GvA9wGQLNRh7">الموقع على الخريطة</a></td>
</tr>
</tbody>
</table>

@component('mail::magic-button', ['url' => 'hepalsd'])
عرض دوراتي القادمة
@endcomponent

<div class="text-center" style="margin-top:40px;color:white;background-image:linear-gradient(
          rgba(0, 0, 0, 0.2),
          rgba(0, 0, 0, 0.2)
        ),url('/img/header-blue-purple.jpg');padding:20px;border-radius: 20px;">
<p><b>ترقب احدث الدورات القيمة والممتعة بالإشتراك معنا!</b></p>
<p>نتعاقد مع أفضل معاهد التدريب والمدربين المستقلين لتوفير متعة اكتساب مهارات جديدة، سواء بالنسبة للهوايات المهنية أو الترفيهية.</p>
</div>

@endcomponent
