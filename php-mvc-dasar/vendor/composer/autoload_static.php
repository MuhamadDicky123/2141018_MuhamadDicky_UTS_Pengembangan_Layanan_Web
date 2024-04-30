<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4ac7f3376092d3176e7de474f486f62
{
    public static $files = array (
        '6124b4c8570aa390c21fafd04a26c69f' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/deep_copy.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpDocumentor\\Reflection\\' => 25,
        ),
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
            'WebLanjutan\\PHP\\MVC\\DASAR\\' => 26,
        ),
        'P' => 
        array (
            'Prophecy\\' => 9,
            'PhpParser\\' => 10,
            'PHPStan\\PhpDocParser\\' => 21,
        ),
        'D' => 
        array (
            'Doctrine\\Instantiator\\' => 22,
            'Doctrine\\Deprecations\\' => 22,
            'DeepCopy\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpDocumentor\\Reflection\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpdocumentor/reflection-common/src',
            1 => __DIR__ . '/..' . '/phpdocumentor/reflection-docblock/src',
            2 => __DIR__ . '/..' . '/phpdocumentor/type-resolver/src',
        ),
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
        'WebLanjutan\\PHP\\MVC\\DASAR\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
            1 => __DIR__ . '/../..' . '/test',
        ),
        'Prophecy\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpspec/prophecy/src/Prophecy',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'PHPStan\\PhpDocParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpstan/phpdoc-parser/src',
        ),
        'Doctrine\\Instantiator\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/instantiator/src/Doctrine/Instantiator',
        ),
        'Doctrine\\Deprecations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/deprecations/lib/Doctrine/Deprecations',
        ),
        'DeepCopy\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PharIo\\Manifest\\Application' => __DIR__ . '/..' . '/phar-io/manifest/src/values/Application.php',
        'PharIo\\Manifest\\ApplicationName' => __DIR__ . '/..' . '/phar-io/manifest/src/values/ApplicationName.php',
        'PharIo\\Manifest\\Author' => __DIR__ . '/..' . '/phar-io/manifest/src/values/Author.php',
        'PharIo\\Manifest\\AuthorCollection' => __DIR__ . '/..' . '/phar-io/manifest/src/values/AuthorCollection.php',
        'PharIo\\Manifest\\AuthorCollectionIterator' => __DIR__ . '/..' . '/phar-io/manifest/src/values/AuthorCollectionIterator.php',
        'PharIo\\Manifest\\AuthorElement' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/AuthorElement.php',
        'PharIo\\Manifest\\AuthorElementCollection' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/AuthorElementCollection.php',
        'PharIo\\Manifest\\BundledComponent' => __DIR__ . '/..' . '/phar-io/manifest/src/values/BundledComponent.php',
        'PharIo\\Manifest\\BundledComponentCollection' => __DIR__ . '/..' . '/phar-io/manifest/src/values/BundledComponentCollection.php',
        'PharIo\\Manifest\\BundledComponentCollectionIterator' => __DIR__ . '/..' . '/phar-io/manifest/src/values/BundledComponentCollectionIterator.php',
        'PharIo\\Manifest\\BundlesElement' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/BundlesElement.php',
        'PharIo\\Manifest\\ComponentElement' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/ComponentElement.php',
        'PharIo\\Manifest\\ComponentElementCollection' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/ComponentElementCollection.php',
        'PharIo\\Manifest\\ContainsElement' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/ContainsElement.php',
        'PharIo\\Manifest\\CopyrightElement' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/CopyrightElement.php',
        'PharIo\\Manifest\\CopyrightInformation' => __DIR__ . '/..' . '/phar-io/manifest/src/values/CopyrightInformation.php',
        'PharIo\\Manifest\\ElementCollection' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/ElementCollection.php',
        'PharIo\\Manifest\\ElementCollectionException' => __DIR__ . '/..' . '/phar-io/manifest/src/exceptions/ElementCollectionException.php',
        'PharIo\\Manifest\\Email' => __DIR__ . '/..' . '/phar-io/manifest/src/values/Email.php',
        'PharIo\\Manifest\\Exception' => __DIR__ . '/..' . '/phar-io/manifest/src/exceptions/Exception.php',
        'PharIo\\Manifest\\ExtElement' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/ExtElement.php',
        'PharIo\\Manifest\\ExtElementCollection' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/ExtElementCollection.php',
        'PharIo\\Manifest\\Extension' => __DIR__ . '/..' . '/phar-io/manifest/src/values/Extension.php',
        'PharIo\\Manifest\\ExtensionElement' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/ExtensionElement.php',
        'PharIo\\Manifest\\InvalidApplicationNameException' => __DIR__ . '/..' . '/phar-io/manifest/src/exceptions/InvalidApplicationNameException.php',
        'PharIo\\Manifest\\InvalidEmailException' => __DIR__ . '/..' . '/phar-io/manifest/src/exceptions/InvalidEmailException.php',
        'PharIo\\Manifest\\InvalidUrlException' => __DIR__ . '/..' . '/phar-io/manifest/src/exceptions/InvalidUrlException.php',
        'PharIo\\Manifest\\Library' => __DIR__ . '/..' . '/phar-io/manifest/src/values/Library.php',
        'PharIo\\Manifest\\License' => __DIR__ . '/..' . '/phar-io/manifest/src/values/License.php',
        'PharIo\\Manifest\\LicenseElement' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/LicenseElement.php',
        'PharIo\\Manifest\\Manifest' => __DIR__ . '/..' . '/phar-io/manifest/src/values/Manifest.php',
        'PharIo\\Manifest\\ManifestDocument' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/ManifestDocument.php',
        'PharIo\\Manifest\\ManifestDocumentException' => __DIR__ . '/..' . '/phar-io/manifest/src/exceptions/ManifestDocumentException.php',
        'PharIo\\Manifest\\ManifestDocumentLoadingException' => __DIR__ . '/..' . '/phar-io/manifest/src/exceptions/ManifestDocumentLoadingException.php',
        'PharIo\\Manifest\\ManifestDocumentMapper' => __DIR__ . '/..' . '/phar-io/manifest/src/ManifestDocumentMapper.php',
        'PharIo\\Manifest\\ManifestDocumentMapperException' => __DIR__ . '/..' . '/phar-io/manifest/src/exceptions/ManifestDocumentMapperException.php',
        'PharIo\\Manifest\\ManifestElement' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/ManifestElement.php',
        'PharIo\\Manifest\\ManifestElementException' => __DIR__ . '/..' . '/phar-io/manifest/src/exceptions/ManifestElementException.php',
        'PharIo\\Manifest\\ManifestLoader' => __DIR__ . '/..' . '/phar-io/manifest/src/ManifestLoader.php',
        'PharIo\\Manifest\\ManifestLoaderException' => __DIR__ . '/..' . '/phar-io/manifest/src/exceptions/ManifestLoaderException.php',
        'PharIo\\Manifest\\ManifestSerializer' => __DIR__ . '/..' . '/phar-io/manifest/src/ManifestSerializer.php',
        'PharIo\\Manifest\\NoEmailAddressException' => __DIR__ . '/..' . '/phar-io/manifest/src/exceptions/NoEmailAddressException.php',
        'PharIo\\Manifest\\PhpElement' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/PhpElement.php',
        'PharIo\\Manifest\\PhpExtensionRequirement' => __DIR__ . '/..' . '/phar-io/manifest/src/values/PhpExtensionRequirement.php',
        'PharIo\\Manifest\\PhpVersionRequirement' => __DIR__ . '/..' . '/phar-io/manifest/src/values/PhpVersionRequirement.php',
        'PharIo\\Manifest\\Requirement' => __DIR__ . '/..' . '/phar-io/manifest/src/values/Requirement.php',
        'PharIo\\Manifest\\RequirementCollection' => __DIR__ . '/..' . '/phar-io/manifest/src/values/RequirementCollection.php',
        'PharIo\\Manifest\\RequirementCollectionIterator' => __DIR__ . '/..' . '/phar-io/manifest/src/values/RequirementCollectionIterator.php',
        'PharIo\\Manifest\\RequiresElement' => __DIR__ . '/..' . '/phar-io/manifest/src/xml/RequiresElement.php',
        'PharIo\\Manifest\\Type' => __DIR__ . '/..' . '/phar-io/manifest/src/values/Type.php',
        'PharIo\\Manifest\\Url' => __DIR__ . '/..' . '/phar-io/manifest/src/values/Url.php',
        'PharIo\\Version\\AbstractVersionConstraint' => __DIR__ . '/..' . '/phar-io/version/src/constraints/AbstractVersionConstraint.php',
        'PharIo\\Version\\AndVersionConstraintGroup' => __DIR__ . '/..' . '/phar-io/version/src/constraints/AndVersionConstraintGroup.php',
        'PharIo\\Version\\AnyVersionConstraint' => __DIR__ . '/..' . '/phar-io/version/src/constraints/AnyVersionConstraint.php',
        'PharIo\\Version\\BuildMetaData' => __DIR__ . '/..' . '/phar-io/version/src/BuildMetaData.php',
        'PharIo\\Version\\ExactVersionConstraint' => __DIR__ . '/..' . '/phar-io/version/src/constraints/ExactVersionConstraint.php',
        'PharIo\\Version\\Exception' => __DIR__ . '/..' . '/phar-io/version/src/exceptions/Exception.php',
        'PharIo\\Version\\GreaterThanOrEqualToVersionConstraint' => __DIR__ . '/..' . '/phar-io/version/src/constraints/GreaterThanOrEqualToVersionConstraint.php',
        'PharIo\\Version\\InvalidPreReleaseSuffixException' => __DIR__ . '/..' . '/phar-io/version/src/exceptions/InvalidPreReleaseSuffixException.php',
        'PharIo\\Version\\InvalidVersionException' => __DIR__ . '/..' . '/phar-io/version/src/exceptions/InvalidVersionException.php',
        'PharIo\\Version\\NoBuildMetaDataException' => __DIR__ . '/..' . '/phar-io/version/src/exceptions/NoBuildMetaDataException.php',
        'PharIo\\Version\\NoPreReleaseSuffixException' => __DIR__ . '/..' . '/phar-io/version/src/exceptions/NoPreReleaseSuffixException.php',
        'PharIo\\Version\\OrVersionConstraintGroup' => __DIR__ . '/..' . '/phar-io/version/src/constraints/OrVersionConstraintGroup.php',
        'PharIo\\Version\\PreReleaseSuffix' => __DIR__ . '/..' . '/phar-io/version/src/PreReleaseSuffix.php',
        'PharIo\\Version\\SpecificMajorAndMinorVersionConstraint' => __DIR__ . '/..' . '/phar-io/version/src/constraints/SpecificMajorAndMinorVersionConstraint.php',
        'PharIo\\Version\\SpecificMajorVersionConstraint' => __DIR__ . '/..' . '/phar-io/version/src/constraints/SpecificMajorVersionConstraint.php',
        'PharIo\\Version\\UnsupportedVersionConstraintException' => __DIR__ . '/..' . '/phar-io/version/src/exceptions/UnsupportedVersionConstraintException.php',
        'PharIo\\Version\\Version' => __DIR__ . '/..' . '/phar-io/version/src/Version.php',
        'PharIo\\Version\\VersionConstraint' => __DIR__ . '/..' . '/phar-io/version/src/constraints/VersionConstraint.php',
        'PharIo\\Version\\VersionConstraintParser' => __DIR__ . '/..' . '/phar-io/version/src/VersionConstraintParser.php',
        'PharIo\\Version\\VersionConstraintValue' => __DIR__ . '/..' . '/phar-io/version/src/VersionConstraintValue.php',
        'PharIo\\Version\\VersionNumber' => __DIR__ . '/..' . '/phar-io/version/src/VersionNumber.php',
        'SebastianBergmann\\CliParser\\AmbiguousOptionException' => __DIR__ . '/..' . '/sebastian/cli-parser/src/exceptions/AmbiguousOptionException.php',
        'SebastianBergmann\\CliParser\\Exception' => __DIR__ . '/..' . '/sebastian/cli-parser/src/exceptions/Exception.php',
        'SebastianBergmann\\CliParser\\OptionDoesNotAllowArgumentException' => __DIR__ . '/..' . '/sebastian/cli-parser/src/exceptions/OptionDoesNotAllowArgumentException.php',
        'SebastianBergmann\\CliParser\\Parser' => __DIR__ . '/..' . '/sebastian/cli-parser/src/Parser.php',
        'SebastianBergmann\\CliParser\\RequiredOptionArgumentMissingException' => __DIR__ . '/..' . '/sebastian/cli-parser/src/exceptions/RequiredOptionArgumentMissingException.php',
        'SebastianBergmann\\CliParser\\UnknownOptionException' => __DIR__ . '/..' . '/sebastian/cli-parser/src/exceptions/UnknownOptionException.php',
        'SebastianBergmann\\CodeCoverage\\BranchAndPathCoverageNotSupportedException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/BranchAndPathCoverageNotSupportedException.php',
        'SebastianBergmann\\CodeCoverage\\CodeCoverage' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/CodeCoverage.php',
        'SebastianBergmann\\CodeCoverage\\DeadCodeDetectionNotSupportedException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/DeadCodeDetectionNotSupportedException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\Driver' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Driver/Driver.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\PathExistsButIsNotDirectoryException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/PathExistsButIsNotDirectoryException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\PcovDriver' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Driver/PcovDriver.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\PcovNotAvailableException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/PcovNotAvailableException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\PhpdbgDriver' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Driver/PhpdbgDriver.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\PhpdbgNotAvailableException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/PhpdbgNotAvailableException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\Selector' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Driver/Selector.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\WriteOperationFailedException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/WriteOperationFailedException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\WrongXdebugVersionException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/WrongXdebugVersionException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\Xdebug2Driver' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Driver/Xdebug2Driver.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\Xdebug2NotEnabledException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/Xdebug2NotEnabledException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\Xdebug3Driver' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Driver/Xdebug3Driver.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\Xdebug3NotEnabledException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/Xdebug3NotEnabledException.php',
        'SebastianBergmann\\CodeCoverage\\Driver\\XdebugNotAvailableException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/XdebugNotAvailableException.php',
        'SebastianBergmann\\CodeCoverage\\Exception' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/Exception.php',
        'SebastianBergmann\\CodeCoverage\\Filter' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Filter.php',
        'SebastianBergmann\\CodeCoverage\\InvalidArgumentException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/InvalidArgumentException.php',
        'SebastianBergmann\\CodeCoverage\\NoCodeCoverageDriverAvailableException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/NoCodeCoverageDriverAvailableException.php',
        'SebastianBergmann\\CodeCoverage\\NoCodeCoverageDriverWithPathCoverageSupportAvailableException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/NoCodeCoverageDriverWithPathCoverageSupportAvailableException.php',
        'SebastianBergmann\\CodeCoverage\\Node\\AbstractNode' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Node/AbstractNode.php',
        'SebastianBergmann\\CodeCoverage\\Node\\Builder' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Node/Builder.php',
        'SebastianBergmann\\CodeCoverage\\Node\\CrapIndex' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Node/CrapIndex.php',
        'SebastianBergmann\\CodeCoverage\\Node\\Directory' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Node/Directory.php',
        'SebastianBergmann\\CodeCoverage\\Node\\File' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Node/File.php',
        'SebastianBergmann\\CodeCoverage\\Node\\Iterator' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Node/Iterator.php',
        'SebastianBergmann\\CodeCoverage\\ParserException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/ParserException.php',
        'SebastianBergmann\\CodeCoverage\\ProcessedCodeCoverageData' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/ProcessedCodeCoverageData.php',
        'SebastianBergmann\\CodeCoverage\\RawCodeCoverageData' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/RawCodeCoverageData.php',
        'SebastianBergmann\\CodeCoverage\\ReflectionException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/ReflectionException.php',
        'SebastianBergmann\\CodeCoverage\\ReportAlreadyFinalizedException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/ReportAlreadyFinalizedException.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Clover' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Clover.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Cobertura' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Cobertura.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Crap4j' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Crap4j.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Html\\Dashboard' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Html/Renderer/Dashboard.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Html\\Directory' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Html/Renderer/Directory.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Html\\Facade' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Html/Facade.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Html\\File' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Html/Renderer/File.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Html\\Renderer' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Html/Renderer.php',
        'SebastianBergmann\\CodeCoverage\\Report\\PHP' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/PHP.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Text' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Text.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\BuildInformation' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/BuildInformation.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Coverage' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Coverage.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Directory' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Directory.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Facade' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Facade.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\File' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/File.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Method' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Method.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Node' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Node.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Project' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Project.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Report' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Report.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Source' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Source.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Tests' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Tests.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Totals' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Totals.php',
        'SebastianBergmann\\CodeCoverage\\Report\\Xml\\Unit' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Report/Xml/Unit.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysisCacheNotConfiguredException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/StaticAnalysisCacheNotConfiguredException.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\CacheWarmer' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/CacheWarmer.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\CachingFileAnalyser' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/CachingFileAnalyser.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\CodeUnitFindingVisitor' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/CodeUnitFindingVisitor.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\ExecutableLinesFindingVisitor' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/ExecutableLinesFindingVisitor.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\FileAnalyser' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/FileAnalyser.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\IgnoredLinesFindingVisitor' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/IgnoredLinesFindingVisitor.php',
        'SebastianBergmann\\CodeCoverage\\StaticAnalysis\\ParsingFileAnalyser' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/StaticAnalysis/ParsingFileAnalyser.php',
        'SebastianBergmann\\CodeCoverage\\TestIdMissingException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/TestIdMissingException.php',
        'SebastianBergmann\\CodeCoverage\\UnintentionallyCoveredCodeException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/UnintentionallyCoveredCodeException.php',
        'SebastianBergmann\\CodeCoverage\\Util\\DirectoryCouldNotBeCreatedException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/DirectoryCouldNotBeCreatedException.php',
        'SebastianBergmann\\CodeCoverage\\Util\\Filesystem' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Util/Filesystem.php',
        'SebastianBergmann\\CodeCoverage\\Util\\Percentage' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Util/Percentage.php',
        'SebastianBergmann\\CodeCoverage\\Version' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Version.php',
        'SebastianBergmann\\CodeCoverage\\XmlException' => __DIR__ . '/..' . '/phpunit/php-code-coverage/src/Exception/XmlException.php',
        'SebastianBergmann\\CodeUnitReverseLookup\\Wizard' => __DIR__ . '/..' . '/sebastian/code-unit-reverse-lookup/src/Wizard.php',
        'SebastianBergmann\\CodeUnit\\ClassMethodUnit' => __DIR__ . '/..' . '/sebastian/code-unit/src/ClassMethodUnit.php',
        'SebastianBergmann\\CodeUnit\\ClassUnit' => __DIR__ . '/..' . '/sebastian/code-unit/src/ClassUnit.php',
        'SebastianBergmann\\CodeUnit\\CodeUnit' => __DIR__ . '/..' . '/sebastian/code-unit/src/CodeUnit.php',
        'SebastianBergmann\\CodeUnit\\CodeUnitCollection' => __DIR__ . '/..' . '/sebastian/code-unit/src/CodeUnitCollection.php',
        'SebastianBergmann\\CodeUnit\\CodeUnitCollectionIterator' => __DIR__ . '/..' . '/sebastian/code-unit/src/CodeUnitCollectionIterator.php',
        'SebastianBergmann\\CodeUnit\\Exception' => __DIR__ . '/..' . '/sebastian/code-unit/src/exceptions/Exception.php',
        'SebastianBergmann\\CodeUnit\\FunctionUnit' => __DIR__ . '/..' . '/sebastian/code-unit/src/FunctionUnit.php',
        'SebastianBergmann\\CodeUnit\\InterfaceMethodUnit' => __DIR__ . '/..' . '/sebastian/code-unit/src/InterfaceMethodUnit.php',
        'SebastianBergmann\\CodeUnit\\InterfaceUnit' => __DIR__ . '/..' . '/sebastian/code-unit/src/InterfaceUnit.php',
        'SebastianBergmann\\CodeUnit\\InvalidCodeUnitException' => __DIR__ . '/..' . '/sebastian/code-unit/src/exceptions/InvalidCodeUnitException.php',
        'SebastianBergmann\\CodeUnit\\Mapper' => __DIR__ . '/..' . '/sebastian/code-unit/src/Mapper.php',
        'SebastianBergmann\\CodeUnit\\NoTraitException' => __DIR__ . '/..' . '/sebastian/code-unit/src/exceptions/NoTraitException.php',
        'SebastianBergmann\\CodeUnit\\ReflectionException' => __DIR__ . '/..' . '/sebastian/code-unit/src/exceptions/ReflectionException.php',
        'SebastianBergmann\\CodeUnit\\TraitMethodUnit' => __DIR__ . '/..' . '/sebastian/code-unit/src/TraitMethodUnit.php',
        'SebastianBergmann\\CodeUnit\\TraitUnit' => __DIR__ . '/..' . '/sebastian/code-unit/src/TraitUnit.php',
        'SebastianBergmann\\Comparator\\ArrayComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ArrayComparator.php',
        'SebastianBergmann\\Comparator\\Comparator' => __DIR__ . '/..' . '/sebastian/comparator/src/Comparator.php',
        'SebastianBergmann\\Comparator\\ComparisonFailure' => __DIR__ . '/..' . '/sebastian/comparator/src/ComparisonFailure.php',
        'SebastianBergmann\\Comparator\\DOMNodeComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/DOMNodeComparator.php',
        'SebastianBergmann\\Comparator\\DateTimeComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/DateTimeComparator.php',
        'SebastianBergmann\\Comparator\\DoubleComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/DoubleComparator.php',
        'SebastianBergmann\\Comparator\\Exception' => __DIR__ . '/..' . '/sebastian/comparator/src/exceptions/Exception.php',
        'SebastianBergmann\\Comparator\\ExceptionComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ExceptionComparator.php',
        'SebastianBergmann\\Comparator\\Factory' => __DIR__ . '/..' . '/sebastian/comparator/src/Factory.php',
        'SebastianBergmann\\Comparator\\MockObjectComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/MockObjectComparator.php',
        'SebastianBergmann\\Comparator\\NumericComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/NumericComparator.php',
        'SebastianBergmann\\Comparator\\ObjectComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ObjectComparator.php',
        'SebastianBergmann\\Comparator\\ResourceComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ResourceComparator.php',
        'SebastianBergmann\\Comparator\\RuntimeException' => __DIR__ . '/..' . '/sebastian/comparator/src/exceptions/RuntimeException.php',
        'SebastianBergmann\\Comparator\\ScalarComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ScalarComparator.php',
        'SebastianBergmann\\Comparator\\SplObjectStorageComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/SplObjectStorageComparator.php',
        'SebastianBergmann\\Comparator\\TypeComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/TypeComparator.php',
        'SebastianBergmann\\Complexity\\Calculator' => __DIR__ . '/..' . '/sebastian/complexity/src/Calculator.php',
        'SebastianBergmann\\Complexity\\Complexity' => __DIR__ . '/..' . '/sebastian/complexity/src/Complexity/Complexity.php',
        'SebastianBergmann\\Complexity\\ComplexityCalculatingVisitor' => __DIR__ . '/..' . '/sebastian/complexity/src/Visitor/ComplexityCalculatingVisitor.php',
        'SebastianBergmann\\Complexity\\ComplexityCollection' => __DIR__ . '/..' . '/sebastian/complexity/src/Complexity/ComplexityCollection.php',
        'SebastianBergmann\\Complexity\\ComplexityCollectionIterator' => __DIR__ . '/..' . '/sebastian/complexity/src/Complexity/ComplexityCollectionIterator.php',
        'SebastianBergmann\\Complexity\\CyclomaticComplexityCalculatingVisitor' => __DIR__ . '/..' . '/sebastian/complexity/src/Visitor/CyclomaticComplexityCalculatingVisitor.php',
        'SebastianBergmann\\Complexity\\Exception' => __DIR__ . '/..' . '/sebastian/complexity/src/Exception/Exception.php',
        'SebastianBergmann\\Complexity\\RuntimeException' => __DIR__ . '/..' . '/sebastian/complexity/src/Exception/RuntimeException.php',
        'SebastianBergmann\\Diff\\Chunk' => __DIR__ . '/..' . '/sebastian/diff/src/Chunk.php',
        'SebastianBergmann\\Diff\\ConfigurationException' => __DIR__ . '/..' . '/sebastian/diff/src/Exception/ConfigurationException.php',
        'SebastianBergmann\\Diff\\Diff' => __DIR__ . '/..' . '/sebastian/diff/src/Diff.php',
        'SebastianBergmann\\Diff\\Differ' => __DIR__ . '/..' . '/sebastian/diff/src/Differ.php',
        'SebastianBergmann\\Diff\\Exception' => __DIR__ . '/..' . '/sebastian/diff/src/Exception/Exception.php',
        'SebastianBergmann\\Diff\\InvalidArgumentException' => __DIR__ . '/..' . '/sebastian/diff/src/Exception/InvalidArgumentException.php',
        'SebastianBergmann\\Diff\\Line' => __DIR__ . '/..' . '/sebastian/diff/src/Line.php',
        'SebastianBergmann\\Diff\\LongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/sebastian/diff/src/LongestCommonSubsequenceCalculator.php',
        'SebastianBergmann\\Diff\\MemoryEfficientLongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/sebastian/diff/src/MemoryEfficientLongestCommonSubsequenceCalculator.php',
        'SebastianBergmann\\Diff\\Output\\AbstractChunkOutputBuilder' => __DIR__ . '/..' . '/sebastian/diff/src/Output/AbstractChunkOutputBuilder.php',
        'SebastianBergmann\\Diff\\Output\\DiffOnlyOutputBuilder' => __DIR__ . '/..' . '/sebastian/diff/src/Output/DiffOnlyOutputBuilder.php',
        'SebastianBergmann\\Diff\\Output\\DiffOutputBuilderInterface' => __DIR__ . '/..' . '/sebastian/diff/src/Output/DiffOutputBuilderInterface.php',
        'SebastianBergmann\\Diff\\Output\\StrictUnifiedDiffOutputBuilder' => __DIR__ . '/..' . '/sebastian/diff/src/Output/StrictUnifiedDiffOutputBuilder.php',
        'SebastianBergmann\\Diff\\Output\\UnifiedDiffOutputBuilder' => __DIR__ . '/..' . '/sebastian/diff/src/Output/UnifiedDiffOutputBuilder.php',
        'SebastianBergmann\\Diff\\Parser' => __DIR__ . '/..' . '/sebastian/diff/src/Parser.php',
        'SebastianBergmann\\Diff\\TimeEfficientLongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/sebastian/diff/src/TimeEfficientLongestCommonSubsequenceCalculator.php',
        'SebastianBergmann\\Environment\\Console' => __DIR__ . '/..' . '/sebastian/environment/src/Console.php',
        'SebastianBergmann\\Environment\\OperatingSystem' => __DIR__ . '/..' . '/sebastian/environment/src/OperatingSystem.php',
        'SebastianBergmann\\Environment\\Runtime' => __DIR__ . '/..' . '/sebastian/environment/src/Runtime.php',
        'SebastianBergmann\\Exporter\\Exporter' => __DIR__ . '/..' . '/sebastian/exporter/src/Exporter.php',
        'SebastianBergmann\\FileIterator\\Facade' => __DIR__ . '/..' . '/phpunit/php-file-iterator/src/Facade.php',
        'SebastianBergmann\\FileIterator\\Factory' => __DIR__ . '/..' . '/phpunit/php-file-iterator/src/Factory.php',
        'SebastianBergmann\\FileIterator\\Iterator' => __DIR__ . '/..' . '/phpunit/php-file-iterator/src/Iterator.php',
        'SebastianBergmann\\GlobalState\\CodeExporter' => __DIR__ . '/..' . '/sebastian/global-state/src/CodeExporter.php',
        'SebastianBergmann\\GlobalState\\Exception' => __DIR__ . '/..' . '/sebastian/global-state/src/exceptions/Exception.php',
        'SebastianBergmann\\GlobalState\\ExcludeList' => __DIR__ . '/..' . '/sebastian/global-state/src/ExcludeList.php',
        'SebastianBergmann\\GlobalState\\Restorer' => __DIR__ . '/..' . '/sebastian/global-state/src/Restorer.php',
        'SebastianBergmann\\GlobalState\\RuntimeException' => __DIR__ . '/..' . '/sebastian/global-state/src/exceptions/RuntimeException.php',
        'SebastianBergmann\\GlobalState\\Snapshot' => __DIR__ . '/..' . '/sebastian/global-state/src/Snapshot.php',
        'SebastianBergmann\\Invoker\\Exception' => __DIR__ . '/..' . '/phpunit/php-invoker/src/exceptions/Exception.php',
        'SebastianBergmann\\Invoker\\Invoker' => __DIR__ . '/..' . '/phpunit/php-invoker/src/Invoker.php',
        'SebastianBergmann\\Invoker\\ProcessControlExtensionNotLoadedException' => __DIR__ . '/..' . '/phpunit/php-invoker/src/exceptions/ProcessControlExtensionNotLoadedException.php',
        'SebastianBergmann\\Invoker\\TimeoutException' => __DIR__ . '/..' . '/phpunit/php-invoker/src/exceptions/TimeoutException.php',
        'SebastianBergmann\\LinesOfCode\\Counter' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/Counter.php',
        'SebastianBergmann\\LinesOfCode\\Exception' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/Exception/Exception.php',
        'SebastianBergmann\\LinesOfCode\\IllogicalValuesException' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/Exception/IllogicalValuesException.php',
        'SebastianBergmann\\LinesOfCode\\LineCountingVisitor' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/LineCountingVisitor.php',
        'SebastianBergmann\\LinesOfCode\\LinesOfCode' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/LinesOfCode.php',
        'SebastianBergmann\\LinesOfCode\\NegativeValueException' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/Exception/NegativeValueException.php',
        'SebastianBergmann\\LinesOfCode\\RuntimeException' => __DIR__ . '/..' . '/sebastian/lines-of-code/src/Exception/RuntimeException.php',
        'SebastianBergmann\\ObjectEnumerator\\Enumerator' => __DIR__ . '/..' . '/sebastian/object-enumerator/src/Enumerator.php',
        'SebastianBergmann\\ObjectEnumerator\\Exception' => __DIR__ . '/..' . '/sebastian/object-enumerator/src/Exception.php',
        'SebastianBergmann\\ObjectEnumerator\\InvalidArgumentException' => __DIR__ . '/..' . '/sebastian/object-enumerator/src/InvalidArgumentException.php',
        'SebastianBergmann\\ObjectReflector\\Exception' => __DIR__ . '/..' . '/sebastian/object-reflector/src/Exception.php',
        'SebastianBergmann\\ObjectReflector\\InvalidArgumentException' => __DIR__ . '/..' . '/sebastian/object-reflector/src/InvalidArgumentException.php',
        'SebastianBergmann\\ObjectReflector\\ObjectReflector' => __DIR__ . '/..' . '/sebastian/object-reflector/src/ObjectReflector.php',
        'SebastianBergmann\\RecursionContext\\Context' => __DIR__ . '/..' . '/sebastian/recursion-context/src/Context.php',
        'SebastianBergmann\\RecursionContext\\Exception' => __DIR__ . '/..' . '/sebastian/recursion-context/src/Exception.php',
        'SebastianBergmann\\RecursionContext\\InvalidArgumentException' => __DIR__ . '/..' . '/sebastian/recursion-context/src/InvalidArgumentException.php',
        'SebastianBergmann\\ResourceOperations\\ResourceOperations' => __DIR__ . '/..' . '/sebastian/resource-operations/src/ResourceOperations.php',
        'SebastianBergmann\\Template\\Exception' => __DIR__ . '/..' . '/phpunit/php-text-template/src/exceptions/Exception.php',
        'SebastianBergmann\\Template\\InvalidArgumentException' => __DIR__ . '/..' . '/phpunit/php-text-template/src/exceptions/InvalidArgumentException.php',
        'SebastianBergmann\\Template\\RuntimeException' => __DIR__ . '/..' . '/phpunit/php-text-template/src/exceptions/RuntimeException.php',
        'SebastianBergmann\\Template\\Template' => __DIR__ . '/..' . '/phpunit/php-text-template/src/Template.php',
        'SebastianBergmann\\Timer\\Duration' => __DIR__ . '/..' . '/phpunit/php-timer/src/Duration.php',
        'SebastianBergmann\\Timer\\Exception' => __DIR__ . '/..' . '/phpunit/php-timer/src/exceptions/Exception.php',
        'SebastianBergmann\\Timer\\NoActiveTimerException' => __DIR__ . '/..' . '/phpunit/php-timer/src/exceptions/NoActiveTimerException.php',
        'SebastianBergmann\\Timer\\ResourceUsageFormatter' => __DIR__ . '/..' . '/phpunit/php-timer/src/ResourceUsageFormatter.php',
        'SebastianBergmann\\Timer\\TimeSinceStartOfRequestNotAvailableException' => __DIR__ . '/..' . '/phpunit/php-timer/src/exceptions/TimeSinceStartOfRequestNotAvailableException.php',
        'SebastianBergmann\\Timer\\Timer' => __DIR__ . '/..' . '/phpunit/php-timer/src/Timer.php',
        'SebastianBergmann\\Type\\CallableType' => __DIR__ . '/..' . '/sebastian/type/src/CallableType.php',
        'SebastianBergmann\\Type\\Exception' => __DIR__ . '/..' . '/sebastian/type/src/exception/Exception.php',
        'SebastianBergmann\\Type\\FalseType' => __DIR__ . '/..' . '/sebastian/type/src/FalseType.php',
        'SebastianBergmann\\Type\\GenericObjectType' => __DIR__ . '/..' . '/sebastian/type/src/GenericObjectType.php',
        'SebastianBergmann\\Type\\IterableType' => __DIR__ . '/..' . '/sebastian/type/src/IterableType.php',
        'SebastianBergmann\\Type\\LogicException' => __DIR__ . '/..' . '/sebastian/type/src/exception/LogicException.php',
        'SebastianBergmann\\Type\\MixedType' => __DIR__ . '/..' . '/sebastian/type/src/MixedType.php',
        'SebastianBergmann\\Type\\NullType' => __DIR__ . '/..' . '/sebastian/type/src/NullType.php',
        'SebastianBergmann\\Type\\ObjectType' => __DIR__ . '/..' . '/sebastian/type/src/ObjectType.php',
        'SebastianBergmann\\Type\\ReflectionMapper' => __DIR__ . '/..' . '/sebastian/type/src/ReflectionMapper.php',
        'SebastianBergmann\\Type\\RuntimeException' => __DIR__ . '/..' . '/sebastian/type/src/exception/RuntimeException.php',
        'SebastianBergmann\\Type\\SimpleType' => __DIR__ . '/..' . '/sebastian/type/src/SimpleType.php',
        'SebastianBergmann\\Type\\StaticType' => __DIR__ . '/..' . '/sebastian/type/src/StaticType.php',
        'SebastianBergmann\\Type\\Type' => __DIR__ . '/..' . '/sebastian/type/src/Type.php',
        'SebastianBergmann\\Type\\TypeName' => __DIR__ . '/..' . '/sebastian/type/src/TypeName.php',
        'SebastianBergmann\\Type\\UnionType' => __DIR__ . '/..' . '/sebastian/type/src/UnionType.php',
        'SebastianBergmann\\Type\\UnknownType' => __DIR__ . '/..' . '/sebastian/type/src/UnknownType.php',
        'SebastianBergmann\\Type\\VoidType' => __DIR__ . '/..' . '/sebastian/type/src/VoidType.php',
        'SebastianBergmann\\Version' => __DIR__ . '/..' . '/sebastian/version/src/Version.php',
        'TheSeer\\Tokenizer\\Exception' => __DIR__ . '/..' . '/theseer/tokenizer/src/Exception.php',
        'TheSeer\\Tokenizer\\NamespaceUri' => __DIR__ . '/..' . '/theseer/tokenizer/src/NamespaceUri.php',
        'TheSeer\\Tokenizer\\NamespaceUriException' => __DIR__ . '/..' . '/theseer/tokenizer/src/NamespaceUriException.php',
        'TheSeer\\Tokenizer\\Token' => __DIR__ . '/..' . '/theseer/tokenizer/src/Token.php',
        'TheSeer\\Tokenizer\\TokenCollection' => __DIR__ . '/..' . '/theseer/tokenizer/src/TokenCollection.php',
        'TheSeer\\Tokenizer\\TokenCollectionException' => __DIR__ . '/..' . '/theseer/tokenizer/src/TokenCollectionException.php',
        'TheSeer\\Tokenizer\\Tokenizer' => __DIR__ . '/..' . '/theseer/tokenizer/src/Tokenizer.php',
        'TheSeer\\Tokenizer\\XMLSerializer' => __DIR__ . '/..' . '/theseer/tokenizer/src/XMLSerializer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita4ac7f3376092d3176e7de474f486f62::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4ac7f3376092d3176e7de474f486f62::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4ac7f3376092d3176e7de474f486f62::$classMap;

        }, null, ClassLoader::class);
    }
}
