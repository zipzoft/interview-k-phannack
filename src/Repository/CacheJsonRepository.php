<?php

namespace App\Repository;


class CacheJsonRepository implements CacheRepository
{
    /**
     * File path to store cache
     * 
     * @var string
     */
    private $filePath;


    public function __construct()
    {
        // Default file path
        $this->filePath = storage_path('data/cache.json');
    }

    /**
     * Get value by key
     */
    public function get(string $key)
    {
        if (file_exists($this->filePath)) {
            $data = @json_decode(file_get_contents($this->filePath), true);

            if (isset($data[$key])) {
                return $data[$key];
            }
        }

        return null;
    }

    /**
     * Set value
     */
    public function set(string $key, $value)
    {
        $data = [];

        if (file_exists($this->filePath)) {
            $data = @json_decode(file_get_contents($this->filePath), true);
        }

        $data[$key] = $value;

        file_put_contents($this->filePath, json_encode($data));
    }

    /**
     * Check if key exists
     */
    public function has(string $key)
    {
        return $this->get($key) !== null;
    }

    /**
     * Delete key
     */
    public function delete(string $key)
    {
        if (file_exists($this->filePath)) {
            $data = @json_decode(file_get_contents($this->filePath), true);

            if (isset($data[$key])) {
                unset($data[$key]);

                file_put_contents($this->filePath, json_encode($data));
            }
        }
    }

    /**
     * Flush all keys
     */
    public function clear()
    {
        if (file_exists($this->filePath)) {
            unlink($this->filePath);
        }
    }
}
