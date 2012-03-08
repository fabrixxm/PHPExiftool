<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSLatitudeRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'GPSLatitudeRef';

    protected $FullName = 'mixed';

    protected $GroupName = 'GPS';

    protected $g0 = 'mixed';

    protected $g1 = 'mixed';

    protected $g2 = 'mixed';

    protected $Type = 'string';

    protected $Writable = 'mixed';

    protected $Description = 'GPS Latitude Ref';

    protected $Values = array(
        'N' => array(
            'Id' => 'N',
            'Label' => 'North',
        ),
        'S' => array(
            'Id' => 'S',
            'Label' => 'South',
        ),
    );

    protected $local_g1 = 'mixed';

    protected $local_g2 = 'mixed';

}