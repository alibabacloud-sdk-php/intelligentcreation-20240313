<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class GetOssUploadTokenRequest extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var int
     */
    public $uploadType;
    protected $_name = [
        'fileName' => 'fileName',
        'fileType' => 'fileType',
        'uploadType' => 'uploadType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }

        if (null !== $this->uploadType) {
            $res['uploadType'] = $this->uploadType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }

        if (isset($map['uploadType'])) {
            $model->uploadType = $map['uploadType'];
        }

        return $model;
    }
}
