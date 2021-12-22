<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Rexel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MsgFormatType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MsgFormatType
 * @subpackage Enumerations
 */
class MsgFormatType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'INSBOU'
     * @return string 'INSBOU'
     */
    const VALUE_INSBOU = 'INSBOU';
    /**
     * Constant for value 'D96A'
     * @return string 'D96A'
     */
    const VALUE_D_96_A = 'D96A';
    /**
     * Constant for value 'KETENSTANDAARD'
     * @return string 'KETENSTANDAARD'
     */
    const VALUE_KETENSTANDAARD = 'KETENSTANDAARD';
    /**
     * Constant for value 'CUSTOM'
     * @return string 'CUSTOM'
     */
    const VALUE_CUSTOM = 'CUSTOM';
    /**
     * Constant for value 'SALES'
     * @return string 'SALES'
     */
    const VALUE_SALES = 'SALES';
    /**
     * Constant for value 'ETIM'
     * @return string 'ETIM'
     */
    const VALUE_ETIM = 'ETIM';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const VALUE_NONE = 'NONE';
    /**
     * Constant for value 'ICM'
     * @return string 'ICM'
     */
    const VALUE_ICM = 'ICM';
    /**
     * Constant for value 'ICK'
     * @return string 'ICK'
     */
    const VALUE_ICK = 'ICK';
    /**
     * Constant for value 'ICF'
     * @return string 'ICF'
     */
    const VALUE_ICF = 'ICF';
    /**
     * Return allowed values
     * @uses self::VALUE_INSBOU
     * @uses self::VALUE_D_96_A
     * @uses self::VALUE_KETENSTANDAARD
     * @uses self::VALUE_CUSTOM
     * @uses self::VALUE_SALES
     * @uses self::VALUE_ETIM
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ICM
     * @uses self::VALUE_ICK
     * @uses self::VALUE_ICF
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INSBOU,
            self::VALUE_D_96_A,
            self::VALUE_KETENSTANDAARD,
            self::VALUE_CUSTOM,
            self::VALUE_SALES,
            self::VALUE_ETIM,
            self::VALUE_UNKNOWN,
            self::VALUE_NONE,
            self::VALUE_ICM,
            self::VALUE_ICK,
            self::VALUE_ICF,
        ];
    }
}
