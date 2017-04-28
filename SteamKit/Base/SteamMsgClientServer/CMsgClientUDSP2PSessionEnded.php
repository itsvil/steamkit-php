<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientUDSP2PSessionEnded
 */
class CMsgClientUDSP2PSessionEnded extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * steamid_remote optional fixed64 = 1
     *
     * @var int
     */
    protected $steamid_remote = null;

    /**
     * appid optional int32 = 2
     *
     * @var int
     */
    protected $appid = null;

    /**
     * session_length_sec optional int32 = 3
     *
     * @var int
     */
    protected $session_length_sec = null;

    /**
     * session_error optional int32 = 4
     *
     * @var int
     */
    protected $session_error = null;

    /**
     * nattype optional int32 = 5
     *
     * @var int
     */
    protected $nattype = null;

    /**
     * bytes_recv optional int32 = 6
     *
     * @var int
     */
    protected $bytes_recv = null;

    /**
     * bytes_sent optional int32 = 7
     *
     * @var int
     */
    protected $bytes_sent = null;

    /**
     * bytes_sent_relay optional int32 = 8
     *
     * @var int
     */
    protected $bytes_sent_relay = null;

    /**
     * bytes_recv_relay optional int32 = 9
     *
     * @var int
     */
    protected $bytes_recv_relay = null;

    /**
     * time_to_connect_ms optional int32 = 10
     *
     * @var int
     */
    protected $time_to_connect_ms = null;

    /**
     * Check if 'steamid_remote' has a value
     *
     * @return bool
     */
    public function hasSteamidRemote()
    {
        return $this->steamid_remote !== null;
    }

    /**
     * Get 'steamid_remote' value
     *
     * @return int
     */
    public function getSteamidRemote()
    {
        return $this->steamid_remote;
    }

    /**
     * Set 'steamid_remote' value
     *
     * @param int $value
     */
    public function setSteamidRemote($value = null)
    {
        $this->steamid_remote = $value;
    }

    /**
     * Check if 'appid' has a value
     *
     * @return bool
     */
    public function hasAppid()
    {
        return $this->appid !== null;
    }

    /**
     * Get 'appid' value
     *
     * @return int
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set 'appid' value
     *
     * @param int $value
     */
    public function setAppid($value = null)
    {
        $this->appid = $value;
    }

    /**
     * Check if 'session_length_sec' has a value
     *
     * @return bool
     */
    public function hasSessionLengthSec()
    {
        return $this->session_length_sec !== null;
    }

    /**
     * Get 'session_length_sec' value
     *
     * @return int
     */
    public function getSessionLengthSec()
    {
        return $this->session_length_sec;
    }

    /**
     * Set 'session_length_sec' value
     *
     * @param int $value
     */
    public function setSessionLengthSec($value = null)
    {
        $this->session_length_sec = $value;
    }

    /**
     * Check if 'session_error' has a value
     *
     * @return bool
     */
    public function hasSessionError()
    {
        return $this->session_error !== null;
    }

    /**
     * Get 'session_error' value
     *
     * @return int
     */
    public function getSessionError()
    {
        return $this->session_error;
    }

    /**
     * Set 'session_error' value
     *
     * @param int $value
     */
    public function setSessionError($value = null)
    {
        $this->session_error = $value;
    }

    /**
     * Check if 'nattype' has a value
     *
     * @return bool
     */
    public function hasNattype()
    {
        return $this->nattype !== null;
    }

    /**
     * Get 'nattype' value
     *
     * @return int
     */
    public function getNattype()
    {
        return $this->nattype;
    }

    /**
     * Set 'nattype' value
     *
     * @param int $value
     */
    public function setNattype($value = null)
    {
        $this->nattype = $value;
    }

    /**
     * Check if 'bytes_recv' has a value
     *
     * @return bool
     */
    public function hasBytesRecv()
    {
        return $this->bytes_recv !== null;
    }

    /**
     * Get 'bytes_recv' value
     *
     * @return int
     */
    public function getBytesRecv()
    {
        return $this->bytes_recv;
    }

    /**
     * Set 'bytes_recv' value
     *
     * @param int $value
     */
    public function setBytesRecv($value = null)
    {
        $this->bytes_recv = $value;
    }

    /**
     * Check if 'bytes_sent' has a value
     *
     * @return bool
     */
    public function hasBytesSent()
    {
        return $this->bytes_sent !== null;
    }

    /**
     * Get 'bytes_sent' value
     *
     * @return int
     */
    public function getBytesSent()
    {
        return $this->bytes_sent;
    }

    /**
     * Set 'bytes_sent' value
     *
     * @param int $value
     */
    public function setBytesSent($value = null)
    {
        $this->bytes_sent = $value;
    }

    /**
     * Check if 'bytes_sent_relay' has a value
     *
     * @return bool
     */
    public function hasBytesSentRelay()
    {
        return $this->bytes_sent_relay !== null;
    }

    /**
     * Get 'bytes_sent_relay' value
     *
     * @return int
     */
    public function getBytesSentRelay()
    {
        return $this->bytes_sent_relay;
    }

    /**
     * Set 'bytes_sent_relay' value
     *
     * @param int $value
     */
    public function setBytesSentRelay($value = null)
    {
        $this->bytes_sent_relay = $value;
    }

    /**
     * Check if 'bytes_recv_relay' has a value
     *
     * @return bool
     */
    public function hasBytesRecvRelay()
    {
        return $this->bytes_recv_relay !== null;
    }

    /**
     * Get 'bytes_recv_relay' value
     *
     * @return int
     */
    public function getBytesRecvRelay()
    {
        return $this->bytes_recv_relay;
    }

    /**
     * Set 'bytes_recv_relay' value
     *
     * @param int $value
     */
    public function setBytesRecvRelay($value = null)
    {
        $this->bytes_recv_relay = $value;
    }

    /**
     * Check if 'time_to_connect_ms' has a value
     *
     * @return bool
     */
    public function hasTimeToConnectMs()
    {
        return $this->time_to_connect_ms !== null;
    }

    /**
     * Get 'time_to_connect_ms' value
     *
     * @return int
     */
    public function getTimeToConnectMs()
    {
        return $this->time_to_connect_ms;
    }

    /**
     * Set 'time_to_connect_ms' value
     *
     * @param int $value
     */
    public function setTimeToConnectMs($value = null)
    {
        $this->time_to_connect_ms = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'steamid_remote' => null,
            'appid' => null,
            'session_length_sec' => null,
            'session_error' => null,
            'nattype' => null,
            'bytes_recv' => null,
            'bytes_sent' => null,
            'bytes_sent_relay' => null,
            'bytes_recv_relay' => null,
            'time_to_connect_ms' => null
        ], $values);

        $message->setSteamidRemote($values['steamid_remote']);
        $message->setAppid($values['appid']);
        $message->setSessionLengthSec($values['session_length_sec']);
        $message->setSessionError($values['session_error']);
        $message->setNattype($values['nattype']);
        $message->setBytesRecv($values['bytes_recv']);
        $message->setBytesSent($values['bytes_sent']);
        $message->setBytesSentRelay($values['bytes_sent_relay']);
        $message->setBytesRecvRelay($values['bytes_recv_relay']);
        $message->setTimeToConnectMs($values['time_to_connect_ms']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientUDSP2PSessionEnded',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steamid_remote',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'session_length_sec',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'session_error',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'nattype',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'bytes_recv',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'bytes_sent',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'bytes_sent_relay',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'bytes_recv_relay',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'time_to_connect_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->steamid_remote !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->steamid_remote);
        }

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->session_length_sec !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->session_length_sec);
        }

        if ($this->session_error !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->session_error);
        }

        if ($this->nattype !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->nattype);
        }

        if ($this->bytes_recv !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->bytes_recv);
        }

        if ($this->bytes_sent !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->bytes_sent);
        }

        if ($this->bytes_sent_relay !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->bytes_sent_relay);
        }

        if ($this->bytes_recv_relay !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->bytes_recv_relay);
        }

        if ($this->time_to_connect_ms !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeVarint($stream, $this->time_to_connect_ms);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steamid_remote = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->appid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->session_length_sec = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->session_error = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->nattype = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->bytes_recv = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->bytes_sent = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->bytes_sent_relay = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->bytes_recv_relay = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->time_to_connect_ms = $reader->readVarint($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->steamid_remote !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->appid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->appid);
        }

        if ($this->session_length_sec !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->session_length_sec);
        }

        if ($this->session_error !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->session_error);
        }

        if ($this->nattype !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->nattype);
        }

        if ($this->bytes_recv !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->bytes_recv);
        }

        if ($this->bytes_sent !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->bytes_sent);
        }

        if ($this->bytes_sent_relay !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->bytes_sent_relay);
        }

        if ($this->bytes_recv_relay !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->bytes_recv_relay);
        }

        if ($this->time_to_connect_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->time_to_connect_ms);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->steamid_remote = null;
        $this->appid = null;
        $this->session_length_sec = null;
        $this->session_error = null;
        $this->nattype = null;
        $this->bytes_recv = null;
        $this->bytes_sent = null;
        $this->bytes_sent_relay = null;
        $this->bytes_recv_relay = null;
        $this->time_to_connect_ms = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientUDSP2PSessionEnded) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steamid_remote = ($message->steamid_remote !== null) ? $message->steamid_remote : $this->steamid_remote;
        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->session_length_sec = ($message->session_length_sec !== null) ? $message->session_length_sec : $this->session_length_sec;
        $this->session_error = ($message->session_error !== null) ? $message->session_error : $this->session_error;
        $this->nattype = ($message->nattype !== null) ? $message->nattype : $this->nattype;
        $this->bytes_recv = ($message->bytes_recv !== null) ? $message->bytes_recv : $this->bytes_recv;
        $this->bytes_sent = ($message->bytes_sent !== null) ? $message->bytes_sent : $this->bytes_sent;
        $this->bytes_sent_relay = ($message->bytes_sent_relay !== null) ? $message->bytes_sent_relay : $this->bytes_sent_relay;
        $this->bytes_recv_relay = ($message->bytes_recv_relay !== null) ? $message->bytes_recv_relay : $this->bytes_recv_relay;
        $this->time_to_connect_ms = ($message->time_to_connect_ms !== null) ? $message->time_to_connect_ms : $this->time_to_connect_ms;
    }


}
