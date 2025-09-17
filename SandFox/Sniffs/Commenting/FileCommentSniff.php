<?php

namespace SandFox\Sniffs\Commenting;

use PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\FileCommentSniff as PearFileCommentSniff;

class FileCommentSniff extends PearFileCommentSniff
{
    const EXPECTED_TAGS = [
        '@copyright'  => [
            'required'       => true,
            'allow_multiple' => true,
        ],
        '@license'    => [
            'required'       => true,
            'allow_multiple' => true,
        ],
    ];

    protected $tags = self::EXPECTED_TAGS;
}
