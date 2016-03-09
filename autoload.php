<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'bz2tuleap\\converter' => '/Bz2Tuleap/Converter.php',
                'bz2tuleap\\tuleap\\artifact' => '/Bz2Tuleap/Tuleap/Artifact.php',
                'bz2tuleap\\tuleap\\changeset' => '/Bz2Tuleap/Tuleap/Changeset.php',
                'bz2tuleap\\tuleap\\column' => '/Bz2Tuleap/Tuleap/Column.php',
                'bz2tuleap\\tuleap\\comment' => '/Bz2Tuleap/Tuleap/Comment.php',
                'bz2tuleap\\tuleap\\defaultfieldpermissions' => '/Bz2Tuleap/Tuleap/DefaultFieldPermissions.php',
                'bz2tuleap\\tuleap\\field' => '/Bz2Tuleap/Tuleap/Field.php',
                'bz2tuleap\\tuleap\\fieldset' => '/Bz2Tuleap/Tuleap/FieldSet.php',
                'bz2tuleap\\tuleap\\formelements' => '/Bz2Tuleap/Tuleap/FormElements.php',
                'bz2tuleap\\tuleap\\idmapper' => '/Bz2Tuleap/Tuleap/IdMapper.php',
                'bz2tuleap\\tuleap\\ifield' => '/Bz2Tuleap/Tuleap/IField.php',
                'bz2tuleap\\tuleap\\iformelement' => '/Bz2Tuleap/Tuleap/IFormElement.php',
                'bz2tuleap\\tuleap\\ipermissions' => '/Bz2Tuleap/Tuleap/IPermissions.php',
                'bz2tuleap\\tuleap\\nofieldpermissions' => '/Bz2Tuleap/Tuleap/NoFieldPermissions.php',
                'bz2tuleap\\tuleap\\project' => '/Bz2Tuleap/Tuleap/Project.php',
                'bz2tuleap\\tuleap\\readonlyfieldpermissions' => '/Bz2Tuleap/Tuleap/ReadOnlyFieldPermissions.php',
                'bz2tuleap\\tuleap\\selectboxfield' => '/Bz2Tuleap/Tuleap/SelectBoxField.php',
                'bz2tuleap\\tuleap\\structurefield' => '/Bz2Tuleap/Tuleap/StructureField.php',
                'bz2tuleap\\tuleap\\supportedxmlcharencoding' => '/Bz2Tuleap/Tuleap/SupportedXmlCharEncoding.class.php',
                'bz2tuleap\\tuleap\\tracker' => '/Bz2Tuleap/Tuleap/Tracker.php',
                'bz2tuleap\\tuleap\\tracker2xml' => '/Bz2Tuleap/Tuleap/TrackerToXml.php',
                'bz2tuleap\\tuleap\\usermapper' => '/Bz2Tuleap/Tuleap/UserMapper.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd