<?php

require ("Model/storeModel.php");

class merchController {

    function CreateMerchDropdownList() {
        $storeModel = new storeModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                    Please select a type:
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($storeModel->GetMerchTypes()) .
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }

    function CreateMerchTables($types)
    {
        $storeModel = new storeModel();
        $merchArray = $storeModel->GetMerchByType($types);
        $result = "";

        foreach ($merchArray as $key => $merch)
        {
            $result = $result .
                    "<table class = 'merchTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$merch->image' /></th>
                            <th width = '75px' >Name: </th>
                            <td>$merch->name</td>
                        </tr>

                        <tr>
                            <th>Type: </th>
                            <td>$merch->type</td>
                        </tr>

                        <tr>
                            <th>Price: </th>
                            <td>$merch->price</td>
                        </tr>

                        <tr>
                            <th>Roast: </th>
                            <td>$merch->size</td>
                        </tr>
                        <tr>
                            <td colspan='2' >$merch->review</td>
                        </tr>
                     </table>";
        }
        return $result;

    }

}

?>
