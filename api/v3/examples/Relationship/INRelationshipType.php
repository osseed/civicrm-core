<?php

/*
 demonstrates use of IN filter
 */
function relationship_get_example(){
$params = array(
  'relationship_type_id' => array(
      'IN' => array(
          '0' => 33,
          '1' => 34,
        ),
    ),
  'version' => 3,
  'debug' => 0,
);

  $result = civicrm_api( 'relationship','get',$params );

  return $result;
}

/*
 * Function returns array of result expected from previous function
 */
function relationship_get_expectedresult(){

  $expectedResult = array(
  'is_error' => 0,
  'version' => 3,
  'count' => 2,
  'values' => array(
      '2' => array(
          'id' => '2',
          'contact_id_a' => '66',
          'contact_id_b' => '67',
          'relationship_type_id' => '33',
          'start_date' => '2008-12-20',
          'is_active' => '1',
          'description' => '',
          'is_permission_a_b' => 0,
          'is_permission_b_a' => 0,
        ),
      '3' => array(
          'id' => '3',
          'contact_id_a' => '66',
          'contact_id_b' => '67',
          'relationship_type_id' => '34',
          'start_date' => '2008-12-20',
          'is_active' => '1',
          'description' => '',
          'is_permission_a_b' => 0,
          'is_permission_b_a' => 0,
        ),
    ),
);

  return $expectedResult  ;
}


/*
* This example has been generated from the API test suite. The test that created it is called
*
* testGetTypeOperators and can be found in
* http://svn.civicrm.org/civicrm/trunk/tests/phpunit/CiviTest/api/v3/RelationshipTest.php
*
* You can see the outcome of the API tests at
* http://tests.dev.civicrm.org/trunk/results-api_v3
*
* To Learn about the API read
* http://book.civicrm.org/developer/current/techniques/api/
*
* and review the wiki at
* http://wiki.civicrm.org/confluence/display/CRMDOC/CiviCRM+Public+APIs
*
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*
* API Standards documentation:
* http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
*/