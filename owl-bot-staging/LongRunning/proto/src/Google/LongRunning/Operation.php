<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/longrunning/operations.proto

namespace Google\LongRunning;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This resource represents a long-running operation that is the result of a
 * network API call.
 *
 * Generated from protobuf message <code>google.longrunning.Operation</code>
 */
class Operation extends \Google\Protobuf\Internal\Message
{
    /**
     * The server-assigned name, which is only unique within the same service that
     * originally returns it. If you use the default HTTP mapping, the
     * `name` should be a resource name ending with `operations/{unique_id}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Service-specific metadata associated with the operation.  It typically
     * contains progress information and common metadata such as create time.
     * Some services might not provide such metadata.  Any method that returns a
     * long-running operation should document the metadata type, if any.
     *
     * Generated from protobuf field <code>.google.protobuf.Any metadata = 2;</code>
     */
    protected $metadata = null;
    /**
     * If the value is `false`, it means the operation is still in progress.
     * If `true`, the operation is completed, and either `error` or `response` is
     * available.
     *
     * Generated from protobuf field <code>bool done = 3;</code>
     */
    protected $done = false;
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The server-assigned name, which is only unique within the same service that
     *           originally returns it. If you use the default HTTP mapping, the
     *           `name` should be a resource name ending with `operations/{unique_id}`.
     *     @type \Google\Protobuf\Any $metadata
     *           Service-specific metadata associated with the operation.  It typically
     *           contains progress information and common metadata such as create time.
     *           Some services might not provide such metadata.  Any method that returns a
     *           long-running operation should document the metadata type, if any.
     *     @type bool $done
     *           If the value is `false`, it means the operation is still in progress.
     *           If `true`, the operation is completed, and either `error` or `response` is
     *           available.
     *     @type \Google\Rpc\Status $error
     *           The error result of the operation in case of failure or cancellation.
     *     @type \Google\Protobuf\Any $response
     *           The normal response of the operation in case of success.  If the original
     *           method returns no data on success, such as `Delete`, the response is
     *           `google.protobuf.Empty`.  If the original method is standard
     *           `Get`/`Create`/`Update`, the response should be the resource.  For other
     *           methods, the response should have the type `XxxResponse`, where `Xxx`
     *           is the original method name.  For example, if the original method name
     *           is `TakeSnapshot()`, the inferred response type is
     *           `TakeSnapshotResponse`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * The server-assigned name, which is only unique within the same service that
     * originally returns it. If you use the default HTTP mapping, the
     * `name` should be a resource name ending with `operations/{unique_id}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The server-assigned name, which is only unique within the same service that
     * originally returns it. If you use the default HTTP mapping, the
     * `name` should be a resource name ending with `operations/{unique_id}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Service-specific metadata associated with the operation.  It typically
     * contains progress information and common metadata such as create time.
     * Some services might not provide such metadata.  Any method that returns a
     * long-running operation should document the metadata type, if any.
     *
     * Generated from protobuf field <code>.google.protobuf.Any metadata = 2;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Service-specific metadata associated with the operation.  It typically
     * contains progress information and common metadata such as create time.
     * Some services might not provide such metadata.  Any method that returns a
     * long-running operation should document the metadata type, if any.
     *
     * Generated from protobuf field <code>.google.protobuf.Any metadata = 2;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * If the value is `false`, it means the operation is still in progress.
     * If `true`, the operation is completed, and either `error` or `response` is
     * available.
     *
     * Generated from protobuf field <code>bool done = 3;</code>
     * @return bool
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * If the value is `false`, it means the operation is still in progress.
     * If `true`, the operation is completed, and either `error` or `response` is
     * available.
     *
     * Generated from protobuf field <code>bool done = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDone($var)
    {
        GPBUtil::checkBool($var);
        $this->done = $var;

        return $this;
    }

    /**
     * The error result of the operation in case of failure or cancellation.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 4;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->readOneof(4);
    }

    public function hasError()
    {
        return $this->hasOneof(4);
    }

    /**
     * The error result of the operation in case of failure or cancellation.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 4;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The normal response of the operation in case of success.  If the original
     * method returns no data on success, such as `Delete`, the response is
     * `google.protobuf.Empty`.  If the original method is standard
     * `Get`/`Create`/`Update`, the response should be the resource.  For other
     * methods, the response should have the type `XxxResponse`, where `Xxx`
     * is the original method name.  For example, if the original method name
     * is `TakeSnapshot()`, the inferred response type is
     * `TakeSnapshotResponse`.
     *
     * Generated from protobuf field <code>.google.protobuf.Any response = 5;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getResponse()
    {
        return $this->readOneof(5);
    }

    public function hasResponse()
    {
        return $this->hasOneof(5);
    }

    /**
     * The normal response of the operation in case of success.  If the original
     * method returns no data on success, such as `Delete`, the response is
     * `google.protobuf.Empty`.  If the original method is standard
     * `Get`/`Create`/`Update`, the response should be the resource.  For other
     * methods, the response should have the type `XxxResponse`, where `Xxx`
     * is the original method name.  For example, if the original method name
     * is `TakeSnapshot()`, the inferred response type is
     * `TakeSnapshotResponse`.
     *
     * Generated from protobuf field <code>.google.protobuf.Any response = 5;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}
