@extends('layouts.layoutindex')

@section('content')

    <div class="container">
        <div class="container-component">

            <div class="pageWrap">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <dt>{{$semi_title}}</dt>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <div class="gaiyo" style="padding:4px 1px">
                                <dl style="margin-bottom:4px">
                                    <dd>{{$schedule}}</dd>
                                    <dd>{{$subject}}</dd>
                                    <dd>{{$actor}}</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="text-center" style="height:100%;">
                            <iframe id="inline-frame"
                              width="505px"
                              height="545px"
                              src="/m3dc_exam/public/img/m3dc_logo.png">
                            </iframe>
                        </div>    
                    </div>
                    <div class="panel-footer">
                        <p class="glyphicon glyphicon-warning-sign text-danger">　PCでご視聴の場合はVPNを切断しご覧ください</p>
                    </div>
                </div>

                <div class="col-sm-12 contactBox">
                    <a target="_blank" href="{{$tech}}">接続に関する技術的な質問等ございましたら、こちらからお問い合わせ下さい。</a>
                </div>
            </div>
        </div>
    </div>

@endsection
