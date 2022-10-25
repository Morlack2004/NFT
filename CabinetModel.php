<?php

class CabinetModel extends Model {
    public function getCollectionsCount() {
        $sql = "SELECT COUNT(*) FROM collections";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchcolumn();
        return $res;


    }

    public function getNftCount() {
        $sql = "SELECT COUNT(*) FROM nft";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchcolumn();
        return $res;


    }

    public function getUsersCount() {
        $sql = "SELECT COUNT(*) FROM users";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchcolumn();
        return $res;


    }


}