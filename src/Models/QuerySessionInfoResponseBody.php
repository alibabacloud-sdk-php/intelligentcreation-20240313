<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QuerySessionInfoResponseBody\queryResourceInfoList;

class QuerySessionInfoResponseBody extends Model
{
    /**
     * @var queryResourceInfoList[]
     */
    public $queryResourceInfoList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'queryResourceInfoList' => 'queryResourceInfoList',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->queryResourceInfoList)) {
            Model::validateArray($this->queryResourceInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryResourceInfoList) {
            if (\is_array($this->queryResourceInfoList)) {
                $res['queryResourceInfoList'] = [];
                $n1 = 0;
                foreach ($this->queryResourceInfoList as $item1) {
                    $res['queryResourceInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['queryResourceInfoList'])) {
            if (!empty($map['queryResourceInfoList'])) {
                $model->queryResourceInfoList = [];
                $n1 = 0;
                foreach ($map['queryResourceInfoList'] as $item1) {
                    $model->queryResourceInfoList[$n1++] = queryResourceInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
