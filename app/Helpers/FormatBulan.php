<?php

namespace App\Helpers;

class FormatBulan {

    public static function format($created) {

      if ($created == '01') {
        return "Januari ";
      }
      if ($created == '02') {
        return "Februari ";
      }
      if ($created == '03') {
        return "Maret ";
      }
      if ($created == '04') {
        return "April ";
      }
      if ($created == '05') {
        return "Mei ";
      }
      if ($created == '06') {
        return "Juni ";
      }
      if ($created == '07') {
        return "Juli ";
      }
      if ($created == '08') {
        return "Agustus ";
      }
      if ($created == '09') {
        return "September ";
      }
      if ($created == '10') {
        return "Oktober ";
      }
      if ($created == '11') {
        return "November ";
      }
      if ($created == '12') {
        return "Desember ";
      }
      
   }
}