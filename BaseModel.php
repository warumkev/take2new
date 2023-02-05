<?php

include './includes/DatabaseFactory.php';
class BaseModel
{
    private $dbconn;

    public function __construct()
    {
        $this->dbconn = DatabaseFactory::getDatabaseConnection();
    }

    public function getAll(string $table): array
    {
        $stmt = $this->dbconn->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne(string $table, string $id): array
    {
        $stmt = $this->dbconn->prepare("SELECT * FROM $table WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getByColumnValue(string $table, string $column, string $value): array|bool
    {
        $stmt = $this->dbconn->prepare("SELECT * FROM $table WHERE $column = :value");
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create(string $table, array $data): bool
    {
        $keys = array_keys($data);
        $values = array_values($data);
        $stmt = $this->dbconn->prepare("INSERT INTO $table (" . implode(",", $keys) . ") VALUES (" . implode(",", array_map(fn($value) => ":$value", $keys)) . ")");
        foreach ($values as $key => $value) {
            if ($value == "false" || $value == "true") {
                $stmt->bindValue(":$keys[$key]", $value, PDO::PARAM_BOOL);
            } else if (is_int($value)) {
                $stmt->bindValue(":$keys[$key]", $value, PDO::PARAM_INT);
            } else if (is_null($value)) {
                $stmt->bindValue(":$keys[$key]", $value, PDO::PARAM_NULL);
            } else {
                $stmt->bindValue(":$keys[$key]", $value);
            }
        }
        return $stmt->execute();
    }

    public function update(string $table, array $data, string $id): bool
    {
        $keys = array_keys($data);
        $values = array_values($data);
        $stmt = $this->dbconn->prepare("UPDATE $table SET " . implode(",", array_map(fn($value) => "$value = :$value", $keys)) . " WHERE id = :id");
        foreach ($values as $key => $value) {
            if ($value == "false" || $value == "true") {
                $stmt->bindParam(":$keys[$key]", $value, PDO::PARAM_BOOL);
            } else if (is_int($value)) {
                $stmt->bindParam(":$keys[$key]", $value, PDO::PARAM_INT);
            } else if (is_null($value)) {
                $stmt->bindParam(":$keys[$key]", $value, PDO::PARAM_NULL);
            } else {
                $stmt->bindParam(":$keys[$key]", $value);
            }
        }
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public function delete(string $table, string $id): bool
    {
        $stmt = $this->dbconn->prepare("DELETE FROM $table WHERE id = :id");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public function where($table, string $column, string $value): array
    {
        $stmt = $this->dbconn->prepare("SELECT * FROM $table WHERE $column = :value");
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            return array();
        }
        return $result;
    }

    public function allWhere($table, string $column, string $value): array
    {
        $stmt = $this->dbconn->prepare("SELECT * FROM $table WHERE $column = :value");
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!$result) {
            return array();
        }
        return $result;
    }

    public function checkLogin(string $username, string $password): bool
    {
        $stmt = $this->dbconn->prepare("SELECT * FROM public.sellers WHERE username = :user AND userpassword = :pass");
        $stmt->bindParam(":user", $username);
        $stmt->bindParam(":pass", $password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        }

        return false;
    }

}