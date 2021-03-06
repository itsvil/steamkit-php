<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientPICSAccessTokenResponse
 */
class CMsgClientPICSAccessTokenResponse extends \Protobuf\AbstractMessage
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
     * package_access_tokens repeated message = 1
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse\PackageToken>
     */
    protected $package_access_tokens = null;

    /**
     * package_denied_tokens repeated uint32 = 2
     *
     * @var \Protobuf\Collection
     */
    protected $package_denied_tokens = null;

    /**
     * app_access_tokens repeated message = 3
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse\AppToken>
     */
    protected $app_access_tokens = null;

    /**
     * app_denied_tokens repeated uint32 = 4
     *
     * @var \Protobuf\Collection
     */
    protected $app_denied_tokens = null;

    /**
     * Check if 'package_access_tokens' has a value
     *
     * @return bool
     */
    public function hasPackageAccessTokensList()
    {
        return $this->package_access_tokens !== null;
    }

    /**
     * Get 'package_access_tokens' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse\PackageToken>
     */
    public function getPackageAccessTokensList()
    {
        return $this->package_access_tokens;
    }

    /**
     * Set 'package_access_tokens' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse\PackageToken> $value
     */
    public function setPackageAccessTokensList(\Protobuf\Collection $value = null)
    {
        $this->package_access_tokens = $value;
    }

    /**
     * Add a new element to 'package_access_tokens'
     *
     * @param
     * \SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse\PackageToken
     * $value
     */
    public function addPackageAccessTokens(\SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse\PackageToken $value)
    {
        if ($this->package_access_tokens === null) {
            $this->package_access_tokens = new \Protobuf\MessageCollection();
        }

        $this->package_access_tokens->add($value);
    }

    /**
     * Check if 'package_denied_tokens' has a value
     *
     * @return bool
     */
    public function hasPackageDeniedTokensList()
    {
        return $this->package_denied_tokens !== null;
    }

    /**
     * Get 'package_denied_tokens' value
     *
     * @return \Protobuf\Collection
     */
    public function getPackageDeniedTokensList()
    {
        return $this->package_denied_tokens;
    }

    /**
     * Set 'package_denied_tokens' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setPackageDeniedTokensList(\Protobuf\Collection $value = null)
    {
        $this->package_denied_tokens = $value;
    }

    /**
     * Add a new element to 'package_denied_tokens'
     *
     * @param int $value
     */
    public function addPackageDeniedTokens($value)
    {
        if ($this->package_denied_tokens === null) {
            $this->package_denied_tokens = new \Protobuf\ScalarCollection();
        }

        $this->package_denied_tokens->add($value);
    }

    /**
     * Check if 'app_access_tokens' has a value
     *
     * @return bool
     */
    public function hasAppAccessTokensList()
    {
        return $this->app_access_tokens !== null;
    }

    /**
     * Get 'app_access_tokens' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse\AppToken>
     */
    public function getAppAccessTokensList()
    {
        return $this->app_access_tokens;
    }

    /**
     * Set 'app_access_tokens' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse\AppToken> $value
     */
    public function setAppAccessTokensList(\Protobuf\Collection $value = null)
    {
        $this->app_access_tokens = $value;
    }

    /**
     * Add a new element to 'app_access_tokens'
     *
     * @param
     * \SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse\AppToken
     * $value
     */
    public function addAppAccessTokens(\SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse\AppToken $value)
    {
        if ($this->app_access_tokens === null) {
            $this->app_access_tokens = new \Protobuf\MessageCollection();
        }

        $this->app_access_tokens->add($value);
    }

    /**
     * Check if 'app_denied_tokens' has a value
     *
     * @return bool
     */
    public function hasAppDeniedTokensList()
    {
        return $this->app_denied_tokens !== null;
    }

    /**
     * Get 'app_denied_tokens' value
     *
     * @return \Protobuf\Collection
     */
    public function getAppDeniedTokensList()
    {
        return $this->app_denied_tokens;
    }

    /**
     * Set 'app_denied_tokens' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setAppDeniedTokensList(\Protobuf\Collection $value = null)
    {
        $this->app_denied_tokens = $value;
    }

    /**
     * Add a new element to 'app_denied_tokens'
     *
     * @param int $value
     */
    public function addAppDeniedTokens($value)
    {
        if ($this->app_denied_tokens === null) {
            $this->app_denied_tokens = new \Protobuf\ScalarCollection();
        }

        $this->app_denied_tokens->add($value);
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
            'package_access_tokens' => [],
            'package_denied_tokens' => [],
            'app_access_tokens' => [],
            'app_denied_tokens' => []
        ], $values);

        foreach ($values['package_access_tokens'] as $item) {
            $message->addPackageAccessTokens($item);
        }

        foreach ($values['package_denied_tokens'] as $item) {
            $message->addPackageDeniedTokens($item);
        }

        foreach ($values['app_access_tokens'] as $item) {
            $message->addAppAccessTokens($item);
        }

        foreach ($values['app_denied_tokens'] as $item) {
            $message->addAppDeniedTokens($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientPICSAccessTokenResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'package_access_tokens',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientPICSAccessTokenResponse.PackageToken'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'package_denied_tokens',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'app_access_tokens',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientPICSAccessTokenResponse.AppToken'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'app_denied_tokens',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->package_access_tokens !== null) {
            foreach ($this->package_access_tokens as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->package_denied_tokens !== null) {
            foreach ($this->package_denied_tokens as $val) {
                $writer->writeVarint($stream, 16);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->app_access_tokens !== null) {
            foreach ($this->app_access_tokens as $val) {
                $writer->writeVarint($stream, 26);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->app_denied_tokens !== null) {
            foreach ($this->app_denied_tokens as $val) {
                $writer->writeVarint($stream, 32);
                $writer->writeVarint($stream, $val);
            }
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse\PackageToken();

                if ($this->package_access_tokens === null) {
                    $this->package_access_tokens = new \Protobuf\MessageCollection();
                }

                $this->package_access_tokens->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                if ($this->package_denied_tokens === null) {
                    $this->package_denied_tokens = new \Protobuf\ScalarCollection();
                }

                $this->package_denied_tokens->add($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse\AppToken();

                if ($this->app_access_tokens === null) {
                    $this->app_access_tokens = new \Protobuf\MessageCollection();
                }

                $this->app_access_tokens->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                if ($this->app_denied_tokens === null) {
                    $this->app_denied_tokens = new \Protobuf\ScalarCollection();
                }

                $this->app_denied_tokens->add($reader->readVarint($stream));

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

        if ($this->package_access_tokens !== null) {
            foreach ($this->package_access_tokens as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->package_denied_tokens !== null) {
            foreach ($this->package_denied_tokens as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->app_access_tokens !== null) {
            foreach ($this->app_access_tokens as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->app_denied_tokens !== null) {
            foreach ($this->app_denied_tokens as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
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
        $this->package_access_tokens = null;
        $this->package_denied_tokens = null;
        $this->app_access_tokens = null;
        $this->app_denied_tokens = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientPICSAccessTokenResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->package_access_tokens = ($message->package_access_tokens !== null) ? $message->package_access_tokens : $this->package_access_tokens;
        $this->package_denied_tokens = ($message->package_denied_tokens !== null) ? $message->package_denied_tokens : $this->package_denied_tokens;
        $this->app_access_tokens = ($message->app_access_tokens !== null) ? $message->app_access_tokens : $this->app_access_tokens;
        $this->app_denied_tokens = ($message->app_denied_tokens !== null) ? $message->app_denied_tokens : $this->app_denied_tokens;
    }


}

