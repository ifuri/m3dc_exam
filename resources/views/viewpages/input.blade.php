@extends('layouts.layoutindex')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="container-component">

                	<div class="row">
                    	<div class="description col-xs-12  col-md-12">
                        	<div class="panel panel-default">

                        		<div class="panel-heading">
                                    <dt>{{$semi_title}}</dt>
								</div>
                        		<div class="panel-body">
                                    <div class="gaiyo">
                                    	<dl>
                                    		<dt>日程</dt>
                                    		<dd>{{$schedule}}</dd>
                                    		<dt>演題</dt>
                                    		<dd>{{$subject}}</dd>
                                    		<dt>演者</dt>
                                    		<dd>{{$actor}}</dd>
                                    	</dl>
                                    </div>
                        		</div>

                        	</div>
                    	</div>
                	</div>

                	<div class="row">
                        <div class="description col-xs-12  col-md-12">
                            <div class="panel panel-primary">
                            	<div class="panel-heading">{{$format}}</div>
                        		<div class="panel-body">

                        			<form id="nameForm" class="form-horizontal" role="form" method="post" action="/m3dc_exam/public/viewpage">
                                        @csrf
                            			<div class="form-group">
                            				<label class="col-md-2 control-label" >都道府県</label>
                        					<div class="col-md-4">
                            					<select name="todohuken" id="todohuken" class="form-control">
                            					<option value="msg" selected="selected" class="msg">都道府県</option>
                            					<option value="北海道" class="msg">北海道</option>
                            					<option value="青森県" class="msg">青森県</option>
                            					<option value="岩手県" class="msg">岩手県</option>
                            					<option value="宮城県" class="msg">宮城県</option>
                            					<option value="秋田県" class="msg">秋田県</option>
                            					<option value="山形県" class="msg">山形県</option>
                            					<option value="福島県" class="msg">福島県</option>
                            					<option value="茨城県" class="msg">茨城県</option>
                            					<option value="栃木県" class="msg">栃木県</option>
                            					<option value="群馬県" class="msg">群馬県</option>
                            					<option value="埼玉県" class="msg">埼玉県</option>
                            					<option value="千葉県" class="msg">千葉県</option>
                            					<option value="東京都" class="msg">東京都</option>
                            					<option value="神奈川県" class="msg">神奈川県</option>
                            					<option value="新潟県" class="msg">新潟県</option>
                            					<option value="富山県" class="msg">富山県</option>
                            					<option value="石川県" class="msg">石川県</option>
                            					<option value="福井県" class="msg">福井県</option>
                            					<option value="山梨県" class="msg">山梨県</option>
                            					<option value="長野県" class="msg">長野県</option>
                            					<option value="岐阜県" class="msg">岐阜県</option>
                            					<option value="静岡県" class="msg">静岡県</option>
                            					<option value="愛知県" class="msg">愛知県</option>
                            					<option value="三重県" class="msg">三重県</option>
                            					<option value="滋賀県" class="msg">滋賀県</option>
                            					<option value="京都府" class="msg">京都府</option>
                            					<option value="大阪府" class="msg">大阪府</option>
                            					<option value="兵庫県" class="msg">兵庫県</option>
                            					<option value="奈良県" class="msg">奈良県</option>
                            					<option value="和歌山県" class="msg">和歌山県</option>
                            					<option value="鳥取県" class="msg">鳥取県</option>
                            					<option value="島根県" class="msg">島根県</option>
                            					<option value="岡山県" class="msg">岡山県</option>
                            					<option value="広島県" class="msg">広島県</option>
                            					<option value="山口県" class="msg">山口県</option>
                            					<option value="徳島県" class="msg">徳島県</option>
                            					<option value="香川県" class="msg">香川県</option>
                            					<option value="愛媛県" class="msg">愛媛県</option>
                            					<option value="高知県" class="msg">高知県</option>
                            					<option value="福岡県" class="msg">福岡県</option>
                            					<option value="佐賀県" class="msg">佐賀県</option>
                            					<option value="長崎県" class="msg">長崎県</option>
                            					<option value="熊本県" class="msg">熊本県</option>
                            					<option value="大分県" class="msg">大分県</option>
                            					<option value="宮崎県" class="msg">宮崎県</option>
                            					<option value="鹿児島県" class="msg">鹿児島県</option>
                            					<option value="沖縄県" class="msg">沖縄県</option>
                        						</select>
                    						</div>
            							</div>
										<div class="form-group">
											<label class="col-md-2 control-label">ご芳名</label>
											<div class="col-md-4">
												<input type="text" name="lastname" id="lastname" class="form-control" placeholder="姓" maxlength="50" required>
											</div>
											<div class="col-md-4">
												<input type="text" name="firstname" id="firstname" class="form-control" placeholder="名" maxlength="50" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">参加人数</label>
											<div class="col-md-4">
												<input type="number" name="customernumber" id="customernumber" autocomplete="on" class="form-control" max="100" min="0" required>
											</div>
										</div>

	    								<div class="row">
			                                <div class="btn-group btn-group-justified">
			                                  <label class="col-xs-2 col-md-2"></label>
			                                  <div class="col-xs-12 col-md-8">
			                                      <button type="submit" class="btn btn-primary btn-group-justified" name="submitlang" value="jp">視聴する</button>
			                                  </div>
			                                </div>
			                          	</div>

        				            </form>

                        		</div>
                        	</div>
                    	</div>
                	</div>

                </div>
            </div>
        </div>
    </div>
@endsection
