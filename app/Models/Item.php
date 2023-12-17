<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

class Item
{
    private static $filePath = 'items.txt';

    public static function all()
    {
        $items = self::readFromFileTxt();
        return $items;
    }

    public static function findByEmail($email)
    {
        $items = self::readFromFileTxt();
        foreach ($items as $item) 
        {
            if ($item['email'] === $email) 
            {
                return $item;
            }
        }
        return null;
    }

    public static function create($data)
    {
        $items = self::readFromFileTxt();
        $data['id'] = count($items) + 1; //tentativa de autoincrement como id
        $items[] = $data;
        self::writeOnFile($items);

        return end($items);
    }

    public static function update($email, $data)
    {
        $items = self::readFromFileTxt();
        foreach ($items as &$item) 
        {
            if ($item['email'] === $email) 
            {
                $item = array_merge($item, $data);
                self::writeOnFile($items);
                return $item;
            }
        }

        return null;
    }

    public static function delete($email)
    {
        $items = self::readFromFileTxt();
        foreach ($items as $key => $item) 
        {
            if ($item['email'] === $email) 
            {
                unset($items[$key]);
                self::writeOnFile($items);
                return true;
            }
        }

        return false;
    }

    private static function readFromFileTxt()
    {
        if (File::exists(self::$filePath)) 
        {
            $content = file_get_contents(self::$filePath);
            $lines = explode(PHP_EOL, $content);

            $items = [];
            foreach ($lines as $line) 
            {
                $fields = explode(',', $line);

                if (count($fields) === count(['id', 'nome', 'sobrenome', 'email', 'telefone'])) 
                {
                    $item = array_combine(['id', 'nome', 'sobrenome', 'email', 'telefone'], $fields);
                    $items[] = array_filter($item); 
                }
            }

            return $items;
        }

        return [];
    }

    private static function writeOnFile($items)
    {
        $lines = array_map(function ($item) 
        {
            return implode(',', $item);
        }, $items);

        $content = implode(PHP_EOL, $lines);
        file_put_contents(self::$filePath, $content);
    }
}