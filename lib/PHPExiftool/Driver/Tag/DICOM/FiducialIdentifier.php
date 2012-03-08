<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class FiducialIdentifier extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0070,0310';

    protected $Name = 'FiducialIdentifier';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Fiducial Identifier';

}