<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PhotoEffect extends AbstractTag
{

    protected $Id = 40;

    protected $Name = 'PhotoEffect';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Photo Effect';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Vivid',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Neutral',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Smooth',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Sepia',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'B&W',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Custom',
        ),
        100 => array(
            'Id' => 100,
            'Label' => 'My Color Data',
        ),
    );
}
