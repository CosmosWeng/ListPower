<?php
    $sections = [
        [
            '基本資訊',
            [
                ['有賣單品', 'Yes'],
                ['有賣甜點', 'No'],
                ['有賣正餐', 'Yes'],
                ['有無限時', "No"],
                ['插座多', 'Yes'],
                ['可站立工作', "Yes"]
            ]
        ],
        [
            '營業資訊',
            [
                ['官網', 'https://www.facebook.com/mikkellertaipei/'],
                ['電話', '02 2558 6978'],
                ['營業時間', "16:00 - 0:00，週五週六開到1點，週二未營業"],
                ['捷運', '北門站'],
                ['地址', '台北市大同區南京西路241號'],
            ]
        ],
    ];
?>

@foreach ($sections as $section)
<?php
    $title = $section[0];
    $fields = $section[1];
?>
<hr class="mt-4 mb-4">
<section class="text-break">
    <h5 class=""><b>{{ $title }}</b></h5>
    <div class="row">
        <div class="col-md-6">
            @for ($i = 0 ; $i < ceil(count($fields)/2) ; $i++)
                <div class="mt-2">
                    <div class="d-inline-block">
                        {{ $fields[$i][0] }}：<span class="text-muted">{{ $fields[$i][1] }}</span>
                    </div>
                </div>
            @endfor
        </div>
        <div class="col-md-6">
            @for ($i = ceil(count($fields)/2) ; $i < count($fields) ; $i++)
                <div class="mt-2">
                    <div class="d-inline-block">
                        {{ $fields[$i][0] }}：<span class="text-muted">{{ $fields[$i][1] }}</span>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
@endforeach
