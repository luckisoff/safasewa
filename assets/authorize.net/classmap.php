<?php 
    spl_autoload_extensions(".php"); /*  comma-separated list */
    spl_autoload_register();

/**
 * A map of classname => filename for SPL autoloading.
 *
 * @package AuthorizeNet
 */

$baseDir = __DIR__ ;
$libDir    = $baseDir . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR;
$sharedDir = $libDir . 'shared' . DIRECTORY_SEPARATOR;
$vendorDir = $baseDir . '/vendor';

return array(

    'Doctrine\Common\Annotations\Annotation' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation.php',
    'Doctrine\Common\Annotations\AnnotationException' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationException.php',
    'Doctrine\Common\Annotations\AnnotationReader' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php',
    'Doctrine\Common\Annotations\AnnotationRegistry' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php',
    'Doctrine\Common\Annotations\Annotation\Attribute' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Attribute.php',
    'Doctrine\Common\Annotations\Annotation\Attributes' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Attributes.php',
    'Doctrine\Common\Annotations\Annotation\Enum' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Enum.php',
    'Doctrine\Common\Annotations\Annotation\IgnoreAnnotation' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/IgnoreAnnotation.php',
    'Doctrine\Common\Annotations\Annotation\Required' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Required.php',
    'Doctrine\Common\Annotations\Annotation\Target' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Target.php',
    'Doctrine\Common\Annotations\CachedReader' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php',
    'Doctrine\Common\Annotations\DocLexer' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/DocLexer.php',
    'Doctrine\Common\Annotations\DocParser' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/DocParser.php',
    'Doctrine\Common\Annotations\FileCacheReader' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/FileCacheReader.php',
    'Doctrine\Common\Annotations\IndexedReader' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/IndexedReader.php',
    'Doctrine\Common\Annotations\PhpParser' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/PhpParser.php',
    'Doctrine\Common\Annotations\Reader' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php',
    'Doctrine\Common\Annotations\SimpleAnnotationReader' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/SimpleAnnotationReader.php',
    'Doctrine\Common\Annotations\TokenParser' => $vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations/TokenParser.php',
    'Doctrine\Common\Lexer\AbstractLexer' => $vendorDir . '/doctrine/lexer/lib/Doctrine/Common/Lexer/AbstractLexer.php',
    'Goetas\Xsd\XsdToPhp\Jms\Handler\BaseTypesHandler' => $vendorDir . '/goetas/xsd2php/lib/Jms/Handler/BaseTypesHandler.php',
    'Goetas\Xsd\XsdToPhp\Jms\Handler\XmlSchemaDateHandler' => $vendorDir . '/goetas/xsd2php/lib/Jms/Handler/XmlSchemaDateHandler.php',
    'JMS\Parser\AbstractLexer' => $vendorDir . '/jms/parser-lib/src/JMS/Parser/AbstractLexer.php',
    'JMS\Parser\AbstractParser' => $vendorDir . '/jms/parser-lib/src/JMS/Parser/AbstractParser.php',
    'JMS\Parser\SimpleLexer' => $vendorDir . '/jms/parser-lib/src/JMS/Parser/SimpleLexer.php',
    'JMS\Parser\SyntaxErrorException' => $vendorDir . '/jms/parser-lib/src/JMS/Parser/SyntaxErrorException.php',
    'JMS\Serializer\AbstractVisitor' => $vendorDir . '/jms/serializer/src/JMS/Serializer/AbstractVisitor.php',
    'JMS\Serializer\Context' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Context.php',
    'JMS\Serializer\DeserializationContext' => $vendorDir . '/jms/serializer/src/JMS/Serializer/DeserializationContext.php',
    'JMS\Serializer\GenericDeserializationVisitor' => $vendorDir . '/jms/serializer/src/JMS/Serializer/GenericDeserializationVisitor.php',
    'JMS\Serializer\GenericSerializationVisitor' => $vendorDir . '/jms/serializer/src/JMS/Serializer/GenericSerializationVisitor.php',
    'JMS\Serializer\GraphNavigator' => $vendorDir . '/jms/serializer/src/JMS/Serializer/GraphNavigator.php',
    'JMS\Serializer\JsonDeserializationVisitor' => $vendorDir . '/jms/serializer/src/JMS/Serializer/JsonDeserializationVisitor.php',
    'JMS\Serializer\JsonSerializationVisitor' => $vendorDir . '/jms/serializer/src/JMS/Serializer/JsonSerializationVisitor.php',
    'JMS\Serializer\SerializationContext' => $vendorDir . '/jms/serializer/src/JMS/Serializer/SerializationContext.php',
    'JMS\Serializer\Serializer' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Serializer.php',
    'JMS\Serializer\SerializerBuilder' => $vendorDir . '/jms/serializer/src/JMS/Serializer/SerializerBuilder.php',
    'JMS\Serializer\SerializerInterface' => $vendorDir . '/jms/serializer/src/JMS/Serializer/SerializerInterface.php',
    'JMS\Serializer\TypeParser' => $vendorDir . '/jms/serializer/src/JMS/Serializer/TypeParser.php',
    'JMS\Serializer\VisitorInterface' => $vendorDir . '/jms/serializer/src/JMS/Serializer/VisitorInterface.php',
    'JMS\Serializer\XmlDeserializationVisitor' => $vendorDir . '/jms/serializer/src/JMS/Serializer/XmlDeserializationVisitor.php',
    'JMS\Serializer\XmlSerializationVisitor' => $vendorDir . '/jms/serializer/src/JMS/Serializer/XmlSerializationVisitor.php',
    'JMS\Serializer\YamlSerializationVisitor' => $vendorDir . '/jms/serializer/src/JMS/Serializer/YamlSerializationVisitor.php',
    'JMS\Serializer\Annotation\Accessor' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/Accessor.php',
    'JMS\Serializer\Annotation\AccessorOrder' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/AccessorOrder.php',
    'JMS\Serializer\Annotation\AccessType' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/AccessType.php',
    'JMS\Serializer\Annotation\Discriminator' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/Discriminator.php',
    'JMS\Serializer\Annotation\Exclude' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/Exclude.php',
    'JMS\Serializer\Annotation\ExclusionPolicy' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/ExclusionPolicy.php',
    'JMS\Serializer\Annotation\Expose' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/Expose.php',
    'JMS\Serializer\Annotation\Groups' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/Groups.php',
    'JMS\Serializer\Annotation\HandlerCallback' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/HandlerCallback.php',
    'JMS\Serializer\Annotation\Inline' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/Inline.php',
    'JMS\Serializer\Annotation\MaxDepth' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/MaxDepth.php',
    'JMS\Serializer\Annotation\PostDeserialize' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/PostDeserialize.php',
    'JMS\Serializer\Annotation\PostSerialize' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/PostSerialize.php',
    'JMS\Serializer\Annotation\PreSerialize' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/PreSerialize.php',
    'JMS\Serializer\Annotation\ReadOnly' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/ReadOnly.php',
    'JMS\Serializer\Annotation\SerializedName' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/SerializedName.php',
    'JMS\Serializer\Annotation\Since' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/Since.php',
    'JMS\Serializer\Annotation\Type' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/Type.php',
    'JMS\Serializer\Annotation\Until' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/Until.php',
    'JMS\Serializer\Annotation\Version' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/Version.php',
    'JMS\Serializer\Annotation\VirtualProperty' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/VirtualProperty.php',
    'JMS\Serializer\Annotation\XmlAttribute' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/XmlAttribute.php',
    'JMS\Serializer\Annotation\XmlAttributeMap' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/XmlAttributeMap.php',
    'JMS\Serializer\Annotation\XmlCollection' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/XmlCollection.php',
    'JMS\Serializer\Annotation\XmlElement' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/XmlElement.php',
    'JMS\Serializer\Annotation\XmlKeyValuePairs' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/XmlKeyValuePairs.php',
    'JMS\Serializer\Annotation\XmlList' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/XmlList.php',
    'JMS\Serializer\Annotation\XmlMap' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/XmlMap.php',
    'JMS\Serializer\Annotation\XmlNamespace' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/XmlNamespace.php',
    'JMS\Serializer\Annotation\XmlRoot' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/XmlRoot.php',
    'JMS\Serializer\Annotation\XmlValue' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Annotation/XmlValue.php',
    'JMS\Serializer\Builder\CallbackDriverFactory' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Builder/CallbackDriverFactory.php',
    'JMS\Serializer\Builder\DefaultDriverFactory' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Builder/DefaultDriverFactory.php',
    'JMS\Serializer\Builder\DriverFactoryInterface' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Builder/DriverFactoryInterface.php',
    'JMS\Serializer\Construction\DoctrineObjectConstructor' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
    'JMS\Serializer\Construction\ObjectConstructorInterface' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Construction/ObjectConstructorInterface.php',
    'JMS\Serializer\Construction\UnserializeObjectConstructor' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Construction/UnserializeObjectConstructor.php',
    'JMS\Serializer\EventDispatcher\Event' => $vendorDir . '/jms/serializer/src/JMS/Serializer/EventDispatcher/Event.php',
    'JMS\Serializer\EventDispatcher\EventDispatcher' => $vendorDir . '/jms/serializer/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
    'JMS\Serializer\EventDispatcher\EventDispatcherInterface' => $vendorDir . '/jms/serializer/src/JMS/Serializer/EventDispatcher/EventDispatcherInterface.php',
    'JMS\Serializer\EventDispatcher\Events' => $vendorDir . '/jms/serializer/src/JMS/Serializer/EventDispatcher/Events.php',
    'JMS\Serializer\EventDispatcher\EventSubscriberInterface' => $vendorDir . '/jms/serializer/src/JMS/Serializer/EventDispatcher/EventSubscriberInterface.php',
    'JMS\Serializer\EventDispatcher\LazyEventDispatcher' => $vendorDir . '/jms/serializer/src/JMS/Serializer/EventDispatcher/LazyEventDispatcher.php',
    'JMS\Serializer\EventDispatcher\ObjectEvent' => $vendorDir . '/jms/serializer/src/JMS/Serializer/EventDispatcher/ObjectEvent.php',
    'JMS\Serializer\EventDispatcher\PreDeserializeEvent' => $vendorDir . '/jms/serializer/src/JMS/Serializer/EventDispatcher/PreDeserializeEvent.php',
    'JMS\Serializer\EventDispatcher\PreSerializeEvent' => $vendorDir . '/jms/serializer/src/JMS/Serializer/EventDispatcher/PreSerializeEvent.php',
    'JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber' => $vendorDir . '/jms/serializer/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
    'JMS\Serializer\EventDispatcher\Subscriber\SymfonyValidatorSubscriber' => $vendorDir . '/jms/serializer/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.php',
    'JMS\Serializer\Exception\Exception' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Exception/Exception.php',
    'JMS\Serializer\Exception\InvalidArgumentException' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Exception/InvalidArgumentException.php',
    'JMS\Serializer\Exception\LogicException' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Exception/LogicException.php',
    'JMS\Serializer\Exception\RuntimeException' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Exception/RuntimeException.php',
    'JMS\Serializer\Exception\UnsupportedFormatException' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Exception/UnsupportedFormatException.php',
    'JMS\Serializer\Exception\ValidationFailedException' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Exception/ValidationFailedException.php',
    'JMS\Serializer\Exception\XmlErrorException' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Exception/XmlErrorException.php',
    'JMS\Serializer\Exclusion\DepthExclusionStrategy' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Exclusion/DepthExclusionStrategy.php',
    'JMS\Serializer\Exclusion\DisjunctExclusionStrategy' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Exclusion/DisjunctExclusionStrategy.php',
    'JMS\Serializer\Exclusion\ExclusionStrategyInterface' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Exclusion/ExclusionStrategyInterface.php',
    'JMS\Serializer\Exclusion\GroupsExclusionStrategy' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
    'JMS\Serializer\Exclusion\VersionExclusionStrategy' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Exclusion/VersionExclusionStrategy.php',
    'JMS\Serializer\Handler\ArrayCollectionHandler' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
    'JMS\Serializer\Handler\ConstraintViolationHandler' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
    'JMS\Serializer\Handler\DateHandler' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Handler/DateHandler.php',
    'JMS\Serializer\Handler\FormErrorHandler' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Handler/FormErrorHandler.php',
    'JMS\Serializer\Handler\HandlerRegistry' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Handler/HandlerRegistry.php',
    'JMS\Serializer\Handler\HandlerRegistryInterface' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Handler/HandlerRegistryInterface.php',
    'JMS\Serializer\Handler\LazyHandlerRegistry' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Handler/LazyHandlerRegistry.php',
    'JMS\Serializer\Handler\PhpCollectionHandler' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
    'JMS\Serializer\Handler\PropelCollectionHandler' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Handler/PropelCollectionHandler.php',
    'JMS\Serializer\Handler\SubscribingHandlerInterface' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Handler/SubscribingHandlerInterface.php',
    'JMS\Serializer\Metadata\ClassMetadata' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Metadata/ClassMetadata.php',
    'JMS\Serializer\Metadata\PropertyMetadata' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Metadata/PropertyMetadata.php',
    'JMS\Serializer\Metadata\StaticPropertyMetadata' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Metadata/StaticPropertyMetadata.php',
    'JMS\Serializer\Metadata\VirtualPropertyMetadata' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Metadata/VirtualPropertyMetadata.php',
    'JMS\Serializer\Metadata\Driver\AbstractDoctrineTypeDriver' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
    'JMS\Serializer\Metadata\Driver\AnnotationDriver' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
    'JMS\Serializer\Metadata\Driver\DoctrinePHPCRTypeDriver' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
    'JMS\Serializer\Metadata\Driver\DoctrineTypeDriver' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
    'JMS\Serializer\Metadata\Driver\PhpDriver' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Metadata/Driver/PhpDriver.php',
    'JMS\Serializer\Metadata\Driver\XmlDriver' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
    'JMS\Serializer\Metadata\Driver\YamlDriver' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
    'JMS\Serializer\Naming\CacheNamingStrategy' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Naming/CacheNamingStrategy.php',
    'JMS\Serializer\Naming\CamelCaseNamingStrategy' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Naming/CamelCaseNamingStrategy.php',
    'JMS\Serializer\Naming\IdenticalPropertyNamingStrategy' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Naming/IdenticalPropertyNamingStrategy.php',
    'JMS\Serializer\Naming\PropertyNamingStrategyInterface' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Naming/PropertyNamingStrategyInterface.php',
    'JMS\Serializer\Naming\SerializedNameAnnotationStrategy' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Naming/SerializedNameAnnotationStrategy.php',
    'JMS\Serializer\Twig\SerializerExtension' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Twig/SerializerExtension.php',
    'JMS\Serializer\Util\Writer' => $vendorDir . '/jms/serializer/src/JMS/Serializer/Util/Writer.php',
    'Metadata\Cache\CacheInterface' => $vendorDir . '/jms/metadata/src/Metadata/Cache/CacheInterface.php',
    'Metadata\Cache\DoctrineCacheAdapter' => $vendorDir . '/jms/metadata/src/Metadata/Cache/DoctrineCacheAdapter.php',
    'Metadata\Cache\FileCache' => $vendorDir . '/jms/metadata/src/Metadata/Cache/FileCache.php',
    'Metadata\ClassHierarchyMetadata' => $vendorDir . '/jms/metadata/src/Metadata/ClassHierarchyMetadata.php',
    'Metadata\ClassMetadata' => $vendorDir . '/jms/metadata/src/Metadata/ClassMetadata.php',
    'Metadata\Driver\AbstractFileDriver' => $vendorDir . '/jms/metadata/src/Metadata/Driver/AbstractFileDriver.php',
    'Metadata\Driver\AdvancedDriverInterface' => $vendorDir . '/jms/metadata/src/Metadata/Driver/AdvancedDriverInterface.php',
    'Metadata\Driver\AdvancedFileLocatorInterface' => $vendorDir . '/jms/metadata/src/Metadata/Driver/AdvancedFileLocatorInterface.php',
    'Metadata\Driver\DriverChain' => $vendorDir . '/jms/metadata/src/Metadata/Driver/DriverChain.php',
    'Metadata\Driver\DriverInterface' => $vendorDir . '/jms/metadata/src/Metadata/Driver/DriverInterface.php',
    'Metadata\Driver\FileLocator' => $vendorDir . '/jms/metadata/src/Metadata/Driver/FileLocator.php',
    'Metadata\Driver\FileLocatorInterface' => $vendorDir . '/jms/metadata/src/Metadata/Driver/FileLocatorInterface.php',
    'Metadata\Driver\LazyLoadingDriver' => $vendorDir . '/jms/metadata/src/Metadata/Driver/LazyLoadingDriver.php',
    'Metadata\AdvancedMetadataFactoryInterface' => $vendorDir . '/jms/metadata/src/Metadata/AdvancedMetadataFactoryInterface.php',
    'Metadata\MergeableClassMetadata' => $vendorDir . '/jms/metadata/src/Metadata/MergeableClassMetadata.php',
    'Metadata\MergeableInterface' => $vendorDir . '/jms/metadata/src/Metadata/MergeableInterface.php',
    'Metadata\MetadataFactory' => $vendorDir . '/jms/metadata/src/Metadata/MetadataFactory.php',
    'Metadata\MetadataFactoryInterface' => $vendorDir . '/jms/metadata/src/Metadata/MetadataFactoryInterface.php',
    'Metadata\MethodMetadata' => $vendorDir . '/jms/metadata/src/Metadata/MethodMetadata.php',
    'Metadata\NullMetadata' => $vendorDir . '/jms/metadata/src/Metadata/NullMetadata.php',
    'Metadata\PropertyMetadata' => $vendorDir . '/jms/metadata/src/Metadata/PropertyMetadata.php',
    'Metadata\Version' => $vendorDir . '/jms/metadata/src/Metadata/Version.php',
    'PhpCollection\AbstractCollection' => $vendorDir . '/phpcollection/phpcollection/src/PhpCollection/AbstractCollection.php',
    'PhpCollection\AbstractMap' => $vendorDir . '/phpcollection/phpcollection/src/PhpCollection/AbstractMap.php',
    'PhpCollection\AbstractSequence' => $vendorDir . '/phpcollection/phpcollection/src/PhpCollection/AbstractSequence.php',
    'PhpCollection\CollectionInterface' => $vendorDir . '/phpcollection/phpcollection/src/PhpCollection/CollectionInterface.php',
    'PhpCollection\Map' => $vendorDir . '/phpcollection/phpcollection/src/PhpCollection/Map.php',
    'PhpCollection\MapInterface' => $vendorDir . '/phpcollection/phpcollection/src/PhpCollection/MapInterface.php',
    'PhpCollection\Sequence' => $vendorDir . '/phpcollection/phpcollection/src/PhpCollection/Sequence.php',
    'PhpCollection\SequenceInterface' => $vendorDir . '/phpcollection/phpcollection/src/PhpCollection/SequenceInterface.php',
    'PhpCollection\SortableInterface' => $vendorDir . '/phpcollection/phpcollection/src/PhpCollection/SortableInterface.php',
    'PhpCollection\SortedSequence' => $vendorDir . '/phpcollection/phpcollection/src/PhpCollection/SortedSequence.php',
    'PhpOption\LazyOption' => $vendorDir . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
    'PhpOption\None' => $vendorDir . '/phpoption/phpoption/src/PhpOption/None.php',
    'PhpOption\Option' => $vendorDir . '/phpoption/phpoption/src/PhpOption/Option.php',
    'PhpOption\Some' => $vendorDir . '/phpoption/phpoption/src/PhpOption/Some.php',

    'AuthorizeNetAIM'            => $libDir    . 'AuthorizeNetAIM.php',
    'AuthorizeNetAIM_Response'   => $libDir    . 'AuthorizeNetAIM.php',
    'AuthorizeNetARB'            => $libDir    . 'AuthorizeNetARB.php',
    'AuthorizeNetARB_Response'   => $libDir    . 'AuthorizeNetARB.php',
    'AuthorizeNetAddress'        => $sharedDir . 'AuthorizeNetTypes.php',
    'AuthorizeNetBankAccount'    => $sharedDir . 'AuthorizeNetTypes.php',
    'AuthorizeNetCIM'            => $libDir    . 'AuthorizeNetCIM.php',
    'AuthorizeNetCIM_Response'   => $libDir    . 'AuthorizeNetCIM.php',
    'AuthorizeNetCP'             => $libDir    . 'AuthorizeNetCP.php',
    'AuthorizeNetCP_Response'    => $libDir    . 'AuthorizeNetCP.php',
    'AuthorizeNetCreditCard'     => $sharedDir . 'AuthorizeNetTypes.php',
    'AuthorizeNetCustomer'       => $sharedDir . 'AuthorizeNetTypes.php',
    'AuthorizeNetDPM'            => $libDir    . 'AuthorizeNetDPM.php',
    'AuthorizeNetException'      => $sharedDir . 'AuthorizeNetException.php',
    'AuthorizeNetLineItem'       => $sharedDir . 'AuthorizeNetTypes.php',
    'AuthorizeNetPayment'        => $sharedDir . 'AuthorizeNetTypes.php',
    'AuthorizeNetPaymentProfile' => $sharedDir . 'AuthorizeNetTypes.php',
    'AuthorizeNetRequest'        => $sharedDir . 'AuthorizeNetRequest.php',
    'AuthorizeNetResponse'       => $sharedDir . 'AuthorizeNetResponse.php',
    'AuthorizeNetSIM'            => $libDir    . 'AuthorizeNetSIM.php',
    'AuthorizeNetSIM_Form'       => $libDir    . 'AuthorizeNetSIM.php',
    'AuthorizeNetSOAP'           => $libDir    . 'AuthorizeNetSOAP.php',
    'AuthorizeNetTD'             => $libDir    . 'AuthorizeNetTD.php',
    'AuthorizeNetTD_Response'    => $libDir    . 'AuthorizeNetTD.php',
    'AuthorizeNetTransaction'    => $sharedDir . 'AuthorizeNetTypes.php',
    'AuthorizeNetXMLResponse'    => $sharedDir . 'AuthorizeNetXMLResponse.php',
    'AuthorizeNet_Subscription'  => $sharedDir . 'AuthorizeNetTypes.php',
    'AuthorizeNetGetSubscriptionList'     => $sharedDir . 'AuthorizeNetTypes.php',
    'AuthorizeNetSubscriptionListSorting' => $sharedDir . 'AuthorizeNetTypes.php',
    'AuthorizeNetSubscriptionListPaging'  => $sharedDir . 'AuthorizeNetTypes.php',

    /*  Following section contains the new controller model classes needed */
    /* Utils */
    /* 'net\authorize\util\ObjectToXml' => $libDir . 'net/authorize/util/ObjectToXml.php', */
    'net\authorize\util\HttpClient' => $libDir . 'net/authorize/util/HttpClient.php',

    /* constants */
    'net\authorize\api\constants\ANetEnvironment' => $libDir . 'net/authorize/api/constants/ANetEnvironment.php',

    /* base classes */
    'net\authorize\api\controller\base\IApiOperation' => $libDir . 'net/authorize/api/controller/base/IApiOperation.php',
    'net\authorize\api\controller\base\ApiOperationBase' => $libDir . 'net/authorize/api/controller/base/ApiOperationBase.php',

    /* following are generated class mappings */
    'net\authorize\api\contract\v1\ANetApiRequestType' => $libDir . 'net/authorize/api/contract/v1/ANetApiRequestType.php',
    'net\authorize\api\contract\v1\ANetApiResponseType' => $libDir . 'net/authorize/api/contract/v1/ANetApiResponseType.php',
    'net\authorize\api\contract\v1\ARBCancelSubscriptionRequest' => $libDir . 'net/authorize/api/contract/v1/ARBCancelSubscriptionRequest.php',
    'net\authorize\api\contract\v1\ARBCancelSubscriptionResponse' => $libDir . 'net/authorize/api/contract/v1/ARBCancelSubscriptionResponse.php',
    'net\authorize\api\contract\v1\ARBCreateSubscriptionRequest' => $libDir . 'net/authorize/api/contract/v1/ARBCreateSubscriptionRequest.php',
    'net\authorize\api\contract\v1\ARBCreateSubscriptionResponse' => $libDir . 'net/authorize/api/contract/v1/ARBCreateSubscriptionResponse.php',
    'net\authorize\api\contract\v1\ARBGetSubscriptionListRequest' => $libDir . 'net/authorize/api/contract/v1/ARBGetSubscriptionListRequest.php',
    'net\authorize\api\contract\v1\ARBGetSubscriptionListResponse' => $libDir . 'net/authorize/api/contract/v1/ARBGetSubscriptionListResponse.php',
    'net\authorize\api\contract\v1\ARBGetSubscriptionListSortingType' => $libDir . 'net/authorize/api/contract/v1/ARBGetSubscriptionListSortingType.php',
    'net\authorize\api\contract\v1\ARBGetSubscriptionStatusRequest' => $libDir . 'net/authorize/api/contract/v1/ARBGetSubscriptionStatusRequest.php',
    'net\authorize\api\contract\v1\ARBGetSubscriptionStatusResponse' => $libDir . 'net/authorize/api/contract/v1/ARBGetSubscriptionStatusResponse.php',
    'net\authorize\api\contract\v1\ARBSubscriptionType' => $libDir . 'net/authorize/api/contract/v1/ARBSubscriptionType.php',
    'net\authorize\api\contract\v1\ARBUpdateSubscriptionRequest' => $libDir . 'net/authorize/api/contract/v1/ARBUpdateSubscriptionRequest.php',
    'net\authorize\api\contract\v1\ARBUpdateSubscriptionResponse' => $libDir . 'net/authorize/api/contract/v1/ARBUpdateSubscriptionResponse.php',
    'net\authorize\api\contract\v1\ArrayOfSettingType' => $libDir . 'net/authorize/api/contract/v1/ArrayOfSettingType.php',
    'net\authorize\api\contract\v1\AuthenticateTestRequest' => $libDir . 'net/authorize/api/contract/v1/AuthenticateTestRequest.php',
    'net\authorize\api\contract\v1\AuthenticateTestResponse' => $libDir . 'net/authorize/api/contract/v1/AuthenticateTestResponse.php',
    'net\authorize\api\contract\v1\BankAccountMaskedType' => $libDir . 'net/authorize/api/contract/v1/BankAccountMaskedType.php',
    'net\authorize\api\contract\v1\BankAccountType' => $libDir . 'net/authorize/api/contract/v1/Bank`AccountType.php',
    'net\authorize\api\contract\v1\BatchDetailsType' => $libDir . 'net/authorize/api/contract/v1/BatchDetailsType.php',
    'net\authorize\api\contract\v1\BatchStatisticType' => $libDir . 'net/authorize/api/contract/v1/BatchStatisticType.php',
    'net\authorize\api\contract\v1\CcAuthenticationType' => $libDir . 'net/authorize/api/contract/v1/CcAuthenticationType.php',
    'net\authorize\api\contract\v1\CreateCustomerPaymentProfileRequest' => $libDir . 'net/authorize/api/contract/v1/CreateCustomerPaymentProfileRequest.php',
    'net\authorize\api\contract\v1\CreateCustomerPaymentProfileResponse' => $libDir . 'net/authorize/api/contract/v1/CreateCustomerPaymentProfileResponse.php',
    'net\authorize\api\contract\v1\CreateCustomerProfileFromTransactionRequest' => $libDir . 'net/authorize/api/contract/v1/CreateCustomerProfileFromTransactionRequest.php',
    'net\authorize\api\contract\v1\CreateCustomerProfileRequest' => $libDir . 'net/authorize/api/contract/v1/CreateCustomerProfileRequest.php',
    'net\authorize\api\contract\v1\CreateCustomerProfileResponse' => $libDir . 'net/authorize/api/contract/v1/CreateCustomerProfileResponse.php',
    'net\authorize\api\contract\v1\CreateCustomerProfileTransactionRequest' => $libDir . 'net/authorize/api/contract/v1/CreateCustomerProfileTransactionRequest.php',
    'net\authorize\api\contract\v1\CreateCustomerProfileTransactionResponse' => $libDir . 'net/authorize/api/contract/v1/CreateCustomerProfileTransactionResponse.php',
    'net\authorize\api\contract\v1\CreateCustomerShippingAddressRequest' => $libDir . 'net/authorize/api/contract/v1/CreateCustomerShippingAddressRequest.php',
    'net\authorize\api\contract\v1\CreateCustomerShippingAddressResponse' => $libDir . 'net/authorize/api/contract/v1/CreateCustomerShippingAddressResponse.php',
    'net\authorize\api\contract\v1\CreateFingerPrintRequest' => $libDir . 'net/authorize/api/contract/v1/CreateFingerPrintRequest.php',
    'net\authorize\api\contract\v1\CreateFingerPrintResponse' => $libDir . 'net/authorize/api/contract/v1/CreateFingerPrintResponse.php',
    'net\authorize\api\contract\v1\CreateProfileResponseType' => $libDir . 'net/authorize/api/contract/v1/CreateProfileResponseType.php',
    'net\authorize\api\contract\v1\CreateTransactionRequest' => $libDir . 'net/authorize/api/contract/v1/CreateTransactionRequest.php',
    'net\authorize\api\contract\v1\CreateTransactionResponse' => $libDir . 'net/authorize/api/contract/v1/CreateTransactionResponse.php',
    'net\authorize\api\contract\v1\CreditCardMaskedType' => $libDir . 'net/authorize/api/contract/v1/CreditCardMaskedType.php',
    'net\authorize\api\contract\v1\CreditCardSimpleType' => $libDir . 'net/authorize/api/contract/v1/CreditCardSimpleType.php',
    'net\authorize\api\contract\v1\CreditCardTrackType' => $libDir . 'net/authorize/api/contract/v1/CreditCardTrackType.php',
    'net\authorize\api\contract\v1\CreditCardType' => $libDir . 'net/authorize/api/contract/v1/CreditCardType.php',
    'net\authorize\api\contract\v1\CustomerAddressExType' => $libDir . 'net/authorize/api/contract/v1/CustomerAddressExType.php',
    'net\authorize\api\contract\v1\CustomerAddressType' => $libDir . 'net/authorize/api/contract/v1/CustomerAddressType.php',
    'net\authorize\api\contract\v1\CustomerDataType' => $libDir . 'net/authorize/api/contract/v1/CustomerDataType.php',
    'net\authorize\api\contract\v1\CustomerPaymentProfileBaseType' => $libDir . 'net/authorize/api/contract/v1/CustomerPaymentProfileBaseType.php',
    'net\authorize\api\contract\v1\CustomerPaymentProfileExType' => $libDir . 'net/authorize/api/contract/v1/CustomerPaymentProfileExType.php',
    'net\authorize\api\contract\v1\CustomerPaymentProfileMaskedType' => $libDir . 'net/authorize/api/contract/v1/CustomerPaymentProfileMaskedType.php',
    'net\authorize\api\contract\v1\CustomerPaymentProfileType' => $libDir . 'net/authorize/api/contract/v1/CustomerPaymentProfileType.php',
    'net\authorize\api\contract\v1\CustomerProfileBaseType' => $libDir . 'net/authorize/api/contract/v1/CustomerProfileBaseType.php',
    'net\authorize\api\contract\v1\CustomerProfileExType' => $libDir . 'net/authorize/api/contract/v1/CustomerProfileExType.php',
    'net\authorize\api\contract\v1\CustomerProfileMaskedType' => $libDir . 'net/authorize/api/contract/v1/CustomerProfileMaskedType.php',
    'net\authorize\api\contract\v1\CustomerProfilePaymentType' => $libDir . 'net/authorize/api/contract/v1/CustomerProfilePaymentType.php',
    'net\authorize\api\contract\v1\CustomerProfileSummaryType' => $libDir . 'net/authorize/api/contract/v1/CustomerProfileSummaryType.php',
    'net\authorize\api\contract\v1\CustomerProfileType' => $libDir . 'net/authorize/api/contract/v1/CustomerProfileType.php',
    'net\authorize\api\contract\v1\CustomerType' => $libDir . 'net/authorize/api/contract/v1/CustomerType.php',
    'net\authorize\api\contract\v1\DeleteCustomerPaymentProfileRequest' => $libDir . 'net/authorize/api/contract/v1/DeleteCustomerPaymentProfileRequest.php',
    'net\authorize\api\contract\v1\DeleteCustomerPaymentProfileResponse' => $libDir . 'net/authorize/api/contract/v1/DeleteCustomerPaymentProfileResponse.php',
    'net\authorize\api\contract\v1\DeleteCustomerProfileRequest' => $libDir . 'net/authorize/api/contract/v1/DeleteCustomerProfileRequest.php',
    'net\authorize\api\contract\v1\DeleteCustomerProfileResponse' => $libDir . 'net/authorize/api/contract/v1/DeleteCustomerProfileResponse.php',
    'net\authorize\api\contract\v1\DeleteCustomerShippingAddressRequest' => $libDir . 'net/authorize/api/contract/v1/DeleteCustomerShippingAddressRequest.php',
    'net\authorize\api\contract\v1\DeleteCustomerShippingAddressResponse' => $libDir . 'net/authorize/api/contract/v1/DeleteCustomerShippingAddressResponse.php',
    'net\authorize\api\contract\v1\DriversLicenseMaskedType' => $libDir . 'net/authorize/api/contract/v1/DriversLicenseMaskedType.php',
    'net\authorize\api\contract\v1\DriversLicenseType' => $libDir . 'net/authorize/api/contract/v1/DriversLicenseType.php',
    'net\authorize\api\contract\v1\EmailSettingsType' => $libDir . 'net/authorize/api/contract/v1/EmailSettingsType.php',
    'net\authorize\api\contract\v1\EncryptedTrackDataType' => $libDir . 'net/authorize/api/contract/v1/EncryptedTrackDataType.php',
    'net\authorize\api\contract\v1\EnumCollection' => $libDir . 'net/authorize/api/contract/v1/EnumCollection.php',
    'net\authorize\api\contract\v1\ErrorResponse' => $libDir . 'net/authorize/api/contract/v1/ErrorResponse.php',
    'net\authorize\api\contract\v1\ExtendedAmountType' => $libDir . 'net/authorize/api/contract/v1/ExtendedAmountType.php',
    'net\authorize\api\contract\v1\FDSFilterType' => $libDir . 'net/authorize/api/contract/v1/FDSFilterType.php',
    'net\authorize\api\contract\v1\FingerPrintSupportInformationType' => $libDir . 'net/authorize/api/contract/v1/FingerPrintSupportInformationType.php',
    'net\authorize\api\contract\v1\FingerPrintType' => $libDir . 'net/authorize/api/contract/v1/FingerPrintType.php',
    'net\authorize\api\contract\v1\GetBatchStatisticsRequest' => $libDir . 'net/authorize/api/contract/v1/GetBatchStatisticsRequest.php',
    'net\authorize\api\contract\v1\GetBatchStatisticsResponse' => $libDir . 'net/authorize/api/contract/v1/GetBatchStatisticsResponse.php',
    'net\authorize\api\contract\v1\GetCustomerPaymentProfileRequest' => $libDir . 'net/authorize/api/contract/v1/GetCustomerPaymentProfileRequest.php',
    'net\authorize\api\contract\v1\GetCustomerPaymentProfileResponse' => $libDir . 'net/authorize/api/contract/v1/GetCustomerPaymentProfileResponse.php',
    'net\authorize\api\contract\v1\GetCustomerProfileIdsRequest' => $libDir . 'net/authorize/api/contract/v1/GetCustomerProfileIdsRequest.php',
    'net\authorize\api\contract\v1\GetCustomerProfileIdsResponse' => $libDir . 'net/authorize/api/contract/v1/GetCustomerProfileIdsResponse.php',
    'net\authorize\api\contract\v1\GetCustomerProfileRequest' => $libDir . 'net/authorize/api/contract/v1/GetCustomerProfileRequest.php',
    'net\authorize\api\contract\v1\GetCustomerProfileResponse' => $libDir . 'net/authorize/api/contract/v1/GetCustomerProfileResponse.php',
    'net\authorize\api\contract\v1\GetCustomerShippingAddressRequest' => $libDir . 'net/authorize/api/contract/v1/GetCustomerShippingAddressRequest.php',
    'net\authorize\api\contract\v1\GetCustomerShippingAddressResponse' => $libDir . 'net/authorize/api/contract/v1/GetCustomerShippingAddressResponse.php',
    'net\authorize\api\contract\v1\GetHostedProfilePageRequest' => $libDir . 'net/authorize/api/contract/v1/GetHostedProfilePageRequest.php',
    'net\authorize\api\contract\v1\GetHostedProfilePageResponse' => $libDir . 'net/authorize/api/contract/v1/GetHostedProfilePageResponse.php',
    'net\authorize\api\contract\v1\GetSettledBatchListRequest' => $libDir . 'net/authorize/api/contract/v1/GetSettledBatchListRequest.php',
    'net\authorize\api\contract\v1\GetSettledBatchListResponse' => $libDir . 'net/authorize/api/contract/v1/GetSettledBatchListResponse.php',
    'net\authorize\api\contract\v1\GetTransactionDetailsRequest' => $libDir . 'net/authorize/api/contract/v1/GetTransactionDetailsRequest.php',
    'net\authorize\api\contract\v1\GetTransactionDetailsResponse' => $libDir . 'net/authorize/api/contract/v1/GetTransactionDetailsResponse.php',
    'net\authorize\api\contract\v1\GetTransactionListRequest' => $libDir . 'net/authorize/api/contract/v1/GetTransactionListRequest.php',
    'net\authorize\api\contract\v1\GetTransactionListResponse' => $libDir . 'net/authorize/api/contract/v1/GetTransactionListResponse.php',
    'net\authorize\api\contract\v1\GetUnsettledTransactionListRequest' => $libDir . 'net/authorize/api/contract/v1/GetUnsettledTransactionListRequest.php',
    'net\authorize\api\contract\v1\GetUnsettledTransactionListResponse' => $libDir . 'net/authorize/api/contract/v1/GetUnsettledTransactionListResponse.php',
    'net\authorize\api\contract\v1\ImpersonationAuthenticationType' => $libDir . 'net/authorize/api/contract/v1/ImpersonationAuthenticationType.php',
    'net\authorize\api\contract\v1\IsAliveRequest' => $libDir . 'net/authorize/api/contract/v1/IsAliveRequest.php',
    'net\authorize\api\contract\v1\IsAliveResponse' => $libDir . 'net/authorize/api/contract/v1/IsAliveResponse.php',
    'net\authorize\api\contract\v1\KeyBlockType' => $libDir . 'net/authorize/api/contract/v1/KeyBlockType.php',
    'net\authorize\api\contract\v1\KeyManagementSchemeType' => $libDir . 'net/authorize/api/contract/v1/KeyManagementSchemeType.php',
    'net\authorize\api\contract\v1\KeyValueType' => $libDir . 'net/authorize/api/contract/v1/KeyValueType.php',
    'net\authorize\api\contract\v1\LineItemType' => $libDir . 'net/authorize/api/contract/v1/LineItemType.php',
    'net\authorize\api\contract\v1\LogoutRequest' => $libDir . 'net/authorize/api/contract/v1/LogoutRequest.php',
    'net\authorize\api\contract\v1\LogoutResponse' => $libDir . 'net/authorize/api/contract/v1/LogoutResponse.php',
    'net\authorize\api\contract\v1\MerchantAuthenticationType' => $libDir . 'net/authorize/api/contract/v1/MerchantAuthenticationType.php',
    'net\authorize\api\contract\v1\MerchantContactType' => $libDir . 'net/authorize/api/contract/v1/MerchantContactType.php',
    'net\authorize\api\contract\v1\MessagesType' => $libDir . 'net/authorize/api/contract/v1/MessagesType.php',
    'net\authorize\api\contract\v1\MobileDeviceLoginRequest' => $libDir . 'net/authorize/api/contract/v1/MobileDeviceLoginRequest.php',
    'net\authorize\api\contract\v1\MobileDeviceLoginResponse' => $libDir . 'net/authorize/api/contract/v1/MobileDeviceLoginResponse.php',
    'net\authorize\api\contract\v1\MobileDeviceRegistrationRequest' => $libDir . 'net/authorize/api/contract/v1/MobileDeviceRegistrationRequest.php',
    'net\authorize\api\contract\v1\MobileDeviceRegistrationResponse' => $libDir . 'net/authorize/api/contract/v1/MobileDeviceRegistrationResponse.php',
    'net\authorize\api\contract\v1\MobileDeviceType' => $libDir . 'net/authorize/api/contract/v1/MobileDeviceType.php',
    'net\authorize\api\contract\v1\NameAndAddressType' => $libDir . 'net/authorize/api/contract/v1/NameAndAddressType.php',
    'net\authorize\api\contract\v1\OpaqueDataType' => $libDir . 'net/authorize/api/contract/v1/OpaqueDataType.php',
    'net\authorize\api\contract\v1\OrderExType' => $libDir . 'net/authorize/api/contract/v1/OrderExType.php',
    'net\authorize\api\contract\v1\OrderType' => $libDir . 'net/authorize/api/contract/v1/OrderType.php',
    'net\authorize\api\contract\v1\PagingType' => $libDir . 'net/authorize/api/contract/v1/PagingType.php',
    'net\authorize\api\contract\v1\PaymentMaskedType' => $libDir . 'net/authorize/api/contract/v1/PaymentMaskedType.php',
    'net\authorize\api\contract\v1\PaymentProfileType' => $libDir . 'net/authorize/api/contract/v1/PaymentProfileType.php',
    'net\authorize\api\contract\v1\PaymentScheduleType' => $libDir . 'net/authorize/api/contract/v1/PaymentScheduleType.php',
    'net\authorize\api\contract\v1\PaymentSimpleType' => $libDir . 'net/authorize/api/contract/v1/PaymentSimpleType.php',
    'net\authorize\api\contract\v1\PaymentType' => $libDir . 'net/authorize/api/contract/v1/PaymentType.php',
    'net\authorize\api\contract\v1\PayPalType' => $libDir . 'net/authorize/api/contract/v1/PayPalType.php',
    'net\authorize\api\contract\v1\PermissionType' => $libDir . 'net/authorize/api/contract/v1/PermissionType.php',
    'net\authorize\api\contract\v1\ProfileTransactionType' => $libDir . 'net/authorize/api/contract/v1/ProfileTransactionType.php',
    'net\authorize\api\contract\v1\ProfileTransAmountType' => $libDir . 'net/authorize/api/contract/v1/ProfileTransAmountType.php',
    'net\authorize\api\contract\v1\ProfileTransAuthCaptureType' => $libDir . 'net/authorize/api/contract/v1/ProfileTransAuthCaptureType.php',
    'net\authorize\api\contract\v1\ProfileTransAuthOnlyType' => $libDir . 'net/authorize/api/contract/v1/ProfileTransAuthOnlyType.php',
    'net\authorize\api\contract\v1\ProfileTransCaptureOnlyType' => $libDir . 'net/authorize/api/contract/v1/ProfileTransCaptureOnlyType.php',
    'net\authorize\api\contract\v1\ProfileTransOrderType' => $libDir . 'net/authorize/api/contract/v1/ProfileTransOrderType.php',
    'net\authorize\api\contract\v1\ProfileTransPriorAuthCaptureType' => $libDir . 'net/authorize/api/contract/v1/ProfileTransPriorAuthCaptureType.php',
    'net\authorize\api\contract\v1\ProfileTransRefundType' => $libDir . 'net/authorize/api/contract/v1/ProfileTransRefundType.php',
    'net\authorize\api\contract\v1\ProfileTransVoidType' => $libDir . 'net/authorize/api/contract/v1/ProfileTransVoidType.php',
    'net\authorize\api\contract\v1\ReturnedItemType' => $libDir . 'net/authorize/api/contract/v1/ReturnedItemType.php',
    'net\authorize\api\contract\v1\SearchCriteriaCustomerProfileType' => $libDir . 'net/authorize/api/contract/v1/SearchCriteriaCustomerProfileType.php',
    'net\authorize\api\contract\v1\SendCustomerTransactionReceiptRequest' => $libDir . 'net/authorize/api/contract/v1/SendCustomerTransactionReceiptRequest.php',
    'net\authorize\api\contract\v1\SendCustomerTransactionReceiptResponse' => $libDir . 'net/authorize/api/contract/v1/SendCustomerTransactionReceiptResponse.php',
    'net\authorize\api\contract\v1\SettingType' => $libDir . 'net/authorize/api/contract/v1/SettingType.php',
    'net\authorize\api\contract\v1\SolutionType' => $libDir . 'net/authorize/api/contract/v1/SolutionType.php',
    'net\authorize\api\contract\v1\SubscriptionDetailType' => $libDir . 'net/authorize/api/contract/v1/SubscriptionDetailType.php',
    'net\authorize\api\contract\v1\SubscriptionPaymentType' => $libDir . 'net/authorize/api/contract/v1/SubscriptionPaymentType.php',
    'net\authorize\api\contract\v1\TokenMaskedType' => $libDir . 'net/authorize/api/contract/v1/TokenMaskedType.php',
    'net\authorize\api\contract\v1\TransactionDetailsType' => $libDir . 'net/authorize/api/contract/v1/TransactionDetailsType.php',
    'net\authorize\api\contract\v1\TransactionRequestType' => $libDir . 'net/authorize/api/contract/v1/TransactionRequestType.php',
    'net\authorize\api\contract\v1\TransactionResponseType' => $libDir . 'net/authorize/api/contract/v1/TransactionResponseType.php',
    'net\authorize\api\contract\v1\TransactionSummaryType' => $libDir . 'net/authorize/api/contract/v1/TransactionSummaryType.php',
    'net\authorize\api\contract\v1\TransRetailInfoType' => $libDir . 'net/authorize/api/contract/v1/TransRetailInfoType.php',
    'net\authorize\api\contract\v1\UpdateCustomerPaymentProfileRequest' => $libDir . 'net/authorize/api/contract/v1/UpdateCustomerPaymentProfileRequest.php',
    'net\authorize\api\contract\v1\UpdateCustomerPaymentProfileResponse' => $libDir . 'net/authorize/api/contract/v1/UpdateCustomerPaymentProfileResponse.php',
    'net\authorize\api\contract\v1\UpdateCustomerProfileRequest' => $libDir . 'net/authorize/api/contract/v1/UpdateCustomerProfileRequest.php',
    'net\authorize\api\contract\v1\UpdateCustomerProfileResponse' => $libDir . 'net/authorize/api/contract/v1/UpdateCustomerProfileResponse.php',
    'net\authorize\api\contract\v1\UpdateCustomerShippingAddressRequest' => $libDir . 'net/authorize/api/contract/v1/UpdateCustomerShippingAddressRequest.php',
    'net\authorize\api\contract\v1\UpdateCustomerShippingAddressResponse' => $libDir . 'net/authorize/api/contract/v1/UpdateCustomerShippingAddressResponse.php',
    'net\authorize\api\contract\v1\UpdateSplitTenderGroupRequest' => $libDir . 'net/authorize/api/contract/v1/UpdateSplitTenderGroupRequest.php',
    'net\authorize\api\contract\v1\UpdateSplitTenderGroupResponse' => $libDir . 'net/authorize/api/contract/v1/UpdateSplitTenderGroupResponse.php',
    'net\authorize\api\contract\v1\UserFieldType' => $libDir . 'net/authorize/api/contract/v1/UserFieldType.php',
    'net\authorize\api\contract\v1\ValidateCustomerPaymentProfileRequest' => $libDir . 'net/authorize/api/contract/v1/ValidateCustomerPaymentProfileRequest.php',
    'net\authorize\api\contract\v1\ValidateCustomerPaymentProfileResponse' => $libDir . 'net/authorize/api/contract/v1/ValidateCustomerPaymentProfileResponse.php',
    'net\authorize\api\contract\v1\KeyManagementSchemeType\DUKPTAType' => $libDir . 'net/authorize/api/contract/v1/KeyManagementSchemeType/DUKPTAType.php',
    'net\authorize\api\contract\v1\KeyManagementSchemeType\DUKPTAType\DeviceInfoAType' => $libDir . 'net/authorize/api/contract/v1/KeyManagementSchemeType/DUKPTAType/DeviceInfoAType.php',
    'net\authorize\api\contract\v1\KeyManagementSchemeType\DUKPTAType\EncryptedDataAType' => $libDir . 'net/authorize/api/contract/v1/KeyManagementSchemeType/DUKPTAType/EncryptedDataAType.php',
    'net\authorize\api\contract\v1\KeyManagementSchemeType\DUKPTAType\ModeAType' => $libDir . 'net/authorize/api/contract/v1/KeyManagementSchemeType/DUKPTAType/ModeAType.php',
    'net\authorize\api\contract\v1\MessagesType\MessageAType' => $libDir . 'net/authorize/api/contract/v1/MessagesType/MessageAType.php',
    'net\authorize\api\contract\v1\PaymentScheduleType\IntervalAType' => $libDir . 'net/authorize/api/contract/v1/PaymentScheduleType/IntervalAType.php',
    'net\authorize\api\contract\v1\TransactionRequestType\UserFieldsAType' => $libDir . 'net/authorize/api/contract/v1/TransactionRequestType/UserFieldsAType.php',
    'net\authorize\api\contract\v1\TransactionResponseType\ErrorsAType' => $libDir . 'net/authorize/api/contract/v1/TransactionResponseType/ErrorsAType.php',
    'net\authorize\api\contract\v1\TransactionResponseType\MessagesAType' => $libDir . 'net/authorize/api/contract/v1/TransactionResponseType/MessagesAType.php',
    'net\authorize\api\contract\v1\TransactionResponseType\PrePaidCardAType' => $libDir . 'net/authorize/api/contract/v1/TransactionResponseType/PrePaidCardAType.php',
    'net\authorize\api\contract\v1\TransactionResponseType\SecureAcceptanceAType' => $libDir . 'net/authorize/api/contract/v1/TransactionResponseType/SecureAcceptanceAType.php',
    'net\authorize\api\contract\v1\TransactionResponseType\SplitTenderPaymentsAType' => $libDir . 'net/authorize/api/contract/v1/TransactionResponseType/SplitTenderPaymentsAType.php',
    'net\authorize\api\contract\v1\TransactionResponseType\UserFieldsAType' => $libDir . 'net/authorize/api/contract/v1/TransactionResponseType/UserFieldsAType.php',
    'net\authorize\api\contract\v1\TransactionResponseType\ErrorsAType\ErrorAType' => $libDir . 'net/authorize/api/contract/v1/TransactionResponseType/ErrorsAType/ErrorAType.php',
    'net\authorize\api\contract\v1\TransactionResponseType\MessagesAType\MessageAType' => $libDir . 'net/authorize/api/contract/v1/TransactionResponseType/MessagesAType/MessageAType.php',
    'net\authorize\api\contract\v1\TransactionResponseType\SplitTenderPaymentsAType\SplitTenderPaymentAType' => $libDir . 'net/authorize/api/contract/v1/TransactionResponseType/SplitTenderPaymentsAType/SplitTenderPaymentAType.php',

    /* Controllers */
    'net\authorize\api\controller\ARBCancelSubscriptionController' => $libDir . 'net/authorize/api/controller/ARBCancelSubscriptionController.php',
    'net\authorize\api\controller\ARBCreateSubscriptionController' => $libDir . 'net/authorize/api/controller/ARBCreateSubscriptionController.php',
    'net\authorize\api\controller\ARBGetSubscriptionListController' => $libDir . 'net/authorize/api/controller/ARBGetSubscriptionListController.php',
    'net\authorize\api\controller\ARBGetSubscriptionStatusController' => $libDir . 'net/authorize/api/controller/ARBGetSubscriptionStatusController.php',
    'net\authorize\api\controller\ARBUpdateSubscriptionController' => $libDir . 'net/authorize/api/controller/ARBUpdateSubscriptionController.php',
    'net\authorize\api\controller\AuthenticateTestController' => $libDir . 'net/authorize/api/controller/AuthenticateTestController.php',
    'net\authorize\api\controller\CreateCustomerPaymentProfileController' => $libDir . 'net/authorize/api/controller/CreateCustomerPaymentProfileController.php',
    'net\authorize\api\controller\CreateCustomerProfileController' => $libDir . 'net/authorize/api/controller/CreateCustomerProfileController.php',
    'net\authorize\api\controller\CreateCustomerProfileFromTransactionController' => $libDir . 'net/authorize/api/controller/CreateCustomerProfileFromTransactionController.php',
    'net\authorize\api\controller\CreateCustomerProfileTransactionController' => $libDir . 'net/authorize/api/controller/CreateCustomerProfileTransactionController.php',
    'net\authorize\api\controller\CreateCustomerShippingAddressController' => $libDir . 'net/authorize/api/controller/CreateCustomerShippingAddressController.php',
    'net\authorize\api\controller\CreateFingerPrintController' => $libDir . 'net/authorize/api/controller/CreateFingerPrintController.php',
    'net\authorize\api\controller\CreateTransactionController' => $libDir . 'net/authorize/api/controller/CreateTransactionController.php',
    'net\authorize\api\controller\DeleteCustomerPaymentProfileController' => $libDir . 'net/authorize/api/controller/DeleteCustomerPaymentProfileController.php',
    'net\authorize\api\controller\DeleteCustomerProfileController' => $libDir . 'net/authorize/api/controller/DeleteCustomerProfileController.php',
    'net\authorize\api\controller\DeleteCustomerShippingAddressController' => $libDir . 'net/authorize/api/controller/DeleteCustomerShippingAddressController.php',
    'net\authorize\api\controller\GetBatchStatisticsController' => $libDir . 'net/authorize/api/controller/GetBatchStatisticsController.php',
    'net\authorize\api\controller\GetCustomerPaymentProfileController' => $libDir . 'net/authorize/api/controller/GetCustomerPaymentProfileController.php',
    'net\authorize\api\controller\GetCustomerProfileController' => $libDir . 'net/authorize/api/controller/GetCustomerProfileController.php',
    'net\authorize\api\controller\GetCustomerProfileIdsController' => $libDir . 'net/authorize/api/controller/GetCustomerProfileIdsController.php',
    'net\authorize\api\controller\GetCustomerShippingAddressController' => $libDir . 'net/authorize/api/controller/GetCustomerShippingAddressController.php',
    'net\authorize\api\controller\GetHostedProfilePageController' => $libDir . 'net/authorize/api/controller/GetHostedProfilePageController.php',
    'net\authorize\api\controller\GetSettledBatchListController' => $libDir . 'net/authorize/api/controller/GetSettledBatchListController.php',
    'net\authorize\api\controller\GetTransactionDetailsController' => $libDir . 'net/authorize/api/controller/GetTransactionDetailsController.php',
    'net\authorize\api\controller\GetTransactionListController' => $libDir . 'net/authorize/api/controller/GetTransactionListController.php',
    'net\authorize\api\controller\GetUnsettledTransactionListController' => $libDir . 'net/authorize/api/controller/GetUnsettledTransactionListController.php',
    'net\authorize\api\controller\IsAliveController' => $libDir . 'net/authorize/api/controller/IsAliveController.php',
    'net\authorize\api\controller\LogoutController' => $libDir . 'net/authorize/api/controller/LogoutController.php',
    'net\authorize\api\controller\MobileDeviceLoginController' => $libDir . 'net/authorize/api/controller/MobileDeviceLoginController.php',
    'net\authorize\api\controller\MobileDeviceRegistrationController' => $libDir . 'net/authorize/api/controller/MobileDeviceRegistrationController.php',
    'net\authorize\api\controller\SendCustomerTransactionReceiptController' => $libDir . 'net/authorize/api/controller/SendCustomerTransactionReceiptController.php',
    'net\authorize\api\controller\UpdateCustomerPaymentProfileController' => $libDir . 'net/authorize/api/controller/UpdateCustomerPaymentProfileController.php',
    'net\authorize\api\controller\UpdateCustomerProfileController' => $libDir . 'net/authorize/api/controller/UpdateCustomerProfileController.php',
    'net\authorize\api\controller\UpdateCustomerShippingAddressController' => $libDir . 'net/authorize/api/controller/UpdateCustomerShippingAddressController.php',
    'net\authorize\api\controller\UpdateSplitTenderGroupController' => $libDir . 'net/authorize/api/controller/UpdateSplitTenderGroupController.php',
    'net\authorize\api\controller\ValidateCustomerPaymentProfileController' => $libDir . 'net/authorize/api/controller/ValidateCustomerPaymentProfileController.php',

);
