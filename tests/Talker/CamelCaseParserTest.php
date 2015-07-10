<?php
/**
 * This file is part of the Talker package.
 *
 * (c) Nicola Pietroluongo <nik.longstone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Talker\Test;

use Talker\CamelCaseParser;

class CamelCaseParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider textProvider
     */
    public function testParse($textToParse, $expectation)
    {
        $parser = new CamelCaseParser();
        $parse = $parser->parse($textToParse);
        $result = implode(' ', $parse);
        $this->assertEquals($expectation, $result);
    }

    public function textProvider()
    {
        return array(
            array('firstSecond', 'first Second'),
            array('firstSecondThirdfoo', 'first Second Thirdfoo')
        );
    }
}