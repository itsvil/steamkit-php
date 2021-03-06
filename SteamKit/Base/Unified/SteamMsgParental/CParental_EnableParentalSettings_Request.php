<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_parental.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgParental;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgParental.CParental_EnableParentalSettings_Request
 */
class CParental_EnableParentalSettings_Request extends \Protobuf\AbstractMessage
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
     * password optional string = 1
     *
     * @var string
     */
    protected $password = null;

    /**
     * settings optional message = 2
     *
     * @var \SteamKit\Base\Unified\SteamMsgParental\ParentalSettings
     */
    protected $settings = null;

    /**
     * sessionid optional string = 3
     *
     * @var string
     */
    protected $sessionid = null;

    /**
     * enablecode optional uint32 = 4
     *
     * @var int
     */
    protected $enablecode = null;

    /**
     * steamid optional fixed64 = 10
     *
     * @var int
     */
    protected $steamid = null;

    /**
     * Check if 'password' has a value
     *
     * @return bool
     */
    public function hasPassword()
    {
        return $this->password !== null;
    }

    /**
     * Get 'password' value
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set 'password' value
     *
     * @param string $value
     */
    public function setPassword($value = null)
    {
        $this->password = $value;
    }

    /**
     * Check if 'settings' has a value
     *
     * @return bool
     */
    public function hasSettings()
    {
        return $this->settings !== null;
    }

    /**
     * Get 'settings' value
     *
     * @return \SteamKit\Base\Unified\SteamMsgParental\ParentalSettings
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Set 'settings' value
     *
     * @param \SteamKit\Base\Unified\SteamMsgParental\ParentalSettings $value
     */
    public function setSettings(\SteamKit\Base\Unified\SteamMsgParental\ParentalSettings $value = null)
    {
        $this->settings = $value;
    }

    /**
     * Check if 'sessionid' has a value
     *
     * @return bool
     */
    public function hasSessionid()
    {
        return $this->sessionid !== null;
    }

    /**
     * Get 'sessionid' value
     *
     * @return string
     */
    public function getSessionid()
    {
        return $this->sessionid;
    }

    /**
     * Set 'sessionid' value
     *
     * @param string $value
     */
    public function setSessionid($value = null)
    {
        $this->sessionid = $value;
    }

    /**
     * Check if 'enablecode' has a value
     *
     * @return bool
     */
    public function hasEnablecode()
    {
        return $this->enablecode !== null;
    }

    /**
     * Get 'enablecode' value
     *
     * @return int
     */
    public function getEnablecode()
    {
        return $this->enablecode;
    }

    /**
     * Set 'enablecode' value
     *
     * @param int $value
     */
    public function setEnablecode($value = null)
    {
        $this->enablecode = $value;
    }

    /**
     * Check if 'steamid' has a value
     *
     * @return bool
     */
    public function hasSteamid()
    {
        return $this->steamid !== null;
    }

    /**
     * Get 'steamid' value
     *
     * @return int
     */
    public function getSteamid()
    {
        return $this->steamid;
    }

    /**
     * Set 'steamid' value
     *
     * @param int $value
     */
    public function setSteamid($value = null)
    {
        $this->steamid = $value;
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
            'password' => null,
            'settings' => null,
            'sessionid' => null,
            'enablecode' => null,
            'steamid' => null
        ], $values);

        $message->setPassword($values['password']);
        $message->setSettings($values['settings']);
        $message->setSessionid($values['sessionid']);
        $message->setEnablecode($values['enablecode']);
        $message->setSteamid($values['steamid']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CParental_EnableParentalSettings_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'password',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'settings',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.Unified.SteamMsgParental.ParentalSettings'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'sessionid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'enablecode',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'steamid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
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

        if ($this->password !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->password);
        }

        if ($this->settings !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->settings->serializedSize($sizeContext));
            $this->settings->writeTo($context);
        }

        if ($this->sessionid !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->sessionid);
        }

        if ($this->enablecode !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->enablecode);
        }

        if ($this->steamid !== null) {
            $writer->writeVarint($stream, 81);
            $writer->writeFixed64($stream, $this->steamid);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->password = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\Unified\SteamMsgParental\ParentalSettings();

                $this->settings = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->sessionid = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->enablecode = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steamid = $reader->readFixed64($stream);

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

        if ($this->password !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->password);
        }

        if ($this->settings !== null) {
            $innerSize = $this->settings->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->sessionid !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->sessionid);
        }

        if ($this->enablecode !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->enablecode);
        }

        if ($this->steamid !== null) {
            $size += 1;
            $size += 8;
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
        $this->password = null;
        $this->settings = null;
        $this->sessionid = null;
        $this->enablecode = null;
        $this->steamid = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgParental\CParental_EnableParentalSettings_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->password = ($message->password !== null) ? $message->password : $this->password;
        $this->settings = ($message->settings !== null) ? $message->settings : $this->settings;
        $this->sessionid = ($message->sessionid !== null) ? $message->sessionid : $this->sessionid;
        $this->enablecode = ($message->enablecode !== null) ? $message->enablecode : $this->enablecode;
        $this->steamid = ($message->steamid !== null) ? $message->steamid : $this->steamid;
    }


}

