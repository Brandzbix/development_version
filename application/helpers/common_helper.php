<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('lang_vise_static_fields'))
{
 function lang_vise_static_fields($lang_code, $field_name){             
     $arr['news_category']=array('eng'=>array(
           array('news_type_id'=> '1','cate_name'=>'india'),
           array('news_type_id'=> '2','cate_name'=>'international'),
           array('news_type_id'=> '3','cate_name'=>'business'),
           array('news_type_id'=> '4','cate_name'=>'entertainment'),
           array('news_type_id'=> '5','cate_name'=>'health'),
           array('news_type_id'=> '6','cate_name'=>'tech'),
		        array('news_type_id' => '7','cate_name'=>'sports')
         ));
      return   $arr[$field_name][$lang_code];
   }
}
