<?php
class DB {
    private PDO $conn;

    public function __construct(PDO $connection) {
        $this->conn = $connection;
    }

    /**
     * Exécute une requête SQL générique
     * @param string $sql : requête SQL avec des placeholders `?`
     * @param array $params : valeurs à injecter (facultatif)
     * @return mixed : tableau (SELECT), booléen (INSERT/UPDATE/DELETE), ou exception
     */
    public function query(string $sql, array $params = []): mixed {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);

        if (str_starts_with(strtoupper($sql), 'SELECT')) {
            return $stmt->fetchAll();
        }

        return true;
    }
}
?>
