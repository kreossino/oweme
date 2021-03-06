<?php
/*
 * Owe Me! - an e107 plugin by Tijn Kuyper
 *
 * Copyright (C) 2015-2016 Tijn Kuyper (http://www.tijnkuyper.nl)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }

 /*
  OweMe Shortcodes
 */

class oweme_shortcodes extends e_shortcode
{
   function sc_oweme_id($parm='')
   {
      return $this->var['e_id'];
   } 

   function sc_oweme_date($parm='')
   {
      $date_format = e107::getPlugPref('oweme', 'date_format', '%d %B, %Y');
      return e107::getDate()->convert_date($this->var["e_datestamp"], $date_format);
   } 

   function sc_oweme_category($parm='')
   {
      return e107::getDb()->retrieve('oweme_categories', 'c_name', 'c_id = '.$this->var["e_category"]);
   }

   function sc_oweme_amount($parm='') 
   {
      $cur_pos    = e107::getDb()->retrieve('oweme_currencies', 'cur_location', 'cur_id = '.$this->var['e_currency']); 
      $cur_symbol = e107::getDb()->retrieve('oweme_currencies', 'cur_symbol', 'cur_id = '.$this->var['e_currency']); 
      
      if($cur_pos == 'front')
      {
         return $cur_symbol." ".$this->var["e_amount"];
      }
      else
      {
         return $this->var["e_amount"]." ".$cur_symbol;
      }
   }

   function sc_oweme_description($parm='')
   {
      return $this->var["e_description"];
   }

   function sc_oweme_debtor($parm='')
   {
      return e107::getDb()->retrieve('oweme_debtors', 'd_name', 'd_id = '.$this->var["e_debtor"]);
   }

   function sc_oweme_status_label($parm='')
   {
      return e107::getDb()->retrieve('oweme_statuses', 's_label', 's_id = '.$this->var["e_status"]);
   }

   function sc_oweme_status_name($parm='')
   {
      return e107::getDb()->retrieve('oweme_statuses', 's_name', 's_id = '.$this->var["e_status"]);
   }

}
?>
