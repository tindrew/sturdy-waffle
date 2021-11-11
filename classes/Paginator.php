<?php

/**
 * Paginator
 *
 * Data for selecting a page of records
 */

class Paginator
{
   /**
    * Number of records to return
    * @var [integer]
    */
   public $limit;

   /**
    * Number of records to skip before the page
    * @var [integer]
    */
   public $offset;

   /**
    * Constructor
    * @param  [integer] $page               [Page number]
    * @param  [integer] $records_per_page   [Number of records perpage]
    * @return [void]
    */
   public function __Construct($page, $records_per_page)
   {
      $this->limit = $records_per_page;

      var_dump($page);
      $page = filter_var($page, FILTER_VALIDATE_INT);
      var_dump($page);
      $this->offset = $records_per_page * ($page -1);

   }
}
