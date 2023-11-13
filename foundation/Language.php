<?php

namespace Foundation;

class Language {
    protected $currentLanguage;
    protected $translations = [];

    public function __construct($language = 'en') {
        $this->currentLanguage = $language;
        $this->loadTranslations();
    }

    protected function loadTranslations() {
        $filePath = 'lang/' . $this->currentLanguage . '.php';
        if (file_exists($filePath)) {
            $this->translations = include $filePath;
        }
    }

    public function get($key) {
        return $this->translations[$key] ?? $key;
    }
}
