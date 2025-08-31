<?php

namespace SandFox_Base\Sniffs\Commenting;

use PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\FileCommentSniff as PearFileCommentSniff;

class FileCommentSniff extends PearFileCommentSniff
{
    protected $tags = [
        '@copyright'  => [
            'required'       => true,
            'allow_multiple' => true,
        ],
        '@license'    => [
            'required'       => true,
            'allow_multiple' => false,
        ],
    ];
}
