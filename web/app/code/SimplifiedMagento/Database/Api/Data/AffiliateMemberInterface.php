<?php


namespace SimplifiedMagento\Database\Api\Data;


interface AffiliateMemberInterface
{
    /*
     * @return int
     */
    public function getId();

    /*
     * @return string
     */
    public function getName();

    /*
     * @return Boolean
     */
    public function getStatus();

    /*
     * @return string
     */
    public function getAddress();

    /*
     * @return string
     */
    public function getPhoneNumber();

    /*
     * @return string
     */
    public function getCreatedAt();

    /*
     * @return string
     */
    public function getUpdatedAt();

    /*
     * @param int $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setId($id);

    /*
     * @param string $name
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setName($name);

    /*
     * @param Boolean $status
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setStatus($status);

    /*
     * @param string $address
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setAddress($address);

    /*
     * @param string $phoneNumber
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setPhoneNumber($phoneNumber);

    


}
