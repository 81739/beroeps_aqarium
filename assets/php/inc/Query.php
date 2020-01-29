<?php

class Query extends DBC {

    //Only Select query
    public function ShowData($SQLQuery){

        $SelectQuery="$SQLQuery";
        $PrepareData = $this->Connect()->query($SelectQuery);

        while($FetchData = $PrepareData->fetch(PDO::FETCH_ASSOC)){
            $data[] = $FetchData;
        }
        return $data;
    }

    //Only Delete row
    public function DeleteData($DeleteFROM, $IDRow){

        $DeleteQuery = "DELETE FROM $DeleteFROM WHERE id=:id";
        $PrepareDelete = $this->Connect()->prepare($DeleteQuery);
        $PrepareDelete->bindValue(':id', $IDRow);
        $PrepareDelete->execute();
        return true;
    }
}