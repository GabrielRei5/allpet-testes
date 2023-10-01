<?php
interface PeopleRepositoryInterface{

    public function checkTable(): bool;

    public function save(People $pessoa): array;

    public function getByCpf(string $cpf): ?People;

    public function getAll(): array;

    public function delete(People $pessoa): bool;

    public function search(string $query): array;

    public function update(People $pessoa): void;
}