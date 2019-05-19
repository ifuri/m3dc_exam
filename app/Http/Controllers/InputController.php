<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\RotatingFileHandler;

class InputController extends Controller
{
    public function index()
    {
        //使用項目をコンフィグファイルから取得
        $title      = \Config::get('defaultcfg.defaultcfg.PAGE_TITLE');
        $logo       = \Config::get('defaultcfg.defaultcfg.M3DC_LOG_TXT');
        $home_url   = \Config::get('defaultcfg.defaultcfg.M3DC_URL');
        $semi_title = \Config::get('defaultcfg.defaultcfg.M3DC_SEMINAR_TITLE');
        $schedule   = \Config::get('defaultcfg.defaultcfg.SEMI_INFO_DATE');
        $subject    = \Config::get('defaultcfg.defaultcfg.SEMI_INFO_TITLE');
        $actor      = \Config::get('defaultcfg.defaultcfg.SEMI_INFO_PROF');
        $format     = \Config::get('defaultcfg.defaultcfg.INPUT_TITLE');

        return view('viewpages.input',compact('title','logo','home_url','semi_title','schedule','subject','actor','format'));
    }
    
    public function displayview(Request $request)
    {

        //ログファイル出力
        $log            = new Logger('INFO');
        //ファイル名YYYY_MM_DD_HH:MM:SSで動かすことができませんでした。
        //':'があるとパーミッション操作が正常に動かないので、
        //'_'に置き換えて実装させて頂きます
        $log_path       = base_path() . '/logs/' . date("Y_m_d_H_i_s") . '.log';        $log_level      = config('info');
        $bubble         = true;
        $filePermission = 0777;

        $log->pushHandler(new StreamHandler($log_path, $log_level , $bubble, $filePermission));
        $log->addInfo($this->res($request));

        //使用項目をコンフィグファイルから取得
        $tech       = \Config::get('defaultcfg.defaultcfg.INQUIRY_URL');
        $title      = \Config::get('defaultcfg.defaultcfg.PAGE_TITLE');
        $logo       = \Config::get('defaultcfg.defaultcfg.M3DC_LOG_TXT');
        $home_url   = \Config::get('defaultcfg.defaultcfg.M3DC_URL');
        $semi_title = \Config::get('defaultcfg.defaultcfg.M3DC_SEMINAR_TITLE');
        $schedule   = \Config::get('defaultcfg.defaultcfg.VIEW_INFO_DATE');
        $subject    = \Config::get('defaultcfg.defaultcfg.VIEW_INFO_TITLE');
        $actor      = \Config::get('defaultcfg.defaultcfg.VIEW_INFO_PROF');

        return view('viewpages.viewpage',compact('tech','title','logo','home_url','semi_title','schedule','subject','actor'));
    }

    //ログファイルへの出力項目を編集して返す
    public function res(Request $request){

        $mktime         = date("Y-m-d H:i:s");
        $todohuken      = $request->input('todohuken');
        //エラーページの表示を防ぐ
        if (empty($todohuken)) {
            $todohuken  = 'unknown';
        }
        $lastname       = $request->input('lastname');
        //エラーページの表示を防ぐ
        if (empty($lastname)) {
            $lastname   = 'unknown';
        }
        $firstname      = $request->input('firstname');
        //エラーページの表示を防ぐ
        if (empty($firstname)) {
            $firstname  = 'unknown';
        }
        $customernumber = $request->input('customernumber');
        //エラーページの表示を防ぐ
        if (empty($customernumber)) {
            $customernumber = '0';
        }
        //現状IPアドレスの取得を確認できていません。取得できない場合はunknownを設定します
        $ip             = $this->getIp();
        if (empty($ip)) {
            $ip         = 'unknown';
        }
        $referer        = url()->previous();
        //リファラーを取得できないケースで動きを止めない
        if (empty($referer)) {
            $referer    = 'unknown';
        }
        $agent          = $_SERVER['HTTP_USER_AGENT'];
        if (empty($agent)) {
             $agent     = 'unknown';
        }

        \DB::insert('insert into exam_log(crnt_date,todohuken,fname,lname,viewcnt,ip_addr,referer,usr_agent) values(?, ?, ?, ?, ?, ?, ?, ?)',[$mktime,$todohuken,$lastname,$firstname,$customernumber,$ip,$referer,$agent]);

        return  $todohuken      . ','
              . $lastname       . ','
              . $firstname      . ','
              . $customernumber . ','
              . $ip             . ','
              . $referer        . ','
              . $agent;
    }

    //IPアドレス取得ロジック
    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip);
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }

}
