<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * DescribeDataEnginePythonSparkImages请求参数结构体
 *
 * @method string getChildImageVersionId() 获取集群镜像小版本ID
 * @method void setChildImageVersionId(string $ChildImageVersionId) 设置集群镜像小版本ID
 */
class DescribeDataEnginePythonSparkImagesRequest extends AbstractModel
{
    /**
     * @var string 集群镜像小版本ID
     */
    public $ChildImageVersionId;

    /**
     * @param string $ChildImageVersionId 集群镜像小版本ID
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
        if (array_key_exists("ChildImageVersionId",$param) and $param["ChildImageVersionId"] !== null) {
            $this->ChildImageVersionId = $param["ChildImageVersionId"];
        }
    }
}
