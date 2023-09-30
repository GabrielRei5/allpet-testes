<?php
interface TutorRepositoryInterface{

    public function checkTable(): bool;

    public function save(Tutor $tutor): array;

    public function getById(int $Id): ?Tutor;

    public function getAll(): array;

    public function delete(Tutor $tutor): bool;

    public function search(string $query, string $type): array;

    public function update(Tutor $tutor): array;
}