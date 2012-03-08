<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class DateDisplayFormat extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3;

    protected $Name = 'DateDisplayFormat';

    protected $FullName = 'Nikon::WorldTime';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Time';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Date Display Format';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Y/M/D',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'M/D/Y',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'D/M/Y',
        ),
    );

}