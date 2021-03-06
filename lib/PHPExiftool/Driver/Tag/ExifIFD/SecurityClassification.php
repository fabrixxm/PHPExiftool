<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class SecurityClassification extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'SecurityClassification';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'mixed';

    protected $Writable = false;

    protected $Description = 'Security Classification';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        'C' => array(
            'Id' => 'C',
            'Label' => 'Confidential',
        ),
        'R' => array(
            'Id' => 'R',
            'Label' => 'Restricted',
        ),
        'S' => array(
            'Id' => 'S',
            'Label' => 'Secret',
        ),
        'T' => array(
            'Id' => 'T',
            'Label' => 'Top Secret',
        ),
        'U' => array(
            'Id' => 'U',
            'Label' => 'Unclassified',
        ),
    );
}
