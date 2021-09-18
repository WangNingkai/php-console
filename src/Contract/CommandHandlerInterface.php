<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-12-18
 * Time: 18:57
 */

namespace Inhere\Console\Contract;

use Inhere\Console\AbstractApplication;

/**
 * Interface CommandHandlerInterface
 *
 * @package Inhere\Console\Contract
 */
interface CommandHandlerInterface
{
    public const OK  = 0;

    public const ERR = 2;

    // name -> {name}
    public const ANNOTATION_VAR = '{%s}'; // '{$%s}';

    // {$%s} name -> {name}
    public const HELP_VAR_LEFT  = '{';

    public const HELP_VAR_RIGHT = '}';

    /**
     * Run command
     *
     * @param array $args
     *
     * @return int|mixed return int is exit code. other is command exec result.
     */
    public function run(array $args);

    /**
     * @return AbstractApplication|ApplicationInterface
     */
    public function getApp(): AbstractApplication;

    /**
     * @return string
     */
    public function getGroupName(): string;

    /**
     * Alias of the getName()
     *
     * @return string
     */
    public function getRealName(): string;

    /**
     * @return string
     */
    public function getCommandName(): string;

    /**
     * @return string
     */
    public static function getName(): string;

    /**
     * @return string
     */
    public static function getDesc(): string;
}
