<?php  

namespace Piranha\CmsImporter\Model\Block;

/**
 * Class Converter
 */
class ConverterToArray
{
    /**
     * Convert CSV format row to array
     *
     * @param array $row
     * @return array
     */
    public function convertRow($row)
    {
        $data = [];
        foreach ($row as $field => $value) {
            $data['block'][$field] = $value;
        }
        return $data;
    }
}
