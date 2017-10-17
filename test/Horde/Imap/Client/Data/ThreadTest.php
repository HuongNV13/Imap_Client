<?php
/**
 * Copyright 2015-2017 Horde LLC (http://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see http://www.horde.org/licenses/lgpl21.
 *
 * @category   Horde
 * @copyright  2015-2016 Horde LLC
 * @license    http://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package    Imap_Client
 * @subpackage UnitTests
 */

/**
 * Tests for the thread data object.
 *
 * @author     Michael Slusarz <slusarz@horde.org>
 * @category   Horde
 * @copyright  2015-2016 Horde LLC
 * @ignore
 * @license    http://www.horde.org/licenses/lgpl21 LGPL 2.1
 * @package    Imap_Client
 * @subpackage UnitTests
 */
class Horde_Imap_Client_Data_ThreadTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider countProvider
     */
    public function testCount($thread, $expected)
    {
        $this->assertEquals(
            $expected,
            count($thread)
        );
    }

    public function countProvider()
    {
        return array(
            array(
                new Horde_Imap_Client_Data_Thread(array(), 'uid'),
                0
            ),
            array(
                new Horde_Imap_Client_Data_Thread(
                    array(array(1 => 0), array(2 => 0), array(3 => 0)),
                    'uid'
                ),
                3
            ),
            array(
                new Horde_Imap_Client_Data_Thread(
                    json_decode(
                        '[{"8":0,"10":1,"12":1,"15":2,"7":2,"9":2,"11":3,"13":4,"14":5,"20":6,"23":7,"25":8,"27":9,"16":4},{"18":0,"21":1,"24":2,"26":3,"28":2,"29":3,"17":4,"19":5,"22":2},{"33":0,"35":1,"30":2,"34":2,"32":3,"31":4,"36":1},{"41":0,"38":1,"37":2,"39":0,"40":1,"42":2},{"5":0,"4":1,"6":1,"1":0,"2":1,"3":2},{"45":0,"44":0,"47":0,"46":0},{"48":0,"49":1,"50":2,"51":3,"52":4,"171":4,"170":3,"169":2,"168":1,"167":0,"53":0,"172":0,"54":0,"173":0},{"55":0,"56":1,"175":1,"174":0,"57":0,"176":0,"58":0,"177":0},{"151":0,"152":1,"153":2,"154":3,"156":4,"157":5,"155":2},{"59":0,"178":0},{"60":0,"179":0},{"61":0,"180":0},{"62":0,"181":0},{"158":0,"159":0,"160":1,"163":2,"164":1,"166":2},{"161":0,"162":1,"165":2},{"63":0,"64":1,"66":2,"67":2,"69":3,"70":4,"68":2,"71":3,"72":3,"65":0},{"73":0,"74":1,"75":0,"76":1,"77":1,"78":2,"79":1,"80":2,"81":3,"82":0,"83":1,"84":2,"85":0,"86":0},{"87":0,"88":1,"89":1,"90":1,"92":2,"101":3,"95":2,"97":3,"99":4,"100":5,"111":5,"102":4,"91":1,"93":1,"98":2,"94":1,"96":2,"110":2,"115":3,"127":4,"128":5,"129":6,"134":4,"116":3,"117":3,"119":4,"120":5,"121":6,"122":7,"123":8,"124":9,"125":10,"133":10,"138":11,"130":8,"132":9,"135":9,"131":5,"136":6,"137":7,"139":7,"118":3,"103":1,"104":2,"105":1,"106":2,"107":3,"109":4,"113":5,"126":5,"112":4,"114":5,"140":4,"108":1},{"141":0,"142":0,"143":1,"144":2,"146":3,"147":3,"145":0,"150":1,"148":0,"149":0},{"182":0,"183":1,"184":2,"185":3,"186":4,"190":5,"187":1,"188":2,"189":3,"191":4},{"192":0,"193":1,"194":2,"195":3,"196":4,"197":5,"198":6,"199":6,"202":7,"204":7,"207":8,"208":9,"209":9,"201":6,"203":7,"205":7,"210":6,"211":7,"212":7,"200":1,"206":2},{"213":0,"225":1,"237":2,"214":0,"215":1,"217":2,"228":2,"216":1,"218":2,"219":3,"221":4,"226":5,"220":3,"222":4,"223":0,"224":0,"227":1,"229":2,"230":2,"231":3,"233":4,"236":5,"232":3,"234":4,"235":5},{"238":0,"239":1,"240":2,"241":3,"242":4,"243":5,"244":5,"245":6,"246":6,"247":7,"248":8,"249":9,"251":9,"255":10,"250":8,"252":9,"253":10,"254":11,"258":12,"259":13,"260":14,"261":15,"262":16,"263":17,"266":18,"264":16,"265":17,"268":18,"267":17,"269":12,"256":11,"257":12},{"270":0,"271":1,"272":2,"273":3,"277":4,"281":5,"285":6,"286":7,"288":7,"289":4,"290":5,"291":6,"292":5,"274":3,"275":4,"276":5,"278":6,"279":7,"280":7,"283":8,"282":5,"287":4,"293":5,"306":6,"284":3},{"294":0,"295":1,"298":2,"299":3,"296":1,"297":2,"300":3},{"301":0,"302":0,"316":1,"318":2,"326":3,"303":0,"304":1,"305":2,"307":3,"308":3,"323":4,"310":5,"321":6,"322":5,"324":5,"313":6,"312":4,"314":3,"309":1,"319":2,"315":3,"320":4,"317":1,"325":1},{"311":0,"327":1,"328":2,"329":3,"330":4,"331":4,"335":5,"341":6,"343":5,"344":6},{"332":0,"333":1,"338":1,"334":0,"336":1,"337":1,"339":0,"340":0,"342":0}]',
                        true
                    ),
                    'uid'
                ),
                343
            )
        );
    }

}
