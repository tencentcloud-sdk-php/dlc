<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkSessionBatchSQL请求参数结构体
 *
 * @method string getBatchId() 获取SparkSQL唯一标识
 * @method void setBatchId(string $BatchId) 设置SparkSQL唯一标识
 * @method string getCustomKey() 获取用户自定义主键, 若不为空，则按照该值查询
 * @method void setCustomKey(string $CustomKey) 设置用户自定义主键, 若不为空，则按照该值查询
 */
class DescribeSparkSessionBatchSQLRequest extends AbstractModel
{
    /**
     * @var string SparkSQL唯一标识
     */
    public $BatchId;

    /**
     * @var string 用户自定义主键, 若不为空，则按照该值查询
     */
    public $CustomKey;

    /**
     * @param string $BatchId SparkSQL唯一标识
     * @param string $CustomKey 用户自定义主键, 若不为空，则按照该值查询
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("CustomKey",$param) and $param["CustomKey"] !== null) {
            $this->CustomKey = $param["CustomKey"];
        }
    }
}
