<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ID3;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class WMCollectionID extends AbstractTag
{

    protected $Id = 'WM_WMCollectionID';

    protected $Name = 'WM_CollectionID';

    protected $FullName = 'ID3::Private';

    protected $GroupName = 'ID3';

    protected $g0 = 'ID3';

    protected $g1 = 'ID3';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'WM Collection ID';
}
