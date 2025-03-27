<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class BatchGetTrainTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunMainId;

    /**
     * @var string
     */
    public $taskIdListShrink;
    protected $_name = [
        'aliyunMainId' => 'aliyunMainId',
        'taskIdListShrink' => 'taskIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunMainId) {
            $res['aliyunMainId'] = $this->aliyunMainId;
        }

        if (null !== $this->taskIdListShrink) {
            $res['taskIdList'] = $this->taskIdListShrink;
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
        if (isset($map['aliyunMainId'])) {
            $model->aliyunMainId = $map['aliyunMainId'];
        }

        if (isset($map['taskIdList'])) {
            $model->taskIdListShrink = $map['taskIdList'];
        }

        return $model;
    }
}
