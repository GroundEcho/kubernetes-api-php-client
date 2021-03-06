<?php
/**
 * PHP CLient for Kubernetes API 
 *
 * Copyright 2014 binarygoo Inc. All rights reserved.
 *
 * @author Faruk brbovic <fbrbovic@devstub.com>
 * @link http://www.devstub.com/
 * @copyright 2014 binarygoo / devstub.com
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
 *
 */

namespace DevStub\KubernetesAPIClient\Entity\v1beta1;


use DevStub\KubernetesAPIClient\Entity\BaseEntity;

class GCEPersistentDisk  extends BaseEntity implements \JsonSerializable {


    protected $pdName;

    protected $fsType;

    protected $partition;

    protected $readOnly;

    /**
     * @return string
     */
    public function getFsType() {
        return $this->fsType;
    }

    /**
     * @param string $fsType
     *
     * @return $this
     */
    public function setFsType($fsType) {
        $this->fsType = $fsType;
        return $this;
    }

    /**
     * @return int
     */
    public function getPartition() {
        return $this->partition;
    }

    /**
     * @param int $partition
     *
     * @return $this
     */
    public function setPartition($partition) {
        $this->partition = $partition;
        return $this;
    }

    /**
     * @return string
     */
    public function getPdName() {
        return $this->pdName;
    }

    /**
     * @param string $pdName
     *
     * @return $this
     */
    public function setPdName($pdName) {
        $this->pdName = $pdName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getReadOnly() {
        return $this->readOnly;
    }

    /**
     * @param boolean $readOnly
     *
     * @return $this
     */
    public function setReadOnly($readOnly) {
        $this->readOnly = $readOnly;
        return $this;
    }


}