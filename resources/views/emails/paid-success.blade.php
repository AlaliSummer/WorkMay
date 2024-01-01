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
<td style="font-size:12px;vertical-align: top;">{{ $from_date }}<br/>{{ $to_date }}<br/>{{ __('words.number-of-days') }} ({{ $days }})</td>
<td style="font-size:12px;direction: ltr;vertical-align: top;">{{ $from_time }}<br/>{{ $to_time }}</td>
<td style="font-size:12px;vertical-align: top;">الرياض<br/>
@if ($maps_location)
<a style="text-decoration: none;" target="_blank" href="{{ $maps_location }}">الموقع على الخريطة</a>
@else
---<br/>
قريبا سوف يتم تحديد الموقع
@endif
</td>
</tr>
</tbody>
</table>

@component('mail::magicButton', ['url' => $button_url])
عرض دوراتي القادمة
@endcomponent

<div class="text-center" style="margin-top:40px;color:white;background-image:linear-gradient(
          rgba(0, 0, 0, 0.2),
          rgba(0, 0, 0, 0.2)
        ),url('{{url('/img/header-blue-purple.jpg')}}');padding:20px;border-radius: 20px;">
<p><b>ترقب احدث الدورات القيمة والممتعة بالإشتراك معنا!</b></p>
<p>نتعاقد مع أفضل معاهد التدريب والمدربين المستقلين لتوفير متعة اكتساب مهارات جديدة، سواء بالنسبة للهوايات المهنية أو الترفيهية.</p>
</div>

@endcomponent
