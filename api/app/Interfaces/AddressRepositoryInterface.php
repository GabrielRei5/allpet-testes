<?php
interface AddressRepositoryInterface{

    public function checkTable(): bool;

    public function save(Address $address): array;

    public function getById(int $addressId): ?Address;

    public function getAll(): array;

    public function delete(Address $address): bool;

    public function search(string $query): array;

    public function update(Address $address): void;
}