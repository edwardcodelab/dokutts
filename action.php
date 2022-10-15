<?php
/**
 * DokuWiki Plugin dokutts (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  dodotori <dodotori@localhost>
 */
class action_plugin_dokutts extends \dokuwiki\Extension\ActionPlugin
{

    /** @inheritDoc */
    public function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'handle_toolbar_define',array());
       // $controller->register_hook('TPL_METAHEADER_OUTPUT', 'BEFORE', $this,'_hookjs');

    
    }

    /**
     * FIXME Event handler for
     *
     * @param Doku_Event $event  event object by reference
     * @param mixed      $param  optional parameter passed when event was registered
     * @return void
     */
    public function handle_toolbar_define(Doku_Event $event, $param)
    {
         $event->data[] = array (
            'type' => 'dokutts',
            'title' => $this->getLang('qb_abutton'),
            'icon' => '../../plugins/dokutts/dokutts.ico',
          );    
    }



    
 


}