<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_gamenotifications.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgGameNotifications;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgGameNotifications.CGameNotifications_EnumerateSessions_Request
 */
class CGameNotifications_EnumerateSessions_Request extends \Protobuf\AbstractMessage
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
     * appid optional uint32 = 1
     *
     * @var int
     */
    protected $appid = null;

    /**
     * include_all_user_messages optional bool = 3
     *
     * @var bool
     */
    protected $include_all_user_messages = null;

    /**
     * include_auth_user_message optional bool = 4
     *
     * @var bool
     */
    protected $include_auth_user_message = null;

    /**
     * language optional string = 5
     *
     * @var string
     */
    protected $language = null;

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
     * Check if 'include_all_user_messages' has a value
     *
     * @return bool
     */
    public function hasIncludeAllUserMessages()
    {
        return $this->include_all_user_messages !== null;
    }

    /**
     * Get 'include_all_user_messages' value
     *
     * @return bool
     */
    public function getIncludeAllUserMessages()
    {
        return $this->include_all_user_messages;
    }

    /**
     * Set 'include_all_user_messages' value
     *
     * @param bool $value
     */
    public function setIncludeAllUserMessages($value = null)
    {
        $this->include_all_user_messages = $value;
    }

    /**
     * Check if 'include_auth_user_message' has a value
     *
     * @return bool
     */
    public function hasIncludeAuthUserMessage()
    {
        return $this->include_auth_user_message !== null;
    }

    /**
     * Get 'include_auth_user_message' value
     *
     * @return bool
     */
    public function getIncludeAuthUserMessage()
    {
        return $this->include_auth_user_message;
    }

    /**
     * Set 'include_auth_user_message' value
     *
     * @param bool $value
     */
    public function setIncludeAuthUserMessage($value = null)
    {
        $this->include_auth_user_message = $value;
    }

    /**
     * Check if 'language' has a value
     *
     * @return bool
     */
    public function hasLanguage()
    {
        return $this->language !== null;
    }

    /**
     * Get 'language' value
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set 'language' value
     *
     * @param string $value
     */
    public function setLanguage($value = null)
    {
        $this->language = $value;
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
            'appid' => null,
            'include_all_user_messages' => null,
            'include_auth_user_message' => null,
            'language' => null
        ], $values);

        $message->setAppid($values['appid']);
        $message->setIncludeAllUserMessages($values['include_all_user_messages']);
        $message->setIncludeAuthUserMessage($values['include_auth_user_message']);
        $message->setLanguage($values['language']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CGameNotifications_EnumerateSessions_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'include_all_user_messages',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'include_auth_user_message',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'language',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
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

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->include_all_user_messages !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->include_all_user_messages);
        }

        if ($this->include_auth_user_message !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->include_auth_user_message);
        }

        if ($this->language !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->language);
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
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->appid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->include_all_user_messages = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->include_auth_user_message = $reader->readBool($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->language = $reader->readString($stream);

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

        if ($this->appid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->appid);
        }

        if ($this->include_all_user_messages !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->include_auth_user_message !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->language !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->language);
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
        $this->appid = null;
        $this->include_all_user_messages = null;
        $this->include_auth_user_message = null;
        $this->language = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_EnumerateSessions_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->include_all_user_messages = ($message->include_all_user_messages !== null) ? $message->include_all_user_messages : $this->include_all_user_messages;
        $this->include_auth_user_message = ($message->include_auth_user_message !== null) ? $message->include_auth_user_message : $this->include_auth_user_message;
        $this->language = ($message->language !== null) ? $message->language : $this->language;
    }


}

