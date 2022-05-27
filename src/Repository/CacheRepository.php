<?php

namespace App\Repository;

interface CacheRepository
{
    /**
     * Get value by key
     * 
     * @return mixed
     */
    public function get(string $key);

    /**
     * Set value
     */
    public function set(string $key, $value);

    /**
     * Check if key exists
     * 
     * @return bool
     */
    public function has(string $key);

    /**
     * Delete key
     */
    public function delete(string $key);

    /**
     * Flush all keys
     */
    public function clear();
}
