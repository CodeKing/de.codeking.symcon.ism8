<?php
// include autoloader
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/libs/helpers/autoload.php');

// define guids
if (!defined('ISM_SPLITTER')) {
    define('ISM_SPLITTER', '{0C6ECED2-07C1-475A-9DCA-0999882B53FB}');
}

if (!defined('ISM_SPLITTER_RX')) {
    define('ISM_SPLITTER_RX', '{C2E295FC-4338-4BE1-AC57-62633C9E4CE3}');
}

/**
 * Class ISM8
 * IP-Symcon Wolf ISM8 device module
 *
 * @version     1.1
 * @category    Symcon
 * @package     de.codeking.symcon.ism8
 * @author      Frank Herrmann <frank@codeking.de>
 * @link        https://codeking.de
 * @link        https://github.com/CodeKing/de.codeking.symcon.ism8
 *
 */
class ISM8Device extends Module
{
    use InstanceHelper,
        WolfHelper;

    /**
     * execute, when kernel is ready or on ApplyChanges()
     */
    protected function onKernelReady()
    {
        // connect parent splitter
        if (!$this->HasActiveParent()) {
            $this->ConnectParent(ISM_SPLITTER);
        }

        // enable actions
        $this->enableActions();

        // set active
        $this->SetStatus(102);
    }

    /**
     * Enable actions by '_action' suffix in variable ident
     */
    private function enableActions()
    {
        // get all children ids
        $childrens = IPS_GetChildrenIDs($this->InstanceID);
        foreach ($childrens AS $children_id) {
            // check, if children id is a variable
            if ($variable = IPS_GetVariable($children_id)) {
                // get variable data
                $object = IPS_GetObject($children_id);

                // enable action, if '_action' is at the end of ident
                if (strpos($object['ObjectIdent'], '_action') === strlen($object['ObjectIdent']) - 7) {
                    $this->force_ident = true;
                    $this->EnableAction($object['ObjectIdent']);
                }
            }
        }
    }

    /**
     * Request action from webfront
     * @param string $Ident
     * @param mixed $Value
     * @return bool|void
     */
    public function RequestAction($Ident, $Value)
    {
        // get variable id by ident
        $variable_id = $this->GetIDForIdent($Ident);

        // set value
        SetValue($variable_id, $Value);

        // get variable data
        $object = IPS_GetObject($variable_id);

        // extract datapoint id
        $ident_parts = explode('_', $object['ObjectIdent']);
        $datapoint_id = $ident_parts[1];

        // write telegram
        $this->Write($datapoint_id, $Value);
    }
}