<?php
/**
 * Copyright (c) 2019, Commify Ltd.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of Commify nor the
 *       names of its contributors may be used to endorse or promote products
 *       derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category   Model
 * @package    Esendex
 * @author     Commify Support <support@esendex.com>
 * @copyright  2019 Commify Ltd.
 * @license    http://opensource.org/licenses/BSD-3-Clause  BSD 3-Clause
 * @link       https://github.com/esendex/esendex-php-sdk
 */
namespace Esendex\Model;

class Contact
{
    private $id;
    private $firstname;
    private $lastname;
    private $quickname;
    private $phonenumber;
    private $accountreference;
    private $linkContact;
    private $linkAccount;

    /**
     * @param string $value
     * @return string
     */
    public function id($value = null)
    {
        if ($value != null) {
            $this->id = (string)$value;
        }
        return $this->id;
    }

    /**
     * @param string $value
     * @return string
     */
    public function firstname($value = null)
    {
        if ($value != null) {
            $this->firstname = (string)$value;
        }
        return $this->firstname;
    }

    /**
     * @param string $value
     * @return string
     */
    public function lastname($value = null)
    {
        if ($value != null) {
            $this->lastname = (string)$value;
        }
        return $this->lastname;
    }

    /**
     * @param string $value
     * @return string
     */
    public function quickname($value = null)
    {
        if ($value != null) {
            $this->quickname = (string)$value;
        }
        return $this->quickname;
    }

    /**
     * @param string $value
     * @return string
     */
    public function phonenumber($value = null)
    {
        if ($value != null) {
            $this->phonenumber = (string)$value;
        }
        return $this->phonenumber;
    }

    /**
     * @param string $value
     * @return string
     */
    public function accountreference($value = null)
    {
        if ($value != null) {
            $this->accountreference = (string)$value;
        }
        return $this->accountreference;
    }

    /**
     * @param string $value
     * @return string
     */
    public function linkContact($value = null)
    {
        if ($value != null) {
            $this->linkContact = (string)$value;
        }
        return $this->linkContact;
    }

    /**
     * @param string $value
     * @return string
     */
    public function linkAccount($value = null)
    {
        if ($value != null) {
            $this->linkAccount = (string)$value;
        }
        return $this->linkAccount;
    }
}
