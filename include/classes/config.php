<?php
//========================================================================
// Author:  Pascal KISSIAN
// Resume:  http://pascal.kissian.net
//
// Copyright (c) 2015 Pascal KISSIAN
//
// Published under the MIT License
//          Consider it as a proof of concept!
//          No warranty of any kind.
//          Use and abuse at your own risks.
//========================================================================

// when we use the word ignore, that means that it is ignored during the obfuscation process (i.e. not obfuscated)

class Config
{
    public $t_ignore_module_methods     = array('core', 'Exception', 'PDO');    // array where values are internal known module names.

    public $t_ignore_constants          = null;         // array where values are names to ignore.
    public $t_ignore_variables          = null;         // array where values are names to ignore.
    public $t_ignore_functions          = null;         // array where values are names to ignore.
    public $t_ignore_methods            = null;         // array where values are names to ignore.
    public $t_ignore_properties         = null;         // array where values are names to ignore.
    public $t_ignore_classes            = null;         // array where values are names to ignore.
    public $t_ignore_interfaces         = null;         // array where values are names to ignore.
    public $t_ignore_traits             = null;         // array where values are names to ignore.
    public $t_ignore_namespaces         = null;         // array where values are names to ignore.
    public $t_ignore_labels             = null;         // array where values are names to ignore.

    public $t_ignore_constants_prefix   = null;         // array where values are prefix of names to ignore.
    public $t_ignore_variables_prefix   = null;         // array where values are prefix of names to ignore.
    public $t_ignore_functions_prefix   = null;         // array where values are prefix of names to ignore.
    public $t_ignore_methods_prefix     = null;         // array where values are prefix of names to ignore.
    public $t_ignore_properties_prefix  = null;         // array where values are prefix of names to ignore.
    public $t_ignore_classes_prefix     = null;         // array where values are prefix of names to ignore.
    public $t_ignore_interfaces_prefix  = null;         // array where values are names to ignore.
    public $t_ignore_traits_prefix      = null;         // array where values are names to ignore.
    public $t_ignore_namespaces_prefix  = null;         // array where values are prefix of names to ignore.
    public $t_ignore_labels_prefix      = null;         // array where values are prefix of names to ignore.


    public $scramble_mode               = 'identifier'; // allowed modes are identifier, hexa, numeric
    public $scramble_length             = null;         // min length of scrambled names (max = 16 for identifier, 32 for hexa and numeric)

    public $t_obfuscate_php_extension   = array('php');

    public $obfuscate_constant_name     = true;         // self explanatory
    public $obfuscate_variable_name     = true;         // self explanatory
    public $obfuscate_function_name     = true;         // self explanatory
    public $obfuscate_class_name        = true;         // self explanatory
    public $obfuscate_interface_name    = true;         // self explanatory
    public $obfuscate_trait_name        = true;         // self explanatory
    public $obfuscate_property_name     = true;         // self explanatory
    public $obfuscate_method_name       = true;         // self explanatory
    public $obfuscate_namespace_name    = true;         // self explanatory
    public $obfuscate_label_name        = true;         // label: , goto label;  obfuscation
    public $obfuscate_if_statement      = true;         // obfuscate if else elseif statements
    public $obfuscate_loop_statement    = true;         // obfuscate for while do while statements
    public $obfuscate_string_literal    = true;         // pseudo-obfuscate string literals

    public $strip_indentation           = true;         // all your obfuscated code will be generated on a single line
    public $abort_on_error              = true;         // self explanatory
    public $confirm                     = true;         // rfu : will answer Y on confirmation request (reserved for future use ... or not...)
    public $silent                      = false;        // display or not Information level messages.

    public $t_keep                      = false;        // array of directory or file pathnames to keep 'as is' ...  i.e. not obfuscate.
    public $t_skip                      = false;        // array of directory or file pathnames to skip when exploring source tree structure ... they will not be on target!

    public $source_directory            = null;         // self explanatory
    public $target_directory            = null;         // self explanatory

    public $user_comment                = null;         // user comment to insert inside each obfuscated file

    public $extract_comment_from_line   = null;         // when both 2 are set, each obfuscated file will contain an extract of the corresponding source file,
    public $extract_comment_to_line     = null;         // starting from extract_comment_from_line number, and endng at extract_comment_to_line line number.

    private $comment                    = '';

    function __construct()
    {
        $this->comment .= "/*   ________________________________________________".PHP_EOL;
        $this->comment .= "    |    Obfuscated by YAK Pro - Php Obfuscator      |".PHP_EOL;
        $this->comment .= "    |  GitHub: https://github.com/pk-fr/yakpro-po    |".PHP_EOL;
        $this->comment .= "    |________________________________________________|".PHP_EOL;
        $this->comment .= "*/".PHP_EOL;
    }

    public function get_comment() { return $this->comment; }
}

?>