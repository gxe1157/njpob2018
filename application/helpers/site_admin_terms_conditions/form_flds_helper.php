<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Car Shield */


if ( ! function_exists('get_fields'))
{
  
  function get_fields( )
  {

      $site_user_rules = array(
            array(
              'field' => 'author',
              'label' => 'Author',
              'rules' => 'required|max_length[100]', 
              'icon'  => 'user',
              'placeholder'=>'',
              'input_type' =>'text',
              // 'input_options' => '0',          
            ),        
            array(
              'field' => 'title',
              'label' => 'Title',
              'rules' =>'required|min_length[3]|max_length[60]',
              'icon'  => 'pencil',
              'placeholder'=>'',
              'input_type' => 'text', // text, password or drop_down_sel
              // 'input_options' => '0',
            ),
            array(
              'field' => 'status',
              'label' => 'Status',
              'rules' =>'required',
              'icon'  => 'pencil',
              'placeholder'=>'',
              'input_type' => 'select', // text, password or drop_down_sel
              'input_options' => 'Select, Active, In-Acive',
            ),
            array(
              'field' => 'agreement',
              'label' => 'Terms and Conditions',
              'rules' =>'',
              'icon'  => 'pencil',
              'placeholder'=>'',
              'input_type' => 'textarea', // text, password or drop_down_sel
              // 'input_options' => '0',
            )
      );
            
    return $site_user_rules;

  }// get_fields


} // endif