<?php
/*
 * @version $Id: ruledictionnaryprintermodelcollection.class.php 20580 2013-03-29 18:09:43Z moyo $
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2013 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

/** @file
* @brief 
*/

class RuleDictionnaryPrinterModelCollection extends RuleDictionnaryDropdownCollection {
   public $item_table  = "glpi_printermodels";
   public $menu_option = "model.printer";

//    /**
//     * Constructor
//    **/
//    function __construct() {
// 
//       $this->item_table  = "glpi_printermodels";
//       //Init cache system values
//       $this->initCache("glpi_rulecacheprintermodels", array("name"         => "old_value",
//                                                             "manufacturer" => "manufacturer"));
//       $this->menu_option="model.printer";
//    }


   /**
    * @see RuleCollection::getTitle()
   **/
   function getTitle() {
      return __('Dictionnary of printer models');
   }

}
?>