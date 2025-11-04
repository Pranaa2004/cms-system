<?php

namespace App\Enums;

enum StatusEnum: string
{
    case Published = 'published';
    case Achived = 'achived';
    case Draft = 'draft';
    case Scheduled = 'scheduled';
}
