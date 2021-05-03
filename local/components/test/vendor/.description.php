<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    'NAME' => GetMessage('VEND_CC_NAME'),
    'DESCRIPTION' => GetMessage('VEND_CC_NAME'),
    'SORT' => 10,
    'COMPLEX' => 'Y',
    'PATH' => array(
        'ID' => 'content',
          'CHILD' => array(
            'ID' => 'vendor',
            'NAME' => GetMessage('VEND_CC_CHILD_NAME'),
        )
    )
);
