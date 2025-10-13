<?php

namespace App;

enum StatusEnum: string
{
    case Publised = 'publised';
    case Achived = 'achived';
    case Draft = 'draft';
    case Scheduled = 'scheduled';
}
