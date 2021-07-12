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
}
