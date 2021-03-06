<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/mutate_job.proto

namespace Google\Ads\GoogleAds\V2\Resources\MutateJob;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional information about the mutate job. This message is also used as
 * metadata returned in mutate job Long Running Operations.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.MutateJob.MutateJobMetadata</code>
 */
final class MutateJobMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The time when this mutate job was created.
     * Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:00"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 1;</code>
     */
    private $creation_date_time = null;
    /**
     * The time when this mutate job was completed.
     * Formatted as yyyy-MM-dd HH:mm:ss. Example: "2018-03-05 09:16:00"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue completion_date_time = 2;</code>
     */
    private $completion_date_time = null;
    /**
     * The fraction (between 0.0 and 1.0) of mutates that have been processed.
     * This is empty if the job hasn't started running yet.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue estimated_completion_ratio = 3;</code>
     */
    private $estimated_completion_ratio = null;
    /**
     * The number of mutate operations in the mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value operation_count = 4;</code>
     */
    private $operation_count = null;
    /**
     * The number of mutate operations executed by the mutate job.
     * Present only if the job has started running.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value executed_operation_count = 5;</code>
     */
    private $executed_operation_count = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $creation_date_time
     *           The time when this mutate job was created.
     *           Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:00"
     *     @type \Google\Protobuf\StringValue $completion_date_time
     *           The time when this mutate job was completed.
     *           Formatted as yyyy-MM-dd HH:mm:ss. Example: "2018-03-05 09:16:00"
     *     @type \Google\Protobuf\DoubleValue $estimated_completion_ratio
     *           The fraction (between 0.0 and 1.0) of mutates that have been processed.
     *           This is empty if the job hasn't started running yet.
     *     @type \Google\Protobuf\Int64Value $operation_count
     *           The number of mutate operations in the mutate job.
     *     @type \Google\Protobuf\Int64Value $executed_operation_count
     *           The number of mutate operations executed by the mutate job.
     *           Present only if the job has started running.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\MutateJob::initOnce();
        parent::__construct($data);
    }

    /**
     * The time when this mutate job was created.
     * Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:00"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCreationDateTime()
    {
        return $this->creation_date_time;
    }

    /**
     * Returns the unboxed value from <code>getCreationDateTime()</code>

     * The time when this mutate job was created.
     * Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:00"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 1;</code>
     * @return string|null
     */
    public function getCreationDateTimeUnwrapped()
    {
        $wrapper = $this->getCreationDateTime();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The time when this mutate job was created.
     * Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:00"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCreationDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->creation_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The time when this mutate job was created.
     * Formatted as yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:00"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCreationDateTimeUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCreationDateTime($wrappedVar);
    }

    /**
     * The time when this mutate job was completed.
     * Formatted as yyyy-MM-dd HH:mm:ss. Example: "2018-03-05 09:16:00"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue completion_date_time = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCompletionDateTime()
    {
        return $this->completion_date_time;
    }

    /**
     * Returns the unboxed value from <code>getCompletionDateTime()</code>

     * The time when this mutate job was completed.
     * Formatted as yyyy-MM-dd HH:mm:ss. Example: "2018-03-05 09:16:00"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue completion_date_time = 2;</code>
     * @return string|null
     */
    public function getCompletionDateTimeUnwrapped()
    {
        $wrapper = $this->getCompletionDateTime();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The time when this mutate job was completed.
     * Formatted as yyyy-MM-dd HH:mm:ss. Example: "2018-03-05 09:16:00"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue completion_date_time = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCompletionDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->completion_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The time when this mutate job was completed.
     * Formatted as yyyy-MM-dd HH:mm:ss. Example: "2018-03-05 09:16:00"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue completion_date_time = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCompletionDateTimeUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCompletionDateTime($wrappedVar);
    }

    /**
     * The fraction (between 0.0 and 1.0) of mutates that have been processed.
     * This is empty if the job hasn't started running yet.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue estimated_completion_ratio = 3;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getEstimatedCompletionRatio()
    {
        return $this->estimated_completion_ratio;
    }

    /**
     * Returns the unboxed value from <code>getEstimatedCompletionRatio()</code>

     * The fraction (between 0.0 and 1.0) of mutates that have been processed.
     * This is empty if the job hasn't started running yet.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue estimated_completion_ratio = 3;</code>
     * @return float|null
     */
    public function getEstimatedCompletionRatioUnwrapped()
    {
        $wrapper = $this->getEstimatedCompletionRatio();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The fraction (between 0.0 and 1.0) of mutates that have been processed.
     * This is empty if the job hasn't started running yet.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue estimated_completion_ratio = 3;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setEstimatedCompletionRatio($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->estimated_completion_ratio = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * The fraction (between 0.0 and 1.0) of mutates that have been processed.
     * This is empty if the job hasn't started running yet.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue estimated_completion_ratio = 3;</code>
     * @param float|null $var
     * @return $this
     */
    public function setEstimatedCompletionRatioUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\DoubleValue(['value' => $var]);
        return $this->setEstimatedCompletionRatio($wrappedVar);
    }

    /**
     * The number of mutate operations in the mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value operation_count = 4;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getOperationCount()
    {
        return $this->operation_count;
    }

    /**
     * Returns the unboxed value from <code>getOperationCount()</code>

     * The number of mutate operations in the mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value operation_count = 4;</code>
     * @return int|string|null
     */
    public function getOperationCountUnwrapped()
    {
        $wrapper = $this->getOperationCount();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The number of mutate operations in the mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value operation_count = 4;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setOperationCount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->operation_count = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The number of mutate operations in the mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value operation_count = 4;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setOperationCountUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setOperationCount($wrappedVar);
    }

    /**
     * The number of mutate operations executed by the mutate job.
     * Present only if the job has started running.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value executed_operation_count = 5;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getExecutedOperationCount()
    {
        return $this->executed_operation_count;
    }

    /**
     * Returns the unboxed value from <code>getExecutedOperationCount()</code>

     * The number of mutate operations executed by the mutate job.
     * Present only if the job has started running.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value executed_operation_count = 5;</code>
     * @return int|string|null
     */
    public function getExecutedOperationCountUnwrapped()
    {
        $wrapper = $this->getExecutedOperationCount();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The number of mutate operations executed by the mutate job.
     * Present only if the job has started running.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value executed_operation_count = 5;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setExecutedOperationCount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->executed_operation_count = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The number of mutate operations executed by the mutate job.
     * Present only if the job has started running.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value executed_operation_count = 5;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setExecutedOperationCountUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setExecutedOperationCount($wrappedVar);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MutateJobMetadata::class, \Google\Ads\GoogleAds\V2\Resources\MutateJob_MutateJobMetadata::class);

