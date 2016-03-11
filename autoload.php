<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'bz2tuleap\\bugzilla\\converter' => '/Bz2Tuleap/Bugzilla/Converter.php',
                'bz2tuleap\\bugzilla\\usermapper' => '/Bz2Tuleap/Bugzilla/UserMapper.php',
                'bz2tuleap\\converter' => '/Bz2Tuleap/Converter.php',
                'bz2tuleap\\tuleap\\project' => '/Bz2Tuleap/Tuleap/Project.php',
                'bz2tuleap\\tuleap\\tracker' => '/Bz2Tuleap/Tuleap/Tracker.php',
                'bz2tuleap\\tuleap\\tracker\\artifact\\artifact' => '/Bz2Tuleap/Tuleap/Tracker/Artifact/Artifact.php',
                'bz2tuleap\\tuleap\\tracker\\artifact\\changeset\\ccfieldchange' => '/Bz2Tuleap/Tuleap/Tracker/Artifact/Changeset/CCFieldChange.php',
                'bz2tuleap\\tuleap\\tracker\\artifact\\changeset\\changeset' => '/Bz2Tuleap/Tuleap/Tracker/Artifact/Changeset/Changeset.php',
                'bz2tuleap\\tuleap\\tracker\\artifact\\changeset\\comment' => '/Bz2Tuleap/Tuleap/Tracker/Artifact/Changeset/Comment.php',
                'bz2tuleap\\tuleap\\tracker\\artifact\\changeset\\filefieldchange' => '/Bz2Tuleap/Tuleap/Tracker/Artifact/Changeset/FileFieldChange.php',
                'bz2tuleap\\tuleap\\tracker\\artifact\\changeset\\filesdata' => '/Bz2Tuleap/Tuleap/Tracker/Artifact/Changeset/FilesData.php',
                'bz2tuleap\\tuleap\\tracker\\artifact\\changeset\\listfieldchange' => '/Bz2Tuleap/Tuleap/Tracker/Artifact/Changeset/ListFieldChange.php',
                'bz2tuleap\\tuleap\\tracker\\artifact\\changeset\\scalarfieldchange' => '/Bz2Tuleap/Tuleap/Tracker/Artifact/Changeset/ScalarFieldChange.php',
                'bz2tuleap\\tuleap\\tracker\\artifact\\changeset\\usersselectboxfieldchange' => '/Bz2Tuleap/Tuleap/Tracker/Artifact/Changeset/UsersSelectBoxFieldChange.php',
                'bz2tuleap\\tuleap\\tracker\\field\\cc' => '/Bz2Tuleap/Tuleap/Tracker/Field/CC.php',
                'bz2tuleap\\tuleap\\tracker\\field\\column' => '/Bz2Tuleap/Tuleap/Tracker/Field/Column.php',
                'bz2tuleap\\tuleap\\tracker\\field\\defaultpermissions' => '/Bz2Tuleap/Tuleap/Tracker/Field/DefaultPermissions.php',
                'bz2tuleap\\tuleap\\tracker\\field\\field' => '/Bz2Tuleap/Tuleap/Tracker/Field/Field.php',
                'bz2tuleap\\tuleap\\tracker\\field\\fieldset' => '/Bz2Tuleap/Tuleap/Tracker/Field/FieldSet.php',
                'bz2tuleap\\tuleap\\tracker\\field\\formelements' => '/Bz2Tuleap/Tuleap/Tracker/Field/FormElements.php',
                'bz2tuleap\\tuleap\\tracker\\field\\idmapper' => '/Bz2Tuleap/Tuleap/Tracker/Field/IdMapper.php',
                'bz2tuleap\\tuleap\\tracker\\field\\ifield' => '/Bz2Tuleap/Tuleap/Tracker/Field/IField.php',
                'bz2tuleap\\tuleap\\tracker\\field\\iformelement' => '/Bz2Tuleap/Tuleap/Tracker/Field/IFormElement.php',
                'bz2tuleap\\tuleap\\tracker\\field\\ipermissions' => '/Bz2Tuleap/Tuleap/Tracker/Field/IPermissions.php',
                'bz2tuleap\\tuleap\\tracker\\field\\iproperties' => '/Bz2Tuleap/Tuleap/Tracker/Field/IProperties.php',
                'bz2tuleap\\tuleap\\tracker\\field\\nofieldpermissions' => '/Bz2Tuleap/Tuleap/Tracker/Field/NoFieldPermissions.php',
                'bz2tuleap\\tuleap\\tracker\\field\\noproperties' => '/Bz2Tuleap/Tuleap/Tracker/Field/NoProperties.php',
                'bz2tuleap\\tuleap\\tracker\\field\\properties' => '/Bz2Tuleap/Tuleap/Tracker/Field/Properties.php',
                'bz2tuleap\\tuleap\\tracker\\field\\readonlypermissions' => '/Bz2Tuleap/Tuleap/Tracker/Field/ReadOnlyPermissions.php',
                'bz2tuleap\\tuleap\\tracker\\field\\selectbox' => '/Bz2Tuleap/Tuleap/Tracker/Field/SelectBox.php',
                'bz2tuleap\\tuleap\\tracker\\field\\structure' => '/Bz2Tuleap/Tuleap/Tracker/Field/Structure.php',
                'bz2tuleap\\tuleap\\tracker\\field\\usersselectbox' => '/Bz2Tuleap/Tuleap/Tracker/Field/UsersSelectBox.php',
                'bz2tuleap\\tuleap\\tracker\\rule\\listrule' => '/Bz2Tuleap/Tuleap/Tracker/Rule/ListRule.php',
                'bz2tuleap\\tuleap\\tracker\\rule\\listrules' => '/Bz2Tuleap/Tuleap/Tracker/Rule/ListRules.php',
                'bz2tuleap\\tuleap\\tracker\\rule\\rules' => '/Bz2Tuleap/Tuleap/Tracker/Rule/Rules.php',
                'bz2tuleap\\tuleap\\tracker\\semantic\\assignedto' => '/Bz2Tuleap/Tuleap/Tracker/Semantic/AssignedTo.php',
                'bz2tuleap\\tuleap\\tracker\\semantic\\status' => '/Bz2Tuleap/Tuleap/Tracker/Semantic/Status.php',
                'bz2tuleap\\tuleap\\tracker\\semantic\\title' => '/Bz2Tuleap/Tuleap/Tracker/Semantic/Title.php',
                'bz2tuleap\\xml\\cdata' => '/Bz2Tuleap/XML/CData.php',
                'bz2tuleap\\xml\\supportedencoding' => '/Bz2Tuleap/XML/SupportedEncoding.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd