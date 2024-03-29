<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\NFTX\Models;

use AlibabaCloud\Tea\Model;

class PayOrderDataRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 接入方测订单号，保证全局唯一
    /**
     * @var string
     */
    public $externalOrderNo;

    // 订单金额，单位为分
    /**
     * @var int
     */
    public $amountCent;

    // ALIPAY 表示小程序支付，ALIPAY_APP表示App支付, ALIPAY_WAP表示手机网站支付
    /**
     * @var string
     */
    public $payChannel;

    // 订单标题，支付宝账单会展示
    /**
     * @var string
     */
    public $subject;

    // 订单超时时间，秒级
    /**
     * @var int
     */
    public $timeoutExpireSecond;

    // 接入方存储的accessToken
    /**
     * @var string
     */
    public $accessToken;

    // 支付完成后的回跳地址
    /**
     * @var string
     */
    public $returnUrl;

    // AC编码
    /**
     * @var string
     */
    public $nftId;

    // 鲸探测分配的实物规格编码
    /**
     * @var string
     */
    public $itemCode;

    // 用户购买的商品个数
    /**
     * @var int
     */
    public $itemNum;

    // 商品单价，单位分
    /**
     * @var int
     */
    public $itemPriceCent;

    // 资源ID
    /**
     * @var string
     */
    public $resourceId;

    // 根据实际情况传递
    /**
     * @var string
     */
    public $resourceType;

    // 是否使用GET方法支持wap支付
    /**
     * @var bool
     */
    public $wapPayUseGet;
    protected $_name = [
        'authToken'           => 'auth_token',
        'productInstanceId'   => 'product_instance_id',
        'externalOrderNo'     => 'external_order_no',
        'amountCent'          => 'amount_cent',
        'payChannel'          => 'pay_channel',
        'subject'             => 'subject',
        'timeoutExpireSecond' => 'timeout_expire_second',
        'accessToken'         => 'access_token',
        'returnUrl'           => 'return_url',
        'nftId'               => 'nft_id',
        'itemCode'            => 'item_code',
        'itemNum'             => 'item_num',
        'itemPriceCent'       => 'item_price_cent',
        'resourceId'          => 'resource_id',
        'resourceType'        => 'resource_type',
        'wapPayUseGet'        => 'wap_pay_use_get',
    ];

    public function validate()
    {
        Model::validateRequired('externalOrderNo', $this->externalOrderNo, true);
        Model::validateRequired('amountCent', $this->amountCent, true);
        Model::validateRequired('payChannel', $this->payChannel, true);
        Model::validateRequired('subject', $this->subject, true);
        Model::validateRequired('timeoutExpireSecond', $this->timeoutExpireSecond, true);
        Model::validateRequired('accessToken', $this->accessToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->externalOrderNo) {
            $res['external_order_no'] = $this->externalOrderNo;
        }
        if (null !== $this->amountCent) {
            $res['amount_cent'] = $this->amountCent;
        }
        if (null !== $this->payChannel) {
            $res['pay_channel'] = $this->payChannel;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }
        if (null !== $this->timeoutExpireSecond) {
            $res['timeout_expire_second'] = $this->timeoutExpireSecond;
        }
        if (null !== $this->accessToken) {
            $res['access_token'] = $this->accessToken;
        }
        if (null !== $this->returnUrl) {
            $res['return_url'] = $this->returnUrl;
        }
        if (null !== $this->nftId) {
            $res['nft_id'] = $this->nftId;
        }
        if (null !== $this->itemCode) {
            $res['item_code'] = $this->itemCode;
        }
        if (null !== $this->itemNum) {
            $res['item_num'] = $this->itemNum;
        }
        if (null !== $this->itemPriceCent) {
            $res['item_price_cent'] = $this->itemPriceCent;
        }
        if (null !== $this->resourceId) {
            $res['resource_id'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        if (null !== $this->wapPayUseGet) {
            $res['wap_pay_use_get'] = $this->wapPayUseGet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PayOrderDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['external_order_no'])) {
            $model->externalOrderNo = $map['external_order_no'];
        }
        if (isset($map['amount_cent'])) {
            $model->amountCent = $map['amount_cent'];
        }
        if (isset($map['pay_channel'])) {
            $model->payChannel = $map['pay_channel'];
        }
        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }
        if (isset($map['timeout_expire_second'])) {
            $model->timeoutExpireSecond = $map['timeout_expire_second'];
        }
        if (isset($map['access_token'])) {
            $model->accessToken = $map['access_token'];
        }
        if (isset($map['return_url'])) {
            $model->returnUrl = $map['return_url'];
        }
        if (isset($map['nft_id'])) {
            $model->nftId = $map['nft_id'];
        }
        if (isset($map['item_code'])) {
            $model->itemCode = $map['item_code'];
        }
        if (isset($map['item_num'])) {
            $model->itemNum = $map['item_num'];
        }
        if (isset($map['item_price_cent'])) {
            $model->itemPriceCent = $map['item_price_cent'];
        }
        if (isset($map['resource_id'])) {
            $model->resourceId = $map['resource_id'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }
        if (isset($map['wap_pay_use_get'])) {
            $model->wapPayUseGet = $map['wap_pay_use_get'];
        }

        return $model;
    }
}
