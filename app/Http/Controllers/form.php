<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class form extends Controller
{
    public function index(){
      return view('form');
    }

    public function test($aq, $bq){
      $strjam = array('12:00','13:00','15:00', '16:00', '18:00', '19:00');
      $jam = array();
      $kerja = 0;
      array_push($strjam, $aq, $bq);
      sort($strjam);

      $indexmulai = array_search($aq, $strjam);
      $indexselesai = array_search($bq, $strjam);

      for($i = $indexmulai ; $i <= $indexselesai ; $i++){
        array_push($jam, new DateTime($strjam[$i]));
      }

      if( ($strjam[$indexmulai] > '12:00' && $strjam[$indexmulai] <= '13:00') ||
          ($strjam[$indexmulai] > '15:00' && $strjam[$indexmulai] <= '16:00') ||
          ($strjam[$indexmulai] > '18:00' && $strjam[$indexmulai] <= '19:00')){

            for($i = 0 ; $i < sizeof($jam) - 1 ; $i++){
              if($i%2==1){
                $interval = $jam[$i]->diff($jam[$i + 1]);
                $kerja += (($interval->h * 60) + $interval->i);
              }
            }
      }else{
        for($i = 0 ; $i < sizeof($jam) - 1 ; $i++){
          if($i%2==0){
            $interval = $jam[$i]->diff($jam[$i + 1]);
            $kerja += (($interval->h * 60) + $interval->i);
          }
        }
      }
      $minute = $kerja % 60;
      $hour = ($kerja  - $minute) / 60;

      if($minute != 0){
        return $hour . ' jam ' . $minute . ' menit';
      }else{
        return $hour . ' jam';
      }
    }

    public function intern(Request $request){
      $a =($request->jam1);
      $b =($request->jam2);

      $output = $this->test($a,$b);

      $data['jam1'] = $request->jam1;
      $data['jam2'] = $request->jam2;
      $data['tugas'] = $request->tugas;
      $data['kendala'] = $request->kendala;
      $data['output'] = $output;
      return view ('hasil', $data);
    }

}
